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
php php*php php@subpackagephp Akismet
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Akismetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Version
php php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Abstractphp.phpphp'php;


php/php*php*
php php*php Akismetphp RESTphp servicephp implementation
php php*
php php*php php@usesphp php php php php php php Zendphp_Servicephp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Akismet
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Akismetphp extendsphp Zendphp_Servicephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Akismetphp APIphp key
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_apiKeyphp;

php php php php php/php*php*
php php php php php php*php Blogphp URL
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_blogUrlphp;

php php php php php/php*php*
php php php php php php*php Charsetphp usedphp forphp encoding
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_charsetphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php TCPphp/IPphp portphp tophp usephp inphp requests
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_portphp php=php php8php0php;

php php php php php/php*php*
php php php php php php*php Userphp Agentphp stringphp tophp sendphp inphp requests
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_userAgentphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$apiKeyphp Akismetphp APIphp key
php php php php php php*php php@paramphp stringphp php$blogphp Blogphp URL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$apiKeyphp,php php$blogphp)
php php php php php{
php php php php php php php php php$thisphp-php>setBlogUrlphp(php$blogphp)
php php php php php php php php php php php php php php-php>setApiKeyphp(php$apiKeyphp)
php php php php php php php php php php php php php php-php>setUserAgentphp(php'Zendphp Frameworkphp/php'php php.php Zendphp_Versionphp:php:VERSIONphp php.php php'php php|php Akismetphp/php1php.php1php1php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp blogphp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBlogUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_blogUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp blogphp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$blogUrl
php php php php php php*php php@returnphp Zendphp_Servicephp_Akismet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp ifphp invalidphp URLphp provided
php php php php php php*php/
php php php php publicphp functionphp setBlogUrlphp(php$blogUrlphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$blogUrlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Invalidphp urlphp providedphp forphp blogphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_blogUrlphp php=php php$blogUrlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp APIphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getApiKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_apiKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp APIphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$apiKey
php php php php php php*php php@returnphp Zendphp_Servicephp_Akismet
php php php php php php*php/
php php php php publicphp functionphp setApiKeyphp(php$apiKeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_apiKeyphp php=php php$apiKeyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp charset
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCharsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_charsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp charset
php php php php php php*
php php php php php php*php php@paramphp stringphp php$charset
php php php php php php*php php@returnphp Zendphp_Servicephp_Akismet
php php php php php php*php/
php php php php publicphp functionphp setCharsetphp(php$charsetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_charsetphp php=php php$charsetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp TCPphp/IPphp port
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPortphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_portphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp TCPphp/IPphp port
php php php php php php*
php php php php php php*php php@paramphp intphp php$port
php php php php php php*php php@returnphp Zendphp_Servicephp_Akismet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp ifphp nonphp-integerphp valuephp provided
php php php php php php*php/
php php php php publicphp functionphp setPortphp(php$portphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$portphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Invalidphp portphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_portphp php=php php$portphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp Userphp Agentphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUserAgentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_userAgentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Userphp Agent
php php php php php php*
php php php php php php*php Shouldphp bephp ofphp formphp php"Somephp userphp agentphp/versionphp php|php Akismetphp/versionphp"
php php php php php php*
php php php php php php*php php@paramphp stringphp php$userAgent
php php php php php php*php php@returnphp Zendphp_Servicephp_Akismet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp withphp invalidphp userphp agentphp string
php php php php php php*php/
php php php php publicphp functionphp setUserAgentphp(php$userAgentphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$userAgentphp)
php php php php php php php php php php php php php|php|php php!pregphp_matchphp(php"php:php^php[php^php\nphp/php]php*php/php[php^php php]php*php php\php|php Akismetphp/php[php0php-php9php\php.php]php*php$php:iphp"php,php php$userAgentphp)php)
php php php php php php php php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Invalidphp Userphp Agentphp stringphp;php mustphp bephp ofphp formatphp php"Applicationphp namephp/versionphp php|php Akismetphp/versionphp"php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_userAgentphp php=php php$userAgentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Postphp aphp request
php php php php php php*
php php php php php php*php php@paramphp stringphp php$host
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp arrayphp php php$params
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_postphp(php$hostphp,php php$pathphp,php arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$uriphp php php php php=php php'httpphp:php/php/php'php php.php php$hostphp php.php php'php:php'php php.php php$thisphp-php>getPortphp(php)php php.php php$pathphp;
php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php$clientphp-php>setConfigphp(arrayphp(
php php php php php php php php php php php php php'useragentphp'php php php php php=php>php php$thisphp-php>getUserAgentphp(php)php,
php php php php php php php php php)php)php;

php php php php php php php php php$clientphp-php>setHeadersphp(arrayphp(
php php php php php php php php php php php php php'Hostphp'php php php php php php php php php php=php>php php$hostphp,
php php php php php php php php php php php php php'Contentphp-Typephp'php php=php>php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp;php charsetphp=php'php php.php php$thisphp-php>getCharsetphp(php)
php php php php php php php php php)php)php;
php php php php php php php php php$clientphp-php>setParameterPostphp(php$paramsphp)php;

php php php php php php php php php$clientphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php returnphp php$clientphp-php>requestphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp anphp APIphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Optionalphp;php APIphp keyphp tophp verify
php php php php php php*php php@paramphp stringphp php$blogphp Optionalphp;php blogphp URLphp againstphp whichphp tophp verifyphp key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp verifyKeyphp(php$keyphp php=php nullphp,php php$blogphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php php$keyphp php=php php$thisphp-php>getApiKeyphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$blogphp)php php{
php php php php php php php php php php php php php$blogphp php=php php$thisphp-php>getBlogUrlphp(php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php'restphp.akismetphp.comphp'php,php php'php/php1php.php1php/verifyphp-keyphp'php,php arrayphp(
php php php php php php php php php php php php php'keyphp'php php php=php>php php$keyphp,
php php php php php php php php php php php php php'blogphp'php php=php>php php$blog
php php php php php php php php php)php)php;

php php php php php php php php returnphp php(php'validphp'php php=php=php php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp anphp APIphp call
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp ifphp missingphp userphp_ipphp orphp userphp_agentphp fields
php php php php php php*php/
php php php php protectedphp functionphp php_makeApiCallphp(php$pathphp,php php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'userphp_ipphp'php]php)php php|php|php emptyphp(php$paramsphp[php'userphp_agentphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Missingphp requiredphp Akismetphp fieldsphp php(userphp_ipphp andphp userphp_agentphp arephp requiredphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$paramsphp[php'blogphp'php]php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'blogphp'php]php php=php php$thisphp-php>getBlogUrlphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_postphp(php$thisphp-php>getApiKeyphp(php)php php.php php'php.restphp.akismetphp.comphp'php,php php$pathphp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp aphp commentphp forphp spam
php php php php php php*
php php php php php php*php Checksphp aphp commentphp tophp seephp ifphp itphp isphp spamphp.php php$paramsphp shouldphp bephp anphp associative
php php php php php php*php arrayphp withphp onephp orphp morephp ofphp thephp followingphp keysphp php(unlessphp notedphp,php allphp keysphp are
php php php php php php*php optionalphp)php:
php php php php php php*php php-php blogphp:php URLphp ofphp thephp blogphp.php Ifphp notphp providedphp,php usesphp valuephp returnedphp byphp php{php@linkphp getBlogUrlphp(php)php}
php php php php php php*php php-php userphp_ipphp php(requiredphp)php:php IPphp addressphp ofphp commentphp submitter
php php php php php php*php php-php userphp_agentphp php(requiredphp)php:php Userphp Agentphp usedphp byphp commentphp submitter
php php php php php php*php php-php referrerphp:php contentsphp ofphp HTTPphp_REFERERphp header
php php php php php php*php php-php permalinkphp:php locationphp ofphp thephp entryphp tophp whichphp thephp commentphp wasphp submitted
php php php php php php*php php-php commentphp_typephp:php typicallyphp,php onephp ofphp php'blankphp'php,php php'commentphp'php,php php'trackbackphp'php,php orphp php'pingbackphp'php,php butphp mayphp bephp anyphp value
php php php php php php*php php-php commentphp_authorphp:php namephp submittedphp withphp thephp content
php php php php php php*php php-php commentphp_authorphp_emailphp:php emailphp submittedphp withphp thephp content
php php php php php php*php php-php commentphp_authorphp_urlphp:php URLphp submittedphp withphp thephp content
php php php php php php*php php-php commentphp_contentphp:php actualphp content
php php php php php php*
php php php php php php*php Additionallyphp,php Akismetphp suggestsphp returningphp thephp keyphp/valuephp pairsphp inphp the
php php php php php php*php php$php_SERVERphp arrayphp,php andphp thesephp mayphp bephp includedphp inphp thephp php$paramsphp.
php php php php php php*
php php php php php php*php Thisphp methodphp implementsphp thephp Akismetphp commentphp-checkphp RESTphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp withphp invalidphp APIphp key
php php php php php php*php/
php php php php publicphp functionphp isSpamphp(php$paramsphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeApiCallphp(php'php/php1php.php1php/commentphp-checkphp'php,php php$paramsphp)php;

php php php php php php php php php$returnphp php=php trimphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php ifphp php(php'invalidphp'php php=php=php php$returnphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Invalidphp APIphp keyphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php'truephp'php php=php=php php$returnphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Submitphp spam
php php php php php php*
php php php php php php*php Takesphp thephp samephp argumentsphp asphp php{php@linkphp isSpamphp(php)php}php.
php php php php php php*
php php php php php php*php Submitsphp knownphp spamphp contentphp tophp Akismetphp tophp helpphp trainphp itphp.
php php php php php php*
php php php php php php*php Thisphp methodphp implementsphp Akismetphp'sphp submitphp-spamphp RESTphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp withphp invalidphp APIphp key
php php php php php php*php/
php php php php publicphp functionphp submitSpamphp(php$paramsphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeApiCallphp(php'php/php1php.php1php/submitphp-spamphp'php,php php$paramsphp)php;
php php php php php php php php php$valuephp php php php php=php trimphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php ifphp php(php'invalidphp'php php=php=php php$valuephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Invalidphp APIphp keyphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Submitphp ham
php php php php php php*
php php php php php php*php Takesphp thephp samephp argumentsphp asphp php{php@linkphp isSpamphp(php)php}php.
php php php php php php*
php php php php php php*php Submitsphp aphp commentphp thatphp hasphp beenphp falselyphp categorizedphp asphp spamphp byphp Akismet
php php php php php php*php asphp aphp falsephp positivephp,php tellingphp Akismetphp'sphp filtersphp notphp tophp filterphp such
php php php php php php*php commentsphp asphp spamphp inphp thephp futurephp.
php php php php php php*
php php php php php php*php Unlikephp php{php@linkphp submitSpamphp(php)php}php andphp php{php@linkphp isSpamphp(php)php}php,php aphp validphp APIphp keyphp is
php php php php php php*php neverphp necessaryphp;php asphp aphp resultphp,php thisphp methodphp neverphp throwsphp anphp exception
php php php php php php*php php(unlessphp anphp exceptionphp happensphp withphp thephp HTTPphp clientphp layerphp)php.
php php php php php php*
php php php php php php*php thisphp methodphp implementsphp Akismetphp'sphp submitphp-hamphp RESTphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp submitHamphp(php$paramsphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeApiCallphp(php'php/php1php.php1php/submitphp-hamphp'php,php php$paramsphp)php;
php php php php php}
php}
