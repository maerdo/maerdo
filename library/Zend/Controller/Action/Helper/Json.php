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
php php*php php@versionphp php php php php$Idphp:php Jsonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

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
classphp Zendphp_Controllerphp_Actionphp_Helperphp_Jsonphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Suppressphp exitphp whenphp sendJsonphp(php)php called
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$suppressExitphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Createphp JSONphp response
php php php php php php*
php php php php php php*php Encodesphp andphp returnsphp dataphp tophp JSONphp.php Contentphp-Typephp headerphp setphp to
php php php php php php*php php'applicationphp/jsonphp'php,php andphp disablesphp layoutsphp andphp viewRendererphp php(ifphp being
php php php php php php*php usedphp)php.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$keepLayouts
php php php php php php*php php@paramphp php booleanphp|arrayphp php$keepLayouts
php php php php php php*php NOTEphp:php php php ifphp booleanphp,php establishphp php$keepLayoutsphp tophp truephp|false
php php php php php php*php php php php php php php php php ifphp arrayphp,php admitphp paramsphp forphp Zendphp_Jsonphp:php:encodephp asphp enableJsonExprFinderphp=php>truephp|false
php php php php php php*php php php php php php php php php ifphp php$keepLayoutsphp andphp parmasphp forphp Zendphp_Jsonphp:php:encodephp arephp required
php php php php php php*php php php php php php php php php thenphp,php thephp arrayphp canphp containsphp aphp php'keepLayoutphp'php=php>truephp|false
php php php php php php*php php php php php php php php php thatphp willphp notphp bephp passedphp tophp Zendphp_Jsonphp:php:encodephp methodphp butphp willphp bephp passed
php php php php php php*php php php php php php php php php tophp Zendphp_Viewphp_Helperphp_Json
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Helperphp_Json
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp encodeJsonphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Helperphp_Json
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Jsonphp.phpphp'php;
php php php php php php php php php$jsonHelperphp php=php newphp Zendphp_Viewphp_Helperphp_Jsonphp(php)php;
php php php php php php php php php$dataphp php=php php$jsonHelperphp-php>jsonphp(php$dataphp,php php$keepLayoutsphp)php;

php php php php php php php php ifphp php(php!php$keepLayoutsphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_HelperBroker
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php-php>setNoRenderphp(truephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp JSONphp responsephp andphp immediatelyphp send
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php$data
php php php php php php*php php@paramphp php booleanphp|arrayphp php$keepLayouts
php php php php php php*php NOTEphp:php php php ifphp booleanphp,php establishphp php$keepLayoutsphp tophp truephp|false
php php php php php php*php php php php php php php php php ifphp arrayphp,php admitphp paramsphp forphp Zendphp_Jsonphp:php:encodephp asphp enableJsonExprFinderphp=php>truephp|false
php php php php php php*php php php php php php php php php ifphp php$keepLayoutsphp andphp parmasphp forphp Zendphp_Jsonphp:php:encodephp arephp required
php php php php php php*php php php php php php php php php thenphp,php thephp arrayphp canphp containsphp aphp php'keepLayoutphp'php=php>truephp|false
php php php php php php*php php php php php php php php php thatphp willphp notphp bephp passedphp tophp Zendphp_Jsonphp:php:encodephp methodphp butphp willphp bephp passed
php php php php php php*php php php php php php php php php tophp Zendphp_Viewphp_Helperphp_Json
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp sendJsonphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>encodeJsonphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php php$responsephp-php>setBodyphp(php$dataphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>suppressExitphp)php php{
php php php php php php php php php php php php php$responsephp-php>sendResponsephp(php)php;
php php php php php php php php php php php php exitphp;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Strategyphp patternphp:php callphp helperphp asphp helperphp brokerphp method
php php php php php php*
php php php php php php*php Allowsphp encodingphp JSONphp.php Ifphp php$sendNowphp isphp truephp,php immediatelyphp sendsphp JSON
php php php php php php*php responsephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$sendNow
php php php php php php*php php@paramphp php booleanphp php$keepLayouts
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp directphp(php$dataphp,php php$sendNowphp php=php truephp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$sendNowphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>sendJsonphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>encodeJsonphp(php$dataphp,php php$keepLayoutsphp)php;
php php php php php}
php}
