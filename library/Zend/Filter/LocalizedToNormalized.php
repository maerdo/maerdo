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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php LocalizedToNormalizedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Localephp/Formatphp.phpphp'php;

php/php*php*
php php*php Normalizesphp givenphp localizedphp input
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_LocalizedToNormalizedphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'localephp'php php php php php php php=php>php nullphp,
php php php php php php php php php'datephp_formatphp'php php=php>php nullphp,
php php php php php php php php php'precisionphp'php php php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Localephp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp optionsphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php(Optionalphp)php Optionsphp tophp use
php php php php php php*php php@returnphp Zendphp_Filterphp_LocalizedToNormalized
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp php+php php$thisphp-php>php_optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Normalizesphp thephp givenphp input
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Valuephp tophp normalized
php php php php php php*php php@returnphp stringphp|arrayphp Thephp normalizedphp value
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Localephp_Formatphp:php:isNumberphp(php$valuephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Localephp_Formatphp:php:getNumberphp(php$valuephp,php php$thisphp-php>php_optionsphp)php;
php php php php php php php php php}php elsephp ifphp php(php(php$thisphp-php>php_optionsphp[php'datephp_formatphp'php]php php=php=php=php nullphp)php php&php&php php(strposphp(php$valuephp,php php'php:php'php)php php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php/php/php Specialphp casephp,php nophp datephp formatphp specifiedphp,php detectphp timephp input
php php php php php php php php php php php php returnphp Zendphp_Localephp_Formatphp:php:getTimephp(php$valuephp,php php$thisphp-php>php_optionsphp)php;
php php php php php php php php php}php elsephp ifphp php(Zendphp_Localephp_Formatphp:php:checkDateFormatphp(php$valuephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php/php/php Detectphp datephp orphp timephp input
php php php php php php php php php php php php returnphp Zendphp_Localephp_Formatphp:php:getDatephp(php$valuephp,php php$thisphp-php>php_optionsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
