<?php

 
class Front_Model_Componentdatabase extends Front_Model_Abstract {

    protected $_Id;
    protected $_Adapter;
    protected $_Hostname;
    protected $_Database;
    protected $_Username;
    protected $_Password;
    protected $_Name;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componentdatabase();    	
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
    

    public function setAdapter($data)
    {
        $this->_Adapter=$data;
        return $this;
    }

     
    public function getAdapter()
    {
        return $this->_Adapter;
    }
    

    public function setHostname($data)
    {
        $this->_Hostname=$data;
        return $this;
    }

     
    public function getHostname()
    {
        return $this->_Hostname;
    }
    

    public function setDatabase($data)
    {
        $this->_Database=$data;
        return $this;
    }

     
    public function getDatabase()
    {
        return $this->_Database;
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
     * @return  Front_Model_Mappers_Componentdatabase     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componentdatabase());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

