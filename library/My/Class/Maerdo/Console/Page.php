<?php 
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

    public function attach($obs) {
        $this->_observers->attach($obs);
        return $this;
    }

    public function detach($obs) {
        $this->_observers->detach($obs);
        return $this;
    }	
    
	public function update() {
		My_Class_Maerdo_Console::newline();
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::PAGE");		
        // $this est intercepté par l'itérateur
        foreach ($this->_observers as $observer) {
            try{
                $observer->update($this);
            }catch(\Exception $e){
                die("\nErreur :\n\n".$e->getMessage());
            }
        }
    }  		
}