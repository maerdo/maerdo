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
php php*php php@versionphp php php php php$Idphp:php Amazonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Restphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazon
php{
php php php php php/php*php*
php php php php php php*php Amazonphp Webphp Servicesphp Accessphp Keyphp ID
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$appIdphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_secretKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUriphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp Amazonphp Webphp Servicephp basephp URLsphp,php indexedphp byphp countryphp code
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_baseUriListphp php=php arrayphp(php'USphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.comphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UKphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.cophp.ukphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'DEphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.dephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'JPphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.cophp.jpphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'FRphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.frphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'CAphp'php php=php>php php'httpphp:php/php/webservicesphp.amazonphp.caphp'php)php;

php php php php php/php*php*
php php php php php php*php Referencephp tophp RESTphp clientphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php protectedphp php$php_restphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp Amazonphp Webphp Servicesphp Client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$appIdphp php php php php php php Developerphp'sphp Amazonphp appid
php php php php php php*php php@paramphp php stringphp php$countryCodephp Countryphp codephp forphp Amazonphp servicephp;php mayphp bephp USphp,php UKphp,php DEphp,php JPphp,php FRphp,php CA
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazon
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$appIdphp,php php$countryCodephp php=php php'USphp'php,php php$secretKeyphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>appIdphp php=php php(stringphp)php php$appIdphp;
php php php php php php php php php$thisphp-php>php_secretKeyphp php=php php$secretKeyphp;

php php php php php php php php php$countryCodephp php=php php(stringphp)php php$countryCodephp;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_baseUriListphp[php$countryCodephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Unknownphp countryphp codephp:php php$countryCodephp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_baseUriphp php=php php$thisphp-php>php_baseUriListphp[php$countryCodephp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Searchphp forphp Items
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Optionsphp tophp usephp forphp thephp Searchphp Query
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_ResultSet
php php php php php php*php php@seephp httpphp:php/php/wwwphp.amazonphp.comphp/gpphp/awsphp/sdkphp/mainphp.htmlphp/php1php0php2php-php9php0php4php1php1php1php5php-php9php0php5php7php7php0php9php?sphp=AWSEcommerceServicephp&vphp=php2php0php0php5php-php1php0php-php0php5php&pphp=ApiReferencephp/ItemSearchOperation
php php php php php php*php/
php php php php publicphp functionphp itemSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$thisphp-php>php_baseUriphp)php;

php php php php php php php php php$defaultOptionsphp php=php arrayphp(php'ResponseGroupphp'php php=php>php php'Smallphp'php)php;
php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php'ItemSearchphp'php,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$clientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>restGetphp(php'php/oncaphp/xmlphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_ResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/ResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_ResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Lookphp upphp itemphp(sphp)php byphp ASIN
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$asinphp php php php Amazonphp ASINphp ID
php php php php php php*php php@paramphp php arrayphp php php$optionsphp Queryphp Options
php php php php php php*php php@seephp httpphp:php/php/wwwphp.amazonphp.comphp/gpphp/awsphp/sdkphp/mainphp.htmlphp/php1php0php2php-php9php0php4php1php1php1php5php-php9php0php5php7php7php0php9php?sphp=AWSEcommerceServicephp&vphp=php2php0php0php5php-php1php0php-php0php5php&pphp=ApiReferencephp/ItemLookupOperation
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Itemphp|Zendphp_Servicephp_Amazonphp_ResultSet
php php php php php php*php/
php php php php publicphp functionphp itemLookupphp(php$asinphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$thisphp-php>php_baseUriphp)php;
php php php php php php php php php$clientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;

php php php php php php php php php$defaultOptionsphp php=php arrayphp(php'ResponseGroupphp'php php=php>php php'Smallphp'php)php;
php php php php php php php php php$optionsphp[php'ItemIdphp'php]php php=php php(stringphp)php php$asinphp;
php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php'ItemLookupphp'php,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>restGetphp(php'php/oncaphp/xmlphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.php php$responsephp-php>getStatusphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;
php php php php php php php php php$itemsphp php=php php$xpathphp-php>queryphp(php'php/php/azphp:Itemsphp/azphp:Itemphp'php)php;

php php php php php php php php ifphp php(php$itemsphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Item
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Itemphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_Itemphp(php$itemsphp-php>itemphp(php0php)php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_ResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/ResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_ResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp referencephp tophp thephp RESTphp client
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRestClientphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_restphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_restphp php=php newphp Zendphp_Restphp_Clientphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_restphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp RESTphp client
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Restphp_Client
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazon
php php php php php php*php/
php php php php publicphp functionphp setRestClientphp(Zendphp_Restphp_Clientphp php$clientphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_restphp php=php php$clientphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Preparephp optionsphp forphp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php php php php php php php Actionphp tophp perform
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php php php php php php php Userphp suppliedphp options
php php php php php php*php php@paramphp php arrayphp php php$defaultOptionsphp Defaultphp options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareOptionsphp(php$queryphp,php arrayphp php$optionsphp,php arrayphp php$defaultOptionsphp)
php php php php php{
php php php php php php php php php$optionsphp[php'AWSAccessKeyIdphp'php]php php=php php$thisphp-php>appIdphp;
php php php php php php php php php$optionsphp[php'Servicephp'php]php php php php php php php php php=php php'AWSECommerceServicephp'php;
php php php php php php php php php$optionsphp[php'Operationphp'php]php php php php php php php=php php(stringphp)php php$queryphp;
php php php php php php php php php$optionsphp[php'Versionphp'php]php php php php php php php php php=php php'php2php0php0php5php-php1php0php-php0php5php'php;

php php php php php php php php php/php/php dephp-canonicalizephp outphp sortphp key
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'ResponseGroupphp'php]php)php)php php{
php php php php php php php php php php php php php$responseGroupphp php=php explodephp(php'php,php'php,php php$optionsphp[php'ResponseGroupphp'php]php)php;

php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php'Requestphp'php,php php$responseGroupphp)php)php php{
php php php php php php php php php php php php php php php php php$responseGroupphp[php]php php=php php'Requestphp'php;
php php php php php php php php php php php php php php php php php$optionsphp[php'ResponseGroupphp'php]php php=php implodephp(php'php,php'php,php php$responseGroupphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$defaultOptionsphp,php php$optionsphp)php;

php php php php php php php php ifphp(php$thisphp-php>php_secretKeyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp[php'Timestampphp'php]php php=php gmdatephp(php"Yphp-mphp-dphp\THphp:iphp:sphp\Zphp"php)php;php;
php php php php php php php php php php php php ksortphp(php$optionsphp)php;
php php php php php php php php php php php php php$optionsphp[php'Signaturephp'php]php php=php selfphp:php:computeSignaturephp(php$thisphp-php>php_baseUriphp,php php$thisphp-php>php_secretKeyphp,php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computephp Signaturephp forphp Authenticationphp withphp Amazonphp Productphp Advertisingphp Webservices
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$baseUri
php php php php php php*php php@paramphp php stringphp php$secretKey
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php staticphp publicphp functionphp computeSignaturephp(php$baseUriphp,php php$secretKeyphp,php arrayphp php$optionsphp)
php php php php php{
php php php php php php php php requirephp_oncephp php"Zendphp/Cryptphp/Hmacphp.phpphp"php;

php php php php php php php php php$signaturephp php=php selfphp:php:buildRawSignaturephp(php$baseUriphp,php php$optionsphp)php;
php php php php php php php php returnphp basephp6php4php_encodephp(
php php php php php php php php php php php php Zendphp_Cryptphp_Hmacphp:php:computephp(php$secretKeyphp,php php'shaphp2php5php6php'php,php php$signaturephp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp thephp Rawphp Signaturephp Text
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$baseUri
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php staticphp publicphp functionphp buildRawSignaturephp(php$baseUriphp,php php$optionsphp)
php php php php php{
php php php php php php php php ksortphp(php$optionsphp)php;
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$optionsphp ASphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$paramsphp[php]php php=php php$kphp.php"php=php"php.rawurlencodephp(php$vphp)php;
php php php php php php php php php}

php php php php php php php php returnphp sprintfphp(php"GETphp\nphp%sphp\nphp/oncaphp/xmlphp\nphp%sphp"php,
php php php php php php php php php php php php strphp_replacephp(php'httpphp:php/php/php'php,php php'php'php,php php$baseUriphp)php,
php php php php php php php php php php php php implodephp(php"php&php"php,php php$paramsphp)
php php php php php php php php php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp resultphp forphp errors
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_checkErrorsphp(DOMDocumentphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;

php php php php php php php php ifphp php(php$xpathphp-php>queryphp(php'php/php/azphp:Errorphp'php)php-php>lengthphp php>php=php php1php)php php{
php php php php php php php php php php php php php$codephp php=php php$xpathphp-php>queryphp(php'php/php/azphp:Errorphp/azphp:Codephp/textphp(php)php'php)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php$messagephp php=php php$xpathphp-php>queryphp(php'php/php/azphp:Errorphp/azphp:Messagephp/textphp(php)php'php)php-php>itemphp(php0php)php-php>dataphp;

php php php php php php php php php php php php switchphp(php$codephp)php php{
php php php php php php php php php php php php php php php php casephp php'AWSphp.ECommerceServicephp.NoExactMatchesphp'php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"php$messagephp php(php$codephp)php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
