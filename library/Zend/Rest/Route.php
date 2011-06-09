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
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Routephp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Routerphp_Routephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Routerphp_Routephp_Module
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Modulephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Dispatcherphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Requestphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Restphp Route
php php*
php php*php Requestphp-awarephp routephp forphp RESTfulphp modularphp routing
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Restphp_Routephp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Module
php{
php php php php php/php*php*
php php php php php php*php Specificphp Modulesphp tophp receivephp RESTfulphp routes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_restfulModulesphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Specificphp Modulesphp=php>Controllersphp tophp receivephp RESTfulphp routes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_restfulControllersphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php protectedphp php$php_frontphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Frontphp php$frontphp Frontphp Controllerphp object
php php php php php php*php php@paramphp arrayphp php$defaultsphp Defaultsphp forphp mapphp variablesphp withphp keysphp asphp variablephp names
php php php php php php*php php@paramphp arrayphp php$respondersphp Modulesphp orphp controllersphp tophp receivephp RESTfulphp routes
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Controllerphp_Frontphp php$frontphp,
php php php php php php php php arrayphp php$defaultsphp php=php arrayphp(php)php,
php php php php php php php php arrayphp php$respondersphp php=php arrayphp(php)
php php php php php)php php{
php php php php php php php php php$thisphp-php>php_defaultsphp php=php php$defaultsphp;

php php php php php php php php ifphp php(php$respondersphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_parseRespondersphp(php$respondersphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_frontphp php php php php php php=php php$frontphp;
php php php php php php php php php$thisphp-php>php_dispatcherphp php=php php$frontphp-php>getDispatcherphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Instantiatesphp routephp basedphp onphp passedphp Zendphp_Configphp structure
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php$defaultsArrayphp php=php arrayphp(php)php;
php php php php php php php php php$restfulConfigArrayphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$configphp asphp php$keyphp php=php>php php$valuesphp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'typephp'php)php php{
php php php php php php php php php php php php php php php php php/php/php dophp nothing
php php php php php php php php php php php php php}php elseifphp php(php$keyphp php=php=php php'defaultsphp'php)php php{
php php php php php php php php php php php php php php php php php$defaultsArrayphp php=php php$valuesphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$restfulConfigArrayphp[php$keyphp]php php=php explodephp(php'php,php'php,php php$valuesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$instancephp php=php newphp selfphp(php$frontControllerphp,php php$defaultsArrayphp,php php$restfulConfigArrayphp)php;
php php php php php php php php returnphp php$instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp requestphp.php Assignsphp andphp returnsphp anphp arrayphp ofphp variables
php php php php php php*php onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php Ifphp aphp requestphp objectphp isphp registeredphp,php itphp usesphp itsphp setModuleNamephp(php)php,
php php php php php php*php setControllerNamephp(php)php,php andphp setActionNamephp(php)php accessorsphp tophp setphp thosephp valuesphp.
php php php php php php*php Alwaysphp returnsphp thephp valuesphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Httpphp php$requestphp Requestphp usedphp tophp matchphp againstphp thisphp routingphp ruleset
php php php php php php*php php@returnphp arrayphp Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$requestphp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php php{
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>php_frontphp-php>getRequestphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php php$thisphp-php>php_setRequestKeysphp(php)php;

php php php php php php php php php$pathphp php php php=php php$requestphp-php>getPathInfophp(php)php;
php php php php php php php php php$paramsphp php=php php$requestphp-php>getParamsphp(php)php;
php php php php php php php php php$valuesphp php=php arrayphp(php)php;
php php php php php php php php php$pathphp php php php=php trimphp(php$pathphp,php selfphp:php:URIphp_DELIMITERphp)php;

php php php php php php php php ifphp php(php$pathphp php!php=php php'php'php)php php{

php php php php php php php php php php php php php$pathphp php=php explodephp(selfphp:php:URIphp_DELIMITERphp,php php$pathphp)php;
php php php php php php php php php php php php php/php/php Determinephp Module
php php php php php php php php php php php php php$moduleNamephp php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_moduleKeyphp]php;
php php php php php php php php php php php php php$dispatcherphp php=php php$thisphp-php>php_frontphp-php>getDispatcherphp(php)php;
php php php php php php php php php php php php ifphp php(php$dispatcherphp php&php&php php$dispatcherphp-php>isValidModulephp(php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$moduleNamephp php=php php$pathphp[php0php]php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_checkRestfulModulephp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_moduleKeyphp]php php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_moduleValidphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Determinephp Controller
php php php php php php php php php php php php php$controllerNamephp php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_controllerKeyphp]php;
php php php php php php php php php php php php ifphp php(countphp(php$pathphp)php php&php&php php!emptyphp(php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_checkRestfulControllerphp(php$moduleNamephp,php php$pathphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$controllerNamephp php=php php$pathphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_controllerKeyphp]php php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php'getphp'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Ifphp Controllerphp inphp URIphp isphp notphp foundphp tophp bephp aphp RESTful
php php php php php php php php php php php php php php php php php php php php php/php/php Controllerphp,php returnphp falsephp tophp fallphp backphp tophp otherphp routes
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>php_checkRestfulControllerphp(php$moduleNamephp,php php$controllerNamephp)php)php php{
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_controllerKeyphp]php php=php php$controllerNamephp;
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php'getphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/Storephp pathphp countphp forphp methodphp mapping
php php php php php php php php php php php php php$pathElementCountphp php=php countphp(php$pathphp)php;

php php php php php php php php php php php php php/php/php Checkphp forphp php"specialphp getphp"php URIphp's
php php php php php php php php php php php php php$specialGetTargetphp php=php falsephp;
php php php php php php php php php php php php ifphp php(php$pathElementCountphp php&php&php arrayphp_searchphp(php$pathphp[php0php]php,php arrayphp(php'indexphp'php,php php'newphp'php)php)php php>php php-php1php)php php{
php php php php php php php php php php php php php php php php php$specialGetTargetphp php=php arrayphp_shiftphp(php$pathphp)php;
php php php php php php php php php php php php php}php elseifphp php(php$pathElementCountphp php&php&php php$pathphp[php$pathElementCountphp-php1php]php php=php=php php'editphp'php)php php{
php php php php php php php php php php php php php php php php php$specialGetTargetphp php=php php'editphp'php;
php php php php php php php php php php php php php php php php php$paramsphp[php'idphp'php]php php=php php$pathphp[php$pathElementCountphp-php2php]php;
php php php php php php php php php php php php php}php elseifphp php(php$pathElementCountphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'idphp'php]php php=php urldecodephp(arrayphp_shiftphp(php$pathphp)php)php;
php php php php php php php php php php php php php}php elseifphp php(php$pathElementCountphp php=php=php php0php php&php&php php!issetphp(php$paramsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$specialGetTargetphp php=php php'indexphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Digestphp URIphp params
php php php php php php php php php php php php ifphp php(php$numSegsphp php=php countphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$numSegsphp;php php$iphp php=php php$iphp php+php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php urldecodephp(php$pathphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$valphp php=php issetphp(php$pathphp[php$iphp php+php php1php]php)php php?php urldecodephp(php$pathphp[php$iphp php+php php1php]php)php php:php nullphp;
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Determinephp Action
php php php php php php php php php php php php php$requestMethodphp php=php strtolowerphp(php$requestphp-php>getMethodphp(php)php)php;
php php php php php php php php php php php php ifphp php(php$requestMethodphp php!php=php php'getphp'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$requestphp-php>getParamphp(php'php_methodphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php strtolowerphp(php$requestphp-php>getParamphp(php'php_methodphp'php)php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(php php$requestphp-php>getHeaderphp(php'Xphp-HTTPphp-Methodphp-Overridephp'php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php strtolowerphp(php$requestphp-php>getHeaderphp(php'Xphp-HTTPphp-Methodphp-Overridephp'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php$requestMethodphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Mapphp PUTphp andphp POSTphp tophp actualphp createphp/updatephp actions
php php php php php php php php php php php php php php php php php/php/php basedphp onphp parameterphp countphp php(postingphp tophp resourcephp orphp collectionphp)
php php php php php php php php php php php php php php php php switchphp(php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php)php{
php php php php php php php php php php php php php php php php php php php php casephp php'postphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$pathElementCountphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php'putphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php'postphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'putphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php'putphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}php elseifphp php(php$specialGetTargetphp)php php{
php php php php php php php php php php php php php php php php php$valuesphp[php$thisphp-php>php_actionKeyphp]php php=php php$specialGetTargetphp;
php php php php php php php php php php php php php}

php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp php+php php$paramsphp;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_valuesphp php+php php$thisphp-php>php_defaultsphp;

php php php php php php php php ifphp php(php$partialphp php&php&php php$resultphp)
php php php php php php php php php php php php php$thisphp-php>setMatchedPathphp(php$requestphp-php>getPathInfophp(php)php)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp userphp submittedphp parametersphp formingphp aphp URLphp pathphp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp Anphp arrayphp ofphp variablephp andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@paramphp boolphp php$resetphp Weitherphp tophp resetphp thephp currentphp params
php php php php php php*php php@paramphp boolphp php$encodephp Weitherphp tophp returnphp urlencodedphp string
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_keysSetphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_requestphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp php=php php$thisphp-php>php_frontphp-php>getRequestphp(php)php;
php php php php php php php php php php php php php}
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

php php php php php php php php php/php/php setphp php$actionphp ifphp valuephp givenphp isphp php'newphp'php orphp php'editphp'
php php php php php php php php ifphp php(inphp_arrayphp(php$paramsphp[php$thisphp-php>php_actionKeyphp]php,php arrayphp(php'newphp'php,php php'editphp'php)php)php)php php{
php php php php php php php php php php php php php$actionphp php=php php$paramsphp[php$thisphp-php>php_actionKeyphp]php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$paramsphp[php$thisphp-php>php_actionKeyphp]php)php;

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'indexphp'php]php)php php&php&php php$paramsphp[php'indexphp'php]php)php php{
php php php php php php php php php php php php unsetphp(php$paramsphp[php'indexphp'php]php)php;
php php php php php php php php php php php php php$urlphp php.php=php php'php/indexphp'php;
php php php php php php php php php php php php ifphp php(issetphp(php$paramsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php.php$paramsphp[php'idphp'php]php;
php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'idphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$encodephp)php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$keyphp php.php php'php/php'php php.php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!php emptyphp(php$actionphp)php php&php&php issetphp(php$paramsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php$urlphp php.php=php sprintfphp(php'php/php%sphp/php%sphp'php,php php$paramsphp[php'idphp'php]php,php php$actionphp)php;
php php php php php php php php php}php elseifphp php(php!php emptyphp(php$actionphp)php)php php{
php php php php php php php php php php php php php$urlphp php.php=php sprintfphp(php'php/php%sphp'php,php php$actionphp)php;
php php php php php php php php php}php elseifphp php(issetphp(php$paramsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$paramsphp[php'idphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$urlphp)php php|php|php php$controllerphp php!php=php=php php$thisphp-php>php_defaultsphp[php$thisphp-php>php_controllerKeyphp]php)php php{
php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php php$controllerphp php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$modulephp)php)php php{
php php php php php php php php php php php php php$urlphp php=php php'php/php'php php.php php$modulephp php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php returnphp ltrimphp(php$urlphp,php selfphp:php:URIphp_DELIMITERphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tellsphp Rewritephp Routerphp whichphp versionphp thisphp Routephp is
php php php php php php*
php php php php php php*php php@returnphp intphp Routephp php"versionphp"
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php2php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp thephp respondersphp arrayphp sentphp tophp constructorphp tophp know
php php php php php php*php whichphp modulesphp andphp/orphp controllersphp arephp RESTful
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$responders
php php php php php php*php/
php php php php protectedphp functionphp php_parseRespondersphp(php$respondersphp)
php php php php php{
php php php php php php php php php$modulesOnlyphp php=php truephp;
php php php php php php php php foreachphp php(php$respondersphp asphp php$responderphp)php php{
php php php php php php php php php php php php ifphp(isphp_arrayphp(php$responderphp)php)php php{
php php php php php php php php php php php php php php php php php$modulesOnlyphp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$modulesOnlyphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_restfulModulesphp php=php php$respondersphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_restfulControllersphp php=php php$respondersphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp specifiedphp modulephp supportsphp RESTfulphp routing
php php php php php php*
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_checkRestfulModulephp(php$moduleNamephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_allRestfulphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_fullRestfulModulephp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_restfulControllersphp php&php&php arrayphp_keyphp_existsphp(php$moduleNamephp,php php$thisphp-php>php_restfulControllersphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp specifiedphp modulephp php+php controllerphp combinationphp supports
php php php php php php*php RESTfulphp routing
php php php php php php*
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_checkRestfulControllerphp(php$moduleNamephp,php php$controllerNamephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_allRestfulphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_fullRestfulModulephp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_checkRestfulModulephp(php$moduleNamephp)
php php php php php php php php php php php php php&php&php php$thisphp-php>php_restfulControllers
php php php php php php php php php php php php php&php&php php(falsephp php!php=php=php arrayphp_searchphp(php$controllerNamephp,php php$thisphp-php>php_restfulControllersphp[php$moduleNamephp]php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp RESTfulphp routingphp appliesphp tophp thephp entirephp app
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_allRestfulphp(php)
php php php php php{
php php php php php php php php returnphp php(php!php$thisphp-php>php_restfulModulesphp php&php&php php!php$thisphp-php>php_restfulControllersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp RESTfulphp routingphp appliesphp tophp anphp entirephp module
php php php php php php*
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_fullRestfulModulephp(php$moduleNamephp)
php php php php php{
php php php php php php php php returnphp php(
php php php php php php php php php php php php php$thisphp-php>php_restfulModules
php php php php php php php php php php php php php&php&php php(falsephp php!php=php=arrayphp_searchphp(php$moduleNamephp,php php$thisphp-php>php_restfulModulesphp)php)
php php php php php php php php php)php;
php php php php php}
php}
