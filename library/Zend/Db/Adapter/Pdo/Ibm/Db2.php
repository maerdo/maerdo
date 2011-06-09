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
php php*php php@versionphp php php php php$Idphp:php Dbphp2php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Dbphp_Adapterphp_Pdophp_Ibmphp_Dbphp2
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
php php php php php php php php php.php php"FROMphp SYSCATphp.TABLESphp php"php;
php php php php php php php php returnphp php$thisphp-php>php_adapterphp-php>fetchColphp(php$sqlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php DBphp2php catalogphp lookupphp forphp describephp table
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECTphp DISTINCTphp cphp.tabschemaphp,php cphp.tabnamephp,php cphp.colnamephp,php cphp.colnophp,
php php php php php php php php php php php php php php php php cphp.typenamephp,php cphp.defaultphp,php cphp.nullsphp,php cphp.lengthphp,php cphp.scalephp,
php php php php php php php php php php php php php php php php cphp.identityphp,php tcphp.typephp ASphp tabconsttypephp,php kphp.colseq
php php php php php php php php php php php php php php php php FROMphp syscatphp.columnsphp c
php php php php php php php php php php php php php php php php LEFTphp JOINphp php(syscatphp.keycolusephp kphp JOINphp syscatphp.tabconstphp tc
php php php php php php php php php php php php php php php php php ONphp php(kphp.tabschemaphp php=php tcphp.tabschema
php php php php php php php php php php php php php php php php php php php ANDphp kphp.tabnamephp php=php tcphp.tabname
php php php php php php php php php php php php php php php php php php php ANDphp tcphp.typephp php=php php'Pphp'php)php)
php php php php php php php php php php php php php php php php php ONphp php(cphp.tabschemaphp php=php kphp.tabschema
php php php php php php php php php php php php php php php php php ANDphp cphp.tabnamephp php=php kphp.tabname
php php php php php php php php php php php php php php php php php ANDphp cphp.colnamephp php=php kphp.colnamephp)
php php php php php php php php php php php php WHEREphp php"
php php php php php php php php php php php php php.php php$thisphp-php>php_adapterphp-php>quoteIntophp(php'UPPERphp(cphp.tabnamephp)php php=php UPPERphp(php?php)php'php,php php$tableNamephp)php;
php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php$thisphp-php>php_adapterphp-php>quoteIntophp(php'php ANDphp UPPERphp(cphp.tabschemaphp)php php=php UPPERphp(php?php)php'php,php php$schemaNamephp)php;
php php php php php php php php php}
php php php php php php php php php$sqlphp php.php=php php"php ORDERphp BYphp cphp.colnophp"php;

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php php$stmtphp php=php php$thisphp-php>php_adapterphp-php>queryphp(php$sqlphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Tophp avoidphp casephp issuesphp,php fetchphp usingphp FETCHphp_NUM
php php php php php php php php php php*php/
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
php php php php php php php php php$nullsphp php php php php php php php php php php=php php6php;
php php php php php php php php php$lengthphp php php php php php php php php php=php php7php;
php php php php php php php php php$scalephp php php php php php php php php php php=php php8php;
php php php php php php php php php$identityColphp php php php php=php php9php;
php php php php php php php php php$tabconstypephp php php php php=php php1php0php;
php php php php php php php php php$colseqphp php php php php php php php php php=php php1php1php;

php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php listphp php(php$primaryphp,php php$primaryPositionphp,php php$identityphp)php php=php arrayphp(falsephp,php nullphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(php$rowphp[php$tabconstypephp]php php=php=php php'Pphp'php)php php{
php php php php php php php php php php php php php php php php php$primaryphp php=php truephp;
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php php$rowphp[php$colseqphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Inphp IBMphp DBphp2php,php anphp columnphp canphp bephp IDENTITY
php php php php php php php php php php php php php php*php evenphp ifphp itphp isphp notphp partphp ofphp thephp PRIMARYphp KEYphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$rowphp[php$identityColphp]php php=php=php php'Yphp'php)php php{
php php php php php php php php php php php php php php php php php$identityphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$descphp[php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$tabschemaphp]php)php,
php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$tabnamephp]php)php,
php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>php_adapterphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php,
php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php$rowphp[php$colnophp]php+php1php,
php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$rowphp[php$typenamephp]php,
php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$rowphp[php$defaultphp]php,
php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php(boolphp)php php(php$rowphp[php$nullsphp]php php=php=php php'Yphp'php)php,
php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$rowphp[php$lengthphp]php,
php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php php$rowphp[php$scalephp]php,
php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php php(php$rowphp[php$typenamephp]php php=php=php php'DECIMALphp'php php?php php$rowphp[php$lengthphp]php php:php php0php)php,
php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php=php>php php$primaryphp,
php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php=php>php php$identity
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp DBphp2php-specificphp LIMITphp clausephp tophp thephp SELECTphp statementphp.
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
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$offsetphp php=php=php php0php php&php&php php$countphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$limitphp_sqlphp php=php php$sqlphp php.php php"php FETCHphp FIRSTphp php$countphp ROWSphp ONLYphp"php;
php php php php php php php php php php php php php php php php returnphp php$limitphp_sqlphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php DBphp2php doesphp notphp implementphp thephp LIMITphp clausephp asphp somephp RDBMSphp dophp.
php php php php php php php php php php php php php php*php Wephp havephp tophp simulatephp itphp withphp subqueriesphp andphp ROWNUMphp.
php php php php php php php php php php php php php php*php Unfortunatelyphp becausephp wephp usephp thephp columnphp wildcardphp php"php*php"php,
php php php php php php php php php php php php php php*php thisphp putsphp anphp extraphp columnphp intophp thephp queryphp resultphp setphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$limitphp_sqlphp php=php php"SELECTphp zphp2php.php*
php php php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php php php SELECTphp ROWphp_NUMBERphp(php)php OVERphp(php)php ASphp php\php"ZENDphp_DBphp_ROWNUMphp\php"php,php zphp1php.php*
php php php php php php php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php php php php php php php php"php php.php php$sqlphp php.php php"
php php php php php php php php php php php php php php php php php php php)php zphp1
php php php php php php php php php php php php php php php)php zphp2
php php php php php php php php php php php php php php WHEREphp zphp2php.zendphp_dbphp_rownumphp BETWEENphp php"php php.php php(php$offsetphp+php1php)php php.php php"php ANDphp php"php php.php php(php$offsetphp+php$countphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$limitphp_sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php DBphp2php-specificphp lastphp sequencephp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sequenceName
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp lastSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$sqlphp php=php php'SELECTphp PREVVALphp FORphp php'php.php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php$sequenceNamephp)php.php'php ASphp VALphp FROMphp SYSIBMphp.SYSDUMMYphp1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_adapterphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php DBphp2php-specificphp sequencephp idphp value
php php php php php php*
php php php php php php*php php php@paramphp stringphp php$sequenceName
php php php php php php*php php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp nextSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$sqlphp php=php php'SELECTphp NEXTVALphp FORphp php'php.php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php$sequenceNamephp)php.php'php ASphp VALphp FROMphp SYSIBMphp.SYSDUMMYphp1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_adapterphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
