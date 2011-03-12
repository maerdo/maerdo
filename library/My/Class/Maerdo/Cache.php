<?php 
/**
 * This class is used to work with cache.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Core
 * @version 0.1
 * 
 * Examples :
 * 
 * In a controller :
 * 		$array=array('A'=>1,
 *		    			 'B'=>2,
 *		    			 'C'=>3,
 *		    			 );
 *		
 *		if(My_Class_Maerdo_Cache::test('arrayindex','default')==false) {
 *		    My_Class_Maerdo_Cache::set('arrayindex',$array,'60','default');
 *		}	
 *		    
 *		$this->view->array=My_Class_Maerdo_Cache::get('arrayindex','default');
 *
 *
 *
 * In a model :
 *     public function getAllBook() {
 *    	$select=$this->getDbTable()->select();
 *   	
 *  	$select->from('Book');
 *   	
 *   	$result=My_Class_Maerdo_Cache::getQueryResult($select,'60','default');
 *   	return($result);
 *   
 *   }
 */
class My_Class_Maerdo_Cache {
	
	static protected $_cache;	
	
	static public function init($cache_name) {
		$manager = new Zend_Cache_Manager;
		if($manager->hasCache($cache_name)) {
			self::$_cache=$manager->getCache($cache_name);
		} elseif($manager->getCache('default')) {
			self::$_cache=$manager->getCache('default');
		} else {
			return false;
		}
	}
	
	static public function getQueryResult($selectObj,$ttl=60,$cache="default") {		
		self::init($cache);
		if(self::$_cache->test(md5($selectObj->__toString()))!=false) {			
			return(self::$_cache->load(md5($selectObj->__toString())));
		} else {			
			$stmt=$selectObj->query();
			$result=$stmt->fetchAll();			
			self::set(md5($selectObj->__toString()),$result,$ttl,$cache,array('sqlSelect'));
			return($result);
		}
		
	}
	
	static public function set($data, $key,$ttl=false,$cache="default",$tag=array()) {
		self::init($cache);	
		return self::$_cache->save($key,$data ,$tag,$ttl);
	}
	
	static public function get($key,$cache="default") {
		self::init($cache);
		return self::$_cache->load($key);
	}
	static public function test($key,$cache="default") {
		self::init($cache);
		return self::$_cache->test($key);
	}	

	static public function clean($key = null,$cache="default") {
		self::init($cache);
		if ($key === null) {
			return self::$_cache->clean();
		}
		return self::$_cache->remove($key);
	}

}
