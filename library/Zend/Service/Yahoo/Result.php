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
php php*php php@versionphp php php php php$Idphp:php Resultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Yahoophp_Result
php{
php php php php php/php*php*
php php php php php php*php Thephp titlephp ofphp thephp searchphp entry
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Titlephp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp ofphp thephp foundphp object
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Urlphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp forphp linkingphp tophp thephp foundphp object
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$ClickUrlphp;

php php php php php/php*php*
php php php php php php*php Resultphp fields
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_fieldsphp;

php php php php php/php*php*
php php php php php php*php RESTphp responsephp fragmentphp forphp thephp result
php php php php php php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_resultphp;

php php php php php/php*php*
php php php php php php*php Objectphp forphp XPathphp queries
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xpathphp;


php php php php php/php*php*
php php php php php php*php Initializesphp thephp result
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$result
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$resultphp)
php php php php php{
php php php php php php php php php/php/php defaultphp fieldsphp forphp allphp searchphp resultsphp:
php php php php php php php php php$fieldsphp php=php arrayphp(php'Titlephp'php,php php'Urlphp'php,php php'ClickUrlphp'php)php;

php php php php php php php php php/php/php mergephp wphp/php childphp'sphp fields
php php php php php php php php php$thisphp-php>php_fieldsphp php=php arrayphp_mergephp(php$thisphp-php>php_fieldsphp,php php$fieldsphp)php;

php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$resultphp-php>ownerDocumentphp)php;
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'yhphp'php,php php$thisphp-php>php_namespacephp)php;

php php php php php php php php php/php/php addphp searchphp resultsphp tophp appropriatephp fields

php php php php php php php php foreachphp php(php$thisphp-php>php_fieldsphp asphp php$fphp)php php{
php php php php php php php php php php php php php$queryphp php=php php"php.php/yhphp:php$fphp/textphp(php)php"php;
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$queryphp,php php$resultphp)php;
php php php php php php php php php php php php ifphp php(php$nodephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$fphp}php php=php php$nodephp-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_resultphp php=php php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp thephp Thumbnailphp property
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setThumbnailphp(php)
php php php php php{
php php php php php php php php php$nodephp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php.php/yhphp:Thumbnailphp'php,php php$thisphp-php>php_resultphp)php;
php php php php php php php php ifphp php(php$nodephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_Image
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/Imagephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>Thumbnailphp php=php newphp Zendphp_Servicephp_Yahoophp_Imagephp(php$nodephp-php>itemphp(php0php)php,php php$thisphp-php>php_namespacephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>Thumbnailphp php=php nullphp;
php php php php php php php php php}
php php php php php}
php}
