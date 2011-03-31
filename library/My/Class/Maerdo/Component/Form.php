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
	static  public function add($configuration) {
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
	static  public function getList() {
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
	static  public function getTemplates() {
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
	public static function getFieldTypeList() {
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
	public static function getFormFields($id) {
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
	public static function deleteField($field_id) {
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
	public  static function addField($form_id,$field_type,$field_name) {
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
	public static function update($field_id,$options,$multioptions,$attributs) {
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
	public static function getOptions($field_id) {
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
	public static function deletemultioption($field_id) {
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
	public static function deleteattribut($field_id) {
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
	public  static function getValidatorList() {
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
	public static function getValidator($field_id) {
		$mFormfieldValidators=new Maerdo_Model_Formfieldvalidators();
		return($mFormfieldValidators->findByField('form__field_id',$field_id,$mFormfieldValidators));
	}
	
	/**
	 * add a validator to a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::addValidator($field_id,$validator_name);
	 * </code>
	 * 	 
	 * @return bool
	 */			
	public static  function addValidator($field_id,$validator) {
		$mFormfieldValidators=new Maerdo_Model_Formfieldvalidators();
		return($mFormfieldValidators->insert(array('form__field_id'=>$field_id,'validator'=>$validator)));
	}
	
	/**
	 * delete a field validator
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteValidator($validator_id);
	 * </code>
	 * 	 
	 * @params validator_id  Database id of validator
	 * @return bool
	 */			
	public static function deleteValidator($validator_id) {
		$mFormfieldValidators=new Maerdo_Model_Formfieldvalidators();
		return($mFormfieldValidators->delete('id="'.$validator_id.'"'));	
	}
	
	/**
	 * Get free validation options list
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidatorOptionsList($validator_id);
	 * </code>
	 * 	 
	 * @params Database validator id
	 * @return array
	 */			
	public static function getValidatorOptionsList($validator_id) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/validator.ini');
		
		$mValidator=new Maerdo_Model_Formfieldvalidators();
		$validator=$mValidator->find($validator_id);
		
		$validator=strtolower($validator->Validator);
		$options=$config->options->{$validator}->toArray();
		
		$result=array();
		
		$alreadyUsed=self::getValidatorOptions($validator_id);
		foreach($alreadyUsed as $option) {
			$alreadyUsedArray[$option->option]=$option->option;
		}
				
		if(count($alreadyUsed)>0)  {
			foreach($options as $option) {	
				foreach($alreadyUsedArray as $au) {
					if(!in_array($option,$alreadyUsedArray)) {				
						$result[$option]=$option;
					}	
				}		
			}
		} else {
			$result=$options;
		}	
		
		
		return($result);
		
	}	
	/**
	 * Update validator options
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateValidatoroptions($options,$validator_id);
	 * </code>
	 * 	 
	 * @params $options Array with validator options
	 * @return array
	 */				
	public static function updateValidatorOptions($options,$validator_id) {
		$mValidatoroptions=new Maerdo_Model_Formfieldvalidatorsoptions();
		$mValidatoroptions->delete("form__field_validators_id='".$validator_id."'");		
		if(is_array($options)) {
			foreach($options as $option) {
				if($mValidatoroptions->insert(array('option'=>$option['option'],'value'=>$option['value'],'form__field_validators_id'=>$validator_id))==0)
					return false;
			}
		}
		return true;
	} 
	
	/**
	 * Get validator option for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateValidatoroptions($options,$validator_id);
	 * </code>
	 * 	 
	 * @params $options Array with validator options
	 * @return array
	 */				
	public static function getValidatorOptions($validator_id) {
		$mValidatoroptions=new Maerdo_Model_Formfieldvalidatorsoptions();
		$result=$mValidatoroptions->findByField("form__field_validators_id",$validator_id,$mValidatoroptions);				
		return $result;
	} 	
	
	/**
	 * Get error message list for a validator
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getMessagesList($validator_id);
	 * </code>
	 * 	 
	 * @params $validator_id Maerdo database validator id
	 * @return array
	 */				
	static public function getMessagesList($validator_id) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/validator.ini');
		
		$mValidator=new Maerdo_Model_Formfieldvalidators();
		$validator=$mValidator->find($validator_id);
		
		$validator=strtolower($validator->Validator);
		$messages=$config->messages->{$validator}->toArray();
						
		$mValidator=new Maerdo_Model_Formfieldvalidatorsmessage();
		$validatormessages=$mValidator->findByField('form__field_validators_id ',$validator_id,$mValidator);		
			
		$i=0;
		$result=array(0=>array(),1=>array());
		foreach($validatormessages as $dbmessage) {
				$result[0][$dbmessage->key]['type']='personal';
				$result[0][$dbmessage->key]['errorcode']=$dbmessage->key;
				$result[0][$dbmessage->key]['message']=$dbmessage->message;
		}
		foreach($messages as $key=>$message) {
				$result[1][$key]['type']='default';
				$result[1][$key]['errorcode']=$key;
				$result[1][$key]['message']=$message;				
		}
		
		return($result);		
	}
	
	/**
	 * Check if an option exist for a validator
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::checkIfValidatorOptionExist($validator_id,$option);
	 * </code>
	 * 	 
	 * @params $validator_id Maerdo database validator id
	 * @params $option Name of validator option
	 * @return bool
	 */				
	static public function checkIfValidatorOptionExist($validator_id,$option) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/validator.ini');
		
		$mValidator=new Maerdo_Model_Formfieldvalidators();
		$validator=$mValidator->find($validator_id);
		
		$validator=strtolower($validator->Validator);
		$options=$config->options->{$validator}->toArray();
			
		if(in_array($option,$options))
			return true;
		else
			return false;
	}
	
	static public function updateMessages($messages,$validator_id) {
		$mFormValidatorMessages=new Maerdo_Model_Formfieldvalidatorsmessage();
		$mFormValidatorMessages->delete('form__field_validators_id="'.$validator_id.'"');
		foreach($messages as $key=>$value) {
			if($value['type']=="personal") {
				if($mFormValidatorMessages->insert(array('form__field_validators_id'=>$validator_id,'key'=>$key,'message'=>$value['message']))==0) {
					return false;
				}
			}			
		}	
		return true;
	}
}
?> 