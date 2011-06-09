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
php php*php php@packagephp php php php Zendphp_Navigation
php php*php php@subpackagephp Page
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Uriphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Navigationphp_Pagephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Navigationphp/Pagephp.phpphp'php;

php/php*php*
php php*php Representsphp aphp pagephp thatphp isphp definedphp byphp specifyingphp aphp URI
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Navigation
php php*php php@subpackagephp Page
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Navigationphp_Pagephp_Uriphp extendsphp Zendphp_Navigationphp_Page
php{
php php php php php/php*php*
php php php php php php*php Pagephp URI
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_uriphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setsphp pagephp URI
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uriphp php php php php php php php php php php php php php php php pagephp URIphp,php mustphp aphp stringphp orphp null
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Uriphp php php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp php$uriphp isphp invalid
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$uriphp php&php&php php!isphp_stringphp(php$uriphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$uriphp mustphp bephp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_uriphp php=php php$uriphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp URI
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_uriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp hrefphp forphp thisphp page
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHrefphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getUriphp(php)php;
php php php php php}

php php php php php/php/php Publicphp methodsphp:

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp representationphp ofphp thephp page
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_mergephp(
php php php php php php php php php php php php parentphp:php:toArrayphp(php)php,
php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php'uriphp'php php=php>php php$thisphp-php>getUriphp(php)
php php php php php php php php php php php php php)php)php;
php php php php php}
php}
