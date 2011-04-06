<?php 
/**
 * This class is used to work with forms in console mode.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Forms {

	protected $_observers;
	
	/**
	 * Attach selected forms console observers to $_observers var.
	 * 	
	 * @return boolean
	 */	
	public function __construct($params) {
		$this->_observers = new SplObjectStorage();
		$sections=explode(',',$params);		
		foreach($sections as $section) {
			switch($section) {
				case "all":
					$obs=new My_Class_Maerdo_Console_Forms_Inifiles();
					$this->_observers->attach($obs);
					break;
				case "ini_file":
					$obs=new My_Class_Maerdo_Console_Forms_Inifiles();
					$this->_observers->attach($obs);
					break;				
			}
		}
		return true;
		
	}
 	/**
	 * Call update function of forms attached observers
	 * 	 
	 * @return boolean
	 */	   
	public function update() {		
		My_Class_Maerdo_Console::newline();
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::FORMS");		

        foreach ($this->_observers as $observer) {
            try{
                $observer->update($this);
            }catch(\Exception $e){
                die("\nErreur :\n\n".$e->getMessage());
            }
        }
        return true;
    }  	
}