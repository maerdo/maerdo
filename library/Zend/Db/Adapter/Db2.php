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
php php*php php@versionphp php php php php$Idphp:php Dbphp2php.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Dbphp2
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Dbphp2php.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Db
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Dbphp_Adapterphp_Dbphp2php extendsphp Zendphp_Dbphp_Adapterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Userphp-providedphp configurationphp.
php php php php php php*
php php php php php php*php Basicphp keysphp arephp:
php php php php php php*
php php php php php php*php usernamephp php php php=php>php php(stringphp)php php Connectphp tophp thephp databasephp asphp thisphp usernamephp.
php php php php php php*php passwordphp php php php=php>php php(stringphp)php php Passwordphp associatedphp withphp thephp usernamephp.
php php php php php php*php hostphp php php php php php php php=php>php php(stringphp)php php Whatphp hostphp tophp connectphp tophp php(defaultphp php1php2php7php.php0php.php0php.php1php)
php php php php php php*php dbnamephp php php php php php=php>php php(stringphp)php php Thephp namephp ofphp thephp databasephp tophp user
php php php php php php*php protocolphp php php php=php>php php(stringphp)php php Protocolphp tophp usephp,php defaultsphp tophp php"TCPIPphp"
php php php php php php*php portphp php php php php php php php=php>php php(integerphp)php Portphp numberphp tophp usephp forphp TCPphp/IPphp ifphp protocolphp isphp php"TCPIPphp"
php php php php php php*php persistentphp php=php>php php(booleanphp)php Setphp TRUEphp tophp usephp aphp persistentphp connectionphp php(dbphp2php_pconnectphp)
php php php php php php*php osphp php php php php php php php php php=php>php php(stringphp)php php Thisphp shouldphp bephp setphp tophp php'iphp5php'php ifphp thephp dbphp isphp onphp anphp osphp4php0php0php/iphp5
php php php php php php*php schemaphp php php php php php=php>php php(stringphp)php php Thephp defaultphp schemaphp thephp connectionphp shouldphp use
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(
php php php php php php php php php'dbnamephp'php php php php php php php php=php>php nullphp,
php php php php php php php php php'usernamephp'php php php php php php=php>php nullphp,
php php php php php php php php php'passwordphp'php php php php php php=php>php nullphp,
php php php php php php php php php'hostphp'php php php php php php php php php php=php>php php'localhostphp'php,
php php php php php php php php php'portphp'php php php php php php php php php php=php>php php'php5php0php0php0php0php'php,
php php php php php php php php php'protocolphp'php php php php php php=php>php php'TCPIPphp'php,
php php php php php php php php php'persistentphp'php php php php=php>php falsephp,
php php php php php php php php php'osphp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'schemaphp'php php php php php php php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Executionphp mode
php php php php php php*
php php php php php php*php php@varphp intphp executionphp flagphp php(DBphp2php_AUTOCOMMITphp_ONphp orphp DBphp2php_AUTOCOMMITphp_OFFphp)
php php php php php php*php/
php php php php protectedphp php$php_executephp_modephp php=php DBphp2php_AUTOCOMMITphp_ONphp;

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp aphp DBphp statementphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultStmtClassphp php=php php'Zendphp_Dbphp_Statementphp_Dbphp2php'php;
php php php php protectedphp php$php_isIphp5php php=php falsephp;

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
php php php php php php php php php'SMALLINTphp'php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:INTphp_TYPEphp,
php php php php php php php php php'BIGINTphp'php php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:BIGINTphp_TYPEphp,
php php php php php php php php php'DECIMALphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPEphp,
php php php php php php php php php'NUMERICphp'php php php php php php php php php php php php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPE
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp connectionphp resourcephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php/php connectionphp alreadyphp exists
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'ibmphp_dbphp2php'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php'Thephp IBMphp DBphp2php extensionphp isphp requiredphp forphp thisphp adapterphp butphp thephp extensionphp isphp notphp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_determineIphp5php(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_configphp[php'persistentphp'php]php)php php{
php php php php php php php php php php php php php/php/php usephp persistentphp connection
php php php php php php php php php php php php php$connphp_funcphp_namephp php=php php'dbphp2php_pconnectphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php usephp php"normalphp"php connection
php php php php php php php php php php php php php$connphp_funcphp_namephp php=php php'dbphp2php_connectphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'autocommitphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php setphp executionphp mode
php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'autocommitphp'php]php php=php php&php$thisphp-php>php_executephp_modephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'optionsphp'php]php[Zendphp_Dbphp:php:CASEphp_FOLDINGphp]php)php)php php{
php php php php php php php php php php php php php$caseAttrMapphp php=php arrayphp(
php php php php php php php php php php php php php php php php Zendphp_Dbphp:php:CASEphp_NATURALphp php=php>php DBphp2php_CASEphp_NATURALphp,
php php php php php php php php php php php php php php php php Zendphp_Dbphp:php:CASEphp_UPPERphp php php php=php>php DBphp2php_CASEphp_UPPERphp,
php php php php php php php php php php php php php php php php Zendphp_Dbphp:php:CASEphp_LOWERphp php php php=php>php DBphp2php_CASEphp_LOWER
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'DBphp2php_ATTRphp_CASEphp'php]php php=php php$caseAttrMapphp[php$thisphp-php>php_configphp[php'optionsphp'php]php[Zendphp_Dbphp:php:CASEphp_FOLDINGphp]php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_isIphp5php php&php&php issetphp(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'iphp5php_namingphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'iphp5php_namingphp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'iphp5php_namingphp'php]php php=php DBphp2php_Iphp5php_NAMINGphp_ONphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php[php'iphp5php_namingphp'php]php php=php DBphp2php_Iphp5php_NAMINGphp_OFFphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_configphp[php'hostphp'php]php php!php=php=php php'localhostphp'php php&php&php php!php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php php/php/php ifphp thephp hostphp isnphp'tphp localhostphp,php usephp extendedphp connectionphp params
php php php php php php php php php php php php php$dbnamephp php=php php'DRIVERphp=php{IBMphp DBphp2php ODBCphp DRIVERphp}php'php php.
php php php php php php php php php php php php php php php php php php php php php php'php;DATABASEphp=php'php php.php php$thisphp-php>php_configphp[php'dbnamephp'php]php php.
php php php php php php php php php php php php php php php php php php php php php php'php;HOSTNAMEphp=php'php php.php php$thisphp-php>php_configphp[php'hostphp'php]php php.
php php php php php php php php php php php php php php php php php php php php php php'php;PORTphp=php'php php php php php php.php php$thisphp-php>php_configphp[php'portphp'php]php php.
php php php php php php php php php php php php php php php php php php php php php php'php;PROTOCOLphp=php'php php.php php$thisphp-php>php_configphp[php'protocolphp'php]php php.
php php php php php php php php php php php php php php php php php php php php php php'php;UIDphp=php'php php php php php php php.php php$thisphp-php>php_configphp[php'usernamephp'php]php php.
php php php php php php php php php php php php php php php php php php php php php php'php;PWDphp=php'php php php php php php php.php php$thisphp-php>php_configphp[php'passwordphp'php]php php.php'php;php'php;
php php php php php php php php php php php php php$thisphp-php>php_connectionphp php=php php$connphp_funcphp_namephp(
php php php php php php php php php php php php php php php php php$dbnamephp,
php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php hostphp isphp localhostphp,php sophp usephp standardphp connectionphp params
php php php php php php php php php php php php php$thisphp-php>php_connectionphp php=php php$connphp_funcphp_namephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'dbnamephp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'usernamephp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'passwordphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp thephp connection
php php php php php php php php ifphp php(php!php$thisphp-php>php_connectionphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(dbphp2php_connphp_errormsgphp(php)php,php dbphp2php_connphp_errorphp(php)php)php;
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
php php php php php php php php php php php php php php php php php php php php php php&php&php getphp_resourcephp_typephp(php$thisphp-php>php_connectionphp)php php=php=php php'DBphp2php Connectionphp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forcephp thephp connectionphp tophp closephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closeConnectionphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isConnectedphp(php)php)php php{
php php php php php php php php php php php php dbphp2php_closephp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_connectionphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp SQLphp statementphp forphp preparationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sqlphp Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Dbphp2
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
php php php php php php*php Getsphp thephp executionphp mode
php php php php php php*
php php php php php php*php php@returnphp intphp thephp executionphp modephp php(DBphp2php_AUTOCOMMITphp_ONphp orphp DBphp2php_AUTOCOMMITphp_OFFphp)
php php php php php php*php/
php php php php publicphp functionphp php_getExecuteModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_executephp_modephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_setExecuteModephp(php$modephp)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp DBphp2php_AUTOCOMMITphp_OFFphp:
php php php php php php php php php php php php casephp DBphp2php_AUTOCOMMITphp_ONphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_executephp_modephp php=php php$modephp;
php php php php php php php php php php php php php php php php dbphp2php_autocommitphp(php$thisphp-php>php_connectionphp,php php$modephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php"executionphp modephp notphp supportedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
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
php php php php php php php php php/php*php*
php php php php php php php php php php*php Usephp dbphp2php_escapephp_stringphp(php)php ifphp itphp isphp presentphp inphp thephp IBMphp DBphp2php extensionphp.
php php php php php php php php php php*php Butphp somephp supportedphp versionsphp ofphp PHPphp dophp notphp includephp thisphp functionphp,
php php php php php php php php php php*php sophp fallphp backphp tophp defaultphp quotingphp inphp thephp parentphp classphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(functionphp_existsphp(php'dbphp2php_escapephp_stringphp'php)php)php php{
php php php php php php php php php php php php returnphp php"php'php"php php.php dbphp2php_escapephp_stringphp(php$valuephp)php php.php php"php'php"php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:php_quotephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getQuoteIdentifierSymbolphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$infophp php=php dbphp2php_serverphp_infophp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php ifphp php(php$infophp)php php{
php php php php php php php php php php php php php$identQuotephp php=php php$infophp-php>IDENTIFIERphp_QUOTEphp_CHARphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php dbphp2php_serverphp_infophp(php)php doesphp notphp returnphp resultphp onphp somephp iphp5php OSphp version
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php php php php php php$identQuotephp php=php"php'php"php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$identQuotephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*php php@paramphp stringphp php$schemaphp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listTablesphp(php$schemaphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php ifphp php(php$schemaphp php=php=php=php nullphp php&php&php php$thisphp-php>php_configphp[php'schemaphp'php]php php!php=php nullphp)php php{
php php php php php php php php php php php php php$schemaphp php=php php$thisphp-php>php_configphp[php'schemaphp'php]php;
php php php php php php php php php}

php php php php php php php php php$tablesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php ifphp php(php$schemaphp)php php{
php php php php php php php php php php php php php php php php php$stmtphp php=php dbphp2php_tablesphp(php$thisphp-php>php_connectionphp,php nullphp,php php$schemaphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$stmtphp php=php dbphp2php_tablesphp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php whilephp php(php$rowphp php=php dbphp2php_fetchphp_assocphp(php$stmtphp)php)php php{
php php php php php php php php php php php php php php php php php$tablesphp[php]php php=php php$rowphp[php'TABLEphp_NAMEphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tablesphp php=php php$thisphp-php>php_iphp5listTablesphp(php$schemaphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$tablesphp;
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
php php php php php php*php php php php php php php php php php php php php php php php php php php php php DBphp2php notphp supportsphp UNSIGNEDphp integerphp.
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
php php php php php php php php php/php/php Ensurephp thephp connectionphp isphp madephp sophp thatphp php_isIphp5php isphp set
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php ifphp php(php$schemaNamephp php=php=php=php nullphp php&php&php php$thisphp-php>php_configphp[php'schemaphp'php]php php!php=php nullphp)php php{
php php php php php php php php php php php php php$schemaNamephp php=php php$thisphp-php>php_configphp[php'schemaphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_isIphp5php)php php{

php php php php php php php php php php php php php$sqlphp php=php php"SELECTphp DISTINCTphp cphp.tabschemaphp,php cphp.tabnamephp,php cphp.colnamephp,php cphp.colnophp,
php php php php php php php php php php php php php php php php cphp.typenamephp,php cphp.defaultphp,php cphp.nullsphp,php cphp.lengthphp,php cphp.scalephp,
php php php php php php php php php php php php php php php php cphp.identityphp,php tcphp.typephp ASphp tabconsttypephp,php kphp.colseq
php php php php php php php php php php php php php php php php FROMphp syscatphp.columnsphp c
php php php php php php php php php php php php php php php php LEFTphp JOINphp php(syscatphp.keycolusephp kphp JOINphp syscatphp.tabconstphp tc
php php php php php php php php php php php php php php php php ONphp php(kphp.tabschemaphp php=php tcphp.tabschema
php php php php php php php php php php php php php php php php php php php php ANDphp kphp.tabnamephp php=php tcphp.tabname
php php php php php php php php php php php php php php php php php php php php ANDphp tcphp.typephp php=php php'Pphp'php)php)
php php php php php php php php php php php php php php php php ONphp php(cphp.tabschemaphp php=php kphp.tabschema
php php php php php php php php php php php php php php php php php php php php ANDphp cphp.tabnamephp php=php kphp.tabname
php php php php php php php php php php php php php php php php php php php php ANDphp cphp.colnamephp php=php kphp.colnamephp)
php php php php php php php php php php php php php php php php WHEREphp php"
php php php php php php php php php php php php php php php php php.php php$thisphp-php>quoteIntophp(php'UPPERphp(cphp.tabnamephp)php php=php UPPERphp(php?php)php'php,php php$tableNamephp)php;

php php php php php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php php php php$sqlphp php.php=php php$thisphp-php>quoteIntophp(php'php ANDphp UPPERphp(cphp.tabschemaphp)php php=php UPPERphp(php?php)php'php,php php$schemaNamephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$sqlphp php.php=php php"php ORDERphp BYphp cphp.colnophp"php;

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php/php/php DBphp2php Onphp Iphp5php specificphp query
php php php php php php php php php php php php php$sqlphp php=php php"SELECTphp DISTINCTphp Cphp.TABLEphp_SCHEMAphp,php Cphp.TABLEphp_NAMEphp,php Cphp.COLUMNphp_NAMEphp,php Cphp.ORDINALphp_POSITIONphp,
php php php php php php php php php php php php php php php php Cphp.DATAphp_TYPEphp,php Cphp.COLUMNphp_DEFAULTphp,php Cphp.NULLSphp php,Cphp.LENGTHphp,php Cphp.SCALEphp,php LEFTphp(Cphp.IDENTITYphp,php1php)php,
php php php php php php php php php php php php php php php php LEFTphp(tcphp.TYPEphp,php php1php)php ASphp tabconsttypephp,php kphp.COLSEQ
php php php php php php php php php php php php php php php php FROMphp QSYSphp2php.SYSCOLUMNSphp C
php php php php php php php php php php php php php php php php LEFTphp JOINphp php(QSYSphp2php.syskeycstphp kphp JOINphp QSYSphp2php.SYSCSTphp tc
php php php php php php php php php php php php php php php php php php php php ONphp php(kphp.TABLEphp_SCHEMAphp php=php tcphp.TABLEphp_SCHEMA
php php php php php php php php php php php php php php php php php php php php php php ANDphp kphp.TABLEphp_NAMEphp php=php tcphp.TABLEphp_NAME
php php php php php php php php php php php php php php php php php php php php php php ANDphp LEFTphp(tcphp.typephp,php1php)php php=php php'Pphp'php)php)
php php php php php php php php php php php php php php php php php php php php ONphp php(Cphp.TABLEphp_SCHEMAphp php=php kphp.TABLEphp_SCHEMA
php php php php php php php php php php php php php php php php php php php php php php php ANDphp Cphp.TABLEphp_NAMEphp php=php kphp.TABLEphp_NAME
php php php php php php php php php php php php php php php php php php php php php php php ANDphp Cphp.COLUMNphp_NAMEphp php=php kphp.COLUMNphp_NAMEphp)
php php php php php php php php php php php php php php php php WHEREphp php"
php php php php php php php php php php php php php php php php php.php php$thisphp-php>quoteIntophp(php'UPPERphp(Cphp.TABLEphp_NAMEphp)php php=php UPPERphp(php?php)php'php,php php$tableNamephp)php;

php php php php php php php php php php php php ifphp php(php$schemaNamephp)php php{
php php php php php php php php php php php php php php php php php$sqlphp php.php=php php$thisphp-php>quoteIntophp(php'php ANDphp UPPERphp(Cphp.TABLEphp_SCHEMAphp)php php=php UPPERphp(php?php)php'php,php php$schemaNamephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$sqlphp php.php=php php"php ORDERphp BYphp Cphp.ORDINALphp_POSITIONphp FORphp FETCHphp ONLYphp"php;
php php php php php php php php php}

php php php php php php php php php$descphp php=php arrayphp(php)php;
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp)php;

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
php php php php php php php php php$tabconstTypephp php php php=php php1php0php;
php php php php php php php php php$colseqphp php php php php php php php php php=php php1php1php;

php php php php php php php php foreachphp php(php$resultphp asphp php$keyphp php=php>php php$rowphp)php php{
php php php php php php php php php php php php listphp php(php$primaryphp,php php$primaryPositionphp,php php$identityphp)php php=php arrayphp(falsephp,php nullphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(php$rowphp[php$tabconstTypephp]php php=php=php php'Pphp'php)php php{
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

php php php php php php php php php php php php php/php/php onlyphp colnamephp needsphp tophp bephp casephp adjusted
php php php php php php php php php php php php php$descphp[php$thisphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'SCHEMAphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$tabschemaphp]php)php,
php php php php php php php php php php php php php php php php php'TABLEphp_NAMEphp'php php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$tabnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_NAMEphp'php php php php php php php=php>php php$thisphp-php>foldCasephp(php$rowphp[php$colnamephp]php)php,
php php php php php php php php php php php php php php php php php'COLUMNphp_POSITIONphp'php php php=php>php php(php!php$thisphp-php>php_isIphp5php)php php?php php$rowphp[php$colnophp]php+php1php php:php php$rowphp[php$colnophp]php,
php php php php php php php php php php php php php php php php php'DATAphp_TYPEphp'php php php php php php php php php=php>php php$rowphp[php$typenamephp]php,
php php php php php php php php php php php php php php php php php'DEFAULTphp'php php php php php php php php php php php=php>php php$rowphp[php$defaultphp]php,
php php php php php php php php php php php php php php php php php'NULLABLEphp'php php php php php php php php php php=php>php php(boolphp)php php(php$rowphp[php$nullsphp]php php=php=php php'Yphp'php)php,
php php php php php php php php php php php php php php php php php'LENGTHphp'php php php php php php php php php php php php=php>php php$rowphp[php$lengthphp]php,
php php php php php php php php php php php php php php php php php'SCALEphp'php php php php php php php php php php php php php=php>php php$rowphp[php$scalephp]php,
php php php php php php php php php php php php php php php php php'PRECISIONphp'php php php php php php php php php=php>php php(php$rowphp[php$typenamephp]php php=php=php php'DECIMALphp'php php?php php$rowphp[php$lengthphp]php php:php php0php)php,
php php php php php php php php php php php php php php php php php'UNSIGNEDphp'php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php php php php php'PRIMARYphp'php php php php php php php php php php php=php>php php$primaryphp,
php php php php php php php php php php php php php php php php php'PRIMARYphp_POSITIONphp'php php=php>php php$primaryPositionphp,
php php php php php php php php php php php php php php php php php'IDENTITYphp'php php php php php php php php php php=php>php php$identity
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$descphp;
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

php php php php php php php php ifphp php(php!php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php php$quotedSequenceNamephp php=php php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php;
php php php php php php php php php php php php php$sqlphp php=php php'SELECTphp PREVVALphp FORphp php'php php.php php$quotedSequenceNamephp php.php php'php ASphp VALphp FROMphp SYSIBMphp.SYSDUMMYphp1php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$quotedSequenceNamephp php=php php$sequenceNamephp;
php php php php php php php php php php php php php$sqlphp php=php php'SELECTphp PREVVALphp FORphp php'php php.php php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php php.php php'php ASphp VALphp FROMphp QSYSphp2php.QSQPTABLphp'php;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php(stringphp)php php$valuephp;
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
php php php php php php php php php$sqlphp php=php php'SELECTphp NEXTVALphp FORphp php'php.php$thisphp-php>quoteIdentifierphp(php$sequenceNamephp,php truephp)php.php'php ASphp VALphp FROMphp SYSIBMphp.SYSDUMMYphp1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php(stringphp)php php$valuephp;
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
php php php php php php*php Thephp IDENTITYphp_VALphp_LOCALphp(php)php functionphp givesphp thephp lastphp generatedphp identityphp value
php php php php php php*php inphp thephp currentphp processphp,php evenphp ifphp itphp wasphp forphp aphp GENERATEDphp columnphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableNamephp OPTIONAL
php php php php php php*php php@paramphp stringphp php$primaryKeyphp OPTIONAL
php php php php php php*php php@paramphp stringphp php$idTypephp OPTIONALphp usedphp forphp iphp5php platformphp tophp definephp sequencephp/idenityphp uniquephp value
php php php php php php*php php@returnphp string
php php php php php php*php/

php php php php publicphp functionphp lastInsertIdphp(php$tableNamephp php=php nullphp,php php$primaryKeyphp php=php nullphp,php php$idTypephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php returnphp php(stringphp)php php$thisphp-php>php_iphp5LastInsertIdphp(php$tableNamephp,php php$idTypephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tableNamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$sequenceNamephp php=php php$tableNamephp;
php php php php php php php php php php php php ifphp php(php$primaryKeyphp)php php{
php php php php php php php php php php php php php php php php php$sequenceNamephp php.php=php php"php_php$primaryKeyphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$sequenceNamephp php.php=php php'php_seqphp'php;
php php php php php php php php php php php php returnphp php$thisphp-php>lastSequenceIdphp(php$sequenceNamephp)php;
php php php php php php php php php}

php php php php php php php php php$sqlphp php=php php'SELECTphp IDENTITYphp_VALphp_LOCALphp(php)php ASphp VALphp FROMphp SYSIBMphp.SYSDUMMYphp1php'php;
php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php returnphp php(stringphp)php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Beginphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_beginTransactionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_setExecuteModephp(DBphp2php_AUTOCOMMITphp_OFFphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_commitphp(php)
php php php php php{
php php php php php php php php ifphp php(php!dbphp2php_commitphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(
php php php php php php php php php php php php php php php php dbphp2php_connphp_errormsgphp(php$thisphp-php>php_connectionphp)php,
php php php php php php php php php php php php php php php php dbphp2php_connphp_errorphp(php$thisphp-php>php_connectionphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setExecuteModephp(DBphp2php_AUTOCOMMITphp_ONphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollbackphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_rollBackphp(php)
php php php php php{
php php php php php php php php ifphp php(php!dbphp2php_rollbackphp(php$thisphp-php>php_connectionphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(
php php php php php php php php php php php php php php php php dbphp2php_connphp_errormsgphp(php$thisphp-php>php_connectionphp)php,
php php php php php php php php php php php php php php php php dbphp2php_connphp_errorphp(php$thisphp-php>php_connectionphp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_setExecuteModephp(DBphp2php_AUTOCOMMITphp_ONphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
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
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:php php php php/php/php boundphp tophp PHPphp variable
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php'FETCHphp_BOUNDphp isphp notphp supportedphp yetphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php"Invalidphp fetchphp modephp php'php$modephp'php specifiedphp"php)php;
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
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)
php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php"LIMITphp argumentphp countphp=php$countphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php intvalphp(php$offsetphp)php;
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Dbphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Dbphp2php_Exceptionphp(php"LIMITphp argumentphp offsetphp=php$offsetphp isphp notphp validphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$offsetphp php=php=php php0php)php php{
php php php php php php php php php php php php php$limitphp_sqlphp php=php php$sqlphp php.php php"php FETCHphp FIRSTphp php$countphp ROWSphp ONLYphp"php;
php php php php php php php php php php php php returnphp php$limitphp_sqlphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php DBphp2php doesphp notphp implementphp thephp LIMITphp clausephp asphp somephp RDBMSphp dophp.
php php php php php php php php php php*php Wephp havephp tophp simulatephp itphp withphp subqueriesphp andphp ROWNUMphp.
php php php php php php php php php php*php Unfortunatelyphp becausephp wephp usephp thephp columnphp wildcardphp php"php*php"php,
php php php php php php php php php php*php thisphp putsphp anphp extraphp columnphp intophp thephp queryphp resultphp setphp.
php php php php php php php php php php*php/
php php php php php php php php php$limitphp_sqlphp php=php php"SELECTphp zphp2php.php*
php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php SELECTphp ROWphp_NUMBERphp(php)php OVERphp(php)php ASphp php\php"ZENDphp_DBphp_ROWNUMphp\php"php,php zphp1php.php*
php php php php php php php php php php php php php php php php FROMphp php(
php php php php php php php php php php php php php php php php php php php php php"php php.php php$sqlphp php.php php"
php php php php php php php php php php php php php php php php php)php zphp1
php php php php php php php php php php php php php)php zphp2
php php php php php php php php php php php php WHEREphp zphp2php.zendphp_dbphp_rownumphp BETWEENphp php"php php.php php(php$offsetphp+php1php)php php.php php"php ANDphp php"php php.php php(php$offsetphp+php$countphp)php;
php php php php php php php php returnphp php$limitphp_sqlphp;
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
php php php php php php php php php$serverphp_infophp php=php dbphp2php_serverphp_infophp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php ifphp php(php$serverphp_infophp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$versionphp php=php php$serverphp_infophp-php>DBMSphp_VERphp;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isIphp5php)php php{
php php php php php php php php php php php php php php php php php$versionphp php=php php(intphp)php substrphp(php$versionphp,php php0php,php php2php)php php.php php'php.php'php php.php php(intphp)php substrphp(php$versionphp,php php2php,php php2php)php php.php php'php.php'php php.php php(intphp)php substrphp(php$versionphp,php php4php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$versionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whetherphp orphp notphp thisphp isphp runningphp onphp iphp5
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isIphp5php(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isIphp5php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_determineIphp5php(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(boolphp)php php$thisphp-php>php_isIphp5php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp thephp connectionphp parametersphp accordingphp tophp verify
php php php php php php*php typephp ofphp usedphp OS
php php php php php php*
php php php php php php*php php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_determineIphp5php(php)
php php php php php{
php php php php php php php php php/php/php firstphp usphp thephp compiledphp flagphp.
php php php php php php php php php$thisphp-php>php_isIphp5php php=php php(phpphp_unamephp(php'sphp'php)php php=php=php php'OSphp4php0php0php'php)php php?php truephp php:php falsephp;

php php php php php php php php php/php/php ifphp thisphp isphp setphp,php thenphp usphp it
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'osphp'php]php)php)php{
php php php php php php php php php php php php ifphp php(strtolowerphp(php$thisphp-php>php_configphp[php'osphp'php]php)php php=php=php=php php'iphp5php'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_isIphp5php php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php anyphp otherphp valuephp passedphp inphp,php itsphp null
php php php php php php php php php php php php php php php php php$thisphp-php>php_isIphp5php php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Dbphp2php Onphp Iphp5php specificphp method
php php php php php php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp php.
php php php php php php*php Usedphp onlyphp forphp DBphp2php/php4php0php0php.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_iphp5listTablesphp(php$schemaphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/listphp ofphp iphp5php librariesphp.
php php php php php php php php php$tablesphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$schemaphp)php php{
php php php php php php php php php php php php php$tablesStatementphp php=php dbphp2php_tablesphp(php$thisphp-php>php_connectionphp,php nullphp,php php$schemaphp)php;
php php php php php php php php php php php php whilephp php(php$rowTablesphp php=php dbphp2php_fetchphp_assocphp(php$tablesStatementphp)php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$rowTablesphp[php'TABLEphp_NAMEphp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tablesphp[php]php php=php php$rowTablesphp[php'TABLEphp_NAMEphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$schemaStatementphp php=php dbphp2php_tablesphp(php$thisphp-php>php_connectionphp)php;
php php php php php php php php php php php php whilephp php(php$schemaphp php=php dbphp2php_fetchphp_assocphp(php$schemaStatementphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$schemaphp[php'TABLEphp_SCHEMphp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php listphp ofphp thephp tablesphp whichphp belongsphp tophp thephp selectedphp library
php php php php php php php php php php php php php php php php php php php php php$tablesStatementphp php=php dbphp2php_tablesphp(php$thisphp-php>php_connectionphp,php NULLphp,php php$schemaphp[php'TABLEphp_SCHEMphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_resourcephp(php$tablesStatementphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php whilephp php(php$rowTablesphp php=php dbphp2php_fetchphp_assocphp(php$tablesStatementphp)php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$rowTablesphp[php'TABLEphp_NAMEphp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tablesphp[php]php php=php php$rowTablesphp[php'TABLEphp_NAMEphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$tablesphp;
php php php php php}

php php php php protectedphp functionphp php_iphp5LastInsertIdphp(php$objectNamephp php=php nullphp,php php$idTypephp php=php nullphp)
php php php php php{

php php php php php php php php ifphp php(php$objectNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$sqlphp php=php php'SELECTphp IDENTITYphp_VALphp_LOCALphp(php)php ASphp VALphp FROMphp QSYSphp2php.QSQPTABLphp'php;
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>fetchOnephp(php$sqlphp)php;
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(strtoupperphp(php$idTypephp)php php=php=php=php php'Sphp'php)php{
php php php php php php php php php php php php php/php/checkphp iphp5php_libphp option
php php php php php php php php php php php php php$sequenceNamephp php=php php$objectNamephp;
php php php php php php php php php php php php returnphp php$thisphp-php>lastSequenceIdphp(php$sequenceNamephp)php;
php php php php php php php php php}

php php php php php php php php php php php php php/php/returnsphp lastphp identityphp valuephp forphp thephp specifiedphp table
php php php php php php php php php/php/ifphp php(strtoupperphp(php$idTypephp)php php=php=php=php php'Iphp'php)php php{
php php php php php php php php php$tableNamephp php=php php$objectNamephp;
php php php php php php php php returnphp php$thisphp-php>fetchOnephp(php'SELECTphp IDENTITYphp_VALphp_LOCALphp(php)php fromphp php'php php.php php$thisphp-php>quoteIdentifierphp(php$tableNamephp)php)php;
php php php php php}

php}


