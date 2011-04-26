<?="<?php\n"?>

class <?=$params['module']?>_Model_Mappers_<?=$params['filename']?> extends <?=$params['module']?>_Model_Mappers_Abstract {

    public function getDbTable()  {
       if (null === $this->_dbTable) {
            $this->setDbTable('<?=ucfirst($params['module'])?>_Model_Dbtable_<?=ucfirst($params['filename'])?>');
       }
       return $this->_dbTable;
    }
    
	/**
     * fetches all rows 
     *
     * @return array
     */
    public function fetchAll()  {
    	if(My_Class_Maerdo_Cache::test('DB_<?=$params['module']?>_<?=$params['filename']?>_fetchAll')) {
    		$resultSet=My_Class_Maerdo_Cache::get('DB_<?=$params['module']?>_<?=$params['filename']?>_fetchAll');
    	} else {
        	$resultSet = $this->getDbTable()->fetchAll();
        	My_Class_Maerdo_Cache::set('DB_<?=$params['module']?>_<?=$params['filename']?>_fetchAll',$resultSet,0,array('sqlSelect'));
        }	
        
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new <?=$params['module']?>_Model_<?=$params['filename']?>();
            $entry<?$count=count($params['fields']);foreach ($params['fields'] as $column): $count--?>->set<?=ucfirst($column)?>($row-><?=$column?>)
                  <?endforeach;?>
            ->setMapper($this);
            $entries[] = $entry;
        }
        return $entries;
    }


	/**
     * saves current row
     *
     * @param <?=$params['module']?>_Model_<?=$params['table']?> $model
     *
     */
     
    public function save(<?=$params['module']?>_Model_<?=$params['filename']?> $model,$ignoreEmptyValuesOnUpdate=true) {
        if ($ignoreEmptyValuesOnUpdate) {
            $data = $model->toArray();
            foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
            }
        }

        if (null === ($id = $model->get<?=ucfirst($params['primarykey'])?>())) {
            unset($data['<?=$params['primarykey']?>']);
            $id=$this->getDbTable()->insert($data);
            $model->set<?=ucfirst($params['primarykey'])?>($id);
            return($id);
        } else {
            if ($ignoreEmptyValuesOnUpdate) {
             $data = $model->toArray();
             foreach ($data as $key=>$value) {
                if (is_null($value) or $value == '')
                    unset($data[$key]);
                }
            }

            return($this->getDbTable()->update($data, array('<?=$params['primarykey']?> = ?' => $id)));
        }
    }
   
    /**
     * returns an array, keys are the field names.
     *
     * @param new <?=$params['module']?>_Model_<?=$params['table']?> $model
     * @return array
     *
     */
    public function toArray($model) {
        $result = array(

            <?foreach ($params['fields'] as $column):?>'<?=$column?>' => $model->get<?=ucfirst($column)?>(),
            <?endforeach;?>
        
        );
        return $result;
    }   
    
    /**
     * finds rows where $field equals $value
     *
     * @param string $field
     * @param mixed $value
     * @param <?=$params['module']?>_Model_<?=$params['filename']?> $model
     * @return array
     */
    public function findByField($field, $value, $model)  {            
            $select = $this->getDbTable()->select();
            $select->where("{$field} = ?", $value);
           
			$rows=My_Class_Maerdo_Cache::getQueryResult($select);
			
			$result = array();           
            foreach ($rows as $row) {
                    $model=new <?=$params['module']?>_Model_<?=$params['filename']?>();
                    $result[]=$model;
                    $model<?$count=count($params['fields']); foreach ($params['fields'] as $column): $count--?>->set<?=ucfirst($column)?>($row-><?=$column?>)<?if ($count> 0) echo "\n\t\t\t\t\t\t  "; endforeach;?>;
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
            
	    	if(My_Class_Maerdo_Cache::test('DB_<?=$params['module']?>_<?=$params['filename']?>_find_'.$id)) {
	    		$row=My_Class_Maerdo_Cache::get('DB_<?=$params['module']?>_<?=$params['filename']?>_find_'.$id);
	    	} else {
	        	$row = $table->find($id);
	        	My_Class_Maerdo_Cache::set('DB_<?=$params['module']?>_<?=$params['filename']?>_find_'.$id,$resultSet,0,array('sqlSelect'));
	        }	
                    
   			foreach ($row as $data) {
           		$model=new <?=$params['module']?>_Model_<?=$params['filename']?>();
            	$model<?$count=count($params['fields']); foreach ($params['fields'] as $column): $count--?>->set<?=ucfirst($column)?>($data['<?=$column?>'])<?if ($count> 0) echo "\n\t\t\t\t\t  "; endforeach;?>;
			}
            return ($model);
    } 
    
    
    public function deleteByPrimarykey($value) {
        return $this->getDbTable()->delete('<?=$params['primarykey']?> = '.$value);
    }    
}
