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
php php*php php@versionphp php php php$Idphp:php Torquephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp torquephp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Torque
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Torquephp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'NEWTONphp_METERphp'php;

php php php php constphp DYNEphp_CENTIMETERphp php php php php php=php php'DYNEphp_CENTIMETERphp'php;
php php php php constphp GRAMphp_CENTIMETERphp php php php php php=php php'GRAMphp_CENTIMETERphp'php;
php php php php constphp KILOGRAMphp_CENTIMETERphp php=php php'KILOGRAMphp_CENTIMETERphp'php;
php php php php constphp KILOGRAMphp_METERphp php php php php php php=php php'KILOGRAMphp_METERphp'php;
php php php php constphp KILONEWTONphp_METERphp php php php php=php php'KILONEWTONphp_METERphp'php;
php php php php constphp KILOPONDphp_METERphp php php php php php php=php php'KILOPONDphp_METERphp'php;
php php php php constphp MEGANEWTONphp_METERphp php php php php=php php'MEGANEWTONphp_METERphp'php;
php php php php constphp MICRONEWTONphp_METERphp php php php=php php'MICRONEWTONphp_METERphp'php;
php php php php constphp MILLINEWTONphp_METERphp php php php=php php'MILLINEWTONphp_METERphp'php;
php php php php constphp NEWTONphp_CENTIMETERphp php php php=php php'NEWTONphp_CENTIMETERphp'php;
php php php php constphp NEWTONphp_METERphp php php php php php php php php=php php'NEWTONphp_METERphp'php;
php php php php constphp OUNCEphp_FOOTphp php php php php php php php php php php=php php'OUNCEphp_FOOTphp'php;
php php php php constphp OUNCEphp_INCHphp php php php php php php php php php php=php php'OUNCEphp_INCHphp'php;
php php php php constphp POUNDphp_FOOTphp php php php php php php php php php php=php php'POUNDphp_FOOTphp'php;
php php php php constphp POUNDALphp_FOOTphp php php php php php php php php=php php'POUNDALphp_FOOTphp'php;
php php php php constphp POUNDphp_INCHphp php php php php php php php php php php=php php'POUNDphp_INCHphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp torquephp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'DYNEphp_CENTIMETERphp'php php php php php php=php>php arrayphp(php'php0php.php0php0php0php0php0php0php1php'php,php php php php php php php php php php php'dyncmphp'php)php,
php php php php php php php php php'GRAMphp_CENTIMETERphp'php php php php php php=php>php arrayphp(php'php0php.php0php0php0php0php9php8php0php6php6php5php'php,php php php php php php php php'gcmphp'php)php,
php php php php php php php php php'KILOGRAMphp_CENTIMETERphp'php php=php>php arrayphp(php'php0php.php0php9php8php0php6php6php5php'php,php php php php php php php php php php php'kgcmphp'php)php,
php php php php php php php php php'KILOGRAMphp_METERphp'php php php php php php php=php>php arrayphp(php'php9php.php8php0php6php6php5php'php,php php php php php php php php php php php php php'kgmphp'php)php,
php php php php php php php php php'KILONEWTONphp_METERphp'php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php php php php php php'kNmphp'php)php,
php php php php php php php php php'KILOPONDphp_METERphp'php php php php php php php=php>php arrayphp(php'php9php.php8php0php6php6php5php'php,php php php php php php php php php php php php php'kpmphp'php)php,
php php php php php php php php php'MEGANEWTONphp_METERphp'php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php'php,php php php php php php php php php php php php php'MNmphp'php)php,
php php php php php php php php php'MICRONEWTONphp_METERphp'php php php php=php>php arrayphp(php'php0php.php0php0php0php0php0php1php'php,php php php php php php php php php php php php'phpµNmphp'php)php,
php php php php php php php php php'MILLINEWTONphp_METERphp'php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php php php php php php php php php'mNmphp'php)php,
php php php php php php php php php'NEWTONphp_CENTIMETERphp'php php php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php php php php php php php php php php php'Ncmphp'php)php,
php php php php php php php php php'NEWTONphp_METERphp'php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php'Nmphp'php)php,
php php php php php php php php php'OUNCEphp_FOOTphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php8php4php7php3php8php6php2php2php'php,php php php php php php php php php'ozftphp'php)php,
php php php php php php php php php'OUNCEphp_INCHphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php8php4php7php3php8php6php2php2php'php,php php'php/php'php php=php>php php'php1php2php'php)php,php php'ozinphp'php)php,
php php php php php php php php php'POUNDphp_FOOTphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php8php4php7php3php8php6php2php2php'php,php php'php*php'php php=php>php php'php1php6php'php)php,php php'lbftphp'php)php,
php php php php php php php php php'POUNDALphp_FOOTphp'php php php php php php php php php=php>php arrayphp(php'php0php.php0php4php2php1php4php0php1php0php9php9php7php5php2php1php4php4php'php,php php'plftphp'php)php,
php php php php php php php php php'POUNDphp_INCHphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php8php4php7php3php8php6php2php2php'php,php php'php/php'php php=php>php php'php1php2php'php,php php'php*php'php php=php>php php'php1php6php'php)php,php php'lbinphp'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php=php>php php'NEWTONphp_METERphp'
php php php php php)php;
php}
