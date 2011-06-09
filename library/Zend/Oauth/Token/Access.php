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
php php*php php@versionphp php php php php$Idphp:php Accessphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Tokenphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Tokenphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp.phpphp'php;

php/php*php*php Zendphp_Uriphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Clientphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Tokenphp_Accessphp extendsphp Zendphp_Oauthphp_Token
php{
php php php php php/php*php*
php php php php php php*php Castphp tophp HTTPphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$config
php php php php php php*php php@paramphp php nullphp|arrayphp php$customParams
php php php php php php*php php@paramphp php nullphp|stringphp php$realm
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toHeaderphp(
php php php php php php php php php$urlphp,php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$configphp,php arrayphp php$customParamsphp php=php nullphp,php php$realmphp php=php null
php php php php php)php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_httpUtilityphp-php>assembleParamsphp(php$urlphp,php php$configphp,php php$customParamsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_httpUtilityphp-php>toAuthorizationHeaderphp(php$paramsphp,php php$realmphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp HTTPphp queryphp string
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$url
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$config
php php php php php php*php php@paramphp php nullphp|arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toQueryStringphp(php$urlphp,php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$configphp,php arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_httpUtilityphp-php>assembleParamsphp(php$urlphp,php php$configphp,php php$paramsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_httpUtilityphp-php>toEncodedQueryStringphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp OAuthphp client
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$oauthOptions
php php php php php php*php php@paramphp php nullphp|stringphp php$uri
php php php php php php*php php@paramphp php nullphp|arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@paramphp php boolphp php$excludeCustomParamsFromHeader
php php php php php php*php php@returnphp Zendphp_Oauthphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(arrayphp php$oauthOptionsphp,php php$uriphp php=php nullphp,php php$configphp php=php nullphp,php php$excludeCustomParamsFromHeaderphp php=php truephp)
php php php php php{
php php php php php php php php php$clientphp php=php newphp Zendphp_Oauthphp_Clientphp(php$oauthOptionsphp,php php$uriphp,php php$configphp,php php$excludeCustomParamsFromHeaderphp)php;
php php php php php php php php php$clientphp-php>setTokenphp(php$thisphp)php;
php php php php php php php php returnphp php$clientphp;
php php php php php}
php}
