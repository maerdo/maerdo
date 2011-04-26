<?php 
/**
 * This class is used to generate acl configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page_Module {
	
	protected $_db;
	protected $_modules;
	
	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Module::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating modules");					
		$this->main();
	}
		
	/**
	 * Main function : call  function to retrieve informations and call generation function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Module::main();
	 * </code>
	 *
	 * @return true
	 */
	public function main() {
		$modules=$this->getList();
		foreach($this->_modules as $module) {
			if(!is_dir(APPLICATION_PATH.'/modules/'.strtolower($module))) {
				$this->createmodule($module);
			}
		}
	}
	
	/**
	 * Retrieve module List.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Module::getList();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function getList() {	
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();		
		$result=$this->_db->query("SELECT * FROM module");
		if($result!="false") {	
			foreach($result as $module) {
				$this->_modules[$module['id']]=$module['name'];
			}
			return($this->_modules);
		}
	}
	
	/**
	 * Create each module with zf-tools.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Module::createModule();
	 * </code>
	 * 	 
	 * @param $actions list of actions
	 * 
	 * @return true
	 */			
	public function createModule($name) {
		$name=strtolower($name);
		My_Class_Maerdo_Console::display("3","Creating module $name");
		exec('zf create module '.$name);
				
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs/heads');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs/routes');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/forms');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/languages');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/layouts/scripts',0777,true);
		copy(APPLICATION_PATH.'/../utils/Module/layout.phtml',APPLICATION_PATH.'/modules/'.$name.'/layouts/scripts/layout.phtml');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/library');				
	}
}

