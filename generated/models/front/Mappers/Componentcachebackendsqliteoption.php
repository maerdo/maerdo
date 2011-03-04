<?php

class Front_Model_Mappers_Componentcachebackendsqliteoption extends Front_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Front_Model_Dbtable_Componentcachebackendsqliteoption');
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
            $entry = new Front_Model_Componentcachebackendsqliteoption();
            $entry->setId($row->id)
                  ->setCc_id($row->cc_id)
                  ->setCache_dir($row->cache_dir)
                  ->setFile_locking($row->file_locking)
                  ->setRead_control($row->read_control)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Front_Model_Component__cache__backend__sqlite__option $model
     *
     */
     
    public function save(Front_Model_Componentcachebackendsqliteoption $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Front_Model_Component__cache__backend__sqlite__option $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'cc_id' => $model->getCc_id(),
            'cache_dir' => $model->getCache_dir(),
            'file_locking' => $model->getFile_locking(),
            'read_control' => $model->getRead_control(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Front_Model_Componentcachebackendsqliteoption $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Front_Model_Componentcachebackendsqliteoption();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setCc_id($row->cc_id)
						  ->setCache_dir($row->cache_dir)
						  ->setFile_locking($row->file_locking)
						  ->setRead_control($row->read_control);
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
           		$model=new Front_Model_Componentcachebackendsqliteoption();
            	$model->setId($data['id'])
					  ->setCc_id($data['cc_id'])
					  ->setCache_dir($data['cache_dir'])
					  ->setFile_locking($data['file_locking'])
					  ->setRead_control($data['read_control']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
