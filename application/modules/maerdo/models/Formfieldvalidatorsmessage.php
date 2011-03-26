<?php

 
class Maerdo_Model_Formfieldvalidatorsmessage extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Form__field_validators_id;
    protected $_Key;
    protected $_Message;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Formfieldvalidatorsmessage();    	
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
    

    public function setKey($data)
    {
        $this->_Key=$data;
        return $this;
    }

     
    public function getKey()
    {
        return $this->_Key;
    }
    

    public function setMessage($data)
    {
        $this->_Message=$data;
        return $this;
    }

     
    public function getMessage()
    {
        return $this->_Message;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Formfieldvalidatorsmessage     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Formfieldvalidatorsmessage());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

