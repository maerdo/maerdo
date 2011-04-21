<?php 
/**
 * This class is used to generate routes configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page_Route {

	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Route::update();
	 * </code>
	 * 	 
	 * @return true
	 */				
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating routes");	
		$this->main();
		return true;
	}
	
	/**
	 * Main function : call  function to retrieve informations and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Route::main();
	 * </code>
	 * 	 
	 * @return true
	 */				
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$routes=$this->getList();
		$this->createRoute($routes);
		return true;
	}
	
	/**
	 * Retrieve route List.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Route::getList();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getList() {		
		$result=$this->_db->query("SELECT p.description as page_description,p.name as page_name,m.name as module_name,c.name as controller_name,a.name as action_name, p.url as page_url  FROM page as p,module as m,controller as c, action as a where m.id=p.module_id and a.id=p.action_id and c.id=p.controller_id");			
		$routes=array();
		foreach($result as $row) {
			$routes[strtolower($row['module_name'])][strtolower($row['controller_name'])][]=array('url'=>$row['page_url'],
																									    'name'=>strtolower($row['page_name']),
																										'module'=>strtolower($row['module_name']),
																										'controller'=>strtolower($row['controller_name']),
																										'action'=>strtolower($row['action_name']),
																										'description'=>strtolower($row['page_description']));
		}				
		return($routes);
			
	}
	
	/**
	 * write route files.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Page_Route::createRoute();
	 * </code>
	 * 	 
	 * @param $actions list of actions
	 * 
	 * @return true
	 */				
	public function createRoute($data) {							
		foreach($data as $module=>$controllers) {			
			foreach($controllers as $controller=>$routes) {
				$data="[development]\n\n";
				foreach($routes as $route) {
					$data.="; ".$route['description']."\n";
					$data.="routes.".$route['name'].".route = '".$route['url']."'\n";
					$data.="routes.".$route['name'].".defaults.controller = ".$route['controller']."\n";
					$data.="routes.".$route['name'].".defaults.action = ".$route['action']."\n";
					$data.="routes.".$route['name'].".defaults.module = ".$route['module']."\n";
					$data.="\n";
				}
				My_Class_Maerdo_Console::display("3","Write ".count($routes)." routes in /application/modules/".$module."/configs/routes/".$controller.".ini");				
				file_put_contents(APPLICATION_PATH.'/modules/'.$module.'/configs/routes/'.$route['controller'].'.ini',$data);				
			}	
			
			return true;
		}
	}
}

