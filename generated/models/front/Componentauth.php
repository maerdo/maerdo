<?php

 
class Front_Model_Componentauth extends Front_Model_Abstract {

    protected $_Id;
    protected $_Module_id;
    protected $_Table;
    protected $_Database_name;
    protected $_Username_field;
    protected $_Password_field;
    protected $_Role_field;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componentauth();    	
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
    

    public function setTable($data)
    {
        $this->_Table=$data;
        return $this;
    }

     
    public function getTable()
    {
        return $this->_Table;
    }
    

    public function setDatabase_name($data)
    {
        $this->_Database_name=$data;
        return $this;
    }

     
    public function getDatabase_name()
    {
        return $this->_Database_name;
    }
    

    public function setUsername_field($data)
    {
        $this->_Username_field=$data;
        return $this;
    }

     
    public function getUsername_field()
    {
        return $this->_Username_field;
    }
    

    public function setPassword_field($data)
    {
        $this->_Password_field=$data;
        return $this;
    }

     
    public function getPassword_field()
    {
        return $this->_Password_field;
    }
    

    public function setRole_field($data)
    {
        $this->_Role_field=$data;
        return $this;
    }

     
    public function getRole_field()
    {
        return $this->_Role_field;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Componentauth     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componentauth());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

