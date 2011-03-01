<?php

class Maerdo_PagesController extends Zend_Controller_Action
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

    	
		if($this->_getParam('form_action')=="delete_page") {
			$result=My_Class_Maerdo_Framework_Page::delete($this->_getParam('page_id'));
			switch($result) {
				case "0":
					$notification_error='delete_page_error';
					break;
				case "1":
					$notification_success='page_has_been_deleted';
					break;
			}
		}
		if($this->_getParam('form_action')=="add_page") {
			$result=My_Class_Maerdo_Framework_Page::add($this->_getParam('page_module_id'),
											  $this->_getParam('page_controller_id'),
											  $this->_getParam('page_action_id'),
											  $this->_getParam('page_name'),
											  $this->_getParam('page_url'),
											  $this->_getParam('page_description'));
			switch($result) {
				case "0":
					$notification_error='add_page_error';
					break;
				default:
					$notification_success='page_has_been_added';
					break;
			}
		}
    	
    	
		if($this->_getParam('form_action')=="filter") {
			$pages=My_Class_Maerdo_Framework_Page::getList($this->_getParam('module_id'),$this->_getParam('controller_id'));
		} else {
			$pages=My_Class_Maerdo_Framework_Page::getList();
		}
		
		$modules=My_Class_Maerdo_Framework_Module::getList();
		if(isset($modules[0]->id)) {
			$firtsModuleController=My_Class_Maerdo_Framework_Controller::getList($modules[0]->id);
		} else {
			$firtsModuleController="";
		}
		if(isset($firtsModuleController[0]) && isset($firtsModuleController[0]['id'])) {	
			$firtsControllerAction=My_Class_Maerdo_Framework_Action::getList($firtsModuleController[0]['id']);
		} else {
			$firtsControllerAction="";
		}
    	$this->view->modules=$modules;
    	$this->view->pages=$pages;
    	if($this->_getParam('module_id')!=NULL) {
    		$this->view->module_id=$this->_getParam('module_id');
    		$controllers=My_Class_Maerdo_Framework_Controller::getList($this->_getParam('module_id'));
    		$this->view->controllers=$controllers;
    	}
    	if($this->_getParam('controller_id')!=NULL)
    		$this->view->controller_id=$this->_getParam('controller_id');
    	$this->view->notification_error=$notification_error;
    	$this->view->notification_success=$notification_success; 
		$this->view->firtstModuleController=$firtsModuleController;
		$this->view->firtsControllerAction=$firtsControllerAction;		    
    }

    public function editAction() {
    	$notification_error=NULL;  
    	$notification_success=NULL;
    	if($this->_getParam('form_action')=="updatePage") {    		
    		$result=(int) My_Class_Maerdo_Framework_Page::update(array('controller_id'=>$this->_getParam('page_controller_id'),
    												   'module_id'=>$this->_getParam('page_module_id'),
    												   'action_id'=>$this->_getParam('page_action_id'),
    												   'url'=>$this->_getParam('page_url'),
    												   'name'=>$this->_getParam('page_name'),
    												   'description'=>$this->_getParam('page_description'),	
    												    ),$this->_getParam('page_id')); 		
    		switch($result) {
				case "0":
					$notification_error='update_page_error';
					break;
				case "1":
					$notification_success='page_has_been_updated';
					break;
			}    												    
    	}
    	
    	$mPage=new Maerdo_Model_Page();
    	$page=$mPage->find($this->_getParam('page_id'));
    	
		$modules=My_Class_Maerdo_Framework_Module::getList();
		$moduleControllers=My_Class_Maerdo_Framework_Controller::getList($page->module_id);
		$controllerActions=My_Class_Maerdo_Framework_Action::getList($page->controller_id);    	
    	
		$titles=My_Class_Maerdo_Framework_Title::getList($this->_getParam('page_id'));
		$titlesfreelocales=My_Class_Maerdo_Framework_Title::getFreeLocales($this->_getParam('page_id'));
		
		$metas=My_Class_Maerdo_Framework_Metatag::getList($this->_getParam('page_id'));
		$metasfreelocales=My_Class_Maerdo_Framework_Metatag::getFreeLocales($this->_getParam('page_id'),'keywords');		
	
		$cssfiles=My_Class_Maerdo_Framework_Css::getList($this->_getParam('page_id'));
		$jsfiles=My_Class_Maerdo_Framework_Javascript::getList($this->_getParam('page_id'));
		
		$roles=My_Class_Maerdo_Framework_Acl::getRoleList();
		
		$pages=My_Class_Maerdo_Framework_Page::getList();
		
		$pageRoles=My_Class_Maerdo_Framework_Acl::getRoleList($this->_getParam('page_id'));
		
    	$this->view->page=$page;
    	$this->view->pages=$pages;
    	$this->view->modules=$modules;    	
    	$this->view->controllers=$moduleControllers;
    	$this->view->actions=$controllerActions;
    	$this->view->titles=$titles;    	
    	$this->view->titlesfreelocales=$titlesfreelocales;
    	$this->view->roles=$roles;
    	$this->view->pageroles=$pageRoles;        	
    	$this->view->metas=$metas;    	
    	$this->view->metafreelocales=$metasfreelocales;
    	$this->view->cssfiles=$cssfiles; 
    	$this->view->jsfiles=$jsfiles;     	
    	$this->view->notification_error=$notification_error;
    	$this->view->notification_success=$notification_success;     	
    }

    
    public function updateAction() {    	
    	$this->_helper->layout()->setLayout('minimal');    	
    	switch($this->_getParam('section')) {
    		case "title":    			
    			$result=(int) My_Class_Maerdo_Framework_Title::update($this->_getParam('title'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showTitleSuccess";
    			else	
    				$this->view->result="showTitleError";
    			break;
    		case "meta":	
    			$result=(int) My_Class_Maerdo_Framework_Metatag::update($this->_getParam('meta'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showMetaSuccess";
    			else	
    				$this->view->result="showMetaError";
    			break;
    		case "css":	
    			$result=(int) My_Class_Maerdo_Framework_Css::update($this->_getParam('css'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showCssSuccess";
    			else	
    				$this->view->result="showCssError";
    			break;    			
			case "javascript":	
    			$result=(int) My_Class_Maerdo_Framework_Javascript::update($this->_getParam('javascript'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showJavascriptSuccess";
    			else	
    				$this->view->result="showJavascriptError";
    			break;    
			case "acl":	
    			$result=(int) My_Class_Maerdo_Framework_Acl::updatePageRole($this->_getParam('role'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showAclSuccess";
    			else	
    				$this->view->result="showAclError";
    			break;      	
			case "navigation":	
    			$result=(int) My_Class_Maerdo_Framework_Navigation::update($this->_getParam('navigation'),$this->_getParam('page_id'));
    			if($result=="1")
    				$this->view->result="showNavigationSuccess";
    			else	
    				$this->view->result="showNavigationError";
    			break;        								
    	}

    }
}

