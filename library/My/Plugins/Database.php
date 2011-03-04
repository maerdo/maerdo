<?
class My_Plugins_Database extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  

       if(file_exists(APPLICATION_PATH . '/configs/database.ini')) {
		   $config_ini = APPLICATION_PATH . '/configs/database.ini';
		   $config=new Zend_Config_Ini($config_ini);
		   foreach($config->db as $dbconf) {
				$db = Zend_Db::factory($dbconf->adapter, array(
					'host'     => $dbconf->host,
			    	'username' => $dbconf->login,
			    	'password' => $dbconf->password,
			    	'dbname'   => $dbconf->database
				));	
				Zend_Registry::set($dbconf->storage_name,$db);
		   }   
      	   
		     
	   			
       } 
       
       if(file_exists(APPLICATION_PATH.'/modules/'.$request->getModuleName().'/configs/database.ini')) {
       		$config_ini = APPLICATION_PATH.'/modules/'.$request->getModuleName().'/configs/database.ini';
		    $config=new Zend_Config_Ini($config_ini);
            $db=Zend_Registry::get($config->db->default);
		    Zend_Db_Table::setDefaultAdapter($db); 	   	
       }     
	} 
}	