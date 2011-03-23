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
	 * $result=My_Class_Maerdo_Component_Form::update($field_id,$options;$multioptions,$attributs);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return array with type
	 */		
	public function update($field_id,$options,$multioptions,$attributs) {
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

		if(count($multioptions)>1) {		
			foreach($multioptions as $value) {
				$mFormFieldMultioptions->insert(array('form__field_id'=>$field_id,'name'=>$value['name'],'value'=>$value['value']));	
			}
		}		
		
		if(count($attributs)>1) {
			foreach($attributs as $value) {
				$mFormFieldAttribs->insert(array('form__field_id'=>$field_id,'name'=>$value['name'],'value'=>$value['value']));	
			}		
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
		$result['options']=array();
		$mFormFieldOption=new Maerdo_Model_Formfieldoptions();
		$options=$mFormFieldOption->findByField("form__field_id",$field_id,$mFormFieldOption);
		foreach($options as $key=>$value) {
			$result['options'][$value->name]=$value->value;
		}
		
		$result['multioptions']=array();
		$mFormFieldMultioptions=new Maerdo_Model_Formfieldmultioptions();
		$multioptions=$mFormFieldMultioptions->findByField("form__field_id",$field_id,$mFormFieldMultioptions);
		foreach($multioptions as $key=>$value) {
			$result['multioptions'][$key]=array('value'=>$value->value,'name'=>$value->name,'id'=>$value->id);
		}		
		

		$result['attributs']=array();
		$mFormFieldattributs=new Maerdo_Model_Formfieldattribs();
		$attributs=$mFormFieldattributs->findByField("form__field_id",$field_id,$mFormFieldattributs);
		foreach($attributs as $key=>$value) {
			$result['attributs'][$key]=array('value'=>$value->value,'name'=>$value->name,'id'=>$value->id);
		}		
		return($result);		
	}
	
	/**
	 * Delete all multioptions for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deletemultioption($field_id);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return boolean
	 */		
	public function deletemultioption($field_id) {
		$mFormFieldMultioptions=new Maerdo_Model_Formfieldmultioptions();
		return($mFormFieldMultioptions->delete("id='$field_id'"));
	}
	/**
	 * Delete all attributs for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteattribut($field_id);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return boolean
	 */		
	public function deleteattribut($field_id) {
		$mFormFieldattributs=new Maerdo_Model_Formfieldattribs();
		return($mFormFieldattributs->delete("id='$field_id'"));
	}
	/**
	 * Get list of all avaiable validator
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidatorList();
	 * </code>
	 * 	 
	 * @return array
	 */		
	public function getValidatorList() {
		$validators=array('alnum','alpha','barcode','Callback','Ccnum','CreditDard',
						 'Date','Db_Abstract','Db_NoRecordExists','Db_RecordExists',
						 'Digits','EmailAddress','Exception','File_Count','File_Crc32','File_ExcludeExtension',
						 'File_ExcludeMimeType','File_Exists','File_Extension','File_Hash','File_ImageSize','File_isCompressed',
						 'File_IsImage','File_Md5','File_MimeType','File_NoExists','File_SHA1','File_Size','File_Upload','File_WordCount',
						 'Float','GreaterThan','Hex','Hostname','Iban','Identical','InArray','Int','Ip','Isbn','LessThan','NotEmpty',
						 'PostCode','Regex','StringLength');
		
		$files=array_diff(scandir(APPLICATION_PATH.'/../library/My/Validators'),array('.','..'));
		foreach($files as $key=>$value) {
			$validators[]=str_replace('.php','',$value);
		}
		return($validators);
		
	}
	/**
	 * Get list of validators for a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidator($field_id);
	 * </code>
	 * 	 
	 * @return array
	 */		
	public function getValidator($field_id) {
		return(array());
	}
}
?> 