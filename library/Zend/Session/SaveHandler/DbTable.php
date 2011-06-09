<php?php

php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webatphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DbTablephp.phpphp php2php3php5php4php3php php2php0php1php0php-php1php2php-php1php8php php0php0php:php5php5php:php5php3Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Session
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Tablephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Tablephp_Rowphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;

php/php*php*
php php*php Zendphp_Sessionphp_SaveHandlerphp_DbTable
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Session
php php*php php@subpackagephp SaveHandler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Sessionphp_SaveHandlerphp_DbTable
php php php php extendsphp Zendphp_Dbphp_Tablephp_Abstract
php php php php implementsphp Zendphp_Sessionphp_SaveHandlerphp_Interface
php{
php php php php constphp PRIMARYphp_ASSIGNMENTphp php php php php php php php php php php php php php php php php php php php=php php'primaryAssignmentphp'php;
php php php php constphp PRIMARYphp_ASSIGNMENTphp_SESSIONphp_SAVEphp_PATHphp php=php php'sessionSavePathphp'php;
php php php php constphp PRIMARYphp_ASSIGNMENTphp_SESSIONphp_NAMEphp php php php php php php=php php'sessionNamephp'php;
php php php php constphp PRIMARYphp_ASSIGNMENTphp_SESSIONphp_IDphp php php php php php php php php=php php'sessionIdphp'php;

php php php php constphp MODIFIEDphp_COLUMNphp php php php=php php'modifiedColumnphp'php;
php php php php constphp LIFETIMEphp_COLUMNphp php php php=php php'lifetimeColumnphp'php;
php php php php constphp DATAphp_COLUMNphp php php php php php php php=php php'dataColumnphp'php;

php php php php constphp LIFETIMEphp php php php php php php php php php php=php php'lifetimephp'php;
php php php php constphp OVERRIDEphp_LIFETIMEphp php=php php'overrideLifetimephp'php;

php php php php constphp PRIMARYphp_TYPEphp_NUMphp php php php php php php php php php=php php'PRIMARYphp_TYPEphp_NUMphp'php;
php php php php constphp PRIMARYphp_TYPEphp_PRIMARYNUMphp php php=php php'PRIMARYphp_TYPEphp_PRIMARYNUMphp'php;
php php php php constphp PRIMARYphp_TYPEphp_ASSOCphp php php php php php php php=php php'PRIMARYphp_TYPEphp_ASSOCphp'php;
php php php php constphp PRIMARYphp_TYPEphp_WHERECLAUSEphp php=php php'PRIMARYphp_TYPEphp_WHERECLAUSEphp'php;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp primaryphp keyphp valuephp assignment
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_primaryAssignmentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp lastphp modificationphp timephp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modifiedColumnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp lifetimephp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_lifetimeColumnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Sessionphp tablephp dataphp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dataColumnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Sessionphp lifetime
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_lifetimephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp thephp lifetimephp ofphp anphp existingphp sessionphp shouldphp bephp overridden
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_overrideLifetimephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Sessionphp savephp path
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sessionSavePathphp;

php php php php php/php*php*
php php php php php php*php Sessionphp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sessionNamephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php$configphp isphp anphp instancephp ofphp Zendphp_Configphp orphp anphp arrayphp ofphp keyphp/valuephp pairsphp containingphp configurationphp optionsphp for
php php php php php php*php Zendphp_Sessionphp_SaveHandlerphp_DbTablephp andphp Zendphp_Dbphp_Tablephp_Abstractphp.php Thesephp arephp thephp configurationphp optionsphp for
php php php php php php*php Zendphp_Sessionphp_SaveHandlerphp_DbTablephp:
php php php php php php*
php php php php php php*php primaryAssignmentphp php=php>php php(stringphp|arrayphp)php Sessionphp tablephp primaryphp keyphp valuephp assignment
php php php php php php*php php php php php php php(optionalphp;php defaultphp:php php1php php=php>php sessionIdphp)php Youphp havephp tophp assignphp aphp valuephp tophp eachphp primaryphp keyphp ofphp yourphp sessionphp tablephp.
php php php php php php*php php php php php php Thephp valuephp ofphp thisphp configurationphp optionphp isphp eitherphp aphp stringphp ifphp youphp havephp onlyphp onephp primaryphp keyphp orphp anphp arrayphp if
php php php php php php*php php php php php php youphp havephp multiplephp primaryphp keysphp.php Thephp arrayphp consistsphp ofphp numericphp keysphp startingphp atphp php1php andphp stringphp valuesphp.php There
php php php php php php*php php php php php php arephp somephp valuesphp whichphp willphp bephp replacedphp byphp sessionphp informationphp:
php php php php php php*
php php php php php php*php php php php php php sessionIdphp php php php php php php php=php>php Thephp idphp ofphp thephp currentphp session
php php php php php php*php php php php php php sessionNamephp php php php php php=php>php Thephp namephp ofphp thephp currentphp session
php php php php php php*php php php php php php sessionSavePathphp php=php>php Thephp savephp pathphp ofphp thephp currentphp session
php php php php php php*
php php php php php php*php php php php php php NOTEphp:php Onephp ofphp yourphp assignmentsphp MUSTphp containphp php'sessionIdphp'php asphp valuephp!
php php php php php php*
php php php php php php*php modifiedColumnphp php php php php=php>php php(stringphp)php Sessionphp tablephp lastphp modificationphp timephp column
php php php php php php*
php php php php php php*php lifetimeColumnphp php php php php=php>php php(stringphp)php Sessionphp tablephp lifetimephp column
php php php php php php*
php php php php php php*php dataColumnphp php php php php php php php php=php>php php(stringphp)php Sessionphp tablephp dataphp column
php php php php php php*
php php php php php php*php lifetimephp php php php php php php php php php php=php>php php(integerphp)php Sessionphp lifetimephp php(optionalphp;php defaultphp:php iniphp_getphp(php'sessionphp.gcphp_maxlifetimephp'php)php)
php php php php php php*
php php php php php php*php overrideLifetimephp php php=php>php php(booleanphp)php Whetherphp orphp notphp thephp lifetimephp ofphp anphp existingphp sessionphp shouldphp bephp overridden
php php php php php php*php php php php php php php(optionalphp;php defaultphp:php falsephp)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$configphp php php php php php Userphp-providedphp configuration
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php$configphp mustphp bephp anphp instancephp ofphp Zendphp_Configphp orphp arrayphp ofphp keyphp/valuephp pairsphp containingphp php'
php php php php php php php php php php php php php php php.php php'configurationphp optionsphp forphp Zendphp_Sessionphp_SaveHandlerphp_DbTablephp andphp Zendphp_Dbphp_Tablephp_Abstractphp.php'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_ASSIGNMENTphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_primaryAssignmentphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MODIFIEDphp_COLUMNphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_modifiedColumnphp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:LIFETIMEphp_COLUMNphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lifetimeColumnphp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:DATAphp_COLUMNphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataColumnphp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:LIFETIMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setLifetimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:OVERRIDEphp_LIFETIMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setOverrideLifetimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php unrecognizedphp optionsphp passedphp tophp parentphp:php:php_php_constructphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php unsetphp(php$configphp[php$keyphp]php)php;
php php php php php php php php php php php php php}php whilephp php(falsephp)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$configphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php Zendphp_Sessionphp:php:writeClosephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp sessionphp lifetimephp andphp optionalphp whetherphp orphp notphp thephp lifetimephp ofphp anphp existingphp sessionphp shouldphp bephp overridden
php php php php php php*
php php php php php php*php php$lifetimephp php=php=php=php falsephp resetsphp lifetimephp tophp sessionphp.gcphp_maxlifetime
php php php php php php*
php php php php php php*php php@paramphp intphp php$lifetime
php php php php php php*php php@paramphp booleanphp php$overrideLifetimephp php(optionalphp)
php php php php php php*php php@returnphp Zendphp_Sessionphp_SaveHandlerphp_DbTable
php php php php php php*php/
php php php php publicphp functionphp setLifetimephp(php$lifetimephp,php php$overrideLifetimephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$lifetimephp <php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(php)php;
php php php php php php php php php}php elsephp ifphp php(emptyphp(php$lifetimephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_lifetimephp php=php php(intphp)php iniphp_getphp(php'sessionphp.gcphp_maxlifetimephp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_lifetimephp php=php php(intphp)php php$lifetimephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$overrideLifetimephp php!php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOverrideLifetimephp(php$overrideLifetimephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp sessionphp lifetime
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getLifetimephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lifetimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp thephp lifetimephp ofphp anphp existingphp sessionphp shouldphp bephp overridden
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$overrideLifetime
php php php php php php*php php@returnphp Zendphp_Sessionphp_SaveHandlerphp_DbTable
php php php php php php*php/
php php php php publicphp functionphp setOverrideLifetimephp(php$overrideLifetimephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_overrideLifetimephp php=php php(booleanphp)php php$overrideLifetimephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp whetherphp orphp notphp thephp lifetimephp ofphp anphp existingphp sessionphp shouldphp bephp overridden
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getOverrideLifetimephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_overrideLifetimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Openphp Session
php php php php php php*
php php php php php php*php php@paramphp stringphp php$savephp_path
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp openphp(php$savephp_pathphp,php php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessionSavePathphp php=php php$savephp_pathphp;
php php php php php php php php php$thisphp-php>php_sessionNamephp php php php php php=php php$namephp;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp session
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp sessionphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php$idphp)
php php php php php{
php php php php php php php php php$returnphp php=php php'php'php;

php php php php php php php php php$rowsphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php&php$thisphp,php php'findphp'php)php,php php$thisphp-php>php_getPrimaryphp(php$idphp)php)php;

php php php php php php php php ifphp php(countphp(php$rowsphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_getExpirationTimephp(php$rowphp php=php php$rowsphp-php>currentphp(php)php)php php>php timephp(php)php)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$rowphp-php>php{php$thisphp-php>php_dataColumnphp}php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>destroyphp(php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp sessionphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp writephp(php$idphp,php php$dataphp)
php php php php php{
php php php php php php php php php$returnphp php=php falsephp;

php php php php php php php php php$dataphp php=php arrayphp(php$thisphp-php>php_modifiedColumnphp php=php>php timephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataColumnphp php php php php php=php>php php(stringphp)php php$dataphp)php;

php php php php php php php php php$rowsphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php&php$thisphp,php php'findphp'php)php,php php$thisphp-php>php_getPrimaryphp(php$idphp)php)php;

php php php php php php php php ifphp php(countphp(php$rowsphp)php)php php{
php php php php php php php php php php php php php$dataphp[php$thisphp-php>php_lifetimeColumnphp]php php=php php$thisphp-php>php_getLifetimephp(php$rowsphp-php>currentphp(php)php)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>updatephp(php$dataphp,php php$thisphp-php>php_getPrimaryphp(php$idphp,php selfphp:php:PRIMARYphp_TYPEphp_WHERECLAUSEphp)php)php)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php$thisphp-php>php_lifetimeColumnphp]php php=php php$thisphp-php>php_lifetimephp;

php php php php php php php php php php php php ifphp php(php$thisphp-php>insertphp(arrayphp_mergephp(php$thisphp-php>php_getPrimaryphp(php$idphp,php selfphp:php:PRIMARYphp_TYPEphp_ASSOCphp)php,php php$dataphp)php)php)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp session
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp destroyphp(php$idphp)
php php php php php{
php php php php php php php php php$returnphp php=php falsephp;

php php php php php php php php ifphp php(php$thisphp-php>deletephp(php$thisphp-php>php_getPrimaryphp(php$idphp,php selfphp:php:PRIMARYphp_TYPEphp_WHERECLAUSEphp)php)php)php php{
php php php php php php php php php php php php php$returnphp php=php truephp;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Garbagephp Collection
php php php php php php*
php php php php php php*php php@paramphp intphp php$maxlifetime
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp gcphp(php$maxlifetimephp)
php php php php php{
php php php php php php php php php$thisphp-php>deletephp(php$thisphp-php>getAdapterphp(php)php-php>quoteIdentifierphp(php$thisphp-php>php_modifiedColumnphp,php truephp)php php.php php'php php+php php'
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getAdapterphp(php)php-php>quoteIdentifierphp(php$thisphp-php>php_lifetimeColumnphp,php truephp)php php.php php'php <php php'
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getAdapterphp(php)php-php>quotephp(timephp(php)php)php)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callsphp otherphp protectedphp methodsphp forphp individualphp setupphp tasksphp andphp requirementphp checks
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setupphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_setupphp(php)php;

php php php php php php php php php$thisphp-php>php_setupPrimaryAssignmentphp(php)php;
php php php php php php php php php$thisphp-php>setLifetimephp(php$thisphp-php>php_lifetimephp)php;

php php php php php php php php php$thisphp-php>php_checkRequiredColumnsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp tablephp andphp schemaphp names
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_setupTableNamephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_namephp)php php&php&php basenamephp(php(php$thisphp-php>php_namephp php=php sessionphp_savephp_pathphp(php)php)php)php php!php=php php$thisphp-php>php_namephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(php'sessionphp.savephp_pathphp isphp aphp pathphp andphp notphp aphp tablephp namephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_namephp,php php'php.php'php)php)php php{
php php php php php php php php php php php php listphp(php$thisphp-php>php_schemaphp,php php$thisphp-php>php_namephp)php php=php explodephp(php'php.php'php,php php$thisphp-php>php_namephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp sessionphp tablephp primaryphp keyphp valuephp assignment
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_setupPrimaryAssignmentphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_primaryAssignmentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_primaryAssignmentphp php=php arrayphp(php1php php=php>php selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_IDphp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$thisphp-php>php_primaryAssignmentphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_primaryAssignmentphp php=php arrayphp(php1php php=php>php php(stringphp)php php$thisphp-php>php_primaryAssignmentphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$thisphp-php>php_primaryAssignmentphp[php0php]php)php)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_primaryAssignmentphp,php nullphp)php;

php php php php php php php php php php php php unsetphp(php$thisphp-php>php_primaryAssignmentphp[php0php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_primaryAssignmentphp)php php!php=php=php countphp(php$thisphp-php>php_primaryphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Valuephp forphp configurationphp optionphp php'php"php php.php selfphp:php:PRIMARYphp_ASSIGNMENTphp php.php php"php'php mustphp havephp anphp assignmentphp php"
php php php php php php php php php php php php php php php.php php"forphp eachphp sessionphp tablephp primaryphp keyphp.php"php)php;
php php php php php php php php php}php elsephp ifphp php(php!inphp_arrayphp(selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_IDphp,php php$thisphp-php>php_primaryAssignmentphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Valuephp forphp configurationphp optionphp php'php"php php.php selfphp:php:PRIMARYphp_ASSIGNMENTphp php.php php"php'php mustphp havephp anphp assignmentphp php"
php php php php php php php php php php php php php php php.php php"forphp thephp sessionphp idphp php(php'php"php php.php selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_IDphp php.php php"php'php)php.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp forphp requiredphp sessionphp tablephp columns
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_checkRequiredColumnsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_modifiedColumnphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Configurationphp mustphp definephp php'php"php php.php selfphp:php:MODIFIEDphp_COLUMNphp php.php php"php'php whichphp namesphp thephp php"
php php php php php php php php php php php php php php php.php php"sessionphp tablephp lastphp modificationphp timephp columnphp.php"php)php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_lifetimeColumnphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Configurationphp mustphp definephp php'php"php php.php selfphp:php:LIFETIMEphp_COLUMNphp php.php php"php'php whichphp namesphp thephp php"
php php php php php php php php php php php php php php php.php php"sessionphp tablephp lifetimephp columnphp.php"php)php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_dataColumnphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_SaveHandlerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Configurationphp mustphp definephp php'php"php php.php selfphp:php:DATAphp_COLUMNphp php.php php"php'php whichphp namesphp thephp php"
php php php php php php php php php php php php php php php.php php"sessionphp tablephp dataphp columnphp.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp sessionphp tablephp primaryphp keyphp values
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@paramphp stringphp php$typephp php(optionalphp;php defaultphp:php selfphp:php:PRIMARYphp_TYPEphp_NUMphp)
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getPrimaryphp(php$idphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setupPrimaryKeyphp(php)php;

php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$typephp php=php selfphp:php:PRIMARYphp_TYPEphp_NUMphp;
php php php php php php php php php}

php php php php php php php php php$primaryArrayphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_primaryphp asphp php$indexphp php=php>php php$primaryphp)php php{
php php php php php php php php php php php php switchphp php(php$thisphp-php>php_primaryAssignmentphp[php$indexphp]php)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_SAVEphp_PATHphp:
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_sessionSavePathphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_NAMEphp:
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_sessionNamephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_ASSIGNMENTphp_SESSIONphp_IDphp:
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$idphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$thisphp-php>php_primaryAssignmentphp[php$indexphp]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php(stringphp)php php$typephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_TYPEphp_PRIMARYNUMphp:
php php php php php php php php php php php php php php php php php php php php php$primaryArrayphp[php$indexphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_TYPEphp_ASSOCphp:
php php php php php php php php php php php php php php php php php php php php php$primaryArrayphp[php$primaryphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_TYPEphp_WHERECLAUSEphp:
php php php php php php php php php php php php php php php php php php php php php$primaryArrayphp[php]php php=php php$thisphp-php>getAdapterphp(php)php-php>quoteIdentifierphp(php$primaryphp,php truephp)php php.php php'php php=php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getAdapterphp(php)php-php>quotephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:PRIMARYphp_TYPEphp_NUMphp:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$primaryArrayphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$primaryArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp sessionphp lifetimephp consideringphp Zendphp_Sessionphp_SaveHandlerphp_DbTablephp:php:OVERRIDEphp_LIFETIME
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp php$row
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php protectedphp functionphp php_getLifetimephp(Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp php$rowphp)
php php php php php{
php php php php php php php php php$returnphp php=php php$thisphp-php>php_lifetimephp;

php php php php php php php php ifphp php(php!php$thisphp-php>php_overrideLifetimephp)php php{
php php php php php php php php php php php php php$returnphp php=php php(intphp)php php$rowphp-php>php{php$thisphp-php>php_lifetimeColumnphp}php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp sessionphp expirationphp time
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp php$row
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php protectedphp functionphp php_getExpirationTimephp(Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp php$rowphp)
php php php php php{
php php php php php php php php returnphp php(intphp)php php$rowphp-php>php{php$thisphp-php>php_modifiedColumnphp}php php+php php$thisphp-php>php_getLifetimephp(php$rowphp)php;
php php php php php}
php}
