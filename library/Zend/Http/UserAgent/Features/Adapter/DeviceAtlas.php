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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Adapterphp.phpphp'php;

php/php*php*
php php*php Featuresphp adapterphp buildphp withphp thephp Teraphp Wurflphp Api
php php*php Seephp installationphp instructionphp herephp php:php httpphp:php/php/deviceatlasphp.comphp/licences
php php*php Downloadphp php:php httpphp:php/php/deviceatlasphp.comphp/getAPIphp/php
php php*
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_DeviceAtlasphp implementsphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapter
php{
php php php php php/php*php*
php php php php php php*php Getphp featuresphp fromphp request
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$requestphp php$php_SERVERphp variable
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getFromRequestphp(php$requestphp,php arrayphp php$configphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php'Mobiphp_Mtldphp_DAphp_Apiphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp[php'deviceatlasphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'php"DeviceAtlasphp"php configurationphp isphp notphp definedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$configphp php=php php$configphp[php'deviceatlasphp'php]php;

php php php php php php php php ifphp php(php!classphp_existsphp(php'Mobiphp_Mtldphp_DAphp_Apiphp'php)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$configphp[php'deviceatlasphp_libphp_dirphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'Thephp php"deviceatlasphp_libphp_dirphp"php parameterphp isphp notphp definedphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Includephp thephp Devicephp Atlasphp filephp fromphp thephp specifiedphp libphp_dir
php php php php php php php php php php php php requirephp_oncephp php(php$configphp[php'deviceatlasphp_libphp_dirphp'php]php php.php php'php/Mobiphp/Mtldphp/DAphp/Apiphp.phpphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$configphp[php'deviceatlasphp_dataphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'Thephp php"deviceatlasphp_dataphp"php parameterphp isphp notphp definedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/loadphp thephp devicephp dataphp-treephp php:php ephp.gphp.php php'jsonphp/DeviceAtlasphp.json
php php php php php php php php php$treephp php=php Mobiphp_Mtldphp_DAphp_Apiphp:php:getTreeFromFilephp(php$configphp[php'deviceatlasphp_dataphp'php]php)php;

php php php php php php php php php$propertiesphp php=php Mobiphp_Mtldphp_DAphp_Apiphp:php:getPropertiesphp(php$treephp,php php$requestphp[php'httpphp_userphp_agentphp'php]php)php;

php php php php php php php php returnphp php$propertiesphp;
php php php php php}
php}
