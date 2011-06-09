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
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Pluginphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Renderphp layouts
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Pluginphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Layoutphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Layoutphp_Controllerphp_Pluginphp_Layoutphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstract
php{
php php php php protectedphp php$php_layoutActionHelperphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Layout
php php php php php php*php/
php php php php protectedphp php$php_layoutphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layout
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Layoutphp php$layoutphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$layoutphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLayoutphp(php$layoutphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp layoutphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp getLayoutphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layout
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Pluginphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutphp(Zendphp_Layoutphp php$layoutphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layoutphp php=php php$layoutphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp actionphp helper
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layoutphp php$layoutActionHelper
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Pluginphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutActionHelperphp(Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layoutphp php$layoutActionHelperphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layoutActionHelperphp php=php php$layoutActionHelperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp layoutphp actionphp helper
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layout
php php php php php php*php/
php php php php publicphp functionphp getLayoutActionHelperphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layoutActionHelperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php postDispatchphp(php)php pluginphp hookphp php-php-php renderphp layout
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$layoutphp php=php php$thisphp-php>getLayoutphp(php)php;
php php php php php php php php php$helperphp php=php php$thisphp-php>getLayoutActionHelperphp(php)php;

php php php php php php php php php/php/php Returnphp earlyphp ifphp forwardphp detected
php php php php php php php php ifphp php(php!php$requestphp-php>isDispatchedphp(php)
php php php php php php php php php php php php php|php|php php$thisphp-php>getResponsephp(php)php-php>isRedirectphp(php)
php php php php php php php php php php php php php|php|php php(php$layoutphp-php>getMvcSuccessfulActionOnlyphp(php)
php php php php php php php php php php php php php php php php php&php&php php(php!emptyphp(php$helperphp)php php&php&php php!php$helperphp-php>isActionControllerSuccessfulphp(php)php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp earlyphp ifphp layoutphp hasphp beenphp disabled
php php php php php php php php ifphp php(php!php$layoutphp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php php php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php php$contentphp php php php php=php php$responsephp-php>getBodyphp(truephp)php;
php php php php php php php php php$contentKeyphp php=php php$layoutphp-php>getContentKeyphp(php)php;

php php php php php php php php ifphp php(issetphp(php$contentphp[php'defaultphp'php]php)php)php php{
php php php php php php php php php php php php php$contentphp[php$contentKeyphp]php php=php php$contentphp[php'defaultphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php'defaultphp'php php!php=php php$contentKeyphp)php php{
php php php php php php php php php php php php unsetphp(php$contentphp[php'defaultphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$layoutphp-php>assignphp(php$contentphp)php;

php php php php php php php php php$fullContentphp php=php nullphp;
php php php php php php php php php$obStartLevelphp php=php obphp_getphp_levelphp(php)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fullContentphp php=php php$layoutphp-php>renderphp(php)php;
php php php php php php php php php php php php php$responsephp-php>setBodyphp(php$fullContentphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php whilephp php(obphp_getphp_levelphp(php)php php>php php$obStartLevelphp)php php{
php php php php php php php php php php php php php php php php php$fullContentphp php.php=php obphp_getphp_cleanphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$requestphp-php>setParamphp(php'layoutFullContentphp'php,php php$fullContentphp)php;
php php php php php php php php php php php php php$requestphp-php>setParamphp(php'layoutContentphp'php,php php$layoutphp-php>contentphp)php;
php php php php php php php php php php php php php$responsephp-php>setBodyphp(nullphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php}
php}
