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
php php*php php@versionphp php php php$Idphp:php Massphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp flowphp massphp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Flowphp_Mass
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Flowphp_Massphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'KILOGRAMphp_PERphp_SECONDphp'php;

php php php php constphp CENTIGRAMphp_PERphp_DAYphp php php php php=php php'CENTIGRAMphp_PERphp_DAYphp'php;
php php php php constphp CENTIGRAMphp_PERphp_HOURphp php php php=php php'CENTIGRAMphp_PERphp_HOURphp'php;
php php php php constphp CENTIGRAMphp_PERphp_MINUTEphp php=php php'CENTIGRAMphp_PERphp_MINUTEphp'php;
php php php php constphp CENTIGRAMphp_PERphp_SECONDphp php=php php'CENTIGRAMphp_PERphp_SECONDphp'php;
php php php php constphp GRAMphp_PERphp_DAYphp php php php php php php php php php=php php'GRAMphp_PERphp_DAYphp'php;
php php php php constphp GRAMphp_PERphp_HOURphp php php php php php php php php=php php'GRAMphp_PERphp_HOURphp'php;
php php php php constphp GRAMphp_PERphp_MINUTEphp php php php php php php=php php'GRAMphp_PERphp_MINUTEphp'php;
php php php php constphp GRAMphp_PERphp_SECONDphp php php php php php php=php php'GRAMphp_PERphp_SECONDphp'php;
php php php php constphp KILOGRAMphp_PERphp_DAYphp php php php php php=php php'KILOGRAMphp_PERphp_DAYphp'php;
php php php php constphp KILOGRAMphp_PERphp_HOURphp php php php php=php php'KILOGRAMphp_PERphp_HOURphp'php;
php php php php constphp KILOGRAMphp_PERphp_MINUTEphp php php=php php'KILOGRAMphp_PERphp_MINUTEphp'php;
php php php php constphp KILOGRAMphp_PERphp_SECONDphp php php=php php'KILOGRAMphp_PERphp_SECONDphp'php;
php php php php constphp MILLIGRAMphp_PERphp_DAYphp php php php php=php php'MILLIGRAMphp_PERphp_DAYphp'php;
php php php php constphp MILLIGRAMphp_PERphp_HOURphp php php php=php php'MILLIGRAMphp_PERphp_HOURphp'php;
php php php php constphp MILLIGRAMphp_PERphp_MINUTEphp php=php php'MILLIGRAMphp_PERphp_MINUTEphp'php;
php php php php constphp MILLIGRAMphp_PERphp_SECONDphp php=php php'MILLIGRAMphp_PERphp_SECONDphp'php;
php php php php constphp OUNCEphp_PERphp_DAYphp php php php php php php php php=php php'OUNCEphp_PERphp_DAYphp'php;
php php php php constphp OUNCEphp_PERphp_HOURphp php php php php php php php=php php'OUNCEphp_PERphp_HOURphp'php;
php php php php constphp OUNCEphp_PERphp_MINUTEphp php php php php php=php php'OUNCEphp_PERphp_MINUTEphp'php;
php php php php constphp OUNCEphp_PERphp_SECONDphp php php php php php=php php'OUNCEphp_PERphp_SECONDphp'php;
php php php php constphp POUNDphp_PERphp_DAYphp php php php php php php php php=php php'POUNDphp_PERphp_DAYphp'php;
php php php php constphp POUNDphp_PERphp_HOURphp php php php php php php php=php php'POUNDphp_PERphp_HOURphp'php;
php php php php constphp POUNDphp_PERphp_MINUTEphp php php php php php=php php'POUNDphp_PERphp_MINUTEphp'php;
php php php php constphp POUNDphp_PERphp_SECONDphp php php php php php=php php'POUNDphp_PERphp_SECONDphp'php;
php php php php constphp TONphp_LONGphp_PERphp_DAYphp php php php php php=php php'TONphp_LONGphp_PERphp_DAYphp'php;
php php php php constphp TONphp_LONGphp_PERphp_HOURphp php php php php=php php'TONphp_LONGphp_PERphp_HOURphp'php;
php php php php constphp TONphp_LONGphp_PERphp_MINUTEphp php php=php php'TONphp_LONGphp_PERphp_MINUTEphp'php;
php php php php constphp TONphp_LONGphp_PERphp_SECONDphp php php=php php'TONphp_LONGphp_PERphp_SECONDphp'php;
php php php php constphp TONphp_PERphp_DAYphp php php php php php php php php php php=php php'TONphp_PERphp_DAYphp'php;
php php php php constphp TONphp_PERphp_HOURphp php php php php php php php php php=php php'TONphp_PERphp_HOURphp'php;
php php php php constphp TONphp_PERphp_MINUTEphp php php php php php php php=php php'TONphp_PERphp_MINUTEphp'php;
php php php php constphp TONphp_PERphp_SECONDphp php php php php php php php=php php'TONphp_PERphp_SECONDphp'php;
php php php php constphp TONphp_SHORTphp_PERphp_DAYphp php php php php=php php'TONphp_SHORTphp_PERphp_DAYphp'php;
php php php php constphp TONphp_SHORTphp_PERphp_HOURphp php php php=php php'TONphp_SHORTphp_PERphp_HOURphp'php;
php php php php constphp TONphp_SHORTphp_PERphp_MINUTEphp php=php php'TONphp_SHORTphp_PERphp_MINUTEphp'php;
php php php php constphp TONphp_SHORTphp_PERphp_SECONDphp php=php php'TONphp_SHORTphp_PERphp_SECONDphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp flowphp massphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'CENTIGRAMphp_PERphp_DAYphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php'cgphp/dayphp'php)php,
php php php php php php php php php'CENTIGRAMphp_PERphp_HOURphp'php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php'cgphp/hphp'php)php,
php php php php php php php php php'CENTIGRAMphp_PERphp_MINUTEphp'php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php'cgphp/mphp'php)php,
php php php php php php php php php'CENTIGRAMphp_PERphp_SECONDphp'php php=php>php arrayphp(php'php0php.php0php0php0php0php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'cgphp/sphp'php)php,
php php php php php php php php php'GRAMphp_PERphp_DAYphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php'gphp/dayphp'php)php,
php php php php php php php php php'GRAMphp_PERphp_HOURphp'php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php'gphp/hphp'php)php,
php php php php php php php php php'GRAMphp_PERphp_MINUTEphp'php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php'gphp/mphp'php)php,
php php php php php php php php php'GRAMphp_PERphp_SECONDphp'php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'gphp/sphp'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_DAYphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php php php php'kgphp/dayphp'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_HOURphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php php php php'kgphp/hphp'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_MINUTEphp'php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php php php php'kgphp/mphp'php)php,
php php php php php php php php php'KILOGRAMphp_PERphp_SECONDphp'php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'kgphp/sphp'php)php,
php php php php php php php php php'MILLIGRAMphp_PERphp_DAYphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php'mgphp/dayphp'php)php,
php php php php php php php php php'MILLIGRAMphp_PERphp_HOURphp'php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php'mgphp/hphp'php)php,
php php php php php php php php php'MILLIGRAMphp_PERphp_MINUTEphp'php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php0php0php0php0php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php'mgphp/mphp'php)php,
php php php php php php php php php'MILLIGRAMphp_PERphp_SECONDphp'php php=php>php arrayphp(php'php0php.php0php0php0php0php0php1php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mgphp/sphp'php)php,
php php php php php php php php php'OUNCEphp_PERphp_DAYphp'php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php8php3php4php9php5php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php'ozphp/dayphp'php)php,
php php php php php php php php php'OUNCEphp_PERphp_HOURphp'php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php8php3php4php9php5php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php'ozphp/hphp'php)php,
php php php php php php php php php'OUNCEphp_PERphp_MINUTEphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php0php2php8php3php4php9php5php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php'ozphp/mphp'php)php,
php php php php php php php php php'OUNCEphp_PERphp_SECONDphp'php php php php php php=php>php arrayphp(php'php0php.php0php2php8php3php4php9php5php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ozphp/sphp'php)php,
php php php php php php php php php'POUNDphp_PERphp_DAYphp'php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php4php5php3php5php9php2php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php'lbphp/dayphp'php)php,
php php php php php php php php php'POUNDphp_PERphp_HOURphp'php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php4php5php3php5php9php2php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php'lbphp/hphp'php)php,
php php php php php php php php php'POUNDphp_PERphp_MINUTEphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php0php.php4php5php3php5php9php2php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php'lbphp/mphp'php)php,
php php php php php php php php php'POUNDphp_PERphp_SECONDphp'php php php php php php=php>php arrayphp(php'php0php.php4php5php3php5php9php2php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'lbphp/sphp'php)php,
php php php php php php php php php'TONphp_LONGphp_PERphp_DAYphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php1php6php.php0php4php6php0php8php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php'tphp/dayphp'php)php,
php php php php php php php php php'TONphp_LONGphp_PERphp_HOURphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php1php6php.php0php4php6php0php8php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php'tphp/hphp'php)php,
php php php php php php php php php'TONphp_LONGphp_PERphp_MINUTEphp'php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php1php6php.php0php4php6php0php8php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php'tphp/mphp'php)php,
php php php php php php php php php'TONphp_LONGphp_PERphp_SECONDphp'php php php=php>php arrayphp(php'php1php0php1php6php.php0php4php6php0php8php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tphp/sphp'php)php,
php php php php php php php php php'TONphp_PERphp_DAYphp'php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php php php php'tphp/dayphp'php)php,
php php php php php php php php php'TONphp_PERphp_HOURphp'php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php php php php'tphp/hphp'php)php,
php php php php php php php php php'TONphp_PERphp_MINUTEphp'php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php0php0php0php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php php php php'tphp/mphp'php)php,
php php php php php php php php php'TONphp_PERphp_SECONDphp'php php php php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tphp/sphp'php)php,
php php php php php php php php php'TONphp_SHORTphp_PERphp_DAYphp'php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php9php0php7php.php1php8php4php'php,php php'php/php'php php=php>php php'php8php6php4php0php0php'php)php,php php php php php'tphp/dayphp'php)php,
php php php php php php php php php'TONphp_SHORTphp_PERphp_HOURphp'php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php9php0php7php.php1php8php4php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php php php php php'tphp/hphp'php)php,
php php php php php php php php php'TONphp_SHORTphp_PERphp_MINUTEphp'php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php9php0php7php.php1php8php4php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php php php php php'tphp/mphp'php)php,
php php php php php php php php php'TONphp_SHORTphp_PERphp_SECONDphp'php php=php>php arrayphp(php'php9php0php7php.php1php8php4php'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tphp/sphp'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php php=php>php php'KILOGRAMphp_PERphp_SECONDphp'
php php php php php)php;
php}
