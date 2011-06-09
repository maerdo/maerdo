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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Abstractphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Pdo
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Pdophp.phpphp'php;


php/php*php*
php php*php Classphp forphp connectingphp tophp SQLphp databasesphp andphp performingphp commonphp operationsphp usingphp PDOphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Dbphp_Adapterphp_Pdophp_Abstractphp extendsphp Zendphp_Dbphp_Adapterphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp aphp DBphp statementphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultStmtClassphp php=php php'Zendphp_Dbphp_Statementphp_Pdophp'php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp PDOphp DSNphp forphp thephp adapterphp fromphp php$thisphp-php>php_configphp settingsphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_dsnphp(php)
php php php php php{
php php php php php php php php php/php/php baselinephp ofphp DSNphp parts
php php php php php php php php php$dsnphp php=php php$thisphp-php>php_configphp;

php php php php php php php php php/php/php donphp'tphp passphp thephp usernamephp,php passwordphp,php charsetphp,php persistentphp andphp driverphp_optionsphp inphp thephp DSN
php php php php php php php php unsetphp(php$dsnphp[php'usernamephp'php]php)php;
php php php php php php php php unsetphp(php$dsnphp[php'passwordphp'php]php)php;
php php php php php php php php unsetphp(php$dsnphp[php'optionsphp'php]php)php;
php php php php php php php php unsetphp(php$dsnphp[php'charsetphp'php]php)php;
php php php php php php php php unsetphp(php$dsnphp[php'persistentphp'php]php)php;
php php php php php php php php unsetphp(php$dsnphp[php'driverphp_optionsphp'php]php)php;

php php php php php php php php php/php/php usephp allphp remainingphp partsphp inphp thephp DSN
php php php php php php php php foreachphp php(php$dsnphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$dsnphp[php$keyphp]php php=php php"php$keyphp=php$valphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pdoTypephp php.php php'php:php'php php.php implodephp(php'php;php'php,php php$dsnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp PDOphp objectphp andphp connectsphp tophp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php php/php/php ifphp wephp alreadyphp havephp aphp PDOphp objectphp,php nophp needphp tophp rephp-connectphp.
php php php php php php php php ifphp php(php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php getphp thephp dsnphp firstphp,php becausephp somephp adaptersphp alterphp thephp php$php_pdoType
php php php php php php php php php$dsnphp php=php php$thisphp-php>php_dsnphp(php)php;

php php php php php php php php php/php/php checkphp forphp PDOphp extension
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'pdophp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php'Thephp PDOphp extensionphp isphp requiredphp forphp thisphp adapterphp butphp thephp extensionphp isphp notphp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp thephp PDOphp driverphp isphp available
php php php php php php php php ifphp php(php!inphp_arrayphp(php$thisphp-php>php_pdoTypephp,php PDOphp:php:getAvailableDriversphp(php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php'Thephp php'php php.php php$thisphp-php>php_pdoTypephp php.php php'php driverphp isphp notphp currentlyphp installedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php createphp PDOphp connection
php php php php php php php php php$qphp php=php php$thisphp-php>php_profilerphp-php>queryStartphp(php'connectphp'php,php Zendphp_Dbphp_Profilerphp:php:CONNECTphp)php;

php php php php php php php php php/php/php addphp thephp persistencephp flagphp ifphp wephp findphp itphp inphp ourphp configphp array
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'persistentphp'php]php)php php&php&php php(php$thisphp-php>php_configphp[php'persistentphp'php]php php=php=php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[PDOphp:php:ATTRphp_PERSISTENTphp]php php=php truephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_connectionphp php=php newphp PDOphp(
php php php php php php php php php php php php php php php php php$dsnphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'usernamephp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'passwordphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$thisphp-php>php_profilerphp-php>queryEndphp(php$qphp)php;

php php php php php php php php php php php php php/php/php setphp thephp PDOphp connectionphp tophp performphp casephp-foldingphp onphp arrayphp keysphp,php orphp not
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>setAttributephp(PDOphp:php:ATTRphp_CASEphp,php php$thisphp-php>php_caseFoldingphp)php;

php php php php php php php php php php php php php/php/php alwaysphp usephp exceptionsphp.
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>setAttributephp(PDOphp:php:ATTRphp_ERRMODEphp,php PDOphp:php:ERRMODEphp_EXCEPTIONphp)php;

php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp connectionphp isphp active
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isConnectedphp(php)
php php php php php{
php php php php php php php php returnphp php(php(boolphp)php php(php$thisphp-php>php_connectionphp instanceofphp PDOphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forcephp thephp connectionphp tophp closephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closeConnectionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectionphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp anphp SQLphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sqlphp Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php@paramphp arrayphp php$bindphp Anphp arrayphp ofphp dataphp tophp bindphp tophp thephp placeholdersphp.
php php php php php php*php php@returnphp PDOStatement
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
php php php php php php php php php$stmtphp-php>setFetchModephp(php$thisphp-php>php_fetchModephp)php;
php php php php php php php php returnphp php$stmtphp;
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
php php php php php php*php Onphp RDBMSphp brandsphp thatphp donphp'tphp supportphp sequencesphp,php php$tableNamephp andphp php$primaryKey
php php php php php php*php arephp ignoredphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableNamephp php php OPTIONALphp Namephp ofphp tablephp.
php php php php php php*php php@paramphp stringphp php$primaryKeyphp php OPTIONALphp Namephp ofphp primaryphp keyphp columnphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp lastInsertIdphp(php$tableNamephp php=php nullphp,php php$primaryKeyphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_connectionphp-php>lastInsertIdphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Specialphp handlingphp forphp PDOphp queryphp(php)php.
php php php php php php*php Allphp bindphp parameterphp namesphp mustphp beginphp withphp php'php:php'
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php@paramphp arrayphp php$bindphp Anphp arrayphp ofphp dataphp tophp bindphp tophp thephp placeholdersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Pdo
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exceptionphp Tophp rephp-throwphp PDOExceptionphp.
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$bindphp)php php&php&php php$sqlphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$bindphp php=php php$sqlphp-php>getBindphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$bindphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$bindphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!isphp_intphp(php$namephp)php php&php&php php!pregphp_matchphp(php'php/php^php:php/php'php,php php$namephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$newNamephp php=php php"php:php$namephp"php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$namephp]php)php;
php php php php php php php php php php php php php php php php php php php php php$bindphp[php$newNamephp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp parentphp:php:queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Executesphp anphp SQLphp statementphp andphp returnphp thephp numberphp ofphp affectedphp rows
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php$sqlphp php Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php Mayphp bephp aphp stringphp orphp Zendphp_Dbphp_Selectphp.
php php php php php php*php php@returnphp integerphp php php php php php Numberphp ofphp rowsphp thatphp werephp modified
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php orphp deletedphp byphp thephp SQLphp statement
php php php php php php*php/
php php php php publicphp functionphp execphp(php$sqlphp)
php php php php php{
php php php php php php php php ifphp php(php$sqlphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$sqlphp php=php php$sqlphp-php>assemblephp(php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$affectedphp php=php php$thisphp-php>getConnectionphp(php)php-php>execphp(php$sqlphp)php;

php php php php php php php php php php php php ifphp php(php$affectedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$errorInfophp php=php php$thisphp-php>getConnectionphp(php)php-php>errorInfophp(php)php;
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php$errorInfophp[php2php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$affectedphp;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_connectionphp-php>quotephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Beginphp aphp transactionphp.
php php php php php php*php/
php php php php protectedphp functionphp php_beginTransactionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$thisphp-php>php_connectionphp-php>beginTransactionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp.
php php php php php php*php/
php php php php protectedphp functionphp php_commitphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$thisphp-php>php_connectionphp-php>commitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollphp-backphp aphp transactionphp.
php php php php php php*php/
php php php php protectedphp functionphp php_rollBackphp(php)php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$thisphp-php>php_connectionphp-php>rollBackphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp PDOphp fetchphp modephp.
php php php php php php*
php php php php php php*php php@todophp Supportphp FETCHphp_CLASSphp andphp FETCHphp_INTOphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$modephp Aphp PDOphp fetchphp modephp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFetchModephp(php$modephp)
php php php php php{
php php php php php php php php php/php/checkphp forphp PDOphp extension
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'pdophp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php'Thephp PDOphp extensionphp isphp requiredphp forphp thisphp adapterphp butphp thephp extensionphp isphp notphp loadedphp'php)php;
php php php php php php php php php}
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_LAZYphp:
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_ASSOCphp:
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_NUMphp:
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_BOTHphp:
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_NAMEDphp:
php php php php php php php php php php php php casephp PDOphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_fetchModephp php=php php$modephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Invalidphp fetchphp modephp php'php$modephp'php specifiedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
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
php php php php php php php php php php php php casephp php'positionalphp'php:
php php php php php php php php php php php php casephp php'namedphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp truephp;
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$versionphp php=php php$thisphp-php>php_connectionphp-php>getAttributephp(PDOphp:php:ATTRphp_SERVERphp_VERSIONphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Inphp casephp ofphp thephp driverphp doesnphp'tphp supportphp gettingphp attributes
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php php$matchesphp php=php nullphp;
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php(php(php?php:php[php0php-php9php]php{php1php,php2php}php\php.php)php{php1php,php3php}php[php0php-php9php]php{php1php,php2php}php)php/php'php,php php$versionphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php returnphp php$matchesphp[php1php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}
php}

