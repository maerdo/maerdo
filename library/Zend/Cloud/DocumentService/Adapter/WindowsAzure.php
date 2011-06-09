<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Adapterphp/AbstractAdapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Adapterphp/WindowsAzurephp/Queryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/DynamicTableEntityphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Tablephp.phpphp'php;

php/php*php*
php php*php SimpleDBphp adapterphp forphp documentphp servicephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzure
php php php php extendsphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php{
php php php php php/php*
php php php php php php*php Optionsphp arrayphp keysphp forphp thephp Azurephp adapterphp.
php php php php php php*php/
php php php php constphp ACCOUNTphp_NAMEphp php php php php php php php php php php=php php'storagephp_accountnamephp'php;
php php php php constphp ACCOUNTphp_KEYphp php php php php php php php php php php php=php php'storagephp_accountkeyphp'php;
php php php php constphp HOSTphp php php php php php php php php php php php php php php php php php php=php php"storagephp_hostphp"php;
php php php php constphp PROXYphp_HOSTphp php php php php php php php php php php php php=php php"storagephp_proxyphp_hostphp"php;
php php php php constphp PROXYphp_PORTphp php php php php php php php php php php php php=php php"storagephp_proxyphp_portphp"php;
php php php php constphp PROXYphp_CREDENTIALSphp php php php php php=php php"storagephp_proxyphp_credentialsphp"php;
php php php php constphp DEFAULTphp_PARTITIONphp_KEYphp php=php php"defaultphp_partitionphp_keyphp"php;

php php php php constphp PARTITIONphp_KEYphp php php php php php php php php php=php php'PartitionKeyphp'php;
php php php php constphp ROWphp_KEYphp php php php php php php php php php php php php php php php=php php'RowKeyphp'php;
php php php php constphp VERIFYphp_ETAGphp php php php php php php php php php php php=php php"verifyphp_etagphp"php;
php php php php constphp TIMESTAMPphp_KEYphp php php php php php php php php php=php php"Timestampphp"php;

php php php php constphp DEFAULTphp_HOSTphp php php php php php php php php php php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:URLphp_CLOUDphp_TABLEphp;
php php php php constphp DEFAULTphp_QUERYphp_CLASSphp php php php=php php'Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Queryphp'php;

php php php php php/php*php*
php php php php php php*php Azurephp php servicephp instancephp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Table
php php php php php php*php/
php php php php protectedphp php$php_storageClientphp;

php php php php php/php*php*
php php php php php php*php Classphp tophp utilizephp forphp newphp queryphp objects
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_queryClassphp php=php php'Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Queryphp'php;

php php php php php/php*php*
php php php php php php*php Partitionphp keyphp tophp usephp byphp defaultphp whenphp constructingphp documentphp identifiers
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultPartitionKeyphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:DOCUMENTphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDocumentClassphp(php$optionsphp[selfphp:php:DOCUMENTphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:DOCUMENTSETphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDocumentSetClassphp(php$optionsphp[selfphp:php:DOCUMENTSETphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:QUERYphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setQueryClassphp(php$optionsphp[selfphp:php:QUERYphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Buildphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp instance
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:HOSTphp]php)php)php php{
php php php php php php php php php php php php php$hostphp php=php selfphp:php:DEFAULTphp_HOSTphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hostphp php=php php$optionsphp[selfphp:php:HOSTphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp namephp providedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp keyphp providedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php TODOphp:php supportphp php$usePathStyleUriphp andphp php$retryPolicy
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Tablephp(
php php php php php php php php php php php php php php php php php php php php php$hostphp,php php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php,php php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php;
php php php php php php php php php php php php php/php/php Parsephp otherphp options
php php php php php php php php php php php php ifphp php(php!php emptyphp(php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php)php)php php{
php php php php php php php php php php php php php php php php php$proxyHostphp php=php php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php;
php php php php php php php php php php php php php php php php php$proxyPortphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_PORTphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_PORTphp]php php:php php8php0php8php0php;
php php php php php php php php php php php php php php php php php$proxyCredentialsphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setProxyphp(truephp,php php$proxyHostphp,php php$proxyPortphp,php php$proxyCredentialsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setHttpClientChannelphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp servicephp creationphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp partitionphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzure
php php php php php php*php/
php php php php publicphp functionphp setDefaultPartitionKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validateKeyphp(php$keyphp)php;
php php php php php php php php php$thisphp-php>php_defaultPartitionKeyphp php=php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp defaultphp partitionphp key
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getDefaultPartitionKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultPartitionKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp createCollectionphp(php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php[Aphp-Zaphp-zphp]php[Aphp-Zaphp-zphp0php-php9php]php{php2php,php}php$php/php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp collectionphp namephp;php Windowsphp Azurephp collectionphp namesphp mustphp consistphp ofphp alphanumericphp charactersphp onlyphp,php andphp bephp atphp leastphp php3php charactersphp longphp'php)php;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>createTablephp(php$namephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"tablephp specifiedphp alreadyphp existsphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp collectionphp creationphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteCollectionphp(php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>deleteTablephp(php$namephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"doesphp notphp existphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp collectionphp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp collectionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listCollectionsphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$tablesphp php=php php$thisphp-php>php_storageClientphp-php>listTablesphp(php)php;
php php php php php php php php php php php php php$restablesphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$tablesphp asphp php$tablephp)php php{
php php php php php php php php php php php php php php php php php$restablesphp[php]php php=php php$tablephp-php>namephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$restablesphp;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp collectionphp listphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$tablesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp suitablephp documentphp fromphp arrayphp ofphp fields
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$document
php php php php php php*php php@paramphp php nullphp|stringphp php$collectionNamephp Collectionphp tophp whichphp thisphp documentphp belongs
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php protectedphp functionphp php_getDocumentFromArrayphp(php$documentphp,php php$collectionNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$keyphp php=php nullphp;
php php php php php php php php ifphp php(php!issetphp(php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$documentphp[selfphp:php:ROWphp_KEYphp]php)php)php php{
php php php php php php php php php php php php php php php php php$rowKeyphp php=php php$documentphp[selfphp:php:ROWphp_KEYphp]php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$documentphp[selfphp:php:ROWphp_KEYphp]php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$documentphp[selfphp:php:PARTITIONphp_KEYphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php arrayphp(php$documentphp[selfphp:php:PARTITIONphp_KEYphp]php,php php$rowKeyphp)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$documentphp[selfphp:php:PARTITIONphp_KEYphp]php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php(php$partitionKeyphp php=php php$thisphp-php>getDefaultPartitionKeyphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php arrayphp(php$partitionKeyphp,php php$rowKeyphp)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php$collectionNamephp)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php arrayphp(php$collectionNamephp,php php$rowKeyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php;
php php php php php php php php php php php php unsetphp(php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php)php;
php php php php php php php php php}

php php php php php php php php php$documentClassphp php=php php$thisphp-php>getDocumentClassphp(php)php;
php php php php php php php php returnphp newphp php$documentClassphp(php$documentphp,php php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp allphp documentsphp inphp aphp collection
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php publicphp functionphp listDocumentsphp(php$collectionNamephp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$selectphp php=php php$thisphp-php>selectphp(php)php-php>fromphp(php$collectionNamephp)php;
php php php php php php php php returnphp php$thisphp-php>queryphp(php$collectionNamephp,php php$selectphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Insertphp document
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$document
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp insertDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$documentphp)php)php php{
php php php php php php php php php php php php php$documentphp php=php php php$thisphp-php>php_getDocumentFromArrayphp(php$documentphp,php php$collectionNamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$keyphp php=php php$thisphp-php>php_validateDocumentIdphp(php$documentphp-php>getIdphp(php)php,php php$collectionNamephp)php;
php php php php php php php php php$documentphp-php>setIdphp(php$keyphp)php;

php php php php php php php php php$thisphp-php>php_validateCompositeKeyphp(php$keyphp)php;
php php php php php php php php php$thisphp-php>php_validateFieldsphp(php$documentphp)php;
php php php php php php php php tryphp php{

php php php php php php php php php php php php php$entityphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp(php$keyphp[php0php]php,php php$keyphp[php1php]php)php;
php php php php php php php php php php php php php$entityphp-php>setAzureValuesphp(php$documentphp-php>getFieldsphp(php)php,php truephp)php;
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>insertEntityphp(php$collectionNamephp,php php$entityphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp insertionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Replacephp documentphp.
php php php php php php*
php php php php php php*php Thephp newphp documentphp replacesphp thephp existingphp documentphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cloudphp_DocumentServicephp_Documentphp php$document
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp replaceDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$documentphp)php)php php{
php php php php php php php php php php php php php$documentphp php=php php$thisphp-php>php_getDocumentFromArrayphp(php$documentphp,php php$collectionNamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$keyphp php=php php$thisphp-php>php_validateDocumentIdphp(php$documentphp-php>getIdphp(php)php,php php$collectionNamephp)php;
php php php php php php php php php$thisphp-php>php_validateFieldsphp(php$documentphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$entityphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp(php$keyphp[php0php]php,php php$keyphp[php1php]php)php;
php php php php php php php php php php php php php$entityphp-php>setAzureValuesphp(php$documentphp-php>getFieldsphp(php)php,php truephp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php php{
php php php php php php php php php php php php php php php php php$entityphp-php>setEtagphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>updateEntityphp(php$collectionNamephp,php php$entityphp,php issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp replacephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp documentphp.
php php php php php php*
php php php php php php*php Thephp newphp documentphp isphp mergedphp thephp existingphp documentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php mixedphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$documentIdphp Documentphp identifierphp orphp documentphp contaiingphp updates
php php php php php php*php php@paramphp php nullphp|arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp Fieldsphp tophp updatephp php(orphp newphp fieldsphp)php)
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp updateDocumentphp(php$collectionNamephp,php php$documentIdphp,php php$fieldsetphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$fieldsetphp php&php&php php$documentIdphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php php$fieldsetphp php php php=php php$documentIdphp-php>getFieldsphp(php)php;
php php php php php php php php php php php php php$documentIdphp php=php php$documentIdphp-php>getIdphp(php)php;
php php php php php php php php php}php elseifphp php(php$fieldsetphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php ifphp php(php$documentIdphp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$documentIdphp php=php php$fieldsetphp-php>getIdphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$fieldsetphp php=php php$fieldsetphp-php>getFieldsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_validateCompositeKeyphp(php$documentIdphp,php php$collectionNamephp)php;
php php php php php php php php php$thisphp-php>php_validateFieldsphp(php$fieldsetphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$entityphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp(php$documentIdphp[php0php]php,php php$documentIdphp[php1php]php)php;

php php php php php php php php php php php php php/php/php Ensurephp timestampphp isphp setphp correctly
php php php php php php php php php php php php ifphp php(issetphp(php$fieldsetphp[selfphp:php:TIMESTAMPphp_KEYphp]php)php)php php{
php php php php php php php php php php php php php php php php php$entityphp-php>setTimestampphp(php$fieldsetphp[selfphp:php:TIMESTAMPphp_KEYphp]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$fieldsetphp[selfphp:php:TIMESTAMPphp_KEYphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$entityphp-php>setAzureValuesphp(php$fieldsetphp,php truephp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php php{
php php php php php php php php php php php php php php php php php$entityphp-php>setEtagphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>mergeEntityphp(php$collectionNamephp,php php$entityphp,php issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp updatephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp documentphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php$documentphp Documentphp IDphp orphp Documentphp objectphp.
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteDocumentphp(php$collectionNamephp,php php$documentIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$documentIdphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php php$documentIdphp php=php php$documentIdphp-php>getIdphp(php)php;
php php php php php php php php php}

php php php php php php php php php$documentIdphp php=php php$thisphp-php>php_validateDocumentIdphp(php$documentIdphp,php php$collectionNamephp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$entityphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_DynamicTableEntityphp(php$documentIdphp[php0php]php,php php$documentIdphp[php1php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php php{
php php php php php php php php php php php php php php php php php$entityphp-php>setEtagphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>deleteEntityphp(php$collectionNamephp,php php$entityphp,php issetphp(php$optionsphp[selfphp:php:VERIFYphp_ETAGphp]php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"doesphp notphp existphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp singlephp documentphp byphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php mixedphp php$documentIdphp Documentphp IDphp,php adapterphp-dependent
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php publicphp functionphp fetchDocumentphp(php$collectionNamephp,php php$documentIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$documentIdphp php=php php$thisphp-php>php_validateDocumentIdphp(php$documentIdphp,php php$collectionNamephp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$entityphp php=php php$thisphp-php>php_storageClientphp-php>retrieveEntityByIdphp(php$collectionNamephp,php php$documentIdphp[php0php]php,php php$documentIdphp[php1php]php)php;
php php php php php php php php php php php php php$documentClassphp php=php php$thisphp-php>getDocumentClassphp(php)php;
php php php php php php php php php php php php returnphp newphp php$documentClassphp(php$thisphp-php>php_resolveAttributesphp(php$entityphp)php,php arrayphp(php$entityphp-php>getPartitionKeyphp(php)php,php php$entityphp-php>getRowKeyphp(php)php)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"doesphp notphp existphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp fetchphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp forphp documentsphp storedphp inphp thephp documentphp servicephp.php Ifphp aphp stringphp isphp passedphp in
php php php php php php*php php$queryphp,php thephp queryphp stringphp willphp bephp passedphp directlyphp tophp thephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php stringphp|Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Queryphp php$query
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$collectionNamephp,php php$queryphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queryphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Queryphp)php php{
php php php php php php php php php php php php php php php php php$entitiesphp php=php php$thisphp-php>php_storageClientphp-php>retrieveEntitiesphp(php$queryphp-php>assemblephp(php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$entitiesphp php=php php$thisphp-php>php_storageClientphp-php>retrieveEntitiesphp(php$collectionNamephp,php php$queryphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$documentClassphp php=php php$thisphp-php>getDocumentClassphp(php)php;
php php php php php php php php php php php php php$resultSetphp php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$entitiesphp asphp php$entityphp)php php{
php php php php php php php php php php php php php php php php php$resultSetphp[php]php php=php newphp php$documentClassphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_resolveAttributesphp(php$entityphp)php,
php php php php php php php php php php php php php php php php php php php php arrayphp(php$entityphp-php>getPartitionKeyphp(php)php,php php$entityphp-php>getRowKeyphp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp queryphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$setClassphp php=php php$thisphp-php>getDocumentSetClassphp(php)php;
php php php php php php php php returnphp newphp php$setClassphp(php$resultSetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp queryphp statement
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$fieldsphp php=php nullphp)
php php php php php{
php php php php php php php php php$queryClassphp php=php php$thisphp-php>getQueryClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$queryClassphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$queryClassphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp php=php newphp php$queryClassphp(php)php;
php php php php php php php php php$defaultClassphp php=php selfphp:php:DEFAULTphp_QUERYphp_CLASSphp;
php php php php php php php php ifphp php(php!php$queryphp instanceofphp php$defaultClassphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Queryphp classphp mustphp extendphp php'php php.php selfphp:php:DEFAULTphp_QUERYphp_CLASSphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp-php>selectphp(php$fieldsphp)php;
php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp servicephp client
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Table
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_storageClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvephp tablephp valuesphp tophp attributes
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityphp php$entity
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_resolveAttributesphp(Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityphp php$entityphp)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$entityphp-php>getAzureValuesphp(php)php asphp php$attrphp)php php{
php php php php php php php php php php php php php$resultphp[php$attrphp-php>Namephp]php php=php php$attrphp-php>Valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp aphp partitionphp orphp rowphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Cloudphp_DocumentServicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php@php[php/php#php?php'php php.php pregphp_quotephp(php'php\php\php'php)php php.php php'php]php@php'php,php php$keyphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp partitionphp orphp rowphp keyphp providedphp;php mustphp notphp containphp php/php,php php\php\php,php php php#php,php orphp php?php charactersphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp compositephp key
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$key
php php php php php php*php php@returnphp throwsphp Zendphp_Cloudphp_DocumentServicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateCompositeKeyphp(arrayphp php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php2php php!php=php countphp(php$keyphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp keyphp providedphp;php mustphp containphp exactlyphp twophp elementsphp:php aphp PartitionKeyphp andphp aphp RowKeyphp'php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$keyphp asphp php$kphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateKeyphp(php$kphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp documentphp identifier
php php php php php php*
php php php php php php*php Ifphp thephp identifierphp isphp anphp arrayphp containingphp aphp validphp partitionphp andphp rowphp keyphp,
php php php php php php*php returnsphp itphp.php Ifphp thephp identifierphp isphp aphp stringphp:
php php php php php php*php php-php ifphp aphp defaultphp partitionphp keyphp isphp presentphp,php itphp createsphp anphp identifierphp using
php php php php php php*php php php thatphp andphp thephp providedphp documentphp ID
php php php php php php*php php-php ifphp aphp collectionphp namephp isphp providedphp,php itphp willphp usephp thatphp forphp thephp partitionphp key
php php php php php php*php php-php otherwisephp,php itphp'sphp invalid
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php$documentId
php php php php php php*php php@paramphp php nullphp|stringphp php$collectionName
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Cloudphp_DocumentServicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateDocumentIdphp(php$documentIdphp,php php$collectionNamephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$documentIdphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateCompositeKeyphp(php$documentIdphp)php;
php php php php php php php php php php php php returnphp php$documentIdphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_stringphp(php$documentIdphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp identifierphp;php mustphp bephp aphp stringphp orphp anphp arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_validateKeyphp(php$documentIdphp)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$partitionKeyphp php=php php$thisphp-php>getDefaultPartitionKeyphp(php)php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php$partitionKeyphp,php php$documentIdphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$collectionNamephp)php php{
php php php php php php php php php php php php returnphp arrayphp(php$collectionNamephp,php php$documentIdphp)php;
php php php php php php php php php}
php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Cannotphp determinephp partitionphp namephp;php invalidphp documentphp identifierphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp documentphp'sphp fieldsphp forphp wellphp-formedness
php php php php php php*
php php php php php php*php Sincephp Azurephp usesphp Atomphp,php andphp fieldnamesphp arephp includedphp asphp partphp ofphp XML
php php php php php php*php elementphp tagphp namesphp,php thephp fieldphp namesphp mustphp bephp validphp XMLphp namesphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cloudphp_DocumentServicephp_Documentphp|arrayphp php$document
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Cloudphp_DocumentServicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_validateFieldsphp(php$documentphp)
php php php php php{
php php php php php php php php ifphp php(php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php php$documentphp php=php php$documentphp-php>getFieldsphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$documentphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Cannotphp inspectphp fieldsphp;php invalidphp typephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp_keysphp(php$documentphp)php asphp php$keyphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateFieldKeyphp(php$keyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp anphp individualphp fieldphp namephp forphp wellphp-formedness
php php php php php php*
php php php php php php*php Sincephp Azurephp usesphp Atomphp,php andphp fieldnamesphp arephp includedphp asphp partphp ofphp XML
php php php php php php*php elementphp tagphp namesphp,php thephp fieldphp namesphp mustphp bephp validphp XMLphp namesphp.
php php php php php php*
php php php php php php*php Whilephp wephp couldphp potentiallyphp normalizephp namesphp,php thisphp couldphp alsophp leadphp to
php php php php php php*php conflictphp withphp otherphp fieldphp namesphp php-php-php whichphp wephp shouldphp avoidphp.php Asphp suchphp,
php php php php php php*php invalidphp fieldphp namesphp willphp raisephp anphp exceptionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Cloudphp_DocumentServicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_validateFieldKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php[php_Aphp-Zaphp-zphp]php[php-php.php_Aphp-Zaphp-zphp0php-php9php]php*php$php/php'php,php php$keyphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Fieldphp keysphp mustphp conformphp tophp XMLphp namesphp php(php^php[php_Aphp-Zaphp-zphp]php[php-php.php_Aphp-Zaphp-zphp0php-php9php]php*php$php)php;php keyphp php"php'php php.php php$keyphp php.php php'php"php doesphp notphp matchphp'php)php;
php php php php php php php php php}
php php php php php}
php}
