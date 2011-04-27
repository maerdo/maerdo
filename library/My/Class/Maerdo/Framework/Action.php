<?php 
/**
 * This class is used to work with actions.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */
class My_Class_Maerdo_Framework_Action {
	/**
	 * Retourn list of action.
	 * 
	 * <code>
	 * $allActions=My_Class_Maerdo_Framework_Action::getList();
	 * $controllerAction=My_Class_Maerdo_Framework_Action::getList($maerd_controller_id);
	 * </code>
	 * 
	 * @param $controller_id  Maerdo database controller id, can be null to fetch all actions
	 * @return array array with action fields 
	 */
	static public function getList($controller_id=NULL) {
		$mAction=new Maerdo_Model_Action();
		if($controller_id==NULL) {
			$actions=$mAction->fetchAll();
		} else {
			$actions=$mAction->findByField('controller_id',$controller_id,$mAction);
		}	
		$result=array();
		foreach($actions as $action) {
			$result[]=$action->toArray();
		}		
		return($result);
	}
	/**
	 * Add an action.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Action::add('1','viewall','View All item');
	 * </code>
	 * 
	 * @param $controller_id  Maerdo database controller id
	 * @param $name  name of action used in ZF controller
	 * @param $description Maerdo description of action
	 * @return mixed (-1 action already exist or true if action was added)
	 */	
	static public function add($controller_id,$name,$description) {
		$mAction=new Maerdo_Model_Action();
		//  verify if action exist
		$actions=$mAction->findByField('controller_id',$controller_id,$mAction);
		foreach($actions as $action) {
			if($action->name==$name)
				return("-1");
		}
		
		$newAction=new Maerdo_Model_Action();			
		$newAction->controller_id=$controller_id;
		$newAction->name=$name;
		$newAction->description=$description;
		$newAction->save();
		return("true");
	}	
	/**
	 * Delete an action.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Action::delete('1');
	 * </code>
	 * 
	 * @param $action_id  Maerdo database action id
	 * @return boolean
	 */		
	static function delete($action_id) {
		$mAction=new Maerdo_Model_Action();
		return($mAction->deleteByPrimarykey($action_id));
	}
	
	/**
	 * Count all actions.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework__Action::countAll();
	 * </code>
	 * 
	 * @return int
	 */		
	static public function countAll() {
		$mAction=new Maerdo_Model_Action();
		return(count($mAction->fetchAll()));
	}	
	
	/**
	 * Return name of a action finded by his id
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Action::getNameById('1');
	 * </code>
	 * 
	 * @param $id  Maerdo database controller id
	 * @return string Name of controller
	 */		
	static public function getNameById($id) {
		$mAction=new Maerdo_Model_Action();
		$result=$mAction->find($id);
		return($result->name);
	}	
}
?> 