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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Logphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Logphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Logphp_FactoryInterfacephp php*php/
requirephp_oncephp php'Zendphp/Logphp/FactoryInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
abstractphp classphp Zendphp_Logphp_Filterphp_Abstract
php php php php implementsphp Zendphp_Logphp_Filterphp_Interfacephp,php Zendphp_Logphp_FactoryInterface
php{
php php php php php/php*php*
php php php php php php*php Validatephp andphp optionallyphp convertphp thephp configphp tophp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$configphp Zendphp_Configphp orphp Array
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php staticphp protectedphp functionphp php_parseConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Configurationphp mustphp bephp anphp arrayphp orphp instancephp ofphp Zendphp_Configphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$configphp;
php php php php php}
php}
