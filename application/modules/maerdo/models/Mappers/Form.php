<?php

class Maerdo_Model_Mappers_Form extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Form');
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
            $entry = new Maerdo_Model_Form();
            $entry->setId($row->id)
                  ->setTemplate($row->template)
                  ->setAction($row->action)
                  ->setMethod($row->method)
                  ->setName($row->name)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Maerdo_Model_Form $model
     *
     */
     
    public function save(Maerdo_Model_Form $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Form $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'template' => $model->getTemplate(),
            'action' => $model->getAction(),
            'method' => $model->getMethod(),
            'name' => $model->getName(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Form $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Form();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setTemplate($row->template)
						  ->setAction($row->action)
						  ->setMethod($row->method)
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
           		$model=new Maerdo_Model_Form();
            	$model->setId($data['id'])
					  ->setTemplate($data['template'])
					  ->setAction($data['action'])
					  ->setMethod($data['method'])
					  ->setName($data['name']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
}
