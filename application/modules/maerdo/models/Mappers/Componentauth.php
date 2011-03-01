<?php

class Maerdo_Model_Mappers_Componentauth extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Componentauth');
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
            $entry = new Maerdo_Model_Componentauth();
            $entry->setId($row->id)
                  ->setModule_id($row->module_id)
                  ->setTable($row->table)
                  ->setDatabase_name($row->database_name)
                  ->setUsername_field($row->username_field)
                  ->setPassword_field($row->password_field)
                  ->setRole_field($row->role_field)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Component__auth $model
     *
     */
     
    public function save(Maerdo_Model_Componentauth $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Component__auth $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'module_id' => $model->getModule_id(),
            'table' => $model->getTable(),
            'database_name' => $model->getDatabase_name(),
            'username_field' => $model->getUsername_field(),
            'password_field' => $model->getPassword_field(),
            'role_field' => $model->getRole_field(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Componentauth $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Componentauth();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setModule_id($row->module_id)
						  ->setTable($row->table)
						  ->setDatabase_name($row->database_name)
						  ->setUsername_field($row->username_field)
						  ->setPassword_field($row->password_field)
						  ->setRole_field($row->role_field);
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
           		$model=new Maerdo_Model_Componentauth();
            	$model->setId($data['id'])
					  ->setModule_id($data['module_id'])
					  ->setTable($data['table'])
					  ->setDatabase_name($data['database_name'])
					  ->setUsername_field($data['username_field'])
					  ->setPassword_field($data['password_field'])
					  ->setRole_field($data['role_field']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
