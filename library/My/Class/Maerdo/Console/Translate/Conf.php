<?php 
/**
 * This class is used to generate translation configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Translate_Conf {

	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Conf::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating translation configuration");	
		$this->main();
	}
	
	/**
	 * Main function : call list function and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Conf::main();
	 * </code>
	 * 	 
	 * @return true
	 */		
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$languages=$this->getList();
		$this->updateConf($languages);
		return true;
	}
	
	/**
	 * Retrieve translation list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Conf::getList();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getList() {		
		$languages=$this->_db->query("SELECT * FROM component__translate");		
		return($languages);			
	}
	
	/**
	 * Write configuration file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Translate_Conf::updateConf($configuration);
	 * </code>
	 * 	 
	 * @param $configuration Array with translation data
	 * 
	 * @return boolean
	 */				
	public function updateConf($languages) {			
		$content="";
		foreach($languages as $key=>$language) {
			if($language['default']=="1") {
				$content.="translate.default_language='".$language['identifiant']."'\n";
			}
			$content.="translate.locale.".$language['identifiant']."='".$language['locale']."'\n";
			$content.="translate.available_language.".$language['identifiant']."='".$language['language_name']."'\n";
		
			$modules=scandir(APPLICATION_PATH.'/modules/');
			foreach($modules as $module) {
				if($module!="." && $module!="..") {							
					if(!is_dir(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$language['identifiant'])) {
						mkdir(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$language['identifiant']);
						$filecontent=';';
						file_put_contents(APPLICATION_PATH.'/modules/'.$module.'/languages/'.$language['identifiant'].'/default_file.csv',$filecontent);
					}	
				}
					
			}
		}	
		if($content!="") {
			return(file_put_contents(APPLICATION_PATH.'/configs/translate.ini',$content));
		} else { 
			My_Class_Maerdo_Console::display("3","No configuration to write");	
			return true;
		}	
	}
}

