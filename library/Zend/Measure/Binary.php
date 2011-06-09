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
php php*php php@versionphp php php php$Idphp:php Binaryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp binaryphp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Binary
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Binaryphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'BYTEphp'php;

php php php php constphp BITphp php php php php php php php php php php php php php php php=php php'BITphp'php;
php php php php constphp CRUMBphp php php php php php php php php php php php php php=php php'CRUMBphp'php;
php php php php constphp NIBBLEphp php php php php php php php php php php php php=php php'NIBBLEphp'php;
php php php php constphp BYTEphp php php php php php php php php php php php php php php=php php'BYTEphp'php;
php php php php constphp KILOBYTEphp php php php php php php php php php php=php php'KILOBYTEphp'php;
php php php php constphp KIBIBYTEphp php php php php php php php php php php=php php'KIBIBYTEphp'php;
php php php php constphp KILOphp_BINARYphp_BYTEphp php php=php php'KILOphp_BINARYphp_BYTEphp'php;
php php php php constphp KILOBYTEphp_SIphp php php php php php php php=php php'KILOBYTEphp_SIphp'php;
php php php php constphp MEGABYTEphp php php php php php php php php php php=php php'MEGABYTEphp'php;
php php php php constphp MEBIBYTEphp php php php php php php php php php php=php php'MEBIBYTEphp'php;
php php php php constphp MEGAphp_BINARYphp_BYTEphp php php=php php'MEGAphp_BINARYphp_BYTEphp'php;
php php php php constphp MEGABYTEphp_SIphp php php php php php php php=php php'MEGABYTEphp_SIphp'php;
php php php php constphp GIGABYTEphp php php php php php php php php php php=php php'GIGABYTEphp'php;
php php php php constphp GIBIBYTEphp php php php php php php php php php php=php php'GIBIBYTEphp'php;
php php php php constphp GIGAphp_BINARYphp_BYTEphp php php=php php'GIGAphp_BINARYphp_BYTEphp'php;
php php php php constphp GIGABYTEphp_SIphp php php php php php php php=php php'GIGABYTEphp_SIphp'php;
php php php php constphp TERABYTEphp php php php php php php php php php php=php php'TERABYTEphp'php;
php php php php constphp TEBIBYTEphp php php php php php php php php php php=php php'TEBIBYTEphp'php;
php php php php constphp TERAphp_BINARYphp_BYTEphp php php=php php'TERAphp_BINARYphp_BYTEphp'php;
php php php php constphp TERABYTEphp_SIphp php php php php php php php=php php'TERABYTEphp_SIphp'php;
php php php php constphp PETABYTEphp php php php php php php php php php php=php php'PETABYTEphp'php;
php php php php constphp PEBIBYTEphp php php php php php php php php php php=php php'PEBIBYTEphp'php;
php php php php constphp PETAphp_BINARYphp_BYTEphp php php=php php'PETAphp_BINARYphp_BYTEphp'php;
php php php php constphp PETABYTEphp_SIphp php php php php php php php=php php'PETABYTEphp_SIphp'php;
php php php php constphp EXABYTEphp php php php php php php php php php php php=php php'EXABYTEphp'php;
php php php php constphp EXBIBYTEphp php php php php php php php php php php=php php'EXBIBYTEphp'php;
php php php php constphp EXAphp_BINARYphp_BYTEphp php php php=php php'EXAphp_BINARYphp_BYTEphp'php;
php php php php constphp EXABYTEphp_SIphp php php php php php php php php=php php'EXABYTEphp_SIphp'php;
php php php php constphp ZETTABYTEphp php php php php php php php php php=php php'ZETTABYTEphp'php;
php php php php constphp ZEBIBYTEphp php php php php php php php php php php=php php'ZEBIBYTEphp'php;
php php php php constphp ZETTAphp_BINARYphp_BYTEphp php=php php'ZETTAphp_BINARYphp_BYTEphp'php;
php php php php constphp ZETTABYTEphp_SIphp php php php php php php=php php'ZETTABYTEphp_SIphp'php;
php php php php constphp YOTTABYTEphp php php php php php php php php php=php php'YOTTABYTEphp'php;
php php php php constphp YOBIBYTEphp php php php php php php php php php php=php php'YOBIBYTEphp'php;
php php php php constphp YOTTAphp_BINARYphp_BYTEphp php=php php'YOTTAphp_BINARYphp_BYTEphp'php;
php php php php constphp YOTTABYTEphp_SIphp php php php php php php=php php'YOTTABYTEphp_SIphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp binaryphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'BITphp'php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php1php2php5php'php,php php php php php php php php php php php php php php php php php php php php php php'bphp'php)php,
php php php php php php php php php'CRUMBphp'php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php2php5php'php,php php php php php php php php php php php php php php php php php php php php php php php'crumbphp'php)php,
php php php php php php php php php'NIBBLEphp'php php php php php php php php php php php php=php>php arrayphp(php'php0php.php5php'php,php php php php php php php php php php php php php php php php php php php php php php php php'nibblephp'php)php,
php php php php php php php php php'BYTEphp'php php php php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php'Bphp'php)php,
php php php php php php php php php'KILOBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php2php4php'php,php php php php php php php php php php php php php php php php php php php php php php php'kBphp'php)php,
php php php php php php php php php'KIBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php2php4php'php,php php php php php php php php php php php php php php php php php php php php php php php'KiBphp'php)php,
php php php php php php php php php'KILOphp_BINARYphp_BYTEphp'php php=php>php arrayphp(php'php1php0php2php4php'php,php php php php php php php php php php php php php php php php php php php php php php php'KiBphp'php)php,
php php php php php php php php php'KILOBYTEphp_SIphp'php php php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php'kBphp.php'php)php,
php php php php php php php php php'MEGABYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php4php8php5php7php6php'php,php php php php php php php php php php php php php php php php php php php php'MBphp'php)php,
php php php php php php php php php'MEBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php4php8php5php7php6php'php,php php php php php php php php php php php php php php php php php php php php'MiBphp'php)php,
php php php php php php php php php'MEGAphp_BINARYphp_BYTEphp'php php=php>php arrayphp(php'php1php0php4php8php5php7php6php'php,php php php php php php php php php php php php php php php php php php php php'MiBphp'php)php,
php php php php php php php php php'MEGABYTEphp_SIphp'php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php'MBphp.php'php)php,
php php php php php php php php php'GIGABYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php7php3php7php4php1php8php2php4php'php,php php php php php php php php php php php php php php php php php'GBphp'php)php,
php php php php php php php php php'GIBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php7php3php7php4php1php8php2php4php'php,php php php php php php php php php php php php php php php php php'GiBphp'php)php,
php php php php php php php php php'GIGAphp_BINARYphp_BYTEphp'php php=php>php arrayphp(php'php1php0php7php3php7php4php1php8php2php4php'php,php php php php php php php php php php php php php php php php php'GiBphp'php)php,
php php php php php php php php php'GIGABYTEphp_SIphp'php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php'php,php php php php php php php php php php php php php php php php php'GBphp.php'php)php,
php php php php php php php php php'TERABYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php9php9php5php1php1php6php2php7php7php7php6php'php,php php php php php php php php php php php php php php'TBphp'php)php,
php php php php php php php php php'TEBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php0php9php9php5php1php1php6php2php7php7php7php6php'php,php php php php php php php php php php php php php php'TiBphp'php)php,
php php php php php php php php php'TERAphp_BINARYphp_BYTEphp'php php=php>php arrayphp(php'php1php0php9php9php5php1php1php6php2php7php7php7php6php'php,php php php php php php php php php php php php php php'TiBphp'php)php,
php php php php php php php php php'TERABYTEphp_SIphp'php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php php php php php php php php php php php php php'TBphp.php'php)php,
php php php php php php php php php'PETABYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php1php2php5php8php9php9php9php0php6php8php4php2php6php2php4php'php,php php php php php php php php php php php'PBphp'php)php,
php php php php php php php php php'PEBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php1php2php5php8php9php9php9php0php6php8php4php2php6php2php4php'php,php php php php php php php php php php php'PiBphp'php)php,
php php php php php php php php php'PETAphp_BINARYphp_BYTEphp'php php=php>php arrayphp(php'php1php1php2php5php8php9php9php9php0php6php8php4php2php6php2php4php'php,php php php php php php php php php php php'PiBphp'php)php,
php php php php php php php php php'PETABYTEphp_SIphp'php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php php php php php php php php php php'PBphp.php'php)php,
php php php php php php php php php'EXABYTEphp'php php php php php php php php php php php=php>php arrayphp(php'php1php1php5php2php9php2php1php5php0php4php6php0php6php8php4php6php9php7php6php'php,php php php php php php php php'EBphp'php)php,
php php php php php php php php php'EXBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php1php5php2php9php2php1php5php0php4php6php0php6php8php4php6php9php7php6php'php,php php php php php php php php'EiBphp'php)php,
php php php php php php php php php'EXAphp_BINARYphp_BYTEphp'php php php=php>php arrayphp(php'php1php1php5php2php9php2php1php5php0php4php6php0php6php8php4php6php9php7php6php'php,php php php php php php php php'EiBphp'php)php,
php php php php php php php php php'EXABYTEphp_SIphp'php php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php php php php php php php'EBphp.php'php)php,
php php php php php php php php php'ZETTABYTEphp'php php php php php php php php php=php>php arrayphp(php'php1php1php8php0php5php9php1php6php2php0php7php1php7php4php1php1php3php0php3php4php2php4php'php,php php php php php'ZBphp'php)php,
php php php php php php php php php'ZEBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php1php8php0php5php9php1php6php2php0php7php1php7php4php1php1php3php0php3php4php2php4php'php,php php php php php'ZiBphp'php)php,
php php php php php php php php php'ZETTAphp_BINARYphp_BYTEphp'php=php>php arrayphp(php'php1php1php8php0php5php9php1php6php2php0php7php1php7php4php1php1php3php0php3php4php2php4php'php,php php php php php'ZiBphp'php)php,
php php php php php php php php php'ZETTABYTEphp_SIphp'php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php php php php'ZBphp.php'php)php,
php php php php php php php php php'YOTTABYTEphp'php php php php php php php php php=php>php arrayphp(php'php1php2php0php8php9php2php5php8php1php9php6php1php4php6php2php9php1php7php4php7php0php6php1php7php6php'php,php php'YBphp'php)php,
php php php php php php php php php'YOBIBYTEphp'php php php php php php php php php php=php>php arrayphp(php'php1php2php0php8php9php2php5php8php1php9php6php1php4php6php2php9php1php7php4php7php0php6php1php7php6php'php,php php'YiBphp'php)php,
php php php php php php php php php'YOTTAphp_BINARYphp_BYTEphp'php=php>php arrayphp(php'php1php2php0php8php9php2php5php8php1php9php6php1php4php6php2php9php1php7php4php7php0php6php1php7php6php'php,php php'YiBphp'php)php,
php php php php php php php php php'YOTTABYTEphp_SIphp'php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php'YBphp.php'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php=php>php php'BYTEphp'
php php php php php)php;
php}
