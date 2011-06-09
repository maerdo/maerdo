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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dbphp.phpphp php2php3php4php0php5php php2php0php1php0php-php1php1php-php1php9php php1php9php:php4php6php:php1php0Zphp bittarmanphp php$
php php*php/


php/php*php*
php php*php Classphp forphp connectingphp tophp SQLphp databasesphp andphp performingphp commonphp operationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Db
php{

php php php php php/php*php*
php php php php php php*php Usephp thephp PROFILERphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp PROFILERphp php=php php'profilerphp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp CASEphp_FOLDINGphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp CASEphp_FOLDINGphp php=php php'caseFoldingphp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp FETCHphp_MODEphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp FETCHphp_MODEphp php=php php'fetchModephp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp AUTOphp_QUOTEphp_IDENTIFIERSphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp AUTOphp_QUOTEphp_IDENTIFIERSphp php=php php'autoQuoteIdentifiersphp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp ALLOWphp_SERIALIZATIONphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp ALLOWphp_SERIALIZATIONphp php=php php'allowSerializationphp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp AUTOphp_RECONNECTphp_ONphp_UNSERIALIZEphp constantphp inphp thephp configphp ofphp aphp Zendphp_Dbphp_Adapterphp.
php php php php php php*php/
php php php php constphp AUTOphp_RECONNECTphp_ONphp_UNSERIALIZEphp php=php php'autoReconnectOnUnserializephp'php;

php php php php php/php*php*
php php php php php php*php Usephp thephp INTphp_TYPEphp,php BIGINTphp_TYPEphp,php andphp FLOATphp_TYPEphp withphp thephp quotephp(php)php methodphp.
php php php php php php*php/
php php php php constphp INTphp_TYPEphp php php php php=php php0php;
php php php php constphp BIGINTphp_TYPEphp php=php php1php;
php php php php constphp FLOATphp_TYPEphp php php=php php2php;

php php php php php/php*php*
php php php php php php*php PDOphp constantphp valuesphp discoveredphp byphp thisphp scriptphp resultphp:
php php php php php php*
php php php php php php*php php$listphp php=php arrayphp(
php php php php php php*php php php php php'PARAMphp_BOOLphp'php,php php'PARAMphp_NULLphp'php,php php'PARAMphp_INTphp'php,php php'PARAMphp_STRphp'php,php php'PARAMphp_LOBphp'php,
php php php php php php*php php php php php'PARAMphp_STMTphp'php,php php'PARAMphp_INPUTphp_OUTPUTphp'php,php php'FETCHphp_LAZYphp'php,php php'FETCHphp_ASSOCphp'php,
php php php php php php*php php php php php'FETCHphp_NUMphp'php,php php'FETCHphp_BOTHphp'php,php php'FETCHphp_OBJphp'php,php php'FETCHphp_BOUNDphp'php,
php php php php php php*php php php php php'FETCHphp_COLUMNphp'php,php php'FETCHphp_CLASSphp'php,php php'FETCHphp_INTOphp'php,php php'FETCHphp_FUNCphp'php,
php php php php php php*php php php php php'FETCHphp_GROUPphp'php,php php'FETCHphp_UNIQUEphp'php,php php'FETCHphp_CLASSTYPEphp'php,php php'FETCHphp_SERIALIZEphp'php,
php php php php php php*php php php php php'FETCHphp_NAMEDphp'php,php php'ATTRphp_AUTOCOMMITphp'php,php php'ATTRphp_PREFETCHphp'php,php php'ATTRphp_TIMEOUTphp'php,
php php php php php php*php php php php php'ATTRphp_ERRMODEphp'php,php php'ATTRphp_SERVERphp_VERSIONphp'php,php php'ATTRphp_CLIENTphp_VERSIONphp'php,
php php php php php php*php php php php php'ATTRphp_SERVERphp_INFOphp'php,php php'ATTRphp_CONNECTIONphp_STATUSphp'php,php php'ATTRphp_CASEphp'php,
php php php php php php*php php php php php'ATTRphp_CURSORphp_NAMEphp'php,php php'ATTRphp_CURSORphp'php,php php'ATTRphp_ORACLEphp_NULLSphp'php,
php php php php php php*php php php php php'ATTRphp_PERSISTENTphp'php,php php'ATTRphp_STATEMENTphp_CLASSphp'php,php php'ATTRphp_FETCHphp_TABLEphp_NAMESphp'php,
php php php php php php*php php php php php'ATTRphp_FETCHphp_CATALOGphp_NAMESphp'php,php php'ATTRphp_DRIVERphp_NAMEphp'php,
php php php php php php*php php php php php'ATTRphp_STRINGIFYphp_FETCHESphp'php,php php'ATTRphp_MAXphp_COLUMNphp_LENphp'php,php php'ERRMODEphp_SILENTphp'php,
php php php php php php*php php php php php'ERRMODEphp_WARNINGphp'php,php php'ERRMODEphp_EXCEPTIONphp'php,php php'CASEphp_NATURALphp'php,
php php php php php php*php php php php php'CASEphp_LOWERphp'php,php php'CASEphp_UPPERphp'php,php php'NULLphp_NATURALphp'php,php php'NULLphp_EMPTYphp_STRINGphp'php,
php php php php php php*php php php php php'NULLphp_TOphp_STRINGphp'php,php php'ERRphp_NONEphp'php,php php'FETCHphp_ORIphp_NEXTphp'php,
php php php php php php*php php php php php'FETCHphp_ORIphp_PRIORphp'php,php php'FETCHphp_ORIphp_FIRSTphp'php,php php'FETCHphp_ORIphp_LASTphp'php,
php php php php php php*php php php php php'FETCHphp_ORIphp_ABSphp'php,php php'FETCHphp_ORIphp_RELphp'php,php php'CURSORphp_FWDONLYphp'php,php php'CURSORphp_SCROLLphp'php,
php php php php php php*php php)php;
php php php php php php*
php php php php php php*php php$constphp php=php arrayphp(php)php;
php php php php php php*php foreachphp php(php$listphp asphp php$namephp)php php{
php php php php php php*php php php php php$constphp[php$namephp]php php=php constantphp(php"PDOphp:php:php$namephp"php)php;
php php php php php php*php php}
php php php php php php*php varphp_exportphp(php$constphp)php;
php php php php php php*php/
php php php php constphp ATTRphp_AUTOCOMMITphp php=php php0php;
php php php php constphp ATTRphp_CASEphp php=php php8php;
php php php php constphp ATTRphp_CLIENTphp_VERSIONphp php=php php5php;
php php php php constphp ATTRphp_CONNECTIONphp_STATUSphp php=php php7php;
php php php php constphp ATTRphp_CURSORphp php=php php1php0php;
php php php php constphp ATTRphp_CURSORphp_NAMEphp php=php php9php;
php php php php constphp ATTRphp_DRIVERphp_NAMEphp php=php php1php6php;
php php php php constphp ATTRphp_ERRMODEphp php=php php3php;
php php php php constphp ATTRphp_FETCHphp_CATALOGphp_NAMESphp php=php php1php5php;
php php php php constphp ATTRphp_FETCHphp_TABLEphp_NAMESphp php=php php1php4php;
php php php php constphp ATTRphp_MAXphp_COLUMNphp_LENphp php=php php1php8php;
php php php php constphp ATTRphp_ORACLEphp_NULLSphp php=php php1php1php;
php php php php constphp ATTRphp_PERSISTENTphp php=php php1php2php;
php php php php constphp ATTRphp_PREFETCHphp php=php php1php;
php php php php constphp ATTRphp_SERVERphp_INFOphp php=php php6php;
php php php php constphp ATTRphp_SERVERphp_VERSIONphp php=php php4php;
php php php php constphp ATTRphp_STATEMENTphp_CLASSphp php=php php1php3php;
php php php php constphp ATTRphp_STRINGIFYphp_FETCHESphp php=php php1php7php;
php php php php constphp ATTRphp_TIMEOUTphp php=php php2php;
php php php php constphp CASEphp_LOWERphp php=php php2php;
php php php php constphp CASEphp_NATURALphp php=php php0php;
php php php php constphp CASEphp_UPPERphp php=php php1php;
php php php php constphp CURSORphp_FWDONLYphp php=php php0php;
php php php php constphp CURSORphp_SCROLLphp php=php php1php;
php php php php constphp ERRphp_NONEphp php=php php'php0php0php0php0php0php'php;
php php php php constphp ERRMODEphp_EXCEPTIONphp php=php php2php;
php php php php constphp ERRMODEphp_SILENTphp php=php php0php;
php php php php constphp ERRMODEphp_WARNINGphp php=php php1php;
php php php php constphp FETCHphp_ASSOCphp php=php php2php;
php php php php constphp FETCHphp_BOTHphp php=php php4php;
php php php php constphp FETCHphp_BOUNDphp php=php php6php;
php php php php constphp FETCHphp_CLASSphp php=php php8php;
php php php php constphp FETCHphp_CLASSTYPEphp php=php php2php6php2php1php4php4php;
php php php php constphp FETCHphp_COLUMNphp php=php php7php;
php php php php constphp FETCHphp_FUNCphp php=php php1php0php;
php php php php constphp FETCHphp_GROUPphp php=php php6php5php5php3php6php;
php php php php constphp FETCHphp_INTOphp php=php php9php;
php php php php constphp FETCHphp_LAZYphp php=php php1php;
php php php php constphp FETCHphp_NAMEDphp php=php php1php1php;
php php php php constphp FETCHphp_NUMphp php=php php3php;
php php php php constphp FETCHphp_OBJphp php=php php5php;
php php php php constphp FETCHphp_ORIphp_ABSphp php=php php4php;
php php php php constphp FETCHphp_ORIphp_FIRSTphp php=php php2php;
php php php php constphp FETCHphp_ORIphp_LASTphp php=php php3php;
php php php php constphp FETCHphp_ORIphp_NEXTphp php=php php0php;
php php php php constphp FETCHphp_ORIphp_PRIORphp php=php php1php;
php php php php constphp FETCHphp_ORIphp_RELphp php=php php5php;
php php php php constphp FETCHphp_SERIALIZEphp php=php php5php2php4php2php8php8php;
php php php php constphp FETCHphp_UNIQUEphp php=php php1php9php6php6php0php8php;
php php php php constphp NULLphp_EMPTYphp_STRINGphp php=php php1php;
php php php php constphp NULLphp_NATURALphp php=php php0php;
php php php php constphp NULLphp_TOphp_STRINGphp php=php NULLphp;
php php php php constphp PARAMphp_BOOLphp php=php php5php;
php php php php constphp PARAMphp_INPUTphp_OUTPUTphp php=php php-php2php1php4php7php4php8php3php6php4php8php;
php php php php constphp PARAMphp_INTphp php=php php1php;
php php php php constphp PARAMphp_LOBphp php=php php3php;
php php php php constphp PARAMphp_NULLphp php=php php0php;
php php php php constphp PARAMphp_STMTphp php=php php4php;
php php php php constphp PARAMphp_STRphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Factoryphp forphp Zendphp_Dbphp_Adapterphp_Abstractphp classesphp.
php php php php php php*
php php php php php php*php Firstphp argumentphp mayphp bephp aphp stringphp containingphp thephp basephp ofphp thephp adapterphp class
php php php php php php*php namephp,php ephp.gphp.php php'Mysqliphp'php correspondsphp tophp classphp Zendphp_Dbphp_Adapterphp_Mysqliphp.php php This
php php php php php php*php namephp isphp currentlyphp casephp-insensitivephp,php butphp isphp notphp idealphp tophp relyphp onphp thisphp behaviorphp.
php php php php php php*php Ifphp yourphp classphp isphp namedphp php'Myphp_Companyphp_Pdophp_Mysqlphp'php,php wherephp php'Myphp_Companyphp'php isphp thephp namespace
php php php php php php*php andphp php'Pdophp_Mysqlphp'php isphp thephp adapterphp namephp,php itphp isphp bestphp tophp usephp thephp namephp exactlyphp asphp it
php php php php php php*php isphp definedphp inphp thephp classphp.php php Thisphp willphp ensurephp properphp usephp ofphp thephp factoryphp APIphp.
php php php php php php*
php php php php php php*php Firstphp argumentphp mayphp alternativelyphp bephp anphp objectphp ofphp typephp Zendphp_Configphp.
php php php php php php*php Thephp adapterphp classphp basephp namephp isphp readphp fromphp thephp php'adapterphp'php propertyphp.
php php php php php php*php Thephp adapterphp configphp parametersphp arephp readphp fromphp thephp php'paramsphp'php propertyphp.
php php php php php php*
php php php php php php*php Secondphp argumentphp isphp optionalphp andphp mayphp bephp anphp associativephp arrayphp ofphp keyphp-value
php php php php php php*php pairsphp.php php Thisphp isphp usedphp asphp thephp argumentphp tophp thephp adapterphp constructorphp.
php php php php php php*
php php php php php php*php Ifphp thephp firstphp argumentphp isphp ofphp typephp Zendphp_Configphp,php itphp isphp assumedphp tophp contain
php php php php php php*php allphp parametersphp,php andphp thephp secondphp argumentphp isphp ignoredphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$adapterphp Stringphp namephp ofphp basephp adapterphp classphp,php orphp Zendphp_Configphp objectphp.
php php php php php php*php php@paramphp php mixedphp php$configphp php OPTIONALphp;php anphp arrayphp orphp Zendphp_Configphp objectphp withphp adapterphp parametersphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Dbphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$adapterphp,php php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Convertphp Zendphp_Configphp argumentphp tophp plainphp string
php php php php php php php php php php*php adapterphp namephp andphp separatephp configphp objectphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$adapterphp-php>paramsphp)php)php php{
php php php php php php php php php php php php php php php php php$configphp php=php php$adapterphp-php>paramsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$adapterphp-php>adapterphp)php)php php{
php php php php php php php php php php php php php php php php php$adapterphp php=php php(stringphp)php php$adapterphp-php>adapterphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$adapterphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Verifyphp thatphp adapterphp parametersphp arephp inphp anphp arrayphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Exceptionphp(php'Adapterphp parametersphp mustphp bephp inphp anphp arrayphp orphp aphp Zendphp_Configphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Verifyphp thatphp anphp adapterphp namephp hasphp beenphp specifiedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!isphp_stringphp(php$adapterphp)php php|php|php emptyphp(php$adapterphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Exceptionphp(php'Adapterphp namephp mustphp bephp specifiedphp inphp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Formphp fullphp adapterphp classphp name
php php php php php php php php php php*php/
php php php php php php php php php$adapterNamespacephp php=php php'Zendphp_Dbphp_Adapterphp'php;
php php php php php php php php ifphp php(issetphp(php$configphp[php'adapterNamespacephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$configphp[php'adapterNamespacephp'php]php php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$adapterNamespacephp php=php php$configphp[php'adapterNamespacephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$configphp[php'adapterNamespacephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Adapterphp nophp longerphp normalizedphp-php seephp httpphp:php/php/frameworkphp.zendphp.comphp/issuesphp/browsephp/ZFphp-php5php6php0php6
php php php php php php php php php$adapterNamephp php=php php$adapterNamespacephp php.php php'php_php'php;
php php php php php php php php php$adapterNamephp php.php=php strphp_replacephp(php'php php'php,php php'php_php'php,php ucwordsphp(strphp_replacephp(php'php_php'php,php php'php php'php,php strtolowerphp(php$adapterphp)php)php)php)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Loadphp thephp adapterphp classphp.php php Thisphp throwsphp anphp exception
php php php php php php php php php php*php ifphp thephp specifiedphp classphp cannotphp bephp loadedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!classphp_existsphp(php$adapterNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$adapterNamephp)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Createphp anphp instancephp ofphp thephp adapterphp classphp.
php php php php php php php php php php*php Passphp thephp configphp tophp thephp adapterphp classphp constructorphp.
php php php php php php php php php php*php/
php php php php php php php php php$dbAdapterphp php=php newphp php$adapterNamephp(php$configphp)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Verifyphp thatphp thephp objectphp createdphp isphp aphp descendentphp ofphp thephp abstractphp adapterphp typephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php php$dbAdapterphp instanceofphp Zendphp_Dbphp_Adapterphp_Abstractphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Exceptionphp(php"Adapterphp classphp php'php$adapterNamephp'php doesphp notphp extendphp Zendphp_Dbphp_Adapterphp_Abstractphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dbAdapterphp;
php php php php php}

php}
