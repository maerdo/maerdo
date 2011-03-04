<?
class My_Plugins_Acl extends Zend_Controller_Plugin_Abstract {
	
	private $_auth;
	private $_acl;
	
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)  {  

		if($request->getModuleName()=="default") {
			$request->setModuleName('front') ;  
		}		
		
		$acl_ini = APPLICATION_PATH . '/modules/'.$request->getModuleName().'/configs/acl.ini' ;
		
			
		if (file_exists($acl_ini) && is_readable($acl_ini)) {
			$acl_conf=new Zend_Config_Ini($acl_ini);
			$this->_acl=$this->_init_acl($acl_conf);
			Zend_Registry::set('acl',$acl_conf);
		}
			
		$this->_auth = Zend_Auth::getInstance() ;
		
		
		// is the user authenticated  
		if ($this->_auth->hasIdentity()) {  
			 // yes ! we get his role  
			 $user = $this->_auth->getStorage()->read() ;  
			 $role = $user->role ;
		} else {  
			 // no = guest user  
			 $role = 'guest';  
		}  		
		
		
		$module     = $request->getModuleName() ;  
		$controller = $request->getControllerName() ;  
		$action     = $request->getActionName() ;  
		 
		$front = Zend_Controller_Front::getInstance() ;    
		
		$resource = $module.'_'.$controller ;  
 
		//echo ("<b>### Plugins_Acl::preDispatch :</b>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; Role: $role&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Ressource : $resource&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Action :$action<br/>");
	
		// control if ressource exist  
		if (!$this->_acl->has($resource)) {  
			$resource = null; 
			// Create a 404 redirection catched by errorHandler 
		    $module       = "404";			   
		    $controller   = "404" ;  
		    $action       = "404" ; 	
		
		} else {												
	
			// Control if user can acces this page
			if (!$this->_acl->isAllowed($role, $resource, $action)) {  

				// User can acces this page, we redirect request
				if (!$this->_auth->hasIdentity()) {  
				   // User is not identified 
				   $module  = $request->getModuleName();			   
				   $controller   = "index" ;  
				   $action       = "login" ;
				} else {  
				   // User is identified but don't got privileges  
				   $module  = $request->getModuleName();			   
				   $controller   = "index" ;  
				   $action       = "permission" ;  
				}  
			}  
	
			$request->setModuleName($module) ;  
			$request->setControllerName($controller) ;  
			$request->setActionName($action) ;  
		}
	}
	
	
	public function _init_acl($config_acl) {
		$acl=new Zend_Acl();
		
		// Role definitions
		foreach($config_acl->roles as $role=>$parent) {
			if($parent!="")
				$acl->addRole(new Zend_Acl_Role($role),$parent);
			else
				$acl->addRole(new Zend_Acl_Role($role));
		}
		
		// Ressources definitions
		foreach($config_acl->resources as $resource=>$null) {
			$acl->add(new Zend_Acl_Resource($resource));
		}

		//Permission definition
		foreach($config_acl->roles as $role=>$parent) {
			if(count($config_acl->$role) > 0) {
				foreach($config_acl->$role as $permission=>$data) {
					foreach($data as $resource=>$actions)
						$acl->$permission($role,$resource,explode(',',$actions));
				}
			}
		}
		
		return($acl);
	}
	
}	