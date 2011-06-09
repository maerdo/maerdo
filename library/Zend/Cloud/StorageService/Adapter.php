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

php/php*php*
php php*php Commonphp interfacephp forphp unstructuredphp cloudphp storagephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp StorageService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Cloudphp_StorageServicephp_Adapter
php{
php php php php php/php/php HTTPphp adapterphp tophp usephp forphp connections
php php php php constphp HTTPphp_ADAPTERphp php=php php'httpphp_adapterphp'php;

php php php php php/php*php*
php php php php php php*php Getphp anphp itemphp fromphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp fetchItemphp(php$pathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Storephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp itemphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*php php@paramphp stringphp php$destinationPath
php php php php php php*php php@paramphp mixedphp php php$data
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp storeItemphp(php$destinationPathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp anphp itemphp inphp thephp storagephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteItemphp(php$pathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Copyphp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php Thephp php$destinationPathphp mustphp bephp aphp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp copyItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Movephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp pathphp.
php php php php php php*
php php php php php php*php Thephp php$destinationPathphp mustphp bephp aphp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourcePath
php php php php php php*php php@paramphp php stringphp php$destinationphp path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp moveItemphp(php$sourcePathphp,php php$destinationPathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Renamephp anphp itemphp inphp thephp storagephp servicephp tophp aphp givenphp namephp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renameItemphp(php$pathphp,php php$namephp,php php$optionsphp php=php nullphp)php;

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
php php php php publicphp functionphp listItemsphp(php$pathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchMetadataphp(php$pathphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$destinationPath
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeMetadataphp(php$destinationPathphp,php php$metadataphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp aphp keyphp/valuephp arrayphp ofphp metadataphp atphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteMetadataphp(php$pathphp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp clientphp.
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)php;
php}
