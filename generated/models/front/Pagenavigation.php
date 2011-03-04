<?php

 
class Front_Model_Pagenavigation extends Front_Model_Abstract {

    protected $_Id;
    protected $_Page_id;
    protected $_Parent_id;
    protected $_Label;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Pagenavigation();    	
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
    

    public function setParent_id($data)
    {
        $this->_Parent_id=$data;
        return $this;
    }

     
    public function getParent_id()
    {
        return $this->_Parent_id;
    }
    

    public function setLabel($data)
    {
        $this->_Label=$data;
        return $this;
    }

     
    public function getLabel()
    {
        return $this->_Label;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Pagenavigation     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Pagenavigation());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

