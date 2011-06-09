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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Systemphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php XMLphp-RPCphp systemphp.php*php methods
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Serverphp_System
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Server
php php php php php php*php/
php php php php protectedphp php$php_serverphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_XmlRpcphp_Serverphp php$server
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_XmlRpcphp_Serverphp php$serverphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_serverphp php=php php$serverphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp allphp availablephp XMLRPCphp methods
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp methodsphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listMethodsphp(php)
php php php php php{
php php php php php php php php php$tablephp php=php php$thisphp-php>php_serverphp-php>getDispatchTablephp(php)php-php>getMethodsphp(php)php;
php php php php php php php php returnphp arrayphp_keysphp(php$tablephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Displayphp helpphp messagephp forphp anphp XMLRPCphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp methodHelpphp(php$methodphp)
php php php php php{
php php php php php php php php php$tablephp php=php php$thisphp-php>php_serverphp-php>getDispatchTablephp(php)php;
php php php php php php php php ifphp php(php!php$tablephp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Methodphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp existphp'php,php php6php4php0php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$tablephp-php>getMethodphp(php$methodphp)php-php>getMethodHelpphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp methodphp signature
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp methodSignaturephp(php$methodphp)
php php php php php{
php php php php php php php php php$tablephp php=php php$thisphp-php>php_serverphp-php>getDispatchTablephp(php)php;
php php php php php php php php ifphp php(php!php$tablephp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Methodphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp existphp'php,php php6php4php0php)php;
php php php php php php php php php}
php php php php php php php php php$methodphp php=php php$tablephp-php>getMethodphp(php$methodphp)php-php>toArrayphp(php)php;
php php php php php php php php returnphp php$methodphp[php'prototypesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Multicallphp php-php boxcarphp featurephp ofphp XMLphp-RPCphp forphp callingphp multiplephp methods
php php php php php php*php inphp aphp singlephp requestphp.
php php php php php php*
php php php php php php*php Expectsphp aphp anphp arrayphp ofphp structsphp representingphp methodphp callsphp,php eachphp element
php php php php php php*php havingphp thephp keysphp:
php php php php php php*php php-php methodName
php php php php php php*php php-php params
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp responsesphp,php onephp forphp eachphp methodphp calledphp,php withphp thephp value
php php php php php php*php returnedphp byphp thephp methodphp.php Ifphp anphp errorphp occursphp forphp aphp givenphp methodphp,php returnsphp a
php php php php php php*php structphp withphp aphp faultphp responsephp.
php php php php php php*
php php php php php php*php php@seephp httpphp:php/php/wwwphp.xmlrpcphp.comphp/discussphp/msgReaderphp$php1php2php0php8
php php php php php php*php php@paramphp php arrayphp php$methods
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp multicallphp(php$methodsphp)
php php php php php{
php php php php php php php php php$responsesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php$faultphp php=php falsephp;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php'systemphp.multicallphp expectsphp eachphp methodphp tophp bephp aphp structphp'php,php php6php0php1php)php;
php php php php php php php php php php php php php}php elseifphp php(php!issetphp(php$methodphp[php'methodNamephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php'Missingphp methodNamephp:php php'php php.php varphp_exportphp(php$methodsphp,php php1php)php,php php6php0php2php)php;
php php php php php php php php php php php php php}php elseifphp php(php!issetphp(php$methodphp[php'paramsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php'Missingphp paramsphp'php,php php6php0php3php)php;
php php php php php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$methodphp[php'paramsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php'Paramsphp mustphp bephp anphp arrayphp'php,php php6php0php4php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php'systemphp.multicallphp'php php=php=php php$methodphp[php'methodNamephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php donphp'tphp allowphp recursivephp callsphp tophp multicall
php php php php php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php'Recursivephp systemphp.multicallphp forbiddenphp'php,php php6php0php5php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$faultphp)php php{
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$requestphp php=php newphp Zendphp_XmlRpcphp_Requestphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$requestphp-php>setMethodphp(php$methodphp[php'methodNamephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$requestphp-php>setParamsphp(php$methodphp[php'paramsphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_serverphp-php>handlephp(php$requestphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$responsephp instanceofphp Zendphp_XmlRpcphp_Fault
php php php php php php php php php php php php php php php php php php php php php php php php php|php|php php$responsephp-php>isFaultphp(php)
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$faultphp php=php php$responsephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$responsesphp[php]php php=php php$responsephp-php>getReturnValuephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_serverphp-php>faultphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$faultphp)php php{
php php php php php php php php php php php php php php php php php$responsesphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'faultCodephp'php php php php=php>php php$faultphp-php>getCodephp(php)php,
php php php php php php php php php php php php php php php php php php php php php'faultStringphp'php php=php>php php$faultphp-php>getMessagephp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$responsesphp;
php php php php php}
php}
