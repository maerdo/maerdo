<?php

 
class Maerdo_Model_Aclresource extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Page_id;
    protected $_Acl__role_id;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Aclresource();    	
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
    

    public function setAcl__role_id($data)
    {
        $this->_Acl__role_id=$data;
        return $this;
    }

     
    public function getAcl__role_id()
    {
        return $this->_Acl__role_id;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Aclresource     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Aclresource());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

