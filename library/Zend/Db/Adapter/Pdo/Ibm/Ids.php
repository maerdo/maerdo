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
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Idsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Pdophp_Ibmphp php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Pdophp/Ibmphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Dbphp_Statementphp_Pdophp_Ibmphp php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Pdophp/Ibmphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Pdophp_Ibmphp_Ids
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructphp thephp dataphp serverphp classphp.
php php php php php php*
php php php php php php*php Itphp willphp bephp usedphp tophp generatephp nonphp-genericphp SQL
php php php php php php*php forphp aphp particularphp dataphp server
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Adapterphp_Abstractphp php$adapter
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$adapterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECTphp tabnamephp php"
php php php php php php php php php.php php"FROMphp systablesphp php"php;

php php php php php php php php returnphp php$thisphp-php>php_adapterphp-php>fetchColphp(php$sqlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php IDSphp catalogphp lookupphp forphp describephp table
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php thisphp isphp stillphp aphp workphp inphp progress

php php php php php php php php php$sqlphp=php php"SELECTphp DISTINCTphp tphp.ownerphp,php tphp.tabnamephp,php cphp.colnamephp,php cphp.colnophp,php cphp.coltypephp,
php php php php php php php php php php php php php php php dphp.defaultphp,php cphp.collengthphp,php tphp.tabid
php php php php php php php php php php php php php php php FROMphp syscolumnsphp c
php php php php php php php php php php php php php php php JOINphp systablesphp tphp ONphp cphp.tabidphp php=php tphp.tabid
php php php php php php php php php php php php php php php LEFTphp JOINphp sysdefaultsphp dphp ONphp cphp.tabidphp php=php dphp.tabidphp ANDphp cphp.colnophp php=php dphp.colno
php php php php php php php php php php php php php php php WHEREphp php"
php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_adapterphp-php>quoteIntophp(php'UPPERphp(tphp.tabnamephp)php php=php UPPERphp(php?php)php'php,php php$tableNamephp)php;
php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php$thisphp-php>php_adapterphp-php>quoteIntophp(php'php ANDphp UPPERphp(tphp.ownerphp)php php=php UPPERphp(php?php)php'php,php php$schemaNamephp)php;
php php php php php php php php php}
php php php php php php php php php$sqlphp php.php=php php"php ORDERphp BYphp cphp.colnophp"php;

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php php$stmtphp php=php php$thisphp-php>php_adapterphp-php>queryphp(php$sqlphp)php;

php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Thephp orderingphp ofphp columnsphp isphp definedphp byphp thephp queryphp sophp wephp canphp map
php php php php php php php php php php*php tophp variablesphp tophp improvephp readability
php php php php php php php php php php*php/
php php php php php php php php php$tabschemaphp php php php php php php=php php0php;
php php php php php php php php php$tabnamephp php php php php php php php php=php php1php;
php php php php php php php php php$colnamephp php php php php php php php php=php php2php;
php php php php php php php php php$colnophp php php php php php php php php php php=php php3php;
php php php php php php php php php$typenamephp php php php php php php php=php php4php;
php php php php php php php php php$defaultphp php php php php php php php php=php php5php;
php php php php php php php php php$lengthphp php php php php php php php php php=php php6php;
php php php php php php php php php$tabidphp php php php php php php php php php php=php php7php;

php php php php php php php php php$primaryColsphp php=php nullphp;

php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php php$primaryphp php=php falsephp;
php php php php php php php php php php php php php$primaryPositionphp php=php nullphp;

php php php php php php php php php php php php ifphp php(php!php$primaryColsphp)php php{
php php php php php php php php php php php php php php php php php$primaryColsphp php=php php$thisphp-php>php_getPrimaryInfophp(php$rowphp[php$tabidphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$rowphp[php$colnophp]php,php php$primaryColsphp)php)php php{
php php php php php php php php php php php php php php php php php$primaryphp php=php truephp;
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php php$primaryColsphp[php$rowphp[php$colnophp]php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$identityphp php=php falsephp;
php php php php php php php php php php php php ifphp php(php$rowphp[php$typenamephp]php php=php=php php6php php+php php2php5php6php php|php|
php php php php php php php php php php php php php php php php php$rowphp[php$typenamephp]php php=php=php php1php8php php+php php2php5php6php)php php{
php php php php php php php php php php php php php php php php php$identityphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$descphp[php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php]php php=php arrayphp php(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$tabschemaphp]php)php,
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$tabnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php php=php>php php$rowphp[php$colnophp]php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php php=php>php php$thisphp-php>php_getDataTypephp(php$rowphp[php$typenamephp]php)php,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php php=php>php php$rowphp[php$defaultphp]php,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php php=php>php php(boolphp)php php!php(php$rowphp[php$typenamephp]php php-php php2php5php6php php>php=php php0php)php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php php=php>php php$rowphp[php$lengthphp]php,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php php=php>php php(php$rowphp[php$typenamephp]php php=php=php php5php php?php php$rowphp[php$lengthphp]php&php2php5php5php php:php php0php)php,
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php php=php>php php(php$rowphp[php$typenamephp]php php=php=php php5php php?php php(intphp)php(php$rowphp[php$lengthphp]php/php2php5php6php)php php:php php0php)php,
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php php=php>php php$primaryphp,
php php php php php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php php=php>php php$identity
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp numberphp representationphp ofphp aphp dataphp type
php php php php php php*php tophp aphp string
php php php php php php*
php php php php php php*php php@paramphp intphp php$typeNo
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getDataTypephp(php$typeNophp)
php php php php php{
php php php php php php php php php$typemapphp php=php arrayphp(
php php php php php php php php php php php php php0php php php php php php php php=php>php php"CHARphp"php,
php php php php php php php php php php php php php1php php php php php php php php=php>php php"SMALLINTphp"php,
php php php php php php php php php php php php php2php php php php php php php php=php>php php"INTEGERphp"php,
php php php php php php php php php php php php php3php php php php php php php php=php>php php"FLOATphp"php,
php php php php php php php php php php php php php4php php php php php php php php=php>php php"SMALLFLOATphp"php,
php php php php php php php php php php php php php5php php php php php php php php=php>php php"DECIMALphp"php,
php php php php php php php php php php php php php6php php php php php php php php=php>php php"SERIALphp"php,
php php php php php php php php php php php php php7php php php php php php php php=php>php php"DATEphp"php,
php php php php php php php php php php php php php8php php php php php php php php=php>php php"MONEYphp"php,
php php php php php php php php php php php php php9php php php php php php php php=php>php php"NULLphp"php,
php php php php php php php php php php php php php1php0php php php php php php php=php>php php"DATETIMEphp"php,
php php php php php php php php php php php php php1php1php php php php php php php=php>php php"BYTEphp"php,
php php php php php php php php php php php php php1php2php php php php php php php=php>php php"TEXTphp"php,
php php php php php php php php php php php php php1php3php php php php php php php=php>php php"VARCHARphp"php,
php php php php php php php php php php php php php1php4php php php php php php php=php>php php"INTERVALphp"php,
php php php php php php php php php php php php php1php5php php php php php php php=php>php php"NCHARphp"php,
php php php php php php php php php php php php php1php6php php php php php php php=php>php php"NVARCHARphp"php,
php php php php php php php php php php php php php1php7php php php php php php php=php>php php"INTphp8php"php,
php php php php php php php php php php php php php1php8php php php php php php php=php>php php"SERIALphp8php"php,
php php php php php php php php php php php php php1php9php php php php php php php=php>php php"SETphp"php,
php php php php php php php php php php php php php2php0php php php php php php php=php>php php"MULTISETphp"php,
php php php php php php php php php php php php php2php1php php php php php php php=php>php php"LISTphp"php,
php php php php php php php php php php php php php2php2php php php php php php php=php>php php"Unnamedphp ROWphp"php,
php php php php php php php php php php php php php4php0php php php php php php php=php>php php"Variablephp-lengthphp opaquephp typephp"php,
php php php php php php php php php php php php php4php1php1php8php php php php php=php>php php"Namedphp ROWphp"
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$typeNophp php-php php2php5php6php php>php=php php0php)php php{
php php php php php php php php php php php php php$typeNophp php=php php$typeNophp php-php php2php5php6php;
php php php php php php php php php}

php php php php php php php php returnphp php$typemapphp[php$typeNophp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp methodphp tophp retrievephp primaryphp keyphp column
php php php php php php*php andphp columnphp location
php php php php php php*
php php php php php php*php php@paramphp intphp php$tabid
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getPrimaryInfophp(php$tabidphp)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECTphp iphp.partphp1php,php iphp.partphp2php,php iphp.partphp3php,php iphp.partphp4php,php iphp.partphp5php,php iphp.partphp6php,
php php php php php php php php php php php php php php php php iphp.partphp7php,php iphp.partphp8php,php iphp.partphp9php,php iphp.partphp1php0php,php iphp.partphp1php1php,php iphp.partphp1php2php,
php php php php php php php php php php php php php php php php iphp.partphp1php3php,php iphp.partphp1php4php,php iphp.partphp1php5php,php iphp.partphp1php6
php php php php php php php php php php php php php php php php FROMphp sysindexesphp i
php php php php php php php php php php php php php php php php JOINphp sysconstraintsphp cphp ONphp cphp.idxnamephp php=php iphp.idxname
php php php php php php php php php php php php php php php php WHEREphp iphp.tabidphp php=php php"php php.php php$tabidphp php.php php"php ANDphp cphp.constrtypephp php=php php'Pphp'php"php;

php php php php php php php php php$stmtphp php=php php$thisphp-php>php_adapterphp-php>queryphp(php$sqlphp)php;
php php php php php php php php php$resultsphp php=php php$stmtphp-php>fetchAllphp(php)php;

php php php php php php php php php$colsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php thisphp shouldphp returnphp onlyphp php1php row
php php php php php php php php php/php/php unlessphp therephp isphp nophp primaryphp keyphp,
php php php php php php php php php/php/php inphp whichphp casephp,php thephp emptyphp arrayphp isphp returned
php php php php php php php php ifphp php(php$resultsphp)php php{
php php php php php php php php php php php php php$rowphp php=php php$resultsphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$colsphp;
php php php php php php php php php}

php php php php php php php php php$positionphp php=php php0php;
php php php php php php php php foreachphp php(php$rowphp asphp php$keyphp php=php>php php$colnophp)php php{
php php php php php php php php php php php php php$positionphp+php+php;
php php php php php php php php php php php php ifphp php(php$colnophp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php returnphp php$colsphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$colsphp[php$colnophp]php php=php php$positionphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp IDSphp-specificphp LIMITphp clausephp tophp thephp SELECTphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@paramphp integerphp php$count
php php php php php php*php php@paramphp integerphp php$offsetphp OPTIONAL
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)
php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}php elsephp ifphp php(php$countphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php$limitphp_sqlphp php=php strphp_ireplacephp(php"SELECTphp"php,php php"SELECTphp php*php FROMphp php(SELECTphp"php,php php$sqlphp)php;
php php php php php php php php php php php php php php php$limitphp_sqlphp php.php=php php"php)php WHEREphp php0php php=php php1php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$offsetphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$limitphp_sqlphp php=php strphp_ireplacephp(php"SELECTphp"php,php php"SELECTphp FIRSTphp php$countphp"php,php php$sqlphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$limitphp_sqlphp php=php strphp_ireplacephp(php"SELECTphp"php,php php"SELECTphp SKIPphp php$offsetphp LIMITphp php$countphp"php,php php$sqlphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$limitphp_sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php IDSphp-specificphp lastphp sequencephp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sequenceName
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp lastSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$sqlphp php=php php'SELECTphp php'php.php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php$sequenceNamephp)php.php'php.CURRVALphp FROMphp php'
php php php php php php php php php php php php php php php php.php'systablesphp WHEREphp tabidphp php=php php1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_adapterphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php php/php*php*
php php php php php php*php IDSphp-specificphp sequencephp idphp value
php php php php php php*
php php php php php php*php php php@paramphp stringphp php$sequenceName
php php php php php php*php php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp nextSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$sqlphp php=php php'SELECTphp php'php.php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php$sequenceNamephp)php.php'php.NEXTVALphp FROMphp php'
php php php php php php php php php php php php php php php php.php'systablesphp WHEREphp tabidphp php=php php1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_adapterphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
