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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Currencyphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Currencyphp viewphp helper
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Currencyphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Currencyphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Currency
php php php php php php*php/
php php php php protectedphp php$php_currencyphp;

php php php php php/php*php*
php php php php php php*php Constructorphp forphp manuallyphp handling
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Currencyphp php$currencyphp Instancephp ofphp Zendphp_Currency
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$currencyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$currencyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Currencyphp'php)php)php php{
php php php php php php php php php php php php php php php php php$currencyphp php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Currencyphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setCurrencyphp(php$currencyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Outputphp aphp formattedphp currency
php php php php php php*
php php php php php php*php php@paramphp php integerphp|floatphp php php php php php php php php php php php php php php php php php php php php$valuephp php php php Currencyphp valuephp tophp output
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp|Zendphp_Currencyphp php$currencyphp OPTIONALphp Currencyphp tophp usephp forphp thisphp call
php php php php php php*php php@returnphp stringphp Formattedphp currency
php php php php php php*php/
php php php php publicphp functionphp currencyphp(php$valuephp php=php nullphp,php php$currencyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$currencyphp)php php|php|php php(php$currencyphp instanceofphp Zendphp_Localephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Localephp:php:isLocalephp(php$currencyphp)php)php php{
php php php php php php php php php php php php php php php php php$currencyphp php=php arrayphp(php'localephp'php php=php>php php$currencyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$currencyphp)php)php php{
php php php php php php php php php php php php php$currencyphp php=php arrayphp(php'currencyphp'php php=php>php php$currencyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$currencyphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_currencyphp-php>toCurrencyphp(php$valuephp,php php$currencyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_currencyphp-php>toCurrencyphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp currencyphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Currencyphp|Stringphp|Zendphp_Localephp php$currencyphp Currencyphp tophp use
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp Whenphp nophp orphp aphp falsephp currencyphp wasphp set
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Currency
php php php php php php*php/
php php php php publicphp functionphp setCurrencyphp(php$currencyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$currencyphp instanceofphp Zendphp_Currencyphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Currencyphp.phpphp'php;
php php php php php php php php php php php php php$currencyphp php=php newphp Zendphp_Currencyphp(php$currencyphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_currencyphp php=php php$currencyphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currencyphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Currencyphp|null
php php php php php php*php/
php php php php publicphp functionphp getCurrencyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currencyphp;
php php php php php}
php}
