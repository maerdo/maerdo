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
php php*php php@versionphp php php php php$Idphp:php AjaxContextphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitch
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/ContextSwitchphp.phpphp'php;

php/php*php*
php php*php Simplifyphp AJAXphp contextphp switchingphp basedphp onphp requestedphp format
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_AjaxContextphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitch
php{
php php php php php/php*php*
php php php php php php*php Controllerphp propertyphp tophp utilizephp forphp contextphp switching
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contextKeyphp php=php php'ajaxablephp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Addphp HTMLphp context
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;
php php php php php php php php php$thisphp-php>addContextphp(php'htmlphp'php,php arrayphp(php'suffixphp'php php=php>php php'ajaxphp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp AJAXphp contextphp switching
php php php php php php*
php php php php php php*php Checksphp forphp XHRphp requestsphp;php ifphp detectedphp,php attemptsphp tophp performphp contextphp switchphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initContextphp(php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentContextphp php=php nullphp;

php php php php php php php php ifphp php(php!php$thisphp-php>getRequestphp(php)php-php>isXmlHttpRequestphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:initContextphp(php$formatphp)php;
php php php php php}
php}
