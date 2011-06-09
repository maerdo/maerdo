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
requirephp_oncephp php'Zendphp/Cloudphp/StorageServicephp/Exceptionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/Nirvanixphp.phpphp'php;

php/php*php*
php php*php Adapterphp forphp Nirvanixphp cloudphp storage
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_StorageServicephp_Adapterphp_Nirvanix
php php php php implementsphp Zendphp_Cloudphp_StorageServicephp_Adapter
php{
php php php php constphp USERNAMEphp php php php php php php php php php=php php'authphp_usernamephp'php;
php php php php constphp PASSWORDphp php php php php php php php php php=php php'authphp_passwordphp'php;
php php php php constphp APPphp_KEYphp php php php php php php php php php php=php php'authphp_accesskeyphp'php;
php php php php constphp REMOTEphp_DIRECTORYphp php=php php'remotephp_directoryphp'php;

php php php php php/php*php*
php php php php php php*php Thephp Nirvanixphp adapter
php php php php php php*php php@varphp Zendphp_Servicephp_Nirvanix
php php php php php php*php/
php php php php protectedphp php$php_nirvanixphp;
php php php php protectedphp php$php_imfNsphp;
php php php php protectedphp php$php_metadataNsphp;
php php php php protectedphp php$php_remoteDirectoryphp;
php php php php privatephp php$maxPageSizephp php=php php5php0php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$authphp php=php arrayphp(
php php php php php php php php php php php php php'usernamephp'php php=php>php php$optionsphp[selfphp:php:USERNAMEphp]php,
php php php php php php php php php php php php php'passwordphp'php php=php>php php$optionsphp[selfphp:php:PASSWORDphp]php,
php php php php php php php php php php php php php'appKeyphp'php php php php=php>php php$optionsphp[selfphp:php:APPphp_KEYphp]php,
php php php php php php php php php)php;
php php php php php php php php php$nirvanixphp_optionsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php$httpcphp php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php php php php php php php php php$httpcphp-php>setAdapterphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php php php php php$nirvanixphp_optionsphp[php'httpClientphp'php]php php=php php$httpcphp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_nirvanixphp php=php newphp Zendphp_Servicephp_Nirvanixphp(php$authphp,php php$nirvanixphp_optionsphp)php;
php php php php php php php php php php php php php$thisphp-php>php_remoteDirectoryphp php=php php$optionsphp[selfphp:php:REMOTEphp_DIRECTORYphp]php;
php php php php php php php php php php php php php$thisphp-php>php_imfNsphp php=php php$thisphp-php>php_nirvanixphp-php>getServicephp(php'IMFSphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_metadataNsphp php=php php$thisphp-php>php_nirvanixphp-php>getServicephp(php'Metadataphp'php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp createphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php php/php*php*
php php php php php php*php Getphp anphp itemphp fromphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp fetchItemphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>php_imfNsphp-php>getContentsphp(php$pathphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp fetchphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$itemphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp itemphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*php php@paramphp stringphp php$destinationPath
php php php php php php*php php@paramphp mixedphp php$data
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeItemphp(php$destinationPathphp,php php$dataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php;
php php php php php php php php php php php php php$thisphp-php>php_imfNsphp-php>putContentsphp(php$pathphp,php php$dataphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp storephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteItemphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php php php php php php$thisphp-php>php_imfNsphp-php>unlinkphp(php$pathphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php/php/php php php php php php php php php php php php ifphp php(trimphp(strtoupperphp(php$ephp-php>getMessagephp(php)php)php)php php!php=php php'INVALIDphp PATHphp'php)php php{
php/php/php php php php php php php php php php php php php php php php php/php/php TODOphp Differentiatephp amongphp errorsphp inphp thephp Nirvanixphp adapter
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Copyphp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*php WARNINGphp:php Thisphp operationphp isphp php*veryphp*php expensivephp forphp servicesphp thatphp dophp not
php php php php php php*php supportphp copyingphp anphp itemphp nativelyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp copyItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$sourcePathphp php=php php$thisphp-php>php_getFullPathphp(php$sourcePathphp)php;
php php php php php php php php php php php php php$destinationPathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php;
php php php php php php php php php php php php php$thisphp-php>php_imfNsphp-php>CopyFilesphp(arrayphp(php'srcFilePathphp'php php=php>php php$sourcePathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'destFolderPathphp'php php=php>php php$destinationPathphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp copyphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*php WARNINGphp:php Thisphp operationphp isphp php*veryphp*php expensivephp forphp servicesphp thatphp dophp not
php php php php php php*php supportphp movingphp anphp itemphp nativelyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp moveItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$sourcePathphp php=php php$thisphp-php>php_getFullPathphp(php$sourcePathphp)php;
php php php php php php php php php php php php php$destinationPathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php;
php php php php php php php php php php php php php$thisphp-php>php_imfNsphp-php>RenameFilephp(arrayphp(php'filePathphp'php php=php>php php$sourcePathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'newFileNamephp'php php=php>php php$destinationPathphp)php)php;
php php php php php/php/php php php php php php php php php$thisphp-php>php_imfNsphp-php>MoveFilesphp(arrayphp(php'srcFilePathphp'php php=php>php php$sourcePathphp,
php php php php php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'destFolderPathphp'php php=php>php php$destinationPathphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
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
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Renamingphp notphp implementedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Anphp associativephp arrayphp ofphp keyphp/valuephp pairsphp specifyingphp thephp metadataphp forphp thisphp objectphp.
php php php php php php*php php php php php php php php php php php php php php php php php php Ifphp nophp metadataphp existsphp,php anphp emptyphp arrayphp isphp returnedphp.
php php php php php php*php/
php php php php publicphp functionphp fetchMetadataphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$metadataNodephp php=php php$thisphp-php>php_metadataNsphp-php>getMetadataphp(arrayphp(php'pathphp'php php=php>php php$pathphp)php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp fetchingphp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$metadataphp php=php arrayphp(php)php;
php php php php php php php php php$lengthphp php=php countphp(php$metadataNodephp-php>Metadataphp)php;

php php php php php php php php php/php/php Needphp tophp specialphp casephp thisphp asphp Nirvanixphp returnsphp anphp arrayphp ifphp therephp is
php php php php php php php php php/php/php morephp thanphp onephp,php butphp doesnphp'tphp returnphp anphp arrayphp ifphp therephp isphp onlyphp onephp.
php php php php php php php php ifphp php(php$lengthphp php=php=php php1php)
php php php php php php php php php{
php php php php php php php php php php php php php$metadataphp[php(stringphp)php$metadataNodephp-php>Metadataphp-php>Typephp-php>valuephp]php php=php php(stringphp)php$metadataNodephp-php>Metadataphp-php>Valuephp;
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(php$lengthphp php>php php1php)
php php php php php php php php php{
php php php php php php php php php php php php forphp php(php$iphp=php0php;php php$i<php$lengthphp;php php$iphp+php+php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$metadataphp[php(stringphp)php$metadataNodephp-php>Metadataphp[php$iphp]php-php>Typephp]php php=php php(stringphp)php$metadataNodephp-php>Metadataphp[php$iphp]php-php>Valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$metadataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$metadataphp php-php Anphp associativephp arrayphp specifyingphp thephp keyphp/valuephp pairsphp forphp thephp metadataphp.
php php php php php php*php php@paramphp php$destinationPath
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeMetadataphp(php$destinationPathphp,php php$metadataphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$destinationPathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php;
php php php php php php php php ifphp php(php$metadataphp php!php=php nullphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php foreachphp php(php$metadataphp ASphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$metadataStringphp php=php php$keyphp php.php php"php:php"php php.php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_metadataNsphp-php>SetMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'pathphp'php php php php php php=php>php php$destinationPathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'metadataphp'php php=php>php php$metadataStringphp,
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp storingphp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp arrayphp php$metadataphp php-php Anphp associativephp arrayphp specifyingphp thephp keyphp/valuephp pairsphp forphp thephp metadata
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php tophp bephp deletedphp.php php Ifphp nullphp,php allphp metadataphp associatedphp withphp thephp objectphp will
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php bephp deletedphp.
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMetadataphp(php$pathphp,php php$metadataphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$metadataphp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_metadataNsphp-php>DeleteAllMetadataphp(arrayphp(php'pathphp'php php=php>php php$pathphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php foreachphp php(php$metadataphp ASphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_metadataNsphp-php>DeleteMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'pathphp'php php php php php php=php>php php$pathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'metadataphp'php php=php>php php$keyphp,
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp deletingphp metadataphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*
php php php php php php*php Recursivelyphp traversephp allphp thephp foldersphp andphp buildphp anphp arrayphp thatphp contains
php php php php php php*php thephp pathphp namesphp forphp eachphp folderphp.
php php php php php php*
php php php php php php*php php@paramphp php$pathphp php-php Thephp folderphp pathphp tophp getphp thephp listphp ofphp foldersphp fromphp.
php php php php php php*php php@paramphp php&php$resultArrayphp php-php referencephp tophp thephp arrayphp thatphp containsphp thephp pathphp names
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php forphp eachphp folderphp.
php php php php php php*php/
php php php php privatephp functionphp getAllFoldersphp(php$pathphp,php php&php$resultArrayphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_imfNsphp-php>ListFolderphp(arrayphp(
php php php php php php php php php php php php php'folderPathphp'php php=php>php php$pathphp,
php php php php php php php php php php php php php php php php'pageNumberphp'php php=php>php php1php,
php php php php php php php php php php php php php'pageSizephp'php php php php=php>php php$thisphp-php>maxPageSizephp,
php php php php php php php php php)php)php;
php php php php php php php php php php php php$numFoldersphp php=php php$responsephp-php>ListFolderphp-php>TotalFolderCountphp;
php php php php php php php php php php php ifphp php(php$numFoldersphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php/php/Needphp tophp specialphp casephp thisphp asphp Nirvanixphp returnsphp anphp arrayphp ifphp therephp is
php php php php php php php php php php php php php php php php/php/morephp thanphp onephp,php butphp doesnphp'tphp returnphp anphp arrayphp ifphp therephp isphp onlyphp onephp.
php php php php php php php php php php php php ifphp php(php$numFoldersphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$folderPathphp php=php php$responsephp-php>ListFolderphp-php>Folderphp-php>Pathphp;
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$resultArrayphp,php php$folderPathphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>getAllFoldersphp(php'php/php'php php.php php$folderPathphp,php php$resultArrayphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php foreachphp php(php$responsephp-php>ListFolderphp-php>Folderphp asphp php$arrayElemphp)php php{
php php php php php php php php php php php php php php php php php php php php php$folderPathphp php=php php$arrayElemphp-php>Pathphp;
php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$resultArrayphp,php php$folderPathphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getAllFoldersphp(php'php/php'php php.php php$folderPathphp,php php$resultArrayphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp thephp itemsphp containedphp inphp thephp givenphp pathphp.php php Thephp items
php php php php php php*php returnedphp arephp thephp filesphp orphp objectsphp thatphp inphp thephp specifiedphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listItemsphp(php$pathphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php php$resultArrayphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$pathphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_imfNsphp-php>ListFolderphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'folderPathphp'php php=php>php php$pathphp,
php php php php php php php php php php php php php php php php php php php php php'pageNumberphp'php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php'pageSizephp'php php php php=php>php php$thisphp-php>maxPageSizephp,
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_Nirvanixphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_StorageServicephp_Exceptionphp(php'Errorphp onphp listphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$numFilesphp php=php php$responsephp-php>ListFolderphp-php>TotalFileCountphp;

php php php php php php php php php php php php php/php/Addphp thephp filephp namesphp tophp thephp array
php php php php php php php php php php php php ifphp php(php$numFilesphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/Needphp tophp specialphp casephp thisphp asphp Nirvanixphp returnsphp anphp arrayphp ifphp therephp is
php php php php php php php php php php php php php php php php php/php/morephp thanphp onephp,php butphp doesnphp'tphp returnphp anphp arrayphp ifphp therephp isphp onlyphp onephp.
php php php php php php php php php php php php php php php php ifphp php(php$numFilesphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultArrayphp[php]php php=php php(stringphp)php$responsephp-php>ListFolderphp-php>Filephp-php>Namephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$responsephp-php>ListFolderphp-php>Filephp asphp php$arrayElemphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultArrayphp[php]php php=php php(stringphp)php php$arrayElemphp-php>Namephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fullphp pathphp tophp anphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_getFullPathphp(php$pathphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_remoteDirectoryphp php.php php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp clientphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanix
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_nirvanixphp;
php php php php php}
php}
