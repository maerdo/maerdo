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
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Controllerphp_Routerphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Processesphp aphp requestphp andphp setsphp itsphp controllerphp andphp actionphp.php php If
php php php php php php*php nophp routephp wasphp possiblephp,php anphp exceptionphp isphp thrownphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstractphp|boolean
php php php php php php*php/
php php php php publicphp functionphp routephp(Zendphp_Controllerphp_Requestphp_Abstractphp php$dispatcherphp)php;

php php php php php/php*php*
php php php php php php*php Generatesphp aphp URLphp pathphp thatphp canphp bephp usedphp inphp URLphp creationphp,php redirectionphp,php etcphp.
php php php php php php*
php php php php php php*php Mayphp bephp passedphp userphp paramsphp tophp overridephp onesphp fromphp URIphp,php Requestphp orphp evenphp defaultsphp.
php php php php php php*php Ifphp passedphp parameterphp hasphp aphp valuephp ofphp nullphp,php itphp'sphp URLphp variablephp willphp bephp resetphp to
php php php php php php*php defaultphp.
php php php php php php*
php php php php php php*php Ifphp nullphp isphp passedphp asphp aphp routephp namephp assemblephp willphp usephp thephp currentphp Routephp orphp php'defaultphp'
php php php php php php*php ifphp currentphp isphp notphp yetphp setphp.
php php php php php php*
php php php php php php*php Resetphp isphp usedphp tophp signalphp thatphp allphp parametersphp shouldphp bephp resetphp tophp itphp'sphp defaultsphp.
php php php php php php*php Ignoringphp allphp URLphp specifiedphp valuesphp.php Userphp specifiedphp paramsphp stillphp getphp precedencephp.
php php php php php php*
php php php php php php*php Encodephp tellsphp tophp urlphp encodephp resultingphp pathphp partsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$userParamsphp Optionsphp passedphp byphp aphp userphp usedphp tophp overridephp parameters
php php php php php php*php php@paramphp php mixedphp php$namephp Thephp namephp ofphp aphp Routephp tophp use
php php php php php php*php php@paramphp php boolphp php$resetphp Whetherphp tophp resetphp tophp thephp routephp defaultsphp ignoringphp URLphp params
php php php php php php*php php@paramphp php boolphp php$encodephp Tellsphp tophp encodephp URLphp partsphp onphp output
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Routerphp_Exception
php php php php php php*php php@returnphp stringphp Resultingphp URLphp path
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$userParamsphp,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp Frontphp Controller
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp Frontphp Controller
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Frontphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setFrontControllerphp(Zendphp_Controllerphp_Frontphp php$controllerphp)php;

php php php php php/php*php*
php php php php php php*php Addphp orphp modifyphp aphp parameterphp withphp whichphp tophp instantiatephp anyphp helperphp objects
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$param
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$namephp,php php$valuephp)php;

php php php php php/php*php*
php php php php php php*php Setphp anphp arrayphp ofphp aphp parametersphp tophp passphp tophp helperphp objectphp constructors
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp parameterphp fromphp thephp controllerphp parameterphp stack
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp parametersphp tophp passphp tophp helperphp objectphp constructors
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)php;

php php php php php/php*php*
php php php php php php*php Clearphp thephp controllerphp parameterphp stack
php php php php php php*
php php php php php php*php Byphp defaultphp,php clearsphp allphp parametersphp.php Ifphp aphp parameterphp namephp isphp givenphp,php clears
php php php php php php*php onlyphp thatphp parameterphp;php ifphp anphp arrayphp ofphp parameterphp namesphp isphp providedphp,php clears
php php php php php php*php eachphp.
php php php php php php*
php php php php php php*php php@paramphp nullphp|stringphp|arrayphp singlephp keyphp orphp arrayphp ofphp keysphp forphp paramsphp tophp clear
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clearParamsphp(php$namephp php=php nullphp)php;

php}
