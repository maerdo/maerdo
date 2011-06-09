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
php php*php php@subpackagephp Simpy
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php LinkSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Simpyphp_Link
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/Linkphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Simpy
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Simpyphp_LinkSetphp implementsphp IteratorAggregate
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp links
php php php php php php*
php php php php php php*php php@varphp arrayphp ofphp Zendphp_Servicephp_Simpyphp_Linkphp objects
php php php php php php*php/
php php php php protectedphp php$php_linksphp;

php php php php php/php*php*
php php php php php php*php Constructorphp tophp initializephp thephp objectphp withphp data
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$docphp Parsedphp responsephp fromphp aphp GetLinksphp operation
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMDocumentphp php$docphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$docphp)php;
php php php php php php php php php$listphp php=php php$xpathphp-php>queryphp(php'php/php/linksphp/linkphp'php)php;
php php php php php php php php php$thisphp-php>php_linksphp php=php arrayphp(php)php;

php php php php php php php php forphp php(php$xphp php=php php0php;php php$xphp <php php$listphp-php>lengthphp;php php$xphp+php+php)php php{
php php php php php php php php php php php php php$thisphp-php>php_linksphp[php$xphp]php php=php newphp Zendphp_Servicephp_Simpyphp_Linkphp(php$listphp-php>itemphp(php$xphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp iteratorphp forphp thephp linkphp set
php php php php php php*
php php php php php php*php php@returnphp ArrayIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>php_linksphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp linksphp inphp thephp set
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getLengthphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_linksphp)php;
php php php php php}
php}
