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
php php*php php@versionphp php php php php$Idphp:php Oraclephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statement
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp.phpphp'php;

php/php*php*
php php*php Extendsphp forphp Oraclephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Statementphp_Oraclephp extendsphp Zendphp_Dbphp_Statement
php{

php php php php php/php*php*
php php php php php php*php Columnphp namesphp.
php php php php php php*php/
php php php php protectedphp php$php_keysphp;

php php php php php/php*php*
php php php php php php*php Fetchedphp resultphp valuesphp.
php php php php php php*php/
php php php php protectedphp php$php_valuesphp;

php php php php php/php*php*
php php php php php php*php Checkphp ifphp LOBphp fieldphp arephp returnedphp asphp string
php php php php php php*php insteadphp ofphp OCIphp-Lobphp object
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_lobAsStringphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Activatephp/deactivatephp returnphp ofphp LOBphp asphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$lobphp_asphp_string
php php php php php php*php php@returnphp Zendphp_Dbphp_Statementphp_Oracle
php php php php php php*php/
php php php php publicphp functionphp setLobAsStringphp(php$lobphp_asphp_stringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_lobAsStringphp php=php php(boolphp)php php$lobphp_asphp_stringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whetherphp orphp notphp LOBphp arephp returnedphp asphp string
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getLobAsStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lobAsStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp statementphp handle
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Oraclephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php$sqlphp)
php php php php php{
php php php php php php php php php$connectionphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;
php php php php php php php php php$thisphp-php>php_stmtphp php=php ociphp_parsephp(php$connectionphp,php php$sqlphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$connectionphp)php)php;
php php php php php php php php php}
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
php php php php php php php php php/php/php defaultphp value
php php php php php php php php ifphp php(php$typephp php=php=php=php NULLphp)php php{
php php php php php php php php php php php php php$typephp php=php SQLTphp_CHRphp;
php php php php php php php php php}

php php php php php php php php php/php/php defaultphp value
php php php php php php php php ifphp php(php$lengthphp php=php=php=php NULLphp)php php{
php php php php php php php php php php php php php$lengthphp php=php php-php1php;
php php php php php php php php php}

php php php php php php php php php$retvalphp php=php php@ociphp_bindphp_byphp_namephp(php$thisphp-php>php_stmtphp,php php$parameterphp,php php$variablephp,php php$lengthphp,php php$typephp)php;
php php php php php php php php ifphp php(php$retvalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php;
php php php php php php php php php}

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

php php php php php php php php ociphp_freephp_statementphp(php$thisphp-php>php_stmtphp)php;
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
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp ociphp_numphp_fieldsphp(php$thisphp-php>php_stmtphp)php;
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

php php php php php php php php php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php ifphp php(php!php$errorphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$errorphp[php'codephp'php]php;
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

php php php php php php php php php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php;
php php php php php php php php ifphp php(php!php$errorphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$errorphp[php'sqltextphp'php]php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php php php php php$errorphp[php'codephp'php]php,
php php php php php php php php php php php php php php php php php$errorphp[php'messagephp'php]php,
php php php php php php php php php php php php php php php php php$errorphp[php'offsetphp'php]php,
php php php php php php php php php php php php php php php php php$errorphp[php'sqltextphp'php]php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php php php php php$errorphp[php'codephp'php]php,
php php php php php php php php php php php php php php php php php$errorphp[php'messagephp'php]php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}
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
php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$paramsphp)php asphp php$namephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php@ociphp_bindphp_byphp_namephp(php$thisphp-php>php_stmtphp,php php$namephp,php php$paramsphp[php$namephp]php,php php-php1php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$errorphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$errorphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$retvalphp php=php php@ociphp_executephp(php$thisphp-php>php_stmtphp,php php$thisphp-php>php_adapterphp-php>php_getExecuteModephp(php)php)php;
php php php php php php php php ifphp php(php$retvalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_keysphp php=php Arrayphp(php)php;
php php php php php php php php ifphp php(php$fieldphp_numphp php=php ociphp_numphp_fieldsphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$fieldphp_numphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php ociphp_fieldphp_namephp(php$thisphp-php>php_stmtphp,php php$iphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuesphp php=php Arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_keysphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuesphp php=php arrayphp_fillphp(php0php,php countphp(php$thisphp-php>php_keysphp)php,php nullphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$retvalphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp aphp rowphp fromphp thephp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$stylephp php OPTIONALphp Fetchphp modephp forphp thisphp fetchphp operationphp.
php php php php php php*php php@paramphp intphp php$cursorphp OPTIONALphp Absolutephp,php relativephp,php orphp otherphp.
php php php php php php*php php@paramphp intphp php$offsetphp OPTIONALphp Numberphp forphp absolutephp orphp relativephp cursorsphp.
php php php php php php*php php@returnphp mixedphp Arrayphp,php objectphp,php orphp scalarphp dependingphp onphp fetchphp modephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchphp(php$stylephp php=php nullphp,php php$cursorphp php=php nullphp,php php$offsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$stylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}

php php php php php php php php php$lobphp_asphp_stringphp php=php php$thisphp-php>getLobAsStringphp(php)php php?php OCIphp_RETURNphp_LOBSphp php:php php0php;

php php php php php php php php switchphp php(php$stylephp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_NUMphp:
php php php php php php php php php php php php php php php php php$rowphp php=php ociphp_fetchphp_arrayphp(php$thisphp-php>php_stmtphp,php OCIphp_NUMphp php|php OCIphp_RETURNphp_NULLSphp php|php php$lobphp_asphp_stringphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_ASSOCphp:
php php php php php php php php php php php php php php php php php$rowphp php=php ociphp_fetchphp_arrayphp(php$thisphp-php>php_stmtphp,php OCIphp_ASSOCphp php|php OCIphp_RETURNphp_NULLSphp php|php php$lobphp_asphp_stringphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOTHphp:
php php php php php php php php php php php php php php php php php$rowphp php=php ociphp_fetchphp_arrayphp(php$thisphp-php>php_stmtphp,php OCIphp_BOTHphp php|php OCIphp_RETURNphp_NULLSphp php|php php$lobphp_asphp_stringphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php php$rowphp php=php ociphp_fetchphp_objectphp(php$thisphp-php>php_stmtphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:
php php php php php php php php php php php php php php php php php$rowphp php=php ociphp_fetchphp_arrayphp(php$thisphp-php>php_stmtphp,php OCIphp_BOTHphp php|php OCIphp_RETURNphp_NULLSphp php|php php$lobphp_asphp_stringphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$rowphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_fetchBoundphp(php$rowphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'codephp'php php php php php=php>php php'HYCphp0php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'messagephp'php php=php>php php"Invalidphp fetchphp modephp php'php$stylephp'php specifiedphp"
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php php$rowphp php&php&php php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$rowphp)php php&php&php arrayphp_keyphp_existsphp(php'zendphp_dbphp_rownumphp'php,php php$rowphp)php)php php{
php php php php php php php php php php php php unsetphp(php$rowphp[php'zendphp_dbphp_rownumphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$rowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp allphp ofphp thephp resultphp setphp rowsphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$stylephp OPTIONALphp Fetchphp modephp.
php php php php php php*php php@paramphp intphp php$colphp php php OPTIONALphp Columnphp numberphp,php ifphp fetchphp modephp isphp byphp columnphp.
php php php php php php*php php@returnphp arrayphp Collectionphp ofphp rowsphp,php eachphp inphp aphp formatphp byphp thephp fetchphp modephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchAllphp(php$stylephp php=php nullphp,php php$colphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp wephp havephp aphp fetchphp mode
php php php php php php php php ifphp php(php$stylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}

php php php php php php php php php$flagsphp php=php OCIphp_FETCHSTATEMENTphp_BYphp_ROWphp;

php php php php php php php php switchphp php(php$stylephp)php php{
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOTHphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'codephp'php php php php php=php>php php'HYCphp0php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'messagephp'php php=php>php php"OCIphp8php driverphp doesphp notphp supportphp fetchAllphp(FETCHphp_BOTHphp)php,php usephp fetchphp(php)php inphp aphp loopphp insteadphp"
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php/php/php notreached
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_NUMphp;
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_ASSOCphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_NUMphp:
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_NUMphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_ASSOCphp:
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_ASSOCphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_COLUMNphp:
php php php php php php php php php php php php php php php php php$flagsphp php=php php$flagsphp php&php~php OCIphp_FETCHSTATEMENTphp_BYphp_ROWphp;
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_FETCHSTATEMENTphp_BYphp_COLUMNphp;
php php php php php php php php php php php php php php php php php$flagsphp php|php=php OCIphp_NUMphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'codephp'php php php php php=php>php php'HYCphp0php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'messagephp'php php=php>php php"Invalidphp fetchphp modephp php'php$stylephp'php specifiedphp"
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php Arrayphp(php)php;
php php php php php php php php ifphp php(php$flagsphp php!php=php OCIphp_FETCHSTATEMENTphp_BYphp_ROWphp)php php{php php/php*php notphp Zendphp_Dbphp:php:FETCHphp_OBJphp php*php/
php php php php php php php php php php php php ifphp php(php!php php(php$rowsphp php=php ociphp_fetchphp_allphp(php$thisphp-php>php_stmtphp,php php$resultphp,php php0php,php php-php1php,php php$flagsphp)php php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(php$errorphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!php$rowsphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$stylephp php=php=php Zendphp_Dbphp:php:FETCHphp_COLUMNphp)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php php$resultphp[php$colphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$resultphp asphp php&php$rowphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$rowphp)php php&php&php arrayphp_keyphp_existsphp(php'zendphp_dbphp_rownumphp'php,php php$rowphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$rowphp[php'zendphp_dbphp_rownumphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php whilephp php(php(php$rowphp php=php ociphp_fetchphp_objectphp(php$thisphp-php>php_stmtphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$resultphp php[php]php php=php php$rowphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(php$errorphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
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

php php php php php php php php ifphp php(php!ociphp_fetchphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php/php/php ifphp nophp errorphp,php therephp isphp simplyphp nophp record
php php php php php php php php php php php php ifphp php(php!php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php ociphp_resultphp(php$thisphp-php>php_stmtphp,php php$colphp+php1php)php;php php/php/php1php-based
php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getLobAsStringphp(php)php)php php{
php php php php php php php php php php php php php/php/php instanceofphp doesnphp'tphp allowphp php'php-php'php,php wephp mustphp usephp aphp temporaryphp string
php php php php php php php php php php php php php$typephp php=php php'OCIphp-Lobphp'php;
php php php php php php php php php php php php ifphp php(php$dataphp instanceofphp php$typephp)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php php$dataphp-php>readphp(php$dataphp-php>sizephp(php)php)php;
php php php php php php php php php php php php php}
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

php php php php php php php php php$objphp php=php ociphp_fetchphp_objectphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php ifphp php(php$errorphp php=php ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php php@todophp XXXphp handlephp parametersphp php*php/

php php php php php php php php returnphp php$objphp;
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
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Oraclephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(
php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php'codephp'php php php php php=php>php php'HYCphp0php0php'php,
php php php php php php php php php php php php php php php php php'messagephp'php php=php>php php'Optionalphp featurephp notphp implementedphp'
php php php php php php php php php php php php php)
php php php php php php php php php)php;
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

php php php php php php php php php$numphp_rowsphp php=php ociphp_numphp_rowsphp(php$thisphp-php>php_stmtphp)php;

php php php php php php php php ifphp php(php$numphp_rowsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Adapterphp_Oraclephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Oraclephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Oraclephp_Exceptionphp(ociphp_errorphp(php$thisphp-php>php_stmtphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$numphp_rowsphp;
php php php php php}

php}
