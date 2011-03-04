<?php

 
class Maerdo_Model_Componentcachebackendsqliteoption extends Maerdo_Model_Abstract {

    protected $_Id;
    protected $_Cc_id;
    protected $_Cache_dir;
    protected $_Automatic_vacuum_factor;
    protected $_Cache_db_complete_path;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Maerdo_Model_Mappers_Componentcachebackendsqliteoption();    	
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
    

    public function setCc_id($data)
    {
        $this->_Cc_id=$data;
        return $this;
    }

     
    public function getCc_id()
    {
        return $this->_Cc_id;
    }
    

    public function setCache_dir($data)
    {
        $this->_Cache_dir=$data;
        return $this;
    }

     
    public function getCache_dir()
    {
        return $this->_Cache_dir;
    }
    

    public function setAutomatic_vacuum_factor($data)
    {
        $this->_Automatic_vacuum_factor=$data;
        return $this;
    }

     
    public function getAutomatic_vacuum_factor()
    {
        return $this->_Automatic_vacuum_factor;
    }
    

    public function setCache_db_complete_path($data)
    {
        $this->_Cache_db_complete_path=$data;
        return $this;
    }

     
    public function getCache_db_complete_path()
    {
        return $this->_Cache_db_complete_path;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Maerdo_Model_Mappers_Componentcachebackendsqliteoption     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Maerdo_Model_Mappers_Componentcachebackendsqliteoption());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

