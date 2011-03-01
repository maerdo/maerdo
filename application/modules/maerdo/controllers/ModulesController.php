<?php

class Maerdo_ModulesController extends Zend_Controller_Action
{

    public function init() {
    	$this->view->sidebarCountPage=My_Class_Maerdo_Framework_Page::countAll();
    	$this->view->sidebarCountModule=My_Class_Maerdo_Framework_Module::countAll();
    	$this->view->sidebarCountController=My_Class_Maerdo_Framework_Controller::countAll();
    	$this->view->sidebarCountAction=My_Class_Maerdo_Framework_Action::countAll();    	
    }

    public function indexAction() {  
    	$notification_error=NULL;  
    	$notification_success=NULL;	
		if($this->_getParam('form_action')!=NULL)  {
    		switch($this->_getParam('form_action')) {    			
    			case "add_module" :    				
    				$result=(int) My_Class_Maerdo_Framework_Module::add($this->_getParam('module_name'),$this->_getParam('module_description'));   				    				    				    				
    				switch($result) {
      					case "0":
    						$notification_error='add_module_error';
    						break;
    					default:
    						$notification_success='module_has_been_added';
    						break;    						
    				}
    				break;
    			case "delete_module" :    				
    				$result=(int) My_Class_Maerdo_Framework_Module::delete($this->_getParam('module_id'));   				    				    				    				
    				switch($result) {
      					case "0":
    						$notification_error='delete_module_error';
    						break;
      					case "1":
    						$notification_success='module_has_been_deleted';
    						break;    						
    				}
    				break;
    				
    		}
		}		    	
    	
		$modules=My_Class_Maerdo_Framework_Module::getList();
		
		
    	$this->view->modules=$modules;    	
    	$this->view->notification_error=$notification_error;
    	$this->view->notification_success=$notification_success;        	
    }

    public function addAction() {
    	
    }
    
    public function editAction() {  
    	$notification_error=NULL;
    	$notification_success=NULL;  	
    	if($this->_getParam('form_action')!=NULL)  {
    		switch($this->_getParam('form_action')) {    			
    			case "add_controller" :    				
    				$result=My_Class_Maerdo_Framework_Controller::add($this->_getParam('module_id'),$this->_getParam('controller_name'),$this->_getParam('controller_description'));    				    				
    				switch($result) {
    					case "-1":    					
    						$notification_error='controller_already_exist';
    						break;
    					case "true":
    						$notification_success='controller_has_been_added';
    						break;
      					case "false":
    						$notification_error='add_controller_error';
    						break;
    				}
    				break;
    				
    			case "add_action" :    				
    				$result=My_Class_Maerdo_Framework_Action::add($this->_getParam('controller_id'),$this->_getParam('action_name'),$this->_getParam('controller_description'));    				    				
    				switch($result) {
    					case "-1":    					
    						$notification_error='action_already_exist';
    						break;
    					case "true":
    						$notification_success='action_has_been_added';
    						break;
      					case "false":
    						$notification_error='add_action_error';
    						break;
    				}
    				break; 

    			case "delete_controller":
    				(string) $result=My_Class_Maerdo_Framework_Controller::delete($this->_getParam('controller_id'));
    				switch($result) {
    					case "1":
    						$notification_success='controller_has_been_deleted';
    						break;
      					case "0":
    						$notification_error='delete_controller_error';
    						break;
    				}
    				break;
    			case "delete_action":    				
    		    	(string) $result=My_Class_Maerdo_Framework_Action::delete($this->_getParam('action_id'));
    				switch($result) {
    					case "1":
    						$notification_success='action_has_been_deleted';
    						break;
      					case "0":
    						$notification_error='action_controller_error';
    						break;
    				}
    				break;		
    		}
    	}
    	$moduleDetails=My_Class_Maerdo_Framework_Module::getDetails($this->_getParam('module_id'));
    	
    	$this->view->module_details=$moduleDetails;    	
    	$this->view->notification_error=$notification_error;
    	$this->view->notification_success=$notification_success;    	
    }


}

