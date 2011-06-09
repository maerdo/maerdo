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
php php*php php@versionphp php php php php$Idphp:php BatchStorageAbstractphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storage
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Credentialsphp/CredentialsAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Batchphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_BatchStorageAbstract
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Storage
php{php php php php 
php php php php php/php*php*
php php php php php php*php Currentphp batch
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php php php php php php*php/
php php php php protectedphp php$php_currentBatchphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setphp currentphp batch
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batchphp php$batchphp Currentphp batch
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCurrentBatchphp(Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batchphp php$batchphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$batchphp php!php=php=php nullphp php&php&php php$thisphp-php>isInBatchphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Onlyphp onephp batchphp canphp bephp activephp atphp aphp timephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_currentBatchphp php=php php$batchphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp batch
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php php php php php php*php/
php php php php publicphp functionphp getCurrentBatchphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentBatchphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp therephp aphp currentphp batchphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isInBatchphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentBatchphp php!php=php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startsphp aphp newphp batchphp operationphp set
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batch
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp startBatchphp(php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Batchphp(php$thisphp,php php$thisphp-php>getBaseUrlphp(php)php)php;
php php php php php}
php	
php	php/php*php*
php	php php*php Performphp batchphp usingphp Zendphp_Httpphp_Clientphp channelphp,php combiningphp allphp batchphp operationsphp intophp onephp request
php	php php*
php	php php*php php@paramphp arrayphp php$operationsphp Operationsphp inphp batch
php	php php*php php@paramphp booleanphp php$forTableStoragephp Isphp thephp requestphp forphp tablephp storagephp?
php	php php*php php@paramphp booleanphp php$isSingleSelectphp Isphp thephp requestphp aphp singlephp selectphp statementphp?
php	php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php	php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php	php php*php php@returnphp Zendphp_Httpphp_Response
php	php php*php/
php	publicphp functionphp performBatchphp(php$operationsphp php=php arrayphp(php)php,php php$forTableStoragephp php=php falsephp,php php$isSingleSelectphp php=php falsephp,php php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,php php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READphp)
php	php{
php	php php php php php/php/php Generatephp boundaries
php	php php php php php$batchBoundaryphp php=php php'batchphp_php'php php.php mdphp5php(timephp(php)php php.php microtimephp(php)php)php;
php	php php php php php$changesetBoundaryphp php=php php'changesetphp_php'php php.php mdphp5php(timephp(php)php php.php microtimephp(php)php)php;
php	
php	php php php php php/php/php Setphp headers
php	php php php php php$headersphp php=php arrayphp(php)php;
php	
php	php	php/php/php Addphp versionphp header
php	php	php$headersphp[php'xphp-msphp-versionphp'php]php php=php php$thisphp-php>php_apiVersionphp;
php	php	
php	php	php/php/php Addphp dataservicephp headers
php	php	php$headersphp[php'DataServiceVersionphp'php]php php=php php'php1php.php0php;NetFxphp'php;
php	php	php$headersphp[php'MaxDataServiceVersionphp'php]php php=php php'php1php.php0php;NetFxphp'php;
php	php	
php	php	php/php/php Addphp contentphp-typephp header
php	php	php$headersphp[php'Contentphp-Typephp'php]php php=php php'multipartphp/mixedphp;php boundaryphp=php'php php.php php$batchBoundaryphp;

php php php php php php php php php/php/php Setphp pathphp andphp queryphp string
php php php php php php php php php$pathphp php php php php php php php php php php php=php php'php/php$batchphp'php;
php php php php php php php php php$queryStringphp php php php php=php php'php'php;
php php php php php php php php 
php php php php php php php php php/php/php Setphp verb
php php php php php php php php php$httpVerbphp php=php Zendphp_Httpphp_Clientphp:php:POSTphp;
php php php php php php php php 
php php php php php php php php php/php/php Generatephp rawphp data
php php php php php php php php php$rawDataphp php=php php'php'php;
php php php php php php php php php php php php 
php php php php php php php php php/php/php Singlephp selectphp?
php php php php php php php php ifphp php(php$isSingleSelectphp)php php{
php php php php php php php php php php php php php$operationphp php=php php$operationsphp[php0php]php;
php php php php php php php php php php php php php$rawDataphp php.php=php php'php-php-php'php php.php php$batchBoundaryphp php.php php"php\nphp"php;
php php php php php php php php php php php php php$rawDataphp php.php=php php'Contentphp-Typephp:php applicationphp/httpphp'php php.php php"php\nphp"php;
php php php php php php php php php php php php php$rawDataphp php.php=php php'Contentphp-Transferphp-Encodingphp:php binaryphp'php php.php php"php\nphp\nphp"php;
php php php php php php php php php php php php php$rawDataphp php.php=php php$operationphp;
php php php php php php php php php php php php php$rawDataphp php.php=php php'php-php-php'php php.php php$batchBoundaryphp php.php php'php-php-php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$rawDataphp php.php=php php'php-php-php'php php.php php$batchBoundaryphp php.php php"php\nphp"php;
php php php php php php php php php php php php php$rawDataphp php.php=php php'Contentphp-Typephp:php multipartphp/mixedphp;php boundaryphp=php'php php.php php$changesetBoundaryphp php.php php"php\nphp\nphp"php;
php php php php php php php php php php php php 
php php php php php php php php php php php php php php php php php/php/php Addphp operations
php php php php php php php php php php php php php php php php foreachphp php(php$operationsphp asphp php$operationphp)
php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php php$rawDataphp php.php=php php'php-php-php'php php.php php$changesetBoundaryphp php.php php"php\nphp"php;
php php php php php php php php php php php php php php php php php	php$rawDataphp php.php=php php'Contentphp-Typephp:php applicationphp/httpphp'php php.php php"php\nphp"php;
php php php php php php php php php php php php php php php php php	php$rawDataphp php.php=php php'Contentphp-Transferphp-Encodingphp:php binaryphp'php php.php php"php\nphp\nphp"php;
php php php php php php php php php php php php php php php php php	php$rawDataphp php.php=php php$operationphp;
php php php php php php php php php	php	php}
php php php php php php php php php	php	php$rawDataphp php.php=php php'php-php-php'php php.php php$changesetBoundaryphp php.php php'php-php-php'php php.php php"php\nphp"php;
php php php php php	php	php php php php php	php	
php php php php php	php	php$rawDataphp php.php=php php'php-php-php'php php.php php$batchBoundaryphp php.php php'php-php-php'php;
php	php	php}

php php php php php php php php php/php/php Generatephp URLphp andphp signphp request
php php php php php php php php php$requestUrlphp php php php php php=php php$thisphp-php>php_credentialsphp-php>signRequestUrlphp(php$thisphp-php>getBaseUrlphp(php)php php.php php$pathphp php.php php$queryStringphp,php php$resourceTypephp,php php$requiredPermissionphp)php;
php php php php php php php php php$requestHeadersphp php=php php$thisphp-php>php_credentialsphp-php>signRequestHeadersphp(php$httpVerbphp,php php$pathphp,php php$queryStringphp,php php$headersphp,php php$forTableStoragephp,php php$resourceTypephp,php php$requiredPermissionphp)php;

php php php php php php php php php/php/php Preparephp request
php php php php php php php php php$thisphp-php>php_httpClientChannelphp-php>resetParametersphp(truephp)php;
php php php php php php php php php$thisphp-php>php_httpClientChannelphp-php>setUriphp(php$requestUrlphp)php;
php php php php php php php php php$thisphp-php>php_httpClientChannelphp-php>setHeadersphp(php$requestHeadersphp)php;
php php php php php php php php php$thisphp-php>php_httpClientChannelphp-php>setRawDataphp(php$rawDataphp)php;
php php php php php php php php 
php php php php php php php php php/php/php Executephp request
php php php php php php php php php$responsephp php=php php$thisphp-php>php_retryPolicyphp-php>executephp(
php php php php php php php php php php php php arrayphp(php$thisphp-php>php_httpClientChannelphp,php php'requestphp'php)php,
php php php php php php php php php php php php arrayphp(php$httpVerbphp)
php php php php php php php php php)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}
php}
