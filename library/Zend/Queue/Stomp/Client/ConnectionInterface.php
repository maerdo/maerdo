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
php php*php php@versionphp php php php php$Idphp:php ConnectionInterfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
interfacephp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterface
php{
php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php php$schemephp php[php'tcpphp'php,php php'udpphp'php]
php php php php php php*php php@paramphp php stringphp php host
php php php php php php*php php@paramphp php integerphp port
php php php php php php*php php@paramphp php stringphp php classphp php-php createphp aphp connectionphp withphp thisphp classphp;php classphp mustphp supportphp Zendphp_Queuephp_Stompphp_Clientphp_Connectionphp_Interface
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp openphp(php$schemephp,php php$hostphp,php php$portphp)php;

php php php php php/php*php*
php php php php php php*php php@paramphp php booleanphp php$destructor
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closephp(php$destructorphp php=php falsephp)php;

php php php php php/php*php*
php php php php php php*php Checkphp whetherphp wephp arephp connectedphp tophp thephp server
php php php php php php*
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp pingphp(php)php;

php php php php php/php*php*
php php php php php php*php writephp aphp framephp tophp thephp stompphp server
php php php php php php*
php php php php php php*php examplephp:php php$responsephp php=php php$clientphp-php>writephp(php$framephp)php-php>readphp(php)php;
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp_Stompphp_FrameInterfacephp php$frame
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp writephp(Zendphp_Queuephp_Stompphp_FrameInterfacephp php$framephp)php;

php php php php php/php*php*
php php php php php php*php testsphp thephp socketphp tophp seephp ifphp therephp isphp dataphp forphp us
php php php php php php*php/
php php php php publicphp functionphp canReadphp(php)php;

php php php php php/php*php*
php php php php php php*php readsphp inphp aphp framephp fromphp thephp socketphp orphp returnsphp falsephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Framephp|false
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp readphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp framephp classphp tophp bephp used
php php php php php php*
php php php php php php*php Thisphp mustphp bephp aphp Zendphp_Queuephp_Stompphp_FrameInterfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Clientphp_ConnectionInterfacephp;
php php php php php php*php/
php php php php publicphp functionphp setFrameClassphp(php$classphp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp frameClass
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFrameClassphp(php)php;

php php php php php/php*php*
php php php php php php*php createphp anphp emptyphp frame
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_FrameInterfacephp class
php php php php php php*php/
php php php php publicphp functionphp createFramephp(php)php;
php}
