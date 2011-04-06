<?php

class Front_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH.'/modules/front/forms/users.ini','form');
		$form = new Zend_Form($config);			
		if($this->getRequest()->isPost()) {
			if($form->isValid($_POST)) {
				echo "ok";
			} else {
				$this->view->form=$form;
			}
		} else {
			$this->view->form=$form;
		}
    }

    public function permissionAction()
    {
        // action body
    }

    public function loginAction()
    {
        // action body
    }


}





