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

requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Adapterphp/AbstractAdapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Exceptionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Messagephp.phpphp'php;

php/php*php*
php php*php SQSphp adapterphp forphp simplephp queuephp servicephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_Sqs
php php php php extendsphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_AbstractAdapter
php{
php php php php php/php*
php php php php php php*php Optionsphp arrayphp keysphp forphp thephp SQSphp adapterphp.
php php php php php php*php/
php php php php constphp AWSphp_ACCESSphp_KEYphp php=php php'awsphp_accesskeyphp'php;
php php php php constphp AWSphp_SECRETphp_KEYphp php=php php'awsphp_secretkeyphp'php;

php php php php php/php*php*
php php php php php php*php Defaults
php php php php php php*php/
php php php php constphp CREATEphp_TIMEOUTphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php SQSphp servicephp instancephp.
php php php php php php*php php@varphp Zendphp_Servicephp_Amazonphp_Sqs
php php php php php php*php/
php php php php protectedphp php$php_sqsphp;

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

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_sqsphp php=php newphp Zendphp_Servicephp_Amazonphp_Sqsphp(
php php php php php php php php php php php php php php php php php$optionsphp[selfphp:php:AWSphp_ACCESSphp_KEYphp]php,php php$optionsphp[selfphp:php:AWSphp_SECRETphp_KEYphp]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp createphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sqsphp-php>getHttpClientphp(php)php-php>setAdapterphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php php/php*php*
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
php php php php php php php php php php php php returnphp php$thisphp-php>php_sqsphp-php>createphp(php$namephp,php php$optionsphp[selfphp:php:CREATEphp_TIMEOUTphp]php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
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
php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sqsphp-php>deletephp(php$queueIdphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp queuephp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sqsphp-php>getQueuesphp(php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
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
php php php php php php php php php php php php php/php/php TODOphp:php ZFphp-php9php0php5php0php Fixphp thephp SQSphp clientphp libraryphp inphp trunkphp tophp returnphp allphp attributephp values
php php php php php php php php php php php php php$attributesphp php=php php$thisphp-php>php_sqsphp-php>getAttributephp(php$queueIdphp,php php'Allphp'php)php;
php php php php php php php php php php php php ifphp(isphp_arrayphp(php$attributesphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$attributesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php'Allphp'php php=php>php php$thisphp-php>php_sqsphp-php>getAttributephp(php$queueIdphp,php php'Allphp'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp fetchingphp queuephp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp specifiedphp queuephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.php Somephp adaptersphp mayphp notphp supportphp thisphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$metadata
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeQueueMetadataphp(php$queueIdphp,php php$metadataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php TODOphp Addphp supportphp forphp SetQueueAttributesphp tophp clientphp library
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Amazonphp SQSphp doesnphp\php'tphp currentlyphp supportphp storingphp metadataphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp stringphp Messagephp ID
php php php php php php*php/
php php php php publicphp functionphp sendMessagephp(php$queueIdphp,php php$messagephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sqsphp-php>sendphp(php$queueIdphp,php php$messagephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
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
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp receiveMessagesphp(php$queueIdphp,php php$maxphp php=php php1php,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_makeMessagesphp(php$thisphp-php>php_sqsphp-php>receivephp(php$queueIdphp,php php$maxphp,php php$optionsphp[selfphp:php:VISIBILITYphp_TIMEOUTphp]php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp recievingphp messagesphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp Zendphp_Cloudphp_QueueServicephp_Messagephp arrayphp for
php php php php php php*php Sqsphp messagesphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$messages
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Messagephp[php]
php php php php php php*php/
php php php php protectedphp functionphp php_makeMessagesphp(php$messagesphp)
php php php php php{
php php php php php php php php php$messageClassphp php=php php$thisphp-php>getMessageClassphp(php)php;
php php php php php php php php php$setClassphp php php php php php=php php$thisphp-php>getMessageSetClassphp(php)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$messagesphp asphp php$messagephp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php newphp php$messageClassphp(php$messagephp[php'bodyphp'php]php,php php$messagephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$setClassphp(php$resultphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp thephp specifiedphp messagephp fromphp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php Zendphp_Cloudphp_QueueServicephp_Messagephp php$message
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(php$queueIdphp,php php$messagephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp(php$messagephp instanceofphp Zendphp_Cloudphp_QueueServicephp_Messagephp)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$messagephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$messageIdphp php=php php$messagephp[php'handlephp'php]php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_sqsphp-php>deleteMessagephp(php$queueIdphp,php php$messageIdphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
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
php php php php php php php php php php php php returnphp php$thisphp-php>php_makeMessagesphp(php$thisphp-php>php_sqsphp-php>receivephp(php$queueIdphp,php php$numphp,php php0php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Errorphp onphp peekingphp messagesphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp SQSphp implementation
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sqs
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sqsphp;
php php php php php}
php}
