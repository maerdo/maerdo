<?php

 
class Front_Model_Livreliste extends Front_Model_Abstract {

    protected $_Nom;
    protected $_Prenom;
    protected $_Titre;

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new Front_Model_Mappers_Livreliste();    	
    	$this->_modelInstance=$this;

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
    

    public function setTitre($data)
    {
        $this->_Titre=$data;
        return $this;
    }

     
    public function getTitre()
    {
        return $this->_Titre;
    }
    
  
    /**
     * returns the mapper class
     *
     * @return  Front_Model_Mappers_Livreliste     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  Front_Model_Mappers_Livreliste());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

