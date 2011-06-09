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
php php*php php@versionphp php php php$Idphp:php Speedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp speedphp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Speed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Speedphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'METERphp_PERphp_SECONDphp'php;

php php php php constphp BENZphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'BENZphp'php;
php php php php constphp CENTIMETERphp_PERphp_DAYphp php php php php php php php php php php php php php=php php'CENTIMETERphp_PERphp_DAYphp'php;
php php php php constphp CENTIMETERphp_PERphp_HOURphp php php php php php php php php php php php php=php php'CENTIMETERphp_PERphp_HOURphp'php;
php php php php constphp CENTIMETERphp_PERphp_MINUTEphp php php php php php php php php php php=php php'CENTIMETERphp_PERphp_MINUTEphp'php;
php php php php constphp CENTIMETERphp_PERphp_SECONDphp php php php php php php php php php php=php php'CENTIMETERphp_PERphp_SECONDphp'php;
php php php php constphp DEKAMETERphp_PERphp_DAYphp php php php php php php php php php php php php php php=php php'DEKAMETERphp_PERphp_DAYphp'php;
php php php php constphp DEKAMETERphp_PERphp_HOURphp php php php php php php php php php php php php php=php php'DEKAMETERphp_PERphp_HOURphp'php;
php php php php constphp DEKAMETERphp_PERphp_MINUTEphp php php php php php php php php php php php=php php'DEKAMETERphp_PERphp_MINUTEphp'php;
php php php php constphp DEKAMETERphp_PERphp_SECONDphp php php php php php php php php php php php=php php'DEKAMETERphp_PERphp_SECONDphp'php;
php php php php constphp FOOTphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php php php=php php'FOOTphp_PERphp_DAYphp'php;
php php php php constphp FOOTphp_PERphp_HOURphp php php php php php php php php php php php php php php php php php php=php php'FOOTphp_PERphp_HOURphp'php;
php php php php constphp FOOTphp_PERphp_MINUTEphp php php php php php php php php php php php php php php php php=php php'FOOTphp_PERphp_MINUTEphp'php;
php php php php constphp FOOTphp_PERphp_SECONDphp php php php php php php php php php php php php php php php php=php php'FOOTphp_PERphp_SECONDphp'php;
php php php php constphp FURLONGphp_PERphp_DAYphp php php php php php php php php php php php php php php php php=php php'FURLONGphp_PERphp_DAYphp'php;
php php php php constphp FURLONGphp_PERphp_FORTNIGHTphp php php php php php php php php php php=php php'FURLONGphp_PERphp_FORTNIGHTphp'php;
php php php php constphp FURLONGphp_PERphp_HOURphp php php php php php php php php php php php php php php php=php php'FURLONGphp_PERphp_HOURphp'php;
php php php php constphp FURLONGphp_PERphp_MINUTEphp php php php php php php php php php php php php php=php php'FURLONGphp_PERphp_MINUTEphp'php;
php php php php constphp FURLONGphp_PERphp_SECONDphp php php php php php php php php php php php php php=php php'FURLONGphp_PERphp_SECONDphp'php;
php php php php constphp HECTOMETERphp_PERphp_DAYphp php php php php php php php php php php php php php=php php'HECTOMETERphp_PERphp_DAYphp'php;
php php php php constphp HECTOMETERphp_PERphp_HOURphp php php php php php php php php php php php php=php php'HECTOMETERphp_PERphp_HOURphp'php;
php php php php constphp HECTOMETERphp_PERphp_MINUTEphp php php php php php php php php php php=php php'HECTOMETERphp_PERphp_MINUTEphp'php;
php php php php constphp HECTOMETERphp_PERphp_SECONDphp php php php php php php php php php php=php php'HECTOMETERphp_PERphp_SECONDphp'php;
php php php php constphp INCHphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php php php=php php'INCHphp_PERphp_DAYphp'php;
php php php php constphp INCHphp_PERphp_HOURphp php php php php php php php php php php php php php php php php php php=php php'INCHphp_PERphp_HOURphp'php;
php php php php constphp INCHphp_PERphp_MINUTEphp php php php php php php php php php php php php php php php php=php php'INCHphp_PERphp_MINUTEphp'php;
php php php php constphp INCHphp_PERphp_SECONDphp php php php php php php php php php php php php php php php php=php php'INCHphp_PERphp_SECONDphp'php;
php php php php constphp KILOMETERphp_PERphp_DAYphp php php php php php php php php php php php php php php=php php'KILOMETERphp_PERphp_DAYphp'php;
php php php php constphp KILOMETERphp_PERphp_HOURphp php php php php php php php php php php php php php=php php'KILOMETERphp_PERphp_HOURphp'php;
php php php php constphp KILOMETERphp_PERphp_MINUTEphp php php php php php php php php php php php=php php'KILOMETERphp_PERphp_MINUTEphp'php;
php php php php constphp KILOMETERphp_PERphp_SECONDphp php php php php php php php php php php php=php php'KILOMETERphp_PERphp_SECONDphp'php;
php php php php constphp KNOTphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'KNOTphp'php;
php php php php constphp LEAGUEphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php=php php'LEAGUEphp_PERphp_DAYphp'php;
php php php php constphp LEAGUEphp_PERphp_HOURphp php php php php php php php php php php php php php php php php=php php'LEAGUEphp_PERphp_HOURphp'php;
php php php php constphp LEAGUEphp_PERphp_MINUTEphp php php php php php php php php php php php php php php=php php'LEAGUEphp_PERphp_MINUTEphp'php;
php php php php constphp LEAGUEphp_PERphp_SECONDphp php php php php php php php php php php php php php php=php php'LEAGUEphp_PERphp_SECONDphp'php;
php php php php constphp MACHphp php php php php php php php php php php php php php php php php php php php php php php php php php php php=php php'MACHphp'php;
php php php php constphp MEGAMETERphp_PERphp_DAYphp php php php php php php php php php php php php php php=php php'MEGAMETERphp_PERphp_DAYphp'php;
php php php php constphp MEGAMETERphp_PERphp_HOURphp php php php php php php php php php php php php php=php php'MEGAMETERphp_PERphp_HOURphp'php;
php php php php constphp MEGAMETERphp_PERphp_MINUTEphp php php php php php php php php php php php=php php'MEGAMETERphp_PERphp_MINUTEphp'php;
php php php php constphp MEGAMETERphp_PERphp_SECONDphp php php php php php php php php php php php=php php'MEGAMETERphp_PERphp_SECONDphp'php;
php php php php constphp METERphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php php=php php'METERphp_PERphp_DAYphp'php;
php php php php constphp METERphp_PERphp_HOURphp php php php php php php php php php php php php php php php php php=php php'METERphp_PERphp_HOURphp'php;
php php php php constphp METERphp_PERphp_MINUTEphp php php php php php php php php php php php php php php php=php php'METERphp_PERphp_MINUTEphp'php;
php php php php constphp METERphp_PERphp_SECONDphp php php php php php php php php php php php php php php php=php php'METERphp_PERphp_SECONDphp'php;
php php php php constphp MILEphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php php php=php php'MILEphp_PERphp_DAYphp'php;
php php php php constphp MILEphp_PERphp_HOURphp php php php php php php php php php php php php php php php php php php=php php'MILEphp_PERphp_HOURphp'php;
php php php php constphp MILEphp_PERphp_MINUTEphp php php php php php php php php php php php php php php php php=php php'MILEphp_PERphp_MINUTEphp'php;
php php php php constphp MILEphp_PERphp_SECONDphp php php php php php php php php php php php php php php php php=php php'MILEphp_PERphp_SECONDphp'php;
php php php php constphp MILLIMETERphp_PERphp_DAYphp php php php php php php php php php php php php php=php php'MILLIMETERphp_PERphp_DAYphp'php;
php php php php constphp MILLIMETERphp_PERphp_HOURphp php php php php php php php php php php php php=php php'MILLIMETERphp_PERphp_HOURphp'php;
php php php php constphp MILLIMETERphp_PERphp_MINUTEphp php php php php php php php php php php=php php'MILLIMETERphp_PERphp_MINUTEphp'php;
php php php php constphp MILLIMETERphp_PERphp_SECONDphp php php php php php php php php php php=php php'MILLIMETERphp_PERphp_SECONDphp'php;
php php php php constphp MILLIMETERphp_PERphp_MICROSECONDphp php php php php php=php php'MILLIMETERphp_PERphp_MICROSECONDphp'php;
php php php php constphp MILLIMETERphp_PERphp_php1php0php0php_MICROSECONDphp php=php php'MILLIMETERphp_PERphp_php1php0php0php_MICROSECONDphp'php;
php php php php constphp NAUTICphp_MILEphp_PERphp_DAYphp php php php php php php php php php php php php=php php'NAUTICphp_MILEphp_PERphp_DAYphp'php;
php php php php constphp NAUTICphp_MILEphp_PERphp_HOURphp php php php php php php php php php php php=php php'NAUTICphp_MILEphp_PERphp_HOURphp'php;
php php php php constphp NAUTICphp_MILEphp_PERphp_MINUTEphp php php php php php php php php php=php php'NAUTICphp_MILEphp_PERphp_MINUTEphp'php;
php php php php constphp NAUTICphp_MILEphp_PERphp_SECONDphp php php php php php php php php php=php php'NAUTICphp_MILEphp_PERphp_SECONDphp'php;
php php php php constphp LIGHTSPEEDphp_AIRphp php php php php php php php php php php php php php php php php php=php php'LIGHTSPEEDphp_AIRphp'php;
php php php php constphp LIGHTSPEEDphp_GLASSphp php php php php php php php php php php php php php php php=php php'LIGHTSPEEDphp_GLASSphp'php;
php php php php constphp LIGHTSPEEDphp_ICEphp php php php php php php php php php php php php php php php php php=php php'LIGHTSPEEDphp_ICEphp'php;
php php php php constphp LIGHTSPEEDphp_VACUUMphp php php php php php php php php php php php php php php=php php'LIGHTSPEEDphp_VACUUMphp'php;
php php php php constphp LIGHTSPEEDphp_WATERphp php php php php php php php php php php php php php php php=php php'LIGHTSPEEDphp_WATERphp'php;
php php php php constphp SOUNDSPEEDphp_AIRphp php php php php php php php php php php php php php php php php php=php php'SOUNDSPEEDphp_AITphp'php;
php php php php constphp SOUNDSPEEDphp_METALphp php php php php php php php php php php php php php php php=php php'SOUNDSPEEDphp_METALphp'php;
php php php php constphp SOUNDSPEEDphp_WATERphp php php php php php php php php php php php php php php php=php php'SOUNDSPEEDphp_WATERphp'php;
php php php php constphp YARDphp_PERphp_DAYphp php php php php php php php php php php php php php php php php php php php=php php'YARDphp_PERphp_DAYphp'php;
php php php php constphp YARDphp_PERphp_HOURphp php php php php php php php php php php php php php php php php php php=php php'YARDphp_PERphp_HOURphp'php;
php php php php constphp YARDphp_PERphp_MINUTEphp php php php php php php php php php php php php php php php php=php php'YARDphp_PERphp_MINUTEphp'php;
php php php php constphp YARDphp_PERphp_SECONDphp php php php php php php php php php php php php php php php php=php php'YARDphp_PERphp_SECONDphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp speedphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'BENZphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Bzphp'php)php,
php php php php php php php php php'CENTIMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php'cmphp/dayphp'php)php,
php php php php php php php php php'CENTIMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php'cmphp/hphp'php)php,
php php php php php php php php php'CENTIMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php'cmphp/mphp'php)php,
php php php php php php php php php'CENTIMETERphp_PERphp_SECONDphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'cdphp/sphp'php)php,
php php php php php php php php php'DEKAMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php php php'damphp/dayphp'php)php,
php php php php php php php php php'DEKAMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php php php'damphp/hphp'php)php,
php php php php php php php php php'DEKAMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php php php'damphp/mphp'php)php,
php php php php php php php php php'DEKAMETERphp_PERphp_SECONDphp'php php php php php php php php php php php php=php>php arrayphp(php'php1php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'damphp/sphp'php)php,
php php php php php php php php php'FOOTphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php3php0php4php8php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php'ftphp/dayphp'php)php,
php php php php php php php php php'FOOTphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php3php0php4php8php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php'ftphp/hphp'php)php,
php php php php php php php php php'FOOTphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php3php0php4php8php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php'ftphp/mphp'php)php,
php php php php php php php php php'FOOTphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php3php0php4php8php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ftphp/sphp'php)php,
php php php php php php php php php'FURLONGphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php0php1php.php1php6php8php4php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php'furphp/dayphp'php)php,
php php php php php php php php php'FURLONGphp_PERphp_FORTNIGHTphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php0php1php.php1php6php8php4php'php,php php'php/php'php php=php>php php'php1php2php0php9php6php0php0php'php)php,php php'furphp/fortnightphp'php)php,
php php php php php php php php php'FURLONGphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php0php1php.php1php6php8php4php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php'furphp/hphp'php)php,
php php php php php php php php php'FURLONGphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php2php0php1php.php1php6php8php4php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php'furphp/mphp'php)php,
php php php php php php php php php'FURLONGphp_PERphp_SECONDphp'php php php php php php php php php php php php php php=php>php arrayphp(php'php2php0php1php.php1php6php8php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'furphp/sphp'php)php,
php php php php php php php php php'HECTOMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php php'hmphp/dayphp'php)php,
php php php php php php php php php'HECTOMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php php'hmphp/hphp'php)php,
php php php php php php php php php'HECTOMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php php'hmphp/mphp'php)php,
php php php php php php php php php'HECTOMETERphp_PERphp_SECONDphp'php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'hmphp/sphp'php)php,
php php php php php php php php php'INCHphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php5php4php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php'inphp/dayphp'php)php,
php php php php php php php php php'INCHphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php5php4php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php'inphp/hphp'php)php,
php php php php php php php php php'INCHphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php5php4php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php'inphp/mphp'php)php,
php php php php php php php php php'INCHphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php2php5php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'inphp/sphp'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php'kmphp/dayphp'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php'kmphp/hphp'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php'kmphp/mphp'php)php,
php php php php php php php php php'KILOMETERphp_PERphp_SECONDphp'php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'kmphp/sphp'php)php,
php php php php php php php php php'KNOTphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php8php5php2php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php'knphp'php)php,
php php php php php php php php php'LEAGUEphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php8php2php8php.php0php4php1php7php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php'leaguephp/dayphp'php)php,
php php php php php php php php php'LEAGUEphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php8php2php8php.php0php4php1php7php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php'leaguephp/hphp'php)php,
php php php php php php php php php'LEAGUEphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php4php8php2php8php.php0php4php1php7php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php'leaguephp/mphp'php)php,
php php php php php php php php php'LEAGUEphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php=php>php arrayphp(php'php4php8php2php8php.php0php4php1php7php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'leaguephp/sphp'php)php,
php php php php php php php php php'MACHphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php3php4php0php.php2php9php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Mphp'php)php,
php php php php php php php php php'MEGAMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php0php0php0php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php'Mmphp/dayphp'php)php,
php php php php php php php php php'MEGAMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php0php0php0php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php'Mmphp/hphp'php)php,
php php php php php php php php php'MEGAMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php0php0php0php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php'Mmphp/mphp'php)php,
php php php php php php php php php'MEGAMETERphp_PERphp_SECONDphp'php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Mmphp/sphp'php)php,
php php php php php php php php php'METERphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php php php php'mphp/dayphp'php)php,
php php php php php php php php php'METERphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php php php php'mphp/hphp'php)php,
php php php php php php php php php'METERphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php php php php'mphp/mphp'php)php,
php php php php php php php php php'METERphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mphp/sphp'php)php,
php php php php php php php php php'MILEphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php6php0php9php.php3php4php4php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php'miphp/dayphp'php)php,
php php php php php php php php php'MILEphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php6php0php9php.php3php4php4php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php'miphp/hphp'php)php,
php php php php php php php php php'MILEphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php6php0php9php.php3php4php4php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php'miphp/mphp'php)php,
php php php php php php php php php'MILEphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php6php0php9php.php3php4php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'miphp/sphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_DAYphp'php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php'mmphp/dayphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_HOURphp'php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php'mmphp/hphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_MINUTEphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php'mmphp/mphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_SECONDphp'php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mmphp/sphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_MICROSECONDphp'php php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mmphp/phpµsphp'php)php,
php php php php php php php php php'MILLIMETERphp_PERphp_php1php0php0php_MICROSECONDphp'php php=php>php arrayphp(php'php1php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mmphp/php1php0php0phpµsphp'php)php,
php php php php php php php php php'NAUTICphp_MILEphp_PERphp_DAYphp'php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php8php5php2php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php'nmiphp/dayphp'php)php,
php php php php php php php php php'NAUTICphp_MILEphp_PERphp_HOURphp'php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php8php5php2php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php'nmiphp/hphp'php)php,
php php php php php php php php php'NAUTICphp_MILEphp_PERphp_MINUTEphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php8php5php2php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php'nmiphp/mphp'php)php,
php php php php php php php php php'NAUTICphp_MILEphp_PERphp_SECONDphp'php php php php php php php php php php=php>php arrayphp(php'php1php8php5php2php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'nmiphp/sphp'php)php,
php php php php php php php php php'LIGHTSPEEDphp_AIRphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php2php9php9php7php0php2php5php4php7php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp lightphp php(airphp)php'php)php,
php php php php php php php php php'LIGHTSPEEDphp_GLASSphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php9php9php8php6php1php6php3php8php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp lightphp php(glassphp)php'php)php,
php php php php php php php php php'LIGHTSPEEDphp_ICEphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php2php2php8php8php4php9php2php0php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp lightphp php(icephp)php'php)php,
php php php php php php php php php'LIGHTSPEEDphp_VACUUMphp'php php php php php php php php php php php php php php php=php>php arrayphp(php'php2php9php9php7php9php2php4php5php8php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp lightphp php(vacuumphp)php'php)php,
php php php php php php php php php'LIGHTSPEEDphp_WATERphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php2php2php5php4php0php7php8php6php3php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp lightphp php(waterphp)php'php)php,
php php php php php php php php php'SOUNDSPEEDphp_AITphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php3php4php0php.php2php9php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp soundphp php(airphp)php'php)php,
php php php php php php php php php'SOUNDSPEEDphp_METALphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php5php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp soundphp php(metalphp)php'php)php,
php php php php php php php php php'SOUNDSPEEDphp_WATERphp'php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php5php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'speedphp ofphp soundphp php(waterphp)php'php)php,
php php php php php php php php php'YARDphp_PERphp_DAYphp'php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php9php1php4php4php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php'ydphp/dayphp'php)php,
php php php php php php php php php'YARDphp_PERphp_HOURphp'php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php9php1php4php4php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php'ydphp/hphp'php)php,
php php php php php php php php php'YARDphp_PERphp_MINUTEphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php9php1php4php4php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php'ydphp/mphp'php)php,
php php php php php php php php php'YARDphp_PERphp_SECONDphp'php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php9php1php4php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ydphp/sphp'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php php php php php php php php php php php php=php>php php'METERphp_PERphp_SECONDphp'
php php php php php)php;
php}
