<?
class My_Plugins_Heads extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  
				
		if(Zend_Registry::get('locale')!=null) {
			$layout = Zend_Layout::getMvcInstance();
			$view = $layout->getView();
				
			$locale=Zend_Registry::get('locale');
	
			$module=$request->getModuleName();
			$controller=$request->getControllerName();
			$action=$request->getActionName();
			
			if(is_file(APPLICATION_PATH . '/modules/'.$module.'/configs/heads/'.$controller.'/'.$action.'.ini')) {			
				$config_ini = APPLICATION_PATH . '/modules/'.$module.'/configs/heads/'.$controller.'/'.$action.'.ini';
				$config=new Zend_Config_Ini($config_ini);
				
				if(isset($config->javascript)) {
					foreach($config->javascript as $file) {
						$view->headScript()->appendFile($file);
					}
				}
				if(isset($config->css)) {
					foreach($config->css as $file) {
						$view->headLink()->appendStylesheet($file);
					}
				}
				if($config->title) {
					if($config->title->{$locale}) {				
						$view->HeadTitle($config->title->{$locale});
					}
				}		
			}
		}	else {
			throw new Exception('You need Translate plugin to use Heads plugin.');
		}		
	}
}	