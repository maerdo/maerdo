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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Twitter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Twitterphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Restphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Restphp_Clientphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp/Resultphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Oauthphp_Consumer
php php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Consumerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Twitter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Twitterphp extendsphp Zendphp_Restphp_Client
php{

php php php php php/php*php*
php php php php php php*php php2php4php6php isphp thephp currentphp limitphp forphp aphp statusphp messagephp,php php1php4php0php charactersphp arephp displayed
php php php php php php*php initiallyphp,php withphp thephp remainderphp linkedphp fromphp thephp webphp UIphp orphp clientphp.php Thephp limitphp is
php php php php php php*php appliedphp tophp aphp htmlphp encodedphp UTFphp-php8php stringphp php(iphp.ephp.php entitiesphp arephp countedphp inphp thephp limit
php php php php php php*php whichphp mayphp appearphp unusualphp butphp isphp aphp securityphp measurephp)php.
php php php php php php*
php php php php php php*php Thisphp shouldphp bephp reviewedphp inphp thephp futurephp.php.php.
php php php php php php*php/
php php php php constphp STATUSphp_MAXphp_CHARACTERSphp php=php php2php4php6php;

php php php php php/php*php*
php php php php php php*php OAuthphp Endpoint
php php php php php php*php/
php php php php constphp OAUTHphp_BASEphp_URIphp php=php php'httpphp:php/php/twitterphp.comphp/oauthphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Httpphp_CookieJar
php php php php php php*php/
php php php php protectedphp php$php_cookieJarphp;

php php php php php/php*php*
php php php php php php*php Datephp formatphp forphp php'sincephp'php strings
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dateFormatphp php=php php'Dphp,php dphp Mphp Yphp Hphp:iphp:sphp Tphp'php;

php php php php php/php*php*
php php php php php php*php Username
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_usernamephp;

php php php php php/php*php*
php php php php php php*php Currentphp methodphp typephp php(forphp methodphp proxyingphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodTypephp;

php php php php php/php*php*
php php php php php php*php Zendphp_Oauthphp Consumer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Consumer
php php php php php php*php/
php php php php protectedphp php$php_oauthConsumerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Typesphp ofphp APIphp methods
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_methodTypesphp php=php arrayphp(
php php php php php php php php php'statusphp'php,
php php php php php php php php php'userphp'php,
php php php php php php php php php'directMessagephp'php,
php php php php php php php php php'friendshipphp'php,
php php php php php php php php php'accountphp'php,
php php php php php php php php php'favoritephp'php,
php php php php php php php php php'blockphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Optionsphp passedphp tophp constructor
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Localphp HTTPphp Clientphp clonedphp fromphp staticallyphp setphp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp php$php_localHttpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Optionalphp optionsphp array
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp,php Zendphp_Oauthphp_Consumerphp php$consumerphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setUriphp(php'httpphp:php/php/apiphp.twitterphp.comphp'php)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php$optionsphp[php'siteUrlphp'php]php php=php selfphp:php:OAUTHphp_BASEphp_URIphp;
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'usernamephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setUsernamephp(php$optionsphp[php'usernamephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'accessTokenphp'php]php)
php php php php php php php php php&php&php php$optionsphp[php'accessTokenphp'php]php instanceofphp Zendphp_Oauthphp_Tokenphp_Accessphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalHttpClientphp(php$optionsphp[php'accessTokenphp'php]php-php>getHttpClientphp(php$optionsphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setLocalHttpClientphp(clonephp selfphp:php:getHttpClientphp(php)php)php;
php php php php php php php php php php php php ifphp php(php$consumerphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_oauthConsumerphp php=php newphp Zendphp_Oauthphp_Consumerphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_oauthConsumerphp php=php php$consumerphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp localphp HTTPphp clientphp asphp distinctphp fromphp thephp staticphp HTTPphp client
php php php php php php*php asphp inheritedphp fromphp Zendphp_Restphp_Clientphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp php$client
php php php php php php*php php@returnphp self
php php php php php php*php/
php php php php publicphp functionphp setLocalHttpClientphp(Zendphp_Httpphp_Clientphp php$clientphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_localHttpClientphp php=php php$clientphp;
php php php php php php php php php$thisphp-php>php_localHttpClientphp-php>setHeadersphp(php'Acceptphp-Charsetphp'php,php php'ISOphp-php8php8php5php9php-php1php,utfphp-php8php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp localphp HTTPphp clientphp asphp distinctphp fromphp thephp staticphp HTTPphp client
php php php php php php*php inheritedphp fromphp Zendphp_Restphp_Client
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getLocalHttpClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localHttpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp forphp anphp authorisedphp state
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isAuthorisedphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getLocalHttpClientphp(php)php instanceofphp Zendphp_Oauthphp_Clientphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp username
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUsernamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_usernamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp username
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Servicephp_Twitter
php php php php php php*php/
php php php php publicphp functionphp setUsernamephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_usernamephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp servicephp methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Servicephp_Twitter
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exceptionphp Ifphp methodphp notphp inphp methodphp typesphp list
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_methodTypesphp)php)php php{
php php php php php php php php php php php php includephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp methodphp typephp php"php'php php.php php$typephp php.php php'php"php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_methodTypephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp overloading
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exceptionphp ifphp unablephp tophp findphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_oauthConsumerphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php$returnphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_oauthConsumerphp,php php$methodphp)php,php php$paramsphp)php;
php php php php php php php php php php php php ifphp php(php$returnphp instanceofphp Zendphp_Oauthphp_Tokenphp_Accessphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setLocalHttpClientphp(php$returnphp-php>getHttpClientphp(php$thisphp-php>php_optionsphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_methodTypephp)php)php php{
php php php php php php php php php php php php includephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp methodphp php"php'php php.php php$methodphp php.php php'php"php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$testphp php=php php$thisphp-php>php_methodTypephp php.php ucfirstphp(php$methodphp)php;
php php php php php php php php ifphp php(php!methodphp_existsphp(php$thisphp,php php$testphp)php)php php{
php php php php php php php php php php php php includephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp methodphp php"php'php php.php php$testphp php.php php'php"php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp,php php$testphp)php,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp HTTPphp authentication
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>isAuthorisedphp(php)php php&php&php php$thisphp-php>getUsernamephp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Twitterphp sessionphp isphp unauthorisedphp.php Youphp needphp tophp initializephp php'
php php php php php php php php php php php php php php php php php.php php'Zendphp_Servicephp_Twitterphp withphp anphp OAuthphp Accessphp Tokenphp orphp usephp php'
php php php php php php php php php php php php php php php php php.php php'itsphp OAuthphp functionalityphp tophp obtainphp anphp Accessphp Tokenphp beforephp php'
php php php php php php php php php php php php php php php php php.php php'attemptingphp anyphp APIphp actionsphp thatphp requirephp authorisationphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$clientphp php=php php$thisphp-php>php_localHttpClientphp;
php php php php php php php php php$clientphp-php>resetParametersphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php php$thisphp-php>php_cookieJarphp)php php{
php php php php php php php php php php php php php$clientphp-php>setCookieJarphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_cookieJarphp php=php php$clientphp-php>getCookieJarphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$clientphp-php>setCookieJarphp(php$thisphp-php>php_cookieJarphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp header
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$value
php php php php php php*php php@deprecatedphp Notphp supportedphp byphp Twitterphp sincephp Aprilphp php0php8php,php php2php0php0php9
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDatephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$datephp php=php datephp(php$thisphp-php>php_dateFormatphp,php php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$datephp php=php datephp(php$thisphp-php>php_dateFormatphp,php strtotimephp(php$valuephp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_localHttpClientphp-php>setHeadersphp(php'Ifphp-Modifiedphp-Sincephp'php,php php$datephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp Timelinephp status
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp statusPublicTimelinephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/publicphp_timelinephp.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Friendphp Timelinephp Status
php php php php php php*
php php php php php php*php php$paramsphp mayphp includephp onephp orphp morephp ofphp thephp followingphp keys
php php php php php php*php php-php idphp:php IDphp ofphp aphp friendphp whosephp timelinephp youphp wishphp tophp receive
php php php php php php*php php-php countphp:php howphp manyphp statusesphp tophp return
php php php php php php*php php-php sincephp_idphp:php returnphp resultsphp onlyphp afterphp thephp specificphp tweet
php php php php php php*php php-php pagephp:php returnphp pagephp Xphp ofphp results
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp statusFriendsTimelinephp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/friendsphp_timelinephp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'countphp'php:
php php php php php php php php php php php php php php php php php php php php php$countphp php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php>php=php php$countphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$countphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php2php0php0php <php php$countphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$countphp php=php php2php0php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'countphp'php]php php=php php(intphp)php php$countphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'sincephp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$pathphp php.php=php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Userphp Timelinephp status
php php php php php php*
php php php php php php*php php$paramsphp mayphp includephp onephp orphp morephp ofphp thephp followingphp keys
php php php php php php*php php-php idphp:php IDphp ofphp aphp friendphp whosephp timelinephp youphp wishphp tophp receive
php php php php php php*php php-php sincephp_idphp:php returnphp resultsphp onlyphp afterphp thephp tweetphp idphp specified
php php php php php php*php php-php pagephp:php returnphp pagephp Xphp ofphp results
php php php php php php*php php-php countphp:php howphp manyphp statusesphp tophp return
php php php php php php*php php-php maxphp_idphp:php returnsphp onlyphp statusesphp withphp anphp IDphp lessphp thanphp orphp equalphp tophp thephp specifiedphp ID
php php php php php php*php php-php userphp_idphp:php specifiesphp thephp IDphp ofphp thephp userphp forphp whomphp tophp returnphp thephp userphp_timeline
php php php php php php*php php-php screenphp_namephp:php specfiesphp thephp screenphp namephp ofphp thephp userphp forphp whomphp tophp returnphp thephp userphp_timeline
php php php php php php*php php-php includephp_rtsphp:php whetherphp orphp notphp tophp returnphp retweets
php php php php php php*php php-php trimphp_userphp:php whetherphp tophp returnphp justphp thephp userphp IDphp orphp aphp fullphp userphp objectphp;php omitphp tophp returnphp fullphp object
php php php php php php*php php-php includephp_entitiesphp:php whetherphp orphp notphp tophp returnphp entitiesphp nodesphp withphp tweetphp metadata
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp statusUserTimelinephp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/userphp_timelinephp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'idphp'php:
php php php php php php php php php php php php php php php php php php php php php$pathphp php.php=php php'php/php'php php.php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'countphp'php:
php php php php php php php php php php php php php php php php php php php php php$countphp php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php>php=php php$countphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$countphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php2php0php0php <php php$countphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$countphp php=php php2php0php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'countphp'php]php php=php php$countphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'userphp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'userphp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'screenphp_namephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'screenphp_namephp'php]php php=php php$thisphp-php>php_validateScreenNamephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'sincephp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'maxphp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'maxphp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'includephp_rtsphp'php:
php php php php php php php php php php php php php php php php casephp php'trimphp_userphp'php:
php php php php php php php php php php php php php php php php casephp php'includephp_entitiesphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[strtolowerphp(php$keyphp)php]php php=php php$valuephp php?php php'php1php'php php:php php'php0php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$pathphp php.php=php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Showphp aphp singlephp status
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp Idphp ofphp statusphp tophp show
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp statusShowphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/showphp/php'php php.php php$thisphp-php>php_validIntegerphp(php$idphp)php php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp userphp'sphp currentphp status
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$status
php php php php php php*php php@paramphp php intphp php$inphp_replyphp_tophp_statusphp_id
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exceptionphp ifphp messagephp isphp toophp shortphp orphp toophp long
php php php php php php*php/
php php php php publicphp functionphp statusUpdatephp(php$statusphp,php php$inReplyToStatusIdphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/updatephp.xmlphp'php;
php php php php php php php php php$lenphp php=php iconvphp_strlenphp(htmlspecialcharsphp(php$statusphp,php ENTphp_QUOTESphp,php php'UTFphp-php8php'php)php,php php'UTFphp-php8php'php)php;
php php php php php php php php ifphp php(php$lenphp php>php selfphp:php:STATUSphp_MAXphp_CHARACTERSphp)php php{
php php php php php php php php php php php php includephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Statusphp mustphp bephp nophp morephp thanphp php'
php php php php php php php php php php php php php php php php php.php selfphp:php:STATUSphp_MAXphp_CHARACTERS
php php php php php php php php php php php php php php php php php.php php'php charactersphp inphp lengthphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elseifphp php(php0php php=php=php php$lenphp)php php{
php php php php php php php php php php php php includephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Statusphp mustphp containphp atphp leastphp onephp characterphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$dataphp php=php arrayphp(php'statusphp'php php=php>php php$statusphp)php;
php php php php php php php php ifphp php(isphp_numericphp(php$inReplyToStatusIdphp)php php&php&php php!emptyphp(php$inReplyToStatusIdphp)php)php php{
php php php php php php php php php php php php php$dataphp[php'inphp_replyphp_tophp_statusphp_idphp'php]php php=php php$inReplyToStatusIdphp;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp,php php$dataphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp statusphp replies
php php php php php php*
php php php php php php*php php$paramsphp mayphp includephp onephp orphp morephp ofphp thephp followingphp keys
php php php php php php*php php-php sincephp_idphp:php returnphp resultsphp onlyphp afterphp thephp specifiedphp tweetphp id
php php php php php php*php php-php pagephp:php returnphp pagephp Xphp ofphp results
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp statusRepliesphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/mentionsphp.xmlphp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'sincephp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp aphp statusphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp IDphp ofphp statusphp tophp destroy
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp statusDestroyphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/destroyphp/php'php php.php php$thisphp-php>php_validIntegerphp(php$idphp)php php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Userphp friends
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$idphp Idphp orphp usernamephp ofphp userphp forphp whomphp tophp fetchphp friends
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp userFriendsphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/friendsphp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'idphp'php:
php php php php php php php php php php php php php php php php php php php php php$pathphp php.php=php php'php/php'php php.php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$pathphp php.php=php php'php.xmlphp'php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Userphp Followers
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$litephp Ifphp truephp,php preventsphp inlinephp inclusionphp ofphp currentphp statusphp forphp followersphp;php defaultsphp tophp false
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp userFollowersphp(php$litephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/statusesphp/followersphp.xmlphp'php;
php php php php php php php php ifphp php(php$litephp)php php{
php php php php php php php php php php php php php$thisphp-php>litephp php=php php'truephp'php;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Showphp extendedphp informationphp onphp aphp user
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$idphp Userphp IDphp orphp name
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp userShowphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/usersphp/showphp.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php arrayphp(php'idphp'php=php>php$idphp)php)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp directphp messagesphp forphp thephp currentphp user
php php php php php php*
php php php php php php*php php$paramsphp mayphp includephp onephp orphp morephp ofphp thephp followingphp keys
php php php php php php*php php-php sincephp_idphp:php returnphp statusesphp onlyphp greaterphp thanphp thephp onephp specified
php php php php php php*php php-php pagephp:php returnphp pagephp Xphp ofphp results
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp directMessageMessagesphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/directphp_messagesphp.xmlphp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'sincephp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp listphp ofphp directphp messagesphp sentphp byphp currentphp user
php php php php php php*
php php php php php php*php php$paramsphp mayphp includephp onephp orphp morephp ofphp thephp followingphp keys
php php php php php php*php php-php sincephp_idphp:php returnphp statusesphp onlyphp greaterphp thanphp thephp onephp specified
php php php php php php*php php-php pagephp:php returnphp pagephp Xphp ofphp results
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp directMessageSentphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/directphp_messagesphp/sentphp.xmlphp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'sincephp_idphp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'sincephp_idphp'php]php php=php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp directphp messagephp tophp aphp user
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$userphp Userphp tophp whomphp tophp sendphp message
php php php php php php*php php@paramphp php stringphp php$textphp Messagephp tophp sendphp tophp user
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exceptionphp ifphp messagephp isphp toophp shortphp orphp toophp long
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php/
php php php php publicphp functionphp directMessageNewphp(php$userphp,php php$textphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/directphp_messagesphp/newphp.xmlphp'php;
php php php php php php php php php$lenphp php=php iconvphp_strlenphp(php$textphp,php php'UTFphp-php8php'php)php;
php php php php php php php php ifphp php(php0php php=php=php php$lenphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Directphp messagephp mustphp containphp atphp leastphp onephp characterphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elseifphp php(php1php4php0php <php php$lenphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Directphp messagephp mustphp containphp nophp morephp thanphp php1php4php0php charactersphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$dataphp php=php arrayphp(php'userphp'php php=php>php php$userphp,php php'textphp'php php=php>php php$textphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp,php php$dataphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp aphp directphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp IDphp ofphp messagephp tophp destroy
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp directMessageDestroyphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/directphp_messagesphp/destroyphp/php'php php.php php$thisphp-php>php_validIntegerphp(php$idphp)php php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp friendship
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$idphp Userphp IDphp orphp namephp ofphp newphp friend
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp friendshipCreatephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/friendshipsphp/createphp/php'php php.php php$idphp php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp friendship
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$idphp Userphp IDphp orphp namephp ofphp friendphp tophp remove
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp friendshipDestroyphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/friendshipsphp/destroyphp/php'php php.php php$idphp php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Friendshipphp exists
php php php php php php*
php php php php php php*php php@paramphp intphp|stringphp php$idphp Userphp IDphp orphp namephp ofphp friendphp tophp seephp ifphp theyphp arephp yourphp friend
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_result
php php php php php php*php/
php php php php publicphp functionphp friendshipExistsphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/friendshipsphp/existsphp.xmlphp'php;
php php php php php php php php php$dataphp php=php arrayphp(php'userphp_aphp'php php=php>php php$thisphp-php>getUsernamephp(php)php,php php'userphp_bphp'php php=php>php php$idphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$dataphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp Accountphp Credentials
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp accountVerifyCredentialsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php'php/php1php/accountphp/verifyphp_credentialsphp.xmlphp'php)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp currentphp session
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp accountEndSessionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$thisphp-php>php_getphp(php'php/php1php/accountphp/endphp_sessionphp'php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp apiphp requestsphp youphp havephp leftphp perphp hourphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp accountRateLimitStatusphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php'php/php1php/accountphp/ratephp_limitphp_statusphp.xmlphp'php)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp favorites
php php php php php php*
php php php php php php*php php$paramsphp mayphp containphp onephp orphp morephp ofphp thephp followingphp:
php php php php php php*php php-php php'idphp'php:php Idphp ofphp aphp userphp forphp whomphp tophp fetchphp favorites
php php php php php php*php php-php php'pagephp'php:php Retrievephp aphp differentphp pagephp ofphp resuls
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp favoriteFavoritesphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/favoritesphp'php;
php php php php php php php php php$php_paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'idphp'php:
php php php php php php php php php php php php php php php php php php php php php$pathphp php.php=php php'php/php'php php.php php$thisphp-php>php_validIntegerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pagephp'php:
php php php php php php php php php php php php php php php php php php php php php$php_paramsphp[php'pagephp'php]php php=php php(intphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$pathphp php.php=php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php php$php_paramsphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp aphp statusphp asphp aphp favorite
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp Statusphp IDphp youphp wantphp tophp markphp asphp aphp favorite
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp favoriteCreatephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/favoritesphp/createphp/php'php php.php php$thisphp-php>php_validIntegerphp(php$idphp)php php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp favorite
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp Statusphp IDphp youphp wantphp tophp dephp-listphp asphp aphp favorite
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp favoriteDestroyphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/favoritesphp/destroyphp/php'php php.php php$thisphp-php>php_validIntegerphp(php$idphp)php php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Blocksphp thephp userphp specifiedphp inphp thephp IDphp parameterphp asphp thephp authenticatingphp userphp.
php php php php php php*php Destroysphp aphp friendshipphp tophp thephp blockedphp userphp ifphp itphp existsphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$idphp php php php php php php Thephp IDphp orphp screenphp namephp ofphp aphp userphp tophp blockphp.
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp blockCreatephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/blocksphp/createphp/php'php php.php php$idphp php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unphp-blocksphp thephp userphp specifiedphp inphp thephp IDphp parameterphp forphp thephp authenticatingphp user
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$idphp php php php php php php Thephp IDphp orphp screenphp_namephp ofphp thephp userphp tophp unphp-blockphp.
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp blockDestroyphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/blocksphp/destroyphp/php'php php.php php$idphp php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$pathphp)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp authenticatingphp userphp isphp blockingphp aphp targetphp userphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|integerphp php$idphp php php php Thephp IDphp orphp screenphp_namephp ofphp thephp potentiallyphp blockedphp userphp.
php php php php php php*php php@paramphp booleanphp php$returnResultphp Insteadphp ofphp returningphp aphp booleanphp returnphp thephp restphp responsephp fromphp twitter
php php php php php php*php php@returnphp Booleanphp|Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp blockExistsphp(php$idphp,php php$returnResultphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/blocksphp/existsphp/php'php php.php php$idphp php.php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp)php;

php php php php php php php php php$crphp php=php newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php ifphp php(php$returnResultphp php=php=php=php truephp)
php php php php php php php php php php php php returnphp php$crphp;

php php php php php php php php ifphp php(php!emptyphp(php$crphp-php>requestphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp userphp objectsphp thatphp thephp authenticatingphp userphp isphp blocking
php php php php php php*
php php php php php php*php php@paramphp integerphp php$pagephp php php php php php php php php Optionalphp.php Specifiesphp thephp pagephp numberphp ofphp thephp resultsphp beginningphp atphp php1php.php Aphp singlephp pagephp containsphp php2php0php idsphp.
php php php php php php*php php@paramphp booleanphp php$returnUserIdsphp php Optionalphp.php Returnsphp onlyphp thephp useridphp'sphp insteadphp ofphp thephp wholephp userphp object
php php php php php php*php php@returnphp Zendphp_Restphp_Clientphp_Result
php php php php php php*php/
php php php php publicphp functionphp blockBlockingphp(php$pagephp php=php php1php,php php$returnUserIdsphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php php$pathphp php=php php'php/php1php/blocksphp/blockingphp'php;
php php php php php php php php ifphp php(php$returnUserIdsphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$pathphp php.php=php php'php/idsphp'php;
php php php php php php php php php}
php php php php php php php php php$pathphp php.php=php php'php.xmlphp'php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_getphp(php$pathphp,php arrayphp(php'pagephp'php php=php>php php$pagephp)php)php;
php php php php php php php php returnphp newphp Zendphp_Restphp_Clientphp_Resultphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Protectedphp functionphp tophp validatephp thatphp thephp integerphp isphp validphp orphp returnphp aphp php0
php php php php php php*php php@paramphp php$int
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exceptionphp ifphp HTTPphp requestphp failsphp orphp timesphp out
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_validIntegerphp(php$intphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php"php/php(php\dphp+php)php/php"php,php php$intphp)php)php php{
php php php php php php php php php php php php returnphp php$intphp;
php php php php php php php php php}
php php php php php php php php returnphp php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp screenphp namephp usingphp Twitterphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@throwsphp Zendphp_Servicephp_Twitterphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_validateScreenNamephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php[aphp-zAphp-Zphp0php-php9php_php]php{php0php,php1php5php}php$php/php'php,php php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Twitterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Twitterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Screenphp namephp,php php"php'php php.php php$name
php php php php php php php php php php php php php php php php php.php php'php"php shouldphp onlyphp containphp alphanumericphp charactersphp andphp'
php php php php php php php php php php php php php php php php php.php php'php underscoresphp,php andphp notphp exceedphp php1php5php charactersphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp aphp remotephp RESTphp webphp servicephp URIphp andphp returnphp thephp Zendphp_Httpphp_Responsephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pathphp php php php php php php php php php php php Thephp pathphp tophp appendphp tophp thephp URI
php php php php php php*php php@throwsphp Zendphp_Restphp_Clientphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php$pathphp)
php php php php php{
php php php php php php php php php/php/php Getphp thephp URIphp objectphp andphp configurephp it
php php php php php php php php ifphp php(php!php$thisphp-php>php_uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Restphp_Clientphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'URIphp objectphp mustphp bephp setphp beforephp performingphp callphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$uriphp php=php php$thisphp-php>php_uriphp-php>getUriphp(php)php;

php php php php php php php php ifphp php(php$pathphp[php0php]php php!php=php php'php/php'php php&php&php php$uriphp[strlenphp(php$uriphp)php php-php php1php]php php!php=php php'php/php'php)php php{
php php php php php php php php php php php php php$pathphp php=php php'php/php'php php.php php$pathphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_uriphp-php>setPathphp(php$pathphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Getphp thephp HTTPphp clientphp andphp configurephp itphp forphp thephp endpointphp URIphp.
php php php php php php php php php php*php Dophp thisphp eachphp timephp becausephp thephp Zendphp_Httpphp_Clientphp instancephp isphp shared
php php php php php php php php php php*php amongphp allphp Zendphp_Servicephp_Abstractphp subclassesphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_localHttpClientphp-php>resetParametersphp(php)php-php>setUriphp(php(stringphp)php php$thisphp-php>php_uriphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp GETphp requestphp tophp thephp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp arrayphp php php$queryphp Arrayphp ofphp GETphp parameters
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp functionphp php_getphp(php$pathphp,php arrayphp php$queryphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_preparephp(php$pathphp)php;
php php php php php php php php php$thisphp-php>php_localHttpClientphp-php>setParameterGetphp(php$queryphp)php;
php php php php php php php php returnphp php$thisphp-php>php_localHttpClientphp-php>requestphp(Zendphp_Httpphp_Clientphp:php:GETphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp anphp HTTPphp POSTphp requestphp tophp php$pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp mixedphp php$dataphp Rawphp dataphp tophp send
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php protectedphp functionphp php_postphp(php$pathphp,php php$dataphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_preparephp(php$pathphp)php;
php php php php php php php php returnphp php$thisphp-php>php_performPostphp(Zendphp_Httpphp_Clientphp:php:POSTphp,php php$dataphp)php;
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
php php php php php php php php php$clientphp php=php php$thisphp-php>php_localHttpClientphp;
php php php php php php php php ifphp php(isphp_stringphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$dataphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$dataphp)php php|php|php isphp_objectphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$clientphp-php>setParameterPostphp(php(arrayphp)php php$dataphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$clientphp-php>requestphp(php$methodphp)php;
php php php php php}

php}
