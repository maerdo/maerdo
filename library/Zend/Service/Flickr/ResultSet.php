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
php php*php php@subpackagephp Flickr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ResultSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Flickrphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Flickrphp/Resultphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Flickr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Flickrphp_ResultSetphp implementsphp SeekableIterator
php{
php php php php php/php*php*
php php php php php php*php Totalphp numberphp ofphp availablephp results
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$totalResultsAvailablephp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp resultsphp inphp thisphp resultphp set
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$totalResultsReturnedphp;

php php php php php/php*php*
php php php php php php*php Thephp offsetphp ofphp thisphp resultphp setphp inphp thephp totalphp setphp ofphp availablephp results
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$firstResultPositionphp;

php php php php php/php*php*
php php php php php php*php Resultsphp storage
php php php php php php*
php php php php php php*php php@varphp DOMNodeList
php php php php php php*php/
php php php php protectedphp php$php_resultsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp Zendphp_Servicephp_Flickrphp objectphp withphp whichphp thephp requestphp wasphp made
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_Flickr
php php php php php php*php/
php php php php privatephp php$php_flickrphp;

php php php php php/php*php*
php php php php php php*php Currentphp indexphp forphp thephp Iterator
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp php$php_currentIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Parsephp thephp Flickrphp Resultphp Set
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php php php php php php php php php$dom
php php php php php php*php php@paramphp php Zendphp_Servicephp_Flickrphp php$flickr
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMDocumentphp php$domphp,php Zendphp_Servicephp_Flickrphp php$flickrphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_flickrphp php=php php$flickrphp;

php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;

php php php php php php php php php$photosphp php=php php$xpathphp-php>queryphp(php'php/php/photosphp'php)php-php>itemphp(php0php)php;

php php php php php php php php php$pagephp php php php php=php php$photosphp-php>getAttributephp(php'pagephp'php)php;
php php php php php php php php php$pagesphp php php php=php php$photosphp-php>getAttributephp(php'pagesphp'php)php;
php php php php php php php php php$perPagephp php=php php$photosphp-php>getAttributephp(php'perpagephp'php)php;
php php php php php php php php php$totalphp php php php=php php$photosphp-php>getAttributephp(php'totalphp'php)php;

php php php php php php php php php$thisphp-php>totalResultsReturnedphp php php=php php(php$pagephp php=php=php php$pagesphp php|php|php php$pagesphp php=php=php php0php)php php?php php(php$totalphp php-php php(php$pagephp php-php php1php)php php*php php$perPagephp)php php:php php(intphp)php php$perPagephp;
php php php php php php php php php$thisphp-php>firstResultPositionphp php php php=php php(php$pagephp php-php php1php)php php*php php$perPagephp php+php php1php;
php php php php php php php php php$thisphp-php>totalResultsAvailablephp php=php php(intphp)php php$totalphp;

php php php php php php php php ifphp php(php$totalphp php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_resultsphp php=php php$xpathphp-php>queryphp(php'php/php/photophp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Totalphp Numberphp ofphp resultsphp returned
php php php php php php*
php php php php php php*php php@returnphp intphp Totalphp numberphp ofphp resultsphp returned
php php php php php php*php/
php php php php publicphp functionphp totalResultsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>totalResultsReturnedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Flickrphp_Result
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Servicephp_Flickrphp_Resultphp(php$thisphp-php>php_resultsphp-php>itemphp(php$thisphp-php>php_currentIndexphp)php,php php$thisphp-php>php_flickrphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentIndexphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php+php=php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentIndexphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp SeekableIteratorphp:php:seekphp(php)
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
php php php php php php*php Implementsphp SeekableIteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_resultsphp php&php&php php$thisphp-php>php_currentIndexphp <php php$thisphp-php>php_resultsphp-php>lengthphp;
php php php php php}
php}

