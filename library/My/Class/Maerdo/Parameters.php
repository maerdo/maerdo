<?php
/**
 * This class is used to work with Maerdo parameters.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Maerdo
 * @version 0.1
 */

class My_Class_Maerdo_Parameters {
	/**
	 * Set default language.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Parameters::setDefaultLanguage($language);
	 * </code>
	 * 
	 * @return booleen 
	 */
	static public function setDefaultLanguage($language) {
		$content="translate.locale.en='en_US'\n";
		$content.="translate.available_language.en='English'\n\n";
		$content.="translate.locale.fr='fr_FR'\n";
		$content.="translate.available_language.fr='Francais'\n\n";

		$content.="translate.default_language='$language'\n";
		
		$result=file_put_contents(APPLICATION_PATH.'/modules/maerdo/configs/translate.ini',$content);
		return($result);
	}
	/**
	 * Update admin password
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Parameters::updateAdminPassword($oldpassword,$newpassword,$confirmationpassword);
	 * </code>
	 * 
	 * @param $oldpassword Old password
	 * @param $newpassword New password
	 * @param $confirmationpassword Confirmation of new password
	 * @return booleen
	 */	
	static public function updateAdminPassword($oldpassword,$newpassword,$confirmationpassword) {
		$mUsers=new Maerdo_Model_Users();
		$user=$mUsers->findByField('username','admin',$mUsers);		
		if($user[0]->password==md5($oldpassword)) {
			if($newpassword==$confirmationpassword) {
				$user[0]->password=md5($newpassword);
				$user[0]->save();
				return true;
			} else {
				return(-2);
			}
		} else {
			return(-1);
		}
	}	
	
	/**
	 * GetDefaultLanguage
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Parameters::GetDefaultLanguage();
	 * </code>
	 * 
	 * @return string
	 */	
	static public function GetDefaultLanguage() {
		$config_ini = APPLICATION_PATH . '/modules/maerdo/configs/translate.ini';
		$config=new Zend_Config_Ini($config_ini);
		return($config->translate->default_language);
	}		
}
