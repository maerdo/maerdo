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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Nullphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Nullphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php constphp BOOLEANphp php php php php php php=php php1php;
php php php php constphp INTEGERphp php php php php php php=php php2php;
php php php php constphp EMPTYphp_ARRAYphp php php=php php4php;
php php php php constphp STRINGphp php php php php php php php=php php8php;
php php php php constphp ZEROphp php php php php php php php php php=php php1php6php;
php php php php constphp ALLphp php php php php php php php php php php=php php3php1php;

php php php php protectedphp php$php_constantsphp php=php arrayphp(
php php php php php php php php selfphp:php:BOOLEANphp php php php php php=php>php php'booleanphp'php,
php php php php php php php php selfphp:php:INTEGERphp php php php php php=php>php php'integerphp'php,
php php php php php php php php selfphp:php:EMPTYphp_ARRAYphp php=php>php php'arrayphp'php,
php php php php php php php php selfphp:php:STRINGphp php php php php php php=php>php php'stringphp'php,
php php php php php php php php selfphp:php:ZEROphp php php php php php php php php=php>php php'zerophp'php,
php php php php php php php php selfphp:php:ALLphp php php php php php php php php php=php>php php'allphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp typephp tophp detect
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php selfphp:php:ALLphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Configphp php$optionsphp OPTIONAL
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$optionsphp)php php&php&php arrayphp_keyphp_existsphp(php'typephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp[php'typephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTypephp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp nullphp types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp nullphp types
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp php$type
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php php@returnphp Zendphp_Filterphp_Null
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$typephp)php)php php{
php php php php php php php php php php php php php$detectedphp php=php php0php;
php php php php php php php php php php php php foreachphp(php$typephp asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$detectedphp php+php=php php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(inphp_arrayphp(php$valuephp,php php$thisphp-php>php_constantsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$detectedphp php+php=php arrayphp_searchphp(php$valuephp,php php$thisphp-php>php_constantsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$typephp php=php php$detectedphp;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$typephp,php php$thisphp-php>php_constantsphp)php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php arrayphp_searchphp(php$typephp,php php$thisphp-php>php_constantsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_intphp(php$typephp)php php|php|php php(php$typephp <php php0php)php php|php|php php(php$typephp php>php selfphp:php:ALLphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Unknownphp typephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp nullphp representationphp ofphp php$valuephp,php ifphp valuephp isphp emptyphp andphp matches
php php php php php php*php typesphp thatphp shouldphp bephp consideredphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$typephp php=php php$thisphp-php>getTypephp(php)php;

php php php php php php php php php/php/php STRINGphp ZEROphp php(php'php0php'php)
php php php php php php php php ifphp php(php$typephp php>php=php selfphp:php:ZEROphp)php php{
php php php php php php php php php php php php php$typephp php-php=php selfphp:php:ZEROphp;
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php php&php&php php(php$valuephp php=php=php php'php0php'php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php STRINGphp php(php'php'php)
php php php php php php php php ifphp php(php$typephp php>php=php selfphp:php:STRINGphp)php php{
php php php php php php php php php php php php php$typephp php-php=php selfphp:php:STRINGphp;
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php php&php&php php(php$valuephp php=php=php php'php'php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php EMPTYphp_ARRAYphp php(arrayphp(php)php)
php php php php php php php php ifphp php(php$typephp php>php=php selfphp:php:EMPTYphp_ARRAYphp)php php{
php php php php php php php php php php php php php$typephp php-php=php selfphp:php:EMPTYphp_ARRAYphp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php php&php&php php(php$valuephp php=php=php arrayphp(php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php INTEGERphp php(php0php)
php php php php php php php php ifphp php(php$typephp php>php=php selfphp:php:INTEGERphp)php php{
php php php php php php php php php php php php php$typephp php-php=php selfphp:php:INTEGERphp;
php php php php php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php php&php&php php(php$valuephp php=php=php php0php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php BOOLEANphp php(falsephp)
php php php php php php php php ifphp php(php$typephp php>php=php selfphp:php:BOOLEANphp)php php{
php php php php php php php php php php php php php$typephp php-php=php selfphp:php:BOOLEANphp;
php php php php php php php php php php php php ifphp php(isphp_boolphp(php$valuephp)php php&php&php php(php$valuephp php=php=php falsephp)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
