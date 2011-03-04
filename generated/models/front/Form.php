<?php

 
class Front_Model_Form extends Front_Model_Abstract {

    protected $_Id;
    protected $_Module_id;
    protected $_Controller_id;
    protected $_Action;
    protected $_Type;
    protected $_Name;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Form();    	
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
    

    public function setModule_id($data)
    {
        $this->_Module_id=$data;
        return $this;
    }

     
    public function getModule_id()
    {
        return $this->_Module_id;
    }
    

    public function setController_id($data)
    {
        $this->_Controller_id=$data;
        return $this;
    }

     
    public function getController_id()
    {
        return $this->_Controller_id;
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
    

    public function setType($data)
    {
        $this->_Type=$data;
        return $this;
    }

     
    public function getType()
    {
        return $this->_Type;
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
     * @return  Front_Model_Mappers_Form     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Form());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

