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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@versionphp php php php php$Idphp:php Curlphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Uriphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Interfacephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Stream
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Streamphp.phpphp'php;

php/php*php*
php php*php Anphp adapterphp classphp forphp Zendphp_Httpphp_Clientphp basedphp onphp thephp curlphp extensionphp.
php php*php Curlphp requiresphp libcurlphp.php Seephp forphp fullphp requirementsphp thephp PHPphp manualphp:php httpphp:php/php/phpphp.netphp/curl
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Clientphp_Adapterphp_Curlphp implementsphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp,php Zendphp_Httpphp_Clientphp_Adapterphp_Stream
php{
php php php php php/php*php*
php php php php php php*php Parametersphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Whatphp hostphp/portphp arephp wephp connectedphp tophp?
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_connectedphp_tophp php=php arrayphp(nullphp,php nullphp)php;

php php php php php/php*php*
php php php php php php*php Thephp curlphp sessionphp handle
php php php php php php*
php php php php php php*php php@varphp resourcephp|null
php php php php php php*php/
php php php php protectedphp php$php_curlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp cURLphp optionsphp thatphp shouldphp neverphp bephp overwritten
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_invalidOverwritableCurlOptionsphp;

php php php php php/php*php*
php php php php php php*php Responsephp gottenphp fromphp server
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Streamphp forphp storingphp output
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$outphp_streamphp;

php php php php php/php*php*
php php php php php php*php Adapterphp constructor
php php php php php php*
php php php php php php*php Configphp isphp setphp usingphp setConfigphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'curlphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'cURLphp extensionphp hasphp tophp bephp loadedphp tophp usephp thisphp Zendphp_Httpphp_Clientphp adapterphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_invalidOverwritableCurlOptionsphp php=php arrayphp(
php php php php php php php php php php php php CURLOPTphp_HTTPGETphp,
php php php php php php php php php php php php CURLOPTphp_POSTphp,
php php php php php php php php php php php php CURLOPTphp_PUTphp,
php php php php php php php php php php php php CURLOPTphp_CUSTOMREQUESTphp,
php php php php php php php php php php php php CURLOPTphp_HEADERphp,
php php php php php php php php php php php php CURLOPTphp_RETURNTRANSFERphp,
php php php php php php php php php php php php CURLOPTphp_HTTPHEADERphp,
php php php php php php php php php php php php CURLOPTphp_POSTFIELDSphp,
php php php php php php php php php php php php CURLOPTphp_INFILEphp,
php php php php php php php php php php php php CURLOPTphp_INFILESIZEphp,
php php php php php php php php php php php php CURLOPTphp_PORTphp,
php php php php php php php php php php php php CURLOPTphp_MAXREDIRSphp,
php php php php php php php php php php php php CURLOPTphp_CONNECTTIMEOUTphp,
php php php php php php php php php php php php CURLphp_HTTPphp_VERSIONphp_php1php_php1php,
php php php php php php php php php php php php CURLphp_HTTPphp_VERSIONphp_php1php_php0php,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp configurationphp arrayphp forphp thephp adapter
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exception
php php php php php php*php php@paramphp php Zendphp_Configphp php|php arrayphp php$config
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Curl
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;

php php php php php php php php php}php elseifphp php(php!php isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Arrayphp orphp Zendphp_Configphp objectphp expectedphp,php gotphp php'php php.php gettypephp(php$configphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp(issetphp(php$configphp[php'proxyphp_userphp'php]php)php php&php&php issetphp(php$configphp[php'proxyphp_passphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCurlOptionphp(CURLOPTphp_PROXYUSERPWDphp,php php$configphp[php'proxyphp_userphp'php]php.php"php:php"php.php$configphp[php'proxyphp_passphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$configphp[php'proxyphp_userphp'php]php,php php$configphp[php'proxyphp_passphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$optionphp php=php strtolowerphp(php$kphp)php;
php php php php php php php php php php php php switchphp(php$optionphp)php php{
php php php php php php php php php php php php php php php php casephp php'proxyphp_hostphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCurlOptionphp(CURLOPTphp_PROXYphp,php php$vphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'proxyphp_portphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCurlOptionphp(CURLOPTphp_PROXYPORTphp,php php$vphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php$optionphp]php php=php php$vphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php php*php Retrievephp thephp arrayphp ofphp allphp configurationphp options
php php php php php php php*
php php php php php php php*php php@returnphp array
php php php php php php php*php/
php php php php php publicphp functionphp getConfigphp(php)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_configphp;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Directphp setterphp forphp cURLphp adapterphp relatedphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$option
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Httpphp_Adapterphp_Curl
php php php php php php*php/
php php php php publicphp functionphp setCurlOptionphp(php$optionphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_configphp[php'curloptionsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_configphp[php'curloptionsphp'php]php[php$optionphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp curl
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$host
php php php php php php*php php@paramphp php intphp php php php php php$port
php php php php php php*php php@paramphp php booleanphp php$secure
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp ifphp unablephp tophp connect
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php php8php0php,php php$securephp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Ifphp wephp'rephp alreadyphp connectedphp,php disconnectphp first
php php php php php php php php ifphp php(php$thisphp-php>php_curlphp)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp arephp connectedphp tophp aphp differentphp serverphp orphp portphp,php disconnectphp first
php php php php php php php php ifphp php(php$thisphp-php>php_curl
php php php php php php php php php php php php php&php&php isphp_arrayphp(php$thisphp-php>php_connectedphp_tophp)
php php php php php php php php php php php php php&php&php php(php$thisphp-php>php_connectedphp_tophp[php0php]php php!php=php php$host
php php php php php php php php php php php php php|php|php php$thisphp-php>php_connectedphp_tophp[php1php]php php!php=php php$portphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Dophp thephp actualphp connection
php php php php php php php php php$thisphp-php>php_curlphp php=php curlphp_initphp(php)php;
php php php php php php php php ifphp php(php$portphp php!php=php php8php0php)php php{
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_PORTphp,php intvalphp(php$portphp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp timeout
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_CONNECTTIMEOUTphp,php php$thisphp-php>php_configphp[php'timeoutphp'php]php)php;

php php php php php php php php php/php/php Setphp Maxphp redirects
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_MAXREDIRSphp,php php$thisphp-php>php_configphp[php'maxredirectsphp'php]php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_curlphp)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Unablephp tophp Connectphp tophp php'php php.php php php$hostphp php.php php'php:php'php php.php php$portphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$securephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php Behavephp thephp samephp likephp Zendphp_Httpphp_Adapterphp_Socketphp onphp SSLphp optionsphp.
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'sslcertphp'php]php)php)php php{
php php php php php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_SSLCERTphp,php php$thisphp-php>php_configphp[php'sslcertphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'sslpassphrasephp'php]php)php)php php{
php php php php php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_SSLCERTPASSWDphp,php php$thisphp-php>php_configphp[php'sslpassphrasephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp connectedphp_to
php php php php php php php php php$thisphp-php>php_connectedphp_tophp php=php arrayphp(php$hostphp,php php$portphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp requestphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php$method
php php php php php php*php php@paramphp php Zendphp_Uriphp_Httpphp php$uri
php php php php php php*php php@paramphp php floatphp php php php php php php php php php$httpphp_ver
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php$headers
php php php php php php*php php@paramphp php stringphp php php php php php php php php$body
php php php php php php*php php@returnphp stringphp php php php php php php php php$request
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp Ifphp connectionphp failsphp,php connectedphp tophp wrongphp hostphp,php nophp PUTphp filephp definedphp,php unsupportedphp methodphp,php orphp unsupportedphp cURLphp option
php php php php php php*php/
php php php php publicphp functionphp writephp(php$methodphp,php php$uriphp,php php$httpVersionphp php=php php1php.php1php,php php$headersphp php=php arrayphp(php)php,php php$bodyphp php=php php'php'php)
php php php php php{
php php php php php php php php php/php/php Makephp surephp wephp'rephp properlyphp connected
php php php php php php php php ifphp php(php!php$thisphp-php>php_curlphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Tryingphp tophp writephp butphp wephp arephp notphp connectedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_connectedphp_tophp[php0php]php php!php=php php$uriphp-php>getHostphp(php)php php|php|php php$thisphp-php>php_connectedphp_tophp[php1php]php php!php=php php$uriphp-php>getPortphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Tryingphp tophp writephp butphp wephp arephp connectedphp tophp thephp wrongphp hostphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp URL
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_URLphp,php php$uriphp-php>php_php_toStringphp(php)php)php;

php php php php php php php php php/php/php ensurephp correctphp curlphp call
php php php php php php php php php$curlValuephp php=php truephp;
php php php php php php php php switchphp php(php$methodphp)php php{
php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:GETphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_HTTPGETphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:POSTphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_POSTphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:PUTphp:
php php php php php php php php php php php php php php php php php/php/php Therephp arephp twophp differentphp typesphp ofphp PUTphp requestphp,php eitherphp aphp Rawphp Dataphp stringphp hasphp beenphp set
php php php php php php php php php php php php php php php php php/php/php orphp CURLOPTphp_INFILEphp andphp CURLOPTphp_INFILESIZEphp arephp usedphp.
php php php php php php php php php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILEphp]php php=php php$bodyphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILEphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Nowphp wephp willphp probablyphp alreadyphp havephp Contentphp-Lengthphp setphp,php sophp thatphp wephp havephp tophp deletephp it
php php php php php php php php php php php php php php php php php php php php php/php/php fromphp php$headersphp atphp thisphp pointphp:
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$headersphp ASphp php$kphp php=php>php php$headerphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/Contentphp-Lengthphp:php\sphp*php(php\dphp+php)php/iphp'php,php php$headerphp,php php$mphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILESIZEphp]php php=php php(intphp)php$mphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$headersphp[php$kphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILESIZEphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Cannotphp setphp aphp filephp-handlephp forphp cURLphp optionphp CURLOPTphp_INFILEphp withoutphp alsophp settingphp itsphp sizephp inphp CURLOPTphp_INFILESIZEphp.php"php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$bodyphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_PUTphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_CUSTOMREQUESTphp;
php php php php php php php php php php php php php php php php php php php php php$curlValuephp php=php php"PUTphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:DELETEphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_CUSTOMREQUESTphp;
php php php php php php php php php php php php php php php php php$curlValuephp php=php php"DELETEphp"php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:OPTIONSphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_CUSTOMREQUESTphp;
php php php php php php php php php php php php php php php php php$curlValuephp php=php php"OPTIONSphp"php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:TRACEphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_CUSTOMREQUESTphp;
php php php php php php php php php php php php php php php php php$curlValuephp php=php php"TRACEphp"php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Httpphp_Clientphp:php:HEADphp:
php php php php php php php php php php php php php php php php php$curlMethodphp php=php CURLOPTphp_CUSTOMREQUESTphp;
php php php php php php php php php php php php php php php php php$curlValuephp php=php php"HEADphp"php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php Forphp nowphp,php throughphp anphp exceptionphp forphp unsupportedphp requestphp methods
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Methodphp currentlyphp notphp supportedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php php&php&php php$curlMethodphp php!php=php CURLOPTphp_PUTphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Streamingphp requestsphp arephp allowedphp onlyphp withphp PUTphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp httpphp versionphp tophp use
php php php php php php php php php$curlHttpphp php=php php(php$httpVersionphp php=php=php php1php.php1php)php php?php CURLphp_HTTPphp_VERSIONphp_php1php_php1php php:php CURLphp_HTTPphp_VERSIONphp_php1php_php0php;

php php php php php php php php php/php/php markphp asphp HTTPphp requestphp andphp setphp HTTPphp method
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php php$curlHttpphp,php truephp)php;
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php php$curlMethodphp,php php$curlValuephp)php;

php php php php php php php php ifphp(php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php/php/php headersphp willphp bephp readphp intophp thephp response
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_HEADERphp,php falsephp)php;
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_HEADERFUNCTIONphp,php arrayphp(php$thisphp,php php"readHeaderphp"php)php)php;
php php php php php php php php php php php php php/php/php andphp dataphp willphp bephp writtenphp intophp thephp file
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_FILEphp,php php$thisphp-php>outphp_streamphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php ensurephp headersphp arephp alsophp returned
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_HEADERphp,php truephp)php;

php php php php php php php php php php php php php/php/php ensurephp actualphp responsephp isphp returned
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_RETURNTRANSFERphp,php truephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp additionalphp headers
php php php php php php php php php$headersphp[php'Acceptphp'php]php php=php php'php'php;
php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_HTTPHEADERphp,php php$headersphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Makephp surephp POSTFIELDSphp isphp setphp afterphp php$curlMethodphp isphp setphp:
php php php php php php php php php php*php php@linkphp httpphp:php/php/dephp2php.phpphp.netphp/manualphp/enphp/functionphp.curlphp-setoptphp.phpphp#php8php1php1php6php1
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$methodphp php=php=php Zendphp_Httpphp_Clientphp:php:POSTphp)php php{
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_POSTFIELDSphp,php php$bodyphp)php;
php php php php php php php php php}php elseifphp php(php$curlMethodphp php=php=php CURLOPTphp_PUTphp)php php{
php php php php php php php php php php php php php/php/php thisphp coversphp aphp PUTphp byphp filephp-handlephp:
php php php php php php php php php php php php php/php/php Makephp thephp settingphp ofphp thisphp optionsphp explicitphp php(ratherphp thanphp settingphp itphp throughphp thephp loopphp followingphp aphp bitphp lowerphp)
php php php php php php php php php php php php php/php/php tophp groupphp commonphp functionalityphp togetherphp.
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_INFILEphp,php php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILEphp]php)php;
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_INFILESIZEphp,php php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILESIZEphp]php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILEphp]php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php[CURLOPTphp_INFILESIZEphp]php)php;
php php php php php php php php php}php elseifphp php(php$methodphp php=php=php Zendphp_Httpphp_Clientphp:php:PUTphp)php php{
php php php php php php php php php php php php php/php/php Thisphp isphp aphp PUTphp byphp aphp setRawDataphp stringphp,php notphp byphp filephp-handle
php php php php php php php php php php php php curlphp_setoptphp(php$thisphp-php>php_curlphp,php CURLOPTphp_POSTFIELDSphp,php php$bodyphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp additionalphp curlphp options
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php'curloptionsphp'php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php(arrayphp)php$thisphp-php>php_configphp[php'curloptionsphp'php]php asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$kphp,php php$thisphp-php>php_invalidOverwritableCurlOptionsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(curlphp_setoptphp(php$thisphp-php>php_curlphp,php php$kphp,php php$vphp)php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(sprintfphp(php"Unknownphp orphp erroreousphp cURLphp optionphp php'php%sphp'php setphp"php,php php$kphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php sendphp thephp request
php php php php php php php php php$responsephp php=php curlphp_execphp(php$thisphp-php>php_curlphp)php;

php php php php php php php php php/php/php ifphp wephp usedphp streamingphp,php headersphp arephp alreadyphp there
php php php php php php php php ifphp(php!isphp_resourcephp(php$thisphp-php>outphp_streamphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php php}

php php php php php php php php php$requestphp php php=php curlphp_getinfophp(php$thisphp-php>php_curlphp,php CURLINFOphp_HEADERphp_OUTphp)php;
php php php php php php php php php$requestphp php.php=php php$bodyphp;

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Errorphp inphp cURLphp requestphp:php php"php php.php curlphp_errorphp(php$thisphp-php>php_curlphp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php cURLphp automaticallyphp decodesphp chunkedphp-messagesphp,php thisphp meansphp wephp havephp tophp disallowphp thephp Zendphp_Httpphp_Responsephp tophp dophp itphp again
php php php php php php php php ifphp php(striposphp(php$thisphp-php>php_responsephp,php php"Transferphp-Encodingphp:php chunkedphp\rphp\nphp"php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp php=php strphp_ireplacephp(php"Transferphp-Encodingphp:php chunkedphp\rphp\nphp"php,php php'php'php,php php$thisphp-php>php_responsephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Eliminatephp multiplephp HTTPphp responsesphp.
php php php php php php php php dophp php{
php php php php php php php php php php php php php$partsphp php php=php pregphp_splitphp(php'php|php(php?php:php\rphp?php\nphp)php{php2php}php|mphp'php,php php$thisphp-php>php_responsephp,php php2php)php;
php php php php php php php php php php php php php$againphp php php=php falsephp;

php php php php php php php php php php php php ifphp php(issetphp(php$partsphp[php1php]php)php php&php&php pregphp_matchphp(php"php|php^HTTPphp/php1php\php.php[php0php1php]php(php.php*php?php)php\rphp\nphp|miphp"php,php php$partsphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp php php php php=php php$partsphp[php1php]php;
php php php php php php php php php php php php php php php php php$againphp php php php php php php php php php php php php php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(php$againphp)php;

php php php php php php php php php/php/php cURLphp automaticallyphp handlesphp Proxyphp rewritesphp,php removephp thephp php"HTTPphp/php1php.php0php php2php0php0php Connectionphp establishedphp"php stringphp:
php php php php php php php php ifphp php(striposphp(php$thisphp-php>php_responsephp,php php"HTTPphp/php1php.php0php php2php0php0php Connectionphp establishedphp\rphp\nphp\rphp\nphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp php=php strphp_ireplacephp(php"HTTPphp/php1php.php0php php2php0php0php Connectionphp establishedphp\rphp\nphp\rphp\nphp"php,php php'php'php,php php$thisphp-php>php_responsephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp readphp responsephp fromphp server
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp(isphp_resourcephp(php$thisphp-php>php_curlphp)php)php php{
php php php php php php php php php php php php curlphp_closephp(php$thisphp-php>php_curlphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_curlphp php php php php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_connectedphp_tophp php=php arrayphp(nullphp,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp cUrlphp Handle
php php php php php php*
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php publicphp functionphp getHandlephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_curlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outputphp streamphp forphp thephp response
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$stream
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Socket
php php php php php php*php/
php php php php publicphp functionphp setOutputStreamphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>outphp_streamphp php=php php$streamphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Headerphp readerphp functionphp forphp CURL
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$curl
php php php php php php*php php@paramphp stringphp php$header
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp readHeaderphp(php$curlphp,php php$headerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php.php=php php$headerphp;
php php php php php php php php returnphp strlenphp(php$headerphp)php;
php php php php php}
php}
