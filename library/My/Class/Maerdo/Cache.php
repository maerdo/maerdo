<?php 
/**
 * This class is used to work with cache.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Core
 * @version 0.1
 */
class My_Class_Maerdo_Cache {
	
	private static $_cache = null;
	private static $_lifetime = 3600;
	private static $_cacheDir = null;
	
	private static function init() {		
		if (self::$_cache === null) {
			$frontendOptions = array(
				'automatic_serialization' => true,
				'lifetime' => self::$_lifetime);
			$backendOptions = array('cache_dir', self::$_cacheDir);
			try {
				if (extension_loaded('APC')) {
					self::$_cache = Zend_Cache::factory('Core', 'APC',$frontendOptions, array());
				} else {
					self::$_cache = Zend_Cache::factory('Core', 'File',$frontendOptions, $backendOptions);
				}
			} catch (Zend_Cache_Exception $e) {
				throw new Exception($e);
			}
		}
		
		if (!self::$_cache) {
			throw new Exception("No cache backend available.");
		}
	}
	
	public static function setup($lifetime,$filesCachePath = null) {
		if (self::$_cache !== null) { 
			throw new Exception("Cache already used.");
		}
		self::$_lifetime = (integer) $lifetime;
		if ($filesCachePath !== null) {
			self::$_cacheDir = realpath($filesCachePath);
		}
	}
	
	
	public static function getQueryResult($selectObj,$ttl) {		
		self::init();
		if(self::$_cache->load(md5($selectObj->__toString()))!=null) {			
			return(self::$_cache->load(md5($selectObj->__toString())));
		} else {			
			$stmt=$selectObj->query();
			$result=$stmt->fetchAll();			
			self::set($result,md5($selectObj->__toString()),array('sqlSelect'),$ttl);
			return($result);
		}
		
	}
	
	public static function set($data, $key,$tag=array(),$ttl=false) {
		self::init();
		return self::$_cache->save($data, $key,$tag,$ttl);
	}
	
	public static function get($key) {
		self::init();
		return self::$_cache->load($key);
	}

	public static function clean($key = null) {
		self::init();
		if ($key === null) {
			return self::$_cache->clean();
		}
		return self::$_cache->remove($key);
	}
	
	public static function getCacheInstance() {
		if (is_null(self::$_cache)) {
			throw new Exception("Cache not set yet.");
		}
		return self::$_cache;
	}
}
