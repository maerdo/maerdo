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
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Serverphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Serverphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Definition
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Definitionphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Methodphp_Definition
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Definitionphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Methodphp_Callback
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Callbackphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Methodphp_Prototype
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Prototypephp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Methodphp_Parameter
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Parameterphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Abstract
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
abstractphp classphp Zendphp_Serverphp_Abstractphp implementsphp Zendphp_Serverphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@deprecated
php php php php php php*php php@varphp arrayphp Listphp ofphp PHPphp magicphp methodsphp php(lowercasedphp)
php php php php php php*php/
php php php php protectedphp staticphp php$magicphp_methodsphp php=php arrayphp(
php php php php php php php php php'php_php_callphp'php,
php php php php php php php php php'php_php_clonephp'php,
php php php php php php php php php'php_php_constructphp'php,
php php php php php php php php php'php_php_destructphp'php,
php php php php php php php php php'php_php_getphp'php,
php php php php php php php php php'php_php_issetphp'php,
php php php php php php php php php'php_php_setphp'php,
php php php php php php php php php'php_php_setphp_statephp'php,
php php php php php php php php php'php_php_sleepphp'php,
php php php php php php php php php'php_php_tostringphp'php,
php php php php php php php php php'php_php_unsetphp'php,
php php php php php php php php php'php_php_wakeupphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Flagphp;php whetherphp orphp notphp overwritingphp existingphp methodsphp isphp allowed
php php php php php php*php/
php php php php protectedphp php$php_overwriteExistingMethodsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php protectedphp php$php_tablephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Setupphp serverphp description
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tablephp php=php newphp Zendphp_Serverphp_Definitionphp(php)php;
php php php php php php php php php$thisphp-php>php_tablephp-php>setOverwriteExistingMethodsphp(php$thisphp-php>php_overwriteExistingMethodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp registeredphp methods
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp methodphp definitionsphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lowercasephp aphp string
php php php php php php*
php php php php php php*php Lowercasephp'sphp aphp stringphp byphp reference
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@paramphp php stringphp php$stringphp value
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp stringphp Lowerphp casedphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp lowerCasephp(php&php$valuephp,php php&php$keyphp)
php php php php php{
php php php php php php php php triggerphp_errorphp(php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_METHODphp_php_php php.php php'php(php)php isphp deprecatedphp andphp willphp bephp removedphp inphp aphp futurephp versionphp'php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php returnphp php$valuephp php=php strtolowerphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp callbackphp forphp methodphp signature
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$reflection
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php protectedphp functionphp php_buildCallbackphp(Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$reflectionphp)
php php php php php{
php php php php php php php php php$callbackphp php=php newphp Zendphp_Serverphp_Methodphp_Callbackphp(php)php;
php php php php php php php php ifphp php(php$reflectionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php$callbackphp-php>setTypephp(php$reflectionphp-php>isStaticphp(php)php php?php php'staticphp'php php:php php'instancephp'php)
php php php php php php php php php php php php php php php php php php php php php php-php>setClassphp(php$reflectionphp-php>getDeclaringClassphp(php)php-php>getNamephp(php)php)
php php php php php php php php php php php php php php php php php php php php php php-php>setMethodphp(php$reflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php}php elseifphp php(php$reflectionphp instanceofphp Zendphp_Serverphp_Reflectionphp_Functionphp)php php{
php php php php php php php php php php php php php$callbackphp-php>setTypephp(php'functionphp'php)
php php php php php php php php php php php php php php php php php php php php php php-php>setFunctionphp(php$reflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$callbackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp aphp methodphp signature
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$reflection
php php php php php php*php php@paramphp php nullphp|stringphp|objectphp php$class
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php php@throwsphp Zendphp_Serverphp_Exceptionphp onphp duplicatephp entry
php php php php php php*php/
php php php php protectedphp functionphp php_buildSignaturephp(Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp php$reflectionphp,php php$classphp php=php nullphp)
php php php php php{
php php php php php php php php php$nsphp php php php php php php php php php=php php$reflectionphp-php>getNamespacephp(php)php;
php php php php php php php php php$namephp php php php php php php php=php php$reflectionphp-php>getNamephp(php)php;
php php php php php php php php php$methodphp php php php php php=php emptyphp(php$nsphp)php php?php php$namephp php:php php$nsphp php.php php'php.php'php php.php php$namephp;

php php php php php php php php ifphp php(php!php$thisphp-php>php_overwriteExistingMethodsphp php&php&php php$thisphp-php>php_tablephp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Duplicatephp methodphp registeredphp:php php'php php.php php$methodphp)php;
php php php php php php php php php}

php php php php php php php php php$definitionphp php=php newphp Zendphp_Serverphp_Methodphp_Definitionphp(php)php;
php php php php php php php php php$definitionphp-php>setNamephp(php$methodphp)
php php php php php php php php php php php php php php php php php php php php-php>setCallbackphp(php$thisphp-php>php_buildCallbackphp(php$reflectionphp)php)
php php php php php php php php php php php php php php php php php php php php-php>setMethodHelpphp(php$reflectionphp-php>getDescriptionphp(php)php)
php php php php php php php php php php php php php php php php php php php php-php>setInvokeArgumentsphp(php$reflectionphp-php>getInvokeArgumentsphp(php)php)php;

php php php php php php php php foreachphp php(php$reflectionphp-php>getPrototypesphp(php)php asphp php$protophp)php php{
php php php php php php php php php php php php php$prototypephp php=php newphp Zendphp_Serverphp_Methodphp_Prototypephp(php)php;
php php php php php php php php php php php php php$prototypephp-php>setReturnTypephp(php$thisphp-php>php_fixTypephp(php$protophp-php>getReturnTypephp(php)php)php)php;
php php php php php php php php php php php php foreachphp php(php$protophp-php>getParametersphp(php)php asphp php$parameterphp)php php{
php php php php php php php php php php php php php php php php php$paramphp php=php newphp Zendphp_Serverphp_Methodphp_Parameterphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php$thisphp-php>php_fixTypephp(php$parameterphp-php>getTypephp(php)php)php,
php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php=php>php php$parameterphp-php>getNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php'optionalphp'php php=php>php php$parameterphp-php>isOptionalphp(php)php,
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php ifphp php(php$parameterphp-php>isDefaultValueAvailablephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramphp-php>setDefaultValuephp(php$parameterphp-php>getDefaultValuephp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$prototypephp-php>addParameterphp(php$paramphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$definitionphp-php>addPrototypephp(php$prototypephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_objectphp(php$classphp)php)php php{
php php php php php php php php php php php php php$definitionphp-php>setObjectphp(php$classphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_tablephp-php>addMethodphp(php$definitionphp)php;
php php php php php php php php returnphp php$definitionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dispatchphp method
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Methodphp_Definitionphp php$invocable
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_dispatchphp(Zendphp_Serverphp_Methodphp_Definitionphp php$invocablephp,php arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$callbackphp php=php php$invocablephp-php>getCallbackphp(php)php;
php php php php php php php php php$typephp php php php php php=php php$callbackphp-php>getTypephp(php)php;

php php php php php php php php ifphp php(php'functionphp'php php=php=php php$typephp)php php{
php php php php php php php php php php php php php$functionphp php=php php$callbackphp-php>getFunctionphp(php)php;
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(php$functionphp,php php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php php$classphp php php=php php$callbackphp-php>getClassphp(php)php;
php php php php php php php php php$methodphp php=php php$callbackphp-php>getMethodphp(php)php;

php php php php php php php php ifphp php(php'staticphp'php php=php=php php$typephp)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$classphp,php php$methodphp)php,php php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php php$objectphp php=php php$invocablephp-php>getObjectphp(php)php;
php php php php php php php php ifphp php(php!isphp_objectphp(php$objectphp)php)php php{
php php php php php php php php php php php php php$invokeArgsphp php=php php$invocablephp-php>getInvokeArgumentsphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$invokeArgsphp)php)php php{
php php php php php php php php php php php php php php php php php$reflectionphp php=php newphp ReflectionClassphp(php$classphp)php;
php php php php php php php php php php php php php php php php php$objectphp php php php php php=php php$reflectionphp-php>newInstanceArgsphp(php$invokeArgsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$objectphp php=php newphp php$classphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$objectphp,php php$methodphp)php,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp PHPphp typephp tophp protocolphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_fixTypephp(php$typephp)php;
php}
