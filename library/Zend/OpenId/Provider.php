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
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Provider
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Providerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_OpenId
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Extension
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp/Extensionphp.phpphp"php;

php/php*php*
php php*php OpenIDphp providerphp php(serverphp)php implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Provider
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_OpenIdphp_Provider
php{

php php php php php/php*php*
php php php php php php*php Referencephp tophp anphp implementationphp ofphp storagephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_OpenIdphp_Providerphp_Storagephp php$php_storage
php php php php php php*php/
php php php php privatephp php$php_storagephp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp anphp implementationphp ofphp userphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_OpenIdphp_Providerphp_Userphp php$php_user
php php php php php php*php/
php php php php privatephp php$php_userphp;

php php php php php/php*php*
php php php php php php*php Timephp tophp livephp ofphp associationphp sessionphp inphp secconds
php php php php php php*
php php php php php php*php php@varphp integerphp php$php_sessionTtl
php php php php php php*php/
php php php php privatephp php$php_sessionTtlphp;

php php php php php/php*php*
php php php php php php*php URLphp tophp peformphp interactivephp userphp login
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_loginUrl
php php php php php php*php/
php php php php privatephp php$php_loginUrlphp;

php php php php php/php*php*
php php php php php php*php URLphp tophp peformphp interactivephp validationphp ofphp consumerphp byphp user
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_trustUrl
php php php php php php*php/
php php php php privatephp php$php_trustUrlphp;

php php php php php/php*php*
php php php php php php*php Thephp OPphp Endpointphp URL
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_opEndpoint
php php php php php php*php/
php php php php privatephp php$php_opEndpointphp;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp Zendphp_OpenIdphp_Providerphp objectphp withphp givenphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$loginUrlphp isphp anphp URLphp thatphp providesphp loginphp screenphp for
php php php php php php*php php endphp-userphp php(byphp defaultphp itphp isphp thephp samephp URLphp withphp additionalphp GETphp variable
php php php php php php*php php openidphp.actionphp=loginphp)
php php php php php php*php php@paramphp stringphp php$trustUrlphp isphp anphp URLphp thatphp showsphp aphp questionphp ifphp endphp-user
php php php php php php*php php trustphp tophp givenphp consumerphp php(byphp defaultphp itphp isphp thephp samephp URLphp withphp additional
php php php php php php*php php GETphp variablephp openidphp.actionphp=trustphp)
php php php php php php*php php@paramphp Zendphp_OpenIdphp_Providerphp_Userphp php$userphp isphp anphp objectphp forphp communication
php php php php php php*php php withphp Userphp-Agentphp andphp storephp informationphp aboutphp loggedphp-inphp userphp php(itphp isphp a
php php php php php php*php php Zendphp_OpenIdphp_Providerphp_Userphp_Sessionphp objectphp byphp defaultphp)
php php php php php php*php php@paramphp Zendphp_OpenIdphp_Providerphp_Storagephp php$storagephp isphp anphp objectphp forphp keeping
php php php php php php*php php persistentphp databasephp php(itphp isphp aphp Zendphp_OpenIdphp_Providerphp_Storagephp_Filephp object
php php php php php php*php php byphp defaultphp)
php php php php php php*php php@paramphp integerphp php$sessionTtlphp isphp aphp defaultphp timephp tophp livephp forphp association
php php php php php php*php php php sessionphp inphp secondsphp php(php1php hourphp byphp defaultphp)php.php Consumerphp mustphp reestablish
php php php php php php*php php php associationphp afterphp thatphp timephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$loginUrlphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$trustUrlphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Providerphp_Userphp php$userphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Providerphp_Storagephp php$storagephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$sessionTtlphp php=php php3php6php0php0php)
php php php php php{
php php php php php php php php ifphp php(php$loginUrlphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$loginUrlphp php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php php.php php'php?openidphp.actionphp=loginphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$loginUrlphp php=php Zendphp_OpenIdphp:php:absoluteUrlphp(php$loginUrlphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_loginUrlphp php=php php$loginUrlphp;
php php php php php php php php ifphp php(php$trustUrlphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$trustUrlphp php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php php.php php'php?openidphp.actionphp=trustphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$trustUrlphp php=php Zendphp_OpenIdphp:php:absoluteUrlphp(php$trustUrlphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_trustUrlphp php=php php$trustUrlphp;
php php php php php php php php ifphp php(php$userphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/OpenIdphp/Providerphp/Userphp/Sessionphp.phpphp"php;
php php php php php php php php php php php php php$thisphp-php>php_userphp php=php newphp Zendphp_OpenIdphp_Providerphp_Userphp_Sessionphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_userphp php=php php$userphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$storagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/OpenIdphp/Providerphp/Storagephp/Filephp.phpphp"php;
php php php php php php php php php php php php php$thisphp-php>php_storagephp php=php newphp Zendphp_OpenIdphp_Providerphp_Storagephp_Filephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_sessionTtlphp php=php php$sessionTtlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp OPphp Endpointphp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp thephp OPphp Endpointphp URL
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp setOpEndpointphp(php$urlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_opEndpointphp php=php php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registersphp aphp newphp userphp withphp givenphp php$idphp andphp php$password
php php php php php php*php Returnsphp truephp inphp casephp ofphp successphp andphp falsephp ifphp userphp withphp givenphp php$idphp already
php php php php php php*php exists
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@paramphp stringphp php$passwordphp encodedphp userphp password
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp registerphp(php$idphp,php php$passwordphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php php|php|php emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_storagephp-php>addUserphp(php$idphp,php mdphp5php(php$idphp.php$passwordphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp userphp withphp givenphp php$idphp existsphp andphp falsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasUserphp(php$idphp)php php{
php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_storagephp-php>hasUserphp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp loginphp ofphp userphp withphp givenphp php$idphp andphp php$password
php php php php php php*php Returnsphp truephp inphp casephp ofphp successphp andphp falsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@paramphp stringphp php$passwordphp userphp password
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp loginphp(php$idphp,php php$passwordphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_storagephp-php>checkUserphp(php$idphp,php mdphp5php(php$idphp.php$passwordphp)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_userphp-php>setLoggedInUserphp(php$idphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp logoutphp.php Clearsphp informationphp aboutphp loggedphp inphp userphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp logoutphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_userphp-php>delLoggedInUserphp(php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp identityphp URLphp ofphp currentphp loggedphp inphp userphp orphp false
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getLoggedInUserphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_userphp-php>getLoggedInUserphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp consumerphp'sphp rootphp URLphp fromphp requestphp queryphp.
php php php php php php*php Returnsphp URLphp orphp falsephp inphp casephp ofphp failure
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp queryphp arguments
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getSiteRootphp(php$paramsphp)
php php php php php{
php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_nsphp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_nsphp'php]php php=php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php php&php&php issetphp(php$paramsphp[php'openidphp_realmphp'php]php)php)php php{
php php php php php php php php php php php php php$rootphp php=php php$paramsphp[php'openidphp_realmphp'php]php;
php php php php php php php php php}php elsephp ifphp php(php$versionphp <php php2php.php0php php&php&php issetphp(php$paramsphp[php'openidphp_trustphp_rootphp'php]php)php)php php{
php php php php php php php php php php php php php$rootphp php=php php$paramsphp[php'openidphp_trustphp_rootphp'php]php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php$rootphp php=php php$paramsphp[php'openidphp_returnphp_tophp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(Zendphp_OpenIdphp:php:normalizeUrlphp(php$rootphp)php php&php&php php!emptyphp(php$rootphp)php)php php{
php php php php php php php php php php php php returnphp php$rootphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp consumerphp withphp givenphp rootphp URLphp tophp authenticatephp currentphp logged
php php php php php php*php inphp userphp.php Returnsphp truephp onphp successphp andphp falsephp onphp errorphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rootphp rootphp URL
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp allowSitephp(php$rootphp,php php$extensionsphp=nullphp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getLoggedInUserphp(php)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$extensionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'getTrustDataphp'php,php php$dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp php=php truephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_storagephp-php>addSitephp(php$idphp,php php$rootphp,php php$dataphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Prohibitphp consumerphp withphp givenphp rootphp URLphp tophp authenticatephp currentphp logged
php php php php php php*php inphp userphp.php Returnsphp truephp onphp successphp andphp falsephp onphp errorphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rootphp rootphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp denySitephp(php$rootphp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getLoggedInUserphp(php)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_storagephp-php>addSitephp(php$idphp,php php$rootphp,php falsephp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp consumerphp withphp givenphp rootphp URLphp fromphp knownphp sitesphp ofphp currentphp logged
php php php php php php*php inphp userphp.php Nextphp timephp thisphp consumerphp willphp tryphp tophp authenticatephp thephp userphp,
php php php php php php*php Providerphp willphp askphp userphp'sphp confirmationphp.
php php php php php php*php Returnsphp truephp onphp successphp andphp falsephp onphp errorphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rootphp rootphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp delSitephp(php$rootphp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getLoggedInUserphp(php)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_storagephp-php>addSitephp(php$idphp,php php$rootphp,php nullphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp listphp ofphp knownphp consumersphp forphp currentphp loggedphp inphp userphp orphp false
php php php php php php*php ifphp hephp isphp notphp loggedphp inphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getTrustedSitesphp(php)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getLoggedInUserphp(php)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_storagephp-php>getTrustedSitesphp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlesphp HTTPphp requestphp fromphp consumer
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp variablesphp.php Ifphp thisphp parameterphp isphp omited
php php php php php php*php php orphp setphp tophp nullphp,php thenphp php$php_GETphp orphp php$php_POSTphp superglobalphp variablephp isphp used
php php php php php php*php php accordingphp tophp REQUESTphp_METHODphp.
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$paramsphp=nullphp,php php$extensionsphp=nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$paramsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$php_SERVERphp[php"REQUESTphp_METHODphp"php]php php=php=php php"GETphp"php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php php$php_GETphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$php_SERVERphp[php"REQUESTphp_METHODphp"php]php php=php=php php"POSTphp"php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php php$php_POSTphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_nsphp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_nsphp'php]php php=php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_modephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$paramsphp[php'openidphp_modephp'php]php php=php=php php'associatephp'php)php php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_associatephp(php$versionphp,php php$paramsphp)php;
php php php php php php php php php php php php php php php php php$retphp php=php php'php'php;
php php php php php php php php php php php php php php php php foreachphp php(php$responsephp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php.php=php php$keyphp php.php php'php:php'php php.php php$valphp php.php php"php\nphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$paramsphp[php'openidphp_modephp'php]php php=php=php php'checkidphp_immediatephp'php)php php{
php php php php php php php php php php php php php php php php php$retphp php=php php$thisphp-php>php_checkIdphp(php$versionphp,php php$paramsphp,php php1php,php php$extensionsphp,php php$responsephp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_boolphp(php$retphp)php)php returnphp php$retphp;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php,php php$retphp,php php$responsephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$paramsphp[php'openidphp_modephp'php]php php=php=php php'checkidphp_setupphp'php)php php{
php php php php php php php php php php php php php php php php php$retphp php=php php$thisphp-php>php_checkIdphp(php$versionphp,php php$paramsphp,php php0php,php php$extensionsphp,php php$responsephp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_boolphp(php$retphp)php)php returnphp php$retphp;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php,php php$retphp,php php$responsephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$paramsphp[php'openidphp_modephp'php]php php=php=php php'checkphp_authenticationphp'php)php php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_checkAuthenticationphp(php$versionphp,php php$paramsphp)php;
php php php php php php php php php php php php php php php php php$retphp php=php php'php'php;
php php php php php php php php php php php php php php php php foreachphp php(php$responsephp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php.php=php php$keyphp php.php php'php:php'php php.php php$valphp php.php php"php\nphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp aphp secretphp keyphp forphp givenphp hashphp functionphp,php returnsphp RAWphp keyphp orphp false
php php php php php php*php ifphp functionphp isphp notphp supported
php php php php php php*
php php php php php php*php php@paramphp stringphp php$funcphp hashphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_genSecretphp(php$funcphp)
php php php php php{
php php php php php php php php ifphp php(php$funcphp php=php=php php'shaphp1php'php)php php{
php php php php php php php php php php php php php$macLenphp php=php php2php0php;php php/php*php php1php6php0php bitphp php*php/
php php php php php php php php php}php elsephp ifphp php(php$funcphp php=php=php php'shaphp2php5php6php'php)php php{
php php php php php php php php php php php php php$macLenphp php=php php3php2php;php php/php*php php2php5php6php bitphp php*php/
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp Zendphp_OpenIdphp:php:randomBytesphp(php$macLenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processesphp associationphp requestphp fromphp OpenIDphp consumermphp generatesphp secret
php php php php php php*php sharedphp keyphp andphp sendphp itphp backphp usingphp Diffiephp-Hellmanphp encruptionphp.
php php php php php php*php Returnsphp arrayphp ofphp variablesphp tophp pushphp backphp tophp consumerphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$versionphp OpenIDphp version
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp requestphp variables
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_associatephp(php$versionphp,php php$paramsphp)
php php php php php{
php php php php php php php php php$retphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$retphp[php'nsphp'php]php php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_assocphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_assocphp_typephp'php]php php=php=php php'HMACphp-SHAphp1php'php)php php{
php php php php php php php php php php php php php$macFuncphp php=php php'shaphp1php'php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'openidphp_assocphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_assocphp_typephp'php]php php=php=php php'HMACphp-SHAphp2php5php6php'php php&php&
php php php php php php php php php php php php php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$macFuncphp php=php php'shaphp2php5php6php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$retphp[php'errorphp'php]php php=php php'Wrongphp php"openidphp.assocphp_typephp"php'php;
php php php php php php php php php php php php php$retphp[php'errorphp-codephp'php]php php=php php'unsupportedphp-typephp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}

php php php php php php php php php$retphp[php'assocphp_typephp'php]php php=php php$paramsphp[php'openidphp_assocphp_typephp'php]php;

php php php php php php php php php$secretphp php=php php$thisphp-php>php_genSecretphp(php$macFuncphp)php;

php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_sessionphp_typephp'php]php)php php|php|
php php php php php php php php php php php php php$paramsphp[php'openidphp_sessionphp_typephp'php]php php=php=php php'nophp-encryptionphp'php)php php{
php php php php php php php php php php php php php$retphp[php'macphp_keyphp'php]php php=php basephp6php4php_encodephp(php$secretphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'openidphp_sessionphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp1php'php)php php{
php php php php php php php php php php php php php$dhFuncphp php=php php'shaphp1php'php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'openidphp_sessionphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp2php5php6php'php php&php&
php php php php php php php php php php php php php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$dhFuncphp php=php php'shaphp2php5php6php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$retphp[php'errorphp'php]php php=php php'Wrongphp php"openidphp.sessionphp_typephp"php'php;
php php php php php php php php php php php php php$retphp[php'errorphp-codephp'php]php php=php php'unsupportedphp-typephp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_sessionphp_typephp'php]php)php)php php{
php php php php php php php php php php php php php$retphp[php'sessionphp_typephp'php]php php=php php$paramsphp[php'openidphp_sessionphp_typephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$dhFuncphp)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_dhphp_consumerphp_publicphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$retphp[php'errorphp'php]php php=php php'Wrongphp php"openidphp.dhphp_consumerphp_publicphp"php'php;
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_dhphp_genphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$gphp php=php packphp(php'Hphp*php'php,php Zendphp_OpenIdphp:php:DHphp_Gphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$gphp php=php basephp6php4php_decodephp(php$paramsphp[php'openidphp_dhphp_genphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_dhphp_modulusphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$pphp php=php packphp(php'Hphp*php'php,php Zendphp_OpenIdphp:php:DHphp_Pphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$pphp php=php basephp6php4php_decodephp(php$paramsphp[php'openidphp_dhphp_modulusphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dhphp php=php Zendphp_OpenIdphp:php:createDhKeyphp(php$pphp,php php$gphp)php;
php php php php php php php php php php php php php$dhphp_detailsphp php=php Zendphp_OpenIdphp:php:getDhKeyDetailsphp(php$dhphp)php;

php php php php php php php php php php php php php$secphp php=php Zendphp_OpenIdphp:php:computeDhSecretphp(
php php php php php php php php php php php php php php php php basephp6php4php_decodephp(php$paramsphp[php'openidphp_dhphp_consumerphp_publicphp'php]php)php,php php$dhphp)php;
php php php php php php php php php php php php ifphp php(php$secphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$retphp[php'errorphp'php]php php=php php'Wrongphp php"openidphp.sessionphp_typephp"php'php;
php php php php php php php php php php php php php php php php php$retphp[php'errorphp-codephp'php]php php=php php'unsupportedphp-typephp'php;
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$secphp php=php Zendphp_OpenIdphp:php:digestphp(php$dhFuncphp,php php$secphp)php;
php php php php php php php php php php php php php$retphp[php'dhphp_serverphp_publicphp'php]php php=php basephp6php4php_encodephp(
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:btwocphp(php$dhphp_detailsphp[php'pubphp_keyphp'php]php)php)php;
php php php php php php php php php php php php php$retphp[php'encphp_macphp_keyphp'php]php php php php php php php=php basephp6php4php_encodephp(php$secretphp php^php php$secphp)php;
php php php php php php php php php}

php php php php php php php php php$handlephp php=php uniqidphp(php)php;
php php php php php php php php php$expiresInphp php=php php$thisphp-php>php_sessionTtlphp;

php php php php php php php php php$retphp[php'assocphp_handlephp'php]php php=php php$handlephp;
php php php php php php php php php$retphp[php'expiresphp_inphp'php]php php=php php$expiresInphp;

php php php php php php php php php$thisphp-php>php_storagephp-php>addAssociationphp(php$handlephp,
php php php php php php php php php php php php php$macFuncphp,php php$secretphp,php timephp(php)php php+php php$expiresInphp)php;

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp authenticationphp php(orphp authenticationphp checkphp)php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$versionphp OpenIDphp version
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp requestphp variables
php php php php php php*php php@paramphp boolphp php$immediatephp enablesphp orphp disablesphp interactionphp withphp user
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_checkIdphp(php$versionphp,php php$paramsphp,php php$immediatephp,php php$extensionsphp=nullphp,
php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php php$retphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.nsphp'php]php php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php;
php php php php php php php php php}
php php php php php php php php php$rootphp php=php php$thisphp-php>getSiteRootphp(php$paramsphp)php;
php php php php php php php php ifphp php(php$rootphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_identityphp'php]php)php php&php&
php php php php php php php php php php php php php!php$thisphp-php>php_storagephp-php>hasUserphp(php$paramsphp[php'openidphp_identityphp'php]php)php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php(php$immediatephp php&php&php php$versionphp php>php=php php2php.php0php)php php?php php'setupphp_neededphp'php:php php'cancelphp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}

php php php php php php php php php/php*php Checkphp ifphp userphp alreadyphp loggedphp inphp intophp thephp serverphp php*php/
php php php php php php php php ifphp php(php!issetphp(php$paramsphp[php'openidphp_identityphp'php]php)php php|php|
php php php php php php php php php php php php php$thisphp-php>php_userphp-php>getLoggedInUserphp(php)php php!php=php=php php$paramsphp[php'openidphp_identityphp'php]php)php php{
php php php php php php php php php php php php php$paramsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php'openidphp_nsphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.nsphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_nsphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_sregphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.sregphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_sregphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp2php[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$immediatephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp2php[php'openidphp.modephp'php]php php=php php'checkidphp_setupphp'php;
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php(php$versionphp php>php=php php2php.php0php)php php?php php'setupphp_neededphp'php:php php'idphp_resphp'php;
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.userphp_setupphp_urlphp'php]php php=php php$thisphp-php>php_loginUrl
php php php php php php php php php php php php php php php php php php php php php.php php(strposphp(php$thisphp-php>php_loginUrlphp,php php'php?php'php)php php=php=php=php falsephp php?php php'php?php'php php:php php'php&php'php)
php php php php php php php php php php php php php php php php php php php php php.php Zendphp_OpenIdphp:php:paramsToQueryphp(php$paramsphp2php)php;
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php Redirectphp tophp Serverphp Loginphp Screenphp php*php/
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$thisphp-php>php_loginUrlphp,php php$paramsphp2php,php php$responsephp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'parseRequestphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php(php$immediatephp php&php&php php$versionphp php>php=php php2php.php0php)php php?php php'setupphp_neededphp'php:php php'cancelphp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}

php php php php php php php php php/php*php Checkphp ifphp userphp trustsphp tophp thephp consumerphp php*php/
php php php php php php php php php$trustedphp php=php nullphp;
php php php php php php php php php$sitesphp php=php php$thisphp-php>php_storagephp-php>getTrustedSitesphp(php$paramsphp[php'openidphp_identityphp'php]php)php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php$rootphp php=php php$paramsphp[php'openidphp_returnphp_tophp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$sitesphp[php$rootphp]php)php)php php{
php php php php php php php php php php php php php$trustedphp php=php php$sitesphp[php$rootphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$sitesphp asphp php$sitephp php=php>php php$tphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$rootphp,php php$sitephp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$trustedphp php=php php$tphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php*php OpenIDphp php2php.php0php php(php9php.php2php)php checkphp forphp realmphp wildphp-cardphp matchingphp php*php/
php php php php php php php php php php php php php php php php php php php php php$nphp php=php strposphp(php$sitephp,php php'php:php/php/php*php.php'php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$nphp php!php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$regexphp php=php php'php/php^php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php pregphp_quotephp(substrphp(php$sitephp,php php0php,php php$nphp+php3php)php,php php'php/php'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php[Aphp-Zaphp-zphp1php-php9php_php\php.php]php+php?php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php pregphp_quotephp(substrphp(php$sitephp,php php$nphp+php4php)php,php php'php/php'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php/php'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php$regexphp,php php$rootphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$trustedphp php=php php$tphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$trustedphp)php)php php{
php php php php php php php php php php php php ifphp php(php!Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'checkTrustDataphp'php,php php$trustedphp)php)php php{
php php php php php php php php php php php php php php php php php$trustedphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$trustedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php'cancelphp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php elsephp ifphp php(php$trustedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php Redirectphp tophp Serverphp Trustphp Screenphp php*php/
php php php php php php php php php php php php php$paramsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php'openidphp_nsphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.nsphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_nsphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_sregphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.sregphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_sregphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp2php[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$immediatephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp2php[php'openidphp.modephp'php]php php=php php'checkidphp_setupphp'php;
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php(php$versionphp php>php=php php2php.php0php)php php?php php'setupphp_neededphp'php:php php'idphp_resphp'php;
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.userphp_setupphp_urlphp'php]php php=php php$thisphp-php>php_trustUrl
php php php php php php php php php php php php php php php php php php php php php.php php(strposphp(php$thisphp-php>php_trustUrlphp,php php'php?php'php)php php=php=php=php falsephp php?php php'php?php'php php:php php'php&php'php)
php php php php php php php php php php php php php php php php php php php php php.php Zendphp_OpenIdphp:php:paramsToQueryphp(php$paramsphp2php)php;
php php php php php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$thisphp-php>php_trustUrlphp,php php$paramsphp2php,php php$responsephp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_respondphp(php$versionphp,php php$retphp,php php$paramsphp,php php$extensionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pereparesphp informationphp tophp sendphp backphp tophp consumerphp'sphp authenticationphp requestphp,
php php php php php php*php signsphp itphp usingphp sharedphp secretphp andphp sendphp backphp throughphp HTTPphp redirection
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp requestphp variables
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp respondToConsumerphp(php$paramsphp,php php$extensionsphp=nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_nsphp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_nsphp'php]php php=php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php}
php php php php php php php php php$retphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.nsphp'php]php php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php;
php php php php php php php php php}
php php php php php php php php php$retphp php=php php$thisphp-php>php_respondphp(php$versionphp,php php$retphp,php php$paramsphp,php php$extensionsphp)php;
php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php,php php$retphp,php php$responsephp)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pereparesphp informationphp tophp sendphp backphp tophp consumerphp'sphp authenticationphp request
php php php php php php*php andphp signsphp itphp usingphp sharedphp secretphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$versionphp OpenIDphp protcolphp version
php php php php php php*php php@paramphp arrayphp php$retphp argumentsphp tophp bephp sendphp backphp tophp consumer
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp requestphp variables
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_respondphp(php$versionphp,php php$retphp,php php$paramsphp,php php$extensionsphp=nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php)php php|php|
php php php php php php php php php php php php php!php$thisphp-php>php_storagephp-php>getAssociationphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php,
php php php php php php php php php php php php php php php php php$macFuncphp,php php$secretphp,php php$expiresphp)php)php php{
php php php php php php php php php php php php php/php*php Usephp dumbphp modephp php*php/
php php php php php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.invalidatephp_handlephp'php]php php=php php$paramsphp[php'openidphp_assocphp_handlephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$macFuncphp php=php php$versionphp php>php=php php2php.php0php php?php php'shaphp2php5php6php'php php:php php'shaphp1php'php;
php php php php php php php php php php php php php$secretphp php=php php$thisphp-php>php_genSecretphp(php$macFuncphp)php;
php php php php php php php php php php php php php$handlephp php=php uniqidphp(php)php;
php php php php php php php php php php php php php$expiresInphp php=php php$thisphp-php>php_sessionTtlphp;
php php php php php php php php php php php php php$thisphp-php>php_storagephp-php>addAssociationphp(php$handlephp,
php php php php php php php php php php php php php php php php php$macFuncphp,php php$secretphp,php timephp(php)php php+php php$expiresInphp)php;
php php php php php php php php php php php php php$retphp[php'openidphp.assocphp_handlephp'php]php php=php php$handlephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$retphp[php'openidphp.assocphp_handlephp'php]php php=php php$paramsphp[php'openidphp_assocphp_handlephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.returnphp_tophp'php]php php=php php$paramsphp[php'openidphp_returnphp_tophp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_claimedphp_idphp'php]php)php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.claimedphp_idphp'php]php php=php php$paramsphp[php'openidphp_claimedphp_idphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_identityphp'php]php)php)php php{
php php php php php php php php php php php php php$retphp[php'openidphp.identityphp'php]php php=php php$paramsphp[php'openidphp_identityphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_opEndpointphp)php)php php{
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.opphp_endpointphp'php]php php=php php$thisphp-php>php_opEndpointphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$retphp[php'openidphp.opphp_endpointphp'php]php php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$retphp[php'openidphp.responsephp_noncephp'php]php php=php gmdatephp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php)php php.php uniqidphp(php)php;
php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php'idphp_resphp'php;

php php php php php php php php Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'prepareResponsephp'php,php php$retphp)php;

php php php php php php php php php$signedphp php=php php'php'php;
php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php foreachphp php(php$retphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php'openidphp.php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php substrphp(php$keyphp,php strlenphp(php'openidphp.php'php)php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$signedphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$signedphp php.php=php php'php,php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$signedphp php.php=php php$keyphp;
php php php php php php php php php php php php php php php php php$dataphp php.php=php php$keyphp php.php php'php:php'php php.php php$valphp php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$signedphp php.php=php php'php,signedphp'php;
php php php php php php php php php$dataphp php.php=php php'signedphp:php'php php.php php$signedphp php.php php"php\nphp"php;
php php php php php php php php php$retphp[php'openidphp.signedphp'php]php php=php php$signedphp;

php php php php php php php php php$retphp[php'openidphp.sigphp'php]php php=php basephp6php4php_encodephp(
php php php php php php php php php php php php Zendphp_OpenIdphp:php:hashHmacphp(php$macFuncphp,php php$dataphp,php php$secretphp)php)php;

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp authenticationphp validationphp forphp dumbphp consumers
php php php php php php*php Returnsphp arrayphp ofphp variablesphp tophp pushphp backphp tophp consumerphp.
php php php php php php*php Itphp MUSTphp containphp php'isphp_validphp'php variablephp withphp valuephp php'truephp'php orphp php'falsephp'php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$versionphp OpenIDphp version
php php php php php php*php php@paramphp arrayphp php$paramsphp GETphp orphp POSTphp requestphp variables
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_checkAuthenticationphp(php$versionphp,php php$paramsphp)
php php php php php{
php php php php php php php php php$retphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$retphp[php'nsphp'php]php php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php;
php php php php php php php php php}
php php php php php php php php php$retphp[php'openidphp.modephp'php]php php=php php'idphp_resphp'php;

php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php)php php|php|
php php php php php php php php php php php php emptyphp(php$paramsphp[php'openidphp_signedphp'php]php)php php|php|
php php php php php php php php php php php php emptyphp(php$paramsphp[php'openidphp_sigphp'php]php)php php|php|
php php php php php php php php php php php php php!php$thisphp-php>php_storagephp-php>getAssociationphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php,
php php php php php php php php php php php php php php php php php$macFuncphp,php php$secretphp,php php$expiresphp)php)php php{
php php php php php php php php php php php php php$retphp[php'isphp_validphp'php]php php=php php'falsephp'php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}

php php php php php php php php php$signedphp php=php explodephp(php'php,php'php,php php$paramsphp[php'openidphp_signedphp'php]php)php;
php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php foreachphp php(php$signedphp asphp php$keyphp)php php{
php php php php php php php php php php php php php$dataphp php.php=php php$keyphp php.php php'php:php'php;
php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'modephp'php)php php{
php php php php php php php php php php php php php php php php php$dataphp php.php=php php"idphp_resphp\nphp"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$dataphp php.php=php php$paramsphp[php'openidphp_php'php php.php strtrphp(php$keyphp,php'php.php'php,php'php_php'php)php]php.php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_secureStringComparephp(basephp6php4php_decodephp(php$paramsphp[php'openidphp_sigphp'php]php)php,
php php php php php php php php php php php php Zendphp_OpenIdphp:php:hashHmacphp(php$macFuncphp,php php$dataphp,php php$secretphp)php)php)php php{
php php php php php php php php php php php php php$retphp[php'isphp_validphp'php]php php=php php'truephp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$retphp[php'isphp_validphp'php]php php=php php'falsephp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Securelyphp comparephp twophp stringsphp forphp equalityphp whilephp avoidedphp Cphp levelphp memcmpphp(php)
php php php php php php*php optimisationsphp capablephp ofphp leakingphp timingphp informationphp usefulphp tophp anphp attacker
php php php php php php*php attemptingphp tophp iterativelyphp guessphp thephp unknownphp stringphp php(ephp.gphp.php passwordphp)php being
php php php php php php*php comparedphp againstphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$a
php php php php php php*php php@paramphp stringphp php$b
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_secureStringComparephp(php$aphp,php php$bphp)
php php php php php{
php php php php php php php php ifphp php(strlenphp(php$aphp)php php!php=php=php strlenphp(php$bphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php0php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$aphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$resultphp php|php=php ordphp(php$aphp[php$iphp]php)php php^php ordphp(php$bphp[php$iphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp php=php=php php0php;
php php php php php}
php}
