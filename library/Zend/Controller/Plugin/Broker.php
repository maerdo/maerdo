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
php php*php php@versionphp php php php php$Idphp:php Brokerphp.phpphp php2php0php2php5php5php php2php0php1php0php-php0php1php-php1php3php php1php3php:php2php3php:php3php6Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Controllerphp_Pluginphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Pluginphp_Brokerphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp instancephp ofphp objectsphp extendingphp Zendphp_Controllerphp_Pluginphp_Abstract
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_pluginsphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Registerphp aphp pluginphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Pluginphp_Abstractphp php$plugin
php php php php php php*php php@paramphp php intphp php$stackIndex
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php/
php php php php publicphp functionphp registerPluginphp(Zendphp_Controllerphp_Pluginphp_Abstractphp php$pluginphp,php php$stackIndexphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(falsephp php!php=php=php arrayphp_searchphp(php$pluginphp,php php$thisphp-php>php_pluginsphp,php truephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Pluginphp alreadyphp registeredphp'php)php;
php php php php php php php php php}

php php php php php php php php php$stackIndexphp php=php php(intphp)php php$stackIndexphp;

php php php php php php php php ifphp php(php$stackIndexphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_pluginsphp[php$stackIndexphp]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Pluginphp withphp stackIndexphp php"php'php php.php php$stackIndexphp php.php php'php"php alreadyphp registeredphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp[php$stackIndexphp]php php=php php$pluginphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$stackIndexphp php=php countphp(php$thisphp-php>php_pluginsphp)php;
php php php php php php php php php php php php whilephp php(issetphp(php$thisphp-php>php_pluginsphp[php$stackIndexphp]php)php)php php{
php php php php php php php php php php php php php php php php php+php+php$stackIndexphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp[php$stackIndexphp]php php=php php$pluginphp;
php php php php php php php php php}

php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php ifphp php(php$requestphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp[php$stackIndexphp]php-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php ifphp php(php$responsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp[php$stackIndexphp]php-php>setResponsephp(php$responsephp)php;
php php php php php php php php php}

php php php php php php php php ksortphp(php$thisphp-php>php_pluginsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unregisterphp aphp pluginphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Controllerphp_Pluginphp_Abstractphp php$pluginphp Pluginphp objectphp orphp classphp name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php/
php php php php publicphp functionphp unregisterPluginphp(php$pluginphp)
php php php php php{
php php php php php php php php ifphp php(php$pluginphp instanceofphp Zendphp_Controllerphp_Pluginphp_Abstractphp)php php{
php php php php php php php php php php php php php/php/php Givenphp aphp pluginphp objectphp,php findphp itphp inphp thephp array
php php php php php php php php php php php php php$keyphp php=php arrayphp_searchphp(php$pluginphp,php php$thisphp-php>php_pluginsphp,php truephp)php;
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Pluginphp neverphp registeredphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginsphp[php$keyphp]php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$pluginphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp aphp pluginphp classphp,php findphp allphp pluginsphp ofphp thatphp classphp andphp unsetphp them
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$keyphp php=php>php php$php_pluginphp)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$php_pluginphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$pluginphp php=php=php php$typephp)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp pluginphp ofphp aphp particularphp classphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPluginphp(php$classphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$pluginphp)php;
php php php php php php php php php php php php ifphp php(php$classphp php=php=php php$typephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp pluginphp orphp pluginsphp byphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$classphp Classphp namephp ofphp pluginphp(sphp)php desired
php php php php php php*php php@returnphp falsephp|Zendphp_Controllerphp_Pluginphp_Abstractphp|arrayphp Returnsphp falsephp ifphp nonephp foundphp,php pluginphp ifphp onlyphp onephp foundphp,php andphp arrayphp ofphp pluginsphp ifphp multiplephp pluginsphp ofphp samephp classphp found
php php php php php php*php/
php php php php publicphp functionphp getPluginphp(php$classphp)
php php php php php{
php php php php php php php php php$foundphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$pluginphp)php;
php php php php php php php php php php php php ifphp php(php$classphp php=php=php php$typephp)php php{
php php php php php php php php php php php php php php php php php$foundphp[php]php php=php php$pluginphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php switchphp php(countphp(php$foundphp)php)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php returnphp php$foundphp[php0php]php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$foundphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp plugins
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp objectphp,php andphp registerphp withphp eachphp plugin
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php$pluginphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}

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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;

php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php$pluginphp-php>setResponsephp(php$responsephp)php;
php php php php php php php php php}


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
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>routeStartupphp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp exitsphp itsphp iterationsphp over
php php php php php php*php thephp routephp setphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp routeShutdownphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>routeShutdownphp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp entersphp itsphp dispatchphp loopphp.
php php php php php php*
php php php php php php*php Duringphp thephp dispatchphp loopphp,php Zendphp_Controllerphp_Frontphp keepsphp a
php php php php php php*php Zendphp_Controllerphp_Requestphp_Abstractphp objectphp,php andphp uses
php php php php php php*php Zendphp_Controllerphp_Dispatcherphp tophp dispatchphp the
php php php php php php*php Zendphp_Controllerphp_Requestphp_Abstractphp objectphp tophp controllersphp/actionsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchLoopStartupphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>dispatchLoopStartupphp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Calledphp beforephp anphp actionphp isphp dispatchedphp byphp Zendphp_Controllerphp_Dispatcherphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp preDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>preDispatchphp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Calledphp afterphp anphp actionphp isphp dispatchedphp byphp Zendphp_Controllerphp_Dispatcherphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>postDispatchphp(php$requestphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Calledphp beforephp Zendphp_Controllerphp_Frontphp exitsphp itsphp dispatchphp loopphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchLoopShutdownphp(php)
php php php php php{
php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$pluginphp-php>dispatchLoopShutdownphp(php)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php}
php php php php php}
php}
