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
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Yahoophp_Image
php{
php php php php php/php*php*
php php php php php php*php Imagephp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Urlphp;

php php php php php/php*php*
php php php php php php*php Imagephp heightphp inphp pixels
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$Heightphp;

php php php php php/php*php*
php php php php php php*php Imagephp widthphp inphp pixels
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$Widthphp;


php php php php php/php*php*
php php php php php php*php Initializesphp thephp image
php php php php php php*
php php php php php php*php php@paramphp php DOMNodephp php$dom
php php php php php php*php php@paramphp php stringphp php php$namespace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMNodephp php$domphp,php php$namespacephp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'yhphp'php,php php$namespacephp)php;
php php php php php php php php php$thisphp-php>Urlphp php=php Zendphp_Uriphp:php:factoryphp(php$xpathphp-php>queryphp(php'php.php/yhphp:Urlphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp)php;
php php php php php php php php php$thisphp-php>Heightphp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/yhphp:Heightphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$thisphp-php>Widthphp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/yhphp:Widthphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php}
php}
