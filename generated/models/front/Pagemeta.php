<?php

 
class Front_Model_Pagemeta extends Front_Model_Abstract {

    protected $_Id;
    protected $_Page_id;
    protected $_Locale;
    protected $_Meta;
    protected $_Value;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Pagemeta();    	
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
    

    public function setPage_id($data)
    {
        $this->_Page_id=$data;
        return $this;
    }

     
    public function getPage_id()
    {
        return $this->_Page_id;
    }
    

    public function setLocale($data)
    {
        $this->_Locale=$data;
        return $this;
    }

     
    public function getLocale()
    {
        return $this->_Locale;
    }
    

    public function setMeta($data)
    {
        $this->_Meta=$data;
        return $this;
    }

     
    public function getMeta()
    {
        return $this->_Meta;
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
     * @return  Front_Model_Mappers_Pagemeta     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Pagemeta());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

