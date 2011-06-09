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
php php*php php@packagephp php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Sntpphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_TimeSyncphp_Protocol
php php*php/
requirephp_oncephp php'Zendphp/TimeSyncphp/Protocolphp.phpphp'php;

php/php*php*
php php*php SNTPphp Protocolphp handlingphp class
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_TimeSyncphp_Sntpphp extendsphp Zendphp_TimeSyncphp_Protocol
php{
php php php php php/php*php*
php php php php php php*php Portphp numberphp forphp thisphp timeserver
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_portphp php=php php3php7php;

php php php php php/php*php*
php php php php php php*php Socketphp delay
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_delayphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp,php setsphp thephp timeserverphp andphp portphp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$timeserverphp Timeserverphp tophp connectphp to
php php php php php php*php php@paramphp integerphp php$portphp php php php php php php Portphp ofphp thephp timeserverphp whenphp itphp differsphp fromphp thephp defaultphp port
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$timeserverphp,php php$portphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_timeserverphp php=php php'udpphp:php/php/php'php php.php php$timeserverphp;
php php php php php php php php ifphp php(php$portphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_portphp php=php php$portphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp thephp dataphp thatphp willphp bephp sendphp tophp thephp timeserver
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php)
php php php php php{
php php php php php php php php returnphp php"php\nphp"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_readphp(php)
php php php php php{
php php php php php php php php php$resultphp php php php php php php php=php freadphp(php$thisphp-php>php_socketphp,php php4php9php)php;
php php php php php php php php php$thisphp-php>php_delayphp php=php php(php(php$thisphp-php>php_delayphp php-php timephp(php)php)php php/php php2php)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp dataphp tophp tophp thephp timeserver
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp Dataphp tophp writephp tophp thephp timeserver
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$thisphp-php>php_delayphp php=php timephp(php)php;
php php php php php php php php fputsphp(php$thisphp-php>php_socketphp,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractsphp thephp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resultphp Dataphp tophp extract
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_extractphp(php$resultphp)
php php php php php{
php php php php php php php php php$decphp php php php=php hexdecphp(php'php7fffffffphp'php)php;
php php php php php php php php php$timephp php php=php absphp(php(php$decphp php-php hexdecphp(binphp2hexphp(php$resultphp)php)php)php php-php php$decphp)php;
php php php php php php php php php$timephp php-php=php php2php2php0php8php9php8php8php8php0php0php;
php php php php php php php php php/php/php Socketphp delay
php php php php php php php php php$timephp php-php=php php$thisphp-php>php_delayphp;

php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php=php php$thisphp-php>php_delayphp;

php php php php php php php php returnphp php$timephp;
php php php php php}
php}
