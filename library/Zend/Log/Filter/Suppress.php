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
php php*php php@versionphp php php php php$Idphp:php Suppressphp.phpphp php2php2php9php7php7php php2php0php1php0php-php0php9php-php1php9php php1php2php:php4php4php:php0php0Zphp intiilapaphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Logphp/Filterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Suppressphp.phpphp php2php2php9php7php7php php2php0php1php0php-php0php9php-php1php9php php1php2php:php4php4php:php0php0Zphp intiilapaphp php$
php php*php/
classphp Zendphp_Logphp_Filterphp_Suppressphp extendsphp Zendphp_Logphp_Filterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_acceptphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Thisphp isphp aphp simplephp booleanphp filterphp.
php php php php php php*
php php php php php php*php Callphp suppressphp(truephp)php tophp suppressphp allphp logphp eventsphp.
php php php php php php*php Callphp suppressphp(falsephp)php tophp acceptphp allphp logphp eventsphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php php$suppressphp php Shouldphp allphp logphp eventsphp bephp suppressedphp?
php php php php php php*php php@returnphp php void
php php php php php php*php/
php php php php publicphp functionphp suppressphp(php$suppressphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_acceptphp php=php php(php!php php$suppressphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp tophp acceptphp thephp messagephp,php FALSEphp tophp blockphp itphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php$eventphp php php php eventphp data
php php php php php php*php php@returnphp booleanphp php php php php php php php php php php php acceptedphp?
php php php php php php*php/
php php php php publicphp functionphp acceptphp(php$eventphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_acceptphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Filterphp_Suppress
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Filterphp_Suppress
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php returnphp newphp selfphp(php)php;
php php php php php}
php}
