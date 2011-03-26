<?php

 
class Maerdo_Model_Formfieldvalidatorsoptions extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Form__field_validators_id;
    protected $_Option;
    protected $_Value;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Formfieldvalidatorsoptions();    	
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
    

    public function setForm__field_validators_id($data)
    {
        $this->_Form__field_validators_id=$data;
        return $this;
    }

     
    public function getForm__field_validators_id()
    {
        return $this->_Form__field_validators_id;
    }
    

    public function setOption($data)
    {
        $this->_Option=$data;
        return $this;
    }

     
    public function getOption()
    {
        return $this->_Option;
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
     * @return  Maerdo_Model_Mappers_Formfieldvalidatorsoptions     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Formfieldvalidatorsoptions());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

