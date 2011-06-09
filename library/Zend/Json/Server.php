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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Serverphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Serverphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp extendsphp Zendphp_Serverphp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Versionphp Constants
php php php php php php*php/
php php php php constphp VERSIONphp_php1php php=php php'php1php.php0php'php;
php php php php constphp VERSIONphp_php2php php=php php'php2php.php0php'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Flagphp:php whetherphp orphp notphp tophp autophp-emitphp thephp response
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_autoEmitResponsephp php=php truephp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Flagphp;php allowphp overwritingphp existingphp methodsphp whenphp creatingphp serverphp definition
php php php php php php*php/
php php php php protectedphp php$php_overwriteExistingMethodsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Requestphp object
php php php php php php*php php@varphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php protectedphp php$php_requestphp;

php php php php php/php*php*
php php php php php php*php Responsephp object
php php php php php php*php php@varphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp;

php php php php php/php*php*
php php php php php php*php SMDphp object
php php php php php php*php php@varphp Zendphp_Jsonphp_Serverphp_Smd
php php php php php php*php/
php php php php protectedphp php$php_serviceMapphp;

php php php php php/php*php*
php php php php php php*php SMDphp classphp accessors
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_smdMethodsphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Serverphp_Description
php php php php php php*php/
php php php php protectedphp php$php_tablephp;

php php php php php/php*php*
php php php php php php*php Attachphp aphp functionphp orphp callbackphp tophp thephp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$functionphp Validphp PHPphp callback
php php php php php php*php php@paramphp php stringphp php$namespacephp php Ignored
php php php php php php*php php@returnphp Zendphp_Jsonphp_Server
php php php php php php*php/
php php php php publicphp functionphp addFunctionphp(php$functionphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$functionphp)php php&php&php php(php!isphp_arrayphp(php$functionphp)php php|php|php php(php2php php>php countphp(php$functionphp)php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp;php invalidphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_callablephp(php$functionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp;php doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php2php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(php$argvphp,php php2php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;
php php php php php php php php ifphp php(isphp_stringphp(php$functionphp)php)php php{
php php php php php php php php php php php php php$methodphp php=php Zendphp_Serverphp_Reflectionphp:php:reflectFunctionphp(php$functionphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classphp php php=php arrayphp_shiftphp(php$functionphp)php;
php php php php php php php php php php php php php$actionphp php=php arrayphp_shiftphp(php$functionphp)php;
php php php php php php php php php php php php php$reflectionphp php=php Zendphp_Serverphp_Reflectionphp:php:reflectClassphp(php$classphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php php php php php php$methodsphp php=php php$reflectionphp-php>getMethodsphp(php)php;
php php php php php php php php php php php php php$foundphp php php php=php falsephp;
php php php php php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$actionphp php=php=php php$methodphp-php>getNamephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$foundphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>faultphp(php'Methodphp notphp foundphp'php,php php-php3php2php6php0php1php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$definitionphp php=php php$thisphp-php>php_buildSignaturephp(php$methodphp)php;
php php php php php php php php php$thisphp-php>php_addMethodServiceMapphp(php$definitionphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp aphp classphp withphp thephp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@paramphp php stringphp php$namespacephp Ignored
php php php php php php*php php@paramphp php mixedphp php$argvphp Ignored
php php php php php php*php php@returnphp Zendphp_Jsonphp_Server
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classphp,php php$namespacephp php=php php'php'php,php php$argvphp php=php nullphp)
php php php php php{
php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php3php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(php$argvphp,php php3php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;
php php php php php php php php php$reflectionphp php=php Zendphp_Serverphp_Reflectionphp:php:reflectClassphp(php$classphp,php php$argvphp,php php$namespacephp)php;

php php php php php php php php foreachphp php(php$reflectionphp-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php php$definitionphp php=php php$thisphp-php>php_buildSignaturephp(php$methodphp,php php$classphp)php;
php php php php php php php php php php php php php$thisphp-php>php_addMethodServiceMapphp(php$definitionphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp faultphp response
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fault
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php publicphp functionphp faultphp(php$faultphp php=php nullphp,php php$codephp php=php php4php0php4php,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Errorphp.phpphp'php;
php php php php php php php php php$errorphp php=php newphp Zendphp_Jsonphp_Serverphp_Errorphp(php$faultphp,php php$codephp,php php$dataphp)php;
php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setErrorphp(php$errorphp)php;
php php php php php php php php returnphp php$errorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp request
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp_Requestphp php$request
php php php php php php*php php@returnphp nullphp|Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$requestphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php(falsephp php!php=php=php php$requestphp)php php&php&php php(php!php$requestphp instanceofphp Zendphp_Jsonphp_Serverphp_Requestphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp requestphp typephp providedphp;php cannotphp handlephp'php)php;
php php php php php php php php php}php elseifphp php(php$requestphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Handlephp request
php php php php php php php php php$thisphp-php>php_handlephp(php)php;

php php php php php php php php php/php/php Getphp response
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getReadyResponsephp(php)php;

php php php php php php php php php/php/php Emitphp responsephp?
php php php php php php php php ifphp php(php$thisphp-php>autoEmitResponsephp(php)php)php php{
php php php php php php php php php php php php echophp php$responsephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php orphp returnphp itphp?
php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp functionphp definitions
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Serverphp_Definitionphp php$definition
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadFunctionsphp(php$definitionphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$definitionphp)php php&php&php php(php!php$definitionphp instanceofphp Zendphp_Serverphp_Definitionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp definitionphp providedphp tophp loadFunctionsphp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$definitionphp asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tablephp-php>addMethodphp(php$methodphp,php php$keyphp)php;
php php php php php php php php php php php php php$thisphp-php>php_addMethodServiceMapphp(php$methodphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setPersistencephp(php$modephp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp_Requestphp php$request
php php php php php php*php php@returnphp Zendphp_Jsonphp_Server
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Jsonphp_Serverphp_Requestphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp JSONphp-RPCphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$requestphp php=php php$thisphp-php>php_requestphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Requestphp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setRequestphp(newphp Zendphp_Jsonphp_Serverphp_Requestphp_Httpphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp_Responsephp php$response
php php php php php php*php php@returnphp Zendphp_Jsonphp_Server
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Jsonphp_Serverphp_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$responsephp php=php php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Responsephp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setResponsephp(newphp Zendphp_Jsonphp_Serverphp_Responsephp_Httpphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp autophp-emitphp response
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Jsonphp_Server
php php php php php php*php/
php php php php publicphp functionphp setAutoEmitResponsephp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_autoEmitResponsephp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Willphp wephp autophp-emitphp thephp responsephp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp autoEmitResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoEmitResponsephp;
php php php php php}

php php php php php/php/php overloadingphp forphp SMDphp metadata
php php php php php/php*php*
php php php php php php*php Overloadphp tophp accessorsphp ofphp SMDphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(setphp|getphp)php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$thisphp-php>php_getSmdMethodsphp(php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php'setphp'php php=php=php php$matchesphp[php1php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getServiceMapphp(php)php-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>getServiceMapphp(php)php-php>php$methodphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp SMDphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smd
php php php php php php*php/
php php php php publicphp functionphp getServiceMapphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_serviceMapphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Smdphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_serviceMapphp php=php newphp Zendphp_Jsonphp_Serverphp_Smdphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_serviceMapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp servicephp methodphp tophp servicephp map
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Functionphp php$method
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addMethodServiceMapphp(Zendphp_Serverphp_Methodphp_Definitionphp php$methodphp)
php php php php php{
php php php php php php php php php$serviceInfophp php=php arrayphp(
php php php php php php php php php php php php php'namephp'php php php php=php>php php$methodphp-php>getNamephp(php)php,
php php php php php php php php php php php php php'returnphp'php php=php>php php$thisphp-php>php_getReturnTypephp(php$methodphp)php,
php php php php php php php php php)php;
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_getParamsphp(php$methodphp)php;
php php php php php php php php php$serviceInfophp[php'paramsphp'php]php php=php php$paramsphp;
php php php php php php php php php$serviceMapphp php=php php$thisphp-php>getServiceMapphp(php)php;
php php php php php php php php ifphp php(falsephp php!php=php=php php$serviceMapphp-php>getServicephp(php$serviceInfophp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php$serviceMapphp-php>removeServicephp(php$serviceInfophp[php'namephp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$serviceMapphp-php>addServicephp(php$serviceInfophp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp PHPphp typephp tophp JSONphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_fixTypephp(php$typephp)
php php php php php{
php php php php php php php php returnphp php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp paramsphp fromphp signature
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultParamsphp(arrayphp php$argsphp,php arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$defaultParamsphp php=php arrayphp_slicephp(php$paramsphp,php countphp(php$argsphp)php)php;
php php php php php php php php foreachphp php(php$defaultParamsphp asphp php$paramphp)php php{
php php php php php php php php php php php php php$valuephp php=php nullphp;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'defaultphp'php,php php$paramphp)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$paramphp[php'defaultphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php arrayphp_pushphp(php$argsphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$argsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp methodphp paramphp type
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$method
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php protectedphp functionphp php_getParamsphp(Zendphp_Serverphp_Methodphp_Definitionphp php$methodphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodphp-php>getPrototypesphp(php)php asphp php$prototypephp)php php{
php php php php php php php php php php php php foreachphp php(php$prototypephp-php>getParameterObjectsphp(php)php asphp php$keyphp php=php>php php$parameterphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php$parameterphp-php>getTypephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php=php>php php$parameterphp-php>getNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php'optionalphp'php php=php>php php$parameterphp-php>isOptionalphp(php)php,
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$defaultphp php=php php$parameterphp-php>getDefaultValuephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php[php'defaultphp'php]php php=php php$defaultphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$descriptionphp php=php php$parameterphp-php>getDescriptionphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$descriptionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php[php'descriptionphp'php]php php=php php$descriptionphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$newTypephp php=php php$parameterphp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$paramsphp[php$keyphp]php[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$paramsphp[php$keyphp]php[php'typephp'php]php php=php=php php$newTypephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php[php'typephp'php]php php=php php(arrayphp)php php$paramsphp[php$keyphp]php[php'typephp'php]php;
php php php php php php php php php php php php php php php php php}php elseifphp php(inphp_arrayphp(php$newTypephp,php php$paramsphp[php$keyphp]php[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$paramsphp[php$keyphp]php[php'typephp'php]php,php php$parameterphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp state
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php protectedphp functionphp php_getReadyResponsephp(php)
php php php php php{
php php php php php php php php php$requestphp php php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;

php php php php php php php php php$responsephp-php>setServiceMapphp(php$thisphp-php>getServiceMapphp(php)php)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$idphp php=php php$requestphp-php>getIdphp(php)php)php)php php{
php php php php php php php php php php php php php$responsephp-php>setIdphp(php$idphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$versionphp php=php php$requestphp-php>getVersionphp(php)php)php)php php{
php php php php php php php php php php php php php$responsephp-php>setVersionphp(php$versionphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp methodphp returnphp type
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$method
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php protectedphp functionphp php_getReturnTypephp(Zendphp_Serverphp_Methodphp_Definitionphp php$methodphp)
php php php php php{
php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodphp-php>getPrototypesphp(php)php asphp php$prototypephp)php php{
php php php php php php php php php php php php php$returnphp[php]php php=php php$prototypephp-php>getReturnTypephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php1php php=php=php countphp(php$returnphp)php)php php{
php php php php php php php php php php php php returnphp php$returnphp[php0php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp listphp ofphp allowedphp SMDphp methodsphp forphp proxying
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getSmdMethodsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_smdMethodsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_smdMethodsphp php=php arrayphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Smdphp.phpphp'php;
php php php php php php php php php php php php php$methodsphp php=php getphp_classphp_methodsphp(php'Zendphp_Jsonphp_Serverphp_Smdphp'php)php;
php php php php php php php php php php php php foreachphp php(php$methodsphp asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(setphp|getphp)php/php'php,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(strstrphp(php$methodphp,php php'Servicephp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_smdMethodsphp[php]php php=php php$methodphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_smdMethodsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp forphp handlingphp request
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_handlephp(php)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;

php php php php php php php php ifphp php(php!php$requestphp-php>isMethodErrorphp(php)php php&php&php php(nullphp php=php=php=php php$requestphp-php>getMethodphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>faultphp(php'Invalidphp Requestphp'php,php php-php3php2php6php0php0php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$requestphp-php>isMethodErrorphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>faultphp(php'Invalidphp Requestphp'php,php php-php3php2php6php0php0php)php;
php php php php php php php php php}

php php php php php php php php php$methodphp php=php php$requestphp-php>getMethodphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_tablephp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>faultphp(php'Methodphp notphp foundphp'php,php php-php3php2php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php php php php php php php php=php php$requestphp-php>getParamsphp(php)php;
php php php php php php php php php$invocablephp php php php php php=php php$thisphp-php>php_tablephp-php>getMethodphp(php$methodphp)php;
php php php php php php php php php$serviceMapphp php php php php=php php$thisphp-php>getServiceMapphp(php)php;
php php php php php php php php php$servicephp php php php php php php php=php php$serviceMapphp-php>getServicephp(php$methodphp)php;
php php php php php php php php php$serviceParamsphp php=php php$servicephp-php>getParamsphp(php)php;

php php php php php php php php ifphp php(countphp(php$paramsphp)php <php countphp(php$serviceParamsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php$thisphp-php>php_getDefaultParamsphp(php$paramsphp,php php$serviceParamsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/Makephp surephp namedphp parametersphp arephp passedphp inphp correctphp order
php php php php php php php php ifphp php(php isphp_stringphp(php keyphp(php php$paramsphp php)php php)php php)php php{

php php php php php php php php php php php php php$callbackphp php=php php$invocablephp-php>getCallbackphp(php)php;
php php php php php php php php php php php php ifphp php(php'functionphp'php php=php=php php$callbackphp-php>getTypephp(php)php)php php{
php php php php php php php php php php php php php php php php php$reflectionphp php=php newphp ReflectionFunctionphp(php php$callbackphp-php>getFunctionphp(php)php php)php;
php php php php php php php php php php php php php php php php php$refParamsphp php php=php php$reflectionphp-php>getParametersphp(php)php;
php php php php php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php php php php php$reflectionphp php=php newphp ReflectionMethodphp(
php php php php php php php php php php php php php php php php php php php php php$callbackphp-php>getClassphp(php)php,
php php php php php php php php php php php php php php php php php php php php php$callbackphp-php>getMethodphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$refParamsphp php=php php$reflectionphp-php>getParametersphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$orderedParamsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp(php php$reflectionphp-php>getParametersphp(php)php asphp php$refParamphp php)php php{
php php php php php php php php php php php php php php php php ifphp(php issetphp(php php$paramsphp[php php$refParamphp-php>getNamephp(php)php php]php php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php$orderedParamsphp[php php$refParamphp-php>getNamephp(php)php php]php php=php php$paramsphp[php php$refParamphp-php>getNamephp(php)php php]php;
php php php php php php php php php php php php php php php php php}php elseifphp(php php$refParamphp-php>isOptionalphp(php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php$orderedParamsphp[php php$refParamphp-php>getNamephp(php)php php]php php=php nullphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Missingphp requiredphp parameterphp:php php'php php.php php$refParamphp-php>getNamephp(php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$paramsphp php=php php$orderedParamsphp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_dispatchphp(php$invocablephp,php php$paramsphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>faultphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setResultphp(php$resultphp)php;
php php php php php}
php}
