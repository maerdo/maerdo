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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php LocalSearchResponsephp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/BaseTypephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponseType
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/LocalSearchphp/LocalSearchResponseTypephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponse
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php{
php php php php php/php*php*
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponseType
php php php php php php*php/
php php php php publicphp php$searchResultphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponseTypephp php$response
php php php php php php*php php@todophp implementphp specialphp resultphp methods
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(
php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponseTypephp php$response
php php php php php)php php{
php php php php php php php php php$thisphp-php>errorCodephp php php php php php=php php$responsephp-php>getErrorCodephp(php)php;
php php php php php php php php php$thisphp-php>errorMessagephp php php=php php$responsephp-php>getErrorMessagephp(php)php;
php php php php php php php php php$thisphp-php>statusCodephp php php php php=php php$responsephp-php>getStatusCodephp(php)php;
php php php php php php php php php$thisphp-php>statusMessagephp php=php php$responsephp-php>getStatusMessagephp(php)php;
php php php php php php php php php$thisphp-php>searchResultphp php php=php php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp rawphp searchphp result
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_LocalSearchphp_LocalSearchResponseType
php php php php php php*php/
php php php php publicphp functionphp getSearchResultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>searchResultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php overwritephp hasErrorphp tophp notphp handlephp php0php1php0php3php errorphp php(emptyphp resultphp)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasErrorphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php parentphp:php:hasErrorphp(php)php;
php php php php php php php php ifphp php(php!php$resultphp php&php&php php$thisphp-php>statusCodephp php=php=php php'php0php1php0php3php'php)php php{
php php php php php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
