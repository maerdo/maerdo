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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Logphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp initializingphp thephp locale
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Log
php php php php extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Log
php php php php php php*php/
php php php php protectedphp php$php_logphp;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Log
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLogphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp logger
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Logphp php$log
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Log
php php php php php php*php/
php php php php publicphp functionphp setLogphp(Zendphp_Logphp php$logphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp php=php php$logphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getLogphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_logphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php php$logphp php=php Zendphp_Logphp:php:factoryphp(php$optionsphp)php;
php php php php php php php php php php php php php$thisphp-php>setLogphp(php$logphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_logphp;
php php php php php}
php}
