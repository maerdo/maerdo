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
php php*php php@versionphp php php php php$Idphp:php Arrayphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php Classphp forphp usingphp aphp standardphp PHPphp arrayphp asphp aphp queue
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Adapterphp_Arrayphp extendsphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

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
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php*php Queuephp managementphp functions
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
php php php php php php*php/
php php php php publicphp functionphp isExistsphp(php$namephp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php;
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
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$timeoutphp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$timeoutphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$timeoutphp php=php selfphp:php:CREATEphp_TIMEOUTphp_DEFAULTphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php arrayphp(php)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itphp'sphp messages
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp queuephp isphp notphp foundphp,php truephp ifphp thephp queuephp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)
php php php php php{
php php php php php php php php php$foundphp php=php issetphp(php$thisphp-php>php_dataphp[php$namephp]php)php;

php php php php php php php php ifphp php(php$foundphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$namephp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$foundphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php Notphp allphp adaptersphp supportphp getQueuesphp(php)php,php usephp isSupportedphp(php'getQueuesphp'php)
php php php php php php*php tophp determinephp ifphp thephp adapterphp supportsphp thisphp featurephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp countphp(Zendphp_Queuephp php$queuephp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php$queuephp-php>getNamephp(php)php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Queuephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp countphp(php$thisphp-php>php_dataphp[php$queuephp-php>getNamephp(php)php]php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php*php Messsagephp managementphp functions
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

php php php php php php php php php/php/php createphp thephp message
php php php php php php php php php$dataphp php=php arrayphp(
php php php php php php php php php php php php php'messagephp_idphp'php php=php>php mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php,
php php php php php php php php php php php php php'bodyphp'php php php php php php php php=php>php php$messagephp,
php php php php php php php php php php php php php'mdphp5php'php php php php php php php php php=php>php mdphp5php(php$messagephp)php,
php php php php php php php php php php php php php'handlephp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'createdphp'php php php php php=php>php timephp(php)php,
php php php php php php php php php php php php php'queuephp_namephp'php php=php>php php$queuephp-php>getNamephp(php)php,
php php php php php php php php php)php;

php php php php php php php php php/php/php addphp php$dataphp tophp thephp php"queuephp"
php php php php php php php php php$thisphp-php>php_dataphp[php$queuephp-php>getNamephp(php)php]php[php]php php=php php$dataphp;

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
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$maxMessagesphp php=php nullphp,php php$timeoutphp php=php nullphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
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

php php php php php php php php php$dataphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$maxMessagesphp php>php php0php)php php{
php php php php php php php php php php php php php$startphp_timephp php=php microtimephp(truephp)php;

php php php php php php php php php php php php php$countphp php=php php0php;
php php php php php php php php php php php php php$tempphp php=php php&php$thisphp-php>php_dataphp[php$queuephp-php>getNamephp(php)php]php;
php php php php php php php php php php php php foreachphp php(php$tempphp asphp php$keyphp=php>php&php$msgphp)php php{
php php php php php php php php php php php php php php php php php/php/php countphp checkphp hasphp tophp bephp firstphp,php asphp someonephp canphp askphp forphp php0php messages
php php php php php php php php php php php php php php php php php/php/php ZFphp-php7php6php5php0
php php php php php php php php php php php php php php php php ifphp php(php$countphp php>php=php php$maxMessagesphp)php php{
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php(php$msgphp[php'handlephp'php]php php=php=php=php nullphp)
php php php php php php php php php php php php php php php php php php php php php|php|php php(php$msgphp[php'timeoutphp'php]php php+php php$timeoutphp <php php$startphp_timephp)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php$msgphp[php'handlephp'php]php php php=php mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php;
php php php php php php php php php php php php php php php php php php php php php$msgphp[php'timeoutphp'php]php php=php microtimephp(truephp)php;
php php php php php php php php php php php php php php php php php php php php php$dataphp[php]php php=php php$msgphp;
php php php php php php php php php php php php php php php php php php php php php$countphp+php+php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php php php php php php php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php php php php php php php php=php>php php$dataphp,
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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)
php php php php php{
php php php php php php php php php/php/php loadphp thephp queue
php php php php php php php php php$queuephp php=php php&php$thisphp-php>php_dataphp[php$messagephp-php>queuephp_namephp]php;

php php php php php php php php foreachphp php(php$queuephp asphp php$keyphp php=php>php php&php$msgphp)php php{
php php php php php php php php php php php php ifphp php(php$msgphp[php'handlephp'php]php php=php=php php$messagephp-php>handlephp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$queuephp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
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
php php php php php php php php php php php php php'deleteMessagephp'php php=php>php truephp,
php php php php php php php php php php php php php'getQueuesphp'php php php php php php=php>php truephp,
php php php php php php php php php php php php php'countphp'php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'isExistsphp'php php php php php php php=php>php truephp,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php*php Functionsphp thatphp arephp notphp partphp ofphp thephp Zendphp_Queuephp_Adapterphp_Abstract
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php serialize
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_dataphp'php)php;
php php php php php}

php php php php php/php*
php php php php php php*php Thesephp functionsphp arephp debugphp helpersphp.
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php returnsphp underlyingphp php_dataphp array
php php php php php php*php php$queuephp-php>getAdapterphp(php)php-php>getDataphp(php)php;
php php php php php php*
php php php php php php*php php@returnphp php$thisphp;
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp thephp underlyingphp php_dataphp array
php php php php php php*php php$queuephp-php>getAdapterphp(php)php-php>setDataphp(php$dataphp)php;
php php php php php php*
php php php php php php*php php@paramphp php$dataphp array
php php php php php php*php php@returnphp php$thisphp;
php php php php php php*php/
php php php php publicphp functionphp setDataphp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
