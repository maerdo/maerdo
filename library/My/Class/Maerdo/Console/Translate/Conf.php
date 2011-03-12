<?php 

class My_Class_Maerdo_Console_Translate_Conf {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","Updating translation configuration");	
		$this->main();
	}
	
	public function main() {
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$languages=$this->getList();
		$this->updateConf($languages);
	}
	
	public function getList() {		
		$languages=$this->_db->query("SELECT * FROM component__translate");		
		return($languages);			
	}
	
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
		file_put_contents(APPLICATION_PATH.'/configs/translate.ini',$content);
	}
}

