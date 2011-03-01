<?
class My_Plugins_Translate extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  				
		
			if(file_exists(APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/translate.ini')) {
				$config_ini = APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/translate.ini';
				$config=new Zend_Config_Ini($config_ini);
			} else {
				$config_ini = APPLICATION_PATH . '/configs/translate.ini';
				$config=new Zend_Config_Ini($config_ini);				
			}
					
			if($request->getParam('language')!=null) {
				$session = new Zend_Session_Namespace('language');
				$session->language=$request->getParam('language');	
			}
			
			$session = new Zend_Session_Namespace('language');				
			
			if(!$session->language) {
				$session->language=$config->translate->default_language;
			}			
			$locale=$config->translate->locale->{$session->language};
			$session->locale=$locale;
			
			$zl=new Zend_Locale($locale);		
			Zend_Registry::set('locale',$locale);		
			$translate=new Zend_Translate('csv',APPLICATION_PATH . '/modules/'.$request->getModuleName().'/languages/',
																	$session->language,
																	array('scan' => Zend_Translate::LOCALE_DIRECTORY));	
			Zend_Registry::set('Zend_Translate',$translate);	
		
	}
}	