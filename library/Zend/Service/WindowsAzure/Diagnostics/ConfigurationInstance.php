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
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationDataSources
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/ConfigurationDataSourcesphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Diagnostics
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*
php php*php php@propertyphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationDataSourcesphp php php php DataSourcesphp php php php Dataphp sources
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstance
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationObjectBaseAbstract
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(
php php php php php php php php php php php php php'datasourcesphp'php php php php php=php>php newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationDataSourcesphp(php)
php php php php php php php php php)php;
php php php php php}

php	php/php*php*
php	php php*php Loadphp configurationphp XML
php	php php*
php	php php*php php@paramphp stringphp php$configurationXmlphp Configurationphp XML
php	php php*php/
php	publicphp functionphp loadXmlphp(php$configurationXmlphp)
php	php{
php	php	php/php/php Convertphp tophp SimpleXMLElement
php	php	php$configurationXmlphp php=php simplexmlphp_loadphp_stringphp(php$configurationXmlphp)php;
php	
php	php	php/php/php Assignphp generalphp settings
php	php	php$thisphp-php>DataSourcesphp-php>OverallQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>OverallQuotaInMBphp;

php php php php php php php php php/php/php Assignphp Logsphp settingsphp php php php 
php php php php php php php php php$thisphp-php>DataSourcesphp-php>Logsphp-php>BufferQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>Logsphp-php>BufferQuotaInMBphp;
php php php php php php php php php$thisphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferPeriodInMinutesphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferPeriodInMinutesphp;
php php php php php php php php php$thisphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferLogLevelFilterphp php=php php(stringphp)php$configurationXmlphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferLogLevelFilterphp;

php php php php php php php php php/php/php Assignphp DiagnosticInfrastructureLogsphp settings
php php php php php php php php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>BufferQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>BufferQuotaInMBphp;
php php php php php php php php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferPeriodInMinutesphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferPeriodInMinutesphp;
php php php php php php php php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferLogLevelFilterphp php=php php(stringphp)php$configurationXmlphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferLogLevelFilterphp;

php	php	php/php/php Assignphp PerformanceCountersphp settings
php	php	php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>BufferQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>PerformanceCountersphp-php>BufferQuotaInMBphp;
php	php	php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>ScheduledTransferPeriodInMinutesphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>PerformanceCountersphp-php>ScheduledTransferPeriodInMinutesphp;
php	php	ifphp php(php$configurationXmlphp-php>DataSourcesphp-php>PerformanceCountersphp-php>Subscriptions
php	php	php	php&php&php php$configurationXmlphp-php>DataSourcesphp-php>PerformanceCountersphp-php>Subscriptionsphp-php>PerformanceCounterConfigurationphp)php php{
php	php	php	php$subscriptionsphp php=php php$configurationXmlphp-php>DataSourcesphp-php>PerformanceCountersphp-php>Subscriptionsphp;
php	php	php	ifphp php(countphp(php$subscriptionsphp-php>PerformanceCounterConfigurationphp)php php>php php1php)php php{
php	php	php	php	php$subscriptionsphp php=php php$subscriptionsphp-php>PerformanceCounterConfigurationphp;
php	php	php	php}php elsephp php{
php	php	php	php	php$subscriptionsphp php=php arrayphp(php$subscriptionsphp-php>PerformanceCounterConfigurationphp)php;
php	php	php	php}
php	php	php	foreachphp php(php$subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>addSubscriptionphp(php(stringphp)php$subscriptionphp-php>CounterSpecifierphp,php php(intphp)php$subscriptionphp-php>SampleRateInSecondsphp)php;
php	php	php	php}
php	php	php}
php	php	php	php	
php	php	php/php/php Assignphp WindowsEventLogphp settings
php	php	php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>BufferQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>BufferQuotaInMBphp;
php	php	php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferPeriodInMinutesphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferPeriodInMinutesphp;
php	php	php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferLogLevelFilterphp php=php php(stringphp)php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferLogLevelFilterphp;
php	php	ifphp php(php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptions
php	php	php	php&php&php php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptionsphp-php>stringphp)php php{
php	php	php	php$subscriptionsphp php=php php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptionsphp;
php	php	php	ifphp php(countphp(php$subscriptionsphp-php>stringphp)php php>php php1php)php php{
php	php	php	php	php$subscriptionsphp php=php php$subscriptionsphp-php>stringphp;
php	php	php	php}php elsephp php{
php	php	php	php	php$subscriptionsphp php=php arrayphp(php$subscriptionsphp-php>stringphp)php;
php	php	php	php}
php	php	php	foreachphp php(php$subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>addSubscriptionphp(php(stringphp)php$subscriptionphp)php;
php	php	php	php}
php	php	php}
php	php	
php	php	php/php/php Assignphp Directoriesphp settings
php	php	php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>BufferQuotaInMBphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>Directoriesphp-php>BufferQuotaInMBphp;
php	php	php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>ScheduledTransferPeriodInMinutesphp php=php php(intphp)php$configurationXmlphp-php>DataSourcesphp-php>Directoriesphp-php>ScheduledTransferPeriodInMinutesphp;
php	php	ifphp php(php$configurationXmlphp-php>DataSourcesphp-php>Directoriesphp-php>Subscriptions
php	php	php	php&php&php php$configurationXmlphp-php>DataSourcesphp-php>Directoriesphp-php>Subscriptionsphp-php>DirectoryConfigurationphp)php php{
php	php	php	php$subscriptionsphp php=php php$configurationXmlphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptionsphp;
php	php	php	ifphp php(countphp(php$subscriptionsphp-php>DirectoryConfigurationphp)php php>php php1php)php php{
php	php	php	php	php$subscriptionsphp php=php php$subscriptionsphp-php>DirectoryConfigurationphp;
php	php	php	php}php elsephp php{
php	php	php	php	php$subscriptionsphp php=php arrayphp(php$subscriptionsphp-php>DirectoryConfigurationphp)php;
php	php	php	php}
php	php	php	foreachphp php(php$subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>addSubscriptionphp(php(stringphp)php$subscriptionphp-php>Pathphp,php php(stringphp)php$subscriptionphp-php>Containerphp,php php(intphp)php$subscriptionphp-php>DirectoryQuotaInMBphp)php;
php	php	php	php}
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Createphp configurationphp XML
php	php php*
php	php php*php php@returnphp string
php	php php*php/
php	publicphp functionphp toXmlphp(php)
php	php{
php	php	php/php/php Returnphp value
php	php	php$returnValuephp php=php arrayphp(php)php;
php	php	
php	php	php/php/php Buildphp XML
php	php	php$returnValuephp[php]php php=php php'<php?xmlphp versionphp=php"php1php.php0php"php?php>php'php;
php	php	php$returnValuephp[php]php php=php php'php<ConfigRequestphp xmlnsphp:xsiphp=php"httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/XMLSchemaphp-instancephp"php xmlnsphp:xsdphp=php"httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/XMLSchemaphp"php>php'php;
php	php	
php	php	php/php/php Addphp dataphp sources
php	php	php$returnValuephp[php]php php=php php'php php php<DataSourcesphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<OverallQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>OverallQuotaInMBphp php.php php'<php/OverallQuotaInMBphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<Logsphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<BufferQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>Logsphp-php>BufferQuotaInMBphp php.php php'<php/BufferQuotaInMBphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferPeriodInMinutesphp>php'php php.php php$thisphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferPeriodInMinutesphp php.php php'<php/ScheduledTransferPeriodInMinutesphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferLogLevelFilterphp>php'php php.php php$thisphp-php>DataSourcesphp-php>Logsphp-php>ScheduledTransferLogLevelFilterphp php.php php'<php/ScheduledTransferLogLevelFilterphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php <php/Logsphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<DiagnosticInfrastructureLogsphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<BufferQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>BufferQuotaInMBphp php.php php'<php/BufferQuotaInMBphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferPeriodInMinutesphp>php'php php.php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferPeriodInMinutesphp php.php php'<php/ScheduledTransferPeriodInMinutesphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferLogLevelFilterphp>php'php php.php php$thisphp-php>DataSourcesphp-php>DiagnosticInfrastructureLogsphp-php>ScheduledTransferLogLevelFilterphp php.php php'<php/ScheduledTransferLogLevelFilterphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php <php/DiagnosticInfrastructureLogsphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<PerformanceCountersphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<BufferQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>BufferQuotaInMBphp php.php php'<php/BufferQuotaInMBphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferPeriodInMinutesphp>php'php php.php php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>ScheduledTransferPeriodInMinutesphp php.php php'<php/ScheduledTransferPeriodInMinutesphp>php'php;
php	php	ifphp php(countphp(php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>Subscriptionsphp)php php=php=php php0php)php php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp php/php>php'php;
php	php	php}php elsephp php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp>php'php;
php	php	php	foreachphp php(php$thisphp-php>DataSourcesphp-php>PerformanceCountersphp-php>Subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php<PerformanceCounterConfigurationphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php php php<CounterSpecifierphp>php'php php.php php$subscriptionphp-php>CounterSpecifierphp php.php php'<php/CounterSpecifierphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php php php<SampleRateInSecondsphp>php'php php.php php$subscriptionphp-php>SampleRateInSecondsphp php.php php'<php/SampleRateInSecondsphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php <php/PerformanceCounterConfigurationphp>php'php;
php	php	php	php}
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php <php/Subscriptionsphp>php'php;
php	php	php}
php	php	php$returnValuephp[php]php php=php php'php php php php <php/PerformanceCountersphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<WindowsEventLogphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<BufferQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>BufferQuotaInMBphp php.php php'<php/BufferQuotaInMBphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferPeriodInMinutesphp>php'php php.php php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferPeriodInMinutesphp php.php php'<php/ScheduledTransferPeriodInMinutesphp>php'php;
php	php	php	ifphp php(countphp(php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptionsphp)php php=php=php php0php)php php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp php/php>php'php;
php	php	php}php elsephp php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp>php'php;
php	php	php	foreachphp php(php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>Subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<stringphp>php'php php.php php$subscriptionphp php.php php'<php/stringphp>php'php;
php	php	php	php}
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php <php/Subscriptionsphp>php'php;
php	php	php}
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferLogLevelFilterphp>php'php php.php php$thisphp-php>DataSourcesphp-php>WindowsEventLogphp-php>ScheduledTransferLogLevelFilterphp php.php php'<php/ScheduledTransferLogLevelFilterphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php <php/WindowsEventLogphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php php php php<Directoriesphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<BufferQuotaInMBphp>php'php php.php php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>BufferQuotaInMBphp php.php php'<php/BufferQuotaInMBphp>php'php;
php	php	php$returnValuephp[php]php php=php php'php php php php php php php<ScheduledTransferPeriodInMinutesphp>php'php php.php php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>ScheduledTransferPeriodInMinutesphp php.php php'<php/ScheduledTransferPeriodInMinutesphp>php'php;
php	php	ifphp php(countphp(php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>Subscriptionsphp)php php=php=php php0php)php php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp php/php>php'php;
php	php	php}php elsephp php{
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php<Subscriptionsphp>php'php;
php	php	php	foreachphp php(php$thisphp-php>DataSourcesphp-php>Directoriesphp-php>Subscriptionsphp asphp php$subscriptionphp)php php{
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php<DirectoryConfigurationphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php php php<Pathphp>php'php php.php php$subscriptionphp-php>Pathphp php.php php'<php/Pathphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php php php<Containerphp>php'php php.php php$subscriptionphp-php>Containerphp php.php php'<php/Containerphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php php php php<DirectoryQuotaInMBphp>php'php php.php php$subscriptionphp-php>DirectoryQuotaInMBphp php.php php'<php/DirectoryQuotaInMBphp>php'php;
php	php	php	php	php$returnValuephp[php]php php=php php'php php php php php php php php <php/DirectoryConfigurationphp>php'php;
php	php	php	php}
php	php	php	php$returnValuephp[php]php php=php php'php php php php php php <php/Subscriptionsphp>php'php;
php	php	php}
php	php	php$returnValuephp[php]php php=php php'php php php php <php/Directoriesphp>php'php;
php	php	
php	php	php$returnValuephp[php]php php=php php'php php <php/DataSourcesphp>php'php;
php	php	php$returnValuephp[php]php php=php php'<php/ConfigRequestphp>php'php;
php	php	
php	php	php/php/php Return
php	php	returnphp implodephp(php"php\rphp\nphp"php,php php$returnValuephp)php;
php	php}
php}
