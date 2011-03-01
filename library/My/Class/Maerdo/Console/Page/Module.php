<?php 

class My_Class_Maerdo_Console_Page_Module {

	public $tree;
	protected $_application_path="application/";
	
	protected $_db;
	protected $_modules;
	
	public function __construct() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
	}
	
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating modules");			
		$this->main();
	}
		
	public function main() {
		$modules=$this->getList();
		foreach($this->_modules as $module) {
			if(!is_dir(APPLICATION_PATH.'/modules/'.strtolower($module))) {
				$this->createmodule($module);
			}
		}
	}
	
	public function getList() {		
		$result=$this->_db->query("SELECT * FROM module");
		foreach($result as $module) {
			$this->_modules[$module['id']]=$module['name'];
		}
		return($this->_modules);
	}
	
	public function createModule($name) {
		$name=strtolower($name);
		My_Class_Maerdo_Console::display("3","Creating module $name");
		exec('zf create module '.$name);
				
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs/heads');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/configs/routes');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/forms');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/languages');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/layouts');
		mkdir(APPLICATION_PATH.'/modules/'.$name.'/library');		
		
		copy('utils/Module/configs/auth.ini.disable',APPLICATION_PATH.'/modules/'.$name.'/configs/auth.ini.disable');
		copy('utils/Module/configs/translate.ini.disable',APPLICATION_PATH.'/modules/'.$name.'/configs/translate.ini.disable');
		copy('utils/Module/configs/database.ini.disable',APPLICATION_PATH.'/modules/'.$name.'/configs/database.ini.disable');		
	}
}

