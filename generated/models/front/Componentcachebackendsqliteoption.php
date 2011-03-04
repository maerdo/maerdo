<?php

 
class Front_Model_Componentcachebackendsqliteoption extends Front_Model_Abstract {

    protected $_Id;
    protected $_Cc_id;
    protected $_Cache_dir;
    protected $_File_locking;
    protected $_Read_control;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componentcachebackendsqliteoption();    	
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
    

    public function setFile_locking($data)
    {
        $this->_File_locking=$data;
        return $this;
    }

     
    public function getFile_locking()
    {
        return $this->_File_locking;
    }
    

    public function setRead_control($data)
    {
        $this->_Read_control=$data;
        return $this;
    }

     
    public function getRead_control()
    {
        return $this->_Read_control;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Componentcachebackendsqliteoption     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componentcachebackendsqliteoption());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

