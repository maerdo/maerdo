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
php php*php php@versionphp php php php php$Idphp:php TableEntityphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

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
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntity
php{
php php php php constphp DEFAULTphp_TIMESTAMPphp php=php php'php1php9php0php0php-php0php1php-php0php1Tphp0php0php:php0php0php:php0php0php'php;

php php php php php/php*php*
php php php php php php*php Partitionphp key
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_partitionKeyphp;

php php php php php/php*php*
php php php php php php*php Rowphp key
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rowKeyphp;

php php php php php/php*php*
php php php php php php*php Timestamp
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_timestampphp;

php php php php php/php*php*
php php php php php php*php Etag
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_etagphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$partitionKeyphp php php php Partitionphp key
php php php php php php*php php@paramphp stringphp php php$rowKeyphp php php php php php php php php php Rowphp key
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$partitionKeyphp php=php php'php'php,php php$rowKeyphp php=php php'php'php)
php php php php php{php	
php php php php php php php php php$thisphp-php>php_partitionKeyphp php=php php$partitionKeyphp;
php php php php php php php php php$thisphp-php>php_rowKeyphp php php php php php php php=php php$rowKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp partitionphp key
php php php php php php*
php php php php php php*php php@azurephp PartitionKey
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPartitionKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partitionKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp partitionphp key
php php php php php php*
php php php php php php*php php@azurephp PartitionKey
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp setPartitionKeyphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_partitionKeyphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp rowphp key
php php php php php php*
php php php php php php*php php@azurephp RowKey
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRowKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rowKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rowphp key
php php php php php php*
php php php php php php*php php@azurephp RowKey
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp setRowKeyphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rowKeyphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp timestamp
php php php php php php*
php php php php php php*php php@azurephp Timestampphp Edmphp.DateTime
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTimestampphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_timestampphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTimestampphp(selfphp:php:DEFAULTphp_TIMESTAMPphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_timestampphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp timestamp
php php php php php php*
php php php php php php*php php@azurephp Timestampphp Edmphp.DateTime
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp setTimestampphp(php$valuephp php=php php'php1php9php0php0php-php0php1php-php0php1Tphp0php0php:php0php0php:php0php0php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_timestampphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp etag
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEtagphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_etagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp etag
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp setEtagphp(php$valuephp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_etagphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp values
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAzureValuesphp(php)
php php php php php{
php php php php php php php php php/php/php Getphp accessors
php php php php php php php php php$accessorsphp php=php selfphp:php:getAzureAccessorsphp(getphp_classphp(php$thisphp)php)php;

php php php php php php php php php/php/php Loopphp accessorsphp andphp retrievephp values
php php php php php php php php php$returnValuephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$accessorsphp asphp php$accessorphp)php php{
php php php php php php php php php php php php ifphp php(php$accessorphp-php>EntityTypephp php=php=php php'ReflectionPropertyphp'php)php php{
php php php php php php php php php php php php php php php php php$propertyphp php=php php$accessorphp-php>EntityAccessorphp;
php php php php php php php php php php php php php php php php php$returnValuephp[php]php php=php php(objectphp)arrayphp(
php php php php php php php php php php php php php php php php php php php php php'Namephp'php php php=php>php php$accessorphp-php>AzurePropertyNamephp,
php php php php php php php php php php php php php php php php php php php php php'Typephp'php php php=php>php php$accessorphp-php>AzurePropertyTypephp,
php php php php php php php php php php php php php php php php php php php php php'Valuephp'php php=php>php php$thisphp-php>php$propertyphp,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$accessorphp-php>EntityTypephp php=php=php php'ReflectionMethodphp'php php&php&php substrphp(strtolowerphp(php$accessorphp-php>EntityAccessorphp)php,php php0php,php php3php)php php=php=php php'getphp'php)php php{
php php php php php php php php php php php php php php php php php$methodphp php=php php$accessorphp-php>EntityAccessorphp;
php php php php php php php php php php php php php php php php php$returnValuephp[php]php php=php php(objectphp)arrayphp(
php php php php php php php php php php php php php php php php php php php php php'Namephp'php php php=php>php php$accessorphp-php>AzurePropertyNamephp,
php php php php php php php php php php php php php php php php php php php php php'Typephp'php php php=php>php php$accessorphp-php>AzurePropertyTypephp,
php php php php php php php php php php php php php php php php php php php php php'Valuephp'php php=php>php php$thisphp-php>php$methodphp(php)php,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Return
php php php php php php php php returnphp php$returnValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Azurephp values
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$values
php php php php php php*php php@paramphp booleanphp php$throwOnErrorphp Throwphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp whenphp aphp propertyphp isphp notphp specifiedphp inphp php$valuesphp?
php php php php php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAzureValuesphp(php$valuesphp php=php arrayphp(php)php,php php$throwOnErrorphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Getphp accessors
php php php php php php php php php$accessorsphp php=php selfphp:php:getAzureAccessorsphp(getphp_classphp(php$thisphp)php)php;

php php php php php php php php php/php/php Loopphp accessorsphp andphp setphp values
php php php php php php php php php$returnValuephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$accessorsphp asphp php$accessorphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Castphp tophp correctphp type
php php php php php php php php php php php php php php php php ifphp php(php$accessorphp-php>AzurePropertyTypephp php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php switchphp php(strtolowerphp(php$accessorphp-php>AzurePropertyTypephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'edmphp.intphp3php2php'php:
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'edmphp.intphp6php4php'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php intvalphp(php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php)php;php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'edmphp.booleanphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php=php php'truephp'php php|php|php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php=php php'php1php'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php else
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'edmphp.doublephp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php php=php floatvalphp(php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php)php;php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Assignphp value
php php php php php php php php php php php php php php php php ifphp php(php$accessorphp-php>EntityTypephp php=php=php php'ReflectionPropertyphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$propertyphp php=php php$accessorphp-php>EntityAccessorphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$propertyphp php=php php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$accessorphp-php>EntityTypephp php=php=php php'ReflectionMethodphp'php php&php&php substrphp(strtolowerphp(php$accessorphp-php>EntityAccessorphp)php,php php0php,php php3php)php php=php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$methodphp php=php php$accessorphp-php>EntityAccessorphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuesphp[php$accessorphp-php>AzurePropertyNamephp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$throwOnErrorphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php"Propertyphp php'php"php php.php php$accessorphp-php>AzurePropertyNamephp php.php php"php'php wasphp notphp foundphp inphp php\php$valuesphp arrayphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Return
php php php php php php php php returnphp php$returnValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp accessorsphp fromphp class
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classNamephp Classphp tophp getphp accessorsphp for
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getAzureAccessorsphp(php$classNamephp php=php php'php'php)
php php php php php{
php php php php php php php php php/php/php Listphp ofphp accessors
php php php php php php php php php$azureAccessorsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Getphp allphp types
php php php php php php php php php$typephp php=php newphp ReflectionClassphp(php$classNamephp)php;

php php php php php php php php php/php/php Loopphp allphp properties
php php php php php php php php php$propertiesphp php=php php$typephp-php>getPropertiesphp(php)php;
php php php php php php php php foreachphp php(php$propertiesphp asphp php$propertyphp)php php{
php php php php php php php php php php php php php$accessorphp php=php selfphp:php:getAzureAccessorphp(php$propertyphp)php;
php php php php php php php php php php php php ifphp php(php$accessorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$azureAccessorsphp[php]php php=php php$accessorphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Loopphp allphp methods
php php php php php php php php php$methodsphp php=php php$typephp-php>getMethodsphp(php)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php$accessorphp php=php selfphp:php:getAzureAccessorphp(php$methodphp)php;
php php php php php php php php php php php php ifphp php(php$accessorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$azureAccessorsphp[php]php php=php php$accessorphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Return
php php php php php php php php returnphp php$azureAccessorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp accessorphp fromphp reflectionphp member
php php php php php php*
php php php php php php*php php@paramphp ReflectionPropertyphp|ReflectionMethodphp php$member
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp getAzureAccessorphp(php$memberphp)
php php php php php{
php php php php php php php php php/php/php Getphp comment
php php php php php php php php php$docCommentphp php=php php$memberphp-php>getDocCommentphp(php)php;

php php php php php php php php php/php/php Checkphp forphp Azurephp comment
php php php php php php php php ifphp php(strposphp(php$docCommentphp,php php'php@azurephp'php)php php=php=php=php falsephp)
php php php php php php php php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php Searchphp forphp php@azurephp contents
php php php php php php php php php$azureCommentphp php=php php'php'php;
php php php php php php php php php$commentLinesphp php=php explodephp(php"php\nphp"php,php php$docCommentphp)php;
php php php php php php php php foreachphp php(php$commentLinesphp asphp php$commentLinephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$commentLinephp,php php'php@azurephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$azureCommentphp php=php trimphp(substrphp(php$commentLinephp,php strposphp(php$commentLinephp,php php'php@azurephp'php)php php+php php6php)php)php;
php php php php php php php php php php php php php php php php whilephp php(strposphp(php$azureCommentphp,php php'php php php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$azureCommentphp php=php strphp_replacephp(php'php php php'php,php php'php php'php,php php$azureCommentphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Fetchphp php@azurephp properties
php php php php php php php php php$azurePropertiesphp php=php explodephp(php'php php'php,php php$azureCommentphp)php;
php php php php php php php php returnphp php(objectphp)arrayphp(
php php php php php php php php php php php php php'EntityAccessorphp'php php php php php=php>php php$memberphp-php>getNamephp(php)php,
php php php php php php php php php php php php php'EntityTypephp'php php php php php php php php php=php>php getphp_classphp(php$memberphp)php,
php php php php php php php php php php php php php'AzurePropertyNamephp'php php=php>php php$azurePropertiesphp[php0php]php,
php php php php php php php php php php php php php'AzurePropertyTypephp'php php=php>php issetphp(php$azurePropertiesphp[php1php]php)php php?php php$azurePropertiesphp[php1php]php php:php php'php'
php php php php php php php php php)php;
php php php php php}
php}
