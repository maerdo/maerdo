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
php php*php php@subpackagephp Diagnostics
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationObjectBaseAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/ConfigurationObjectBaseAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_DirectoryConfigurationSubscription
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/DirectoryConfigurationSubscriptionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Diagnostics
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*
php php*php php@propertyphp php php php intphp php php php php php php php BufferQuotaInMBphp php php php php php php php php php php php php php php php php php php php php php php php Bufferphp quotaphp inphp MB
php php*php php@propertyphp php php php intphp php php php php php php php ScheduledTransferPeriodInMinutesphp php php php Scheduledphp transferphp periodphp inphp minutes
php php*php php@propertyphp php php php arrayphp php php php Subscriptionsphp php php php php php php php php php php php php php php php php php php php php php php php Subscriptions
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationDirectories
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationObjectBaseAbstract
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php	php php*php php@paramphp	intphp	php	php$bufferQuotaInMBphp	php	php	php	php	Bufferphp quotaphp inphp MB
php	php php*php php@paramphp	intphp	php	php$scheduledTransferPeriodInMinutesphp	Scheduledphp transferphp periodphp inphp minutes
php	php php*php/
php php php php publicphp functionphp php_php_constructphp(php$bufferQuotaInMBphp php=php php0php,php php$scheduledTransferPeriodInMinutesphp php=php php0php)
php php php php php{php	
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(
php php php php php php php php php php php php php'bufferquotainmbphp'php php php php php php php php php php php php php php php php php php php php php=php>php php$bufferQuotaInMBphp,
php php php php php php php php php php php php php'scheduledtransferperiodinminutesphp'php php php php php php=php>php php$scheduledTransferPeriodInMinutesphp,
php php php php php php php php php php php php php'subscriptionsphp'php php php php php php php php php php php php php php php php php php php php php php php php php=php>php arrayphp(php)
php php php php php php php php php)php;
php php php php php}

php	php/php*php*
php	php php*php Addphp subscription
php	php php*
php	php php*php php@paramphp	stringphp	php$pathphp	php	php	php	php	Path
php	php php*php php@paramphp	stringphp	php$containerphp	php	php	php	Container
php	php php*php php@paramphp	intphp	php	php$directoryQuotaInMBphp	php	Directoryphp quotaphp inphp MB
php	php php*php/
php php php php publicphp functionphp addSubscriptionphp(php$pathphp,php php$containerphp,php php$directoryQuotaInMBphp php=php php1php0php2php4php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp[php'subscriptionsphp'php]php[php$pathphp]php php=php newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_DirectoryConfigurationSubscriptionphp(php$pathphp,php php$containerphp,php php$directoryQuotaInMBphp)php;
php php php php php}

php	php/php*php*
php	php php*php Removephp subscription
php	php php*
php	php php*php php@paramphp	stringphp	php$pathphp	php	php	php	php	Path
php	php php*php/
php php php php publicphp functionphp removeSubscriptionphp(php$pathphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'subscriptionsphp'php]php[php$pathphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php'subscriptionsphp'php]php[php$pathphp]php)php;
php php php php php php php php php}
php php php php php}
php}
