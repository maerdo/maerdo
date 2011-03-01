<?php 
/**
 * This class is used to work with module.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */

class My_Class_Maerdo_Framework_Module {
	/**
	 * Retrieve modules.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::getList();
	 * </code>
	 * 
	 * @return array array with modules data
	 */			
	static public function getList() {
		$mModule=new Maerdo_Model_Module();
		$modules=$mModule->fetchAll();
		return($modules);
	}
	
	/**
	 * Retrieve module informations.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::getDetails('1');
	 * </code>
	 * 
	 * @param $module_id Maerdo database id of module
	 * @return array array with modules data
	 */			
	static public function getDetails($module_id) {
		$mModule=new Maerdo_Model_Module();
		$moduleDetails=$mModule->find($module_id)->toArray();
		
		$moduleDetails['controllers']=My_Class_Maerdo_Framework_Controller::getList($module_id);
		
		if(is_array($moduleDetails['controllers'])) {
			foreach($moduleDetails['controllers'] as $key=>$controller) {
				$moduleDetails['controllers'][$key]['actions']=My_Class_Maerdo_Framework_Action::getList($controller['id']);
			}
		}
		return($moduleDetails);
	}
	
	/**
	 * Count all modules.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::countAll();
	 * </code>
	 * 
	 * @return int
	 */			
	static public function countAll() {
		$mModule=new Maerdo_Model_Module();
		return(count($mModule->fetchAll()));
	}
	
	
	/**
	 * Get Name of a module finded by his id.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::getNameById('1');
	 * </code>
	 * 
	 * @param $id module id
	 * @return string name of module
	 */			
	static function getNameById($id) {
		$mModule=new Maerdo_Model_Module();
		$moduleDetails=$mModule->find($id);
		return($moduleDetails->name);
	}
	
	/**
	 * add a module in Maerdo Database
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::add();
	 * </code>
	 * 
	 * @param $name Name of module
	 * @param $description Description of module
	 * @return boolean
	 */			
	static function add($name,$description) {
		$mModule=new Maerdo_Model_Module();
		return($mModule->insert(array('name'=>$name,'description'=>$description)));
	}
	
	/**
	 * Delete a module
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Module::delete();
	 * </code>
	 * 
	 * @return int
	 */			
	static function delete($module_id) {
		$mModule=new Maerdo_Model_Module();
		return($mModule->deleteByPrimarykey($module_id));
	}	
}
?>