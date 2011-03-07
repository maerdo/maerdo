<?php 
/**
 * This class is used to work with database component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Database {

	
	/**
	 * Retrieve all database.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::getList();
	 * </code>
	 * 	 
	 * @return array
	 */		
	static public function getList() {
		$mComponentdatabase=new Maerdo_Model_Componentdatabase();
		$database=$mComponentdatabase->fetchAll();
		$result=array();		
		foreach($database as $database)
			$result[]=$database->toArray();
		return($result);
	}
	
	/**
	 * Retrieve default database per module list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::getModuleDatabaseList();
	 * </code>
	 * 	 
	 * @return array
	 */		
	static public function getModuleDatabaseList() {
		$mComponentmoduledatabase=new Maerdo_Model_Componentdatabasemodule();
		$result=$mComponentmoduledatabase->fetchAllName();
		return($result);
	}

	/**
	 * Delete default Adapter for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::deleteDefaultAdapter($id);
	 * </code>
	 * 	 
	 * @return array
	 */		
	static public function deleteDefaultAdapter($id) {		
		$mComponentmoduledatabase=new Maerdo_Model_Componentdatabasemodule();
		$result=$mComponentmoduledatabase->delete("id='$id.'");
		return($result);		
	}

	/**
	 * add database configuration .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::add($configuration);
	 * </code>
	 * 
	 * @param $configuration Array with configuration parameters
	 * @return boolean
	 */		
	static public function add($configuration) {		
		$mComponentdatabase=new Maerdo_Model_Componentdatabase();		
		return($mComponentdatabase->insert(array('name'=>$configuration['name'],
										  'adapter'=>$configuration['adapter'],
										  'database'=>$configuration['database'],
										  'hostname'=>$configuration['hostname'],
										  'username'=>$configuration['username'],
										  'password'=>$configuration['password'])));
	}
	
	/**
	 * add default database to a module .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::addDatabaseModule($database,$module);
	 * </code>
	 * 
	 * @param $database Database id
	 * @param $database Module id
	 * @return boolean
	 */			
	static public function addDatabaseModule($database,$module) {
		$mComponentdatabasemodule=new Maerdo_Model_Componentdatabasemodule();		
		return($mComponentdatabasemodule->insert(array('module_id'=>$module,
										  'database_id'=>$database)));	
	}
	

	
	/**
	 * get module with no default adapter .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::getFreeModule();
	 * </code>
	 * 
	 * @return Array with disponible module
	 */		
	static public function getFreeModule() {
		$mComponentdatabasemodule=new Maerdo_Model_Componentdatabasemodule();
		$result=$mComponentdatabasemodule->getFreeModule();
		return($result);
	}
	/**
	 * delete database .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::delete($id);
	 * </code>
	 * 
	 * @param $id Identifiant of database
	 * @return boolean
	 */		
	static public function delete($id) {		
		$mComponentdatabase=new Maerdo_Model_Componentdatabase();
		return($mComponentdatabase->delete('id="'.$id.'"'));	
	}
}
?> 