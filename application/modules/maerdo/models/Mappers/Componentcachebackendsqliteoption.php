<?php

class Maerdo_Model_Mappers_Componentcachebackendsqliteoption extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Componentcachebackendsqliteoption');
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
            $entry = new Maerdo_Model_Componentcachebackendsqliteoption();
            $entry->setId($row->id)
                  ->setCc_id($row->cc_id)
                  ->setCache_dir($row->cache_dir)
                  ->setAutomatic_vacuum_factor($row->automatic_vacuum_factor)
                  ->setCache_db_complete_path($row->cache_db_complete_path)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Component__cache__backend__sqlite__option $model
     *
     */
     
    public function save(Maerdo_Model_Componentcachebackendsqliteoption $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Component__cache__backend__sqlite__option $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'cc_id' => $model->getCc_id(),
            'cache_dir' => $model->getCache_dir(),
            'automatic_vacuum_factor' => $model->getAutomatic_vacuum_factor(),
            'cache_db_complete_path' => $model->getCache_db_complete_path(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Componentcachebackendsqliteoption $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Componentcachebackendsqliteoption();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setCc_id($row->cc_id)
						  ->setCache_dir($row->cache_dir)
						  ->setAutomatic_vacuum_factor($row->automatic_vacuum_factor)
						  ->setCache_db_complete_path($row->cache_db_complete_path);
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
           		$model=new Maerdo_Model_Componentcachebackendsqliteoption();
            	$model->setId($data['id'])
					  ->setCc_id($data['cc_id'])
					  ->setCache_dir($data['cache_dir'])
					  ->setAutomatic_vacuum_factor($data['automatic_vacuum_factor'])
					  ->setCache_db_complete_path($data['cache_db_complete_path']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
