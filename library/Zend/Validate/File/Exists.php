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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Existsphp.phpphp php2php0php3php5php2php php2php0php1php0php-php0php1php-php1php7php php1php7php:php5php5php:php3php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp whichphp checksphp ifphp thephp filephp alreadyphp existsphp inphp thephp directory
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Existsphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp DOESphp_NOTphp_EXISTphp php=php php'fileExistsDoesNotExistphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:DOESphp_NOTphp_EXISTphp php=php>php php"Filephp php'php%valuephp%php'php doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp listphp ofphp directories
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_directoryphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templatephp variables
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'directoryphp'php php=php>php php'php_directoryphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$directory
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$directoryphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$directoryphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$directoryphp php=php php$directoryphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$directoryphp)php)php php{
php php php php php php php php php php php php php$directoryphp php=php explodephp(php'php,php'php,php php$directoryphp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$directoryphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setDirectoryphp(php$directoryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp filephp directoriesphp whichphp arephp checked
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$asArrayphp Returnsphp thephp valuesphp asphp arrayphp,php whenphp falsephp anphp concatedphp stringphp isphp returned
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDirectoryphp(php$asArrayphp php=php falsephp)
php php php php php{
php php php php php php php php php$asArrayphp php php php=php php(boolphp)php php$asArrayphp;
php php php php php php php php php$directoryphp php=php php(stringphp)php php$thisphp-php>php_directoryphp;
php php php php php php php php ifphp php(php$asArrayphp)php php{
php php php php php php php php php php php php php$directoryphp php=php explodephp(php'php,php'php,php php$directoryphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$directoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp filephp directoryphp whichphp willphp bephp checked
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$directoryphp Thephp directoriesphp tophp validate
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setDirectoryphp(php$directoryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_directoryphp php=php nullphp;
php php php php php php php php php$thisphp-php>addDirectoryphp(php$directoryphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp filephp directoryphp whichphp willphp bephp checked
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$directoryphp Thephp directoryphp tophp addphp forphp validation
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addDirectoryphp(php$directoryphp)
php php php php php{
php php php php php php php php php$directoriesphp php=php php$thisphp-php>getDirectoryphp(truephp)php;

php php php php php php php php ifphp php(isphp_stringphp(php$directoryphp)php)php php{
php php php php php php php php php php php php php$directoryphp php=php explodephp(php'php,php'php,php php$directoryphp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$directoryphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$directoryphp asphp php$contentphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$contentphp)php php|php|php php!isphp_stringphp(php$contentphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$directoriesphp[php]php php=php trimphp(php$contentphp)php;
php php php php php php php php php}
php php php php php php php php php$directoriesphp php=php arrayphp_uniquephp(php$directoriesphp)php;

php php php php php php php php php/php/php Sanityphp checkphp tophp ensurephp nophp emptyphp values
php php php php php php php php foreachphp php(php$directoriesphp asphp php$keyphp php=php>php php$dirphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$directoriesphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_directoryphp php=php implodephp(php'php,php'php,php php$directoriesphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp filephp alreadyphp existsphp inphp thephp setphp directories
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp Realphp filephp tophp checkphp forphp existance
php php php php php php*php php@paramphp php arrayphp php php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php$directoriesphp php=php php$thisphp-php>getDirectoryphp(truephp)php;
php php php php php php php php ifphp php(php(php$filephp php!php=php=php nullphp)php andphp php(php!emptyphp(php$filephp[php'destinationphp'php]php)php)php)php php{
php php php php php php php php php php php php php$directoriesphp[php]php php=php php$filephp[php'destinationphp'php]php;
php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php$filephp[php'namephp'php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php php$checkphp php=php falsephp;
php php php php php php php php foreachphp php(php$directoriesphp asphp php$directoryphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$directoryphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$checkphp php=php truephp;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$directoryphp php.php DIRECTORYphp_SEPARATORphp php.php php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:DOESphp_NOTphp_EXISTphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$checkphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:DOESphp_NOTphp_EXISTphp)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp errorphp ofphp thephp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@paramphp php stringphp php$errorType
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php protectedphp functionphp php_throwphp(php$filephp,php php$errorTypephp)
php php php php php{
php php php php php php php php ifphp php(php$filephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
