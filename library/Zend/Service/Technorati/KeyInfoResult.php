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
php php*php php@versionphp php php php php$Idphp:php KeyInfoResultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Representsphp aphp singlephp Technoratiphp KeyInfophp queryphp resultphp objectphp.
php php*php Itphp providesphp informationphp aboutphp yourphp Technoratiphp APIphp Keyphp dailyphp usagephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_KeyInfoResult
php{
php php php php php/php*php*
php php php php php php*php Technoratiphp APIphp key
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_apiKeyphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp queriesphp usedphp today
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_apiQueriesphp;

php php php php php/php*php*
php php php php php php*php Totalphp numberphp ofphp availablephp queriesphp perphp day
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_maxQueriesphp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp objectphp fromphp DOMphp Elementphp.
php php php php php php*php Parsesphp givenphp Keyphp elementphp fromphp php$domphp andphp setsphp APIphp keyphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomElementphp php$domphp thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php php@paramphp php php stringphp php$apiKeyphp php thephp APIphp Keyphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp,php php$apiKeyphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php php$thisphp-php>php_domphp php php php=php php$domphp;
php php php php php php php php php/php/php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;

php php php php php php php php php$thisphp-php>php_apiQueriesphp php php php=php php(intphp)php php$xpathphp-php>queryphp(php'php/tapiphp/documentphp/resultphp/apiqueriesphp/textphp(php)php'php)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$thisphp-php>php_maxQueriesphp php php php=php php(intphp)php php$xpathphp-php>queryphp(php'php/tapiphp/documentphp/resultphp/maxqueriesphp/textphp(php)php'php)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$thisphp-php>setApiKeyphp(php$apiKeyphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp APIphp Keyphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php APIphp Keyphp string
php php php php php php*php/
php php php php publicphp functionphp getApiKeyphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_apiKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp queriesphp sentphp todayphp.
php php php php php php*
php php php php php php*php php@returnphp php intphp php php php php numberphp ofphp queriesphp sentphp today
php php php php php php*php/
php php php php publicphp functionphp getApiQueriesphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_apiQueriesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Keyphp'sphp dailyphp queryphp limitphp.
php php php php php php*
php php php php php php*php php@returnphp php intphp php php php php maximumphp numberphp ofphp availablephp queriesphp perphp day
php php php php php php*php/
php php php php publicphp functionphp getMaxQueriesphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_maxQueriesphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp APIphp Keyphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$apiKeyphp php thephp APIphp Key
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_KeyInfoResultphp php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setApiKeyphp(php$apiKeyphp)php php{
php php php php php php php php php$thisphp-php>php_apiKeyphp php=php php$apiKeyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
