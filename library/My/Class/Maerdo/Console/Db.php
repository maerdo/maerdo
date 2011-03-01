<?php 

class My_Class_Maerdo_Console_Db {

	static public function getDbInstance() {
		   $config_ini = APPLICATION_PATH . '/configs/application.ini';
   		   $config=new Zend_Config_Ini($config_ini,'production');
   		   switch($config->console->database->adapter) {
   		   		case "mysql":
   		   			$dsn="mysql:host=".$config->console->database->host.";dbname=".$config->console->database->database;
   		   			break;
   		   }
   		   $db=new PDO($dsn,$config->console->database->username,$config->console->database->password);
   		   return($db);
	}
		
}