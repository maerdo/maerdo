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
php php*php php@licensephp php php php httpphp:php/php/todophp php php php php namephp_todo
php php*php php@versionphp php php php php$Idphp:php Queuephp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedKey
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Credentialsphp/SharedKeyphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryPolicyAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/RetryPolicyphp/RetryPolicyAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storage
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp.phpphp'php;

php/php*php*
php php*php Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstance
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/QueueInstancephp.phpphp'php;

php/php*php*
php php*php Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessage
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/QueueMessagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Queuephp extendsphp Zendphp_Servicephp_WindowsAzurephp_Storage
php{
php	php/php*php*
php	php php*php Maximalphp messagephp sizephp php(inphp bytesphp)
php	php php*php/
php	constphp MAXphp_MESSAGEphp_SIZEphp php=php php8php3php8php8php6php0php8php;
php	
php	php/php*php*
php	php php*php Maximalphp messagephp ttlphp php(inphp secondsphp)
php	php php*php/
php	constphp MAXphp_MESSAGEphp_TTLphp php=php php6php0php4php8php0php0php;
php	
php	php/php*php*
php	php php*php Createsphp aphp newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Queuephp instance
php	php php*
php	php php*php php@paramphp stringphp php$hostphp Storagephp hostphp name
php	php php*php php@paramphp stringphp php$accountNamephp Accountphp namephp forphp Windowsphp Azure
php	php php*php php@paramphp stringphp php$accountKeyphp Accountphp keyphp forphp Windowsphp Azure
php	php php*php php@paramphp booleanphp php$usePathStyleUriphp Usephp pathphp-stylephp URIphp's
php	php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryPolicyAbstractphp php$retryPolicyphp Retryphp policyphp tophp usephp whenphp makingphp requests
php	php php*php/
php	publicphp functionphp php_php_constructphp(php$hostphp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:URLphp_DEVphp_QUEUEphp,php php$accountNamephp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_ACCOUNTphp,php php$accountKeyphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_KEYphp,php php$usePathStyleUriphp php=php falsephp,php Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryPolicyAbstractphp php$retryPolicyphp php=php nullphp)
php	php{
php	php	parentphp:php:php_php_constructphp(php$hostphp,php php$accountNamephp,php php$accountKeyphp,php php$usePathStyleUriphp,php php$retryPolicyphp)php;
php	php	
php	php	php/php/php APIphp version
php	php	php$thisphp-php>php_apiVersionphp php=php php'php2php0php0php9php-php0php9php-php1php9php'php;
php	php}
php	
php	php/php*php*
php	php php*php Checkphp ifphp aphp queuephp exists
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp Queuephp name
php	php php*php php@returnphp boolean
php	php php*php/
php	publicphp functionphp queueExistsphp(php$queueNamephp php=php php'php'php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	php	
php	php	php/php/php Listphp queues
php php php php php php php php php$queuesphp php=php php$thisphp-php>listQueuesphp(php$queueNamephp,php php1php)php;
php php php php php php php php foreachphp php(php$queuesphp asphp php$queuephp)php php{
php php php php php php php php php php php php ifphp php(php$queuephp-php>Namephp php=php=php php$queueNamephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php	php}
php	
php	php/php*php*
php	php php*php Createphp queue
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp Queuephp name
php	php php*php php@paramphp arrayphp php php$metadataphp php Keyphp/valuephp pairsphp ofphp metaphp data
php	php php*php php@returnphp objectphp Queuephp properties
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp createQueuephp(php$queueNamephp php=php php'php'php,php php$metadataphp php=php arrayphp(php)php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	php	
php	php	php/php/php Createphp metadataphp headers
php	php	php$headersphp php=php arrayphp(php)php;
php	php	php$headersphp php=php arrayphp_mergephp(php$headersphp,php php$thisphp-php>php_generateMetadataHeadersphp(php$metadataphp)php)php;
php	php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp,php php'php'php,php Zendphp_Httpphp_Clientphp:php:PUTphp,php php$headersphp)php;php	
php	php	ifphp php(php$responsephp-php>isSuccessfulphp(php)php)php php{
php	php	php php php php returnphp newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp(
php	php	php php php php php php php php php$queueNamephp,
php	php	php php php php php php php php php$metadata
php	php	php php php php php)php;
php	php	php}php elsephp php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Getphp queue
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php Queuephp name
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstance
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp getQueuephp(php$queueNamephp php=php php'php'php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp,php php'php?compphp=metadataphp'php,php Zendphp_Httpphp_Clientphp:php:GETphp)php;php	
php	php	ifphp php(php$responsephp-php>isSuccessfulphp(php)php)php php{
php	php	php php php php php/php/php Parsephp metadata
php	php	php php php php php$metadataphp php=php php$thisphp-php>php_parseMetadataHeadersphp(php$responsephp-php>getHeadersphp(php)php)php;

php	php	php php php php php/php/php Returnphp queue
php	php	php php php php php$queuephp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp(
php	php	php php php php php php php php php$queueNamephp,
php	php	php php php php php php php php php$metadata
php	php	php php php php php)php;
php	php	php php php php php$queuephp-php>ApproximateMessageCountphp php=php intvalphp(php$responsephp-php>getHeaderphp(php'xphp-msphp-approximatephp-messagephp-countphp'php)php)php;
php	php	php php php php returnphp php$queuephp;
php	php	php}php elsephp php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Getphp queuephp metadata
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php Queuephp name
php	php php*php php@returnphp arrayphp Keyphp/valuephp pairsphp ofphp metaphp data
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp getQueueMetadataphp(php$queueNamephp php=php php'php'php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	php	
php	php php php php returnphp php$thisphp-php>getQueuephp(php$queueNamephp)php-php>Metadataphp;
php	php}
php	
php	php/php*php*
php	php php*php Setphp queuephp metadata
php	php php*
php	php php*php Callingphp thephp Setphp Queuephp Metadataphp operationphp overwritesphp allphp existingphp metadataphp thatphp isphp associatedphp withphp thephp queuephp.php Itphp'sphp notphp possiblephp tophp modifyphp anphp individualphp namephp/valuephp pairphp.
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php Queuephp name
php	php php*php php@paramphp arrayphp php php$metadataphp php php php php php php Keyphp/valuephp pairsphp ofphp metaphp data
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp setQueueMetadataphp(php$queueNamephp php=php php'php'php,php php$metadataphp php=php arrayphp(php)php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	ifphp php(countphp(php$metadataphp)php php=php=php php0php)php php{
php	php	php php php php returnphp;
php	php	php}
php	php	
php	php	php/php/php Createphp metadataphp headers
php	php	php$headersphp php=php arrayphp(php)php;
php	php	php$headersphp php=php arrayphp_mergephp(php$headersphp,php php$thisphp-php>php_generateMetadataHeadersphp(php$metadataphp)php)php;
php	php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp,php php'php?compphp=metadataphp'php,php Zendphp_Httpphp_Clientphp:php:PUTphp,php php$headersphp)php;

php php php php php php php php ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php php php php php php php php php}
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Deletephp queue
php php php php php php*
php php php php php php*php php@paramphp stringphp php$queueNamephp Queuephp name
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteQueuephp(php$queueNamephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php php php php 
php php php php php php php php php/php/php Performphp request
php php php php php php php php php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp,php php'php'php,php Zendphp_Httpphp_Clientphp:php:DELETEphp)php;
php php php php php php php php ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php php php php php php php php php}
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Listphp queues
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefixphp php php php php Optionalphp.php Filtersphp thephp resultsphp tophp returnphp onlyphp queuesphp whosephp namephp beginsphp withphp thephp specifiedphp prefixphp.
php php php php php php*php php@paramphp intphp php php php php$maxResultsphp Optionalphp.php Specifiesphp thephp maximumphp numberphp ofphp queuesphp tophp returnphp perphp callphp tophp Azurephp storagephp.php Thisphp doesphp NOTphp affectphp listphp sizephp returnedphp byphp thisphp functionphp.php php(maximumphp:php php5php0php0php0php)
php php php php php php*php php@paramphp stringphp php$markerphp php php php php Optionalphp stringphp valuephp thatphp identifiesphp thephp portionphp ofphp thephp listphp tophp bephp returnedphp withphp thephp nextphp listphp operationphp.
php php php php php php*php php@paramphp stringphp php$includephp php php php Optionalphp.php Includephp thisphp parameterphp tophp specifyphp thatphp thephp queuephp'sphp metadataphp bephp returnedphp asphp partphp ofphp thephp responsephp bodyphp.php php(allowedphp valuesphp:php php'php'php,php php'metadataphp'php)
php php php php php php*php php@paramphp intphp php php php php$currentResultCountphp Currentphp resultphp countphp php(internalphp usephp)
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp listQueuesphp(php$prefixphp php=php nullphp,php php$maxResultsphp php=php nullphp,php php$markerphp php=php nullphp,php php$includephp php=php nullphp,php php$currentResultCountphp php=php php0php)
php php php php php{
php php php php php php php php php/php/php Buildphp queryphp string
php php php php php php php php php$queryStringphp php=php arrayphp(php'compphp=listphp'php)php;
php php php php php php php php ifphp php(php$prefixphp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'prefixphp=php'php php.php php$prefixphp;
php php php php php php php php php}
php	php php php php ifphp php(php$maxResultsphp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'maxresultsphp=php'php php.php php$maxResultsphp;
php	php php php php php}
php	php php php php ifphp php(php$markerphp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'markerphp=php'php php.php php$markerphp;
php	php php php php php}
php	php	ifphp php(php$includephp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'includephp=php'php php.php php$includephp;
php	php php php php php}
php	php php php php php$queryStringphp php=php selfphp:php:createQueryStringFromArrayphp(php$queryStringphp)php;
php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php'php'php,php php$queryStringphp,php Zendphp_Httpphp_Clientphp:php:GETphp)php;php	
php	php	ifphp php(php$responsephp-php>isSuccessfulphp(php)php)php php{
php	php	php	php$xmlQueuesphp php=php php$thisphp-php>php_parseResponsephp(php$responsephp)php-php>Queuesphp-php>Queuephp;
php	php	php	php$xmlMarkerphp php=php php(stringphp)php$thisphp-php>php_parseResponsephp(php$responsephp)php-php>NextMarkerphp;

php	php	php	php$queuesphp php=php arrayphp(php)php;
php	php	php	ifphp php(php$xmlQueuesphp php!php=php=php nullphp)php php{
php	php	php	php	forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$xmlQueuesphp)php;php php$iphp+php+php)php php{
php	php	php	php	php	php$queuesphp[php]php php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueInstancephp(
php	php	php	php	php	php	php(stringphp)php$xmlQueuesphp[php$iphp]php-php>Namephp,
php	php	php	php	php	php	php$thisphp-php>php_parseMetadataElementphp(php$xmlQueuesphp[php$iphp]php)
php	php	php	php	php	php)php;
php	php	php	php	php}
php	php	php	php}
php	php	php	php$currentResultCountphp php=php php$currentResultCountphp php+php countphp(php$queuesphp)php;
php	php	php	ifphp php(php$maxResultsphp php!php=php=php nullphp php&php&php php$currentResultCountphp <php php$maxResultsphp)php php{
php php php php php	php	php	ifphp php(php$xmlMarkerphp php!php=php=php nullphp php&php&php php$xmlMarkerphp php!php=php php'php'php)php php{
php php php php php	php	php	php php php php php$queuesphp php=php arrayphp_mergephp(php$queuesphp,php php$thisphp-php>listQueuesphp(php$prefixphp,php php$maxResultsphp,php php$xmlMarkerphp,php php$includephp,php php$currentResultCountphp)php)php;
php php php php php	php	php	php}
php	php	php	php}
php	php	php	ifphp php(php$maxResultsphp php!php=php=php nullphp php&php&php countphp(php$queuesphp)php php>php php$maxResultsphp)php php{
php	php	php	php php php php php$queuesphp php=php arrayphp_slicephp(php$queuesphp,php php0php,php php$maxResultsphp)php;
php	php	php	php}
php	php	php	
php	php	php	returnphp php$queuesphp;
php	php	php}php elsephp php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Putphp messagephp intophp queue
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php Queuephp name
php	php php*php php@paramphp stringphp php$messagephp php php php Message
php	php php*php php@paramphp intphp php php php php$ttlphp php php php php php php php Messagephp Timephp-Tophp-Livephp php(inphp secondsphp)php.php Defaultsphp tophp php7php daysphp ifphp thephp parameterphp isphp omittedphp.
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp putMessagephp(php$queueNamephp php=php php'php'php,php php$messagephp php=php php'php'php,php php$ttlphp php=php nullphp)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	ifphp php(strlenphp(php$messagephp)php php>php selfphp:php:MAXphp_MESSAGEphp_SIZEphp)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Messagephp isphp toophp bigphp.php Messagephp contentphp shouldphp bephp <php php8KBphp.php'php)php;
php	php	php}
php	php	ifphp php(php$messagephp php=php=php php'php'php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Messagephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php$ttlphp php!php=php=php nullphp php&php&php php(php$ttlphp <php=php php0php php|php|php php$ttlphp php>php selfphp:php:MAXphp_MESSAGEphp_SIZEphp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Messagephp TTLphp isphp invalidphp.php Maximalphp TTLphp isphp php7php daysphp php(php'php php.php selfphp:php:MAXphp_MESSAGEphp_SIZEphp php.php php'php secondsphp)php andphp shouldphp bephp greaterphp thanphp zerophp.php'php)php;
php	php	php}
php	php	
php	php php php php php/php/php Buildphp queryphp string
php	php	php$queryStringphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$ttlphp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'messagettlphp=php'php php.php php$ttlphp;
php php php php php php php php php}
php	php php php php php$queryStringphp php=php selfphp:php:createQueryStringFromArrayphp(php$queryStringphp)php;
php	
php	php php php php php/php/php Buildphp body
php	php php php php php$rawDataphp php=php php'php'php;
php	php php php php php$rawDataphp php.php=php php'php<QueueMessagephp>php'php;
php	php php php php php$rawDataphp php.php=php php'php php php php php<MessageTextphp>php'php php.php basephp6php4php_encodephp(php$messagephp)php php.php php'<php/MessageTextphp>php'php;
php	php php php php php$rawDataphp php.php=php php'<php/QueueMessagephp>php'php;
php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp php.php php'php/messagesphp'php,php php$queryStringphp,php Zendphp_Httpphp_Clientphp:php:POSTphp,php arrayphp(php)php,php falsephp,php php$rawDataphp)php;

php	php	ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Errorphp puttingphp messagephp intophp queuephp.php'php)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Getphp queuephp messages
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php php php php php php php php Queuephp name
php	php php*php php@paramphp stringphp php$numOfMessagesphp php php php php Optionalphp.php Aphp nonzerophp integerphp valuephp thatphp specifiesphp thephp numberphp ofphp messagesphp tophp retrievephp fromphp thephp queuephp,php upphp tophp aphp maximumphp ofphp php3php2php.php Byphp defaultphp,php aphp singlephp messagephp isphp retrievedphp fromphp thephp queuephp withphp thisphp operationphp.
php	php php*php php@paramphp intphp php php php php$visibilityTimeoutphp Optionalphp.php Anphp integerphp valuephp thatphp specifiesphp thephp messagephp'sphp visibilityphp timeoutphp inphp secondsphp.php Thephp maximumphp valuephp isphp php2php hoursphp.php Thephp defaultphp messagephp visibilityphp timeoutphp isphp php3php0php secondsphp.
php	php php*php php@paramphp stringphp php$peekphp php php php php php php php php php php php php php Peekphp onlyphp?
php	php php*php php@returnphp array
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp getMessagesphp(php$queueNamephp php=php php'php'php,php php$numOfMessagesphp php=php php1php,php php$visibilityTimeoutphp php=php nullphp,php php$peekphp php=php falsephp)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}
php	php	ifphp php(php$numOfMessagesphp <php php1php php|php|php php$numOfMessagesphp php>php php3php2php php|php|php intvalphp(php$numOfMessagesphp)php php!php=php php$numOfMessagesphp)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Invalidphp numberphp ofphp messagesphp tophp retrievephp.php'php)php;
php	php	php}
php	php	ifphp php(php$visibilityTimeoutphp php!php=php=php nullphp php&php&php php(php$visibilityTimeoutphp <php=php php0php php|php|php php$visibilityTimeoutphp php>php php7php2php0php0php)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Visibilityphp timeoutphp isphp invalidphp.php Maximumphp valuephp isphp php2php hoursphp php(php7php2php0php0php secondsphp)php andphp shouldphp bephp greaterphp thanphp zerophp.php'php)php;
php	php	php}
php	php	
php	php php php php php/php/php Buildphp queryphp string
php	php	php$queryStringphp php=php arrayphp(php)php;
php php php php php	ifphp php(php$peekphp)php php{
php php php php php	php php php php php$queryStringphp[php]php php=php php'peekonlyphp=truephp'php;
php php php php php	php}
php php php php php	ifphp php(php$numOfMessagesphp php>php php1php)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'numofmessagesphp=php'php php.php php$numOfMessagesphp;
php php php php php	php}
php php php php php	ifphp php(php!php$peekphp php&php&php php$visibilityTimeoutphp php!php=php=php nullphp)php php{
php	php php php php php php php php php$queryStringphp[php]php php=php php'visibilitytimeoutphp=php'php php.php php$visibilityTimeoutphp;
php php php php php	php}
php	php php php php php$queryStringphp php=php selfphp:php:createQueryStringFromArrayphp(php$queryStringphp)php;
php	
php	php	php/php/php Performphp request
php	php	php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp php.php php'php/messagesphp'php,php php$queryStringphp,php Zendphp_Httpphp_Clientphp:php:GETphp)php;php	
php	php	ifphp php(php$responsephp-php>isSuccessfulphp(php)php)php php{
php	php	php php php php php/php/php Parsephp results
php	php	php	php$resultphp php=php php$thisphp-php>php_parseResponsephp(php$responsephp)php;
php	php	php php php php ifphp php(php!php$resultphp)php php{
php	php	php php php php php php php php returnphp arrayphp(php)php;
php	php	php php php php php}

php php php php php php php php php php php php php$xmlMessagesphp php=php nullphp;
php php php php php php php php php php php php ifphp php(countphp(php$resultphp-php>QueueMessagephp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php$xmlMessagesphp php=php php$resultphp-php>QueueMessagephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$xmlMessagesphp php=php arrayphp(php$resultphp-php>QueueMessagephp)php;
php php php php php php php php php php php php php}

php	php	php	php$messagesphp php=php arrayphp(php)php;
php	php	php	forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$xmlMessagesphp)php;php php$iphp+php+php)php php{
php	php	php	php	php$messagesphp[php]php php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessagephp(
php	php	php	php	php	php(stringphp)php$xmlMessagesphp[php$iphp]php-php>MessageIdphp,
php	php	php	php	php	php(stringphp)php$xmlMessagesphp[php$iphp]php-php>InsertionTimephp,
php	php	php	php	php	php(stringphp)php$xmlMessagesphp[php$iphp]php-php>ExpirationTimephp,
php	php	php	php	php	php(php$peekphp php?php php'php'php php:php php(stringphp)php$xmlMessagesphp[php$iphp]php-php>PopReceiptphp)php,
php	php	php	php	php	php(php$peekphp php?php php'php'php php:php php(stringphp)php$xmlMessagesphp[php$iphp]php-php>TimeNextVisiblephp)php,
php	php	php	php	php	php(stringphp)php$xmlMessagesphp[php$iphp]php-php>DequeueCountphp,
php	php	php	php	php	basephp6php4php_decodephp(php(stringphp)php$xmlMessagesphp[php$iphp]php-php>MessageTextphp)
php	php	php	php php php php php)php;
php	php	php	php}
php	php	php	
php	php	php	returnphp php$messagesphp;
php	php	php}php elsephp php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Peekphp queuephp messages
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php php php php php php php php Queuephp name
php	php php*php php@paramphp stringphp php$numOfMessagesphp php php php php Optionalphp.php Aphp nonzerophp integerphp valuephp thatphp specifiesphp thephp numberphp ofphp messagesphp tophp retrievephp fromphp thephp queuephp,php upphp tophp aphp maximumphp ofphp php3php2php.php Byphp defaultphp,php aphp singlephp messagephp isphp retrievedphp fromphp thephp queuephp withphp thisphp operationphp.
php	php php*php php@returnphp array
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp peekMessagesphp(php$queueNamephp php=php php'php'php,php php$numOfMessagesphp php=php php1php)
php	php{
php	php php php php returnphp php$thisphp-php>getMessagesphp(php$queueNamephp,php php$numOfMessagesphp,php nullphp,php truephp)php;
php	php}
php	
php	php/php*php*
php	php php*php Clearphp queuephp messages
php	php php*
php	php php*php php@paramphp stringphp php$queueNamephp php php php php php php php php Queuephp name
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php	php php*php/
php	publicphp functionphp clearMessagesphp(php$queueNamephp php=php php'php'php)
php	php{
php	php	ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php	php	php}
php	php	ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php	php	php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php	php	php}

php php php php php php php php php/php/php Performphp request
php php php php php php php php php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp php.php php'php/messagesphp'php,php php'php'php,php Zendphp_Httpphp_Clientphp:php:DELETEphp)php;php php php php 
php php php php php php php php ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Errorphp clearingphp messagesphp fromphp queuephp.php'php)php;
php php php php php php php php php}
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Deletephp queuephp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$queueNamephp php php php php php php php php php php php php php php php php php php php php php php php php php php php php Queuephp name
php php php php php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessagephp php$messagephp Messagephp tophp deletephp fromphp queuephp.php Aphp messagephp retrievedphp usingphp php"peekMessagesphp"php canphp NOTphp bephp deletedphp!
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(php$queueNamephp php=php php'php'php,php Zendphp_Servicephp_WindowsAzurephp_Storagephp_QueueMessagephp php$messagephp)
php php php php php{
php php php php php php php php ifphp php(php$queueNamephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp isphp notphp specifiedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!selfphp:php:isValidQueueNamephp(php$queueNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Queuephp namephp doesphp notphp adherephp tophp queuephp namingphp conventionsphp.php Seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ddphp1php7php9php3php4php9php.aspxphp forphp morephp informationphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$messagephp-php>PopReceiptphp php=php=php php'php'php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Aphp messagephp retrievedphp usingphp php"peekMessagesphp"php canphp NOTphp bephp deletedphp!php Usephp php"getMessagesphp"php insteadphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Performphp request
php php php php php php php php php$responsephp php=php php$thisphp-php>php_performRequestphp(php$queueNamephp php.php php'php/messagesphp/php'php php.php php$messagephp-php>MessageIdphp,php php'php?popreceiptphp=php'php php.php php$messagephp-php>PopReceiptphp,php Zendphp_Httpphp_Clientphp:php:DELETEphp)php;php php php php 
php php php php php php php php ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php$thisphp-php>php_getErrorMessagephp(php$responsephp,php php'Resourcephp couldphp notphp bephp accessedphp.php'php)php)php;
php php php php php php php php php}
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Isphp validphp queuephp namephp?
php php php php php php*
php php php php php php*php php@paramphp stringphp php$queueNamephp Queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isValidQueueNamephp(php$queueNamephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^php[aphp-zphp0php-php9php]php[aphp-zphp0php-php9php-php]php*php$php/php"php,php php$queueNamephp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$queueNamephp,php php'php-php-php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(strtolowerphp(php$queueNamephp)php php!php=php php$queueNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(strlenphp(php$queueNamephp)php <php php3php php|php|php strlenphp(php$queueNamephp)php php>php php6php3php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(substrphp(php$queueNamephp,php php-php1php)php php=php=php php'php-php'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php	php/php*php*
php	php php*php Getphp errorphp messagephp fromphp Zendphp_Httpphp_Response
php	php php*
php	php php*php php@paramphp Zendphp_Httpphp_Responsephp php$responsephp Repsonse
php	php php*php php@paramphp stringphp php$alternativeErrorphp Alternativephp errorphp message
php	php php*php php@returnphp string
php	php php*php/
php	protectedphp functionphp php_getErrorMessagephp(Zendphp_Httpphp_Responsephp php$responsephp,php php$alternativeErrorphp php=php php'Unknownphp errorphp.php'php)
php	php{
php	php	php$responsephp php=php php$thisphp-php>php_parseResponsephp(php$responsephp)php;
php	php	ifphp php(php$responsephp php&php&php php$responsephp-php>Messagephp)php php{
php	php	php php php php returnphp php(stringphp)php$responsephp-php>Messagephp;
php	php	php}php elsephp php{
php	php	php php php php returnphp php$alternativeErrorphp;
php	php	php}
php	php}
php}
