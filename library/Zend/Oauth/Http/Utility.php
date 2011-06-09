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
php php*php php@versionphp php php php php$Idphp:php Utilityphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Httpphp_Utility
php{
php php php php php/php*php*
php php php php php php*php Assemblephp allphp parametersphp forphp aphp genericphp OAuthphp requestphp php-php iphp.ephp.php nophp special
php php php php php php*php paramsphp otherphp thanphp thephp defaultsphp expectedphp forphp anyphp OAuthphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$config
php php php php php php*php php@paramphp php nullphp|arrayphp php$serviceProviderParams
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp assembleParamsphp(
php php php php php php php php php$urlphp,
php php php php php php php php Zendphp_Oauthphp_Configphp_ConfigInterfacephp php$configphp,
php php php php php php php php arrayphp php$serviceProviderParamsphp php=php null
php php php php php)php php{
php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php'oauthphp_consumerphp_keyphp'php php php php php php=php>php php$configphp-php>getConsumerKeyphp(php)php,
php php php php php php php php php php php php php'oauthphp_noncephp'php php php php php php php php php php php php php=php>php php$thisphp-php>generateNoncephp(php)php,
php php php php php php php php php php php php php'oauthphp_signaturephp_methodphp'php php=php>php php$configphp-php>getSignatureMethodphp(php)php,
php php php php php php php php php php php php php'oauthphp_timestampphp'php php php php php php php php php=php>php php$thisphp-php>generateTimestampphp(php)php,
php php php php php php php php php php php php php'oauthphp_versionphp'php php php php php php php php php php php=php>php php$configphp-php>getVersionphp(php)php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$configphp-php>getTokenphp(php)php-php>getTokenphp(php)php php!php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp[php'oauthphp_tokenphp'php]php php=php php$configphp-php>getTokenphp(php)php-php>getTokenphp(php)php;
php php php php php php php php php}


php php php php php php php php ifphp php(php$serviceProviderParamsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$serviceProviderParamsphp)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'oauthphp_signaturephp'php]php php=php php$thisphp-php>signphp(
php php php php php php php php php php php php php$paramsphp,
php php php php php php php php php php php php php$configphp-php>getSignatureMethodphp(php)php,
php php php php php php php php php php php php php$configphp-php>getConsumerSecretphp(php)php,
php php php php php php php php php php php php php$configphp-php>getTokenphp(php)php-php>getTokenSecretphp(php)php,
php php php php php php php php php php php php php$configphp-php>getRequestMethodphp(php)php,
php php php php php php php php php php php php php$url
php php php php php php php php php)php;

php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givenphp bothphp OAuthphp parametersphp andphp anyphp customphp parameterephp,php generatephp an
php php php php php php*php encodedphp queryphp stringphp.php Thisphp methodphp expectsphp parametersphp tophp havephp been
php php php php php php*php assembledphp andphp signedphp beforehandphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@paramphp boolphp php$customParamsOnlyphp Ignoresphp OAuthphp paramsphp ephp.gphp.php forphp requestsphp usingphp OAuthphp Header
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toEncodedQueryStringphp(arrayphp php$paramsphp,php php$customParamsOnlyphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$customParamsOnlyphp)php php{
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^oauthphp_php/php"php,php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$encodedParamsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$encodedParamsphp[php]php php=php selfphp:php:urlEncodephp(php$keyphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php=php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php selfphp:php:urlEncodephp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php&php'php,php php$encodedParamsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp authorizationphp header
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php nullphp|stringphp php$realm
php php php php php php*php php@paramphp php boolphp php$excludeCustomParams
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp toAuthorizationHeaderphp(arrayphp php$paramsphp,php php$realmphp php=php nullphp,php php$excludeCustomParamsphp php=php truephp)
php php php php php{
php php php php php php php php php$headerValuephp php=php arrayphp(
php php php php php php php php php php php php php'OAuthphp realmphp=php"php'php php.php php$realmphp php.php php'php"php'php,
php php php php php php php php php)php;

php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$excludeCustomParamsphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^oauthphp_php/php"php,php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$headerValuephp[php]php php=php selfphp:php:urlEncodephp(php$keyphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php=php"php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php selfphp:php:urlEncodephp(php$valuephp)php php.php php'php"php'php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php"php,php"php,php php$headerValuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Signphp request
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php stringphp php$signatureMethod
php php php php php php*php php@paramphp php stringphp php$consumerSecret
php php php php php php*php php@paramphp php nullphp|stringphp php$tokenSecret
php php php php php php*php php@paramphp php nullphp|stringphp php$method
php php php php php php*php php@paramphp php nullphp|stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp signphp(
php php php php php php php php arrayphp php$paramsphp,php php$signatureMethodphp,php php$consumerSecretphp,php php$tokenSecretphp php=php nullphp,php php$methodphp php=php nullphp,php php$urlphp php=php null
php php php php php)php php{
php php php php php php php php php$classNamephp php=php php'php'php;
php php php php php php php php php$hashAlgophp php php=php nullphp;
php php php php php php php php php$partsphp php php php php php=php explodephp(php'php-php'php,php php$signatureMethodphp)php;
php php php php php php php php ifphp php(countphp(php$partsphp)php php>php php1php)php php{
php php php php php php php php php php php php php$classNamephp php=php php'Zendphp_Oauthphp_Signaturephp_php'php php.php ucfirstphp(strtolowerphp(php$partsphp[php0php]php)php)php;
php php php php php php php php php php php php php$hashAlgophp php php=php php$partsphp[php1php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classNamephp php=php php'Zendphp_Oauthphp_Signaturephp_php'php php.php ucfirstphp(strtolowerphp(php$signatureMethodphp)php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp strphp_replacephp(php'php_php'php,php php'php/php'php,php php$classNamephp)php php.php php'php.phpphp'php;
php php php php php php php php php$signatureObjectphp php=php newphp php$classNamephp(php$consumerSecretphp,php php$tokenSecretphp,php php$hashAlgophp)php;
php php php php php php php php returnphp php$signatureObjectphp-php>signphp(php$paramsphp,php php$methodphp,php php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp queryphp string
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$query
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp parseQueryStringphp(php$queryphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$queryphp)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Notphp remotelyphp perfectphp butphp beatsphp parsephp_strphp(php)php whichphp converts
php php php php php php php php php/php/php periodsphp andphp usesphp urldecodephp,php notphp rawurldecodephp.
php php php php php php php php php$partsphp php=php explodephp(php'php&php'php,php php$queryphp)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$pairphp)php php{
php php php php php php php php php php php php php$kvphp php=php explodephp(php'php=php'php,php php$pairphp)php;
php php php php php php php php php php php php php$paramsphp[rawurldecodephp(php$kvphp[php0php]php)php]php php=php rawurldecodephp(php$kvphp[php1php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp nonce
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateNoncephp(php)
php php php php php{
php php php php php php php php returnphp mdphp5php(uniqidphp(randphp(php)php,php truephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp timestamp
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp generateTimestampphp(php)
php php php php php{
php php php php php php php php returnphp timephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php urlencodephp aphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp urlEncodephp(php$valuephp)
php php php php php{
php php php php php php php php php$encodedphp php=php rawurlencodephp(php$valuephp)php;
php php php php php php php php php$encodedphp php=php strphp_replacephp(php'php%php7Ephp'php,php php'php~php'php,php php$encodedphp)php;
php php php php php php php php returnphp php$encodedphp;
php php php php php}
php}
