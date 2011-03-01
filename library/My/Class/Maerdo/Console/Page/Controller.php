<?php 

class My_Class_Maerdo_Console_Page_Controller {

	public $tree;
	protected $_application_path="application/";
	
	protected $_db;
	protected $_module;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating controllers");	
		$this->_module=new My_Class_Maerdo_Console_Page_Module();
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$controllers=$this->getList();
		$this->createController($controllers);
	}
	
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
	
	public function createController($controllers) {
		foreach($controllers as $module=>$controllers) {
			foreach($controllers as $key=>$controller) {
				if(!file_exists("applications/modules/$module/controllers/".ucfirst($controller)."Controller.php")) {
					My_Class_Maerdo_Console::display("3","Create '".ucfirst($controller)."' controller in $module");				
					exec("zf create controller $controller  index-action-included=0 $module");					
				}	
			}	
		}
	}
}

