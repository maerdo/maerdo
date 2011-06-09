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
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp implementsphp ArrayAccessphp,php IteratorAggregate
php{

php php php php php/php*php*
php php php php php php*php Thephp dataphp forphp eachphp columnphp inphp thephp rowphp php(columnphp_namephp php=php>php valuephp)php.
php php php php php php*php Thephp keysphp mustphp matchphp thephp physicalphp namesphp ofphp columnsphp inphp the
php php php php php php*php tablephp forphp whichphp thisphp rowphp isphp definedphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thisphp isphp setphp tophp aphp copyphp ofphp php$php_dataphp whenphp thephp dataphp isphp fetchedphp from
php php php php php php*php aphp databasephp,php specifiedphp asphp aphp newphp tuplephp inphp thephp constructorphp,php or
php php php php php php*php whenphp dirtyphp dataphp isphp postedphp tophp thephp databasephp withphp savephp(php)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_cleanDataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Tracksphp columnsphp wherephp dataphp hasphp beenphp updatedphp.php Allowsphp morephp specificphp insertphp and
php php php php php php*php updatephp operationsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_modifiedFieldsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_Dbphp_Tablephp_Abstractphp parentphp classphp orphp instancephp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_tablephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Connectedphp isphp truephp ifphp wephp havephp aphp referencephp tophp aphp live
php php php php php php*php Zendphp_Dbphp_Tablephp_Abstractphp objectphp.
php php php php php php*php Thisphp isphp falsephp afterphp thephp Rowsetphp hasphp beenphp deserializedphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_connectedphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Aphp rowphp isphp markedphp readphp onlyphp ifphp itphp containsphp columnsphp thatphp arephp notphp physicallyphp representedphp within
php php php php php php*php thephp databasephp schemaphp php(ephp.gphp.php evaluatedphp columnsphp/Zendphp_Dbphp_Exprphp columnsphp)php.php Thisphp canphp alsophp bephp passed
php php php php php php*php asphp aphp runphp-timephp configphp optionsphp asphp aphp meansphp ofphp protectingphp rowphp dataphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_readOnlyphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp classphp ofphp thephp Zendphp_Dbphp_Tablephp_Abstractphp objectphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tableClassphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Primaryphp rowphp keyphp(sphp)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_primaryphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php Supportedphp paramsphp forphp php$configphp arephp:php-
php php php php php php*php php-php tablephp php php php php php php php=php classphp namephp orphp objectphp ofphp typephp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php php-php dataphp php php php php php php php php=php valuesphp ofphp columnsphp inphp thisphp rowphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$configphp OPTIONALphp Arrayphp ofphp userphp-specifiedphp configphp optionsphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$configphp[php'tablephp'php]php)php php&php&php php$configphp[php'tablephp'php]php instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tablephp php=php php$configphp[php'tablephp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_tableClassphp php=php getphp_classphp(php$thisphp-php>php_tablephp)php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_tableClassphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tablephp php=php php$thisphp-php>php_getTableFromStringphp(php$thisphp-php>php_tableClassphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$configphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Dataphp mustphp bephp anphp arrayphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dataphp php=php php$configphp[php'dataphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$configphp[php'storedphp'php]php)php php&php&php php$configphp[php'storedphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_cleanDataphp php=php php$thisphp-php>php_dataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$configphp[php'readOnlyphp'php]php)php php&php&php php$configphp[php'readOnlyphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>setReadOnlyphp(truephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Retrievephp primaryphp keysphp fromphp tablephp schema
php php php php php php php php ifphp php(php(php$tablephp php=php php$thisphp-php>php_getTablephp(php)php)php)php php{
php php php php php php php php php php php php php$infophp php=php php$tablephp-php>infophp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_primaryphp php=php php(arrayphp)php php$infophp[php'primaryphp'php]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp aphp columnphp namephp fromphp thephp userphp-specifiedphp form
php php php php php php*php tophp thephp physicalphp formphp usedphp inphp thephp databasephp.
php php php php php php*php Youphp canphp overridephp thisphp methodphp inphp aphp customphp Rowphp class
php php php php php php*php tophp implementphp columnphp namephp mappingsphp,php forphp examplephp inflectionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$columnNamephp Columnphp namephp givenphp.
php php php php php php*php php@returnphp stringphp Thephp columnphp namephp afterphp transformationphp appliedphp php(nonephp byphp defaultphp)php.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp ifphp thephp php$columnNamephp isphp notphp aphp stringphp.
php php php php php php*php/
php php php php protectedphp functionphp php_transformColumnphp(php$columnNamephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$columnNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Specifiedphp columnphp isphp notphp aphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/php Performphp nophp transformationphp byphp default
php php php php php php php php returnphp php$columnNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp rowphp fieldphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$columnNamephp Thephp userphp-specifiedphp columnphp namephp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php Thephp correspondingphp columnphp valuephp.
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp ifphp thephp php$columnNamephp isphp notphp aphp columnphp inphp thephp rowphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$columnNamephp)
php php php php php{
php php php php php php php php php$columnNamephp php=php php$thisphp-php>php_transformColumnphp(php$columnNamephp)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$columnNamephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Specifiedphp columnphp php\php"php$columnNamephp\php"php isphp notphp inphp thephp rowphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$columnNamephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rowphp fieldphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$columnNamephp Thephp columnphp keyphp.
php php php php php php*php php@paramphp php mixedphp php php$valuephp php php php php php Thephp valuephp forphp thephp propertyphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$columnNamephp,php php$valuephp)
php php php php php{
php php php php php php php php php$columnNamephp php=php php$thisphp-php>php_transformColumnphp(php$columnNamephp)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$columnNamephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Specifiedphp columnphp php\php"php$columnNamephp\php"php isphp notphp inphp thephp rowphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php$columnNamephp]php php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_modifiedFieldsphp[php$columnNamephp]php php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp rowphp fieldphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$columnNamephp Thephp columnphp keyphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$columnNamephp)
php php php php php{
php php php php php php php php php$columnNamephp php=php php$thisphp-php>php_transformColumnphp(php$columnNamephp)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$columnNamephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Specifiedphp columnphp php\php"php$columnNamephp\php"php isphp notphp inphp thephp rowphp"php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>isConnectedphp(php)php php&php&php inphp_arrayphp(php$columnNamephp,php php$thisphp-php>php_tablephp-php>infophp(php'primaryphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Specifiedphp columnphp php\php"php$columnNamephp\php"php isphp aphp primaryphp keyphp andphp shouldphp notphp bephp unsetphp"php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$columnNamephp]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp existencephp ofphp rowphp field
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$columnNamephp php php Thephp columnphp keyphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$columnNamephp)
php php php php php{
php php php php php php php php php$columnNamephp php=php php$thisphp-php>php_transformColumnphp(php$columnNamephp)php;
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$columnNamephp,php php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp tablephp,php primaryphp keyphp andphp dataphp inphp serializedphp object
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_tableClassphp'php,php php'php_primaryphp'php,php php'php_dataphp'php,php php'php_cleanDataphp'php,php php'php_readOnlyphp'php php,php'php_modifiedFieldsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setupphp tophp dophp onphp wakeupphp.
php php php php php php*php Aphp dephp-serializedphp Rowphp shouldphp notphp bephp assumedphp tophp havephp accessphp tophp aphp live
php php php php php php*php databasephp connectionphp,php sophp setphp php_connectedphp php=php falsephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectedphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp php_php_isset
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_issetphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp php_php_get
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_php_getphp(php$offsetphp)php;
php php php php php php}

php php php php php php/php*php*
php php php php php php php*php Proxyphp tophp php_php_set
php php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php php*
php php php php php php php*php php@paramphp stringphp php$offset
php php php php php php php*php php@paramphp mixedphp php$value
php php php php php php php*php/
php php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php php{
php php php php php php php php php php$thisphp-php>php_php_setphp(php$offsetphp,php php$valuephp)php;
php php php php php php}

php php php php php php/php*php*
php php php php php php php*php Proxyphp tophp php_php_unset
php php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php php*
php php php php php php php*php php@paramphp stringphp php$offset
php php php php php php php*php/
php php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_php_unsetphp(php$offsetphp)php;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp object
php php php php php php*
php php php php php php*php Calledphp fromphp php{php@linkphp php_php_constructphp(php)php}php asphp finalphp stepphp ofphp objectphp instantiationphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp tablephp objectphp,php orphp nullphp ifphp thisphp isphp disconnectedphp row
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Abstractphp|null
php php php php php php*php/
php php php php publicphp functionphp getTablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp tablephp objectphp,php tophp rephp-establishphp aphp livephp connection
php php php php php php*php tophp thephp databasephp forphp aphp Rowphp thatphp hasphp beenphp dephp-serializedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$table
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTablephp(Zendphp_Dbphp_Tablephp_Abstractphp php$tablephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$tablephp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tablephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_connectedphp php=php falsephp;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$tableClassphp php=php getphp_classphp(php$tablephp)php;
php php php php php php php php ifphp php(php!php php$tablephp instanceofphp php$thisphp-php>php_tableClassphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Thephp specifiedphp Tablephp isphp ofphp classphp php$tableClassphp,php expectingphp classphp tophp bephp instancephp ofphp php$thisphp-php>php_tableClassphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tablephp php=php php$tablephp;
php php php php php php php php php$thisphp-php>php_tableClassphp php=php php$tableClassphp;

php php php php php php php php php$infophp php=php php$thisphp-php>php_tablephp-php>infophp(php)php;

php php php php php php php php ifphp php(php$infophp[php'colsphp'php]php php!php=php arrayphp_keysphp(php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Thephp specifiedphp Tablephp doesphp notphp havephp thephp samephp columnsphp asphp thephp Rowphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php arrayphp_intersectphp(php(arrayphp)php php$thisphp-php>php_primaryphp,php php$infophp[php'primaryphp'php]php)php php=php=php php(arrayphp)php php$thisphp-php>php_primaryphp)php php{

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Thephp specifiedphp Tablephp php'php$tableClassphp'php doesphp notphp havephp thephp samephp primaryphp keyphp asphp thephp Rowphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_connectedphp php=php truephp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp thephp classphp namephp ofphp thephp Tablephp objectphp forphp whichphp this
php php php php php php*php Rowphp wasphp createdphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTableClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tableClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp thephp connectedphp statusphp ofphp thephp rowphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isConnectedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_connectedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp thephp readphp-onlyphp statusphp ofphp thephp rowphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isReadOnlyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_readOnlyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp readphp-onlyphp statusphp ofphp thephp rowphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flag
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp setReadOnlyphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_readOnlyphp php=php php(boolphp)php php$flagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp thephp parentphp tablephp'sphp Zendphp_Dbphp_Tablephp_Selectphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Select
php php php php php php*php/
php php php php publicphp functionphp selectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getTablephp(php)php-php>selectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp thephp propertiesphp tophp thephp databasephp.
php php php php php php*
php php php php php php*php Thisphp performsphp anphp intelligentphp insertphp/updatephp,php andphp reloadsphp the
php php php php php php*php propertiesphp withphp freshphp dataphp fromphp thephp tablephp onphp successphp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Thephp primaryphp keyphp valuephp(sphp)php,php asphp anphp associativephp arrayphp ifphp the
php php php php php php*php php php php php keyphp isphp compoundphp,php orphp aphp scalarphp ifphp thephp keyphp isphp singlephp-columnphp.
php php php php php php*php/
php php php php publicphp functionphp savephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp thephp php_cleanDataphp arrayphp isphp emptyphp,
php php php php php php php php php php*php thisphp isphp anphp INSERTphp ofphp aphp newphp rowphp.
php php php php php php php php php php*php Otherwisephp itphp isphp anphp UPDATEphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_cleanDataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_doInsertphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_doUpdatephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp mixedphp Thephp primaryphp keyphp valuephp(sphp)php,php asphp anphp associativephp arrayphp ifphp the
php php php php php php*php php php php php keyphp isphp compoundphp,php orphp aphp scalarphp ifphp thephp keyphp isphp singlephp-columnphp.
php php php php php php*php/
php php php php protectedphp functionphp php_doInsertphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Aphp readphp-onlyphp rowphp cannotphp bephp savedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_readOnlyphp php=php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Thisphp rowphp hasphp beenphp markedphp readphp-onlyphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Runphp prephp-INSERTphp logic
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_insertphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp thephp INSERTphp php(thisphp mayphp throwphp anphp exceptionphp)
php php php php php php php php php php*php/
php php php php php php php php php$dataphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_dataphp,php php$thisphp-php>php_modifiedFieldsphp)php;
php php php php php php php php php$primaryKeyphp php=php php$thisphp-php>php_getTablephp(php)php-php>insertphp(php$dataphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Normalizephp thephp resultphp tophp anphp arrayphp indexedphp byphp primaryphp keyphp columnphp(sphp)php.
php php php php php php php php php php*php Thephp tablephp insertphp(php)php methodphp mayphp returnphp aphp scalarphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(isphp_arrayphp(php$primaryKeyphp)php)php php{
php php php php php php php php php php php php php$newPrimaryKeyphp php=php php$primaryKeyphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/ZFphp-php6php1php6php7php Usephp tempPrimaryKeyphp temporaryphp tophp avoidphp thatphp zendphp encodingphp failsphp.
php php php php php php php php php php php php php$tempPrimaryKeyphp php=php php(arrayphp)php php$thisphp-php>php_primaryphp;
php php php php php php php php php php php php php$newPrimaryKeyphp php=php arrayphp(currentphp(php$tempPrimaryKeyphp)php php=php>php php$primaryKeyphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Savephp thephp newphp primaryphp keyphp valuephp inphp php_dataphp.php php Thephp primaryphp keyphp mayphp have
php php php php php php php php php php*php beenphp generatedphp byphp aphp sequencephp orphp autophp-incrementphp mechanismphp,php andphp this
php php php php php php php php php php*php mergephp shouldphp bephp donephp beforephp thephp php_postInsertphp(php)php methodphp isphp runphp,php sophp the
php php php php php php php php php php*php newphp valuesphp arephp availablephp forphp loggingphp,php etcphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp_mergephp(php$thisphp-php>php_dataphp,php php$newPrimaryKeyphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Runphp postphp-INSERTphp logic
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_postInsertphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Updatephp thephp php_cleanDataphp tophp reflectphp thatphp thephp dataphp hasphp beenphp insertedphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_refreshphp(php)php;

php php php php php php php php returnphp php$primaryKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp mixedphp Thephp primaryphp keyphp valuephp(sphp)php,php asphp anphp associativephp arrayphp ifphp the
php php php php php php*php php php php php keyphp isphp compoundphp,php orphp aphp scalarphp ifphp thephp keyphp isphp singlephp-columnphp.
php php php php php php*php/
php php php php protectedphp functionphp php_doUpdatephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Aphp readphp-onlyphp rowphp cannotphp bephp savedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_readOnlyphp php=php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Thisphp rowphp hasphp beenphp markedphp readphp-onlyphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Getphp expressionsphp forphp aphp WHEREphp clause
php php php php php php php php php php*php basedphp onphp thephp primaryphp keyphp valuephp(sphp)php.
php php php php php php php php php php*php/
php php php php php php php php php$wherephp php=php php$thisphp-php>php_getWhereQueryphp(falsephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Runphp prephp-UPDATEphp logic
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_updatephp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Comparephp thephp dataphp tophp thephp modifiedphp fieldsphp arrayphp tophp discover
php php php php php php php php php php*php whichphp columnsphp havephp beenphp changedphp.
php php php php php php php php php php*php/
php php php php php php php php php$diffDataphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_dataphp,php php$thisphp-php>php_modifiedFieldsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Werephp anyphp ofphp thephp changedphp columnsphp partphp ofphp thephp primaryphp keyphp?
php php php php php php php php php php*php/
php php php php php php php php php$pkDiffDataphp php=php arrayphp_intersectphp_keyphp(php$diffDataphp,php arrayphp_flipphp(php(arrayphp)php$thisphp-php>php_primaryphp)php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp cascadingphp updatesphp againstphp dependentphp tablesphp.
php php php php php php php php php php*php Dophp thisphp onlyphp ifphp primaryphp keyphp valuephp(sphp)php werephp changedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(countphp(php$pkDiffDataphp)php php>php php0php)php php{
php php php php php php php php php php php php php$depTablesphp php=php php$thisphp-php>php_getTablephp(php)php-php>getDependentTablesphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$depTablesphp)php)php php{
php php php php php php php php php php php php php php php php php$pkNewphp php=php php$thisphp-php>php_getPrimaryKeyphp(truephp)php;
php php php php php php php php php php php php php php php php php$pkOldphp php=php php$thisphp-php>php_getPrimaryKeyphp(falsephp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$depTablesphp asphp php$tableClassphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tphp php=php php$thisphp-php>php_getTableFromStringphp(php$tableClassphp)php;
php php php php php php php php php php php php php php php php php php php php php$tphp-php>php_cascadeUpdatephp(php$thisphp-php>getTableClassphp(php)php,php php$pkOldphp,php php$pkNewphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp thephp UPDATEphp php(thisphp mayphp throwphp anphp exceptionphp)
php php php php php php php php php php*php Dophp thisphp onlyphp ifphp dataphp valuesphp werephp changedphp.
php php php php php php php php php php*php Usephp thephp php$diffDataphp variablephp,php sophp thephp UPDATEphp statement
php php php php php php php php php php*php includesphp SETphp termsphp onlyphp forphp dataphp valuesphp thatphp changedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(countphp(php$diffDataphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_getTablephp(php)php-php>updatephp(php$diffDataphp,php php$wherephp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Runphp postphp-UPDATEphp logicphp.php php Dophp thisphp beforephp thephp php_refreshphp(php)
php php php php php php php php php php*php sophp thephp php_postUpdatephp(php)php functionphp canphp tellphp thephp difference
php php php php php php php php php php*php betweenphp changedphp dataphp andphp cleanphp php(prephp-changedphp)php dataphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_postUpdatephp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Refreshphp thephp dataphp justphp inphp casephp triggersphp inphp thephp RDBMSphp changed
php php php php php php php php php php*php anyphp columnsphp.php php Alsophp thisphp resetsphp thephp php_cleanDataphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_refreshphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Returnphp thephp primaryphp keyphp valuephp(sphp)php asphp anphp array
php php php php php php php php php php*php ifphp thephp keyphp isphp compoundphp orphp aphp scalarphp ifphp thephp key
php php php php php php php php php php*php isphp aphp scalarphp.
php php php php php php php php php php*php/
php php php php php php php php php$primaryKeyphp php=php php$thisphp-php>php_getPrimaryKeyphp(truephp)php;
php php php php php php php php ifphp php(countphp(php$primaryKeyphp)php php=php=php php1php)php php{
php php php php php php php php php php php php returnphp currentphp(php$primaryKeyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$primaryKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp existingphp rowsphp.
php php php php php php*
php php php php php php*php php@returnphp intphp Thephp numberphp ofphp rowsphp deletedphp.
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Aphp readphp-onlyphp rowphp cannotphp bephp deletedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_readOnlyphp php=php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Thisphp rowphp hasphp beenphp markedphp readphp-onlyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$wherephp php=php php$thisphp-php>php_getWhereQueryphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp prephp-DELETEphp logic
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_deletephp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp cascadingphp deletesphp againstphp dependentphp tables
php php php php php php php php php php*php/
php php php php php php php php php$depTablesphp php=php php$thisphp-php>php_getTablephp(php)php-php>getDependentTablesphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$depTablesphp)php)php php{
php php php php php php php php php php php php php$pkphp php=php php$thisphp-php>php_getPrimaryKeyphp(php)php;
php php php php php php php php php php php php foreachphp php(php$depTablesphp asphp php$tableClassphp)php php{
php php php php php php php php php php php php php php php php php$tphp php=php php$thisphp-php>php_getTableFromStringphp(php$tableClassphp)php;
php php php php php php php php php php php php php php php php php$tphp-php>php_cascadeDeletephp(php$thisphp-php>getTableClassphp(php)php,php php$pkphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp thephp DELETEphp php(thisphp mayphp throwphp anphp exceptionphp)
php php php php php php php php php php*php/
php php php php php php php php php$resultphp php=php php$thisphp-php>php_getTablephp(php)php-php>deletephp(php$wherephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Executephp postphp-DELETEphp logic
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_postDeletephp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Resetphp allphp fieldsphp tophp nullphp tophp indicatephp thatphp thephp rowphp isphp notphp there
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp_combinephp(
php php php php php php php php php php php php arrayphp_keysphp(php$thisphp-php>php_dataphp)php,
php php php php php php php php php php php php arrayphp_fillphp(php0php,php countphp(php$thisphp-php>php_dataphp)php,php nullphp)
php php php php php php php php php)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php(arrayphp)php php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp columnphp/valuephp dataphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp php(arrayphp)php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp allphp dataphp inphp thephp rowphp fromphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFromArrayphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp_intersectphp_keyphp(php$dataphp,php php$thisphp-php>php_dataphp)php;

php php php php php php php php foreachphp php(php$dataphp asphp php$columnNamephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_php_setphp(php$columnNamephp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Refreshesphp propertiesphp fromphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp refreshphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_refreshphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp anphp instancephp ofphp thephp parentphp tablephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php/
php php php php protectedphp functionphp php_getTablephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_connectedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Cannotphp savephp aphp Rowphp unlessphp itphp isphp connectedphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp anphp associativephp arrayphp ofphp primaryphp keysphp.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$useDirty
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getPrimaryKeyphp(php$useDirtyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$thisphp-php>php_primaryphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Thephp primaryphp keyphp mustphp bephp setphp asphp anphp arrayphp"php)php;
php php php php php php php php php}

php php php php php php php php php$primaryphp php=php arrayphp_flipphp(php$thisphp-php>php_primaryphp)php;
php php php php php php php php ifphp php(php$useDirtyphp)php php{
php php php php php php php php php php php php php$arrayphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_dataphp,php php$primaryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$arrayphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_cleanDataphp,php php$primaryphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$primaryphp)php php!php=php countphp(php$arrayphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Thephp specifiedphp Tablephp php'php$thisphp-php>php_tableClassphp'php doesphp notphp havephp thephp samephp primaryphp keyphp asphp thephp Rowphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp wherephp statementphp forphp retrievingphp rowphp(sphp)php.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$useDirty
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getWhereQueryphp(php$useDirtyphp php=php truephp)
php php php php php{
php php php php php php php php php$wherephp php=php arrayphp(php)php;
php php php php php php php php php$dbphp php=php php$thisphp-php>php_getTablephp(php)php-php>getAdapterphp(php)php;
php php php php php php php php php$primaryKeyphp php=php php$thisphp-php>php_getPrimaryKeyphp(php$useDirtyphp)php;
php php php php php php php php php$infophp php=php php$thisphp-php>php_getTablephp(php)php-php>infophp(php)php;
php php php php php php php php php$metadataphp php=php php$infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:METADATAphp]php;

php php php php php php php php php/php/php retrievephp recentlyphp updatedphp rowphp usingphp primaryphp keys
php php php php php php php php php$wherephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$primaryKeyphp asphp php$columnphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$tableNamephp php=php php$dbphp-php>quoteIdentifierphp(php$infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:NAMEphp]php,php truephp)php;
php php php php php php php php php php php php php$typephp php=php php$metadataphp[php$columnphp]php[php'DATAphp_TYPEphp'php]php;
php php php php php php php php php php php php php$columnNamephp php=php php$dbphp-php>quoteIdentifierphp(php$columnphp,php truephp)php;
php php php php php php php php php php php php php$wherephp[php]php php=php php$dbphp-php>quoteIntophp(php"php{php$tableNamephp}php.php{php$columnNamephp}php php=php php?php"php,php php$valuephp,php php$typephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$wherephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Refreshesphp propertiesphp fromphp thephp databasephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_refreshphp(php)
php php php php php{
php php php php php php php php php$wherephp php=php php$thisphp-php>php_getWhereQueryphp(php)php;
php php php php php php php php php$rowphp php=php php$thisphp-php>php_getTablephp(php)php-php>fetchRowphp(php$wherephp)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$rowphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php'Cannotphp refreshphp rowphp asphp parentphp isphp missingphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp php=php php$rowphp-php>toArrayphp(php)php;
php php php php php php php php php$thisphp-php>php_cleanDataphp php=php php$thisphp-php>php_dataphp;
php php php php php php php php php$thisphp-php>php_modifiedFieldsphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp prephp-insertphp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_insertphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp postphp-insertphp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_postInsertphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp prephp-updatephp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_updatephp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp postphp-updatephp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_postUpdatephp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp prephp-deletephp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_deletephp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp postphp-deletephp logicphp tophp bephp appliedphp tophp rowphp.
php php php php php php*php Subclassesphp mayphp overridephp thisphp methodphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_postDeletephp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp aphp tablephp referencephp forphp lookupphp.
php php php php php php*
php php php php php php*php Ensuresphp allphp referencephp keysphp arephp setphp andphp properlyphp formattedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$dependentTable
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$parentTable
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php php php php php$ruleKey
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareReferencephp(Zendphp_Dbphp_Tablephp_Abstractphp php$dependentTablephp,php Zendphp_Dbphp_Tablephp_Abstractphp php$parentTablephp,php php$ruleKeyphp)
php php php php php{
php php php php php php php php php$parentTableNamephp php=php php(getphp_classphp(php$parentTablephp)php php=php=php=php php'Zendphp_Dbphp_Tablephp'php)php php?php php$parentTablephp-php>getDefinitionConfigNamephp(php)php php:php getphp_classphp(php$parentTablephp)php;
php php php php php php php php php$mapphp php=php php$dependentTablephp-php>getReferencephp(php$parentTableNamephp,php php$ruleKeyphp)php;

php php php php php php php php ifphp php(php!issetphp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php)php)php php{
php php php php php php php php php php php php php$parentInfophp php=php php$parentTablephp-php>infophp(php)php;
php php php php php php php php php php php php php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php php=php arrayphp_valuesphp(php(arrayphp)php php$parentInfophp[php'primaryphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php php=php php(arrayphp)php php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php;
php php php php php php php php php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php php=php php(arrayphp)php php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php;

php php php php php php php php returnphp php$mapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp aphp dependentphp tablephp tophp retrievephp rowsphp matchingphp thephp currentphp rowphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Tablephp_Abstractphp php php$dependentTable
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php OPTIONALphp php$ruleKey
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Selectphp php php php php php php php php php php OPTIONALphp php$select
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowsetphp_Abstractphp Queryphp resultphp fromphp php$dependentTable
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp Ifphp php$dependentTablephp isphp notphp aphp tablephp orphp isphp notphp loadablephp.
php php php php php php*php/
php php php php publicphp functionphp findDependentRowsetphp(php$dependentTablephp,php php$ruleKeyphp php=php nullphp,php Zendphp_Dbphp_Tablephp_Selectphp php$selectphp php=php nullphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_getTablephp(php)php-php>getAdapterphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$dependentTablephp)php)php php{
php php php php php php php php php php php php php$dependentTablephp php=php php$thisphp-php>php_getTableFromStringphp(php$dependentTablephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$dependentTablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$typephp php=php gettypephp(php$dependentTablephp)php;
php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'objectphp'php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$dependentTablephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Dependentphp tablephp mustphp bephp aphp Zendphp_Dbphp_Tablephp_Abstractphp,php butphp itphp isphp php$typephp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php evenphp ifphp wephp arephp interactingphp betweenphp aphp tablephp definedphp inphp aphp classphp andphp a
php php php php php php php php php/php/php tablephp viaphp extensionphp,php ensurephp tophp persistphp thephp definition
php php php php php php php php ifphp php(php(php$tableDefinitionphp php=php php$thisphp-php>php_tablephp-php>getDefinitionphp(php)php)php php!php=php=php null
php php php php php php php php php php php php php&php&php php(php$dependentTablephp-php>getDefinitionphp(php)php php=php=php nullphp)php)php php{
php php php php php php php php php php php php php$dependentTablephp-php>setOptionsphp(arrayphp(Zendphp_Dbphp_Tablephp_Abstractphp:php:DEFINITIONphp php=php>php php$tableDefinitionphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$selectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$selectphp php=php php$dependentTablephp-php>selectphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$selectphp-php>setTablephp(php$dependentTablephp)php;
php php php php php php php php php}

php php php php php php php php php$mapphp php=php php$thisphp-php>php_prepareReferencephp(php$dependentTablephp,php php$thisphp-php>php_getTablephp(php)php,php php$ruleKeyphp)php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php)php;php php+php+php$iphp)php php{
php php php php php php php php php php php php php$parentColumnNamephp php=php php$dbphp-php>foldCasephp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_dataphp[php$parentColumnNamephp]php;
php php php php php php php php php php php php php/php/php Usephp adapterphp fromphp dependentphp tablephp tophp ensurephp correctphp queryphp construction
php php php php php php php php php php php php php$dependentDbphp php=php php$dependentTablephp-php>getAdapterphp(php)php;
php php php php php php php php php php php php php$dependentColumnNamephp php=php php$dependentDbphp-php>foldCasephp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$dependentColumnphp php=php php$dependentDbphp-php>quoteIdentifierphp(php$dependentColumnNamephp,php truephp)php;
php php php php php php php php php php php php php$dependentInfophp php=php php$dependentTablephp-php>infophp(php)php;
php php php php php php php php php php php php php$typephp php=php php$dependentInfophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:METADATAphp]php[php$dependentColumnNamephp]php[php'DATAphp_TYPEphp'php]php;
php php php php php php php php php php php php php$selectphp-php>wherephp(php"php$dependentColumnphp php=php php?php"php,php php$valuephp,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dependentTablephp-php>fetchAllphp(php$selectphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp aphp parentphp tablephp tophp retrievephp thephp singlephp rowphp matchingphp thephp currentphp rowphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Dbphp_Tablephp_Abstractphp php$parentTable
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php php php php php php php php php php php OPTIONALphp php$ruleKey
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Selectphp php php php php php php php php php OPTIONALphp php$select
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp php php Queryphp resultphp fromphp php$parentTable
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp Ifphp php$parentTablephp isphp notphp aphp tablephp orphp isphp notphp loadablephp.
php php php php php php*php/
php php php php publicphp functionphp findParentRowphp(php$parentTablephp,php php$ruleKeyphp php=php nullphp,php Zendphp_Dbphp_Tablephp_Selectphp php$selectphp php=php nullphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_getTablephp(php)php-php>getAdapterphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$parentTablephp)php)php php{
php php php php php php php php php php php php php$parentTablephp php=php php$thisphp-php>php_getTableFromStringphp(php$parentTablephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$parentTablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$typephp php=php gettypephp(php$parentTablephp)php;
php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'objectphp'php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$parentTablephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Parentphp tablephp mustphp bephp aphp Zendphp_Dbphp_Tablephp_Abstractphp,php butphp itphp isphp php$typephp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php evenphp ifphp wephp arephp interactingphp betweenphp aphp tablephp definedphp inphp aphp classphp andphp a
php php php php php php php php php/php/php tablephp viaphp extensionphp,php ensurephp tophp persistphp thephp definition
php php php php php php php php ifphp php(php(php$tableDefinitionphp php=php php$thisphp-php>php_tablephp-php>getDefinitionphp(php)php)php php!php=php=php null
php php php php php php php php php php php php php&php&php php(php$parentTablephp-php>getDefinitionphp(php)php php=php=php nullphp)php)php php{
php php php php php php php php php php php php php$parentTablephp-php>setOptionsphp(arrayphp(Zendphp_Dbphp_Tablephp_Abstractphp:php:DEFINITIONphp php=php>php php$tableDefinitionphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$selectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$selectphp php=php php$parentTablephp-php>selectphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$selectphp-php>setTablephp(php$parentTablephp)php;
php php php php php php php php php}

php php php php php php php php php$mapphp php=php php$thisphp-php>php_prepareReferencephp(php$thisphp-php>php_getTablephp(php)php,php php$parentTablephp,php php$ruleKeyphp)php;

php php php php php php php php php/php/php iteratephp thephp mapphp,php creatingphp thephp properphp wheres
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php)php;php php+php+php$iphp)php php{
php php php php php php php php php php php php php$dependentColumnNamephp php=php php$dbphp-php>foldCasephp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_dataphp[php$dependentColumnNamephp]php;
php php php php php php php php php php php php php/php/php Usephp adapterphp fromphp parentphp tablephp tophp ensurephp correctphp queryphp construction
php php php php php php php php php php php php php$parentDbphp php=php php$parentTablephp-php>getAdapterphp(php)php;
php php php php php php php php php php php php php$parentColumnNamephp php=php php$parentDbphp-php>foldCasephp(php$mapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$parentColumnphp php=php php$parentDbphp-php>quoteIdentifierphp(php$parentColumnNamephp,php truephp)php;
php php php php php php php php php php php php php$parentInfophp php=php php$parentTablephp-php>infophp(php)php;

php php php php php php php php php php php php php/php/php determinephp wherephp part
php php php php php php php php php php php php php$typephp php php php php php=php php$parentInfophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:METADATAphp]php[php$parentColumnNamephp]php[php'DATAphp_TYPEphp'php]php;
php php php php php php php php php php php php php$nullablephp php=php php$parentInfophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:METADATAphp]php[php$parentColumnNamephp]php[php'NULLABLEphp'php]php;
php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp php&php&php php$nullablephp php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(php"php$parentColumnphp ISphp NULLphp"php)php;
php php php php php php php php php php php php php}php elseifphp php(php$valuephp php=php=php=php nullphp php&php&php php$nullablephp php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(php"php$parentColumnphp php=php php?php"php,php php$valuephp,php php$typephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$parentTablephp-php>fetchRowphp(php$selectphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Dbphp_Tablephp_Abstractphp php php$matchTable
php php php php php php*php php@paramphp php stringphp|Zendphp_Dbphp_Tablephp_Abstractphp php php$intersectionTable
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php OPTIONALphp php$callerRefRule
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php OPTIONALphp php$matchRefRule
php php php php php php*php php@paramphp php Zendphp_Dbphp_Tablephp_Selectphp php php php php php php php php php php OPTIONALphp php$select
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowsetphp_Abstractphp Queryphp resultphp fromphp php$matchTable
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp Ifphp php$matchTablephp orphp php$intersectionTablephp isphp notphp aphp tablephp classphp orphp isphp notphp loadablephp.
php php php php php php*php/
php php php php publicphp functionphp findManyToManyRowsetphp(php$matchTablephp,php php$intersectionTablephp,php php$callerRefRulephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchRefRulephp php=php nullphp,php Zendphp_Dbphp_Tablephp_Selectphp php$selectphp php=php nullphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_getTablephp(php)php-php>getAdapterphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$intersectionTablephp)php)php php{
php php php php php php php php php php php php php$intersectionTablephp php=php php$thisphp-php>php_getTableFromStringphp(php$intersectionTablephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$intersectionTablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$typephp php=php gettypephp(php$intersectionTablephp)php;
php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'objectphp'php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$intersectionTablephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Intersectionphp tablephp mustphp bephp aphp Zendphp_Dbphp_Tablephp_Abstractphp,php butphp itphp isphp php$typephp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php evenphp ifphp wephp arephp interactingphp betweenphp aphp tablephp definedphp inphp aphp classphp andphp a
php php php php php php php php php/php/php tablephp viaphp extensionphp,php ensurephp tophp persistphp thephp definition
php php php php php php php php ifphp php(php(php$tableDefinitionphp php=php php$thisphp-php>php_tablephp-php>getDefinitionphp(php)php)php php!php=php=php null
php php php php php php php php php php php php php&php&php php(php$intersectionTablephp-php>getDefinitionphp(php)php php=php=php nullphp)php)php php{
php php php php php php php php php php php php php$intersectionTablephp-php>setOptionsphp(arrayphp(Zendphp_Dbphp_Tablephp_Abstractphp:php:DEFINITIONphp php=php>php php$tableDefinitionphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$matchTablephp)php)php php{
php php php php php php php php php php php php php$matchTablephp php=php php$thisphp-php>php_getTableFromStringphp(php$matchTablephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php php$matchTablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$typephp php=php gettypephp(php$matchTablephp)php;
php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'objectphp'php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php getphp_classphp(php$matchTablephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Matchphp tablephp mustphp bephp aphp Zendphp_Dbphp_Tablephp_Abstractphp,php butphp itphp isphp php$typephp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php evenphp ifphp wephp arephp interactingphp betweenphp aphp tablephp definedphp inphp aphp classphp andphp a
php php php php php php php php php/php/php tablephp viaphp extensionphp,php ensurephp tophp persistphp thephp definition
php php php php php php php php ifphp php(php(php$tableDefinitionphp php=php php$thisphp-php>php_tablephp-php>getDefinitionphp(php)php)php php!php=php=php null
php php php php php php php php php php php php php&php&php php(php$matchTablephp-php>getDefinitionphp(php)php php=php=php nullphp)php)php php{
php php php php php php php php php php php php php$matchTablephp-php>setOptionsphp(arrayphp(Zendphp_Dbphp_Tablephp_Abstractphp:php:DEFINITIONphp php=php>php php$tableDefinitionphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$selectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$selectphp php=php php$matchTablephp-php>selectphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$selectphp-php>setTablephp(php$matchTablephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Usephp adapterphp fromphp intersectionphp tablephp tophp ensurephp correctphp queryphp construction
php php php php php php php php php$interInfophp php=php php$intersectionTablephp-php>infophp(php)php;
php php php php php php php php php$interDbphp php php php=php php$intersectionTablephp-php>getAdapterphp(php)php;
php php php php php php php php php$interNamephp php=php php$interInfophp[php'namephp'php]php;
php php php php php php php php php$interSchemaphp php=php issetphp(php$interInfophp[php'schemaphp'php]php)php php?php php$interInfophp[php'schemaphp'php]php php:php nullphp;
php php php php php php php php php$matchInfophp php=php php$matchTablephp-php>infophp(php)php;
php php php php php php php php php$matchNamephp php=php php$matchInfophp[php'namephp'php]php;
php php php php php php php php php$matchSchemaphp php=php issetphp(php$matchInfophp[php'schemaphp'php]php)php php?php php$matchInfophp[php'schemaphp'php]php php:php nullphp;

php php php php php php php php php$matchMapphp php=php php$thisphp-php>php_prepareReferencephp(php$intersectionTablephp,php php$matchTablephp,php php$matchRefRulephp)php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$matchMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php)php;php php+php+php$iphp)php php{
php php php php php php php php php php php php php$interColphp php=php php$interDbphp-php>quoteIdentifierphp(php'iphp'php php.php php'php.php'php php.php php$matchMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php[php$iphp]php,php truephp)php;
php php php php php php php php php php php php php$matchColphp php=php php$interDbphp-php>quoteIdentifierphp(php'mphp'php php.php php'php.php'php php.php php$matchMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php[php$iphp]php,php truephp)php;
php php php php php php php php php php php php php$joinCondphp[php]php php=php php"php$interColphp php=php php$matchColphp"php;
php php php php php php php php php}
php php php php php php php php php$joinCondphp php=php implodephp(php'php ANDphp php'php,php php$joinCondphp)php;

php php php php php php php php php$selectphp-php>fromphp(arrayphp(php'iphp'php php=php>php php$interNamephp)php,php arrayphp(php)php,php php$interSchemaphp)
php php php php php php php php php php php php php php php php-php>joinInnerphp(arrayphp(php'mphp'php php=php>php php$matchNamephp)php,php php$joinCondphp,php Zendphp_Dbphp_Selectphp:php:SQLphp_WILDCARDphp,php php$matchSchemaphp)
php php php php php php php php php php php php php php php php-php>setIntegrityCheckphp(falsephp)php;

php php php php php php php php php$callerMapphp php=php php$thisphp-php>php_prepareReferencephp(php$intersectionTablephp,php php$thisphp-php>php_getTablephp(php)php,php php$callerRefRulephp)php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$callerMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php)php;php php+php+php$iphp)php php{
php php php php php php php php php php php php php$callerColumnNamephp php=php php$dbphp-php>foldCasephp(php$callerMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:REFphp_COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_dataphp[php$callerColumnNamephp]php;
php php php php php php php php php php php php php$interColumnNamephp php=php php$interDbphp-php>foldCasephp(php$callerMapphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLUMNSphp]php[php$iphp]php)php;
php php php php php php php php php php php php php$interColphp php=php php$interDbphp-php>quoteIdentifierphp(php"iphp.php$interColumnNamephp"php,php truephp)php;
php php php php php php php php php php php php php$interInfophp php=php php$intersectionTablephp-php>infophp(php)php;
php php php php php php php php php php php php php$typephp php=php php$interInfophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:METADATAphp]php[php$interColumnNamephp]php[php'DATAphp_TYPEphp'php]php;
php php php php php php php php php php php php php$selectphp-php>wherephp(php$interDbphp-php>quoteIntophp(php"php$interColphp php=php php?php"php,php php$valuephp,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php php$stmtphp php=php php$selectphp-php>queryphp(php)php;

php php php php php php php php php$configphp php=php arrayphp(
php php php php php php php php php php php php php'tablephp'php php php php php=php>php php$matchTablephp,
php php php php php php php php php php php php php'dataphp'php php php php php php=php>php php$stmtphp-php>fetchAllphp(Zendphp_Dbphp:php:FETCHphp_ASSOCphp)php,
php php php php php php php php php php php php php'rowClassphp'php php=php>php php$matchTablephp-php>getRowClassphp(php)php,
php php php php php php php php php php php php php'readOnlyphp'php php=php>php falsephp,
php php php php php php php php php php php php php'storedphp'php php php php=php>php true
php php php php php php php php php)php;

php php php php php php php php php$rowsetClassphp php=php php$matchTablephp-php>getRowsetClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$rowsetClassphp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$rowsetClassphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$rowsetphp php=php newphp php$rowsetClassphp(php$configphp)php;
php php php php php php php php returnphp php$rowsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Turnphp magicphp functionphp callsphp intophp nonphp-magicphp functionphp calls
php php php php php php*php tophp thephp abovephp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php$argsphp OPTIONALphp Zendphp_Dbphp_Tablephp_Selectphp queryphp modifier
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Rowphp_Abstractphp|Zendphp_Dbphp_Tablephp_Rowsetphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp Ifphp anphp invalidphp methodphp isphp calledphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php php$matchesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(countphp(php$argsphp)php php&php&php php$argsphp[php0php]php instanceofphp Zendphp_Dbphp_Tablephp_Selectphp)php php{
php php php php php php php php php php php php php$selectphp php=php php$argsphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$selectphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Recognizephp methodsphp forphp Hasphp-Manyphp casesphp:
php php php php php php php php php php*php findParentphp<Classphp>php(php)
php php php php php php php php php php*php findParentphp<Classphp>Byphp<Rulephp>php(php)
php php php php php php php php php php*php Usephp thephp nonphp-greedyphp patternphp repeatphp modifierphp ephp.gphp.php php\wphp+php?
php php php php php php php php php php*php/
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^findParentphp(php\wphp+php?php)php(php?php:Byphp(php\wphp+php)php)php?php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$classphp php php php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php$ruleKeyphp1php php=php issetphp(php$matchesphp[php2php]php)php php?php php$matchesphp[php2php]php php:php nullphp;
php php php php php php php php php php php php returnphp php$thisphp-php>findParentRowphp(php$classphp,php php$ruleKeyphp1php,php php$selectphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Recognizephp methodsphp forphp Manyphp-tophp-Manyphp casesphp:
php php php php php php php php php php*php findphp<Classphp1php>Viaphp<Classphp2php>php(php)
php php php php php php php php php php*php findphp<Classphp1php>Viaphp<Classphp2php>Byphp<Rulephp>php(php)
php php php php php php php php php php*php findphp<Classphp1php>Viaphp<Classphp2php>Byphp<Rulephp1php>Andphp<Rulephp2php>php(php)
php php php php php php php php php php*php Usephp thephp nonphp-greedyphp patternphp repeatphp modifierphp ephp.gphp.php php\wphp+php?
php php php php php php php php php php*php/
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^findphp(php\wphp+php?php)Viaphp(php\wphp+php?php)php(php?php:Byphp(php\wphp+php?php)php(php?php:Andphp(php\wphp+php)php)php?php)php?php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$classphp php php php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php$viaClassphp php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php$ruleKeyphp1php php=php issetphp(php$matchesphp[php3php]php)php php?php php$matchesphp[php3php]php php:php nullphp;
php php php php php php php php php php php php php$ruleKeyphp2php php=php issetphp(php$matchesphp[php4php]php)php php?php php$matchesphp[php4php]php php:php nullphp;
php php php php php php php php php php php php returnphp php$thisphp-php>findManyToManyRowsetphp(php$classphp,php php$viaClassphp,php php$ruleKeyphp1php,php php$ruleKeyphp2php,php php$selectphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Recognizephp methodsphp forphp Belongsphp-Tophp casesphp:
php php php php php php php php php php*php findphp<Classphp>php(php)
php php php php php php php php php php*php findphp<Classphp>Byphp<Rulephp>php(php)
php php php php php php php php php php*php Usephp thephp nonphp-greedyphp patternphp repeatphp modifierphp ephp.gphp.php php\wphp+php?
php php php php php php php php php php*php/
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^findphp(php\wphp+php?php)php(php?php:Byphp(php\wphp+php)php)php?php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$classphp php php php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php$ruleKeyphp1php php=php issetphp(php$matchesphp[php2php]php)php php?php php$matchesphp[php2php]php php:php nullphp;
php php php php php php php php php php php php returnphp php$thisphp-php>findDependentRowsetphp(php$classphp,php php$ruleKeyphp1php,php php$selectphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php"Unrecognizedphp methodphp php'php$methodphp(php)php'php"php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_getTableFromString
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php/
php php php php protectedphp functionphp php_getTableFromStringphp(php$tableNamephp)
php php php php php{

php php php php php php php php ifphp php(php$thisphp-php>php_tablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$tableDefinitionphp php=php php$thisphp-php>php_tablephp-php>getDefinitionphp(php)php;

php php php php php php php php php php php php ifphp php(php$tableDefinitionphp php!php=php=php nullphp php&php&php php$tableDefinitionphp-php>hasTableConfigphp(php$tableNamephp)php)php php{
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Dbphp_Tablephp(php$tableNamephp,php php$tableDefinitionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php assumephp thephp tableNamephp isphp thephp classphp name
php php php php php php php php ifphp php(php!classphp_existsphp(php$tableNamephp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$tableNamephp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Rowphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Rowphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php(php$tablephp php=php php$thisphp-php>php_getTablephp(php)php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'dbphp'php]php php=php php$tablephp-php>getAdapterphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$tableDefinitionphp)php php&php&php php$tableDefinitionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp[Zendphp_Dbphp_Tablephp_Abstractphp:php:DEFINITIONphp]php php=php php$tableDefinitionphp;
php php php php php php php php php}

php php php php php php php php returnphp newphp php$tableNamephp(php$optionsphp)php;
php php php php php}

php}
