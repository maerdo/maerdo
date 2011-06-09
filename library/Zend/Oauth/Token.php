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
php php*php php@versionphp php php php php$Idphp:php Tokenphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Httpphp_Utilityphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/Utilityphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Oauthphp_Token
php{
php php php php php/php*php*php@php+
php php php php php php*php Tokenphp constants
php php php php php php*php/
php php php php constphp TOKENphp_PARAMphp_KEYphp php php php php php php php php php php php php php php php php=php php'oauthphp_tokenphp'php;
php php php php constphp TOKENphp_SECRETphp_PARAMphp_KEYphp php php php php php php php php php=php php'oauthphp_tokenphp_secretphp'php;
php php php php constphp TOKENphp_PARAMphp_CALLBACKphp_CONFIRMEDphp php=php php'oauthphp_callbackphp_confirmedphp'php;
php php php php php/php*php*php@php-php*php/

php php php php php/php*php*
php php php php php php*php Tokenphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php OAuthphp responsephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Httpphp_Utility
php php php php php php*php/
php php php php protectedphp php$php_httpUtilityphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php basicphp setupphp forphp anyphp Tokenphp subclassphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|Zendphp_Httpphp_Responsephp php$response
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Httpphp_Utilityphp php$utility
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(
php php php php php php php php Zendphp_Httpphp_Responsephp php$responsephp php=php nullphp,
php php php php php php php php Zendphp_Oauthphp_Httpphp_Utilityphp php$utilityphp php=php null
php php php php php)php php{
php php php php php php php php ifphp php(php$responsephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php php php php php php$paramsphp php=php php$thisphp-php>php_parseParametersphp(php$responsephp)php;
php php php php php php php php php php php php ifphp php(countphp(php$paramsphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$utilityphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php php$utilityphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php newphp Zendphp_Oauthphp_Httpphp_Utilityphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptsphp tophp validatephp thephp Tokenphp parsedphp fromphp thephp HTTPphp responsephp php-php really
php php php php php php*php itphp'sphp justphp veryphp basicphp existencephp checksphp whichphp arephp minimalphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[selfphp:php:TOKENphp_PARAMphp_KEYphp]php)
php php php php php php php php php php php php php&php&php php!emptyphp(php$thisphp-php>php_paramsphp[selfphp:php:TOKENphp_PARAMphp_KEYphp]php)
php php php php php php php php php php php php php&php&php issetphp(php$thisphp-php>php_paramsphp[selfphp:php:TOKENphp_SECRETphp_PARAMphp_KEYphp]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp HTTPphp responsephp objectphp usedphp tophp initialisephp thisphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp forphp thephp thisphp Tokenphp'sphp secretphp whichphp mayphp bephp usedphp whenphp signing
php php php php php php*php requestsphp withphp thisphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$secret
php php php php php php*php php@returnphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php publicphp functionphp setTokenSecretphp(php$secretphp)
php php php php php{
php php php php php php php php php$thisphp-php>setParamphp(selfphp:php:TOKENphp_SECRETphp_PARAMphp_KEYphp,php php$secretphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thisphp Tokenphp'sphp secretphp whichphp mayphp bephp usedphp whenphp signing
php php php php php php*php requestsphp withphp thisphp Tokenphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenSecretphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getParamphp(selfphp:php:TOKENphp_SECRETphp_PARAMphp_KEYphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp forphp aphp parameterphp php(ephp.gphp.php tokenphp secretphp orphp otherphp)php andphp run
php php php php php php*php aphp simplephp filterphp tophp removephp anyphp trailingphp newlinesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp[php$keyphp]php php=php trimphp(php$valuephp,php php"php\nphp"php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp forphp somephp parametersphp php(ephp.gphp.php tokenphp secretphp orphp otherphp)php andphp run
php php php php php php*php aphp simplephp filterphp tophp removephp anyphp trailingphp newlinesphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp forphp aphp parameterphp php(ephp.gphp.php tokenphp secretphp orphp otherphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyphp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp forphp aphp Tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$token
php php php php php php*php php@returnphp Zendphp_Oauthphp_Token
php php php php php php*php/
php php php php publicphp functionphp setTokenphp(php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>setParamphp(selfphp:php:TOKENphp_PARAMphp_KEYphp,php php$tokenphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp valuephp forphp aphp Tokenphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getParamphp(selfphp:php:TOKENphp_PARAMphp_KEYphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Genericphp accessorphp tophp enablephp accessphp asphp publicphp propertiesphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getParamphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Genericphp mutatorphp tophp enablephp accessphp asphp publicphp propertiesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setParamphp(php$keyphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp Tokenphp tophp aphp stringphp,php specificallyphp aphp rawphp encodedphp queryphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpUtilityphp-php>toEncodedQueryStringphp(php$thisphp-php>php_paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp Tokenphp tophp aphp stringphp,php specificallyphp aphp rawphp encodedphp queryphp stringphp.
php php php php php php*php Aliasesphp tophp selfphp:php:toStringphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp aphp HTTPphp responsephp bodyphp andphp collectphp returnedphp parameters
php php php php php php*php asphp rawphp urlphp decodedphp keyphp-valuephp pairsphp inphp anphp associativephp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Responsephp php$response
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseParametersphp(Zendphp_Httpphp_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$bodyphp php php php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$bodyphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php validatephp bodyphp basedphp onphp acceptablephp charactersphp.php.php.todo
php php php php php php php php php$partsphp php=php explodephp(php'php&php'php,php php$bodyphp)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$kvpairphp)php php{
php php php php php php php php php php php php php$pairphp php=php explodephp(php'php=php'php,php php$kvpairphp)php;
php php php php php php php php php php php php php$paramsphp[rawurldecodephp(php$pairphp[php0php]php)php]php php=php rawurldecodephp(php$pairphp[php1php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Limitphp serialisationphp storedphp dataphp tophp thephp parameters
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_paramsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Afterphp serialisationphp,php rephp-instantiatephp aphp HTTPphp utilityphp classphp forphp use
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_httpUtilityphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php newphp Zendphp_Oauthphp_Httpphp_Utilityphp;
php php php php php php php php php}
php php php php php}
php}
