<?php

 
class Maerdo_Model_Componentcache extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Name;
    protected $_Type;
    protected $_Backend_type;
    protected $_Default;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Componentcache();    	
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
    

    public function setName($data)
    {
        $this->_Name=$data;
        return $this;
    }

     
    public function getName()
    {
        return $this->_Name;
    }
    

    public function setType($data)
    {
        $this->_Type=$data;
        return $this;
    }

     
    public function getType()
    {
        return $this->_Type;
    }
    

    public function setBackend_type($data)
    {
        $this->_Backend_type=$data;
        return $this;
    }

     
    public function getBackend_type()
    {
        return $this->_Backend_type;
    }
    

    public function setDefault($data)
    {
        $this->_Default=$data;
        return $this;
    }

     
    public function getDefault()
    {
        return $this->_Default;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Componentcache     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Componentcache());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

