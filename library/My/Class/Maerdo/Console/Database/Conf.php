<?php 

class My_Class_Maerdo_Console_Page_Acl {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating database configuration");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$acl=$this->getList();
		$this->updateACL($acl);
	}
	
	public function getList() {		
		$databases=$this->_db->query("SELECT * FROM component__database");		
		return($databases);
			
	}
	
	public function updateConfiguration($databases) {		
		
	}
}

