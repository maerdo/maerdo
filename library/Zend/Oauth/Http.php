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
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Httpphp_Utilityphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/Utilityphp.phpphp'php;

php/php*php*php Zendphp_Uriphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Http
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp allphp customphp servicephp parametersphp tophp bephp sentphp inphp thephp HTTPphp request
php php php php php php*php inphp additionphp tophp thephp usualphp OAuthphp parametersphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_parametersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp Zendphp_Oauthphp_Consumerphp instancephp inphp usephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_consumerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php OAuthphp specifiesphp threephp requestphp methodsphp,php thisphp holdsphp thephp currentphp preferred
php php php php php php*php onephp whichphp byphp defaultphp usesphp thephp Authorizationphp Headerphp approachphp forphp passing
php php php php php php*php OAuthphp parametersphp,php andphp aphp POSTphp bodyphp forphp nonphp-OAuthphp customphp parametersphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_preferredRequestSchemephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Requestphp Methodphp forphp thephp HTTPphp Requestphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_preferredRequestMethodphp php=php Zendphp_Oauthphp:php:POSTphp;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp thephp generalphp Zendphp_Oauthphp_Httpphp_Utilityphp classphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Httpphp_Utility
php php php php php php*php/
php php php php protectedphp php$php_httpUtilityphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Consumerphp php$consumer
php php php php php php*php php@paramphp php nullphp|arrayphp php$parameters
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Httpphp_Utilityphp php$utility
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(
php php php php php php php php Zendphp_Oauthphp_Consumerphp php$consumerphp,
php php php php php php php php arrayphp php$parametersphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_Utilityphp php$utilityphp php=php null
php php php php php)php php{
php php php php php php php php php$thisphp-php>php_consumerphp php=php php$consumerphp;
php php php php php php php php php$thisphp-php>php_preferredRequestSchemephp php=php php$thisphp-php>php_consumerphp-php>getRequestSchemephp(php)php;
php php php php php php php php ifphp php(php$parametersphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setParametersphp(php$parametersphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$utilityphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php php$utilityphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php newphp Zendphp_Oauthphp_Httpphp_Utilityphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp preferredphp HTTPphp requestphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Oauthphp_Http
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$methodphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$methodphp,php arrayphp(Zendphp_Oauthphp:php:POSTphp,php Zendphp_Oauthphp:php:GETphp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'invalidphp HTTPphp methodphp:php php'php php.php php$methodphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_preferredRequestMethodphp php=php php$methodphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preferredphp HTTPphp requestphp methodphp accessorphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_preferredRequestMethodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mutatorphp tophp setphp anphp arrayphp ofphp customphp parametersphp forphp thephp HTTPphp requestphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$customServiceParameters
php php php php php php*php php@returnphp Zendphp_Oauthphp_Http
php php php php php php*php/
php php php php publicphp functionphp setParametersphp(arrayphp php$customServiceParametersphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parametersphp php=php php$customServiceParametersphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Accessorphp forphp anphp arrayphp ofphp customphp parametersphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Consumerphp instancephp inphp usephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Consumer
php php php php php php*php/
php php php php publicphp functionphp getConsumerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_consumerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commencephp aphp requestphp cyclephp wherephp thephp currentphp HTTPphp methodphp andphp OAuth
php php php php php php*php requestphp schemephp setphp anphp upperphp preferredphp HTTPphp requestphp stylephp andphp where
php php php php php php*php failuresphp generatephp aphp newphp HTTPphp requestphp stylephp furtherphp downphp thephp OAuth
php php php php php php*php preferencephp listphp forphp OAuthphp Requestphp Schemesphp.
php php php php php php*php Onphp successphp,php returnphp thephp Requestphp objectphp thatphp resultsphp forphp processingphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp onphp HTTPphp requestphp errors
php php php php php php*php php@todophp php php Removephp cyclingphp?php;php Replacephp withphp upfrontphp dophp-orphp-diephp configuration
php php php php php php*php/
php php php php publicphp functionphp startRequestCyclephp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$responsephp php=php nullphp;
php php php php php php php php php$bodyphp php php php php php=php nullphp;
php php php php php php php php php$statusphp php php php=php nullphp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_attemptRequestphp(php$paramsphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Httpphp_Clientphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Errorphp inphp HTTPphp requestphp'php,php nullphp,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$responsephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$bodyphp php php php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php php php php php php$statusphp php=php php$responsephp-php>getStatusphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$responsephp php=php=php=php nullphp php/php/php Requestphp failurephp/exception
php php php php php php php php php php php php php|php|php php$statusphp php=php=php php5php0php0php php php/php/php Internalphp Serverphp Error
php php php php php php php php php php php php php|php|php php$statusphp php=php=php php4php0php0php php php/php/php Badphp Request
php php php php php php php php php php php php php|php|php php$statusphp php=php=php php4php0php1php php php/php/php Unauthorized
php php php php php php php php php php php php php|php|php emptyphp(php$bodyphp)php php php php php/php/php Missingphp token
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_assessRequestAttemptphp(php$responsephp)php;
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>startRequestCyclephp(php$paramsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp instancephp ofphp Zendphp_Httpphp_Clientphp configuredphp tophp usephp thephp Query
php php php php php php*php Stringphp schemephp forphp anphp OAuthphp drivenphp HTTPphp requestphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRequestSchemeQueryStringClientphp(arrayphp php$paramsphp,php php$urlphp)
php php php php php{
php php php php php php php php php$clientphp php=php Zendphp_Oauthphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php$clientphp-php>getUriphp(php)php-php>setQueryphp(
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp-php>toEncodedQueryStringphp(php$paramsphp)
php php php php php php php php php)php;
php php php php php php php php php$clientphp-php>setMethodphp(php$thisphp-php>php_preferredRequestMethodphp)php;
php php php php php php php php returnphp php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Managesphp thephp switchphp fromphp OAuthphp requestphp schemephp tophp anotherphp lowerphp preference
php php php php php php*php schemephp duringphp aphp requestphp cyclephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Response
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp ifphp unablephp tophp retrievephp validphp tokenphp response
php php php php php php*php/
php php php php protectedphp functionphp php_assessRequestAttemptphp(Zendphp_Httpphp_Responsephp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_preferredRequestSchemephp)php php{
php php php php php php php php php php php php casephp Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_HEADERphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_preferredRequestSchemephp php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODYphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODYphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_preferredRequestSchemephp php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_QUERYSTRINGphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Couldphp notphp retrievephp aphp validphp Tokenphp responsephp fromphp Tokenphp URLphp:php'
php php php php php php php php php php php php php php php php php php php php php.php php(php$responsephp php!php=php=php null
php php php php php php php php php php php php php php php php php php php php php php php php php?php PHPphp_EOLphp php.php php$responsephp-php>getBodyphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php:php php'php Nophp bodyphp php-php checkphp forphp headersphp'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp aphp validphp OAuthphp Authorizationphp headerphp basedphp onphp thephp provided
php php php php php php*php parametersphp andphp realmphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php stringphp php$realm
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_toAuthorizationHeaderphp(arrayphp php$paramsphp,php php$realmphp php=php nullphp)
php php php php php{
php php php php php php php php php$headerValuephp php=php arrayphp(php)php;
php php php php php php php php php$headerValuephp[php]php php=php php'OAuthphp realmphp=php"php'php php.php php$realmphp php.php php'php"php'php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^oauthphp_php/php"php,php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$headerValuephp[php]php php=php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(php$keyphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php=php"php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(php$valuephp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php"php'php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php"php,php"php,php php$headerValuephp)php;
php php php php php}
php}
