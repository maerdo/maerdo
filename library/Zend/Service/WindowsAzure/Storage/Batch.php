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
php php*php php@versionphp php php php php$Idphp:php Batchphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_BatchStorageAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/BatchStorageAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php{php php php php 
php php php php php/php*php*
php php php php php php*php Storagephp clientphp thephp batchphp isphp definedphp on
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_BatchStorageAbstract
php php php php php php*php/
php php php php protectedphp php$php_storageClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Forphp tablephp storagephp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_forTableStoragephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Basephp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUrlphp;

php php php php php/php*php*
php php php php php php*php Pendingphp operations
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_operationsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Doesphp thephp batchphp containphp aphp singlephp selectphp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isSingleSelectphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_BatchStorageAbstractphp php$storageClientphp Storagephp clientphp thephp batchphp isphp definedphp on
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Servicephp_WindowsAzurephp_Storagephp_BatchStorageAbstractphp php$storageClientphp php=php nullphp,php php$baseUrlphp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_storageClientphp php=php php$storageClientphp;
php php php php php php php php php$thisphp-php>php_baseUrlphp php php php php php php php=php php$baseUrlphp;
php php php php php php php php php$thisphp-php>php_beginBatchphp(php)php;
php php php php php}

php	php/php*php*
php	php php*php Getphp basephp URLphp forphp creatingphp requests
php	php php*
php	php php*php php@returnphp string
php	php php*php/
php	publicphp functionphp getBaseUrlphp(php)
php	php{
php	php	returnphp php$thisphp-php>php_baseUrlphp;
php	php}

php php php php php/php*php*
php php php php php php*php Startsphp aphp newphp batchphp operationphp set
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_beginBatchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_storageClientphp-php>setCurrentBatchphp(php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanupphp currentphp batch
php php php php php php*php/
php php php php protectedphp functionphp php_cleanphp(php)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_operationsphp)php;
php php php php php php php php php$thisphp-php>php_storageClientphp-php>setCurrentBatchphp(nullphp)php;
php php php php php php php php php$thisphp-php>php_storageClientphp php=php nullphp;
php php php php php php php php unsetphp(php$thisphp)php;
php php php php php}

php	php/php*php*
php	php php*php Enlistphp operationphp inphp currentphp batch
php	php php*
php	php php*php php@paramphp stringphp php$pathphp Path
php	php php*php php@paramphp stringphp php$queryStringphp Queryphp string
php	php php*php php@paramphp stringphp php$httpVerbphp HTTPphp verbphp thephp requestphp willphp use
php	php php*php php@paramphp arrayphp php$headersphp xphp-msphp headersphp tophp add
php	php php*php php@paramphp booleanphp php$forTableStoragephp Isphp thephp requestphp forphp tablephp storagephp?
php	php php*php php@paramphp mixedphp php$rawDataphp Optionalphp RAWphp HTTPphp dataphp tophp bephp sentphp overphp thephp wire
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp enlistOperationphp(php$pathphp php=php php'php/php'php,php php$queryStringphp php=php php'php'php,php php$httpVerbphp php=php Zendphp_Httpphp_Clientphp:php:GETphp,php php$headersphp php=php arrayphp(php)php,php php$forTableStoragephp php=php falsephp,php php$rawDataphp php=php nullphp)
php	php{
php	php php php php php/php/php Setphp php_forTableStorage
php	php php php php ifphp php(php$forTableStoragephp)php php{
php	php php php php php php php php php$thisphp-php>php_forTableStoragephp php=php truephp;
php	php php php php php}
php	
php	php php php php php/php/php Setphp php_isSingleSelect
php	php php php php ifphp php(php$httpVerbphp php=php=php Zendphp_Httpphp_Clientphp:php:GETphp)php php{
php	php php php php php php php php ifphp php(countphp(php$thisphp-php>php_operationsphp)php php>php php0php)php php{
php	php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php"Selectphp operationsphp canphp onlyphp bephp performedphp inphp anphp emptyphp batchphp transactionphp.php"php)php;
php	php php php php php php php php php}
php	php php php php php php php php php$thisphp-php>php_isSingleSelectphp php=php truephp;
php	php php php php php}
php	
php	php php php php php/php/php Cleanphp path
php	php	ifphp php(strposphp(php$pathphp,php php'php/php'php)php php!php=php=php php0php)php php{
php	php	php	php$pathphp php=php php'php/php'php php.php php$pathphp;
php	php	php}
php	php	php	
php	php	php/php/php Cleanphp headers
php	php	ifphp php(php$headersphp php=php=php=php nullphp)php php{
php	php	php php php php php$headersphp php=php arrayphp(php)php;
php	php	php}
php	php	
php	php	php/php/php URLphp encoding
php	php	php$pathphp php php php php php php php php php php php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:urlencodephp(php$pathphp)php;
php	php	php$queryStringphp php php php php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:urlencodephp(php$queryStringphp)php;

php	php	php/php/php Generatephp URL
php	php	php$requestUrlphp php php php php php=php php$thisphp-php>getBaseUrlphp(php)php php.php php$pathphp php.php php$queryStringphp;
php	php	
php	php	php/php/php Generatephp php$rawData
php	php	ifphp php(php$rawDataphp php=php=php=php nullphp)php php{
php	php	php php php php php$rawDataphp php=php php'php'php;
php	php	php}
php	php	
php	php	php/php/php Addphp headers
php	php	ifphp php(php$httpVerbphp php!php=php Zendphp_Httpphp_Clientphp:php:GETphp)php php{
php php php php php	php	php$headersphp[php'Contentphp-IDphp'php]php php=php countphp(php$thisphp-php>php_operationsphp)php php+php php1php;
php php php php php	php	ifphp php(php$httpVerbphp php!php=php Zendphp_Httpphp_Clientphp:php:DELETEphp)php php{
php php php php php	php	php php php php php$headersphp[php'Contentphp-Typephp'php]php php=php php'applicationphp/atomphp+xmlphp;typephp=entryphp'php;
php php php php php	php	php}
php php php php php	php	php$headersphp[php'Contentphp-Lengthphp'php]php php=php strlenphp(php$rawDataphp)php;
php	php	php}
php	php	
php	php	php/php/php Generatephp php$operation
php	php	php$operationphp php=php php'php'php;
php	php	php$operationphp php.php=php php$httpVerbphp php.php php'php php'php php.php php$requestUrlphp php.php php'php HTTPphp/php1php.php1php'php php.php php"php\nphp"php;
php	php	foreachphp php(php$headersphp asphp php$keyphp php=php>php php$valuephp)
php	php	php{
php	php	php php php php php$operationphp php.php=php php$keyphp php.php php'php:php php'php php.php php$valuephp php.php php"php\nphp"php;
php	php	php}
php	php	php$operationphp php.php=php php"php\nphp"php;
php	php	
php	php	php/php/php Addphp data
php	php	php$operationphp php.php=php php$rawDataphp;

php	php	php/php/php Storephp operation
php	php	php$thisphp-php>php_operationsphp[php]php php=php php$operationphp;php	
php	php}

php php php php php/php*php*
php php php php php php*php Commitphp currentphp batch
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp commitphp(php)
php php php php php{
php php php php php php php php php/php/php Performphp batch
php php php php php php php php php$responsephp php=php php$thisphp-php>php_storageClientphp-php>performBatchphp(php$thisphp-php>php_operationsphp,php php$thisphp-php>php_forTableStoragephp,php php$thisphp-php>php_isSingleSelectphp)php;

php php php php php php php php php/php/php Dispose
php php php php php php php php php$thisphp-php>php_cleanphp(php)php;

php php php php php php php php php/php/php Parsephp response
php php php php php php php php php$errorsphp php=php nullphp;
php php php php php php php php pregphp_matchphp_allphp(php'php/php<messagephp php(php.php*php)php>php(php.php*php)<php\php/messagephp>php/php'php,php php$responsephp-php>getBodyphp(php)php,php php$errorsphp)php;

php php php php php php php php php/php/php Errorphp?
php php php php php php php php ifphp php(countphp(php$errorsphp[php2php]php)php php>php php0php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Anphp errorphp hasphp occuredphp whilephp committingphp aphp batchphp:php php'php php.php php$errorsphp[php2php]php[php0php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Return
php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollbackphp currentphp batch
php php php php php php*php/
php php php php publicphp functionphp rollbackphp(php)
php php php php php{
php php php php php php php php php/php/php Dispose
php php php php php php php php php$thisphp-php>php_cleanphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp operationphp count
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getOperationCountphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_operationsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp singlephp selectphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSingleSelectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isSingleSelectphp;
php php php php php}
php}
