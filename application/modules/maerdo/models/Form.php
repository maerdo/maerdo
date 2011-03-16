<?php

 
class Maerdo_Model_Form extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Template;
    protected $_Action;
    protected $_Method;
    protected $_Name;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Form();    	
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
    

    public function setTemplate($data)
    {
        $this->_Template=$data;
        return $this;
    }

     
    public function getTemplate()
    {
        return $this->_Template;
    }
    

    public function setAction($data)
    {
        $this->_Action=$data;
        return $this;
    }

     
    public function getAction()
    {
        return $this->_Action;
    }
    

    public function setMethod($data)
    {
        $this->_Method=$data;
        return $this;
    }

     
    public function getMethod()
    {
        return $this->_Method;
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
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Form     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Form());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

