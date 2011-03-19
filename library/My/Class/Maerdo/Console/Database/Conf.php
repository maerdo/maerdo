<?php 

class My_Class_Maerdo_Console_Database_Conf {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating database configuration");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$databases=$this->getList();
		$this->updateConf($databases);
	}
	
	public function getList() {		
		$databases=$this->_db->query("SELECT * FROM component__database");		
		return($databases);			
	}
	
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
		file_put_contents(APPLICATION_PATH.'/configs/database.ini',$content);
		
	}
}

