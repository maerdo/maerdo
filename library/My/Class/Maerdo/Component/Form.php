<?php 
/**
 * This class is used to work with form component.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Component
 * @version 0.1
 */
class My_Class_Maerdo_Component_Form {
	
	/**
	 * Add form.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::add($configuration);
	 * </code>
	 * 	 
	 * @param $configuration Form configuration
	 * @return array
	 */		
	static public function add($configuration) {
		$mForm=new Maerdo_Model_Form();
		$mForm->insert(array('action'=>$configuration['action_url'],
							 'method'=>$configuration['method'],
							 'name'=>$configuration['name'],
							 'template'=>$configuration['template']));
	}
	
	
	/**
	 * Get forms list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getlist();
	 * </code>
	 * 	 
	 * @return array with forms
	 */		
	static public function getList() {
		$mForm=new Maerdo_Model_Form();
		$forms=$mForm->fetchAll();
		return($forms);
	}
	
	
	/**
	 * Get forms templates
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getTemplates();
	 * </code>
	 * 	 
	 * @return array with forms
	 */	
	static public function getTemplates() {
		$files=scandir(APPLICATION_PATH.'/../utils/Forms');
		$files=array_diff($files,array('.','..'));
		return($files);
	}
	
	/**
	 * Get field type list
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFieldTypeList();
	 * </code>
	 * 	 
	 * @return array with type
	 */		
	public function getFieldTypeList() {
		$mFormFieldType=new Maerdo_Model_Formfieldtype();
		return($mFormFieldType->fetchAll());
	}
		
	
}
?> 