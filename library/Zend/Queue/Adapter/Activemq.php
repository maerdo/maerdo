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
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Activemqphp.phpphp php2php3php4php9php9php php2php0php1php0php-php1php2php-php1php1php php2php1php:php1php0php:php2php8Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_Stompphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Stompphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_Stompphp_Frame
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Stompphp/Framephp.phpphp'php;

php/php*php*
php php*php Classphp forphp usingphp Stompphp tophp talkphp tophp anphp Stompphp compliantphp server
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Adapterphp_Activemqphp extendsphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php{
php php php php constphp DEFAULTphp_SCHEMEphp php=php php'tcpphp'php;
php php php php constphp DEFAULTphp_HOSTphp php php php=php php'php1php2php7php.php0php.php0php.php1php'php;
php php php php constphp DEFAULTphp_PORTphp php php php=php php6php1php6php1php3php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Queuephp_Adapterphp_Stompphp_client
php php php php php php*php/
php php php php privatephp php$php_clientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_subscribedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$configphp Anphp arrayphp havingphp configurationphp data
php php php php php php*php php@paramphp php Zendphp_Queuephp Thephp Zendphp_Queuephp objectphp thatphp createdphp thisphp class
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php php$optionsphp php=php php&php$thisphp-php>php_optionsphp[php'driverOptionsphp'php]php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'schemephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'schemephp'php]php php=php selfphp:php:DEFAULTphp_SCHEMEphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hostphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'hostphp'php]php php=php selfphp:php:DEFAULTphp_HOSTphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'portphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'portphp'php]php php=php selfphp:php:DEFAULTphp_PORTphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'stompClientphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_clientphp php=php php$optionsphp[php'stompClientphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_clientphp php=php newphp Zendphp_Queuephp_Stompphp_Clientphp(php$optionsphp[php'schemephp'php]php,php php$optionsphp[php'hostphp'php]php,php php$optionsphp[php'portphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$connectphp php=php php$thisphp-php>php_clientphp-php>createFramephp(php)php;

php php php php php php php php php/php/php Usernamephp andphp passwordphp arephp optionalphp onphp somephp messagingphp servers
php php php php php php php php php/php/php suchphp asphp Apachephp'sphp ActiveMQ
php php php php php php php php php$connectphp-php>setCommandphp(php'CONNECTphp'php)php;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'usernamephp'php]php)php)php php{
php php php php php php php php php php php php php$connectphp-php>setHeaderphp(php'loginphp'php,php php$optionsphp[php'usernamephp'php]php)php;
php php php php php php php php php php php php php$connectphp-php>setHeaderphp(php'passcodephp'php,php php$optionsphp[php'passwordphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_clientphp-php>sendphp(php$connectphp)php-php>receivephp(php)php;

php php php php php php php php ifphp php(php(falsephp php!php=php=php php$responsephp)
php php php php php php php php php php php php php&php&php php(php$responsephp-php>getCommandphp(php)php php!php=php php'CONNECTEDphp'php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Unablephp tophp authenticatephp tophp php'php"php.php$optionsphp[php'schemephp'php]php.php'php:php/php/php'php.php$optionsphp[php'hostphp'php]php.php'php:php'php.php$optionsphp[php'portphp'php]php.php"php'php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp socketphp explicitlyphp whenphp destructed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php/php/php Gracefullyphp disconnect
php php php php php php php php php$framephp php=php php$thisphp-php>php_clientphp-php>createFramephp(php)php;
php php php php php php php php php$framephp-php>setCommandphp(php'DISCONNECTphp'php)php;
php php php php php php php php php$thisphp-php>php_clientphp-php>sendphp(php$framephp)php;
php php php php php php php php unsetphp(php$thisphp-php>php_clientphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp php php php queuephp name
php php php php php php*php php@paramphp php integerphp php$timeoutphp defaultphp visibilityphp timeout
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$timeoutphp=nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'createphp(php)php isphp notphp supportedphp inphp php'php php.php getphp_classphp(php$thisphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itsphp messages
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp queuephp name
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'deletephp(php)php isphp notphp supportedphp inphp php'php php.php getphp_classphp(php$thisphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp messagephp fromphp thephp queue
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp messagephp isphp deletedphp,php falsephp ifphp thephp deletionphp is
php php php php php php*php unsuccessfulphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp_Messagephp php$message
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)
php php php php php{
php php php php php php php php php$framephp php=php php$thisphp-php>php_clientphp-php>createFramephp(php)php;
php php php php php php php php php$framephp-php>setCommandphp(php'ACKphp'php)php;
php php php php php php php php php$framephp-php>setHeaderphp(php'messagephp-idphp'php,php php$messagephp-php>handlephp)php;

php php php php php php php php php$thisphp-php>php_clientphp-php>sendphp(php$framephp)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'getQueuesphp(php)php isphp notphp supportedphp inphp thisphp adapterphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp clientphp isphp subscribedphp tophp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_isSubscribedphp(Zendphp_Queuephp php$queuephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_subscribedphp[php$queuephp-php>getNamephp(php)php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php php*php Subscribesphp thephp clientphp tophp thephp queuephp.
php php php php php php php*
php php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php php*php php@returnphp void
php php php php php php php*php/
php php php php protectedphp functionphp php_subscribephp(Zendphp_Queuephp php$queuephp)
php php php php php{
php php php php php php php php php$framephp php=php php$thisphp-php>php_clientphp-php>createFramephp(php)php;
php php php php php php php php php$framephp-php>setCommandphp(php'SUBSCRIBEphp'php)php;
php php php php php php php php php$framephp-php>setHeaderphp(php'destinationphp'php,php php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php$framephp-php>setHeaderphp(php'ackphp'php,php php'clientphp'php)php;
php php php php php php php php php$thisphp-php>php_clientphp-php>sendphp(php$framephp)php;
php php php php php php php php php$thisphp-php>php_subscribedphp[php$queuephp-php>getNamephp(php)php]php php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp firstphp elementphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php$maxMessages
php php php php php php*php php@paramphp php integerphp php php php php$timeout
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp_Iterator
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$maxMessagesphp=nullphp,php php$timeoutphp=nullphp,php Zendphp_Queuephp php$queuephp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$maxMessagesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$maxMessagesphp php=php php1php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$timeoutphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$timeoutphp php=php selfphp:php:RECEIVEphp_TIMEOUTphp_DEFAULTphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php php/php/php read
php php php php php php php php php$dataphp php=php arrayphp(php)php;

php php php php php php php php php/php/php signalphp thatphp wephp arephp reading
php php php php php php php php ifphp php(php!php$thisphp-php>php_isSubscribedphp(php$queuephp)php)php{
php php php php php php php php php php php php php$thisphp-php>php_subscribephp(php$queuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$maxMessagesphp php>php php0php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_clientphp-php>canReadphp(php)php)php php{
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$maxMessagesphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_clientphp-php>receivephp(php)php;

php php php php php php php php php php php php php php php php php php php php switchphp php(php$responsephp-php>getCommandphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'MESSAGEphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datumphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'messagephp_idphp'php php=php>php php$responsephp-php>getHeaderphp(php'messagephp-idphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'handlephp'php php php php php php=php>php php$responsephp-php>getHeaderphp(php'messagephp-idphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php php php php php php php=php>php php$responsephp-php>getBodyphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'mdphp5php'php php php php php php php php php=php>php mdphp5php(php$responsephp-php>getBodyphp(php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php]php php=php php$datumphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$blockphp php=php printphp_rphp(php$responsephp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Invalidphp responsephp receivedphp:php php'php php.php php$blockphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php php php php php php php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php php php php php php php php=php>php php$dataphp,
php php php php php php php php php php php php php'messageClassphp'php php=php>php php$queuephp-php>getMessageClassphp(php)
php php php php php php php php php)php;

php php php php php php php php php$classnamephp php=php php$queuephp-php>getMessageSetClassphp(php)php;

php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$classnamephp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushphp anphp elementphp ontophp thephp endphp ofphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php$messagephp messagephp tophp sendphp tophp thephp queue
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Message
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$messagephp,php Zendphp_Queuephp php$queuephp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php php$framephp php=php php$thisphp-php>php_clientphp-php>createFramephp(php)php;
php php php php php php php php php$framephp-php>setCommandphp(php'SENDphp'php)php;
php php php php php php php php php$framephp-php>setHeaderphp(php'destinationphp'php,php php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php$framephp-php>setHeaderphp(php'contentphp-lengthphp'php,php strlenphp(php$messagephp)php)php;
php php php php php php php php php$framephp-php>setBodyphp(php(stringphp)php php$messagephp)php;
php php php php php php php php php$thisphp-php>php_clientphp-php>sendphp(php$framephp)php;

php php php php php php php php php$dataphp php=php arrayphp(
php php php php php php php php php php php php php'messagephp_idphp'php php=php>php nullphp,
php php php php php php php php php php php php php'bodyphp'php php php php php php php php=php>php php$messagephp,
php php php php php php php php php php php php php'mdphp5php'php php php php php php php php php=php>php mdphp5php(php$messagephp)php,
php php php php php php php php php php php php php'handlephp'php php php php php php=php>php null
php php php php php php php php php)php;

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php=php>php php$data
php php php php php php php php php)php;

php php php php php php php php php$classnamephp php=php php$queuephp-php>getMessageClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$classnamephp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp lengthphp ofphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php(notphp supportedphp)
php php php php php php*php/
php php php php publicphp functionphp countphp(Zendphp_Queuephp php$queuephp=nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'countphp(php)php isphp notphp supportedphp inphp thisphp adapterphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp aphp queuephp alreadyphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php(notphp supportedphp)
php php php php php php*php/
php php php php publicphp functionphp isExistsphp(php$namephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'isExistsphp(php)php isphp notphp supportedphp inphp thisphp adapterphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp queuephp capabilitiesphp functions
php php php php php php*
php php php php php php*php php$arrayphp[php'functionphp namephp'php]php php=php truephp orphp false
php php php php php php*php truephp isphp supportedphp,php falsephp isphp notphp supportedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'createphp'php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'deletephp'php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'sendphp'php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'receivephp'php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'deleteMessagephp'php php=php>php truephp,
php php php php php php php php php php php php php'getQueuesphp'php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'countphp'php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'isExistsphp'php php php php php php php=php>php falsephp,
php php php php php php php php php)php;
php php php php php}
php}
