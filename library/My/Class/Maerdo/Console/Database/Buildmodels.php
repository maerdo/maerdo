<?php 
/**
 * This class is used to generate auth configuration file.
 * 
 * rewriting from http://code.google.com/p/zend-db-model-generator/
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Database_Buildmodels {

	public $_databases;	
	
	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::update();
	 * </code>
	 * 	 
	 * @return true
	 */				
	public function update() {		
		My_Class_Maerdo_Console::display("2","Building models from DB");
		$this->_getDatabaseConfig();	
		if(is_array($this->_databases))	{	
			foreach($this->_databases as $database) {
				foreach($database['tables'] as $table=>$fields) {				
					$this->_writeDbTable($database,$table);	
					$this->_writeMapper($database,$table,$fields);
					$this->_writeModel($database,$table,$fields);	
				}
				$this->_writeModelAbstract($database);
				$this->_writeMapperAbstract($database);	
				My_Class_Maerdo_Console::newline();
			}
		} else {
			My_Class_Maerdo_Console::display("3","No database configured");
		}
		return true;
	}
	
	/**
	 * Get databases configurations (fields, foreigns keys ...) .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_getDatabaseConfig();
	 * </code>
	 * 	 
	 * @return true
	 */		
	public function _getDatabaseConfig() {		
		$config_ini = APPLICATION_PATH . '/configs/database.ini';
		$config=new Zend_Config_Ini($config_ini);
		if($config->db) {
			foreach($config->db as $db) {
				if($db->storage_name!="maerdo_db") {		
					$default_module=ucfirst($this->_getDefaultModule($db->storage_name));
					
					$this->_databases[$db->storage_name]['storage_name']=strtolower($db->storage_name);
					$this->_databases[$db->storage_name]['default_module']=$default_module;
					$this->_databases[$db->storage_name]['db']=$db->toArray();
					
					switch($db->adapter) {
						case "pdo_mysql":
							$dsn='mysql:dbname='.$db->database.';host='.$db->host;					
							break;
					}						
					$this->_databases[$db->storage_name]['dbh']=new PDO($dsn,$db->login,$db->password);
					
					My_Class_Maerdo_Console::display("3","Add '".$db->storage_name."' DB");			
					
					$this->_databases[$db->storage_name]['tables']=$this->_retrieveTables($db->database,$this->_databases[$db->storage_name]);			
					foreach($this->_databases[$db->storage_name]['tables'] as $table=>$tableData) {
						$this->_databases[$db->storage_name]['tables'][$table]['foreignkeys']=$this->_retrievesForeignkeys($table,$this->_databases[$db->storage_name]);
						$this->_databases[$db->storage_name]['tables'][$table]['fields']=$this->_retrieveFields($table,$this->_databases[$db->storage_name]);
					}
				}	
			}
		}				
		return(true);		
	}	
	
	/**
	 * Retrieve tables for a database .
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_retrieveTables($name,$database);
	 * </code>
	 * 	 
	 * @param $name Database name
	 * @param $database database informations
	 * 
	 * @return array
	 */			
	protected function _retrieveTables($name,$database) {
		$sql =  'SHOW TABLES';
    	foreach  ($database['dbh']->query($sql) as $row)  {
        	$tables[$row[0]]=array();
		}
		//My_Class_Maerdo_Console::display("3","Retrieve ".count($tables)." tables in '$name'");
		return($tables);
	}
	
	/**
	 * Retrieve Foreigns keys for a table.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_retrievesForeignkeys($table,$database);
	 * </code>
	 * 	 
	 * @param $table Table
	 * @param $database database informations
	 * 
	 * @return array
	 */			
	public function _retrievesForeignkeys($table,$database) {
		$qry=$database['dbh']->query("show create table $table");
		$res=$qry->fetchAll();
		$query=$res[0]['Create Table'];
        $lines=split("\n",$query);
        $tblinfo=array();
        $keys=array();
        foreach ($lines as $line) {
            preg_match('/^\s*CONSTRAINT `(\w+)` FOREIGN KEY \(`(\w+)`\) REFERENCES `(\w+)` \(`(\w+)`\)/',$line,$tblinfo);
            if (sizeof($tblinfo)>0) {
                $keys[]=array(
                  'key_name'=>$tblinfo[1],
                  'column_name'=>$tblinfo[2],
                  'foreign_tbl_name'=>$tblinfo[3],
                  'foreign_tbl_column_name'=>$tblinfo[4]
                );
            }

        }
        return($keys);		
	}
	
	/**
	 * Retrieve table fields informations.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_retrieveFields($table,$database);
	 * </code>
	 * 	 
	 * @param $table Table
	 * @param $database database informations
	 * 
	 * @return array
	 */		
	protected function _retrieveFields($table,$database) {
		$sql =  "DESC $table";
    	foreach ($database['dbh']->query($sql) as $row)  {

    		if(isset($row['Key']) && $row['Key']=="PRI") {
    			$this->setPrimaryKey($database['storage_name'],$table,$row['Field']);  			
    		}
        	$fields[]=$row['Field'];
		}		
		//My_Class_Maerdo_Console::display("4","Retrieve ".count($fields)." fields in tables '$table'");
		return($fields);
		
	}
	
	/**
	 * Update classes variables to indicate which field is a primary key.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::setPrimarykey($database,$table,$field);
	 * </code>
	 * 	 
	 * @param $database Database name
	 * @param $table Table name
	 * @param $field Field name
	 * 
	 * @return array
	 */		
	public function setPrimarykey($database,$table,$field) {		
		$this->_databases[$database]['tables'][$table]['primarykey']=$field;

	}
	
	/**
	 * Get template content an pass variables.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::getTemplateContent($file,$params);
	 * </code>
	 * 	 
	 * @param $file path of template
	 * @param $params params to pass to template
	 * @return string
	 */		
	public function getTemplateContent($file,$params) {
            ob_start();            	
                require(APPLICATION_PATH.'/../utils/Models/templates/'.DIRECTORY_SEPARATOR.$file);
                $data=ob_get_contents();
            ob_end_clean();                        
            return $data;		
	}
	
	/**
	 * Write DBTable file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_writeDbTable($database,$table);
	 * </code>
	 * 	 
	 * @param $database Database informations
	 * @param $table Table name
	 * @return boolean
	 */			
	public function _writeDbTable($database,$table) {	
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("4","Writing ".$table." Dbtable of  ".$database['storage_name']." database");

		$referenceMap="";
		foreach ($database['tables'][$table]['foreignkeys'] as $info) {
                $refTableClass=ucfirst($info['foreign_tbl_name']);
                $key=ucfirst($info['key_name']);
                $references[]="
                   '$key' => array(
                       'columns' => '{$info['column_name']}',
                       'refTableClass' => '{$refTableClass}',
                       'refColumns' =>  '{$info['foreign_tbl_column_name']}'
                           )";
                if (sizeof($references)>0) {
                    $referenceMap=" protected \$_referenceMap    = array(".
                    join(',',$references). "          \n                );";
                }
                
            }            
		$params=array('module'=>ucfirst($database['default_module']),'table'=>ucfirst($table),'primarykey'=>@$database['tables'][$table]['primarykey'],'referencemap'=>$referenceMap,'filename'=>$filename);
		$data=$this->getTemplateContent('dbtable.tpl',$params);
		if(!is_dir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.'Dbtable')) {			
			mkdir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.'Dbtable',0777,true);						
		}		
		return(file_put_contents(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.'Dbtable'.DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data));		
	}

	/**
	 * Write Mapper file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_writeMapper($database,$table,$fields);
	 * </code>
	 * 	 
	 * @param $database Database informations
	 * @param $table Table name
	 * @param $fields List of fields
	 * @return boolean
	 */		
	public function _writeMapper($database,$table,$fields) {
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("4","Writing ".$table." Mapper  of ".$database['storage_name']." module");	
		$params=array('fields'=>$fields['fields'],'module'=>$database['default_module'],'table'=>ucfirst($table),'primarykey'=>@$database['tables'][$table]['primarykey'],'filename'=>$filename);
		$data=$this->getTemplateContent('mapper.tpl',$params);
		if(!is_dir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.'Mappers')) {
			mkdir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['st)orage_name'].DIRECTORY_SEPARATOR.'Mappers',0777,true);						
		}
		return(file_put_contents(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.'Mappers'.DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data));
	}

	/**
	 * Write Model file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_writeModel($database,$table,$fields);
	 * </code>
	 * 	 
	 * @param $database Database informations
	 * @param $table Table name
	 * @param $fields List of fields
	 * @return boolean
	 */			
	public function _writeModel($database,$table,$fields) {
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("4","Writing ".$table." Model  of ".$database['storage_name']." database");	
		$params=array('fields'=>$fields['fields'],'module'=>$database['default_module'],'table'=>ucfirst($table),'primarykey'=>@$database['tables'][$table]['primarykey'],'filename'=>$filename);
		$data=$this->getTemplateContent('model.tpl',$params);
		if(!is_dir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name']))
			mkdir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name']);		
		file_put_contents(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data);		
	}
	
	/**
	 * Write Model Abstract file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_writeModel($database);
	 * </code>
	 * 	 
	 * @param $database Database informations
	 * @return boolean
	 */		
	public function _writeModelAbstract($database) {
		My_Class_Maerdo_Console::display("3","Writing ".$database['storage_name']." Abstract Model");	
		$params=array('module'=>ucfirst($database['storage_name']));
		$data=$this->getTemplateContent('model_abstract.tpl',$params);
		if(!is_dir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name']))
			mkdir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name']);
		file_put_contents(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR."Abstract.php",$data);		
	}

	/**
	 * Write Mapper Abstract file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_writeMapperAbstract($database);
	 * </code>
	 * 	 
	 * @param $database Database informations
	 * @return boolean
	 */			
	public function _writeMapperAbstract($database) {
		My_Class_Maerdo_Console::display("3","Writing ".$database['storage_name']." Abstract Mapper ");	
		$params=array('module'=>ucfirst($database['storage_name']));
		$data=$this->getTemplateContent('mapper_abstract.tpl',$params);
		if(!is_dir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR."Mappers"))
			mkdir(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR."Mappers");
		file_put_contents(APPLICATION_PATH.'/../generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$database['storage_name'].DIRECTORY_SEPARATOR."Mappers".DIRECTORY_SEPARATOR."Abstract.php",$data);		
	}	

	/**
	 * Get default module for a database.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Database_Buildmodels::_getDefaultModule($storage_name);
	 * </code>
	 * 	 
	 * @param $storage_name storage name in maerdo Db of database
	 * @return string
	 */		
	public function _getDefaultModule($storage_name) {
		$db=My_Class_Maerdo_Console_Db::getDbInstance();
		$query="SELECT m.name as module_name FROM component__database as cd INNER JOIN component__databasemodule as cdm ON cd.id=cdm.database_id INNER JOIN module as m ON m.id=cdm.module_id  WHERE cd.name='$storage_name'";				
		$result=$db->query($query)->fetchAll();
		if(isset($result[0])) {
			if($result[0]['module_name']!=NULL) {
				return ($result[0]['module_name']);
			} else { 
				return ("Default");
			}
		} else { 
			return ("Default");
		}		
	}
}

