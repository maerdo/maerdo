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
php php*php php@subpackagephp Twitter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Searchphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Json
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feed
php php*php/
requirephp_oncephp php'Zendphp/Feedphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Twitter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Servicephp_Twitterphp_Searchphp extendsphp Zendphp_Restphp_Client
php{
php php php php php/php*php*
php php php php php php*php Returnphp Type
php php php php php php*php php@varphp String
php php php php php php*php/
php php php php protectedphp php$php_responseTypephp php=php php'jsonphp'php;

php php php php php/php*php*
php php php php php php*php Responsephp Formatphp Types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_responseTypesphp php=php arrayphp(
php php php php php php php php php'atomphp'php,
php php php php php php php php php'jsonphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Uriphp Compoent
php php php php php php*
php php php php php php*php php@varphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php protectedphp php$php_uriphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$returnType
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$responseTypephp php=php php'jsonphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>setResponseTypephp(php$responseTypephp)php;
php php php php php php php php php$thisphp-php>setUriphp(php"httpphp:php/php/searchphp.twitterphp.comphp"php)php;

php php php php php php php php php$thisphp-php>setHeadersphp(php'Acceptphp-Charsetphp'php,php php'ISOphp-php8php8php5php9php-php1php,utfphp-php8php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp responseType
php php php php php php*
php php php php php php*php php@paramphp stringphp php$responseType
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Twitterphp_Search
php php php php php php*php/
php php php php publicphp functionphp setResponseTypephp(php$responseTypephp php=php php'jsonphp'php)
php php php php php{
php php php php php php php php ifphp(php!inphp_arrayphp(php$responseTypephp,php php$thisphp-php>php_responseTypesphp,php TRUEphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(php'Invalidphp Responsephp Typephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_responseTypephp php=php php$responseTypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp responseType
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getResponseTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responseTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp twitterphp trendsphp.php php Currnetlyphp onlyphp supportsphp jsonphp asphp thephp returnphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp trendsphp(php)
php php php php php{
php php php php php php php php php$responsephp php php php php php=php php$thisphp-php>restGetphp(php'php/trendsphp.jsonphp'php)php;

php php php php php php php php returnphp Zendphp_Jsonphp:php:decodephp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp aphp Twitterphp searchphp queryphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp searchphp(php$queryphp,php arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{

php php php php php php php php php$php_queryphp php=php arrayphp(php)php;

php php php php php php php php php$php_queryphp[php'qphp'php]php php=php php$queryphp;

php php php php php php php php foreachphp(php$paramsphp asphp php$keyphp=php>php$paramphp)php php{
php php php php php php php php php php php php switchphp(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'geocodephp'php:
php php php php php php php php php php php php php php php php casephp php'langphp'php:
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_queryphp[php$keyphp]php php=php php$paramphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rppphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_queryphp[php$keyphp]php php=php php(intvalphp(php$paramphp)php php>php php1php0php0php)php php?php php1php0php0php php:php intvalphp(php$paramphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_queryphp[php$keyphp]php php=php intvalphp(php$paramphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'showphp_userphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_queryphp[php$keyphp]php php=php php'truephp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>restGetphp(php'php/searchphp.php'php php.php php$thisphp-php>php_responseTypephp,php php$php_queryphp)php;

php php php php php php php php switchphp(php$thisphp-php>php_responseTypephp)php php{
php php php php php php php php php php php php casephp php'jsonphp'php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Jsonphp:php:decodephp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'atomphp'php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Feedphp:php:importStringphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php;
php php php php php}
php}
