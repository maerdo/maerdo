<?php 
/**
 * This class is used to work with cache.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */


class My_Class_Maerdo_Cache {
	
	static protected $_cache;	
	
	static public function init($cache_name) {
		$manager = new Zend_Cache_Manager;
		if($manager->hasCache($cache_name)) {
			self::$_cache=$manager->getCache($cache_name);
			return true;
		} elseif($manager->getCache('default')) {
			self::$_cache=$manager->getCache('default');
			return true;
		} else {
			return false;
		}
	}
 	
	static public function getQueryResult($selectObj,$ttl=1,$cache="default") {		
		if(self::init($cache)!=false) {
			if(self::$_cache->test(md5($selectObj->__toString()))!=false) {			
				return(self::$_cache->load(md5($selectObj->__toString())));
			} else {			
				$stmt=$selectObj->query();			
				self::set(md5($selectObj->__toString()),$result,$ttl,array('sqlSelect'),$cache);
				return($result);
			}
		}
		
	}
	
	static public function set($key,$data,$ttl=false,$tag=array(),$cache="default") {
		if(self::init($cache)!=false) {	
			return self::$_cache->save($data,$key ,$tag,$ttl);
		}	
	}
	
	static public function get($key,$cache="default") {
		if(self::init($cache)!=false) {
			return self::$_cache->load($key);
		}
	}
	static public function test($key,$cache="default") {
		if(self::init($cache)!=false) {
			return self::$_cache->test($key);
		}
	}	

	static public function clean($key = null,$cache="default") {
		if(self::init($cache)!=false) {
			if ($key === null) {
				return self::$_cache->clean();
			}
			return self::$_cache->remove($key);
		}
	}

}