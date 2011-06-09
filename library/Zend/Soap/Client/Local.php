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
php php*php php@versionphp php php php php$Idphp:php Localphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Soapphp_Serverphp php*php/
requirephp_oncephp php'Zendphp/Soapphp/Serverphp.phpphp'php;

php/php*php*php Zendphp_Soapphp_Clientphp php*php/
requirephp_oncephp php'Zendphp/Soapphp/Clientphp.phpphp'php;

ifphp php(extensionphp_loadedphp(php'soapphp'php)php)php php{

php/php*php*
php php*php Zendphp_Soapphp_Clientphp_Local
php php*
php php*php Classphp isphp intendedphp tophp bephp usedphp asphp localphp SOAPphp clientphp whichphp works
php php*php withphp aphp providedphp Serverphp objectphp.
php php*
php php*php Couldphp bephp usedphp forphp developmentphp orphp testingphp purposesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Client
php php*php/
classphp Zendphp_Soapphp_Clientphp_Localphp extendsphp Zendphp_Soapphp_Client
php{
php php php php php/php*php*
php php php php php php*php Serverphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Soapphp_Server
php php php php php php*php/
php php php php protectedphp php$php_serverphp;

php php php php php/php*php*
php php php php php php*php Localphp clientphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Soapphp_Serverphp php$server
php php php php php php*php php@paramphp stringphp php$wsdl
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php functionphp php_php_constructphp(Zendphp_Soapphp_Serverphp php$serverphp,php php$wsdlphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_serverphp php=php php$serverphp;

php php php php php php php php php/php/php Usephp Serverphp specifiedphp SOAPphp versionphp asphp default
php php php php php php php php php$thisphp-php>setSoapVersionphp(php$serverphp-php>getSoapVersionphp(php)php)php;

php php php php php php php php parentphp:php:php_php_constructphp(php$wsdlphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Actualphp php"dophp requestphp"php methodphp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Soapphp_Clientphp_Commonphp php$client
php php php php php php*php php@paramphp stringphp php$request
php php php php php php*php php@paramphp stringphp php$location
php php php php php php*php php@paramphp stringphp php$action
php php php php php php*php php@paramphp intphp php php php php$version
php php php php php php*php php@paramphp intphp php php php php$onephp_way
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_doRequestphp(Zendphp_Soapphp_Clientphp_Commonphp php$clientphp,php php$requestphp,php php$locationphp,php php$actionphp,php php$versionphp,php php$onephp_wayphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Performphp requestphp asphp is
php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php$thisphp-php>php_serverphp-php>handlephp(php$requestphp)php;
php php php php php php php php php$responsephp php=php obphp_getphp_contentsphp(php)php;
php php php php php php php php obphp_endphp_cleanphp(php)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}
php}

php}php php/php/php endphp ifphp php(extensionphp_loadedphp(php'soapphp'php)
