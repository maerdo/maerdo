<?php 
/**
 * This class is used to work with installation.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Core
 * @version 0.1
 */
class My_Class_Maerdo_Install {
	
	var $_conn;
	var $_databaseConf;
	var $_adminPassword;
	var $_error="0";
	
	public function __construct($database,$adminPassword) {
		$this->_databaseConf=$database;
		$this->_adminPassword=$adminPassword;
		
		switch($database['type']) {
			case "mysql":
				try {
					$this->_conn= new PDO("mysql:host=".$database['host'].";dbname=".$database['database'], $database['login'], $database['password']);
				} catch(Exception $e) {
					$this->_error="-1|null";
				}	
				break;
		}
		
	}
	
	public function install() {
		if($this->_error==0) {
			$installTable=$this->installTable();
			if($installTable=="true") {
				$addAdminAccount=$this->addAdminAccount();
				if($addAdminAccount==true) {
					$createDatabaseConfFile=$this->createDatabaseConfFile();
					if($createDatabaseConfFile==true) {
						$addDatabaseEntrie=$this->addDatabaseEntrie();
						if($addDatabaseEntrie==true) {
							return("1|null");
						} else {
							return($addDatabaseEntrie);
						}							
					} else {
						return($addAdminAccount);
					}	
				} else {
					return($addAdminAccount);
				}		
			} else {
				return($installTable);
			}
			
		} else {
			return($this->_error);
		}
	}
	
	public function installTable() {
		$sqlContent=file_get_contents(APPLICATION_PATH."/../utils/Database/maerdo.sql");
		if($this->_conn->exec($sqlContent)!=0) {
			$error=$this->_conn->errorInfo();
			return("-2|".$error[2]);
		} else {
			return true;
		}		
	}
	
	public function addAdminAccount() {
		$query="INSERT INTO `users` (`id` ,`name` ,`firstname` ,`email` ,`username` ,`password` ,`role` ,`status`)VALUES (NULL , '', '', '', 'admin', MD5( '".$this->_adminPassword['password1']."' ) , 'admin', 'active');";
		if($this->_conn->exec($query)!=0) {
			$error=$this->_conn->errorInfo();
			return("-3|".$error[2]);
		} else {
			return true;
		}
	}
	
	public function addDatabaseEntrie() {
		$query="INSERT INTO `component__database` (`id` ,`adapter` ,`hostname` ,`database` ,`username` ,`password` ,`name`)VALUES (NULL , '".$this->_databaseConf['type']."', '".$this->_databaseConf['host']."', '".$this->_databaseConf['database']."', '".$this->_databaseConf['login']."', '".$this->_databaseConf['password']."', 'maerdo_db');";
		if($this->_conn->exec($query)!=0) {
			$error=$this->_conn->errorInfo();
			return("-4|".$error[2]);
		} else {
			return true;
		}		
	}
	public function createDatabaseConfFile() {
		$error="0";
		
		switch($this->_databaseConf['type']) {
			case "mysql":
				$adapter='pdo_mysql';
				break;
		}	
		$data_content.="db.console.adapter='".$adapter."'\n";
		$data_content.="db.console.host='".$this->_databaseConf['host']."'\n";
		$data_content.="db.console.login='".$this->_databaseConf['login']."'\n";
		$data_content.="db.console.password='".$this->_databaseConf['password']."'\n";
		$data_content.="db.console.database='".$this->_databaseConf['database']."'\n\n";

		$data_content.="db.maerdo_db.adapter='".$adapter."'\n";
		$data_content.="db.maerdo_db.host='".$this->_databaseConf['host']."'\n";
		$data_content.="db.maerdo_db.login='".$this->_databaseConf['login']."'\n";
		$data_content.="db.maerdo_db.password='".$this->_databaseConf['password']."'\n";
		$data_content.="db.maerdo_db.database='".$this->_databaseConf['database']."'\n";
		$data_content.="db.maerdo_db.storage_name='maerdo_db'";
		
		if(file_put_contents(APPLICATION_PATH.'/configs/maerdo.ini',$data_content)==false)
			$error="1";
					
		$data_content="db.default='maerdo_db'";
		if(file_put_contents(APPLICATION_PATH.'/modules/maerdo/configs/database.ini',$data_content)==false)
			$error="1";
		
		if($error=="1")
			return("-5|null");
		else	
			return true;
	}	
}
