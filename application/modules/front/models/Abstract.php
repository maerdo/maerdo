<?php

abstract class Front_Model_Abstract {

	public function __construct(array $options = null) {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
	
	public function __set($name, $value) {
        $method = 'set' . $name;               
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid model property');
        }        
        $this->$method($value);
    }

    public function __get($name){
        $method = 'get' . $name;        
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid model property');
        }
        return $this->$method();
    }
    
    public function __call($method, $arguments) {
    	if(count($arguments)==0) {
    		$arguments[]=$this->_modelInstance;
    	}    
    	return(call_user_func_array(array($this->_mapper,$method),$arguments));    	
    }

    public function setData(array $options){
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst(strtolower($key));
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
    
  
}
