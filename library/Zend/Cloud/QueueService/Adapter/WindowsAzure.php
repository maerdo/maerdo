<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Adapterphp/AbstractAdapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Exceptionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Queuephp.phpphp'php;

php/php*php*
php php*php WindowsAzurephp adapterphp forphp simplephp queuephp servicephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_WindowsAzure
php php php php extendsphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_AbstractAdapter
php{
php php php php php/php*php*
php php php php php php*php Optionphp arrayphp keysphp forphp thephp Windowsphp Azurephp adapterphp.
php php php php php php*php/
php php php php constphp ACCOUNTphp_NAMEphp php php php php php php=php php'storagephp_accountnamephp'php;
php php php php constphp ACCOUNTphp_KEYphp php php php php php php php=php php'storagephp_accountkeyphp'php;
php php php php constphp HOSTphp php php php php php php php php php php php php php php=php php"storagephp_hostphp"php;
php php php php constphp PROXYphp_HOSTphp php php php php php php php php=php php"storagephp_proxyphp_hostphp"php;
php php php php constphp PROXYphp_PORTphp php php php php php php php php=php php"storagephp_proxyphp_portphp"php;
php php php php constphp PROXYphp_CREDENTIALSphp php=php php"storagephp_proxyphp_credentialsphp"php;

php php php php php/php*php*php listphp optionsphp php*php/
php php php php constphp LISTphp_PREFIXphp php php php php php php=php php'prefixphp'php;
php php php php constphp LISTphp_MAXphp_RESULTSphp php=php php'maxphp_resultsphp'php;

php php php php php/php*php*php messagephp optionsphp php*php/
php php php php constphp MESSAGEphp_TTLphp php=php php'ttlphp'php;

php php php php constphp DEFAULTphp_HOSTphp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:URLphp_CLOUDphp_QUEUEphp;

php php php php php/php*php*
php php php php php php*php Storagephp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Queue
php php php php php php*php/
php php php php protectedphp php$php_storageClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:MESSAGEphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMessageClassphp(php$optionsphp[selfphp:php:MESSAGEphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:MESSAGESETphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMessageSetClassphp(php$optionsphp[selfphp:php:MESSAGESETphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Buildphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp instance
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:HOSTphp]php)php)php php{
php php php php php php php php php php php php php$hostphp php=php selfphp:php:DEFAULTphp_HOSTphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hostphp php=php php$optionsphp[selfphp:php:HOSTphp]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_Storagephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp namephp providedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_Storagephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp keyphp providedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php TODOphp:php supportphp php$usePathStyleUriphp andphp php$retryPolicy
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Queuephp(
php php php php php php php php php php php php php php php php php$hostphp,php php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php,php php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php;
php php php php php php php php php php php php php/php/php Parsephp otherphp options
php php php php php php php php php php php php ifphp php(php!php emptyphp(php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php)php)php php{
php php php php php php php php php php php php php php php php php$proxyHostphp php=php php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php;
php php php php php php php php php php php php php php php php php$proxyPortphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_PORTphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_PORTphp]php php:php php8php0php8php0php;
php php php php php php php php php php php php php php php php php$proxyCredentialsphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setProxyphp(truephp,php php$proxyHostphp,php php$proxyPortphp,php php$proxyCredentialsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setHttpClientChannelphp(php$httpAdapterphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp createphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp queuephp.php Returnsphp thephp IDphp ofphp thephp createdphp queuephp php(typicallyphp thephp URLphp)php.
php php php php php php*php Itphp mayphp takephp somephp timephp tophp createphp thephp queuephp.php Checkphp yourphp vendorphp's
php php php php php php*php documentationphp forphp detailsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp stringphp Queuephp IDphp php(typicallyphp URLphp)
php php php php php php*php/
php php php php publicphp functionphp createQueuephp(php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$queuephp php=php php$thisphp-php>php_storageClientphp-php>createQueuephp(php$namephp,php php$optionsphp)php;
php php php php php php php php php php php php returnphp php$queuephp-php>Namephp;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp queuephp creationphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp.php Allphp messagesphp inphp thephp queuephp willphp alsophp bephp deletedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp booleanphp truephp ifphp successfulphp,php falsephp otherwise
php php php php php php*php/
php php php php publicphp functionphp deleteQueuephp(php$queueIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>deleteQueuephp(php$queueIdphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp queuephp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp allphp queuesphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Queuephp IDs
php php php php php php*php/
php php php php publicphp functionphp listQueuesphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$prefixphp php=php php$maxResultsphp php=php nullphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php issetphp(php$optionsphp[selfphp:php:LISTphp_PREFIXphp]php)php php?php php$prefixphp php=php php$optionsphp[selfphp:php:LISTphp_PREFIXphp]php php:php nullphp;
php php php php php php php php php php php php issetphp(php$optionsphp[selfphp:php:LISTphp_MAXphp_RESULTSphp]php)php php?php php$maxResultsphp php=php php$optionsphp[selfphp:php:LISTphp_MAXphp_RESULTSphp]php php:php nullphp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$queuesphp php=php php php$thisphp-php>php_storageClientphp-php>listQueuesphp(php$prefixphp,php php$maxResultsphp)php;
php php php php php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$queuesphp asphp php$queuephp)php php{
php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$queuephp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp listingphp queuesphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchQueueMetadataphp(php$queueIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>getQueueMetadataphp(php$queueIdphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp fetchingphp queuephp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp specifiedphp queuephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.php Somephp adaptersphp mayphp notphp supportphp thisphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$metadata
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeQueueMetadataphp(php$queueIdphp,php php$metadataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>setQueueMetadataphp(php$queueIdphp,php php$metadataphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp settingphp queuephp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp stringphp Messagephp ID
php php php php php php*php/
php php php php publicphp functionphp sendMessagephp(php$queueIdphp,php php$messagephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>putMessagephp(
php php php php php php php php php php php php php php php php php$queueIdphp,php php$messagephp,php php$optionsphp[selfphp:php:MESSAGEphp_TTLphp]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp sendingphp messagephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Recievephp atphp mostphp php$maxphp messagesphp fromphp thephp specifiedphp queuephp andphp returnphp the
php php php php php php*php messagephp IDsphp forphp messagesphp recievedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php intphp php php php php$max
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Messagephp[php]
php php php php php php*php/
php php php php publicphp functionphp receiveMessagesphp(php$queueIdphp,php php$maxphp php=php php1php,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:VISIBILITYphp_TIMEOUTphp]php)php)php php{
php php php php php php php php php php php php php php php php php$visibilityphp php=php php$optionsphp[selfphp:php:VISIBILITYphp_TIMEOUTphp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$visibilityphp php=php selfphp:php:DEFAULTphp_TIMEOUTphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_makeMessagesphp(php$thisphp-php>php_storageClientphp-php>getMessagesphp(php$queueIdphp,php php$maxphp,php php$visibilityphp,php falsephp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp recievingphp messagesphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp Zendphp_Cloudphp_QueueServicephp_Messagephp arrayphp for
php php php php php php*php Azurephp messagesphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$messages
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Messagephp[php]
php php php php php php*php/
php php php php protectedphp functionphp php_makeMessagesphp(php$messagesphp)
php php php php php{
php php php php php php php php php$messageClassphp php=php php$thisphp-php>getMessageClassphp(php)php;
php php php php php php php php php$setClassphp php php php php php=php php$thisphp-php>getMessageSetClassphp(php)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$messagesphp asphp php$messagephp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php newphp php$messageClassphp(php$messagephp-php>MessageTextphp,php php$messagephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$setClassphp(php$resultphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp thephp specifiedphp messagephp fromphp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php Zendphp_Cloudphp_QueueServicephp_Messagephp php$messagephp Messagephp IDphp orphp message
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(php$queueIdphp,php php$messagephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$messagephp instanceofphp Zendphp_Cloudphp_QueueServicephp_Messagephp)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$messagephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$messagephp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessagephp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>deleteMessagephp(php$queueIdphp,php php$messagephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Cannotphp deletephp thephp messagephp:php messagephp objectphp requiredphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp deletingphp aphp messagephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Peekphp atphp thephp messagesphp fromphp thephp specifiedphp queuephp withoutphp removingphp themphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php intphp php$numphp Howphp manyphp messages
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Messagephp[php]
php php php php php php*php/
php php php php publicphp functionphp peekMessagesphp(php$queueIdphp,php php$numphp php=php php1php,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queueIdphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp)php php{
php php php php php php php php php php php php php php php php php$queueIdphp php=php php$queueIdphp-php>Namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_makeMessagesphp(php$thisphp-php>php_storageClientphp-php>peekMessagesphp(php$queueIdphp,php php$numphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp peekingphp messagesphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp implementation
php php php php php php*php php@returnphp Zendphp_Servicephp_Azurephp_Storagephp_Queue
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_storageClientphp;
php php php php php}
php}
