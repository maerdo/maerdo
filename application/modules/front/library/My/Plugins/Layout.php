<?php 
class My_Plugins_Layout extends Zend_Controller_Plugin_Abstract {
	
	protected $view;
	
	public function postDispatch(Zend_Controller_Request_Abstract $request) {		
		$this->view = Zend_Layout::getMvcInstance()->getView();

		if($request->getModuleName()!="maerdo") {
			$this->_layout($request);
		}	
		
	}
	
	protected function _layout(Zend_Controller_Request_Abstract $request) {
		// Set layout path
		$this->_setLayoutPath($request);
		// Rendering Sidebar
		//$this->_renderingSidebar($request);
		
		// Rendering navigation menu
		$this->view->render('snippets/top_menu.phtml');
		
	}
	

    public function _setLayoutPath(Zend_Controller_Request_Abstract $request) {
        // Insert current module layout dir to to overide any default layouts
        if ( $request->getModuleName() != 'default' ) {

            $layoutPath = APPLICATION_PATH . '/modules/' .
                          $request->getModuleName() . '/layouts/scripts';
			
            $layout=Zend_Layout::getMvcInstance();
            $paths = array();
            $paths[] = $layout->getViewScriptPath();
            $paths[] = $layoutPath;

            //var_dump($paths);die;
            $layout->setViewScriptPath($paths);
        }
    }
	
	protected function _renderingSidebar(Zend_Controller_Request_Abstract $request) {
		$controller=strtolower($request->getControllerName());
		$action=strtolower($request->getActionName());
		$this->view->render('snippets/sidebar/'.$controller.'/'.$action.'.phtml');	
	}
}
?>