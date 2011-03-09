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
	

	public function __construct($params) {	
		$this->_observers = new SplObjectStorage();
		$sections=explode(',',$params);
		foreach($sections as $section) {
			switch($section) {
				case "buildcsvfiles":
					$obs=new My_Class_Maerdo_Console_Translate_Buildcsvfiles();
					$this->_observers->attach($obs);
					break;
				case "all":
					$obs=new My_Class_Maerdo_Console_Translate_Buildcsvfiles();
					$this->_observers->attach($obs);
					break;					
			}
		}
	}
	

    
	public function update() {
		My_Class_Maerdo_Console::newline();
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::TRANSLATE");			

        foreach ($this->_observers as $observer) {
            try{
                $observer->update($this);
            }catch(\Exception $e){
                die("\nErreur :\n\n".$e->getMessage());
            }
        }
    }  	
}