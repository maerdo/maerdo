<?php 
/**
 * This class is used to work with cache component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Cache {

	/**
	 * Get List of cache
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::getList();
	 * </code>
	 * 	 
	 * @return array
	 */		
	
	static public function getList() {
		$mComponentcache=new Maerdo_Model_Componentcache();
		$result=$mComponentcache->fetchAll();
		return($result);
	}	
	
	/**
	 * Get configuration for an entrie.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Auth::getConfiguration($cache_id);
	 * </code>
	 * 	 
	 * @param $cache_id Id of cache configuration in maerdo database
	 * @return array
	 */		
	
	static public function getConfiguration($id) {
		$mCache=new Maerdo_Model_Componentcache();
		$cacheConfig=$mCache->find($id)->toArray();
		
		if($cacheConfig['backend_type']=="file") {	
			$mComponentcachebackendoption=new Maerdo_Model_Componentcachebackendfileoption();
			$backendOptions=$mComponentcachebackendoption->findByField('cc_id',$id,$mComponentcachebackendoption);
			
			foreach($backendOptions as $key=>$value) {				
				$value=$value->toArray();									
				$cacheConfig['backend']=$value;
			}
			
			// Set other support option to null			
			$cacheConfig['backend']['automatic_vacuum_factor']="";
			$cacheConfig['backend']['cache_db_complete_path']="";
			
		} elseif($cacheConfig['backend_type']=="sqlite") {
			$mComponentcachebackendoption=new Maerdo_Model_Componentcachebackendsqliteoption();
			$backendOptions=$mComponentcachebackendoption->findByField('cc_id',$id,$mComponentcachebackendoption);
			
			foreach($backendOptions as $key=>$value) {				
				$value=$value->toArray();									
				$cacheConfig['backend']=$value;
			} 	 	
			// Set other support option to null 	 	 	 	
			$cacheConfig['backend']['cache_dir']="";
			$cacheConfig['backend']['file_locking']="";
			$cacheConfig['backend']['read_control']="";
			$cacheConfig['backend']['read_control_type']="";
			$cacheConfig['backend']['hashed_directory_level']="";
			$cacheConfig['backend']['hashed_directory_umask']="";
			$cacheConfig['backend']['metatadatas_array_max_size']="";	
							
		} else {	
			$cacheConfig['backend']=array();	
		}
		
		$mCacheFrontend=new Maerdo_Model_Componentcachefrontendoption();
		$frontendOptions=$mCacheFrontend->findByField('cc_id',$id,$mCacheFrontend);
		foreach($frontendOptions as $key=>$value) {	
			$value=$value->toArray();					
			$cacheConfig['frontend'][$value['option']]=$value['value'];
		}		

		//var_dump($cacheConfig);die;
		return($cacheConfig);
	}
	
	/**
	 * add cache configuration
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::add($configuration);
	 * </code>
	 * 	 
	 * @param $configuration array with configuration parameters
	 * @return int $id Key of inserted row
	 */		
	
	static public function add($configuration) {
		$cc_id=self::addCache($configuration);
		self::addBackendOption($configuration,$cc_id);
		self::addFrontendOption($configuration,$cc_id);
		return($cc_id);
	}	
	
	/**
	 * add entrie in component__cache table
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::addCache($configuration);
	 * </code>
	 * 	 
	 * @param $configuration array with configuration parameters
	 * @return true
	 */			
	static public function addCache($configuration) {
		if(!isset($configuration['cache_id'])) {
			$mComponentcache=new Maerdo_Model_Componentcache();
			return($mComponentcache->insert(array('name'=>$configuration['name'],'type'=>$configuration['frontend_type'],'backend_type'=>$configuration['backend_type'])));
		}
		
	}
	
	/**
	 * add entries in component__cachebackend table with cache backend options
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::addBackendOption($configuration,$cc_id);
	 * </code>
	 * 	 
	 * @param $configuration array with configuration parameters
	 * @param $cc_id component__cache entrie id
	 * @return true
	 */				
	static public function addBackendOption($configuration,$cc_id) {	
		if($configuration['backend_type']!="apc") {	
			eval('$mComponentcachebackendoption=new Maerdo_Model_Componentcachebackend'.$configuration['backend_type'].'option();');
			foreach($configuration['backend'][$configuration['backend_type']] as $field=>$value) {				
				$mComponentcachebackendoption->$field=$value;			
			}
			$mComponentcachebackendoption->cc_id=$cc_id;
			$mComponentcachebackendoption->save();
		}			
		return true;
	}	
	
	/**
	 * add entries in component__cachebackend table with cache frontend options
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::addFrontendOption($configuration,$cc_id);
	 * </code>
	 * 	 
	 * @param $configuration array with configuration parameters
	 * @param $cc_id component__cache entrie id
	 * @return true
	 */		
	
	static public function addFrontendOption($configuration,$cc_id) {
		foreach($configuration['frontend'] as $field=>$value) {
			$mComponentcachefrontendoption=new Maerdo_Model_Componentcachefrontendoption();
			$mComponentcachefrontendoption->insert(array('cc_id'=>$cc_id,'option'=>$field,'value'=>$value));
		}	
		return true;
	}	

	/**
	 * Delete informations in database for a cache
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::delete($cc_id);
	 * </code>
	 * 	 
	 * @param $cc_id component__cache entrie id
	 * @return true
	 */		
	
	static public function delete($cc_id) {
		$mCache=new Maerdo_Model_Componentcache();
		$cacheData=$mCache->find($cc_id);		
		$mCache->delete("id='$cc_id'");		
		
		if($cacheData->backend_type!="apc") {	
			eval('$mCacheBackend=new Maerdo_Model_Componentcachebackend'.$cacheData->backend_type.'option();');
			$mCacheBackend->delete("cc_id='$cc_id'");
		}

		$mCachefrontend=new Maerdo_Model_Componentcachefrontendoption();
		$mCachefrontend->delete("cc_id='$cc_id'");
		
		return true;
	}		
	
	/**
	 * Set default cache adapter
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Cache::setDefault($cc_id);
	 * </code>
	 * 	 
	 * @param $cc_id component__cache entrie id
	 * @return true
	 */			
	static public function setDefault($adapter_id) {		
		$mCache=new Maerdo_Model_Componentcache();		
		return $mCache->setDefaultCache($adapter_id);		
	}
}
?> 