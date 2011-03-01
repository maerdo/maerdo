<?php

class Maerdo_Model_Mappers_Page extends Maerdo_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('Maerdo_Model_Dbtable_Page');
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
            $entry = new Maerdo_Model_Page();
            $entry->setId($row->id)
                  ->setModule_id($row->module_id)
                  ->setController_id($row->controller_id)
                  ->setAction_id($row->action_id)
                  ->setName($row->name)
                  ->setUrl($row->url)
                  ->setDescription($row->description)
                              ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }
    
	/**
     * saves current row
     *
     * @param Maerdo_Model_Page $model
     *
     */
     
    public function save(Maerdo_Model_Page $model,$ignoreEmptyValuesOnUpdate=true) {
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
     * @param new Maerdo_Model_Page $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            'id' => $model->getId(),
            'module_id' => $model->getModule_id(),
            'controller_id' => $model->getController_id(),
            'action_id' => $model->getAction_id(),
            'name' => $model->getName(),
            'url' => $model->getUrl(),
            'description' => $model->getDescription(),
                    
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param Maerdo_Model_Page $model
     * @return array
     */
    public function findByField($field, $value, $model)  {
            $table = $this->getDbTable();
            $select = $table->select();
            $result = array();

            $rows = $table->fetchAll($select->where("{$field} = ?", $value));
            foreach ($rows as $row) {
                    $model=new Maerdo_Model_Page();
                    $result[]=$model;
                    $model->setId($row->id)
							->setModule_id($row->module_id)
							->setController_id($row->controller_id)
							->setAction_id($row->action_id)
							->setName($row->name)
							->setUrl($row->url)
							->setDescription($row->description);
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
           		$model=new Maerdo_Model_Page();
            	$model->setId($data['id'])
						->setModule_id($data['module_id'])
						->setController_id($data['controller_id'])
						->setAction_id($data['action_id'])
						->setName($data['name'])
						->setUrl($data['url'])
						->setDescription($data['description']);
			}
            return ($model);
    } 
    
    public function insert($data)
    {
        return $this->getDbTable()->insert($data);
    }         
    
        
    public function deleteByPrimarykey($value)
    {
        return $this->getDbTable()->delete('id = '.$value);
    }      
  
 	public function delete($where)
    {
        return $this->getDbTable()->delete($where);
    } 
    
    
    public function getPage() {
    	$table = $this->getDbTable();
		$select = $table->select();
		$select->from('page');
		
		$result=My_Class_Maerdo_Cache::getQueryResult($select,60);
    }
    /*
     * Retrieve Pages
     */
    public function retrievePages($module_id,$controller_id) {
    	$result=array();
		$table = $this->getDbTable();
		$select = $table->select();
		$select->from('page');
				
		$where="";
		if($module_id!=NULL && $module_id!="All")
			$where="module_id='$module_id' ";
		if($controller_id!=NULL && $controller_id!='All')
			if(strlen($where)==0)
				$where.="controller_id='$controller_id'";
			else
				$where.=" AND controller_id='$controller_id'";
		
		if(strlen($where)>0)
			$select->where($where);
		

		
		$stmt=$select->query();
		
		$rows=$stmt->fetchAll();
     	if(count($rows)>0) {
			foreach ($rows as $row) {
	             $model=new Maerdo_Model_Page();     
	             $model->setId($row['id'])
					->setModule_id($row['module_id'])
					->setController_id($row['controller_id'])
					->setAction_id($row['action_id'])
					->setName($row['name'])
					->setUrl($row['url'])
					->setDescription($row['description']);
	             $result[]=$model;
	        }
     	}    
		return($result);
    }
}
