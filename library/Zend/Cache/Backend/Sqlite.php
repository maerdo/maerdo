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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Sqlitephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/ExtendedInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backend
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp.phpphp'php;

php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Backendphp_Sqlitephp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php cachephp_dbphp_completephp_pathphp php:
php php php php php php*php php-php thephp completephp pathphp php(filenamephp includedphp)php ofphp thephp SQLITEphp database
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(intphp)php automaticphp_vacuumphp_factorphp php:
php php php php php php*php php-php Disablephp php/php Tunephp thephp automaticphp vacuumphp process
php php php php php php*php php-php Thephp automaticphp vacuumphp processphp defragmentphp thephp databasephp filephp php(andphp makephp itphp smallerphp)
php php php php php php*php php php whenphp aphp cleanphp(php)php orphp deletephp(php)php isphp called
php php php php php php*php php php php php php0php php php php php php php php php php php php php php php php=php>php nophp automaticphp vacuum
php php php php php php*php php php php php php1php php php php php php php php php php php php php php php php=php>php systematicphp vacuumphp php(whenphp deletephp(php)php orphp cleanphp(php)php methodsphp arephp calledphp)
php php php php php php*php php php php php xphp php(integerphp)php php>php php1php php=php>php automaticphp vacuumphp randomlyphp php1php timesphp onphp xphp cleanphp(php)php orphp deletephp(php)
php php php php php php*
php php php php php php*php php@varphp arrayphp Availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'cachephp_dbphp_completephp_pathphp'php php=php>php nullphp,
php php php php php php php php php'automaticphp_vacuumphp_factorphp'php php=php>php php1php0
php php php php php)php;

php php php php php/php*php*
php php php php php php*php DBphp ressource
php php php php php php*
php php php php php php*php php@varphp mixedphp php$php_db
php php php php php php*php/
php php php php privatephp php$php_dbphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Booleanphp tophp storephp ifphp thephp structurephp hasphp bennphp checkedphp orphp not
php php php php php php*
php php php php php php*php php@varphp booleanphp php$php_structureChecked
php php php php php php*php/
php php php php privatephp php$php_structureCheckedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'cachephp_dbphp_completephp_pathphp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'cachephp_dbphp_completephp_pathphp optionphp hasphp tophp setphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'sqlitephp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Cannotphp usephp SQLitephp storagephp becausephp thephp php'sqlitephp'php extensionphp isphp notphp loadedphp inphp thephp currentphp PHPphp environmentphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_getConnectionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php@sqlitephp_closephp(php$thisphp-php>php_getConnectionphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp Cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$sqlphp php=php php"SELECTphp contentphp FROMphp cachephp WHEREphp idphp=php'php$idphp'php"php;
php php php php php php php php ifphp php(php!php$doNotTestCacheValidityphp)php php{
php php php php php php php php php php php php php$sqlphp php=php php$sqlphp php.php php"php ANDphp php(expirephp=php0php ORphp expirephp>php"php php.php timephp(php)php php.php php'php)php'php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$thisphp-php>php_queryphp(php$sqlphp)php;
php php php php php php php php php$rowphp php=php php@sqlitephp_fetchphp_arrayphp(php$resultphp)php;
php php php php php php php php ifphp php(php$rowphp)php php{
php php php php php php php php php php php php returnphp php$rowphp[php'contentphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp mixedphp|falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$sqlphp php=php php"SELECTphp lastModifiedphp FROMphp cachephp WHEREphp idphp=php'php$idphp'php ANDphp php(expirephp=php0php ORphp expirephp>php"php php.php timephp(php)php php.php php'php)php'php;
php php php php php php php php php$resultphp php=php php$thisphp-php>php_queryphp(php$sqlphp)php;
php php php php php php php php php$rowphp php=php php@sqlitephp_fetchphp_arrayphp(php$resultphp)php;
php php php php php php php php ifphp php(php$rowphp)php php{
php php php php php php php php php php php php returnphp php(php(intphp)php php$rowphp[php'lastModifiedphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php php Datasphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$lifetimephp php=php php$thisphp-php>getLifetimephp(php$specificLifetimephp)php;
php php php php php php php php php$dataphp php=php php@sqlitephp_escapephp_stringphp(php$dataphp)php;
php php php php php php php php php$mktimephp php=php timephp(php)php;
php php php php php php php php ifphp php(php$lifetimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$expirephp php=php php0php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$expirephp php=php php$mktimephp php+php php$lifetimephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp cachephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php$sqlphp php=php php"INSERTphp INTOphp cachephp php(idphp,php contentphp,php lastModifiedphp,php expirephp)php VALUESphp php(php'php$idphp'php,php php'php$dataphp'php,php php$mktimephp,php php$expirephp)php"php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php$sqlphp)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Sqlitephp:php:savephp(php)php php:php impossiblephp tophp storephp thephp cachephp idphp=php$idphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resphp php=php truephp;
php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_registerTagphp(php$idphp,php php$tagphp)php php&php&php php$resphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp COUNTphp(php*php)php ASphp nbrphp FROMphp cachephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php$resultphp1php php=php php@sqlitephp_fetchphp_singlephp(php$resphp)php;
php php php php php php php php php$resultphp2php php=php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp cachephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php$resultphp3php php=php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp tagphp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php$thisphp-php>php_automaticVacuumphp(php)php;
php php php php php php php php returnphp php(php$resultphp1php php&php&php php$resultphp2php php&php&php php$resultphp3php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php removephp cachephp entriesphp notphp php{matchingphp onephp ofphp thephp givenphp tagsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$returnphp php=php php$thisphp-php>php_cleanphp(php$modephp,php php$tagsphp)php;
php php php php php php php php php$thisphp-php>php_automaticVacuumphp(php)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp idphp FROMphp cachephp WHEREphp php(expirephp=php0php ORphp expirephp>php"php php.php timephp(php)php php.php php"php)php"php)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$idphp php=php php@sqlitephp_fetchphp_singlephp(php$resphp)php)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkAndBuildStructurephp(php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp DISTINCTphp(namephp)php ASphp namephp FROMphp tagphp"php)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$idphp php=php php@sqlitephp_fetchphp_singlephp(php$resphp)php)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$firstphp php=php truephp;
php php php php php php php php php$idsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp DISTINCTphp(idphp)php ASphp idphp FROMphp tagphp WHEREphp namephp=php'php$tagphp'php"php)php;
php php php php php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rowsphp php=php php@sqlitephp_fetchphp_allphp(php$resphp,php SQLITEphp_ASSOCphp)php;
php php php php php php php php php php php php php$idsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$rowsphp asphp php$rowphp)php php{
php php php php php php php php php php php php php php php php php$idsphp2php[php]php php=php php$rowphp[php'idphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$firstphp)php php{
php php php php php php php php php php php php php php php php php$idsphp php=php php$idsphp2php;
php php php php php php php php php php php php php php php php php$firstphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$idsphp php=php arrayphp_intersectphp(php$idsphp,php php$idsphp2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp donphp'tphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ORphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp notphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsNotMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp idphp FROMphp cachephp"php)php;
php php php php php php php php php$rowsphp php=php php@sqlitephp_fetchphp_allphp(php$resphp,php SQLITEphp_ASSOCphp)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$rowsphp asphp php$rowphp)php php{
php php php php php php php php php php php php php$idphp php=php php$rowphp[php'idphp'php]php;
php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp COUNTphp(php*php)php ASphp nbrphp FROMphp tagphp WHEREphp namephp=php'php$tagphp'php ANDphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$nbrphp php=php php(intphp)php php@sqlitephp_fetchphp_singlephp(php$resphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$nbrphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$matchingphp)php php{
php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp anyphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp anyphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingAnyTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$firstphp php=php truephp;
php php php php php php php php php$idsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp DISTINCTphp(idphp)php ASphp idphp FROMphp tagphp WHEREphp namephp=php'php$tagphp'php"php)php;
php php php php php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rowsphp php=php php@sqlitephp_fetchphp_allphp(php$resphp,php SQLITEphp_ASSOCphp)php;
php php php php php php php php php php php php php$idsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$rowsphp asphp php$rowphp)php php{
php php php php php php php php php php php php php php php php php$idsphp2php[php]php php=php php$rowphp[php'idphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$firstphp)php php{
php php php php php php php php php php php php php php php php php$idsphp php=php php$idsphp2php;
php php php php php php php php php php php php php php php php php$firstphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$idsphp php=php arrayphp_mergephp(php$idsphp,php php$idsphp2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php php$dirphp php=php dirnamephp(php$thisphp-php>php_optionsphp[php'cachephp_dbphp_completephp_pathphp'php]php)php;
php php php php php php php php php$freephp php=php diskphp_freephp_spacephp(php$dirphp)php;
php php php php php php php php php$totalphp php=php diskphp_totalphp_spacephp(php$dirphp)php;
php php php php php php php php ifphp php(php$totalphp php=php=php php0php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'canphp\php'tphp getphp diskphp_totalphp_spacephp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$freephp php>php=php php$totalphp)php php{
php php php php php php php php php php php php php php php php returnphp php1php0php0php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php(php(intphp)php php(php1php0php0php.php php*php php(php$totalphp php-php php$freephp)php php/php php$totalphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp metadatasphp forphp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php expirephp php:php thephp expirephp timestamp
php php php php php php*php php-php tagsphp php:php aphp stringphp arrayphp ofphp tags
php php php php php php*php php-php mtimephp php:php timestampphp ofphp lastphp modificationphp time
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp arrayphp arrayphp ofphp metadatasphp php(falsephp ifphp thephp cachephp idphp isphp notphp foundphp)
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php php$tagsphp php=php arrayphp(php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp namephp FROMphp tagphp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php ifphp php(php$resphp)php php{
php php php php php php php php php php php php php$rowsphp php=php php@sqlitephp_fetchphp_allphp(php$resphp,php SQLITEphp_ASSOCphp)php;
php php php php php php php php php php php php foreachphp php(php$rowsphp asphp php$rowphp)php php{
php php php php php php php php php php php php php php php php php$tagsphp[php]php php=php php$rowphp[php'namephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp TABLEphp cachephp php(idphp TEXTphp PRIMARYphp KEYphp,php contentphp BLOBphp,php lastModifiedphp INTEGERphp,php expirephp INTEGERphp)php'php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"SELECTphp lastModifiedphp,expirephp FROMphp cachephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$rowphp php=php php@sqlitephp_fetchphp_arrayphp(php$resphp,php SQLITEphp_ASSOCphp)php;
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'tagsphp'php php=php>php php$tagsphp,
php php php php php php php php php php php php php'mtimephp'php php=php>php php$rowphp[php'lastModifiedphp'php]php,
php php php php php php php php php php php php php'expirephp'php php=php>php php$rowphp[php'expirephp'php]
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givephp php(ifphp possiblephp)php anphp extraphp lifetimephp tophp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@paramphp intphp php$extraLifetime
php php php php php php*php php@returnphp booleanphp truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp touchphp(php$idphp,php php$extraLifetimephp)
php php php php php{
php php php php php php php php php$sqlphp php=php php"SELECTphp expirephp FROMphp cachephp WHEREphp idphp=php'php$idphp'php ANDphp php(expirephp=php0php ORphp expirephp>php"php php.php timephp(php)php php.php php'php)php'php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php$sqlphp)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$expirephp php=php php@sqlitephp_fetchphp_singlephp(php$resphp)php;
php php php php php php php php php$newExpirephp php=php php$expirephp php+php php$extraLifetimephp;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"UPDATEphp cachephp SETphp lastModifiedphp=php"php php.php timephp(php)php php.php php"php,php expirephp=php$newExpirephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php php php php ifphp php(php$resphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp associativephp arrayphp ofphp capabilitiesphp php(booleansphp)php ofphp thephp backend
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php automaticphp_cleaningphp php(isphp automatingphp cleaningphp necessaryphp)
php php php php php php*php php-php tagsphp php(arephp tagsphp supportedphp)
php php php php php php*php php-php expiredphp_readphp php(isphp itphp possiblephp tophp readphp expiredphp cachephp records
php php php php php php*php php php php php php php php php php php php php php php php php php(forphp doNotTestCacheValidityphp optionphp forphp examplephp)php)
php php php php php php*php php-php priorityphp doesphp thephp backendphp dealphp withphp priorityphp whenphp saving
php php php php php php*php php-php infinitephp_lifetimephp php(isphp infinitephp lifetimephp canphp workphp withphp thisphp backendphp)
php php php php php php*php php-php getphp_listphp php(isphp itphp possiblephp tophp getphp thephp listphp ofphp cachephp idsphp andphp thephp completephp listphp ofphp tagsphp)
php php php php php php*
php php php php php php*php php@returnphp arrayphp associativephp ofphp withphp capabilities
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'automaticphp_cleaningphp'php php=php>php truephp,
php php php php php php php php php php php php php'tagsphp'php php=php>php truephp,
php php php php php php php php php php php php php'expiredphp_readphp'php php=php>php truephp,
php php php php php php php php php php php php php'priorityphp'php php=php>php falsephp,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php=php>php truephp,
php php php php php php php php php php php php php'getphp_listphp'php php=php>php true
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php PUBLICphp METHODphp FORphp UNITphp TESTINGphp ONLYphp php!
php php php php php php*
php php php php php php*php Forcephp aphp cachephp recordphp tophp expire
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp Cachephp id
php php php php php php*php/
php php php php publicphp functionphp php_php_php_expirephp(php$idphp)
php php php php php{
php php php php php php php php php$timephp php=php timephp(php)php php-php php1php;
php php php php php php php php php$thisphp-php>php_queryphp(php"UPDATEphp cachephp SETphp lastModifiedphp=php$timephp,php expirephp=php$timephp WHEREphp idphp=php'php$idphp'php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp connectionphp resource
php php php php php php*
php php php php php php*php Ifphp wephp arephp notphp connectedphp,php thephp connectionphp isphp made
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp resourcephp Connectionphp resource
php php php php php php*php/
php php php php privatephp functionphp php_getConnectionphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_dbphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dbphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dbphp php=php php@sqlitephp_openphp(php$thisphp-php>php_optionsphp[php'cachephp_dbphp_completephp_pathphp'php]php)php;
php php php php php php php php php php php php ifphp php(php!php(isphp_resourcephp(php$thisphp-php>php_dbphp)php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Impossiblephp tophp openphp php"php php.php php$thisphp-php>php_optionsphp[php'cachephp_dbphp_completephp_pathphp'php]php php.php php"php cachephp DBphp filephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_dbphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp anphp SQLphp queryphp silently
php php php php php php*
php php php php php php*php php@paramphp stringphp php$queryphp SQLphp query
php php php php php php*php php@returnphp mixedphp|falsephp queryphp results
php php php php php php*php/
php php php php privatephp functionphp php_queryphp(php$queryphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_getConnectionphp(php)php;
php php php php php php php php ifphp php(isphp_resourcephp(php$dbphp)php)php php{
php php php php php php php php php php php php php$resphp php=php php@sqlitephp_queryphp(php$dbphp,php php$queryphp)php;
php php php php php php php php php php php php ifphp php(php$resphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$resphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dealphp withphp thephp automaticphp vacuumphp process
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_automaticVacuumphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'automaticphp_vacuumphp_factorphp'php]php php>php php0php)php php{
php php php php php php php php php php php php php$randphp php=php randphp(php1php,php php$thisphp-php>php_optionsphp[php'automaticphp_vacuumphp_factorphp'php]php)php;
php php php php php php php php php php php php ifphp php(php$randphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_queryphp(php'VACUUMphp'php)php;
php php php php php php php php php php php php php php php php php@sqlitephp_closephp(php$thisphp-php>php_getConnectionphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp aphp cachephp idphp withphp thephp givenphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp php Cachephp id
php php php php php php*php php@paramphp php stringphp php$tagphp Tag
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php privatephp functionphp php_registerTagphp(php$idphp,php php$tagphp)php php{
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp TAGphp WHEREphp namephp=php'php$tagphp'php ANDphp idphp=php'php$idphp'php"php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_queryphp(php"INSERTphp INTOphp tagphp php(namephp,php idphp)php VALUESphp php(php'php$tagphp'php,php php'php$idphp'php)php"php)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Sqlitephp:php:php_registerTagphp(php)php php:php impossiblephp tophp registerphp tagphp=php$tagphp onphp idphp=php$idphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp thephp databasephp structure
php php php php php php*
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php privatephp functionphp php_buildStructurephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp INDEXphp tagphp_idphp_indexphp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp INDEXphp tagphp_namephp_indexphp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp INDEXphp cachephp_idphp_expirephp_indexphp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp TABLEphp versionphp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp TABLEphp cachephp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'DROPphp TABLEphp tagphp'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp TABLEphp versionphp php(numphp INTEGERphp PRIMARYphp KEYphp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp TABLEphp cachephp php(idphp TEXTphp PRIMARYphp KEYphp,php contentphp BLOBphp,php lastModifiedphp INTEGERphp,php expirephp INTEGERphp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp TABLEphp tagphp php(namephp TEXTphp,php idphp TEXTphp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp INDEXphp tagphp_idphp_indexphp ONphp tagphp(idphp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp INDEXphp tagphp_namephp_indexphp ONphp tagphp(namephp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'CREATEphp INDEXphp cachephp_idphp_expirephp_indexphp ONphp cachephp(idphp,php expirephp)php'php)php;
php php php php php php php php php$thisphp-php>php_queryphp(php'INSERTphp INTOphp versionphp php(numphp)php VALUESphp php(php1php)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp databasephp structurephp isphp okphp php(withphp thephp goodphp versionphp)
php php php php php php*
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php privatephp functionphp php_checkStructureVersionphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_queryphp(php"SELECTphp numphp FROMphp versionphp"php)php;
php php php php php php php php ifphp php(php!php$resultphp)php returnphp falsephp;
php php php php php php php php php$rowphp php=php php@sqlitephp_fetchphp_arrayphp(php$resultphp)php;
php php php php php php php php ifphp php(php!php$rowphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php(intphp)php php$rowphp[php'numphp'php]php)php php!php=php php1php)php php{
php php php php php php php php php php php php php/php/php oldphp cachephp structure
php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_Sqlitephp:php:php_checkStructureVersionphp(php)php php:php oldphp cachephp structurephp versionphp detectedphp php=php>php thephp cachephp isphp goingphp tophp bephp droppedphp'php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php removephp cachephp entriesphp notphp php{matchingphp onephp ofphp thephp givenphp tagsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php privatephp functionphp php_cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php php$resphp1php php=php php$thisphp-php>php_queryphp(php'DELETEphp FROMphp cachephp'php)php;
php php php php php php php php php php php php php php php php php$resphp2php php=php php$thisphp-php>php_queryphp(php'DELETEphp FROMphp tagphp'php)php;
php php php php php php php php php php php php php php php php returnphp php$resphp1php php&php&php php$resphp2php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$mktimephp php=php timephp(php)php;
php php php php php php php php php php php php php php php php php$resphp1php php=php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp tagphp WHEREphp idphp INphp php(SELECTphp idphp FROMphp cachephp WHEREphp expirephp>php0php ANDphp expire<php=php$mktimephp)php"php)php;
php php php php php php php php php php php php php php php php php$resphp2php php=php php$thisphp-php>php_queryphp(php"DELETEphp FROMphp cachephp WHEREphp expirephp>php0php ANDphp expire<php=php$mktimephp"php)php;
php php php php php php php php php php php php php php php php returnphp php$resphp1php php&php&php php$resphp2php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>getIdsMatchingTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>getIdsNotMatchingTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>getIdsMatchingAnyTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp databasephp structurephp isphp okphp php(withphp thephp goodphp versionphp)php,php ifphp nophp php:php buildphp it
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php privatephp functionphp php_checkAndBuildStructurephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_structureCheckedphp)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_checkStructureVersionphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_buildStructurephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_checkStructureVersionphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Impossiblephp tophp buildphp cachephp structurephp inphp php"php php.php php$thisphp-php>php_optionsphp[php'cachephp_dbphp_completephp_pathphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_structureCheckedphp php=php truephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php}
