<?php 
class My_Class_Maerdo_Console_Database {

	protected $_observers;
	

	public function __construct($params) {
		$this->_observers = new SplObjectStorage();
		$sections=explode(',',$params);
		foreach($sections as $section) {
			switch($section) {
				case "all":
					$obs=new My_Class_Maerdo_Console_Database_Buildmodels();
					$this->_observers->attach($obs);
					break;
				case "conf" :
					$obs=new My_Class_Maerdo_Console_Database_Conf();
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
		My_Class_Maerdo_Console::display("1","MAERDO::CONSOLE::DATABASE");		
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