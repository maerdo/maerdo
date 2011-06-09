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
php php*php php@versionphp php php php php$Idphp:php TagResultSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Technoratiphp_ResultSet
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/ResultSetphp.phpphp'php;


php/php*php*
php php*php Representsphp aphp Technoratiphp Tagphp queryphp resultphp setphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_TagResultSetphp extendsphp Zendphp_Servicephp_Technoratiphp_ResultSet
php{
php php php php php/php*php*
php php php php php php*php Numberphp ofphp postsphp thatphp matchphp thephp tagphp.
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_postsMatchedphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp blogsphp thatphp matchphp thephp tagphp.
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_blogsMatchedphp;

php php php php php/php*php*
php php php php php php*php Parsesphp thephp searchphp responsephp andphp retrievephp thephp resultsphp forphp iterationphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomDocumentphp php$domphp php php php thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php php@paramphp php php arrayphp php$optionsphp php php php php php queryphp optionsphp asphp associativephp array
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$domphp,php php$optionsphp)php;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/tapiphp/documentphp/resultphp/postsmatchedphp/textphp(php)php'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>php_postsMatchedphp php=php php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/tapiphp/documentphp/resultphp/blogsmatchedphp/textphp(php)php'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>php_blogsMatchedphp php=php php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;

php php php php php php php php php$thisphp-php>php_totalResultsReturnedphp php php=php php(intphp)php php$thisphp-php>php_xpathphp-php>evaluatephp(php"countphp(php/tapiphp/documentphp/itemphp)php"php)php;
php php php php php php php php php/php*php*php php@todophp Validatephp thephp followingphp assertionphp php*php/
php php php php php php php php php$thisphp-php>php_totalResultsAvailablephp php=php php(intphp)php php$thisphp-php>getPostsMatchedphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp postsphp thatphp matchphp thephp tagphp.
php php php php php php*
php php php php php php*php php@returnphp php int
php php php php php php*php/
php php php php publicphp functionphp getPostsMatchedphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_postsMatchedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp blogsphp thatphp matchphp thephp tagphp.
php php php php php php*
php php php php php php*php php@returnphp php int
php php php php php php*php/
php php php php publicphp functionphp getBlogsMatchedphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_blogsMatchedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp Zendphp_Servicephp_Technoratiphp_ResultSetphp:php:currentphp(php)php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Technoratiphp_TagResultphp currentphp result
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_TagResult
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/TagResultphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Technoratiphp_TagResultphp(php$thisphp-php>php_resultsphp-php>itemphp(php$thisphp-php>php_currentIndexphp)php)php;
php php php php php}
php}
