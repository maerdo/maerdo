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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazonphp_Sqs
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Sqsphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php Classphp forphp connectingphp tophp thephp Amazonphp Simplephp Queuephp Servicephp php(SQSphp)
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazonphp_Sqs
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@seephp php php php php php php php httpphp:php/php/awsphp.amazonphp.comphp/sqsphp/php Amazonphp Simplephp Queuephp Service
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Sqsphp extendsphp Zendphp_Servicephp_Amazonphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp forphp createQueuephp(php)php function
php php php php php php*php/
php php php php constphp CREATEphp_TIMEOUTphp_DEFAULTphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php HTTPphp endphp pointphp forphp thephp Amazonphp SQSphp service
php php php php php php*php/
php php php php protectedphp php$php_sqsEndpointphp php=php php'queuephp.amazonawsphp.comphp'php;

php php php php php/php*php*
php php php php php php*php Thephp APIphp versionphp tophp use
php php php php php php*php/
php php php php protectedphp php$php_sqsApiVersionphp php=php php'php2php0php0php9php-php0php2php-php0php1php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Version
php php php php php php*php/
php php php php protectedphp php$php_sqsSignatureVersionphp php=php php'php2php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Encodingphp Method
php php php php php php*php/
php php php php protectedphp php$php_sqsSignatureMethodphp php=php php'HmacSHAphp2php5php6php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$accessKey
php php php php php php*php php@paramphp stringphp php$secretKey
php php php php php php*php php@paramphp stringphp php$region
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$accessKeyphp php=php nullphp,php php$secretKeyphp php=php nullphp,php php$regionphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$accessKeyphp,php php$secretKeyphp,php php$regionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp queue
php php php php php php*
php php php php php php*php Visibilityphp timeoutphp isphp howphp longphp aphp messagephp isphp leftphp inphp thephp queuephp php"invisiblephp"
php php php php php php*php tophp otherphp readersphp.php php Ifphp thephp messagephp isphp acknowlegedphp php(deletedphp)php beforephp the
php php php php php php*php timeoutphp,php thenphp thephp messagephp isphp deletedphp.php php Howeverphp,php ifphp thephp timeoutphp expires
php php php php php php*php thenphp thephp messagephp willphp bephp madephp availablephp tophp otherphp queuephp readersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$queuephp_namephp queuephp name
php php php php php php*php php@paramphp php integerphp php$timeoutphp php php php defaultphp visibilityphp timeout
php php php php php php*php php@returnphp stringphp|boolean
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp createphp(php$queuephp_namephp,php php$timeoutphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'QueueNamephp'php]php php=php php$queuephp_namephp;
php php php php php php php php php$timeoutphp php=php php(php$timeoutphp php=php=php=php nullphp)php php?php selfphp:php:CREATEphp_TIMEOUTphp_DEFAULTphp php:php php(intphp)php$timeoutphp;
php php php php php php php php php$paramsphp[php'DefaultVisibilityTimeoutphp'php]php php=php php$timeoutphp;

php php php php php php php php php$retryphp_countphp php=php php0php;

php php php php php php php php dophp php{
php php php php php php php php php php php php php$retryphp php php=php falsephp;
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(nullphp,php php'CreateQueuephp'php,php php$paramsphp)php;

php php php php php php php php php php php php ifphp php(php!issetphp(php$resultphp-php>CreateQueueResultphp-php>QueueUrlphp)
php php php php php php php php php php php php php php php php php|php|php emptyphp(php$resultphp-php>CreateQueueResultphp-php>QueueUrlphp)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$resultphp-php>Errorphp-php>Codephp php=php=php php'AWSphp.SimpleQueueServicephp.QueueNameExistsphp'php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$resultphp-php>Errorphp-php>Codephp php=php=php php'AWSphp.SimpleQueueServicephp.QueueDeletedRecentlyphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Mustphp sleepphp forphp php6php0php secondsphp,php thenphp tryphp rephp-creatingphp thephp queue
php php php php php php php php php php php php php php php php php php php php sleepphp(php6php0php)php;
php php php php php php php php php php php php php php php php php php php php php$retryphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$retryphp_countphp+php+php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php(stringphp)php php$resultphp-php>CreateQueueResultphp-php>QueueUrlphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php whilephp php(php$retryphp)php;

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itphp'sphp messages
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp queuephp isphp notphp foundphp,php truephp ifphp thephp queuephp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$queuephp_urlphp queuephp URL
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$queuephp_urlphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(php$queuephp_urlphp,php php'DeleteQueuephp'php)php;

php php php php php php php php ifphp php(php$resultphp-php>Errorphp-php>Codephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(nullphp,php php'ListQueuesphp'php)php;

php php php php php php php php ifphp php(issetphp(php$resultphp-php>Errorphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$resultphp-php>ListQueuesResultphp-php>QueueUrlphp)
php php php php php php php php php php php php php|php|php emptyphp(php$resultphp-php>ListQueuesResultphp-php>QueueUrlphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$queuesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultphp-php>ListQueuesResultphp-php>QueueUrlphp asphp php$queuephp_urlphp)php php{
php php php php php php php php php php php php php$queuesphp[php]php php=php php(stringphp)php$queuephp_urlphp;
php php php php php php php php php}

php php php php php php php php returnphp php$queuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$queuephp_urlphp Queuephp URL
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp countphp(php$queuephp_urlphp)
php php php php php{
php php php php php php php php returnphp php(intphp)php$thisphp-php>getAttributephp(php$queuephp_urlphp,php php'ApproximateNumberOfMessagesphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp Queuephp URL
php php php php php php*php php@paramphp php stringphp php$messagephp php php Messagephp tophp sendphp tophp thephp queue
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php Messagephp ID
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$queuephp_urlphp,php php$messagephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'MessageBodyphp'php]php php=php urlencodephp(php$messagephp)php;

php php php php php php php php php$checksumphp php=php mdphp5php(php$paramsphp[php'MessageBodyphp'php]php)php;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(php$queuephp_urlphp,php php'SendMessagephp'php,php php$paramsphp)php;

php php php php php php php php ifphp php(php!issetphp(php$resultphp-php>SendMessageResultphp-php>MessageIdphp)
php php php php php php php php php php php php php|php|php emptyphp(php$resultphp-php>SendMessageResultphp-php>MessageIdphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php}php elsephp ifphp php(php(stringphp)php php$resultphp-php>SendMessageResultphp-php>MDphp5OfMessageBodyphp php!php=php php$checksumphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php'MDphp5php ofphp bodyphp doesphp notphp matchphp messagephp sentphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php php$resultphp-php>SendMessageResultphp-php>MessageIdphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$queuephp_urlphp php php php Queuephp name
php php php php php php*php php@paramphp php integerphp php$maxphp_messagesphp Maximumphp numberphp ofphp messagesphp tophp return
php php php php php php*php php@paramphp php integerphp php$timeoutphp php php php php php Visibilityphp timeoutphp forphp thesephp messages
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$queuephp_urlphp,php php$maxphp_messagesphp php=php nullphp,php php$timeoutphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Ifphp notphp setphp,php thephp visibilityphp timeoutphp onphp thephp queuephp isphp used
php php php php php php php php ifphp php(php$timeoutphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp[php'VisibilityTimeoutphp'php]php php=php php(intphp)php$timeoutphp;
php php php php php php php php php}

php php php php php php php php php/php/php SQSphp willphp defaultphp tophp onlyphp returningphp onephp message
php php php php php php php php ifphp php(php$maxphp_messagesphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp[php'MaxNumberOfMessagesphp'php]php php=php php(intphp)php$maxphp_messagesphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(php$queuephp_urlphp,php php'ReceiveMessagephp'php,php php$paramsphp)php;

php php php php php php php php ifphp php(issetphp(php$resultphp-php>Errorphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$resultphp-php>ReceiveMessageResultphp-php>Messagephp)
php php php php php php php php php php php php php|php|php emptyphp(php$resultphp-php>ReceiveMessageResultphp-php>Messagephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php/php/php nophp messagesphp found
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultphp-php>ReceiveMessageResultphp-php>Messagephp asphp php$messagephp)php php{
php php php php php php php php php php php php php$dataphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'messagephp_idphp'php php=php>php php(stringphp)php$messagephp-php>MessageIdphp,
php php php php php php php php php php php php php php php php php'handlephp'php php php php php php=php>php php(stringphp)php$messagephp-php>ReceiptHandlephp,
php php php php php php php php php php php php php php php php php'mdphp5php'php php php php php php php php php=php>php php(stringphp)php$messagephp-php>MDphp5OfBodyphp,
php php php php php php php php php php php php php php php php php'bodyphp'php php php php php php php php=php>php urldecodephp(php(stringphp)php$messagephp-php>Bodyphp)php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp messagephp fromphp thephp queue
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp messagephp isphp deletedphp,php falsephp ifphp thephp deletionphp is
php php php php php php*php unsuccessfulphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp php Queuephp URL
php php php php php php*php php@paramphp php stringphp php$handlephp php php php php Messagephp handlephp asphp returnedphp byphp SQS
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(php$queuephp_urlphp,php php$handlephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'ReceiptHandlephp'php]php php=php php(stringphp)php$handlephp;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(php$queuephp_urlphp,php php'DeleteMessagephp'php,php php$paramsphp)php;

php php php php php php php php ifphp php(issetphp(php$resultphp-php>Errorphp-php>Codephp)
php php php php php php php php php php php php php&php&php php!emptyphp(php$resultphp-php>Errorphp-php>Codephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Willphp alwaysphp returnphp truephp unlessphp ReceiptHandlephp isphp malformed
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp attributesphp forphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp php Queuephp URL
php php php php php php*php php@paramphp php stringphp php$attribute
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getAttributephp(php$queuephp_urlphp,php php$attributephp php=php php'Allphp'php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'AttributeNamephp'php]php php=php php$attributephp;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_makeRequestphp(php$queuephp_urlphp,php php'GetQueueAttributesphp'php,php php$paramsphp)php;

php php php php php php php php ifphp php(php!issetphp(php$resultphp-php>GetQueueAttributesResultphp-php>Attributephp)
php php php php php php php php php php php php php|php|php emptyphp(php$resultphp-php>GetQueueAttributesResultphp-php>Attributephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sqsphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sqsphp_Exceptionphp(php$resultphp-php>Errorphp-php>Codephp)php;
php php php php php php php php php}

php php php php php php php php ifphp(countphp(php$resultphp-php>GetQueueAttributesResultphp-php>Attributephp)php php>php php1php)php php{
php php php php php php php php php php php php php$attrphp_resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp(php$resultphp-php>GetQueueAttributesResultphp-php>Attributephp asphp php$attributephp)php php{
php php php php php php php php php php php php php php php php php$attrphp_resultphp[php(stringphp)php$attributephp-php>Namephp]php php=php php(stringphp)php$attributephp-php>Valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$attrphp_resultphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php(stringphp)php php$resultphp-php>GetQueueAttributesResultphp-php>Attributephp-php>Valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp requestphp tophp Amazonphp SQS
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php$queuephp php Queuephp Name
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php$actionphp SQSphp action
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php$params
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php privatephp functionphp php_makeRequestphp(php$queuephp_urlphp,php php$actionphp,php php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php$actionphp;
php php php php php php php php php$paramsphp php=php php$thisphp-php>addRequiredParametersphp(php$queuephp_urlphp,php php$paramsphp)php;

php php php php php php php php ifphp php(php$queuephp_urlphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$queuephp_urlphp php=php php'php/php'php;
php php php php php php php php php}

php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;

php php php php php php php php switchphp php(php$actionphp)php php{
php php php php php php php php php php php php casephp php'ListQueuesphp'php:
php php php php php php php php php php php php casephp php'CreateQueuephp'php:
php php php php php php php php php php php php php php php php php$clientphp-php>setUriphp(php'httpphp:php/php/php'php.php$thisphp-php>php_sqsEndpointphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$clientphp-php>setUriphp(php$queuephp_urlphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$retryphp_countphp php=php php0php;

php php php php php php php php dophp php{
php php php php php php php php php php php php php$retryphp php=php falsephp;

php php php php php php php php php php php php php$clientphp-php>resetParametersphp(php)php;
php php php php php php php php php php php php php$clientphp-php>setParameterGetphp(php$paramsphp)php;

php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'GETphp'php)php;

php php php php php php php php php php php php php$responsephp_codephp php=php php$responsephp-php>getStatusphp(php)php;

php php php php php php php php php php php php php/php/php Somephp php5xxphp errorsphp arephp expectedphp,php sophp retryphp automatically
php php php php php php php php php php php php ifphp php(php$responsephp_codephp php>php=php php5php0php0php php&php&php php$responsephp_codephp <php php6php0php0php php&php&php php$retryphp_countphp <php=php php5php)php php{
php php php php php php php php php php php php php php php php php$retryphp php=php truephp;
php php php php php php php php php php php php php php php php php$retryphp_countphp+php+php;
php php php php php php php php php php php php php php php php sleepphp(php$retryphp_countphp php/php php4php php*php php$retryphp_countphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(php$retryphp)php;

php php php php php php php php unsetphp(php$clientphp)php;

php php php php php php php php returnphp newphp SimpleXMLElementphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp requiredphp authenticationphp andphp versionphp parametersphp tophp anphp arrayphp of
php php php php php php*php parameters
php php php php php php*
php php php php php php*php Thephp requiredphp parametersphp arephp:
php php php php php php*php php-php AWSAccessKey
php php php php php php*php php-php SignatureVersion
php php php php php php*php php-php Timestamp
php php php php php php*php php-php Versionphp and
php php php php php php*php php-php Signature
php php php php php php*
php php php php php php*php Ifphp aphp requiredphp parameterphp isphp alreadyphp setphp inphp thephp php<ttphp>php$parameters<php/ttphp>php arrayphp,
php php php php php php*php itphp isphp overwrittenphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp php Queuephp URL
php php php php php php*php php@paramphp php arrayphp php php$parametersphp thephp arrayphp tophp whichphp tophp addphp thephp required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php parametersphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp addRequiredParametersphp(php$queuephp_urlphp,php arrayphp php$parametersphp)
php php php php php{
php php php php php php php php php$parametersphp[php'AWSAccessKeyIdphp'php]php php php php=php php$thisphp-php>php_getAccessKeyphp(php)php;
php php php php php php php php php$parametersphp[php'SignatureVersionphp'php]php php=php php$thisphp-php>php_sqsSignatureVersionphp;
php php php php php php php php php$parametersphp[php'Timestampphp'php]php php php php php php php php php=php gmdatephp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php,php timephp(php)php+php1php0php)php;
php php php php php php php php php$parametersphp[php'Versionphp'php]php php php php php php php php php php php=php php$thisphp-php>php_sqsApiVersionphp;
php php php php php php php php php$parametersphp[php'SignatureMethodphp'php]php php php=php php$thisphp-php>php_sqsSignatureMethodphp;
php php php php php php php php php$parametersphp[php'Signaturephp'php]php php php php php php php php php=php php$thisphp-php>php_signParametersphp(php$queuephp_urlphp,php php$parametersphp)php;

php php php php php php php php returnphp php$parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computesphp thephp RFCphp php2php1php0php4php-compliantphp HMACphp signaturephp forphp requestphp parameters
php php php php php php*
php php php php php php*php Thisphp implementsphp thephp Amazonphp Webphp Servicesphp signaturephp,php asphp perphp thephp following
php php php php php php*php specificationphp:
php php php php php php*
php php php php php php*php php1php.php Sortphp allphp requestphp parametersphp php(includingphp php<ttphp>SignatureVersion<php/ttphp>php and
php php php php php php*php php php php excludingphp php<ttphp>Signature<php/ttphp>php,php thephp valuephp ofphp whichphp isphp beingphp createdphp)php,
php php php php php php*php php php php ignoringphp casephp.
php php php php php php*
php php php php php php*php php2php.php Iteratephp overphp thephp sortedphp listphp andphp appendphp thephp parameterphp namephp php(inphp its
php php php php php php*php php php php originalphp casephp)php andphp thenphp itsphp valuephp.php Dophp notphp URLphp-encodephp thephp parameter
php php php php php php*php php php php valuesphp beforephp constructingphp thisphp stringphp.php Dophp notphp usephp anyphp separator
php php php php php php*php php php php charactersphp whenphp appendingphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp php Queuephp URL
php php php php php php*php php@paramphp php arrayphp php php$parametersphp thephp parametersphp forphp whichphp tophp getphp thephp signaturephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp signedphp dataphp.
php php php php php php*php/
php php php php protectedphp functionphp php_signParametersphp(php$queuephp_urlphp,php arrayphp php$paramatersphp)
php php php php php{
php php php php php php php php php$dataphp php=php php"GETphp\nphp"php;
php php php php php php php php php$dataphp php.php=php php$thisphp-php>php_sqsEndpointphp php.php php"php\nphp"php;
php php php php php php php php ifphp php(php$queuephp_urlphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataphp php.php=php parsephp_urlphp(php$queuephp_urlphp,php PHPphp_URLphp_PATHphp)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$dataphp php.php=php php'php/php'php;
php php php php php php php php php}
php php php php php php php php php$dataphp php.php=php php"php\nphp"php;

php php php php php php php php uksortphp(php$paramatersphp,php php'strcmpphp'php)php;
php php php php php php php php unsetphp(php$paramatersphp[php'Signaturephp'php]php)php;

php php php php php php php php php$arrDataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$paramatersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$arrDataphp[php]php php=php php$keyphp php.php php'php=php'php php.php strphp_replacephp(php'php%php7Ephp'php,php php'php~php'php,php urlencodephp(php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php.php=php implodephp(php'php&php'php,php php$arrDataphp)php;

php php php php php php php php php$hmacphp php=php Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_getSecretKeyphp(php)php,php php'SHAphp2php5php6php'php,php php$dataphp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php;

php php php php php php php php returnphp basephp6php4php_encodephp(php$hmacphp)php;
php php php php php}
php}
