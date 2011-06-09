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
php php*php php@subpackagephp Select
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Selectphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Select
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Selectphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Dbphp_Tablephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Abstractphp.phpphp'php;


php/php*php*
php php*php Classphp forphp SQLphp SELECTphp queryphp manipulationphp forphp thephp Zendphp_Dbphp_Tablephp componentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Tablephp_Selectphp extendsphp Zendphp_Dbphp_Select
php{
php php php php php/php*php*
php php php php php php*php Tablephp schemaphp forphp parentphp Zendphp_Dbphp_Tablephp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_infophp;

php php php php php/php*php*
php php php php php php*php Tablephp integrityphp overridephp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_integrityCheckphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Tablephp instancephp thatphp createdphp thisphp selectphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_tablephp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$adapter
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Dbphp_Tablephp_Abstractphp php$tablephp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$tablephp-php>getAdapterphp(php)php)php;

php php php php php php php php php$thisphp-php>setTablephp(php$tablephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp tablephp thatphp createdphp thisphp selectphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getTablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp primaryphp tablephp namephp andphp retrievesphp thephp tablephp schemaphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$adapter
php php php php php php*php php@returnphp Zendphp_Dbphp_Selectphp Thisphp Zendphp_Dbphp_Selectphp objectphp.
php php php php php php*php/
php php php php publicphp functionphp setTablephp(Zendphp_Dbphp_Tablephp_Abstractphp php$tablephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$tablephp-php>getAdapterphp(php)php;
php php php php php php php php php$thisphp-php>php_infophp php php php php=php php$tablephp-php>infophp(php)php;
php php php php php php php php php$thisphp-php>php_tablephp php php php=php php$tablephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp integrityphp checkphp flagphp.
php php php php php php*
php php php php php php*php Settingphp thisphp flagphp tophp falsephp skipsphp thephp checksphp forphp tablephp joinsphp,php allowing
php php php php php php*php php'hybridphp'php tablephp rowsphp tophp bephp createdphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Tablephp_Abstractphp php$adapter
php php php php php php*php php@returnphp Zendphp_Dbphp_Selectphp Thisphp Zendphp_Dbphp_Selectphp objectphp.
php php php php php php*php/
php php php php publicphp functionphp setIntegrityCheckphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_integrityCheckphp php=php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testsphp queryphp tophp determinephp ifphp expressionsphp orphp aliasesphp columnsphp existphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isReadOnlyphp(php)
php php php php php{
php php php php php php php php php$readOnlyphp php=php falsephp;
php php php php php php php php php$fieldsphp php php php=php php$thisphp-php>getPartphp(Zendphp_Dbphp_Tablephp_Selectphp:php:COLUMNSphp)php;
php php php php php php php php php$colsphp php php php php php=php php$thisphp-php>php_infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:COLSphp]php;

php php php php php php php php ifphp php(php!countphp(php$fieldsphp)php)php php{
php php php php php php php php php php php php returnphp php$readOnlyphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$fieldsphp asphp php$columnEntryphp)php php{
php php php php php php php php php php php php php$columnphp php=php php$columnEntryphp[php1php]php;
php php php php php php php php php php php php php$aliasphp php=php php$columnEntryphp[php2php]php;

php php php php php php php php php php php php ifphp php(php$aliasphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$columnphp php=php php$aliasphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php casephp php(php$columnphp php=php=php selfphp:php:SQLphp_WILDCARDphp)php:
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php$columnphp instanceofphp Zendphp_Dbphp_Exprphp)php:
php php php php php php php php php php php php php php php php casephp php(php!inphp_arrayphp(php$columnphp,php php$colsphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$readOnlyphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$readOnlyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp FROMphp tablephp andphp optionalphp columnsphp tophp thephp queryphp.
php php php php php php*
php php php php php php*php Thephp tablephp namephp canphp bephp expressed
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp|Zendphp_Dbphp_Exprphp|Zendphp_Dbphp_Tablephp_Abstractphp php$namephp Thephp tablephp namephp orphp an
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php associativephp arrayphp relating
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tablephp namephp tophp correlation
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php namephp.
php php php php php php*php php@paramphp php arrayphp|stringphp|Zendphp_Dbphp_Exprphp php$colsphp Thephp columnsphp tophp selectphp fromphp thisphp tablephp.
php php php php php php*php php@paramphp php stringphp php$schemaphp Thephp schemaphp namephp tophp specifyphp,php ifphp anyphp.
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Selectphp Thisphp Zendphp_Dbphp_Tablephp_Selectphp objectphp.
php php php php php php*php/
php php php php publicphp functionphp fromphp(php$namephp,php php$colsphp php=php selfphp:php:SQLphp_WILDCARDphp,php php$schemaphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$namephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php php$infophp php=php php$namephp-php>infophp(php)php;
php php php php php php php php php php php php php$namephp php=php php$infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:NAMEphp]php;
php php php php php php php php php php php php ifphp php(issetphp(php$infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:SCHEMAphp]php)php)php php{
php php php php php php php php php php php php php php php php php$schemaphp php=php php$infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:SCHEMAphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>joinInnerphp(php$namephp,php nullphp,php php$colsphp,php php$schemaphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp aphp validationphp onphp thephp selectphp queryphp beforephp passingphp backphp tophp thephp parentphp classphp.
php php php php php php*php Ensuresphp thatphp onlyphp columnsphp fromphp thephp primaryphp Zendphp_Dbphp_Tablephp arephp returnedphp inphp thephp resultphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|nullphp Thisphp objectphp asphp aphp SELECTphp stringphp php(orphp nullphp ifphp aphp stringphp cannotphp bephp producedphp)
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php)
php php php php php{
php php php php php php php php php$fieldsphp php php=php php$thisphp-php>getPartphp(Zendphp_Dbphp_Tablephp_Selectphp:php:COLUMNSphp)php;
php php php php php php php php php$primaryphp php=php php$thisphp-php>php_infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:NAMEphp]php;
php php php php php php php php php$schemaphp php php=php php$thisphp-php>php_infophp[Zendphp_Dbphp_Tablephp_Abstractphp:php:SCHEMAphp]php;


php php php php php php php php ifphp php(countphp(php$thisphp-php>php_partsphp[selfphp:php:UNIONphp]php)php php=php=php php0php)php php{

php php php php php php php php php php php php php/php/php Ifphp nophp fieldsphp arephp specifiedphp wephp assumephp allphp fieldsphp fromphp primaryphp table
php php php php php php php php php php php php ifphp php(php!countphp(php$fieldsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>fromphp(php$primaryphp,php selfphp:php:SQLphp_WILDCARDphp,php php$schemaphp)php;
php php php php php php php php php php php php php php php php php$fieldsphp php=php php$thisphp-php>getPartphp(Zendphp_Dbphp_Tablephp_Selectphp:php:COLUMNSphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$fromphp php=php php$thisphp-php>getPartphp(Zendphp_Dbphp_Tablephp_Selectphp:php:FROMphp)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_integrityCheckphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$fieldsphp asphp php$columnEntryphp)php php{
php php php php php php php php php php php php php php php php php php php php listphp(php$tablephp,php php$columnphp)php php=php php$columnEntryphp;

php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp eachphp columnphp tophp ensurephp itphp onlyphp referencesphp thephp primaryphp table
php php php php php php php php php php php php php php php php php php php php ifphp php(php$columnphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$fromphp[php$tablephp]php)php php|php|php php$fromphp[php$tablephp]php[php'tableNamephp'php]php php!php=php php$primaryphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Selectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dbphp_Tablephp_Selectphp_Exceptionphp(php'Selectphp queryphp cannotphp joinphp withphp anotherphp tablephp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:assemblephp(php)php;
php php php php php}
php}