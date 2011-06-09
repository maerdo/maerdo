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
php php*php php@versionphp php php php php$Idphp:php Oraclephp.phpphp php2php3php5php7php3php php2php0php1php0php-php1php2php-php2php3php php1php8php:php2php0php:php0php0Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Oracle
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Oraclephp extendsphp Zendphp_Dbphp_Adapterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Userphp-providedphp configurationphp.
php php php php php php*
php php php php php php*php Basicphp keysphp arephp:
php php php php php php*
php php php php php php*php usernamephp php=php>php php(stringphp)php Connectphp tophp thephp databasephp asphp thisphp usernamephp.
php php php php php php*php passwordphp php=php>php php(stringphp)php Passwordphp associatedphp withphp thephp usernamephp.
php php php php php php*php dbnamephp php php php=php>php Eitherphp thephp namephp ofphp thephp localphp Oraclephp instancephp,php orphp the
php php php php php php*php php php php php php php php php php php php php namephp ofphp thephp entryphp inphp tnsnamesphp.oraphp tophp whichphp youphp wantphp tophp connectphp.
php php php php php php*php persistentphp php=php>php php(booleanphp)php Setphp TRUEphp tophp usephp aphp persistentphp connection
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(
php php php php php php php php php'dbnamephp'php php php php php php php php=php>php nullphp,
php php php php php php php php php'usernamephp'php php php php php php=php>php nullphp,
php php php php php php php php php'passwordphp'php php php php php php=php>php nullphp,
php php php php php php php php php'persistentphp'php php php php=php>php false
php php php php php)php;

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
php php php php php php php php php'BINARYphp_DOUBLEphp'php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'BINARYphp_FLOATphp'php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'NUMBERphp'php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_executephp_modephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp aphp DBphp statementphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultStmtClassphp php=php php'Zendphp_Dbphp_Statementphp_Oraclephp'php;

php php php php php/php*php*
php php php php php php*php Checkphp ifphp LOBphp fieldphp arephp returnedphp asphp string
php php php php php php*php insteadphp ofphp OCIphp-Lobphp object
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_lobAsStringphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createsphp aphp connectionphp resourcephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php/php connectionphp alreadyphp exists
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'ociphp8php'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php'Thephp OCIphp8php extensionphp isphp requiredphp forphp thisphp adapterphp butphp thephp extensionphp isphp notphp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setExecuteModephp(OCIphp_COMMITphp_ONphp_SUCCESSphp)php;

php php php php php php php php php$connectionFuncNamephp php=php php(php$thisphp-php>php_configphp[php'persistentphp'php]php php=php=php truephp)php php?php php'ociphp_pconnectphp'php php:php php'ociphp_connectphp'php;

php php php php php php php php php$thisphp-php>php_connectionphp php=php php@php$connectionFuncNamephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'usernamephp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'passwordphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'dbnamephp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'charsetphp'php]php)php;

php php php php php php php php php/php/php checkphp thephp connection
php php php php php php php php ifphp php(php!php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(ociphp_errorphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp connectionphp isphp active
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isConnectedphp(php)
php php php php php{
php php php php php php php php returnphp php(php(boolphp)php php(isphp_resourcephp(php$thisphp-php>php_connectionphp)
php php php php php php php php php php php php php php php php php php php php php&php&php php(getphp_resourcephp_typephp(php$thisphp-php>php_connectionphp)php php=php=php php'ociphp8php connectionphp'
php php php php php php php php php php php php php php php php php php php php php php|php|php getphp_resourcephp_typephp(php$thisphp-php>php_connectionphp)php php=php=php php'ociphp8php persistentphp connectionphp'php)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forcephp thephp connectionphp tophp closephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closeConnectionphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isConnectedphp(php)php)php php{
php php php php php php php php php php php php ociphp_closephp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_connectionphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Activatephp/deactivatephp returnphp ofphp LOBphp asphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$lobphp_asphp_string
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Oracle
php php php php php php*php/
php php php php publicphp functionphp setLobAsStringphp(php$lobAsStringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_lobAsStringphp php=php php(boolphp)php php$lobAsStringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whetherphp orphp notphp LOBphp arephp returnedphp asphp string
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getLobAsStringphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_lobAsStringphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php ifphp neverphp setphp byphp userphp,php wephp usephp driverphp optionphp ifphp itphp existsphp otherwisephp false
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php)php php&php&
php php php php php php php php php php php php php php php php issetphp(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'lobphp_asphp_stringphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_lobAsStringphp php=php php(boolphp)php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'lobphp_asphp_stringphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_lobAsStringphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_lobAsStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp SQLphp statementphp forphp preparationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sqlphp Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Oracle
php php php php php php*php/
php php php php publicphp functionphp preparephp(php$sqlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$stmtClassphp php=php php$thisphp-php>php_defaultStmtClassphp;
php php php php php php php php ifphp php(php!classphp_existsphp(php$stmtClassphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$stmtClassphp)php;
php php php php php php php php php}
php php php php php php php php php$stmtphp php=php newphp php$stmtClassphp(php$thisphp,php php$sqlphp)php;
php php php php php php php php ifphp php(php$stmtphp instanceofphp Zendphp_Dbphp_Statementphp_Oraclephp)php php{
php php php php php php php php php php php php php$stmtphp-php>setLobAsStringphp(php$thisphp-php>getLobAsStringphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$stmtphp-php>setFetchModephp(php$thisphp-php>php_fetchModephp)php;
php php php php php php php php returnphp php$stmtphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotephp aphp rawphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$valuephp php php php php Rawphp string
php php php php php php*php php@returnphp stringphp php php php php php php php php php php Quotedphp string
php php php php php php*php/
php php php php protectedphp functionphp php_quotephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php php|php|php isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}
php php php php php php php php php$valuephp php=php strphp_replacephp(php"php'php"php,php php"php'php'php"php,php php$valuephp)php;
php php php php php php php php returnphp php"php'php"php php.php addcslashesphp(php$valuephp,php php"php\php0php0php0php\nphp\rphp\php\php\php0php3php2php"php)php php.php php"php'php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotephp aphp tablephp identifierphp andphp aliasphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Dbphp_Exprphp php$identphp Thephp identifierphp orphp expressionphp.
php php php php php php*php php@paramphp stringphp php$aliasphp Anphp aliasphp forphp thephp tablephp.
php php php php php php*php php@paramphp booleanphp php$autophp Ifphp truephp,php heedphp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp configphp optionphp.
php php php php php php*php php@returnphp stringphp Thephp quotedphp identifierphp andphp aliasphp.
php php php php php php*php/
php php php php publicphp functionphp quoteTableAsphp(php$identphp,php php$aliasphp php=php nullphp,php php$autophp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Oraclephp doesnphp'tphp allowphp thephp php'ASphp'php keywordphp betweenphp thephp tablephp identifierphp/expressionphp andphp aliasphp.
php php php php php php php php returnphp php$thisphp-php>php_quoteIdentifierAsphp(php$identphp,php php$aliasphp,php php$autophp,php php'php php'php)php;
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
php php php php php php php php php$sqlphp php=php php'SELECTphp php'php.php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php.php'php.CURRVALphp FROMphp dualphp'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
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
php php php php php php php php php$sqlphp php=php php'SELECTphp php'php.php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php.php'php.NEXTVALphp FROMphp dualphp'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
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
php php php php php php*php Oraclephp doesphp notphp supportphp IDENTITYphp columnsphp,php sophp ifphp thephp sequencephp isphp not
php php php php php php*php specifiedphp,php thisphp methodphp returnsphp nullphp.
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

php php php php php php php php php/php/php Nophp supportphp forphp IDENTITYphp columnsphp;php returnphp null
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$dataphp php=php php$thisphp-php>fetchColphp(php'SELECTphp tablephp_namephp FROMphp allphp_tablesphp'php)php;
php php php php php php php php returnphp php$dataphp;
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
php php php php php php*php SCHEMAphp_NAMEphp php php php php php php=php>php stringphp;php namephp ofphp schema
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
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$versionphp php=php php$thisphp-php>getServerVersionphp(php)php;
php php php php php php php php ifphp php(php(php$versionphp php=php=php=php nullphp)php php|php|php versionphp_comparephp(php$versionphp,php php'php9php.php0php.php0php'php,php php'php>php=php'php)php)php php{
php php php php php php php php php php php php php$sqlphp php=php php"SELECTphp TCphp.TABLEphp_NAMEphp,php TCphp.OWNERphp,php TCphp.COLUMNphp_NAMEphp,php TCphp.DATAphp_TYPEphp,
php php php php php php php php php php php php php php php php php php php php TCphp.DATAphp_DEFAULTphp,php TCphp.NULLABLEphp,php TCphp.COLUMNphp_IDphp,php TCphp.DATAphp_LENGTHphp,
php php php php php php php php php php php php php php php php php php php php TCphp.DATAphp_SCALEphp,php TCphp.DATAphp_PRECISIONphp,php Cphp.CONSTRAINTphp_TYPEphp,php CCphp.POSITION
php php php php php php php php php php php php php php php php FROMphp ALLphp_TABphp_COLUMNSphp TC
php php php php php php php php php php php php php php php php LEFTphp JOINphp php(ALLphp_CONSphp_COLUMNSphp CCphp JOINphp ALLphp_CONSTRAINTSphp C
php php php php php php php php php php php php php php php php php php php php ONphp php(CCphp.CONSTRAINTphp_NAMEphp php=php Cphp.CONSTRAINTphp_NAMEphp ANDphp CCphp.TABLEphp_NAMEphp php=php Cphp.TABLEphp_NAMEphp ANDphp CCphp.OWNERphp php=php Cphp.OWNERphp ANDphp Cphp.CONSTRAINTphp_TYPEphp php=php php'Pphp'php)php)
php php php php php php php php php php php php php php php php php php ONphp TCphp.TABLEphp_NAMEphp php=php CCphp.TABLEphp_NAMEphp ANDphp TCphp.COLUMNphp_NAMEphp php=php CCphp.COLUMNphp_NAME
php php php php php php php php php php php php php php php php WHEREphp UPPERphp(TCphp.TABLEphp_NAMEphp)php php=php UPPERphp(php:TBNAMEphp)php"php;
php php php php php php php php php php php php php$bindphp[php'php:TBNAMEphp'php]php php=php php$tableNamephp;
php php php php php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php php php php php$sqlphp php.php=php php'php ANDphp UPPERphp(TCphp.OWNERphp)php php=php UPPERphp(php:SCNAMEphp)php'php;
php php php php php php php php php php php php php php php php php$bindphp[php'php:SCNAMEphp'php]php php=php php$schemaNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$sqlphp php.php=php php'php ORDERphp BYphp TCphp.COLUMNphp_IDphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$subSqlphp=php"SELECTphp ACphp.OWNERphp,php ACphp.TABLEphp_NAMEphp,php ACCphp.COLUMNphp_NAMEphp,php ACphp.CONSTRAINTphp_TYPEphp,php ACCphp.POSITION
php php php php php php php php php php php php php php php php fromphp ALLphp_CONSTRAINTSphp ACphp,php ALLphp_CONSphp_COLUMNSphp ACC
php php php php php php php php php php php php php php php php php php WHEREphp ACCphp.CONSTRAINTphp_NAMEphp php=php ACphp.CONSTRAINTphp_NAME
php php php php php php php php php php php php php php php php php php php php ANDphp ACCphp.TABLEphp_NAMEphp php=php ACphp.TABLEphp_NAME
php php php php php php php php php php php php php php php php php php php php ANDphp ACCphp.OWNERphp php=php ACphp.OWNER
php php php php php php php php php php php php php php php php php php php php ANDphp ACphp.CONSTRAINTphp_TYPEphp php=php php'Pphp'
php php php php php php php php php php php php php php php php php php php php ANDphp UPPERphp(ACphp.TABLEphp_NAMEphp)php php=php UPPERphp(php:TBNAMEphp)php"php;
php php php php php php php php php php php php php$bindphp[php'php:TBNAMEphp'php]php php=php php$tableNamephp;
php php php php php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php php php php php$subSqlphp php.php=php php'php ANDphp UPPERphp(ACCphp.OWNERphp)php php=php UPPERphp(php:SCNAMEphp)php'php;
php php php php php php php php php php php php php php php php php$bindphp[php'php:SCNAMEphp'php]php php=php php$schemaNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$sqlphp=php"SELECTphp TCphp.TABLEphp_NAMEphp,php TCphp.OWNERphp,php TCphp.COLUMNphp_NAMEphp,php TCphp.DATAphp_TYPEphp,
php php php php php php php php php php php php php php php php php php php php TCphp.DATAphp_DEFAULTphp,php TCphp.NULLABLEphp,php TCphp.COLUMNphp_IDphp,php TCphp.DATAphp_LENGTHphp,
php php php php php php php php php php php php php php php php php php php php TCphp.DATAphp_SCALEphp,php TCphp.DATAphp_PRECISIONphp,php CCphp.CONSTRAINTphp_TYPEphp,php CCphp.POSITION
php php php php php php php php php php php php php php php php FROMphp ALLphp_TABphp_COLUMNSphp TCphp,php php(php$subSqlphp)php CC
php php php php php php php php php php php php php php php php WHEREphp UPPERphp(TCphp.TABLEphp_NAMEphp)php php=php UPPERphp(php:TBNAMEphp)
php php php php php php php php php php php php php php php php php php ANDphp TCphp.OWNERphp php=php CCphp.OWNERphp(php+php)php ANDphp TCphp.TABLEphp_NAMEphp php=php CCphp.TABLEphp_NAMEphp(php+php)php ANDphp TCphp.COLUMNphp_NAMEphp php=php CCphp.COLUMNphp_NAMEphp(php+php)php"php;
php php php php php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php php php php php$sqlphp php.php=php php'php ANDphp UPPERphp(TCphp.OWNERphp)php php=php UPPERphp(php:SCNAMEphp)php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$sqlphp php.php=php php'php ORDERphp BYphp TCphp.COLUMNphp_IDphp'php;
php php php php php php php php php}

php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Usephp FETCHphp_NUMphp sophp wephp arephp notphp dependentphp onphp thephp CASEphp attributephp ofphp thephp PDOphp connection
php php php php php php php php php php*php/
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;

php php php php php php php php php$tablephp_namephp php php php php php php=php php0php;
php php php php php php php php php$ownerphp php php php php php php php php php php php=php php1php;
php php php php php php php php php$columnphp_namephp php php php php php=php php2php;
php php php php php php php php php$dataphp_typephp php php php php php php php=php php3php;
php php php php php php php php php$dataphp_defaultphp php php php php=php php4php;
php php php php php php php php php$nullablephp php php php php php php php php=php php5php;
php php php php php php php php php$columnphp_idphp php php php php php php php=php php6php;
php php php php php php php php php$dataphp_lengthphp php php php php php=php php7php;
php php php php php php php php php$dataphp_scalephp php php php php php php=php php8php;
php php php php php php php php php$dataphp_precisionphp php php=php php9php;
php php php php php php php php php$constraintphp_typephp php=php php1php0php;
php php php php php php php php php$positionphp php php php php php php php php=php php1php1php;

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php listphp php(php$primaryphp,php php$primaryPositionphp,php php$identityphp)php php=php arrayphp(falsephp,php nullphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(php$rowphp[php$constraintphp_typephp]php php=php=php php'Pphp'php)php php{
php php php php php php php php php php php php php php php php php$primaryphp php=php truephp;
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php php$rowphp[php$positionphp]php;
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Oraclephp doesphp notphp supportphp autophp-incrementphp keysphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$identityphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$descphp[php$thisphp-php>foldCasephp(php$rowphp[php$columnphp_namephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$ownerphp]php)php,
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$tablephp_namephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$columnphp_namephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php$rowphp[php$columnphp_idphp]php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$rowphp[php$dataphp_typephp]php,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$rowphp[php$dataphp_defaultphp]php,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php(boolphp)php php(php$rowphp[php$nullablephp]php php=php=php php'Yphp'php)php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$rowphp[php$dataphp_lengthphp]php,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php php$rowphp[php$dataphp_scalephp]php,
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php php$rowphp[php$dataphp_precisionphp]php,
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php=php>php php$primaryphp,
php php php php php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php=php>php php$identity
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Leavephp autocommitphp modephp andphp beginphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_beginTransactionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_setExecuteModephp(OCIphp_DEFAULTphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_commitphp(php)
php php php php php{
php php php php php php php php ifphp php(php!ociphp_commitphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_connectionphp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_setExecuteModephp(OCIphp_COMMITphp_ONphp_SUCCESSphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollphp backphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_rollBackphp(php)
php php php php php{
php php php php php php php php ifphp php(php!ociphp_rollbackphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_connectionphp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_setExecuteModephp(OCIphp_COMMITphp_ONphp_SUCCESSphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php php@todophp Supportphp FETCHphp_CLASSphp andphp FETCHphp_INTOphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$modephp Aphp fetchphp modephp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFetchModephp(php$modephp)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_NUMphp:php php php php/php/php seqphp array
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_ASSOCphp:php php/php/php assocphp array
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOTHphp:php php php/php/php seqphp+assocphp array
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:php php php php/php/php object
php php php php php php php php php php php php php php php php php$thisphp-php>php_fetchModephp php=php php$modephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:php php/php/php boundphp tophp PHPphp variable
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php'FETCHphp_BOUNDphp isphp notphp supportedphp yetphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php"Invalidphp fetchphp modephp php'php$modephp'php specifiedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp adapterphp-specificphp LIMITphp clausephp tophp thephp SELECTphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@paramphp integerphp php$count
php php php php php php*php php@paramphp integerphp php$offsetphp OPTIONAL
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)
php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Oraclephp doesphp notphp implementphp thephp LIMITphp clausephp asphp somephp RDBMSphp dophp.
php php php php php php php php php php*php Wephp havephp tophp simulatephp itphp withphp subqueriesphp andphp ROWNUMphp.
php php php php php php php php php php*php Unfortunatelyphp becausephp wephp usephp thephp columnphp wildcardphp php"php*php"php,
php php php php php php php php php php*php thisphp putsphp anphp extraphp columnphp intophp thephp queryphp resultphp setphp.
php php php php php php php php php php*php/
php php php php php php php php php$limitphp_sqlphp php=php php"SELECTphp zphp2php.php*
php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php SELECTphp zphp1php.php*php,php ROWNUMphp ASphp php\php"zendphp_dbphp_rownumphp\php"
php php php php php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php php php php php php"php php.php php$sqlphp php.php php"
php php php php php php php php php php php php php php php php php)php zphp1
php php php php php php php php php php php php php)php zphp2
php php php php php php php php php php php php WHEREphp zphp2php.php\php"zendphp_dbphp_rownumphp\php"php BETWEENphp php"php php.php php(php$offsetphp+php1php)php php.php php"php ANDphp php"php php.php php(php$offsetphp+php$countphp)php;
php php php php php php php php returnphp php$limitphp_sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_setExecuteModephp(php$modephp)
php php php php php{
php php php php php php php php switchphp(php$modephp)php php{
php php php php php php php php php php php php casephp OCIphp_COMMITphp_ONphp_SUCCESSphp:
php php php php php php php php php php php php casephp OCIphp_DEFAULTphp:
php php php php php php php php php php php php casephp OCIphp_DESCRIBEphp_ONLYphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_executephp_modephp php=php php$modephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Oraclephp_Exceptionphp(php"Invalidphp executionphp modephp php'php$modephp'php specifiedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp php_getExecuteModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_executephp_modephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp adapterphp supportsphp realphp SQLphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp php'positionalphp'php orphp php'namedphp'
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp supportsParametersphp(php$typephp)
php php php php php{
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'namedphp'php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp php'positionalphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp serverphp versionphp inphp PHPphp style
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getServerVersionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$versionphp php=php ociphp_serverphp_versionphp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php ifphp php(php$versionphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$matchesphp php=php nullphp;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php(php(php?php:php[php0php-php9php]php{php1php,php2php}php\php.php)php{php1php,php3php}php[php0php-php9php]php{php1php,php2php}php)php/php'php,php php$versionphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$matchesphp[php1php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}
php}
