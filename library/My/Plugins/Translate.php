<?
class My_Plugins_Translate extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  				

			if($request->getModuleName()=="maerdo") {
				$config_ini = APPLICATION_PATH . '/modules/maerdo/configs/translate.ini';
				$config=new Zend_Config_Ini($config_ini);											
			} else {
				if(is_file(APPLICATION_PATH . '/configs/translate.ini')) {
					$config_ini = APPLICATION_PATH . '/configs/translate.ini';
					$config=new Zend_Config_Ini($config_ini);		
				}						
			}
			
			if(isset($config)) {						
				if($request->getParam('language')!=null) {
					$session = new Zend_Session_Namespace('language');
					$session->language=$request->getParam('language');	
				}
				
				$session = new Zend_Session_Namespace('language');				
				
				if($config->translate->default_language) {
					if($request->getModuleName()=="maerdo") {
						$session->language=$config->translate->default_language;					
					} else {
						if(!$session->language) {
							$session->language=$config->translate->default_language;
						}	
					}
				}
				if($config->translate->locale->{$session->language}) {	
					$locale=$config->translate->locale->{$session->language};
					$session->locale=$locale;
					
					
					
					$zl=new Zend_Locale($locale);		
					Zend_Registry::set('locale',$locale);
					
					if($request->getModuleName()!="default") {		
						$translate=new Zend_Translate('csv',APPLICATION_PATH . '/modules/'.$request->getModuleName().'/languages/',
																				$session->language,
																				array('scan' => Zend_Translate::LOCALE_DIRECTORY));	
						Zend_Registry::set('Zend_Translate',$translate);	
					}
				}	
			} else {
				Zend_Registry::set('locale','en_US');	
			}							
	}
}	