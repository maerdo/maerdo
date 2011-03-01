<?php
/**
 * This class is used to work with Maerdo  dynamics Javascript inclusions.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Javascript {
	/**
	 * Return list of css for a page.
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework__Css::getList('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array array with title fields 
	 */
	static public function getList($page_id=NULL) {
		$mJavascript=new Maerdo_Model_Pagejavascript();
		$jsfiles=$mJavascript->findByField('page_id',$page_id,$mJavascript);		
		return($jsfiles);
	}

	/**
	 * Add a Javascript.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework__Javascript::add('1','jquerycore','/js/query.js');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @param $identifiant  Identifiant of inclusion
	 * @param $file File to include
	 * @return boolean
	 */	
	static public function add($page_id,$identifiant,$file) {
		$mJavascript=new Maerdo_Model_Pagejavascript();				
		return($mJavascript->insert(array('page_id'=>$page_id,'identifiant'=>$identifiant,'file'=>$file)));
	}

	
	/**
	 * Update Javascript inclusions for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework__Javascript::update($javascripts,'1');
	 * </code>
	 * 
	 * @param $javascripts Array with javascript inclusions data
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function update($javascripts,$page_id) {

		$mJavascript=new Maerdo_Model_Pagejavascript();
		
		$mJavascript->delete("page_id='$page_id'");

		foreach($javascripts as $javascript) {			
			if(self::add($page_id,$javascript['identifiant'],$javascript['file'])==0)
				return false;			
		}	

		return(true);
	}		
	
}