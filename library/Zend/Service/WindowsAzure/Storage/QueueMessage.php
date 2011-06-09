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
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php QueueMessagephp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_StorageEntityAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/StorageEntityAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*
php php*php php@propertyphp stringphp php$MessageIdphp php php php php php php php php Messagephp ID
php php*php php@propertyphp stringphp php$InsertionTimephp php php php php Insertionphp time
php php*php php@propertyphp stringphp php$ExpirationTimephp php php php Expirationphp time
php php*php php@propertyphp stringphp php$PopReceiptphp php php php php php php php php Receiptphp verificationphp forphp deletingphp thephp messagephp fromphp queuephp.
php php*php php@propertyphp stringphp php$TimeNextVisiblephp php php Nextphp timephp thephp messagephp isphp visiblephp inphp thephp queue
php php*php php@propertyphp intphp php php php php$DequeueCountphp php php php php php Numberphp ofphp timesphp thephp messagephp hasphp beenphp dequeuedphp.php Thisphp valuephp isphp incrementedphp eachphp timephp thephp messagephp isphp subsequentlyphp dequeuedphp.
php php*php php@propertyphp stringphp php$MessageTextphp php php php php php php Messagephp text
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessage
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_StorageEntityAbstract
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$messageIdphp php php php php php php php php Messagephp ID
php php php php php php*php php@paramphp stringphp php$insertionTimephp php php php php Insertionphp time
php php php php php php*php php@paramphp stringphp php$expirationTimephp php php php Expirationphp time
php php php php php php*php php@paramphp stringphp php$popReceiptphp php php php php php php php php php Receiptphp verificationphp forphp deletingphp thephp messagephp fromphp queuephp.
php php php php php php*php php@paramphp stringphp php$timeNextVisiblephp php php Nextphp timephp thephp messagephp isphp visiblephp inphp thephp queue
php php php php php php*php php@paramphp intphp php php php php$dequeueCountphp php php php php php Numberphp ofphp timesphp thephp messagephp hasphp beenphp dequeuedphp.php Thisphp valuephp isphp incrementedphp eachphp timephp thephp messagephp isphp subsequentlyphp dequeuedphp.
php php php php php php*php php@paramphp stringphp php$messageTextphp php php php php php php Messagephp text
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$messageIdphp,php php$insertionTimephp,php php$expirationTimephp,php php$popReceiptphp,php php$timeNextVisiblephp,php php$dequeueCountphp,php php$messageTextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(
php php php php php php php php php php php php php'messageidphp'php php php php php php php php=php>php php$messageIdphp,
php php php php php php php php php php php php php'insertiontimephp'php php php php=php>php php$insertionTimephp,
php php php php php php php php php php php php php'expirationtimephp'php php php=php>php php$expirationTimephp,
php php php php php php php php php php php php php'popreceiptphp'php php php php php php php=php>php php$popReceiptphp,
php php php php php php php php php php php php php'timenextvisiblephp'php php=php>php php$timeNextVisiblephp,
php php php php php php php php php php php php php'dequeuecountphp'php php php php php=php>php php$dequeueCountphp,
php php php php php php php php php php php php php'messagetextphp'php php php php php php=php>php php$messageText
php php php php php php php php php)php;
php php php php php}
php}
