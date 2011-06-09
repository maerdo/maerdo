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
php php*php php@versionphp php php php php$Idphp:php Sqlsrvphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Sqlsrv
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp extendsphp Zendphp_Dbphp_Adapterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Userphp-providedphp configurationphp.
php php php php php php*
php php php php php php*php Basicphp keysphp arephp:
php php php php php php*
php php php php php php*php usernamephp php=php>php php(stringphp)php Connectphp tophp thephp databasephp asphp thisphp usernamephp.
php php php php php php*php passwordphp php=php>php php(stringphp)php Passwordphp associatedphp withphp thephp usernamephp.
php php php php php php*php dbnamephp php php php=php>php Thephp namephp ofphp thephp localphp SQLphp Serverphp instance
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(
php php php php php php php php php'dbnamephp'php php php php php php php php=php>php nullphp,
php php php php php php php php php'usernamephp'php php php php php php=php>php nullphp,
php php php php php php php php php'passwordphp'php php php php php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Lastphp insertphp idphp fromphp INSERTphp query
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_lastInsertIdphp;

php php php php php/php*php*
php php php php php php*php Queryphp usedphp tophp fetchphp lastphp insertphp id
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_lastInsertSQLphp php=php php'SELECTphp SCOPEphp_IDENTITYphp(php)php asphp Currentphp_Identityphp'php;

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
php php php php php php php php php'INTphp'php php php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'SMALLINTphp'php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'TINYINTphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'BIGINTphp'php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php php'DECIMALphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'FLOATphp'php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'MONEYphp'php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'NUMERICphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'REALphp'php php php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'SMALLMONEYphp'php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp aphp DBphp statementphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultStmtClassphp php=php php'Zendphp_Dbphp_Statementphp_Sqlsrvphp'php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp connectionphp resourcephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php/php connectionphp alreadyphp exists
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'sqlsrvphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(php'Thephp Sqlsrvphp extensionphp isphp requiredphp forphp thisphp adapterphp butphp thephp extensionphp isphp notphp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$serverNamephp php=php php$thisphp-php>php_configphp[php'hostphp'php]php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'portphp'php]php)php)php php{
php php php php php php php php php php php php php$portphp php php php php php php php php=php php(integerphp)php php$thisphp-php>php_configphp[php'portphp'php]php;
php php php php php php php php php php php php php$serverNamephp php.php=php php'php,php php'php php.php php$portphp;
php php php php php php php php php}

php php php php php php php php php$connectionInfophp php=php arrayphp(
php php php php php php php php php php php php php'Databasephp'php php=php>php php$thisphp-php>php_configphp[php'dbnamephp'php]php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'usernamephp'php]php)php php&php&php issetphp(php$thisphp-php>php_configphp[php'passwordphp'php]php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$connectionInfophp php+php=php arrayphp(
php php php php php php php php php php php php php php php php php'UIDphp'php php php php php php php=php>php php$thisphp-php>php_configphp[php'usernamephp'php]php,
php php php php php php php php php php php php php php php php php'PWDphp'php php php php php php php=php>php php$thisphp-php>php_configphp[php'passwordphp'php]php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php/php/php elsephp php-php windowsphp authentication

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php asphp php$optionphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php/php/php Aphp valuephp mayphp bephp aphp constantphp.
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$constantNamephp php=php strtoupperphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(definedphp(php$constantNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$connectionInfophp[php$optionphp]php php=php constantphp(php$constantNamephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$connectionInfophp[php$optionphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_connectionphp php=php sqlsrvphp_connectphp(php$serverNamephp,php php$connectionInfophp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}
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

php php php php php php php php ifphp php(php!php arrayphp_keyphp_existsphp(php'passwordphp'php,php php$configphp)php php&php&php arrayphp_keyphp_existsphp(php'usernamephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'passwordphp'php forphp loginphp credentialsphp.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Ifphp Windowsphp Authenticationphp isphp desiredphp,php bothphp keysphp php'usernamephp'php andphp php'passwordphp'php shouldphp bephp ommitedphp fromphp configphp.php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'passwordphp'php,php php$configphp)php php&php&php php!arrayphp_keyphp_existsphp(php'usernamephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'usernamephp'php forphp loginphp credentialsphp.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Ifphp Windowsphp Authenticationphp isphp desiredphp,php bothphp keysphp php'usernamephp'php andphp php'passwordphp'php shouldphp bephp ommitedphp fromphp configphp.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp transactionphp isoltionphp levelphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp|nullphp php$levelphp Aphp fetchphp modephp fromphp SQLSRVphp_TXNphp_php*php.
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTransactionIsolationLevelphp(php$levelphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$sqlphp php=php nullphp;

php php php php php php php php php/php/php Defaultphp transactionphp levelphp inphp sqlphp server
php php php php php php php php ifphp php(php$levelphp php=php=php=php nullphp)
php php php php php php php php php{
php php php php php php php php php php php php php$levelphp php=php SQLSRVphp_TXNphp_READphp_COMMITTEDphp;
php php php php php php php php php}

php php php php php php php php switchphp php(php$levelphp)php php{
php php php php php php php php php php php php casephp SQLSRVphp_TXNphp_READphp_UNCOMMITTEDphp:
php php php php php php php php php php php php php php php php php$sqlphp php=php php"READphp UNCOMMITTEDphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SQLSRVphp_TXNphp_READphp_COMMITTEDphp:
php php php php php php php php php php php php php php php php php$sqlphp php=php php"READphp COMMITTEDphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SQLSRVphp_TXNphp_REPEATABLEphp_READphp:
php php php php php php php php php php php php php php php php php$sqlphp php=php php"REPEATABLEphp READphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SQLSRVphp_TXNphp_SNAPSHOTphp:
php php php php php php php php php php php php php php php php php$sqlphp php=php php"SNAPSHOTphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SQLSRVphp_TXNphp_SERIALIZABLEphp:
php php php php php php php php php php php php php php php php php$sqlphp php=php php"SERIALIZABLEphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(php"Invalidphp transactionphp isolationphp levelphp modephp php'php$levelphp'php specifiedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!sqlsrvphp_queryphp(php$thisphp-php>php_connectionphp,php php"SETphp TRANSACTIONphp ISOLATIONphp LEVELphp php$sqlphp;php"php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(php"Transactionphp cannotphp bephp changedphp tophp php'php$levelphp'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp connectionphp isphp active
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isConnectedphp(php)
php php php php php{
php php php php php php php php returnphp php(isphp_resourcephp(php$thisphp-php>php_connectionphp)
php php php php php php php php php php php php php php php php php&php&php php(getphp_resourcephp_typephp(php$thisphp-php>php_connectionphp)php php=php=php php'SQLphp Serverphp Connectionphp'php)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forcephp thephp connectionphp tophp closephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closeConnectionphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isConnectedphp(php)php)php php{
php php php php php php php php php php php php sqlsrvphp_closephp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_connectionphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp SQLphp statementphp forphp preparationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sqlphp Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Sqlsrv
php php php php php php*php/
php php php php publicphp functionphp preparephp(php$sqlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$stmtClassphp php=php php$thisphp-php>php_defaultStmtClassphp;

php php php php php php php php ifphp php(php!classphp_existsphp(php$stmtClassphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Loader
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$stmtClassphp)php;
php php php php php php php php php}

php php php php php php php php php$stmtphp php=php newphp php$stmtClassphp(php$thisphp,php php$sqlphp)php;
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
php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}php elseifphp php(isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp sprintfphp(php'php%Fphp'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php"php'php"php php.php strphp_replacephp(php"php'php"php,php php"php'php'php"php,php php$valuephp)php php.php php"php'php"php;
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
php php php php php php php php ifphp php(php$tableNamephp)php php{
php php php php php php php php php php php php php$tableNamephp php=php php$thisphp-php>quotephp(php$tableNamephp)php;
php php php php php php php php php php php php php$sqlphp php php php php php php php=php php'SELECTphp IDENTphp_CURRENTphp php(php'php php.php php$tableNamephp php.php php'php)php asphp Currentphp_Identityphp'php;
php php php php php php php php php php php php returnphp php(stringphp)php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_lastInsertIdphp php>php php0php)php php{
php php php php php php php php php php php php returnphp php(stringphp)php php$thisphp-php>php_lastInsertIdphp;
php php php php php php php php php}

php php php php php php php php php$sqlphp php=php php$thisphp-php>php_lastInsertSQLphp;
php php php php php php php php returnphp php(stringphp)php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Insertsphp aphp tablephp rowphp withphp specifiedphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$tablephp Thephp tablephp tophp insertphp dataphp intophp.
php php php php php php*php php@paramphp arrayphp php$bindphp Columnphp-valuephp pairsphp.
php php php php php php*php php@returnphp intphp Thephp numberphp ofphp affectedphp rowsphp.
php php php php php php*php/
php php php php publicphp functionphp insertphp(php$tablephp,php arrayphp php$bindphp)
php php php php php{
php php php php php php php php php/php/php extractphp andphp quotephp colphp namesphp fromphp thephp arrayphp keys
php php php php php php php php php$colsphp php=php arrayphp(php)php;
php php php php php php php php php$valsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$bindphp asphp php$colphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$colsphp[php]php php=php php$thisphp-php>quoteIdentifierphp(php$colphp,php truephp)php;
php php php php php php php php php php php php ifphp php(php$valphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php$valsphp[php]php php=php php$valphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$colphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valsphp[php]php php=php php'php?php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php buildphp thephp statement
php php php php php php php php php$sqlphp php=php php"INSERTphp INTOphp php"
php php php php php php php php php php php php php php.php php$thisphp-php>quoteIdentifierphp(php$tablephp,php truephp)
php php php php php php php php php php php php php php.php php'php php(php'php php.php implodephp(php'php,php php'php,php php$colsphp)php php.php php'php)php php'
php php php php php php php php php php php php php php.php php'VALUESphp php(php'php php.php implodephp(php'php,php php'php,php php$valsphp)php php.php php'php)php'
php php php php php php php php php php php php php php.php php'php php'php php.php php$thisphp-php>php_lastInsertSQLphp;

php php php php php php php php php/php/php executephp thephp statementphp andphp returnphp thephp numberphp ofphp affectedphp rows
php php php php php php php php php$stmtphp php php php=php php$thisphp-php>queryphp(php$sqlphp,php arrayphp_valuesphp(php$bindphp)php)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>rowCountphp(php)php;

php php php php php php php php php$stmtphp-php>nextRowsetphp(php)php;

php php php php php php php php php$thisphp-php>php_lastInsertIdphp php=php php$stmtphp-php>fetchColumnphp(php)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$sqlphp php=php php"SELECTphp namephp FROMphp sysobjectsphp WHEREphp typephp php=php php'Uphp'php ORDERphp BYphp namephp"php;
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
php php php php php php php php php/php*php*
php php php php php php php php php php*php Discoverphp metadataphp informationphp aboutphp thisphp tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$sqlphp php php php php=php php"execphp spphp_columnsphp php@tablephp_namephp php=php php"php php.php php$thisphp-php>quoteIdentifierphp(php$tableNamephp,php truephp)php;
php php php php php php php php php$stmtphp php php php=php php$thisphp-php>queryphp(php$sqlphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;
php	php	
php	php	php/php/php ZFphp-php7php6php9php8
php	php	php$stmtphp-php>closeCursorphp(php)php;

php php php php php php php php ifphp php(countphp(php$resultphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$ownerphp php php php php php php php php php php php=php php1php;
php php php php php php php php php$tablephp_namephp php php php php php php=php php2php;
php php php php php php php php php$columnphp_namephp php php php php php=php php3php;
php php php php php php php php php$typephp_namephp php php php php php php php=php php5php;
php php php php php php php php php$precisionphp php php php php php php php=php php6php;
php php php php php php php php php$lengthphp php php php php php php php php php php=php php7php;
php php php php php php php php php$scalephp php php php php php php php php php php php=php php8php;
php php php php php php php php php$nullablephp php php php php php php php php=php php1php0php;
php php php php php php php php php$columnphp_defphp php php php php php php=php php1php2php;
php php php php php php php php php$columnphp_positionphp php=php php1php6php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Discoverphp primaryphp keyphp columnphp(sphp)php forphp thisphp tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$tableOwnerphp php=php php$resultphp[php0php]php[php$ownerphp]php;
php php php php php php php php php$sqlphp php php php php php php php php=php php"execphp spphp_pkeysphp php@tablephp_ownerphp php=php php"php php.php php$tableOwner
php php php php php php php php php php php php php php php php php php php php php.php php"php,php php@tablephp_namephp php=php php"php php.php php$thisphp-php>quoteIdentifierphp(php$tableNamephp,php truephp)php;
php php php php php php php php php$stmtphp php php php php php php php=php php$thisphp-php>queryphp(php$sqlphp)php;

php php php php php php php php php$primaryKeysResultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;
php php php php php php php php php$primaryKeyColumnphp php php=php arrayphp(php)php;

php php php php php php php php php/php/php Perphp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/msphp1php8php9php8php1php3php.aspxphp,
php php php php php php php php php/php/php resultsphp fromphp spphp_keysphp storedphp procedurephp arephp:
php php php php php php php php php/php/php php0php=TABLEphp_QUALIFIERphp php1php=TABLEphp_OWNERphp php2php=TABLEphp_NAMEphp php3php=COLUMNphp_NAMEphp php4php=KEYphp_SEQphp php5php=PKphp_NAME

php php php php php php php php php$pkeyphp_columnphp_namephp php=php php3php;
php php php php php php php php php$pkeyphp_keyphp_seqphp php php php php php=php php4php;
php php php php php php php php foreachphp php(php$primaryKeysResultphp asphp php$pkeysRowphp)php php{
php php php php php php php php php php php php php$primaryKeyColumnphp[php$pkeysRowphp[php$pkeyphp_columnphp_namephp]php]php php=php php$pkeysRowphp[php$pkeyphp_keyphp_seqphp]php;
php php php php php php php php php}

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php php$pphp php php php php=php php1php;
php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php php$identityphp php=php falsephp;
php php php php php php php php php php php php php$wordsphp php php php php=php explodephp(php'php php'php,php php$rowphp[php$typephp_namephp]php,php php2php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$wordsphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$wordsphp[php0php]php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$wordsphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$identityphp php=php php(boolphp)php pregphp_matchphp(php'php/identityphp/php'php,php php$wordsphp[php1php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$isPrimaryphp php=php arrayphp_keyphp_existsphp(php$rowphp[php$columnphp_namephp]php,php php$primaryKeyColumnphp)php;
php php php php php php php php php php php php ifphp php(php$isPrimaryphp)php php{
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php php$primaryKeyColumnphp[php$rowphp[php$columnphp_namephp]php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$primaryPositionphp php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$descphp[php$thisphp-php>foldCasephp(php$rowphp[php$columnphp_namephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$tablephp_namephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$columnphp_namephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php(intphp)php php$rowphp[php$columnphp_positionphp]php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$typephp,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$rowphp[php$columnphp_defphp]php,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php(boolphp)php php$rowphp[php$nullablephp]php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$rowphp[php$lengthphp]php,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php php$rowphp[php$scalephp]php,
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php php$rowphp[php$precisionphp]php,
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php nullphp,php php/php/php php@todo
php php php php php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php=php>php php$isPrimaryphp,
php php php php php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php=php>php php$identityphp,
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Leavephp autocommitphp modephp andphp beginphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_beginTransactionphp(php)
php php php php php{
php php php php php php php php ifphp php(php!sqlsrvphp_beginphp_transactionphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_commitphp(php)
php php php php php{
php php php php php php php php ifphp php(php!sqlsrvphp_commitphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollphp backphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_rollBackphp(php)
php php php php php{
php php php php php php php php ifphp php(php!sqlsrvphp_rollbackphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php php@todophp Supportphp FETCHphp_CLASSphp andphp FETCHphp_INTOphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$modephp Aphp fetchphp modephp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
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
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(php'FETCHphp_BOUNDphp isphp notphp supportedphp yetphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp(php"Invalidphp fetchphp modephp php'php$modephp'php specifiedphp"php)php;
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
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php php publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)
php php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$offsetphp php=php=php php0php)php php{
php php php php php php php php php php php php php$sqlphp php=php pregphp_replacephp(php'php/php^SELECTphp\sphp/iphp'php,php php'SELECTphp TOPphp php'php php.php php$countphp php.php php'php php'php,php php$sqlphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$orderbyphp php=php stristrphp(php$sqlphp,php php'ORDERphp BYphp'php)php;

php php php php php php php php php php php php ifphp php(php!php$orderbyphp)php php{
php php php php php php php php php php php php php php php php php$overphp php=php php'ORDERphp BYphp php(SELECTphp php0php)php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$overphp php=php pregphp_replacephp(php'php/php\php"php[php^php,php]php*php\php"php.php\php"php(php[php^php,php]php*php)php\php"php/iphp'php,php php'php"innerphp_tblphp"php.php"php$php1php"php'php,php php$orderbyphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Removephp ORDERphp BYphp clausephp fromphp php$sql
php php php php php php php php php php php php php$sqlphp php=php pregphp_replacephp(php'php/php\sphp+ORDERphp BYphp(php.php*php)php/php'php,php php'php'php,php php$sqlphp)php;

php php php php php php php php php php php php php/php/php Addphp ORDERphp BYphp clausephp asphp anphp argumentphp forphp ROWphp_NUMBERphp(php)
php php php php php php php php php php php php php$sqlphp php=php php"SELECTphp ROWphp_NUMBERphp(php)php OVERphp php(php$overphp)php ASphp php\php"ZENDphp_DBphp_ROWNUMphp\php"php,php php*php FROMphp php(php$sqlphp)php ASphp innerphp_tblphp"php;

php php php php php php php php php php php php php$startphp php=php php$offsetphp php+php php1php;
php php php php php php php php php php php php php$endphp php=php php$offsetphp php+php php$countphp;

php php php php php php php php php php php php php$sqlphp php=php php"WITHphp outerphp_tblphp ASphp php(php$sqlphp)php SELECTphp php*php FROMphp outerphp_tblphp WHEREphp php\php"ZENDphp_DBphp_ROWNUMphp\php"php BETWEENphp php$startphp ANDphp php$endphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp adapterphp supportsphp realphp SQLphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp php'positionalphp'php orphp php'namedphp'
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp supportsParametersphp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php$typephp php=php=php php'positionalphp'php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp itsphp php'namedphp'php orphp anythingphp else
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp serverphp versionphp inphp PHPphp style
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getServerVersionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$serverInfophp php=php sqlsrvphp_serverphp_infophp(php$thisphp-php>php_connectionphp)php;

php php php php php php php php ifphp php(php$serverInfophp php!php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$serverInfophp[php'SQLServerVersionphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}
php}
