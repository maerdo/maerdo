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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ActionStackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Addphp tophp actionphp stack
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_ActionStackphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php protectedphp php$php_actionStackphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Registerphp actionphp stackphp plugin
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php!php$frontphp-php>hasPluginphp(php'Zendphp_Controllerphp_Pluginphp_ActionStackphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/ActionStackphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_actionStackphp php=php newphp Zendphp_Controllerphp_Pluginphp_ActionStackphp(php)php;
php php php php php php php php php php php php php$frontphp-php>registerPluginphp(php$thisphp-php>php_actionStackphp,php php9php7php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_actionStackphp php=php php$frontphp-php>getPluginphp(php'Zendphp_Controllerphp_Pluginphp_ActionStackphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushphp ontophp thephp stack
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$next
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ActionStackphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp pushStackphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$nextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionStackphp-php>pushStackphp(php$nextphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushphp aphp newphp actionphp ontophp thephp stack
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ActionStack
php php php php php php*php/
php php php php publicphp functionphp actionToStackphp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$actionphp instanceofphp Zendphp_Controllerphp_Requestphp_Abstractphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>pushStackphp(php$actionphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_stringphp(php$actionphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'ActionStackphp requiresphp eitherphp aphp requestphp objectphp orphp minimallyphp aphp stringphp actionphp'php)php;
php php php php php php php php php}

php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;

php php php php php php php php ifphp php(php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Abstractphp php=php=php=php falsephp)php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Requestphp objectphp notphp setphp yetphp'php)php;
php php php php php php php php php}

php php php php php php php php php$controllerphp php=php php(nullphp php=php=php=php php$controllerphp)php php?php php$requestphp-php>getControllerNamephp(php)php php:php php$controllerphp;
php php php php php php php php php$modulephp php=php php(nullphp php=php=php=php php$modulephp)php php?php php$requestphp-php>getModuleNamephp(php)php php:php php$modulephp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Requestphp_Simple
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Simplephp.phpphp'php;
php php php php php php php php php$newRequestphp php=php newphp Zendphp_Controllerphp_Requestphp_Simplephp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;

php php php php php php php php returnphp php$thisphp-php>pushStackphp(php$newRequestphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp helperphp whenphp calledphp asphp php$thisphp-php>php_helperphp-php>actionStackphp(php)php fromphp anphp actionphp controller
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp simplephp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp directphp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>actionToStackphp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;
php php php php php}
php}
