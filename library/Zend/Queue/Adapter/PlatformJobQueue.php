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
php php*php php@versionphp php php php php$Idphp:php PlatformJobQueuephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php Zendphp Platformphp JobQueuephp adapter
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Adapterphp_PlatformJobQueuephp extendsphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp ZendApiphp_JobQueue
php php php php php php*php/
php php php php protectedphp php$php_zendQueuephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@paramphp php Zendphp_Queuephp|nullphp php$queue
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp,php php$queuephp)php;

php php php php php php php php ifphp php(php!extensionphp_loadedphp(php"jobqueuephp_clientphp"php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Platformphp Jobphp Queuephp extensionphp doesphp notphp appearphp tophp bephp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_optionsphp[php'daemonOptionsphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Jobphp Queuephp hostphp andphp passwordphp shouldphp bephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_optionsphp[php'daemonOptionsphp'php]php;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hostphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Platformphp Jobphp Queuephp hostphp shouldphp bephp providedphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'passwordphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Platformphp Jobphp Queuephp passwordphp shouldphp bephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_zendQueuephp php=php newphp ZendApiphp_Queuephp(php$optionsphp[php'hostphp'php]php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_zendQueuephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Platformphp Jobphp Queuephp connectionphp failedphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_zendQueuephp-php>loginphp(php$optionsphp[php'passwordphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Jobphp Queuephp loginphp failedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_queuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_queuephp-php>setMessageClassphp(php'Zendphp_Queuephp_Messagephp_PlatformJobphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Queuephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

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
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp|nullphp php$queue
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp parameterphp isphp notphp supportedphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_zendQueuephp-php>getNumOfJobsInQueuephp(php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Messsagephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php|php ZendAPIphp_jobphp php$messagephp Messagephp tophp sendphp tophp thephp activephp queue
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queuephp php php php php Notphp supported
php php php php php php*php php@returnphp Zendphp_Queuephp_Message
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$messagephp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp parameterphp isphp notphp supportedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Thisphp adapterphp canphp workphp onlyphp forphp thisphp messagephp type
php php php php php php php php php$classnamephp php=php php$thisphp-php>php_queuephp-php>getMessageClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$messagephp instanceofphp ZendAPIphp_Jobphp)php php{
php php php php php php php php php php php php php$messagephp php=php arrayphp(php'dataphp'php php=php>php php$messagephp)php;
php php php php php php php php php}

php php php php php php php php php$zendApiJobphp php=php newphp php$classnamephp(php$messagephp)php;

php php php php php php php php php/php/php Unfortunatelyphp,php thephp Platformphp JQphp APIphp isphp PHPphp4php-stylephp.php.php.
php php php php php php php php php$platformJobphp php=php php$zendApiJobphp-php>getJobphp(php)php;

php php php php php php php php php$jobIdphp php=php php$thisphp-php>php_zendQueuephp-php>addJobphp(php$platformJobphp)php;

php php php php php php php php ifphp php(php!php$jobIdphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Failedphp tophp addphp aphp jobphp tophp queuephp:php php'
php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_zendQueuephp-php>getLastErrorphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$zendApiJobphp-php>setJobIdphp(php$jobIdphp)php;
php php php php php php php php returnphp php$zendApiJobphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php$maxMessagesphp php Maximumphp numberphp ofphp messagesphp tophp return
php php php php php php*php php@paramphp php integerphp php php php php$timeoutphp php php php php php Ignored
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queuephp php php php php php php php Notphp supported
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php php@returnphp ArrayIterator
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$maxMessagesphp php=php nullphp,php php$timeoutphp php=php nullphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$maxMessagesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$maxMessagesphp php=php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$queuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp shouldnphp\php'tphp bephp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$jobsphp php=php php$thisphp-php>php_zendQueuephp-php>getJobsInQueuephp(nullphp,php php$maxMessagesphp,php truephp)php;

php php php php php php php php php$classnamephp php=php php$thisphp-php>php_queuephp-php>getMessageClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php php php php php php php php=php>php php$thisphp-php>php_queuephp,
php php php php php php php php php php php php php'dataphp'php php php php php php php php php php=php>php php$jobsphp,
php php php php php php php php php php php php php'messageClassphp'php php=php>php php$thisphp-php>php_queuephp-php>getMessageClassphp(php)php,
php php php php php php php php php)php;

php php php php php php php php php$classnamephp php=php php$thisphp-php>php_queuephp-php>getMessageSetClassphp(php)php;

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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)
php php php php php{
php php php php php php php php ifphp php(getphp_classphp(php$messagephp)php php!php=php php$thisphp-php>php_queuephp-php>getMessageClassphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Failedphp tophp removephp jobphp fromphp thephp queuephp;php onlyphp messagesphp ofphp typephp php'
php php php php php php php php php php php php php php php php php.php php'Zendphp_Queuephp_Messagephp_PlatformJobphp mayphp bephp usedphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_zendQueuephp-php>removeJobphp(php$messagephp-php>getJobIdphp(php)php)php;
php php php php php}

php php php php publicphp functionphp isJobIdExistphp(php$idphp)
php php php php php{
php php php php php php php php php returnphp php(php(php$thisphp-php>php_zendQueuephp-php>getJobphp(php$idphp)php)php?php truephp php:php falsephp)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Supportingphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

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
php php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'createphp'php php php php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'deletephp'php php php php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'getQueuesphp'php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'isExistsphp'php php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'countphp'php php php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'sendphp'php php php php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'receivephp'php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'deleteMessagephp'php php php php php php php php php php=php>php truephp,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Functionsphp thatphp arephp notphp partphp ofphp thephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Serialize
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_optionsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unserialize
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php$thisphp-php>php_optionsphp[php'daemonOptionsphp'php]php;

php php php php php php php php php$thisphp-php>php_zendQueuephp php=php newphp ZendApiphp_Queuephp(php$optionsphp[php'hostphp'php]php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_zendQueuephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Platformphp Jobphp Queuephp connectionphp failedphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_zendQueuephp-php>loginphp(php$optionsphp[php'passwordphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Jobphp Queuephp loginphp failedphp'php)php;
php php php php php php php php php}
php php php php php}
php}
