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
php php*php php@versionphp php php php php$Idphp:php Staticphp.phpphp php2php3php2php1php0php php2php0php1php0php-php1php0php-php2php1php php1php6php:php1php0php:php5php5Zphp matthewphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Abstractphp.phpphp'php;

php/php*php*
php php*php StaticRoutephp isphp usedphp forphp managingphp staticphp URIsphp.
php php*
php php*php Itphp'sphp aphp lotphp fasterphp comparedphp tophp thephp standardphp Routephp implementationphp.
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Routephp_Staticphp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Abstract
php{

php php php php protectedphp php$php_routephp php=php nullphp;
php php php php protectedphp php$php_defaultsphp php=php arrayphp(php)php;

php php php php publicphp functionphp getVersionphp(php)php php{
php php php php php php php php returnphp php1php;
php php php php php}

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
php php php php php php*php Preparesphp thephp routephp forphp mappingphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$routephp Mapphp usedphp tophp matchphp withphp laterphp submittedphp URLphp path
php php php php php php*php php@paramphp arrayphp php$defaultsphp Defaultsphp forphp mapphp variablesphp withphp keysphp asphp variablephp names
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$routephp,php php$defaultsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_routephp php=php trimphp(php$routephp,php php'php/php'php)php;
php php php php php php php php php$thisphp-php>php_defaultsphp php=php php(arrayphp)php php$defaultsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp pathphp withphp aphp previouslyphp definedphp routephp.
php php php php php php*php Assignsphp andphp returnsphp anphp arrayphp ofphp defaultsphp onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp Pathphp usedphp tophp matchphp againstphp thisphp routingphp map
php php php php php php*php php@returnphp arrayphp|falsephp Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$pathphp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$partialphp)php php{
php php php php php php php php php php php php ifphp php(php(emptyphp(php$pathphp)php php&php&php emptyphp(php$thisphp-php>php_routephp)php)
php php php php php php php php php php php php php php php php php|php|php php(substrphp(php$pathphp,php php0php,php strlenphp(php$thisphp-php>php_routephp)php)php php=php=php=php php$thisphp-php>php_routephp)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMatchedPathphp(php$thisphp-php>php_routephp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(trimphp(php$pathphp,php php'php/php'php)php php=php=php php$thisphp-php>php_routephp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp aphp URLphp pathphp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp Anphp arrayphp ofphp variablephp andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php falsephp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_routephp;
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
php php php php php php php php returnphp nullphp;
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
