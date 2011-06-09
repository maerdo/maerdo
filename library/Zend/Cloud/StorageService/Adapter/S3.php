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

requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Adapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Exceptionphp.phpphp'php;

php/php*php*
php php*php Sphp3php adapterphp forphp unstructuredphp cloudphp storagephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_StorageServicephp_Adapterphp_Sphp3
php php php php implementsphp Zendphp_Cloudphp_StorageServicephp_Adapter
php{
php php php php php/php*
php php php php php php*php Optionsphp arrayphp keysphp forphp thephp Sphp3php adapterphp.
php php php php php php*php/
php php php php constphp BUCKETphp_NAMEphp php php php php php php=php php'bucketphp_namephp'php;
php php php php constphp BUCKETphp_ASphp_DOMAINphp php=php php'bucketphp_asphp_domainphp?php'php;
php php php php constphp FETCHphp_STREAMphp php php php php php=php php'fetchphp_streamphp'php;
php php php php constphp METADATAphp php php php php php php php php php=php php'metadataphp'php;

php php php php php/php*php*
php php php php php php*php AWSphp constants
php php php php php php*php/
php php php php constphp AWSphp_ACCESSphp_KEYphp php php php=php php'awsphp_accesskeyphp'php;
php php php php constphp AWSphp_SECRETphp_KEYphp php php php=php php'awsphp_secretkeyphp'php;

php php php php php/php*php*
php php php php php php*php Sphp3php servicephp instancephp.
php php php php php php*php php@varphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php protectedphp php$php_sphp3php;
php php php php protectedphp php$php_defaultBucketNamephp php=php nullphp;
php php php php protectedphp php$php_defaultBucketAsDomainphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[selfphp:php:AWSphp_ACCESSphp_KEYphp]php)php php|php|php php!issetphp(php$optionsphp[selfphp:php:AWSphp_SECRETphp_KEYphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'AWSphp keysphp notphp specifiedphp!php'php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_sphp3php php=php newphp Zendphp_Servicephp_Amazonphp_Sphp3php(php$optionsphp[selfphp:php:AWSphp_ACCESSphp_KEYphp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[selfphp:php:AWSphp_SECRETphp_KEYphp]php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp createphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sphp3php-php>getHttpClientphp(php)php-php>setAdapterphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:BUCKETphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultBucketNamephp php=php php$optionsphp[selfphp:php:BUCKETphp_NAMEphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:BUCKETphp_ASphp_DOMAINphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultBucketAsDomainphp php=php php$optionsphp[selfphp:php:BUCKETphp_ASphp_DOMAINphp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp itemphp fromphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@TODOphp Supportphp streams
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp fetchItemphp(php$pathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$fullPathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp,php php$optionsphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[selfphp:php:FETCHphp_STREAMphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>getObjectStreamphp(php$fullPathphp,php php$optionsphp[selfphp:php:FETCHphp_STREAMphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>getObjectphp(php$fullPathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp fetchphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp itemphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*
php php php php php php*php php@TODOphp Supportphp streams
php php php php php php*
php php php php php php*php php@paramphp stringphp php$destinationPath
php php php php php php*php php@paramphp stringphp|resourcephp php$data
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeItemphp(php$destinationPathphp,php php$dataphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fullPathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp,php php$optionsphp)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>putObjectphp(
php php php php php php php php php php php php php php php php php$fullPathphp,
php php php php php php php php php php php php php php php php php$dataphp,
php php php php php php php php php php php php php php php php emptyphp(php$optionsphp[selfphp:php:METADATAphp]php)php php?php nullphp php:php php$optionsphp[selfphp:php:METADATAphp]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp storephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteItemphp(php$pathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_sphp3php-php>removeObjectphp(php$thisphp-php>php_getFullPathphp(php$pathphp,php php$optionsphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Copyphp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php WARNINGphp:php Thisphp operationphp isphp php*veryphp*php expensivephp forphp servicesphp thatphp dophp not
php php php php php php*php supportphp copyingphp anphp itemphp nativelyphp.
php php php php php php*
php php php php php php*php php@TODOphp Supportphp streamsphp forphp thosephp servicesphp thatphp donphp'tphp supportphp natively
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp copyItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php TODOphp Wephp php*reallyphp*php needphp tophp addphp supportphp forphp objectphp copyingphp inphp thephp Sphp3php adapter
php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>fetchphp(php$php_getFullPathphp(sourcePathphp)php,php php$optionsphp)php;
php php php php php php php php php php php php php$thisphp-php>storeItemphp(php$itemphp,php php$destinationPathphp,php php$optionsphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp copyphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php php@TODOphp Supportphp streamsphp forphp thosephp servicesphp thatphp donphp'tphp supportphp natively
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp moveItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fullSourcePathphp php=php php$thisphp-php>php_getFullPathphp(php$sourcePathphp,php php$optionsphp)php;
php php php php php php php php php php php php php$fullDestPathphp php php php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp,php php$optionsphp)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>moveObjectphp(
php php php php php php php php php php php php php php php php php$fullSourcePathphp,
php php php php php php php php php php php php php php php php php$fullDestPathphp,
php php php php php php php php php php php php php php php php emptyphp(php$optionsphp[selfphp:php:METADATAphp]php)php php?php nullphp php:php php$optionsphp[selfphp:php:METADATAphp]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp movephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php}

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
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Renamephp notphp implementedphp'php)php;
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php TODOphp Supportphp php'prefixphp'php parameterphp forphp Zendphp_Servicephp_Amazonphp_Sphp3php:php:getObjectsByBucketphp(php)
php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>getObjectsByBucketphp(php$thisphp-php>php_defaultBucketNamephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp listphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchMetadataphp(php$pathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sphp3php-php>getInfophp(php$thisphp-php>php_getFullPathphp(php$pathphp,php php$optionsphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp php php$ephp)php php{
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
php php php php publicphp functionphp storeMetadataphp(php$destinationPathphp,php php$metadataphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Storingphp separatephp metadataphp isphp notphp supportedphp,php usephp storeItemphp(php)php withphp php\php'metadataphp\php'php optionphp keyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMetadataphp(php$pathphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Deletingphp metadataphp notphp supportedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fullphp pathphp,php includingphp bucketphp,php forphp anphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getFullPathphp(php$pathphp,php php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:BUCKETphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php$bucketphp php=php php$optionsphp[selfphp:php:BUCKETphp_NAMEphp]php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$thisphp-php>php_defaultBucketNamephp)php)php php{
php php php php php php php php php php php php php$bucketphp php=php php$thisphp-php>php_defaultBucketNamephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Bucketphp namephp mustphp bephp specifiedphp forphp Sphp3php adapterphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:BUCKETphp_ASphp_DOMAINphp]php)php)php php{
php php php php php php php php php php php php php/php/php TODOphp:php supportphp bucketphp domainphp names
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Thephp Sphp3php adapterphp doesphp notphp currentlyphp supportphp bucketsphp inphp domainphp namesphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp trimphp(php$bucketphp)php php.php php'php/php'php php.php trimphp(php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp clientphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_sphp3php;
php php php php php}
php}
