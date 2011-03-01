<?php 
/**
 * This class is used to work with console.
 * 
 * @author Nicolas Blaudez <nblaudez@maerdo.com>
 * @package Maerdo
 * @version 0.1
 */
class My_Class_Maerdo_Console {
	/**
	 * print a message in the console.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console::display('2','Hello world');
	 * </code>
	 * 
	 * @param $level  Identation level
	 * @param $message Message to display
	 * @return boolean
	 */			
	static public function display($level,$message,$params=array()) {
		$data="";
		for($i=0;$i<$level;$i++)
			$data.='#####';
		$data.=" ".$message."\n";
		echo $data;
		return true;
	}
	/**
	 * print a new line in the console.
	 * 
	 * <code>
	 * $result=My_Class_Maerdo_Console::newline();
	 * </code>
	 * 
	 * @return boolean
	 */				
	static public function newline() {
		echo "\n";
		return true;
	}
}
