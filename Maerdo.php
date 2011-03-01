<?
// Initialise le chemin vers l'application et l'autoload
defined('APPLICATION_PATH')
          || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
          
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(dirname(__FILE__) .'/library'),
	get_include_path(),
)));

require_once 'Zend/Loader/Autoloader.php';

$autoloader=Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('My_');


$maerdo=new My_Class_Maerdo_Console_Maerdo();
$maerdo->parse($_SERVER['argv']);