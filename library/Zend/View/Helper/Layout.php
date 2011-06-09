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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Layoutphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Viewphp helperphp forphp retrievingphp layoutphp object
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Layoutphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*php php@varphp Zendphp_Layoutphp php*php/
php php php php protectedphp php$php_layoutphp;

php php php php php/php*php*
php php php php php php*php Getphp layoutphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp getLayoutphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php php php php php php/php/php Implicitlyphp createsphp layoutphp object
php php php php php php php php php php php php php php php php php$thisphp-php>php_layoutphp php=php newphp Zendphp_Layoutphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_layoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layout
php php php php php php*php php@returnphp Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutphp(Zendphp_Layoutphp php$layoutphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layoutphp php=php php$layoutphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp layoutphp object
php php php php php php*
php php php php php php*php Usagephp:php php$thisphp-php>layoutphp(php)php-php>setLayoutphp(php'alternatephp'php)php;
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp layoutphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLayoutphp(php)php;
php php php php php}
php}
