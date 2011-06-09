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
php php*php php@versionphp php php php$Idphp:php Protocolphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp definitionphp forphp allphp timeserverphp protocols
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_TimeSyncphp_Protocol
php{
php php php php php/php*php*
php php php php php php*php Holdsphp thephp currentphp socketphp connection
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_socketphp;

php php php php php/php*php*
php php php php php php*php Exceptionsphp thatphp mightphp havephp occured
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_exceptionsphp;

php php php php php/php*php*
php php php php php php*php Hostnamephp forphp timeserver
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_timeserverphp;

php php php php php/php*php*
php php php php php php*php Holdsphp informationphp passedphp/returnedphp fromphp timeserver
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_infophp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Abstractphp methodphp thatphp preparesphp thephp dataphp tophp sendphp tophp thephp timeserver
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_preparephp(php)php;

php php php php php/php*php*
php php php php php php*php Abstractphp methodphp thatphp readsphp thephp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_readphp(php)php;

php php php php php/php*php*
php php php php php php*php Abstractphp methodphp thatphp writesphp dataphp tophp tophp thephp timeserver
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp Dataphp tophp write
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_writephp(php$dataphp)php;

php php php php php/php*php*
php php php php php php*php Abstractphp methodphp thatphp extractsphp thephp binaryphp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$dataphp Dataphp returnedphp fromphp thephp timeserver
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_extractphp(php$dataphp)php;

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp specifiedphp timeserverphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_TimeSyncphp_Exceptionphp Whenphp thephp connectionphp failed
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php php$socketphp php=php php@fsockopenphp(php$thisphp-php>php_timeserverphp,php php$thisphp-php>php_portphp,php php$errnophp,php php$errstrphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_TimeSyncphp:php:php$optionsphp[php'timeoutphp'php]php)php;
php php php php php php php php ifphp php(php$socketphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php'couldphp notphp connectphp tophp php'php php.
php php php php php php php php php php php php php php php php php"php'php$thisphp-php>php_timeserverphp'php onphp portphp php'php$thisphp-php>php_portphp'php,php reasonphp:php php'php$errstrphp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_socketphp php=php php$socketphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disconnectsphp fromphp thephp peerphp,php closesphp thephp socketphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_disconnectphp(php)
php php php php php{
php php php php php php php php php@fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php$thisphp-php>php_socketphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp informationphp sentphp/returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@returnphp php array
php php php php php php*php/
php php php php publicphp functionphp getInfophp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_infophp)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_writephp(php$thisphp-php>php_preparephp(php)php)php;
php php php php php php php php php php php php php$timestampphp php=php php$thisphp-php>php_extractphp(php$thisphp-php>php_readphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_infophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp thisphp timeserverphp withoutphp usingphp thephp fallbackphp mechanism
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Locale
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_writephp(php$thisphp-php>php_preparephp(php)php)php;
php php php php php php php php php$timestampphp php=php php$thisphp-php>php_extractphp(php$thisphp-php>php_readphp(php)php)php;

php php php php php php php php php$datephp php=php newphp Zendphp_Datephp(php$thisphp,php nullphp,php php$localephp)php;
php php php php php php php php returnphp php$datephp;
php php php php php}
php}
