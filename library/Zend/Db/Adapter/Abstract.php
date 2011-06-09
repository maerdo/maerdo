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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php2php5php2php php2php0php1php0php-php1php0php-php2php6php php1php2php:php4php8php:php3php2Zphp matthewphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Select
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Selectphp.phpphp'php;

php/php*php*
php php*php Classphp forphp connectingphp tophp SQLphp databasesphp andphp performingphp commonphp operationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Dbphp_Adapterphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Userphp-providedphp configuration
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Fetchphp mode
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_fetchModephp php=php Zendphp_Dbphp:php:FETCHphp_ASSOCphp;

php php php php php/php*php*
php php php php php php*php Queryphp profilerphp objectphp,php ofphp typephp Zendphp_Dbphp_Profiler
php php php php php php*php orphp aphp subclassphp ofphp thatphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Profiler
php php php php php php*php/
php php php php protectedphp php$php_profilerphp;

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp aphp DBphp statementphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultStmtClassphp php=php php'Zendphp_Dbphp_Statementphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp classphp namephp forphp thephp profilerphp objectphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultProfilerClassphp php=php php'Zendphp_Dbphp_Profilerphp'php;

php php php php php/php*php*
php php php php php php*php Databasephp connection
php php php php php php*
php php php php php php*php php@varphp objectphp|resourcephp|null
php php php php php php*php/
php php php php protectedphp php$php_connectionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Specifiesphp thephp casephp ofphp columnphp namesphp retrievedphp inphp queries
php php php php php php*php Options
php php php php php php*php Zendphp_Dbphp:php:CASEphp_NATURALphp php(defaultphp)
php php php php php php*php Zendphp_Dbphp:php:CASEphp_LOWER
php php php php php php*php Zendphp_Dbphp:php:CASEphp_UPPER
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_caseFoldingphp php=php Zendphp_Dbphp:php:CASEphp_NATURALphp;

php php php php php/php*php*
php php php php php php*php Specifiesphp whetherphp thephp adapterphp automaticallyphp quotesphp identifiersphp.
php php php php php php*php Ifphp truephp,php mostphp SQLphp generatedphp byphp Zendphp_Dbphp classesphp applies
php php php php php php*php identifierphp quotingphp automaticallyphp.
php php php php php php*php Ifphp falsephp,php developerphp mustphp quotephp identifiersphp themselves
php php php php php php*php byphp callingphp quoteIdentifierphp(php)php.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_autoQuoteIdentifiersphp php=php truephp;

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
php php php php php php php php Zendphp_Dbphp:php:FLOATphp_TYPEphp php php=php>php Zendphp_Dbphp:php:FLOATphp_TYPE
php php php php php)php;

php php php php php/php*php*php Weitherphp orphp notphp thatphp objectphp canphp getphp serialized
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_allowSerializationphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Weitherphp orphp notphp thephp databasephp shouldphp bephp reconnected
php php php php php php*php tophp thatphp adapterphp whenphp wakingphp up
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_autoReconnectOnUnserializephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php$configphp isphp anphp arrayphp ofphp keyphp/valuephp pairsphp orphp anphp instancephp ofphp Zendphp_Config
php php php php php php*php containingphp configurationphp optionsphp.php php Thesephp optionsphp arephp commonphp tophp mostphp adaptersphp:
php php php php php php*
php php php php php php*php dbnamephp php php php php php php php php php=php>php php(stringphp)php Thephp namephp ofphp thephp databasephp tophp user
php php php php php php*php usernamephp php php php php php php php=php>php php(stringphp)php Connectphp tophp thephp databasephp asphp thisphp usernamephp.
php php php php php php*php passwordphp php php php php php php php=php>php php(stringphp)php Passwordphp associatedphp withphp thephp usernamephp.
php php php php php php*php hostphp php php php php php php php php php php php=php>php php(stringphp)php Whatphp hostphp tophp connectphp tophp,php defaultsphp tophp localhost
php php php php php php*
php php php php php php*php Somephp optionsphp arephp usedphp onphp aphp casephp-byphp-casephp basisphp byphp adaptersphp:
php php php php php php*
php php php php php php*php portphp php php php php php php php php php php php=php>php php(stringphp)php Thephp portphp ofphp thephp database
php php php php php php*php persistentphp php php php php php=php>php php(booleanphp)php Whetherphp tophp usephp aphp persistentphp connectionphp orphp notphp,php defaultsphp tophp false
php php php php php php*php protocolphp php php php php php php php=php>php php(stringphp)php Thephp networkphp protocolphp,php defaultsphp tophp TCPIP
php php php php php php*php caseFoldingphp php php php php=php>php php(intphp)php stylephp ofphp casephp-alterationphp usedphp forphp identifiers
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$configphp Anphp arrayphp orphp instancephp ofphp Zendphp_Configphp havingphp configurationphp data
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$configphp)
php php php php php{
php php php php php php php php php/php*
php php php php php php php php php php*php Verifyphp thatphp adapterphp parametersphp arephp inphp anphp arrayphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php*php Convertphp Zendphp_Configphp argumentphp tophp aphp plainphp arrayphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php'Adapterphp parametersphp mustphp bephp inphp anphp arrayphp orphp aphp Zendphp_Configphp objectphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_checkRequiredOptionsphp(php$configphp)php;

php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php Zendphp_Dbphp:php:CASEphp_FOLDINGphp php php php php php php php php php php php=php>php php$thisphp-php>php_caseFoldingphp,
php php php php php php php php php php php php Zendphp_Dbphp:php:AUTOphp_QUOTEphp_IDENTIFIERSphp php=php>php php$thisphp-php>php_autoQuoteIdentifiersphp,
php php php php php php php php php php php php Zendphp_Dbphp:php:FETCHphp_MODEphp php php php php php php php php php php php php php=php>php php$thisphp-php>php_fetchModephp,
php php php php php php php php php)php;
php php php php php php php php php$driverOptionsphp php=php arrayphp(php)php;

php php php php php php php php php/php*
php php php php php php php php php php*php normalizephp thephp configphp andphp mergephp itphp withphp thephp defaults
php php php php php php php php php php*php/
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php/php canphp'tphp usephp arrayphp_mergephp(php)php becausephp keysphp mightphp bephp integers
php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$configphp[php'optionsphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'driverphp_optionsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$configphp[php'driverphp_optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php canphp'tphp usephp arrayphp_mergephp(php)php becausephp keysphp mightphp bephp integers
php php php php php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$configphp[php'driverphp_optionsphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$driverOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$configphp[php'charsetphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'charsetphp'php]php php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$configphp[php'persistentphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'persistentphp'php]php php=php falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_configphp php=php arrayphp_mergephp(php$thisphp-php>php_configphp,php php$configphp)php;
php php php php php php php php php$thisphp-php>php_configphp[php'optionsphp'php]php php=php php$optionsphp;
php php php php php php php php php$thisphp-php>php_configphp[php'driverphp_optionsphp'php]php php=php php$driverOptionsphp;


php php php php php php php php php/php/php obtainphp thephp casephp settingphp,php ifphp therephp isphp one
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:CASEphp_FOLDINGphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$casephp php=php php(intphp)php php$optionsphp[Zendphp_Dbphp:php:CASEphp_FOLDINGphp]php;
php php php php php php php php php php php php switchphp php(php$casephp)php php{
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_LOWERphp:
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_UPPERphp:
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_NATURALphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_caseFoldingphp php=php php$casephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php'Casephp mustphp bephp onephp ofphp thephp followingphp constantsphp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'Zendphp_Dbphp:php:CASEphp_NATURALphp,php Zendphp_Dbphp:php:CASEphp_LOWERphp,php Zendphp_Dbphp:php:CASEphp_UPPERphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:FETCHphp_MODEphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp[Zendphp_Dbphp:php:FETCHphp_MODEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$constantphp php=php php'Zendphp_Dbphp:php:FETCHphp_php'php php.php strtoupperphp(php$optionsphp[Zendphp_Dbphp:php:FETCHphp_MODEphp]php)php;
php php php php php php php php php php php php php php php php ifphp(definedphp(php$constantphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[Zendphp_Dbphp:php:FETCHphp_MODEphp]php php=php constantphp(php$constantphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setFetchModephp(php(intphp)php php$optionsphp[Zendphp_Dbphp:php:FETCHphp_MODEphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php obtainphp quotingphp propertyphp ifphp therephp isphp one
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:AUTOphp_QUOTEphp_IDENTIFIERSphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_autoQuoteIdentifiersphp php=php php(boolphp)php php$optionsphp[Zendphp_Dbphp:php:AUTOphp_QUOTEphp_IDENTIFIERSphp]php;
php php php php php php php php php}

php php php php php php php php php/php/php obtainphp allowphp serializationphp propertyphp ifphp therephp isphp one
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:ALLOWphp_SERIALIZATIONphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_allowSerializationphp php=php php(boolphp)php php$optionsphp[Zendphp_Dbphp:php:ALLOWphp_SERIALIZATIONphp]php;
php php php php php php php php php}

php php php php php php php php php/php/php obtainphp autophp reconnectphp onphp unserializephp propertyphp ifphp therephp isphp one
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:AUTOphp_RECONNECTphp_ONphp_UNSERIALIZEphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_autoReconnectOnUnserializephp php=php php(boolphp)php php$optionsphp[Zendphp_Dbphp:php:AUTOphp_RECONNECTphp_ONphp_UNSERIALIZEphp]php;
php php php php php php php php php}

php php php php php php php php php/php/php createphp aphp profilerphp object
php php php php php php php php php$profilerphp php=php falsephp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(Zendphp_Dbphp:php:PROFILERphp,php php$thisphp-php>php_configphp)php)php php{
php php php php php php php php php php php php php$profilerphp php=php php$thisphp-php>php_configphp[Zendphp_Dbphp:php:PROFILERphp]php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_configphp[Zendphp_Dbphp:php:PROFILERphp]php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setProfilerphp(php$profilerphp)php;
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

php php php php php php php php ifphp php(php!php arrayphp_keyphp_existsphp(php'passwordphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'passwordphp'php forphp loginphp credentialsphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php arrayphp_keyphp_existsphp(php'usernamephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(php"Configurationphp arrayphp mustphp havephp aphp keyphp forphp php'usernamephp'php forphp loginphp credentialsphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp underlyingphp databasephp connectionphp objectphp orphp resourcephp.
php php php php php php*php Ifphp notphp presentlyphp connectedphp,php thisphp initiatesphp thephp connectionphp.
php php php php php php*
php php php php php php*php php@returnphp objectphp|resourcephp|null
php php php php php php*php/
php php php php publicphp functionphp getConnectionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_connectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp configurationphp variablesphp inphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getConfigphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp adapterphp'sphp profilerphp objectphp.
php php php php php php*
php php php php php php*php Thephp argumentphp mayphp bephp aphp booleanphp,php anphp associativephp arrayphp,php anphp instancephp of
php php php php php php*php Zendphp_Dbphp_Profilerphp,php orphp anphp instancephp ofphp Zendphp_Configphp.
php php php php php php*
php php php php php php*php Aphp booleanphp argumentphp setsphp thephp profilerphp tophp enabledphp ifphp truephp,php orphp disabledphp if
php php php php php php*php falsephp.php php Thephp profilerphp classphp isphp thephp adapterphp'sphp defaultphp profilerphp classphp,
php php php php php php*php Zendphp_Dbphp_Profilerphp.
php php php php php php*
php php php php php php*php Anphp instancephp ofphp Zendphp_Dbphp_Profilerphp setsphp thephp adapterphp'sphp instancephp tophp that
php php php php php php*php objectphp.php php Thephp profilerphp isphp enabledphp andphp disabledphp separatelyphp.
php php php php php php*
php php php php php php*php Anphp associativephp arrayphp argumentphp mayphp containphp anyphp ofphp thephp keysphp php'enabledphp'php,
php php php php php php*php php'classphp'php,php andphp php'instancephp'php.php Thephp php'enabledphp'php andphp php'instancephp'php keysphp correspondphp tophp the
php php php php php php*php booleanphp andphp objectphp typesphp documentedphp abovephp.php Thephp php'classphp'php keyphp isphp usedphp tophp namephp a
php php php php php php*php classphp tophp usephp forphp aphp customphp profilerphp.php Thephp classphp mustphp bephp Zendphp_Dbphp_Profilerphp orphp a
php php php php php php*php subclassphp.php Thephp classphp isphp instantiatedphp withphp nophp constructorphp argumentsphp.php Thephp php'classphp'
php php php php php php*php optionphp isphp ignoredphp whenphp thephp php'instancephp'php optionphp isphp suppliedphp.
php php php php php php*
php php php php php php*php Anphp objectphp ofphp typephp Zendphp_Configphp mayphp containphp thephp propertiesphp php'enabledphp'php,php php'classphp'php,php and
php php php php php php*php php'instancephp'php,php justphp asphp ifphp anphp associativephp arrayphp hadphp beenphp passedphp insteadphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dbphp_Profilerphp|Zendphp_Configphp|arrayphp|booleanphp php$profiler
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Dbphp_Profilerphp_Exceptionphp ifphp thephp objectphp instancephp orphp classphp specified
php php php php php php*php php php php php php php php php isphp notphp Zendphp_Dbphp_Profilerphp orphp anphp extensionphp ofphp thatphp classphp.
php php php php php php*php/
php php php php publicphp functionphp setProfilerphp(php$profilerphp)
php php php php php{
php php php php php php php php php$enabledphp php php php php php php php php php php=php nullphp;
php php php php php php php php php$profilerClassphp php php php php=php php$thisphp-php>php_defaultProfilerClassphp;
php php php php php php php php php$profilerInstancephp php=php nullphp;

php php php php php php php php ifphp php(php$profilerIsObjectphp php=php isphp_objectphp(php$profilerphp)php)php php{
php php php php php php php php php php php php ifphp php(php$profilerphp instanceofphp Zendphp_Dbphp_Profilerphp)php php{
php php php php php php php php php php php php php php php php php$profilerInstancephp php=php php$profilerphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$profilerphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$profilerphp php=php php$profilerphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Profilerphp_Exceptionphp(php'Profilerphp argumentphp mustphp bephp anphp instancephp ofphp eitherphp Zendphp_Dbphp_Profilerphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php orphp Zendphp_Configphp whenphp providedphp asphp anphp objectphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$profilerphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$profilerphp[php'enabledphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$enabledphp php=php php(boolphp)php php$profilerphp[php'enabledphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$profilerphp[php'classphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$profilerClassphp php=php php$profilerphp[php'classphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$profilerphp[php'instancephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$profilerInstancephp php=php php$profilerphp[php'instancephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!php$profilerIsObjectphp)php php{
php php php php php php php php php php php php php$enabledphp php=php php(boolphp)php php$profilerphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$profilerInstancephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$profilerClassphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$profilerClassphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$profilerInstancephp php=php newphp php$profilerClassphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$profilerInstancephp instanceofphp Zendphp_Dbphp_Profilerphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Profilerphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Profilerphp_Exceptionphp(php'Classphp php'php php.php getphp_classphp(php$profilerInstancephp)php php.php php'php doesphp notphp extendphp php'
php php php php php php php php php php php php php php php php php.php php'Zendphp_Dbphp_Profilerphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$enabledphp)php php{
php php php php php php php php php php php php php$profilerInstancephp-php>setEnabledphp(php$enabledphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_profilerphp php=php php$profilerInstancephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp profilerphp forphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Profiler
php php php php php php*php/
php php php php publicphp functionphp getProfilerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_profilerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp statementphp classphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getStatementClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultStmtClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp statementphp classphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstractphp Fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setStatementClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultStmtClassphp php=php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp andphp executesphp anphp SQLphp statementphp withphp boundphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php$sqlphp php Thephp SQLphp statementphp withphp placeholdersphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php Mayphp bephp aphp stringphp orphp Zendphp_Dbphp_Selectphp.
php php php php php php*php php@paramphp php mixedphp php php$bindphp Anphp arrayphp ofphp dataphp tophp bindphp tophp thephp placeholdersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Interface
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php connectphp tophp thephp databasephp ifphp needed
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php php/php/php isphp thephp php$sqlphp aphp Zendphp_Dbphp_Selectphp objectphp?
php php php php php php php php ifphp php(php$sqlphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$bindphp)php)php php{
php php php php php php php php php php php php php php php php php$bindphp php=php php$sqlphp-php>getBindphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$sqlphp php=php php$sqlphp-php>assemblephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp php$bindphp tophp anphp arrayphp;
php php php php php php php php php/php/php donphp'tphp usephp php(arrayphp)php typecastingphp because
php php php php php php php php php/php/php becausephp php$bindphp mayphp bephp aphp Zendphp_Dbphp_Exprphp object
php php php php php php php php ifphp php(php!isphp_arrayphp(php$bindphp)php)php php{
php php php php php php php php php php php php php$bindphp php=php arrayphp(php$bindphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php preparephp andphp executephp thephp statementphp withphp profiling
php php php php php php php php php$stmtphp php=php php$thisphp-php>preparephp(php$sqlphp)php;
php php php php php php php php php$stmtphp-php>executephp(php$bindphp)php;

php php php php php php php php php/php/php returnphp thephp resultsphp embeddedphp inphp thephp preparedphp statementphp object
php php php php php php php php php$stmtphp-php>setFetchModephp(php$thisphp-php>php_fetchModephp)php;
php php php php php php php php returnphp php$stmtphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Leavephp autocommitphp modephp andphp beginphp aphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp beginTransactionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$qphp php=php php$thisphp-php>php_profilerphp-php>queryStartphp(php'beginphp'php,php Zendphp_Dbphp_Profilerphp:php:TRANSACTIONphp)php;
php php php php php php php php php$thisphp-php>php_beginTransactionphp(php)php;
php php php php php php php php php$thisphp-php>php_profilerphp-php>queryEndphp(php$qphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp commitphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$qphp php=php php$thisphp-php>php_profilerphp-php>queryStartphp(php'commitphp'php,php Zendphp_Dbphp_Profilerphp:php:TRANSACTIONphp)php;
php php php php php php php php php$thisphp-php>php_commitphp(php)php;
php php php php php php php php php$thisphp-php>php_profilerphp-php>queryEndphp(php$qphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rollphp backphp aphp transactionphp andphp returnphp tophp autocommitphp modephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp rollBackphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;
php php php php php php php php php$qphp php=php php$thisphp-php>php_profilerphp-php>queryStartphp(php'rollbackphp'php,php Zendphp_Dbphp_Profilerphp:php:TRANSACTIONphp)php;
php php php php php php php php php$thisphp-php>php_rollBackphp(php)php;
php php php php php php php php php$thisphp-php>php_profilerphp-php>queryEndphp(php$qphp)php;
php php php php php php php php returnphp php$thisphp;
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
php php php php php php php php php$iphp php=php php0php;
php php php php php php php php foreachphp php(php$bindphp asphp php$colphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$colsphp[php]php php=php php$thisphp-php>quoteIdentifierphp(php$colphp,php truephp)php;
php php php php php php php php php php php php ifphp php(php$valphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php$valsphp[php]php php=php php$valphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$colphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'positionalphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valsphp[php]php php=php php'php?php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'namedphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$colphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$bindphp[php'php:colphp'php.php$iphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$valsphp[php]php php=php php'php:colphp'php.php$iphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(getphp_classphp(php$thisphp)php php.php"php doesnphp'tphp supportphp positionalphp orphp namedphp bindingphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php buildphp thephp statement
php php php php php php php php php$sqlphp php=php php"INSERTphp INTOphp php"
php php php php php php php php php php php php php php.php php$thisphp-php>quoteIdentifierphp(php$tablephp,php truephp)
php php php php php php php php php php php php php php.php php'php php(php'php php.php implodephp(php'php,php php'php,php php$colsphp)php php.php php'php)php php'
php php php php php php php php php php php php php php.php php'VALUESphp php(php'php php.php implodephp(php'php,php php'php,php php$valsphp)php php.php php'php)php'php;

php php php php php php php php php/php/php executephp thephp statementphp andphp returnphp thephp numberphp ofphp affectedphp rows
php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'positionalphp'php)php)php php{
php php php php php php php php php php php php php$bindphp php=php arrayphp_valuesphp(php$bindphp)php;
php php php php php php php php php}
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>rowCountphp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatesphp tablephp rowsphp withphp specifiedphp dataphp basedphp onphp aphp WHEREphp clausephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$tablephp Thephp tablephp tophp updatephp.
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$bindphp php Columnphp-valuephp pairsphp.
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$wherephp UPDATEphp WHEREphp clausephp(sphp)php.
php php php php php php*php php@returnphp intphp php php php php php php php php php Thephp numberphp ofphp affectedphp rowsphp.
php php php php php php*php/
php php php php publicphp functionphp updatephp(php$tablephp,php arrayphp php$bindphp,php php$wherephp php=php php'php'php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Buildphp php"colphp php=php php?php"php pairsphp forphp thephp statementphp,
php php php php php php php php php php*php exceptphp forphp Zendphp_Dbphp_Exprphp whichphp isphp treatedphp literallyphp.
php php php php php php php php php php*php/
php php php php php php php php php$setphp php=php arrayphp(php)php;
php php php php php php php php php$iphp php=php php0php;
php php php php php php php php foreachphp php(php$bindphp asphp php$colphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(php$valphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php$valphp php=php php$valphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$colphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'positionalphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php php'php?php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'namedphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$bindphp[php$colphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$bindphp[php'php:colphp'php.php$iphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$valphp php=php php'php:colphp'php.php$iphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(getphp_classphp(php$thisphp)php php.php"php doesnphp'tphp supportphp positionalphp orphp namedphp bindingphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$setphp[php]php php=php php$thisphp-php>quoteIdentifierphp(php$colphp,php truephp)php php.php php'php php=php php'php php.php php$valphp;
php php php php php php php php php}

php php php php php php php php php$wherephp php=php php$thisphp-php>php_whereExprphp(php$wherephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Buildphp thephp UPDATEphp statement
php php php php php php php php php php*php/
php php php php php php php php php$sqlphp php=php php"UPDATEphp php"
php php php php php php php php php php php php php php.php php$thisphp-php>quoteIdentifierphp(php$tablephp,php truephp)
php php php php php php php php php php php php php php.php php'php SETphp php'php php.php implodephp(php'php,php php'php,php php$setphp)
php php php php php php php php php php php php php php.php php(php(php$wherephp)php php?php php"php WHEREphp php$wherephp"php php:php php'php'php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp thephp statementphp andphp returnphp thephp numberphp ofphp affectedphp rows
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>supportsParametersphp(php'positionalphp'php)php)php php{
php php php php php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php arrayphp_valuesphp(php$bindphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$stmtphp-php>rowCountphp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp tablephp rowsphp basedphp onphp aphp WHEREphp clausephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$tablephp Thephp tablephp tophp updatephp.
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$wherephp DELETEphp WHEREphp clausephp(sphp)php.
php php php php php php*php php@returnphp intphp php php php php php php php php php Thephp numberphp ofphp affectedphp rowsphp.
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$tablephp,php php$wherephp php=php php'php'php)
php php php php php{
php php php php php php php php php$wherephp php=php php$thisphp-php>php_whereExprphp(php$wherephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Buildphp thephp DELETEphp statement
php php php php php php php php php php*php/
php php php php php php php php php$sqlphp php=php php"DELETEphp FROMphp php"
php php php php php php php php php php php php php php.php php$thisphp-php>quoteIdentifierphp(php$tablephp,php truephp)
php php php php php php php php php php php php php php.php php(php(php$wherephp)php php?php php"php WHEREphp php$wherephp"php php:php php'php'php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp thephp statementphp andphp returnphp thephp numberphp ofphp affectedphp rows
php php php php php php php php php php*php/
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>rowCountphp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anphp arrayphp,php stringphp,php orphp Zendphp_Dbphp_Exprphp object
php php php php php php*php intophp aphp stringphp tophp putphp inphp aphp WHEREphp clausephp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$where
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_whereExprphp(php$wherephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$wherephp)php)php php{
php php php php php php php php php php php php returnphp php$wherephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_arrayphp(php$wherephp)php)php php{
php php php php php php php php php php php php php$wherephp php=php arrayphp(php$wherephp)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$wherephp asphp php$condphp php=php>php php&php$termphp)php php{
php php php php php php php php php php php php php/php/php isphp php$condphp anphp intphp?php php(iphp.ephp.php Notphp aphp conditionphp)
php php php php php php php php php php php php ifphp php(isphp_intphp(php$condphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php php$termphp isphp thephp fullphp condition
php php php php php php php php php php php php php php php php ifphp php(php$termphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php php php php php$termphp php=php php$termphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php php$condphp isphp thephp conditionphp withphp placeholderphp,
php php php php php php php php php php php php php php php php php/php/php andphp php$termphp isphp quotedphp intophp thephp condition
php php php php php php php php php php php php php php php php php$termphp php=php php$thisphp-php>quoteIntophp(php$condphp,php php$termphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$termphp php=php php'php(php'php php.php php$termphp php.php php'php)php'php;
php php php php php php php php php}

php php php php php php php php php$wherephp php=php implodephp(php'php ANDphp php'php,php php$wherephp)php;
php php php php php php php php returnphp php$wherephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp andphp returnsphp aphp newphp Zendphp_Dbphp_Selectphp objectphp forphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php publicphp functionphp selectphp(php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Dbphp_Selectphp(php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getFetchModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fetchModephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp allphp SQLphp resultphp rowsphp asphp aphp sequentialphp arrayphp.
php php php php php php*php Usesphp thephp currentphp fetchModephp forphp thephp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp php Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php php php php php php php php php php php php php php php php php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@paramphp mixedphp php php php php php php php php php php php php php php php php php$fetchModephp Overridephp currentphp fetchphp modephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchAllphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php,php php$fetchModephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$fetchModephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$fetchModephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(php$fetchModephp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp firstphp rowphp ofphp thephp SQLphp resultphp.
php php php php php php*php Usesphp thephp currentphp fetchModephp forphp thephp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@paramphp mixedphp php php php php php php php php php php php php php php php php php$fetchModephp Overridephp currentphp fetchphp modephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchRowphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php,php php$fetchModephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$fetchModephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$fetchModephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchphp(php$fetchModephp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp allphp SQLphp resultphp rowsphp asphp anphp associativephp arrayphp.
php php php php php php*
php php php php php php*php Thephp firstphp columnphp isphp thephp keyphp,php thephp entirephp rowphp arrayphp isphp the
php php php php php php*php valuephp.php php Youphp shouldphp constructphp thephp queryphp tophp bephp surephp that
php php php php php php*php thephp firstphp columnphp containsphp uniquephp valuesphp,php orphp else
php php php php php php*php rowsphp withphp duplicatephp valuesphp inphp thephp firstphp columnphp will
php php php php php php*php overwritephp previousphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchAssocphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$rowphp php=php php$stmtphp-php>fetchphp(Zendphp_Dbphp:php:FETCHphp_ASSOCphp)php)php php{
php php php php php php php php php php php php php$tmpphp php=php arrayphp_valuesphp(arrayphp_slicephp(php$rowphp,php php0php,php php1php)php)php;
php php php php php php php php php php php php php$dataphp[php$tmpphp[php0php]php]php php=php php$rowphp;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp firstphp columnphp ofphp allphp SQLphp resultphp rowsphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchColphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_COLUMNphp,php php0php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp allphp SQLphp resultphp rowsphp asphp anphp arrayphp ofphp keyphp-valuephp pairsphp.
php php php php php php*
php php php php php php*php Thephp firstphp columnphp isphp thephp keyphp,php thephp secondphp columnphp isphp the
php php php php php php*php valuephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchPairsphp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$rowphp php=php php$stmtphp-php>fetchphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php)php php{
php php php php php php php php php php php php php$dataphp[php$rowphp[php0php]php]php php=php php$rowphp[php1php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp firstphp columnphp ofphp thephp firstphp rowphp ofphp thephp SQLphp resultphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp Anphp SQLphp SELECTphp statementphp.
php php php php php php*php php@paramphp mixedphp php$bindphp Dataphp tophp bindphp intophp SELECTphp placeholdersphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp fetchOnephp(php$sqlphp,php php$bindphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$stmtphp php=php php$thisphp-php>queryphp(php$sqlphp,php php$bindphp)php;
php php php php php php php php php$resultphp php=php php$stmtphp-php>fetchColumnphp(php0php)php;
php php php php php php php php returnphp php$resultphp;
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
php php php php php php php php returnphp php"php'php"php php.php addcslashesphp(php$valuephp,php php"php\php0php0php0php\nphp\rphp\php\php'php\php"php\php0php3php2php"php)php php.php php"php'php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Safelyphp quotesphp aphp valuephp forphp anphp SQLphp statementphp.
php php php php php php*
php php php php php php*php Ifphp anphp arrayphp isphp passedphp asphp thephp valuephp,php thephp arrayphp valuesphp arephp quoted
php php php php php php*php andphp thenphp returnedphp asphp aphp commaphp-separatedphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp valuephp tophp quotephp.
php php php php php php*php php@paramphp mixedphp php$typephp php OPTIONALphp thephp SQLphp datatypephp namephp,php orphp constantphp,php orphp nullphp.
php php php php php php*php php@returnphp mixedphp Anphp SQLphp-safephp quotedphp valuephp php(orphp stringphp ofphp separatedphp valuesphp)php.
php php php php php php*php/
php php php php publicphp functionphp quotephp(php$valuephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php returnphp php'php(php'php php.php php$valuephp-php>assemblephp(php)php php.php php'php)php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php returnphp php$valuephp-php>php_php_toStringphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php&php$valphp)php php{
php php php php php php php php php php php php php php php php php$valphp php=php php$thisphp-php>quotephp(php$valphp,php php$typephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp implodephp(php'php,php php'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$typephp php!php=php=php nullphp php&php&php arrayphp_keyphp_existsphp(php$typephp php=php strtoupperphp(php$typephp)php,php php$thisphp-php>php_numericDataTypesphp)php)php php{
php php php php php php php php php php php php php$quotedValuephp php=php php'php0php'php;
php php php php php php php php php php php php switchphp php(php$thisphp-php>php_numericDataTypesphp[php$typephp]php)php php{
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:INTphp_TYPEphp:php php/php/php php3php2php-bitphp integer
php php php php php php php php php php php php php php php php php php php php php$quotedValuephp php=php php(stringphp)php intvalphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:BIGINTphp_TYPEphp:php php/php/php php6php4php-bitphp integer
php php php php php php php php php php php php php php php php php php php php php/php/php ANSIphp SQLphp-stylephp hexphp literalsphp php(ephp.gphp.php xphp'php[php\dAphp-Fphp]php+php'php)
php php php php php php php php php php php php php php php php php php php php php/php/php arephp notphp supportedphp herephp,php becausephp thesephp arephp string
php php php php php php php php php php php php php php php php php php php php php/php/php literalsphp,php notphp numericphp literalsphp.
php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(
php php php php php php php php php php php php php php php php php php php php php php php php php php php[php+php-php]php?php php php php php php php php php php php php php php php php php php php#php optionalphp sign
php php php php php php php php php php php php php php php php php php php php php php php php php php php(php?php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php[Xxphp]php[php\daphp-fAphp-Fphp]php+php php php php php php#php ODBCphp-stylephp hexadecimal
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php|php\dphp+php php php php php php php php php php php php php php php php php php#php decimalphp orphp octalphp,php orphp MySQLphp ZEROFILLphp decimal
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php?php:php[eEphp]php[php+php-php]php?php\dphp+php)php?php php php php php#php optionalphp exponentphp onphp decimalsphp orphp octals
php php php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php/xphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php(stringphp)php php$valuephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$quotedValuephp php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FLOATphp_TYPEphp:php php/php/php floatphp orphp decimal
php php php php php php php php php php php php php php php php php php php php php$quotedValuephp php=php sprintfphp(php'php%Fphp'php,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$quotedValuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_quotephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotesphp aphp valuephp andphp placesphp intophp aphp piecephp ofphp textphp atphp aphp placeholderphp.
php php php php php php*
php php php php php php*php Thephp placeholderphp isphp aphp questionphp-markphp;php allphp placeholdersphp willphp bephp replaced
php php php php php php*php withphp thephp quotedphp valuephp.php php php Forphp examplephp:
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*php php$textphp php=php php"WHEREphp datephp <php php?php"php;
php php php php php php*php php$datephp php=php php"php2php0php0php5php-php0php1php-php0php2php"php;
php php php php php php*php php$safephp php=php php$sqlphp-php>quoteIntophp(php$textphp,php php$datephp)php;
php php php php php php*php php/php/php php$safephp php=php php"WHEREphp datephp <php php'php2php0php0php5php-php0php1php-php0php2php'php"
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$textphp php Thephp textphp withphp aphp placeholderphp.
php php php php php php*php php@paramphp mixedphp php php php$valuephp Thephp valuephp tophp quotephp.
php php php php php php*php php@paramphp stringphp php php$typephp php OPTIONALphp SQLphp datatype
php php php php php php*php php@paramphp integerphp php$countphp OPTIONALphp countphp ofphp placeholdersphp tophp replace
php php php php php php*php php@returnphp stringphp Anphp SQLphp-safephp quotedphp valuephp placedphp intophp thephp originalphp textphp.
php php php php php php*php/
php php php php publicphp functionphp quoteIntophp(php$textphp,php php$valuephp,php php$typephp php=php nullphp,php php$countphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$countphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp strphp_replacephp(php'php?php'php,php php$thisphp-php>quotephp(php$valuephp,php php$typephp)php,php php$textphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php whilephp php(php$countphp php>php php0php)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$textphp,php php'php?php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$textphp php=php substrphp_replacephp(php$textphp,php php$thisphp-php>quotephp(php$valuephp,php php$typephp)php,php strposphp(php$textphp,php php'php?php'php)php,php php1php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php-php-php$countphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$textphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotesphp anphp identifierphp.
php php php php php php*
php php php php php php*php Acceptsphp aphp stringphp representingphp aphp qualifiedphp indentifierphp.php Forphp Examplephp:
php php php php php php*php php<codephp>
php php php php php php*php php$adapterphp-php>quoteIdentifierphp(php'myschemaphp.mytablephp'php)
php php php php php php*php <php/codephp>
php php php php php php*php Returnsphp:php php"myschemaphp"php.php"mytablephp"
php php php php php php*
php php php php php php*php Orphp,php anphp arrayphp ofphp onephp orphp morephp identifiersphp thatphp mayphp formphp aphp qualifiedphp identifierphp:
php php php php php php*php php<codephp>
php php php php php php*php php$adapterphp-php>quoteIdentifierphp(arrayphp(php'myschemaphp'php,php'myphp.tablephp'php)php)
php php php php php php*php <php/codephp>
php php php php php php*php Returnsphp:php php"myschemaphp"php.php"myphp.tablephp"
php php php php php php*
php php php php php php*php Thephp actualphp quotephp characterphp surroundingphp thephp identifiersphp mayphp varyphp dependingphp on
php php php php php php*php thephp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Dbphp_Exprphp php$identphp Thephp identifierphp.
php php php php php php*php php@paramphp booleanphp php$autophp Ifphp truephp,php heedphp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp configphp optionphp.
php php php php php php*php php@returnphp stringphp Thephp quotedphp identifierphp.
php php php php php php*php/
php php php php publicphp functionphp quoteIdentifierphp(php$identphp,php php$autophp=falsephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_quoteIdentifierAsphp(php$identphp,php nullphp,php php$autophp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotephp aphp columnphp identifierphp andphp aliasphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Dbphp_Exprphp php$identphp Thephp identifierphp orphp expressionphp.
php php php php php php*php php@paramphp stringphp php$aliasphp Anphp aliasphp forphp thephp columnphp.
php php php php php php*php php@paramphp booleanphp php$autophp Ifphp truephp,php heedphp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp configphp optionphp.
php php php php php php*php php@returnphp stringphp Thephp quotedphp identifierphp andphp aliasphp.
php php php php php php*php/
php php php php publicphp functionphp quoteColumnAsphp(php$identphp,php php$aliasphp,php php$autophp=falsephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_quoteIdentifierAsphp(php$identphp,php php$aliasphp,php php$autophp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_quoteIdentifierAsphp(php$identphp,php php$aliasphp,php php$autophp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotephp anphp identifierphp andphp anphp optionalphp aliasphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Dbphp_Exprphp php$identphp Thephp identifierphp orphp expressionphp.
php php php php php php*php php@paramphp stringphp php$aliasphp Anphp optionalphp aliasphp.
php php php php php php*php php@paramphp booleanphp php$autophp Ifphp truephp,php heedphp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp configphp optionphp.
php php php php php php*php php@paramphp stringphp php$asphp Thephp stringphp tophp addphp betweenphp thephp identifierphp/expressionphp andphp thephp aliasphp.
php php php php php php*php php@returnphp stringphp Thephp quotedphp identifierphp andphp aliasphp.
php php php php php php*php/
php php php php protectedphp functionphp php_quoteIdentifierAsphp(php$identphp,php php$aliasphp php=php nullphp,php php$autophp php=php falsephp,php php$asphp php=php php'php ASphp php'php)
php php php php php{
php php php php php php php php ifphp php(php$identphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php$quotedphp php=php php$identphp-php>php_php_toStringphp(php)php;
php php php php php php php php php}php elseifphp php(php$identphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$quotedphp php=php php'php(php'php php.php php$identphp-php>assemblephp(php)php php.php php'php)php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$identphp)php)php php{
php php php php php php php php php php php php php php php php php$identphp php=php explodephp(php'php.php'php,php php$identphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$identphp)php)php php{
php php php php php php php php php php php php php php php php php$segmentsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$identphp asphp php$segmentphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$segmentphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$segmentsphp[php]php php=php php$segmentphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$segmentsphp[php]php php=php php$thisphp-php>php_quoteIdentifierphp(php$segmentphp,php php$autophp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$aliasphp php!php=php=php nullphp php&php&php endphp(php$identphp)php php=php=php php$aliasphp)php php{
php php php php php php php php php php php php php php php php php php php php php$aliasphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$quotedphp php=php implodephp(php'php.php'php,php php$segmentsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$quotedphp php=php php$thisphp-php>php_quoteIdentifierphp(php$identphp,php php$autophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$aliasphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$quotedphp php.php=php php$asphp php.php php$thisphp-php>php_quoteIdentifierphp(php$aliasphp,php php$autophp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$quotedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Quotephp anphp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp identifierphp orphp expressionphp.
php php php php php php*php php@paramphp booleanphp php$autophp Ifphp truephp,php heedphp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp configphp optionphp.
php php php php php php*php php@returnphp stringphp php php php php php php php Thephp quotedphp identifierphp andphp aliasphp.
php php php php php php*php/
php php php php protectedphp functionphp php_quoteIdentifierphp(php$valuephp,php php$autophp=falsephp)
php php php php php{
php php php php php php php php ifphp php(php$autophp php=php=php=php falsephp php|php|php php$thisphp-php>php_autoQuoteIdentifiersphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$qphp php=php php$thisphp-php>getQuoteIdentifierSymbolphp(php)php;
php php php php php php php php php php php php returnphp php(php$qphp php.php strphp_replacephp(php"php$qphp"php,php php"php$qphp$qphp"php,php php$valuephp)php php.php php$qphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp symbolphp thephp adapterphp usesphp forphp delimitedphp identifiersphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getQuoteIdentifierSymbolphp(php)
php php php php php{
php php php php php php php php returnphp php'php"php'php;
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
php php php php php php php php returnphp nullphp;
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
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp methodphp tophp changephp thephp casephp ofphp thephp stringsphp used
php php php php php php*php whenphp returningphp resultphp setsphp inphp FETCHphp_ASSOCphp andphp FETCHphp_BOTH
php php php php php php*php modesphp.
php php php php php php*
php php php php php php*php Thisphp isphp notphp intendedphp tophp bephp usedphp byphp applicationphp codephp,
php php php php php php*php butphp thephp methodphp mustphp bephp publicphp sophp thephp Statementphp class
php php php php php php*php canphp invokephp itphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp foldCasephp(php$keyphp)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_caseFoldingphp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_LOWERphp:
php php php php php php php php php php php php php php php php php$valuephp php=php strtolowerphp(php(stringphp)php php$keyphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_UPPERphp:
php php php php php php php php php php php php php php php php php$valuephp php=php strtoupperphp(php(stringphp)php php$keyphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:CASEphp_NATURALphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$keyphp;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php calledphp whenphp objectphp isphp gettingphp serialized
php php php php php php*php Thisphp disconnectsphp thephp DBphp objectphp thatphp cantphp bephp serialized
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_allowSerializationphp php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Dbphp_Adapterphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Adapterphp_Exceptionphp(getphp_classphp(php$thisphp)php php.php"php isphp notphp allowedphp tophp bephp serializedphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_connectionphp php=php falsephp;
php php php php php php php php returnphp arrayphp_keysphp(arrayphp_diffphp_keyphp(getphp_objectphp_varsphp(php$thisphp)php,php arrayphp(php'php_connectionphp'php=php>falsephp)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php calledphp whenphp objectphp isphp gettingphp unserialized
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_autoReconnectOnUnserializephp php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>getConnectionphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Abstractphp Methods
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp thephp tablesphp inphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp listTablesphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp columnphp descriptionsphp forphp aphp tablephp.
php php php php php php*
php php php php php php*php Thephp returnphp valuephp isphp anphp associativephp arrayphp keyedphp byphp thephp columnphp namephp,
php php php php php php*php asphp returnedphp byphp thephp RDBMSphp.
php php php php php php*
php php php php php php*php Thephp valuephp ofphp eachphp arrayphp elementphp isphp anphp associativephp array
php php php php php php*php withphp thephp followingphp keysphp:
php php php php php php*
php php php php php php*php SCHEMAphp_NAMEphp php=php>php stringphp;php namephp ofphp databasephp orphp schema
php php php php php php*php TABLEphp_NAMEphp php php=php>php stringphp;
php php php php php php*php COLUMNphp_NAMEphp php=php>php stringphp;php columnphp name
php php php php php php*php COLUMNphp_POSITIONphp php=php>php numberphp;php ordinalphp positionphp ofphp columnphp inphp table
php php php php php php*php DATAphp_TYPEphp php php php=php>php stringphp;php SQLphp datatypephp namephp ofphp column
php php php php php php*php DEFAULTphp php php php php php=php>php stringphp;php defaultphp expressionphp ofphp columnphp,php nullphp ifphp none
php php php php php php*php NULLABLEphp php php php php=php>php booleanphp;php truephp ifphp columnphp canphp havephp nulls
php php php php php php*php LENGTHphp php php php php php php=php>php numberphp;php lengthphp ofphp CHARphp/VARCHAR
php php php php php php*php SCALEphp php php php php php php php=php>php numberphp;php scalephp ofphp NUMERICphp/DECIMAL
php php php php php php*php PRECISIONphp php php php=php>php numberphp;php precisionphp ofphp NUMERICphp/DECIMAL
php php php php php php*php UNSIGNEDphp php php php php=php>php booleanphp;php unsignedphp propertyphp ofphp anphp integerphp type
php php php php php php*php PRIMARYphp php php php php php=php>php booleanphp;php truephp ifphp columnphp isphp partphp ofphp thephp primaryphp key
php php php php php php*php PRIMARYphp_POSITIONphp php=php>php integerphp;php positionphp ofphp columnphp inphp primaryphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp stringphp php$schemaNamephp OPTIONAL
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp describeTablephp(php$tableNamephp,php php$schemaNamephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp connectionphp tophp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_connectphp(php)php;

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp connectionphp isphp active
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp isConnectedphp(php)php;

php php php php php/php*php*
php php php php php php*php Forcephp thephp connectionphp tophp closephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp closeConnectionphp(php)php;

php php php php php/php*php*
php php php php php php*php Preparephp aphp statementphp andphp returnphp aphp PDOStatementphp-likephp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Selectphp php$sqlphp SQLphp query
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp|PDOStatement
php php php php php php*php/
php php php php abstractphp publicphp functionphp preparephp(php$sqlphp)php;

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
php php php php abstractphp publicphp functionphp lastInsertIdphp(php$tableNamephp php=php nullphp,php php$primaryKeyphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Beginphp aphp transactionphp.
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_beginTransactionphp(php)php;

php php php php php/php*php*
php php php php php php*php Commitphp aphp transactionphp.
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_commitphp(php)php;

php php php php php/php*php*
php php php php php php*php Rollphp-backphp aphp transactionphp.
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_rollBackphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Adapterphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp setFetchModephp(php$modephp)php;

php php php php php/php*php*
php php php php php php*php Addsphp anphp adapterphp-specificphp LIMITphp clausephp tophp thephp SELECTphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$sql
php php php php php php*php php@paramphp integerphp php$count
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp limitphp(php$sqlphp,php php$countphp,php php$offsetphp php=php php0php)php;

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp adapterphp supportsphp realphp SQLphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp php'positionalphp'php orphp php'namedphp'
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php abstractphp publicphp functionphp supportsParametersphp(php$typephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp serverphp versionphp inphp PHPphp style
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getServerVersionphp(php)php;
php}
