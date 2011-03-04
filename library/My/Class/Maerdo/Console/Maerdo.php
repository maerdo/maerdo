<?php 		
class My_Class_Maerdo_Console_Maerdo {

	protected $_observers;
	
	protected $_translate=null;
	protected $_page=null;
	protected $_form=null;
	protected $_model=null;
	
	public function __construct() {
		$this->_observers = new SplObjectStorage();
		// Define path to application directory

		echo "\n##  MAERDO   v0.1 ##";
	
	}
	
	public function usage() {
		$usage=file_get_contents('utils/usage.txt');
		echo $usage;
	}
	
	public function parse($argv) {	
		if(isset($_SERVER['argv'][1])) {			
			switch($_SERVER['argv'][1]) {
				case "update" :
					foreach($_SERVER['argv'] as $argument) {
						$params=@explode('=',$argument);
						if(!isset($params[1]))
							$params[1]="all";
							
						if(preg_match('#translate#',strtolower($params[0]))) {		
								$translate=new My_Class_Maerdo_Console_Translate($params[1]);
								$this->_observers->attach($translate);
						}
						if(preg_match('#database#',strtolower($params[0]))) {
								$page=new My_Class_Maerdo_Console_Database($params[1]);
								$this->_observers->attach($page);
						}
						if(preg_match('#form#',strtolower($params[0]))) {														
								$form=new My_Class_Maerdo_Console_Form($params[1]);
								$this->_observers->attach($page);
						}
						if(preg_match('#page#',strtolower($params[0]))) {
								$page=new My_Class_Maerdo_Console_Page($params[1]);
								$this->_observers->attach($page);
								break;	
						}
					}
					break;
				default:
					$this->usage();
					break;	
			}
			$this->notifyObservers();
		} else {
			$this->usage();
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
    
	protected function notifyObservers() {
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