<?php

 
class Front_Model_Componentauthrole extends Front_Model_Abstract {

    protected $_Id;
    protected $_Ca_id;
    protected $_Role;
    protected $_Url;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componentauthrole();    	
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
    

    public function setCa_id($data)
    {
        $this->_Ca_id=$data;
        return $this;
    }

     
    public function getCa_id()
    {
        return $this->_Ca_id;
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
    

    public function setUrl($data)
    {
        $this->_Url=$data;
        return $this;
    }

     
    public function getUrl()
    {
        return $this->_Url;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Componentauthrole     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componentauthrole());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

