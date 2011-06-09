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
php php*php php@subpackagephp Client
php php*php php@versionphp php php php php$Idphp:php Clientphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Responsephp_Stream
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp/Streamphp.phpphp'php;

php/php*php*
php php*php Zendphp_Httpphp_Clientphp isphp anphp implementationphp ofphp anphp HTTPphp clientphp inphp PHPphp.php Thephp client
php php*php supportsphp basicphp featuresphp likephp sendingphp differentphp HTTPphp requestsphp andphp handling
php php*php redirectionsphp,php asphp wellphp asphp morephp advancedphp featuresphp likephp proxyphp settingsphp,php HTTP
php php*php authenticationphp andphp cookiephp persistencephp php(usingphp aphp Zendphp_Httpphp_CookieJarphp objectphp)
php php*
php php*php php@todophp Implementphp proxyphp settings
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Client
php php*php php@throwsphp php php php php Zendphp_Httpphp_Clientphp_Exception
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Client
php{
php php php php php/php*php*
php php php php php php*php HTTPphp requestphp methods
php php php php php php*php/
php php php php constphp GETphp php php php php php=php php'GETphp'php;
php php php php constphp POSTphp php php php php=php php'POSTphp'php;
php php php php constphp PUTphp php php php php php=php php'PUTphp'php;
php php php php constphp HEADphp php php php php=php php'HEADphp'php;
php php php php constphp DELETEphp php php=php php'DELETEphp'php;
php php php php constphp TRACEphp php php php=php php'TRACEphp'php;
php php php php constphp OPTIONSphp php=php php'OPTIONSphp'php;
php php php php constphp CONNECTphp php=php php'CONNECTphp'php;
php php php php constphp MERGEphp php php php=php php'MERGEphp'php;

php php php php php/php*php*
php php php php php php*php Supportedphp HTTPphp Authenticationphp methods
php php php php php php*php/
php php php php constphp AUTHphp_BASICphp php=php php'basicphp'php;
php php php php php/php/constphp AUTHphp_DIGESTphp php=php php'digestphp'php;php <php-php-php notphp implementedphp yet

php php php php php/php*php*
php php php php php php*php HTTPphp protocolphp versions
php php php php php php*php/
php php php php constphp HTTPphp_php1php php=php php'php1php.php1php'php;
php php php php constphp HTTPphp_php0php php=php php'php1php.php0php'php;

php php php php php/php*php*
php php php php php php*php Contentphp attributes
php php php php php php*php/
php php php php constphp CONTENTphp_TYPEphp php php php=php php'Contentphp-Typephp'php;
php php php php constphp CONTENTphp_LENGTHphp php=php php'Contentphp-Lengthphp'php;

php php php php php/php*php*
php php php php php php*php POSTphp dataphp encodingphp methods
php php php php php php*php/
php php php php constphp ENCphp_URLENCODEDphp php=php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp'php;
php php php php constphp ENCphp_FORMDATAphp php php php=php php'multipartphp/formphp-dataphp'php;

php php php php php/php*php*
php php php php php php*php Configurationphp arrayphp,php setphp usingphp thephp constructorphp orphp usingphp php:php:setConfigphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$configphp php=php arrayphp(
php php php php php php php php php'maxredirectsphp'php php php php php=php>php php5php,
php php php php php php php php php'strictredirectsphp'php php=php>php falsephp,
php php php php php php php php php'useragentphp'php php php php php php php php=php>php php'Zendphp_Httpphp_Clientphp'php,
php php php php php php php php php'timeoutphp'php php php php php php php php php php=php>php php1php0php,
php php php php php php php php php'adapterphp'php php php php php php php php php php=php>php php'Zendphp_Httpphp_Clientphp_Adapterphp_Socketphp'php,
php php php php php php php php php'httpversionphp'php php php php php php=php>php selfphp:php:HTTPphp_php1php,
php php php php php php php php php'keepalivephp'php php php php php php php php=php>php falsephp,
php php php php php php php php php'storeresponsephp'php php php php=php>php truephp,
php php php php php php php php php'strictphp'php php php php php php php php php php php=php>php truephp,
php php php php php php php php php'outputphp_streamphp'php php php php=php>php falsephp,
php php php php php php php php php'encodecookiesphp'php php php php=php>php truephp,
php php php php php php php php php'rfcphp3php9php8php6php_strictphp'php php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Thephp adapterphp usedphp tophp performphp thephp actualphp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php php php php php php*php/
php php php php protectedphp php$adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Requestphp URI
php php php php php php*
php php php php php php*php php@varphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php protectedphp php$uriphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp ofphp requestphp headers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php HTTPphp requestphp method
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$methodphp php=php selfphp:php:GETphp;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp ofphp GETphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$paramsGetphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp ofphp POSTphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$paramsPostphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Requestphp bodyphp contentphp typephp php(forphp POSTphp requestsphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$enctypephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp rawphp postphp dataphp tophp sendphp.php Couldphp bephp setphp byphp setRawDataphp(php$dataphp,php php$enctypephp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$rawphp_postphp_dataphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php HTTPphp Authenticationphp settings
php php php php php php*
php php php php php php*php Expectedphp tophp bephp anphp associativephp arrayphp withphp thisphp structurephp:
php php php php php php*php php$thisphp-php>authphp php=php arrayphp(php'userphp'php php=php>php php'usernamephp'php,php php'passwordphp'php php=php>php php'passwordphp'php,php php'typephp'php php=php>php php'basicphp'php)
php php php php php php*php Wherephp php'typephp'php shouldphp bephp onephp ofphp thephp supportedphp authenticationphp typesphp php(seephp thephp AUTHphp_php*
php php php php php php*php constantsphp)php,php forphp examplephp php'basicphp'php orphp php'digestphp'php.
php php php php php php*
php php php php php php*php Ifphp nullphp,php nophp authenticationphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php php@varphp arrayphp|null
php php php php php php*php/
php php php php protectedphp php$authphp;

php php php php php/php*php*
php php php php php php*php Filephp uploadphp arraysphp php(usedphp inphp POSTphp requestsphp)
php php php php php php*
php php php php php php*php Anphp associativephp arrayphp,php wherephp eachphp elementphp isphp ofphp thephp formatphp:
php php php php php php*php php php php'namephp'php php=php>php arrayphp(php'filenamephp.txtphp'php,php php'textphp/plainphp'php,php php'Thisphp isphp thephp actualphp filephp contentsphp'php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$filesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp clientphp'sphp cookiephp jar
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_CookieJar
php php php php php php*php/
php php php php protectedphp php$cookiejarphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp lastphp HTTPphp requestphp sentphp byphp thephp clientphp,php asphp string
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$lastphp_requestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp lastphp HTTPphp responsephp receivedphp byphp thephp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp php$lastphp_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Redirectionphp counter
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$redirectCounterphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Fileinfophp magicphp databasephp resource
php php php php php php*
php php php php php php*php Thisphp variablephp isphp populatedphp thephp firstphp timephp php_detectFileMimeTypephp isphp called
php php php php php php*php andphp isphp thenphp reusedphp onphp everyphp callphp tophp thisphp method
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php staticphp protectedphp php$php_fileInfoDbphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp methodphp.php Willphp createphp aphp newphp HTTPphp clientphp.php Acceptsphp thephp target
php php php php php php*php URLphp andphp optionallyphp configurationphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp|stringphp php$uri
php php php php php php*php php@paramphp arrayphp php$configphp Configurationphp keyphp-valuephp pairsphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$uriphp php=php nullphp,php php$configphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$uriphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$configphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$configphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp URIphp forphp thephp nextphp request
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Uriphp_Httpphp|stringphp php$uri
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$uriphp)php)php php{
php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Passedphp parameterphp isphp notphp aphp validphp HTTPphp URIphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp authphp ifphp usernamephp andphp passwordphp hasphp beenphp specifiedphp inphp thephp uri
php php php php php php php php ifphp php(php$uriphp-php>getUsernamephp(php)php php&php&php php$uriphp-php>getPasswordphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAuthphp(php$uriphp-php>getUsernamephp(php)php,php php$uriphp-php>getPasswordphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Wephp havephp nophp portsphp,php setphp thephp defaults
php php php php php php php php ifphp php(php!php php$uriphp-php>getPortphp(php)php)php php{
php php php php php php php php php php php php php$uriphp-php>setPortphp(php(php$uriphp-php>getSchemephp(php)php php=php=php php'httpsphp'php php?php php4php4php3php php:php php8php0php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>uriphp php=php php$uriphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp URIphp forphp thephp nextphp request
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$asphp_stringphp Ifphp truephp,php willphp returnphp thephp URIphp asphp aphp string
php php php php php php*php php@returnphp Zendphp_Uriphp_Httpphp|string
php php php php php php*php/
php php php php publicphp functionphp getUriphp(php$asphp_stringphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$asphp_stringphp php&php&php php$thisphp-php>uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>uriphp-php>php_php_toStringphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>uriphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp configurationphp parametersphp forphp thisphp HTTPphp client
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php|php arrayphp php$config
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;

php php php php php php php php php}php elseifphp php(php!php isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Arrayphp orphp Zendphp_Configphp objectphp expectedphp,php gotphp php'php php.php gettypephp(php$configphp)php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$thisphp-php>configphp[strtolowerphp(php$kphp)php]php php=php php$vphp;
php php php php php php php php php}

php php php php php php php php php/php/php Passphp configurationphp optionsphp tophp thephp adapterphp ifphp itphp exists
php php php php php php php php ifphp php(php$thisphp-php>adapterphp instanceofphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>adapterphp-php>setConfigphp(php$configphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp nextphp requestphp'sphp method
php php php php php php*
php php php php php php*php Validatedphp thephp passedphp methodphp andphp setsphp itphp.php Ifphp wephp havephp filesphp setphp for
php php php php php php*php POSTphp requestsphp,php andphp thephp newphp methodphp isphp notphp POSTphp,php thephp filesphp arephp silently
php php php php php php*php droppedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$methodphp php=php selfphp:php:GETphp)
php php php php php{
php php php php php php php php ifphp php(php!php pregphp_matchphp(php'php/php^php[php^php\xphp0php0php-php\xphp1fphp\xphp7fphp-php\xffphp\php(php\php)<php>php@php,php;php:php\php\php\php\php"php\php/php\php[php\php]php\php?php=php{php}php\sphp]php+php$php/php'php,php php$methodphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"php'php{php$methodphp}php'php isphp notphp aphp validphp HTTPphp requestphp methodphp.php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$methodphp php=php=php selfphp:php:POSTphp php&php&php php$thisphp-php>enctypephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEncTypephp(selfphp:php:ENCphp_URLENCODEDphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>methodphp php=php php$methodphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp onephp orphp morephp requestphp headers
php php php php php php*
php php php php php php*php Thisphp functionphp canphp bephp usedphp inphp severalphp waysphp tophp setphp thephp clientphp'sphp request
php php php php php php*php headersphp:
php php php php php php*php php1php.php Byphp providingphp twophp parametersphp:php php$namephp asphp thephp headerphp tophp setphp php(ephp.gphp.php php'Hostphp'php)
php php php php php php*php php php php andphp php$valuephp asphp itphp'sphp valuephp php(ephp.gphp.php php'wwwphp.examplephp.comphp'php)php.
php php php php php php*php php2php.php Byphp providingphp aphp singlephp headerphp stringphp asphp thephp onlyphp parameter
php php php php php php*php php php php ephp.gphp.php php'Hostphp:php wwwphp.examplephp.comphp'
php php php php php php*php php3php.php Byphp providingphp anphp arrayphp ofphp headersphp asphp thephp firstphp parameter
php php php php php php*php php php php ephp.gphp.php arrayphp(php'hostphp'php php=php>php php'wwwphp.examplephp.comphp'php,php php'xphp-foophp:php barphp'php)php.php Inphp Thisphp case
php php php php php php*php php php php thephp functionphp willphp callphp itselfphp recursivelyphp forphp eachphp arrayphp itemphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$namephp Headerphp namephp,php fullphp headerphp stringphp php(php'Headerphp:php valuephp'php)
php php php php php php*php php php php php orphp anphp arrayphp ofphp headers
php php php php php php*php php@paramphp mixedphp php$valuephp Headerphp valuephp orphp null
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeadersphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Ifphp wephp gotphp anphp arrayphp,php gophp recursivephp!
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$namephp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$kphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(php$kphp,php php$vphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(php$vphp,php nullphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Checkphp ifphp php$namephp needsphp tophp bephp split
php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp php&php&php php(strposphp(php$namephp,php php'php:php'php)php php>php php0php)php)php php{
php php php php php php php php php php php php php php php php listphp(php$namephp,php php$valuephp)php php=php explodephp(php'php:php'php,php php$namephp,php php2php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Makephp surephp thephp namephp isphp validphp ifphp wephp arephp inphp strictphp mode
php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'strictphp'php]php php&php&php php(php!php pregphp_matchphp(php'php/php^php[aphp-zAphp-Zphp0php-php9php-php]php+php$php/php'php,php php$namephp)php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"php{php$namephp}php isphp notphp aphp validphp HTTPphp headerphp namephp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$normalizedphp_namephp php=php strtolowerphp(php$namephp)php;

php php php php php php php php php php php php php/php/php Ifphp php$valuephp isphp nullphp orphp falsephp,php unsetphp thephp header
php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp php|php|php php$valuephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>headersphp[php$normalizedphp_namephp]php)php;

php php php php php php php php php php php php php/php/php Elsephp,php setphp thephp header
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Headerphp namesphp arephp storedphp lowercasephp internallyphp.
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php trimphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>headersphp[php$normalizedphp_namephp]php php=php arrayphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp ofphp aphp specificphp header
php php php php php php*
php php php php php php*php Notephp thatphp ifphp thephp headerphp hasphp morephp thanphp onephp valuephp,php anphp array
php php php php php php*php willphp bephp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp stringphp|arrayphp|nullphp Thephp headerphp valuephp orphp nullphp ifphp itphp isphp notphp set
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>headersphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>headersphp[php$keyphp]php[php1php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp GETphp parameterphp forphp thephp requestphp.php Wrapperphp aroundphp php_setParameter
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$name
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setParameterGetphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$namephp asphp php$kphp php=php>php php$vphp)
php php php php php php php php php php php php php php php php php$thisphp-php>php_setParameterphp(php'GETphp'php,php php$kphp,php php$vphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setParameterphp(php'GETphp'php,php php$namephp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp POSTphp parameterphp forphp thephp requestphp.php Wrapperphp aroundphp php_setParameter
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$name
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setParameterPostphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$namephp asphp php$kphp php=php>php php$vphp)
php php php php php php php php php php php php php php php php php$thisphp-php>php_setParameterphp(php'POSTphp'php,php php$kphp,php php$vphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setParameterphp(php'POSTphp'php,php php$namephp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp GETphp orphp POSTphp parameterphp php-php usedphp byphp SetParameterGetphp andphp SetParameterPost
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp GETphp orphp POST
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_setParameterphp(php$typephp,php php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$parrayphp php=php arrayphp(php)php;
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'getphp'php:
php php php php php php php php php php php php php php php php php$parrayphp php=php php&php$thisphp-php>paramsGetphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'postphp'php:
php php php php php php php php php php php php php php php php php$parrayphp php=php php&php$thisphp-php>paramsPostphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$parrayphp[php$namephp]php)php)php unsetphp(php$parrayphp[php$namephp]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$parrayphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp redirectionsphp donephp onphp thephp lastphp request
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getRedirectionsCountphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>redirectCounterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp HTTPphp authenticationphp parameters
php php php php php php*
php php php php php php*php php$typephp shouldphp bephp onephp ofphp thephp supportedphp typesphp php-php seephp thephp selfphp:php:AUTHphp_php*
php php php php php php*php constantsphp.
php php php php php php*
php php php php php php*php Tophp enablephp authenticationphp:
php php php php php php*php php<codephp>
php php php php php php*php php$thisphp-php>setAuthphp(php'shaharphp'php,php php'secretphp'php,php Zendphp_Httpphp_Clientphp:php:AUTHphp_BASICphp)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php Tophp disablephp authenticationphp:
php php php php php php*php php<codephp>
php php php php php php*php php$thisphp-php>setAuthphp(falsephp)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@seephp httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php6php1php7php.html
php php php php php php*php php@paramphp stringphp|falsephp php$userphp Userphp namephp orphp falsephp disablephp authentication
php php php php php php*php php@paramphp stringphp php$passwordphp Password
php php php php php php*php php@paramphp stringphp php$typephp Authenticationphp type
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAuthphp(php$userphp,php php$passwordphp php=php php'php'php,php php$typephp php=php selfphp:php:AUTHphp_BASICphp)
php php php php php{
php php php php php php php php php/php/php Ifphp wephp gotphp falsephp orphp nullphp,php disablephp authentication
php php php php php php php php ifphp php(php$userphp php=php=php=php falsephp php|php|php php$userphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>authphp php=php nullphp;

php php php php php php php php php php php php php/php/php Clearphp thephp authphp informationphp inphp thephp uriphp instancephp asphp well
php php php php php php php php php php php php ifphp php(php$thisphp-php>uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(php)php-php>setUsernamephp(php'php'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(php)php-php>setPasswordphp(php'php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php/php/php Elsephp,php setphp upphp authentication
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Checkphp wephp gotphp aphp properphp authenticationphp type
php php php php php php php php php php php php ifphp php(php!php definedphp(php'selfphp:php:AUTHphp_php'php php.php strtoupperphp(php$typephp)php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Invalidphp orphp notphp supportedphp authenticationphp typephp:php php'php$typephp'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>authphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'userphp'php php=php>php php(stringphp)php php$userphp,
php php php php php php php php php php php php php php php php php'passwordphp'php php=php>php php(stringphp)php php$passwordphp,
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$type
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp HTTPphp clientphp'sphp cookiephp jarphp.
php php php php php php*
php php php php php php*php Aphp cookiephp jarphp isphp anphp objectphp thatphp holdsphp andphp maintainsphp cookiesphp acrossphp HTTPphp requests
php php php php php php*php andphp responsesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_CookieJarphp|booleanphp php$cookiejarphp Existingphp cookiejarphp objectphp,php truephp tophp createphp aphp newphp onephp,php falsephp tophp disable
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCookieJarphp(php$cookiejarphp php=php truephp)
php php php php php{
php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php'Zendphp_Httpphp_CookieJarphp'php)php;

php php php php php php php php ifphp php(php$cookiejarphp instanceofphp Zendphp_Httpphp_CookieJarphp)php php{
php php php php php php php php php php php php php$thisphp-php>cookiejarphp php=php php$cookiejarphp;
php php php php php php php php php}php elseifphp php(php$cookiejarphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>cookiejarphp php=php newphp Zendphp_Httpphp_CookieJarphp(php)php;
php php php php php php php php php}php elseifphp php(php!php php$cookiejarphp)php php{
php php php php php php php php php php php php php$thisphp-php>cookiejarphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Invalidphp parameterphp typephp passedphp asphp CookieJarphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp cookiephp jarphp orphp nullphp ifphp nonephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_CookieJarphp|null
php php php php php php*php/
php php php php publicphp functionphp getCookieJarphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>cookiejarphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp cookiephp tophp thephp requestphp.php Ifphp thephp clientphp hasphp nophp Cookiephp Jarphp,php thephp cookies
php php php php php php*php willphp bephp addedphp directlyphp tophp thephp headersphp arrayphp asphp php"Cookiephp"php headersphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Cookiephp|stringphp php$cookie
php php php php php php*php php@paramphp stringphp|nullphp php$valuephp Ifphp php"cookiephp"php isphp aphp stringphp,php thisphp isphp thephp cookiephp valuephp.
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCookiephp(php$cookiephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php'Zendphp_Httpphp_Cookiephp'php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$cookiephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$cookiephp asphp php$cphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$cphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCookiephp(php$cphp,php php$vphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCookiephp(php$vphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp php&php&php php$thisphp-php>configphp[php'encodecookiesphp'php]php)php php{
php php php php php php php php php php php php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>cookiejarphp)php)php php{
php php php php php php php php php php php php ifphp php(php$cookiephp instanceofphp Zendphp_Httpphp_Cookiephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>cookiejarphp-php>addCookiephp(php$cookiephp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$cookiephp)php php&php&php php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$cookiephp php=php Zendphp_Httpphp_Cookiephp:php:fromStringphp(php"php{php$cookiephp}php=php{php$valuephp}php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>uriphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>configphp[php'encodecookiesphp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>cookiejarphp-php>addCookiephp(php$cookiephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$cookiephp instanceofphp Zendphp_Httpphp_Cookiephp)php php{
php php php php php php php php php php php php php php php php php$namephp php=php php$cookiephp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$cookiephp-php>getValuephp(php)php;
php php php php php php php php php php php php php php php php php$cookiephp php=php php$namephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php[php=php,php;php php\tphp\rphp\nphp\php0php1php3php\php0php1php4php]php/php"php,php php$cookiephp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Cookiephp namephp cannotphp containphp thesephp charactersphp:php php=php,php;php php\tphp\rphp\nphp\php0php1php3php\php0php1php4php php(php{php$cookiephp}php)php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuephp php=php addslashesphp(php$valuephp)php;

php php php php php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>headersphp[php'cookiephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>headersphp[php'cookiephp'php]php php=php arrayphp(php'Cookiephp'php,php php'php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>headersphp[php'cookiephp'php]php[php1php]php php.php=php php$cookiephp php.php php'php=php'php php.php php$valuephp php.php php'php;php php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp filephp tophp uploadphp php(usingphp aphp POSTphp requestphp)
php php php php php php*
php php php php php php*php Canphp bephp usedphp inphp twophp waysphp:
php php php php php php*
php php php php php php*php php1php.php php$dataphp isphp nullphp php(defaultphp)php:php php$filenamephp isphp treatedphp asphp thephp namephp ifphp aphp localphp filephp which
php php php php php php*php php php php willphp bephp readphp andphp sentphp.php Willphp tryphp tophp guessphp thephp contentphp typephp usingphp mimephp_contentphp_typephp(php)php.
php php php php php php*php php2php.php php$dataphp isphp setphp php-php php$filenamephp isphp sentphp asphp thephp filephp namephp,php butphp php$dataphp isphp sentphp asphp thephp file
php php php php php php*php php php php contentsphp andphp nophp filephp isphp readphp fromphp thephp filephp systemphp.php Inphp thisphp casephp,php youphp needphp to
php php php php php php*php php php php manuallyphp setphp thephp Contentphp-Typephp php(php$ctypephp)php orphp itphp willphp defaultphp to
php php php php php php*php php php php applicationphp/octetphp-streamphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filenamephp Namephp ofphp filephp tophp uploadphp,php orphp namephp tophp savephp as
php php php php php php*php php@paramphp stringphp php$formnamephp Namephp ofphp formphp elementphp tophp sendphp as
php php php php php php*php php@paramphp stringphp php$dataphp Dataphp tophp sendphp php(ifphp nullphp,php php$filenamephp isphp readphp andphp sentphp)
php php php php php php*php php@paramphp stringphp php$ctypephp Contentphp typephp tophp usephp php(ifphp php$dataphp isphp setphp andphp php$ctypephp is
php php php php php php*php php php php php nullphp,php willphp bephp applicationphp/octetphp-streamphp)
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFileUploadphp(php$filenamephp,php php$formnamephp,php php$dataphp php=php nullphp,php php$ctypephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dataphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php(php$dataphp php=php php@filephp_getphp_contentsphp(php$filenamephp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Unablephp tophp readphp filephp php'php{php$filenamephp}php'php forphp uploadphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php php$ctypephp)php php{
php php php php php php php php php php php php php php php php php$ctypephp php=php php$thisphp-php>php_detectFileMimeTypephp(php$filenamephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Forcephp enctypephp tophp multipartphp/formphp-data
php php php php php php php php php$thisphp-php>setEncTypephp(selfphp:php:ENCphp_FORMDATAphp)php;

php php php php php php php php php$thisphp-php>filesphp[php]php php=php arrayphp(
php php php php php php php php php php php php php'formnamephp'php php=php>php php$formnamephp,
php php php php php php php php php php php php php'filenamephp'php php=php>php basenamephp(php$filenamephp)php,
php php php php php php php php php php php php php'ctypephp'php php php php php=php>php php$ctypephp,
php php php php php php php php php php php php php'dataphp'php php php php php php=php>php php$data
php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp encodingphp typephp forphp POSTphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$enctype
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setEncTypephp(php$enctypephp php=php selfphp:php:ENCphp_URLENCODEDphp)
php php php php php{
php php php php php php php php php$thisphp-php>enctypephp php=php php$enctypephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp rawphp php(alreadyphp encodedphp)php POSTphp dataphp.
php php php php php php*
php php php php php php*php Thisphp functionphp isphp herephp forphp twophp reasonsphp:
php php php php php php*php php1php.php Forphp advancedphp userphp whophp wouldphp likephp tophp setphp theirphp ownphp dataphp,php alreadyphp encoded
php php php php php php*php php2php.php Forphp backwardsphp compatibiltyphp:php Ifphp someonephp usesphp thephp oldphp postphp(php$dataphp)php methodphp.
php php php php php php*php php php php thisphp methodphp willphp bephp usedphp tophp setphp thephp encodedphp dataphp.
php php php php php php*
php php php php php php*php php$dataphp canphp alsophp bephp streamphp php(suchphp asphp filephp)php fromphp whichphp thephp dataphp willphp bephp readphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|resourcephp php$data
php php php php php php*php php@paramphp stringphp php$enctype
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setRawDataphp(php$dataphp,php php$enctypephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>rawphp_postphp_dataphp php=php php$dataphp;
php php php php php php php php php$thisphp-php>setEncTypephp(php$enctypephp)php;
php php php php php php php php ifphp php(isphp_resourcephp(php$dataphp)php)php php{
php php php php php php php php php php php php php/php/php Wephp'vephp gotphp streamphp data
php php php php php php php php php php php php php$statphp php=php php@fstatphp(php$dataphp)php;
php php php php php php php php php php php php ifphp(php$statphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_LENGTHphp,php php$statphp[php'sizephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp GETphp andphp POSTphp parameters
php php php php php php*
php php php php php php*php Shouldphp bephp usedphp tophp resetphp thephp requestphp parametersphp ifphp thephp clientphp is
php php php php php php*php usedphp forphp severalphp concurrentphp requestsphp.
php php php php php php*
php php php php php php*php clearAllphp parameterphp controlsphp ifphp wephp cleanphp justphp parametersphp orphp also
php php php php php php*php headersphp andphp lastphp_php*
php php php php php php*
php php php php php php*php php@paramphp boolphp php$clearAllphp Shouldphp allphp dataphp bephp clearedphp?
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp resetParametersphp(php$clearAllphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Resetphp parameterphp data
php php php php php php php php php$thisphp-php>paramsGetphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>paramsPostphp php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>filesphp php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>rawphp_postphp_dataphp php=php nullphp;

php php php php php php php php ifphp(php$clearAllphp)php php{
php php php php php php php php php php php php php$thisphp-php>headersphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$thisphp-php>lastphp_requestphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>lastphp_responsephp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Clearphp outdatedphp headers
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>headersphp[strtolowerphp(selfphp:php:CONTENTphp_TYPEphp)php]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>headersphp[strtolowerphp(selfphp:php:CONTENTphp_TYPEphp)php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>headersphp[strtolowerphp(selfphp:php:CONTENTphp_LENGTHphp)php]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>headersphp[strtolowerphp(selfphp:php:CONTENTphp_LENGTHphp)php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp lastphp HTTPphp requestphp asphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLastRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>lastphp_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp lastphp HTTPphp responsephp receivedphp byphp thisphp client
php php php php php php*
php php php php php php*php Ifphp php$configphp[php'storeresponsephp'php]php isphp setphp tophp falsephp,php orphp nophp responsephp was
php php php php php php*php storedphp yetphp,php willphp returnphp null
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Responsephp orphp nullphp ifphp none
php php php php php php*php/
php php php php publicphp functionphp getLastResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>lastphp_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp connectionphp adapter
php php php php php php*
php php php php php php*php Whilephp thisphp methodphp isphp notphp calledphp morephp thanphp onephp forphp aphp clientphp,php itphp is
php php php php php php*php seperatedphp fromphp php-php>requestphp(php)php tophp preservephp logicphp andphp readability
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp|stringphp php$adapter
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$adapterphp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$adapterphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Unablephp tophp loadphp adapterphp php'php$adapterphp'php:php php{php$ephp-php>getMessagephp(php)php}php"php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$adapterphp php=php newphp php$adapterphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php php$adapterphp instanceofphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Passedphp adapterphp isphp notphp aphp HTTPphp connectionphp adapterphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>adapterphp php=php php$adapterphp;
php php php php php php php php php$configphp php=php php$thisphp-php>configphp;
php php php php php php php php unsetphp(php$configphp[php'adapterphp'php]php)php;
php php php php php php php php php$thisphp-php>adapterphp-php>setConfigphp(php$configphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp connectionphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp php$adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp streamingphp forphp receivedphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp|booleanphp php$streamfilephp Streamphp filephp,php truephp forphp tempphp filephp,php falsephp/nullphp forphp nophp streaming
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setStreamphp(php$streamfilephp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>setConfigphp(arrayphp(php"outputphp_streamphp"php php=php>php php$streamfilephp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp statusphp ofphp streamingphp forphp receivedphp data
php php php php php php*php php@returnphp booleanphp|string
php php php php php php*php/
php php php php publicphp functionphp getStreamphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>configphp[php"outputphp_streamphp"php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp temporaryphp stream
php php php php php php*
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php protectedphp functionphp php_openTempStreamphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp_namephp php=php php$thisphp-php>configphp[php'outputphp_streamphp'php]php;
php php php php php php php php ifphp(php!isphp_stringphp(php$thisphp-php>php_streamphp_namephp)php)php php{
php php php php php php php php php php php php php/php/php Ifphp namephp isphp notphp givenphp,php createphp tempphp name
php php php php php php php php php php php php php$thisphp-php>php_streamphp_namephp php=php tempnamphp(issetphp(php$thisphp-php>configphp[php'streamphp_tmpphp_dirphp'php]php)php?php$thisphp-php>configphp[php'streamphp_tmpphp_dirphp'php]php:sysphp_getphp_tempphp_dirphp(php)php,
php php php php php php php php php php php php php php php php php php'Zendphp_Httpphp_Clientphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(falsephp php=php=php=php php(php$fpphp php=php php@fopenphp(php$thisphp-php>php_streamphp_namephp,php php"wphp+bphp"php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>adapterphp instanceofphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>adapterphp-php>closephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Couldphp notphp openphp tempphp filephp php{php$thisphp-php>php_streamphp_namephp}php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$fpphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp thephp HTTPphp requestphp andphp returnphp anphp HTTPphp responsephp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp functionphp requestphp(php$methodphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Nophp validphp URIphp hasphp beenphp passedphp tophp thephp clientphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$methodphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMethodphp(php$methodphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>redirectCounterphp php=php php0php;
php php php php php php php php php$responsephp php=php nullphp;

php php php php php php php php php/php/php Makephp surephp thephp adapterphp isphp loaded
php php php php php php php php ifphp php(php$thisphp-php>adapterphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setAdapterphp(php$thisphp-php>configphp[php'adapterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Sendphp thephp firstphp requestphp.php Ifphp redirectedphp,php continuephp.
php php php php php php php php dophp php{
php php php php php php php php php php php php php/php/php Clonephp thephp URIphp andphp addphp thephp additionalphp GETphp parametersphp tophp it
php php php php php php php php php php php php php$uriphp php=php clonephp php$thisphp-php>uriphp;
php php php php php php php php php php php php ifphp php(php!php emptyphp(php$thisphp-php>paramsGetphp)php)php php{
php php php php php php php php php php php php php php php php php$queryphp php=php php$uriphp-php>getQueryphp(php)php;
php php php php php php php php php php php php php php php php php php php ifphp php(php!php emptyphp(php$queryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php&php'php;
php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$queryphp php.php=php httpphp_buildphp_queryphp(php$thisphp-php>paramsGetphp,php nullphp,php php'php&php'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'rfcphp3php9php8php6php_strictphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$queryphp php=php strphp_replacephp(php'php+php'php,php php'php%php2php0php'php,php php$queryphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$uriphp-php>setQueryphp(php$queryphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$bodyphp php=php php$thisphp-php>php_prepareBodyphp(php)php;
php php php php php php php php php php php php php$headersphp php=php php$thisphp-php>php_prepareHeadersphp(php)php;

php php php php php php php php php php php php php/php/php checkphp thatphp adapterphp supportsphp streamingphp beforephp usingphp it
php php php php php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php php&php&php php!php(php$thisphp-php>adapterphp instanceofphp Zendphp_Httpphp_Clientphp_Adapterphp_Streamphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Adapterphp doesphp notphp supportphp streamingphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Openphp thephp connectionphp,php sendphp thephp requestphp andphp readphp thephp response
php php php php php php php php php php php php php$thisphp-php>adapterphp-php>connectphp(php$uriphp-php>getHostphp(php)php,php php$uriphp-php>getPortphp(php)php,
php php php php php php php php php php php php php php php php php(php$uriphp-php>getSchemephp(php)php php=php=php php'httpsphp'php php?php truephp php:php falsephp)php)php;

php php php php php php php php php php php php ifphp(php$thisphp-php>configphp[php'outputphp_streamphp'php]php)php php{
php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>adapterphp instanceofphp Zendphp_Httpphp_Clientphp_Adapterphp_Streamphp)php php{
php php php php php php php php php php php php php php php php php php php php php$streamphp php=php php$thisphp-php>php_openTempStreamphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>adapterphp-php>setOutputStreamphp(php$streamphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Adapterphp doesphp notphp supportphp streamingphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>lastphp_requestphp php=php php$thisphp-php>adapterphp-php>writephp(php$thisphp-php>methodphp,
php php php php php php php php php php php php php php php php php$uriphp,php php$thisphp-php>configphp[php'httpversionphp'php]php,php php$headersphp,php php$bodyphp)php;

php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>adapterphp-php>readphp(php)php;
php php php php php php php php php php php php ifphp php(php!php php$responsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Unablephp tophp readphp responsephp,php orphp responsephp isphp emptyphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(php$thisphp-php>configphp[php'outputphp_streamphp'php]php)php php{
php php php php php php php php php php php php php php php php rewindphp(php$streamphp)php;
php php php php php php php php php php php php php php php php php/php/php cleanupphp thephp adapter
php php php php php php php php php php php php php php php php php$thisphp-php>adapterphp-php>setOutputStreamphp(nullphp)php;
php php php php php php php php php php php php php php php php php$responsephp php=php Zendphp_Httpphp_Responsephp_Streamphp:php:fromStreamphp(php$responsephp,php php$streamphp)php;
php php php php php php php php php php php php php php php php php$responsephp-php>setStreamNamephp(php$thisphp-php>php_streamphp_namephp)php;
php php php php php php php php php php php php php php php php ifphp(php!isphp_stringphp(php$thisphp-php>configphp[php'outputphp_streamphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php wephp usedphp tempphp namephp,php willphp needphp tophp cleanphp up
php php php php php php php php php php php php php php php php php php php php php$responsephp-php>setCleanupphp(truephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$responsephp php=php Zendphp_Httpphp_Responsephp:php:fromStringphp(php$responsephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'storeresponsephp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>lastphp_responsephp php=php php$responsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Loadphp cookiesphp intophp cookiephp jar
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>cookiejarphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>cookiejarphp-php>addCookiesFromResponsephp(php$responsephp,php php$uriphp,php php$thisphp-php>configphp[php'encodecookiesphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Ifphp wephp gotphp redirectedphp,php lookphp forphp thephp Locationphp header
php php php php php php php php php php php php ifphp php(php$responsephp-php>isRedirectphp(php)php php&php&php php(php$locationphp php=php php$responsephp-php>getHeaderphp(php'locationphp'php)php)php)php php{

php php php php php php php php php php php php php php php php php/php/php Checkphp whetherphp wephp sendphp thephp exactphp samephp requestphp againphp,php orphp dropphp thephp parameters
php php php php php php php php php php php php php php php php php/php/php andphp sendphp aphp GETphp request
php php php php php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php3php0php3php php|php|
php php php php php php php php php php php php php php php php php php php php(php(php!php php$thisphp-php>configphp[php'strictredirectsphp'php]php)php php&php&php php(php$responsephp-php>getStatusphp(php)php php=php=php php3php0php2php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php php=php=php php3php0php1php)php)php)php php{

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>resetParametersphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setMethodphp(selfphp:php:GETphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Ifphp wephp gotphp aphp wellphp formedphp absolutephp URI
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Uriphp_Httpphp:php:checkphp(php$locationphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(php'hostphp'php,php nullphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setUriphp(php$locationphp)php;

php php php php php php php php php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php php php php php php php php php/php/php Splitphp intophp pathphp andphp queryphp andphp setphp thephp query
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$locationphp,php php'php?php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php listphp(php$locationphp,php php$queryphp)php php=php explodephp(php'php?php'php,php php$locationphp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$queryphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>uriphp-php>setQueryphp(php$queryphp)php;

php php php php php php php php php php php php php php php php php php php php php/php/php Elsephp,php ifphp wephp gotphp justphp anphp absolutephp pathphp,php setphp it
php php php php php php php php php php php php php php php php php php php php ifphp(strposphp(php$locationphp,php php'php/php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>uriphp-php>setPathphp(php$locationphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Elsephp,php assumephp wephp havephp aphp relativephp path
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Getphp thephp currentphp pathphp directoryphp,php removingphp anyphp trailingphp slashes
php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php php$thisphp-php>uriphp-php>getPathphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php rtrimphp(substrphp(php$pathphp,php php0php,php strrposphp(php$pathphp,php php'php/php'php)php)php,php php"php/php"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>uriphp-php>setPathphp(php$pathphp php.php php'php/php'php php.php php$locationphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php+php+php$thisphp-php>redirectCounterphp;

php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Ifphp wephp didnphp'tphp getphp anyphp locationphp,php stopphp redirecting
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php whilephp php(php$thisphp-php>redirectCounterphp <php php$thisphp-php>configphp[php'maxredirectsphp'php]php)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp thephp requestphp headers
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareHeadersphp(php)
php php php php php{
php php php php php php php php php$headersphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Setphp thephp hostphp header
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>headersphp[php'hostphp'php]php)php)php php{
php php php php php php php php php php php php php$hostphp php=php php$thisphp-php>uriphp-php>getHostphp(php)php;

php php php php php php php php php php php php php/php/php Ifphp thephp portphp isphp notphp defaultphp,php addphp it
php php php php php php php php php php php php ifphp php(php!php php(php(php$thisphp-php>uriphp-php>getSchemephp(php)php php=php=php php'httpphp'php php&php&php php$thisphp-php>uriphp-php>getPortphp(php)php php=php=php php8php0php)php php|php|
php php php php php php php php php php php php php php php php php php php(php$thisphp-php>uriphp-php>getSchemephp(php)php php=php=php php'httpsphp'php php&php&php php$thisphp-php>uriphp-php>getPortphp(php)php php=php=php php4php4php3php)php)php)php php{
php php php php php php php php php php php php php php php php php$hostphp php.php=php php'php:php'php php.php php$thisphp-php>uriphp-php>getPortphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$headersphp[php]php php=php php"Hostphp:php php{php$hostphp}php"php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp thephp connectionphp header
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>headersphp[php'connectionphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php php$thisphp-php>configphp[php'keepalivephp'php]php)php php{
php php php php php php php php php php php php php php php php php$headersphp[php]php php=php php"Connectionphp:php closephp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Setphp thephp Acceptphp-encodingphp headerphp ifphp notphp setphp php-php dependingphp onphp whether
php php php php php php php php php/php/php zlibphp isphp availablephp orphp notphp.
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>headersphp[php'acceptphp-encodingphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'gzinflatephp'php)php)php php{
php php php php php php php php php php php php php php php php php$headersphp[php]php php=php php'Acceptphp-encodingphp:php gzipphp,php deflatephp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$headersphp[php]php php=php php'Acceptphp-encodingphp:php identityphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Setphp thephp Contentphp-Typephp header
php php php php php php php php ifphp php(php(php$thisphp-php>methodphp php=php=php selfphp:php:POSTphp php|php|php php$thisphp-php>methodphp php=php=php selfphp:php:PUTphp)php php&php&
php php php php php php php php php php php php(php!php issetphp(php$thisphp-php>headersphp[strtolowerphp(selfphp:php:CONTENTphp_TYPEphp)php]php)php php&php&php issetphp(php$thisphp-php>enctypephp)php)php)php php{

php php php php php php php php php php php php php$headersphp[php]php php=php selfphp:php:CONTENTphp_TYPEphp php.php php'php:php php'php php.php php$thisphp-php>enctypephp;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp thephp userphp agentphp header
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>headersphp[php'userphp-agentphp'php]php)php php&php&php issetphp(php$thisphp-php>configphp[php'useragentphp'php]php)php)php php{
php php php php php php php php php php php php php$headersphp[php]php php=php php"Userphp-Agentphp:php php{php$thisphp-php>configphp[php'useragentphp'php]php}php"php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp HTTPphp authenticationphp ifphp needed
php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>authphp)php)php php{
php php php php php php php php php php php php php$authphp php=php selfphp:php:encodeAuthHeaderphp(php$thisphp-php>authphp[php'userphp'php]php,php php$thisphp-php>authphp[php'passwordphp'php]php,php php$thisphp-php>authphp[php'typephp'php]php)php;
php php php php php php php php php php php php php$headersphp[php]php php=php php"Authorizationphp:php php{php$authphp}php"php;
php php php php php php php php php}

php php php php php php php php php/php/php Loadphp cookiesphp fromphp cookiephp jar
php php php php php php php php ifphp php(issetphp(php$thisphp-php>cookiejarphp)php)php php{
php php php php php php php php php php php php php$cookstrphp php=php php$thisphp-php>cookiejarphp-php>getMatchingCookiesphp(php$thisphp-php>uriphp,
php php php php php php php php php php php php php php php php truephp,php Zendphp_Httpphp_CookieJarphp:php:COOKIEphp_STRINGphp_CONCATphp)php;

php php php php php php php php php php php php ifphp php(php$cookstrphp)php php{
php php php php php php php php php php php php php php php php php$headersphp[php]php php=php php"Cookiephp:php php{php$cookstrphp}php"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Addphp allphp otherphp userphp definedphp headers
php php php php php php php php foreachphp php(php$thisphp-php>headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php listphp(php$namephp,php php$valuephp)php php=php php$headerphp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php implodephp(php'php,php php'php,php php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$headersphp[php]php php=php php"php$namephp:php php$valuephp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp thephp requestphp bodyphp php(forphp POSTphp andphp PUTphp requestsphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_prepareBodyphp(php)
php php php php php{
php php php php php php php php php/php/php Accordingphp tophp RFCphp2php6php1php6php,php aphp TRACEphp requestphp shouldphp notphp havephp aphp bodyphp.
php php php php php php php php ifphp php(php$thisphp-php>methodphp php=php=php selfphp:php:TRACEphp)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>rawphp_postphp_dataphp)php php&php&php isphp_resourcephp(php$thisphp-php>rawphp_postphp_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>rawphp_postphp_dataphp;
php php php php php php php php php}
php php php php php php php php php/php/php Ifphp mbstringphp overloadsphp substrphp andphp strlenphp functionsphp,php wephp havephp to
php php php php php php php php php/php/php overridephp itphp'sphp internalphp encoding
php php php php php php php php ifphp php(functionphp_existsphp(php'mbphp_internalphp_encodingphp'php)php php&php&
php php php php php php php php php php php php(php(intphp)php iniphp_getphp(php'mbstringphp.funcphp_overloadphp'php)php)php php&php php2php)php php{

php php php php php php php php php php php php php$mbIntEncphp php=php mbphp_internalphp_encodingphp(php)php;
php php php php php php php php php php php php mbphp_internalphp_encodingphp(php'ASCIIphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp havephp rawphp_postphp_dataphp setphp,php justphp usephp itphp asphp thephp bodyphp.
php php php php php php php php ifphp php(issetphp(php$thisphp-php>rawphp_postphp_dataphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_LENGTHphp,php strlenphp(php$thisphp-php>rawphp_postphp_dataphp)php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$mbIntEncphp)php)php php{
php php php php php php php php php php php php php php php php mbphp_internalphp_encodingphp(php$mbIntEncphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp-php>rawphp_postphp_dataphp;
php php php php php php php php php}

php php php php php php php php php$bodyphp php=php php'php'php;

php php php php php php php php php/php/php Ifphp wephp havephp filesphp tophp uploadphp,php forcephp enctypephp tophp multipartphp/formphp-data
php php php php php php php php ifphp php(countphp php(php$thisphp-php>filesphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncTypephp(selfphp:php:ENCphp_FORMDATAphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp havephp POSTphp parametersphp orphp filesphp,php encodephp andphp addphp themphp tophp thephp body
php php php php php php php php ifphp php(countphp(php$thisphp-php>paramsPostphp)php php>php php0php php|php|php countphp(php$thisphp-php>filesphp)php php>php php0php)php php{
php php php php php php php php php php php php switchphp(php$thisphp-php>enctypephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ENCphp_FORMDATAphp:
php php php php php php php php php php php php php php php php php php php php php/php/php Encodephp bodyphp asphp multipartphp/formphp-data
php php php php php php php php php php php php php php php php php php php php php$boundaryphp php=php php'php-php-php-ZENDHTTPCLIENTphp-php'php php.php mdphp5php(microtimephp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_TYPEphp,php selfphp:php:ENCphp_FORMDATAphp php.php php"php;php boundaryphp=php{php$boundaryphp}php"php)php;

php php php php php php php php php php php php php php php php php php php php php/php/php Getphp POSTphp parametersphp andphp encodephp them
php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php selfphp:php:php_flattenParametersArrayphp(php$thisphp-php>paramsPostphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$ppphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$bodyphp php.php=php selfphp:php:encodeFormDataphp(php$boundaryphp,php php$ppphp[php0php]php,php php$ppphp[php1php]php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Encodephp files
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>filesphp asphp php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$fheadphp php=php arrayphp(selfphp:php:CONTENTphp_TYPEphp php=php>php php$filephp[php'ctypephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$bodyphp php.php=php selfphp:php:encodeFormDataphp(php$boundaryphp,php php$filephp[php'formnamephp'php]php,php php$filephp[php'dataphp'php]php,php php$filephp[php'filenamephp'php]php,php php$fheadphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$bodyphp php.php=php php"php-php-php{php$boundaryphp}php-php-php\rphp\nphp"php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:ENCphp_URLENCODEDphp:
php php php php php php php php php php php php php php php php php php php php php/php/php Encodephp bodyphp asphp applicationphp/xphp-wwwphp-formphp-urlencoded
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_TYPEphp,php selfphp:php:ENCphp_URLENCODEDphp)php;
php php php php php php php php php php php php php php php php php php php php php$bodyphp php=php httpphp_buildphp_queryphp(php$thisphp-php>paramsPostphp,php php'php'php,php php'php&php'php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$mbIntEncphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php mbphp_internalphp_encodingphp(php$mbIntEncphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Cannotphp handlephp contentphp typephp php'php{php$thisphp-php>enctypephp}php'php automaticallyphp.php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"php Pleasephp usephp Zendphp_Httpphp_Clientphp:php:setRawDataphp tophp sendphp thisphp kindphp ofphp contentphp.php"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Setphp thephp Contentphp-Lengthphp ifphp wephp havephp aphp bodyphp orphp ifphp requestphp isphp POSTphp/PUT
php php php php php php php php ifphp php(php$bodyphp php|php|php php$thisphp-php>methodphp php=php=php selfphp:php:POSTphp php|php|php php$thisphp-php>methodphp php=php=php selfphp:php:PUTphp)php php{
php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_LENGTHphp,php strlenphp(php$bodyphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$mbIntEncphp)php)php php{
php php php php php php php php php php php php mbphp_internalphp_encodingphp(php$mbIntEncphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp methodphp thatphp getsphp aphp possiblyphp multiphp-levelphp parametersphp arrayphp php(getphp or
php php php php php php*php postphp)php andphp flattensphp itphp.
php php php php php php*
php php php php php php*php Thephp methodphp returnsphp anphp arrayphp ofphp php(keyphp,php valuephp)php pairsphp php(becausephp keysphp arephp not
php php php php php php*php necessarilyphp uniquephp.php Ifphp onephp ofphp thephp parametersphp inphp asphp arrayphp,php itphp willphp also
php php php php php php*php addphp aphp php[php]php suffixphp tophp thephp keyphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp deprecatedphp sincephp Zendphp Frameworkphp php1php.php9php inphp favourphp of
php php php php php php*php selfphp:php:php_flattenParametersArrayphp(php)php andphp willphp bephp droppedphp inphp php2php.php0
php php php php php php*
php php php php php php*php php@deprecatedphp sincephp php1php.php9
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$parrayphp php php php Thephp parametersphp array
php php php php php php*php php@paramphp php boolphp php php$urlencodephp Whetherphp tophp urlencodephp thephp namephp andphp value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getParametersRecursivephp(php$parrayphp,php php$urlencodephp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Issuephp aphp deprecatedphp notice
php php php php php php php php triggerphp_errorphp(php"Thephp php"php php.php php php_php_METHODphp_php_php php.php php"php methodphp isphp deprecatedphp andphp willphp bephp droppedphp inphp php2php.php0php.php"php,
php php php php php php php php php php php php Ephp_USERphp_NOTICEphp)php;

php php php php php php php php ifphp php(php!php isphp_arrayphp(php$parrayphp)php)php php{
php php php php php php php php php php php php returnphp php$parrayphp;
php php php php php php php php php}
php php php php php php php php php$parametersphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$parrayphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$urlencodephp)php php{
php php php php php php php php php php php php php php php php php$namephp php=php urlencodephp(php$namephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Ifphp php$valuephp isphp anphp arrayphp,php iteratephp overphp it
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$namephp php.php=php php(php$urlencodephp php?php php'php%php5Bphp%php5Dphp'php php:php php'php[php]php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$subvalphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$urlencodephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$subvalphp php=php urlencodephp(php$subvalphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$parametersphp[php]php php=php arrayphp(php$namephp,php php$subvalphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$urlencodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$parametersphp[php]php php=php arrayphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp detectphp thephp MIMEphp typephp ofphp aphp filephp usingphp availablephp extensions
php php php php php php*
php php php php php php*php Thisphp methodphp willphp tryphp tophp detectphp thephp MIMEphp typephp ofphp aphp filephp.php Ifphp thephp fileinfo
php php php php php php*php extensionphp isphp availablephp,php itphp willphp bephp usedphp.php Ifphp notphp,php thephp mimephp_magic
php php php php php php*php extensionphp whichphp isphp deprectedphp butphp isphp stillphp availablephp inphp manyphp PHPphp setups
php php php php php php*php willphp bephp triedphp.
php php php php php php*
php php php php php php*php Ifphp neitherphp extensionphp isphp availablephp,php thephp defaultphp applicationphp/octetphp-stream
php php php php php php*php MIMEphp typephp willphp bephp returned
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filephp Filephp path
php php php php php php*php php@returnphp stringphp php php php php php php MIMEphp type
php php php php php php*php/
php php php php protectedphp functionphp php_detectFileMimeTypephp(php$filephp)
php php php php php{
php php php php php php php php php$typephp php=php nullphp;

php php php php php php php php php/php/php Firstphp tryphp withphp fileinfophp functions
php php php php php php php php ifphp php(functionphp_existsphp(php'finfophp_openphp'php)php)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_fileInfoDbphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_fileInfoDbphp php=php php@finfophp_openphp(FILEINFOphp_MIMEphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(selfphp:php:php$php_fileInfoDbphp)php php{
php php php php php php php php php php php php php php php php php$typephp php=php finfophp_filephp(selfphp:php:php$php_fileInfoDbphp,php php$filephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elseifphp php(functionphp_existsphp(php'mimephp_contentphp_typephp'php)php)php php{
php php php php php php php php php php php php php$typephp php=php mimephp_contentphp_typephp(php$filephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Fallbackphp tophp thephp defaultphp applicationphp/octetphp-stream
php php php php php php php php ifphp php(php!php php$typephp)php php{
php php php php php php php php php php php php php$typephp php=php php'applicationphp/octetphp-streamphp'php;
php php php php php php php php php}

php php php php php php php php returnphp php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp dataphp tophp aphp multipartphp/formphp-dataphp partphp suitablephp forphp aphp POSTphp requestphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$boundary
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@paramphp arrayphp php$headersphp Associativephp arrayphp ofphp optionalphp headersphp php@examplephp php(php"Contentphp-Transferphp-Encodingphp"php php=php>php php"binaryphp"php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp encodeFormDataphp(php$boundaryphp,php php$namephp,php php$valuephp,php php$filenamephp php=php nullphp,php php$headersphp php=php arrayphp(php)php)php php{
php php php php php php php php php$retphp php=php php"php-php-php{php$boundaryphp}php\rphp\nphp"php php.
php php php php php php php php php php php php php'Contentphp-Dispositionphp:php formphp-dataphp;php namephp=php"php'php php.php php$namephp php.php'php"php'php;

php php php php php php php php ifphp php(php$filenamephp)php php{
php php php php php php php php php php php php php$retphp php.php=php php'php;php filenamephp=php"php'php php.php php$filenamephp php.php php'php"php'php;
php php php php php php php php php}
php php php php php php php php php$retphp php.php=php php"php\rphp\nphp"php;

php php php php php php php php foreachphp php(php$headersphp asphp php$hnamephp php=php>php php$hvaluephp)php php{
php php php php php php php php php php php php php$retphp php.php=php php"php{php$hnamephp}php:php php{php$hvaluephp}php\rphp\nphp"php;
php php php php php php php php php}
php php php php php php php php php$retphp php.php=php php"php\rphp\nphp"php;

php php php php php php php php php$retphp php.php=php php"php{php$valuephp}php\rphp\nphp"php;

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp HTTPphp authenticationphp php"Authorizationphp:php"php headerphp accordingphp tophp the
php php php php php php*php specifiedphp userphp,php passwordphp andphp authenticationphp methodphp.
php php php php php php*
php php php php php php*php php@seephp httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php6php1php7php.html
php php php php php php*php php@paramphp stringphp php$user
php php php php php php*php php@paramphp stringphp php$password
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp encodeAuthHeaderphp(php$userphp,php php$passwordphp,php php$typephp php=php selfphp:php:AUTHphp_BASICphp)
php php php php php{
php php php php php php php php php$authHeaderphp php=php nullphp;

php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp selfphp:php:AUTHphp_BASICphp:
php php php php php php php php php php php php php php php php php/php/php Inphp basicphp authenticationphp,php thephp userphp namephp cannotphp containphp php"php:php"
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$userphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Thephp userphp namephp cannotphp containphp php'php:php'php inphp php'Basicphp'php HTTPphp authenticationphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$authHeaderphp php=php php'Basicphp php'php php.php basephp6php4php_encodephp(php$userphp php.php php'php:php'php php.php php$passwordphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/casephp selfphp:php:AUTHphp_DIGESTphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp Implementphp digestphp authentication
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php/php/php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Httpphp_Clientphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php"Notphp aphp supportedphp HTTPphp authenticationphp typephp:php php'php$typephp'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$authHeaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anphp arrayphp ofphp parametersphp intophp aphp flatphp arrayphp ofphp php(keyphp,php valuephp)php pairs
php php php php php php*
php php php php php php*php Willphp flattenphp aphp potentiallyphp multiphp-dimentionalphp arrayphp ofphp parametersphp php(such
php php php php php php*php asphp POSTphp parametersphp)php intophp aphp flatphp arrayphp ofphp php(keyphp,php valuephp)php parisphp.php Inphp case
php php php php php php*php ofphp multiphp-dimentionalphp arraysphp,php squarephp bracketsphp php(php[php]php)php willphp bephp addedphp tophp the
php php php php php php*php keyphp tophp indicatephp anphp arrayphp.
php php php php php php*
php php php php php php*php php@sincephp php php1php.php9
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$parray
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php staticphp protectedphp functionphp php_flattenParametersArrayphp(php$parrayphp,php php$prefixphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php isphp_arrayphp(php$parrayphp)php)php php{
php php php php php php php php php php php php returnphp php$parrayphp;
php php php php php php php php php}

php php php php php php php php php$parametersphp php=php arrayphp(php)php;

php php php php php php php php foreachphp(php$parrayphp asphp php$namephp php=php>php php$valuephp)php php{

php php php php php php php php php php php php php/php/php Calculatephp arrayphp key
php php php php php php php php php php php php ifphp php(php$prefixphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_intphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php$prefixphp php.php php'php[php]php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php$prefixphp php.php php"php[php$namephp]php"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$keyphp php=php php$namephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$parametersphp php=php arrayphp_mergephp(php$parametersphp,php selfphp:php:php_flattenParametersArrayphp(php$valuephp,php php$keyphp)php)php;

php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$parametersphp[php]php php=php arrayphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$parametersphp;
php php php php php}

php}
