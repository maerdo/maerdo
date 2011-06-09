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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Actionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp renderingphp outputphp ofphp aphp controllerphp action
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Actionphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$defaultModulephp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp php$dispatcherphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp php$requestphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp php$responsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Grabphp localphp copiesphp ofphp variousphp MVCphp objects
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$frontphp php php php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php$modulesphp php=php php$frontphp-php>getControllerDirectoryphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$modulesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Actionphp helperphp dependsphp onphp validphp frontphp controllerphp instancephp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$requestphp php php=php php$frontphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$frontphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(emptyphp(php$requestphp)php php|php|php emptyphp(php$responsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Actionphp viewphp helperphp requiresphp bothphp aphp registeredphp requestphp andphp responsephp objectphp inphp thephp frontphp controllerphp instancephp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>requestphp php php php php php php php=php clonephp php$requestphp;
php php php php php php php php php$thisphp-php>responsephp php php php php php php=php clonephp php$responsephp;
php php php php php php php php php$thisphp-php>dispatcherphp php php php php=php clonephp php$frontphp-php>getDispatcherphp(php)php;
php php php php php php php php php$thisphp-php>defaultModulephp php=php php$frontphp-php>getDefaultModulephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp objectphp states
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp resetObjectsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php php$thisphp-php>requestphp-php>getUserParamsphp(php)php;
php php php php php php php php foreachphp php(arrayphp_keysphp(php$paramsphp)php asphp php$keyphp)php php{
php php php php php php php php php php php php php$thisphp-php>requestphp-php>setParamphp(php$keyphp,php nullphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>responsephp-php>clearBodyphp(php)php;
php php php php php php php php php$thisphp-php>responsephp-php>clearHeadersphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php-php>clearRawHeadersphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp renderedphp contentsphp ofphp aphp controllerphp action
php php php php php php*
php php php php php php*php Ifphp thephp actionphp resultsphp inphp aphp forwardphp orphp redirectphp,php returnsphp emptyphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$modulephp Defaultsphp tophp defaultphp module
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp actionphp(php$actionphp,php php$controllerphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>resetObjectsphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$modulephp php=php php$thisphp-php>defaultModulephp;
php php php php php php php php php}

php php php php php php php php php/php/php clonephp thephp viewphp objectphp tophp preventphp overphp-writingphp ofphp viewphp variables
php php php php php php php php php$viewRendererObjphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:addHelperphp(clonephp php$viewRendererObjphp)php;

php php php php php php php php php$thisphp-php>requestphp-php>setParamsphp(php$paramsphp)
php php php php php php php php php php php php php php php php php php php php php php php-php>setModuleNamephp(php$modulephp)
php php php php php php php php php php php php php php php php php php php php php php php-php>setControllerNamephp(php$controllerphp)
php php php php php php php php php php php php php php php php php php php php php php php-php>setActionNamephp(php$actionphp)
php php php php php php php php php php php php php php php php php php php php php php php-php>setDispatchedphp(truephp)php;

php php php php php php php php php$thisphp-php>dispatcherphp-php>dispatchphp(php$thisphp-php>requestphp,php php$thisphp-php>responsephp)php;

php php php php php php php php php/php/php resetphp thephp viewRendererphp objectphp tophp itphp'sphp originalphp state
php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:addHelperphp(php$viewRendererObjphp)php;


php php php php php php php php ifphp php(php!php$thisphp-php>requestphp-php>isDispatchedphp(php)
php php php php php php php php php php php php php|php|php php$thisphp-php>responsephp-php>isRedirectphp(php)php)
php php php php php php php php php{
php php php php php php php php php php php php php/php/php forwardsphp andphp redirectsphp renderphp nothing
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$thisphp-php>responsephp-php>getBodyphp(php)php;
php php php php php php php php php$thisphp-php>resetObjectsphp(php)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp thephp currentphp View
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp functionphp cloneViewphp(php)
php php php php php{
php php php php php php php php php$viewphp php=php clonephp php$thisphp-php>viewphp;
php php php php php php php php php$viewphp-php>clearVarsphp(php)php;
php php php php php php php php returnphp php$viewphp;
php php php php php}
php}
