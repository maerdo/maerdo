<?php 
/**
 * This class is used to generate translate configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Translate_Buildcsvfiles {


	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","Building csv files from views scripts");
		$this->_parse(APPLICATION_PATH.'/modules/');
		return true;
	}
	
	/**
	 * Build file tree.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_parse();
	 * </code>
	 *
	 * @return true
	 */
	protected function _parse($dir) {
		$this->_modules=$this->_scanmodules($dir);		
		foreach($this->_modules as $module) {
			$this->tree[$module]=$this->_getDirectoryTree(APPLICATION_PATH.'/modules/'.$module.'/views/scripts/');
		}		
		$this->_parseTree();
		$this->_writeFiles();
		return true;
	}
	
	/**
	 * Get module list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_scanmodules();
	 * </code>
	 *
	 * @return array
	 */
	public function _scanmodules($dir) {
		$modules=array_diff( scandir( $dir ), Array( ".", ".." ) );
		foreach($modules as $entrie) {
			if(is_dir($dir.$entrie))
				$result[]=$entrie;
		}
		return($result);		
	}	
	
	/**
	 * Scan tree function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_getDirectoryTree();
	 * </code>
	 *
	 * @return array
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
	
	/**
	 * Send all entrie in tree to parse function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_parseTree();
	 * </code>
	 *
	 * @return true
	 */
	protected function _parseTree() {
		foreach($this->tree as $module=>$controllers) {
			foreach($controllers as $controller=>$entries) {
				foreach($entries as $entrie_name=>$entrie) {					
					if(is_array($entrie)) {
						$this->_parseEntrie(APPLICATION_PATH.'/modules/'.$module.'/views/scripts/'.$controller.'/'.$entrie_name);
					} else {
						$this->_parseFile(APPLICATION_PATH.'/modules/'.$module.'/views/scripts/'.$controller.'/'.$entrie,$module,$controller);
					}
				}	
			}
		}
		
		return true;
	}

	/**
	 * Send all entrie in tree to parse recursive function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_parseEntrie();
	 * </code>
	 *
	 * @return true
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
		return true;
	}
	/*
	 * Get All translated message in a file
	 */
	protected function _parseFile($file) {
		$fileContent=file_get_contents($file);
		preg_match_all('#translate\(\'(.*)\'\)#',$fileContent,$result);
		$array=explode('/',$file);				
		if($array[6]=="modules") {
			$module=$array[7];
			$controller=$array[10];
		} else {
			$module=$array[6];
			$controller=$array[9];
		}						
		foreach($result[1] as $entrie) {
			$this->_entrie[$module][$controller][$entrie]=$entrie;
		}
		
	}
	
	/**
	 * Write translation file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Buildcsvfiles::_writeFiles();
	 * </code>
	 *
	 * @return true
	 */
	protected function _writeFiles() {		
		foreach($this->_entrie as $module=>$moduleData) {					
			$config_ini = APPLICATION_PATH . '/configs/translate.ini';
			$config=new Zend_Config_Ini($config_ini);
			$languages=$config->translate->locale;
			foreach ($languages as $dir=>$locale) {
				foreach($moduleData as $controller=>$sentences) {						
					if(!is_dir(APPLICATION_PATH.'/modules/'.$module.'/languages/'))  {						
						mkdir(APPLICATION_PATH.'/modules/'.$module.'/languages');		
					}				
					if(!is_dir(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$dir))
						mkdir(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$dir);				
					if(is_file(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$dir.'/'.$controller.'.csv')) {
						$fileData=file(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$dir.'/'.$controller.'.csv');
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
					
					file_put_contents(APPLICATION_PATH."/modules/".$module."/languages/".$dir."/".$controller.".csv",$csvContent);
					My_Class_Maerdo_Console::display("3","Write ".APPLICATION_PATH."/modules/".$module."/languages/".$dir."/".$controller.".csv");
					My_Class_Maerdo_Console::display("3",count($fileContent)." sentences");
								
				}
			}
		}
		return true;
	}

}

