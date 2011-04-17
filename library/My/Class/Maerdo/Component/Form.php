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
	 * Add a form.
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
		return($mForm->insert(array('action'=>$configuration['action_url'],
							 'method'=>$configuration['method'],
							 'name'=>$configuration['name'],
							 'template'=>$configuration['template'])));
	}
	
	/**
	 * Update a form.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateForm($form_id,$configuration);
	 * </code>
	 * 	 
	 * @param $form_id Id of Form
	 * @param $configuration Form configuration
	 * @return boolean
	 */		
	static  public function updateForm($form_id,$configuration) {
		$mForm=new Maerdo_Model_Form();
		$form=$mForm->find($form_id);
		$form->action=$configuration['action_url'];
		$form->method=$configuration['method'];
		$form->name=$configuration['name'];
		$form->template=$configuration['template'];
		var_dump($form->save());die;
		return($form->save());
	}	
	
	/**
	 * Delete a form with his fields, validators and filters.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::delete($form_id);
	 * </code>
	 * 	 
	 * @param $form_id Database id of form
	 * @return boolean
	 */		
	static  public function delete($form_id) {
		try {
			$mForm=new Maerdo_Model_Form();
			$mForm->delete('id="'.$form_id.'"');
			
			$mFormfield=new Maerdo_Model_Formfield();
			$fields=$mFormfield->findByField('form_id',$form_id,$mFormfield);

			$mFormfieldattribs=new Maerdo_Model_Formfieldattribs();
			$mFormfieldoptions=new Maerdo_Model_Formfieldoptions();
			$mFormfieldmultioptions=new Maerdo_Model_Formfieldmultioptions();
			$mFormfieldvalidators=new Maerdo_Model_Formfieldvalidators();
			$mFormfieldvalidatorsoptions=new Maerdo_Model_Formfieldvalidatorsoptions();
			$mFormfieldvalidatormessage=new Maerdo_Model_Formfieldvalidatorsmessage();
			$mFormfieldfilters=new Maerdo_Model_Formfieldfilters();
			$mFormfieldfiltersoptions=new Maerdo_Model_Formfieldfiltersoptions();
			
			
			foreach($fields as $field) {			
				$mFormfieldattribs->delete('form__field_id='.$field->id);
				$mFormfieldoptions->delete('form__field_id='.$field->id);
				$mFormfieldmultioptions->delete('form__field_id='.$field->id);	
	
				$validators=$mFormfieldvalidators->findByField('form__field_id',$field->id,$mFormfieldvalidators);
				foreach($validators as $validator) {
					$mFormfieldvalidatorsoptions->delete('form__field_validators_id='.$validator->id);
					$mFormfieldvalidatormessage->delete('form__field_validators_id='.$validator->id);	
				}
				$filters=$mFormfieldfilters->findByField('form__field_id',$field->id,$mFormfieldvalidators);
				foreach($filters as $filter) {
					$mFormfieldfiltersoptions->delete('form__field_filters_id='.$validator->id);					
				}	
				$mFormfield->delete('id='.$field->id);		
			}
		} catch(Exception $e) {
			var_dump($e->getMessage());die;
			return false;
		}
		
		return true;
	}	
	
	
	/**
	 * Get forms list.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getlist();
	 * </code>
	 * 	 
	 * @return array with forms data;
	 */		
	static  public function getList() {
		$mForm=new Maerdo_Model_Form();
		$forms=$mForm->fetchAll();
		return($forms);
	}
	
	
	/**
	 * Get form templates list
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getTemplates();
	 * </code>
	 * 	 
	 * @return array
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
	 * Get list of fields for a form
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFormFields();
	 * </code>
	 * 	 
	 * @param $id Form id
	 * @return array with type
	 */		
	public static function getFormFields($form_id) {
		$mFormFields=new Maerdo_Model_Formfield();		
		return($mFormFields->findByField('form_id',$form_id,$mFormFields));
	}	
	
	/**
	 * Delete a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteField($field_id);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 * @return boolean
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
	 * $result=My_Class_Maerdo_Component_Form::update($field_id,$options,$multioptions,$attributs);
	 * </code>
	 * 	 
	 * @param $field_id Field id
	 *  @param $options Options data
	 *  @param $multioptions Multi options data
	 *  @param $attributs Attributs data
	 * @return true
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
	 * $result=My_Class_Maerdo_Component_Form::getOptions($field_id);
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
	 * Get list of all available validator
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
		
		if(is_dir(APPLICATION_PATH.'/../library/My/Validators')) {
			$files=array_diff(scandir(APPLICATION_PATH.'/../library/My/Validators'),array('.','..'));
			foreach($files as $key=>$value) {
				$validators[]=str_replace('.php','',$value);
			}
		}
		return($validators);
		
	}
	/**
	 * Get list of all available filter
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFilterList();
	 * </code>
	 * 	 
	 * @return array
	 */		
	public  static function getFilterList() {
		$filters=array('alnum','alpha','basename','boolean','callback','compress','compress_bz2','compress_gz','compress_lzf','compress_rar','compress_tar',
						  'compress_zip','decompress','decrypt','digits','dir',
						  'encrypt','encrypt_mcrypt','encrypt_openssl','exception','file_decrypt','file_encrypt','file_lowercase','file_rename','file_uppercase',
						  'htmlentities','inflector','input','int','interface','localizetonormalized',
						  'normalizedtolocalized','null','pregreplace','realpath','stringtolower','stringtoupper','stringtrim',
						  'stripnewlines','striptags');
		
		if(is_dir(APPLICATION_PATH.'/../library/My/Filters')) {
			$files=array_diff(scandir(APPLICATION_PATH.'/../library/My/Filters'),array('.','..'));
			foreach($files as $key=>$value) {
				$filters[]=str_replace('.php','',$value);
			}
		}
		return($filters);
		
	}	
	/**
	 * Get list of selected of validator for a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidator($field_id);
	 * </code>
	 * 	 
	 * @return boolean
	 */		
	public static function getValidator($field_id) {
		$mFormfieldValidators=new Maerdo_Model_Formfieldvalidators();
		return($mFormfieldValidators->findByField('form__field_id',$field_id,$mFormfieldValidators));
	}
	
	/**
	 * Get list of selected filter for a form field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFilter($field_id);
	 * </code>
	 * 	 
	 * @return boolean
	 */		
	public static function getFilter($field_id) {
		$mFormfieldFilters=new Maerdo_Model_Formfieldfilters();
		return($mFormfieldFilters->findByField('form__field_id',$field_id,$mFormfieldFilters));
	}
		
	/**
	 * add a validator to a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::addValidator($field_id,$validator_name);
	 * </code>
	 * 	 
	 * @return boolean
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
	 *  @param validator_id  Database id of validator
	 * @return boolean
	 */			
	public static function deleteValidator($validator_id) {
		$mFormfieldValidators=new Maerdo_Model_Formfieldvalidators();
		return($mFormfieldValidators->delete('id="'.$validator_id.'"'));	
	}
	
	/**
	 * add a filter to a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::addFilter($field_id,$filter_name);
	 * </code>
	 * 	 
	 * @return boolean
	 */			
	public static  function addFilter($field_id,$filter) {
		$mFormfieldfilters=new Maerdo_Model_Formfieldfilters();
		return($mFormfieldfilters->insert(array('form__field_id'=>$field_id,'filter'=>$filter)));
	}
	
	/**
	 * delete a field filter
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::deleteFilter($Filter_id);
	 * </code>
	 * 	 
	 *  @param filter_id  Database id of filter
	 * @return boolean
	 */			
	public static function deleteFilter($filter_id) {
		$mFormfieldfilters=new Maerdo_Model_Formfieldfilters();
		return($mFormfieldfilters->delete('id="'.$filter_id.'"'));	
	}	
	
	/**
	 * Get validator avaiable options list
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidatorOptionsList($validator_id);
	 * </code>
	 * 	 
	 *  @param Database validator id
	 * @return array
	 */			
	public static function getValidatorOptionsList($validator_id) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/validator.ini');
		
		$mValidator=new Maerdo_Model_Formfieldvalidators();
		$validator=$mValidator->find($validator_id);
		
		$validator=strtolower($validator->Validator);
		if($config->options->{$validator})
			$options=$config->options->{$validator}->toArray();
		else
			$options=array();	
		
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
	 * Get  filter avaiable options list
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFilterOptionsList($filter_id);
	 * </code>
	 * 	 
	 *  @param Database filter id
	 * @return array
	 */			
	public static function getFilterOptionsList($filter_id) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/filter.ini');
		
		$mFilter=new Maerdo_Model_Formfieldfilters();
		$filter=$mFilter->find($filter_id);
		
		$filter=strtolower($filter->filter);
		if($config->options->{$filter})
			$options=$config->options->{$filter}->toArray();
		else
			$options=array();	
		
		$result=array();
		
		$alreadyUsed=self::getFilterOptions($filter_id);
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
	 *  @param $options Array with validator options 
	 *  @param $validator_id Database id of validator
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
	 * Update filter options
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateFilterOptions($options,$filter_id);
	 * </code>
	 * 	 
	 *  @param $options Array with filter options
	 *  @param $filter_id Database id of filter
	 * @return array
	 */				
	public static function updateFilterOptions($options,$filter_id) {
		$mFilteroptions=new Maerdo_Model_Formfieldfiltersoptions();
		$mFilteroptions->delete("form__field_filters_id='".$filter_id."'");		
		if(is_array($options)) {
			foreach($options as $option) {
				if($mFilteroptions->insert(array('option'=>$option['option'],'value'=>$option['value'],'form__field_filters_id'=>$filter_id))==0)
					return false;
			}
		}
		return true;
	} 	
	
	/**
	 * Get selected validator options for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getValidatorOptions($validator_id);
	 * </code>
	 * 	 
	 *  @param $validator_id Database id of validator
	 * @return array
	 */				
	public static function getValidatorOptions($validator_id) {
		$mValidatoroptions=new Maerdo_Model_Formfieldvalidatorsoptions();
		$result=$mValidatoroptions->findByField("form__field_validators_id",$validator_id,$mValidatoroptions);				
		return $result;
	} 	
	
	/**
	 * Get filter options for a field
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFilterOptions($filter_id);
	 * </code>
	 * 	 
	 *  @param filter_id Database id of filter
	 * @return array
	 */				
	public static function getFilterOptions($filter_id) {
		$mFilteroptions=new Maerdo_Model_Formfieldfiltersoptions();
		$result=$mFilteroptions->findByField("form__field_filters_id",$filter_id,$mFilteroptions);				
		return $result;
	} 		
	
	/**
	 * Get error message list for a validator
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getMessagesList($validator_id);
	 * </code>
	 * 	 
	 *  @param $validator_id Maerdo database validator id
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
	 *  @param $validator_id Maerdo database validator id
	 *  @param $option Name of validator option
	 * @return boolean
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
	/**
	 * Check if an option exist for a Filter
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::checkIfFilterOptionExist($filter_id,$option);
	 * </code>
	 * 	 
	 *  @param $filter_id Maerdo database filter id
	 *  @param $option Name of filter option
	 * @return boolean
	 */				
	static public function checkIfFilterOptionExist($filter_id,$option) {
		$config=new Zend_Config_Ini(APPLICATION_PATH.'/modules/maerdo/configs/filter.ini');
		
		$mFilter=new Maerdo_Model_Formfieldfilters();
		$filter=$mFilter->find($filter_id);
		
		$filter=strtolower($filter->filter);
		$options=$config->options->{$filter}->toArray();
			
		if(in_array($option,$options))
			return true;
		else
			return false;
	}	
	/**
	 * Update form validator errors messages
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::updateMessages($messages,$validator_id);
	 * </code>
	 * 	 
	 *  @param $messages Array with messages data
	 *  @param $validator_id Maerdo database validator id
	 * @return boolean
	 */			
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
	
	/**
	 * Return form id from a field ID
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFormIdFromFieldId($field_id);
	 * </code>
	 * 	 
	 *  @param $field_id ID Of Field
	 * @return int
	 */			
	static public function getFormIdFromFieldId($field_id) {
		$mFormField=new Maerdo_Model_Formfield();
		$result=$mFormField->find($field_id);
		return $result->form_id;
	}
	
	/**
	 * Return form informations
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Component_Form::getFormInfo($form_id);
	 * </code>
	 * 	 
	 *  @param $form_id 
	 * @return object
	 */	
	public static function getFormInfo($form_id) {
		$mForm=new Maerdo_Model_Form();
		$result=$mForm->find($form_id);
		return $result;
	}
}
?> 