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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Createphp andphp sendphp autocompletionphp lists
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompletephp_Abstractphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Suppressphp exitphp whenphp sendJsonphp(php)php called
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$suppressExitphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Validatephp autocompletionphp data
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp validateDataphp(php$dataphp)php;

php php php php php/php*php*
php php php php php php*php Preparephp autocompletionphp data
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$keepLayouts
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp publicphp functionphp prepareAutoCompletionphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)php;

php php php php php/php*php*
php php php php php php*php Disablephp layoutsphp andphp viewphp renderer
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompletephp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp disableLayoutsphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Layout
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php)php)php php{
php php php php php php php php php php php php php$layoutphp-php>disableLayoutphp(php)php;
php php php php php php php php php}

php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php-php>setNoRenderphp(truephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp dataphp tophp JSON
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php boolphp php php$keepLayouts
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp encodeJsonphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>validateDataphp(php$dataphp)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'Jsonphp'php)php-php>encodeJsonphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Invalidphp dataphp passedphp forphp autocompletionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp autocompletionphp data
php php php php php php*
php php php php php php*php Callsphp prepareAutoCompletionphp,php populatesphp responsephp bodyphp withphp this
php php php php php php*php informationphp,php andphp sendsphp responsephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php boolphp php php$keepLayouts
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp sendAutoCompletionphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>prepareAutoCompletionphp(php$dataphp,php php$keepLayoutsphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php php$responsephp-php>setBodyphp(php$dataphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>suppressExitphp)php php{
php php php php php php php php php php php php php$responsephp-php>sendResponsephp(php)php;
php php php php php php php php php php php php exitphp;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Strategyphp patternphp:php allowphp callingphp helperphp asphp brokerphp method
php php php php php php*
php php php php php php*php Preparesphp autocompletionphp dataphp andphp,php ifphp php$sendNowphp isphp truephp,php immediatelyphp sends
php php php php php php*php responsephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php boolphp php php$sendNow
php php php php php php*php php@paramphp php boolphp php php$keepLayouts
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp directphp(php$dataphp,php php$sendNowphp php=php truephp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$sendNowphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>sendAutoCompletionphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>prepareAutoCompletionphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php}
php}
