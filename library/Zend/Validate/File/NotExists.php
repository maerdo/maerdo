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
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php NotExistsphp.phpphp php2php0php3php5php2php php2php0php1php0php-php0php1php-php1php7php php1php7php:php5php5php:php3php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_Exists
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/Existsphp.phpphp'php;

php/php*php*
php php*php Validatorphp whichphp checksphp ifphp thephp destinationphp filephp doesphp notphp exist
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_NotExistsphp extendsphp Zendphp_Validatephp_Filephp_Exists
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp DOESphp_EXISTphp php=php php'fileNotExistsDoesExistphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:DOESphp_EXISTphp php=php>php php"Filephp php'php%valuephp%php'php existsphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp filephp doesphp notphp existphp inphp thephp setphp destinations
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp Realphp filephp tophp checkphp for
php php php php php php*php php@paramphp php arrayphp php php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php$directoriesphp php=php php$thisphp-php>getDirectoryphp(truephp)php;
php php php php php php php php ifphp php(php(php$filephp php!php=php=php nullphp)php andphp php(php!emptyphp(php$filephp[php'destinationphp'php]php)php)php)php php{
php php php php php php php php php php php php php$directoriesphp[php]php php=php php$filephp[php'destinationphp'php]php;
php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php$filephp[php'namephp'php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$directoriesphp asphp php$directoryphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$directoryphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$checkphp php=php truephp;
php php php php php php php php php php php php ifphp php(filephp_existsphp(php$directoryphp php.php DIRECTORYphp_SEPARATORphp php.php php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:DOESphp_EXISTphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$checkphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:DOESphp_EXISTphp)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
