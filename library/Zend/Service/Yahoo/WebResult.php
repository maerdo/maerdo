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
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php WebResultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Yahoophp_Result
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/Resultphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Yahoophp_WebResultphp extendsphp Zendphp_Servicephp_Yahoophp_Result
php{
php php php php php/php*php*
php php php php php php*php Aphp summaryphp ofphp thephp result
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Summaryphp;

php php php php php/php*php*
php php php php php php*php Thephp filephp typephp ofphp thephp resultphp php(textphp,php htmlphp,php pdfphp,php etcphp.php)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$MimeTypephp;

php php php php php/php*php*
php php php php php php*php Thephp modificationphp timephp ofphp thephp resultphp php(asphp aphp unixphp timestampphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$ModificationDatephp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp forphp thephp Yahoophp cachephp ofphp thisphp pagephp,php ifphp itphp exists
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$CacheUrlphp;

php php php php php/php*php*
php php php php php php*php Thephp sizephp ofphp thephp cachephp entry
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$CacheSizephp;

php php php php php/php*php*
php php php php php php*php Webphp resultphp namespace
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namespacephp php=php php'urnphp:yahoophp:srchphp'php;


php php php php php/php*php*
php php php php php php*php Initializesphp thephp webphp result
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$result
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$resultphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fieldsphp php=php arrayphp(php'Summaryphp'php,php php'MimeTypephp'php,php php'ModificationDatephp'php)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$resultphp)php;

php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$resultphp-php>ownerDocumentphp)php;
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'yhphp'php,php php$thisphp-php>php_namespacephp)php;

php php php php php php php php php/php/php checkphp ifphp thephp cachephp sectionphp exists
php php php php php php php php php$cacheUrlphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php.php/yhphp:Cachephp/yhphp:Urlphp/textphp(php)php'php,php php$resultphp)php-php>itemphp(php0php)php;
php php php php php php php php ifphp php(php$cacheUrlphp instanceofphp DOMNodephp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>CacheUrlphp php=php php$cacheUrlphp-php>dataphp;
php php php php php php php php php}
php php php php php php php php php$cacheSizephp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php.php/yhphp:Cachephp/yhphp:Sizephp/textphp(php)php'php,php php$resultphp)php-php>itemphp(php0php)php;
php php php php php php php php ifphp php(php$cacheSizephp instanceofphp DOMNodephp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>CacheSizephp php=php php(intphp)php php$cacheSizephp-php>dataphp;
php php php php php php php php php}
php php php php php}
php}
