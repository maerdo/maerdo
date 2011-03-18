<?php 

class My_Class_Maerdo_Console_Auth_Conf {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating authentification configuration");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$databases=$this->getList();
		$this->updateConf($databases);
	}
	
	public function getList() {		
		$configuration=$this->_db->query("SELECT * FROM component__auth");		
		return($configuration);			
	}
	
	public function updateConf($configuration) {			
		$content="";
		foreach($configuration as $key=>$fields) {
			
			$content.="auth.db='".$fields['database_name']."'\n";
			
			$content.="auth.table='".$fields['table']."'\n";
			
			$content.="auth.field.username='".$fields['username_field']."'\n";
			$content.="auth.field.password='".$fields['password_field']."'\n";
			$content.="auth.field.role='".$fields['role_field']."'\n";
			
			$rolesUrls=$this->_getRoleUrl($fields['id']);
			foreach($rolesUrls as $rolesUrls) {
				$content.="auth.redirect.".$rolesUrls['role']."='".$rolesUrls['url']."'\n";
			}
			$content.="auth.redirect.error='/maerdo/login/error'\n";
			
		}
		
		My_Class_Maerdo_Console::display("3","Writing ".APPLICATION_PATH.'/configs/auth.ini');
		file_put_contents(APPLICATION_PATH.'/configs/auth.ini',$content);
		
	}
	
	public function _getRoleUrl($confId) {
		$configuration=$this->_db->query("SELECT * FROM component__auth__role WHERE ca_id=$confId");		
		return($configuration);		
	}
}

