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
php php*php php@versionphp php php php php$Idphp:php Oauthphp.phpphp php2php1php0php7php0php php2php0php1php0php-php0php2php-php1php6php php1php4php:php3php4php:php2php5Zphp padraicphp php$
php php*php/

php/php*php*php Zendphp_Httpphp_Clientphp php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauth
php{
php php php php constphp REQUESTphp_SCHEMEphp_HEADERphp php php php php php php=php php'headerphp'php;
php php php php constphp REQUESTphp_SCHEMEphp_POSTBODYphp php php php php=php php'postbodyphp'php;
php php php php constphp REQUESTphp_SCHEMEphp_QUERYSTRINGphp php=php php'querystringphp'php;
php php php php constphp GETphp php php php php php php php php php php php php php php php php php php php php php php php php=php php'GETphp'php;
php php php php constphp POSTphp php php php php php php php php php php php php php php php php php php php php php php php=php php'POSTphp'php;
php php php php constphp PUTphp php php php php php php php php php php php php php php php php php php php php php php php php=php php'PUTphp'php;
php php php php constphp DELETEphp php php php php php php php php php php php php php php php php php php php php php=php php'DELETEphp'php;
php php php php constphp HEADphp php php php php php php php php php php php php php php php php php php php php php php php=php php'HEADphp'php;

php php php php php/php*php*
php php php php php php*php Singletonphp instancephp ifphp requiredphp ofphp thephp HTTPphp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp staticphp php$httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Allowsphp thephp externalphp environmentphp tophp makephp Zendphp_Oauthphp usephp aphp specific
php php php php php php*php Clientphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp php$httpClient
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$httpClientphp)
php php php php php{
php php php php php php php php selfphp:php:php$httpClientphp php=php php$httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp singletonphp instancephp ofphp thephp HTTPphp Clientphp.php Notephp that
php php php php php php*php thephp instancephp isphp resetphp andphp clearedphp ofphp previousphp parametersphp and
php php php php php php*php Authorizationphp headerphp valuesphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp staticphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$httpClientphp)php)php php{
php php php php php php php php php php php php selfphp:php:php$httpClientphp php=php newphp Zendphp_Httpphp_Clientphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$httpClientphp-php>setHeadersphp(php'Authorizationphp'php,php nullphp)php;
php php php php php php php php php php php php selfphp:php:php$httpClientphp-php>resetParametersphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp mechanismphp tophp deletephp thephp entirephp singletonphp HTTPphp Clientphp instance
php php php php php php*php whichphp forcesphp anphp newphp instantiationphp forphp subsequentphp requestsphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearHttpClientphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$httpClientphp php=php nullphp;
php php php php php}
php}
