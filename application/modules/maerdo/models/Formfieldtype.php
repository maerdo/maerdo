<?php

 
class Maerdo_Model_Formfieldtype extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Type;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Formfieldtype();    	
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
    

    public function setType($data)
    {
        $this->_Type=$data;
        return $this;
    }

     
    public function getType()
    {
        return $this->_Type;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Formfieldtype     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Formfieldtype());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

