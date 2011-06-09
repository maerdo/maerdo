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
php php*php php@versionphp php php php php$Idphp:php Pgsqlphp.phpphp php2php2php7php8php8php php2php0php1php0php-php0php8php-php0php3php php1php8php:php2php9php:php5php5Zphp ramonphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Pdophp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Pdophp/Abstractphp.phpphp'php;


php/php*php*
php php*php Classphp forphp connectingphp tophp PostgreSQLphp databasesphp andphp performingphp commonphp operationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Pdophp_Pgsqlphp extendsphp Zendphp_Dbphp_Adapterphp_Pdophp_Abstract
php{

php php php php php/php*php*
php php php php php php*php PDOphp typephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pdoTypephp php=php php'pgsqlphp'php;

php php php php php/php*php*
php php php php php php*php Keysphp arephp UPPERCASEphp SQLphp datatypesphp orphp thephp constants
php php php php php php*php Zendphp_Dbphp:php:INTphp_TYPEphp,php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,php orphp Zendphp_Dbphp:php:FLOATphp_TYPEphp.
php php php php php php*
php php php php php php*php Valuesphp arephp:
php php php php php php*php php0php php=php php3php2php-bitphp integer
php php php php php php*php php1php php=php php6php4php-bitphp integer
php php php php php php*php php2php php=php floatphp orphp decimal
php php php php php php*
php php php php php php*php php@varphp arrayphp Associativephp arrayphp ofphp datatypesphp tophp valuesphp php0php,php php1php,php orphp php2php.
php php php php php php*php/
php php php php protectedphp php$php_numericDataTypesphp php=php arrayphp(
php php php php php php php php Zendphp_Dbphp:php:INTphp_TYPEphp php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php Zendphp_Dbphp:php:BIGINTphp_TYPEphp php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php Zendphp_Dbphp:php:FLOATphp_TYPEphp php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'INTEGERphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'SERIALphp'php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'SMALLINTphp'php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'BIGINTphp'php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php php'BIGSERIALphp'php php php php php php php php php php php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php php'DECIMALphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'DOUBLEphp PRECISIONphp'php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'NUMERICphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'REALphp'php php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPE
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp PDOphp objectphp andphp connectsphp tophp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_connectphp(php)php;

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_configphp[php'charsetphp'php]php)php)php php{
php php php php php php php php php php php php php$sqlphp php=php php"SETphp NAMESphp php'php"php php.php php$thisphp-php>php_configphp[php'charsetphp'php]php php.php php"php'php"php;
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>execphp(php$sqlphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php)
php php php php php{
php php php php php php php php php/php/php php@todophp usephp aphp betterphp queryphp withphp joinsphp insteadphp ofphp subqueries
php php php php php php php php php$sqlphp php=php php"SELECTphp cphp.relnamephp ASphp tablephp_namephp php"
php php php php php php php php php php php php php php.php php"FROMphp pgphp_classphp cphp,php pgphp_userphp uphp php"
php php php php php php php php php php php php php php.php php"WHEREphp cphp.relownerphp php=php uphp.usesysidphp ANDphp cphp.relkindphp php=php php'rphp'php php"
php php php php php php php php php php php php php php.php php"ANDphp NOTphp EXISTSphp php(SELECTphp php1php FROMphp pgphp_viewsphp WHEREphp viewnamephp php=php cphp.relnamephp)php php"
php php php php php php php php php php php php php php.php php"ANDphp cphp.relnamephp php!php~php php'php^php(pgphp_php|sqlphp_php)php'php php"
php php php php php php php php php php php php php php.php php"UNIONphp php"
php php php php php php php php php php php php php php.php php"SELECTphp cphp.relnamephp ASphp tablephp_namephp php"
php php php php php php php php php php php php php php.php php"FROMphp pgphp_classphp cphp php"
php php php php php php php php php php php php php php.php php"WHEREphp cphp.relkindphp php=php php'rphp'php php"
php php php php php php php php php php php php php php.php php"ANDphp NOTphp EXISTSphp php(SELECTphp php1php FROMphp pgphp_viewsphp WHEREphp viewnamephp php=php cphp.relnamephp)php php"
php php php php php php php php php php php php php php.php php"ANDphp NOTphp EXISTSphp php(SELECTphp php1php FROMphp pgphp_userphp WHEREphp usesysidphp php=php cphp.relownerphp)php php"
php php php php php php php php php php php php php php.php php"ANDphp cphp.relnamephp php!php~php php'php^pgphp_php'php"php;

php php php php php php php php returnphp php$thisphp-php>fetchColphp(php$sqlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp columnphp descriptionsphp forphp aphp tablephp.
php php php php php php*
php php php php php php*php Thephp returnphp valuephp isphp anphp associativephp arrayphp keyedphp byphp thephp columnphp namephp,
php php php php php php*php asphp returnedphp byphp thephp RDBMSphp.
php php php php php php*
php php php php php php*php Thephp valuephp ofphp eachphp arrayphp elementphp isphp anphp associativephp array
php php php php php php*php withphp thephp followingphp keysphp:
php php php php php php*
php php php php php php*php SCHEMAphp_NAMEphp php php php php php php=php>php stringphp;php namephp ofphp databasephp orphp schema
php php php php php php*php TABLEphp_NAMEphp php php php php php php php=php>php stringphp;
php php php php php php*php COLUMNphp_NAMEphp php php php php php php=php>php stringphp;php columnphp name
php php php php php php*php COLUMNphp_POSITIONphp php php=php>php numberphp;php ordinalphp positionphp ofphp columnphp inphp table
php php php php php php*php DATAphp_TYPEphp php php php php php php php php=php>php stringphp;php SQLphp datatypephp namephp ofphp column
php php php php php php*php DEFAULTphp php php php php php php php php php php=php>php stringphp;php defaultphp expressionphp ofphp columnphp,php nullphp ifphp none
php php php php php php*php NULLABLEphp php php php php php php php php php=php>php booleanphp;php truephp ifphp columnphp canphp havephp nulls
php php php php php php*php LENGTHphp php php php php php php php php php php php=php>php numberphp;php lengthphp ofphp CHARphp/VARCHAR
php php php php php php*php SCALEphp php php php php php php php php php php php php=php>php numberphp;php scalephp ofphp NUMERICphp/DECIMAL
php php php php php php*php PRECISIONphp php php php php php php php php=php>php numberphp;php precisionphp ofphp NUMERICphp/DECIMAL
php php php php php php*php UNSIGNEDphp php php php php php php php php php=php>php booleanphp;php unsignedphp propertyphp ofphp anphp integerphp type
php php php php php php*php PRIMARYphp php php php php php php php php php php=php>php booleanphp;php truephp ifphp columnphp isphp partphp ofphp thephp primaryphp key
php php php php php php*php PRIMARYphp_POSITIONphp php=php>php integerphp;php positionphp ofphp columnphp inphp primaryphp key
php php php php php php*php IDENTITYphp php php php php php php php php php=php>php integerphp;php truephp ifphp columnphp isphp autophp-generatedphp withphp uniquephp values
php php php php php php*
php php php php php php*php php@todophp Discoverphp integerphp unsignedphp propertyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tableName
php php php php php php*php php@paramphp php stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECT
php php php php php php php php php php php php php php php php aphp.attnumphp,
php php php php php php php php php php php php php php php php nphp.nspnamephp,
php php php php php php php php php php php php php php php php cphp.relnamephp,
php php php php php php php php php php php php php php php php aphp.attnamephp ASphp colnamephp,
php php php php php php php php php php php php php php php php tphp.typnamephp ASphp typephp,
php php php php php php php php php php php php php php php php aphp.atttypmodphp,
php php php php php php php php php php php php php php php php FORMATphp_TYPEphp(aphp.atttypidphp,php aphp.atttypmodphp)php ASphp completephp_typephp,
php php php php php php php php php php php php php php php php dphp.adsrcphp ASphp defaultphp_valuephp,
php php php php php php php php php php php php php php php php aphp.attnotnullphp ASphp notnullphp,
php php php php php php php php php php php php php php php php aphp.attlenphp ASphp lengthphp,
php php php php php php php php php php php php php php php php cophp.contypephp,
php php php php php php php php php php php php php php php php ARRAYphp_TOphp_STRINGphp(cophp.conkeyphp,php php'php,php'php)php ASphp conkey
php php php php php php php php php php php php FROMphp pgphp_attributephp ASphp a
php php php php php php php php php php php php php php php php JOINphp pgphp_classphp ASphp cphp ONphp aphp.attrelidphp php=php cphp.oid
php php php php php php php php php php php php php php php php JOINphp pgphp_namespacephp ASphp nphp ONphp cphp.relnamespacephp php=php nphp.oid
php php php php php php php php php php php php php php php php JOINphp pgphp_typephp ASphp tphp ONphp aphp.atttypidphp php=php tphp.oid
php php php php php php php php php php php php php php php php LEFTphp OUTERphp JOINphp pgphp_constraintphp ASphp cophp ONphp php(cophp.conrelidphp php=php cphp.oid
php php php php php php php php php php php php php php php php php php php php ANDphp aphp.attnumphp php=php ANYphp(cophp.conkeyphp)php ANDphp cophp.contypephp php=php php'pphp'php)
php php php php php php php php php php php php php php php php LEFTphp OUTERphp JOINphp pgphp_attrdefphp ASphp dphp ONphp dphp.adrelidphp php=php cphp.oidphp ANDphp dphp.adnumphp php=php aphp.attnum
php php php php php php php php php php php php WHEREphp aphp.attnumphp php>php php0php ANDphp cphp.relnamephp php=php php"php.php$thisphp-php>quotephp(php$tableNamephp)php;
php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php"php ANDphp nphp.nspnamephp php=php php"php.php$thisphp-php>quotephp(php$schemaNamephp)php;
php php php php php php php php php}
php php php php php php php php php$sqlphp php.php=php php'php ORDERphp BYphp aphp.attnumphp'php;

php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp)php;

php php php php php php php php php/php/php Usephp FETCHphp_NUMphp sophp wephp arephp notphp dependentphp onphp thephp CASEphp attributephp ofphp thephp PDOphp connection
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;

php php php php php php php php php$attnumphp php php php php php php php php=php php0php;
php php php php php php php php php$nspnamephp php php php php php php php=php php1php;
php php php php php php php php php$relnamephp php php php php php php php=php php2php;
php php php php php php php php php$colnamephp php php php php php php php=php php3php;
php php php php php php php php php$typephp php php php php php php php php php php=php php4php;
php php php php php php php php php$atttypemodphp php php php php=php php5php;
php php php php php php php php php$completephp_typephp php=php php6php;
php php php php php php php php php$defaultphp_valuephp php=php php7php;
php php php php php php php php php$notnullphp php php php php php php php=php php8php;
php php php php php php php php php$lengthphp php php php php php php php php=php php9php;
php php php php php php php php php$contypephp php php php php php php php=php php1php0php;
php php php php php php php php php$conkeyphp php php php php php php php php=php php1php1php;

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php php$defaultValuephp php=php php$rowphp[php$defaultphp_valuephp]php;
php php php php php php php php php php php php ifphp php(php$rowphp[php$typephp]php php=php=php php'varcharphp'php php|php|php php$rowphp[php$typephp]php php=php=php php'bpcharphp'php php)php php{
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/characterphp(php?php:php varyingphp)php?php(php?php:php\php(php(php\dphp+php)php\php)php)php?php/php'php,php php$rowphp[php$completephp_typephp]php,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$matchesphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$rowphp[php$lengthphp]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$rowphp[php$lengthphp]php php=php nullphp;php php/php/php unlimited
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^php'php(php.php*php?php)php'php:php:php(php?php:characterphp varyingphp|bpcharphp)php$php/php"php,php php$defaultValuephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$defaultValuephp php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php listphp(php$primaryphp,php php$primaryPositionphp,php php$identityphp)php php=php arrayphp(falsephp,php nullphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(php$rowphp[php$contypephp]php php=php=php php'pphp'php)php php{
php php php php php php php php php php php php php php php php php$primaryphp php=php truephp;
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php arrayphp_searchphp(php$rowphp[php$attnumphp]php,php explodephp(php'php,php'php,php php$rowphp[php$conkeyphp]php)php)php php+php php1php;
php php php php php php php php php php php php php php php php php$identityphp php=php php(boolphp)php php(pregphp_matchphp(php'php/php^nextvalphp/php'php,php php$rowphp[php$defaultphp_valuephp]php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$descphp[php$thisphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$nspnamephp]php)php,
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$relnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php$rowphp[php$attnumphp]php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$rowphp[php$typephp]php,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$defaultValuephp,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php(boolphp)php php(php$rowphp[php$notnullphp]php php!php=php php'tphp'php)php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$rowphp[php$lengthphp]php,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php=php>php php$primaryphp,
php php php php php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php=php>php php$identity
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$descphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp anphp adapterphp-specificphp LIMITphp clausephp tophp thephp SELECTphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@paramphp integerphp php$count
php php php php php php*php php@paramphp integerphp php$offsetphp OPTIONAL
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)
php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$sqlphp php.php=php php"php LIMITphp php$countphp"php;
php php php php php php php php ifphp php(php$offsetphp php>php php0php)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php"php OFFSETphp php$offsetphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp mostphp recentphp valuephp fromphp thephp specifiedphp sequencephp inphp thephp databasephp.
php php php php php php*php Thisphp isphp supportedphp onlyphp onphp RDBMSphp brandsphp thatphp supportphp sequences
php php php php php php*php php(ephp.gphp.php Oraclephp,php PostgreSQLphp,php DBphp2php)php.php php Otherphp RDBMSphp brandsphp returnphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sequenceName
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp lastSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$sequenceNamephp php=php strphp_replacephp(php$thisphp-php>getQuoteIdentifierSymbolphp(php)php,php php'php'php,php php(stringphp)php php$sequenceNamephp)php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php"SELECTphp CURRVALphp(php"
php php php php php php php php php php php php php php php php.php php$thisphp-php>quotephp(php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php)
php php php php php php php php php php php php php php php php.php php"php)php"php)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp aphp newphp valuephp fromphp thephp specifiedphp sequencephp inphp thephp databasephp,php andphp returnphp itphp.
php php php php php php*php Thisphp isphp supportedphp onlyphp onphp RDBMSphp brandsphp thatphp supportphp sequences
php php php php php php*php php(ephp.gphp.php Oraclephp,php PostgreSQLphp,php DBphp2php)php.php php Otherphp RDBMSphp brandsphp returnphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sequenceName
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp nextSequenceIdphp(php$sequenceNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$sequenceNamephp php=php strphp_replacephp(php$thisphp-php>getQuoteIdentifierSymbolphp(php)php,php php'php'php,php php(stringphp)php php$sequenceNamephp)php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php"SELECTphp NEXTVALphp(php"
php php php php php php php php php php php php php php php php.php php$thisphp-php>quotephp(php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php)
php php php php php php php php php php php php php php php php.php php"php)php"php)php;
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp lastphp IDphp generatedphp automaticallyphp byphp anphp IDENTITYphp/AUTOINCREMENTphp columnphp.
php php php php php php*
php php php php php php*php Asphp aphp conventionphp,php onphp RDBMSphp brandsphp thatphp supportphp sequences
php php php php php php*php php(ephp.gphp.php Oraclephp,php PostgreSQLphp,php DBphp2php)php,php thisphp methodphp formsphp thephp namephp ofphp aphp sequence
php php php php php php*php fromphp thephp argumentsphp andphp returnsphp thephp lastphp idphp generatedphp byphp thatphp sequencephp.
php php php php php php*php Onphp RDBMSphp brandsphp thatphp supportphp IDENTITYphp/AUTOINCREMENTphp columnsphp,php thisphp method
php php php php php php*php returnsphp thephp lastphp valuephp generatedphp forphp suchphp aphp columnphp,php andphp thephp tablephp name
php php php php php php*php argumentphp isphp disregardedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableNamephp php php OPTIONALphp Namephp ofphp tablephp.
php php php php php php*php php@paramphp stringphp php$primaryKeyphp php OPTIONALphp Namephp ofphp primaryphp keyphp columnphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp lastInsertIdphp(php$tableNamephp php=php nullphp,php php$primaryKeyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$tableNamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$sequenceNamephp php=php php$tableNamephp;
php php php php php php php php php php php php ifphp php(php$primaryKeyphp)php php{
php php php php php php php php php php php php php php php php php$sequenceNamephp php.php=php php"php_php$primaryKeyphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$sequenceNamephp php.php=php php'php_seqphp'php;
php php php php php php php php php php php php returnphp php$thisphp-php>lastSequenceIdphp(php$sequenceNamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_connectionphp-php>lastInsertIdphp(php$tableNamephp)php;
php php php php php}

php}
