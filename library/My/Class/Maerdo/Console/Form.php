<?php 
/**
 * This class is used to work with authentification.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Translate {

	protected $_observers;
	

	public function __construction($sections) {
		$this->_observers = new SplObjectStorage();
	}
}