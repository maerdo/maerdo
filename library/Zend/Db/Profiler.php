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
php php*php php@subpackagephp Profiler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Profilerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Profiler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Profiler
php{

php php php php php/php*php*
php php php php php php*php Aphp connectionphp operationphp orphp selectingphp aphp databasephp.
php php php php php php*php/
php php php php constphp CONNECTphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Anyphp generalphp databasephp queryphp thatphp doesphp notphp fitphp intophp thephp otherphp constantsphp.
php php php php php php*php/
php php php php constphp QUERYphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Addingphp newphp dataphp tophp thephp databasephp,php suchphp asphp SQLphp'sphp INSERTphp.
php php php php php php*php/
php php php php constphp INSERTphp php=php php4php;

php php php php php/php*php*
php php php php php php*php Updatingphp existingphp informationphp inphp thephp databasephp,php suchphp asphp SQLphp'sphp UPDATEphp.
php php php php php php*
php php php php php php*php/
php php php php constphp UPDATEphp php=php php8php;

php php php php php/php*php*
php php php php php php*php Anphp operationphp relatedphp tophp deletingphp dataphp inphp thephp databasephp,
php php php php php php*php suchphp asphp SQLphp'sphp DELETEphp.
php php php php php php*php/
php php php php constphp DELETEphp php=php php1php6php;

php php php php php/php*php*
php php php php php php*php Retrievingphp informationphp fromphp thephp databasephp,php suchphp asphp SQLphp'sphp SELECTphp.
php php php php php php*php/
php php php php constphp SELECTphp php=php php3php2php;

php php php php php/php*php*
php php php php php php*php Transactionalphp operationphp,php suchphp asphp startphp transactionphp,php commitphp,php orphp rollbackphp.
php php php php php php*php/
php php php php constphp TRANSACTIONphp php=php php6php4php;

php php php php php/php*php*
php php php php php php*php Informphp thatphp aphp queryphp isphp storedphp php(inphp casephp ofphp filteringphp)
php php php php php php*php/
php php php php constphp STOREDphp php=php php'storedphp'php;

php php php php php/php*php*
php php php php php php*php Informphp thatphp aphp queryphp isphp ignoredphp php(inphp casephp ofphp filteringphp)
php php php php php php*php/
php php php php constphp IGNOREDphp php=php php'ignoredphp'php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp Zendphp_Dbphp_Profilerphp_Queryphp objectsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_queryProfilesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Storesphp enabledphp statephp ofphp thephp profilerphp.php php Ifphp setphp tophp Falsephp,php callsphp to
php php php php php php*php queryStartphp(php)php willphp simplyphp bephp ignoredphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_enabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Storesphp thephp numberphp ofphp secondsphp tophp filterphp.php php NULLphp ifphp filteringphp byphp timephp is
php php php php php php*php disabledphp.php php Ifphp anphp integerphp isphp storedphp herephp,php profilesphp whosephp elapsedphp time
php php php php php php*php isphp lessphp thanphp thisphp valuephp inphp secondsphp willphp bephp unsetphp from
php php php php php php*php thephp selfphp:php:php$php_queryProfilesphp arrayphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_filterElapsedSecsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Logicalphp ORphp ofphp anyphp ofphp thephp filterphp constantsphp.php php NULLphp ifphp filteringphp byphp query
php php php php php php*php typephp isphp disablephp.php php Ifphp anphp integerphp isphp storedphp herephp,php itphp isphp thephp logicalphp ORphp of
php php php php php php*php anyphp ofphp thephp queryphp typephp constantsphp.php php Whenphp thephp queryphp endsphp,php ifphp itphp isphp not
php php php php php php*php onephp ofphp thephp typesphp specifiedphp,php itphp willphp bephp unsetphp fromphp the
php php php php php php*php selfphp:php:php$php_queryProfilesphp arrayphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_filterTypesphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Thephp profilerphp isphp disabledphp byphp defaultphp unlessphp itphp is
php php php php php php*php specificallyphp enabledphp byphp passingphp inphp php$enabledphp herephp orphp callingphp setEnabledphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$enabled
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$enabledphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>setEnabledphp(php$enabledphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp orphp disablephp thephp profilerphp.php php Ifphp php$enablephp isphp falsephp,php thephp profiler
php php php php php php*php isphp disabledphp andphp willphp notphp logphp anyphp queriesphp sentphp tophp itphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$enable
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setEnabledphp(php$enablephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_enabledphp php=php php(booleanphp)php php$enablephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp statephp ofphp enablephp.php php Ifphp Truephp isphp returnedphp,
php php php php php php*php thephp profilerphp isphp enabledphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_enabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp minimumphp numberphp ofphp secondsphp forphp savingphp queryphp profilesphp.php php Ifphp this
php php php php php php*php isphp setphp,php onlyphp thosephp queriesphp whosephp elapsedphp timephp isphp equalphp orphp greaterphp than
php php php php php php*php php$minimumSecondsphp willphp bephp savedphp.php php Tophp savephp allphp queriesphp regardlessphp of
php php php php php php*php elapsedphp timephp,php setphp php$minimumSecondsphp tophp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$minimumSecondsphp OPTIONAL
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFilterElapsedSecsphp(php$minimumSecondsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$minimumSecondsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_filterElapsedSecsphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_filterElapsedSecsphp php=php php(integerphp)php php$minimumSecondsphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minimumphp numberphp ofphp secondsphp forphp savingphp queryphp profilesphp,php orphp nullphp if
php php php php php php*php queryphp profilesphp arephp savedphp regardlessphp ofphp elapsedphp timephp.
php php php php php php*
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php/
php php php php publicphp functionphp getFilterElapsedSecsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filterElapsedSecsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp typesphp ofphp queryphp profilesphp tophp savephp.php php Setphp php$queryTypephp tophp onephp of
php php php php php php*php thephp Zendphp_Dbphp_Profilerphp:php:php*php constantsphp tophp onlyphp savephp profilesphp forphp thatphp typephp of
php php php php php php*php queryphp.php php Tophp savephp morephp thanphp onephp typephp,php logicalphp ORphp themphp togetherphp.php php To
php php php php php php*php savephp allphp queriesphp regardlessphp ofphp typephp,php setphp php$queryTypephp tophp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryTypesphp OPTIONAL
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFilterQueryTypephp(php$queryTypesphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filterTypesphp php=php php$queryTypesphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp typesphp ofphp queryphp profilesphp savedphp,php orphp nullphp ifphp queriesphp arephp savedphp regardless
php php php php php php*php ofphp theirphp typesphp.
php php php php php php*
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php php@seephp php php php Zendphp_Dbphp_Profilerphp:php:setFilterQueryTypephp(php)
php php php php php php*php/
php php php php publicphp functionphp getFilterQueryTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filterTypesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp historyphp ofphp anyphp pastphp queryphp profilesphp.php php Thisphp isphp relentless
php php php php php php*php andphp willphp evenphp clearphp queriesphp thatphp werephp startedphp andphp mayphp notphp have
php php php php php php*php beenphp markedphp asphp endedphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryProfilesphp php=php arrayphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php integerphp php$queryId
php php php php php php*php php@returnphp integerphp orphp null
php php php php php php*php/
php php php php publicphp functionphp queryClonephp(Zendphp_Dbphp_Profilerphp_Queryphp php$queryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryProfilesphp[php]php php=php clonephp php$queryphp;

php php php php php php php php endphp(php$thisphp-php>php_queryProfilesphp)php;

php php php php php php php php returnphp keyphp(php$thisphp-php>php_queryProfilesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startsphp aphp queryphp.php php Createsphp aphp newphp queryphp profilephp objectphp php(Zendphp_Dbphp_Profilerphp_Queryphp)
php php php php php php*php andphp returnsphp thephp php"queryphp profilerphp handlephp"php.php php Runphp thephp queryphp,php thenphp call
php php php php php php*php queryEndphp(php)php andphp passphp itphp thisphp handlephp tophp makephp thephp queryphp asphp endedphp and
php php php php php php*php recordphp thephp timephp.php php Ifphp thephp profilerphp isphp notphp enabledphp,php thisphp takesphp no
php php php php php php*php actionphp andphp immediatelyphp returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$queryTextphp php php SQLphp statement
php php php php php php*php php@paramphp php integerphp php$queryTypephp php php OPTIONALphp Typephp ofphp queryphp,php onephp ofphp thephp Zendphp_Dbphp_Profilerphp:php:php*php constants
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php/
php php php php publicphp functionphp queryStartphp(php$queryTextphp,php php$queryTypephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_enabledphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp wephp havephp aphp queryphp type
php php php php php php php php ifphp php(nullphp php=php=php=php php$queryTypephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(substrphp(ltrimphp(php$queryTextphp)php,php php0php,php php6php)php)php)php php{
php php php php php php php php php php php php php php php php casephp php'insertphp'php:
php php php php php php php php php php php php php php php php php php php php php$queryTypephp php=php selfphp:php:INSERTphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'updatephp'php:
php php php php php php php php php php php php php php php php php php php php php$queryTypephp php=php selfphp:php:UPDATEphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'deletephp'php:
php php php php php php php php php php php php php php php php php php php php php$queryTypephp php=php selfphp:php:DELETEphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'selectphp'php:
php php php php php php php php php php php php php php php php php php php php php$queryTypephp php=php selfphp:php:SELECTphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$queryTypephp php=php selfphp:php:QUERYphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Profilerphp_Query
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Queryphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_queryProfilesphp[php]php php=php newphp Zendphp_Dbphp_Profilerphp_Queryphp(php$queryTextphp,php php$queryTypephp)php;

php php php php php php php php endphp(php$thisphp-php>php_queryProfilesphp)php;

php php php php php php php php returnphp keyphp(php$thisphp-php>php_queryProfilesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endsphp aphp queryphp.php php Passphp itphp thephp handlephp thatphp wasphp returnedphp byphp queryStartphp(php)php.
php php php php php php*php Thisphp willphp markphp thephp queryphp asphp endedphp andphp savephp thephp timephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryId
php php php php php php*php php@throwsphp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp queryEndphp(php$queryIdphp)
php php php php php{
php php php php php php php php php/php/php Donphp'tphp dophp anythingphp ifphp thephp Zendphp_Dbphp_Profilerphp isphp notphp enabledphp.
php php php php php php php php ifphp php(php!php$thisphp-php>php_enabledphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:IGNOREDphp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp aphp validphp queryphp handlephp.
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_queryProfilesphp[php$queryIdphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Profilerphp_Exceptionphp(php"Profilerphp hasphp nophp queryphp withphp handlephp php'php$queryIdphp'php.php"php)php;
php php php php php php php php php}

php php php php php php php php php$qpphp php=php php$thisphp-php>php_queryProfilesphp[php$queryIdphp]php;

php php php php php php php php php/php/php Ensurephp thatphp thephp queryphp profilephp hasphp notphp alreadyphp ended
php php php php php php php php ifphp php(php$qpphp-php>hasEndedphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Profilerphp_Exceptionphp(php"Queryphp withphp profilerphp handlephp php'php$queryIdphp'php hasphp alreadyphp endedphp.php"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Endphp thephp queryphp profilephp sophp thatphp thephp elapsedphp timephp canphp bephp calculatedphp.
php php php php php php php php php$qpphp-php>endphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp filteringphp byphp elapsedphp timephp isphp enabledphp,php onlyphp keepphp thephp profilephp if
php php php php php php php php php php*php itphp ranphp forphp thephp minimumphp timephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_filterElapsedSecsphp php&php&php php$qpphp-php>getElapsedSecsphp(php)php <php php$thisphp-php>php_filterElapsedSecsphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_queryProfilesphp[php$queryIdphp]php)php;
php php php php php php php php php php php php returnphp selfphp:php:IGNOREDphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp filteringphp byphp queryphp typephp isphp enabledphp,php onlyphp keepphp thephp queryphp if
php php php php php php php php php php*php itphp wasphp onephp ofphp thephp allowedphp typesphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_filterTypesphp php&php&php php!php(php$qpphp-php>getQueryTypephp(php)php php&php php$thisphp-php>php_filterTypesphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_queryProfilesphp[php$queryIdphp]php)php;
php php php php php php php php php php php php returnphp selfphp:php:IGNOREDphp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:STOREDphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp profilephp forphp aphp queryphp.php php Passphp itphp thephp samephp handlephp thatphp wasphp returned
php php php php php php*php byphp queryStartphp(php)php andphp itphp willphp returnphp aphp Zendphp_Dbphp_Profilerphp_Queryphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryId
php php php php php php*php php@throwsphp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp_Query
php php php php php php*php/
php php php php publicphp functionphp getQueryProfilephp(php$queryIdphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$queryIdphp,php php$thisphp-php>php_queryProfilesphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Profilerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Profilerphp_Exceptionphp(php"Queryphp handlephp php'php$queryIdphp'php notphp foundphp inphp profilerphp logphp.php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_queryProfilesphp[php$queryIdphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp queryphp profilesphp php(Zendphp_Dbphp_Profilerphp_Queryphp objectsphp)php.php php Ifphp php$queryType
php php php php php php*php isphp setphp tophp onephp ofphp thephp Zendphp_Dbphp_Profilerphp:php:php*php constantsphp thenphp onlyphp queriesphp ofphp that
php php php php php php*php typephp willphp bephp returnedphp.php php Normallyphp,php queriesphp thatphp havephp notphp yetphp endedphp will
php php php php php php*php notphp bephp returnedphp unlessphp php$showUnfinishedphp isphp setphp tophp Truephp.php php Ifphp no
php php php php php php*php queriesphp werephp foundphp,php Falsephp isphp returnedphp.php Thephp returnedphp arrayphp isphp indexedphp byphp thephp query
php php php php php php*php profilephp handlesphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryType
php php php php php php*php php@paramphp php booleanphp php$showUnfinished
php php php php php php*php php@returnphp arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getQueryProfilesphp(php$queryTypephp php=php nullphp,php php$showUnfinishedphp php=php falsephp)
php php php php php{
php php php php php php php php php$queryProfilesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_queryProfilesphp asphp php$keyphp php=php>php php$qpphp)php php{
php php php php php php php php php php php php ifphp php(php$queryTypephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$conditionphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$conditionphp php=php php(php$qpphp-php>getQueryTypephp(php)php php&php php$queryTypephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php(php$qpphp-php>hasEndedphp(php)php php|php|php php$showUnfinishedphp)php php&php&php php$conditionphp)php php{
php php php php php php php php php php php php php php php php php$queryProfilesphp[php$keyphp]php php=php php$qpphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$queryProfilesphp)php)php php{
php php php php php php php php php php php php php$queryProfilesphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$queryProfilesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp totalphp elapsedphp timephp php(inphp secondsphp)php ofphp allphp ofphp thephp profiledphp queriesphp.
php php php php php php*php Onlyphp queriesphp thatphp havephp endedphp willphp bephp countedphp.php php Ifphp php$queryTypephp isphp setphp to
php php php php php php*php onephp orphp morephp ofphp thephp Zendphp_Dbphp_Profilerphp:php:php*php constantsphp,php thephp elapsedphp timephp willphp bephp calculated
php php php php php php*php onlyphp forphp queriesphp ofphp thephp givenphp typephp(sphp)php.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryTypephp OPTIONAL
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getTotalElapsedSecsphp(php$queryTypephp php=php nullphp)
php php php php php{
php php php php php php php php php$elapsedSecsphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_queryProfilesphp asphp php$keyphp php=php>php php$qpphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$queryTypephp)php php{
php php php php php php php php php php php php php php php php php$conditionphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$conditionphp php=php php(php$qpphp-php>getQueryTypephp(php)php php&php php$queryTypephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php(php$qpphp-php>hasEndedphp(php)php)php php&php&php php$conditionphp)php php{
php php php php php php php php php php php php php php php php php$elapsedSecsphp php+php=php php$qpphp-php>getElapsedSecsphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$elapsedSecsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp totalphp numberphp ofphp queriesphp thatphp havephp beenphp profiledphp.php php Onlyphp queriesphp thatphp havephp endedphp will
php php php php php php*php bephp countedphp.php php Ifphp php$queryTypephp isphp setphp tophp onephp ofphp thephp Zendphp_Dbphp_Profilerphp:php:php*php constantsphp,php onlyphp queriesphp of
php php php php php php*php thatphp typephp willphp bephp countedphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryTypephp OPTIONAL
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTotalNumQueriesphp(php$queryTypephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$queryTypephp)php php{
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>php_queryProfilesphp)php;
php php php php php php php php php}

php php php php php php php php php$numQueriesphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_queryProfilesphp asphp php$qpphp)php php{
php php php php php php php php php php php php ifphp php(php$qpphp-php>hasEndedphp(php)php php&php&php php(php$qpphp-php>getQueryTypephp(php)php php&php php$queryTypephp)php)php php{
php php php php php php php php php php php php php php php php php$numQueriesphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$numQueriesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Zendphp_Dbphp_Profilerphp_Queryphp objectphp forphp thephp lastphp queryphp thatphp wasphp runphp,php regardlessphp ifphp itphp has
php php php php php php*php endedphp orphp notphp.php php Ifphp thephp queryphp hasphp notphp endedphp,php itsphp endphp timephp willphp bephp nullphp.php php Ifphp nophp queriesphp have
php php php php php php*php beenphp profiledphp,php falsephp isphp returnedphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp_Queryphp|false
php php php php php php*php/
php php php php publicphp functionphp getLastQueryProfilephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_queryProfilesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php endphp(php$thisphp-php>php_queryProfilesphp)php;

php php php php php php php php returnphp currentphp(php$thisphp-php>php_queryProfilesphp)php;
php php php php php}

php}

