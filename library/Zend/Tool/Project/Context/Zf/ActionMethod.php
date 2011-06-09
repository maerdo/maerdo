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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ActionMethodphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_File
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Filephp.phpphp'php;

php/php*php*
php php*php Thisphp classphp isphp thephp frontphp mostphp classphp forphp utilizingphp Zendphp_Toolphp_Project
php php*
php php*php Aphp profilephp isphp aphp hierarchicalphp setphp ofphp resourcesphp thatphp keepphp trackphp of
php php*php itemsphp withinphp aphp specificphp projectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethodphp implementsphp Zendphp_Toolphp_Projectphp_Contextphp_Interface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_resourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_controllerResourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_controllerPathphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_actionNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethod
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'actionNamephp'php)php;

php php php php php php php php php$thisphp-php>php_resourcephp-php>setAppendablephp(falsephp)php;
php php php php php php php php php$thisphp-php>php_controllerResourcephp php=php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_controllerResourcephp-php>getContextphp(php)php instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ControllerFilephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(php'ActionMethodphp mustphp bephp aphp subphp resourcephp ofphp aphp ControllerFilephp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/php makephp thephp ControllerFilephp nodephp appendablephp sophp wephp canphp tackphp onphp thephp actionMethodphp.
php php php php php php php php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php-php>setAppendablephp(truephp)php;

php php php php php php php php php$thisphp-php>php_controllerPathphp php=php php$thisphp-php>php_controllerResourcephp-php>getContextphp(php)php-php>getPathphp(php)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Thisphp codephp blockphp isphp nowphp commentedphp,php itsphp doingphp tophp muchphp forphp initphp(php)
php php php php php php php php php php*
php php php php php php php php ifphp php(php$thisphp-php>php_controllerPathphp php!php=php php'php'php php&php&php selfphp:php:hasActionMethodphp(php$thisphp-php>php_controllerPathphp,php php$thisphp-php>php_actionNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(php'Anphp actionphp namedphp php'php php.php php$thisphp-php>php_actionNamephp php.php php'Actionphp alreadyphp existsphp inphp thisphp controllerphp'php)php;
php php php php php php php php php}
php php php php php php php php php*php/

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'actionNamephp'php php=php>php php$thisphp-php>getActionNamephp(php)
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ActionMethodphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resource
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethod
php php php php php php*php/
php php php php publicphp functionphp setResourcephp(Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resourcephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcephp php=php php$resourcephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setActionNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethod
php php php php php php*php/
php php php php publicphp functionphp setActionNamephp(php$actionNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionNamephp php=php php$actionNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getActionNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethod
php php php php php php*php/
php php php php publicphp functionphp createphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:createActionMethodphp(php$thisphp-php>php_controllerPathphp,php php$thisphp-php>php_actionNamephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Couldphp notphp createphp actionphp withinphp controllerphp php'php php.php php$thisphp-php>php_controllerPath
php php php php php php php php php php php php php php php php php.php php'php withphp actionphp namephp php'php php.php php$thisphp-php>php_actionName
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php deletephp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ActionMethod
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php php/php/php php@todophp dophp this
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createAcionMethodphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$controllerPath
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@paramphp stringphp php$body
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp staticphp functionphp createActionMethodphp(php$controllerPathphp,php php$actionNamephp,php php$bodyphp php=php php'php php php php php php php php php/php/php actionphp bodyphp'php)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$controllerPathphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$controllerCodeGenFilephp php=php Zendphp_CodeGeneratorphp_Phpphp_Filephp:php:fromReflectedFileNamephp(php$controllerPathphp,php truephp,php truephp)php;
php php php php php php php php php$controllerCodeGenFilephp-php>getClassphp(php)php-php>setMethodphp(arrayphp(
php php php php php php php php php php php php php'namephp'php php=php>php php$actionNamephp php.php php'Actionphp'php,
php php php php php php php php php php php php php'bodyphp'php php=php>php php$body
php php php php php php php php php php php php php)php)php;

php php php php php php php php filephp_putphp_contentsphp(php$controllerPathphp,php php$controllerCodeGenFilephp-php>generatephp(php)php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasActionMethodphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$controllerPath
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp hasActionMethodphp(php$controllerPathphp,php php$actionNamephp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$controllerPathphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$controllerCodeGenFilephp php=php Zendphp_CodeGeneratorphp_Phpphp_Filephp:php:fromReflectedFileNamephp(php$controllerPathphp,php truephp,php truephp)php;
php php php php php php php php returnphp php$controllerCodeGenFilephp-php>getClassphp(php)php-php>hasMethodphp(php$actionNamephp php.php php'Actionphp'php)php;
php php php php php}

php}