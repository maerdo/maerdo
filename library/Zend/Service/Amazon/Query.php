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
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Queryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazon
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Queryphp extendsphp Zendphp_Servicephp_Amazon
php{
php php php php php/php*php*
php php php php php php*php Searchphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_searchphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Searchphp index
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_searchIndexphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Preparesphp queryphp parameters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php php$args
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Queryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(strtolowerphp(php$methodphp)php php=php=php=php php'asinphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_searchIndexphp php=php php'asinphp'php;
php php php php php php php php php php php php php$thisphp-php>php_searchphp[php'ItemIdphp'php]php php=php php$argsphp[php0php]php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(strtolowerphp(php$methodphp)php php=php=php=php php'categoryphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_searchIndexphp php=php php$argsphp[php0php]php;
php php php php php php php php php php php php php$thisphp-php>php_searchphp[php'SearchIndexphp'php]php php=php php$argsphp[php0php]php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$thisphp-php>php_searchphp[php'SearchIndexphp'php]php)php php|php|php php$thisphp-php>php_searchIndexphp php!php=php=php nullphp php|php|php php$thisphp-php>php_searchIndexphp php=php=php=php php'asinphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_searchphp[php$methodphp]php php=php php$argsphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Youphp mustphp setphp aphp categoryphp beforephp settingphp thephp searchphp parametersphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Searchphp usingphp thephp preparedphp query
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Itemphp|Zendphp_Servicephp_Amazonphp_ResultSet
php php php php php php*php/
php php php php publicphp functionphp searchphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_searchIndexphp php=php=php=php php'asinphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>itemLookupphp(php$thisphp-php>php_searchphp[php'ItemIdphp'php]php,php php$thisphp-php>php_searchphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>itemSearchphp(php$thisphp-php>php_searchphp)php;
php php php php php}
php}
