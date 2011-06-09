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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php HTTPphp Clientphp usedphp tophp queryphp allphp webphp services
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp staticphp php$php_httpClientphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Setsphp thephp HTTPphp clientphp objectphp tophp usephp forphp retrievingphp thephp feedsphp.php php Ifphp none
php php php php php php*php isphp setphp,php thephp defaultphp Zendphp_Httpphp_Clientphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp php$httpClient
php php php php php php*php/
php php php php finalphp publicphp staticphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$httpClientphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_httpClientphp php=php php$httpClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getsphp thephp HTTPphp clientphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php finalphp publicphp staticphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_httpClientphp instanceofphp Zendphp_Httpphp_Clientphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_httpClientphp php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_httpClientphp;
php php php php php}
php}

