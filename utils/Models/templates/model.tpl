<?="<?php\n"?>

 
class <?=$params['module']?>_Model_<?=$params['filename']?> extends <?=$params['module']?>_Model_Abstract {

<?foreach ($params['fields'] as $column):?>
    protected $_<?=ucfirst($column)?>;
<?endforeach;?>

	protected $_modelInstance;
    protected $_mapper;
    

	public function __construct() {
		$this->_mapper=new <?=$params['module']?>_Model_Mappers_<?=$params['filename']?>();    	
    	$this->_modelInstance=$this;

	}

	
    <?foreach ($params['fields'] as $column):?>


    public function set<?=ucfirst($column)?>($data)
    {
        $this->_<?=ucfirst($column)?>=$data;
        return $this;
    }

     
    public function get<?=ucfirst($column)?>()
    {
        return $this->_<?=ucfirst($column)?>;
    }
    <?endforeach;?>

  
    /**
     * returns the mapper class
     *
     * @return  <?=$params['module']?>_Model_Mappers_<?=$params['filename']?>
     *
     */       
    public function getMapper()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new  <?=$params['module']?>_Model_Mappers_<?=$params['filename']?>());
        }
        return $this->_mapper;
    }
    
    public function setMapper($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }       

}

