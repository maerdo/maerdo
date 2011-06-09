<?php
class Maerdo_ToolsController extends Zend_Controller_Action {

    public function init() {    		
    }	
 
    public function buttonAction() {
    	$this->_helper->layout->disableLayout();
    	($this->_getParam('textcolor')!=null) ? $textcolor= $this->_getParam('textcolor') : $textcolor="000000";
    	($this->_getParam('font')!=null) ? $font= $this->_getParam('font') : $font="arial";
    	($this->_getParam('fontsize')!=null) ? $fontsize= $this->_getParam('fontsize') : $fontsize="10";
    	($this->_getParam('icon')!=null) ? $icon= $this->_getParam('icon') : $icon=NULL;
    	($this->_getParam('pl_text')!=null) ? $pl_text= $this->_getParam('pl_text') : $pl_text='0';
    	($this->_getParam('pt_text')!=null) ? $pt_text= $this->_getParam('pt_text') : $pt_text='0';
    	
    	My_Class_Maerdo_Utils_Buttons::show($this->_getParam('button'),$this->_getParam('text'),$textcolor,$font,$fontsize,$icon,$pl_text,$pt_text);   
    	die;
    }
 
}