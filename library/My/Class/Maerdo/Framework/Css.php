<?php
/**
 * This class is used to work with Maerdo  dynamics css inclusions.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Css {
	/**
	 * Return list of css for a page.
	 * 
	 * <code>
	 * $metas=My_Class_Maerdo_Framework__Css::getList('1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return array array with included css files 
	 */
	static public function getList($page_id=NULL) {
		$mCss=new Maerdo_Model_Pagecss();
		$cssfiles=$mCss->findByField('page_id',$page_id,$mCss);			
		return($cssfiles);
	}

	

	/***
	 * Add a Css inclusion.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework__Css::add('1','modules.css','/css/modules.css');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @param $identifiant  Identifiant of inclusion
	 * @param $file File to include
	 * @return boolean
	 */	
	static public function add($page_id,$identifiant,$file) {
		$mCss=new Maerdo_Model_Pagecss();		
		return($mCss->insert(array('page_id'=>$page_id,'identifiant'=>$identifiant,'file'=>$file)));
	}

	
	/**
	 * Update Css inclusions for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework__Css:update($csss,'1');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function update($csss,$page_id) {

		$mCss=new Maerdo_Model_Pagecss();
		
		$mCss->delete("page_id='$page_id'");

		foreach($csss as $css) {			
			if(self::add($page_id,$css['identifiant'],$css['file'])==0)
				return false;			
		}	
		return(true);
	}		
	
}	
