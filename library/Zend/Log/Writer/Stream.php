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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Writerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Writerphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Logphp_Formatterphp_Simplephp php*php/
requirephp_oncephp php'Zendphp/Logphp/Formatterphp/Simplephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/
classphp Zendphp_Logphp_Writerphp_Streamphp extendsphp Zendphp_Logphp_Writerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Holdsphp thephp PHPphp streamphp tophp logphp tophp.
php php php php php php*
php php php php php php*php php@varphp nullphp|stream
php php php php php php*php/
php php php php protectedphp php$php_streamphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp|resourcephp php$streamOrUrlphp Streamphp orphp URLphp tophp openphp asphp aphp stream
php php php php php php*php php@paramphp stringphp|nullphp php$modephp Modephp,php onlyphp applicablephp ifphp aphp URLphp isphp given
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$streamOrUrlphp,php php$modephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Settingphp thephp default
php php php php php php php php ifphp php(nullphp php=php=php=php php$modephp)php php{
php php php php php php php php php php php php php$modephp php=php php'aphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_resourcephp(php$streamOrUrlphp)php)php php{
php php php php php php php php php php php php ifphp php(getphp_resourcephp_typephp(php$streamOrUrlphp)php php!php=php php'streamphp'php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Resourcephp isphp notphp aphp streamphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$modephp php!php=php php'aphp'php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Modephp cannotphp bephp changedphp onphp existingphp streamsphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_streamphp php=php php$streamOrUrlphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$streamOrUrlphp)php php&php&php issetphp(php$streamOrUrlphp[php'streamphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$streamOrUrlphp php=php php$streamOrUrlphp[php'streamphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php php$thisphp-php>php_streamphp php=php php@fopenphp(php$streamOrUrlphp,php php$modephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$msgphp php=php php"php\php"php$streamOrUrlphp\php"php cannotphp bephp openedphp withphp modephp php\php"php$modephp\php"php"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php$msgphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_formatterphp php=php newphp Zendphp_Logphp_Formatterphp_Simplephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Writerphp_Stream
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Stream
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php php$configphp php=php selfphp:php:php_parseConfigphp(php$configphp)php;
php php php php php php php php php$configphp php=php arrayphp_mergephp(arrayphp(
php php php php php php php php php php php php php'streamphp'php php=php>php nullphp,
php php php php php php php php php php php php php'modephp'php php php php=php>php nullphp,
php php php php php php php php php)php,php php$configphp)php;

php php php php php php php php php$streamOrUrlphp php=php issetphp(php$configphp[php'urlphp'php]php)php php?php php$configphp[php'urlphp'php]php php:php php$configphp[php'streamphp'php]php;

php php php php php php php php returnphp newphp selfphp(
php php php php php php php php php php php php php$streamOrUrlphp,
php php php php php php php php php php php php php$configphp[php'modephp'php]
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp streamphp resourcephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp shutdownphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_streamphp)php)php php{
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_streamphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp messagephp tophp thephp logphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$eventphp php eventphp data
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$eventphp)
php php php php php{
php php php php php php php php php$linephp php=php php$thisphp-php>php_formatterphp-php>formatphp(php$eventphp)php;

php php php php php php php php ifphp php(falsephp php=php=php=php php@fwritephp(php$thisphp-php>php_streamphp,php php$linephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php"Unablephp tophp writephp tophp streamphp"php)php;
php php php php php php php php php}
php php php php php}
php}
