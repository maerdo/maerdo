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
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Blobphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstance
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Diagnosticsphp/ConfigurationInstancephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Diagnostics
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Manager
php{
php	php/php*php*
php	php php*php Blobphp storagephp client
php	php php*
php	php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php	php php*php/
php	protectedphp php$php_blobStorageClientphp php=php nullphp;
php	
php	php/php*php*
php	php php*php Controlphp containerphp name
php	php php*
php	php php*php php@varphp string
php	php php*php/
php	protectedphp php$php_controlContainerphp php=php php'php'php;

php	php/php*php*
php	php php*php Createphp aphp newphp instancephp ofphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Manager
php	php php*
php	php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp php$blobStorageClientphp Blobphp storagephp client
php	php php*php php@paramphp stringphp php$controlContainerphp Controlphp containerphp name
php	php php*php/
php	publicphp functionphp php_php_constructphp(Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp php$blobStorageClientphp php=php nullphp,php php$controlContainerphp php=php php'wadphp-controlphp-containerphp'php)
php	php{
php	php	php$thisphp-php>php_blobStorageClientphp php=php php$blobStorageClientphp;
php	php	php$thisphp-php>php_controlContainerphp php php=php php$controlContainerphp;
php php php php php php php php php$thisphp-php>php_ensureStorageInitializedphp(php)php;
php php php php php}

php	php/php*php*
php	php php*php Ensurephp storagephp hasphp beenphp initialized
php	php php*php/
php	protectedphp functionphp php_ensureStorageInitializedphp(php)
php	php{
php	php	ifphp php(php!php$thisphp-php>php_blobStorageClientphp-php>containerExistsphp(php$thisphp-php>php_controlContainerphp)php)php php{
php	php	php	php$thisphp-php>php_blobStorageClientphp-php>createContainerphp(php$thisphp-php>php_controlContainerphp)php;
php	php	php}
php	php}
php	
php	php/php*php*
php	php php*php Getphp defaultphp configurationphp values
php	php php*
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstance
php	php php*php/
php	publicphp functionphp getDefaultConfigurationphp(php)
php	php{
php	php	returnphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp(php)php;
php	php}
php	
php	php/php*php*
php	php php*php Checksphp ifphp aphp configurationphp forphp aphp specificphp rolephp instancephp existsphp.
php	php php*
php	php php*php php@paramphp stringphp php$roleInstancephp Rolephp instancephp namephp,php canphp bephp foundphp inphp php$php_SERVERphp[php'RdRoleIdphp'php]php whenphp hostedphp onphp Windowsphp Azurephp.
php	php php*php php@returnphp boolean
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp configurationForRoleInstanceExistsphp(php$roleInstancephp php=php nullphp)
php	php{
php	php	ifphp php(php$roleInstancephp php=php=php=php nullphp)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Rolephp instancephp shouldphp bephp specifiedphp.php Tryphp readingphp php$php_SERVERphp[php\php'RdRoleIdphp\php'php]php forphp thisphp informationphp ifphp thephp applicationphp isphp hostedphp onphp Windowsphp Azurephp Fabricphp orphp Developmentphp Fabricphp.php'php)php;
php	php	php}

php	php	returnphp php$thisphp-php>php_blobStorageClientphp-php>blobExistsphp(php$thisphp-php>php_controlContainerphp,php php$roleInstancephp)php;
php	php}
php	
php	php/php*php*
php	php php*php Checksphp ifphp aphp configurationphp forphp currentphp rolephp instancephp existsphp.php Onlyphp worksphp onphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.
php	php php*
php	php php*php php@returnphp boolean
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp configurationForCurrentRoleInstanceExistsphp(php)
php	php{
php	php	ifphp php(php!issetphp(php$php_SERVERphp[php'RdRoleIdphp'php]php)php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Serverphp variablephp php\php'RdRoleIdphp\php'php isphp unknownphp.php Pleasephp verifyphp thephp applicationphp isphp runningphp inphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.php'php)php;
php	php	php}

php	php	returnphp php$thisphp-php>php_blobStorageClientphp-php>blobExistsphp(php$thisphp-php>php_controlContainerphp,php php$php_SERVERphp[php'RdRoleIdphp'php]php)php;
php	php}
php	
php	php/php*php*
php	php php*php Getphp configurationphp forphp currentphp rolephp instancephp.php Onlyphp worksphp onphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.
php	php php*
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstance
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp getConfigurationForCurrentRoleInstancephp(php)
php	php{
php	php	ifphp php(php!issetphp(php$php_SERVERphp[php'RdRoleIdphp'php]php)php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Serverphp variablephp php\php'RdRoleIdphp\php'php isphp unknownphp.php Pleasephp verifyphp thephp applicationphp isphp runningphp inphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.php'php)php;
php	php	php}
php	php	returnphp php$thisphp-php>getConfigurationForRoleInstancephp(php$php_SERVERphp[php'RdRoleIdphp'php]php)php;
php	php}
php	
php	php/php*php*
php	php php*php Setphp configurationphp forphp currentphp rolephp instancephp.php Onlyphp worksphp onphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.
php	php php*
php	php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp php$configurationphp Configurationphp tophp apply
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp setConfigurationForCurrentRoleInstancephp(Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp php$configurationphp)
php	php{
php	php	ifphp php(php!issetphp(php$php_SERVERphp[php'RdRoleIdphp'php]php)php)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Serverphp variablephp php\php'RdRoleIdphp\php'php isphp unknownphp.php Pleasephp verifyphp thephp applicationphp isphp runningphp inphp Developmentphp Fabricphp orphp Windowsphp Azurephp Fabricphp.php'php)php;
php	php	php}
php	php	php$thisphp-php>setConfigurationForRoleInstancephp(php$php_SERVERphp[php'RdRoleIdphp'php]php,php php$configurationphp)php;
php	php}
php	
php	php/php*php*
php	php php*php Getphp configurationphp forphp aphp specificphp rolephp instance
php	php php*
php	php php*php php@paramphp stringphp php$roleInstancephp Rolephp instancephp namephp,php canphp bephp foundphp inphp php$php_SERVERphp[php'RdRoleIdphp'php]php whenphp hostedphp onphp Windowsphp Azurephp.
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstance
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp getConfigurationForRoleInstancephp(php$roleInstancephp php=php nullphp)
php	php{
php	php	ifphp php(php$roleInstancephp php=php=php=php nullphp)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Rolephp instancephp shouldphp bephp specifiedphp.php Tryphp readingphp php$php_SERVERphp[php\php'RdRoleIdphp\php'php]php forphp thisphp informationphp ifphp thephp applicationphp isphp hostedphp onphp Windowsphp Azurephp Fabricphp orphp Developmentphp Fabricphp.php'php)php;
php	php	php}

php php php php php php php php ifphp php(php$thisphp-php>php_blobStorageClientphp-php>blobExistsphp(php$thisphp-php>php_controlContainerphp,php php$roleInstancephp)php)php php{
php php php php php php php php php php php php php$configurationInstancephp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp(php)php;
php php php php php php php php php php php php php$configurationInstancephp-php>loadXmlphp(php php$thisphp-php>php_blobStorageClientphp-php>getBlobDataphp(php$thisphp-php>php_controlContainerphp,php php$roleInstancephp)php php)php;
php php php php php php php php php php php php returnphp php$configurationInstancephp;
php php php php php php php php php}

php	php	returnphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp(php)php;
php	php}
php	
php	php/php*php*
php	php php*php Setphp configurationphp forphp aphp specificphp rolephp instance
php	php php*
php	php php*php php@paramphp stringphp php$roleInstancephp Rolephp instancephp namephp,php canphp bephp foundphp inphp php$php_SERVERphp[php'RdRoleIdphp'php]php whenphp hostedphp onphp Windowsphp Azurephp.
php	php php*php php@paramphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp php$configurationphp Configurationphp tophp apply
php	php php*php php@throwsphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exception
php	php php*php/
php	publicphp functionphp setConfigurationForRoleInstancephp(php$roleInstancephp php=php nullphp,php Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_ConfigurationInstancephp php$configurationphp)
php	php{
php	php	ifphp php(php$roleInstancephp php=php=php=php nullphp)php php{
php	php	php	throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Diagnosticsphp_Exceptionphp(php'Rolephp instancephp shouldphp bephp specifiedphp.php Tryphp readingphp php$php_SERVERphp[php\php'RdRoleIdphp\php'php]php forphp thisphp informationphp ifphp thephp applicationphp isphp hostedphp onphp Windowsphp Azurephp Fabricphp orphp Developmentphp Fabricphp.php'php)php;
php	php	php}

php php php php php php php php php$thisphp-php>php_blobStorageClientphp-php>putBlobDataphp(php$thisphp-php>php_controlContainerphp,php php$roleInstancephp,php php$configurationphp-php>toXmlphp(php)php,php arrayphp(php)php,php nullphp,php arrayphp(php'Contentphp-Typephp'php php=php>php php'textphp/xmlphp'php)php)php;
php php php php php}
php}
