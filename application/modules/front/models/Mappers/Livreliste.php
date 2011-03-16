<?php

class Front_Model_Mappers_Livreliste extends Front_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Front_Model_Dbtable_Livreliste');
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
            $entry = new Front_Model_Livreliste();
            $entry->setNom($row->nom)
                  ->setPrenom($row->prenom)
                  ->setTitre($row->titre)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param Front_Model_Livre_liste $model
     *
     */
     
    public function save(Front_Model_Livreliste $model,$ignoreEmptyValuesOnUpdate=true) {
        if ($ignoreEmptyValuesOnUpdate) {
            $data = $model->toArray();
            foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
            }
        }

        if (null === ($id = $model->get())) {
            unset($data['']);
            $id=$this->getDbTable()->insert($data);
            $model->set($id);
            return($id);
        } else {
            if ($ignoreEmptyValuesOnUpdate) {
             $data = $model->toArray();
             foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
                }
            }

            return($this->getDbTable()->update($data, array(' = ?' => $id)));
        }
    }
   
    /**
     * returns an array, keys are the field names.
     *
     * @param new Front_Model_Livre_liste $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'nom' => $model->getNom(),
            'prenom' => $model->getPrenom(),
            'titre' => $model->getTitre(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Front_Model_Livreliste $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $result = array();

            $rows = $this->getDbTable()->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Front_Model_Livreliste();
                    $result[]=$model;
                    $model->setNom($row->nom)
						  ->setPrenom($row->prenom)
						  ->setTitre($row->titre);
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
           		$model=new Front_Model_Livreliste();
            	$model->setNom($data['nom'])
					  ->setPrenom($data['prenom'])
					  ->setTitre($data['titre']);
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete(' = '.$value);
    }    
}
