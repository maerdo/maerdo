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
php php*php php@versionphp php php php php$Idphp:php LowerCasephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_StringToLower
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/StringToLowerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Filephp_LowerCasephp extendsphp Zendphp_Filterphp_StringToLower
php{
php php php php php/php*php*
php php php php php php*php Addsphp optionsphp tophp thephp filterphp atphp initiation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Doesphp aphp lowercasephp onphp thephp contentphp ofphp thephp givenphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Fullphp pathphp ofphp filephp tophp change
php php php php php php*php php@returnphp stringphp Thephp givenphp php$value
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Filephp php'php$valuephp'php notphp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_writablephp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Filephp php'php$valuephp'php isphp notphp writablephp"php)php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php filephp_getphp_contentsphp(php$valuephp)php;
php php php php php php php php ifphp php(php!php$contentphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Problemphp whilephp readingphp filephp php'php$valuephp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php parentphp:php:filterphp(php$contentphp)php;
php php php php php php php php php$resultphp php php=php filephp_putphp_contentsphp(php$valuephp,php php$contentphp)php;

php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Problemphp whilephp writingphp filephp php'php$valuephp'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
