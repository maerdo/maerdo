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
php php*php php@versionphp php php php$Idphp:php Dynamicphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp accelerationphp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Viscosityphp_Dynamic
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Viscosityphp_Dynamicphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'KILOGRAMphp_PERphp_METERphp_SECONDphp'php;

php php php php constphp CENTIPOISEphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'CENTIPOISEphp'php;
php php php php constphp DECIPOISEphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'DECIPOISEphp'php;
php php php php constphp DYNEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp php php php php php php php=php php'DYNEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp'php;
php php php php constphp GRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp php=php php'GRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp'php;
php php php php constphp GRAMphp_PERphp_CENTIMETERphp_SECONDphp php php php php php php php php php php php php php php=php php'GRAMphp_PERphp_CENTIMETERphp_SECONDphp'php;
php php php php constphp KILOGRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_METERphp php php=php php'KILOGRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_METERphp'php;
php php php php constphp KILOGRAMphp_PERphp_METERphp_HOURphp php php php php php php php php php php php php php php php php php=php php'KILOGRAMphp_PERphp_METERphp_HOURphp'php;
php php php php constphp KILOGRAMphp_PERphp_METERphp_SECONDphp php php php php php php php php php php php php php php php=php php'KILOGRAMphp_PERphp_METERphp_SECONDphp'php;
php php php php constphp MILLIPASCALphp_SECONDphp php php php php php php php php php php php php php php php php php php php php php php=php php'MILLIPASCALphp_SECONDphp'php;
php php php php constphp MILLIPOISEphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'MILLIPOISEphp'php;
php php php php constphp NEWTONphp_SECONDphp_PERphp_SQUAREphp_METERphp php php php php php php php php php php=php php'NEWTONphp_SECONDphp_PERphp_SQUAREphp_METERphp'php;
php php php php constphp PASCALphp_SECONDphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'PASCALphp_SECONDphp'php;
php php php php constphp POISEphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'POISEphp'php;
php php php php constphp POISEUILLEphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'POISEUILLEphp'php;
php php php php constphp POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_FEETphp php php php php php php=php php'POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_FEETphp'php;
php php php php constphp POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_INCHphp php php php php php php=php php'POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_INCHphp'php;
php php php php constphp POUNDphp_PERphp_FOOTphp_HOURphp php php php php php php php php php php php php php php php php php php php php php=php php'POUNDphp_PERphp_FOOTphp_HOURphp'php;
php php php php constphp POUNDphp_PERphp_FOOTphp_SECONDphp php php php php php php php php php php php php php php php php php php php=php php'POUNDphp_PERphp_FOOTphp_SECONDphp'php;
php php php php constphp POUNDALphp_HOURphp_PERphp_SQUAREphp_FOOTphp php php php php php php php php php php php php=php php'POUNDALphp_HOURphp_PERphp_SQUAREphp_FOOTphp'php;
php php php php constphp POUNDALphp_SECONDphp_PERphp_SQUAREphp_FOOTphp php php php php php php php php php php=php php'POUNDALphp_SECONDphp_PERphp_SQUAREphp_FOOTphp'php;
php php php php constphp REYNphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'REYNphp'php;
php php php php constphp SLUGphp_PERphp_FOOTphp_SECONDphp php php php php php php php php php php php php php php php php php php php php=php php'SLUGphp_PERphp_FOOTphp_SECONDphp'php;
php php php php constphp LBFSphp_PERphp_SQUAREphp_FOOTphp php php php php php php php php php php php php php php php php php php php php=php php'LBFSphp_PERphp_SQUAREphp_FOOTphp'php;
php php php php constphp NSphp_PERphp_SQUAREphp_METERphp php php php php php php php php php php php php php php php php php php php php php=php php'NSphp_PERphp_SQUAREphp_METERphp'php;
php php php php constphp WATERphp_php2php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'WATERphp_php2php0Cphp'php;
php php php php constphp WATERphp_php4php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'WATERphp_php4php0Cphp'php;
php php php php constphp HEAVYphp_OILphp_php2php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'HEAVYphp_OILphp_php2php0Cphp'php;
php php php php constphp HEAVYphp_OILphp_php4php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'HEAVYphp_OILphp_php4php0Cphp'php;
php php php php constphp GLYCERINphp_php2php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'GLYCERINphp_php2php0Cphp'php;
php php php php constphp GLYCERINphp_php4php0Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'GLYCERINphp_php4php0Cphp'php;
php php php php constphp SAEphp_php5Wphp_MINUSphp1php8Cphp php php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php5Wphp_MINUSphp1php8Cphp'php;
php php php php constphp SAEphp_php1php0Wphp_MINUSphp1php8Cphp php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php1php0Wphp_MINUSphp1php8Cphp'php;
php php php php constphp SAEphp_php2php0Wphp_MINUSphp1php8Cphp php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php2php0Wphp_MINUSphp1php8Cphp'php;
php php php php constphp SAEphp_php5Wphp_php9php9Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php5Wphp_php9php9Cphp'php;
php php php php constphp SAEphp_php1php0Wphp_php9php9Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php1php0Wphp_php9php9Cphp'php;
php php php php constphp SAEphp_php2php0Wphp_php9php9Cphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'SAEphp_php2php0Wphp_php9php9Cphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp dynamicphp viscosityphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'CENTIPOISEphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php'cPphp'php)php,
php php php php php php php php php'DECIPOISEphp'php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php php php'dPphp'php)php,
php php php php php php php php php'DYNEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp'php php php php php php php php=php>php arrayphp(php'php0php.php1php'php,php php php php php php'dynphp sphp/cmphp²php'php)php,
php php php php php php php php php'GRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_CENTIMETERphp'php php=php>php arrayphp(php'php9php8php.php0php6php6php5php'php,php php'gfphp sphp/cmphp²php'php)php,
php php php php php php php php php'GRAMphp_PERphp_CENTIMETERphp_SECONDphp'php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php1php'php,php php php php php php'gphp/cmphp sphp'php)php,
php php php php php php php php php'KILOGRAMphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_METERphp'php php php=php>php arrayphp(php'php9php.php8php0php6php6php5php'php,php php'kgfphp sphp/mphp²php'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_METERphp_HOURphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php'kgphp/mphp hphp'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_METERphp_SECONDphp'php php php=php>php arrayphp(php'php1php'php,php php php php'kgphp/msphp'php)php,
php php php php php php php php php'MILLIPASCALphp_SECONDphp'php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php'mPaphp sphp'php)php,
php php php php php php php php php'MILLIPOISEphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php0php1php'php,php php php php php php'mPphp'php)php,
php php php php php php php php php'NEWTONphp_SECONDphp_PERphp_SQUAREphp_METERphp'php php=php>php arrayphp(php'php1php'php,php php'Nphp sphp/mphp²php'php)php,
php php php php php php php php php'PASCALphp_SECONDphp'php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php'Paphp sphp'php)php,
php php php php php php php php php'POISEphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php1php'php,php php php php php php php php php'Pphp'php)php,
php php php php php php php php php'POISEUILLEphp'php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php'Plphp'php)php,
php php php php php php php php php'POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_FEETphp'php php=php>php arrayphp(php'php4php7php.php8php8php0php2php5php9php'php,php php php'lbfphp sphp/ftphp²php'php)php,
php php php php php php php php php'POUNDphp_FORCEphp_SECONDphp_PERphp_SQUAREphp_INCHphp'php php=php>php arrayphp(php'php6php8php9php4php.php7php5php7php2php9php'php,php php'lbfphp sphp/inphp²php'php)php,
php php php php php php php php php'POUNDphp_PERphp_FOOTphp_HOURphp'php php=php>php arrayphp(php'php0php.php0php0php0php4php1php3php3php7php8php8php7php'php,php php php php php php php php php php php php php php'lbphp/ftphp hphp'php)php,
php php php php php php php php php'POUNDphp_PERphp_FOOTphp_SECONDphp'php php php php php php php php php php php=php>php arrayphp(php'php1php.php4php8php8php1php6php3php9php'php,php php php php php php php'lbphp/ftphp sphp'php)php,
php php php php php php php php php'POUNDALphp_HOURphp_PERphp_SQUAREphp_FOOTphp'php php php php=php>php arrayphp(php'php0php.php0php0php0php4php1php3php3php7php8php8php7php'php,php php php'pdlphp hphp/ftphp²php'php)php,
php php php php php php php php php'POUNDALphp_SECONDphp_PERphp_SQUAREphp_FOOTphp'php php=php>php arrayphp(php'php1php.php4php8php8php1php6php3php9php'php,php php php php php php php'pdlphp sphp/ftphp²php'php)php,
php php php php php php php php php'REYNphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php6php8php9php4php.php7php5php7php2php9php'php,php php'reynphp'php)php,
php php php php php php php php php'SLUGphp_PERphp_FOOTphp_SECONDphp'php=php>php arrayphp(php'php4php7php.php8php8php0php2php5php9php'php,php php php'slugphp/ftphp sphp'php)php,
php php php php php php php php php'WATERphp_php2php0Cphp'php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php'waterphp php(php2php0php°php)php'php)php,
php php php php php php php php php'WATERphp_php4php0Cphp'php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php0php6php5php'php,php php php php php'waterphp php(php4php0php°php)php'php)php,
php php php php php php php php php'HEAVYphp_OILphp_php2php0Cphp'php php php php php php php php=php>php arrayphp(php'php0php.php4php5php'php,php php php php php php php php'oilphp php(php2php0php°php)php'php)php,
php php php php php php php php php'HEAVYphp_OILphp_php4php0Cphp'php php php php php php php php=php>php arrayphp(php'php0php.php1php1php'php,php php php php php php php php'oilphp php(php4php0php°php)php'php)php,
php php php php php php php php php'GLYCERINphp_php2php0Cphp'php php php php php php php php php=php>php arrayphp(php'php1php.php4php1php'php,php php php php php php php php'glycerinphp php(php2php0php°php)php'php)php,
php php php php php php php php php'GLYCERINphp_php4php0Cphp'php php php php php php php php php=php>php arrayphp(php'php0php.php2php8php4php'php,php php php php php php php'glycerinphp php(php4php0php°php)php'php)php,
php php php php php php php php php'SAEphp_php5Wphp_MINUSphp1php8Cphp'php php php php php php=php>php arrayphp(php'php1php.php2php'php,php php php php php php php php php'SAEphp php5Wphp php(php-php1php8php°php)php'php)php,
php php php php php php php php php'SAEphp_php1php0Wphp_MINUSphp1php8Cphp'php php php php php=php>php arrayphp(php'php2php.php4php'php,php php php php php php php php php'SAEphp php1php0Wphp php(php-php1php8php°php)php'php)php,
php php php php php php php php php'SAEphp_php2php0Wphp_MINUSphp1php8Cphp'php php php php php=php>php arrayphp(php'php9php.php6php'php,php php php php php php php php php'SAEphp php2php0Wphp php(php-php1php8php°php)php'php)php,
php php php php php php php php php'SAEphp_php5Wphp_php9php9Cphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php3php9php'php,php php php php php php'SAEphp php5Wphp php(php9php9php°php)php'php)php,
php php php php php php php php php'SAEphp_php1php0Wphp_php9php9Cphp'php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php4php2php'php,php php php php php php'SAEphp php1php0Wphp php(php9php9php°php)php'php)php,
php php php php php php php php php'SAEphp_php2php0Wphp_php9php9Cphp'php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php5php7php'php,php php php php php php'SAEphp php2php0Wphp php(php9php9php°php)php'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php=php>php php'KILOGRAMphp_PERphp_METERphp_SECONDphp'
php php php php php)php;
php}
