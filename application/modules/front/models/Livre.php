<?php

 
class Front_Model_Livre extends Front_Model_Abstract {

    protected $_Id;
    protected $_Id_auteur;
    protected $_Nom;
    protected $_Date;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Livre();    	
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
    

    public function setId_auteur($data)
    {
        $this->_Id_auteur=$data;
        return $this;
    }

     
    public function getId_auteur()
    {
        return $this->_Id_auteur;
    }
    

    public function setNom($data)
    {
        $this->_Nom=$data;
        return $this;
    }

     
    public function getNom()
    {
        return $this->_Nom;
    }
    

    public function setDate($data)
    {
        $this->_Date=$data;
        return $this;
    }

     
    public function getDate()
    {
        return $this->_Date;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Livre     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Livre());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

