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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Errorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Error
php{
php php php php constphp ERRORphp_PARSEphp php php php php php php php php php php php=php php-php3php2php7php6php8php;
php php php php constphp ERRORphp_INVALIDphp_REQUESTphp php=php php-php3php2php6php0php0php;
php php php php constphp ERRORphp_INVALIDphp_METHODphp php php=php php-php3php2php6php0php1php;
php php php php constphp ERRORphp_INVALIDphp_PARAMSphp php php=php php-php3php2php6php0php2php;
php php php php constphp ERRORphp_INTERNALphp php php php php php php php php=php php-php3php2php6php0php3php;
php php php php constphp ERRORphp_OTHERphp php php php php php php php php php php php=php php-php3php2php0php0php0php;

php php php php php/php*php*
php php php php php php*php Allowedphp errorphp codes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedCodesphp php=php arrayphp(
php php php php php php php php selfphp:php:ERRORphp_PARSEphp,
php php php php php php php php selfphp:php:ERRORphp_INVALIDphp_REQUESTphp,
php php php php php php php php selfphp:php:ERRORphp_INVALIDphp_METHODphp,
php php php php php php php php selfphp:php:ERRORphp_INVALIDphp_PARAMSphp,
php php php php php php php php selfphp:php:ERRORphp_INTERNALphp,
php php php php php php php php selfphp:php:ERRORphp_OTHERphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Currentphp code
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_codephp php=php php-php3php2php0php0php0php;

php php php php php/php*php*
php php php php php php*php Errorphp data
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Errorphp message
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messagephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$messagephp php=php nullphp,php php$codephp php=php php-php3php2php0php0php0php,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setMessagephp(php$messagephp)
php php php php php php php php php php php php php php-php>setCodephp(php$codephp)
php php php php php php php php php php php php php php-php>setDataphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp errorphp code
php php php php php php*
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Error
php php php php php php*php/
php php php php publicphp functionphp setCodephp(php$codephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_scalarphp(php$codephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$codephp php=php php(intphp)php php$codephp;
php php php php php php php php ifphp php(inphp_arrayphp(php$codephp,php php$thisphp-php>php_allowedCodesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_codephp php=php php$codephp;
php php php php php php php php php}php elseifphp php(inphp_arrayphp(php$codephp,php rangephp(php-php3php2php0php9php9php,php php-php3php2php0php0php0php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_codephp php=php php$codephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp errorphp code
php php php php php php*
php php php php php php*php php@returnphp intphp|null
php php php php php php*php/
php php php php publicphp functionphp getCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_codephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp errorphp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Error
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messagephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_scalarphp(php$messagephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_messagephp php=php php(stringphp)php php$messagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp errorphp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp errorphp data
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Error
php php php php php php*php/
php php php php publicphp functionphp setDataphp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp errorphp data
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp errorphp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'codephp'php php php php php=php>php php$thisphp-php>getCodephp(php)php,
php php php php php php php php php php php php php'messagephp'php php=php>php php$thisphp-php>getMessagephp(php)php,
php php php php php php php php php php php php php'dataphp'php php php php php=php>php php$thisphp-php>getDataphp(php)php,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp errorphp tophp JSON
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$thisphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp stringphp php(JSONphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toJsonphp(php)php;
php php php php php}
php}

