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
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Adapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Blobphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Exceptionphp.phpphp'php;

php/php*php*
php php*
php php*php Windowsphp Azurephp Blobphp Servicephp abstraction
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_StorageServicephp_Adapterphp_WindowsAzure
php php php php implementsphp Zendphp_Cloudphp_StorageServicephp_Adapter
php{
php php php php constphp ACCOUNTphp_NAMEphp php php php php php php=php php'storagephp_accountnamephp'php;
php php php php constphp ACCOUNTphp_KEYphp php php php php php php php=php php'storagephp_accountkeyphp'php;
php php php php constphp HOSTphp php php php php php php php php php php php php php php=php php"storagephp_hostphp"php;
php php php php constphp PROXYphp_HOSTphp php php php php php php php php=php php"storagephp_proxyphp_hostphp"php;
php php php php constphp PROXYphp_PORTphp php php php php php php php php=php php"storagephp_proxyphp_portphp"php;
php php php php constphp PROXYphp_CREDENTIALSphp php=php php"storagephp_proxyphp_credentialsphp"php;
php php php php constphp CONTAINERphp php php php php php php php php php=php php"storagephp_containerphp"php;
php php php php constphp RETURNphp_TYPEphp php php php php php php php=php php'returnphp_typephp'php;
php php php php constphp RETURNphp_PATHNAMEphp php php php=php php'returnphp_pathphp'php;
php php php php constphp RETURNphp_OPENMODEphp php php php=php php'returnphp_openmodephp'php;

php php php php php/php*php*php returnphp typesphp php forphp fetchphp php*php/
php php php php constphp RETURNphp_PATHphp php php php=php php1php;php php php php/php/php returnphp filename
php php php php constphp RETURNphp_STRINGphp php=php php2php;php php/php/php returnphp dataphp asphp string
php php php php constphp RETURNphp_STREAMphp php=php php3php;php php/php/php returnphp PHPphp stream

php php php php php/php*php*php returnphp typesphp php forphp listphp php*php/
php php php php constphp RETURNphp_LISTphp php php=php php1php;php php php php/php/php returnphp nativephp list
php php php php constphp RETURNphp_NAMESphp php=php php2php;php php php/php/php returnphp onlyphp names

php php php php constphp DEFAULTphp_HOSTphp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:URLphp_CLOUDphp_BLOBphp;

php php php php php/php*php*
php php php php php php*php Storagephp containerphp tophp operatephp on
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php Storagephp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php php php php php php*php/
php php php php protectedphp php$php_storageClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Cloudphp_Storagephp_WindowsAzurephp instance
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php php$optionsphp php php Optionsphp forphp thephp Zendphp_Cloudphp_Storagephp_WindowsAzurephp instance
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Buildphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp instance
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:HOSTphp]php)php)php php{
php php php php php php php php php php php php php$hostphp php=php selfphp:php:DEFAULTphp_HOSTphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hostphp php=php php$optionsphp[selfphp:php:HOSTphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp namephp providedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Nophp Windowsphp Azurephp accountphp keyphp providedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_storageClientphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp(php$hostphp,
php php php php php php php php php php php php php php$optionsphp[selfphp:php:ACCOUNTphp_NAMEphp]php,php php$optionsphp[selfphp:php:ACCOUNTphp_KEYphp]php)php;

php php php php php php php php php/php/php Parsephp otherphp options
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php)php)php php{
php php php php php php php php php php php php php$proxyHostphp php=php php$optionsphp[selfphp:php:PROXYphp_HOSTphp]php;
php php php php php php php php php php php php php$proxyPortphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_PORTphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_PORTphp]php php:php php8php0php8php0php;
php php php php php php php php php php php php php$proxyCredentialsphp php=php issetphp(php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php)php php?php php$optionsphp[selfphp:php:PROXYphp_CREDENTIALSphp]php php:php php'php'php;

php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setProxyphp(truephp,php php$proxyHostphp,php php$proxyPortphp,php php$proxyCredentialsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setHttpClientChannelphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp container
php php php php php php php php php$thisphp-php>php_containerphp php=php php$optionsphp[selfphp:php:CONTAINERphp]php;

php php php php php php php php php/php/php Makephp surephp thephp containerphp exists
php php php php php php php php ifphp php(php!php$thisphp-php>php_storageClientphp-php>containerExistsphp(php$thisphp-php>php_containerphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>createContainerphp(php$thisphp-php>php_containerphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp itemphp fromphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp fetchItemphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Options
php php php php php php php php php$returnTypephp php=php selfphp:php:RETURNphp_STRINGphp;
php php php php php php php php php$returnPathphp php=php tempnamphp(php'php'php,php php'azrphp'php)php;
php php php php php php php php php$openModephp php php php=php php'rphp'php;

php php php php php php php php php/php/php Parsephp options
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:RETURNphp_TYPEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$returnTypephp php=php php$optionsphp[selfphp:php:RETURNphp_TYPEphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:RETURNphp_PATHNAMEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$returnPathphp php=php php$optionsphp[selfphp:php:RETURNphp_PATHNAMEphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:RETURNphp_OPENMODEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$openModephp php=php php$optionsphp[selfphp:php:RETURNphp_OPENMODEphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Fetchphp thephp blob
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>getBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$pathphp,
php php php php php php php php php php php php php php php php php$returnPath
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"doesphp notphp existphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp fetchphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp value
php php php php php php php php ifphp php(php$returnTypephp php=php=php selfphp:php:RETURNphp_PATHphp)php php{
php php php php php php php php php php php php returnphp php$returnPathphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$returnTypephp php=php=php selfphp:php:RETURNphp_STRINGphp)php php{
php php php php php php php php php php php php returnphp filephp_getphp_contentsphp(php$returnPathphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$returnTypephp php=php=php selfphp:php:RETURNphp_STREAMphp)php php{
php php php php php php php php php php php php returnphp fopenphp(php$returnPathphp,php php$openModephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp itemphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*php php@paramphp stringphp php$destinationPath
php php php php php php*php php@paramphp mixedphp php php$data
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp storeItemphp(php$destinationPathphp,php php$dataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Createphp aphp temporaryphp filephp thatphp willphp bephp uploaded
php php php php php php php php php$temporaryFilePathphp php php php php php php php=php php'php'php;
php php php php php php php php php$removeTemporaryFilePathphp php=php falsephp;

php php php php php php php php ifphp php(isphp_resourcephp(php$dataphp)php)php php php php php{
php php php php php php php php php php php php php$temporaryFilePathphp php=php tempnamphp(php'php'php,php php'azrphp'php)php;
php php php php php php php php php php php php php$fpDestinationphp php php php php php=php fopenphp(php$temporaryFilePathphp,php php'wphp'php)php;

php php php php php php php php php php php php php$fpSourcephp php=php php$dataphp;
php php php php php php php php php php php php rewindphp(php$fpSourcephp)php;
php php php php php php php php php php php php whilephp php(php!feofphp(php$fpSourcephp)php)php php{
php php php php php php php php php php php php php php php php fwritephp(php$fpDestinationphp,php freadphp(php$fpSourcephp,php php8php1php9php2php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php fclosephp(php$fpDestinationphp)php;

php php php php php php php php php php php php php$removeTemporaryFilePathphp php=php truephp;
php php php php php php php php php}php elseifphp php(filephp_existsphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$temporaryFilePathphp php php php php php php php=php php$dataphp;
php php php php php php php php php php php php php$removeTemporaryFilePathphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$temporaryFilePathphp php=php tempnamphp(php'php'php,php php'azrphp'php)php;
php php php php php php php php php php php php filephp_putphp_contentsphp(php$temporaryFilePathphp,php php$dataphp)php;
php php php php php php php php php php php php php$removeTemporaryFilePathphp php=php truephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php Uploadphp data
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>putBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$destinationPathphp,
php php php php php php php php php php php php php php php php php$temporaryFilePath
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php@unlinkphp(php$temporaryFilePathphp)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp storephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$removeTemporaryFilePathphp)php php{
php php php php php php php php php php php php php@unlinkphp(php$temporaryFilePathphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteItemphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>deleteBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$path
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Copyphp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationPath
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp copyItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>copyBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$sourcePathphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$destinationPath
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp copyphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationPath
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp moveItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>copyBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$sourcePathphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$destinationPath
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>deleteBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$sourcePath
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp movephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Renamephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp namephp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renameItemphp(php$pathphp,php php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>moveItemphp(php$pathphp,php php$namephp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp itemsphp inphp thephp givenphp directoryphp inphp thephp storagephp service
php php php php php php*
php php php php php php*php Thephp php$pathphp mustphp bephp aphp directory
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pathphp Mustphp bephp aphp directory
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Aphp listphp ofphp itemphp names
php php php php php php*php/
php php php php publicphp functionphp listItemsphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Options
php php php php php php php php php$returnTypephp php=php selfphp:php:RETURNphp_NAMESphp;php php/php/php php1php:php returnphp listphp ofphp pathsphp,php php2php:php returnphp rawphp outputphp fromphp underlyingphp provider

php php php php php php php php php/php/php Parsephp options
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php&php&php issetphp(php$optionsphp[selfphp:php:RETURNphp_TYPEphp]php)php)php php{
php php php php php php php php php php php php php php php php$returnTypephp php=php php$optionsphp[selfphp:php:RETURNphp_TYPEphp]php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php Fetchphp list
php php php php php php php php php php php php php$blobListphp php=php php$thisphp-php>php_storageClientphp-php>listBlobsphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$path
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp listphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Return
php php php php php php php php ifphp php(php$returnTypephp php=php=php selfphp:php:RETURNphp_LISTphp)php php{
php php php php php php php php php php php php returnphp php$blobListphp;
php php php php php php php php php}

php php php php php php php php php$returnValuephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$blobListphp asphp php$blobphp)php php{
php php php php php php php php php php php php php$returnValuephp[php]php php=php php$blobphp-php>Namephp;
php php php php php php php php php}

php php php php php php php php returnphp php$returnValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchMetadataphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp-php>getBlobMetaDataphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_containerphp,
php php php php php php php php php php php php php php php php php$path
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"couldphp notphp bephp accessedphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp fetchphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$destinationPath
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeMetadataphp(php$destinationPathphp,php php$metadataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php php php php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setBlobMetadataphp(php$thisphp-php>php_containerphp,php php$destinationPathphp,php php$metadataphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"couldphp notphp bephp accessedphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp storephp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMetadataphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>setBlobMetadataphp(php$thisphp-php>php_containerphp,php php$destinationPathphp,php arrayphp(php)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php"couldphp notphp bephp accessedphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletephp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp container
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteContainerphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_storageClientphp-php>deleteContainerphp(php$thisphp-php>php_containerphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp adapterphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Azurephp_Storagephp_Blob
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_storageClientphp;
php php php php php}
php}
