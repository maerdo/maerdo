<?php

class Maerdo_IndexController extends Zend_Controller_Action
{

    public function init() {

    }

    public function indexAction() {
    }
	
    public function permissionAction() {
    	
    }
	
	public function loginAction() {		    	
		$this->_helper->layout->disableLayout();   		
		$config = new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/forms/Core/Login.ini', 'form');
		$form = new Zend_Form($config);	
		if ($this->_request->isPost()) {
			if ($form->isValid($_POST)) {
				$redirect_url=My_Class_Maerdo_Auth::login($this->_getParam('username'),$this->_getParam('password'),$this->_request);		
				$this->_redirect($redirect_url);
			} else {
				$this->view->form_error=true;
			}
		} 	
		if($this->_getParam('error')=="error") {
			$this->view->error=true;
		}
		$this->view->form=$form;	
    }   

    public function logoutAction() {
    	Zend_Auth::getInstance()->clearIdentity();
    	$this->_redirect('/maerdo/login');
    }
    
    public function emptyAction() {
    	$this->_helper->layout()->disableLayout();
    }
    
    public function testAction() { 	
    	die;
    }
   
}

