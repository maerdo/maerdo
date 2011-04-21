<?php 
/**
 * This class is used to generate auth configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Auth_Conf {


	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Auth_Conf::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating authentification configuration");	
		$this->main();
		return true;
	}
	
	/**
	 * Main function:  call list function and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Auth_Conf::main();
	 * </code>
	 * 	 
	 * @return true
	 */	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$databases=$this->getData();
		$this->updateConf($databases);
		return true;
	}
	
	/**
	 * Retrieve auth data.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Auth_Conf::getData();
	 * </code>
	 * 	 
	 * @return array
	 */		
	public function getData() {		
		$configuration=$this->_db->query("SELECT * FROM component__auth");		
		return($configuration);			
	}
	
	/**
	 * Write configuration.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Auth_Conf::updateConf($configuration);
	 * </code>
	 * 	 
	 * @param $configuration Array with auth data
	 * 
	 * @return boolean
	 */		
	public function updateConf($configuration) {			
		$content="";
		foreach($configuration as $key=>$fields) {
			
			$content.="auth.db=\"".$fields['database_name']."\"\n";
			
			$content.="auth.table=\"".$fields['table']."\"\n";
			
			$content.="auth.field.username=\"".$fields['username_field']."\"\n";
			$content.="auth.field.password=\"".$fields['password_field']."\"\n";
			$content.="auth.field.role=\"".$fields['role_field']."\"\n";
			
			$rolesUrls=$this->_getRoleUrl($fields['id']);
			foreach($rolesUrls as $rolesUrls) {
				$content.="auth.redirect.".$rolesUrls['role']."=\"".$rolesUrls['url']."\"\n";
			}
			
		}
		
		My_Class_Maerdo_Console::display("3","Writing ".APPLICATION_PATH.'/configs/auth.ini');
		return(file_put_contents(APPLICATION_PATH.'/configs/auth.ini',$content));
		
	}
	/**
	 * Return auth redirection.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Auth_Conf::_getRoleUrl($auth_id);
	 * </code>
	 * 	 
	 * @param $auth_id Id of authentification configuration
	 * 
	 * @return array
	 */		
	public function _getRoleUrl($confId) {
		$configuration=$this->_db->query("SELECT * FROM component__auth__role WHERE ca_id=$confId");		
		return($configuration);		
	}
}

