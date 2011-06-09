<php?php
php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webphp atphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DotNetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Soapphp_Clientphp php*php/
requirephp_oncephp php'Zendphp/Soapphp/Clientphp.phpphp'php;

ifphp php(extensionphp_loadedphp(php'soapphp'php)php)php php{

php/php*php*
php php*php Zendphp_Soapphp_Clientphp_Local
php php*
php php*php Classphp isphp intendedphp tophp bephp usedphp withphp php.Netphp Webphp Servicesphp.
php php*
php php*php Importantphp!php Classphp isphp atphp experimentalphp stagephp nowphp.
php php*php Pleasephp leavephp yourphp notesphp,php compatiblityphp issuesphp reportsphp or
php php*php suggestionsphp inphp fwphp-webservicesphp@listsphp.zendphp.comphp orphp fwphp-generalphp@listsphp.com
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Client
php php*php/
classphp Zendphp_Soapphp_Clientphp_DotNetphp extendsphp Zendphp_Soapphp_Client
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$wsdl
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$wsdlphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Usephp SOAPphp php1php.php1php asphp default
php php php php php php php php php$thisphp-php>setSoapVersionphp(SOAPphp_php1php_php1php)php;

php php php php php php php php parentphp:php:php_php_constructphp(php$wsdlphp,php php$optionsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Performphp argumentsphp prephp-processing
php php php php php php*
php php php php php php*php Myphp bephp overriddenphp inphp descendantphp classes
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$arguments
php php php php php php*php php@throwsphp Zendphp_Soapphp_Clientphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_preProcessArgumentsphp(php$argumentsphp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$argumentsphp)php php>php php1php php php|php|
php php php php php php php php php php php php php(countphp(php$argumentsphp)php php=php=php php1php php php&php&php php php!isphp_arrayphp(resetphp(php$argumentsphp)php)php)
php php php php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Soapphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Clientphp_Exceptionphp(php'php.Netphp webservicephp argumentsphp havephp tophp bephp groupedphp intophp arrayphp:php arrayphp(php\php'aphp\php'php php=php>php php$aphp,php php\php'bphp\php'php php=php>php php$bphp,php php.php.php.php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Dophp nothing
php php php php php php php php returnphp php$argumentsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp resultphp prephp-processing
php php php php php php*
php php php php php php*php Myphp bephp overriddenphp inphp descendantphp classes
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$arguments
php php php php php php*php/
php php php php protectedphp functionphp php_preProcessResultphp(php$resultphp)
php php php php php{
php php php php php php php php php$resultPropertyphp php=php php$thisphp-php>getLastMethodphp(php)php php.php php'Resultphp'php;

php php php php php php php php returnphp php$resultphp-php>php$resultPropertyphp;
php php php php php}

php}

php}php php/php/php endphp ifphp php(extensionphp_loadedphp(php'soapphp'php)
