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
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Feedphp utilityphp class
php php*
php php*php Basephp Zendphp_Feedphp classphp,php containingphp constantsphp andphp thephp Zendphp_Httpphp_Clientphp instance
php php*php accessorphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feed
php{

php php php php php/php*php*
php php php php php php*php HTTPphp clientphp objectphp tophp usephp forphp retrievingphp feeds
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp staticphp php$php_httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Overridephp HTTPphp PUTphp andphp DELETEphp requestphp methodsphp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp staticphp php$php_httpMethodOverridephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_namespacesphp php=php arrayphp(
php php php php php php php php php'opensearchphp'php php=php>php php'httpphp:php/php/aphp9php.comphp/php-php/specphp/opensearchrssphp/php1php.php0php/php'php,
php php php php php php php php php'atomphp'php php php php php php php php=php>php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php5php/Atomphp'php,
php php php php php php php php php'rssphp'php php php php php php php php php=php>php php'httpphp:php/php/blogsphp.lawphp.harvardphp.eduphp/techphp/rssphp'php,
php php php php php)php;


php php php php php/php*php*
php php php php php php*php Setphp thephp HTTPphp clientphp instance
php php php php php php*
php php php php php php*php Setsphp thephp HTTPphp clientphp objectphp tophp usephp forphp retrievingphp thephp feedsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Clientphp php$httpClient
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$httpClientphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_httpClientphp php=php php$httpClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getsphp thephp HTTPphp clientphp objectphp.php Ifphp nonephp isphp setphp,php aphp newphp Zendphp_Httpphp_Clientphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_httpClientphp instanceofphp Zendphp_Httpphp_Clientphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Httpphp_Client
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_httpClientphp php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_httpClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Togglephp usingphp POSTphp insteadphp ofphp PUTphp andphp DELETEphp HTTPphp methods
php php php php php php*
php php php php php php*php Somephp feedphp implementationsphp dophp notphp acceptphp PUTphp andphp DELETEphp HTTP
php php php php php php*php methodsphp,php orphp theyphp canphp'tphp bephp usedphp becausephp ofphp proxiesphp orphp other
php php php php php php*php measuresphp.php Thisphp allowsphp turningphp onphp usingphp POSTphp wherephp PUTphp and
php php php php php php*php DELETEphp wouldphp normallyphp bephp usedphp;php inphp additionphp,php an
php php php php php php*php Xphp-Methodphp-Overridephp headerphp willphp bephp sentphp withphp aphp valuephp ofphp PUTphp or
php php php php php php*php DELETEphp asphp appropriatephp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$overridephp Whetherphp tophp overridephp PUTphp andphp DELETEphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setHttpMethodOverridephp(php$overridephp php=php truephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_httpMethodOverridephp php=php php$overridephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp HTTPphp overridephp state
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp getHttpMethodOverridephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_httpMethodOverridephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp fullphp versionphp ofphp aphp namespacephp prefix
php php php php php php*
php php php php php php*php Looksphp upphp aphp prefixphp php(atomphp:php,php etcphp.php)php inphp thephp listphp ofphp registered
php php php php php php*php namespacesphp andphp returnsphp thephp fullphp namespacephp URIphp if
php php php php php php*php availablephp.php Returnsphp thephp prefixphp,php unmodifiedphp,php ifphp itphp'sphp not
php php php php php php*php registeredphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp lookupNamespacephp(php$prefixphp)
php php php php php{
php php php php php php php php returnphp issetphp(selfphp:php:php$php_namespacesphp[php$prefixphp]php)php php?
php php php php php php php php php php php php selfphp:php:php$php_namespacesphp[php$prefixphp]php php:
php php php php php php php php php php php php php$prefixphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp aphp namespacephp andphp prefixphp tophp thephp registeredphp list
php php php php php php*
php php php php php php*php Takesphp aphp prefixphp andphp aphp fullphp namespacephp URIphp andphp addsphp themphp tophp the
php php php php php php*php listphp ofphp registeredphp namespacesphp forphp usephp by
php php php php php php*php Zendphp_Feedphp:php:lookupNamespacephp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefixphp Thephp namespacephp prefix
php php php php php php*php php@paramphp php stringphp php$namespaceURIphp Thephp fullphp namespacephp URI
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp registerNamespacephp(php$prefixphp,php php$namespaceURIphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_namespacesphp[php$prefixphp]php php=php php$namespaceURIphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Importsphp aphp feedphp locatedphp atphp php$uriphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uri
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php php@returnphp Zendphp_Feedphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp importphp(php$uriphp)
php php php php php{
php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'GETphp'php)php;
php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Feedphp failedphp tophp loadphp,php gotphp responsephp codephp php'php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$feedphp php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php returnphp selfphp:php:importStringphp(php$feedphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Importsphp aphp feedphp representedphp byphp php$stringphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php php@returnphp Zendphp_Feedphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp importStringphp(php$stringphp)
php php php php php{
php php php php php php php php php/php/php Loadphp thephp feedphp asphp anphp XMLphp DOMDocumentphp object
php php php php php php php php php$libxmlphp_errflagphp php=php libxmlphp_usephp_internalphp_errorsphp(truephp)php;
php php php php php php php php php$docphp php=php newphp DOMDocumentphp;
php php php php php php php php ifphp php(trimphp(php$stringphp)php php=php=php php'php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Documentphp/stringphp beingphp importedphp'
php php php php php php php php php php php php php.php php'php isphp anphp Emptyphp stringphp orphp comesphp fromphp anphp emptyphp HTTPphp responsephp'php)php;
php php php php php php php php php}
php php php php php php php php php$statusphp php=php php$docphp-php>loadXMLphp(php$stringphp)php;
php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(php$libxmlphp_errflagphp)php;


php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php/php/php preventphp thephp classphp tophp generatephp anphp undefinedphp variablephp noticephp php(ZFphp-php2php5php9php0php)
php php php php php php php php php php php php php/php/php Buildphp errorphp message
php php php php php php php php php php php php php$errorphp php=php libxmlphp_getphp_lastphp_errorphp(php)php;
php php php php php php php php php php php php ifphp php(php$errorphp php&php&php php$errorphp-php>messagephp)php php{
php php php php php php php php php php php php php php php php php$errormsgphp php=php php"DOMDocumentphp cannotphp parsephp XMLphp:php php{php$errorphp-php>messagephp}php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$errormsgphp php=php php"DOMDocumentphp cannotphp parsephp XMLphp"php;
php php php php php php php php php php php php php}


php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php$errormsgphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Tryphp tophp findphp thephp basephp feedphp elementphp orphp aphp singlephp php<entryphp>php ofphp anphp Atomphp feed
php php php php php php php php ifphp php(php$docphp-php>getElementsByTagNamephp(php'feedphp'php)php-php>itemphp(php0php)php php|php|
php php php php php php php php php php php php php$docphp-php>getElementsByTagNamephp(php'entryphp'php)php-php>itemphp(php0php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Atom
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Atomphp.phpphp'php;
php php php php php php php php php php php php php/php/php returnphp aphp newlyphp createdphp Zendphp_Feedphp_Atomphp object
php php php php php php php php php php php php returnphp newphp Zendphp_Feedphp_Atomphp(nullphp,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Tryphp tophp findphp thephp basephp feedphp elementphp ofphp anphp RSSphp feed
php php php php php php php php ifphp php(php$docphp-php>getElementsByTagNamephp(php'channelphp'php)php-php>itemphp(php0php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Rss
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Rssphp.phpphp'php;
php php php php php php php php php php php php php/php/php returnphp aphp newlyphp createdphp Zendphp_Feedphp_Rssphp object
php php php php php php php php php php php php returnphp newphp Zendphp_Feedphp_Rssphp(nullphp,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php php$stringphp doesphp notphp appearphp tophp bephp aphp validphp feedphp ofphp thephp supportedphp types
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp orphp unsupportedphp feedphp formatphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Importsphp aphp feedphp fromphp aphp filephp locatedphp atphp php$filenamephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php php@returnphp Zendphp_Feedphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp importFilephp(php$filenamephp)
php php php php php{
php php php php php php php php php@iniphp_setphp(php'trackphp_errorsphp'php,php php1php)php;
php php php php php php php php php$feedphp php=php php@filephp_getphp_contentsphp(php$filenamephp)php;
php php php php php php php php php@iniphp_restorephp(php'trackphp_errorsphp'php)php;
php php php php php php php php ifphp php(php$feedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"Filephp couldphp notphp bephp loadedphp:php php$phpphp_errormsgphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:importStringphp(php$feedphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Attemptsphp tophp findphp feedsphp atphp php$uriphp referencedphp byphp php<linkphp php.php.php.php php/php>php tagsphp.php Returnsphp an
php php php php php php*php arrayphp ofphp thephp feedsphp referencedphp atphp php$uriphp.
php php php php php php*
php php php php php php*php php@todophp Allowphp findFeedsphp(php)php tophp followphp onephp,php butphp onlyphp onephp,php codephp php3php0php2php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uri
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp findFeedsphp(php$uriphp)
php php php php php{
php php php php php php php php php/php/php Getphp thephp HTTPphp responsephp fromphp php$uriphp andphp savephp thephp contents
php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php)php;
php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"Failedphp tophp accessphp php$uriphp,php gotphp responsephp codephp php"php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$contentsphp php=php php$responsephp-php>getBodyphp(php)php;

php php php php php php php php php/php/php Parsephp thephp contentsphp forphp appropriatephp php<linkphp php.php.php.php php/php>php tags
php php php php php php php php php@iniphp_setphp(php'trackphp_errorsphp'php,php php1php)php;
php php php php php php php php php$patternphp php=php php'php~php(php<linkphp[php^php>php]php+php)php/php?php>php~iphp'php;
php php php php php php php php php$resultphp php=php php@pregphp_matchphp_allphp(php$patternphp,php php$contentsphp,php php$matchesphp)php;
php php php php php php php php php@iniphp_restorephp(php'trackphp_errorsphp'php)php;
php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"Internalphp errorphp:php php$phpphp_errormsgphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Tryphp tophp fetchphp aphp feedphp forphp eachphp linkphp tagphp thatphp appearsphp tophp referphp tophp aphp feed
php php php php php php php php php$feedsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$matchesphp[php1php]php)php php&php&php countphp(php$matchesphp[php1php]php)php php>php php0php)php php{
php php php php php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$linkphp)php php{
php php php php php php php php php php php php php php php php php/php/php forcephp stringphp tophp bephp anphp utfphp-php8php one
php php php php php php php php php php php php php php php php ifphp php(php!mbphp_checkphp_encodingphp(php$linkphp,php php'UTFphp-php8php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$linkphp php=php mbphp_convertphp_encodingphp(php$linkphp,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$xmlphp php=php php@simplexmlphp_loadphp_stringphp(rtrimphp(php$linkphp,php php'php php/php'php)php php.php php'php php/php>php'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$xmlphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$attributesphp php=php php$xmlphp-php>attributesphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$attributesphp[php'relphp'php]php)php php|php|php php!php@pregphp_matchphp(php'php~php^php(php?php:alternatephp|servicephp\php.feedphp)php~iphp'php,php php$attributesphp[php'relphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$attributesphp[php'typephp'php]php)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php!php@pregphp_matchphp(php'php~php^applicationphp/php(php?php:atomphp|rssphp|rdfphp)php\php+xmlphp~php'php,php php$attributesphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$attributesphp[php'hrefphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php/php/php checksphp ifphp wephp needphp tophp canonizephp thephp givenphp uri
php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php(stringphp)php php$attributesphp[php'hrefphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Uriphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php canonizephp thephp uri
php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php php(stringphp)php php$attributesphp[php'hrefphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$queryphp php=php php$fragmentphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(substrphp(php$pathphp,php php0php,php php1php)php php!php=php php'php/php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php addphp thephp currentphp rootphp pathphp tophp thisphp one
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php rtrimphp(php$clientphp-php>getUriphp(php)php-php>getPathphp(php)php,php php'php/php'php)php php.php php'php/php'php php.php php$pathphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$pathphp,php php'php?php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php listphp(php$pathphp,php php$queryphp)php php=php explodephp(php'php?php'php,php php$pathphp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$queryphp,php php'php#php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php listphp(php$queryphp,php php$fragmentphp)php php=php explodephp(php'php#php'php,php php$queryphp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$clientphp-php>getUriphp(truephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$uriphp-php>setPathphp(php$pathphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$uriphp-php>setQueryphp(php$queryphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$uriphp-php>setFragmentphp(php$fragmentphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$feedphp php=php selfphp:php:importphp(php$uriphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$feedsphp[php$uriphp-php>getUriphp(php)php]php php=php php$feedphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp thephp fetchedphp feeds
php php php php php php php php returnphp php$feedsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructphp aphp newphp Zendphp_Feedphp_Abstractphp objectphp fromphp aphp customphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$data
php php php php php php*php php@paramphp php stringphp php$formatphp php(rssphp|atomphp)php thephp requestedphp outputphp format
php php php php php php*php php@returnphp Zendphp_Feedphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp importArrayphp(arrayphp php$dataphp,php php$formatphp php=php php'atomphp'php)
php php php php php{
php php php php php php php php php$objphp php=php php'Zendphp_Feedphp_php'php php.php ucfirstphp(strtolowerphp(php$formatphp)php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$objphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$objphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builder
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp.phpphp'php;
php php php php php php php php returnphp newphp php$objphp(nullphp,php nullphp,php newphp Zendphp_Feedphp_Builderphp(php$dataphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructphp aphp newphp Zendphp_Feedphp_Abstractphp objectphp fromphp aphp Zendphp_Feedphp_Builderphp_Interfacephp dataphp source
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Builderphp_Interfacephp php$builderphp thisphp objectphp willphp bephp usedphp tophp extractphp thephp dataphp ofphp thephp feed
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php$formatphp php(rssphp|atomphp)php thephp requestedphp outputphp format
php php php php php php*php php@returnphp Zendphp_Feedphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp importBuilderphp(Zendphp_Feedphp_Builderphp_Interfacephp php$builderphp,php php$formatphp php=php php'atomphp'php)
php php php php php{
php php php php php php php php php$objphp php=php php'Zendphp_Feedphp_php'php php.php ucfirstphp(strtolowerphp(php$formatphp)php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$objphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$objphp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$objphp(nullphp,php nullphp,php php$builderphp)php;
php php php php php}
php}
