<?php

class Maerdo_ConsoleController extends Zend_Controller_Action
{

    public function init() {

    }

    public function indexAction() {
    	
    }
	
    public function consoleAction() {
   		$this->_helper->layout()->disableLayout();
   		
   		$this->view->commande=$this->_getParam('commande');
    }
    
    public function permissionAction() {
    	
    }
	
}

