<?php

class Front_Model_Mappers_Componentdatabase extends Front_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Front_Model_Dbtable_Componentdatabase');
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
            $entry = new Front_Model_Componentdatabase();
            $entry->setId($row->id)
                  ->setAdapter($row->adapter)
                  ->setHostname($row->hostname)
                  ->setDatabase($row->database)
                  ->setUsername($row->username)
                  ->setPassword($row->password)
                  ->setName($row->name)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Front_Model_Component__database $model
     *
     */
     
    public function save(Front_Model_Componentdatabase $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Front_Model_Component__database $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'adapter' => $model->getAdapter(),
            'hostname' => $model->getHostname(),
            'database' => $model->getDatabase(),
            'username' => $model->getUsername(),
            'password' => $model->getPassword(),
            'name' => $model->getName(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Front_Model_Componentdatabase $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Front_Model_Componentdatabase();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setAdapter($row->adapter)
						  ->setHostname($row->hostname)
						  ->setDatabase($row->database)
						  ->setUsername($row->username)
						  ->setPassword($row->password)
						  ->setName($row->name);
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
           		$model=new Front_Model_Componentdatabase();
            	$model->setId($data['id'])
					  ->setAdapter($data['adapter'])
					  ->setHostname($data['hostname'])
					  ->setDatabase($data['database'])
					  ->setUsername($data['username'])
					  ->setPassword($data['password'])
					  ->setName($data['name']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
