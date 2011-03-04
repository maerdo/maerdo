<?php

 
class Front_Model_Module extends Front_Model_Abstract {

    protected $_Id;
    protected $_Name;
    protected $_Description;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Module();    	
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
    

    public function setDescription($data)
    {
        $this->_Description=$data;
        return $this;
    }

     
    public function getDescription()
    {
        return $this->_Description;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Module     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Module());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

