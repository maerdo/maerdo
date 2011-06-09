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
php php*php php@versionphp php php php php$Idphp:php Sessionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Providerphp_User
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp/Providerphp/Userphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Namespace
php php*php/
requirephp_oncephp php"Zendphp/Sessionphp/Namespacephp.phpphp"php;

php/php*php*
php php*php Classphp tophp getphp/storephp informationphp aboutphp loggedphp inphp userphp inphp Webphp Browserphp using
php php*php PHPphp session
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Provider
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_OpenIdphp_Providerphp_Userphp_Sessionphp extendsphp Zendphp_OpenIdphp_Providerphp_User
php{
php php php php php/php*php*
php php php php php php*php Referencephp tophp anphp implementationphp ofphp Zendphp_Sessionphp_Namespacephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Sessionphp_Namespacephp php$php_session
php php php php php php*php/
php php php php privatephp php$php_sessionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createsphp Zendphp_OpenIdphp_Providerphp_Userphp_Sessionphp objectphp withphp givenphp session
php php php php php php*php namespacephp orphp createsphp newphp sessionphp namespacephp namedphp php"openidphp"
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Sessionphp_Namespacephp php$session
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Sessionphp_Namespacephp php$sessionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$sessionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_sessionphp php=php newphp Zendphp_Sessionphp_Namespacephp(php"openidphp"php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_sessionphp php=php php$sessionphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp informationphp aboutphp loggedphp inphp userphp inphp sessionphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp setLoggedInUserphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessionphp-php>loggedphp_inphp php=php php$idphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp identityphp URLphp ofphp loggedphp inphp userphp orphp false
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getLoggedInUserphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_sessionphp-php>loggedphp_inphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sessionphp-php>loggedphp_inphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp logoutphp.php Clearsphp informationphp aboutphp loggedphp inphp userphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp delLoggedInUserphp(php)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_sessionphp-php>loggedphp_inphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php}
