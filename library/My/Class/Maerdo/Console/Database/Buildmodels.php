<?php 

class My_Class_Maerdo_Console_Database_Buildmodels {

	public $_modules;
	protected $_application_path="application/";
	
	public function update() {		
		My_Class_Maerdo_Console::display("2","Building models from DB");
		$this->_getModulesConfig();			
		foreach($this->_modules as $module) {
			foreach($module['tables'] as $table=>$fields) {
				$this->_writeDbTable($module,$table);	
				$this->_writeMapper($module,$table,$fields);
				$this->_writeModel($module,$table,$fields);	
			}
			$this->_writeModelAbstract($module);
			$this->_writeMapperAbstract($module,$table,$fields);	
			My_Class_Maerdo_Console::newline();
		}
	}
	
	/*
	 * Get Module List
	 */
	public function _getModulesConfig() {		
		$modulesList=array_diff( scandir( APPLICATION_PATH.'/modules/' ), Array( ".", ".." ) );
		foreach($modulesList as $module) {		
			if(file_exists(APPLICATION_PATH . '/modules/'.$module.'/configs/database.ini'))	{		
				$config_ini = APPLICATION_PATH . '/modules/'.$module.'/configs/database.ini';
				$config=new Zend_Config_Ini($config_ini);
				
				$this->_modules[$module]['moduleName']=strtolower($module);
				$this->_modules[$module]['db']=$config->db->toArray();
				
				switch($config->db->adapter) {
					case "pdo_mysql":
							$dsn='mysql:dbname='.$config->db->database.';host='.$config->db->host;
				}
				
				$this->_modules[$module]['dbh']=new PDO($dsn,$config->db->login,$config->db->password);
				
				//My_Class_Maerdo_Console::display("3","Add '".$config->db->database."' DB for module $module");			
				
				$this->_modules[$module]['tables']=$this->_retrieveTables($config->db->database,$this->_modules[$module]);			
				foreach($this->_modules[$module]['tables'] as $table=>$tableData) {
					$this->_modules[$module]['tables'][$table]['foreignkeys']=$this->_retrievesForeignkeys($table,$this->_modules[$module]);
					$this->_modules[$module]['tables'][$table]['fields']=$this->_retrieveFields($table,$this->_modules[$module]);
				}
			}
		}				
		return(true);		
	}	
	
	protected function _retrieveTables($name,$module) {
		$sql =  'SHOW TABLES';
    	foreach  ($module['dbh']->query($sql) as $row)  {
        	$tables[$row[0]]=array();
		}
		//My_Class_Maerdo_Console::display("3","Retrieve ".count($tables)." tables in '$name'");
		return($tables);
	}
	
	public function _retrievesForeignkeys($table,$module) {
		$qry=$module['dbh']->query("show create table $table");
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
	
	protected function _retrieveFields($table,$module) {
		$sql =  "DESC $table";
    	foreach ($module['dbh']->query($sql) as $row)  {

    		if(isset($row['Key']) && $row['Key']=="PRI") {
    			$this->setPrimaryKey($module['moduleName'],$table,$row['Field']);  			
    		}
        	$fields[]=$row['Field'];
		}		
		//My_Class_Maerdo_Console::display("4","Retrieve ".count($fields)." fields in tables '$table'");
		return($fields);
		
	}
	
	public function setPrimarykey($module,$table,$field) {
		$this->_modules[$module]['tables'][$table]['primarykey']=$field;
	}
	
	public function getTemplateContent($file,$params) {
            ob_start();            	
                require('utils/Models/templates/'.DIRECTORY_SEPARATOR.$file);
                $data=ob_get_contents();
            ob_end_clean();                        
            return $data;		
	}
	
	public function _writeDbTable($module,$table) {	
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("3","Writing ".$table." Dbtable of  ".$module['moduleName']." module");

		$referenceMap="";
		foreach ($module['tables'][$table]['foreignkeys'] as $info) {
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
            
		$params=array('module'=>ucfirst($module['moduleName']),'table'=>ucfirst($table),'primarykey'=>$module['tables'][$table]['primarykey'],'referencemap'=>$referenceMap,'filename'=>$filename);
		$data=$this->getTemplateContent('dbtable.tpl',$params);
		if(!is_dir('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Dbtable')) {
			mkdir('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Dbtable',0777,true);						
		}
		file_put_contents('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Dbtable'.DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data);
	}

	public function _writeMapper($module,$table,$fields) {
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("3","Writing ".$table." Mapper  of ".$module['moduleName']." module");	
		$params=array('fields'=>$fields['fields'],'module'=>ucfirst($module['moduleName']),'table'=>ucfirst($table),'primarykey'=>$module['tables'][$table]['primarykey'],'filename'=>$filename);
		$data=$this->getTemplateContent('mapper.tpl',$params);
		if(!is_dir('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Mappers')) {
			mkdir('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Mappers',0777,true);						
		}
		file_put_contents('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.'Mappers'.DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data);
	}

	
	public function _writeModel($module,$table,$fields) {
		$filename=ucfirst(preg_replace('/_/','',$table));
		My_Class_Maerdo_Console::display("3","Writing ".$table." Model  of ".$module['moduleName']." module");	
		$params=array('fields'=>$fields['fields'],'module'=>ucfirst($module['moduleName']),'table'=>ucfirst($table),'primarykey'=>$module['tables'][$table]['primarykey'],'filename'=>$filename);
		$data=$this->getTemplateContent('model.tpl',$params);
		file_put_contents('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR.ucfirst($filename).".php",$data);		
	}
	
	public function _writeModelAbstract($module) {
		My_Class_Maerdo_Console::display("3","Writing ".$module['moduleName']." Abstract Model");	
		$params=array('module'=>ucfirst($module['moduleName']));
		$data=$this->getTemplateContent('model_abstract.tpl',$params);
		file_put_contents('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR."Abstract.php",$data);		
	}

	public function _writeMapperAbstract($module,$table,$fields) {
		My_Class_Maerdo_Console::display("3","Writing ".$module['moduleName']." Abstract Mapper ");	
		$params=array('fields'=>$fields['fields'],'module'=>ucfirst($module['moduleName']),'table'=>ucfirst($table),'primarykey'=>$module['tables'][$table]['primarykey']);
		$data=$this->getTemplateContent('mapper_abstract.tpl',$params);
		file_put_contents('generated'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$module['moduleName'].DIRECTORY_SEPARATOR."Mappers".DIRECTORY_SEPARATOR."Abstract.php",$data);		
	}	
				
}

