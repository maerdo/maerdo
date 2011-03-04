<?php

class Maerdo_Model_Mappers_Abstract {

    
    protected $_dbTable;
          
    public function setDbTable($dbTable) { 
       if (is_string($dbTable)) {
           $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
           return $this;
     }

	public function insert($data) {
        return $this->getDbTable()->insert($data);
    }         
    
        
   
  
 	public function delete($where) {
        return $this->getDbTable()->delete($where);
    }

 	public function update($data,$where) {
		return $this->getDbTable()->update($data, $where);
    } 

}
