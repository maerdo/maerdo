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
php php*php php@subpackagephp Formatter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Simplephp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Formatterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Logphp/Formatterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Formatter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Simplephp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Formatterphp_Simplephp implementsphp Zendphp_Logphp_Formatterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_formatphp;

php php php php constphp DEFAULTphp_FORMATphp php=php php'php%timestampphp%php php%priorityNamephp%php php(php%priorityphp%php)php:php php%messagephp%php'php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php php$formatphp php Formatphp specifierphp forphp logphp messages
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$formatphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:DEFAULTphp_FORMATphp php.php PHPphp_EOLphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php isphp_stringphp(php$formatphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Formatphp mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_formatphp php=php php$formatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp dataphp intophp aphp singlephp linephp tophp bephp writtenphp byphp thephp writerphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php$eventphp php php php eventphp data
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php formattedphp linephp tophp writephp tophp thephp log
php php php php php php*php/
php php php php publicphp functionphp formatphp(php$eventphp)
php php php php php{
php php php php php php php php php$outputphp php=php php$thisphp-php>php_formatphp;
php php php php php php php php foreachphp php(php$eventphp asphp php$namephp php=php>php php$valuephp)php php{

php php php php php php php php php php php php ifphp php(php(isphp_objectphp(php$valuephp)php php&php&php php!methodphp_existsphp(php$valuephp,php'php_php_toStringphp'php)php)
php php php php php php php php php php php php php php php php php|php|php isphp_arrayphp(php$valuephp)php)php php{

php php php php php php php php php php php php php php php php php$valuephp php=php gettypephp(php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outputphp php=php strphp_replacephp(php"php%php$namephp%php"php,php php$valuephp,php php$outputphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$outputphp;
php php php php php}

php}
