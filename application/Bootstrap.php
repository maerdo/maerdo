<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	public function _initModules() {
		$this->bootstrap ( 'frontController' );
		$this->_front = $this->getResource ( 'frontController' );
		$router = $this->_front->getRouter ();
		
		$modules=scandir(APPLICATION_PATH . '/modules');
		foreach($modules as $module) {
			if($module!=".svn" && $module!="." && $module !=".." && !preg_match('#backup#',$module)) {
				// Scan and add module route to router
				$files=scandir(APPLICATION_PATH . '/modules/'.$module.'/configs/routes');
				foreach($files as $file) {
					if($file!=".svn" && $file!="." && $file !=".." && !preg_match('#backup#',$file)) {
						$site_routes_ini = APPLICATION_PATH . '/modules/'.$module.'/configs/routes/'.$file;						
						$site_routes = new Zend_Config_Ini ( $site_routes_ini, APPLICATION_ENV );
						$router->addConfig ( $site_routes, 'routes' );	
					}
				}
				// Update include_path
				$include_path=get_include_path() . PATH_SEPARATOR . APPLICATION_PATH.'/modules/'.$module.'/library'. PATH_SEPARATOR ;				
				set_include_path($include_path);
			}
		}
	}

	public function _initPlugins() {		
		$this->_front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(array(
		    'module'     => 'front',
		    'controller' => 'error',
		    'action'     => 'error'
		)));
		$this->_front->registerPlugin(new My_Plugins_Database());
		$this->_front->registerPlugin(new My_Plugins_Translate());
		$this->_front->registerPlugin(new My_Plugins_Layout());
		$this->_front->registerPlugin(new My_Plugins_Heads());
		$this->_front->registerPlugin(new My_Plugins_Acl());		
	}
	
	public function _initView() {		
  		$view = new Zend_View();
		Zend_Registry::set('view',$view);
	}
	
}
