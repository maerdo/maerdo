<?php 

class My_Class_Maerdo_Console_Cache_Conf {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating cache configuration");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$caches=$this->getList();
		$this->updateConf($caches);
	}
	
	public function getList() {		
		$caches=$this->_db->query("SELECT * FROM component__cache");		
		return($caches);			
	}
	
	public function updateConf($caches) {			
		$content="";
		foreach($caches as $key=>$value) {						
			$content.="cache.cache$key.name=".$value['name']."\n";
			$content.="cache.cache$key.type=".$value['type']."\n";
			$content.="cache.cache$key.backendtype=".$value['backend_type']."\n";			

			$configuration=$this->_getConfiguration($value['id'],$value['backend_type']);
						
			foreach($configuration['backend'] as $bkey=>$bvalue) {
				$content.="cache.cache$key.backend.$bkey=$bvalue\n";	
			}
			foreach($configuration['frontend'] as $bkey=>$bvalue) {
				$content.="cache.cache$key.frontend.$bkey=$bvalue\n";	
			}
			
			$content.="cache.cache$key.default=".$value['default']."\n";
			
			$content.="\n\n";
		}
		My_Class_Maerdo_Console::display("3","Writing ".APPLICATION_PATH.'/configs/cache.ini');
		file_put_contents(APPLICATION_PATH.'/configs/cache.ini',$content);
	}

	public function _getConfiguration($id,$backendtype) {
		$result=$this->_db->query("SELECT * FROM component__cache__frontendoption WHERE cc_id='$id'");
		$configuration=array();
		foreach($result as $key=>$value) {
			$configuration['frontend'][$value['option']]=$value['value'];
		}
		switch($backendtype) {
			case "file":
				$result=$this->_db->query("SELECT * FROM component__cache__backend__file__option WHERE cc_id='$id'");
				$result=$result->fetch(PDO::FETCH_ASSOC);			
				foreach($result as $key=>$value) {					
					$configuration['backend'][$key]=$value;
				}
				break;
			case "sqlite":
				$result=$this->_db->query("SELECT * FROM component__cache__backend__sqlite__option WHERE cc_id='$id'");
				$stmt=$result->fetch(PDO::FETCH_ASSOC);	
				foreach($result as $key=>$value) {
						$configuration['backend'][$key]=$value;
				}				
				break;
			case "apc":
				$configuration['backend']=array();
				break;
		}
				
		return($configuration);
	}
}

