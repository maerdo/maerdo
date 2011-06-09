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
php php*php php@versionphp php php php php$Idphp:php DynamicTableEntityphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntity
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/TableEntityphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp extendsphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntity
php{
php php php php php/php*php*
php php php php php php*php Dynamicphp properties
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dynamicPropertiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp forphp settingphp properties
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php Namephp ofphp thephp property
php php php php php php*php php@paramphp stringphp php$valuephp php php php Valuephp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)php php{
php php php php php php php php php$thisphp-php>setAzurePropertyphp(php$namephp,php php$valuephp,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp forphp gettingphp properties
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php Namephp ofphp thephp property
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)php php{
php php php php php php php php returnphp php$thisphp-php>getAzurePropertyphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp Azurephp property
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Propertyphp name
php php php php php php*php php@paramphp mixedphp php$valuephp Propertyphp value
php php php php php php*php php@paramphp stringphp php$typephp Propertyphp typephp php(Edmphp.xxxxphp)
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntity
php php php php php php*php/
php php php php publicphp functionphp setAzurePropertyphp(php$namephp,php php$valuephp php=php php'php'php,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(strtolowerphp(php$namephp)php php=php=php php'partitionkeyphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setPartitionKeyphp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(strtolowerphp(php$namephp)php php=php=php php'rowkeyphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setRowKeyphp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(strtolowerphp(php$namephp)php php=php=php php'etagphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setEtagphp(php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dynamicPropertiesphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Determinephp typephp?
php php php php php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php php'Edmphp.Stringphp'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php'Edmphp.Intphp3php2php'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php'Edmphp.Doublephp'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php'Edmphp.Booleanphp'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Setphp dynamicphp property
php php php php php php php php php php php php php php php php php$thisphp-php>php_dynamicPropertiesphp[strtolowerphp(php$namephp)php]php php=php php(objectphp)arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Namephp'php php php=php>php php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php'Typephp'php php php=php>php php$typephp,
php php php php php php php php php php php php php php php php php php php php php php php php php'Valuephp'php php=php>php php$valuephp,
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_dynamicPropertiesphp[strtolowerphp(php$namephp)php]php-php>Valuephp php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp Azurephp propertyphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Propertyphp name
php php php php php php*php php@paramphp stringphp php$typephp Propertyphp typephp php(Edmphp.xxxxphp)
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntity
php php php php php php*php/
php php php php publicphp functionphp setAzurePropertyTypephp(php$namephp,php php$typephp php=php php'Edmphp.Stringphp'php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dynamicPropertiesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAzurePropertyphp(php$namephp,php php'php'php,php php$typephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dynamicPropertiesphp[strtolowerphp(php$namephp)php]php-php>Typephp php=php php$typephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp Azurephp property
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Propertyphp name
php php php php php php*php php@paramphp mixedphp php$valuephp Propertyphp value
php php php php php php*php php@paramphp stringphp php$typephp Propertyphp typephp php(Edmphp.xxxxphp)
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntity
php php php php php php*php/
php php php php publicphp functionphp getAzurePropertyphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(strtolowerphp(php$namephp)php php=php=php php'partitionkeyphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getPartitionKeyphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(strtolowerphp(php$namephp)php php=php=php php'rowkeyphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getRowKeyphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(strtolowerphp(php$namephp)php php=php=php php'etagphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getEtagphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dynamicPropertiesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAzurePropertyphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dynamicPropertiesphp[strtolowerphp(php$namephp)php]php-php>Valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp Azurephp propertyphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Propertyphp name
php php php php php php*php php@returnphp stringphp Propertyphp typephp php(Edmphp.xxxxphp)
php php php php php php*php/
php php php php publicphp functionphp getAzurePropertyTypephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dynamicPropertiesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAzurePropertyphp(php$namephp,php php'php'php,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dynamicPropertiesphp[strtolowerphp(php$namephp)php]php-php>Typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp values
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAzureValuesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_mergephp(arrayphp_valuesphp(php$thisphp-php>php_dynamicPropertiesphp)php,php parentphp:php:getAzureValuesphp(php)php)php;
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
php php php php php php php php php/php/php Setphp parentphp values
php php php php php php php php parentphp:php:setAzureValuesphp(php$valuesphp,php falsephp)php;

php php php php php php php php php/php/php Setphp currentphp values
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php}
php php php php php}
php}
