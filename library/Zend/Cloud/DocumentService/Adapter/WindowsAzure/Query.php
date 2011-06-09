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

php/php*
php php*php php@seephp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php*php/
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/QueryAdapterphp.phpphp'php;

php/php*php*
php php*php Classphp implementingphp Queryphp adapterphp forphp workingphp withphp Azurephp queriesphp inphp a
php php*php structuredphp way
php php*
php php*php php@todophp php php php php php php Lookphp intophp preventingphp aphp queryphp injectionphp attackphp.
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php implementsphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php{
php php php php php/php*php*
php php php php php php*php Azurephp concretephp query
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php php php php php php*php/
php php php php protectedphp php$php_azureSelectphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQueryphp php$selectphp Tablephp selectphp object
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$selectphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$selectphp instanceofphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQueryphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/TableEntityQueryphp.phpphp'php;
php php php php php php php php php php php php php$selectphp php=php newphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQueryphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_azureSelectphp php=php php$selectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php SELECTphp clausephp php(fieldsphp tophp bephp selectedphp)
php php php php php php*
php php php php php php*php Doesphp nothingphp forphp Azurephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$select
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$selectphp)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php FROMphp clausephp php(tablephp namephp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$from
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php/
php php php php publicphp functionphp fromphp(php$fromphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_azureSelectphp-php>fromphp(php$fromphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php WHEREphp clausephp php(conditionsphp tophp bephp usedphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$where
php php php php php php*php php@paramphp mixedphp php$valuephp Valuephp orphp arrayphp ofphp valuesphp tophp bephp insertedphp insteadphp ofphp php?
php php php php php php*php php@paramphp stringphp php$opphp Operationphp tophp usephp tophp joinphp wherephp clausesphp php(ANDphp/ORphp)
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php/
php php php php publicphp functionphp wherephp(php$wherephp,php php$valuephp php=php nullphp,php php$opphp php=php php'andphp'php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$valuephp)php php&php&php php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php/php/php fixphp bugletphp inphp Azurephp php-php numericphp valuesphp arephp quotedphp unlessphp passedphp asphp anphp array
php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_azureSelectphp-php>wherephp(php$wherephp,php php$valuephp,php php$opphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php WHEREphp clausephp forphp itemphp ID
php php php php php php*
php php php php php php*php Thisphp onephp shouldphp bephp usedphp whenphp fetchingphp specificphp rowsphp sincephp somephp adapters
php php php php php php*php havephp specialphp syntaxphp forphp primaryphp keys
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$valuephp Rowphp IDphp forphp thephp documentphp php(PartitionKeyphp,php RowKeyphp)
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php/
php php php php publicphp functionphp whereIdphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp keyphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_azureSelectphp-php>wherePartitionKeyphp(php$valuephp[php0php]php)php-php>whereRowKeyphp(php$valuephp[php1php]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php LIMITphp clausephp php(howphp manyphp rowsphp tophp returnphp)
php php php php php php*
php php php php php php*php php@paramphp php intphp php$limit
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$limitphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_azureSelectphp-php>topphp(php$limitphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ORDERphp BYphp clausephp php(sortingphp)
php php php php php php*
php php php php php php*php php@todophp php php Azurephp servicephp doesnphp'tphp seemphp tophp supportphp thisphp yetphp;php emulatephp?
php php php php php php*php php@paramphp php stringphp php$sortphp Columnphp tophp sortphp by
php php php php php php*php php@paramphp php stringphp php$directionphp Directionphp php-php ascphp/desc
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_WindowsAzurephp_Query
php php php php php php*php php@throwsphp Zendphp_Cloudphp_OperationNotAvailableException
php php php php php php*php/
php php php php publicphp functionphp orderphp(php$sortphp,php php$directionphp php=php php'ascphp'php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php'Nophp supportphp forphp sortingphp forphp Azurephp yetphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Azurephp selectphp query
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php php php php php php*php/
php php php php publicphp functionphp getAzureSelectphp(php)
php php php php php{
php php php php php php php php returnphp php php$thisphp-php>php_azureSelectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblephp query
php php php php php php*
php php php php php php*php Simplyphp returnphp thephp WindowsAzurephp tablephp entityphp queryphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAzureSelectphp(php)php;
php php php php php}
php}
