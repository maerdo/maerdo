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
php php*php php@versionphp php php php php$Idphp:php AutoCompleteDojophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompletephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/AutoCompletephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Createphp andphp sendphp Dojophp-compatiblephp autocompletionphp lists
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompletephp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompleteDojophp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_AutoCompletephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Validatephp dataphp forphp autocompletion
php php php php php php*
php php php php php php*php Stubphp;php unused
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validateDataphp(php$dataphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp dataphp forphp autocompletion
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$keepLayouts
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp prepareAutoCompletionphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$dataphp instanceofphp Zendphp_Dojophp_Dataphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Dataphp.phpphp'php;
php php php php php php php php php php php php php$itemsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$itemsphp[php]php php=php arrayphp(php'labelphp'php php=php>php php$valuephp,php php'namephp'php php=php>php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dataphp php=php newphp Zendphp_Dojophp_Dataphp(php'namephp'php,php php$itemsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$keepLayoutsphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php-php>setNoRenderphp(truephp)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php php$layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php;
php php php php php php php php php php php php ifphp php(php$layoutphp instanceofphp Zendphp_Layoutphp)php php{
php php php php php php php php php php php php php php php php php$layoutphp-php>disableLayoutphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$responsephp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getResponsephp(php)php;
php php php php php php php php php$responsephp-php>setHeaderphp(php'Contentphp-Typephp'php,php php'applicationphp/jsonphp'php)php;

php php php php php php php php returnphp php$dataphp-php>toJsonphp(php)php;
php php php php php}
php}
