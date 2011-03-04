<?php
/**
 * This class is used to work with Maerdo  dynamics titles.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Title {
	/**
	 * Return list of title for a page.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Framework_Title::getList('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array array with title fields 
	 */
	static public function getList($page_id=NULL) {
		$mtitle=new Maerdo_Model_Pagetitle();

		$titles=$mtitle->findByField('page_id',$page_id,$mtitle);
		$result=array();
		foreach($titles as $key=>$title) {
			$titleArray=$title->toArray();
			$result[$key]=$titleArray;
			$language_name=My_Class_Maerdo_Locale::getNameFromLocale($titleArray['locale']);			
			$result[$key]['language_name']=$language_name;
		}				
		
		return($result);
	}
	
	/**
	 * Return list of free locale for title of a page.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Framework_Title::getFreeLocales('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array array with free locales 
	 */
	static public function getFreeLocales($page_id) {
		$mTranslate=new Maerdo_Model_Componenttranslate();		
		$locales=$mTranslate->getLocales();
		foreach($locales as $key=>$locale) {
			$aLocale[$locale['locale']]=$locale['language_name'];
		}
		
		$mtitle=new Maerdo_Model_Pagetitle();
		$titles=$mtitle->findByField('page_id',$page_id,$mtitle);

		$titleLocales=array();
		foreach($titles as $key=>$title) {
			$titleLocales[$title->locale]=$aLocale[$title->locale];
		}
		
		$result=array();
		$result=array_diff($aLocale,$titleLocales);
		return($result);
	}
		
	/**
	 * Add an title.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Title::add('1','fr_FR','My Page Title');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @param $locale  name of locale of title
	 * @param $title Title of page
	 * @return mixed (-1 action already exist or true if action was added)
	 */	
	static public function add($page_id,$locale,$title) {
		$mTitle=new Maerdo_Model_Pagetitle();		
		return($mTitle->insert(array('page_id'=>$page_id,'locale'=>$locale,'value'=>$title)));
	}

	
	/**
	 * Update titles for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Title::update('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function update($titles,$page_id) {

		$mTitle=new Maerdo_Model_Pagetitle();
		
		$mTitle->delete("page_id='$page_id'");

		foreach($titles as $title) {
			
			if(self::add($page_id,$title['locale'],$title['title'])==0)
				return false;			
		}	
		return(true);
	}	
}	
	