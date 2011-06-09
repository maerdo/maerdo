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
php php*php php@versionphp php php php php$Idphp:php Chainphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Chainphp routephp isphp usedphp forphp managingphp routephp chainingphp.
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Routephp_Chainphp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Abstract
php{
php php php php protectedphp php$php_routesphp php=php arrayphp(php)php;
php php php php protectedphp php$php_separatorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Instantiatesphp routephp basedphp onphp passedphp Zendphp_Configphp structure
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$configphp Configurationphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$defsphp php=php php(php$configphp-php>defaultsphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>defaultsphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php returnphp newphp selfphp(php$configphp-php>routephp,php php$defsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp routephp tophp thisphp chain
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php$route
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$separator
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Chain
php php php php php php*php/
php php php php publicphp functionphp chainphp(Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php$routephp,php php$separatorphp php=php php'php/php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_routesphp[php]php php php php php php=php php$routephp;
php php php php php php php php php$thisphp-php>php_separatorsphp[php]php php=php php$separatorphp;

php php php php php php php php returnphp php$thisphp;

php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp pathphp withphp aphp previouslyphp definedphp routephp.
php php php php php php*php Assignsphp andphp returnsphp anphp arrayphp ofphp defaultsphp onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Httpphp php$requestphp Requestphp tophp getphp thephp pathphp infophp from
php php php php php php*php php@returnphp arrayphp|falsephp Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$requestphp,php php$partialphp php=php nullphp)
php php php php php{
php php php php php php php php php$pathphp php php php php=php trimphp(php$requestphp-php>getPathInfophp(php)php,php php'php/php'php)php;
php php php php php php php php php$subPathphp php=php php$pathphp;
php php php php php php php php php$valuesphp php php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_routesphp asphp php$keyphp php=php>php php$routephp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php>php php0
php php php php php php php php php php php php php php php php php&php&php php$matchedPathphp php!php=php=php null
php php php php php php php php php php php php php php php php php&php&php php$subPathphp php!php=php=php php'php'
php php php php php php php php php php php php php php php php php&php&php php$subPathphp php!php=php=php false
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$separatorphp php=php substrphp(php$subPathphp,php php0php,php strlenphp(php$thisphp-php>php_separatorsphp[php$keyphp]php)php)php;

php php php php php php php php php php php php php php php php ifphp php(php$separatorphp php!php=php=php php$thisphp-php>php_separatorsphp[php$keyphp]php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$subPathphp php=php substrphp(php$subPathphp,php strlenphp(php$separatorphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php TODOphp:php Shouldphp bephp anphp interfacephp methodphp.php Hackphp forphp php1php.php0php BC
php php php php php php php php php php php php ifphp php(php!methodphp_existsphp(php$routephp,php php'getVersionphp'php)php php|php|php php$routephp-php>getVersionphp(php)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$matchphp php=php php$subPathphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$requestphp-php>setPathInfophp(php$subPathphp)php;
php php php php php php php php php php php php php php php php php$matchphp php=php php$requestphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resphp php=php php$routephp-php>matchphp(php$matchphp,php truephp)php;
php php php php php php php php php php php php ifphp php(php$resphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$matchedPathphp php=php php$routephp-php>getMatchedPathphp(php)php;

php php php php php php php php php php php php ifphp php(php$matchedPathphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$subPathphp php php php php php=php substrphp(php$subPathphp,php strlenphp(php$matchedPathphp)php)php;
php php php php php php php php php php php php php php php php php$separatorphp php php php=php substrphp(php$subPathphp,php php0php,php strlenphp(php$thisphp-php>php_separatorsphp[php$keyphp]php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuesphp php=php php$resphp php+php php$valuesphp;
php php php php php php php php php}

php php php php php php php php php$requestphp-php>setPathInfophp(php$pathphp)php;

php php php php php php php php ifphp php(php$subPathphp php!php=php=php php'php'php php&php&php php$subPathphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp aphp URLphp pathphp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp Anphp arrayphp ofphp variablephp andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php falsephp)
php php php php php{
php php php php php php php php php$valuephp php php php php php=php php'php'php;
php php php php php php php php php$numRoutesphp php=php countphp(php$thisphp-php>php_routesphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_routesphp asphp php$keyphp php=php>php php$routephp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$valuephp php.php=php php$thisphp-php>php_separatorsphp[php$keyphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuephp php.php=php php$routephp-php>assemblephp(php$dataphp,php php$resetphp,php php$encodephp,php php(php(php$numRoutesphp php-php php1php)php php>php php$keyphp)php)php;

php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$routephp,php php'getVariablesphp'php)php)php php{
php php php php php php php php php php php php php php php php php$variablesphp php=php php$routephp-php>getVariablesphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$variablesphp asphp php$variablephp)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$variablephp]php php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp requestphp objectphp forphp thisphp andphp thephp childphp routes
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp|nullphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_routesphp asphp php$routephp)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$routephp,php php'setRequestphp'php)php)php php{
php php php php php php php php php php php php php php php php php$routephp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php}
