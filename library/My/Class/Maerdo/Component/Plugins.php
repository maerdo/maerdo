<?php 
/**
 * This class is used to work with plugin component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Plugins {
	
	/**
	 * Retrieve plugin list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::retriveList();
	 * </code>
	 * 
	 * @return array
	 */	
	static public function retrieveList() {
		$modules=array_diff(scandir(APPLICATION_PATH.'/modules'),array('.','..'));
		$plugins=array();
		foreach($modules as $key=>$module) {
			if(is_dir(APPLICATION_PATH.'/modules/'.$module.'/library/My/Plugins')) {
				$plugins=array_merge(array_diff(scandir(APPLICATION_PATH.'/modules/'.$module.'/library/My/Plugins'),array('.','..')),$plugins);
			}		
		}
		if(is_dir(APPLICATION_PATH.'/../library/My/Plugins')) {
			$plugins=array_merge(array_diff(scandir(APPLICATION_PATH.'/../library/My/Plugins'),array('.','..')),$plugins);
		}		
		foreach($plugins as $plugin) {
			$result[]=str_replace('.php','',$plugin);
		}
		return($result);
	}
	
	/**
	 * Retrieve selected plugin with their stackindex.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::getSelectedplugin();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function getSelectedplugin() {
		$mComponentplugin=new Maerdo_Model_Componentplugin();
		$selectedplugin=$mComponentplugin->fetchAll();
		$result=array();
		foreach($selectedplugin as $plugin) {
			$result[]=$plugin->toArray();
		}
		return($result);		
	}		
	
	/**
	 * Retrieve free plugins.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::getFreePlugins();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function getFreePlugins() {
		$plugins=self::retrieveList();
		$selectedplugins=self::getSelectedplugin();	
		$selected=array();	
		foreach($selectedplugins as $plugin) {
			$selected[]=$plugin['name'];
		}
		$avaiableplugins=array_diff($plugins,$selected);

		return($avaiableplugins);		
	}		

	/**
	 * retrieve avaiable stack index.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::retrieveStackIndex();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function retrieveStackIndex() {
		$mComponentplugin=new Maerdo_Model_Componentplugin();
		for($i=1;$i<97;$i++) $stackIndex[$i]=$i;
		
		$reserved=array();
		$plugins=$mComponentplugin->fetchAll();
		foreach($plugins as $plugin) {
			$reserved[$plugin->stackindex]=$plugin->stackindex;
		}
		$freeStackindex=array_diff($stackIndex,$reserved);
		foreach($freeStackindex as $stackindex)
			$result[]=$stackindex;
		return($result);
	}
	
	/**
	 * add a plugin with the first free stackindex.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::add();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function add($plugin_name) {
		$stackindex=array_shift(self::retrieveStackIndex());
		$mComponentplugin=new Maerdo_Model_Componentplugin();
		return($mComponentplugin->insert(array('stackindex'=>$stackindex,'name'=>$plugin_name)));		
	}	
	
	/**
	 * delete a plugin.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::delete();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function delete($plugin_name) {
		$where='name="'.$plugin_name.'"';
		$mComponentplugin=new Maerdo_Model_Componentplugin();
		return($mComponentplugin->delete($where));		
	}
	
	/**
	 * Update stack index for a plugin.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Plugins::updatestackindex();
	 * </code>
	 * 
	 * @return array
	 */		
	static public function updatestackindex($plugin_name,$stackindex) {
		$where='name="'.$plugin_name.'"';
		$mComponentplugin=new Maerdo_Model_Componentplugin();
		return($mComponentplugin->update(array('stackindex'=>$stackindex),$where));		
	}	

}
?> 