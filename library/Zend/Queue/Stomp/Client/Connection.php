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
php php*php php@versionphp php php php php$Idphp:php Connectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterface
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Stompphp/Clientphp/ConnectionInterfacephp.phpphp'php;

php/php*php*
php php*php Thephp Stompphp clientphp interactsphp withphp aphp Stompphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Stompphp_Clientphp_Connection
php php php php implementsphp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterface
php{
php php php php constphp READphp_TIMEOUTphp_DEFAULTphp_USECphp php=php php0php;php php/php/php php0php microseconds
php php php php constphp READphp_TIMEOUTphp_DEFAULTphp_SECphp php=php php5php;php php/php/php php5php seconds

php php php php php/php*php*
php php php php php php*php Connectionphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp;

php php php php php/php*php*
php php php php php php*php tcpphp/udpphp socket
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_socketphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php openphp(php)php opensphp aphp socketphp tophp thephp Stompphp server
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php(php'schemephp'php,php php'hostphp'php,php php'portphp'php)
php php php php php php*php php@paramphp php stringphp php$scheme
php php php php php php*php php@paramphp php stringphp php$host
php php php php php php*php php@paramphp php intphp php$port
php php php php php php*php php@paramphp php arrayphp php$optionsphp Acceptsphp php"timeoutphp_secphp"php andphp php"timeoutphp_usecphp"php keys
php php php php php php*php php@returnphp truephp;
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp openphp(php$schemephp,php php$hostphp,php php$portphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$strphp php=php php$schemephp php.php php'php:php/php/php'php php.php php$hostphp;
php php php php php php php php php$thisphp-php>php_socketphp php=php fsockopenphp(php$strphp,php php$portphp,php php$errnophp,php php$errstrphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_socketphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php aparentlyphp therephp isphp somephp reasonphp thatphp fsockopenphp willphp returnphp false
php php php php php php php php php php php php php/php/php butphp itphp normallyphp throwsphp anphp errorphp.
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Unablephp tophp connectphp tophp php$strphp;php errorphp php=php php$errstrphp php(php errnophp php=php php$errnophp php)php"php)php;
php php php php php php php php php}

php php php php php php php php streamphp_setphp_blockingphp(php$thisphp-php>php_socketphp,php php0php)php;php php/php/php nonphp blocking

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'timeoutphp_secphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'timeoutphp_secphp'php]php php=php selfphp:php:READphp_TIMEOUTphp_DEFAULTphp_SECphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[php'timeoutphp_usecphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'timeoutphp_usecphp'php]php php=php selfphp:php:READphp_TIMEOUTphp_DEFAULTphp_USECphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp socketphp explicitlyphp whenphp destructed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp connection
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$destructor
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closephp(php$destructorphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Gracefullyphp disconnect
php php php php php php php php ifphp php(php!php$destructorphp)php php{
php php php php php php php php php php php php php$framephp php=php php$thisphp-php>createFramephp(php)php;
php php php php php php php php php php php php php$framephp-php>setCommandphp(php'DISCONNECTphp'php)php;
php php php php php php php php php php php php php$thisphp-php>writephp(php$framephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php php@todophp:php Shouldphp bephp fixedphp.
php php php php php php php php php/php/php Whenphp thephp socketphp isphp php"closedphp"php,php itphp willphp triggerphp thephp belowphp errorphp whenphp phpphp exits
php php php php php php php php php/php/php Fatalphp errorphp:php Exceptionphp thrownphp withoutphp aphp stackphp framephp inphp Unknownphp onphp linephp php0

php php php php php php php php php/php/php Danlophp:php Iphp suspectphp thisphp isphp becausephp thisphp hasphp alreadyphp beenphp claimedphp byphp thephp interpeter
php php php php php php php php php/php/php thusphp tryingphp tophp shutdownphp thisphp resourcesphp,php whichphp isphp alreadyphp shutdownphp isphp aphp problemphp.
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php/php/php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php php$thisphp-php>php_socketphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp whetherphp wephp arephp connectedphp tophp thephp server
php php php php php php*
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp pingphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Notphp connectedphp tophp Stompphp serverphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp framephp tophp thephp stompphp server
php php php php php php*
php php php php php php*php examplephp:php php$responsephp php=php php$clientphp-php>writephp(php$framephp)php-php>readphp(php)php;
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Queuephp_Stomphp_FrameInterfacephp php$frame
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp writephp(Zendphp_Queuephp_Stompphp_FrameInterfacephp php$framephp)
php php php php php{
php php php php php php php php php$thisphp-php>pingphp(php)php;
php php php php php php php php php$outputphp php=php php$framephp-php>toFramephp(php)php;

php php php php php php php php php$bytesphp php=php fwritephp(php$thisphp-php>php_socketphp,php php$outputphp,php strlenphp(php$outputphp)php)php;
php php php php php php php php ifphp php(php$bytesphp php=php=php=php falsephp php|php|php php$bytesphp php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Nophp bytesphp writtenphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testsphp thephp socketphp tophp seephp ifphp therephp isphp dataphp forphp us
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp canReadphp(php)
php php php php php{
php php php php php php php php php$readphp php php php=php arrayphp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php$writephp php php=php nullphp;
php php php php php php php php php$exceptphp php=php nullphp;

php php php php php php php php returnphp streamphp_selectphp(
php php php php php php php php php php php php php$readphp,
php php php php php php php php php php php php php$writephp,
php php php php php php php php php php php php php$exceptphp,
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'timeoutphp_secphp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'timeoutphp_usecphp'php]
php php php php php php php php php)php php=php=php php1php;
php php php php php php php php php/php/php seephp httpphp:php/php/usphp.phpphp.netphp/manualphp/enphp/functionphp.streamphp-selectphp.php
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp inphp aphp framephp fromphp thephp socketphp orphp returnsphp falsephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_FrameInterfacephp|false
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp readphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>pingphp(php)php;

php php php php php php php php php$responsephp php=php php'php'php;
php php php php php php php php php$prevphp php php php php php=php php'php'php;

php php php php php php php php php/php/php whilephp notphp endphp ofphp filephp.
php php php php php php php php whilephp php(php!feofphp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php/php/php readphp inphp onephp characterphp untilphp php"php\php0php\nphp"php isphp found
php php php php php php php php php php php php php$dataphp php=php freadphp(php$thisphp-php>php_socketphp,php php1php)php;

php php php php php php php php php php php php php/php/php checkphp tophp makephp surephp thatphp thephp connectionphp isphp notphp lostphp.
php php php php php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Connectionphp lostphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php appendphp lastphp characterphp readphp tophp php$response
php php php php php php php php php php php php php$responsephp php.php=php php$dataphp;

php php php php php php php php php php php php php/php/php isphp thisphp php\php0php php(prevphp)php php\nphp php(dataphp)php?php ENDphp_OFphp_FRAME
php php php php php php php php php php php php ifphp php(ordphp(php$dataphp)php php=php=php php1php0php php&php&php ordphp(php$prevphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$prevphp php=php php$dataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$responsephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$framephp php=php php$thisphp-php>createFramephp(php)php;
php php php php php php php php php$framephp-php>fromFramephp(php$responsephp)php;
php php php php php php php php returnphp php$framephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp frameClassphp tophp bephp used
php php php php php php*
php php php php php php*php Thisphp mustphp bephp aphp Zendphp_Queuephp_Stompphp_FrameInterfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$classnamephp php-php classphp isphp anphp instancephp ofphp Zendphp_Queuephp_Stompphp_FrameInterface
php php php php php php*php php@returnphp php$thisphp;
php php php php php php*php/
php php php php publicphp functionphp setFrameClassphp(php$classnamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'frameClassphp'php]php php=php php$classnamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp frameClass
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFrameClassphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_optionsphp[php'frameClassphp'php]php)
php php php php php php php php php php php php php?php php$thisphp-php>php_optionsphp[php'frameClassphp'php]
php php php php php php php php php php php php php:php php'Zendphp_Queuephp_Stompphp_Framephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp anphp emptyphp frame
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_FrameInterface
php php php php php php*php/
php php php php publicphp functionphp createFramephp(php)
php php php php php{
php php php php php php php php php$classphp php=php php$thisphp-php>getFrameClassphp(php)php;

php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php}

php php php php php php php php php$framephp php=php newphp php$classphp(php)php;

php php php php php php php php ifphp php(php!php$framephp instanceofphp Zendphp_Queuephp_Stompphp_FrameInterfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Invalidphp Framephp classphp providedphp;php mustphp implementphp Zendphp_Queuephp_Stompphp_FrameInterfacephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$framephp;
php php php php php}
php}
