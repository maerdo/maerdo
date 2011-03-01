<?php
/**
 * This class is used to work with Maerdo  controllers.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Maerdo
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Controller {
	/**
	 * Retrieve controllers.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Controller::getList('1');
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module id
	 * @return array array with controllers data
	 */			
	static public function getList($module_id=NULL) {		
		$mController=new Maerdo_Model_Controller();
		if($module_id==NULL) {
			$controllers=$mController->fetchAll();
		} else {			
			$controllers=$mController->findByField('module_id',$module_id,$mController);
		}		
		$result=NULL;
		foreach($controllers as $controller) {
			$result[]=$controller->toArray();
		}				
		return($result);
	}
	
	/**
	 * Return name of a controller finded by his id
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Controller::getNameById($meta,'1');
	 * </code>
	 * 
	 * @param $id  Maerdo database controller id
	 * @return string Name of controller
	 */		
	static public function getNameById($id) {
		$mController=new Maerdo_Model_Controller();
		$result=$mController->find($id);
		return($result->name);
	}

	/**
	 * Add new controller
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Controller::add('1','index','Index controller of maerdo module);
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module id
	 * @param $name  controller name
	 * @param $description controller description
	 * @return boolean
	 */			
	static public function add($module_id,$name,$description) {
		$mController=new Maerdo_Model_Controller();
		//  verify if controller exist
		$controllers=$mController->findByField('module_id',$module_id,$mController);
		foreach($controllers as $controller) {
			if($controller->name==$name)
				return("-1");
		}
		$newController=new Maerdo_Model_Controller();		
		$newController->module_id=$module_id;
		$newController->name=$name;
		$newController->description=$description;
		$newController->save();
		return("true");
	}
	/**
	 * Delete a controller and his actions
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Controller::delete('1');
	 * </code>
	 * 
	 * @param $controller_id  Maerdo database controller id
	 * @return boolean
	 */		
	static function delete($controller_id) {
		$mController=new Maerdo_Model_Controller();
		$mAction=new Maerdo_Model_Action();
		
		$error[]=$mController->deleteByPrimarykey($controller_id);
		
		$actions=$mAction->findByField('controller_id',$controller_id,$mAction);
		foreach($actions as $action) {
			$error[]=$mAction->deleteByPrimaryKey($action->id);
		}
		foreach($error as $boolean) {
			if($boolean==false)
				return(false);
		}
		return true;		
	}	
	/**
	 * Count all controllers.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Controller::countAll();
	 * </code>
	 * 
	 * @return int
	 */			
	static public function countAll() {
		$mController=new Maerdo_Model_Controller();
		return(count($mController->fetchAll()));
	}		
}
?>