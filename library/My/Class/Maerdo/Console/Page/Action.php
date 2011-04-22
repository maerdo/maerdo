<?php 
/**
 * This class is used to generate acl configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page_Action {

	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Console_Action::update();
	 * </code>
	 * 	 
	 * @return true
	 */				
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating actions");	
		$this->main();
		return true;
	}
	
	/*
	 * Main function : call  function to retrieve informations and call generation function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Action::main();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$actions=$this->getList();
		$this->createAction($actions);
		return true;
	}
	
	/**
	 * Retrieve action list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Action::getList();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getList() {		
		$result=$this->_db->query("SELECT m.name as module_name,c.name as controller_name,a.name as action_name FROM action as a,controller as c,module as m WHERE m.id=c.module_id AND c.id=controller_id");			
		foreach($result as $row) {
			$actions[strtolower($row['module_name'])][strtolower($row['controller_name'])][]=strtolower($row['action_name']);
		}				
		return($actions);			
	}
	
	/**
	 * Create each action with zf-tools.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Acl::createAction();
	 * </code>
	 * 	 
	 * @param $actions list of actions
	 * 
	 * @return true
	 */			
	public function createAction($actions) {		
		foreach($actions as $module=>$controllers) {
			foreach($controllers as $controller=>$actions) {				
				foreach($actions as $action) {	
					$data=file_get_contents(APPLICATION_PATH."/modules/$module/controllers/".ucfirst($controller)."Controller.php");
					if(!preg_match("#".$action."Action()#",$data)) {				
						My_Class_Maerdo_Console::display("3","Create '$action' action in ".ucfirst($module)." ".ucfirst($controller)." controller");
						exec("zf create action $action ".ucfirst($controller)." 1 $module");
					}	else {
						My_Class_Maerdo_Console::display("3","'$action' action in ".ucfirst($module)." ".ucfirst($controller)." controller already exists");	
					}				
				}
			}
		}		
		
	}
}

