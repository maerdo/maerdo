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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php GreaterThanphp.phpphp php2php0php3php5php2php php2php0php1php0php-php0php1php-php1php7php php1php7php:php5php5php:php3php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_GreaterThanphp extendsphp Zendphp_Validatephp_Abstract
php{

php php php php constphp NOTphp_GREATERphp php=php php'notGreaterThanphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTphp_GREATERphp php=php>php php"php'php%valuephp%php'php isphp notphp greaterphp thanphp php'php%minphp%php'php"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minphp'php php=php>php php'php_minphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp value
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php mixedphp|Zendphp_Configphp php$min
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$minphp)
php php php php php{
php php php php php php php php ifphp php(php$minphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$minphp php=php php$minphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$minphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'minphp'php,php php$minphp)php)php php{
php php php php php php php php php php php php php php php php php$minphp php=php php$minphp[php'minphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Missingphp optionphp php'minphp'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setMinphp(php$minphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minphp option
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getMinphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_minphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minphp option
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$min
php php php php php php*php php@returnphp Zendphp_Validatephp_GreaterThanphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMinphp(php$minphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_minphp php=php php$minphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp greaterphp thanphp minphp option
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_minphp php>php=php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_GREATERphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php}
