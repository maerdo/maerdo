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
php php*php php@versionphp php php php php$Idphp:php Configphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp.phpphp'php;

php/php*php*php Zendphp_Uriphp php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Configphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Configphp/ConfigInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Configphp implementsphp Zendphp_Oauthphp_Configphp_ConfigInterface
php{
php php php php php/php*php*
php php php php php php*php Signaturephp methodphp usedphp whenphp signingphp allphp parametersphp forphp anphp HTTPphp request
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_signatureMethodphp php=php php'HMACphp-SHAphp1php'php;

php php php php php/php*php*
php php php php php php*php Threephp requestphp schemesphp arephp definedphp byphp OAuthphp,php ofphp whichphp passing
php php php php php php*php allphp OAuthphp parametersphp byphp Headerphp isphp preferredphp.php Thephp otherphp twophp are
php php php php php php*php POSTphp Bodyphp andphp Queryphp Stringphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_requestSchemephp php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_HEADERphp;

php php php php php/php*php*
php php php php php php*php Preferredphp requestphp Methodphp php-php onephp ofphp GETphp orphp POSTphp php-php whichphp Zendphp_Oauth
php php php php php php*php willphp enforcephp asphp standardphp throughoutphp thephp libraryphp.php Generallyphp aphp default
php php php php php php*php ofphp POSTphp worksphp finephp unlessphp aphp Providerphp specificallyphp requiresphp otherwisephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_requestMethodphp php=php Zendphp_Oauthphp:php:POSTphp;

php php php php php/php*php*
php php php php php php*php OAuthphp Versionphp;php Thisphp defaultsphp tophp php1php.php0php php-php Mustphp notphp bephp changedphp!
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_versionphp php=php php'php1php.php0php'php;

php php php php php/php*php*
php php php php php php*php Thisphp optionalphp valuephp isphp usedphp tophp definephp wherephp thephp userphp isphp redirectedphp to
php php php php php php*php afterphp authorizingphp aphp Requestphp Tokenphp fromphp anphp OAuthphp Providersphp websitephp.
php php php php php php*php Itphp'sphp optionalphp sincephp aphp Providerphp mayphp askphp forphp thisphp tophp bephp definedphp inphp advance
php php php php php php*php whenphp registeringphp aphp newphp applicationphp forphp aphp Consumerphp Keyphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_callbackUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp rootphp tophp appendphp defaultphp OAuthphp endpointphp pathsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_siteUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp tophp whichphp requestsphp forphp aphp Requestphp Tokenphp shouldphp bephp directedphp.
php php php php php php*php Whenphp absentphp,php assumedphp siteUrlphp+php'php/requestphp_tokenphp'
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_requestTokenUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp tophp whichphp requestsphp forphp anphp Accessphp Tokenphp shouldphp bephp directedphp.
php php php php php php*php Whenphp absentphp,php assumedphp siteUrlphp+php'php/accessphp_tokenphp'
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_accessTokenUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp tophp whichphp usersphp shouldphp bephp redirectedphp tophp authorizephp aphp Requestphp Tokenphp.
php php php php php php*php Whenphp absentphp,php assumedphp siteUrlphp+php'php/authorizephp'
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_authorizeUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Anphp OAuthphp applicationphp'sphp Consumerphp Keyphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_consumerKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Everyphp Consumerphp Keyphp hasphp aphp Consumerphp Secretphp unlessphp youphp'rephp inphp RSAphp-landphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_consumerSecretphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Ifphp relevantphp,php aphp PEMphp encodedphp RSAphp privatephp keyphp encapsulatedphp asphp a
php php php php php php*php Zendphp_Cryptphp_Rsaphp Key
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cryptphp_Rsaphp_Keyphp_Private
php php php php php php*php/
php php php php protectedphp php$php_rsaPrivateKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Ifphp relevantphp,php aphp PEMphp encodedphp RSAphp publicphp keyphp encapsulatedphp asphp a
php php php php php php*php Zendphp_Cryptphp_Rsaphp Key
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cryptphp_Rsaphp_Keyphp_Public
php php php php php php*php/
php php php php protectedphp php$php_rsaPublicKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Generallyphp thisphp willphp nearlyphp alwaysphp bephp anphp Accessphp Tokenphp representedphp asphp a
php php php php php php*php Zendphp_Oauthphp_Tokenphp_Accessphp objectphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php protectedphp php$php_tokenphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php createphp aphp newphp objectphp withphp anphp optionalphp arrayphp|Zendphp_Config
php php php php php php*php instancephp containingphp initialisingphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp optionphp arrayphp orphp Zendphp_Configphp instancephp andphp setupphp optionsphp usingphp their
php php php php php php*php relevantphp mutatorsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'consumerKeyphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setConsumerKeyphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'consumerSecretphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setConsumerSecretphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'signatureMethodphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSignatureMethodphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'versionphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setVersionphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'callbackUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCallbackUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'siteUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSiteUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'requestTokenUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setRequestTokenUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'accessTokenUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setAccessTokenUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'userAuthorizationUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setUserAuthorizationUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'authorizeUrlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setAuthorizeUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'requestMethodphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rsaPrivateKeyphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setRsaPrivateKeyphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rsaPublicKeyphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setRsaPublicKeyphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'requestSchemephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestSchemephp(php$optionsphp[php'requestSchemephp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp consumerphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setConsumerKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_consumerKeyphp php=php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp consumerphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getConsumerKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_consumerKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp consumerphp secret
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$secret
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setConsumerSecretphp(php$secretphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_consumerSecretphp php=php php$secretphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp consumerphp secret
php php php php php php*
php php php php php php*php Returnsphp RSAphp privatephp keyphp ifphp setphp;php otherwisephp,php returnsphp anyphp previouslyphp set
php php php php php php*php consumerphp secretphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getConsumerSecretphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_rsaPrivateKeyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_rsaPrivateKeyphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_consumerSecretphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp signaturephp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp ifphp unsupportedphp signaturephp methodphp specified
php php php php php php*php/
php php php php publicphp functionphp setSignatureMethodphp(php$methodphp)
php php php php php{
php php php php php php php php php$methodphp php=php strtoupperphp(php$methodphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$methodphp,php arrayphp(
php php php php php php php php php php php php php php php php php'HMACphp-SHAphp1php'php,php php'HMACphp-SHAphp2php5php6php'php,php php'RSAphp-SHAphp1php'php,php php'PLAINTEXTphp'
php php php php php php php php php php php php php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Unsupportedphp signaturephp methodphp:php php'
php php php php php php php php php php php php php php php php php.php php$method
php php php php php php php php php php php php php php php php php.php php'php.php Supportedphp arephp HMACphp-SHAphp1php,php RSAphp-SHAphp1php,php PLAINTEXTphp andphp HMACphp-SHAphp2php5php6php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_signatureMethodphp php=php php$methodphp;php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp signaturephp method
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSignatureMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_signatureMethodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp scheme
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$scheme
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp ifphp invalidphp schemephp specifiedphp,php orphp ifphp POSTBODYphp setphp whenphp requestphp methodphp ofphp GETphp isphp specified
php php php php php php*php/
php php php php publicphp functionphp setRequestSchemephp(php$schemephp)
php php php php php{
php php php php php php php php php$schemephp php=php strtolowerphp(php$schemephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$schemephp,php arrayphp(
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_HEADERphp,
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODYphp,
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_QUERYSTRINGphp,
php php php php php php php php php php php php php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$schemephp php.php php'php\php'php isphp anphp unsupportedphp requestphp schemephp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$schemephp php=php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODY
php php php php php php php php php php php php php&php&php php$thisphp-php>getRequestMethodphp(php)php php=php=php Zendphp_Oauthphp:php:GET
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Cannotphp setphp POSTBODYphp requestphp methodphp ifphp HTTPphp methodphp setphp tophp GETphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestSchemephp php=php php$schemephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp scheme
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRequestSchemephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestSchemephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp version
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setVersionphp(php$versionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_versionphp php=php php$versionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp version
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_versionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setCallbackUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackUrlphp php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCallbackUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_callbackUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp sitephp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setSiteUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_siteUrlphp php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sitephp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSiteUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_siteUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp tokenphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setRequestTokenUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestTokenUrlphp php=php rtrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp tokenphp URL
php php php php php php*
php php php php php php*php Ifphp nophp requestphp tokenphp URLphp hasphp beenphp setphp,php butphp aphp sitephp URLphp hasphp,php returnsphp the
php php php php php php*php sitephp URLphp withphp thephp stringphp php"php/requestphp_tokenphp"php appendedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRequestTokenUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_requestTokenUrlphp php&php&php php$thisphp-php>php_siteUrlphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_siteUrlphp php.php php'php/requestphp_tokenphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_requestTokenUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp accessphp tokenphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setAccessTokenUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_accessTokenUrlphp php=php rtrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp accessphp tokenphp URL
php php php php php php*
php php php php php php*php Ifphp nophp accessphp tokenphp URLphp hasphp beenphp setphp,php butphp aphp sitephp URLphp hasphp,php returnsphp the
php php php php php php*php sitephp URLphp withphp thephp stringphp php"php/accessphp_tokenphp"php appendedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAccessTokenUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_accessTokenUrlphp php&php&php php$thisphp-php>php_siteUrlphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_siteUrlphp php.php php'php/accessphp_tokenphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_accessTokenUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp userphp authorizationphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setUserAuthorizationUrlphp(php$urlphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setAuthorizeUrlphp(php$urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp authorizationphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp URLs
php php php php php php*php/
php php php php publicphp functionphp setAuthorizeUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php\php'php'php php.php php$urlphp php.php php'php\php'php isphp notphp aphp validphp URIphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_authorizeUrlphp php=php rtrimphp(php$urlphp,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp userphp authorizationphp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUserAuthorizationUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAuthorizeUrlphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp authorizationphp URL
php php php php php php*
php php php php php php*php Ifphp nophp authorizationphp URLphp hasphp beenphp setphp,php butphp aphp sitephp URLphp hasphp,php returnsphp the
php php php php php php*php sitephp URLphp withphp thephp stringphp php"php/authorizephp"php appendedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAuthorizeUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_authorizeUrlphp php&php&php php$thisphp-php>php_siteUrlphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_siteUrlphp php.php php'php/authorizephp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_authorizeUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp forphp invalidphp requestphp methods
php php php php php php*php/
php php php php publicphp functionphp setRequestMethodphp(php$methodphp)
php php php php php{
php php php php php php php php php$methodphp php=php strtoupperphp(php$methodphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$methodphp,php arrayphp(
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:GETphp,
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:POSTphp,
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:PUTphp,
php php php php php php php php php php php php php php php php Zendphp_Oauthphp:php:DELETEphp,
php php php php php php php php php php php php php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Invalidphp methodphp:php php'php php.php php$methodphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestMethodphp php=php php$methodphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp method
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRequestMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestMethodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp RSAphp publicphp key
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp php$key
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setRsaPublicKeyphp(Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rsaPublicKeyphp php=php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp RSAphp publicphp key
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cryptphp_Rsaphp_Keyphp_Public
php php php php php php*php/
php php php php publicphp functionphp getRsaPublicKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rsaPublicKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp RSAphp privatephp key
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp php$key
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setRsaPrivateKeyphp(Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rsaPrivateKeyphp php=php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp RSAphp privatephp key
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cryptphp_Rsaphp_Keyphp_Private
php php php php php php*php/
php php php php publicphp functionphp getRsaPrivateKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rsaPrivateKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp OAuthphp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Oauthphp_Tokenphp php$token
php php php php php php*php php@returnphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php publicphp functionphp setTokenphp(Zendphp_Oauthphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tokenphp php=php php$tokenphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp OAuthphp token
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php publicphp functionphp getTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tokenphp;
php php php php php}
php}
