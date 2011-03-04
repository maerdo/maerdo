<?php

 
class Maerdo_Model_Componentcachefrontendoption extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Cc_id;
    protected $_Option;
    protected $_Value;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Componentcachefrontendoption();    	
    	$this->_modelInstance=$this;

	}

	
    

    public function setId($data)
    {
        $this->_Id=$data;
        return $this;
    }

     
    public function getId()
    {
        return $this->_Id;
    }
    

    public function setCc_id($data)
    {
        $this->_Cc_id=$data;
        return $this;
    }

     
    public function getCc_id()
    {
        return $this->_Cc_id;
    }
    

    public function setOption($data)
    {
        $this->_Option=$data;
        return $this;
    }

     
    public function getOption()
    {
        return $this->_Option;
    }
    

    public function setValue($data)
    {
        $this->_Value=$data;
        return $this;
    }

     
    public function getValue()
    {
        return $this->_Value;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Componentcachefrontendoption     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Componentcachefrontendoption());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

