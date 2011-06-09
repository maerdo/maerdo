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
php php*php php@versionphp php php php php$Idphp:php Redirectorphp.phpphp php2php3php2php4php8php php2php0php1php0php-php1php0php-php2php6php php1php2php:php4php5php:php5php2Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php HTTPphp statusphp codephp forphp redirects
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_codephp php=php php3php0php2php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp callsphp tophp php_redirectphp(php)php shouldphp exitphp scriptphp execution
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_exitphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp php_redirectphp(php)php shouldphp attemptphp tophp prependphp thephp basephp URLphp tophp the
php php php php php php*php passedphp URLphp php(ifphp itphp'sphp aphp relativephp URLphp)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_prependBasephp php=php truephp;

php php php php php/php*php*
php php php php php php*php Urlphp tophp whichphp tophp redirect
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_redirectUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp usephp anphp absolutephp URIphp whenphp redirecting
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useAbsoluteUriphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp closephp thephp sessionphp beforephp exiting
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_closeSessionOnExitphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Retrievephp HTTPphp statusphp codephp tophp emitphp onphp php{php@linkphp php_redirectphp(php)php}php call
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_codephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp HTTPphp statusphp redirectphp code
php php php php php php*
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exceptionphp onphp invalidphp HTTPphp statusphp code
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php protectedphp functionphp php_checkCodephp(php$codephp)
php php php php php{
php php php php php php php php php$codephp php=php php(intphp)php$codephp;
php php php php php php php php ifphp php(php(php3php0php0php php>php php$codephp)php php|php|php php(php3php0php7php <php php$codephp)php php|php|php php(php3php0php4php php=php=php php$codephp)php php|php|php php(php3php0php6php php=php=php php$codephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Invalidphp redirectphp HTTPphp statusphp codephp php(php'php php.php php$codephp php php.php php'php)php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp HTTPphp statusphp codephp forphp php{php@linkphp php_redirectphp(php)php}php behaviour
php php php php php php*
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCodephp(php$codephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkCodephp(php$codephp)php;
php php php php php php php php php$thisphp-php>php_codephp php=php php$codephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp flagphp forphp whetherphp orphp notphp php{php@linkphp php_redirectphp(php)php}php willphp exitphp whenphp finishedphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getExitphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_exitphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp exitphp flagphp forphp php{php@linkphp php_redirectphp(php)php}php behaviour
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setExitphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_exitphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp flagphp forphp whetherphp orphp notphp php{php@linkphp php_redirectphp(php)php}php willphp prependphp the
php php php php php php*php basephp URLphp onphp relativephp URLs
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getPrependBasephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_prependBasephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp php'prependphp basephp'php flagphp forphp php{php@linkphp php_redirectphp(php)php}php behaviour
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setPrependBasephp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prependBasephp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp flagphp forphp whetherphp orphp notphp php{php@linkphp redirectAndExitphp(php)php}php shallphp closephp thephp sessionphp before
php php php php php php*php exitingphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getCloseSessionOnExitphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_closeSessionOnExitphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp forphp whetherphp orphp notphp php{php@linkphp redirectAndExitphp(php)php}php shallphp closephp thephp sessionphp beforephp exitingphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCloseSessionOnExitphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_closeSessionOnExitphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp usephp absolutephp URIphp flag
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getUseAbsoluteUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_useAbsoluteUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp usephp absolutephp URIphp flag
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Redirectorphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setUseAbsoluteUriphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_useAbsoluteUriphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp redirectphp inphp responsephp object
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_redirectphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getUseAbsoluteUriphp(php)php php&php&php php!pregphp_matchphp(php'php#php^php(httpsphp?php|ftpphp)php:php/php/php#php'php,php php$urlphp)php)php php{
php php php php php php php php php php php php php$hostphp php php=php php(issetphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php?php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php:php'php'php)php;
php php php php php php php php php php php php php$protophp php=php php(issetphp(php$php_SERVERphp[php'HTTPSphp'php]php)php&php&php$php_SERVERphp[php'HTTPSphp'php]php!php=php=php"offphp"php)php php?php php'httpsphp'php php:php php'httpphp'php;
php php php php php php php php php php php php php$portphp php php=php php(issetphp(php$php_SERVERphp[php'SERVERphp_PORTphp'php]php)php?php$php_SERVERphp[php'SERVERphp_PORTphp'php]php:php8php0php)php;
php php php php php php php php php php php php php$uriphp php php php=php php$protophp php.php php'php:php/php/php'php php.php php$hostphp;
php php php php php php php php php php php php ifphp php(php(php(php'httpphp'php php=php=php php$protophp)php php&php&php php(php8php0php php!php=php php$portphp)php)php php|php|php php(php(php'httpsphp'php php=php=php php$protophp)php php&php&php php(php4php4php3php php!php=php php$portphp)php)php)php php{
php php php php php php php php php php php php php php php php php/php/php dophp notphp appendphp ifphp HTTPphp_HOSTphp alreadyphp containsphp port
php php php php php php php php php php php php php php php php ifphp php(strrchrphp(php$hostphp,php php'php:php'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$uriphp php.php=php php'php:php'php php.php php$portphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$urlphp php=php php$uriphp php.php php'php/php'php php.php ltrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_redirectUrlphp php=php php$urlphp;
php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setRedirectphp(php$urlphp,php php$thisphp-php>getCodephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentlyphp setphp URLphp forphp redirect
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRedirectUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_redirectUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp thephp baseUrlphp shouldphp bephp prependedphp,php andphp prependphp ifphp necessary
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_prependBasephp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getPrependBasephp(php)php)php php{
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php php php php ifphp php(php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php php{
php php php php php php php php php php php php php php php php php$basephp php=php rtrimphp(php$requestphp-php>getBaseUrlphp(php)php,php php'php/php'php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$basephp)php php&php&php php(php'php/php'php php!php=php php$basephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$urlphp php=php php$basephp php.php php'php/php'php php.php ltrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php ltrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp redirectphp URLphp ofphp thephp formphp php/modulephp/controllerphp/actionphp/params
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setGotoSimplephp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php;
php php php php php php php php php$requestphp php php php php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$curModulephp php php=php php$requestphp-php>getModuleNamephp(php)php;
php php php php php php php php php$useDefaultControllerphp php=php falsephp;

php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp php&php&php nullphp php!php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$useDefaultControllerphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$modulephp php=php php$curModulephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$modulephp php=php=php php$dispatcherphp-php>getDefaultModulephp(php)php)php php{
php php php php php php php php php php php php php$modulephp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp php&php&php php!php$useDefaultControllerphp)php php{
php php php php php php php php php php php php php$controllerphp php=php php$requestphp-php>getControllerNamephp(php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$controllerphp)php)php php{
php php php php php php php php php php php php php php php php php$controllerphp php=php php$dispatcherphp-php>getDefaultControllerNamephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'modulephp'php]php php php php php php=php php$modulephp;
php php php php php php php php php$paramsphp[php'controllerphp'php]php php=php php$controllerphp;
php php php php php php php php php$paramsphp[php'actionphp'php]php php php php php php=php php$actionphp;

php php php php php php php php php$routerphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getRouterphp(php)php;
php php php php php php php php php$urlphp php php php php=php php$routerphp-php>assemblephp(php$paramsphp,php php'defaultphp'php,php truephp)php;

php php php php php php php php php$thisphp-php>php_redirectphp(php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp aphp URLphp basedphp onphp aphp route
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$urlOptions
php php php php php php*php php@paramphp php stringphp php php$namephp Routephp name
php php php php php php*php php@paramphp php booleanphp php$reset
php php php php php php*php php@paramphp php booleanphp php$encode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setGotoRoutephp(arrayphp php$urlOptionsphp php=php arrayphp(php)php,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php php$routerphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getRouterphp(php)php;
php php php php php php php php php$urlphp php php php php=php php$routerphp-php>assemblephp(php$urlOptionsphp,php php$namephp,php php$resetphp,php php$encodephp)php;

php php php php php php php php php$thisphp-php>php_redirectphp(php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp redirectphp URLphp string
php php php php php php*
php php php php php php*php Byphp defaultphp,php emitsphp aphp php3php0php2php HTTPphp statusphp headerphp,php prependsphp basephp URLphp asphp defined
php php php php php php*php inphp requestphp objectphp ifphp urlphp isphp relativephp,php andphp haltsphp scriptphp executionphp by
php php php php php php*php callingphp exitphp(php)php.
php php php php php php*
php php php php php php*php php$optionsphp isphp anphp optionalphp associativephp arrayphp thatphp canphp bephp usedphp tophp control
php php php php php php*php redirectphp behaviourphp.php Thephp availablephp optionphp keysphp arephp:
php php php php php php*php php-php exitphp:php booleanphp flagphp indicatingphp whetherphp orphp notphp tophp haltphp scriptphp executionphp whenphp done
php php php php php php*php php-php prependBasephp:php booleanphp flagphp indicatingphp whetherphp orphp notphp tophp prependphp thephp basephp URLphp whenphp aphp relativephp URLphp isphp provided
php php php php php php*php php-php codephp:php integerphp HTTPphp statusphp codephp tophp usephp withphp redirectphp.php Shouldphp bephp betweenphp php3php0php0php andphp php3php0php7php.
php php php php php php*
php php php php php php*php php_redirectphp(php)php setsphp thephp Locationphp headerphp inphp thephp responsephp objectphp.php Ifphp youphp set
php php php php php php*php thephp exitphp flagphp tophp falsephp,php youphp canphp overridephp thisphp headerphp laterphp inphp code
php php php php php php*php executionphp.
php php php php php php*
php php php php php php*php Ifphp thephp exitphp flagphp isphp truephp php(truephp byphp defaultphp)php,php php_redirectphp(php)php willphp writephp and
php php php php php php*php closephp thephp currentphp sessionphp,php ifphp anyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setGotoUrlphp(php$urlphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php preventphp headerphp injections
php php php php php php php php php$urlphp php=php strphp_replacephp(arrayphp(php"php\nphp"php,php php"php\rphp"php)php,php php'php'php,php php$urlphp)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'exitphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setExitphp(php(php$optionsphp[php'exitphp'php]php)php php?php truephp php:php falsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'prependBasephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setPrependBasephp(php(php$optionsphp[php'prependBasephp'php]php)php php?php truephp php:php falsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'codephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setCodephp(php$optionsphp[php'codephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp relativephp URLphp,php decidephp ifphp wephp shouldphp prependphp basephp URL
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php|php^php[aphp-zphp]php+php:php/php/php|php'php,php php$urlphp)php)php php{
php php php php php php php php php php php php php$urlphp php=php php$thisphp-php>php_prependBasephp(php$urlphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_redirectphp(php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp aphp redirectphp tophp anphp actionphp/controllerphp/modulephp withphp params
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoSimplephp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoSimplephp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>getExitphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp aphp redirectphp tophp anphp actionphp/controllerphp/modulephp withphp paramsphp,php forcingphp anphp immdiatephp exit
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$action
php php php php php php*php php@paramphp php mixedphp php$controller
php php php php php php*php php@paramphp php mixedphp php$module
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoSimpleAndExitphp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoSimplephp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;
php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Redirectphp tophp aphp routephp-basedphp URL
php php php php php php*
php php php php php php*php Usesphp routephp'sphp assemblephp methodphp tobuildphp thephp URLphp;php routephp isphp specifiedphp byphp php$namephp;
php php php php php php*php defaultphp routephp isphp usedphp ifphp nonephp providedphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$urlOptionsphp Arrayphp ofphp keyphp/valuephp pairsphp usedphp tophp assemblephp URL
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php booleanphp php$reset
php php php php php php*php php@paramphp php booleanphp php$encode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoRoutephp(arrayphp php$urlOptionsphp php=php arrayphp(php)php,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoRoutephp(php$urlOptionsphp,php php$namephp,php php$resetphp,php php$encodephp)php;

php php php php php php php php ifphp php(php$thisphp-php>getExitphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Redirectphp tophp aphp routephp-basedphp URLphp,php andphp immediatelyphp exit
php php php php php php*
php php php php php php*php Usesphp routephp'sphp assemblephp methodphp tobuildphp thephp URLphp;php routephp isphp specifiedphp byphp php$namephp;
php php php php php php*php defaultphp routephp isphp usedphp ifphp nonephp providedphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$urlOptionsphp Arrayphp ofphp keyphp/valuephp pairsphp usedphp tophp assemblephp URL
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php booleanphp php$reset
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoRouteAndExitphp(arrayphp php$urlOptionsphp php=php arrayphp(php)php,php php$namephp php=php nullphp,php php$resetphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoRoutephp(php$urlOptionsphp,php php$namephp,php php$resetphp)php;
php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp aphp redirectphp tophp aphp url
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoUrlphp(php$urlphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoUrlphp(php$urlphp,php php$optionsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>getExitphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp URLphp stringphp forphp aphp redirectphp,php performphp redirectphp,php andphp immediatelyphp exit
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp gotoUrlAndExitphp(php$urlphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setGotoUrlphp(php$urlphp,php php$optionsphp)php;
php php php php php php php php php$thisphp-php>redirectAndExitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php exitphp(php)php:php Performphp exitphp forphp redirector
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp redirectAndExitphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getCloseSessionOnExitphp(php)php)php php{
php php php php php php php php php php php php php/php/php Closephp sessionphp,php ifphp started
php php php php php php php php php php php php ifphp php(classphp_existsphp(php'Zendphp_Sessionphp'php,php falsephp)php php&php&php Zendphp_Sessionphp:php:isStartedphp(php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Sessionphp:php:writeClosephp(php)php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SESSIONphp)php)php php{
php php php php php php php php php php php php php php php php sessionphp_writephp_closephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>sendHeadersphp(php)php;
php php php php php php php php exitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php directphp(php)php:php Performphp helperphp whenphp calledphp as
php php php php php php*php php$thisphp-php>php_helperphp-php>redirectorphp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp directphp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>gotoSimplephp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloading
php php php php php php*
php php php php php php*php Overloadingphp forphp oldphp php'gotophp'php,php php'setGotophp'php,php andphp php'gotoAndExitphp'php methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exceptionphp forphp invalidphp methods
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$methodphp php=php strtolowerphp(php$methodphp)php;
php php php php php php php php ifphp php(php'gotophp'php php=php=php php$methodphp)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp,php php'gotoSimplephp'php)php,php php$argsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php'setgotophp'php php=php=php php$methodphp)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp,php php'setGotoSimplephp'php)php,php php$argsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php'gotoandexitphp'php php=php=php php$methodphp)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp,php php'gotoSimpleAndExitphp'php)php,php php$argsphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Invalidphp methodphp php"php%sphp"php calledphp onphp redirectorphp'php,php php$methodphp)php)php;
php php php php php}
php}
