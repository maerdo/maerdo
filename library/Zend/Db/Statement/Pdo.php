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
php php*php php@versionphp php php php php$Idphp:php Pdophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statement
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp.phpphp'php;

php/php*php*
php php*php Proxyphp classphp tophp wrapphp aphp PDOStatementphp objectphp.
php php*php Matchesphp thephp interfacephp ofphp PDOStatementphp.php php Allphp methodsphp simplyphp proxyphp tophp the
php php*php matchingphp methodphp inphp PDOStatementphp.php php PDOExceptionsphp thrownphp byphp PDOStatement
php php*php arephp rephp-thrownphp asphp Zendphp_Dbphp_Statementphp_Exceptionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Statementphp_Pdophp extendsphp Zendphp_Dbphp_Statementphp implementsphp IteratorAggregate
php{

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_fetchModephp php=php PDOphp:php:FETCHphp_ASSOCphp;

php php php php php/php*php*
php php php php php php*php Preparephp aphp stringphp SQLphp statementphp andphp createphp aphp statementphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sql
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php$sqlphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_stmtphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php-php>preparephp(php$sqlphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Bindphp aphp columnphp ofphp thephp statementphp resultphp setphp tophp aphp PHPphp variablephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$columnphp Namephp thephp columnphp inphp thephp resultphp setphp,php eitherphp by
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php positionphp orphp byphp namephp.
php php php php php php*php php@paramphp mixedphp php php$paramphp php Referencephp tophp thephp PHPphp variablephp containingphp thephp valuephp.
php php php php php php*php php@paramphp mixedphp php php$typephp php php OPTIONAL
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp bindColumnphp(php$columnphp,php php&php$paramphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindColumnphp(php$columnphp,php php$paramphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindColumnphp(php$columnphp,php php$paramphp,php php$typephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_boolphp(php$variablephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php PDOphp:php:PARAMphp_BOOLphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$variablephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php PDOphp:php:PARAMphp_NULLphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_integerphp(php$variablephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php PDOphp:php:PARAMphp_INTphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php PDOphp:php:PARAMphp_STRphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindParamphp(php$parameterphp,php php$variablephp,php php$typephp,php php$lengthphp,php php$optionsphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Bindsphp aphp valuephp tophp aphp parameterphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$parameterphp Namephp thephp parameterphp,php eitherphp integerphp orphp stringphp.
php php php php php php*php php@paramphp mixedphp php$valuephp php php php php Scalarphp valuephp tophp bindphp tophp thephp parameterphp.
php php php php php php*php php@paramphp mixedphp php$typephp php php php php php OPTIONALphp Datatypephp ofphp thephp parameterphp.
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp bindValuephp(php$parameterphp,php php$valuephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$parameterphp)php php&php&php php$parameterphp[php0php]php php!php=php php'php:php'php)php php{
php php php php php php php php php php php php php$parameterphp php=php php"php:php$parameterphp"php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_bindParamphp[php$parameterphp]php php=php php$valuephp;

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindValuephp(php$parameterphp,php php$valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindValuephp(php$parameterphp,php php$valuephp,php php$typephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp cursorphp,php allowingphp thephp statementphp tophp bephp executedphp againphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp closeCursorphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>closeCursorphp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp columnsphp inphp thephp resultphp setphp.
php php php php php php*php Returnsphp nullphp ifphp thephp statementphp hasphp nophp resultphp setphp metadataphp.
php php php php php php*
php php php php php php*php php@returnphp intphp Thephp numberphp ofphp columnsphp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp columnCountphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>columnCountphp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp errorphp codephp,php ifphp anyphp,php associatedphp withphp thephp lastphp operationphp on
php php php php php php*php thephp statementphp handlephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp errorphp codephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp errorCodephp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>errorCodephp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp anphp arrayphp ofphp errorphp informationphp,php ifphp anyphp,php associatedphp withphp the
php php php php php php*php lastphp operationphp onphp thephp statementphp handlephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp errorInfophp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>errorInfophp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>executephp(php$paramsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>executephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php(intphp)php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php ifphp php(php$stylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>fetchphp(php$stylephp,php php$cursorphp,php php$offsetphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Requiredphp byphp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp IteratorIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp IteratorIteratorphp(php$thisphp-php>php_stmtphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp allphp ofphp thephp resultphp setphp rowsphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$stylephp OPTIONALphp Fetchphp modephp.
php php php php php php*php php@paramphp intphp php$colphp php php OPTIONALphp Columnphp numberphp,php ifphp fetchphp modephp isphp byphp columnphp.
php php php php php php*php php@returnphp arrayphp Collectionphp ofphp rowsphp,php eachphp inphp aphp formatphp byphp thephp fetchphp modephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchAllphp(php$stylephp php=php nullphp,php php$colphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$stylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$stylephp php=php=php PDOphp:php:FETCHphp_COLUMNphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$colphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$colphp php=php php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>fetchAllphp(php$stylephp,php php$colphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>fetchAllphp(php$stylephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>fetchColumnphp(php$colphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>fetchObjectphp(php$classphp,php php$configphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp statementphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$keyphp Attributephp namephp.
php php php php php php*php php@returnphp mixedphp php php php php php Attributephp valuephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getAttributephp(php$keyphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>getAttributephp(php$keyphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp metadataphp forphp aphp columnphp inphp aphp resultphp setphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$column
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getColumnMetaphp(php$columnphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>getColumnMetaphp(php$columnphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>nextRowsetphp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>rowCountphp(php)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp statementphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Attributephp namephp.
php php php php php php*php php@paramphp mixedphp php php$valphp Attributephp valuephp.
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAttributephp(php$keyphp,php php$valphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>setAttributephp(php$keyphp,php php$valphp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
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
php php php php php php php php php$thisphp-php>php_fetchModephp php=php php$modephp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>setFetchModephp(php$modephp)php;
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php}
