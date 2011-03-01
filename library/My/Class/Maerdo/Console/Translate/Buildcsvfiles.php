<?php 

class My_Class_Maerdo_Console_Translate_Buildcsvfiles {

	public $tree;
	protected $_application_path="application/";
	
	public function update() {
		My_Class_Maerdo_Console::display("2","Building csv files from views scripts");
		$this->_parse($this->_application_path.'/modules/');
	}
	
	/*
	 * Build File Tree
	 */
	protected function _parse($dir) {
		$this->_modules=$this->_scanmodules($dir);
		foreach($this->_modules as $module) {
			$this->tree[$module]=$this->_getDirectoryTree($this->_application_path.'/modules/'.$module.'/views/scripts/');
		}
		$this->_parseTree();
		$this->_writeFiles();
	}
	
	/*
	 * Get Module List
	 */
	public function _scanmodules($dir) {
		$modules=array_diff( scandir( $dir ), Array( ".", ".." ) );
		foreach($modules as $entrie) {
			if(is_dir($dir.$entrie))
				$result[]=$entrie;
		}
		return($result);		
	}	
	
	/*
	 * Scanning tree function
	 */
	protected function _getDirectoryTree( $outerDir){
	    $dirs = array_diff( scandir( $outerDir ), Array( ".", ".." ) );
	    $dir_array = Array();
	    foreach( $dirs as $d ){
	        if( is_dir($outerDir."/".$d)  ){
	            $dir_array[ $d ] = $this->_getDirectoryTree( $outerDir."/".$d);
	        }else{
	        	$dir_array[ $d ] = $d;
	        }   
	    }
	    return $dir_array;
	} 
	
	/*
	 * Send to parse all Tree File
	 */
	protected function _parseTree() {
		foreach($this->tree as $module=>$controllers) {
			foreach($controllers as $controller=>$entries) {
				foreach($entries as $entrie_name=>$entrie) {					
					if(is_array($entrie)) {
						$this->_parseEntrie($this->_application_path.'modules/'.$module.'/views/scripts/'.$controller.'/'.$entrie_name);
					} else {
						$this->_parseFile($this->_application_path.'modules/'.$module.'/views/scripts/'.$controller.'/'.$entrie,$module,$controller);
					}
				}	
			}
		}
	}
	/*
	 * Send to parse recursive function
	 */
	protected function _parseEntrie($path) {
		$files=$this->_getDirectoryTree($path);
		foreach($files as $file_name=>$file) {			
			if(is_array($file)) {
				$this->_parseEntrie($path.'/'.$file_name);
			} else {
				$this->_parseFile($path.'/'.$file);
			}
		}
	}
	/*
	 * Get All translated message in a file
	 */
	protected function _parseFile($file) {
		$fileContent=file_get_contents($file);
		preg_match_all('#translate\(\'(.*)\'\)#',$fileContent,$result);
		$array=explode('/',$file);
		$module=$array[2];
		$controller=$array[5];				
		foreach($result[1] as $entrie) {
			$this->_entrie[$module][$controller][$entrie]=$entrie;
		}
		
	}
	
	/*
	 * Write CSV file
	 */
	protected function _writeFiles() {
		foreach($this->_entrie as $module=>$moduleData) {			
			$config_ini = $this->_application_path . '/configs/translate.ini';
			$config=new Zend_Config_Ini($config_ini);
			$languages=$config->translate->locale;
			foreach ($languages as $dir=>$locale) {
				foreach($moduleData as $controller=>$sentences) {	
					if(!is_dir($this->_application_path.'/modules/'.$module.'/languages/'.$dir))
						mkdir($this->_application_path.'/modules/'.$module.'/languages/'.$dir);				
					if(is_file($this->_application_path.'modules/'.$module.'/languages/'.$dir.'/'.$controller.'.csv')) {
						$fileData=file($this->_application_path.'modules/'.$module.'/languages/'.$dir.'/'.$controller.'.csv');
						$fileContent=array();
						foreach($fileData as $line) {
							$data=explode(';',$line);
							if(count($data)==2)
								$fileContent[$data[0]]=$data[1];
						}
					} else {
						$fileContent=array();
					}
					
					
					if(is_array($sentences)) {
						foreach($sentences as $id=>$sentence) {
							if(!array_key_exists($id,$fileContent)) {
								$fileContent[$id]=$sentence;
							}
						}
					}
					$csvContent="";
					foreach($fileContent as $key=>$sentence) {
						$sentence=str_replace("\n",'',$sentence);
						$csvContent.="$key;$sentence\n";
					}
					
					file_put_contents($this->_application_path."modules/".$module."/languages/".$dir."/".$controller.".csv",$csvContent);
					My_Class_Maerdo_Console::display("3","Write ".$this->_application_path."modules/".$module."/languages/".$dir."/".$controller.".csv");
					My_Class_Maerdo_Console::display("3",count($fileContent)." sentences");
								
				}
			}
		}
		
	}
	
	/*
	 * List all messages to translate
	 */
	public function showEntrie() {
		var_dump($this->_entrie);
	}
}

