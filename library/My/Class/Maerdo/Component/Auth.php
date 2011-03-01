<?php 
/**
 * This class is used to work with auth component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Auth {
	
	/**
	 * Get configuration for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Auth::getConfiguration($module_id);
	 * </code>
	 * 	 
	 * @param $module_id  module_id
	 * @return array
	 */		
	
	static public function getConfiguration($module_id) {
		$mComponentauth=new Maerdo_Model_Componentauth();
		$configuration=$mComponentauth->findByField('module_id',$module_id,$mComponentauth);
		if(array_key_exists('0',$configuration)) {
			$configuration=$configuration[0]->toArray();
			$mComponentauthrole=new Maerdo_Model_Componentauthrole();
			$roles=$mComponentauthrole->findByField('ca_id',$configuration['id'],$mComponentauthrole);
			foreach($roles as $role) { 
				$configuration['redirection_role'][$role->role]=$role->url;
			}				
		} else {
			$configuration=array();
		}
			
		return($configuration);
	}
	
	/**
	 * add or update configuration for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Auth::update($module_id,$auth);
	 * </code>
	 * 	 
	 * @return array
	 */		
	
	static public function update($module_id,$authconfiguration) {
		$mComponentauth=new Maerdo_Model_Componentauth();
		$result="true";
		$configuration=$mComponentauth->findByField('module_id',$module_id,$mComponentauth);
		if(array_key_exists('0',$configuration))
			$configuration=$configuration[0];			
		else
			$configuration=new Maerdo_Model_Componentauth();
			
		foreach($authconfiguration as $field=>$value) {
			if($field!="redirection")
				$configuration->$field=$value;
		}
		$configuration->module_id=$module_id;						
		if($configuration->save()!=1) {
			$result="false";
		}	
		
		$mComponentAuthrole=new Maerdo_Model_Componentauthrole();
		$mComponentAuthrole->delete("ca_id='$configuration->id'");
		
		foreach($authconfiguration['redirection'] as $role=>$redirection) {			
			if($mComponentAuthrole->insert(array('ca_id'=>$configuration->id,'role'=>$role,'url'=>$redirection))==false) {
				$result="false";
			}	
		}

		return($result);
	}	
	
}
?> 