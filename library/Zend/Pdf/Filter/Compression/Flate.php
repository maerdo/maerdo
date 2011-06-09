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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Flatephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Filterphp_Compressionphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Compressionphp.phpphp'php;

php/php*php*
php php*php Flatephp streamphp filter
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Filterphp_Compressionphp_Flatephp extendsphp Zendphp_Pdfphp_Filterphp_Compression
php{
php php php php php/php*php*
php php php php php php*php Encodephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$dataphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$paramsphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$dataphp php=php selfphp:php:php_applyEncodeParamsphp(php$dataphp,php php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(extensionphp_loadedphp(php'zlibphp'php)php)php php{
php php php php php php php php php php php php php$trackErrorsphp php=php iniphp_getphp(php php"trackphp_errorsphp"php)php;
php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php'php1php'php)php;

php php php php php php php php php php php php ifphp php(php(php$outputphp php=php php@gzcompressphp(php$dataphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php$phpphp_errormsgphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp implementedphp yetphp.php Youphp havephp tophp usephp zlibphp extensionphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$outputphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$dataphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php globalphp php$phpphp_errormsgphp;

php php php php php php php php ifphp php(extensionphp_loadedphp(php'zlibphp'php)php)php php{
php php php php php php php php php php php php php$trackErrorsphp php=php iniphp_getphp(php php"trackphp_errorsphp"php)php;
php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php'php1php'php)php;

php php php php php php php php php php php php ifphp php(php(php$outputphp php=php php@gzuncompressphp(php$dataphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php$phpphp_errormsgphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp implementedphp yetphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:php_applyDecodeParamsphp(php$outputphp,php php$paramsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$outputphp;
php php php php php php php php php}
php php php php php}
php}
