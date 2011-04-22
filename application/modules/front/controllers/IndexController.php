<?php

class Front_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

	public function permissionAction() {
		
	}
	
	public function loginAction() {
		
		$config = new Zend_Config_Ini(APPLICATION_PATH.'/modules/front/forms/Login.ini', 'form');
		$form = new Zend_Form($config);	
		if ($this->_request->isPost()) {
			if ($form->isValid($_POST)) {
				$redirect_url=My_Class_Maerdo_Auth::login($this->_getParam('username'),$this->_getParam('password'),$this->_request);		
				$this->_redirect($redirect_url);
			} else {
				$this->view->form_error=true;
			}
		} 	
		$this->view->form=$form;
		
	}
	
	public logoutAction() {
		Zend_Auth::getInstance()->clearIdentity();
    	$this->_redirect('/');
	}
}

