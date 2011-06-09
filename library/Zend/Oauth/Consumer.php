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
php php*php php@versionphp php php php php$Idphp:php Consumerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp.phpphp'php;

php/php*php*php Zendphp_Uriphp php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp_RequestTokenphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/RequestTokenphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp_UserAuthorizationphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/UserAuthorizationphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp_AccessTokenphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/AccessTokenphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Tokenphp_AuthorizedRequestphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Tokenphp/AuthorizedRequestphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Configphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Configphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Consumerphp extendsphp Zendphp_Oauth
php{
php php php php publicphp php$switcheroophp php=php falsephp;php php/php/php replacephp laterphp whenphp thisphp works

php php php php php/php*php*
php php php php php php*php Requestphp Tokenphp retrievedphp fromphp OAuthphp Provider
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Tokenphp_Request
php php php php php php*php/
php php php php protectedphp php$php_requestTokenphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Accessphp tokenphp retrievedphp fromphp OAuthphp Provider
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Tokenphp_Access
php php php php php php*php/
php php php php protectedphp php$php_accessTokenphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php createphp aphp newphp objectphp withphp anphp optionalphp arrayphp|Zendphp_Config
php php php php php php*php instancephp containingphp initialisingphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Oauthphp_Configphp;
php php php php php php php php ifphp php(php$optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_configphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptsphp tophp retrievephp aphp Requestphp Tokenphp fromphp anphp OAuthphp Providerphp whichphp is
php php php php php php*php laterphp exchangedphp forphp anphp authorizedphp Accessphp Tokenphp usedphp tophp accessphp the
php php php php php php*php protectedphp resourcesphp exposedphp byphp aphp webphp servicephp APIphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$customServiceParametersphp Nonphp-OAuthphp Providerphp-specifiedphp parameters
php php php php php php*php php@paramphp php nullphp|stringphp php$httpMethod
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Httpphp_RequestTokenphp php$request
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Request
php php php php php php*php/
php php php php publicphp functionphp getRequestTokenphp(
php php php php php php php php arrayphp php$customServiceParametersphp php=php nullphp,
php php php php php php php php php$httpMethodphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_RequestTokenphp php$requestphp php=php null
php php php php php)php php{
php php php php php php php php ifphp php(php$requestphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$requestphp php=php newphp Zendphp_Oauthphp_Httpphp_RequestTokenphp(php$thisphp,php php$customServiceParametersphp)php;
php php php php php php php php php}php elseifphp(php$customServiceParametersphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$requestphp-php>setParametersphp(php$customServiceParametersphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$httpMethodphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$requestphp-php>setMethodphp(php$httpMethodphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestphp-php>setMethodphp(php$thisphp-php>getRequestMethodphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestTokenphp php=php php$requestphp-php>executephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_requestTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Afterphp aphp Requestphp Tokenphp isphp retrievedphp,php thephp userphp mayphp bephp redirectedphp tophp the
php php php php php php*php OAuthphp Providerphp tophp authorizephp thephp applicationphp'sphp accessphp tophp their
php php php php php php*php protectedphp resourcesphp php-php thephp redirectphp URLphp beingphp providedphp byphp thisphp methodphp.
php php php php php php*php Oncephp thephp userphp hasphp authorizedphp thephp applicationphp forphp accessphp,php theyphp are
php php php php php php*php redirectedphp backphp tophp thephp applicationphp whichphp canphp nowphp exchangephp thephp previous
php php php php php php*php Requestphp Tokenphp forphp aphp fullyphp authorizedphp Accessphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$customServiceParameters
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Tokenphp_Requestphp php$token
php php php php php php*php php@paramphp php nullphp|Zendphp_OAuthphp_Httpphp_UserAuthorizationphp php$redirect
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRedirectUrlphp(
php php php php php php php php arrayphp php$customServiceParametersphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Tokenphp_Requestphp php$tokenphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_UserAuthorizationphp php$redirectphp php=php null
php php php php php)php php{
php php php php php php php php ifphp php(php$redirectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$redirectphp php=php newphp Zendphp_Oauthphp_Httpphp_UserAuthorizationphp(php$thisphp,php php$customServiceParametersphp)php;
php php php php php php php php php}php elseifphp(php$customServiceParametersphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$redirectphp-php>setParametersphp(php$customServiceParametersphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$tokenphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestTokenphp php=php php$tokenphp;
php php php php php php php php php}
php php php php php php php php returnphp php$redirectphp-php>getUrlphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Ratherphp thanphp retrievephp aphp redirectphp URLphp forphp usephp,php ephp.gphp.php fromphp aphp controllerphp,
php php php php php php*php onephp mayphp performphp anphp immediatephp redirectphp.
php php php php php php*
php php php php php php*php Sendsphp headersphp andphp exitphp(php)sphp onphp completionphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$customServiceParameters
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Tokenphp_Requestphp php$token
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Httpphp_UserAuthorizationphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp redirectphp(
php php php php php php php php arrayphp php$customServiceParametersphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Tokenphp_Requestphp php$tokenphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_UserAuthorizationphp php$requestphp php=php null
php php php php php)php php{
php php php php php php php php ifphp php(php$tokenphp instanceofphp Zendphp_Oauthphp_Httpphp_UserAuthorizationphp)php php{
php php php php php php php php php php php php php$requestphp php=php php$tokenphp;
php php php php php php php php php php php php php$tokenphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php php$redirectUrlphp php=php php$thisphp-php>getRedirectUrlphp(php$customServiceParametersphp,php php$tokenphp,php php$requestphp)php;
php php php php php php php php headerphp(php'Locationphp:php php'php php.php php$redirectUrlphp)php;
php php php php php php php php exitphp(php1php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp Accessphp Tokenphp inphp exchangephp forphp aphp previouslyphp receivedphp/authorized
php php php php php php*php Requestphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$queryDataphp GETphp dataphp returnedphp inphp userphp'sphp redirectphp fromphp Provider
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Tokenphp_Requestphp Requestphp Tokenphp information
php php php php php php*php php@paramphp php stringphp php$httpMethod
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Httpphp_AccessTokenphp php$request
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Access
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp onphp invalidphp authorizationphp tokenphp,php nonphp-matchingphp responsephp authorizationphp tokenphp,php orphp unprovidedphp authorizationphp token
php php php php php php*php/
php php php php publicphp functionphp getAccessTokenphp(
php php php php php php php php php$queryDataphp,
php php php php php php php php Zendphp_Oauthphp_Tokenphp_Requestphp php$tokenphp,
php php php php php php php php php$httpMethodphp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_AccessTokenphp php$requestphp php=php null
php php php php php)php php{
php php php php php php php php php$authorizedTokenphp php=php newphp Zendphp_Oauthphp_Tokenphp_AuthorizedRequestphp(php$queryDataphp)php;
php php php php php php php php ifphp php(php!php$authorizedTokenphp-php>isValidphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Responsephp fromphp Servicephp Providerphp isphp notphp aphp validphp authorizedphp requestphp tokenphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$requestphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$requestphp php=php newphp Zendphp_Oauthphp_Httpphp_AccessTokenphp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php OAuthphp php1php.php0aphp Verifier
php php php php php php php php ifphp php(php$authorizedTokenphp-php>getParamphp(php'oauthphp_verifierphp'php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$requestphp-php>getParametersphp(php)php,php arrayphp(
php php php php php php php php php php php php php php php php php'oauthphp_verifierphp'php php=php>php php$authorizedTokenphp-php>getParamphp(php'oauthphp_verifierphp'php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php$requestphp-php>setParametersphp(php$paramsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$httpMethodphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$requestphp-php>setMethodphp(php$httpMethodphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestphp-php>setMethodphp(php$thisphp-php>getRequestMethodphp(php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$tokenphp)php)php php{
php php php php php php php php php php php php ifphp php(php$authorizedTokenphp-php>getTokenphp(php)php php!php=php=php php$tokenphp-php>getTokenphp(php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Authorizedphp tokenphp fromphp Servicephp Providerphp doesphp notphp matchphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php suppliedphp Requestphp Tokenphp detailsphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Requestphp tokenphp mustphp bephp passedphp tophp methodphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestTokenphp php=php php$tokenphp;
php php php php php php php php php$thisphp-php>php_accessTokenphp php=php php$requestphp-php>executephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_accessTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whateverphp thephp lastphp Requestphp Tokenphp retrievedphp wasphp whilephp usingphp the
php php php php php php*php currentphp Consumerphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Request
php php php php php php*php/
php php php php publicphp functionphp getLastRequestTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whateverphp thephp lastphp Accessphp Tokenphp retrievedphp wasphp whilephp usingphp the
php php php php php php*php currentphp Consumerphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Access
php php php php php php*php/
php php php php publicphp functionphp getLastAccessTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_accessTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp tophp selfphp:php:getLastAccessTokenphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Tokenphp_Access
php php php php php php*php/
php php php php publicphp functionphp getTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_accessTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp Proxyphp tophp thephp currentphp Zendphp_Oauthphp_Configphp methodphp.php Itphp'sphp thatphp instance
php php php php php php*php whichphp holdsphp allphp configurationphp methodsphp andphp valuesphp thisphp objectphp alsophp presents
php php php php php php*php asphp itphp'sphp APIphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp ifphp methodphp doesphp notphp existphp inphp configphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php!methodphp_existsphp(php$thisphp-php>php_configphp,php php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Methodphp doesphp notphp existphp:php php'php.php$methodphp)php;
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_configphp,php$methodphp)php,php php$argsphp)php;
php php php php php}
php}
