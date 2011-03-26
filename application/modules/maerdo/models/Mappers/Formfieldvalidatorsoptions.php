<?php

class Maerdo_Model_Mappers_Formfieldvalidatorsoptions extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Formfieldvalidatorsoptions');
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
            $entry = new Maerdo_Model_Formfieldvalidatorsoptions();
            $entry->setId($row->id)
                  ->setForm__field_validators_id($row->form__field_validators_id)
                  ->setOption($row->option)
                  ->setValue($row->value)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Form__field_validators_options $model
     *
     */
     
    public function save(Maerdo_Model_Formfieldvalidatorsoptions $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Form__field_validators_options $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'form__field_validators_id' => $model->getForm__field_validators_id(),
            'option' => $model->getOption(),
            'value' => $model->getValue(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Formfieldvalidatorsoptions $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Formfieldvalidatorsoptions();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setForm__field_validators_id($row->form__field_validators_id)
						  ->setOption($row->option)
						  ->setValue($row->value);
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
           		$model=new Maerdo_Model_Formfieldvalidatorsoptions();
            	$model->setId($data['id'])
					  ->setForm__field_validators_id($data['form__field_validators_id'])
					  ->setOption($data['option'])
					  ->setValue($data['value']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
