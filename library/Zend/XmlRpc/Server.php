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
php php*php php@versionphp php php php php$Idphp:php Serverphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Extendsphp Zendphp_Serverphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Abstractphp.phpphp'php;

php/php*php*
php php*php XMLRPCphp Request
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Requestphp.phpphp'php;

php/php*php*
php php*php XMLRPCphp Response
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Responsephp.phpphp'php;

php/php*php*
php php*php XMLRPCphp HTTPphp Response
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Responsephp/Httpphp.phpphp'php;

php/php*php*
php php*php XMLRPCphp serverphp faultphp class
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Faultphp.phpphp'php;

php/php*php*
php php*php XMLRPCphp serverphp systemphp methodsphp class
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Systemphp.phpphp'php;

php/php*php*
php php*php Convertphp PHPphp tophp andphp fromphp xmlrpcphp nativephp types
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp.phpphp'php;

php/php*php*
php php*php Reflectionphp APIphp forphp functionphp/methodphp introspection
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Functionphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Specificallyphp grabphp thephp Zendphp_Serverphp_Reflectionphp_Methodphp forphp manuallyphp settingphp up
php php*php systemphp.php*php methodsphp andphp handlingphp callbacksphp inphp php{php@linkphp loadFunctionsphp(php)php}php.
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Methodphp.phpphp'php;

php/php*php*
php php*php Anphp XMLphp-RPCphp serverphp implementation
php php*
php php*php Examplephp:
php php*php php<codephp>
php php*php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp.phpphp'php;
php php*php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Cachephp.phpphp'php;
php php*php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Faultphp.phpphp'php;
php php*php requirephp_oncephp php'Myphp/Exceptionphp.phpphp'php;
php php*php requirephp_oncephp php'Myphp/Faultphp/Observerphp.phpphp'php;
php php*
php php*php php/php/php Instantiatephp server
php php*php php$serverphp php=php newphp Zendphp_XmlRpcphp_Serverphp(php)php;
php php*
php php*php php/php/php Allowphp somephp exceptionsphp tophp reportphp asphp faultphp responsesphp:
php php*php Zendphp_XmlRpcphp_Serverphp_Faultphp:php:attachFaultExceptionphp(php'Myphp_Exceptionphp'php)php;
php php*php Zendphp_XmlRpcphp_Serverphp_Faultphp:php:attachObserverphp(php'Myphp_Faultphp_Observerphp'php)php;
php php*
php php*php php/php/php Getphp orphp buildphp dispatchphp tablephp:
php php*php ifphp php(php!Zendphp_XmlRpcphp_Serverphp_Cachephp:php:getphp(php$filenamephp,php php$serverphp)php)php php{
php php*php php php php php requirephp_oncephp php'Somephp/Servicephp/Classphp.phpphp'php;
php php*php php php php php requirephp_oncephp php'Anotherphp/Servicephp/Classphp.phpphp'php;
php php*
php php*php php php php php php/php/php Attachphp Somephp_Servicephp_Classphp inphp php'somephp'php namespace
php php*php php php php php php$serverphp-php>setClassphp(php'Somephp_Servicephp_Classphp'php,php php'somephp'php)php;
php php*
php php*php php php php php php/php/php Attachphp Anotherphp_Servicephp_Classphp inphp php'anotherphp'php namespace
php php*php php php php php php$serverphp-php>setClassphp(php'Anotherphp_Servicephp_Classphp'php,php php'anotherphp'php)php;
php php*
php php*php php php php php php/php/php Createphp dispatchphp tablephp cachephp file
php php*php php php php php Zendphp_XmlRpcphp_Serverphp_Cachephp:php:savephp(php$filenamephp,php php$serverphp)php;
php php*php php}
php php*
php php*php php$responsephp php=php php$serverphp-php>handlephp(php)php;
php php*php echophp php$responsephp;
php php*php <php/codephp>
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Serverphp extendsphp Zendphp_Serverphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Characterphp encoding
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Requestphp processed
php php php php php php*php php@varphp nullphp|Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php protectedphp php$php_requestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp tophp usephp forphp responsesphp;php defaultsphp tophp php{php@linkphp Zendphp_XmlRpcphp_Responsephp_Httpphp}
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_responseClassphp php=php php'Zendphp_XmlRpcphp_Responsephp_Httpphp'php;

php php php php php/php*php*
php php php php php php*php Dispatchphp tablephp ofphp namephp php=php>php methodphp pairs
php php php php php php*php php@varphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php protectedphp php$php_tablephp;

php php php php php/php*php*
php php php php php php*php PHPphp typesphp php=php>php XMLphp-RPCphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_typeMapphp php=php arrayphp(
php php php php php php php php php'iphp4php'php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'iphp4php'php,
php php php php php php php php php'intphp'php php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'intphp'php,
php php php php php php php php php'integerphp'php php php php php php php php php php php php php php php php php php php php php=php>php php'intphp'php,
php php php php php php php php php'Zendphp_Cryptphp_Mathphp_BigIntegerphp'php php=php>php php'iphp8php'php,
php php php php php php php php php'iphp8php'php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'iphp8php'php,
php php php php php php php php php'exphp:iphp8php'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'iphp8php'php,
php php php php php php php php php'doublephp'php php php php php php php php php php php php php php php php php php php php php php=php>php php'doublephp'php,
php php php php php php php php php'floatphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'doublephp'php,
php php php php php php php php php'realphp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'doublephp'php,
php php php php php php php php php'booleanphp'php php php php php php php php php php php php php php php php php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'boolphp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'truephp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'falsephp'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'stringphp'php php php php php php php php php php php php php php php php php php php php php php=php>php php'stringphp'php,
php php php php php php php php php'strphp'php php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'stringphp'php,
php php php php php php php php php'basephp6php4php'php php php php php php php php php php php php php php php php php php php php php php=php>php php'basephp6php4php'php,
php php php php php php php php php'dateTimephp.isophp8php6php0php1php'php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'datephp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'timephp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'timephp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'Zendphp_Datephp'php php php php php php php php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'DateTimephp'php php php php php php php php php php php php php php php php php php php php=php>php php'dateTimephp.isophp8php6php0php1php'php,
php php php php php php php php php'arrayphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'arrayphp'php,
php php php php php php php php php'structphp'php php php php php php php php php php php php php php php php php php php php php php=php>php php'structphp'php,
php php php php php php php php php'nullphp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'nilphp'php,
php php php php php php php php php'nilphp'php php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'nilphp'php,
php php php php php php php php php'exphp:nilphp'php php php php php php php php php php php php php php php php php php php php php php=php>php php'nilphp'php,
php php php php php php php php php'voidphp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'voidphp'php,
php php php php php php php php php'mixedphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'structphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Sendphp argumentsphp tophp allphp methodsphp orphp justphp constructorphp?
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_sendArgumentsToAllMethodsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Createsphp systemphp.php*php methodsphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tablephp php=php newphp Zendphp_Serverphp_Definitionphp(php)php;
php php php php php php php php php$thisphp-php>php_registerSystemMethodsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp callsphp tophp systemphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Serverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php php$systemphp php=php php$thisphp-php>getSystemphp(php)php;
php php php php php php php php ifphp php(php!methodphp_existsphp(php$systemphp,php php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Unknownphp instancephp methodphp calledphp onphp serverphp:php php'php php.php php$methodphp)php;
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$systemphp,php php$methodphp)php,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp aphp callbackphp asphp anphp XMLRPCphp method
php php php php php php*
php php php php php php*php Attachesphp aphp callbackphp asphp anphp XMLRPCphp methodphp,php prefixingphp thephp XMLRPCphp methodphp name
php php php php php php*php withphp php$namespacephp,php ifphp providedphp.php Reflectionphp isphp donephp onphp thephp callbackphp's
php php php php php php*php docblockphp tophp createphp thephp methodHelpphp forphp thephp XMLRPCphp methodphp.
php php php php php php*
php php php php php php*php Additionalphp argumentsphp tophp passphp tophp thephp functionphp atphp dispatchphp mayphp bephp passedphp;
php php php php php php*php anyphp argumentsphp followingphp thephp namespacephp willphp bephp aggregatedphp andphp passedphp at
php php php php php php*php dispatchphp timephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$functionphp Validphp callback
php php php php php php*php php@paramphp stringphp php$namespacephp Optionalphp namespacephp prefix
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Serverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp addFunctionphp(php$functionphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$functionphp)php php&php&php php!isphp_arrayphp(php$functionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp;php invalidphp'php,php php6php1php1php)php;
php php php php php php php php php}

php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php2php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(php$argvphp,php php2php)php;
php php php php php php php php php}

php php php php php php php php php$functionphp php=php php(arrayphp)php php$functionphp;
php php php php php php php php foreachphp php(php$functionphp asphp php$funcphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$funcphp)php php|php|php php!functionphp_existsphp(php$funcphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp;php invalidphp'php,php php6php1php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$reflectionphp php=php Zendphp_Serverphp_Reflectionphp:php:reflectFunctionphp(php$funcphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php php php php php php$thisphp-php>php_buildSignaturephp(php$reflectionphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp classphp methodsphp asphp XMLRPCphp methodphp handlers
php php php php php php*
php php php php php php*php php$classphp mayphp bephp eitherphp aphp classphp namephp orphp anphp objectphp.php Reflectionphp isphp donephp onphp the
php php php php php php*php classphp orphp objectphp tophp determinephp thephp availablephp publicphp methodsphp,php andphp eachphp is
php php php php php php*php attachedphp tophp thephp serverphp asphp anphp availablephp methodphp;php ifphp aphp php$namespacephp hasphp been
php php php php php php*php providedphp,php thatphp namespacephp isphp usedphp tophp prefixphp thephp XMLRPCphp methodphp namesphp.
php php php php php php*
php php php php php php*php Anyphp additionalphp argumentsphp beyondphp php$namespacephp willphp bephp passedphp tophp aphp methodphp at
php php php php php php*php invocationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|objectphp php$class
php php php php php php*php php@paramphp stringphp php$namespacephp Optional
php php php php php php*php php@paramphp mixedphp php$argvphp Optionalphp argumentsphp tophp passphp tophp methods
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp onphp invalidphp input
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classphp,php php$namespacephp php=php php'php'php,php php$argvphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$classphp)php php&php&php php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Invalidphp methodphp classphp'php,php php6php1php0php)php;
php php php php php php php php php}

php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php2php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(php$argvphp,php php2php)php;
php php php php php php php php php}

php php php php php php php php php$dispatchablephp php=php Zendphp_Serverphp_Reflectionphp:php:reflectClassphp(php$classphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php foreachphp php(php$dispatchablephp-php>getMethodsphp(php)php asphp php$reflectionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_buildSignaturephp(php$reflectionphp,php php$classphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Raisephp anphp xmlrpcphp serverphp fault
php php php php php php*
php php php php php php*php php@paramphp stringphp|Exceptionphp php$fault
php php php php php php*php php@paramphp intphp php$code
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Serverphp_Fault
php php php php php php*php/
php php php php publicphp functionphp faultphp(php$faultphp php=php nullphp,php php$codephp php=php php4php0php4php)
php php php php php{
php php php php php php php php ifphp php(php!php$faultphp instanceofphp Exceptionphp)php php{
php php php php php php php php php php php php php$faultphp php=php php(stringphp)php php$faultphp;
php php php php php php php php php php php php ifphp php(emptyphp(php$faultphp)php)php php{
php php php php php php php php php php php php php php php php php$faultphp php=php php'Unknownphp Errorphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$faultphp php=php newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php$faultphp,php php$codephp)php;
php php php php php php php php php}

php php php php php php php php returnphp Zendphp_XmlRpcphp_Serverphp_Faultphp:php:getInstancephp(php$faultphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anphp xmlrpcphp call
php php php php php php*
php php php php php php*php php@paramphp Zendphp_XmlRpcphp_Requestphp php$requestphp Optional
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Responsephp|Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$requestphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Getphp request
php php php php php php php php ifphp php(php(php!php$requestphp php|php|php php!php$requestphp instanceofphp Zendphp_XmlRpcphp_Requestphp)
php php php php php php php php php php php php php&php&php php(nullphp php=php=php=php php(php$requestphp php=php php$thisphp-php>getRequestphp(php)php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Requestphp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$requestphp php=php newphp Zendphp_XmlRpcphp_Requestphp_Httpphp(php)php;
php php php php php php php php php php php php php$requestphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;

php php php php php php php php ifphp php(php$requestphp-php>isFaultphp(php)php)php php{
php php php php php php php php php php php php php$responsephp php=php php$requestphp-php>getFaultphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_handlephp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>faultphp(php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Setphp outputphp encoding
php php php php php php php php php$responsephp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp methodsphp asphp returnedphp fromphp php{php@linkphp getFunctionsphp}
php php php php php php*
php php php php php php*php Typicallyphp,php youphp willphp notphp usephp thisphp methodphp;php itphp willphp bephp calledphp usingphp the
php php php php php php*php resultsphp pulledphp fromphp php{php@linkphp Zendphp_XmlRpcphp_Serverphp_Cachephp:php:getphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Serverphp_Definitionphp php$definition
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp onphp invalidphp input
php php php php php php*php/
php php php php publicphp functionphp loadFunctionsphp(php$definitionphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$definitionphp)php php&php&php php(php!php$definitionphp instanceofphp Zendphp_Serverphp_Definitionphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_objectphp(php$definitionphp)php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$definitionphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$typephp php=php gettypephp(php$definitionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Unablephp tophp loadphp serverphp definitionphp;php mustphp bephp anphp arrayphp orphp Zendphp_Serverphp_Definitionphp,php receivedphp php'php php.php php$typephp,php php6php1php2php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tablephp-php>clearMethodsphp(php)php;
php php php php php php php php php$thisphp-php>php_registerSystemMethodsphp(php)php;

php php php php php php php php ifphp php(php$definitionphp instanceofphp Zendphp_Serverphp_Definitionphp)php php{
php php php php php php php php php php php php php$definitionphp php=php php$definitionphp-php>getMethodsphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$definitionphp asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php ifphp php(php'systemphp.php'php php=php=php substrphp(php$keyphp,php php0php,php php7php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_tablephp-php>addMethodphp(php$methodphp,php php$keyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encoding
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Server
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:setEncodingphp(php$encodingphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dophp nothingphp;php persistencephp isphp handledphp viaphp php{php@linkphp Zendphp_XmlRpcphp_Serverphp_Cachephp}
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setPersistencephp(php$modephp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp requestphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_XmlRpcphp_Requestphp php$request
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Server
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp onphp invalidphp requestphp classphp orphp object
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(php$requestphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$requestphp)php php&php&php classphp_existsphp(php$requestphp)php)php php{
php php php php php php php php php php php php php$requestphp php=php newphp php$requestphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_XmlRpcphp_Requestphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Invalidphp requestphp classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$requestphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}php elseifphp php(php!php$requestphp instanceofphp Zendphp_XmlRpcphp_Requestphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Invalidphp requestphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp currentlyphp registeredphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp classphp tophp usephp forphp thephp response
php php php php php php*
php php php php php php*php php@paramphp stringphp php$class
php php php php php php*php php@returnphp booleanphp Truephp ifphp classphp wasphp setphp,php falsephp ifphp not
php php php php php php*php/
php php php php publicphp functionphp setResponseClassphp(php$classphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php or
php php php php php php php php php php php php php(php$cphp php=php newphp ReflectionClassphp(php$classphp)php andphp php!php$cphp-php>isSubclassOfphp(php'Zendphp_XmlRpcphp_Responsephp'php)php)php)php php{

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Invalidphp responsephp classphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_responseClassphp php=php php$classphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp responsephp class
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getResponseClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responseClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp dispatchphp table
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDispatchTablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp registeredphp methods
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp dispatchablesphp php(Zendphp_Serverphp_Reflectionphp_Functionphp,
php php php php php php*php php_Methodphp,php andphp php_Classphp itemsphp)php.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp-php>toArrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp systemphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Serverphp_System
php php php php php php*php/
php php php php publicphp functionphp getSystemphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_systemphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp argumentsphp tophp allphp methodsphp?
php php php php php php*
php php php php php php*php Ifphp setClassphp(php)php isphp usedphp tophp addphp classesphp tophp thephp serverphp,php thisphp flagphp defined
php php php php php php*php howphp tophp handlephp argumentsphp.php Ifphp setphp tophp truephp,php allphp methodsphp includingphp constructor
php php php php php php*php willphp receivephp thephp argumentsphp.php Ifphp setphp tophp falsephp,php onlyphp constructorphp willphp receivephp the
php php php php php php*php arguments
php php php php php php*php/
php php php php publicphp functionphp sendArgumentsToAllMethodsphp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$flagphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sendArgumentsToAllMethodsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_sendArgumentsToAllMethodsphp php=php php(boolphp)php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp PHPphp typephp tophp XMLphp-RPCphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_fixTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_typeMapphp[php$typephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_typeMapphp[php$typephp]php;
php php php php php php php php php}
php php php php php php php php returnphp php'voidphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anphp xmlrpcphp callphp php(actualphp workphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_XmlRpcphp_Requestphp php$request
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Response
php php php php php php*php php@throwsphp Zendphp_XmlRpcServerphp_Exceptionphp|Exception
php php php php php php*php Zendphp_XmlRpcServerphp_Exceptionsphp arephp thrownphp forphp internalphp errorsphp;php otherwisephp,
php php php php php php*php anyphp otherphp exceptionphp mayphp bephp thrownphp byphp thephp callback
php php php php php php*php/
php php php php protectedphp functionphp php_handlephp(Zendphp_XmlRpcphp_Requestphp php$requestphp)
php php php php php{
php php php php php php php php php$methodphp php=php php$requestphp-php>getMethodphp(php)php;

php php php php php php php php php/php/php Checkphp forphp validphp method
php php php php php php php php ifphp php(php!php$thisphp-php>php_tablephp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Methodphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp existphp'php,php php6php2php0php)php;
php php php php php php php php php}

php php php php php php php php php$infophp php php php php php=php php$thisphp-php>php_tablephp-php>getMethodphp(php$methodphp)php;
php php php php php php php php php$paramsphp php php php=php php$requestphp-php>getParamsphp(php)php;
php php php php php php php php php$argvphp php php php php php=php php$infophp-php>getInvokeArgumentsphp(php)php;
php php php php php php php php ifphp php(php0php <php countphp(php$argvphp)php andphp php$thisphp-php>sendArgumentsToAllMethodsphp(php)php)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$argvphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp callingphp parametersphp againstphp signatures
php php php php php php php php php$matchedphp php php php php=php falsephp;
php php php php php php php php php$sigCalledphp php php=php php$requestphp-php>getTypesphp(php)php;

php php php php php php php php php$sigLengthphp php php=php countphp(php$sigCalledphp)php;
php php php php php php php php php$paramsLenphp php php=php countphp(php$paramsphp)php;
php php php php php php php php ifphp php(php$sigLengthphp <php php$paramsLenphp)php php{
php php php php php php php php php php php php forphp php(php$iphp php=php php$sigLengthphp;php php$iphp <php php$paramsLenphp;php php+php+php$iphp)php php{
php php php php php php php php php php php php php php php php php$xmlRpcValuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$paramsphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php php$sigCalledphp[php]php php=php php$xmlRpcValuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$signaturesphp php=php php$infophp-php>getPrototypesphp(php)php;
php php php php php php php php foreachphp php(php$signaturesphp asphp php$signaturephp)php php{
php php php php php php php php php php php php php$sigParamsphp php=php php$signaturephp-php>getParametersphp(php)php;
php php php php php php php php php php php php ifphp php(php$sigCalledphp php=php=php=php php$sigParamsphp)php php{
php php php php php php php php php php php php php php php php php$matchedphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$matchedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Serverphp_Exceptionphp(php'Callingphp parametersphp dophp notphp matchphp signaturephp'php,php php6php2php3php)php;
php php php php php php php php php}

php php php php php php php php php$returnphp php php php php php php php php=php php$thisphp-php>php_dispatchphp(php$infophp,php php$paramsphp)php;
php php php php php php php php php$responseClassphp php=php php$thisphp-php>getResponseClassphp(php)php;
php php php php php php php php returnphp newphp php$responseClassphp(php$returnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp systemphp methodsphp withphp thephp server
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_registerSystemMethodsphp(php)
php php php php php{
php php php php php php php php php$systemphp php=php newphp Zendphp_XmlRpcphp_Serverphp_Systemphp(php$thisphp)php;
php php php php php php php php php$thisphp-php>php_systemphp php=php php$systemphp;
php php php php php php php php php$thisphp-php>setClassphp(php$systemphp,php php'systemphp'php)php;
php php php php php}
php}
