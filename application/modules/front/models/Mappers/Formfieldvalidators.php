<?php

class Maerdo_Model_Mappers_Formfieldvalidators extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Formfieldvalidators');
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
            $entry = new Maerdo_Model_Formfieldvalidators();
            $entry->setId($row->id)
                  ->setField_id($row->field_id)
                  ->setValidator($row->validator)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Form__field_validators $model
     *
     */
     
    public function save(Maerdo_Model_Formfieldvalidators $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Form__field_validators $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'field_id' => $model->getField_id(),
            'validator' => $model->getValidator(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Formfieldvalidators $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Formfieldvalidators();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setField_id($row->field_id)
						  ->setValidator($row->validator);
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
           		$model=new Maerdo_Model_Formfieldvalidators();
            	$model->setId($data['id'])
					  ->setField_id($data['field_id'])
					  ->setValidator($data['validator']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
