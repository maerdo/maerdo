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
		
	/**
	 * Get form fields
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFieldTypeList();
	 * </code>
	 * 	 
	 * @param $id Form id
	 * @return array with type
	 */		
	public function getFormFields($id) {
		$mFormFields=new Maerdo_Model_Formfield();		
		return($mFormFields->findByField('form_id',$id,$mFormFields));
	}	
	
	/**
	 * Delete a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteField($field_id);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return array with type
	 */		
	public function deleteField($field_id) {
		$mFormFields=new Maerdo_Model_Formfield();		
		return($mFormFields->delete("id ='$field_id'"));
	}	

	/**
	 * Add a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteField($field_id);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return array with type
	 */		
	public function addField($form_id,$field_type,$field_name) {
		$mFormFields=new Maerdo_Model_Formfield();		
		return($mFormFields->insert(array('form_id'=>$form_id,'type'=>$field_type,'name'=>$field_name)));
	}	

	/**
	 * Update field options
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateOptions($field_id,$options;$multioptions,$attributs);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return array with type
	 */		
	public function updateOptions($field_id,$options,$multioptions,$attributs) {
		$mFormFieldOption=new Maerdo_Model_Formfieldoptions();
		$mFormFieldOption->delete("form__field_id='$field_id'");
		
		$mFormFieldAttribs=new Maerdo_Model_Formfieldattribs();
		$mFormFieldAttribs->delete("form__field_id='$field_id'");	

		$mFormFieldMultioptions=new Maerdo_Model_Formfieldmultioptions();
		$mFormFieldMultioptions->delete("form__field_id='$field_id'");

		foreach($options as $option=>$value) {
			if($option=="required") {
				if($value=="on") {
					$value="true";
				}	
			}
			$mFormFieldOption->insert(array('form__field_id'=>$field_id,'name'=>$option,'value'=>$value));	
		}
		
		return(true);
	}

	/**
	 * Retrieve options for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateOptions($field_id,$options;$multioptions,$attributs);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return array with type
	 */		
	public function getOptions($field_id) {
		$mFormFieldOption=new Maerdo_Model_Formfieldoptions();
		$mFormFieldOption->findByField("form__field_id='$field_id'");	
	}
}
?> 