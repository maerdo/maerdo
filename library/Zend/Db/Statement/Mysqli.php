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
php php*php php@versionphp php php php php$Idphp:php Mysqliphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statement
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp.phpphp'php;


php/php*php*
php php*php Extendsphp forphp Mysqli
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Statement
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Statementphp_Mysqliphp extendsphp Zendphp_Dbphp_Statement
php{

php php php php php/php*php*
php php php php php php*php Columnphp namesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_keysphp;

php php php php php/php*php*
php php php php php php*php Fetchedphp resultphp valuesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_valuesphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_metaphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$sql
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_preparephp(php$sqlphp)
php php php php php{
php php php php php php php php php$mysqliphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;

php php php php php php php php php$thisphp-php>php_stmtphp php=php php$mysqliphp-php>preparephp(php$sqlphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_stmtphp php=php=php=php falsephp php|php|php php$mysqliphp-php>errnophp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Mysqliphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exceptionphp(php"Mysqliphp preparephp errorphp:php php"php php.php php$mysqliphp-php>errorphp,php php$mysqliphp-php>errnophp)php;
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
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_bindParamphp(php$parameterphp,php php&php$variablephp,php php$typephp php=php nullphp,php php$lengthphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp cursorphp andphp thephp statementphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php php$rphp php=php php$thisphp-php>php_stmtphp-php>closephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_stmtphp php=php nullphp;
php php php php php php php php php php php php returnphp php$rphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp cursorphp,php allowingphp thephp statementphp tophp bephp executedphp againphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp closeCursorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$stmtphp php=php php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php php$mysqliphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;
php php php php php php php php php php php php whilephp php(php$mysqliphp-php>morephp_resultsphp(php)php)php php{
php php php php php php php php php php php php php php php php php$mysqliphp-php>nextphp_resultphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_stmtphp-php>freephp_resultphp(php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>resetphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp columnsphp inphp thephp resultphp setphp.
php php php php php php*php Returnsphp nullphp ifphp thephp statementphp hasphp nophp resultphp setphp metadataphp.
php php php php php php*
php php php php php php*php php@returnphp intphp Thephp numberphp ofphp columnsphp.
php php php php php php*php/
php php php php publicphp functionphp columnCountphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_metaphp)php php&php&php php$thisphp-php>php_metaphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_metaphp-php>fieldphp_countphp;
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
php php php php php php php php returnphp substrphp(php$thisphp-php>php_stmtphp-php>sqlstatephp,php php0php,php php5php)php;
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
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php substrphp(php$thisphp-php>php_stmtphp-php>sqlstatephp,php php0php,php php5php)php,
php php php php php php php php php php php php php$thisphp-php>php_stmtphp-php>errnophp,
php php php php php php php php php php php php php$thisphp-php>php_stmtphp-php>errorphp,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executesphp aphp preparedphp statementphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp OPTIONALphp Valuesphp tophp bindphp tophp parameterphp placeholdersphp.
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_executephp(arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp nophp paramsphp werephp givenphp asphp anphp argumentphp tophp executephp(php)php,
php php php php php php php php php/php/php thenphp defaultphp tophp thephp php_bindParamphp array
php php php php php php php php ifphp php(php$paramsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp php=php php$thisphp-php>php_bindParamphp;
php php php php php php php php php}
php php php php php php php php php/php/php sendphp php$paramsphp asphp inputphp parametersphp tophp thephp statement
php php php php php php php php ifphp php(php$paramsphp)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$paramsphp,php strphp_repeatphp(php'sphp'php,php countphp(php$paramsphp)php)php)php;
php php php php php php php php php php php php php$stmtParamsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$kphp php=php>php php&php$valuephp)php php{
php php php php php php php php php php php php php php php php php$stmtParamsphp[php$kphp]php php=php php&php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php callphp_userphp_funcphp_arrayphp(
php php php php php php php php php php php php php php php php arrayphp(php$thisphp-php>php_stmtphp,php php'bindphp_paramphp'php)php,
php php php php php php php php php php php php php php php php php$stmtParams
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php executephp thephp statement
php php php php php php php php php$retvalphp php=php php$thisphp-php>php_stmtphp-php>executephp(php)php;
php php php php php php php php ifphp php(php$retvalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Mysqliphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exceptionphp(php"Mysqliphp statementphp executephp errorphp php:php php"php php.php php$thisphp-php>php_stmtphp-php>errorphp,php php$thisphp-php>php_stmtphp-php>errnophp)php;
php php php php php php php php php}


php php php php php php php php php/php/php retainphp metadata
php php php php php php php php ifphp php(php$thisphp-php>php_metaphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_metaphp php=php php$thisphp-php>php_stmtphp-php>resultphp_metadataphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_stmtphp-php>errnophp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Mysqliphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exceptionphp(php"Mysqliphp statementphp metadataphp errorphp:php php"php php.php php$thisphp-php>php_stmtphp-php>errorphp,php php$thisphp-php>php_stmtphp-php>errnophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php statementsphp thatphp havephp nophp resultphp setphp dophp notphp returnphp metadata
php php php php php php php php ifphp php(php$thisphp-php>php_metaphp php!php=php=php falsephp)php php{

php php php php php php php php php php php php php/php/php getphp thephp columnphp namesphp thatphp willphp result
php php php php php php php php php php php php php$thisphp-php>php_keysphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_metaphp-php>fetchphp_fieldsphp(php)php asphp php$colphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php]php php=php php$thisphp-php>php_adapterphp-php>foldCasephp(php$colphp-php>namephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php setphp upphp aphp bindingphp spacephp forphp resultphp variables
php php php php php php php php php php php php php$thisphp-php>php_valuesphp php=php arrayphp_fillphp(php0php,php countphp(php$thisphp-php>php_keysphp)php,php nullphp)php;

php php php php php php php php php php php php php/php/php setphp upphp referencesphp tophp thephp resultphp bindingphp spacephp.
php php php php php php php php php php php php php/php/php justphp passingphp php$thisphp-php>php_valuesphp inphp thephp callphp_userphp_funcphp_arrayphp(php)
php php php php php php php php php php php php php/php/php belowphp wonphp'tphp workphp,php youphp needphp referencesphp.
php php php php php php php php php php php php php$refsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_valuesphp asphp php$iphp php=php>php php&php$fphp)php php{
php php php php php php php php php php php php php php php php php$refsphp[php$iphp]php php=php php&php$fphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_stmtphp-php>storephp_resultphp(php)php;
php php php php php php php php php php php php php/php/php bindphp tophp thephp resultphp variables
php php php php php php php php php php php php callphp_userphp_funcphp_arrayphp(
php php php php php php php php php php php php php php php php arrayphp(php$thisphp-php>php_stmtphp,php php'bindphp_resultphp'php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_values
php php php php php php php php php php php php php)php;
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
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchphp(php$stylephp php=php nullphp,php php$cursorphp php=php nullphp,php php$offsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_stmtphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php/php/php fetchphp thephp nextphp result
php php php php php php php php php$retvalphp php=php php$thisphp-php>php_stmtphp-php>fetchphp(php)php;
php php php php php php php php switchphp php(php$retvalphp)php php{
php php php php php php php php php php php php casephp nullphp:php php/php/php endphp ofphp data
php php php php php php php php php php php php casephp falsephp:php php/php/php errorphp occurred
php php php php php php php php php php php php php php php php php$thisphp-php>php_stmtphp-php>resetphp(php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php fallthrough
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp wephp havephp aphp fetchphp mode
php php php php php php php php ifphp php(php$stylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$stylephp php=php php$thisphp-php>php_fetchModephp;
php php php php php php php php php}

php php php php php php php php php/php/php dereferencephp thephp resultphp valuesphp,php otherwisephp thingsphp likephp fetchAllphp(php)
php php php php php php php php php/php/php returnphp thephp samephp valuesphp forphp everyphp entryphp php(becausephp ofphp thephp referencephp)php.
php php php php php php php php php$valuesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_valuesphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$valuesphp[php]php php=php php$valphp;
php php php php php php php php php}

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
php php php php php php php php php php php php php php php php php$rowphp php=php arrayphp_mergephp(php$valuesphp,php php$assocphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_OBJphp:
php php php php php php php php php php php php php php php php php$rowphp php=php php(objectphp)php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Dbphp:php:FETCHphp_BOUNDphp:
php php php php php php php php php php php php php php php php php$assocphp php=php arrayphp_combinephp(php$thisphp-php>php_keysphp,php php$valuesphp)php;
php php php php php php php php php php php php php php php php php$rowphp php=php arrayphp_mergephp(php$valuesphp,php php$assocphp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_fetchBoundphp(php$rowphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Mysqliphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exceptionphp(php"Invalidphp fetchphp modephp php'php$stylephp'php specifiedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$rowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp nextphp rowsetphp php(resultphp setphp)php forphp aphp SQLphp statementphp thatphp has
php php php php php php*php multiplephp resultphp setsphp.php php Anphp examplephp isphp aphp storedphp procedurephp thatphp returns
php php php php php php*php thephp resultsphp ofphp multiplephp queriesphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php*php/
php php php php publicphp functionphp nextRowsetphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Statementphp_Mysqliphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Mysqliphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Mysqliphp_Exceptionphp(php_php_FUNCTIONphp_php_php.php'php(php)php isphp notphp implementedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp rowsphp affectedphp byphp thephp executionphp ofphp the
php php php php php php*php lastphp INSERTphp,php DELETEphp,php orphp UPDATEphp statementphp executedphp byphp this
php php php php php php*php statementphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp intphp php php php php Thephp numberphp ofphp rowsphp affectedphp.
php php php php php php*php/
php php php php publicphp functionphp rowCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$mysqliphp php=php php$thisphp-php>php_adapterphp-php>getConnectionphp(php)php;
php php php php php php php php returnphp php$mysqliphp-php>affectedphp_rowsphp;
php php php php php}

php}