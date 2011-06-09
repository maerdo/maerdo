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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Rssphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_FeedAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/FeedAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_feedphp_Readerphp_Extensionphp_Atomphp_Feed
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/Atomphp/Feedphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_DublinCorephp_Feed
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/DublinCorephp/Feedphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Collectionphp_Author
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Collectionphp/Authorphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Feedphp_Rssphp extendsphp Zendphp_Feedphp_Readerphp_FeedAbstract
php{

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$domphp,php php$typephp)php;

php php php php php php php php php$dublinCoreClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'DublinCorephp_Feedphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'DublinCorephp_Feedphp'php]php php=php newphp php$dublinCoreClassphp(php$domphp,php php$thisphp-php>php_dataphp[php'typephp'php]php,php php$thisphp-php>php_xpathphp)php;
php php php php php php php php php$atomClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'Atomphp_Feedphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'Atomphp_Feedphp'php]php php=php newphp php$atomClassphp(php$domphp,php php$thisphp-php>php_dataphp[php'typephp'php]php,php php$thisphp-php>php_xpathphp)php;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$xpathPrefixphp php=php php'php/rssphp/channelphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xpathPrefixphp php=php php'php/rdfphp:RDFphp/rssphp:channelphp'php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php php$extensionphp-php>setXpathPrefixphp(php$xpathPrefixphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp author
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getAuthorphp(php$indexphp php=php php0php)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>getAuthorsphp(php)php;

php php php php php php php php ifphp php(issetphp(php$authorsphp[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp php$authorsphp[php$indexphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp withphp feedphp authors
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAuthorsphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'authorsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$authorsphp php=php arrayphp(php)php;
php php php php php php php php php$authorsphp_dcphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getAuthorsphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$authorsphp_dcphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$authorsphp_dcphp asphp php$authorphp)php php{
php php php php php php php php php php php php php php php php php$authorsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$authorphp[php'namephp'php]
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Technicallyphp RSSphp doesnphp'tphp specificphp authorphp elementphp usephp atphp thephp feedphp level
php php php php php php php php php php*php butphp itphp'sphp supportedphp onphp aphp php"justphp inphp casephp"php basisphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0
php php php php php php php php php&php&php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/authorphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/rssphp:authorphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$authorphp)php php{
php php php php php php php php php php php php php php php php php$stringphp php=php trimphp(php$authorphp-php>nodeValuephp)php;
php php php php php php php php php php php php php php php php php$emailphp php=php nullphp;
php php php php php php php php php php php php php php php php php$namephp php=php nullphp;
php php php php php php php php php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php/php/php Prettyphp roughphp parsingphp php-php butphp itphp'sphp aphp catchall
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^php.php*php@php[php^php php]php*php/php"php,php php$stringphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php'emailphp'php]php php=php trimphp(php$matchesphp[php0php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php\php(php(php.php*php)php\php)php$php/php"php,php php$stringphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php'namephp'php]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$authorsphp[php]php php=php php$dataphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$authorsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$authorsphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getAuthorsphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$authorsphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Authorphp(
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Readerphp:php:arrayUniquephp(php$authorsphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$authorsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$authorsphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php php$authorsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp copyrightphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCopyrightphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'copyrightphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php php php php php}

php php php php php php php php php$copyrightphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/copyrightphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$copyrightphp php&php&php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getCopyrightphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$copyrightphp)php)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCopyrightphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$copyrightphp)php php{
php php php php php php php php php php php php php$copyrightphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'copyrightphp'php]php php=php php$copyrightphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDateModifiedphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datemodifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$dateModifiedphp php=php nullphp;
php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/pubDatephp)php'php)php;
php php php php php php php php php php php php ifphp php(php!php$dateModifiedphp)php php{
php php php php php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/lastBuildDatephp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$dateModifiedphp)php php{
php php php php php php php php php php php php php php php php php$dateModifiedParsedphp php=php strtotimephp(php$dateModifiedphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$dateModifiedParsedphp)php php{
php php php php php php php php php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp(php$dateModifiedParsedphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$dateStandardsphp php=php arrayphp(Zendphp_Datephp:php:RSSphp,php Zendphp_Datephp:php:RFCphp_php8php2php2php,
php php php php php php php php php php php php php php php php php php php php Zendphp_Datephp:php:RFCphp_php2php8php2php2php,php Zendphp_Datephp:php:DATESphp)php;
php php php php php php php php php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$dateStandardsphp asphp php$standardphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp-php>setphp(php$dateModifiedphp,php php$standardphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Datephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$standardphp php=php=php Zendphp_Datephp:php:DATESphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Couldphp notphp loadphp datephp duephp tophp unrecognisedphp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php'php formatphp php(shouldphp followphp RFCphp php8php2php2php orphp php2php8php2php2php)php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$ephp-php>getMessagephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php,php php$e
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$datephp)php php{
php php php php php php php php php php php php php$datephp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getDatephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$datephp)php php{
php php php php php php php php php php php php php$datephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDateModifiedphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$datephp)php php{
php php php php php php php php php php php php php$datephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp lastBuildphp date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getLastBuildDatephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'lastBuildDatephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'lastBuildDatephp'php]php;
php php php php php php php php php}

php php php php php php php php php$lastBuildDatephp php=php nullphp;
php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$lastBuildDatephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/lastBuildDatephp)php'php)php;
php php php php php php php php php php php php ifphp php(php$lastBuildDatephp)php php{
php php php php php php php php php php php php php php php php php$lastBuildDateParsedphp php=php strtotimephp(php$lastBuildDatephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$lastBuildDateParsedphp)php php{
php php php php php php php php php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp(php$lastBuildDateParsedphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$dateStandardsphp php=php arrayphp(Zendphp_Datephp:php:RSSphp,php Zendphp_Datephp:php:RFCphp_php8php2php2php,
php php php php php php php php php php php php php php php php php php php php Zendphp_Datephp:php:RFCphp_php2php8php2php2php,php Zendphp_Datephp:php:DATESphp)php;
php php php php php php php php php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$dateStandardsphp asphp php$standardphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp-php>setphp(php$lastBuildDatephp,php php$standardphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Datephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$standardphp php=php=php Zendphp_Datephp:php:DATESphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Couldphp notphp loadphp datephp duephp tophp unrecognisedphp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php'php formatphp php(shouldphp followphp RFCphp php8php2php2php orphp php2php8php2php2php)php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$ephp-php>getMessagephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php,php php$e
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$datephp)php php{
php php php php php php php php php php php php php$datephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'lastBuildDatephp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'lastBuildDatephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp description
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'descriptionphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php php php php php}

php php php php php php php php php$descriptionphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/descriptionphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rdfphp:RDFphp/rssphp:channelphp/rssphp:descriptionphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$descriptionphp php&php&php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getDescriptionphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$descriptionphp)php)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDescriptionphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$descriptionphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'descriptionphp'php]php php=php php$descriptionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp ID
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php php php php php}

php php php php php php php php php$idphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/guidphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$idphp php&php&php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getIdphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getIdphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getLinkphp(php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getLinkphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getTitlephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$idphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp imagephp data
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'imagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/rssphp/channelphp/imagephp'php)php;
php php php php php php php php php php php php php$prefixphp php=php php'php/rssphp/channelphp/imagephp[php1php]php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/rdfphp:RDFphp/rssphp:channelphp/rssphp:imagephp'php)php;
php php php php php php php php php php php php php$prefixphp php=php php'php/rdfphp:RDFphp/rssphp:channelphp/rssphp:imagephp[php1php]php'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$listphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php$imagephp php=php arrayphp(php)php;
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/urlphp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'uriphp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/linkphp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'linkphp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/titlephp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'titlephp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/heightphp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'heightphp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/widthphp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'widthphp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$prefixphp php.php php'php/descriptionphp)php'php)php;
php php php php php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php php php php php$imagephp[php'descriptionphp'php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$imagephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$imagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp language
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLanguagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'languagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$languagephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/languagephp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$languagephp php&php&php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getLanguagephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$languagephp)php)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getLanguagephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$languagephp)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/php/php@xmlphp:langphp[php1php]php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$languagephp)php php{
php php php php php php php php php php php php php$languagephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'languagephp'php]php php=php php$languagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp feed
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'linkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/linkphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rdfphp:RDFphp/rssphp:channelphp/rssphp:linkphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$linkphp)php)php php{
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getLinkphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$linkphp)php php{
php php php php php php php php php php php php php$linkphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'linkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp feedphp XML
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFeedLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'feedlinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedlinkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php nullphp;

php php php php php php php php php$linkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getFeedLinkphp(php)php;

php php php php php php php php ifphp php(php$linkphp php=php=php=php nullphp php|php|php emptyphp(php$linkphp)php)php php{
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>getOriginalSourceUriphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'feedlinkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp generatorphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getGeneratorphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'generatorphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'generatorphp'php]php;
php php php php php php php php php}

php php php php php php php php php$generatorphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$generatorphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/generatorphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$generatorphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php php php php php$generatorphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/atomphp:generatorphp)php'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$generatorphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rdfphp:RDFphp/rssphp:channelphp/atomphp:generatorphp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$generatorphp)php)php php{
php php php php php php php php php php php php php$generatorphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getGeneratorphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$generatorphp)php php{
php php php php php php php php php php php php php$generatorphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'generatorphp'php]php php=php php$generatorphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'generatorphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp title
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php php php php php}

php php php php php php php php php$titlephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rssphp/channelphp/titlephp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/rdfphp:RDFphp/rssphp:channelphp/rssphp:titlephp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$titlephp php&php&php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getTitlephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getTitlephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'titlephp'php]php php=php php$titlephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp anyphp supportedphp Pusubhubbubphp endpoints
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getHubsphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'hubsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$hubsphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getHubsphp(php)php;

php php php php php php php php ifphp php(emptyphp(php$hubsphp)php)php php{
php php php php php php php php php php php php php$hubsphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hubsphp php=php arrayphp_uniquephp(php$hubsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'hubsphp'php]php php=php php$hubsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp categories
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Collectionphp_Category
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'categoriesphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/rssphp/channelphp/php/categoryphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/rdfphp:RDFphp/rssphp:channelphp/php/rssphp:categoryphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp;
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php php php php php$categoryCollectionphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'termphp'php php=php>php php$categoryphp-php>nodeValuephp,
php php php php php php php php php php php php php php php php php php php php php'schemephp'php php=php>php php$categoryphp-php>getAttributephp(php'domainphp'php)php,
php php php php php php php php php php php php php php php php php php php php php'labelphp'php php=php>php php$categoryphp-php>nodeValuephp,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getCategoriesphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$categoryCollectionphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCategoriesphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php php$categoryCollectionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp allphp entriesphp tophp thephp internalphp entriesphp array
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_indexEntriesphp(php)
php php php php php{
php php php php php php php php php$entriesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php php&php&php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php)php php{
php php php php php php php php php php php php php$entriesphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'php/php/itemphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$entriesphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'php/php/rssphp:itemphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$entriesphp asphp php$indexphp=php>php$entryphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_entriesphp[php$indexphp]php php=php php$entryphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_dataphp[php'typephp'php]php)php php{
php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'rdfphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_RDFphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'rssphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_RSSphp_php1php0php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'rdfphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_RDFphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'rssphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_RSSphp_php0php9php0php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}
php}
