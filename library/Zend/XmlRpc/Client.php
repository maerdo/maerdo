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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Clientphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Forphp handlingphp thephp HTTPphp connectionphp tophp thephp XMLphp-RPCphp service
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php Enablesphp objectphp chainingphp forphp callingphp namespacedphp XMLphp-RPCphp methodsphp.
php php*php php@seephp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/ServerProxyphp.phpphp'php;

php/php*php*
php php*php Introspectsphp remotephp serversphp usingphp thephp XMLphp-RPCphp dephp factophp systemphp.php*php methods
php php*php php@seephp Zendphp_XmlRpcphp_Clientphp_ServerIntrospection
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/ServerIntrospectionphp.phpphp'php;

php/php*php*
php php*php Representphp aphp nativephp XMLphp-RPCphp valuephp,php usedphp bothphp inphp sendingphp parameters
php php*php tophp methodsphp andphp asphp thephp parametersphp retrievephp fromphp methodphp calls
php php*php php@seephp Zendphp_XmlRpcphp_Value
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp.phpphp'php;

php/php*php*
php php*php XMLphp-RPCphp Request
php php*php php@seephp Zendphp_XmlRpcphp_Request
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Requestphp.phpphp'php;

php/php*php*
php php*php XMLphp-RPCphp Response
php php*php php@seephp Zendphp_XmlRpcphp_Response
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Responsephp.phpphp'php;

php/php*php*
php php*php XMLphp-RPCphp Fault
php php*php php@seephp Zendphp_XmlRpcphp_Fault
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Faultphp.phpphp'php;


php/php*php*
php php*php Anphp XMLphp-RPCphp clientphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Client
php{
php php php php php/php*php*
php php php php php php*php Fullphp addressphp ofphp thephp XMLphp-RPCphp service
php php php php php php*php php@varphp string
php php php php php php*php php@examplephp httpphp:php/php/timephp.xmlrpcphp.comphp/RPCphp2
php php php php php php*php/
php php php php protectedphp php$php_serverAddressphp;

php php php php php/php*php*
php php php php php php*php HTTPphp Clientphp tophp usephp forphp requests
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp php$php_httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Introspectionphp object
php php php php php php*php php@varphp Zendphp_Httpphp_Clientphp_Introspector
php php php php php php*php/
php php php php protectedphp php$php_introspectorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Requestphp ofphp thephp lastphp methodphp call
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php protectedphp php$php_lastRequestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Responsephp receivedphp fromphp thephp lastphp methodphp call
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Response
php php php php php php*php/
php php php php protectedphp php$php_lastResponsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Proxyphp objectphp forphp morephp convenientphp methodphp calls
php php php php php php*php php@varphp arrayphp ofphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php php php php php*php/
php php php php protectedphp php$php_proxyCachephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp forphp skippingphp systemphp lookup
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_skipSystemLookupphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp XMLphp-RPCphp clientphp tophp aphp remotephp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$serverphp php php php php php Fullphp addressphp ofphp thephp XMLphp-RPCphp service
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(ephp.gphp.php httpphp:php/php/timephp.xmlrpcphp.comphp/RPCphp2php)
php php php php php php*php php@paramphp php Zendphp_Httpphp_Clientphp php$httpClientphp HTTPphp Clientphp tophp usephp forphp requests
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$serverphp,php Zendphp_Httpphp_Clientphp php$httpClientphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$httpClientphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpClientphp php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_httpClientphp php=php php$httpClientphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_introspectorphp php php=php newphp Zendphp_XmlRpcphp_Clientphp_ServerIntrospectionphp(php$thisphp)php;
php php php php php php php php php$thisphp-php>php_serverAddressphp php=php php$serverphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp thephp HTTPphp clientphp objectphp tophp usephp forphp connectingphp thephp XMLphp-RPCphp serverphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Clientphp php$httpClient
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$httpClientphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpClientphp php=php php$httpClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getsphp thephp HTTPphp clientphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp thephp objectphp usedphp tophp introspectphp remotephp servers
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_XmlRpcphp_Clientphp_ServerIntrospection
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Clientphp_ServerIntrospection
php php php php php php*php/
php php php php publicphp functionphp setIntrospectorphp(Zendphp_XmlRpcphp_Clientphp_ServerIntrospectionphp php$introspectorphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_introspectorphp php=php php$introspectorphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getsphp thephp introspectionphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Clientphp_ServerIntrospection
php php php php php php*php/
php php php php publicphp functionphp getIntrospectorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_introspectorphp;
php php php php php}


php php php php/php*php*
php php php php php php*php Thephp requestphp ofphp thephp lastphp methodphp call
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php publicphp functionphp getLastRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lastRequestphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Thephp responsephp receivedphp fromphp thephp lastphp methodphp call
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Response
php php php php php php*php/
php php php php publicphp functionphp getLastResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lastResponsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp proxyphp objectphp forphp morephp convenientphp methodphp calls
php php php php php php*
php php php php php php*php php@paramphp php$namespacephp php Namespacephp tophp proxyphp orphp emptyphp stringphp forphp none
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php php php php php*php/
php php php php publicphp functionphp getProxyphp(php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_proxyCachephp[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php$proxyphp php=php newphp Zendphp_XmlRpcphp_Clientphp_ServerProxyphp(php$thisphp,php php$namespacephp)php;
php php php php php php php php php php php php php$thisphp-php>php_proxyCachephp[php$namespacephp]php php=php php$proxyphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_proxyCachephp[php$namespacephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp skipphp systemphp lookupphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Client
php php php php php php*php/
php php php php publicphp functionphp setSkipSystemLookupphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_skipSystemLookupphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Skipphp systemphp lookupphp whenphp determiningphp ifphp parameterphp shouldphp bephp arrayphp orphp structphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp skipSystemLookupphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_skipSystemLookupphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp anphp XMLphp-RPCphp requestphp andphp returnphp aphp responsephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_XmlRpcphp_Requestphp php$request
php php php php php php*php php@paramphp nullphp|Zendphp_XmlRpcphp_Responsephp php$response
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Clientphp_HttpException
php php php php php php*php/
php php php php publicphp functionphp doRequestphp(php$requestphp,php php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_lastRequestphp php=php php$requestphp;

php php php php php php php php iconvphp_setphp_encodingphp(php'inputphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php iconvphp_setphp_encodingphp(php'outputphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php'UTFphp-php8php'php)php;

php php php php php php php php php$httpphp php=php php$thisphp-php>getHttpClientphp(php)php;
php php php php php php php php ifphp(php$httpphp-php>getUriphp(php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$httpphp-php>setUriphp(php$thisphp-php>php_serverAddressphp)php;
php php php php php php php php php}

php php php php php php php php php$httpphp-php>setHeadersphp(arrayphp(
php php php php php php php php php php php php php'Contentphp-Typephp:php textphp/xmlphp;php charsetphp=utfphp-php8php'php,
php php php php php php php php php php php php php'Acceptphp:php textphp/xmlphp'php,
php php php php php php php php php)php)php;

php php php php php php php php ifphp php(php$httpphp-php>getHeaderphp(php'userphp-agentphp'php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$httpphp-php>setHeadersphp(arrayphp(php'Userphp-Agentphp:php Zendphp_XmlRpcphp_Clientphp'php)php)php;
php php php php php php php php php}

php php php php php php php php php$xmlphp php=php php$thisphp-php>php_lastRequestphp-php>php_php_toStringphp(php)php;
php php php php php php php php php$httpphp-php>setRawDataphp(php$xmlphp)php;
php php php php php php php php php$httpResponsephp php=php php$httpphp-php>requestphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;

php php php php php php php php ifphp php(php!php php$httpResponsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Exceptionphp thrownphp whenphp anphp HTTPphp errorphp occurs
php php php php php php php php php php php php php php*php php@seephp Zendphp_XmlRpcphp_Clientphp_HttpException
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/HttpExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Clientphp_HttpExceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$httpResponsephp-php>getMessagephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$httpResponsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$responsephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$responsephp php=php newphp Zendphp_XmlRpcphp_Responsephp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_lastResponsephp php=php php$responsephp;
php php php php php php php php php$thisphp-php>php_lastResponsephp-php>loadXmlphp(php$httpResponsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp anphp XMLphp-RPCphp requestphp tophp thephp servicephp php(forphp aphp specificphp methodphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp Namephp ofphp thephp methodphp wephp wantphp tophp call
php php php php php php*php php@paramphp php arrayphp php$paramsphp Arrayphp ofphp parametersphp forphp thephp method
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Clientphp_FaultException
php php php php php php*php/
php php php php publicphp functionphp callphp(php$methodphp,php php$paramsphp=arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>skipSystemLookupphp(php)php php&php&php php(php'systemphp.php'php php!php=php substrphp(php$methodphp,php php0php,php php7php)php)php)php php{
php php php php php php php php php php php php php/php/php Ensurephp emptyphp arrayphp/structphp paramsphp arephp castphp correctly
php php php php php php php php php php php php php/php/php Ifphp systemphp.php*php methodsphp arephp notphp availablephp,php bypassphp.php php(ZFphp-php2php9php7php8php)
php php php php php php php php php php php php php$successphp php=php truephp;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$signaturesphp php=php php$thisphp-php>getIntrospectorphp(php)php-php>getMethodSignaturephp(php$methodphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_XmlRpcphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$successphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$successphp)php php{
php php php php php php php php php php php php php php php php php$validTypesphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_ARRAYphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_BASEphp6php4php,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_BOOLEANphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_DATETIMEphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_DOUBLEphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_Iphp4php,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_INTEGERphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_NILphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_STRINGphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:XMLRPCphp_TYPEphp_STRUCTphp,
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp(php$paramsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$paramphp)php php{

php php php php php php php php php php php php php php php php php php php php ifphp php(php$paramphp instanceofphp Zendphp_XmlRpcphp_Valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$typephp php=php Zendphp_XmlRpcphp_Valuephp:php:AUTOphp_DETECTphp_TYPEphp;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$signaturesphp asphp php$signaturephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$signaturephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$signaturephp[php'parametersphp'php]php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php$signaturephp[php'parametersphp'php]php[php$keyphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php inphp_arrayphp(php$typephp,php php$validTypesphp)php php?php php$typephp php:php Zendphp_XmlRpcphp_Valuephp:php:AUTOphp_DETECTphp_TYPEphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$paramphp,php php$typephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$requestphp php=php php$thisphp-php>php_createRequestphp(php$methodphp,php php$paramsphp)php;

php php php php php php php php php$thisphp-php>doRequestphp(php$requestphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_lastResponsephp-php>isFaultphp(php)php)php php{
php php php php php php php php php php php php php$faultphp php=php php$thisphp-php>php_lastResponsephp-php>getFaultphp(php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Exceptionphp thrownphp whenphp anphp XMLphp-RPCphp faultphp isphp returned
php php php php php php php php php php php php php php*php php@seephp Zendphp_XmlRpcphp_Clientphp_FaultException
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/FaultExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Clientphp_FaultExceptionphp(php$faultphp-php>getMessagephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$faultphp-php>getCodephp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_lastResponsephp-php>getReturnValuephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php protectedphp functionphp php_createRequestphp(php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_XmlRpcphp_Requestphp(php$methodphp,php php$paramsphp)php;
php php php php php}
php}
