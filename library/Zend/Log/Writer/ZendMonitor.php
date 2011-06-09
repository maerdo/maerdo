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
php php*php php@versionphp php php php php$Idphp:php ZendMonitorphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Writerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Writerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ZendMonitorphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Writerphp_ZendMonitorphp extendsphp Zendphp_Logphp_Writerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Isphp Zendphp Monitorphp enabledphp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isEnabledphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Isphp thisphp forphp aphp Zendphp Serverphp intancephp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isZendServerphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'monitorphp_customphp_eventphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isEnabledphp php=php falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'zendphp_monitorphp_customphp_eventphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isZendServerphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Writerphp_ZendMonitor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_ZendMonitor
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php returnphp newphp selfphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp loggingphp tophp thisphp writerphp enabledphp?
php php php php php php*
php php php php php php*php Ifphp thephp Zendphp Monitorphp extensionphp isphp notphp enabledphp,php thisphp logphp writerphp will
php php php php php php*php failphp silentlyphp.php Youphp canphp queryphp thisphp methodphp tophp determinephp ifphp thephp log
php php php php php php*php writerphp isphp enabledphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isEnabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Logphp aphp messagephp tophp thisphp writerphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$eventphp logphp dataphp event
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp writephp(php$eventphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:writephp(php$eventphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp messagephp tophp thephp logphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$eventphp logphp dataphp event
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$eventphp)
php php php php php{
php php php php php php php php php$priorityphp php=php php$eventphp[php'priorityphp'php]php;
php php php php php php php php php$messagephp php php=php php$eventphp[php'messagephp'php]php;
php php php php php php php php unsetphp(php$eventphp[php'priorityphp'php]php,php php$eventphp[php'messagephp'php]php)php;

php php php php php php php php ifphp php(php!emptyphp(php$eventphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isZendServerphp)php php{
php php php php php php php php php php php php php php php php php/php/php Onphp Zendphp Serverphp;php thirdphp argumentphp shouldphp bephp thephp event
php php php php php php php php php php php php php php php php zendphp_monitorphp_customphp_eventphp(php$priorityphp,php php$messagephp,php php$eventphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Onphp Zendphp Platformphp;php thirdphp argumentphp isphp severityphp php-php-php either
php php php php php php php php php php php php php php php php php/php/php php0php orphp php1php php-php-php andphp fourthphp isphp optionalphp php(eventphp)
php php php php php php php php php php php php php php php php php/php/php Severityphp isphp eitherphp php0php php(normalphp)php orphp php1php php(severephp)php;php classifying
php php php php php php php php php php php php php php php php php/php/php noticephp,php infophp,php andphp debugphp asphp php"normalphp"php,php andphp allphp othersphp as
php php php php php php php php php php php php php php php php php/php/php php"severephp"
php php php php php php php php php php php php php php php php monitorphp_customphp_eventphp(php$priorityphp,php php$messagephp,php php(php$priorityphp php>php php4php)php php?php php0php php:php php1php,php php$eventphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php monitorphp_customphp_eventphp(php$priorityphp,php php$messagephp)php;
php php php php php php php php php}
php php php php php}
php}
