<?php 
/**
 * This class is used to work with Maerdo pages.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Page {
	/**
	 * Retrieve Pages.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::getList('1','1');
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module id
	 * @param $controller_id Maerdo database controller id
	 * @return array array with controllers data
	 */		
	static function getList($module_id=NULL,$controller_id=NULL) {
		$mPage=new Maerdo_Model_Page();
		$pages=$mPage->retrievePages($module_id,$controller_id);
		return($pages);
	}
	/**
	 * Delete a Page
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::delete('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function delete($page_id) {
		$mPage=new Maerdo_Model_Page();
		$result=(int) $mPage->deleteByPrimarykey($page_id);
		return($result);
	}
	/**
	 * add a Page
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::add('1','1','1','homepage','/','Home Page');
	 * 
	 * @param $module_id Maerdo database module id
	 * @param $controller_id Maerdo database controller id
	 * @param $action_id Maerdo database action id
	 * @param $name  Page name (identifiant for route)
	 * @param $url Url of page (Route format)
	 * @param $description Description of page
	 * @return boolean
	 */		
	static  public function add($module_id,$controller_id,$action_id,$name,$url,$description) {
		$mPage=new Maerdo_Model_Page();
		try {
			$result=$mPage->insert(array('module_id'=>$module_id,
									'controller_id'=>$controller_id,
									'action_id'=>$action_id,
									'name'=>strtolower($name),
									'url'=>strtolower($url),
									'description'=>$description));
		} catch(Exception $e) {
			$result="0";
		}
		return($result);
	}
	
	/**
	 * Update a Page
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::update($data,'1');
	 * 
	 * @param $data Page informations
	 * @param $controller_id Maerdo database controller id
	 * @return boolean
	 */			
	static  public function update($data,$id) {
		$mPage=new Maerdo_Model_Page();
		try {								
			$result=$mPage->update($data,"id='$id'");			
		} catch(Exception $e) {
			var_dump($e);
			$result="0";
		}
		return($result);
	}	
	
	/**
	 * Check if an URL exist
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::checkURL('/index');
	 * 
	 * @param $url Url to test	 
	 * @return int number of URL matchted
	 */		
	static public function checkURL($url) {
		$url=str_replace('!','/',$url);		
		$mPage=new Maerdo_Model_Page();
		$result=$mPage->findByField('url',$url,$mPage);				
		return(count($result));
	}

	/**
	 * Check if a page name exist
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::checkname('homepage');
	 * 
	 * @param $url Name to test
	 * @return int number of URL matchted
	 */			
	static public function checkname($name) {
		$mPage=new Maerdo_Model_Page();
		$result=$mPage->findByField('name',$name,$mPage);				
		return(count($result));
	}

	/**
	 * Count all page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Page::countAll();
	 * </code>
	 * 
	 * @return int
	 */			
	static public function countAll() {
		$mPage=new Maerdo_Model_Page();
		return(count($mPage->fetchAll()));
	}		
}
