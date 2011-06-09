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
php php*php php@versionphp php php php php$Idphp:php Storagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp tophp implementphp externalphp storagephp forphp OpenIDphp consumer
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Provider
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_OpenIdphp_Providerphp_Storage
php{

php php php php php/php*php*
php php php php php php*php Storesphp informationphp aboutphp sessionphp identifiedphp byphp php$handle
php php php php php php*
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php$secretphp sharedphp secret
php php php php php php*php php@paramphp stringphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp addAssociationphp(php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Getsphp informationphp aboutphp associationphp identifiedphp byphp php$handle
php php php php php php*php Returnsphp truephp ifphp givenphp associationphp foundphp andphp notphp expiredphp andphp false
php php php php php php*php otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp stringphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp getAssociationphp(php$handlephp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Registerphp newphp userphp withphp givenphp php$idphp andphp php$password
php php php php php php*php Returnsphp truephp inphp casephp ofphp successphp andphp falsephp ifphp userphp withphp givenphp php$idphp already
php php php php php php*php exists
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@paramphp stringphp php$passwordphp encodedphp userphp password
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp addUserphp(php$idphp,php php$passwordphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp userphp withphp givenphp php$idphp existsphp andphp falsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp hasUserphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Verifyphp ifphp userphp withphp givenphp php$idphp existsphp andphp hasphp specifiedphp php$password
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@paramphp stringphp php$passwordphp userphp password
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp checkUserphp(php$idphp,php php$passwordphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp arrayphp ofphp allphp trustedphp/untrustedphp sitesphp forphp givenphp userphp identified
php php php php php php*php byphp php$id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp getTrustedSitesphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Storesphp informationphp aboutphp trustedphp/untrustedphp sitephp forphp givenphp user
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp userphp identityphp URL
php php php php php php*php php@paramphp stringphp php$sitephp sitephp URL
php php php php php php*php php@paramphp mixedphp php$trustedphp trustphp dataphp fromphp extensionsphp orphp justphp aphp booleanphp value
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp addSitephp(php$idphp,php php$sitephp,php php$trustedphp)php;
php}
