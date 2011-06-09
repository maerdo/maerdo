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
php php*php Handlephp exceptionsphp thatphp bubblephp upphp basedphp onphp missingphp controllersphp,php actionsphp,php or
php php*php applicationphp errorsphp,php andphp forwardphp tophp anphp errorphp handlerphp.
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Pluginphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ErrorHandlerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Constphp php-php Nophp controllerphp exceptionphp;php controllerphp doesphp notphp exist
php php php php php php*php/
php php php php constphp EXCEPTIONphp_NOphp_CONTROLLERphp php=php php'EXCEPTIONphp_NOphp_CONTROLLERphp'php;

php php php php php/php*php*
php php php php php php*php Constphp php-php Nophp actionphp exceptionphp;php controllerphp existsphp,php butphp actionphp doesphp not
php php php php php php*php/
php php php php constphp EXCEPTIONphp_NOphp_ACTIONphp php=php php'EXCEPTIONphp_NOphp_ACTIONphp'php;

php php php php php/php*php*
php php php php php php*php Constphp php-php Nophp routephp exceptionphp;php nophp routingphp wasphp possible
php php php php php php*php/
php php php php constphp EXCEPTIONphp_NOphp_ROUTEphp php=php php'EXCEPTIONphp_NOphp_ROUTEphp'php;

php php php php php/php*php*
php php php php php php*php Constphp php-php Otherphp Exceptionphp;php exceptionsphp thrownphp byphp applicationphp controllers
php php php php php php*php/
php php php php constphp EXCEPTIONphp_OTHERphp php=php php'EXCEPTIONphp_OTHERphp'php;

php php php php php/php*php*
php php php php php php*php Modulephp tophp usephp forphp errorsphp;php defaultsphp tophp defaultphp modulephp inphp dispatcher
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errorModulephp;

php php php php php/php*php*
php php php php php php*php Controllerphp tophp usephp forphp errorsphp;php defaultsphp tophp php'errorphp'
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errorControllerphp php=php php'errorphp'php;

php php php php php/php*php*
php php php php php php*php Actionphp tophp usephp forphp errorsphp;php defaultsphp tophp php'errorphp'
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errorActionphp php=php php'errorphp'php;

php php php php php/php*php*
php php php php php php*php Flagphp;php arephp wephp alreadyphp insidephp thephp errorphp handlerphp loopphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isInsideErrorHandlerLoopphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Exceptionphp countphp loggedphp atphp firstphp invocationphp ofphp plugin
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_exceptionCountAtFirstEncounterphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Optionsphp mayphp includephp:
php php php php php php*php php-php module
php php php php php php*php php-php controller
php php php php php php*php php-php action
php php php php php php*
php php php php php php*php php@paramphp php Arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setErrorHandlerphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setErrorHandlerphp(php)php php-php setupphp thephp errorphp handlingphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ErrorHandler
php php php php php php*php/
php php php php publicphp functionphp setErrorHandlerphp(Arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'modulephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setErrorHandlerModulephp(php$optionsphp[php'modulephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'controllerphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setErrorHandlerControllerphp(php$optionsphp[php'controllerphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'actionphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setErrorHandlerActionphp(php$optionsphp[php'actionphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp modulephp namephp forphp thephp errorphp handler
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ErrorHandler
php php php php php php*php/
php php php php publicphp functionphp setErrorHandlerModulephp(php$modulephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorModulephp php=php php(stringphp)php php$modulephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp errorphp handlerphp module
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorHandlerModulephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_errorModulephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorModulephp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getDispatcherphp(php)php-php>getDefaultModulephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_errorModulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp controllerphp namephp forphp thephp errorphp handler
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ErrorHandler
php php php php php php*php/
php php php php publicphp functionphp setErrorHandlerControllerphp(php$controllerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorControllerphp php=php php(stringphp)php php$controllerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp errorphp handlerphp controller
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorHandlerControllerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp actionphp namephp forphp thephp errorphp handler
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ErrorHandler
php php php php php php*php/
php php php php publicphp functionphp setErrorHandlerActionphp(php$actionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorActionphp php=php php(stringphp)php php$actionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp errorphp handlerphp action
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorHandlerActionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorActionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Routephp shutdownphp hookphp php-php-php Ccheckphp forphp routerphp exceptions
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp routeShutdownphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_handleErrorphp(php$requestphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Postphp dispatchphp hookphp php-php-php checkphp forphp exceptionsphp andphp dispatchphp errorphp handlerphp if
php php php php php php*php necessary
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_handleErrorphp(php$requestphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp errorsphp andphp exceptions
php php php php php php*
php php php php php php*php Ifphp thephp php'noErrorHandlerphp'php frontphp controllerphp flagphp hasphp beenphp setphp,
php php php php php php*php returnsphp earlyphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_handleErrorphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php$frontControllerphp-php>getParamphp(php'noErrorHandlerphp'php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_isInsideErrorHandlerLoopphp)php php{
php php php php php php php php php php php php php$exceptionsphp php=php php$responsephp-php>getExceptionphp(php)php;
php php php php php php php php php php php php ifphp php(countphp(php$exceptionsphp)php php>php php$thisphp-php>php_exceptionCountAtFirstEncounterphp)php php{
php php php php php php php php php php php php php php php php php/php/php Exceptionphp thrownphp byphp errorphp handlerphp;php tellphp thephp frontphp controllerphp tophp throwphp it
php php php php php php php php php php php php php php php php php$frontControllerphp-php>throwExceptionsphp(truephp)php;
php php php php php php php php php php php php php php php php throwphp arrayphp_popphp(php$exceptionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php checkphp forphp anphp exceptionphp ANDphp allowphp thephp errorphp handlerphp controllerphp thephp optionphp tophp forward
php php php php php php php php ifphp php(php(php$responsephp-php>isExceptionphp(php)php)php php&php&php php(php!php$thisphp-php>php_isInsideErrorHandlerLoopphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isInsideErrorHandlerLoopphp php=php truephp;

php php php php php php php php php php php php php/php/php Getphp exceptionphp information
php php php php php php php php php php php php php$errorphp php php php php php php php php php php php php=php newphp ArrayObjectphp(arrayphp(php)php,php ArrayObjectphp:php:ARRAYphp_ASphp_PROPSphp)php;
php php php php php php php php php php php php php$exceptionsphp php php php php php php php=php php$responsephp-php>getExceptionphp(php)php;
php php php php php php php php php php php php php$exceptionphp php php php php php php php php=php php$exceptionsphp[php0php]php;
php php php php php php php php php php php php php$exceptionTypephp php php php php=php getphp_classphp(php$exceptionphp)php;
php php php php php php php php php php php php php$errorphp-php>exceptionphp php=php php$exceptionphp;
php php php php php php php php php php php php switchphp php(php$exceptionTypephp)php php{
php php php php php php php php php php php php php php php php casephp php'Zendphp_Controllerphp_Routerphp_Exceptionphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php4php0php4php php=php=php php$exceptionphp-php>getCodephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_NOphp_ROUTEphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_OTHERphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'Zendphp_Controllerphp_Dispatcherphp_Exceptionphp'php:
php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_NOphp_CONTROLLERphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'Zendphp_Controllerphp_Actionphp_Exceptionphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php4php0php4php php=php=php php$exceptionphp-php>getCodephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_NOphp_ACTIONphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_OTHERphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$errorphp-php>typephp php=php selfphp:php:EXCEPTIONphp_OTHERphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Keepphp aphp copyphp ofphp thephp originalphp request
php php php php php php php php php php php php php$errorphp-php>requestphp php=php clonephp php$requestphp;

php php php php php php php php php php php php php/php/php getphp aphp countphp ofphp thephp numberphp ofphp exceptionsphp encountered
php php php php php php php php php php php php php$thisphp-php>php_exceptionCountAtFirstEncounterphp php=php countphp(php$exceptionsphp)php;

php php php php php php php php php php php php php/php/php Forwardphp tophp thephp errorphp handler
php php php php php php php php php php php php php$requestphp-php>setParamphp(php'errorphp_handlerphp'php,php php$errorphp)
php php php php php php php php php php php php php php php php php php php php php-php>setModuleNamephp(php$thisphp-php>getErrorHandlerModulephp(php)php)
php php php php php php php php php php php php php php php php php php php php php-php>setControllerNamephp(php$thisphp-php>getErrorHandlerControllerphp(php)php)
php php php php php php php php php php php php php php php php php php php php php-php>setActionNamephp(php$thisphp-php>getErrorHandlerActionphp(php)php)
php php php php php php php php php php php php php php php php php php php php php-php>setDispatchedphp(falsephp)php;
php php php php php php php php php}
php php php php php}
php}
