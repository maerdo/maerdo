<?php 
/**
 * This class is used to generate auth configuration file.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Console
 * @version 0.1
 */
class My_Class_Maerdo_Console_Forms_Inifiles {


	protected $_db;

	/**
	 * Observer entrie method.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::update();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function update() {
		My_Class_Maerdo_Console::display("2","creating forms ini files");	
		$this->main();
	}
	
	/**
	 * Main function : call  function to retrieve informations and call the write function.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::main();
	 * </code>
	 * 	 
	 * @return true
	 */			
	public function main() {
		if(!is_dir(APPLICATION_PATH.'/../generated/forms/'))
			mkdir(APPLICATION_PATH.'/../generated/forms/',0777,true);
						
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$formsData=$this->getForms();
		foreach($formsData as $name=>$formData) {
			$this->writeFile($name,$formData);
		}
	}
	
	/**
	 * Get list of forms with their data.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getForms();
	 * </code>
	 * 	 
	 * @return array
	 */			
	public function getForms() {		
		$forms=$this->_db->query("SELECT * FROM  form");		
		foreach($forms as $form) {
			$result[$form['name']]=array('template'=>$form['template'],
										 'action'=>$form['action'],
										 'method'=>$form['method'],
										 'fields'=>$this->getFields($form['id']),
											);
		}
		return($result);			
	}
	
	/**
	 * Get list of fields for a forms.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFields();
	 * </code>
	 * 	 
	 * @param $form_id id of form
	 * 
	 * @return array
	 */			
	public function getFields($form_id) {
		$result=array();
		$fields=$this->_db->query("SELECT * FROM	form__field WHERE form_id='$form_id'");		
		foreach($fields as $field) {
			$result[$field['name']]['type']=$field['type'];
			$result[$field['name']]['attribs']=$this->getFieldAttribs($field['id']);
			$result[$field['name']]['multioptions']=$this->getFieldMultiOptions($field['id']);
			$result[$field['name']]['options']=$this->getFieldOptions($field['id']);
			$result[$field['name']]['validators']=$this->getFieldValidators($field['id']);
			$result[$field['name']]['filters']=$this->getFieldFilters($field['id']);
		}
		return ($result);
	}
	
	/**
	 * Get list of attributs for a fields.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldAttribs();
	 * </code>
	 * 	 
	 * @param $field_id Id of field
	 * 
	 * @return array
	 */			
	public function getFieldAttribs($field_id) {
		$result=array();
		$attribs=$this->_db->query("SELECT * FROM form__field_attribs WHERE form__field_id 	='$field_id'");		
		foreach($attribs as $attrib) {
			$result[$attrib['name']]=$attrib['value'];
		}
		return ($result);	
	}
	
	/**
	 * Get list of options for a fields.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldOptions();
	 * </code>
	 * 	 
	 * @param $field_id Id of field
	 * 
	 * @return array
	 */			
	public function getFieldOptions($field_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_options WHERE form__field_id 	='$field_id'");		
		foreach($options as $option) {
			$result[$option['name']]=$option['value'];
		}
		return ($result);	
	}
		
	/**
	 * Get list of multi-options for a fields.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldMultiOptions();
	 * </code>
	 * 	 
	 * @param $field_id Id of field
	 * 
	 * @return array
	 */			
	public function getFieldMultiOptions($field_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_multioptions WHERE form__field_id 	='$field_id'");		
		foreach($options as $option) {
			$result[$option['name']]=$option['value'];
		}
		return ($result);	
	}

	/**
	 * Get list of validators for a fields.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldValidators();
	 * </code>
	 * 	 
	 * @param $field_id Id of field
	 * 
	 * @return array
	 */			
	public function getFieldValidators($field_id) {
		$result=array();
		$validators=$this->_db->query("SELECT * FROM form__field_validators WHERE form__field_id 	='$field_id'");		
		foreach($validators as $validator) {
			$result[$validator['validator']]['options']=$this->getFieldValidatorsOptions($validator['id']);
			$result[$validator['validator']]['messages']=$this->getFieldValidatorsMessages($validator['id']);
		}
		return ($result);	
	}	

	/**
	 * Get list of filters for a fields.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldFilters();
	 * </code>
	 * 	 
	 * @param $field_id Id of field
	 * 
	 * @return array
	 */		
	public function getFieldfilters($field_id) {
		$result=array();
		$filters=$this->_db->query("SELECT * FROM form__field_filters WHERE form__field_id 	='$field_id'");		
		foreach($filters as $filter) {
			$result[$filter['filter']]['options']=$this->getFieldFiltersOptions($validator['id']);
		}
		return ($result);	
	}			
	
	/**
	 * Get list of options for a validator.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldValidatorsOptions();
	 * </code>
	 * 	 
	 * @param $field_id Id of validator
	 * 
	 * @return array
	 */			
	public function getFieldValidatorsOptions($validator_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_validators_options WHERE form__field_validators_id 	='$validator_id'");		
		foreach($options as $option) {
			$result[$option['option']]=$option['value'];			
		}
		return ($result);			
	}
	
	/**
	 * Get list of options for a filter.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldFiltersOptions();
	 * </code>
	 * 	 
	 * @param $field_id Id of filter
	 * 
	 * @return array
	 */				
	public function getFieldFiltersOptions($validator_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_filters_options WHERE form__field_filter_id 	='$validator_id'");		
		foreach($options as $option) {
			$result[$option['option']]=$option['value'];			
		}
		return ($result);			
	}	
	
	/**
	 * Get list of error message for a validator.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::getFieldValidatorsMessages();
	 * </code>
	 * 	 
	 * @param $field_id Id of validator
	 * 
	 * @return array
	 */			
	public function getFieldValidatorsMessages($validator_id) {
		$result=array();
		$messages=$this->_db->query("SELECT * FROM form__field_validators_message WHERE form__field_validators_id 	='$validator_id'");		
		foreach($messages as $message) {
			$result[$message['key']]=$message['message'];			
		}
		return ($result);			
	}	
	
	/**
	 * Write Form ini file.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console_Forms_Inifiles::writeFile();
	 * </code>
	 * 	 
	 * @param $form_name Name of form
	 * @param $formData Array with data of form
	 * 
	 * @return boolean
	 */			
	public function writeFile($form_name,$formData) {
		$form_content=file_get_contents(APPLICATION_PATH.'/../utils/Forms/'.$formData['template']);
		
		$form_content.="\n\nname=\"".$form_name."\"\n";
		$form_content.="action=\"".$formData['action']."\"\n";
		$form_content.="method=\"".$formData['method']."\"\n";
		
		$form_content.="\n\n";	
	
		foreach($formData['fields'] as $field=>$fieldData) {
			$form_content.="elements.".$field.".type=\"".$fieldData['type']."\"\n";
			foreach($fieldData['options'] as $key=>$value) {				
				switch($key) {
					case "order":
						if($value!="") {
							$form_content.="elements.".$field.".options.".$key."=\"".$value."\"\n";
						}
						break;
					case "value":	
						if($value!="") {
							$form_content.="elements.".$field.".".$key."=\"".$value."\"\n";
						}
						break;
					default:	
						if($value!="") {
							$form_content.="elements.".$field.".options.".$key."=\"".$value."\"\n";
						}
						break;
				}
							
			}
			foreach($fieldData['multioptions'] as $key=>$value) {
				$form_content.="elements.".$field.".options.multioptions.".$key."=\"".$value."\"\n";			
			}
			foreach($fieldData['attribs'] as $key=>$value) {
				$form_content.="elements.".$field.".options.attribs.".$key."=\"".$value."\"\n";			
			}		
			foreach($fieldData['validators'] as $name=>$data) {
				$form_content.="elements.".$field.".options.validators.".strtolower($name).".validator=\"".$name."\"\n";
				foreach($data['options'] as $key=>$value) {
							$form_content.="elements.".$field.".options.validators.".strtolower($name).".options.".$key."=\"".$value."\"\n";												
				}
				foreach($data['messages'] as $key=>$value) {
					$form_content.="elements.".$field.".options.validators.".strtolower($name).".options.messages.".$key."=\"".stripslashes($value)."\"\n";
				}										
			}	
			foreach($fieldData['filters'] as $name=>$data) {
				$form_content.="elements.".$field.".options.filters.".strtolower($name).".filters=\"".$name."\"\n";
				foreach($data['options'] as $key=>$value) {
					$form_content.="elements.".$field.".options.filters.".strtolower($name).".options.".$key."=\"".$value."\"\n";
				}			
			}
			$form_content.="\n\n";
			
			
		}
		My_Class_Maerdo_Console::display("3","Writing /generated/forms/".$form_name.".ini");	
		
		return(file_put_contents(APPLICATION_PATH.'/../generated/forms/'.$form_name.'.ini',$form_content));
	}
	
}

