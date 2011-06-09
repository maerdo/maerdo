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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Element
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Elementphp.phpphp'php;


php/php*php*
php php*php Thephp Zendphp_Feedphp_Abstractphp classphp isphp anphp abstractphp classphp representingphp feedsphp.
php php*
php php*php Zendphp_Feedphp_Abstractphp implementsphp twophp corephp PHPphp php5php interfacesphp:php ArrayAccessphp and
php php*php Iteratorphp.php Inphp bothphp casesphp thephp collectionphp beingphp treatedphp asphp anphp arrayphp is
php php*php consideredphp tophp bephp thephp entryphp collectionphp,php suchphp thatphp iteratingphp overphp the
php php*php feedphp takesphp youphp throughphp eachphp ofphp thephp feedphp.sphp entriesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Abstractphp extendsphp Zendphp_Feedphp_Elementphp implementsphp Iteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Currentphp indexphp onphp thephp collectionphp ofphp feedphp entriesphp forphp the
php php php php php php*php Iteratorphp implementationphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_entryIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Cachephp ofphp feedphp entriesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_entriesphp;

php php php php php/php*php*
php php php php php php*php Feedphp constructor
php php php php php php*
php php php php php php*php Thephp Zendphp_Feedphp_Abstractphp constructorphp takesphp thephp URIphp ofphp aphp feedphp orphp a
php php php php php php*php feedphp representedphp asphp aphp stringphp andphp loadsphp itphp asphp XMLphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uriphp Thephp fullphp URIphp ofphp thephp feedphp tophp loadphp,php orphp NULLphp ifphp notphp retrievedphp viaphp HTTPphp orphp asphp anphp arrayphp.
php php php php php php*php php@paramphp php stringphp php$stringphp Thephp feedphp asphp aphp stringphp,php orphp NULLphp ifphp retrievedphp viaphp HTTPphp orphp asphp anphp arrayphp.
php php php php php php*php php@paramphp php Zendphp_Feedphp_Builderphp_Interfacephp php$builderphp Thephp feedphp asphp aphp builderphp instancephp orphp NULLphp ifphp retrievedphp asphp aphp stringphp orphp viaphp HTTPphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exceptionphp Ifphp loadingphp thephp feedphp failedphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$uriphp php=php nullphp,php php$stringphp php=php nullphp,php Zendphp_Feedphp_Builderphp_Interfacephp php$builderphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$uriphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Retrievephp thephp feedphp viaphp HTTP
php php php php php php php php php php php php php$clientphp php=php Zendphp_Feedphp:php:getHttpClientphp(php)php;
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'GETphp'php)php;
php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Feedphp failedphp tophp loadphp,php gotphp responsephp codephp php'php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_php_wakeupphp(php)php;
php php php php php php php php php}php elseifphp php(php$stringphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Retrievephp thephp feedphp fromphp php$string
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$stringphp;
php php php php php php php php php php php php php$thisphp-php>php_php_wakeupphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Generatephp thephp feedphp fromphp thephp array
php php php php php php php php php php php php php$headerphp php=php php$builderphp-php>getHeaderphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$headerphp[php'charsetphp'php]php)php;
php php php php php php php php php php php php php$rootphp php=php php$thisphp-php>php_mapFeedHeadersphp(php$headerphp)php;
php php php php php php php php php php php php php$thisphp-php>php_mapFeedEntriesphp(php$rootphp,php php$builderphp-php>getEntriesphp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$rootphp;
php php php php php php php php php php php php php$thisphp-php>php_buildEntryCachephp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Loadphp thephp feedphp asphp anphp XMLphp DOMDocumentphp object
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php@iniphp_setphp(php'trackphp_errorsphp'php,php php1php)php;
php php php php php php php php php$docphp php=php newphp DOMDocumentphp;
php php php php php php php php php$statusphp php=php php@php$docphp-php>loadXMLphp(php$thisphp-php>php_elementphp)php;
php php php php php php php php php@iniphp_restorephp(php'trackphp_errorsphp'php)php;

php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php/php/php preventphp thephp classphp tophp generatephp anphp undefinedphp variablephp noticephp php(ZFphp-php2php5php9php0php)
php php php php php php php php php php php php ifphp php(php!issetphp(php$phpphp_errormsgphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'xdebugphp_isphp_enabledphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp,php whenphp XDebugphp isphp runningphp)php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp)php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"DOMDocumentphp cannotphp parsephp XMLphp:php php$phpphp_errormsgphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_elementphp php=php php$docphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Preparephp forphp serialiation
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_elementphp php=php php$thisphp-php>saveXMLphp(php)php;

php php php php php php php php returnphp arrayphp(php'php_elementphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Cachephp thephp individualphp feedphp elementsphp sophp theyphp donphp'tphp needphp tophp be
php php php php php php*php searchedphp forphp onphp everyphp operationphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_buildEntryCachephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_entriesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_elementphp-php>childNodesphp asphp php$childphp)php php{
php php php php php php php php php php php php ifphp php(php$childphp-php>localNamephp php=php=php php$thisphp-php>php_entryElementNamephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$childphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp entriesphp inphp thisphp feedphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp integerphp Entryphp countphp.
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_entriesphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_entryIndexphp php=php php0php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Thephp currentphp rowphp,php orphp nullphp ifphp nophp rowsphp.
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp newphp php$thisphp-php>php_entryClassNamephp(
php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php$thisphp-php>php_entriesphp[php$thisphp-php>php_entryIndexphp]php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Thephp currentphp rowphp numberphp php(startsphp atphp php0php)php,php orphp NULLphp ifphp nophp rows
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entryIndexphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Thephp nextphp rowphp,php orphp nullphp ifphp nophp morephp rowsphp.
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_entryIndexphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp booleanphp Whetherphp thephp iterationphp isphp valid
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php0php <php=php php$thisphp-php>php_entryIndexphp php&php&php php$thisphp-php>php_entryIndexphp <php php$thisphp-php>countphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp thephp headerphp ofphp thephp feedphp whenphp workingphp inphp writephp mode
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$arrayphp thephp dataphp tophp use
php php php php php php*php php@returnphp DOMElementphp rootphp node
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_mapFeedHeadersphp(php$arrayphp)php;

php php php php php/php*php*
php php php php php php*php Generatephp thephp entriesphp ofphp thephp feedphp whenphp workingphp inphp writephp mode
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$rootphp thephp rootphp nodephp tophp use
php php php php php php*php php@paramphp php arrayphp php$arrayphp thephp dataphp tophp use
php php php php php php*php php@returnphp DOMElementphp rootphp node
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_mapFeedEntriesphp(DOMElementphp php$rootphp,php php$arrayphp)php;

php php php php php/php*php*
php php php php php php*php Sendphp feedphp tophp aphp httpphp clientphp withphp thephp correctphp header
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exceptionphp ifphp headersphp havephp alreadyphp beenphp sent
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp sendphp(php)php;
php}
