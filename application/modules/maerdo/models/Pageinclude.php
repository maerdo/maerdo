<?php

 
class Maerdo_Model_Pageinclude extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Page_id;
    protected $_Type;
    protected $_Path;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Pageinclude();    	
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
    

    public function setType($data)
    {
        $this->_Type=$data;
        return $this;
    }

     
    public function getType()
    {
        return $this->_Type;
    }
    

    public function setPath($data)
    {
        $this->_Path=$data;
        return $this;
    }

     
    public function getPath()
    {
        return $this->_Path;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Pageinclude     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Pageinclude());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

