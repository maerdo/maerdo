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
php php*php php@versionphp php php php php$Idphp:php Commonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


ifphp php(extensionphp_loadedphp(php'soapphp'php)php)php php{

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Client
php php*php/
classphp Zendphp_Soapphp_Clientphp_Commonphp extendsphp SoapClient
php{
php php php php php/php*php*
php php php php php php*php doRequestphp(php)php prephp-processingphp method
php php php php php php*
php php php php php php*php php@varphp callback
php php php php php php*php/
php php php php protectedphp php$php_doRequestCallbackphp;

php php php php php/php*php*
php php php php php php*php Commonphp Soapphp Clientphp constructor
php php php php php php*
php php php php php php*php php@paramphp callbackphp php$doRequestMethod
php php php php php php*php php@paramphp stringphp php$wsdl
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$doRequestCallbackphp,php php$wsdlphp,php php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_doRequestCallbackphp php=php php$doRequestCallbackphp;

php php php php php php php php parentphp:php:php_php_constructphp(php$wsdlphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp SOAPphp requestphp overphp HTTPphp.
php php php php php php*php Overriddenphp tophp implementphp differentphp transportphp layersphp,php performphp additionalphp XMLphp processingphp orphp otherphp purposephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$request
php php php php php php*php php@paramphp stringphp php$location
php php php php php php*php php@paramphp stringphp php$action
php php php php php php*php php@paramphp intphp php php php php$version
php php php php php php*php php@paramphp intphp php php php php$onephp_way
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php functionphp php_php_doRequestphp(php$requestphp,php php$locationphp,php php$actionphp,php php$versionphp,php php$onephp_wayphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$onephp_wayphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp(php$thisphp-php>php_doRequestCallbackphp,php php$thisphp,php php$requestphp,php php$locationphp,php php$actionphp,php php$versionphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp(php$thisphp-php>php_doRequestCallbackphp,php php$thisphp,php php$requestphp,php php$locationphp,php php$actionphp,php php$versionphp,php php$onephp_wayphp)php;
php php php php php php php php php}
php php php php php}

php}

php}php php/php/php endphp ifphp php(extensionphp_loadedphp(php'soapphp'php)
