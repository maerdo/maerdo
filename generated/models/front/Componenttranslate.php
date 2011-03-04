<?php

 
class Front_Model_Componenttranslate extends Front_Model_Abstract {

    protected $_Id;
    protected $_Module_id;
    protected $_Identifiant;
    protected $_Locale;
    protected $_Language_name;
    protected $_Default;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componenttranslate();    	
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
    

    public function setIdentifiant($data)
    {
        $this->_Identifiant=$data;
        return $this;
    }

     
    public function getIdentifiant()
    {
        return $this->_Identifiant;
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
    

    public function setLanguage_name($data)
    {
        $this->_Language_name=$data;
        return $this;
    }

     
    public function getLanguage_name()
    {
        return $this->_Language_name;
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
     * @return  Front_Model_Mappers_Componenttranslate     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componenttranslate());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

