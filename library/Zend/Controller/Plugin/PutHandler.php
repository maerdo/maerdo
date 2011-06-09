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
php php*php php@subpackagephp Zendphp_Controllerphp_Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PutHandlerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Pluginphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Requestphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Httpphp.phpphp'php;

php/php*php*
php php*php Pluginphp tophp digestphp PUTphp requestphp bodyphp andphp makephp paramsphp availablephp justphp likephp POST
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Pluginphp_PutHandlerphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Beforephp dispatchingphp,php digestphp PUTphp requestphp bodyphp andphp setphp params
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp preDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_requestphp-php>isPutphp(php)php)php php{
php php php php php php php php php php php php php$putParamsphp php=php arrayphp(php)php;
php php php php php php php php php php php php parsephp_strphp(php$thisphp-php>php_requestphp-php>getRawBodyphp(php)php,php php$putParamsphp)php;
php php php php php php php php php php php php php$requestphp-php>setParamsphp(php$putParamsphp)php;
php php php php php php php php php}
php php php php php}
php}
