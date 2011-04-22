<?php 
/**
 * This class is used to generate acl configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page_Controller {


	protected $_db;
	protected $_module;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Console_Controller::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating controllers");	
		$this->_module=new My_Class_Maerdo_Console_Page_Module();
		$this->main();
		return true;
	}
	
	/*
	 * Main function : call  function to retrieve informations and call generation function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Controller::main();
	 * </code>
	 * 	 
	 * @return true
	 */		
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$controllers=$this->getList();
		$this->createController($controllers);
		return true;
	}
	
	/**
	 * Retrieve controller list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Controller::getList();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getList() {
		$modules=$this->_module->getList();
		foreach($modules as $module_id=>$module_name) {
			$module_name=strtolower($module_name);
			$result=$this->_db->query("SELECT * FROM controller WHERE module_id='$module_id'");
			foreach($result as $controller) {
				$controllers[$module_name][]=$controller['name'];
			}
		}		
		return($controllers);
			
	}
	/**
	 * Create each controller with zf-tools.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Controller::createController();
	 * </code>
	 * 	 
	 * @param $actions list of actions
	 * 
	 * @return true
	 */			
	public function createController($controllers) {
		foreach($controllers as $module=>$controllers) {
			foreach($controllers as $key=>$controller) {
				if(!file_exists(APPLICATION_PATH."/modules/$module/controllers/".ucfirst($controller)."Controller.php")) {
					My_Class_Maerdo_Console::display("3","Create '".ucfirst($controller)."' controller in $module");				
					exec("zf create controller $controller  index-action-included=0 $module");					
				}	else {
					My_Class_Maerdo_Console::display("3",ucfirst($controller)."' controller in $module already exists");	
				}
			}	
		}
	}
}

