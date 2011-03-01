<?php
/**
 * This class is used to work with Maerdo pages dynamics meta-tags.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Metatag {
	/**
	 * Return list of meta-tags for a page.
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework_Metatag::getList('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array  array with meta-tag fields 
	 */
	static public function getList($page_id) {
		$mMeta=new Maerdo_Model_Pagemeta();
		$metas=$mMeta->findByField('page_id',$page_id,$mMeta);	
		$result=array();
		foreach($metas as $key=>$meta) {
			$metaArray=$meta->toArray();
			$result[$key]=$metaArray;
			$language_name=My_Class_Maerdo_Locale::getNameFromLocale($metaArray['locale']);			
			$result[$key]['language_name']=$language_name;
		}		
		return($result);
	}
	
	/**
	 * Add a metaTag
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework_Metatag::add('fr_FR','keywords','1','ordinateur,ordinateur de bureau,commerce,shopping');
	 * </code>
	 * 
	 * @param $locale Locale of added tag
	 * @param $metatag Meta-tag
	 * @param $page_id  Maerdo database page id
	 * @param $value Value of meta-tag
	 * @return boolean
	 */
	static public function add($locale,$metatag,$page_id,$value='') {
		$mMeta=new Maerdo_Model_Pagemeta();
		return($mMeta->insert(array('page_id'=>$page_id,'value'=>$value,'locale'=>$locale,'meta'=>$metatag)));
	}	

	/**
	 * Delete a metaTag
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework_Metatag::delete('fr_FR','keywords','1');
	 * </code>
	 * 
	 * @param @locale Locale of entrie to delete
	 * @param meta-tag Meta-tag of entrie to delete
	 * @param $page_id  Maerdo database page id of entrie to delete
	 * @return boolean
	 */
	static public function delete($locale,$metatag,$page_id) {
		$mMeta=new Maerdo_Model_Pagemeta();
		$where="page_id ='$page_id' AND locale='$locale' AND meta='$metatag'";
		return($mMeta->delete($where));
	}		
	
	/**
	 * Return list of free locale for a meta tag of a page.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Framework_Metatag::getFreeLocales('1','keywords');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array array with free locales 
	 */
	static public function getFreeLocales($page_id,$metatag) {
		$mLocale=new Maerdo_Model_Locale();
		$locales=$mLocale->fetchAll();
		foreach($locales as $key=>$locale) {
			$aLocale[$locale->locale]=$locale->language_name;
		}
		
		$mMetatag=new Maerdo_Model_Pagemeta();
		$metas=$mMetatag->findByField('page_id',$page_id,$mMetatag);

		$metaLocales=array();
		foreach($metas as $key=>$meta) {			
			if($meta->meta==$metatag)
				$metaLocales[$meta->locale]=$aLocale[$meta->locale];
		}				
		
		$result=array();		
		$result=array_diff($aLocale,$metaLocales);		
		return($result);
	}
	
	
	/**
	 * Update Metatag for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Framework_Metatag::update($meta,'1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function update($metas,$page_id) {

		$mMeta=new Maerdo_Model_Pagemeta();		
		$mMeta->delete("page_id='$page_id'");
		

		
		foreach($metas as $meta) {

			if(self::add($meta['locale'],$meta['meta'],$page_id,$meta['value'])==0)
				return false;			
		}	
		return(true);
	}		
}