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
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DbTablephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Authphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Resultphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_DbTablephp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Databasephp Connection
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_zendDbphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php protectedphp php$php_dbSelectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_tableNamephp php-php thephp tablephp namephp tophp check
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tableNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_identityColumnphp php-php thephp columnphp tophp usephp asphp thephp identity
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_identityColumnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_credentialColumnsphp php-php columnsphp tophp bephp usedphp asphp thephp credentials
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_credentialColumnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_identityphp php-php Identityphp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_identityphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_credentialphp php-php Credentialphp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_credentialphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_credentialTreatmentphp php-php Treatmentphp appliedphp tophp thephp credentialphp,php suchphp asphp MDphp5php(php)php orphp PASSWORDphp(php)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_credentialTreatmentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_authenticateResultInfo
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_authenticateResultInfophp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_resultRowphp php-php Resultsphp ofphp databasephp authenticationphp query
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_resultRowphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_ambiguityIdentityphp php-php Flagphp tophp indicatephp samephp Identityphp canphp bephp usedphp with
php php php php php php*php differentphp credentialsphp.php Defaultphp isphp FALSEphp andphp needphp tophp bephp setphp tophp truephp to
php php php php php php*php allowphp ambiguityphp usagephp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_ambiguityIdentityphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)php php-php Setsphp configurationphp options
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dbphp_Adapterphp_Abstractphp php$zendDbphp Ifphp nullphp,php defaultphp databasephp adapterphp assumed
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$tableName
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$identityColumn
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$credentialColumn
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$credentialTreatment
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Dbphp_Adapterphp_Abstractphp php$zendDbphp php=php nullphp,php php$tableNamephp php=php nullphp,php php$identityColumnphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$credentialColumnphp php=php nullphp,php php$credentialTreatmentphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setDbAdapterphp(php$zendDbphp)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$tableNamephp)php php{
php php php php php php php php php php php php php$thisphp-php>setTableNamephp(php$tableNamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$identityColumnphp)php php{
php php php php php php php php php php php php php$thisphp-php>setIdentityColumnphp(php$identityColumnphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$credentialColumnphp)php php{
php php php php php php php php php php php php php$thisphp-php>setCredentialColumnphp(php$credentialColumnphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$credentialTreatmentphp)php php{
php php php php php php php php php php php php php$thisphp-php>setCredentialTreatmentphp(php$credentialTreatmentphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php_setDbAdapterphp(php)php php-php setphp thephp databasephp adapterphp tophp bephp usedphp forphp quering
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTable
php php php php php php*php/
php php php php protectedphp functionphp php_setDbAdapterphp(Zendphp_Dbphp_Adapterphp_Abstractphp php$zendDbphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_zendDbphp php=php php$zendDbphp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp nophp adapterphp isphp specifiedphp,php fetchphp defaultphp databasephp adapterphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp(nullphp php=php=php=php php$thisphp-php>php_zendDbphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Abstractphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_zendDbphp php=php Zendphp_Dbphp_Tablephp_Abstractphp:php:getDefaultAdapterphp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_zendDbphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Nophp databasephp adapterphp presentphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setTableNamephp(php)php php-php setphp thephp tablephp namephp tophp bephp usedphp inphp thephp selectphp query
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tableName
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTableNamephp(php$tableNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tableNamephp php=php php$tableNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setIdentityColumnphp(php)php php-php setphp thephp columnphp namephp tophp bephp usedphp asphp thephp identityphp column
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$identityColumn
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setIdentityColumnphp(php$identityColumnphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_identityColumnphp php=php php$identityColumnphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setCredentialColumnphp(php)php php-php setphp thephp columnphp namephp tophp bephp usedphp asphp thephp credentialphp column
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$credentialColumn
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCredentialColumnphp(php$credentialColumnphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_credentialColumnphp php=php php$credentialColumnphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setCredentialTreatmentphp(php)php php-php allowsphp thephp developerphp tophp passphp aphp parameterizedphp stringphp thatphp is
php php php php php php*php usedphp tophp transformphp orphp treatphp thephp inputphp credentialphp dataphp.
php php php php php php*
php php php php php php*php Inphp manyphp casesphp,php passwordsphp andphp otherphp sensitivephp dataphp arephp encryptedphp,php hashedphp,php encodedphp,
php php php php php php*php obscuredphp,php orphp otherwisephp treatedphp throughphp somephp functionphp orphp algorithmphp.php Byphp specifyingphp a
php php php php php php*php parameterizedphp treatmentphp stringphp withphp thisphp methodphp,php aphp developerphp mayphp applyphp arbitraryphp SQL
php php php php php php*php uponphp inputphp credentialphp dataphp.
php php php php php php*
php php php php php php*php Examplesphp:
php php php php php php*
php php php php php php*php php php'PASSWORDphp(php?php)php'
php php php php php php*php php php'MDphp5php(php?php)php'
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$treatment
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCredentialTreatmentphp(php$treatmentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_credentialTreatmentphp php=php php$treatmentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setIdentityphp(php)php php-php setphp thephp valuephp tophp bephp usedphp asphp thephp identity
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setIdentityphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_identityphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setCredentialphp(php)php php-php setphp thephp credentialphp valuephp tophp bephp usedphp,php optionallyphp canphp specifyphp aphp treatment
php php php php php php*php tophp bephp usedphp,php shouldphp bephp suppliedphp inphp parameterizedphp formphp,php suchphp asphp php'MDphp5php(php?php)php'php orphp php'PASSWORDphp(php?php)php'
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$credential
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTablephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCredentialphp(php$credentialphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_credentialphp php=php php$credentialphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAmbiguityIdentityphp(php)php php-php setsphp aphp flagphp forphp usagephp ofphp identicalphp identities
php php php php php php*php withphp uniquephp credentialsphp.php Itphp acceptsphp integersphp php(php0php,php php1php)php orphp booleanphp php(truephp,
php php php php php php*php falsephp)php parametersphp.php Defaultphp isphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp php intphp|boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_DbTable
php php php php php php*php/
php php php php publicphp functionphp setAmbiguityIdentityphp(php$flagphp)
php php php php php{
php php php php php php php php ifphp php(isphp_integerphp(php$flagphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_ambiguityIdentityphp php=php php(php1php php=php=php=php php$flagphp php?php truephp php:php falsephp)php;
php php php php php php php php php}php elseifphp php(isphp_boolphp(php$flagphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_ambiguityIdentityphp php=php php$flagphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}
php php php php php/php*php*
php php php php php php*php getAmbiguityIdentityphp(php)php php-php returnsphp TRUEphp forphp usagephp ofphp multiplephp identical
php php php php php php*php identiesphp withphp differentphp credentialsphp,php FALSEphp ifphp notphp usedphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAmbiguityIdentityphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ambiguityIdentityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getDbSelectphp(php)php php-php Returnphp thephp preauthenticationphp Dbphp Selectphp objectphp forphp userlandphp selectphp queryphp modification
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php publicphp functionphp getDbSelectphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_dbSelectphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dbSelectphp php=php php$thisphp-php>php_zendDbphp-php>selectphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dbSelectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getResultRowObjectphp(php)php php-php Returnsphp thephp resultphp rowphp asphp aphp stdClassphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$returnColumns
php php php php php php*php php@paramphp php stringphp|arrayphp php$omitColumns
php php php php php php*php php@returnphp stdClassphp|boolean
php php php php php php*php/
php php php php publicphp functionphp getResultRowObjectphp(php$returnColumnsphp php=php nullphp,php php$omitColumnsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_resultRowphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$returnObjectphp php=php newphp stdClassphp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$returnColumnsphp)php php{

php php php php php php php php php php php php php$availableColumnsphp php=php arrayphp_keysphp(php$thisphp-php>php_resultRowphp)php;
php php php php php php php php php php php php foreachphp php(php php(arrayphp)php php$returnColumnsphp asphp php$returnColumnphp)php php{
php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$returnColumnphp,php php$availableColumnsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$returnObjectphp-php>php{php$returnColumnphp}php php=php php$thisphp-php>php_resultRowphp[php$returnColumnphp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$returnObjectphp;

php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php$omitColumnsphp)php php{

php php php php php php php php php php php php php$omitColumnsphp php=php php(arrayphp)php php$omitColumnsphp;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resultRowphp asphp php$resultColumnphp php=php>php php$resultValuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$resultColumnphp,php php$omitColumnsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$returnObjectphp-php>php{php$resultColumnphp}php php=php php$resultValuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$returnObjectphp;

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resultRowphp asphp php$resultColumnphp php=php>php php$resultValuephp)php php{
php php php php php php php php php php php php php php php php php$returnObjectphp-php>php{php$resultColumnphp}php php=php php$resultValuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$returnObjectphp;

php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php authenticatephp(php)php php-php definedphp byphp Zendphp_Authphp_Adapterphp_Interfacephp.php php Thisphp methodphp isphp calledphp to
php php php php php php*php attemptphp anphp authenticationphp.php php Previousphp tophp thisphp callphp,php thisphp adapterphp wouldphp havephp already
php php php php php php*php beenphp configuredphp withphp allphp necessaryphp informationphp tophp successfullyphp connectphp tophp aphp database
php php php php php php*php tablephp andphp attemptphp tophp findphp aphp recordphp matchingphp thephp providedphp identityphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exceptionphp ifphp answeringphp thephp authenticationphp queryphp isphp impossible
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_authenticateSetupphp(php)php;
php php php php php php php php php$dbSelectphp php=php php$thisphp-php>php_authenticateCreateSelectphp(php)php;
php php php php php php php php php$resultIdentitiesphp php=php php$thisphp-php>php_authenticateQuerySelectphp(php$dbSelectphp)php;

php php php php php php php php ifphp php(php php(php$authResultphp php=php php$thisphp-php>php_authenticateValidateResultSetphp(php$resultIdentitiesphp)php)php instanceofphp Zendphp_Authphp_Resultphp)php php{
php php php php php php php php php php php php returnphp php$authResultphp;
php php php php php php php php php}

php php php php php php php php ifphp php(truephp php=php=php=php php$thisphp-php>getAmbiguityIdentityphp(php)php)php php{
php php php php php php php php php php php php php$validIdentitiesphp php=php arrayphp php(php)php;
php php php php php php php php php php php php php$zendAuthCredentialMatchColumnphp php=php php$thisphp-php>php_zendDbphp-php>foldCasephp(php'zendphp_authphp_credentialphp_matchphp'php)php;
php php php php php php php php php php php php foreachphp php(php$resultIdentitiesphp asphp php$identityphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php1php php=php=php=php php(intphp)php php$identityphp[php$zendAuthCredentialMatchColumnphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php$validIdentitiesphp[php]php php=php php$identityphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultIdentitiesphp php=php php$validIdentitiesphp;
php php php php php php php php php}

php php php php php php php php php$authResultphp php=php php$thisphp-php>php_authenticateValidateResultphp(arrayphp_shiftphp(php$resultIdentitiesphp)php)php;
php php php php php php php php returnphp php$authResultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateSetupphp(php)php php-php Thisphp methodphp abstractsphp thephp stepsphp involvedphp with
php php php php php php*php makingphp surephp thatphp thisphp adapterphp wasphp indeedphp setupphp properlyphp withphp all
php php php php php php*php requiredphp piecesphp ofphp informationphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exceptionphp php-php inphp thephp eventphp thatphp setupphp wasphp notphp donephp properly
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateSetupphp(php)
php php php php php{
php php php php php php php php php$exceptionphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>php_tableNamephp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$exceptionphp php=php php'Aphp tablephp mustphp bephp suppliedphp forphp thephp Zendphp_Authphp_Adapterphp_DbTablephp authenticationphp adapterphp.php'php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_identityColumnphp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$exceptionphp php=php php'Anphp identityphp columnphp mustphp bephp suppliedphp forphp thephp Zendphp_Authphp_Adapterphp_DbTablephp authenticationphp adapterphp.php'php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_credentialColumnphp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$exceptionphp php=php php'Aphp credentialphp columnphp mustphp bephp suppliedphp forphp thephp Zendphp_Authphp_Adapterphp_DbTablephp authenticationphp adapterphp.php'php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_identityphp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$exceptionphp php=php php'Aphp valuephp forphp thephp identityphp wasphp notphp providedphp priorphp tophp authenticationphp withphp Zendphp_Authphp_Adapterphp_DbTablephp.php'php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_credentialphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$exceptionphp php=php php'Aphp credentialphp valuephp wasphp notphp providedphp priorphp tophp authenticationphp withphp Zendphp_Authphp_Adapterphp_DbTablephp.php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$exceptionphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php$exceptionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_authenticateResultInfophp php=php arrayphp(
php php php php php php php php php php php php php'codephp'php php php php php php=php>php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php'identityphp'php php=php>php php$thisphp-php>php_identityphp,
php php php php php php php php php php php php php'messagesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateCreateSelectphp(php)php php-php Thisphp methodphp createsphp aphp Zendphp_Dbphp_Selectphp objectphp that
php php php php php php*php isphp completelyphp configuredphp tophp bephp queriedphp againstphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateCreateSelectphp(php)
php php php php php{
php php php php php php php php php/php/php buildphp credentialphp expression
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_credentialTreatmentphp)php php|php|php php(strposphp(php$thisphp-php>php_credentialTreatmentphp,php php'php?php'php)php php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_credentialTreatmentphp php=php php'php?php'php;
php php php php php php php php php}

php php php php php php php php php$credentialExpressionphp php=php newphp Zendphp_Dbphp_Exprphp(
php php php php php php php php php php php php php'php(CASEphp WHENphp php'php php.
php php php php php php php php php php php php php$thisphp-php>php_zendDbphp-php>quoteIntophp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_zendDbphp-php>quoteIdentifierphp(php$thisphp-php>php_credentialColumnphp,php truephp)
php php php php php php php php php php php php php php php php php.php php'php php=php php'php php.php php$thisphp-php>php_credentialTreatmentphp,php php$thisphp-php>php_credential
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php.php php'php THENphp php1php ELSEphp php0php ENDphp)php ASphp php'
php php php php php php php php php php php php php.php php$thisphp-php>php_zendDbphp-php>quoteIdentifierphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_zendDbphp-php>foldCasephp(php'zendphp_authphp_credentialphp_matchphp'php)
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php;

php php php php php php php php php/php/php getphp select
php php php php php php php php php$dbSelectphp php=php clonephp php$thisphp-php>getDbSelectphp(php)php;
php php php php php php php php php$dbSelectphp-php>fromphp(php$thisphp-php>php_tableNamephp,php arrayphp(php'php*php'php,php php$credentialExpressionphp)php)
php php php php php php php php php php php php php php php php php php-php>wherephp(php$thisphp-php>php_zendDbphp-php>quoteIdentifierphp(php$thisphp-php>php_identityColumnphp,php truephp)php php.php php'php php=php php?php'php,php php$thisphp-php>php_identityphp)php;

php php php php php php php php returnphp php$dbSelectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateQuerySelectphp(php)php php-php Thisphp methodphp acceptsphp aphp Zendphp_Dbphp_Selectphp objectphp and
php php php php php php*php performsphp aphp queryphp againstphp thephp databasephp withphp thatphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Selectphp php$dbSelect
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exceptionphp php-php whenphp anphp invalidphp select
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php objectphp isphp encountered
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateQuerySelectphp(Zendphp_Dbphp_Selectphp php$dbSelectphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_zendDbphp-php>getFetchModephp(php)php php!php=php Zendphp_DBphp:php:FETCHphp_ASSOCphp)php php{
php php php php php php php php php php php php php php php php php$origDbFetchModephp php=php php$thisphp-php>php_zendDbphp-php>getFetchModephp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_zendDbphp-php>setFetchModephp(Zendphp_DBphp:php:FETCHphp_ASSOCphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultIdentitiesphp php=php php$thisphp-php>php_zendDbphp-php>fetchAllphp(php$dbSelectphp-php>php_php_toStringphp(php)php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$origDbFetchModephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_zendDbphp-php>setFetchModephp(php$origDbFetchModephp)php;
php php php php php php php php php php php php php php php php unsetphp(php$origDbFetchModephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Thephp suppliedphp parametersphp tophp Zendphp_Authphp_Adapterphp_DbTablephp failedphp tophp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'producephp aphp validphp sqlphp statementphp,php pleasephp checkphp tablephp andphp columnphp namesphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'forphp validityphp.php'php,php php0php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultIdentitiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateValidateResultSetphp(php)php php-php Thisphp methodphp attemptsphp tophp make
php php php php php php*php certainphp thatphp onlyphp onephp recordphp wasphp returnedphp inphp thephp resultset
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$resultIdentities
php php php php php php*php php@returnphp truephp|Zendphp_Authphp_Result
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateValidateResultSetphp(arrayphp php$resultIdentitiesphp)
php php php php php{

php php php php php php php php ifphp php(countphp(php$resultIdentitiesphp)php <php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp;
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'messagesphp'php]php[php]php php=php php'Aphp recordphp withphp thephp suppliedphp identityphp couldphp notphp bephp foundphp.php'php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_authenticateCreateAuthResultphp(php)php;
php php php php php php php php php}php elseifphp php(countphp(php$resultIdentitiesphp)php php>php php1php php&php&php falsephp php=php=php=php php$thisphp-php>getAmbiguityIdentityphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_AMBIGUOUSphp;
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'messagesphp'php]php[php]php php=php php'Morephp thanphp onephp recordphp matchesphp thephp suppliedphp identityphp.php'php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_authenticateCreateAuthResultphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateValidateResultphp(php)php php-php Thisphp methodphp attemptsphp tophp validatephp that
php php php php php php*php thephp recordphp inphp thephp resultsetphp isphp indeedphp aphp recordphp thatphp matchedphp the
php php php php php php*php identityphp providedphp tophp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$resultIdentity
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateValidateResultphp(php$resultIdentityphp)
php php php php php{
php php php php php php php php php$zendAuthCredentialMatchColumnphp php=php php$thisphp-php>php_zendDbphp-php>foldCasephp(php'zendphp_authphp_credentialphp_matchphp'php)php;

php php php php php php php php ifphp php(php$resultIdentityphp[php$zendAuthCredentialMatchColumnphp]php php!php=php php'php1php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp;
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'messagesphp'php]php[php]php php=php php'Suppliedphp credentialphp isphp invalidphp.php'php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_authenticateCreateAuthResultphp(php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$resultIdentityphp[php$zendAuthCredentialMatchColumnphp]php)php;
php php php php php php php php php$thisphp-php>php_resultRowphp php=php php$resultIdentityphp;

php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:SUCCESSphp;
php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'messagesphp'php]php[php]php php=php php'Authenticationphp successfulphp.php'php;
php php php php php php php php returnphp php$thisphp-php>php_authenticateCreateAuthResultphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_authenticateCreateAuthResultphp(php)php php-php Createsphp aphp Zendphp_Authphp_Resultphp objectphp from
php php php php php php*php thephp informationphp thatphp hasphp beenphp collectedphp duringphp thephp authenticatephp(php)php attemptphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php protectedphp functionphp php_authenticateCreateAuthResultphp(php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'codephp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'identityphp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_authenticateResultInfophp[php'messagesphp'php]
php php php php php php php php php php php php php)php;
php php php php php}

php}
