<?php

 
class Front_Model_Componentcachebackendfileoption extends Front_Model_Abstract {

    protected $_Id;
    protected $_Cc_id;
    protected $_Cache_dir;
    protected $_File_locking;
    protected $_Read_control;
    protected $_Read_control_type;
    protected $_Hashed_directory_level;
    protected $_Hashed_directory_umask;
    protected $_Metatadatas_array_max_size;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Componentcachebackendfileoption();    	
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
    

    public function setRead_control_type($data)
    {
        $this->_Read_control_type=$data;
        return $this;
    }

     
    public function getRead_control_type()
    {
        return $this->_Read_control_type;
    }
    

    public function setHashed_directory_level($data)
    {
        $this->_Hashed_directory_level=$data;
        return $this;
    }

     
    public function getHashed_directory_level()
    {
        return $this->_Hashed_directory_level;
    }
    

    public function setHashed_directory_umask($data)
    {
        $this->_Hashed_directory_umask=$data;
        return $this;
    }

     
    public function getHashed_directory_umask()
    {
        return $this->_Hashed_directory_umask;
    }
    

    public function setMetatadatas_array_max_size($data)
    {
        $this->_Metatadatas_array_max_size=$data;
        return $this;
    }

     
    public function getMetatadatas_array_max_size()
    {
        return $this->_Metatadatas_array_max_size;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Componentcachebackendfileoption     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Componentcachebackendfileoption());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

