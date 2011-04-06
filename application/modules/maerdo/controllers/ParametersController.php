<?php

class Maerdo_ParametersController extends Zend_Controller_Action
{

	public function init() {
		$this->view->sidebarCountPage=My_Class_Maerdo_Framework_Page::countAll();
    	$this->view->sidebarCountModule=My_Class_Maerdo_Framework_Module::countAll();
    	$this->view->sidebarCountController=My_Class_Maerdo_Framework_Controller::countAll();
    	$this->view->sidebarCountAction=My_Class_Maerdo_Framework_Action::countAll();   
	}
    public function indexAction() {
       	if($this->_getParam('form_action')=="update_password") {
       		$password=$this->_getParam('password');
    		$result=(int) My_Class_Maerdo_Parameters::updateAdminPassword($password['old'],$password['new'],$password['confirm']);
    		switch($result) {
    			case "-2":
    				$this->view->notification_error='update_password_mismatch';
    				break;       			
    			case "-1":
    				$this->view->notification_error='update_password_oldpassword';
    				break;    			
    			case "0":
    				$this->view->notification_error='update_password_error';
    				break;
    			default:
    				$this->view->notification_success='update_password_success';
    				break;
    		}
    	}
      	if($this->_getParam('form_action')=="update_language") {
    		$result=(int) My_Class_Maerdo_Parameters::setDefaultLanguage($this->_getParam('language'));
    		switch($result) {
    			case "0":
    				$this->view->notification_error='update_language_error';
    				break;
    			default:
    				$this->view->notification_success='update_language_success';
    				break;
    		}
    	}    	    	
    	
    	$this->view->default_language=My_Class_Maerdo_Parameters::GetDefaultLanguage();
    	
    }
    
    
}

