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
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Priorityphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Filterphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Filterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Priorityphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Filterphp_Priorityphp extendsphp Zendphp_Logphp_Filterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_priorityphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_operatorphp;

php php php php php/php*php*
php php php php php php*php Filterphp loggingphp byphp php$priorityphp.php php Byphp defaultphp,php itphp willphp acceptphp anyphp log
php php php php php php*php eventphp whosephp priorityphp valuephp isphp lessphp thanphp orphp equalphp tophp php$priorityphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php$priorityphp php Priority
php php php php php php*php php@paramphp php stringphp php php php$operatorphp php Comparisonphp operator
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$priorityphp,php php$operatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php isphp_intphp(php$priorityphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Priorityphp mustphp bephp anphp integerphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_priorityphp php=php php$priorityphp;
php php php php php php php php php$thisphp-php>php_operatorphp php=php php$operatorphp php=php=php=php nullphp php?php php'<php=php'php php:php php$operatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Filterphp_Priority
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Filterphp_Priority
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php php$configphp php=php selfphp:php:php_parseConfigphp(php$configphp)php;
php php php php php php php php php$configphp php=php arrayphp_mergephp(arrayphp(
php php php php php php php php php php php php php'priorityphp'php php=php>php nullphp,
php php php php php php php php php php php php php'operatorphp'php php=php>php nullphp,
php php php php php php php php php)php,php php$configphp)php;

php php php php php php php php php/php/php Addphp supportphp forphp constants
php php php php php php php php ifphp php(php!isphp_numericphp(php$configphp[php'priorityphp'php]php)php php&php&php issetphp(php$configphp[php'priorityphp'php]php)php php&php&php definedphp(php$configphp[php'priorityphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'priorityphp'php]php php=php constantphp(php$configphp[php'priorityphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp selfphp(
php php php php php php php php php php php php php(intphp)php php$configphp[php'priorityphp'php]php,
php php php php php php php php php php php php php$configphp[php'operatorphp'php]
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp tophp acceptphp thephp messagephp,php FALSEphp tophp blockphp itphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php$eventphp php php php eventphp data
php php php php php php*php php@returnphp booleanphp php php php php php php php php php php php acceptedphp?
php php php php php php*php/
php php php php publicphp functionphp acceptphp(php$eventphp)
php php php php php{
php php php php php php php php returnphp versionphp_comparephp(php$eventphp[php'priorityphp'php]php,php php$thisphp-php>php_priorityphp,php php$thisphp-php>php_operatorphp)php;
php php php php php}
php}
