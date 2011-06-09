<?
/*


$manager->setCache('database', $dbCache);
//Partout ailleurs où le gestionnaire de cache est accessible...

if ($manager->hasCache('database')) {
    $databaseCache = $manager->getCache('database');
} else {

    // Créer un cache à la main puisque non trouvé dans le gestionnaire
}
 */

class My_Plugins_Cache extends Zend_Controller_Plugin_Abstract {
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  

       if(file_exists(APPLICATION_PATH . '/configs/cache.ini')) {
		   $config_ini = APPLICATION_PATH . '/configs/cache.ini';
		   $config=new Zend_Config_Ini($config_ini);
		   
		   $manager = new Zend_Cache_Manager;
		   
		   if($config->cache) {
			   foreach($config->cache as $cacheconf) {
	
			   	 //var_dump($cacheconf->frontend->toArray());die;
			   	 
			   	 if(count($cacheconf->backend)>0) {
			   	 	$backendoptions=$cacheconf->backend->toArray();			   	 	
			   	 } else {
			   	 	$backendoptions=array();
			   	 }
				 $cache = Zend_Cache::factory($cacheconf->type, $cacheconf->backendtype,
	                                  $cacheconf->frontend->toArray(), $backendoptions);
	             $manager->setCache($cacheconf->name,$cache);
	             if($cacheconf->default=="yes")
	             	$databaseCache = $manager->setCache('default',$cache);
	             
			   }
		  }   
       }              
	} 
}	