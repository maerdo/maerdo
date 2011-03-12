<?php 

class My_Class_Maerdo_Console_Page_Acl {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating ACL");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$acl=$this->getList();
		$this->updateACL($acl);
	}
	
	public function getList() {		
		$roles=$this->_db->query("SELECT * FROM acl__role");
		$resources=$this->_db->query("SELECT ar.role as role,a.name as action_name,c.name as controller_name,m.name as module_name 
																FROM acl__resource as are
																INNER JOIN acl__role as ar ON ar.id=are.acl__role_id
																INNER JOIN page as p ON p.id=are.page_id 
																INNER JOIN action as a ON a.id=p.action_id 
																INNER JOIN controller as c ON  c.id=p.controller_id 
																INNER JOIN module as m ON m.id=p.module_id");			

		$acl=array();
		foreach($resources as $row) {
			$acl['resources'][strtolower($row['module_name'])][strtolower($row['module_name'])."_".strtolower($row['controller_name'])]=strtolower($row['module_name'])."_".strtolower($row['controller_name']);
			$acl['rights'][strtolower($row['module_name'])][strtolower($row['role'])][strtolower($row['module_name'])."_".strtolower($row['controller_name'])][]=strtolower($row['action_name']);
		}			
		foreach($roles as $role) {
			$acl['roles'][]=array('parent'=>strtolower($role['parent']),'role'=>strtolower($role['role']));
		}

		return($acl);
			
	}
	
	public function updateACL($acl) {		
		$acl_roles="[roles]\n\n ";
		foreach($acl['roles'] as $role) {
			if($role['parent']=="") {
				$parent="null";
			} else {
				$parent=$role['parent'];
			}
				
			$acl_roles.=$role['role']."\t= $parent\n";
		}
		
		
		foreach($acl['resources'] as $module=>$controllers) {
			$acl_resources[$module]="\n[resources]\n\n";
			foreach($controllers as $controller) {
				$acl_resources[$module].=$controller."\t = null\n";
			}
		} 	
		
		foreach($acl['rights'] as $module=>$roles) {	
			$acl_rights[$module]="";	
			foreach($roles as $role=>$rights) {
				$acl_rights[$module].="\n[$role]\n\n";
				foreach($rights as $module_controller=>$actions) {
					$acl_rights[$module].="allow.$module_controller\t = ";
					$i=0;
					foreach($actions as $action) {
						if($i==count($actions)-1) {
							$acl_rights[$module].="$action";							
						} else {
							$acl_rights[$module].="$action,";
						}
						$i++;
					}
					$acl_rights[$module].="\n";
				}
			}
		}
		foreach($acl['rights'] as $module=>$roles) {
			$data=$acl_roles;
			$data.=$acl_resources[$module];
			$data.=$acl_rights[$module];
			My_Class_Maerdo_Console::display("3","Write application/modules/$module/configs/acl.ini");
			file_put_contents(APPLICATION_PATH.'/modules/'.$module.'/configs/acl.ini',$data);
		}		
	}
}

