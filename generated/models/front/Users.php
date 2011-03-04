<?php

 
class Front_Model_Users extends Front_Model_Abstract {

    protected $_Id;
    protected $_Name;
    protected $_Firstname;
    protected $_Email;
    protected $_Username;
    protected $_Password;
    protected $_Role;
    protected $_Status;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Users();    	
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
    

    public function setFirstname($data)
    {
        $this->_Firstname=$data;
        return $this;
    }

     
    public function getFirstname()
    {
        return $this->_Firstname;
    }
    

    public function setEmail($data)
    {
        $this->_Email=$data;
        return $this;
    }

     
    public function getEmail()
    {
        return $this->_Email;
    }
    

    public function setUsername($data)
    {
        $this->_Username=$data;
        return $this;
    }

     
    public function getUsername()
    {
        return $this->_Username;
    }
    

    public function setPassword($data)
    {
        $this->_Password=$data;
        return $this;
    }

     
    public function getPassword()
    {
        return $this->_Password;
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
    

    public function setStatus($data)
    {
        $this->_Status=$data;
        return $this;
    }

     
    public function getStatus()
    {
        return $this->_Status;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Users     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Users());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

