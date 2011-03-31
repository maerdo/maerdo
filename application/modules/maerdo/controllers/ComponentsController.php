<?php

class Maerdo_ComponentsController extends Zend_Controller_Action
{

    public function init() {
    	$this->view->notification_error=NULL;
    	$this->view->notification_success=NULL;
    	$this->view->sub_notification_error=NULL;
    	$this->view->sub_notification_success=NULL;
    	    	
    	$this->view->sidebarCountPage=My_Class_Maerdo_Framework_Page::countAll();
    	$this->view->sidebarCountModule=My_Class_Maerdo_Framework_Module::countAll();
    	$this->view->sidebarCountController=My_Class_Maerdo_Framework_Controller::countAll();
    	$this->view->sidebarCountAction=My_Class_Maerdo_Framework_Action::countAll();    	
    }

    public function databaseAction() {	    	

    	if($this->_getParam('form_action')=="add_database") {
    		$result=(int) My_Class_Maerdo_Component_Database::add($this->_getParam('database'));
    		switch($result) {
    			case "0":
    				$this->view->notification_error='add_database_error';
    				break;
    			default:
    				$this->view->notification_success='add_database_success';
    				break;
    		}
    	}
    	if($this->_getParam('form_action')=="delete") {
    		$result=(int) My_Class_Maerdo_Component_Database::delete($this->_getParam('id'));
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_database_error';
    				break;
    			default:
    				$this->view->notification_success='delete_database_success';
    				break;
    		}
    	}
        if($this->_getParam('form_action')=="deleteDefaultadApter") {
    		$result=(int) My_Class_Maerdo_Component_Database::deleteDefaultAdapter($this->_getParam('id'));
    		switch($result) {
    			case "0":
    				$this->view->notification_error='deletedefaultadapter_database_error';
    				break;
    			default:
    				$this->view->notification_success='deletedefaultadapter_database_success';
    				break;
    		}
    	}    	    	
        if($this->_getParam('form_action')=="addDefaultAdapter") {
    		$result=(int) My_Class_Maerdo_Component_Database::addDatabaseModule($this->_getParam('database_id'),$this->_getParam('module_id'));
    		switch($result) {
    			case "0":
    				$this->view->notification_error='adddefaultadapter_database_error';
    				break;
    			default:
    				$this->view->notification_success='adddefaultadapter_database_success';
    				break;
    		}
    	}
    	$modules=My_Class_Maerdo_Component_Database::getFreeModule();
		$modulesDatabases=My_Class_Maerdo_Component_Database::getModuleDatabaseList();
    	$databases=My_Class_Maerdo_Component_Database::getList();
    	
    	$this->view->modules=$modules;
    	$this->view->modulesDatabases=$modulesDatabases;
		$this->view->databases=$databases;
		
    }

    public function translateAction() {    	
    	if($this->_getParam('form_action')=="translate_update") {
    		$result=(int) My_Class_Maerdo_Component_Translate::update($this->_getParam('module_id'),$this->_getParam('translate'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='update_translate_error';
    				break;
    			default:
    				$this->view->notification_success='update_translate_success';
    				break;
    		}
    	}
    	
    	// Translation configuration for application (module_id='-1')
		$moduleConfiguration=My_Class_Maerdo_Component_Translate::getConfiguration("-1");
    	
		$this->view->moduleConfiguration=$moduleConfiguration;
    	$this->view->module_id="-1";
    	// end application translation configuration

    	
		$modules=My_Class_Maerdo_Framework_Module::getList();    	
    	
    	$this->view->modules=$modules;
    	$this->view->languages=array();
    }

    public function pluginsAction() { 		
		$freeplugins=My_Class_Maerdo_Component_Plugins::getFreePlugins();
 		$selectedplugins=My_Class_Maerdo_Component_Plugins::getSelectedplugin();
 		$freestackindex=My_Class_Maerdo_Component_Plugins::retrieveStackIndex();
 		
 		$this->view->freestackindex=$freestackindex;
 		$this->view->selectedplugins=$selectedplugins;
 		$this->view->freeplugins=$freeplugins; 		
 		
    }
    
    public function authAction() {
        if($this->_getParam('form_action')=="update_auth") {
    		$result=My_Class_Maerdo_Component_Auth::update($this->_getParam('module_id'),$this->_getParam('auth'));
    		switch($result) {
    			case "false":
    				$this->view->notification_error='update_auth_error';
    				break;
    			default:
    				$this->view->notification_success='update_auth_success';
    				break;
    		}
    	}
    	$modules=My_Class_Maerdo_Framework_Module::getList();
    	$databases=My_Class_Maerdo_Component_Database::getList();
    	$aclRoles=My_Class_Maerdo_Framework_Acl::getRoleList();
    	    	
        // Auth configuration for application (module_id='-1')
		$authConfiguration=My_Class_Maerdo_Component_Auth::getConfiguration("-1");

    	$this->view->module_id="-1";
    	$this->view->authconfiguration=$authConfiguration;
    	// End auth configuration 	
    	
    	$this->view->aclRoles=$aclRoles;
    	
    	$this->view->modules=$modules;
    	$this->view->databases=$databases;

    }

    public function aclAction() {
    	
        if($this->_getParam('form_action')=="add_role") {
    		$result=(int) My_Class_Maerdo_Framework_Acl::addRole($this->_getParam('parent'),$this->_getParam('role'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='add_aclrole_error';
    				break;
    			default:
    				$this->view->notification_success='add_aclrole_success';
    				break;
    		}
    	}    	
        if($this->_getParam('form_action')=="delete") {
    		$result=(int) My_Class_Maerdo_Framework_Acl::deleteRole($this->_getParam('id'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_aclrole_error';
    				break;
    			default:
    				$this->view->notification_success='delete_aclrole_success';
    				break;
    		}
    	}        	
    	
    	$aclRoles=My_Class_Maerdo_Framework_Acl::getRoleList();
    	
    	$this->view->aclRoles=$aclRoles;
    }        
    
    public function cacheAction() {
    	if($this->_getParam('form_action')=="add_cache") {
    		$result=(int) My_Class_Maerdo_Component_Cache::add($this->_getParam('cache'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='add_cache_error';
    				break;
    			default:
    				$this->view->notification_success='add_cache_success';
    				break;
    		}
    	} 
    	if($this->_getParam('form_action')=="delete") {
    		$result=(int) My_Class_Maerdo_Component_Cache::delete($this->_getParam('id'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_cache_error';
    				break;
    			default:
    				$this->view->notification_success='delete_cache_success';
    				break;
    		}
    	}     
    	if($this->_getParam('form_action')=="update_cache") {
    		
    		if(My_Class_Maerdo_Component_Cache::delete($this->_getParam('cc_id'))!=0) {; 
    			$result=(int) My_Class_Maerdo_Component_Cache::add($this->_getParam('cache'));
    		} else {
    			$result=0;
    		}	   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='update_cache_error';
    				break;
    			default:
    				$this->view->notification_success='update_cache_success';
    				break;
    		}
    	}       	
    	if($this->_getParam('form_action')=="update_form") {
    		$cacheConfig=My_Class_Maerdo_Component_Cache::getConfiguration($this->_getParam('id'));

			$this->view->cc_id=$this->_getParam('id');
    		$this->view->cacheConfig=$cacheConfig;
    		$this->view->update_form=true;
    	}         	
    	if($this->_getParam('form_action')=="set_default") {
    		$result=(int) My_Class_Maerdo_Component_Cache::setDefault($this->_getParam('default'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='setdefault_cache_error';
    				break;
    			default:
    				$this->view->notification_success='setdefault_cache_success';
    				break;
    		}
    	} 
    	
    	$caches=My_Class_Maerdo_Component_Cache::getList();
    	
    	$this->view->caches=$caches;
    }
    
    public function formsAction() {
     	if($this->_getParam('form_action')=="add_form") {
    		$result=(int) My_Class_Maerdo_Component_Form::add($this->_getParam('form'));    		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='add_form_error';
    				break;
    			default:
    				$this->view->notification_success='add_form_error';
    				break;
    		}
    	}
    	
    	$forms=My_Class_Maerdo_Component_Form::getList();
    	$templates=My_Class_Maerdo_Component_Form::getTemplates();

		
    	$this->view->forms=$forms;
    	$this->view->templates=$templates;
    	
    }
    
    public function formeditAction() {    	
    	if($this->_getParam('form_action')=="delete_field") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::deleteField($this->_getParam('field_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_field_error';
    				break;
    			default:
    				$this->view->notification_success='delete_field_success';
    				break;
    		}
    	}
        if($this->_getParam('form_action')=="add_field") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::addField($this->_getParam('form_id'),$this->_getParam('field_type'),$this->_getParam('field_name'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='add_field_error';
    				break;
    			default:
    				$this->view->notification_success='add_field_success';
    				break;
    		}
    	}    	
		$fieldTypes=My_Class_Maerdo_Component_Form::getFieldTypeList();
		$fields=My_Class_Maerdo_Component_Form::getFormFields($this->_getParam('form_id'));
		
		$this->view->form_id=$this->_getParam('form_id');
		$this->view->fieldTypes=$fieldTypes;
		$this->view->fields=$fields;
		
		$this->_helper->viewRenderer->setScriptAction('forms/edit');
    	    	
    }
    
    public function formeditfieldAction() {
        if($this->_getParam('form_action')=="update_options") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::update($this->_getParam('field_id'),$this->_getParam('options'),$this->_getParam('multioptions'),$this->_getParam('attributs'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='updateOptions_error';
    				break;
    			default:
    				$this->view->notification_success='updateOptions_success';
    				break;
    		}
    	}
    	
        if($this->_getParam('form_action')=="delete_multioption") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::deletemultioption($this->_getParam('mo_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_multioption_error';
    				break;
    			default:
    				$this->view->notification_success='delete_multioption_success';
    				break;
    		}
    	}    
    		
        if($this->_getParam('form_action')=="delete_attribut") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::deleteattribut($this->_getParam('mo_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='delete_attribut_error';
    				break;
    			default:
    				$this->view->notification_success='delete_attribut_success';
    				break;
    		}
    	}  
        if($this->_getParam('form_action')=="add_validator") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::addValidator($this->_getParam('field_id'),$this->_getParam('validator'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->sub_notification_error='add_validator_error';
    				break;
    			default:
    				$this->view->sub_notification_success='add_validator_success';
    				break;
    		}
    		$this->view->view="validator";
    	}    
        if($this->_getParam('form_action')=="delete_validator") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::deleteValidator($this->_getParam('validator_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->sub_notification_error='delete_validator_error';
    				break;
    			default:
    				$this->view->sub_notification_success='delete_validator_success';
    				break;
    		}
    		$this->view->view="validator";
    	}        		      	

    	$options=My_Class_Maerdo_Component_Form::getOptions($this->_getParam('field_id'));
		$validatorlist=My_Class_Maerdo_Component_Form::getValidatorList();
		$validators=My_Class_Maerdo_Component_Form::getValidator($this->_getParam('field_id'));		


		
    	$this->view->field_id=$this->_getParam('field_id');
    	$this->view->options=$options;
		$this->view->validators=$validators;
    	$this->view->validatorlist=$validatorlist;    	     	
    	
    	$this->_helper->viewRenderer->setScriptAction('forms/editfield');    	    	
    }
    
    public function formeditvalidatorAction() {
    	//var_dump($this->_getParam('message'));die;
        if($this->_getParam('form_action')=="update_validatoroptions") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::updateValidatorOptions($this->_getParam('option'),$this->_getParam('validator_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='updateOptions_error';
    				break;
    			default:
    				$this->view->notification_success='updateOptions_success';
    				break;
    		}    		
    	}
        if($this->_getParam('form_action')=="update_messages") {    		
    		$result=(int) My_Class_Maerdo_Component_Form::updateMessages($this->_getParam('messages'),$this->_getParam('validator_id'));    			   		
    		switch($result) {
    			case "0":
    				$this->view->notification_error='updateMessages_error';
    				break;
    			default:
    				$this->view->notification_success='updateMessages_success';
    				break;
    		}
    		$this->view->view="messages";
    	}    	
    	        	
    	$this->_helper->viewRenderer->setScriptAction('forms/editvalidator');
    	
    	$validator_options_list=My_Class_Maerdo_Component_Form::getValidatorOptionsList($this->_getParam('validator_id'));
		$validator_options = My_Class_Maerdo_Component_Form::getValidatorOptions($this->_getParam('validator_id'));
		$messages=My_Class_Maerdo_Component_Form::getMessagesList($this->_getParam('validator_id'));
		
		$this->view->validator_options=$validator_options;
    	$this->view->validator_options_list=$validator_options_list;    	
    	$this->view->field_id=$this->_getParam('field_id');
    	$this->view->validator_id=$this->_getParam('validator_id');
    	
    	$this->view->messages=$messages[1];
    	$this->view->personalMessages=$messages[0];
    }

}