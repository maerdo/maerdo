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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Pluginphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_requestphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_responsephp;

php php php php php/php*php*
php php php php php php*php Setphp requestphp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp beginsphp evaluatingphp the
php php php php php php*php requestphp againstphp itsphp routesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp routeStartupphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Calledphp afterphp Zendphp_Controllerphp_Routerphp exitsphp.
php php php php php php*
php php php php php php*php Calledphp afterphp Zendphp_Controllerphp_Frontphp exitsphp fromphp thephp routerphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp routeShutdownphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp entersphp itsphp dispatchphp loopphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchLoopStartupphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Calledphp beforephp anphp actionphp isphp dispatchedphp byphp Zendphp_Controllerphp_Dispatcherphp.
php php php php php php*
php php php php php php*php Thisphp callbackphp allowsphp forphp proxyphp orphp filterphp behaviorphp.php php Byphp alteringphp the
php php php php php php*php requestphp andphp resettingphp itsphp dispatchedphp flagphp php(via
php php php php php php*php php{php@linkphp Zendphp_Controllerphp_Requestphp_Abstractphp:php:setDispatchedphp(php)php setDispatchedphp(falsephp)php}php)php,
php php php php php php*php thephp currentphp actionphp mayphp bephp skippedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp preDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Calledphp afterphp anphp actionphp isphp dispatchedphp byphp Zendphp_Controllerphp_Dispatcherphp.
php php php php php php*
php php php php php php*php Thisphp callbackphp allowsphp forphp proxyphp orphp filterphp behaviorphp.php Byphp alteringphp the
php php php php php php*php requestphp andphp resettingphp itsphp dispatchedphp flagphp php(via
php php php php php php*php php{php@linkphp Zendphp_Controllerphp_Requestphp_Abstractphp:php:setDispatchedphp(php)php setDispatchedphp(falsephp)php}php)php,
php php php php php php*php aphp newphp actionphp mayphp bephp specifiedphp forphp dispatchingphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp exitsphp itsphp dispatchphp loopphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchLoopShutdownphp(php)
php php php php php{php}
php}
