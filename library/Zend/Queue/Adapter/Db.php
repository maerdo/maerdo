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
php php*php php@versionphp php php php php$Idphp:php Dbphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Select
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Selectphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_Dbphp_Queue
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/Dbphp/Queuephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_Dbphp_Message
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/Dbphp/Messagephp.phpphp'php;

php/php*php*
php php*php Classphp forphp usingphp connectingphp tophp aphp Zendphp_Dbphp-basedphp queuingphp system
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Adapterphp_Dbphp extendsphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Queuephp_Adapterphp_Dbphp_Queue
php php php php php php*php/
php php php php protectedphp php$php_queueTablephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Queuephp_Adapterphp_Dbphp_Message
php php php php php php*php/
php php php php protectedphp php$php_messageTablephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Tablephp_Rowphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_messageRowphp php=php nullphp;

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

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_optionsphp[php'optionsphp'php]php[Zendphp_Dbphp_Selectphp:php:FORphp_UPDATEphp]php)php)php php{
php php php php php php php php php php php php php/php/php turnphp offphp autophp updatephp byphp default
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'optionsphp'php]php[Zendphp_Dbphp_Selectphp:php:FORphp_UPDATEphp]php php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_boolphp(php$thisphp-php>php_optionsphp[php'optionsphp'php]php[Zendphp_Dbphp_Selectphp:php:FORphp_UPDATEphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Optionsphp arrayphp itemphp:php Zendphp_Dbphp_Selectphp:php:FORphp_UPDATEphp mustphp bephp booleanphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'dbAdapterphp'php]php)
php php php php php php php php php php php php php&php&php php$thisphp-php>php_optionsphp[php'dbAdapterphp'php]php instanceofphp Zendphp_Dbphp_Adapterphp_Abstractphp)php php{
php php php php php php php php php php php php php$dbphp php=php php$thisphp-php>php_optionsphp[php'dbAdapterphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dbphp php=php php$thisphp-php>php_initDbAdapterphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_queueTablephp php=php newphp Zendphp_Queuephp_Adapterphp_Dbphp_Queuephp(arrayphp(
php php php php php php php php php php php php php'dbphp'php php=php>php php$dbphp,
php php php php php php php php php)php)php;

php php php php php php php php php$thisphp-php>php_messageTablephp php=php newphp Zendphp_Queuephp_Adapterphp_Dbphp_Messagephp(arrayphp(
php php php php php php php php php php php php php'dbphp'php php=php>php php$dbphp,
php php php php php php php php php)php)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp Dbphp adapterphp usingphp php'driverOptionsphp'php sectionphp ofphp thephp php_optionsphp array
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp adapterphp cannotphp connectphp tophp DBphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_initDbAdapterphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php&php$thisphp-php>php_optionsphp[php'driverOptionsphp'php]php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'typephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'typephp'php forphp thephp databasephp typephp tophp usephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hostphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'hostphp'php forphp thephp hostphp tophp usephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'usernamephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'usernamephp'php forphp thephp usernamephp tophp usephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'passwordphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'passwordphp'php forphp thephp passwordphp tophp usephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dbnamephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'dbnamephp'php forphp thephp databasephp tophp usephp"php)php;
php php php php php php php php php}

php php php php php php php php php$typephp php=php php$optionsphp[php'typephp'php]php;
php php php php php php php php unsetphp(php$optionsphp[php'typephp'php]php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$dbphp php=php Zendphp_Dbphp:php:factoryphp(php$typephp,php php$optionsphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Dbphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Errorphp connectingphp tophp databasephp:php php'php php.php php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dbphp;
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
php php php php php php php php php$idphp php=php php0php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getQueueIdphp(php$namephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Queuephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php(php$idphp php>php php0php)php;
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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$timeoutphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$queuephp php=php php$thisphp-php>php_queueTablephp-php>createRowphp(php)php;
php php php php php php php php php$queuephp-php>queuephp_namephp php=php php$namephp;
php php php php php php php php php$queuephp-php>timeoutphp php php php php=php php(php$timeoutphp php=php=php=php nullphp)php php?php selfphp:php:CREATEphp_TIMEOUTphp_DEFAULTphp php:php php(intphp)php$timeoutphp;

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queuephp-php>savephp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itphp'sphp messages
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp queuephp isphp notphp foundphp,php truephp ifphp thephp queuephp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getQueueIdphp(php$namephp)php;php php/php/php getphp primaryphp key

php php php php php php php php php/php/php ifphp thephp queuephp doesphp notphp existphp thenphp itphp mustphp alreadyphp bephp deletedphp.
php php php php php php php php php$listphp php=php php$thisphp-php>php_queueTablephp-php>findphp(php$idphp)php;
php php php php php php php php ifphp php(countphp(php$listphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$queuephp php=php php$listphp-php>currentphp(php)php;

php php php php php php php php ifphp php(php$queuephp instanceofphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$queuephp-php>deletephp(php)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_queuesphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_queuesphp[php$namephp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php Notphp allphp adaptersphp supportphp getQueuesphp(php)php,php usephp isSupportedphp(php'getQueuesphp'php)
php php php php php php*php tophp determinephp ifphp thephp adapterphp supportsphp thisphp featurephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)
php php php php php{
php php php php php php php php php$queryphp php=php php$thisphp-php>php_queueTablephp-php>selectphp(php)php;
php php php php php php php php php$queryphp-php>fromphp(php$thisphp-php>php_queueTablephp,php arrayphp(php'queuephp_idphp'php,php php'queuephp_namephp'php)php)php;

php php php php php php php php php$thisphp-php>php_queuesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_queueTablephp-php>fetchAllphp(php$queryphp)php asphp php$queuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_queuesphp[php$queuephp-php>queuephp_namephp]php php=php php(intphp)php$queuephp-php>queuephp_idphp;
php php php php php php php php php}

php php php php php php php php php$listphp php=php arrayphp_keysphp(php$thisphp-php>php_queuesphp)php;

php php php php php php php php returnphp php$listphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp countphp(Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php php$infophp php php=php php$thisphp-php>php_messageTablephp-php>infophp(php)php;
php php php php php php php php php$dbphp php php php php=php php$thisphp-php>php_messageTablephp-php>getAdapterphp(php)php;
php php php php php php php php php$queryphp php=php php$dbphp-php>selectphp(php)php;
php php php php php php php php php$queryphp-php>fromphp(php$infophp[php'namephp'php]php,php arrayphp(newphp Zendphp_Dbphp_Exprphp(php'COUNTphp(php1php)php'php)php)php)
php php php php php php php php php php php php php php php-php>wherephp(php'queuephp_idphp=php?php'php,php php$thisphp-php>getQueueIdphp(php$queuephp-php>getNamephp(php)php)php)php;

php php php php php php php php php/php/php returnphp countphp results
php php php php php php php php returnphp php(intphp)php php$dbphp-php>fetchOnephp(php$queryphp)php;
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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$messagephp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_messageRowphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_messageRowphp php=php php$thisphp-php>php_messageTablephp-php>createRowphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_queuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_scalarphp(php$messagephp)php)php php{
php php php php php php php php php php php php php$messagephp php=php php(stringphp)php php$messagephp;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$messagephp)php)php php{
php php php php php php php php php php php php php$messagephp php=php trimphp(php$messagephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isExistsphp(php$queuephp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp doesphp notphp existphp:php'php php.php php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$msgphp php php php php php php php php php php php=php clonephp php$thisphp-php>php_messageRowphp;
php php php php php php php php php$msgphp-php>queuephp_idphp php=php php$thisphp-php>getQueueIdphp(php$queuephp-php>getNamephp(php)php)php;
php php php php php php php php php$msgphp-php>createdphp php php=php timephp(php)php;
php php php php php php php php php$msgphp-php>bodyphp php php php php php=php php$messagephp;
php php php php php php php php php$msgphp-php>mdphp5php php php php php php php=php mdphp5php(php$messagephp)php;
php php php php php php php php php/php/php php$msgphp-php>timeoutphp php=php php?php?php?php php@TODO

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$msgphp-php>savephp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'queuephp'php php=php>php php$queuephp,
php php php php php php php php php php php php php'dataphp'php php php=php>php php$msgphp-php>toArrayphp(php)php,
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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
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

php php php php php php php php php$msgsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$infophp php php php php php php=php php$thisphp-php>php_messageTablephp-php>infophp(php)php;
php php php php php php php php php$microtimephp php=php microtimephp(truephp)php;php php/php/php cachephp microtime
php php php php php php php php php$dbphp php php php php php php php php=php php$thisphp-php>php_messageTablephp-php>getAdapterphp(php)php;

php php php php php php php php php/php/php startphp transactionphp handling
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php php$maxMessagesphp php>php php0php php)php php{php php/php/php ZFphp-php7php6php6php6php LIMITphp php0php clausephp notphp includedphp.
php php php php php php php php php php php php php php php php php$dbphp-php>beginTransactionphp(php)php;

php php php php php php php php php php php php php php php php php$queryphp php=php php$dbphp-php>selectphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'optionsphp'php]php[Zendphp_Dbphp_Selectphp:php:FORphp_UPDATEphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php turnphp onphp forUpdate
php php php php php php php php php php php php php php php php php php php php php$queryphp-php>forUpdatephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$queryphp-php>fromphp(php$infophp[php'namephp'php]php,php arrayphp(php'php*php'php)php)
php php php php php php php php php php php php php php php php php php php php php php php-php>wherephp(php'queuephp_idphp=php?php'php,php php$thisphp-php>getQueueIdphp(php$queuephp-php>getNamephp(php)php)php)
php php php php php php php php php php php php php php php php php php php php php php php-php>wherephp(php'handlephp ISphp NULLphp ORphp timeoutphp+php'php php.php php(intphp)php$timeoutphp php.php php'php <php php'php php.php php(intphp)php$microtimephp)
php php php php php php php php php php php php php php php php php php php php php php php-php>limitphp(php$maxMessagesphp)php;

php php php php php php php php php php php php php php php php foreachphp php(php$dbphp-php>fetchAllphp(php$queryphp)php asphp php$dataphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php setupphp ourphp changesphp tophp thephp message
php php php php php php php php php php php php php php php php php php php php php$dataphp[php'handlephp'php]php php=php mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php;

php php php php php php php php php php php php php php php php php php php php php$updatephp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'handlephp'php php php=php>php php$dataphp[php'handlephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php'timeoutphp'php php=php>php php$microtimephp,
php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php php/php/php updatephp thephp database
php php php php php php php php php php php php php php php php php php php php php$wherephp php php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$wherephp[php]php php=php php$dbphp-php>quoteIntophp(php'messagephp_idphp=php?php'php,php php$dataphp[php'messagephp_idphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$wherephp[php]php php=php php'handlephp ISphp NULLphp ORphp timeoutphp+php'php php.php php(intphp)php$timeoutphp php.php php'php <php php'php php.php php(intphp)php$microtimephp;

php php php php php php php php php php php php php php php php php php php php php$countphp php=php php$dbphp-php>updatephp(php$infophp[php'namephp'php]php,php php$updatephp,php php$wherephp)php;

php php php php php php php php php php php php php php php php php php php php php/php/php wephp checkphp countphp tophp makephp surephp nophp otherphp threadphp hasphp gotten
php php php php php php php php php php php php php php php php php php php php php/php/php thephp rowsphp afterphp ourphp selectphp,php butphp beforephp ourphp updatephp.
php php php php php php php php php php php php php php php php php php php php ifphp php(php$countphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$msgsphp[php]php php=php php$dataphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$dbphp-php>commitphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$dbphp-php>rollBackphp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
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
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp php-php databasephp error
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)
php php php php php{
php php php php php php php php php$dbphp php php php php=php php$thisphp-php>php_messageTablephp-php>getAdapterphp(php)php;
php php php php php php php php php$wherephp php=php php$dbphp-php>quoteIntophp(php'handlephp=php?php'php,php php$messagephp-php>handlephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_messageTablephp-php>deletephp(php$wherephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
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
php php php php php php*php Functionsphp thatphp arephp notphp partphp ofphp thephp Zendphp_Queuephp_Adapterphp_Abstract
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/
php php php php php/php*php*
php php php php php php*php Getphp thephp queuephp ID
php php php php php php*
php php php php php php*php Returnsphp thephp queuephp'sphp rowphp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$name
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp getQueueIdphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_queuesphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_queuesphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php php$queryphp php=php php$thisphp-php>php_queueTablephp-php>selectphp(php)php;
php php php php php php php php php$queryphp-php>fromphp(php$thisphp-php>php_queueTablephp,php arrayphp(php'queuephp_idphp'php)php)
php php php php php php php php php php php php php php php-php>wherephp(php'queuephp_namephp=php?php'php,php php$namephp)php;

php php php php php php php php php$queuephp php=php php$thisphp-php>php_queueTablephp-php>fetchRowphp(php$queryphp)php;

php php php php php php php php ifphp php(php$queuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Queuephp doesphp notphp existphp:php php'php php.php php$namephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_queuesphp[php$namephp]php php=php php(intphp)php$queuephp-php>queuephp_idphp;

php php php php php php php php returnphp php$thisphp-php>php_queuesphp[php$namephp]php;
php php php php php}
php}
