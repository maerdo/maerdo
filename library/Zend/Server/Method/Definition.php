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
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Definitionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Methodphp definitionphp metadata
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Methodphp_Definition
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php protectedphp php$php_callbackphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_invokeArgumentsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodHelpphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp;

php php php php php/php*php*
php php php php php php*php php@varphp nullphp|object
php php php php php php*php/
php php php php protectedphp php$php_objectphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Prototypephp objects
php php php php php php*php/
php php php php protectedphp php$php_prototypesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$optionsphp)php php&php&php isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp methodphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp methodphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp methodphp callback
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Serverphp_Methodphp_Callbackphp php$callback
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Callbackphp.phpphp'php;
php php php php php php php php php php php php php$callbackphp php=php newphp Zendphp_Serverphp_Methodphp_Callbackphp(php$callbackphp)php;
php php php php php php php php php}php elseifphp php(php!php$callbackphp instanceofphp Zendphp_Serverphp_Methodphp_Callbackphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Invalidphp methodphp callbackphp providedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackphp php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp methodphp callback
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_callbackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prototypephp tophp methodphp definition
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Serverphp_Methodphp_Prototypephp php$prototype
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp addPrototypephp(php$prototypephp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$prototypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Prototypephp.phpphp'php;
php php php php php php php php php php php php php$prototypephp php=php newphp Zendphp_Serverphp_Methodphp_Prototypephp(php$prototypephp)php;
php php php php php php php php php}php elseifphp php(php!php$prototypephp instanceofphp Zendphp_Serverphp_Methodphp_Prototypephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Invalidphp methodphp prototypephp providedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_prototypesphp[php]php php=php php$prototypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp prototypesphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$prototypesphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Prototypephp objectsphp orphp arrays
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp addPrototypesphp(arrayphp php$prototypesphp)
php php php php php{
php php php php php php php php foreachphp php(php$prototypesphp asphp php$prototypephp)php php{
php php php php php php php php php php php php php$thisphp-php>addPrototypephp(php$prototypephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp allphp prototypesphp atphp oncephp php(overwritesphp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$prototypesphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Prototypephp objectsphp orphp arrays
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setPrototypesphp(arrayphp php$prototypesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prototypesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>addPrototypesphp(php$prototypesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp prototypes
php php php php php php*
php php php php php php*php php@returnphp arrayphp php$prototypesphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Prototypephp objectsphp orphp arrays
php php php php php php*php/
php php php php publicphp functionphp getPrototypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_prototypesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp methodphp help
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodHelp
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setMethodHelpphp(php$methodHelpphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_methodHelpphp php=php php(stringphp)php php$methodHelpphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp methodphp help
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMethodHelpphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodHelpphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp tophp usephp withphp methodphp calls
php php php php php php*
php php php php php php*php php@paramphp php objectphp php$object
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setObjectphp(php$objectphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_objectphp(php$objectphp)php php&php&php php(nullphp php!php=php=php php$objectphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Invalidphp objectphp passedphp tophp php'php php.php php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_METHODphp_php_php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_objectphp php=php php$objectphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp objectphp tophp usephp withphp methodphp calls
php php php php php php*
php php php php php php*php php@returnphp nullphp|object
php php php php php php*php/
php php php php publicphp functionphp getObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp invokephp arguments
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$invokeArguments
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setInvokeArgumentsphp(arrayphp php$invokeArgumentsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_invokeArgumentsphp php=php php$invokeArgumentsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp invokephp arguments
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getInvokeArgumentsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_invokeArgumentsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$prototypesphp php=php php$thisphp-php>getPrototypesphp(php)php;
php php php php php php php php php$signaturesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$prototypesphp asphp php$prototypephp)php php{
php php php php php php php php php php php php php$signaturesphp[php]php php=php php$prototypephp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'namephp'php php php php php php php php php php php php php=php>php php$thisphp-php>getNamephp(php)php,
php php php php php php php php php php php php php'callbackphp'php php php php php php php php php=php>php php$thisphp-php>getCallbackphp(php)php-php>toArrayphp(php)php,
php php php php php php php php php php php php php'prototypesphp'php php php php php php php=php>php php$signaturesphp,
php php php php php php php php php php php php php'methodHelpphp'php php php php php php php=php>php php$thisphp-php>getMethodHelpphp(php)php,
php php php php php php php php php php php php php'invokeArgumentsphp'php php=php>php php$thisphp-php>getInvokeArgumentsphp(php)php,
php php php php php php php php php php php php php'objectphp'php php php php php php php php php php php=php>php php$thisphp-php>getObjectphp(php)php,
php php php php php php php php php)php;
php php php php php}
php}
