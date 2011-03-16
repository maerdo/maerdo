<?php

class Front_Model_Mappers_Livre extends Front_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Front_Model_Dbtable_Livre');
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
            $entry = new Front_Model_Livre();
            $entry->setId($row->id)
                  ->setId_auteur($row->id_auteur)
                  ->setNom($row->nom)
                  ->setDate($row->date)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Front_Model_Livre $model
     *
     */
     
    public function save(Front_Model_Livre $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Front_Model_Livre $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'id_auteur' => $model->getId_auteur(),
            'nom' => $model->getNom(),
            'date' => $model->getDate(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Front_Model_Livre $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Front_Model_Livre();
                    $result[]=$model;
                    $model->setId($row->id)
						  ->setId_auteur($row->id_auteur)
						  ->setNom($row->nom)
						  ->setDate($row->date);
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
           		$model=new Front_Model_Livre();
            	$model->setId($data['id'])
					  ->setId_auteur($data['id_auteur'])
					  ->setNom($data['nom'])
					  ->setDate($data['date']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('id = '.$value);
    }    
    
    public function getAllLivres() {
    	$select=$this->getDbTable()->select();
    	
    	$select->from('livre');
    	
    	$result=My_Class_Maerdo_Cache::getQueryResult($select,'60','default');
    	return($result);
    
    }
}
