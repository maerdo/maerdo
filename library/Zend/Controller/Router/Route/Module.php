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
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Modulephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Modulephp Route
php php*
php php*php Defaultphp routephp forphp modulephp functionality
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@seephp php php php php php php php httpphp:php/php/manualsphp.rubyonrailsphp.comphp/readphp/chapterphp/php6php5
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Routephp_Modulephp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php URIphp delimiter
php php php php php php*php/
php php php php constphp URIphp_DELIMITERphp php=php php'php/php'php;

php php php php php/php*php*
php php php php php php*php Defaultphp valuesphp forphp thephp routephp php(iephp.php modulephp,php controllerphp,php actionphp,php paramsphp)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultsphp;

php php php php protectedphp php$php_valuesphp php php php php php php=php arrayphp(php)php;
php php php php protectedphp php$php_moduleValidphp php=php falsephp;
php php php php protectedphp php$php_keysSetphp php php php php php=php falsephp;

php php php php php/php*php*php#php@php+
php php php php php php*php Arrayphp keysphp tophp usephp forphp modulephp,php controllerphp,php andphp actionphp.php Shouldphp bephp takenphp outphp ofphp requestphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleKeyphp php php php php php=php php'modulephp'php;
php php php php protectedphp php$php_controllerKeyphp php=php php'controllerphp'php;
php php php php protectedphp php$php_actionKeyphp php php php php php=php php'actionphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_dispatcherphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_requestphp;

php php php php publicphp functionphp getVersionphp(php)php php{
php php php php php php php php returnphp php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Instantiatesphp routephp basedphp onphp passedphp Zendphp_Configphp structure
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;

php php php php php php php php php$defsphp php php php php php php php=php php(php$configphp-php>defaultsphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>defaultsphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php php$dispatcherphp php=php php$frontControllerphp-php>getDispatcherphp(php)php;
php php php php php php php php php$requestphp php php php php=php php$frontControllerphp-php>getRequestphp(php)php;

php php php php php php php php returnphp newphp selfphp(php$defsphp,php php$dispatcherphp,php php$requestphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$defaultsphp Defaultsphp forphp mapphp variablesphp withphp keysphp asphp variablephp names
php php php php php php*php php@paramphp Zendphp_Controllerphp_Dispatcherphp_Interfacephp php$dispatcherphp Dispatcherphp object
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp Requestphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$defaultsphp php=php arrayphp(php)php,
php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Dispatcherphp_Interfacephp php$dispatcherphp php=php nullphp,
php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultsphp php=php php$defaultsphp;

php php php php php php php php ifphp php(issetphp(php$requestphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$dispatcherphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dispatcherphp php=php php$dispatcherphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp keysphp basedphp onphp valuesphp inphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setRequestKeysphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_requestphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_moduleKeyphp php php php php php=php php$thisphp-php>php_requestphp-php>getModuleKeyphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_controllerKeyphp php=php php$thisphp-php>php_requestphp-php>getControllerKeyphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_actionKeyphp php php php php php=php php$thisphp-php>php_requestphp-php>getActionKeyphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_dispatcherphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultsphp php+php=php arrayphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_controllerKeyphp php=php>php php$thisphp-php>php_dispatcherphp-php>getDefaultControllerNamephp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_actionKeyphp php php php php php=php>php php$thisphp-php>php_dispatcherphp-php>getDefaultActionphp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_moduleKeyphp php php php php php=php>php php$thisphp-php>php_dispatcherphp-php>getDefaultModulephp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_keysSetphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp pathphp.php Assignsphp andphp returnsphp anphp arrayphp ofphp variables
php php php php php php*php onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php Ifphp aphp requestphp objectphp isphp registeredphp,php itphp usesphp itsphp setModuleNamephp(php)php,
php php php php php php*php setControllerNamephp(php)php,php andphp setActionNamephp(php)php accessorsphp tophp setphp thosephp valuesphp.
php php php php php php*php Alwaysphp returnsphp thephp valuesphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp Pathphp usedphp tophp matchphp againstphp thisphp routingphp map
php php php php php php*php php@returnphp arrayphp Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$pathphp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setRequestKeysphp(php)php;

php php php php php php php php php$valuesphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!php$partialphp)php php{
php php php php php php php php php php php php php$pathphp php=php trimphp(php$pathphp,php selfphp:php:URIphp_DELIMITERphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$matchedPathphp php=php php$pathphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$pathphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php$pathphp php=php explodephp(selfphp:php:URIphp_DELIMITERphp,php php$pathphp)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dispatcherphp php&php&php php$thisphp-php>php_dispatcherphp-php>isValidModulephp(php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_moduleKeyphp]php php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_moduleValidphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$pathphp)php php&php&php php!emptyphp(php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_controllerKeyphp]php php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$pathphp)php php&php&php php!emptyphp(php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$numSegsphp php=php countphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$numSegsphp;php php$iphp php=php php$iphp php+php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php urldecodephp(php$pathphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$valphp php=php issetphp(php$pathphp[php$iphp php+php php1php]php)php php?php urldecodephp(php$pathphp[php$iphp php+php php1php]php)php php:php nullphp;
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php php(issetphp(php$paramsphp[php$keyphp]php)php php?php php(arrayphp_mergephp(php(arrayphp)php php$paramsphp[php$keyphp]php,php arrayphp(php$valphp)php)php)php:php php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$partialphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMatchedPathphp(php$matchedPathphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp php+php php$paramsphp;

php php php php php php php php returnphp php$thisphp-php>php_valuesphp php+php php$thisphp-php>php_defaultsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp userphp submittedphp parametersphp formingphp aphp URLphp pathphp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp Anphp arrayphp ofphp variablephp andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@paramphp boolphp php$resetphp Weitherphp tophp resetphp thephp currentphp params
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php truephp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_keysSetphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_setRequestKeysphp(php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php php(php!php$resetphp)php php?php php$thisphp-php>php_valuesphp php:php arrayphp(php)php;

php php php php php php php php foreachphp php(php$dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$paramsphp php+php=php php$thisphp-php>php_defaultsphp;

php php php php php php php php php$urlphp php=php php'php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_moduleValidphp php|php|php arrayphp_keyphp_existsphp(php$thisphp-php>php_moduleKeyphp,php php$dataphp)php)php php{
php php php php php php php php php php php php ifphp php(php$paramsphp[php$thisphp-php>php_moduleKeyphp]php php!php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_moduleKeyphp]php)php php{
php php php php php php php php php php php php php php php php php$modulephp php=php php$paramsphp[php$thisphp-php>php_moduleKeyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php unsetphp(php$paramsphp[php$thisphp-php>php_moduleKeyphp]php)php;

php php php php php php php php php$controllerphp php=php php$paramsphp[php$thisphp-php>php_controllerKeyphp]php;
php php php php php php php php unsetphp(php$paramsphp[php$thisphp-php>php_controllerKeyphp]php)php;

php php php php php php php php php$actionphp php=php php$paramsphp[php$thisphp-php>php_actionKeyphp]php;
php php php php php php php php unsetphp(php$paramsphp[php$thisphp-php>php_actionKeyphp]php)php;

php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$keyphp php=php php(php$encodephp)php php?php urlencodephp(php$keyphp)php php:php php$keyphp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$arrayValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$arrayValuephp php=php php(php$encodephp)php php?php urlencodephp(php$arrayValuephp)php php:php php$arrayValuephp;
php php php php php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$arrayValuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$encodephp)php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$keyphp;
php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$urlphp)php php|php|php php$actionphp php!php=php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_actionKeyphp]php)php php{
php php php php php php php php php php php php ifphp php(php$encodephp)php php$actionphp php=php urlencodephp(php$actionphp)php;
php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php php$actionphp php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$urlphp)php php|php|php php$controllerphp php!php=php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_controllerKeyphp]php)php php{
php php php php php php php php php php php php ifphp php(php$encodephp)php php$controllerphp php=php urlencodephp(php$controllerphp)php;
php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php php$controllerphp php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$modulephp)php)php php{
php php php php php php php php php php php php ifphp php(php$encodephp)php php$modulephp php=php urlencodephp(php$modulephp)php;
php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php php$modulephp php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php returnphp ltrimphp(php$urlphp,php selfphp:php:URIphp_DELIMITERphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp singlephp parameterphp ofphp routephp'sphp defaults
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Arrayphp keyphp ofphp thephp parameter
php php php php php php*php php@returnphp stringphp Previouslyphp setphp default
php php php php php php*php/
php php php php publicphp functionphp getDefaultphp(php$namephp)php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_defaultsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultsphp[php$namephp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp defaults
php php php php php php*
php php php php php php*php php@returnphp arrayphp Routephp defaults
php php php php php php*php/
php php php php publicphp functionphp getDefaultsphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultsphp;
php php php php php}

php}
