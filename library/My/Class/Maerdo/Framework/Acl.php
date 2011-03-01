<?php 
/**
 * This class is used to work with acl.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Framework
 * @version 0.1
 */
class My_Class_Maerdo_Framework_Acl {
	
	/**
	 * Retrieve Roles.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::getRoleList();
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page_id
	 * @return array
	 */			
	static public function getRoleList($page_id=NULL) {				
		if($page_id==NULL) {			;
			$mAclrole=new Maerdo_Model_Aclrole();
			$roles=$mAclrole->fetchAll();
		} else {
			$roles=self::retrieveByPageid($page_id);
		}			
		return($roles);
	}	

	/** * Retrieve allowed roles on a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::retrieveByPageid($page_id);
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page_id
	 * @return array array of allowed roles
	 */		
    static function retrieveByPageid($page_id) {    	
    	$mAclresource=new Maerdo_Model_Aclresource();
    	$aclResources=$mAclresource->findByField('page_id',$page_id,$mAclresource);
    	$mAclrole=new Maerdo_Model_Aclrole();
    	$result=array();
    	foreach($aclResources as $key=>$aclResource) {
    		$resultRole=$mAclrole->find($aclResource->acl__role_id);
    		$result[]=$resultRole->role;
    	}
    	return($result);
	}
	
	/**
	 * Add a role.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::addRole('1','admin');
	 * </code>
	 * 
	 * @param $page_id  Maerdo database page id
	 * @param $role  Role
	 * @return boolean
	 */	
	static public function add($page_id,$role) {
		$mCss=new Maerdo_Model_Aclresource();		
		return($mCss->insert(array('page_id'=>$page_id,'acl__role_id'=>$role)));
	}

	
	/**
	 * Update ACL Roles for a page.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::updatePageRole($roles,'1');
	 * </code>
	 * 
	 * @param $roles Array of allowed roles
	 * @param $page_id  Maerdo database page id
	 * @return boolean
	 */		
	static function updatePageRole($roles,$page_id) {

		$mACLRole=new Maerdo_Model_Aclresource();
		
		$mACLRole->delete("page_id='$page_id'");
				
		foreach($roles as $role) {					
			if(self::add($page_id,$role)==0)
				return false;
		}	
		return(true);
	}	

	
	/**
	 * add Acl Role.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::addRole($role,$parent);
	 * </code>
	 * 
	 * @param $role Role
	 * @param $parent Parent
	 * @return boolean
	 */		
	static function addRole($parent,$role) {
		$mACLRole=new Maerdo_Model_Aclrole();		
		try {	
			return($mACLRole->insert(array('parent'=>$parent,'role'=>$role)));
		} catch (Exception $e) {
			return(0);
		}	
	}	

	/**
	 * delete Acl Role.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Framework_Acl::deleteRole($id);
	 * </code>
	 * 
	 * @param $id Id of role	 
	 * @return boolean
	 */		
	static function deleteRole($id) {
		$mACLRole=new Maerdo_Model_Aclrole();		
		return($mACLRole->delete("id='$id'"));
	}		
}
?> 