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
php php*php php@versionphp php php php$Idphp:php Accelerationphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
php php*php php@subpackagephp Zendphp_Measurephp_Acceleration
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Accelerationphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'METERphp_PERphp_SQUAREphp_SECONDphp'php;

php php php php constphp CENTIGALphp php php php php php php php php php php php php php php php php php php php php php=php php'CENTIGALphp'php;
php php php php constphp CENTIMETERphp_PERphp_SQUAREphp_SECONDphp php=php php'CENTIMETERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp DECIGALphp php php php php php php php php php php php php php php php php php php php php php php=php php'DECIGALphp'php;
php php php php constphp DECIMETERphp_PERphp_SQUAREphp_SECONDphp php php=php php'DECIMETERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp DEKAMETERphp_PERphp_SQUAREphp_SECONDphp php php=php php'DEKAMETERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp FOOTphp_PERphp_SQUAREphp_SECONDphp php php php php php php php=php php'FOOTphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp Gphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'Gphp'php;
php php php php constphp GALphp php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'GALphp'php;
php php php php constphp GALILEOphp php php php php php php php php php php php php php php php php php php php php php php=php php'GALILEOphp'php;
php php php php constphp GRAVphp php php php php php php php php php php php php php php php php php php php php php php php php php=php php'GRAVphp'php;
php php php php constphp HECTOMETERphp_PERphp_SQUAREphp_SECONDphp php=php php'HECTOMETERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp INCHphp_PERphp_SQUAREphp_SECONDphp php php php php php php php=php php'INCHphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp KILOMETERphp_PERphp_HOURphp_SECONDphp php php php php=php php'KILOMETERphp_PERphp_HOURphp_SECONDphp'php;
php php php php constphp KILOMETERphp_PERphp_SQUAREphp_SECONDphp php php=php php'KILOMETERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp METERphp_PERphp_SQUAREphp_SECONDphp php php php php php php=php php'METERphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp MILEphp_PERphp_HOURphp_MINUTEphp php php php php php php php php php=php php'MILEphp_PERphp_HOURphp_MINUTEphp'php;
php php php php constphp MILEphp_PERphp_HOURphp_SECONDphp php php php php php php php php php=php php'MILEphp_PERphp_HOURphp_SECONDphp'php;
php php php php constphp MILEphp_PERphp_SQUAREphp_SECONDphp php php php php php php php=php php'MILEphp_PERphp_SQUAREphp_SECONDphp'php;
php php php php constphp MILLIGALphp php php php php php php php php php php php php php php php php php php php php php=php php'MILLIGALphp'php;
php php php php constphp MILLIMETERphp_PERphp_SQUAREphp_SECONDphp php=php php'MILLIMETERphp_PERphp_SQUAREphp_SECONDphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp accelerationphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'CENTIGALphp'php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php0php1php'php,php php php php'cgalphp'php)php,
php php php php php php php php php'CENTIMETERphp_PERphp_SQUAREphp_SECONDphp'php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php'cmphp/sphp²php'php)php,
php php php php php php php php php'DECIGALphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php'dgalphp'php)php,
php php php php php php php php php'DECIMETERphp_PERphp_SQUAREphp_SECONDphp'php php php=php>php arrayphp(php'php0php.php1php'php,php php php php php php php'dmphp/sphp²php'php)php,
php php php php php php php php php'DEKAMETERphp_PERphp_SQUAREphp_SECONDphp'php php php=php>php arrayphp(php'php1php0php'php,php php php php php php php php'damphp/sphp²php'php)php,
php php php php php php php php php'FOOTphp_PERphp_SQUAREphp_SECONDphp'php php php php php php php php=php>php arrayphp(php'php0php.php3php0php4php8php'php,php php php php'ftphp/sphp²php'php)php,
php php php php php php php php php'Gphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php9php.php8php0php6php6php5php'php,php php php'gphp'php)php,
php php php php php php php php php'GALphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php'galphp'php)php,
php php php php php php php php php'GALILEOphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php'galphp'php)php,
php php php php php php php php php'GRAVphp'php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php9php.php8php0php6php6php5php'php,php php php'gphp'php)php,
php php php php php php php php php'HECTOMETERphp_PERphp_SQUAREphp_SECONDphp'php php=php>php arrayphp(php'php1php0php0php'php,php php php php php php php'hphp/sphp²php'php)php,
php php php php php php php php php'INCHphp_PERphp_SQUAREphp_SECONDphp'php php php php php php php php=php>php arrayphp(php'php0php.php0php2php5php4php'php,php php php php'inphp/sphp²php'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_HOURphp_SECONDphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php5php'php,php'php/php'php php=php>php php'php1php8php'php)php,php php'kmphp/hphp²php'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_SQUAREphp_SECONDphp'php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php'kmphp/sphp²php'php)php,
php php php php php php php php php'METERphp_PERphp_SQUAREphp_SECONDphp'php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php'mphp/sphp²php'php)php,
php php php php php php php php php'MILEphp_PERphp_HOURphp_MINUTEphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php2php'php,php php'php/php'php php=php>php php'php1php5php'php,php php'php*php'php php=php>php php'php0php.php3php0php4php8php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php'mphphp/mphp'php)php,
php php php php php php php php php'MILEphp_PERphp_HOURphp_SECONDphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php2php'php,php php'php/php'php php=php>php php'php1php5php'php,php php'php*php'php php=php>php php'php0php.php3php0php4php8php'php)php,php php'mphphp/sphp'php)php,
php php php php php php php php php'MILEphp_PERphp_SQUAREphp_SECONDphp'php php php php php php php php=php>php arrayphp(php'php1php6php0php9php.php3php4php4php'php,php php'miphp/sphp²php'php)php,
php php php php php php php php php'MILLIGALphp'php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php0php0php1php'php,php php php'mgalphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_SQUAREphp_SECONDphp'php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php'mmphp/sphp²php'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php php php php php php php php php php=php>php php'METERphp_PERphp_SQUAREphp_SECONDphp'
php php php php php)php;
php}
