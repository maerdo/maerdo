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
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ResultSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Item
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Itemphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_ResultSetphp implementsphp SeekableIterator
php{
php php php php php/php*php*
php php php php php php*php Aphp DOMNodeListphp ofphp php<Itemphp>php elements
php php php php php php*
php php php php php php*php php@varphp DOMNodeList
php php php php php php*php/
php php php php protectedphp php$php_resultsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Amazonphp Webphp Servicephp Returnphp Document
php php php php php php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_domphp;

php php php php php/php*php*
php php php php php php*php XPathphp Objectphp forphp php$thisphp-php>php_dom
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xpathphp;

php php php php php/php*php*
php php php php php php*php Currentphp indexphp forphp SeekableIterator
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_currentIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Createphp anphp instancephp ofphp Zendphp_Servicephp_Amazonphp_ResultSetphp andphp createphp thephp necessaryphp dataphp objects
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMDocumentphp php$domphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php=php php$domphp;
php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;
php php php php php php php php php$thisphp-php>php_resultsphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/azphp:Itemphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Totalphp Numberphp ofphp resultsphp returned
php php php php php php*
php php php php php php*php php@returnphp intphp Totalphp numberphp ofphp resultsphp returned
php php php php php php*php/
php php php php publicphp functionphp totalResultsphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/azphp:TotalResultsphp/textphp(php)php'php)php;
php php php php php php php php returnphp php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Totalphp Numberphp ofphp pagesphp returned
php php php php php php*
php php php php php php*php php@returnphp intphp Totalphp numberphp ofphp pagesphp returned
php php php php php php*php/
php php php php publicphp functionphp totalPagesphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/azphp:TotalPagesphp/textphp(php)php'php)php;
php php php php php php php php returnphp php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Item
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_Itemphp(php$thisphp-php>php_resultsphp-php>itemphp(php$thisphp-php>php_currentIndexphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentIndexphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php+php=php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:seekphp(php)
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@throwsphp OutOfBoundsException
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp seekphp(php$indexphp)
php php php php php{
php php php php php php php php php$indexIntphp php=php php(intphp)php php$indexphp;
php php php php php php php php ifphp php(php$indexIntphp php>php=php php0php php&php&php php(nullphp php=php=php=php php$thisphp-php>php_resultsphp php|php|php php$indexIntphp <php php$thisphp-php>php_resultsphp-php>lengthphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentIndexphp php=php php$indexIntphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php"Illegalphp indexphp php'php$indexphp'php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_resultsphp php&php&php php$thisphp-php>php_currentIndexphp <php php$thisphp-php>php_resultsphp-php>lengthphp;
php php php php php}
php}
