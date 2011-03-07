<?php 

class My_Class_Maerdo_Console_Db {

	static public function getDbInstance() {
		   $config_ini = APPLICATION_PATH . '/configs/database.ini';
   		   $config=new Zend_Config_Ini($config_ini);   		   
   		   switch($config->db->console->adapter) {   		   		
   		   		case "pdo_mysql";
   		   			$dsn="mysql:host=".$config->db->console->host.";dbname=".$config->db->console->database;
   		   			break;
   		   }
   		   $db=new PDO($dsn,$config->db->console->login,$config->db->console->password);
   		   return($db);
	}
		
}