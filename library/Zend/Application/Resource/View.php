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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Viewphp.phpphp php2php2php9php6php5php php2php0php1php0php-php0php9php-php1php8php php1php7php:php4php5php:php5php1Zphp intiilapaphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp settingsphp viewphp options
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Viewphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_viewphp;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_View
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$viewphp php=php php$thisphp-php>getViewphp(php)php;

php php php php php php php php php$viewRendererphp php=php newphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp(php)php;
php php php php php php php php php$viewRendererphp-php>setViewphp(php$viewphp)php;
php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:addHelperphp(php$viewRendererphp)php;
php php php php php php php php returnphp php$viewphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp viewphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_View
php php php php php php*php/
php php php php publicphp functionphp getViewphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_viewphp php=php newphp Zendphp_Viewphp(php$optionsphp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'doctypephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_viewphp-php>doctypephp(php)php-php>setDoctypephp(strtoupperphp(php$optionsphp[php'doctypephp'php]php)php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'charsetphp'php]php)php php&php&php php$thisphp-php>php_viewphp-php>doctypephp(php)php-php>isHtmlphp5php(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_viewphp-php>headMetaphp(php)php-php>setCharsetphp(php$optionsphp[php'charsetphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'contentTypephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_viewphp-php>headMetaphp(php)php-php>appendHttpEquivphp(php'Contentphp-Typephp'php,php php$optionsphp[php'contentTypephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_viewphp;
php php php php php}
php}
