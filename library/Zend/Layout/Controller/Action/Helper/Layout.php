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
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Layoutphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp interactingphp withphp Zendphp_Layoutphp objects
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layoutphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php protectedphp php$php_frontControllerphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Layout
php php php php php php*php/
php php php php protectedphp php$php_layoutphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isActionControllerSuccessfulphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layout
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Layoutphp php$layoutphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$layoutphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLayoutInstancephp(php$layoutphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Layout
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php php$layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$layoutphp)php php{
php php php php php php php php php php php php php$pluginClassphp php=php php$layoutphp-php>getPluginClassphp(php)php;
php php php php php php php php php php php php php$frontphp php=php php$thisphp-php>getFrontControllerphp(php)php;
php php php php php php php php php php php php ifphp php(php$frontphp-php>hasPluginphp(php$pluginClassphp)php)php php{
php php php php php php php php php php php php php php php php php$pluginphp php=php php$frontphp-php>getPluginphp(php$pluginClassphp)php;
php php php php php php php php php php php php php php php php php$pluginphp-php>setLayoutActionHelperphp(php$thisphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_isActionControllerSuccessfulphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp frontphp controllerphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_frontControllerphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Front
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_frontControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp layoutphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp getLayoutInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Layout
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$thisphp-php>php_layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_layoutphp php=php newphp Zendphp_Layoutphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_layoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layout
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutInstancephp(Zendphp_Layoutphp php$layoutphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layoutphp php=php php$layoutphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp Actionphp Controllerphp php(accordingphp tophp thisphp pluginphp)php asphp Runningphp successfully
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layout
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_isActionControllerSuccessfulphp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Didphp thephp previousphp actionphp successfullyphp completephp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isActionControllerSuccessfulphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isActionControllerSuccessfulphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Strategyphp patternphp;php callphp objectphp asphp method
php php php php php php*
php php php php php php*php Returnsphp layoutphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp directphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLayoutInstancephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp methodphp callsphp tophp layoutphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$layoutphp php=php php$thisphp-php>getLayoutInstancephp(php)php;
php php php php php php php php ifphp php(methodphp_existsphp(php$layoutphp,php php$methodphp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$layoutphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Layoutphp_Exceptionphp(sprintfphp(php"Invalidphp methodphp php'php%sphp'php calledphp onphp layoutphp actionphp helperphp"php,php php$methodphp)php)php;
php php php php php}
php}
