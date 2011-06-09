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
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Serverphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Serverphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Serverphp_Reflection
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Serverphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Restphp_Serverphp implementsphp Zendphp_Serverphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Classphp Constructorphp Args
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_argsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Encoding
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Anphp arrayphp ofphp Zendphp_Serverphp_Reflectphp_Method
php php php php php php*php/
php php php php protectedphp php$php_functionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp headersphp tophp send
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp PHPphp'sphp Magicphp Methodsphp,php thesephp arephp ignored
php php php php php php*php/
php php php php protectedphp staticphp php$magicMethodsphp php=php arrayphp(
php php php php php php php php php'php_php_constructphp'php,
php php php php php php php php php'php_php_destructphp'php,
php php php php php php php php php'php_php_getphp'php,
php php php php php php php php php'php_php_setphp'php,
php php php php php php php php php'php_php_callphp'php,
php php php php php php php php php'php_php_sleepphp'php,
php php php php php php php php php'php_php_wakeupphp'php,
php php php php php php php php php'php_php_issetphp'php,
php php php php php php php php php'php_php_unsetphp'php,
php php php php php php php php php'php_php_tostringphp'php,
php php php php php php php php php'php_php_clonephp'php,
php php php php php php php php php'php_php_setphp_statephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Currentphp Method
php php php php php php*php/
php php php php protectedphp php$php_methodphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Serverphp_Reflection
php php php php php php*php/
php php php php protectedphp php$php_reflectionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp php{php@linkphp handlephp(php)php}php shouldphp sendphp outputphp orphp returnphp thephp responsephp.
php php php php php php*php php@varphp booleanphp Defaultsphp tophp false
php php php php php php*php/
php php php php protectedphp php$php_returnResponsephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php setphp_exceptionphp_handlerphp(arrayphp(php$thisphp,php php"faultphp"php)php)php;
php php php php php php php php php$thisphp-php>php_reflectionphp php=php newphp Zendphp_Serverphp_Reflectionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp XMLphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Restphp_Server
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(stringphp)php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp XMLphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lowercasephp aphp string
php php php php php php*
php php php php php php*php Lowercasephp'sphp aphp stringphp byphp reference
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp stringphp Lowerphp casedphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp lowerCasephp(php&php$valuephp,php php&php$keyphp)
php php php php php{
php php php php php php php php returnphp php$valuephp php=php strtolowerphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp returnphp aphp response
php php php php php php*
php php php php php php*php Ifphp calledphp withoutphp argumentsphp,php returnsphp thephp valuephp ofphp thephp flagphp.php Ifphp called
php php php php php php*php withphp anphp argumentphp,php setsphp thephp flagphp.
php php php php php php*
php php php php php php*php Whenphp php'returnphp responsephp'php isphp truephp,php php{php@linkphp handlephp(php)php}php willphp notphp sendphp outputphp,
php php php php php php*php butphp willphp insteadphp returnphp thephp responsephp fromphp thephp dispatchedphp functionphp/methodphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flag
php php php php php php*php php@returnphp booleanphp|Zendphp_Restphp_Serverphp Returnsphp Zendphp_Restphp_Serverphp whenphp usedphp tophp setphp thephp flagphp;php returnsphp booleanphp flagphp valuephp otherwisephp.
php php php php php php*php/
php php php php publicphp functionphp returnResponsephp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$flagphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_returnResponsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_returnResponsephp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:handlephp(php)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$request
php php php php php php*php php@throwsphp Zendphp_Restphp_Serverphp_Exception
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$requestphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php'Contentphp-Typephp:php textphp/xmlphp'php)php;
php php php php php php php php ifphp php(php!php$requestphp)php php{
php php php php php php php php php php php php php$requestphp php=php php$php_REQUESTphp;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$requestphp[php'methodphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_methodphp php=php php$requestphp[php'methodphp'php]php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php instanceofphp Zendphp_Serverphp_Reflectionphp_Functionphp php|php|php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp php&php&php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>isPublicphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$requestphp_keysphp php=php arrayphp_keysphp(php$requestphp)php;
php php php php php php php php php php php php php php php php php php php php arrayphp_walkphp(php$requestphp_keysphp,php arrayphp(php_php_CLASSphp_php_php,php php"lowerCasephp"php)php)php;
php php php php php php php php php php php php php php php php php php php php php$requestphp php=php arrayphp_combinephp(php$requestphp_keysphp,php php$requestphp)php;

php php php php php php php php php php php php php php php php php php php php php$funcphp_argsphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getParametersphp(php)php;

php php php php php php php php php php php php php php php php php php php php php$callingphp_argsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$missingphp_argsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$funcphp_argsphp asphp php$argphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$requestphp[strtolowerphp(php$argphp-php>getNamephp(php)php)php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$callingphp_argsphp[php]php php=php php$requestphp[strtolowerphp(php$argphp-php>getNamephp(php)php)php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$argphp-php>isOptionalphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$callingphp_argsphp[php]php php=php php$argphp-php>getDefaultValuephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$missingphp_argsphp[php]php php=php php$argphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$requestphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(substrphp(php$keyphp,php php0php,php php3php)php php=php=php php'argphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$keyphp php=php strphp_replacephp(php'argphp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$callingphp_argsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$indexphp php=php arrayphp_searchphp(php$keyphp,php php$missingphp_argsphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$missingphp_argsphp[php$indexphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Sortphp argumentsphp byphp keyphp php-php-php php@seephp ZFphp-php2php2php7php9
php php php php php php php php php php php php php php php php php php php php ksortphp(php$callingphp_argsphp)php;

php php php php php php php php php php php php php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$callingphp_argsphp)php <php countphp(php$funcphp_argsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(newphp Zendphp_Restphp_Serverphp_Exceptionphp(php'Invalidphp Methodphp Callphp tophp php'php php.php php$thisphp-php>php_methodphp php.php php'php.php Missingphp argumentphp(sphp)php:php php'php php.php implodephp(php'php,php php'php,php php$missingphp_argsphp)php php.php php'php.php'php)php,php php4php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp php&php&php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Getphp class
php php php php php php php php php php php php php php php php php php php php php php php php php$classphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getDeclaringClassphp(php)php-php>getNamephp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>isStaticphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php forphp somephp reasonphp,php invokeArgsphp(php)php doesphp notphp workphp thephp samephp as
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php invokephp(php)php,php andphp expectsphp thephp firstphp argumentphp tophp bephp anphp objectphp.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Sophp,php usingphp aphp callbackphp ifphp thephp methodphp isphp staticphp.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_callStaticMethodphp(php$classphp,php php$callingphp_argsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Objectphp method
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_callObjectMethodphp(php$classphp,php php$callingphp_argsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php callphp_userphp_funcphp_arrayphp(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getNamephp(php)php,php php$callingphp_argsphp)php;php php/php/php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>invokeArgsphp(php$callingphp_argsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(php$ephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Restphp/Serverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(
php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Restphp_Serverphp_Exceptionphp(php"Unknownphp Methodphp php'php$thisphp-php>php_methodphp'php.php"php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php4php0php4
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Restphp/Serverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(
php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Restphp_Serverphp_Exceptionphp(php"Unknownphp Methodphp php'php$thisphp-php>php_methodphp'php.php"php)php,
php php php php php php php php php php php php php php php php php php php php php4php0php4
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Restphp/Serverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(
php php php php php php php php php php php php php php php php newphp Zendphp_Restphp_Serverphp_Exceptionphp(php"Nophp Methodphp Specifiedphp.php"php)php,
php php php php php php php php php php php php php php php php php4php0php4
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$resultphp instanceofphp SimpleXMLElementphp)php php{
php php php php php php php php php php php php php$responsephp php=php php$resultphp-php>asXMLphp(php)php;
php php php php php php php php php}php elseifphp php(php$resultphp instanceofphp DOMDocumentphp)php php{
php php php php php php php php php php php php php$responsephp php=php php$resultphp-php>saveXMLphp(php)php;
php php php php php php php php php}php elseifphp php(php$resultphp instanceofphp DOMNodephp)php php{
php php php php php php php php php php php php php$responsephp php=php php$resultphp-php>ownerDocumentphp-php>saveXMLphp(php$resultphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$resultphp)php php|php|php isphp_objectphp(php$resultphp)php)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_handleStructphp(php$resultphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_handleScalarphp(php$resultphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>returnResponsephp(php)php)php php{
php php php php php php php php php php php php ifphp php(php!headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php php php php php php php php php headerphp(php$headerphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php echophp php$responsephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:setClassphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classnamephp Classphp name
php php php php php php*php php@paramphp stringphp php$namespacephp Classphp namespacephp php(unusedphp)
php php php php php php*php php@paramphp arrayphp php$argvphp Anphp arrayphp ofphp Constructorphp Arguments
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classnamephp,php php$namespacephp php=php php'php'php,php php$argvphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_argsphp php=php php$argvphp;
php php php php php php php php foreachphp php(php$thisphp-php>php_reflectionphp-php>reflectClassphp(php$classnamephp,php php$argvphp)php-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_functionsphp[php$methodphp-php>getNamephp(php)php]php php=php php$methodphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anphp arrayphp orphp objectphp result
php php php php php php*
php php php php php php*php php@paramphp arrayphp|objectphp php$structphp Resultphp Value
php php php php php php*php php@returnphp stringphp XMLphp Response
php php php php php php*php/
php php php php protectedphp functionphp php_handleStructphp(php$structphp)
php php php php php{
php php php php php php php php php$functionphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php;
php php php php php php php php ifphp php(php$functionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php$classphp php=php php$functionphp-php>getDeclaringClassphp(php)php-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php php$methodphp php=php php$functionphp-php>getNamephp(php)php;

php php php php php php php php php$domphp php php php php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php ifphp php(php$classphp)php php{
php php php php php php php php php php php php php$rootphp php php php=php php$domphp-php>createElementphp(php$classphp)php;
php php php php php php php php php php php php php$methodphp php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$methodphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$rootphp php php php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$methodphp php=php php$rootphp;
php php php php php php php php php}
php php php php php php php php php$rootphp-php>setAttributephp(php'generatorphp'php,php php'zendphp'php)php;
php php php php php php php php php$rootphp-php>setAttributephp(php'versionphp'php,php php'php1php.php0php'php)php;
php php php php php php php php php$domphp-php>appendChildphp(php$rootphp)php;

php php php php php php php php php$thisphp-php>php_structValuephp(php$structphp,php php$domphp,php php$methodphp)php;

php php php php php php php php php$structphp php=php php(arrayphp)php php$structphp;
php php php php php php php php ifphp php(php!issetphp(php$structphp[php'statusphp'php]php)php)php php{
php php php php php php php php php php php php php$statusphp php=php php$domphp-php>createElementphp(php'statusphp'php,php php'successphp'php)php;
php php php php php php php php php php php php php$methodphp-php>appendChildphp(php$statusphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recursivelyphp iteratephp throughphp aphp struct
php php php php php php*
php php php php php php*php Recursivelyphp iteratesphp throughphp anphp associativephp arrayphp orphp objectphp'sphp properties
php php php php php php*php tophp buildphp XMLphp responsephp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$struct
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$parent
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_structValuephp(php$structphp,php DOMDocumentphp php$domphp,php DOMElementphp php$parentphp)
php php php php php{
php php php php php php php php php$structphp php=php php(arrayphp)php php$structphp;

php php php php php php php php foreachphp php(php$structphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php0php;
php php php php php php php php php php php php php}php elseifphp php(php$valuephp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(ctypephp_digitphp(php(stringphp)php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php php'keyphp_php'php php.php php$keyphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php php|php|php isphp_objectphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_structValuephp(php$valuephp,php php$domphp,php php$elementphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$domphp-php>createTextNodephp(php$valuephp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$parentphp-php>appendChildphp(php$elementphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp aphp singlephp value
php php php php php php*
php php php php php php*php php@paramphp stringphp|intphp|booleanphp php$valuephp Resultphp value
php php php php php php*php php@returnphp stringphp XMLphp Response
php php php php php php*php/
php php php php protectedphp functionphp php_handleScalarphp(php$valuephp)
php php php php php{
php php php php php php php php php$functionphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php;
php php php php php php php php ifphp php(php$functionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php$classphp php=php php$functionphp-php>getDeclaringClassphp(php)php-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php php$methodphp php=php php$functionphp-php>getNamephp(php)php;

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php ifphp php(php$classphp)php php{
php php php php php php php php php php php php php$xmlphp php=php php$domphp-php>createElementphp(php$classphp)php;
php php php php php php php php php php php php php$methodNodephp php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$xmlphp-php>appendChildphp(php$methodNodephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xmlphp php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$methodNodephp php=php php$xmlphp;
php php php php php php php php php}
php php php php php php php php php$xmlphp-php>setAttributephp(php'generatorphp'php,php php'zendphp'php)php;
php php php php php php php php php$xmlphp-php>setAttributephp(php'versionphp'php,php php'php1php.php0php'php)php;
php php php php php php php php php$domphp-php>appendChildphp(php$xmlphp)php;

php php php php php php php php ifphp php(php$valuephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$valuephp php=php php0php;
php php php php php php php php php}php elseifphp php(php$valuephp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$valuephp php=php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php'responsephp'php)php;
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$domphp-php>createTextNodephp(php$valuephp)php)php;
php php php php php php php php php php php php php$methodNodephp-php>appendChildphp(php$elementphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$methodNodephp-php>appendChildphp(php$domphp-php>createElementphp(php'responsephp'php)php)php;
php php php php php php php php php}

php php php php php php php php php$methodNodephp-php>appendChildphp(php$domphp-php>createElementphp(php'statusphp'php,php php'successphp'php)php)php;

php php php php php php php php returnphp php$domphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:faultphp(php)
php php php php php php*
php php php php php php*php Createsphp XMLphp errorphp responsephp,php returningphp DOMDocumentphp withphp responsephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Exceptionphp php$faultphp Message
php php php php php php*php php@paramphp intphp php$codephp Errorphp Code
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp faultphp(php$exceptionphp php=php nullphp,php php$codephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php)php)php php{
php php php php php php php php php php php php php$functionphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php;
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_methodphp)php)php php{
php php php php php php php php php php php php php$functionphp php=php php$thisphp-php>php_methodphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$functionphp php=php php'restphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$functionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php$classphp php=php php$functionphp-php>getDeclaringClassphp(php)php-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$functionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp)php php{
php php php php php php php php php php php php php$methodphp php=php php$functionphp-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$methodphp php=php php$functionphp;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php ifphp php(php$classphp)php php{
php php php php php php php php php php php php php$xmlphp php php php php php php php=php php$domphp-php>createElementphp(php$classphp)php;
php php php php php php php php php php php php php$xmlMethodphp php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$xmlphp-php>appendChildphp(php$xmlMethodphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xmlphp php php php php php php php=php php$domphp-php>createElementphp(php$methodphp)php;
php php php php php php php php php php php php php$xmlMethodphp php=php php$xmlphp;
php php php php php php php php php}
php php php php php php php php php$xmlphp-php>setAttributephp(php'generatorphp'php,php php'zendphp'php)php;
php php php php php php php php php$xmlphp-php>setAttributephp(php'versionphp'php,php php'php1php.php0php'php)php;
php php php php php php php php php$domphp-php>appendChildphp(php$xmlphp)php;

php php php php php php php php php$xmlResponsephp php=php php$domphp-php>createElementphp(php'responsephp'php)php;
php php php php php php php php php$xmlMethodphp-php>appendChildphp(php$xmlResponsephp)php;

php php php php php php php php ifphp php(php$exceptionphp instanceofphp Exceptionphp)php php{
php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php'messagephp'php)php;
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$domphp-php>createTextNodephp(php$exceptionphp-php>getMessagephp(php)php)php)php;
php php php php php php php php php php php php php$xmlResponsephp-php>appendChildphp(php$elementphp)php;
php php php php php php php php php php php php php$codephp php=php php$exceptionphp-php>getCodephp(php)php;
php php php php php php php php php}php elseifphp php(php(php$exceptionphp php!php=php=php nullphp)php php|php|php php'restphp'php php=php=php php$functionphp)php php{
php php php php php php php php php php php php php$xmlResponsephp-php>appendChildphp(php$domphp-php>createElementphp(php'messagephp'php,php php'Anphp unknownphp errorphp occuredphp.php Pleasephp tryphp againphp.php'php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xmlResponsephp-php>appendChildphp(php$domphp-php>createElementphp(php'messagephp'php,php php'Callphp tophp php'php php.php php$methodphp php.php php'php failedphp.php'php)php)php;
php php php php php php php php php}

php php php php php php php php php$xmlMethodphp-php>appendChildphp(php$xmlResponsephp)php;
php php php php php php php php php$xmlMethodphp-php>appendChildphp(php$domphp-php>createElementphp(php'statusphp'php,php php'failedphp'php)php)php;

php php php php php php php php php/php/php Headersphp tophp send
php php php php php php php php ifphp php(php$codephp php=php=php=php nullphp php|php|php php(php4php0php4php php!php=php php$codephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php]php php=php php'HTTPphp/php1php.php0php php4php0php0php Badphp Requestphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php]php php=php php'HTTPphp/php1php.php0php php4php0php4php Filephp Notphp Foundphp'php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anyphp HTTPphp extraphp headersphp setphp byphp thephp server
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:addFunctionphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$functionphp Functionphp Name
php php php php php php*php php@paramphp stringphp php$namespacephp Functionphp namespacephp php(unusedphp)
php php php php php php*php/
php php php php publicphp functionphp addFunctionphp(php$functionphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$functionphp)php)php php{
php php php php php php php php php php php php php$functionphp php=php php(arrayphp)php php$functionphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$functionphp asphp php$funcphp)php php{
php php php php php php php php php php php php ifphp php(isphp_callablephp(php$funcphp)php php&php&php php!inphp_arrayphp(php$funcphp,php selfphp:php:php$magicMethodsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_functionsphp[php$funcphp]php php=php php$thisphp-php>php_reflectionphp-php>reflectFunctionphp(php$funcphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Restphp_Serverphp_Exceptionphp(php"Invalidphp Methodphp Addedphp tophp Servicephp.php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:getFunctionsphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Anphp arrayphp ofphp Zendphp_Serverphp_Reflectionphp_Methodphp's
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_functionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:loadFunctionsphp(php)
php php php php php php*
php php php php php php*php php@todophp Implement
php php php php php php*php php@paramphp arrayphp php$functions
php php php php php php*php/
php php php php publicphp functionphp loadFunctionsphp(php$functionsphp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Zendphp_Serverphp_Interfacephp:php:setPersistencephp(php)
php php php php php php*
php php php php php php*php php@todophp Implement
php php php php php php*php php@paramphp intphp php$mode
php php php php php php*php/
php php php php publicphp functionphp setPersistencephp(php$modephp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp aphp staticphp classphp methodphp andphp returnphp thephp result
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_callStaticMethodphp(php$classphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php$classphp,php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getNamephp(php)php)php,php php$argsphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp anphp instancephp methodphp ofphp anphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Restphp_Serverphp_Exceptionphp Forphp invalidphp classphp name
php php php php php php*php/
php php php php protectedphp functionphp php_callObjectMethodphp(php$classphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getDeclaringClassphp(php)php-php>getConstructorphp(php)php)php php{
php php php php php php php php php php php php php php php php php$objectphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getDeclaringClassphp(php)php-php>newInstanceArgsphp(php$thisphp-php>php_argsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$objectphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getDeclaringClassphp(php)php-php>newInstancephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Restphp_Serverphp_Exceptionphp(php'Errorphp instantiatingphp classphp php'php php.php php$classphp php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php tophp invokephp methodphp php'php php.php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>getNamephp(php)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php php(php'php php.php php$ephp-php>getMessagephp(php)php php.php php'php)php php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php5php0php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_functionsphp[php$thisphp-php>php_methodphp]php-php>invokeArgsphp(php$objectphp,php php$argsphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>faultphp(php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
