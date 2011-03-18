<?php 
/**
 * This class is used to work with authentification configuration in console mode.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Auth {

	protected $_observers;
	
	/**
	 * Attach selected cache console observers to $_observers var.
	 * 	
	 * @return boolean
	 */	
	public function __construct($params) {
		$this->_observers = new SplObjectStorage();
		$sections=explode(',',$params);		
		foreach($sections as $section) {
			switch($section) {
				case "all":
					$obs=new My_Class_Maerdo_Console_Auth_Conf();
					$this->_observers->attach($obs);										
					break;					
				case "conf" :									
					$obs=new My_Class_Maerdo_Console_Auth_Conf();
					$this->_observers->attach($obs);
					break;				
			}
		}
		
	}

 	/**
	 * Call update function of cache console attached observers
	 * 	 
	 * @return boolean
	 */	   
	public function update() {		
		My_Class_Maerdo_Console::newline();
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::Auth");		
        foreach ($this->_observers as $observer) {
            try{
                $observer->update($this);
            }catch(\Exception $e){
                die("\nErreur :\n\n".$e->getMessage());
            }
        }
    }  	
}