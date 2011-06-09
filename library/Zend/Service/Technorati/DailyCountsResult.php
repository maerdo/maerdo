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
php php*php php@versionphp php php php php$Idphp:php DailyCountsResultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Resultphp.phpphp'php;


php/php*php*
php php*php Representsphp aphp singlephp Technoratiphp DailyCountsphp queryphp resultphp objectphp.
php php*php Itphp isphp neverphp returnedphp asphp aphp standalonephp objectphp,
php php*php butphp itphp alwaysphp belongsphp tophp aphp validphp Zendphp_Servicephp_Technoratiphp_DailyCountsResultSetphp objectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_DailyCountsResultphp extendsphp Zendphp_Servicephp_Technoratiphp_Result
php{
php php php php php/php*php*
php php php php php php*php Datephp ofphp countphp.
php php php php php php*
php php php php php php*php php@varphp php php php php Zendphp_Date
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_datephp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp postsphp containingphp queryphp onphp givenphp datephp.
php php php php php php*
php php php php php php*php php@varphp php php php php int
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_countphp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp objectphp objectphp fromphp DOMphp Documentphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomElementphp php$domphp thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomElementphp php$domphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fieldsphp php=php arrayphp(php php'php_datephp'php php php php=php>php php'datephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php_countphp'php php php=php>php php'countphp'php)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$domphp)php;

php php php php php php php php php/php/php filterphp fields
php php php php php php php php php$thisphp-php>php_datephp php php=php newphp Zendphp_Datephp(strtotimephp(php$thisphp-php>php_datephp)php)php;
php php php php php php php php php$thisphp-php>php_countphp php=php php(intphp)php php$thisphp-php>php_countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp datephp ofphp countphp.
php php php php php php*
php php php php php php*php php@returnphp php Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp postsphp containingphp queryphp onphp givenphp datephp.
php php php php php php*
php php php php php php*php php@returnphp php int
php php php php php php*php/
php php php php publicphp functionphp getCountphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_countphp;
php php php php php}
php}
