<?php 
/**
 * This class is used to work with authentification.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Page {

	protected $_observers;
		
	public function __construct($params) {
		$this->_observers = new SplObjectStorage();
		$sections=explode(',',$params);
		foreach($sections as $section) {
			switch($section) {
				case "all":
					$obs=new My_Class_Maerdo_Console_Page_Module();
					$this->_observers->attach($obs);
					
					$obs=new My_Class_Maerdo_Console_Page_Controller();
					$this->_observers->attach($obs);					
					
					$obs=new My_Class_Maerdo_Console_Page_Action();
					$this->_observers->attach($obs);
					
					$obs=new My_Class_Maerdo_Console_Page_Route();
					$this->_observers->attach($obs);

					$obs=new My_Class_Maerdo_Console_Page_Acl();
					$this->_observers->attach($obs);
					
					$obs=new My_Class_Maerdo_Console_Page_Heads();
					$this->_observers->attach($obs);
					
					break;	

				case "heads":
					$obs=new My_Class_Maerdo_Console_Page_Heads();
					$this->_observers->attach($obs);
					break;						
				case "acl":
					$obs=new My_Class_Maerdo_Console_Page_Acl();
					$this->_observers->attach($obs);
					break;					
					
				case "route":
					$obs=new My_Class_Maerdo_Console_Page_Route();
					$this->_observers->attach($obs);
					break;

				case "action":
					$obs=new My_Class_Maerdo_Console_Page_Action();
					$this->_observers->attach($obs);
					break;

				case "controller":
					$obs=new My_Class_Maerdo_Console_Page_Controller();
					$this->_observers->attach($obs);
					break;

				case "module":
					$obs=new My_Class_Maerdo_Console_Page_Module();
					$this->_observers->attach($obs);
					break;					
			}
		}		
	}

 
    
	public function update() {
		My_Class_Maerdo_Console::newline();
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::PAGE");		

        foreach ($this->_observers as $observer) {
            try{
                $observer->update($this);
            }catch(\Exception $e){
                die("\nErreur :\n\n".$e->getMessage());
            }
        }
    }  		
}