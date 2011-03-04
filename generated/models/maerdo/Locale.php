<?php

 
class Maerdo_Model_Locale extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Locale;
    protected $_Language_name;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Locale();    	
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
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Locale     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Locale());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

