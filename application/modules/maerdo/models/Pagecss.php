<?php

 
class Maerdo_Model_Pagecss extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Page_id;
    protected $_Identifiant;
    protected $_File;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Pagecss();    	
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
    

    public function setIdentifiant($data)
    {
        $this->_Identifiant=$data;
        return $this;
    }

     
    public function getIdentifiant()
    {
        return $this->_Identifiant;
    }
    

    public function setFile($data)
    {
        $this->_File=$data;
        return $this;
    }

     
    public function getFile()
    {
        return $this->_File;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Pagecss     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Pagecss());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

