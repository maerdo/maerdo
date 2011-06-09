<?php



// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));


define('PUBLIC_PATH', realpath(dirname(__FILE__)));
    
// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

define('DEBUG',false);


if(!is_file(APPLICATION_PATH.'/configs/maerdo.ini') && $_SERVER['REQUEST_URI']!="/install/") {
	Header('location: /install/');
} else {
	/** Zend_Application */
	require_once 'Zend/Application.php';
	
	// Create application, bootstrap, and run
	$application = new Zend_Application(
	    APPLICATION_ENV,
	    APPLICATION_PATH . '/configs/application.ini'
	);
	$application->bootstrap()
	            ->run();
}