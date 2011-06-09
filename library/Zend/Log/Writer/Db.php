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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dbphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Writerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Writerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dbphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Writerphp_Dbphp extendsphp Zendphp_Logphp_Writerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Databasephp adapterphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapter
php php php php php php*php/
php php php php privatephp php$php_dbphp;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp logphp tablephp inphp thephp database
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_tablephp;

php php php php php/php*php*
php php php php php php*php Relatesphp databasephp columnsphp namesphp tophp logphp dataphp fieldphp keysphp.
php php php php php php*
php php php php php php*php php@varphp nullphp|array
php php php php php php*php/
php php php php privatephp php$php_columnMapphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Adapterphp php$dbphp php php Databasephp adapterphp instance
php php php php php php*php php@paramphp stringphp php$tablephp php php php php php php php php Logphp tablephp inphp database
php php php php php php*php php@paramphp arrayphp php$columnMap
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$dbphp,php php$tablephp,php php$columnMapphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dbphp php php php php=php php$dbphp;
php php php php php php php php php$thisphp-php>php_tablephp php=php php$tablephp;
php php php php php php php php php$thisphp-php>php_columnMapphp php=php php$columnMapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Writerphp_Db
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Db
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php php$configphp php=php selfphp:php:php_parseConfigphp(php$configphp)php;
php php php php php php php php php$configphp php=php arrayphp_mergephp(arrayphp(
php php php php php php php php php php php php php'dbphp'php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'tablephp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'columnMapphp'php php=php>php nullphp,
php php php php php php php php php)php,php php$configphp)php;

php php php php php php php php ifphp php(issetphp(php$configphp[php'columnmapphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'columnMapphp'php]php php=php php$configphp[php'columnmapphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp newphp selfphp(
php php php php php php php php php php php php php$configphp[php'dbphp'php]php,
php php php php php php php php php php php php php$configphp[php'tablephp'php]php,
php php php php php php php php php php php php php$configphp[php'columnMapphp'php]
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formattingphp isphp notphp possiblephp onphp thisphp writer
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFormatterphp(Zendphp_Logphp_Formatterphp_Interfacephp php$formatterphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(getphp_classphp(php$thisphp)php php.php php'php doesphp notphp supportphp formattingphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp referencephp tophp databasephp adapter
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp shutdownphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dbphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp messagephp tophp thephp logphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$eventphp php eventphp data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$eventphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_dbphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Databasephp adapterphp isphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_columnMapphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataToInsertphp php=php php$eventphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataToInsertphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_columnMapphp asphp php$columnNamephp php=php>php php$fieldKeyphp)php php{
php php php php php php php php php php php php php php php php php$dataToInsertphp[php$columnNamephp]php php=php php$eventphp[php$fieldKeyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dbphp-php>insertphp(php$thisphp-php>php_tablephp,php php$dataToInsertphp)php;
php php php php php}
php}
