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
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Clientphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Servicephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Servicephp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Restphp_Clientphp_Resultphp php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp/Resultphp.phpphp'php;

php/php*php*php Zendphp_Uriphp php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Restphp_Clientphp extendsphp Zendphp_Servicephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Dataphp forphp thephp query
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php php/php*php*
php php php php php php*php Zendphp_Uriphp ofphp thisphp webphp service
php php php php php php*php php@varphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php protectedphp php$php_uriphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp_Httpphp php$uriphp URIphp forphp thephp webphp service
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$uriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$uriphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp URIphp tophp usephp inphp thephp request
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp_Httpphp php$uriphp URIphp forphp thephp webphp service
php php php php php php*php php@returnphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_uriphp php=php php$uriphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp requestphp URIphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php publicphp functionphp getUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_uriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp aphp remotephp RESTphp webphp servicephp URIphp andphp returnphp thephp Zendphp_Httpphp_Responsephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pathphp php php php php php php php php php php php Thephp pathphp tophp appendphp tophp thephp URI
php php php php php php*php php@throwsphp Zendphp_Restphp_Clientphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php finalphp privatephp functionphp php_prepareRestphp(php$pathphp)
php php php php php{
php php php php php php php php php/php/php Getphp thephp URIphp objectphp andphp configurephp it
php php php php php php php php ifphp php(php!php$thisphp-php>php_uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Restphp_Clientphp_Exceptionphp(php'URIphp objectphp mustphp bephp setphp beforephp performingphp callphp'php)php;
php php php php php php php php php}

php php php php php php php php php$uriphp php=php php$thisphp-php>php_uriphp-php>getUriphp(php)php;

php php php php php php php php ifphp php(php$pathphp[php0php]php php!php=php php'php/php'php php&php&php php$uriphp[strlenphp(php$uriphp)php-php1php]php php!php=php php'php/php'php)php php{
php php php php php php php php php php php php php$pathphp php=php php'php/php'php php.php php$pathphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_uriphp-php>setPathphp(php$pathphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Getphp thephp HTTPphp clientphp andphp configurephp itphp forphp thephp endpointphp URIphp.php php Dophp thisphp eachphp time
php php php php php php php php php php*php becausephp thephp Zendphp_Httpphp_Clientphp instancephp isphp sharedphp amongphp allphp Zendphp_Servicephp_Abstractphp subclassesphp.
php php php php php php php php php php*php/
php php php php php php php php selfphp:php:getHttpClientphp(php)php-php>resetParametersphp(php)php-php>setUriphp(php$thisphp-php>php_uriphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp GETphp requestphp tophp thephp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp arrayphp php php$queryphp Arrayphp ofphp GETphp parameters
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php finalphp publicphp functionphp restGetphp(php$pathphp,php arrayphp php$queryphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prepareRestphp(php$pathphp)php;
php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setParameterGetphp(php$queryphp)php;
php php php php php php php php returnphp php$clientphp-php>requestphp(php'GETphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp aphp POSTphp orphp PUT
php php php php php php*
php php php php php php*php Performsphp aphp POSTphp orphp PUTphp requestphp.php Anyphp dataphp providedphp isphp setphp inphp thephp HTTP
php php php php php php*php clientphp.php Stringphp dataphp isphp pushedphp inphp asphp rawphp POSTphp dataphp;php arrayphp orphp objectphp data
php php php php php php*php isphp pushedphp inphp asphp POSTphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$method
php php php php php php*php php@paramphp mixedphp php$data
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp functionphp php_performPostphp(php$methodphp,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php ifphp php(isphp_stringphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$dataphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$dataphp)php php|php|php isphp_objectphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$clientphp-php>setParameterPostphp(php(arrayphp)php php$dataphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$clientphp-php>requestphp(php$methodphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp POSTphp requestphp tophp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp mixedphp php$dataphp Rawphp dataphp tophp send
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php finalphp publicphp functionphp restPostphp(php$pathphp,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prepareRestphp(php$pathphp)php;
php php php php php php php php returnphp php$thisphp-php>php_performPostphp(php'POSTphp'php,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp PUTphp requestphp tophp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp mixedphp php$dataphp Rawphp dataphp tophp sendphp inphp request
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php finalphp publicphp functionphp restPutphp(php$pathphp,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prepareRestphp(php$pathphp)php;
php php php php php php php php returnphp php$thisphp-php>php_performPostphp(php'PUTphp'php,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp DELETEphp requestphp tophp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php finalphp publicphp functionphp restDeletephp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prepareRestphp(php$pathphp)php;
php php php php php php php php returnphp selfphp:php:getHttpClientphp(php)php-php>requestphp(php'DELETEphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp callphp overload
php php php php php php*
php php php php php php*php Allowsphp callingphp RESTphp actionsphp asphp objectphp methodsphp;php howeverphp,php youphp must
php php php php php php*php followphp-upphp byphp chainingphp thephp requestphp withphp aphp requestphp tophp anphp HTTPphp request
php php php php php php*php methodphp php(postphp,php getphp,php deletephp,php putphp)php:
php php php php php php*php php<codephp>
php php php php php php*php php$responsephp php=php php$restphp-php>sayHellophp(php'Foophp'php,php php'Manchuphp'php)php-php>getphp(php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php Orphp usephp themphp togetherphp,php butphp inphp sequentialphp callsphp:
php php php php php php*php php<codephp>
php php php php php php*php php$restphp-php>sayHellophp(php'Foophp'php,php php'Manchuphp'php)php;
php php php php php php*php php$responsephp php=php php$restphp-php>getphp(php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp stringphp php$methodphp Methodphp name
php php php php php php*php php@paramphp arrayphp php$argsphp Methodphp args
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Resultphp|Zendphp_Restphp_Clientphp Zendphp_Restphp_Clientphp ifphp using
php php php php php php*php aphp remotephp methodphp,php Zendphp_Restphp_Clientphp_Resultphp ifphp usingphp anphp HTTPphp requestphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$methodsphp php=php arrayphp(php'postphp'php,php php'getphp'php,php php'deletephp'php,php php'putphp'php)php;

php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$methodphp)php,php php$methodsphp)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$argsphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$argsphp[php0php]php php=php php$thisphp-php>php_uriphp-php>getPathphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'restphp'php]php php=php php1php;
php php php php php php php php php php php php php$dataphp php=php arrayphp_slicephp(php$argsphp,php php1php)php php+php php$thisphp-php>php_dataphp;
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php{php'restphp'php php.php php$methodphp}php(php$argsphp[php0php]php,php php$dataphp)php;
php php php php php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;php/php/Initializesphp forphp nextphp Restphp methodphp.
php php php php php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Morephp thanphp onephp argphp meansphp itphp'sphp definitelyphp aphp Zendphp_Restphp_Server
php php php php php php php php php php php php ifphp php(sizeofphp(php$argsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php/php/php Usesphp firstphp calledphp functionphp namephp asphp methodphp name
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'methodphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'methodphp'php]php php=php php$methodphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'argphp1php'php]php php php=php php$argsphp[php0php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$methodphp]php php php=php php$argsphp[php0php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'methodphp'php]php php=php php$methodphp;
php php php php php php php php php php php php php php php php ifphp php(sizeofphp(php$argsphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$argsphp asphp php$keyphp php=php>php php$argphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'argphp'php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$keyphp]php php=php php$argphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php}
php}
