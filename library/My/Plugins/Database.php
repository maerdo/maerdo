<?
class My_Plugins_Database extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  

       if(file_exists(APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/database.ini')) {
		   $config_ini = APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/database.ini';
		   $config=new Zend_Config_Ini($config_ini);			
       } else {
		   $config_ini = APPLICATION_PATH . '/configs/database.ini';
		   $config=new Zend_Config_Ini($config_ini);       	
       }	
	   
       $db = Zend_Db::factory($config->db->adapter, array(
			'host'     => $config->db->host,
	    	'username' => $config->db->login,
	    	'password' => $config->db->password,
	    	'dbname'   => $config->db->database
		));	   
      
	   
	   Zend_Db_Table::setDefaultAdapter($db);
	   Zend_Registry::set($config->db->storage_name,$db);
       	   
	}
}	