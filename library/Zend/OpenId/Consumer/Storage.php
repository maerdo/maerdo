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
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Storagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp tophp implementphp externalphp storagephp forphp OpenIDphp consumer
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_OpenIdphp_Consumerphp_Storage
php{

php php php php php/php*php*
php php php php php php*php Storesphp informationphp aboutphp associationphp identifiedphp byphp php$urlphp/php$handle
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp addAssociationphp(php$urlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Getsphp informationphp aboutphp associationphp identifiedphp byphp php$url
php php php php php php*php Returnsphp truephp ifphp givenphp associationphp foundphp andphp notphp expiredphp andphp false
php php php php php php*php otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php&php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp getAssociationphp(php$urlphp,php php&php$handlephp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Getsphp informationphp aboutphp associationphp identifiedphp byphp php$handle
php php php php php php*php Returnsphp truephp ifphp givenphp associationphp foundphp andphp notphp expiredphp andphp false
php php php php php php*php othverwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php&php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp getAssociationByHandlephp(php$handlephp,php php&php$urlphp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Deletesphp associationphp identifiedphp byphp php$url
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp delAssociationphp(php$urlphp)php;

php php php php php/php*php*
php php php php php php*php Storesphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@paramphp stringphp php$realIdphp discoveredphp realphp identityphp URL
php php php php php php*php php@paramphp stringphp php$serverphp discoveredphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp floatphp php$versionphp discoveredphp OpenIDphp protocolphp version
php php php php php php*php php@paramphp longphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp addDiscoveryInfophp(php$idphp,php php$realIdphp,php php$serverphp,php php$versionphp,php php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Getsphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*php Returnsphp truephp ifphp suchphp informationphp existsphp andphp falsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@paramphp stringphp php&php$realIdphp discoveredphp realphp identityphp URL
php php php php php php*php php@paramphp stringphp php&php$serverphp discoveredphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp floatphp php&php$versionphp discoveredphp OpenIDphp protocolphp version
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp getDiscoveryInfophp(php$idphp,php php&php$realIdphp,php php&php$serverphp,php php&php$versionphp,php php&php$expiresphp)php;

php php php php php/php*php*
php php php php php php*php Removesphp cachedphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp delDiscoveryInfophp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Thephp functionphp checksphp thephp uniquenessphp ofphp openidphp.responsephp_nonce
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerphp openidphp.openidphp_opphp_endpointphp fieldphp fromphp authenticationphp response
php php php php php php*php php@paramphp stringphp php$noncephp openidphp.responsephp_noncephp fieldphp fromphp authenticationphp response
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp isUniqueNoncephp(php$providerphp,php php$noncephp)php;

php php php php php/php*php*
php php php php php php*php Removesphp dataphp fromphp thephp uniquenessphp databasephp thatphp isphp olderphp thenphp givenphp date
php php php php php php*
php php php php php php*php php@paramphp stringphp php$datephp Datephp ofphp expiredphp data
php php php php php php*php/
php php php php abstractphp publicphp functionphp purgeNoncesphp(php$datephp=nullphp)php;
php}
