<?php 
class My_Class_Maerdo_Auth {
	
	
	static public function login($username,$password,$request) {		
		Zend_Loader::loadClass('Zend_Filter_StripTags');
		$f = new Zend_Filter_StripTags();
		$username = $f->filter($username);
		$password = $f->filter($password);						
		
		return(self::_auth($username,$password,$request));			
	}
	
	static protected function  _auth($username,$password,$request) {
		
		$config_ini = APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/auth.ini';
		
		if (file_exists ( $config_ini ) && is_readable ( $config_ini )) {			
			$config = new Zend_Config_Ini ( $config_ini, APPLICATION_ENV );	
		}
		
		Zend_Loader::loadClass('Zend_Auth_Adapter_DbTable');
								
		$dbAdapter = Zend_Registry::get($config->auth->db);
		
		$authAdapter = new Zend_Auth_Adapter_DbTable($dbAdapter);
		$authAdapter->setTableName($config->auth->table);
		$authAdapter->setIdentityColumn($config->auth->field->username);
		$authAdapter->setCredentialColumn($config->auth->field->password);

		
		//echo "$username --".md5($password);die;
		// Set the input credential values to authenticate against
		$authAdapter->setIdentity($username);
		$authAdapter->setCredential(md5($password));

		// do the authentication
		$oAuth = Zend_Auth::getInstance();
		
		$result = $oAuth->authenticate($authAdapter);
		$auth_result=$result->isValid();
		
			
		if ($auth_result==true) {
			// success: store database row to auth's storage
			// system. (Not the password though!)			
			$data = $authAdapter->getResultRowObject(null, $config->auth->field->password);							
			$data->username=$username;
			
			$oAuth->getStorage()->write($data);
			foreach($config->auth->redirect as $role=>$url) {
				if($data->role==$role) {				
					return($url);
				}
			}
			die('Editer votre fichier auth.ini - Aucune url de redirection pour ce role');						
		} else {
			// failure: clear database row from session
			return ($config->auth->redirect->error);
		}	
		
	}	
}
?>