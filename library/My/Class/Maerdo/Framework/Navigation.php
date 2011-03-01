<?php
/**
 * This class is used to work with Pages navigation.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Navigation {
	/**
	 * Retourn navigation informations for a page.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Framework_Navigation::retrievesInfos($page_id);
	 * </code>
	 * 
	 * @return Object Navigation model 
	 */
	static public function retrievesInfos($page_id) {
		$mNavigation=new Maerdo_Model_Pagenavigation();
		$result=$mNavigation->find($page_id);
		return($result);
	}
	
	/**
	 * Add Navigation entrie for a page
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework_Navigation::add('Home','0','1');
	 * </code>
	 * 
	 * @param $label Page label
	 * @param $parent Maerdo database id of parent Page
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */
	static public function add($label,$parent,$page_id) {

		$mMeta=new Maerdo_Model_Pagenavigation();
		return($mMeta->insert(array('page_id'=>$page_id,'label'=>$label,'parent_id'=>$parent)));
	}	

	/**
	 * Delete Navigaton entrie for a page
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework_Navigation::delete($page_id);
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */
	static public function delete($page_id) {
		$mNavigation=new Maerdo_Model_Pagenavigation();
		$where="page_id ='$page_id'";
		return($mNavigation->delete($where));
	}		
				
	/**
	 * Update Navigation informations for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Navigation::update($navigation,$page_id);
	 * </code>
	 * 
	 * @param $navigations Navigation informations
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function update($navigation,$page_id) {		
		$mNavigation=new Maerdo_Model_Pagenavigation();		
		$mNavigation->delete("page_id='$page_id'");		
		
		if(self::add($navigation['label'],$navigation['parent'],$page_id)==0)
			return false;			
		else	
			return true;
	}			
}