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
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DbSelectphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Paginatorphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Paginatorphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Db
php php*php/
requirephp_oncephp php'Zendphp/Dbphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Select
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Selectphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Paginatorphp_Adapterphp_DbSelectphp implementsphp Zendphp_Paginatorphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp rowphp countphp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp ROWphp_COUNTphp_COLUMNphp php=php php'zendphp_paginatorphp_rowphp_countphp'php;

php php php php php/php*php*
php php php php php php*php Thephp COUNTphp query
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php protectedphp php$php_countSelectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Databasephp query
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php protectedphp php$php_selectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Totalphp itemphp count
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_rowCountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Selectphp php$selectphp Thephp selectphp query
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Dbphp_Selectphp php$selectphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_selectphp php=php php$selectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp totalphp rowphp countphp,php eitherphp directlyphp orphp throughphp aphp supplied
php php php php php php*php queryphp.php php Withoutphp settingphp thisphp,php php{php@linkphp getPagesphp(php)php}php selectsphp thephp count
php php php php php php*php asphp aphp subqueryphp php(SELECTphp COUNTphp php.php.php.php FROMphp php(SELECTphp php.php.php.php)php)php.php php Whilephp this
php php php php php php*php yieldsphp anphp accuratephp countphp evenphp withphp queriesphp containingphp clausesphp like
php php php php php php*php LIMITphp,php itphp canphp bephp slowphp inphp somephp circumstancesphp.php php Forphp examplephp,php inphp MySQLphp,
php php php php php php*php subqueriesphp arephp generallyphp slowphp whenphp usingphp thephp InnoDBphp storagephp enginephp.
php php php php php php*php Usersphp arephp thereforephp encouragedphp tophp profilephp theirphp queriesphp tophp find
php php php php php php*php thephp solutionphp thatphp bestphp meetsphp theirphp needsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dbphp_Selectphp|integerphp php$totalRowCountphp Totalphp rowphp countphp integer
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php orphp query
php php php php php php*php php@returnphp Zendphp_Paginatorphp_Adapterphp_DbSelectphp php$this
php php php php php php*php php@throwsphp Zendphp_Paginatorphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setRowCountphp(php$rowCountphp)
php php php php php{
php php php php php php php php ifphp php(php$rowCountphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$columnsphp php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:COLUMNSphp)php;

php php php php php php php php php php php php php$countColumnPartphp php=php php$columnsphp[php0php]php[php1php]php;

php php php php php php php php php php php php ifphp php(php$countColumnPartphp instanceofphp Zendphp_Dbphp_Exprphp)php php{
php php php php php php php php php php php php php php php php php$countColumnPartphp php=php php$countColumnPartphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$rowCountColumnphp php=php php$thisphp-php>php_selectphp-php>getAdapterphp(php)php-php>foldCasephp(selfphp:php:ROWphp_COUNTphp_COLUMNphp)php;

php php php php php php php php php php php php php/php/php Thephp selectphp queryphp canphp containphp onlyphp onephp columnphp,php whichphp shouldphp bephp thephp rowphp countphp column
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php strposphp(php$countColumnPartphp,php php$rowCountColumnphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(php'Rowphp countphp columnphp notphp foundphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp php=php php$rowCountphp-php>queryphp(Zendphp_Dbphp:php:FETCHphp_ASSOCphp)php-php>fetchphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_rowCountphp php=php countphp(php$resultphp)php php>php php0php php?php php$resultphp[php$rowCountColumnphp]php php:php php0php;
php php php php php php php php php}php elsephp ifphp php(isphp_integerphp(php$rowCountphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_rowCountphp php=php php$rowCountphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(php'Invalidphp rowphp countphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp itemsphp forphp aphp pagephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$offsetphp Pagephp offset
php php php php php php*php php@paramphp php integerphp php$itemCountPerPagephp Numberphp ofphp itemsphp perphp page
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getItemsphp(php$offsetphp,php php$itemCountPerPagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_selectphp-php>limitphp(php$itemCountPerPagephp,php php$offsetphp)php;

php php php php php php php php returnphp php$thisphp-php>php_selectphp-php>queryphp(php)php-php>fetchAllphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp rowsphp inphp thephp resultphp setphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_rowCountphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRowCountphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getCountSelectphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rowCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp COUNTphp selectphp objectphp forphp thephp providedphp query
php php php php php php*
php php php php php php*php TODOphp:php Havephp aphp lookphp atphp queriesphp thatphp havephp bothphp GROUPphp BYphp andphp DISTINCTphp specifiedphp.
php php php php php php*php Inphp thatphp usephp-casephp Iphp'mphp expectingphp problemsphp whenphp eitherphp GROUPphp BYphp orphp DISTINCT
php php php php php php*php hasphp onephp columnphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php publicphp functionphp getCountSelectphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Wephp onlyphp needphp tophp generatephp aphp COUNTphp queryphp oncephp.php Itphp willphp notphp changephp for
php php php php php php php php php php*php thisphp instancephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_countSelectphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_countSelectphp;
php php php php php php php php php}

php php php php php php php php php$rowCountphp php=php clonephp php$thisphp-php>php_selectphp;
php php php php php php php php php$rowCountphp-php>php_php_toStringphp(php)php;php php/php/php Workaroundphp forphp ZFphp-php3php7php1php9php andphp related

php php php php php php php php php$dbphp php=php php$rowCountphp-php>getAdapterphp(php)php;

php php php php php php php php php$countColumnphp php=php php$dbphp-php>quoteIdentifierphp(php$dbphp-php>foldCasephp(selfphp:php:ROWphp_COUNTphp_COLUMNphp)php)php;
php php php php php php php php php$countPartphp php php php=php php'COUNTphp(php1php)php ASphp php'php;
php php php php php php php php php$groupPartphp php php php=php nullphp;
php php php php php php php php php$unionPartsphp php php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:UNIONphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp wephp'rephp dealingphp withphp aphp UNIONphp queryphp,php executephp thephp UNIONphp asphp aphp subquery
php php php php php php php php php php*php tophp thephp COUNTphp queryphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!emptyphp(php$unionPartsphp)php)php php{
php php php php php php php php php php php php php$expressionphp php=php newphp Zendphp_Dbphp_Exprphp(php$countPartphp php.php php$countColumnphp)php;

php php php php php php php php php php php php php$rowCountphp php=php php$dbphp-php>selectphp(php)php-php>fromphp(php$rowCountphp,php php$expressionphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$columnPartsphp php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:COLUMNSphp)php;
php php php php php php php php php php php php php$groupPartsphp php php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:GROUPphp)php;
php php php php php php php php php php php php php$havingPartsphp php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:HAVINGphp)php;
php php php php php php php php php php php php php$isDistinctphp php php=php php$rowCountphp-php>getPartphp(Zendphp_Dbphp_Selectphp:php:DISTINCTphp)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Ifphp therephp isphp morephp thanphp onephp columnphp ANDphp itphp'sphp aphp DISTINCTphp queryphp,php more
php php php php php php php php php php php php php php*php thanphp onephp groupphp,php orphp ifphp thephp queryphp hasphp aphp HAVINGphp clausephp,php thenphp take
php php php php php php php php php php php php php php*php thephp originalphp queryphp andphp usephp itphp asphp aphp subqueryphp osphp thephp COUNTphp queryphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php(php$isDistinctphp php&php&php countphp(php$columnPartsphp)php php>php php1php)php php|php|php countphp(php$groupPartsphp)php php>php php1php php|php|php php!emptyphp(php$havingPartsphp)php)php php{
php php php php php php php php php php php php php php php php php$rowCountphp php=php php$dbphp-php>selectphp(php)php-php>fromphp(php$thisphp-php>php_selectphp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$isDistinctphp)php php{
php php php php php php php php php php php php php php php php php$partphp php=php php$columnPartsphp[php0php]php;

php php php php php php php php php php php php php php php php ifphp php(php$partphp[php1php]php php!php=php=php Zendphp_Dbphp_Selectphp:php:SQLphp_WILDCARDphp php&php&php php!php(php$partphp[php1php]php instanceofphp Zendphp_Dbphp_Exprphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$columnphp php=php php$dbphp-php>quoteIdentifierphp(php$partphp[php1php]php,php truephp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$partphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$columnphp php=php php$dbphp-php>quoteIdentifierphp(php$partphp[php0php]php,php truephp)php php.php php'php.php'php php.php php$columnphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$groupPartphp php=php php$columnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php!emptyphp(php$groupPartsphp)php php&php&php php$groupPartsphp[php0php]php php!php=php=php Zendphp_Dbphp_Selectphp:php:SQLphp_WILDCARDphp php&php&
php php php php php php php php php php php php php php php php php php php php php php php php!php(php$groupPartsphp[php0php]php instanceofphp Zendphp_Dbphp_Exprphp)php)php php{
php php php php php php php php php php php php php php php php php$groupPartphp php=php php$dbphp-php>quoteIdentifierphp(php$groupPartsphp[php0php]php,php truephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Ifphp thephp originalphp queryphp hadphp aphp GROUPphp BYphp orphp aphp DISTINCTphp partphp andphp only
php php php php php php php php php php php php php php*php onephp columnphp wasphp specifiedphp,php createphp aphp COUNTphp(DISTINCTphp php)php queryphp instead
php php php php php php php php php php php php php php*php ofphp aphp regularphp COUNTphp queryphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!emptyphp(php$groupPartphp)php)php php{
php php php php php php php php php php php php php php php php php$countPartphp php=php php'COUNTphp(DISTINCTphp php'php php.php php$groupPartphp php.php php'php)php ASphp php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Createphp thephp COUNTphp partphp ofphp thephp query
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$expressionphp php=php newphp Zendphp_Dbphp_Exprphp(php$countPartphp php.php php$countColumnphp)php;

php php php php php php php php php php php php php$rowCountphp-php>resetphp(Zendphp_Dbphp_Selectphp:php:COLUMNSphp)
php php php php php php php php php php php php php php php php php php php php php php-php>resetphp(Zendphp_Dbphp_Selectphp:php:ORDERphp)
php php php php php php php php php php php php php php php php php php php php php php-php>resetphp(Zendphp_Dbphp_Selectphp:php:LIMITphp_OFFSETphp)
php php php php php php php php php php php php php php php php php php php php php php-php>resetphp(Zendphp_Dbphp_Selectphp:php:GROUPphp)
php php php php php php php php php php php php php php php php php php php php php php-php>resetphp(Zendphp_Dbphp_Selectphp:php:DISTINCTphp)
php php php php php php php php php php php php php php php php php php php php php php-php>resetphp(Zendphp_Dbphp_Selectphp:php:HAVINGphp)
php php php php php php php php php php php php php php php php php php php php php php-php>columnsphp(php$expressionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_countSelectphp php=php php$rowCountphp;

php php php php php php php php returnphp php$rowCountphp;
php php php php php}
php}
