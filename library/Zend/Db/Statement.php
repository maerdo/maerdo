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
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Statementphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp tophp emulatephp aphp PDOStatementphp forphp nativephp databasephp adaptersphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Dbphp_Statementphp implementsphp Zendphp_Dbphp_Statementphp_Interface
php{

php php php php php/php*php*
php php php php php php*php php@varphp resourcephp|objectphp Thephp driverphp levelphp statementphp objectphp/resource
php php php php php php*php/
php php php php protectedphp php$php_stmtphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp currentphp fetchphp modephp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_fetchModephp php=php Zendphp_Dbphp:php:FETCHphp_ASSOCphp;

php php php php php/php*php*
php php php php php php*php Attributesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Columnphp resultphp bindingsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_bindColumnphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Queryphp parameterphp bindingsphp;php coversphp bindParamphp(php)php andphp bindValuephp(php)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_bindParamphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php SQLphp stringphp splitphp intophp anphp arrayphp atphp placeholdersphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_sqlSplitphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Parameterphp placeholdersphp inphp thephp SQLphp stringphp byphp positionphp inphp thephp splitphp arrayphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_sqlParamphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Profilerphp_Query
php php php php php php*php/
php php php php protectedphp php$php_queryIdphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp forphp aphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Adapterphp_Abstractphp php$adapter
php php php php php php*php php@paramphp mixedphp php$sqlphp Eitherphp aphp stringphp orphp Zendphp_Dbphp_Selectphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$adapterphp,php php$sqlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php ifphp php(php$sqlphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$sqlphp php=php php$sqlphp-php>assemblephp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_parseParametersphp(php$sqlphp)php;
php php php php php php php php php$thisphp-php>php_preparephp(php$sqlphp)php;

php php php php php php php php php$thisphp-php>php_queryIdphp php=php php$thisphp-php>php_adapterphp-php>getProfilerphp(php)php-php>queryStartphp(php$sqlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp calledphp byphp abstractphp statmentphp constructorphp tophp setup
php php php php php php*php thephp driverphp levelphp statement
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php$sqlphp)
php php php php php{
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_parseParametersphp(php$sqlphp)
php php php php php{
php php php php php php php php php$sqlphp php=php php$thisphp-php>php_stripQuotedphp(php$sqlphp)php;

php php php php php php php php php/php/php splitphp intophp textphp andphp params
php php php php php php php php php$thisphp-php>php_sqlSplitphp php=php pregphp_splitphp(php'php/php(php\php?php|php\php:php[aphp-zAphp-Zphp0php-php9php_php]php+php)php/php'php,
php php php php php php php php php php php php php$sqlphp,php php-php1php,php PREGphp_SPLITphp_DELIMphp_CAPTUREphp|PREGphp_SPLITphp_NOphp_EMPTYphp)php;

php php php php php php php php php/php/php mapphp params
php php php php php php php php php$thisphp-php>php_sqlParamphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_sqlSplitphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(php$valphp php=php=php php'php?php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_adapterphp-php>supportsParametersphp(php'positionalphp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php"Invalidphp bindphp-variablephp positionphp php'php$valphp'php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$valphp[php0php]php php=php=php php'php:php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_adapterphp-php>supportsParametersphp(php'namedphp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php"Invalidphp bindphp-variablephp namephp php'php$valphp'php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_sqlParamphp[php]php php=php php$valphp;
php php php php php php php php php}

php php php php php php php php php/php/php setphp upphp forphp binding
php php php php php php php php php$thisphp-php>php_bindParamphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp partsphp ofphp aphp SQLphp stringphp thatphp containphp quotedphp strings
php php php php php php*php ofphp valuesphp orphp identifiersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_stripQuotedphp(php$sqlphp)
php php php php php{
php php php php php php php php php/php/php getphp thephp characterphp forphp delimitedphp idphp quotesphp,
php php php php php php php php php/php/php thisphp isphp usuallyphp php"php butphp inphp MySQLphp isphp php`
php php php php php php php php php$dphp php=php php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php'aphp'php)php;
php php php php php php php php php$dphp php=php php$dphp[php0php]php;

php php php php php php php php php/php/php getphp thephp valuephp usedphp asphp anphp escapedphp delimitedphp idphp quotephp,
php php php php php php php php php/php/php ephp.gphp.php php\php"php orphp php"php"php orphp php\php`
php php php php php php php php php$dephp php=php php$thisphp-php>php_adapterphp-php>quoteIdentifierphp(php$dphp)php;
php php php php php php php php php$dephp php=php substrphp(php$dephp,php php1php,php php2php)php;
php php php php php php php php php$dephp php=php strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php$dephp)php;

php php php php php php php php php/php/php getphp thephp characterphp forphp valuephp quoting
php php php php php php php php php/php/php thisphp shouldphp bephp php'
php php php php php php php php php$qphp php=php php$thisphp-php>php_adapterphp-php>quotephp(php'aphp'php)php;
php php php php php php php php php$qphp php=php php$qphp[php0php]php;

php php php php php php php php php/php/php getphp thephp valuephp usedphp asphp anphp escapedphp quotephp,
php php php php php php php php php/php/php ephp.gphp.php php\php'php orphp php'php'
php php php php php php php php php$qephp php=php php$thisphp-php>php_adapterphp-php>quotephp(php$qphp)php;
php php php php php php php php php$qephp php=php substrphp(php$qephp,php php1php,php php2php)php;
php php php php php php php php php$qephp php=php strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php$qephp)php;

php php php php php php php php php/php/php getphp aphp versionphp ofphp thephp SQLphp statementphp withphp allphp quoted
php php php php php php php php php/php/php valuesphp andphp delimitedphp identifiersphp strippedphp out
php php php php php php php php php/php/php removephp php"foophp\php"barphp"
php php php php php php php php php$sqlphp php=php pregphp_replacephp(php"php/php$qphp(php$qephp|php\php\php\php\php{php2php}php|php[php^php$qphp]php)php*php$qphp/php"php,php php'php'php,php php$sqlphp)php;
php php php php php php php php php/php/php removephp php'foophp\php'barphp'
php php php php php php php php ifphp php(php!emptyphp(php$qphp)php)php php{
php php php php php php php php php php php php php$sqlphp php=php pregphp_replacephp(php"php/php$qphp(php$qephp|php[php^php$qphp]php)php*php$qphp/php"php,php php'php'php,php php$sqlphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$sqlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bindphp aphp columnphp ofphp thephp statementphp resultphp setphp tophp aphp PHPphp variablephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$columnphp Namephp thephp columnphp inphp thephp resultphp setphp,php eitherphp by
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php positionphp orphp byphp namephp.
php php php php php php*php php@paramphp mixedphp php php$paramphp php Referencephp tophp thephp PHPphp variablephp containingphp thephp valuephp.
php php php php php php*php php@paramphp mixedphp php php$typephp php php OPTIONAL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp bindColumnphp(php$columnphp,php php&php$paramphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bindColumnphp[php$columnphp]php php=php&php php$paramphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bindsphp aphp parameterphp tophp thephp specifiedphp variablephp namephp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$parameterphp Namephp thephp parameterphp,php eitherphp integerphp orphp stringphp.
php php php php php php*php php@paramphp mixedphp php$variablephp php Referencephp tophp PHPphp variablephp containingphp thephp valuephp.
php php php php php php*php php@paramphp mixedphp php$typephp php php php php php OPTIONALphp Datatypephp ofphp SQLphp parameterphp.
php php php php php php*php php@paramphp mixedphp php$lengthphp php php php OPTIONALphp Lengthphp ofphp SQLphp parameterphp.
php php php php php php*php php@paramphp mixedphp php$optionsphp php php OPTIONALphp Otherphp optionsphp.
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp bindParamphp(php$parameterphp,php php&php$variablephp,php php$typephp php=php nullphp,php php$lengthphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$parameterphp)php php&php&php php!isphp_stringphp(php$parameterphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php'Invalidphp bindphp-variablephp positionphp'php)php;
php php php php php php php php php}

php php php php php php php php php$positionphp php=php nullphp;
php php php php php php php php ifphp php(php(php$intvalphp php=php php(intphp)php php$parameterphp)php php>php php0php php&php&php php$thisphp-php>php_adapterphp-php>supportsParametersphp(php'positionalphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$intvalphp php>php=php php1php php|php|php php$intvalphp <php=php countphp(php$thisphp-php>php_sqlParamphp)php)php php{
php php php php php php php php php php php php php php php php php$positionphp php=php php$intvalphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_adapterphp-php>supportsParametersphp(php'namedphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$parameterphp[php0php]php php!php=php php'php:php'php)php php{
php php php php php php php php php php php php php php php php php$parameterphp php=php php'php:php'php php.php php$parameterphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$parameterphp,php php$thisphp-php>php_sqlParamphp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$positionphp php=php php$parameterphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$positionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php"Invalidphp bindphp-variablephp positionphp php'php$parameterphp'php"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Finallyphp wephp arephp assuredphp thatphp php$positionphp isphp valid
php php php php php php php php php$thisphp-php>php_bindParamphp[php$positionphp]php php=php&php php$variablephp;
php php php php php php php php returnphp php$thisphp-php>php_bindParamphp(php$positionphp,php php$variablephp,php php$typephp,php php$lengthphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bindsphp aphp valuephp tophp aphp parameterphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$parameterphp Namephp thephp parameterphp,php eitherphp integerphp orphp stringphp.
php php php php php php*php php@paramphp mixedphp php$valuephp php php php php Scalarphp valuephp tophp bindphp tophp thephp parameterphp.
php php php php php php*php php@paramphp mixedphp php$typephp php php php php php OPTIONALphp Datatypephp ofphp thephp parameterphp.
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp bindValuephp(php$parameterphp,php php$valuephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>bindParamphp(php$parameterphp,php php$valuephp,php php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executesphp aphp preparedphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp OPTIONALphp Valuesphp tophp bindphp tophp parameterphp placeholdersphp.
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp executephp(arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php*
php php php php php php php php php php*php Simplephp casephp php-php nophp queryphp profilerphp tophp managephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_queryIdphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_executephp(php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Dophp thephp samephp thingphp,php butphp withphp queryphp profiler
php php php php php php php php php php*php managementphp beforephp andphp afterphp thephp executephp.
php php php php php php php php php php*php/
php php php php php php php php php$profphp php=php php$thisphp-php>php_adapterphp-php>getProfilerphp(php)php;
php php php php php php php php php$qpphp php=php php$profphp-php>getQueryProfilephp(php$thisphp-php>php_queryIdphp)php;
php php php php php php php php ifphp php(php$qpphp-php>hasEndedphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_queryIdphp php=php php$profphp-php>queryClonephp(php$qpphp)php;
php php php php php php php php php php php php php$qpphp php=php php$profphp-php>getQueryProfilephp(php$thisphp-php>php_queryIdphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$qpphp-php>bindParamsphp(php$paramsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$qpphp-php>bindParamsphp(php$thisphp-php>php_bindParamphp)php;
php php php php php php php php php}
php php php php php php php php php$qpphp-php>startphp(php$thisphp-php>php_queryIdphp)php;

php php php php php php php php php$retvalphp php=php php$thisphp-php>php_executephp(php$paramsphp)php;

php php php php php php php php php$profphp-php>queryEndphp(php$thisphp-php>php_queryIdphp)php;

php php php php php php php php returnphp php$retvalphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp allphp ofphp thephp resultphp setphp rowsphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$stylephp OPTIONALphp Fetchphp modephp.
php php php php php php*php php@paramphp intphp php$colphp php php OPTIONALphp Columnphp numberphp,php ifphp fetchphp modephp isphp byphp columnphp.
php php php php php php*php php@returnphp arrayphp Collectionphp ofphp rowsphp,php eachphp inphp aphp formatphp byphp thephp fetchphp modephp.
php php php php php php*php/
php php php php publicphp functionphp fetchAllphp(php$stylephp php=php nullphp,php php$colphp php=php nullphp)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$stylephp php=php=php=php Zendphp_Dbphp:php:FETCHphp_COLUMNphp php&php&php php$colphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$colphp php=php php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$colphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php whilephp php(php$rowphp php=php php$thisphp-php>fetchphp(php$stylephp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php]php php=php php$rowphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php whilephp php(falsephp php!php=php=php php(php$valphp php=php php$thisphp-php>fetchColumnphp(php$colphp)php)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp singlephp columnphp fromphp thephp nextphp rowphp ofphp aphp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$colphp OPTIONALphp Positionphp ofphp thephp columnphp tophp fetchphp.
php php php php php php*php php@returnphp stringphp Onephp valuephp fromphp thephp nextphp rowphp ofphp resultphp setphp,php orphp falsephp.
php php php php php php*php/
php php php php publicphp functionphp fetchColumnphp(php$colphp php=php php0php)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php$colphp php=php php(intphp)php php$colphp;
php php php php php php php php php$rowphp php=php php$thisphp-php>fetchphp(Zendphp_Dbphp:php:FETCHphp_NUMphp)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$rowphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$rowphp[php$colphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp nextphp rowphp andphp returnsphp itphp asphp anphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classphp php OPTIONALphp Namephp ofphp thephp classphp tophp createphp.
php php php php php php*php php@paramphp arrayphp php php$configphp OPTIONALphp Constructorphp argumentsphp forphp thephp classphp.
php php php php php php*php php@returnphp mixedphp Onephp objectphp instancephp ofphp thephp specifiedphp classphp,php orphp falsephp.
php php php php php php*php/
php php php php publicphp functionphp fetchObjectphp(php$classphp php=php php'stdClassphp'php,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$objphp php=php newphp php$classphp(php$configphp)php;
php php php php php php php php php$rowphp php=php php$thisphp-php>fetchphp(Zendphp_Dbphp:php:FETCHphp_ASSOCphp)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$rowphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$rowphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$objphp-php>php$keyphp php=php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php$objphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp statementphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Attributephp namephp.
php php php php php php*php php@returnphp mixedphp php php php php php Attributephp valuephp.
php php php php php php*php/
php php php php publicphp functionphp getAttributephp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_attributephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_attributephp[php$keyphp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp statementphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Attributephp namephp.
php php php php php php*php php@paramphp mixedphp php php$valphp Attributephp valuephp.
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp setAttributephp(php$keyphp,php php$valphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_attributephp[php$keyphp]php php=php php$valphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp fetchphp modephp forphp thisphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php php php$modephp Thephp fetchphp modephp.
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFetchModephp(php$modephp)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_NUMphp:
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_ASSOCphp:
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOTHphp:
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_fetchModephp php=php php$modephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>closeCursorphp(php)php;
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php'invalidphp fetchphp modephp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp functionphp tophp mapphp retrievedphp row
php php php php php php*php tophp boundphp columnphp variables
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$row
php php php php php php*php php@returnphp boolphp True
php php php php php php*php/
php php php php publicphp functionphp php_fetchBoundphp(php$rowphp)
php php php php php{
php php php php php php php php foreachphp php(php$rowphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php/php/php bindColumnphp(php)php takesphp php1php-basedphp integerphp positions
php php php php php php php php php php php php php/php/php butphp fetchphp(php)php returnsphp php0php-basedphp integerphp indexes
php php php php php php php php php php php php ifphp php(isphp_intphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$keyphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php setphp resultsphp onlyphp tophp variablesphp thatphp werephp boundphp previously
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bindColumnphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_bindColumnphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp Zendphp_Dbphp_Adapterphp_Abstractphp forphp this
php php php php php php*php particularphp Zendphp_Dbphp_Statementphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp resourcephp orphp objectphp setupphp byphp the
php php php php php php*php php_parse
php php php php php php*php php@returnphp unknownphp_type
php php php php php php*php/
php php php php publicphp functionphp getDriverStatementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_stmtphp;
php php php php php}
php}
