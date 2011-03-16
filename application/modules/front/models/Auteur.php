<?php

 
class Front_Model_Auteur extends Front_Model_Abstract {

    protected $_Id;
    protected $_Nom;
    protected $_Prenom;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Auteur();    	
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
    

    public function setNom($data)
    {
        $this->_Nom=$data;
        return $this;
    }

     
    public function getNom()
    {
        return $this->_Nom;
    }
    

    public function setPrenom($data)
    {
        $this->_Prenom=$data;
        return $this;
    }

     
    public function getPrenom()
    {
        return $this->_Prenom;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Auteur     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Auteur());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

