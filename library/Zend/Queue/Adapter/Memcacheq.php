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
php php*php php@versionphp php php php php$Idphp:php Memcacheqphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php Classphp forphp usingphp connectingphp tophp aphp Zendphp_Cachephp-basedphp queuingphp system
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Adapterphp_Memcacheqphp extendsphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php{
php php php php constphp DEFAULTphp_HOSTphp php=php php'php1php2php7php.php0php.php0php.php1php'php;
php php php php constphp DEFAULTphp_PORTphp php=php php2php2php2php0php1php;
php php php php constphp EOLphp php php php php php php php php php php=php php"php\rphp\nphp"php;

php php php php php/php*php*
php php php php php php*php php@varphp Memcache
php php php php php php*php/
php php php php protectedphp php$php_cachephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_portphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_socketphp php=php nullphp;

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php*php Constructorphp php/php Destructor
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@paramphp php nullphp|Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'memcachephp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Memcachephp extensionphp doesphp notphp appearphp tophp bephp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp,php php$queuephp)php;

php php php php php php php php php$optionsphp php=php php&php$thisphp-php>php_optionsphp[php'driverOptionsphp'php]php;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hostphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'hostphp'php]php php=php selfphp:php:DEFAULTphp_HOSTphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'portphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'portphp'php]php php=php selfphp:php:DEFAULTphp_PORTphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_cachephp php=php newphp Memcachephp(php)php;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_cachephp-php>connectphp(php$optionsphp[php'hostphp'php]php,php php$optionsphp[php'portphp'php]php)php;

php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Couldphp notphp connectphp tophp MemcacheQphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hostphp php=php php$optionsphp[php'hostphp'php]php;
php php php php php php php php php$thisphp-php>php_portphp php=php php(intphp)php$optionsphp[php'portphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_cachephp instanceofphp Memcachephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_cachephp-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php$cmdphp php=php php'quitphp'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php fwritephp(php$thisphp-php>php_socketphp,php php$cmdphp)php;
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Queuephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Doesphp aphp queuephp alreadyphp existphp?
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp adapterphp cannotphp determinephp ifphp aphp queuephp existsphp.
php php php php php php*php usephp isSupportedphp(php'isExistsphp'php)php tophp determinephp ifphp anphp adapterphp canphp testphp for
php php php php php php*php queuephp existancephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp isExistsphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_queuesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>getQueuesphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp inphp_arrayphp(php$namephp,php php$thisphp-php>php_queuesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp queue
php php php php php php*
php php php php php php*php Visibilityphp timeoutphp isphp howphp longphp aphp messagephp isphp leftphp inphp thephp queuephp php"invisiblephp"
php php php php php php*php tophp otherphp readersphp.php php Ifphp thephp messagephp isphp acknowlegedphp php(deletedphp)php beforephp the
php php php php php php*php timeoutphp,php thenphp thephp messagephp isphp deletedphp.php php Howeverphp,php ifphp thephp timeoutphp expires
php php php php php php*php thenphp thephp messagephp willphp bephp madephp availablephp tophp otherphp queuephp readersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp php php php queuephp name
php php php php php php*php php@paramphp php integerphp php$timeoutphp defaultphp visibilityphp timeout
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$timeoutphp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$timeoutphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$timeoutphp php=php selfphp:php:CREATEphp_TIMEOUTphp_DEFAULTphp;
php php php php php php php php php}

php php php php php php php php php/php/php MemcacheQphp doesphp notphp havephp aphp methodphp tophp php"createphp"php aphp queue
php php php php php php php php php/php/php queuesphp arephp createdphp uponphp sendingphp aphp packetphp.
php php php php php php php php php/php/php Wephp cannotphp usephp thephp sendphp(php)php andphp receivephp(php)php functionsphp becausephp those
php php php php php php php php php/php/php dependphp onphp thephp currentphp namephp.
php php php php php php php php php$resultphp php=php php$thisphp-php>php_cachephp-php>setphp(php$namephp,php php'creatingphp queuephp'php,php php0php,php php1php5php)php;
php php php php php php php php php$resultphp php=php php$thisphp-php>php_cachephp-php>getphp(php$namephp)php;

php php php php php php php php php$thisphp-php>php_queuesphp[php]php php=php php$namephp;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itphp'sphp messages
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp queuephp isphp notphp foundphp,php truephp ifphp thephp queuephp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendCommandphp(php'deletephp php'php php.php php$namephp,php arrayphp(php'DELETEDphp'php,php php'NOTphp_FOUNDphp'php)php,php truephp)php;

php php php php php php php php ifphp php(inphp_arrayphp(php'DELETEDphp'php,php php$responsephp)php)php php{
php php php php php php php php php php php php php$keyphp php=php arrayphp_searchphp(php$namephp,php php$thisphp-php>php_queuesphp)php;

php php php php php php php php php php php php ifphp php(php$keyphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_queuesphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php Notphp allphp adaptersphp supportphp getQueuesphp(php)php,php usephp isSupportedphp(php'getQueuesphp'php)
php php php php php php*php tophp determinephp ifphp thephp adapterphp supportsphp thisphp featurephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_queuesphp php=php arrayphp(php)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendCommandphp(php'statsphp queuephp'php,php arrayphp(php'ENDphp'php)php)php;

php php php php php php php php foreachphp php(php$responsephp asphp php$iphp php=php>php php$linephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_queuesphp[php]php php=php strphp_replacephp(php'STATphp php'php,php php'php'php,php php$linephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_queuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
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

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Messsagephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php$messagephp Messagephp tophp sendphp tophp thephp activephp queue
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Message
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$messagephp,php Zendphp_Queuephp php$queuephp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isExistsphp(php$queuephp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp doesphp notphp existphp:php'php php.php php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$messagephp php=php php(stringphp)php php$messagephp;
php php php php php php php php php$dataphp php php php php=php arrayphp(
php php php php php php php php php php php php php'messagephp_idphp'php php=php>php mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php,
php php php php php php php php php php php php php'handlephp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'bodyphp'php php php php php php php php=php>php php$messagephp,
php php php php php php php php php php php php php'mdphp5php'php php php php php php php php php=php>php mdphp5php(php$messagephp)php,
php php php php php php php php php)php;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_cachephp-php>setphp(php$queuephp-php>getNamephp(php)php,php php$messagephp,php php0php,php php0php)php;
php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'failedphp tophp insertphp messagephp intophp queuephp:php'php php.php php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php=php>php php$dataphp,
php php php php php php php php php)php;

php php php php php php php php php$classnamephp php=php php$queuephp-php>getMessageClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$classnamephp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php$maxMessagesphp php Maximumphp numberphp ofphp messagesphp tophp return
php php php php php php*php php@paramphp php integerphp php php php php$timeoutphp php php php php php Visibilityphp timeoutphp forphp thesephp messages
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp_Iterator
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
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

php php php php php php php php php$msgsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$maxMessagesphp php>php php0php php)php php{
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$maxMessagesphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'handlephp'php php=php>php mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php,
php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php php php=php>php php$thisphp-php>php_cachephp-php>getphp(php$queuephp-php>getNamephp(php)php)php,
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php$msgsphp[php]php php=php php$dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php php php php php php php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php php php php php php php php=php>php php$msgsphp,
php php php php php php php php php php php php php'messageClassphp'php php=php>php php$queuephp-php>getMessageClassphp(php)php,
php php php php php php php php php)php;

php php php php php php php php php$classnamephp php=php php$queuephp-php>getMessageSetClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$classnamephp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp messagephp fromphp thephp queue
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp messagephp isphp deletedphp,php falsephp ifphp thephp deletionphp is
php php php php php php*php unsuccessfulphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp_Messagephp php$message
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php(unsupportedphp)
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'deleteMessagephp(php)php isphp notphp supportedphp inphp php php'php php.php getphp_classphp(php$thisphp)php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Supportingphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

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
php php php php php php php php php php php php php'createphp'php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'deletephp'php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'sendphp'php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'receivephp'php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'deleteMessagephp'php php=php>php falsephp,
php php php php php php php php php php php php php'getQueuesphp'php php php php php php=php>php truephp,
php php php php php php php php php php php php php'countphp'php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'isExistsphp'php php php php php php php=php>php truephp,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Functionsphp thatphp arephp notphp partphp ofphp thephp Zendphp_Queuephp_Adapterphp_Abstract
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php sendsphp aphp commandphp tophp MemcacheQ
php php php php php php*
php php php php php php*php Thephp memcachephp functionsphp byphp phpphp cannotphp handlephp allphp typesphp ofphp requests
php php php php php php*php supportedphp byphp MemcacheQ
php php php php php php*php Nonphp-standardphp requestsphp arephp handledphp byphp thisphp functionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$commandphp php-php commandphp tophp sendphp tophp memcacheQ
php php php php php php*php php@paramphp php arrayphp php php php$terminatorphp php-php stringsphp tophp indicatephp endphp ofphp memcacheQphp response
php php php php php php*php php@paramphp php booleanphp php$includephp_termphp php-php includephp terminatorphp inphp response
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp ifphp connectionphp cannotphp bephp opened
php php php php php php*php/
php php php php protectedphp functionphp php_sendCommandphp(php$commandphp,php arrayphp php$terminatorphp,php php$includephp_termphp=falsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_socketphp php=php fsockopenphp(php$thisphp-php>php_hostphp,php php$thisphp-php>php_portphp,php php$errnophp,php php$errstrphp,php php1php0php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_socketphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Couldphp notphp openphp aphp connectionphp tophp php$thisphp-php>php_hostphp:php$thisphp-php>php_portphp errnophp=php$errnophp php:php php$errstrphp"php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php arrayphp(php)php;

php php php php php php php php php$cmdphp php=php php$commandphp php.php selfphp:php:EOLphp;
php php php php php php php php fwritephp(php$thisphp-php>php_socketphp,php php$cmdphp)php;

php php php php php php php php php$continuephp_readingphp php=php truephp;
php php php php php php php php whilephp php(php!feofphp(php$thisphp-php>php_socketphp)php php&php&php php$continuephp_readingphp)php php{
php php php php php php php php php php php php php$respphp php=php trimphp(fgetsphp(php$thisphp-php>php_socketphp,php php1php0php2php4php)php)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$respphp,php php$terminatorphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$includephp_termphp)php php{
php php php php php php php php php php php php php php php php php php php php php$responsephp[php]php php=php php$respphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$continuephp_readingphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$responsephp[php]php php=php php$respphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp;
php php php php php}
php}
