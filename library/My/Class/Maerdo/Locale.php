<?php
/**
 * This class is used to work with Locale.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Maerdo
 * @version 0.1
 */

class My_Class_Maerdo_Locale {
	/**
	 * Retourn list of all Locales.
	 * 
	 * <code>
	 * $titles=My_Class_Maerdo_Locale::fetchAll();
	 * </code>
	 * 
	 * @return array array with Locales fields 
	 */
	static public function fetchAll() {
		$mLocale=new Maerdo_Model_Locale();
		$locales=$mLocale->fetchAll();

		$result=array();
		foreach($locales as $locale) {
			$result[]=$locale->toArray();
		}		
		return($result);
	}
	/**
	 * get Name of locale.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Locale::getNameFromLocale('en_US');
	 * </code>
	 * 
	 * @param $locale  Locale string
	 * @return string Name of locale
	 */	
	static public function getNameFromLocale($locale) {
		$mLocale=new Maerdo_Model_Locale();		
		$result=$mLocale->findByField('locale',$locale,$mLocale);		
		return($result[0]->language_name);
	}	
	/**
	 * Delete a locale by id.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Locale::delete('1');
	 * </code>
	 * 
	 * @param $locale_id  Maerdo database locale id
	 * @return boolean
	 */		
	static function delete($locale_id) {
		$mLocale=new Maerdo_Model_Locale();
		return($mLocale->deleteByPrimarykey($locale_id));
	}	
}