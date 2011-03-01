<?php

class Maerdo_FormsController extends Zend_Controller_Action
{

    public function init() {
    }

    public function indexAction() {
    }

    public function addAction() {		
		$modules=My_Class_Maerdo_Module::getList();		
		$controllers=My_Class_Maerdo_Controller::getList($modules[0]->getId());
		
		
    	if($this->getRequest()->isPost()) {
			echo My_Class_Maerdo_Form::saveStep1($this->_params);
		}
		
		$this->view->modules = $modules;
		$this->view->controllers = $controllers;
    }
    
}

