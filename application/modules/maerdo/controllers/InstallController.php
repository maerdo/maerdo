<?php

class Maerdo_InstallController extends Zend_Controller_Action
{

    public function init() {

    }

    public function indexAction() {
    	$this->_helper->layout()->disableLayout();
    	$install_result="0";
    	$install_msg="null";
    	
    	
    	if(!is_writable(APPLICATION_PATH."/configs")) {
    		$this->view->confdir_iswritable="false";
    	}
    	
    	if($this->getRequest()->isPost()) {
    		$fields_error="0";
    		    		
    		$database=$this->_getParam('database');
    		$adminpassword=$this->_getParam('admin');
    		
    		foreach($database as $key=>$value) {
    			if($value=="") {
    				$fields_error="1";
    			}	
    		}
    		foreach($adminpassword as $key=>$value) {
    			if($value=="") {
    				$fields_error="1";
    			}	
    		}
    		
    		if($adminpassword['password1']!=$adminpassword['password2']) {
    			$this->view->password_mismatch="1";
    		}
    		if($fields_error=="0" && $this->view->password_mismatch!="1") {
    			$oInstall=new My_Class_Maerdo_Install($database,$adminpassword);
    			$result=explode('|',$oInstall->install());
    			$install_result=$result[0];
    			$install_msg=$result[1];
    		} else {
    			if($fields_error=="1")
    				$this->view->fields_error="1";
    		}
    		   
    	}
    	
    	$this->view->install_result=$install_result;
    	$this->view->install_msg=$install_msg;
    }
	
    public function permissionAction() {
    	
    }
	
}

