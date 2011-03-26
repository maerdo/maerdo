<?php

 
class Maerdo_Model_Formfieldvalidators extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Form__field_id;
    protected $_Validator;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Formfieldvalidators();    	
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
    

    public function setForm__field_id($data)
    {
        $this->_Form__field_id=$data;
        return $this;
    }

     
    public function getForm__field_id()
    {
        return $this->_Form__field_id;
    }
    

    public function setValidator($data)
    {
        $this->_Validator=$data;
        return $this;
    }

     
    public function getValidator()
    {
        return $this->_Validator;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Formfieldvalidators     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Formfieldvalidators());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

