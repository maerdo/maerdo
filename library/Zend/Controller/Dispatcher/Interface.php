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
php php*php php@subpackagephp Dispatcher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Controllerphp_Requestphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Controllerphp_Responsephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Dispatcher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Controllerphp_Dispatcherphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp intophp aphp controllerphp namephp.php php Thisphp isphp usedphp tophp takephp aphp raw
php php php php php php*php controllerphp namephp,php suchphp asphp onephp thatphp wouldphp bephp packagedphp insidephp aphp request
php php php php php php*php objectphp,php andphp reformatphp itphp tophp aphp properphp classphp namephp thatphp aphp classphp extending
php php php php php php*php Zendphp_Controllerphp_Actionphp wouldphp usephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatControllerNamephp(php$unformattedphp)php;

php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp intophp aphp modulephp namephp.php php Thisphp isphp usedphp tophp takephp aphp raw
php php php php php php*php modulephp namephp,php suchphp asphp onephp thatphp wouldphp bephp packagedphp insidephp aphp request
php php php php php php*php objectphp,php andphp reformatphp itphp tophp aphp properphp directoryphp/classphp namephp thatphp aphp classphp extending
php php php php php php*php Zendphp_Controllerphp_Actionphp wouldphp usephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatModuleNamephp(php$unformattedphp)php;

php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp intophp anphp actionphp namephp.php php Thisphp isphp usedphp tophp takephp aphp raw
php php php php php php*php actionphp namephp,php suchphp asphp onephp thatphp wouldphp bephp packagedphp insidephp aphp request
php php php php php php*php objectphp,php andphp reformatphp intophp aphp properphp methodphp namephp thatphp wouldphp bephp found
php php php php php php*php insidephp aphp classphp extendingphp Zendphp_Controllerphp_Actionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatActionNamephp(php$unformattedphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp ifphp anphp actionphp canphp bephp dispatchedphp,php orphp FALSEphp otherwisephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDispatchablephp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)php;

php php php php php/php*php*
php php php php php php*php Addphp orphp modifyphp aphp parameterphp withphp whichphp tophp instantiatephp anphp Actionphp Controller
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$namephp,php php$valuephp)php;

php php php php php/php*php*
php php php php php php*php Setphp anphp arrayphp ofphp aphp parametersphp tophp passphp tophp thephp Actionphp Controllerphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
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
php php php php php php*php Retrievephp thephp parametersphp tophp passphp tophp thephp Actionphp Controllerphp constructor
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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clearParamsphp(php$namephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp responsephp objectphp tophp usephp,php ifphp any
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp|nullphp php$response
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp responsephp objectphp,php ifphp any
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstractphp|null
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)php;

php php php php php/php*php*
php php php php php php*php Addphp aphp controllerphp directoryphp tophp thephp controllerphp directoryphp stack
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp stringphp php$args
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp functionphp addControllerDirectoryphp(php$pathphp,php php$argsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp directoryphp wherephp controllerphp filesphp arephp stored
php php php php php php*
php php php php php php*php Specifyphp aphp stringphp orphp anphp arrayphp;php ifphp anphp arrayphp isphp specifiedphp,php allphp pathsphp willphp be
php php php php php php*php addedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$dir
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setControllerDirectoryphp(php$pathphp)php;

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentlyphp setphp directoryphp(iesphp)php forphp controllerphp filephp lookup
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getControllerDirectoryphp(php)php;

php php php php php/php*php*
php php php php php php*php Dispatchesphp aphp requestphp objectphp tophp aphp controllerphp/actionphp.php php Ifphp thephp action
php php php php php php*php requestsphp aphp forwardphp tophp anotherphp actionphp,php aphp newphp requestphp willphp bephp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp,php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp aphp givenphp modulephp isphp valid
php php php php php php*
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidModulephp(php$modulephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp modulephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultModulephp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp controllerphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultControllerNamephp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp action
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultActionphp(php)php;
php}
