<?php

 
class Front_Model_Aclrole extends Front_Model_Abstract {

    protected $_Id;
    protected $_Parent;
    protected $_Role;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Aclrole();    	
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
    

    public function setParent($data)
    {
        $this->_Parent=$data;
        return $this;
    }

     
    public function getParent()
    {
        return $this->_Parent;
    }
    

    public function setRole($data)
    {
        $this->_Role=$data;
        return $this;
    }

     
    public function getRole()
    {
        return $this->_Role;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Aclrole     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Aclrole());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

