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
php php*php php@versionphp php php php$Idphp:php Frequencyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp flowphp volumephp conversions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Frequency
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Frequencyphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'HERTZphp'php;

php php php php constphp ONEphp_PERphp_SECONDphp php php php php php php php php=php php'ONEphp_PERphp_SECONDphp'php;
php php php php constphp CYCLEphp_PERphp_SECONDphp php php php php php php=php php'CYCLEphp_PERphp_SECONDphp'php;
php php php php constphp DEGREEphp_PERphp_HOURphp php php php php php php php=php php'DEGREEphp_PERphp_HOURphp'php;
php php php php constphp DEGREEphp_PERphp_MINUTEphp php php php php php=php php'DEGREEphp_PERphp_MINUTEphp'php;
php php php php constphp DEGREEphp_PERphp_SECONDphp php php php php php=php php'DEGREEphp_PERphp_SECONDphp'php;
php php php php constphp GIGAHERTZphp php php php php php php php php php php php php php=php php'GIGAHERTZphp'php;
php php php php constphp HERTZphp php php php php php php php php php php php php php php php php php=php php'HERTZphp'php;
php php php php constphp KILOHERTZphp php php php php php php php php php php php php php=php php'KILOHERTZphp'php;
php php php php constphp MEGAHERTZphp php php php php php php php php php php php php php=php php'MEGAHERTZphp'php;
php php php php constphp MILLIHERTZphp php php php php php php php php php php php php=php php'MILLIHERTZphp'php;
php php php php constphp RADIANphp_PERphp_HOURphp php php php php php php php=php php'RADIANphp_PERphp_HOURphp'php;
php php php php constphp RADIANphp_PERphp_MINUTEphp php php php php php=php php'RADIANphp_PERphp_MINUTEphp'php;
php php php php constphp RADIANphp_PERphp_SECONDphp php php php php php=php php'RADIANphp_PERphp_SECONDphp'php;
php php php php constphp REVOLUTIONphp_PERphp_HOURphp php php php=php php'REVOLUTIONphp_PERphp_HOURphp'php;
php php php php constphp REVOLUTIONphp_PERphp_MINUTEphp php=php php'REVOLUTIONphp_PERphp_MINUTEphp'php;
php php php php constphp REVOLUTIONphp_PERphp_SECONDphp php=php php'REVOLUTIONphp_PERphp_SECONDphp'php;
php php php php constphp RPMphp php php php php php php php php php php php php php php php php php php php=php php'RPMphp'php;
php php php php constphp TERRAHERTZphp php php php php php php php php php php php php=php php'TERRAHERTZphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp frequencyphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'ONEphp_PERphp_SECONDphp'php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php'php1php/sphp'php)php,
php php php php php php php php php'CYCLEphp_PERphp_SECONDphp'php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php'cpsphp'php)php,
php php php php php php php php php'DEGREEphp_PERphp_HOURphp'php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php1php2php9php6php0php0php0php'php)php,php php'php°php/hphp'php)php,
php php php php php php php php php'DEGREEphp_PERphp_MINUTEphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php2php1php6php0php0php'php)php,php php php php'php°php/mphp'php)php,
php php php php php php php php php'DEGREEphp_PERphp_SECONDphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php6php0php'php)php,php php php php php php'php°php/sphp'php)php,
php php php php php php php php php'GIGAHERTZphp'php php php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php'php,php php php php php'GHzphp'php)php,
php php php php php php php php php'HERTZphp'php php php php php php php php php php php php php php php php php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php'Hzphp'php)php,
php php php php php php php php php'KILOHERTZphp'php php php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php'php,php php php php php php php php php php php'kHzphp'php)php,
php php php php php php php php php'MEGAHERTZphp'php php php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php'php,php php php php php php php php'MHzphp'php)php,
php php php php php php php php php'MILLIHERTZphp'php php php php php php php php php php php php php=php>php arrayphp(php'php0php.php0php0php1php'php,php php php php php php php php php php'mHzphp'php)php,
php php php php php php php php php'RADIANphp_PERphp_HOURphp'php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php2php2php6php1php9php.php4php6php7php'php)php,php php'radphp/hphp'php)php,
php php php php php php php php php'RADIANphp_PERphp_MINUTEphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php7php6php.php9php9php1php1php2php'php)php,php php'radphp/mphp'php)php,
php php php php php php php php php'RADIANphp_PERphp_SECONDphp'php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php6php.php2php8php3php1php8php5php3php'php)php,php php'radphp/sphp'php)php,
php php php php php php php php php'REVOLUTIONphp_PERphp_HOURphp'php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php3php6php0php0php'php)php,php php'rphphp'php)php,
php php php php php php php php php'REVOLUTIONphp_PERphp_MINUTEphp'php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php php php'rpmphp'php)php,
php php php php php php php php php'REVOLUTIONphp_PERphp_SECONDphp'php php=php>php arrayphp(php'php1php'php,php php php php php php php php php php php php php php'rpsphp'php)php,
php php php php php php php php php'RPMphp'php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(arrayphp(php'php'php php=php>php php'php1php'php,php php'php/php'php php=php>php php'php6php0php'php)php,php php'rpmphp'php)php,
php php php php php php php php php'TERRAHERTZphp'php php php php php php php php php php php php php=php>php arrayphp(php'php1php0php0php0php0php0php0php0php0php0php0php0php0php'php,php php'THzphp'php)php,
php php php php php php php php php'STANDARDphp'php php php php php php php php php php php php php php php=php>php'HERTZphp'
php php php php php)php;
php}
