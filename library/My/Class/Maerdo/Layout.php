<?php
/**
 * This class is used to work with LAyout.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Maerdo
 * @version 0.1
 */

class My_Class_Maerdo_Layout {
		
	public static function renderingMaerdoSidebar(Zend_Controller_Request_Abstract $request,$view) {
		$sidebar_file=null;
		$controller=strtolower($request->getControllerName());
		$action=strtolower($request->getActionName());
				
		$scriptspaths=$view->getScriptPaths();
		foreach($scriptspaths as $path) {
			if(is_file($path.'snippets/sidebar/'.$controller.'/'.$action.'.phtml')) {
				$sidebar_file='snippets/sidebar/'.$controller.'/'.$action.'.phtml';
			}
		}	
		return($sidebar_file);										
	}
	
	/* For Next release
	 * 
     *	My_Class_Maerdo_Layout::setTitleVar(array('%value%'=>'haricots'));
	 * */
	static public function setTitleVar(array $vars) {
		Zend_Registry::set('titleVars',$vars);
	}
}