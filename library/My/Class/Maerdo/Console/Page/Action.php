<?php 

class My_Class_Maerdo_Console_Page_Action {

	public $tree;
	protected $_application_path="application/";
	
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating actions");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$actions=$this->getList();
		$this->createAction($actions);
	}
	
	public function getList() {		
		$result=$this->_db->query("SELECT m.name as module_name,c.name as controller_name,a.name as action_name FROM action as a,controller as c,module as m WHERE m.id=c.module_id AND c.id=controller_id");			
		foreach($result as $row) {
			$actions[strtolower($row['module_name'])][strtolower($row['controller_name'])][]=strtolower($row['action_name']);
		}				
		return($actions);
			
	}
	
	public function createAction($actions) {		
		foreach($actions as $module=>$controllers) {
			foreach($controllers as $controller=>$actions) {				
				foreach($actions as $action) {	
					$data=file_get_contents("application/modules/$module/controllers/".ucfirst($controller)."Controller.php");
					if(!preg_match("#".$action."Action()#",$data)) {				
						My_Class_Maerdo_Console::display("3","Create '$action' action in ".ucfirst($module)." ".ucfirst($controller)." controller");
						system("zf create action $action ".ucfirst($controller)." 1 $module");
					}					
				}
			}
		}		
		
	}
}

