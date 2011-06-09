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

php/php*php*
php php*php FileSystemphp adapterphp forphp unstructuredphp cloudphp storagephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_StorageServicephp_Adapterphp_FileSystemphp implementsphp Zendphp_Cloudphp_StorageServicephp_Adapter
php{

php php php php php/php*php*
php php php php php php*php Optionsphp arrayphp keysphp forphp thephp filephp systemphp adapterphp.
php php php php php php*php/
php php php php constphp LOCALphp_DIRECTORYphp php=php php'localphp_directoryphp'php;

php php php php php/php*php*
php php php php php php*php Thephp directoryphp forphp thephp data
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_directoryphp php=php nullphp;

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

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:LOCALphp_DIRECTORYphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_directoryphp php=php php$optionsphp[selfphp:php:LOCALphp_DIRECTORYphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_directoryphp php=php realpathphp(sysphp_getphp_tempphp_dirphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp itemphp fromphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php TODOphp:php Supportphp streaming
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp falsephp|string
php php php php php php*php/
php php php php publicphp functionphp fetchItemphp(php$pathphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$filepathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php php$pathphp php php php php php=php realpathphp(php$filepathphp)php;

php php php php php php php php ifphp php(php!php$pathphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp filephp_getphp_contentsphp(php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp itemphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*
php php php php php php*php php@TODOphp Supportphp streams
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$destinationPath
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeItemphp(php$destinationPathphp,php php$dataphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php;
php php php php php php php php filephp_putphp_contentsphp(php$pathphp,php php$dataphp)php;
php php php php php php php php chmodphp(php$pathphp,php php0php7php7php7php)php;
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
php php php php php php php php ifphp php(php!issetphp(php$pathphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$filepathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php ifphp php(filephp_existsphp(php$filepathphp)php)php php{
php php php php php php php php php php php php unlinkphp(php$filepathphp)php;
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
php php php php php php php php copyphp(php$thisphp-php>php_getFullPathphp(php$sourcePathphp)php,php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php WARNINGphp:php Thisphp operationphp isphp php*veryphp*php expensivephp forphp servicesphp thatphp dophp not
php php php php php php*php supportphp movingphp anphp itemphp nativelyphp.
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
php php php php php php php php renamephp(php$thisphp-php>php_getFullPathphp(php$sourcePathphp)php,php php$thisphp-php>php_getFullPathphp(php$destinationPathphp)php)php;
php php php php php}

php php php php php php php php php/php*php*
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
php php php php php php php php renamephp(
php php php php php php php php php php php php php$thisphp-php>php_getFullPathphp(php$pathphp)php,
php php php php php php php php php php php php dirnamephp(php$thisphp-php>php_getFullPathphp(php$pathphp)php)php php.php DIRECTORYphp_SEPARATORphp php.php php$name
php php php php php php php php php)php;
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
php php php php php php php php php$listingphp php=php scandirphp(php$thisphp-php>php_getFullPathphp(php$pathphp)php)php;

php php php php php php php php php/php/php Removephp thephp hiddenphp navigationphp directories
php php php php php php php php php$listingphp php=php arrayphp_diffphp(php$listingphp,php arrayphp(php'php.php'php,php php'php.php.php'php)php)php;

php php php php php php php php returnphp php$listingphp;
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
php php php php php php php php php$fullPathphp php=php php$thisphp-php>php_getFullPathphp(php$pathphp)php;
php php php php php php php php php$metadataphp php=php nullphp;
php php php php php php php php ifphp php(filephp_existsphp(php$fullPathphp)php)php php{
php php php php php php php php php php php php php$metadataphp php=php statphp(realpathphp(php$fullPathphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$metadataphp)php php?php php$metadataphp php:php falsephp;
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
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Storingphp metadataphp notphp implementedphp'php)php;
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
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Deletingphp metadataphp notphp implementedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fullphp pathphp forphp thephp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_getFullPathphp(php$pathphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_directoryphp php.php DIRECTORYphp_SEPARATORphp php.php php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp clientphp.
php php php php php php*php php@returnphp strings
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_directoryphp;
php php php php php}
php}
