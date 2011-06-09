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
php php*php php@versionphp php php php php$Idphp:php Ibmphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Statementphp_Pdo
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Pdophp.phpphp'php;

php/php*php*
php php*php Proxyphp classphp tophp wrapphp aphp PDOStatementphp objectphp forphp IBMphp Databasesphp.
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
classphp Zendphp_Dbphp_Statementphp_Pdophp_Ibmphp extendsphp Zendphp_Dbphp_Statementphp_Pdo
php{
php php php php php/php*php*
php php php php php*php Returnsphp anphp arrayphp containingphp allphp ofphp thephp resultphp setphp rowsphp.
php php php php php*
php php php php php*php Behavesphp likephp parentphp,php butphp ifphp limitphp(php)
php php php php php*php isphp usedphp,php thephp finalphp resultphp removesphp thephp extraphp column
php php php php php*php php'zendphp_dbphp_rownumphp'
php php php php php*
php php php php php*php php@paramphp intphp php$stylephp OPTIONALphp Fetchphp modephp.
php php php php php*php php@paramphp intphp php$colphp php php OPTIONALphp Columnphp numberphp,php ifphp fetchphp modephp isphp byphp columnphp.
php php php php php*php php@returnphp arrayphp Collectionphp ofphp rowsphp,php eachphp inphp aphp formatphp byphp thephp fetchphp modephp.
php php php php php*php php@throwsphp Zendphp_Dbphp_Statementphp_Exception
php php php php php*php/
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
php php php php publicphp functionphp php_bindParamphp(php$parameterphp,php php&php$variablephp,php php$typephp php=php nullphp,php php$lengthphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php(php$typephp php=php=php=php nullphp)php php&php&php php(php$lengthphp php=php=php=php nullphp)php php&php&php php(php$optionsphp php=php=php=php nullphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindParamphp(php$parameterphp,php php$variablephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_stmtphp-php>bindParamphp(php$parameterphp,php php$variablephp,php php$typephp,php php$lengthphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(PDOExceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Statementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Statementphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php}