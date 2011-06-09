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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HttpTestCasephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Requestphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Httpphp.phpphp'php;

php/php*php*
php php*php Zendphp_Controllerphp_Requestphp_HttpTestCase
php php*
php php*php HTTPphp requestphp objectphp forphp usephp withphp Zendphp_Controllerphp familyphp.
php php*
php php*php php@usesphp Zendphp_Controllerphp_Requestphp_Http
php php*php php@packagephp Zendphp_Controller
php php*php php@subpackagephp Request
php php*php/
classphp Zendphp_Controllerphp_Requestphp_HttpTestCasephp extendsphp Zendphp_Controllerphp_Requestphp_Http
php{
php php php php php/php*php*
php php php php php php*php Requestphp headers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Requestphp method
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodphp php=php php'GETphp'php;

php php php php php/php*php*
php php php php php php*php Rawphp POSTphp body
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_rawBodyphp;

php php php php php/php*php*
php php php php php php*php Validphp requestphp methodphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validMethodTypesphp php=php arrayphp(
php php php php php php php php php'DELETEphp'php,
php php php php php php php php php'GETphp'php,
php php php php php php php php php'HEADphp'php,
php php php php php php php php php'OPTIONSphp'php,
php php php php php php php php php'POSTphp'php,
php php php php php php php php php'PUTphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Clearphp GETphp values
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp clearQueryphp(php)
php php php php php{
php php php php php php php php php$php_GETphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp POSTphp values
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp clearPostphp(php)
php php php php php{
php php php php php php php php php$php_POSTphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rawphp POSTphp body
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp setRawBodyphp(php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rawBodyphp php=php php(stringphp)php php$contentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp RAWphp POSTphp body
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getRawBodyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rawBodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp rawphp POSTphp body
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp clearRawBodyphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rawBodyphp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp cookie
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp setCookiephp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$php_COOKIEphp[php(stringphp)php php$keyphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp cookiesphp atphp once
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$cookies
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setCookiesphp(arrayphp php$cookiesphp)
php php php php php{
php php php php php php php php foreachphp php(php$cookiesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$php_COOKIEphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp cookies
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp clearCookiesphp(php)
php php php php php{
php php php php php php php php php$php_COOKIEphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(trimphp(php(stringphp)php php$typephp)php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_validMethodTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp requestphp methodphp specifiedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_methodphp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp method
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp requestphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_normalizeHeaderNamephp(php$keyphp)php;
php php php php php php php php php$thisphp-php>php_headersphp[php$keyphp]php php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp headers
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$headers
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp setHeadersphp(arrayphp php$headersphp)
php php php php php{
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setHeaderphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@paramphp php mixedphp php$default
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$headerphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php php$headerphp php=php php$thisphp-php>php_normalizeHeaderNamephp(php$headerphp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$headerphp,php php$thisphp-php>php_headersphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_headersphp[php$headerphp]php;
php php php php php php php php php}
php php php php php php php php returnphp php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp requestphp headers
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp requestphp headers
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_HttpTestCase
php php php php php php*php/
php php php php publicphp functionphp clearHeadersphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp REQUESTphp_URI
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getRequestUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp aphp headerphp namephp forphp settingphp andphp retrieval
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeHeaderNamephp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php strtoupperphp(php(stringphp)php php$namephp)php;
php php php php php php php php php$namephp php=php strphp_replacephp(php'php-php'php,php php'php_php'php,php php$namephp)php;
php php php php php php php php returnphp php$namephp;
php php php php php}
php}
