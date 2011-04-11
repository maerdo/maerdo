<?php 
/**
 * This class is used to generate auth configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Database_Conf {



	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Conf::update();
	 * </code>
	 * 	 
	 * @return true
	 */		
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating database configuration");	
		$this->main();
	}
	
	/**
	 * Main function : call list function and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Conf::main();
	 * </code>
	 * 	 
	 * @return true
	 */		
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$databases=$this->getList();
		$this->updateConf($databases);
	}
	
	/**
	 * Retrieve database list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Conf::getList();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getList() {		
		$databases=$this->_db->query("SELECT * FROM component__database");		
		return($databases);			
	}
	
	/**
	 * Write configuration.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Conf::updateConf($configuration);
	 * </code>
	 * 	 
	 * @param $configuration Array with database data
	 * 
	 * @return boolean
	 */			
	public function updateConf($databases) {			
		$content="";
		foreach($databases as $key=>$database) {			
			switch($database['adapter']) {
				case "pdo_mysql":
				case "mysql":
					$adapter="pdo_mysql";
					break;
			}
			if($database['name']=="maerdo_db") {
				$content.="db.console.adapter = '".$adapter."'\n";
				$content.="db.console.host='".$database['hostname']."'\n";
				$content.="db.console.login='".$database['username']."'\n";
				$content.="db.console.password='".$database['password']."'\n";
				$content.="db.console.database='".$database['database']."'\n";
				$content.="db.console.storage_name='".$database['name']."'\n\n";
			}
			
			$content.="db.db".$key.".adapter = '".$adapter."'\n";
			$content.="db.db".$key.".host='".$database['hostname']."'\n";
			$content.="db.db".$key.".login='".$database['username']."'\n";
			$content.="db.db".$key.".password='".$database['password']."'\n";
			$content.="db.db".$key.".database='".$database['database']."'\n";
			$content.="db.db".$key.".storage_name='".$database['name']."'\n\n";
		}
		
		My_Class_Maerdo_Console::display("3","Writing ".APPLICATION_PATH.'/configs/database.ini');
		return(file_put_contents(APPLICATION_PATH.'/configs/database.ini',$content));
		
	}
}

