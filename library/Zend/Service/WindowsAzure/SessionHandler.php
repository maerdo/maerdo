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
php php*php php@subpackagephp Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SessionHandlerphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Servicephp_WindowsAzurephp_Storagephp_Tablephp php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Tablephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_SessionHandler
php{
php php php php php/php*php*
php php php php php php*php Tablephp storage
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Table
php php php php php php*php/
php php php php protectedphp php$php_tableStoragephp;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sessionTablephp;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp partition
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sessionTablePartitionphp;
php php php php 
php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Servicephp_WindowsAzurephp_SessionHandlerphp instance
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Tablephp php$tableStoragephp Tablephp storage
php php php php php php*php php@paramphp stringphp php$sessionTablephp Sessionphp tablephp name
php php php php php php*php php@paramphp stringphp php$sessionTablePartitionphp Sessionphp tablephp partition
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Servicephp_WindowsAzurephp_Storagephp_Tablephp php$tableStoragephp,php php$sessionTablephp php=php php'phpsessionsphp'php,php php$sessionTablePartitionphp php=php php'sessionsphp'php)
php	php{
php	php php php php php/php/php Setphp properties
php	php	php$thisphp-php>php_tableStoragephp php=php php$tableStoragephp;
php	php	php$thisphp-php>php_sessionTablephp php=php php$sessionTablephp;
php	php	php$thisphp-php>php_sessionTablePartitionphp php=php php$sessionTablePartitionphp;
php	php}
php	
php	php/php*php*
php	php php*php Registersphp thephp currentphp sessionphp handlerphp asphp PHPphp'sphp sessionphp handler
php	php php*
php	php php*php php@returnphp boolean
php	php php*php/
php	publicphp functionphp registerphp(php)
php	php{
php php php php php php php php returnphp sessionphp_setphp_savephp_handlerphp(arrayphp(php$thisphp,php php'openphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp,php php'closephp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp,php php'readphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp,php php'writephp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp,php php'destroyphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp,php php'gcphp'php)
php php php php php php php php php)php;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Openphp thephp sessionphp store
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp openphp(php)
php php php php php{
php php php php php php php php php/php/php Makephp surephp tablephp exists
php php php php php php php php php$tableExistsphp php=php php$thisphp-php>php_tableStoragephp-php>tableExistsphp(php$thisphp-php>php_sessionTablephp)php;
php php php php php php php php ifphp php(php!php$tableExistsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tableStoragephp-php>createTablephp(php$thisphp-php>php_sessionTablephp)php;
php php php php php php php php php}
php php php php php php php php 
php php php php php php php php php/php/php Okphp!
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp sessionphp store
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp aphp specificphp session
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp Sessionphp Id
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php$idphp)
php php php php php{
php php php php php php php php try
php php php php php php php php php{
php php php php php php php php php php php php php$sessionRecordphp php=php php$thisphp-php>php_tableStoragephp-php>retrieveEntityByIdphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionTablephp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionTablePartitionphp,
php php php php php php php php php php php php php php php php php$id
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php returnphp basephp6php4php_decodephp(php$sessionRecordphp-php>serializedDataphp)php;
php php php php php php php php php}
php php php php php php php php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)
php php php php php php php php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp specificphp session
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp Sessionphp Id
php php php php php php*php php@paramphp stringphp php$serializedDataphp Serializedphp PHPphp object
php php php php php php*php/
php php php php publicphp functionphp writephp(php$idphp,php php$serializedDataphp)
php php php php php{
php php php php php php php php php$sessionRecordphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp(php$thisphp-php>php_sessionTablePartitionphp,php php$idphp)php;
php php php php php php php php php$sessionRecordphp-php>sessionExpiresphp php=php timephp(php)php;
php php php php php php php php php$sessionRecordphp-php>serializedDataphp php=php basephp6php4php_encodephp(php$serializedDataphp)php;

php php php php php php php php php$sessionRecordphp-php>setAzurePropertyTypephp(php'sessionExpiresphp'php,php php'Edmphp.Intphp3php2php'php)php;

php php php php php php php php try
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>php_tableStoragephp-php>updateEntityphp(php$thisphp-php>php_sessionTablephp,php php$sessionRecordphp)php;
php php php php php php php php php}
php php php php php php php php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$unknownRecordphp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>php_tableStoragephp-php>insertEntityphp(php$thisphp-php>php_sessionTablephp,php php$sessionRecordphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp aphp specificphp session
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp Sessionphp Id
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp destroyphp(php$idphp)
php php php php php{
php php php php php php php php try
php php php php php php php php php{
php php php php php php php php php php php php php$sessionRecordphp php=php php$thisphp-php>php_tableStoragephp-php>retrieveEntityByIdphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionTablephp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionTablePartitionphp,
php php php php php php php php php php php php php php php php php$id
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_tableStoragephp-php>deleteEntityphp(php$thisphp-php>php_sessionTablephp,php php$sessionRecordphp)php;

php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Garbagephp collector
php php php php php php*
php php php php php php*php php@paramphp intphp php$lifeTimephp Sessionphp maximalphp lifetime
php php php php php php*php php@seephp sessionphp.gcphp_divisorphp php php1php0php0
php php php php php php*php php@seephp sessionphp.gcphp_maxlifetimephp php1php4php4php0
php php php php php php*php php@seephp sessionphp.gcphp_probabilityphp php1
php php php php php php*php php@usagephp Executionphp ratephp php1php/php1php0php0php php(sessionphp.gcphp_probabilityphp/sessionphp.gcphp_divisorphp)
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp gcphp(php$lifeTimephp)
php php php php php{
php php php php php php php php try
php php php php php php php php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_tableStoragephp-php>retrieveEntitiesphp(php$thisphp-php>php_sessionTablephp,php php'PartitionKeyphp eqphp php\php'php'php php.php php$thisphp-php>php_sessionTablePartitionphp php.php php'php\php'php andphp sessionExpiresphp ltphp php'php php.php php(timephp(php)php php-php php$lifeTimephp)php)php;
php php php php php php php php php php php php foreachphp php(php$resultphp asphp php$sessionRecordphp)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_tableStoragephp-php>deleteEntityphp(php$thisphp-php>php_sessionTablephp,php php$sessionRecordphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php catchphp php(Zendphp_Servicephp_WindowsAzurephp_exceptionphp php$exphp)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}
php}
