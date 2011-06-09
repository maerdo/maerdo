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
php php*php php@versionphp php php php php$Idphp:php Sqlitephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Pdophp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Pdophp/Abstractphp.phpphp'php;


php/php*php*
php php*php Classphp forphp connectingphp tophp SQLitephp2php andphp SQLitephp3php databasesphp andphp performingphp commonphp operationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Pdophp_Sqlitephp extendsphp Zendphp_Dbphp_Adapterphp_Pdophp_Abstract
php{

php php php php php/php*php*
php php php php php php*php PDOphp type
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php php protectedphp php$php_pdoTypephp php=php php'sqlitephp'php;

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
php php php php php php php php php'INTEGERphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php php'REALphp'php php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPE
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php$configphp isphp anphp arrayphp ofphp keyphp/valuephp pairsphp containingphp configuration
php php php php php php*php optionsphp.php php Notephp thatphp thephp SQLitephp optionsphp arephp differentphp thanphp mostphp of
php php php php php php*php thephp otherphp PDOphp adaptersphp inphp thatphp nophp usernamephp orphp passwordphp arephp neededphp.
php php php php php php*php Alsophp,php anphp extraphp configphp keyphp php"sqlitephp2php"php specifiesphp compatibilityphp modephp.
php php php php php php*
php php php php php php*php dbnamephp php php php php=php>php php(stringphp)php Thephp namephp ofphp thephp databasephp tophp userphp php(requiredphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php usephp php:memoryphp:php forphp memoryphp-basedphp databasephp)
php php php php php php*
php php php php php php*php sqlitephp2php php php php=php>php php(booleanphp)php PDOphp_SQLITEphp defaultsphp tophp SQLitephp php3php.php php Forphp compatibility
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php withphp anphp olderphp SQLitephp php2php databasephp,php setphp thisphp tophp TRUEphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$configphp Anphp arrayphp ofphp configurationphp keysphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$configphp[php'sqlitephp2php'php]php)php php&php&php php$configphp[php'sqlitephp2php'php]php)php php{
php php php php php php php php php php php php php$thisphp-php>php_pdoTypephp php=php php'sqlitephp2php'php;
php php php php php php php php php}

php php php php php php php php php/php/php SQLitephp usesphp nophp usernamephp/passwordphp.php php Stubphp tophp satisfyphp parentphp:php:php_connectphp(php)
php php php php php php php php php$thisphp-php>php_configphp[php'usernamephp'php]php php=php nullphp;
php php php php php php php php php$thisphp-php>php_configphp[php'passwordphp'php]php php=php nullphp;

php php php php php php php php returnphp parentphp:php:php_php_constructphp(php$configphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp forphp configphp optionsphp thatphp arephp mandatoryphp.
php php php php php php*php Throwphp exceptionsphp ifphp anyphp arephp missingphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$config
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_checkRequiredOptionsphp(arrayphp php$configphp)
php php php php php{
php php php php php php php php php/php/php wephp needphp atphp leastphp aphp dbname
php php php php php php php php ifphp php(php!php arrayphp_keyphp_existsphp(php'dbnamephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'dbnamephp'php thatphp namesphp thephp databasephp instancephp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php DSNphp builder
php php php php php php*php/
php php php php protectedphp functionphp php_dsnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pdoTypephp php.php'php:php'php.php php$thisphp-php>php_configphp[php'dbnamephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Specialphp configurationphp forphp SQLitephp behaviorphp:php makephp surephp thatphp resultphp sets
php php php php php php*php containphp keysphp likephp php'columnphp'php insteadphp ofphp php'tablephp.columnphp'php.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php ifphp wephp alreadyphp havephp aphp PDOphp objectphp,php nophp needphp tophp rephp-connectphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_connectphp(php)php;

php php php php php php php php php$retvalphp php=php php$thisphp-php>php_connectionphp-php>execphp(php'PRAGMAphp fullphp_columnphp_namesphp=php0php'php)php;
php php php php php php php php ifphp php(php$retvalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$errorphp php=php php$thisphp-php>php_connectionphp-php>errorInfophp(php)php;
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php$errorphp[php2php]php)php;
php php php php php php php php php}

php php php php php php php php php$retvalphp php=php php$thisphp-php>php_connectionphp-php>execphp(php'PRAGMAphp shortphp_columnphp_namesphp=php1php'php)php;
php php php php php php php php ifphp php(php$retvalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$errorphp php=php php$thisphp-php>php_connectionphp-php>errorInfophp(php)php;
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php$errorphp[php2php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECTphp namephp FROMphp sqlitephp_masterphp WHEREphp typephp=php'tablephp'php php"
php php php php php php php php php php php php php php.php php"UNIONphp ALLphp SELECTphp namephp FROMphp sqlitephp_tempphp_masterphp php"
php php php php php php php php php php php php php php.php php"WHEREphp typephp=php'tablephp'php ORDERphp BYphp namephp"php;

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
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$sqlphp php=php php'PRAGMAphp php'php;

php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php$thisphp-php>quoteIdentifierphp(php$schemaNamephp)php php.php php'php.php'php;
php php php php php php php php php}

php php php php php php php php php$sqlphp php.php=php php'tablephp_infophp(php'php.php$thisphp-php>quoteIdentifierphp(php$tableNamephp)php.php'php)php'php;

php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Usephp FETCHphp_NUMphp sophp wephp arephp notphp dependentphp onphp thephp CASEphp attributephp ofphp thephp PDOphp connection
php php php php php php php php php php*php/
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;

php php php php php php php php php$cidphp php php php php php php php php=php php0php;
php php php php php php php php php$namephp php php php php php php php=php php1php;
php php php php php php php php php$typephp php php php php php php php=php php2php;
php php php php php php php php php$notnullphp php php php php=php php3php;
php php php php php php php php php$dfltphp_valuephp php=php php4php;
php php php php php php php php php$pkphp php php php php php php php php php=php php5php;

php php php php php php php php php$descphp php=php arrayphp(php)php;

php php php php php php php php php$pphp php=php php1php;
php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php listphp(php$lengthphp,php php$scalephp,php php$precisionphp,php php$primaryphp,php php$primaryPositionphp,php php$identityphp)php php=
php php php php php php php php php php php php php php php php arrayphp(nullphp,php nullphp,php nullphp,php falsephp,php nullphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php(php?php:varphp)php?charphp)php\php(php(php\dphp+php)php\php)php/iphp'php,php php$rowphp[php$typephp]php,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$rowphp[php$typephp]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php$lengthphp php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php^decimalphp\php(php(php\dphp+php)php,php(php\dphp+php)php\php)php/iphp'php,php php$rowphp[php$typephp]php,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$rowphp[php$typephp]php php=php php'DECIMALphp'php;
php php php php php php php php php php php php php php php php php$precisionphp php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php$scalephp php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php(boolphp)php php$rowphp[php$pkphp]php)php php{
php php php php php php php php php php php php php php php php php$primaryphp php=php truephp;
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php php$pphp;
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php SQLitephp INTEGERphp primaryphp keyphp isphp alwaysphp autophp-incrementphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$identityphp php=php php(boolphp)php php(php$rowphp[php$typephp]php php=php=php php'INTEGERphp'php)php;
php php php php php php php php php php php php php php php php php+php+php$pphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$descphp[php$thisphp-php>foldCasephp(php$rowphp[php$namephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$schemaNamephp)php,
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>foldCasephp(php$tableNamephp)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$namephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php$rowphp[php$cidphp]php+php1php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$rowphp[php$typephp]php,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$rowphp[php$dfltphp_valuephp]php,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php!php php(boolphp)php php$rowphp[php$notnullphp]php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$lengthphp,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php php$scalephp,
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php php$precisionphp,
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php nullphp,php php/php/php Sqlitephp3php doesphp notphp supportphp unsignedphp data
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
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$sqlphp php.php=php php"php LIMITphp php$countphp"php;
php php php php php php php php ifphp php(php$offsetphp php>php php0php)php php{
php php php php php php php php php php php php php$sqlphp php.php=php php"php OFFSETphp php$offsetphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$sqlphp;
php php php php php}

php}
