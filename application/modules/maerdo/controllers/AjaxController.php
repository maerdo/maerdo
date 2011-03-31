<?php

class Maerdo_AjaxController extends Zend_Controller_Action
{

    public function init() {
    	// Disable layout
    	$this->_helper->layout()->disableLayout();
    	
    	// Create params array from request (for all services)
    	$paramsRequest=explode("&",$this->_getParam('params'));
    	foreach($paramsRequest as $value) {
    		$data=explode("=",$value);
    		if(isset($data[0]) && isset($data[1]))
    			$this->_params[$data[0]]=$data[1];
    	}
    }

    public function indexAction() {
    }

    public function formAction() {
 	
    }
    
    public function controllerAction() {

       	switch($this->_getParam('service')) {
    		case "getListByModuleId" :  			
    			$list=My_Class_Maerdo_Framework_Controller::getList($this->_params['module_id']);
    			foreach($list as $key=>$value) {
    				$json[$value['id']]=$value['name'];
    			}	
    			$this->view->ajaxData=Zend_Json::encode($json);
    			break;
       	}    	
    }  

    public function actionAction() {
       	switch($this->_getParam('service')) {
    		case "getListByControllerId" :     				
    			$list=My_Class_Maerdo_Framework_Action::getList($this->_params['controller_id']);
    			foreach($list as $key=>$value) {
    				$json[$value['id']]=$value['name'];
    			}	
    			$this->view->ajaxData=Zend_Json::encode($json);
    			break;
       	}    	
    }  
    
    public function pageAction() {    	
       	switch($this->_getParam('service')) {
    		case "checkURL" :     				       			 			    		
    			$result=My_Class_Maerdo_Framework_Page::checkURL($this->_params['url']);    			
    			$this->view->ajaxData=$result;
    			break;
    		case "checkname" :     				    			    			
    			$result=My_Class_Maerdo_Framework_Page::checkname($this->_params['name']);    		
    			$this->view->ajaxData=$result;
    			break;
    		case "getLocaleName":
    			$result=My_Class_Maerdo_Locale::getNameFromLocale($this->_params['locale']);    
    			$this->view->ajaxData=$result;	
    			break;
    		case "getmetafreelocal":
    			$result=My_Class_Maerdo_Framework_Metatag::getFreeLocales($this->_params['page_id'],$this->_params['meta']);
    			$this->view->ajaxData=Zend_Json::encode($result);
    			break;
    		case "addmeta":
    			My_Class_Maerdo_Framework_Metatag::add($this->_params['locale'],$this->_params['meta'],$this->_params['page_id']);
    			$this->view->ajaxData=true;
    			break;
    		case "deletemeta":
    			My_Class_Maerdo_Framework_Metatag::delete($this->_params['locale'],$this->_params['meta'],$this->_params['page_id']);
    			$this->view->ajaxData=true;
    			break;     					   		
       	}    	
    }    

    public function pluginsAction() {    	
    	switch($this->_getParam('service')) {
			case "addplugin":
    			My_Class_Maerdo_Component_Plugins::add($this->_params['plugin_name']);
				$this->view->ajaxData=true;
    			break;	
    		case "deleteplugin":
    			$result=My_Class_Maerdo_Component_Plugins::delete($this->_params['plugin_name']);
				$this->view->ajaxData=$result;
    			break;    			
    		case "printstackindexlist":
    			$result=My_Class_Maerdo_Component_Plugins::retrieveStackIndex();    			
				$this->view->ajaxData=Zend_Json::encode($result);
    			break;
    		case "updatestackindex":
    			$result=My_Class_Maerdo_Component_Plugins::updatestackindex($this->_params['plugin_name'],$this->_params['stackindex']);
				$this->view->ajaxData=$result;
    	}	         	
    }

    public function formsAction() {    	
    	switch($this->_getParam('service')) {
			case "validatoroptionexist":
    			$this->view->ajaxData=(int) My_Class_Maerdo_Component_Form::checkIfValidatorOptionExist($this->_params['validator_id'],$this->_params['option']);				
    			break;	    		
    	}	         	
    }	    
}

