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
php php*php php@versionphp php php php php$Idphp:php Sqlsrvphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statement
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp.phpphp'php;

php/php*php*
php php*php Extendsphp forphp Microsoftphp SQLphp Serverphp Driverphp forphp PHP
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Statementphp_Sqlsrvphp extendsphp Zendphp_Dbphp_Statement
php{

php php php php php/php*php*
php php php php php php*php Thephp connectionphp_stmtphp objectphp originalphp stringphp.
php php php php php php*php/
php php php php protectedphp php$php_originalSQLphp;

php php php php php/php*php*
php php php php php php*php Columnphp namesphp.
php php php php php php*php/
php php php php protectedphp php$php_keysphp;

php php php php php/php*php*
php php php php php php*php Queryphp executed
php php php php php php*php/
php php php php protectedphp php$php_executedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Preparesphp statementphp handle
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php$sqlphp)
php php php php php{
php php php php php php php php php$connectionphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;

php php php php php php php php php$thisphp-php>php_stmtphp php=php sqlsrvphp_preparephp(php$connectionphp,php php$sqlphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_originalSQLphp php=php php$sqlphp;
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
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_bindParamphp(php$parameterphp,php php&php$variablephp,php php$typephp php=php nullphp,php php$lengthphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/Sqlphp serverphp doesnphp'tphp supportphp bindphp byphp name
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp cursorphp,php allowingphp thephp statementphp tophp bephp executedphp againphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp closeCursorphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php sqlsrvphp_freephp_stmtphp(php$thisphp-php>php_stmtphp)php;
php php php php php php php php php$thisphp-php>php_stmtphp php=php falsephp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp columnsphp inphp thephp resultphp setphp.
php php php php php php*php Returnsphp nullphp ifphp thephp statementphp hasphp nophp resultphp setphp metadataphp.
php php php php php php*
php php php php php php*php php@returnphp intphp Thephp numberphp ofphp columnsphp.
php php php php php php*php/
php php php php publicphp functionphp columnCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_stmtphp php&php&php php$thisphp-php>php_executedphp)php php{
php php php php php php php php php php php php returnphp sqlsrvphp_numphp_fieldsphp(php$thisphp-php>php_stmtphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php0php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievesphp thephp errorphp codephp,php ifphp anyphp,php associatedphp withphp thephp lastphp operationphp on
php php php php php php*php thephp statementphp handlephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp errorphp codephp.
php php php php php php*php/
php php php php publicphp functionphp errorCodephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$errorphp php=php sqlsrvphp_errorsphp(php)php;
php php php php php php php php ifphp php(php!php$errorphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$errorphp[php0php]php[php'codephp'php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievesphp anphp arrayphp ofphp errorphp informationphp,php ifphp anyphp,php associatedphp withphp the
php php php php php php*php lastphp operationphp onphp thephp statementphp handlephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp errorInfophp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$errorphp php=php sqlsrvphp_errorsphp(php)php;
php php php php php php php php ifphp php(php!php$errorphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php$errorphp[php0php]php[php'codephp'php]php,
php php php php php php php php php php php php php$errorphp[php0php]php[php'messagephp'php]php,
php php php php php php php php php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Executesphp aphp preparedphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp OPTIONALphp Valuesphp tophp bindphp tophp parameterphp placeholdersphp.
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_executephp(arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$connectionphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp(php$paramsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$errorphp php=php falsephp;

php php php php php php php php php php php php php/php/php makephp allphp paramsphp passedphp byphp reference
php php php php php php php php php php php php php$paramsphp_php php=php arrayphp(php)php;
php php php php php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$iphp php php php php php php php=php php1php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php$tempphp[php$iphp]php php php=php php$paramphp;
php php php php php php php php php php php php php php php php php$paramsphp_php[php]php php=php php&php$tempphp[php$iphp]php;
php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$paramsphp php=php php$paramsphp_php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_stmtphp php=php sqlsrvphp_queryphp(php$connectionphp,php php$thisphp-php>php_originalSQLphp,php php$paramsphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_executedphp php=php truephp;

php php php php php php php php returnphp php(php!php$thisphp-php>php_stmtphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp aphp rowphp fromphp thephp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$stylephp php OPTIONALphp Fetchphp modephp forphp thisphp fetchphp operationphp.
php php php php php php*php php@paramphp php intphp php$cursorphp OPTIONALphp Absolutephp,php relativephp,php orphp otherphp.
php php php php php php*php php@paramphp php intphp php$offsetphp OPTIONALphp Numberphp forphp absolutephp orphp relativephp cursorsphp.
php php php php php php*php php@returnphp mixedphp Arrayphp,php objectphp,php orphp scalarphp dependingphp onphp fetchphp modephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchphp(php$stylephp php=php nullphp,php php$cursorphp php=php nullphp,php php$offsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$stylephp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}

php php php php php php php php php$valuesphp php=php sqlsrvphp_fetchphp_arrayphp(php$thisphp-php>php_stmtphp,php SQLSRVphp_FETCHphp_ASSOCphp)php;

php php php php php php php php ifphp php(php!php$valuesphp php&php&php php(nullphp php!php=php=php php$errorphp php=php sqlsrvphp_errorsphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$valuesphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_keysphp)php php{
php php php php php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php]php php=php php$thisphp-php>php_adapterphp-php>foldCasephp(php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$valuesphp php=php arrayphp_valuesphp(php$valuesphp)php;

php php php php php php php php php$rowphp php=php falsephp;
php php php php php php php php switchphp php(php$stylephp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_NUMphp:
php php php php php php php php php php php php php php php php php$rowphp php=php php$valuesphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_ASSOCphp:
php php php php php php php php php php php php php php php php php$rowphp php=php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOTHphp:
php php php php php php php php php php php php php php php php php$assocphp php=php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php php$rowphp php php php=php arrayphp_mergephp(php$valuesphp,php php$assocphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php php$rowphp php=php php(objectphp)php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:
php php php php php php php php php php php php php php php php php$assocphp php=php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php php$rowphp php php php=php arrayphp_mergephp(php$valuesphp,php php$assocphp)php;
php php php php php php php php php php php php php php php php php$rowphp php php php=php php$thisphp-php>php_fetchBoundphp(php$rowphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php"Invalidphp fetchphp modephp php'php$stylephp'php specifiedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$rowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp singlephp columnphp fromphp thephp nextphp rowphp ofphp aphp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$colphp OPTIONALphp Positionphp ofphp thephp columnphp tophp fetchphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchColumnphp(php$colphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!sqlsrvphp_fetchphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$errorphp php=php sqlsrvphp_errorsphp(php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php$errorphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Ifphp nophp errorphp,php therephp isphp simplyphp nophp record
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php sqlsrvphp_getphp_fieldphp(php$thisphp-php>php_stmtphp,php php$colphp)php;php php/php/php0php-based
php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp nextphp rowphp andphp returnsphp itphp asphp anphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classphp php OPTIONALphp Namephp ofphp thephp classphp tophp createphp.
php php php php php php*php php@paramphp arrayphp php php$configphp OPTIONALphp Constructorphp argumentsphp forphp thephp classphp.
php php php php php php*php php@returnphp mixedphp Onephp objectphp instancephp ofphp thephp specifiedphp classphp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchObjectphp(php$classphp php=php php'stdClassphp'php,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$objphp php=php sqlsrvphp_fetchphp_objectphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php ifphp php(php$errorphp php=php sqlsrvphp_errorsphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php php@todophp XXXphp handlephp parametersphp php*php/

php php php php php php php php ifphp php(nullphp php=php=php=php php$objphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$objphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp metadataphp forphp aphp columnphp inphp aphp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$column
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getColumnMetaphp(php$columnphp)
php php php php php{
php php php php php php php php php$fieldsphp php=php sqlsrvphp_fieldphp_metadataphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php ifphp php(php!php$fieldsphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php'Columnphp metadataphp canphp notphp bephp fetchedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$fieldsphp[php$columnphp]php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(php'Columnphp indexphp doesphp notphp existphp inphp statementphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$fieldsphp[php$columnphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp nextphp rowsetphp php(resultphp setphp)php forphp aphp SQLphp statementphp thatphp has
php php php php php php*php multiplephp resultphp setsphp.php php Anphp examplephp isphp aphp storedphp procedurephp thatphp returns
php php php php php php*php thephp resultsphp ofphp multiplephp queriesphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp nextRowsetphp(php)
php php php php php{
php php php php php php php php ifphp php(sqlsrvphp_nextphp_resultphp(php$thisphp-php>php_stmtphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}
php php php php php php php php 
php php php php php php php php php/php/php resetphp columnphp keys
php php php php php php php php php$thisphp-php>php_keysphp php=php nullphp;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp rowsphp affectedphp byphp thephp executionphp ofphp the
php php php php php php*php lastphp INSERTphp,php DELETEphp,php orphp UPDATEphp statementphp executedphp byphp this
php php php php php php*php statementphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp intphp php php php php Thephp numberphp ofphp rowsphp affectedphp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp rowCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_executedphp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php php$numphp_rowsphp php=php sqlsrvphp_rowsphp_affectedphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php php/php/php Strictphp checkphp isphp necessaryphp;php php0php isphp aphp validphp returnphp value
php php php php php php php php ifphp php(php$numphp_rowsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Sqlsrvphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Sqlsrvphp_Exceptionphp(sqlsrvphp_errorsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$numphp_rowsphp;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp allphp ofphp thephp resultphp setphp rowsphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$stylephp OPTIONALphp Fetchphp modephp.
php php php php php php*php php@paramphp intphp php$colphp php php OPTIONALphp Columnphp numberphp,php ifphp fetchphp modephp isphp byphp columnphp.
php php php php php php*php php@returnphp arrayphp Collectionphp ofphp rowsphp,php eachphp inphp aphp formatphp byphp thephp fetchphp modephp.
php php php php php php*
php php php php php php*php Behavesphp likephp parentphp,php butphp ifphp limitphp(php)
php php php php php php*php isphp usedphp,php thephp finalphp resultphp removesphp thephp extraphp column
php php php php php php*php php'zendphp_dbphp_rownumphp'
php php php php php php*php/
php php php php publicphp functionphp fetchAllphp(php$stylephp php=php nullphp,php php$colphp php=php nullphp)
php php php php php{
php php php php php php php php php$dataphp php=php parentphp:php:fetchAllphp(php$stylephp,php php$colphp)php;
php php php php php php php php php$resultsphp php=php arrayphp(php)php;
php php php php php php php php php$removephp php=php php$thisphp-php>php_adapterphp-php>foldCasephp(php'ZENDphp_DBphp_ROWNUMphp'php)php;

php php php php php php php php foreachphp php(php$dataphp asphp php$rowphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$rowphp)php php&php&php arrayphp_keyphp_existsphp(php$removephp,php php$rowphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$rowphp[php$removephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultsphp[php]php php=php php$rowphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultsphp;
php php php php php}
php}
