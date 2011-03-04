<?php

class Front_Model_Mappers_Componenttranslate extends Front_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Front_Model_Dbtable_Componenttranslate');
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
            $entry = new Front_Model_Componenttranslate();
            $entry->setId($row->id)
                  ->setModule_id($row->module_id)
                  ->setIdentifiant($row->identifiant)
                  ->setLocale($row->locale)
                  ->setLanguage_name($row->language_name)
                  ->setDefault($row->default)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Front_Model_Component__translate $model
     *
     */
     
    public function save(Front_Model_Componenttranslate $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Front_Model_Component__translate $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'module_id' => $model->getModule_id(),
            'identifiant' => $model->getIdentifiant(),
            'locale' => $model->getLocale(),
            'language_name' => $model->getLanguage_name(),
            'default' => $model->getDefault(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Front_Model_Componenttranslate $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Front_Model_Componenttranslate();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setModule_id($row->module_id)
						  ->setIdentifiant($row->identifiant)
						  ->setLocale($row->locale)
						  ->setLanguage_name($row->language_name)
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
           		$model=new Front_Model_Componenttranslate();
            	$model->setId($data['id'])
					  ->setModule_id($data['module_id'])
					  ->setIdentifiant($data['identifiant'])
					  ->setLocale($data['locale'])
					  ->setLanguage_name($data['language_name'])
					  ->setDefault($data['default']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
