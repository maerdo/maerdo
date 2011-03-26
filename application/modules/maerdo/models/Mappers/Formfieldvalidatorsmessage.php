<?php

class Maerdo_Model_Mappers_Formfieldvalidatorsmessage extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Formfieldvalidatorsmessage');
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
            $entry = new Maerdo_Model_Formfieldvalidatorsmessage();
            $entry->setId($row->id)
                  ->setForm__field_validators_id($row->form__field_validators_id)
                  ->setKey($row->key)
                  ->setMessage($row->message)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Form__field_validators_message $model
     *
     */
     
    public function save(Maerdo_Model_Formfieldvalidatorsmessage $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Form__field_validators_message $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'form__field_validators_id' => $model->getForm__field_validators_id(),
            'key' => $model->getKey(),
            'message' => $model->getMessage(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Formfieldvalidatorsmessage $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Formfieldvalidatorsmessage();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setForm__field_validators_id($row->form__field_validators_id)
						  ->setKey($row->key)
						  ->setMessage($row->message);
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
           		$model=new Maerdo_Model_Formfieldvalidatorsmessage();
            	$model->setId($data['id'])
					  ->setForm__field_validators_id($data['form__field_validators_id'])
					  ->setKey($data['key'])
					  ->setMessage($data['message']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
