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
php php*php php@versionphp php php php php$Idphp:php Rewritephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp.phpphp'php;

php/php*php*
php php*php Rubyphp routingphp basedphp Routerphp.
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@seephp php php php php php php php httpphp:php/php/manualsphp.rubyonrailsphp.comphp/readphp/chapterphp/php6php5
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Rewritephp extendsphp Zendphp_Controllerphp_Routerphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp usephp defaultphp routes
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useDefaultRoutesphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp routesphp tophp matchphp against
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_routesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentlyphp matchedphp route
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Routerphp_Routephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_currentRoutephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Globalphp parametersphp givenphp tophp allphp routes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_globalParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Separatorphp tophp usephp withphp chainphp names
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_chainNameSeparatorphp php=php php'php-php'php;

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp requestphp parametersphp shouldphp bephp usedphp asphp globalphp parameters
php php php php php php*php insidephp thisphp routerphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useCurrentParamsAsGlobalphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Addphp defaultphp routesphp whichphp arephp usedphp tophp mimicphp basicphp routerphp behaviour
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp addDefaultRoutesphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasRoutephp(php'defaultphp'php)php)php php{
php php php php php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php;
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getRequestphp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Modulephp.phpphp'php;
php php php php php php php php php php php php php$compatphp php=php newphp Zendphp_Controllerphp_Routerphp_Routephp_Modulephp(arrayphp(php)php,php php$dispatcherphp,php php$requestphp)php;

php php php php php php php php php php php php php$thisphp-php>php_routesphp php=php arrayphp(php'defaultphp'php php=php>php php$compatphp)php php+php php$thisphp-php>php_routesphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp routephp tophp thephp routephp chain
php php php php php php*
php php php php php php*php Ifphp routephp containsphp methodphp setRequestphp(php)php,php itphp isphp initializedphp withphp aphp requestphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php Namephp ofphp thephp route
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp php$routephp php php php php php Instancephp ofphp thephp route
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp addRoutephp(php$namephp,php Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp php$routephp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$routephp,php php'setRequestphp'php)php)php php{
php php php php php php php php php php php php php$routephp-php>setRequestphp(php$thisphp-php>getFrontControllerphp(php)php-php>getRequestphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_routesphp[php$namephp]php php=php php$routephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp routesphp tophp thephp routephp chain
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$routesphp Arrayphp ofphp routesphp withphp namesphp asphp keysphp andphp routesphp asphp values
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp addRoutesphp(php$routesphp)php php{
php php php php php php php php foreachphp php(php$routesphp asphp php$namephp php=php>php php$routephp)php php{
php php php php php php php php php php php php php$thisphp-php>addRoutephp(php$namephp,php php$routephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp routesphp outphp ofphp Zendphp_Configphp configuration
php php php php php php*
php php php php php php*php Examplephp INIphp:
php php php php php php*php routesphp.archivephp.routephp php=php php"archivephp/php:yearphp/php*php"
php php php php php php*php routesphp.archivephp.defaultsphp.controllerphp php=php archive
php php php php php php*php routesphp.archivephp.defaultsphp.actionphp php=php show
php php php php php php*php routesphp.archivephp.defaultsphp.yearphp php=php php2php0php0php0
php php php php php php*php routesphp.archivephp.reqsphp.yearphp php=php php"php\dphp+php"
php php php php php php*
php php php php php php*php routesphp.newsphp.typephp php=php php"Zendphp_Controllerphp_Routerphp_Routephp_Staticphp"
php php php php php php*php routesphp.newsphp.routephp php=php php"newsphp"
php php php php php php*php routesphp.newsphp.defaultsphp.controllerphp php=php php"newsphp"
php php php php php php*php routesphp.newsphp.defaultsphp.actionphp php=php php"listphp"
php php php php php php*
php php php php php php*php Andphp finallyphp afterphp youphp havephp createdphp aphp Zendphp_Configphp withphp abovephp iniphp:
php php php php php php*php php$routerphp php=php newphp Zendphp_Controllerphp_Routerphp_Rewritephp(php)php;
php php php php php php*php php$routerphp-php>addConfigphp(php$configphp,php php'routesphp'php)php;
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$configphp php Configurationphp object
php php php php php php*php php@paramphp php stringphp php php php php php php$sectionphp Namephp ofphp thephp configphp sectionphp containingphp routephp'sphp definitions
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp addConfigphp(Zendphp_Configphp php$configphp,php php$sectionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$sectionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$configphp-php>php{php$sectionphp}php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Nophp routephp configurationphp inphp sectionphp php'php{php$sectionphp}php'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$configphp php=php php$configphp-php>php{php$sectionphp}php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$namephp php=php>php php$infophp)php php{
php php php php php php php php php php php php php$routephp php=php php$thisphp-php>php_getRouteFromConfigphp(php$infophp)php;

php php php php php php php php php php php php ifphp php(php$routephp instanceofphp Zendphp_Controllerphp_Routerphp_Routephp_Chainphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$infophp-php>chainphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Nophp chainphp definedphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$infophp-php>chainphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php php php php php$childRouteNamesphp php=php php$infophp-php>chainphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$childRouteNamesphp php=php explodephp(php'php,php'php,php php$infophp-php>chainphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php foreachphp php(php$childRouteNamesphp asphp php$childRouteNamephp)php php{
php php php php php php php php php php php php php php php php php php php php php$childRoutephp php=php php$thisphp-php>getRoutephp(trimphp(php$childRouteNamephp)php)php;
php php php php php php php php php php php php php php php php php php php php php$routephp-php>chainphp(php$childRoutephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>addRoutephp(php$namephp,php php$routephp)php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$infophp-php>chainsphp)php php&php&php php$infophp-php>chainsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_addChainRoutesFromConfigphp(php$namephp,php php$routephp,php php$infophp-php>chainsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>addRoutephp(php$namephp,php php$routephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp routephp frmphp aphp configphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$info
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_getRouteFromConfigphp(Zendphp_Configphp php$infophp)
php php php php php{
php php php php php php php php php$classphp php=php php(issetphp(php$infophp-php>typephp)php)php php?php php$infophp-php>typephp php:php php'Zendphp_Controllerphp_Routerphp_Routephp'php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php}

php php php php php php php php php$routephp php=php callphp_userphp_funcphp(arrayphp(php$classphp,php php'getInstancephp'php)php,php php$infophp)php;

php php php php php php php php ifphp php(issetphp(php$infophp-php>abstractphp)php php&php&php php$infophp-php>abstractphp php&php&php methodphp_existsphp(php$routephp,php php'isAbstractphp'php)php)php php{
php php php php php php php php php php php php php$routephp-php>isAbstractphp(truephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$routephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp chainphp routesphp fromphp aphp configphp route
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$name
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp php$route
php php php php php php*php php@paramphp php Zendphp_Configphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php$childRoutesInfo
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addChainRoutesFromConfigphp(php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp php$routephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Configphp php$childRoutesInfophp)
php php php php php{
php php php php php php php php foreachphp php(php$childRoutesInfophp asphp php$childRouteNamephp php=php>php php$childRouteInfophp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$childRouteInfophp)php)php php{
php php php php php php php php php php php php php php php php php$childRouteNamephp php=php php$childRouteInfophp;
php php php php php php php php php php php php php php php php php$childRoutephp php php php php php=php php$thisphp-php>getRoutephp(php$childRouteNamephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$childRoutephp php=php php$thisphp-php>php_getRouteFromConfigphp(php$childRouteInfophp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$routephp instanceofphp Zendphp_Controllerphp_Routerphp_Routephp_Chainphp)php php{
php php php php php php php php php php php php php php php php php$chainRoutephp php=php clonephp php$routephp;
php php php php php php php php php php php php php php php php php$chainRoutephp-php>chainphp(php$childRoutephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$chainRoutephp php=php php$routephp-php>chainphp(php$childRoutephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$chainNamephp php=php php$namephp php.php php$thisphp-php>php_chainNameSeparatorphp php.php php$childRouteNamephp;

php php php php php php php php php php php php ifphp php(issetphp(php$childRouteInfophp-php>chainsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_addChainRoutesFromConfigphp(php$chainNamephp,php php$chainRoutephp,php php$childRouteInfophp-php>chainsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>addRoutephp(php$chainNamephp,php php$chainRoutephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp routephp fromphp thephp routephp chain
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Namephp ofphp thephp route
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp removeRoutephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_routesphp[php$namephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Routephp php$namephp isphp notphp definedphp"php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_routesphp[php$namephp]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp standardphp defaultphp routes
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp Route
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp removeDefaultRoutesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_useDefaultRoutesphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp namedphp routephp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Namephp ofphp thephp route
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasRoutephp(php$namephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_routesphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp namedphp route
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Namephp ofphp thephp route
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp Routephp object
php php php php php php*php/
php php php php publicphp functionphp getRoutephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_routesphp[php$namephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Routephp php$namephp isphp notphp definedphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_routesphp[php$namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp currentlyphp matchedphp route
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp Routephp object
php php php php php php*php/
php php php php publicphp functionphp getCurrentRoutephp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_currentRoutephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Currentphp routephp isphp notphp definedphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getRoutephp(php$thisphp-php>php_currentRoutephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp namephp ofphp currentlyphp matchedphp route
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Interfacephp Routephp object
php php php php php php*php/
php php php php publicphp functionphp getCurrentRouteNamephp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_currentRoutephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php"Currentphp routephp isphp notphp definedphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_currentRoutephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp arrayphp ofphp routesphp addedphp tophp thephp routephp chain
php php php php php php*
php php php php php php*php php@returnphp arrayphp Allphp ofphp thephp definedphp routes
php php php php php php*php/
php php php php publicphp functionphp getRoutesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_routesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp aphp matchingphp routephp tophp thephp currentphp PATHphp_INFOphp andphp inject
php php php php php php*php returningphp valuesphp tophp thephp Requestphp objectphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstractphp Requestphp object
php php php php php php*php/
php php php php publicphp functionphp routephp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php'Zendphp_Controllerphp_Routerphp_Rewritephp requiresphp aphp Zendphp_Controllerphp_Requestphp_Httpphp-basedphp requestphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_useDefaultRoutesphp)php php{
php php php php php php php php php php php php php$thisphp-php>addDefaultRoutesphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Findphp thephp matchingphp route
php php php php php php php php php$routeMatchedphp php=php falsephp;

php php php php php php php php foreachphp php(arrayphp_reversephp(php$thisphp-php>php_routesphp,php truephp)php asphp php$namephp php=php>php php$routephp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php Shouldphp bephp anphp interfacephp methodphp.php Hackphp forphp php1php.php0php BC
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$routephp,php php'isAbstractphp'php)php php&php&php php$routephp-php>isAbstractphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php TODOphp:php Shouldphp bephp anphp interfacephp methodphp.php Hackphp forphp php1php.php0php BC
php php php php php php php php php php php php ifphp php(php!methodphp_existsphp(php$routephp,php php'getVersionphp'php)php php|php|php php$routephp-php>getVersionphp(php)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$matchphp php=php php$requestphp-php>getPathInfophp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$matchphp php=php php$requestphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$paramsphp php=php php$routephp-php>matchphp(php$matchphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setRequestParamsphp(php$requestphp,php php$paramsphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_currentRoutephp php=php php$namephp;
php php php php php php php php php php php php php php php php php$routeMatchedphp php php php php php php php php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php ifphp php(php!php$routeMatchedphp)php php{
php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php'Nophp routephp matchedphp thephp requestphp'php,php php4php0php4php)php;
php php php php php php php php php php}

php php php php php php php php ifphp(php$thisphp-php>php_useCurrentParamsAsGlobalphp)php php{
php php php php php php php php php php php php php$paramsphp php=php php$requestphp-php>getParamsphp(php)php;
php php php php php php php php php php php php foreachphp(php$paramsphp asphp php$paramphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setGlobalParamphp(php$paramphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$requestphp;

php php php php php}

php php php php protectedphp functionphp php_setRequestParamsphp(php$requestphp,php php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$paramphp php=php>php php$valuephp)php php{

php php php php php php php php php php php php php$requestphp-php>setParamphp(php$paramphp,php php$valuephp)php;

php php php php php php php php php php php php ifphp php(php$paramphp php=php=php=php php$requestphp-php>getModuleKeyphp(php)php)php php{
php php php php php php php php php php php php php php php php php$requestphp-php>setModuleNamephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$paramphp php=php=php=php php$requestphp-php>getControllerKeyphp(php)php)php php{
php php php php php php php php php php php php php php php php php$requestphp-php>setControllerNamephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$paramphp php=php=php=php php$requestphp-php>getActionKeyphp(php)php)php php{
php php php php php php php php php php php php php php php php php$requestphp-php>setActionNamephp(php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp aphp URLphp pathphp thatphp canphp bephp usedphp inphp URLphp creationphp,php redirectionphp,php etcphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$userParamsphp Optionsphp passedphp byphp aphp userphp usedphp tophp overridephp parameters
php php php php php php*php php@paramphp php mixedphp php$namephp Thephp namephp ofphp aphp Routephp tophp use
php php php php php php*php php@paramphp php boolphp php$resetphp Whetherphp tophp resetphp tophp thephp routephp defaultsphp ignoringphp URLphp params
php php php php php php*php php@paramphp php boolphp php$encodephp Tellsphp tophp encodephp URLphp partsphp onphp output
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp stringphp Resultingphp absolutephp URLphp path
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$userParamsphp,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php nullphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$namephp php=php php$thisphp-php>getCurrentRouteNamephp(php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Controllerphp_Routerphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$namephp php=php php'defaultphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Usephp UNIONphp php(php+php)php inphp orderphp tophp preservephp numericphp keys
php php php php php php php php php$paramsphp php=php php$userParamsphp php+php php$thisphp-php>php_globalParamsphp;

php php php php php php php php php$routephp php=php php$thisphp-php>getRoutephp(php$namephp)php;
php php php php php php php php php$urlphp php php php=php php$routephp-php>assemblephp(php$paramsphp,php php$resetphp,php php$encodephp)php;

php php php php php php php php ifphp php(php!pregphp_matchphp(php'php|php^php[aphp-zphp]php+php:php/php/php|php'php,php php$urlphp)php)php php{
php php php php php php php php php php php php php$urlphp php=php rtrimphp(php$thisphp-php>getFrontControllerphp(php)php-php>getBaseUrlphp(php)php,php php'php/php'php)php php.php php'php/php'php php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php returnphp php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp globalphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp setGlobalParamphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_globalParamsphp[php$namephp]php php=php php$valuephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp separatorphp tophp usephp withphp chainphp names
php php php php php php*
php php php php php php*php php@paramphp stringphp php$separatorphp Thephp separatorphp tophp use
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp setChainNameSeparatorphp(php$separatorphp)php php{
php php php php php php php php php$thisphp-php>php_chainNameSeparatorphp php=php php$separatorphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp separatorphp tophp usephp forphp chainphp names
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getChainNameSeparatorphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_chainNameSeparatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp/returnsphp whetherphp tophp usephp thephp requestphp parametersphp asphp globalphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp|nullphp php$use
php php php php php php*php php php php php php php php php php php Nullphp/unsetphp whenphp youphp wantphp tophp retrievephp thephp currentphp statephp.
php php php php php php*php php php php php php php php php php php Truephp whenphp requestphp parametersphp shouldphp bephp globalphp,php falsephp otherwise
php php php php php php*php php@returnphp booleanphp|Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php php php php php php php php php php php php php php Returnsphp aphp booleanphp ifphp firstphp paramphp isnphp'tphp setphp,php returnsphp an
php php php php php php*php php php php php php php php php php php php php php instancephp ofphp Zendphp_Controllerphp_Routerphp_Rewritephp otherwisephp.
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp useRequestParametersAsGlobalphp(php$usephp php=php nullphp)php php{
php php php php php php php php ifphp(php$usephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_useCurrentParamsAsGlobalphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_useCurrentParamsAsGlobalphp php=php php(boolphp)php php$usephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
