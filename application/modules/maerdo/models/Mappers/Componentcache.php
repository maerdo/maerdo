<?php

class Maerdo_Model_Mappers_Componentcache extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Componentcache');
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
            $entry = new Maerdo_Model_Componentcache();
            $entry->setId($row->id)
                  ->setName($row->name)
                  ->setType($row->type)
                  ->setBackend_type($row->backend_type)
                  ->setDefault($row->default)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Component__cache $model
     *
     */
     
    public function save(Maerdo_Model_Componentcache $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Component__cache $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'name' => $model->getName(),
            'type' => $model->getType(),
            'backend_type' => $model->getBackend_type(),
            'default' => $model->getDefault(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Componentcache $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Componentcache();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setName($row->name)
						  ->setType($row->type)
						  ->setBackend_type($row->backend_type)
						  ->setDefault($row->default);
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
           		$model=new Maerdo_Model_Componentcache();
            	$model->setId($data['id'])
					  ->setName($data['name'])
					  ->setType($data['type'])
					  ->setBackend_type($data['backend_type'])
					  ->setDefault($data['default']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }

    public function setDefaultCache($id) {      
    	try {  	
	    	$this->getDbTable()->update(array('default'=>'no'),array());  
	    			
    		if($this->getDbTable()->update(array('default'=>'yes'),array('id=?'=>$id))!=0) {   
    			return(true);
    		} else {
    			return(false);
    		}
    	} catch(Exception $e) {
    		return(false);
    	}
    }
}
