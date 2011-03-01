<?php 
/**
 * This class is used to work with translate component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Translate {
	
	/**
	 * Retrieve database configuration for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Database::getConfiguration('1');
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module_id
	 * @return array
	 */	
	static public function getConfiguration($module_id) {
		$mComponenttranslate=new Maerdo_Model_Componenttranslate();
		$configuration=$mComponenttranslate->findByField('module_id',$module_id,$mComponenttranslate);		
		if(count($configuration)==0) {
			$result=array();
		} else {
			foreach($configuration as $entrie) {
				$result[]=$entrie->toArray();
			}
		}
		return($result);
	}

	/**
	 * update translation configuration for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Translate::update('1',$configuration);
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module_id
	 * @param $configuration Array with configuration parameters
	 * @return boolean
	 */		
	static public function update($module_id,$configuration) {		
		$error=0;
		$mComponenttranslate=new Maerdo_Model_Componenttranslate();
		$mComponenttranslate->delete("module_id='$module_id'");
		foreach($configuration as $key=>$language) {
			//FIX: $key==0 was added because first condition exclue key 0 of configuration array.....
			if($key!="default" || $key=="0") {
				if($configuration['default']==$key) {
					$default="1";
				} else {
					$default="0";
				}							
				if(self::add($module_id,$language['identifiant'],$language['locale'],$language['language_name'],$default)==0) {
					$error='1';
				}	
			}	
		}
		if($error=='1') {
			return(false);
		} else {
			return(true);
		}	
			
	}
	/**
	 * Add language for a module.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Translate::add('1','fr','fr_FR','Francais','0');
	 * </code>
	 * 
	 * @param $module_id  Maerdo database module_id
	 * @param $configuration Array with configuration parameters
	 * @return boolean
	 */			
	static public function add($module_id,$identifiant,$locale,$language_name,$default) {
		$mComponenttranslate=new Maerdo_Model_Componenttranslate();
		return($mComponenttranslate->insert(array('module_id'=>$module_id,
										   'identifiant'=>$identifiant,
										   'locale'=>$locale,
										   'language_name'=>$language_name,
										   'default'=>$default)));
	}
}
?> 