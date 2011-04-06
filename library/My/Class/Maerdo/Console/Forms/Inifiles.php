<?php 

class My_Class_Maerdo_Console_Forms_Inifiles {

	public $tree;
	protected $_db;

	
	public function update() {
		My_Class_Maerdo_Console::display("2","creating forms ini files");	
		$this->main();
	}
	
	public function main() {
		if(!is_dir(APPLICATION_PATH.'/../generated/forms/'))
			mkdir(APPLICATION_PATH.'/../generated/forms/');
						
		$this->_db=My_Class_Maerdo_Console_Db::getDbInstance();
		$formsData=$this->getForms();
		foreach($formsData as $name=>$formData) {
			$this->writeFile($name,$formData);
		}
	}
	
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
	
	public function getFieldAttribs($field_id) {
		$result=array();
		$attribs=$this->_db->query("SELECT * FROM form__field_attribs WHERE form__field_id 	='$field_id'");		
		foreach($attribs as $attrib) {
			$result[$attrib['name']]=$attrib['value'];
		}
		return ($result);	
	}
	
	public function getFieldOptions($field_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_options WHERE form__field_id 	='$field_id'");		
		foreach($options as $option) {
			$result[$option['name']]=$option['value'];
		}
		return ($result);	
	}
		
	public function getFieldMultiOptions($field_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_multioptions WHERE form__field_id 	='$field_id'");		
		foreach($options as $option) {
			$result[$option['name']]=$option['value'];
		}
		return ($result);	
	}

	public function getFieldValidators($field_id) {
		$result=array();
		$validators=$this->_db->query("SELECT * FROM form__field_validators WHERE form__field_id 	='$field_id'");		
		foreach($validators as $validator) {
			$result[$validator['validator']]['options']=$this->getFieldValidatorsOptions($validator['id']);
			$result[$validator['validator']]['messages']=$this->getFieldValidatorsMessages($validator['id']);
		}
		return ($result);	
	}	

	public function getFieldValidators($field_id) {
		$result=array();
		$filters=$this->_db->query("SELECT * FROM form__field_filters WHERE form__field_id 	='$field_id'");		
		foreach($filters as $filter) {
			$result[$filter['filter']]['options']=$this->getFieldFiltersOptions($validator['id']);
		}
		return ($result);	
	}			
	
	public function getFieldValidatorsOptions($validator_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_validators_options WHERE form__field_validators_id 	='$validator_id'");		
		foreach($options as $option) {
			$result[$option['option']]=$option['value'];			
		}
		return ($result);			
	}
	
	public function getFieldFiltersOptions($validator_id) {
		$result=array();
		$options=$this->_db->query("SELECT * FROM form__field_filters_options WHERE form__field_filter_id 	='$validator_id'");		
		foreach($options as $option) {
			$result[$option['option']]=$option['value'];			
		}
		return ($result);			
	}	
	
	public function getFieldValidatorsMessages($validator_id) {
		$result=array();
		$messages=$this->_db->query("SELECT * FROM form__field_validators_message WHERE form__field_validators_id 	='$validator_id'");		
		foreach($messages as $message) {
			$result[$message['key']]=$message['message'];			
		}
		return ($result);			
	}	
	
	public function writeFile($form_name,$formData) {
		$form_content="name='".$form_name."'\n";
		$form_content.="action='".$formData['action']."'\n";
		$form_content.="method='".$formData['method']."'\n";
		
		
		$form_content.=file_get_contents(APPLICATION_PATH.'/../utils/Forms/'.$formData['template']);
		$form_content.="\n\n";
		var_dump($formData['fields']);
		foreach($formData['fields'] as $field=>$fieldData) {
			$form_content.="elements.".$field.".type=\"".$fieldData['type']."\"\n";
			foreach($fieldData['options'] as $key=>$value) {				
				switch($key) {
					case "order":
					case "value":	
						if($value!="") {
							$form_content.="elements.".$field.".options.".$key."=\"".$value."\"\n";
						}
						break;
					default:	
						$form_content.="elements.".$field.".options.".$key."=\"".$value."\"\n";
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
			

			file_put_contents(APPLICATION_PATH.'/../generated/forms/'.$form_name.'.ini',$form_content);
		}
		
	}
	
}

