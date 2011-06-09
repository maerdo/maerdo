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
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php UserAuthorizationphp.phpphp php2php0php2php1php7php php2php0php1php0php-php0php1php-php1php2php php1php6php:php0php1php:php5php7Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp.phpphp'php;

php/php*php*php Zendphp_Uriphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Httpphp_UserAuthorizationphp extendsphp Zendphp_Oauthphp_Http
php{
php php php php php/php*php*
php php php php php php*php Generatephp aphp redirectphp URLphp fromphp thephp allowablephp parametersphp andphp configured
php php php php php php*php valuesphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUrlphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php php$thisphp-php>assembleParamsphp(php)php;
php php php php php php php php php$uriphp php php php php=php Zendphp_Uriphp_Httpphp:php:fromStringphp(php$thisphp-php>php_consumerphp-php>getUserAuthorizationUrlphp(php)php)php;

php php php php php php php php php$uriphp-php>setQueryphp(
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp-php>toEncodedQueryStringphp(php$paramsphp)
php php php php php php php php php)php;

php php php php php php php php returnphp php$uriphp-php>getUriphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblephp allphp parametersphp forphp inclusionphp inphp aphp redirectphp URLphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp assembleParamsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php'oauthphp_tokenphp'php php=php>php php$thisphp-php>php_consumerphp-php>getLastRequestTokenphp(php)php-php>getTokenphp(php)php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(php!Zendphp_Oauthphp_Clientphp:php:php$supportsRevisionAphp)php php{
php php php php php php php php php php php php php$callbackphp php=php php$thisphp-php>php_consumerphp-php>getCallbackUrlphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'oauthphp_callbackphp'php]php php=php php$callbackphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_parametersphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$thisphp-php>php_parametersphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$paramsphp;
php php php php php}
php}
