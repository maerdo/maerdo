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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Measure
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Weightphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp cookingphp weightphp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Cookingphp_Weight
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Cookingphp_Weightphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'GRAMphp'php;

php php php php constphp HALFphp_STICKphp php php php php=php php'HALFphp_STICKphp'php;
php php php php constphp STICKphp php php php php php php php php php=php php'STICKphp'php;
php php php php constphp CUPphp php php php php php php php php php php php=php php'CUPphp'php;
php php php php constphp GRAMphp php php php php php php php php php php=php php'GRAMphp'php;
php php php php constphp OUNCEphp php php php php php php php php php=php php'OUNCEphp'php;
php php php php constphp POUNDphp php php php php php php php php php=php php'POUNDphp'php;
php php php php constphp TEASPOONphp php php php php php php=php php'TEASPOONphp'php;
php php php php constphp TEASPOONphp_USphp php php php=php php'TEASPOONphp_USphp'php;
php php php php constphp TABLESPOONphp php php php php=php php'TABLESPOONphp'php;
php php php php constphp TABLESPOONphp_USphp php=php php'TABLESPOONphp_USphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp cookingphp weightphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'HALFphp_STICKphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php8php'php)php,php php php php php php php php php php php php php php php php php php php php php'halfphp stkphp'php)php,
php php php php php php php php php'STICKphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php4php'php)php,php php php php php php php php php php php php php php php php php php php php php'stkphp'php)php,
php php php php php php php php php'CUPphp'php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php2php'php)php,php php php php php php php php php php php php php php php php php php php php php'cphp'php)php,
php php php php php php php php php'GRAMphp'php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'gphp'php)php,
php php php php php php php php php'OUNCEphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php1php6php'php)php,php php php php php php php php php php php php php php php php php php php php'ozphp'php)php,
php php php php php php php php php'POUNDphp'php php php php php php php php php php=php>php arrayphp(php'php4php5php3php.php5php9php2php3php7php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'lbphp'php)php,
php php php php php php php php php'TEASPOONphp'php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php.php2php5php0php3php3php3php2php'php,php php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php1php2php8php'php)php,php php'tspphp'php)php,
php php php php php php php php php'TEASPOONphp_USphp'php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php9php6php'php)php,php php php php php php php php php php php php php php php php php php php php'tspphp'php)php,
php php php php php php php php php'TABLESPOONphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php.php2php5php0php3php3php3php2php'php,php php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php3php2php'php)php,php php php'tbspphp'php)php,
php php php php php php php php php'TABLESPOONphp_USphp'php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php5php3php.php5php9php2php3php7php'php,php php'php/php'php php=php>php php'php3php2php'php)php,php php php php php php php php php php php php php php php php php php php php'tbspphp'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php=php>php php'GRAMphp'
php php php php php)php;
php}
