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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ResultSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Resultphp.phpphp'php;


php/php*php*
php php*php Thisphp isphp thephp mostphp essentialphp resultphp setphp.
php php*php Thephp scopephp ofphp thisphp classphp isphp tophp bephp extendedphp byphp aphp queryphp-specificphp childphp resultphp setphp classphp,
php php*php andphp itphp shouldphp neverphp bephp usedphp tophp initializephp aphp standalonephp objectphp.
php php*
php php*php Eachphp ofphp thephp specificphp resultphp setsphp representsphp aphp collectionphp ofphp queryphp-specific
php php*php Zendphp_Servicephp_Technoratiphp_Resultphp objectsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@abstract
php php*php/
abstractphp classphp Zendphp_Servicephp_Technoratiphp_ResultSetphp implementsphp SeekableIterator
php{
php php php php php/php*php*
php php php php php php*php Thephp totalphp numberphp ofphp resultsphp available
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_totalResultsAvailablephp;

php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp resultsphp inphp thisphp resultphp set
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_totalResultsReturnedphp;

php php php php php/php*php*
php php php php php php*php Thephp offsetphp inphp thephp totalphp resultphp setphp ofphp thisphp searchphp set
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php/
php php php php php/php/TODOphp publicphp php$firstResultPositionphp;


php php php php php/php*php*
php php php php php php*php Aphp DomNodeListphp ofphp results
php php php php php php*
php php php php php php*php php@varphp php php php php DomNodeList
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_resultsphp;

php php php php php/php*php*
php php php php php php*php Technoratiphp APIphp responsephp document
php php php php php php*
php php php php php php*php php@varphp php php php php DomDocument
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_domphp;

php php php php php/php*php*
php php php php php php*php Objectphp forphp php$thisphp-php>php_dom
php php php php php php*
php php php php php php*php php@varphp php php php php DOMXpath
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_xpathphp;

php php php php php/php*php*
php php php php php php*php XMLphp stringphp representationphp forphp php$thisphp-php>php_dom
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_xmlphp;

php php php php php/php*php*
php php php php php php*php Currentphp Item
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_currentIndexphp php=php php0php;


php php php php php/php*php*
php php php php php php*php Parsesphp thephp searchphp responsephp andphp retrievesphp thephp resultsphp forphp iterationphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomDocumentphp php$domphp php php php thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php php@paramphp php php arrayphp php$optionsphp php php php php php queryphp optionsphp asphp associativephp array
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php$domphp,php php$optionsphp)php;

php php php php php php php php php/php/php Technoratiphp lovesphp tophp makephp developerphp'sphp lifephp reallyphp hard
php php php php php php php php php/php/php Iphp mustphp readphp queryphp optionsphp inphp orderphp tophp normalizephp aphp singlephp way
php php php php php php php php php/php/php tophp displayphp startphp andphp limitphp.
php php php php php php php php php/php/php Thephp valuephp isphp printedphp outphp inphp XMLphp usingphp manyphp differentphp tagphp namesphp,
php php php php php php php php php/php/php toophp hardphp tophp getphp itphp fromphp XML

php php php php php php php php php/php/php Additionallyphp,php thephp followingphp tagsphp shouldphp bephp alwaysphp available
php php php php php php php php php/php/php accordingphp tophp APIphp documentationphp butphp.php.php.php thisphp isphp notphp thephp truthphp!
php php php php php php php php php/php/php php-php querytime
php php php php php php php php php/php/php php-php limit
php php php php php php php php php/php/php php-php startphp php(sometimesphp rankingstartphp)

php php php php php php php php php/php/php queryphp tagphp isphp onlyphp availablephp forphp somephp requestsphp,php thephp samephp forphp urlphp.
php php php php php php php php php/php/php Forphp nowphp ignorephp themphp.

php php php php php php php php php/php/php$startphp php=php issetphp(php$optionsphp[php'startphp'php]php)php php?php php$optionsphp[php'startphp'php]php php:php php1php;
php php php php php php php php php/php/php$limitphp php=php issetphp(php$optionsphp[php'limitphp'php]php)php php?php php$optionsphp[php'limitphp'php]php php:php php2php0php;
php php php php php php php php php/php/php$thisphp-php>php_firstResultPositionphp php=php php$startphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializesphp thisphp objectphp fromphp aphp DomDocumentphp responsephp.
php php php php php php*
php php php php php php*php Becausephp php_php_constructphp andphp php_php_wakeupphp sharesphp somephp commonphp executionsphp,
php php php php php php*php itphp'sphp usefulphp tophp groupphp themphp inphp aphp singlephp initializationphp methodphp.
php php php php php php*php Thisphp methodphp isphp calledphp oncephp eachphp timephp aphp newphp instancephp isphp created
php php php php php php*php orphp aphp serializedphp objectphp isphp unserializedphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomDocumentphp php$domphp thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php php@paramphp php php arrayphp php$optionsphp php php queryphp optionsphp asphp associativephp array
php php php php php php*php php php php php php php*php php@returnphp php void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(DomDocumentphp php$domphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php php php php php=php php$domphp;
php php php php php php php php php$thisphp-php>php_xpathphp php php php=php newphp DOMXPathphp(php$domphp)php;

php php php php php php php php php$thisphp-php>php_resultsphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php"php/php/itemphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Numberphp ofphp resultsphp returnedphp.
php php php php php php*
php php php php php php*php php@returnphp php intphp php php php php totalphp numberphp ofphp resultsphp returned
php php php php php php*php/
php php php php publicphp functionphp totalResultsphp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php php$thisphp-php>php_totalResultsReturnedphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Numberphp ofphp availablephp resultsphp.
php php php php php php*
php php php php php php*php php@returnphp php intphp php php php php totalphp numberphp ofphp availablephp results
php php php php php php*php/
php php php php publicphp functionphp totalResultsAvailablephp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php php$thisphp-php>php_totalResultsAvailablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:currentphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Exception
php php php php php php*php php@abstract
php php php php php php*php/
php php php php php/php/php abstractphp publicphp functionphp currentphp(php)php;

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:keyphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp php int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentIndexphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:nextphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp php void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php+php=php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:rewindphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp php bool
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php=php php0php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:seekphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php php intphp php$index
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php OutOfBoundsException
php php php php php php*php/
php php php php publicphp functionphp seekphp(php$indexphp)
php php php php php{
php php php php php php php php php$indexIntphp php=php php(intphp)php php$indexphp;
php php php php php php php php ifphp php(php$indexIntphp php>php=php php0php php&php&php php$indexIntphp <php php$thisphp-php>php_resultsphp-php>lengthphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentIndexphp php=php php$indexIntphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php"Illegalphp indexphp php'php$indexphp'php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:validphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_resultsphp php&php&php php$thisphp-php>php_currentIndexphp <php php$thisphp-php>php_resultsphp-php>lengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp responsephp documentphp asphp XMLphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp php php thephp responsephp documentphp convertedphp intophp XMLphp format
php php php php php php*php/
php php php php publicphp functionphp getXmlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritesphp standardphp php_php_sleepphp methodphp tophp makephp thisphp objectphp serializablephp.
php php php php php php*
php php php php php php*php DomDocumentphp andphp DOMXpathphp objectsphp cannotphp bephp serializedphp.
php php php php php php*php Thisphp methodphp convertsphp themphp backphp tophp anphp XMLphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)php php{
php php php php php php php php php$thisphp-php>php_xmlphp php php php php php=php php$thisphp-php>getXmlphp(php)php;
php php php php php php php php php$varsphp php=php arrayphp_keysphp(getphp_objectphp_varsphp(php$thisphp)php)php;
php php php php php php php php returnphp arrayphp_diffphp(php$varsphp,php arrayphp(php'php_domphp'php,php php'php_xpathphp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritesphp standardphp php_php_wakeupphp methodphp tophp makephp thisphp objectphp unserializablephp.
php php php php php php*
php php php php php php*php Restoresphp objectphp statusphp beforephp serializationphp.
php php php php php php*php Convertsphp XMLphp stringphp intophp aphp DomDocumentphp objectphp andphp createsphp aphp valid
php php php php php php*php DOMXpathphp instancephp forphp givenphp DocDocumentphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)php php{
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXmlphp(php$thisphp-php>php_xmlphp)php;
php php php php php php php php php$thisphp-php>php_initphp(php$domphp)php;
php php php php php php php php php$thisphp-php>php_xmlphp php=php nullphp;php php/php/php resetphp XMLphp content
php php php php php}
php}
