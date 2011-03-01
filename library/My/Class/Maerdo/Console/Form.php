<?php 
class My_Class_Maerdo_Console_Translate {

	protected $_observers;
	

	public function __construction($sections) {
		$this->_observers = new SplObjectStorage();
	}
}