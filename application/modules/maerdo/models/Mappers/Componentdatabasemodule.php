<?php

class Maerdo_Model_Mappers_Componentdatabasemodule extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Componentdatabasemodule');
       }
       return $this->_dbTable;
    }
    
	/**
     * fetches all rows 
     *
     * @return array
     */
    public function fetchAll()  {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Maerdo_Model_Componentdatabasemodule();
            $entry->setId($row->id)
                  ->setModule_id($row->module_id)
                  ->setDatabase_id($row->database_id)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }

	/**
     * fetches all rows with module and database name
     *
     * @return array
     */
    public function fetchAllName()  {
        $select=$this->getDbTable()->select();
        $select->setIntegrityCheck(false); 
        $select->from(array('cdm'=>'component__databasemodule'),array('module_name'=>'m.name','database_name'=>'d.name','da_id'=>'cdm.id'));
        $select->join(array('m'=>'module'),'m.id=cdm.module_id');
        $select->join(array('d'=>'component__database'),'d.id=cdm.database_id');                 
        
		$stmt = $select->query();
		$result = $stmt->fetchAll();
		
        return $result;
    }    
    
	/**
     * get module with no default adapter
     *
     * @return array
     */
    public function getFreeModule()  {    	

        $select=$this->getDbTable()->select();
        $select->setIntegrityCheck(false); 
        $select->from(array('m'=>'module'));
        $select->where("m.id NOT IN (SELECT module_id FROM component__databasemodule)");  

         
		$stmt = $select->query();
		$result = $stmt->fetchAll();
		
        return $result;
    }        

	/**
     * saves current row
     *
     * @param Maerdo_Model_Component__databasemodule $model
     *
     */
     
    public function save(Maerdo_Model_Componentdatabasemodule $model,$ignoreEmptyValuesOnUpdate=true) {
        if ($ignoreEmptyValuesOnUpdate) {
            $data = $model->toArray();
            foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
            }
        }

        if (null === ($id = $model->getId())) {
            unset($data['id']);
            $id=$this->getDbTable()->insert($data);
            $model->setId($id);
            return($id);
        } else {
            if ($ignoreEmptyValuesOnUpdate) {
             $data = $model->toArray();
             foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
                }
            }

            return($this->getDbTable()->update($data, array('id = ?' => $id)));
        }
    }
   
    /**
     * returns an array, keys are the field names.
     *
     * @param new Maerdo_Model_Component__databasemodule $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'module_id' => $model->getModule_id(),
            'database_id' => $model->getDatabase_id(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Componentdatabasemodule $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Componentdatabasemodule();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setModule_id($row->module_id)
						  ->setDatabase_id($row->database_id);
            }
            return $result;
    }    

   /**
     * find row by id
     *
     * @param string $id
     */
    public function find($id) {
            $table = $this->getDbTable();
            $row = $table->find($id);
   			foreach ($row as $data) {
           		$model=new Maerdo_Model_Componentdatabasemodule();
            	$model->setId($data['id'])
					  ->setModule_id($data['module_id'])
					  ->setDatabase_id($data['database_id']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
