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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Clientphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thephp Stompphp clientphp interactsphp withphp aphp Stompphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Stompphp_Client
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp php$clientphp Zendphp_Queuephp_Stompphp_Clientphp_Interface
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_connectionphp;

php php php php php/php*php*
php php php php php php*php Addphp aphp serverphp tophp connections
php php php php php php*
php php php php php php*php php@paramphp stringphp scheme
php php php php php php*php php@paramphp stringphp host
php php php php php php*php php@paramphp integerphp port
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(
php php php php php php php php php$schemephp php=php nullphp,php php$hostphp php=php nullphp,php php$portphp php=php nullphp,
php php php php php php php php php$connectionClassphp php=php php'Zendphp_Queuephp_Stompphp_Clientphp_Connectionphp'php,
php php php php php php php php php$frameClassphp php=php php'Zendphp_Queuephp_Stompphp_Framephp'
php php php php php)php php{
php php php php php php php php ifphp php(php(php$schemephp php!php=php=php nullphp)
php php php php php php php php php php php php php&php&php php(php$hostphp php!php=php=php nullphp)
php php php php php php php php php php php php php&php&php php(php$portphp php!php=php=php nullphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>addConnectionphp(php$schemephp,php php$hostphp,php php$portphp,php php$connectionClassphp)php;
php php php php php php php php php php php php php$thisphp-php>getConnectionphp(php)php-php>setFrameClassphp(php$frameClassphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Shutdown
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getConnectionphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getConnectionphp(php)php-php>closephp(truephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp connectionphp tophp thisphp clientphp.
php php php php php php*
php php php php php php*php Attemptsphp tophp addphp thisphp classphp tophp thephp clientphp.php php Returnsphp aphp booleanphp value
php php php php php php*php indicatingphp successphp ofphp operationphp.
php php php php php php*
php php php php php php*php Youphp cannotphp addphp morephp thanphp php1php connectionphp tophp thephp clientphp atphp thisphp timephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$schemephp php[php'tcpphp'php,php php'udpphp'php]
php php php php php php*php php@paramphp stringphp php host
php php php php php php*php php@paramphp integerphp port
php php php php php php*php php@paramphp stringphp php classphp php-php createphp aphp connectionphp withphp thisphp classphp;php classphp mustphp supportphp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterface
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp addConnectionphp(php$schemephp,php php$hostphp,php php$portphp,php php$classphp php=php php'Zendphp_Queuephp_Stompphp_Clientphp_Connectionphp'php)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php}

php php php php php php php php php$connectionphp php=php newphp php$classphp(php)php;

php php php php php php php php ifphp php(php$connectionphp-php>openphp(php$schemephp,php php$hostphp,php php$portphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setConnectionphp(php$connectionphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$connectionphp-php>closephp(php)php;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp clientphp connection
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterfacephp php$connection
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setConnectionphp(Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterfacephp php$connectionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectionphp php=php php$connectionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp clientphp connection
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterfacephp|null
php php php php php php*php/
php php php php publicphp functionphp getConnectionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_connectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp stompphp frame
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp framephp wasphp successfullyphp sentphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Queuephp_Stompphp_FrameInterfacephp php$frame
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp sendphp(Zendphp_Queuephp_Stompphp_FrameInterfacephp php$framephp)
php php php php php{
php php php php php php php php php$thisphp-php>getConnectionphp(php)php-php>writephp(php$framephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Receivephp aphp frame
php php php php php php*
php php php php php php*php Returnsphp aphp framephp orphp falsephp ifphp nonephp werephp tophp bephp readphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_FrameInterfacephp|boolean
php php php php php php*php/
php php php php publicphp functionphp receivephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConnectionphp(php)php-php>readphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php canReadphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp canReadphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConnectionphp(php)php-php>canReadphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createsphp aphp framephp class
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_FrameInterface
php php php php php php*php/
php php php php publicphp functionphp createFramephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConnectionphp(php)php-php>createFramephp(php)php;
php php php php php}
php}
