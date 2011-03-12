<?php 

class My_Class_Maerdo_Console_Page_Route {

	public $tree;
	
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Creating routes");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$routes=$this->getList();
		$this->createRoute($routes);
	}
	
	public function getList() {		
		$result=$this->_db->query("SELECT p.description as page_description,p.name as page_name,m.name as module_name,c.name as controller_name,a.name as action_name, p.url as page_url  FROM page as p,module as m,controller as c, action as a where m.id=p.module_id and a.id=p.action_id and c.id=p.controller_id");			
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
		}
		



	}
}

