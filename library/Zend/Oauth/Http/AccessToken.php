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
php php*php php@versionphp php php php php$Idphp:php AccessTokenphp.phpphp php2php0php2php1php7php php2php0php1php0php-php0php1php-php1php2php php1php6php:php0php1php:php5php7Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Tokenphp_Accessphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Tokenphp/Accessphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Httpphp_AccessTokenphp extendsphp Zendphp_Oauthphp_Http
php{
php php php php php/php*php*
php php php php php php*php Singletonphp instancephp ifphp requiredphp ofphp thephp HTTPphp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp php$php_httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Initiatephp aphp HTTPphp requestphp tophp retrievephp anphp Accessphp Tokenphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Access
php php php php php php*php/
php php php php publicphp functionphp executephp(php)
php php php php php{
php php php php php php php php php$paramsphp php php php=php php$thisphp-php>assembleParamsphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>startRequestCyclephp(php$paramsphp)php;
php php php php php php php php php$returnphp php php php=php newphp Zendphp_Oauthphp_Tokenphp_Accessphp(php$responsephp)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblephp allphp parametersphp forphp anphp OAuthphp Accessphp Tokenphp requestphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp assembleParamsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php'oauthphp_consumerphp_keyphp'php php php php php php=php>php php$thisphp-php>php_consumerphp-php>getConsumerKeyphp(php)php,
php php php php php php php php php php php php php'oauthphp_noncephp'php php php php php php php php php php php php php=php>php php$thisphp-php>php_httpUtilityphp-php>generateNoncephp(php)php,
php php php php php php php php php php php php php'oauthphp_signaturephp_methodphp'php php=php>php php$thisphp-php>php_consumerphp-php>getSignatureMethodphp(php)php,
php php php php php php php php php php php php php'oauthphp_timestampphp'php php php php php php php php php=php>php php$thisphp-php>php_httpUtilityphp-php>generateTimestampphp(php)php,
php php php php php php php php php php php php php'oauthphp_tokenphp'php php php php php php php php php php php php php=php>php php$thisphp-php>php_consumerphp-php>getLastRequestTokenphp(php)php-php>getTokenphp(php)php,
php php php php php php php php php php php php php'oauthphp_versionphp'php php php php php php php php php php php=php>php php$thisphp-php>php_consumerphp-php>getVersionphp(php)php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_parametersphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$thisphp-php>php_parametersphp)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'oauthphp_signaturephp'php]php php=php php$thisphp-php>php_httpUtilityphp-php>signphp(
php php php php php php php php php php php php php$paramsphp,
php php php php php php php php php php php php php$thisphp-php>php_consumerphp-php>getSignatureMethodphp(php)php,
php php php php php php php php php php php php php$thisphp-php>php_consumerphp-php>getConsumerSecretphp(php)php,
php php php php php php php php php php php php php$thisphp-php>php_consumerphp-php>getLastRequestTokenphp(php)php-php>getTokenSecretphp(php)php,
php php php php php php php php php php php php php$thisphp-php>php_preferredRequestMethodphp,
php php php php php php php php php php php php php$thisphp-php>php_consumerphp-php>getAccessTokenUrlphp(php)
php php php php php php php php php)php;

php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp andphp returnphp aphp HTTPphp Clientphp configuredphp forphp thephp Headerphp Requestphp Scheme
php php php php php php*php specifiedphp byphp OAuthphp,php forphp usephp inphp requestingphp anphp Accessphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRequestSchemeHeaderClientphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php=php php$thisphp-php>php_cleanParamsOfIllegalCustomParametersphp(php$paramsphp)php;
php php php php php php php php php$headerValuephp php=php php$thisphp-php>php_toAuthorizationHeaderphp(php$paramsphp)php;
php php php php php php php php php$clientphp php php php php php php=php Zendphp_Oauthphp:php:getHttpClientphp(php)php;

php php php php php php php php php$clientphp-php>setUriphp(php$thisphp-php>php_consumerphp-php>getAccessTokenUrlphp(php)php)php;
php php php php php php php php php$clientphp-php>setHeadersphp(php'Authorizationphp'php,php php$headerValuephp)php;
php php php php php php php php php$clientphp-php>setMethodphp(php$thisphp-php>php_preferredRequestMethodphp)php;

php php php php php php php php returnphp php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp andphp returnphp aphp HTTPphp Clientphp configuredphp forphp thephp POSTphp Bodyphp Request
php php php php php php*php Schemephp specifiedphp byphp OAuthphp,php forphp usephp inphp requestingphp anphp Accessphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRequestSchemePostBodyClientphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_cleanParamsOfIllegalCustomParametersphp(php$paramsphp)php;
php php php php php php php php php$clientphp php=php Zendphp_Oauthphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$thisphp-php>php_consumerphp-php>getAccessTokenUrlphp(php)php)php;
php php php php php php php php php$clientphp-php>setMethodphp(php$thisphp-php>php_preferredRequestMethodphp)php;
php php php php php php php php php$clientphp-php>setRawDataphp(
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp-php>toEncodedQueryStringphp(php$paramsphp)
php php php php php php php php php)php;
php php php php php php php php php$clientphp-php>setHeadersphp(
php php php php php php php php php php php php Zendphp_Httpphp_Clientphp:php:CONTENTphp_TYPEphp,
php php php php php php php php php php php php Zendphp_Httpphp_Clientphp:php:ENCphp_URLENCODED
php php php php php php php php php)php;
php php php php php php php php returnphp php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp andphp returnphp aphp HTTPphp Clientphp configuredphp forphp thephp Queryphp Stringphp Request
php php php php php php*php Schemephp specifiedphp byphp OAuthphp,php forphp usephp inphp requestingphp anphp Accessphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRequestSchemeQueryStringClientphp(arrayphp php$paramsphp,php php$urlphp)
php php php php php{
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_cleanParamsOfIllegalCustomParametersphp(php$paramsphp)php;
php php php php php php php php returnphp parentphp:php:getRequestSchemeQueryStringClientphp(php$paramsphp,php php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp aphp requestphp basedphp onphp thephp currentphp configuredphp OAuthphp Requestphp Schemephp and
php php php php php php*php returnphp thephp resultingphp HTTPphp Responsephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp functionphp php_attemptRequestphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_preferredRequestSchemephp)php php{
php php php php php php php php php php php php casephp Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_HEADERphp:
php php php php php php php php php php php php php php php php php$httpClientphp php=php php$thisphp-php>getRequestSchemeHeaderClientphp(php$paramsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODYphp:
php php php php php php php php php php php php php php php php php$httpClientphp php=php php$thisphp-php>getRequestSchemePostBodyClientphp(php$paramsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_QUERYSTRINGphp:
php php php php php php php php php php php php php php php php php$httpClientphp php=php php$thisphp-php>getRequestSchemeQueryStringClientphp(php$paramsphp,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_consumerphp-php>getAccessTokenUrlphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$httpClientphp-php>requestphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Accessphp Tokenphp requestsphp specificallyphp mayphp notphp containphp nonphp-OAuthphp parametersphp.
php php php php php php*php Sophp thesephp shouldphp bephp stripedphp outphp andphp excludedphp.php Detectionphp isphp easyphp since
php php php php php php*php specifiedphp OAuthphp parametersphp startphp withphp php"oauthphp_php"php,php Extensionphp paramsphp start
php php php php php php*php withphp php"xouthphp_php"php,php andphp nophp otherphp parametersphp shouldphp usephp thesephp prefixesphp.
php php php php php php*
php php php php php php*php xouthphp paramsphp arephp notphp currentlyphp allowablephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_cleanParamsOfIllegalCustomParametersphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^oauthphp_php/php"php,php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}
php}
