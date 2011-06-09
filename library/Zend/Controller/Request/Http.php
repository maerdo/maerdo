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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Controllerphp_Requestphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Abstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Uriphp php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php Zendphp_Controllerphp_Requestphp_Http
php php*
php php*php HTTPphp requestphp objectphp forphp usephp withphp Zendphp_Controllerphp familyphp.
php php*
php php*php php@usesphp Zendphp_Controllerphp_Requestphp_Abstract
php php*php php@packagephp Zendphp_Controller
php php*php php@subpackagephp Request
php php*php/
classphp Zendphp_Controllerphp_Requestphp_Httpphp extendsphp Zendphp_Controllerphp_Requestphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Schemephp forphp http
php php php php php php*
php php php php php php*php/
php php php php constphp SCHEMEphp_HTTPphp php php=php php'httpphp'php;

php php php php php/php*php*
php php php php php php*php Schemephp forphp https
php php php php php php*
php php php php php php*php/
php php php php constphp SCHEMEphp_HTTPSphp php=php php'httpsphp'php;

php php php php php/php*php*
php php php php php php*php Allowedphp parameterphp sources
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramSourcesphp php=php arrayphp(php'php_GETphp'php,php php'php_POSTphp'php)php;

php php php php php/php*php*
php php php php php php*php REQUESTphp_URI
php php php php php php*php php@varphp stringphp;
php php php php php php*php/
php php php php protectedphp php$php_requestUriphp;

php php php php php/php*php*
php php php php php php*php Basephp URLphp ofphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Basephp pathphp ofphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_basePathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php PATHphp_INFO
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pathInfophp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Instancephp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Rawphp requestphp body
php php php php php php*php php@varphp stringphp|false
php php php php php php*php/
php php php php protectedphp php$php_rawBodyphp;

php php php php php/php*php*
php php php php php php*php Aliasphp keysphp forphp requestphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_aliasesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Ifphp aphp php$uriphp isphp passedphp,php thephp objectphp willphp attemptphp tophp populatephp itselfphp using
php php php php php php*php thatphp informationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp php$uri
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Requestphp_Exceptionphp whenphp invalidphp URIphp passed
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$uriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$uriphp)php php{
php php php php php php php php php php php php ifphp php(php!php$uriphp instanceofphp Zendphp_Uriphp)php php{
php php php php php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$uriphp-php>validphp(php)php)php php{
php php php php php php php php php php php php php php php php php$pathphp php php=php php$uriphp-php>getPathphp(php)php;
php php php php php php php php php php php php php php php php php$queryphp php=php php$uriphp-php>getQueryphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$queryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$pathphp php.php=php php'php?php'php php.php php$queryphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>setRequestUriphp(php$pathphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Requestphp_Exceptionphp(php'Invalidphp URIphp providedphp tophp constructorphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setRequestUriphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Accessphp valuesphp containedphp inphp thephp superglobalsphp asphp publicphp members
php php php php php php*php Orderphp ofphp precedencephp:php php1php.php GETphp,php php2php.php POSTphp,php php3php.php COOKIEphp,php php4php.php SERVERphp,php php5php.php ENV
php php php php php php*
php php php php php php*php php@seephp httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/systemphp.webphp.httprequestphp.itemphp.aspx
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php casephp issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyphp]php;
php php php php php php php php php php php php casephp issetphp(php$php_GETphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$php_GETphp[php$keyphp]php;
php php php php php php php php php php php php casephp issetphp(php$php_POSTphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$php_POSTphp[php$keyphp]php;
php php php php php php php php php php php php casephp issetphp(php$php_COOKIEphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$php_COOKIEphp[php$keyphp]php;
php php php php php php php php php php php php casephp php(php$keyphp php=php=php php'REQUESTphp_URIphp'php)php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>getRequestUriphp(php)php;
php php php php php php php php php php php php casephp php(php$keyphp php=php=php php'PATHphp_INFOphp'php)php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>getPathInfophp(php)php;
php php php php php php php php php php php php casephp issetphp(php$php_SERVERphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$php_SERVERphp[php$keyphp]php;
php php php php php php php php php php php php casephp issetphp(php$php_ENVphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp php$php_ENVphp[php$keyphp]php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp tophp php_php_get
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_getphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp values
php php php php php php*
php php php php php php*php Inphp orderphp tophp followphp php{php@linkphp php_php_getphp(php)php}php,php whichphp operatesphp onphp aphp numberphp of
php php php php php php*php superglobalsphp,php settingphp valuesphp throughphp overloadingphp isphp notphp allowedphp andphp will
php php php php php php*php raisephp anphp exceptionphp.php Usephp setParamphp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Requestphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Controllerphp_Requestphp_Exceptionphp(php'Settingphp valuesphp inphp superglobalsphp notphp allowedphp;php pleasephp usephp setParamphp(php)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp tophp php_php_setphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_setphp(php$keyphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp tophp seephp ifphp aphp propertyphp isphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php casephp issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp issetphp(php$php_GETphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp issetphp(php$php_POSTphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp issetphp(php$php_COOKIEphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp issetphp(php$php_SERVERphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp issetphp(php$php_ENVphp[php$keyphp]php)php:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp tophp php_php_issetphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_issetphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp GETphp values
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$spec
php php php php php php*php php@paramphp php nullphp|mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setQueryphp(php$specphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$valuephp)php php&php&php php!isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp setQueryphp(php)php;php mustphp bephp eitherphp arrayphp ofphp valuesphp orphp keyphp/valuephp pairphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$valuephp)php php&php&php isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$specphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setQueryphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php$php_GETphp[php(stringphp)php php$specphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp memberphp ofphp thephp php$php_GETphp superglobal
php php php php php php*
php php php php php php*php Ifphp nophp php$keyphp isphp passedphp,php returnsphp thephp entirephp php$php_GETphp arrayphp.
php php php php php php*
php php php php php php*php php@todophp Howphp tophp retrievephp fromphp nestedphp arrays
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixedphp Returnsphp nullphp ifphp keyphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp getQueryphp(php$keyphp php=php nullphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$php_GETphp;
php php php php php php php php php}

php php php php php php php php returnphp php(issetphp(php$php_GETphp[php$keyphp]php)php)php php?php php$php_GETphp[php$keyphp]php php:php php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp POSTphp values
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$spec
php php php php php php*php php@paramphp php nullphp|mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setPostphp(php$specphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$valuephp)php php&php&php php!isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp setPostphp(php)php;php mustphp bephp eitherphp arrayphp ofphp valuesphp orphp keyphp/valuephp pairphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$valuephp)php php&php&php isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$specphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setPostphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php$php_POSTphp[php(stringphp)php php$specphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp memberphp ofphp thephp php$php_POSTphp superglobal
php php php php php php*
php php php php php php*php Ifphp nophp php$keyphp isphp passedphp,php returnsphp thephp entirephp php$php_POSTphp arrayphp.
php php php php php php*
php php php php php php*php php@todophp Howphp tophp retrievephp fromphp nestedphp arrays
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixedphp Returnsphp nullphp ifphp keyphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp getPostphp(php$keyphp php=php nullphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$php_POSTphp;
php php php php php php php php php}

php php php php php php php php returnphp php(issetphp(php$php_POSTphp[php$keyphp]php)php)php php?php php$php_POSTphp[php$keyphp]php php:php php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp memberphp ofphp thephp php$php_COOKIEphp superglobal
php php php php php php*
php php php php php php*php Ifphp nophp php$keyphp isphp passedphp,php returnsphp thephp entirephp php$php_COOKIEphp arrayphp.
php php php php php php*
php php php php php php*php php@todophp Howphp tophp retrievephp fromphp nestedphp arrays
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixedphp Returnsphp nullphp ifphp keyphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp getCookiephp(php$keyphp php=php nullphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$php_COOKIEphp;
php php php php php php php php php}

php php php php php php php php returnphp php(issetphp(php$php_COOKIEphp[php$keyphp]php)php)php php?php php$php_COOKIEphp[php$keyphp]php php:php php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp memberphp ofphp thephp php$php_SERVERphp superglobal
php php php php php php*
php php php php php php*php Ifphp nophp php$keyphp isphp passedphp,php returnsphp thephp entirephp php$php_SERVERphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixedphp Returnsphp nullphp ifphp keyphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp getServerphp(php$keyphp php=php nullphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$php_SERVERphp;
php php php php php php php php php}

php php php php php php php php returnphp php(issetphp(php$php_SERVERphp[php$keyphp]php)php)php php?php php$php_SERVERphp[php$keyphp]php php:php php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp memberphp ofphp thephp php$php_ENVphp superglobal
php php php php php php*
php php php php php php*php Ifphp nophp php$keyphp isphp passedphp,php returnsphp thephp entirephp php$php_ENVphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixedphp Returnsphp nullphp ifphp keyphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp getEnvphp(php$keyphp php=php nullphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$php_ENVphp;
php php php php php php php php php}

php php php php php php php php returnphp php(issetphp(php$php_ENVphp[php$keyphp]php)php)php php?php php$php_ENVphp[php$keyphp]php php:php php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp REQUESTphp_URIphp onphp whichphp thephp instancephp operates
php php php php php php*
php php php php php php*php Ifphp nophp requestphp URIphp isphp passedphp,php usesphp thephp valuephp inphp php$php_SERVERphp[php'REQUESTphp_URIphp'php]php,
php php php php php php*php php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php,php orphp php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php php+php php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$requestUri
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setRequestUriphp(php$requestUriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$requestUriphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php)php)php php{php php/php/php checkphp thisphp firstphp sophp IISphp willphp catch
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(
php php php php php php php php php php php php php php php php php/php/php IISphp7php withphp URLphp Rewritephp:php makephp surephp wephp getphp thephp unencodedphp urlphp php(doublephp slashphp problemphp)
php php php php php php php php php php php php php php php php issetphp(php$php_SERVERphp[php'IISphp_WasUrlRewrittenphp'php]php)
php php php php php php php php php php php php php php php php php&php&php php$php_SERVERphp[php'IISphp_WasUrlRewrittenphp'php]php php=php=php php'php1php'
php php php php php php php php php php php php php php php php php&php&php issetphp(php$php_SERVERphp[php'UNENCODEDphp_URLphp'php]php)
php php php php php php php php php php php php php php php php php&php&php php$php_SERVERphp[php'UNENCODEDphp_URLphp'php]php php!php=php php'php'
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'UNENCODEDphp_URLphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REQUESTphp_URIphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php php php php php php php php php/php/php Httpphp proxyphp reqsphp setupphp requestphp uriphp withphp schemephp andphp hostphp php[andphp portphp]php php+php thephp urlphp pathphp,php onlyphp usephp urlphp path
php php php php php php php php php php php php php php php php php$schemeAndHttpHostphp php=php php$thisphp-php>getSchemephp(php)php php.php php'php:php/php/php'php php.php php$thisphp-php>getHttpHostphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$requestUriphp,php php$schemeAndHttpHostphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$requestUriphp php=php substrphp(php$requestUriphp,php strlenphp(php$schemeAndHttpHostphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php)php)php php{php php/php/php IISphp php5php.php0php,php PHPphp asphp CGI
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$requestUriphp php.php=php php'php?php'php php.php php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!isphp_stringphp(php$requestUriphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Setphp GETphp itemsphp,php ifphp available
php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php(php$posphp php=php strposphp(php$requestUriphp,php php'php?php'php)php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Getphp keyphp php=php>php valuephp pairsphp andphp setphp php$php_GET
php php php php php php php php php php php php php php php php php$queryphp php=php substrphp(php$requestUriphp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php php php php parsephp_strphp(php$queryphp,php php$varsphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setQueryphp(php$varsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestUriphp php=php php$requestUriphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp REQUESTphp_URIphp takingphp intophp account
php php php php php php*php platformphp differencesphp betweenphp Apachephp andphp IIS
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRequestUriphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_requestUriphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestUriphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_requestUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp basephp URLphp ofphp thephp requestphp;php iphp.ephp.php,php thephp segmentphp leadingphp tophp thephp scriptphp name
php php php php php php*
php php php php php php*php Ephp.gphp.php:
php php php php php php*php php-php php/admin
php php php php php php*php php-php php/myapp
php php php php php php*php php-php php/subdirphp/indexphp.php
php php php php php php*
php php php php php php*php Dophp notphp usephp thephp fullphp URIphp whenphp providingphp thephp basephp.php Thephp followingphp are
php php php php php php*php examplesphp ofphp whatphp notphp tophp usephp:
php php php php php php*php php-php httpphp:php/php/examplephp.comphp/adminphp php(shouldphp bephp justphp php/adminphp)
php php php php php php*php php-php httpphp:php/php/examplephp.comphp/subdirphp/indexphp.phpphp php(shouldphp bephp justphp php/subdirphp/indexphp.phpphp)
php php php php php php*
php php php php php php*php Ifphp nophp php$baseUrlphp isphp providedphp,php attemptsphp tophp determinephp thephp basephp URLphp fromphp the
php php php php php php*php environmentphp,php usingphp SCRIPTphp_FILENAMEphp,php SCRIPTphp_NAMEphp,php PHPphp_SELFphp,php and
php php php php php php*php ORIGphp_SCRIPTphp_NAMEphp inphp itsphp determinationphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$baseUrl
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setBaseUrlphp(php$baseUrlphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$baseUrlphp)php php&php&php php!isphp_stringphp(php$baseUrlphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$baseUrlphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$filenamephp php=php php(issetphp(php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php)php)php php?php basenamephp(php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php)php php:php php'php'php;

php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php)php php&php&php basenamephp(php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php)php php=php=php=php php$filenamephp)php php{
php php php php php php php php php php php php php php php php php$baseUrlphp php=php php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'PHPphp_SELFphp'php]php)php php&php&php basenamephp(php$php_SERVERphp[php'PHPphp_SELFphp'php]php)php php=php=php=php php$filenamephp)php php{
php php php php php php php php php php php php php php php php php$baseUrlphp php=php php$php_SERVERphp[php'PHPphp_SELFphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'ORIGphp_SCRIPTphp_NAMEphp'php]php)php php&php&php basenamephp(php$php_SERVERphp[php'ORIGphp_SCRIPTphp_NAMEphp'php]php)php php=php=php=php php$filenamephp)php php{
php php php php php php php php php php php php php php php php php$baseUrlphp php=php php$php_SERVERphp[php'ORIGphp_SCRIPTphp_NAMEphp'php]php;php php/php/php php1andphp1php sharedphp hostingphp compatibility
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Backtrackphp upphp thephp scriptphp_filenamephp tophp findphp thephp portionphp matching
php php php php php php php php php php php php php php php php php/php/php phpphp_self
php php php php php php php php php php php php php php php php php$pathphp php php php php=php issetphp(php$php_SERVERphp[php'PHPphp_SELFphp'php]php)php php?php php$php_SERVERphp[php'PHPphp_SELFphp'php]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$filephp php php php php=php issetphp(php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php)php php?php php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$segsphp php php php php=php explodephp(php'php/php'php,php trimphp(php$filephp,php php'php/php'php)php)php;
php php php php php php php php php php php php php php php php php$segsphp php php php php=php arrayphp_reversephp(php$segsphp)php;
php php php php php php php php php php php php php php php php php$indexphp php php php=php php0php;
php php php php php php php php php php php php php php php php php$lastphp php php php php=php countphp(php$segsphp)php;
php php php php php php php php php php php php php php php php php$baseUrlphp php=php php'php'php;
php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php$segphp php php php php php=php php$segsphp[php$indexphp]php;
php php php php php php php php php php php php php php php php php php php php php$baseUrlphp php=php php'php/php'php php.php php$segphp php.php php$baseUrlphp;
php php php php php php php php php php php php php php php php php php php php php+php+php$indexphp;
php php php php php php php php php php php php php php php php php}php whilephp php(php(php$lastphp php>php php$indexphp)php php&php&php php(falsephp php!php=php=php php(php$posphp php=php strposphp(php$pathphp,php php$baseUrlphp)php)php)php php&php&php php(php0php php!php=php php$posphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Doesphp thephp baseUrlphp havephp anythingphp inphp commonphp withphp thephp requestphp_uriphp?
php php php php php php php php php php php php php$requestUriphp php=php php$thisphp-php>getRequestUriphp(php)php;

php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$requestUriphp,php php$baseUrlphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php fullphp php$baseUrlphp matches
php php php php php php php php php php php php php php php php php$thisphp-php>php_baseUrlphp php=php php$baseUrlphp;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$requestUriphp,php dirnamephp(php$baseUrlphp)php)php)php php{
php php php php php php php php php php php php php php php php php/php/php directoryphp portionphp ofphp php$baseUrlphp matches
php php php php php php php php php php php php php php php php php$thisphp-php>php_baseUrlphp php=php rtrimphp(dirnamephp(php$baseUrlphp)php,php php'php/php'php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$truncatedRequestUriphp php=php php$requestUriphp;
php php php php php php php php php php php php ifphp php(php(php$posphp php=php strposphp(php$requestUriphp,php php'php?php'php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$truncatedRequestUriphp php=php substrphp(php$requestUriphp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$basenamephp php=php basenamephp(php$baseUrlphp)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$basenamephp)php php|php|php php!strposphp(php$truncatedRequestUriphp,php php$basenamephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php nophp matchphp whatsoeverphp;php setphp itphp blank
php php php php php php php php php php php php php php php php php$thisphp-php>php_baseUrlphp php=php php'php'php;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Ifphp usingphp modphp_rewritephp orphp ISAPIphp_Rewritephp stripphp thephp scriptphp filename
php php php php php php php php php php php php php/php/php outphp ofphp baseUrlphp.php php$posphp php!php=php=php php0php makesphp surephp itphp isphp notphp matchingphp aphp value
php php php php php php php php php php php php php/php/php fromphp PATHphp_INFOphp orphp QUERYphp_STRING
php php php php php php php php php php php php ifphp php(php(strlenphp(php$requestUriphp)php php>php=php strlenphp(php$baseUrlphp)php)
php php php php php php php php php php php php php php php php php&php&php php(php(falsephp php!php=php=php php(php$posphp php=php strposphp(php$requestUriphp,php php$baseUrlphp)php)php)php php&php&php php(php$posphp php!php=php=php php0php)php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$baseUrlphp php=php substrphp(php$requestUriphp,php php0php,php php$posphp php+php strlenphp(php$baseUrlphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_baseUrlphp php=php rtrimphp(php$baseUrlphp,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Everythingphp inphp REQUESTphp_URIphp beforephp PATHphp_INFO
php php php php php php*php php<formphp actionphp=php"<php\php?phpphp echophp$baseUrlphp?php>php/newsphp/submitphp"php methodphp=php"POSTphp"php/php>
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_baseUrlphp)php php{
php php php php php php php php php php php php php$thisphp-php>setBaseUrlphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp urldecodephp(php$thisphp-php>php_baseUrlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp basephp pathphp forphp thephp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$basePath
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setBasePathphp(php$basePathphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$basePathphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$filenamephp php=php php(issetphp(php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php)php)
php php php php php php php php php php php php php php php php php php php php php php php?php basenamephp(php$php_SERVERphp[php'SCRIPTphp_FILENAMEphp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php:php php'php'php;

php php php php php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getBaseUrlphp(php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$baseUrlphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_basePathphp php=php php'php'php;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(basenamephp(php$baseUrlphp)php php=php=php=php php$filenamephp)php php{
php php php php php php php php php php php php php php php php php$basePathphp php=php dirnamephp(php$baseUrlphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$basePathphp php=php php$baseUrlphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(substrphp(PHPphp_OSphp,php php0php,php php3php)php php=php=php=php php'WINphp'php)php php{
php php php php php php php php php php php php php$basePathphp php=php strphp_replacephp(php'php\php\php'php,php php'php/php'php,php php$basePathphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_basePathphp php=php rtrimphp(php$basePathphp,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Everythingphp inphp REQUESTphp_URIphp beforephp PATHphp_INFOphp notphp includingphp thephp filename
php php php php php php*php php<imgphp srcphp=php"<php\php?phpphp echophp$basePathphp?php>php/imagesphp/zendphp.pngphp"php/php>
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBasePathphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_basePathphp)php php{
php php php php php php php php php php php php php$thisphp-php>setBasePathphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_basePathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp PATHphp_INFOphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$pathInfo
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setPathInfophp(php$pathInfophp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$pathInfophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getBaseUrlphp(php)php;

php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$requestUriphp php=php php$thisphp-php>getRequestUriphp(php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Removephp thephp queryphp stringphp fromphp REQUESTphp_URI
php php php php php php php php php php php php ifphp php(php$posphp php=php strposphp(php$requestUriphp,php php'php?php'php)php)php php{
php php php php php php php php php php php php php php php php php$requestUriphp php=php substrphp(php$requestUriphp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$requestUriphp php=php urldecodephp(php$requestUriphp)php;

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$baseUrl
php php php php php php php php php php php php php php php php php&php&php php(php(php!emptyphp(php$baseUrlphp)php php&php&php php0php php=php=php=php strposphp(php$requestUriphp,php php$baseUrlphp)php)
php php php php php php php php php php php php php php php php php php php php php|php|php emptyphp(php$baseUrlphp)php)
php php php php php php php php php php php php php php php php php php php php php&php&php falsephp php=php=php=php php(php$pathInfophp php=php substrphp(php$requestUriphp,php strlenphp(php$baseUrlphp)php)php)
php php php php php php php php php php php php php)php{
php php php php php php php php php php php php php php php php php/php/php Ifphp substrphp(php)php returnsphp falsephp thenphp PATHphp_INFOphp isphp setphp tophp anphp emptyphp string
php php php php php php php php php php php php php php php php php$pathInfophp php=php php'php'php;
php php php php php php php php php php php php php}php elseifphp php(nullphp php=php=php=php php$baseUrl
php php php php php php php php php php php php php php php php php php php php php|php|php php(php!emptyphp(php$baseUrlphp)php php&php&php falsephp php=php=php=php strposphp(php$requestUriphp,php php$baseUrlphp)php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$pathInfophp php=php php$requestUriphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_pathInfophp php=php php(stringphp)php php$pathInfophp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp everythingphp betweenphp thephp BaseUrlphp andphp QueryStringphp.
php php php php php php*php Thisphp valuephp isphp calculatedphp insteadphp ofphp readingphp PATHphp_INFO
php php php php php php*php directlyphp fromphp php$php_SERVERphp duephp tophp crossphp-platformphp differencesphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPathInfophp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_pathInfophp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPathInfophp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pathInfophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp allowedphp parameterphp sources
php php php php php php*
php php php php php php*php Canphp bephp emptyphp arrayphp,php orphp containphp onephp orphp morephp ofphp php'php_GETphp'php orphp php'php_POSTphp'php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paramSoures
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setParamSourcesphp(arrayphp php$paramSourcesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramSourcesphp php=php php$paramSourcesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp listphp ofphp allowedphp parameterphp sources
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamSourcesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramSourcesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp userlandphp parameter
php php php php php php*
php php php php php php*php Usesphp php$keyphp tophp setphp aphp userlandphp parameterphp.php Ifphp php$keyphp isphp anphp aliasphp,php thephp actual
php php php php php php*php keyphp willphp bephp retrievedphp andphp usedphp tophp setphp thephp parameterphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$key
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$keyphp php=php php(nullphp php!php=php=php php(php$aliasphp php=php php$thisphp-php>getAliasphp(php$keyphp)php)php)php php?php php$aliasphp php:php php$keyphp;
php php php php php php php php parentphp:php:setParamphp(php$keyphp,php php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp parameter
php php php php php php*
php php php php php php*php Retrievesphp aphp parameterphp fromphp thephp instancephp.php Priorityphp isphp inphp thephp orderphp of
php php php php php php*php userlandphp parametersphp php(seephp php{php@linkphp setParamphp(php)php}php)php,php php$php_GETphp,php php$php_POSTphp.php Ifphp a
php php php php php php*php parameterphp matchingphp thephp php$keyphp isphp notphp foundphp,php nullphp isphp returnedphp.
php php php php php php*
php php php php php php*php Ifphp thephp php$keyphp isphp anphp aliasphp,php thephp actualphp keyphp aliasedphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$keyphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php php$keyNamephp php=php php(nullphp php!php=php=php php(php$aliasphp php=php php$thisphp-php>getAliasphp(php$keyphp)php)php)php php?php php$aliasphp php:php php$keyphp;

php php php php php php php php php$paramSourcesphp php=php php$thisphp-php>getParamSourcesphp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[php$keyNamephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyNamephp]php;
php php php php php php php php php}php elseifphp php(inphp_arrayphp(php'php_GETphp'php,php php$paramSourcesphp)php php&php&php php(issetphp(php$php_GETphp[php$keyNamephp]php)php)php)php php{
php php php php php php php php php php php php returnphp php$php_GETphp[php$keyNamephp]php;
php php php php php php php php php}php elseifphp php(inphp_arrayphp(php'php_POSTphp'php,php php$paramSourcesphp)php php&php&php php(issetphp(php$php_POSTphp[php$keyNamephp]php)php)php)php php{
php php php php php php php php php php php php returnphp php$php_POSTphp[php$keyNamephp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp arrayphp ofphp parameters
php php php php php php*
php php php php php php*php Retrievesphp aphp mergedphp arrayphp ofphp parametersphp,php withphp precedencephp ofphp userland
php php php php php php*php paramsphp php(seephp php{php@linkphp setParamphp(php)php}php)php,php php$php_GETphp,php php$php_POSTphp php(iphp.ephp.php,php valuesphp inphp the
php php php php php php*php userlandphp paramsphp willphp takephp precedencephp overphp allphp othersphp)php.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php php$returnphp php php php php php php php=php php$thisphp-php>php_paramsphp;
php php php php php php php php php$paramSourcesphp php=php php$thisphp-php>getParamSourcesphp(php)php;
php php php php php php php php ifphp php(inphp_arrayphp(php'php_GETphp'php,php php$paramSourcesphp)
php php php php php php php php php php php php php&php&php issetphp(php$php_GETphp)
php php php php php php php php php php php php php&php&php isphp_arrayphp(php$php_GETphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$returnphp php+php=php php$php_GETphp;
php php php php php php php php php}
php php php php php php php php ifphp php(inphp_arrayphp(php'php_POSTphp'php,php php$paramSourcesphp)
php php php php php php php php php php php php php&php&php issetphp(php$php_POSTphp)
php php php php php php php php php php php php php&php&php isphp_arrayphp(php$php_POSTphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$returnphp php+php=php php$php_POSTphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameters
php php php php php php*
php php php php php php*php Setphp onephp orphp morephp parametersphp.php Parametersphp arephp setphp asphp userlandphp parametersphp,
php php php php php php*php usingphp thephp keysphp specifiedphp inphp thephp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp keyphp alias
php php php php php php*
php php php php php php*php Setphp anphp aliasphp usedphp forphp keyphp lookupsphp.php php$namephp specifiesphp thephp aliasphp,php php$target
php php php php php php*php specifiesphp thephp actualphp keyphp tophp usephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$target
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp setAliasphp(php$namephp,php php$targetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_aliasesphp[php$namephp]php php=php php$targetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp alias
php php php php php php*
php php php php php php*php Retrievephp thephp actualphp keyphp representedphp byphp thephp aliasphp php$namephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp stringphp|nullphp Returnsphp nullphp whenphp nophp aliasphp exists
php php php php php php*php/
php php php php publicphp functionphp getAliasphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_aliasesphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_aliasesphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp listphp ofphp allphp aliases
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAliasesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aliasesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp methodphp byphp whichphp thephp requestphp wasphp made
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getServerphp(php'REQUESTphp_METHODphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp POSTphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isPostphp(php)
php php php php php{
php php php php php php php php ifphp php(php'POSTphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp GETphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isGetphp(php)
php php php php php{
php php php php php php php php ifphp php(php'GETphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp PUTphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isPutphp(php)
php php php php php{
php php php php php php php php ifphp php(php'PUTphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp DELETEphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDeletephp(php)
php php php php php{
php php php php php php php php ifphp php(php'DELETEphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp HEADphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isHeadphp(php)
php php php php php{
php php php php php php php php ifphp php(php'HEADphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp requestphp madephp byphp OPTIONSphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isOptionsphp(php)
php php php php php{
php php php php php php php php ifphp php(php'OPTIONSphp'php php=php=php php$thisphp-php>getMethodphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp requestphp aphp Javascriptphp XMLHttpRequestphp?
php php php php php php*
php php php php php php*php Shouldphp workphp withphp Prototypephp/Scriptphp.aculophp.usphp,php possiblyphp othersphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isXmlHttpRequestphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>getHeaderphp(php'Xphp_REQUESTEDphp_WITHphp'php)php php=php=php php'XMLHttpRequestphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thisphp aphp Flashphp requestphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isFlashRequestphp(php)
php php php php php{
php php php php php php php php php$headerphp php=php strtolowerphp(php$thisphp-php>getHeaderphp(php'USERphp_AGENTphp'php)php)php;
php php php php php php php php returnphp php(strstrphp(php$headerphp,php php'php flashphp'php)php)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp httpsphp securephp request
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSecurephp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>getSchemephp(php)php php=php=php=php selfphp:php:SCHEMEphp_HTTPSphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp rawphp bodyphp ofphp thephp requestphp,php ifphp present
php php php php php php*
php php php php php php*php php@returnphp stringphp|falsephp Rawphp bodyphp,php orphp falsephp ifphp notphp present
php php php php php php*php/
php php php php publicphp functionphp getRawBodyphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_rawBodyphp)php php{
php php php php php php php php php php php php php$bodyphp php=php filephp_getphp_contentsphp(php'phpphp:php/php/inputphp'php)php;

php php php php php php php php php php php php ifphp php(strlenphp(trimphp(php$bodyphp)php)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_rawBodyphp php=php php$bodyphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_rawBodyphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_rawBodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp valuephp ofphp thephp givenphp HTTPphp headerphp.php Passphp thephp headerphp namephp asphp the
php php php php php php*php plainphp,php HTTPphp-specifiedphp headerphp namephp.php Exphp.php:php Askphp forphp php'Acceptphp'php tophp getphp the
php php php php php php*php Acceptphp headerphp,php php'Acceptphp-Encodingphp'php tophp getphp thephp Acceptphp-Encodingphp headerphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$headerphp HTTPphp headerphp name
php php php php php php*php php@returnphp stringphp|falsephp HTTPphp headerphp valuephp,php orphp falsephp ifphp notphp found
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Requestphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$headerphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$headerphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Requestphp_Exceptionphp(php'Anphp HTTPphp headerphp namephp isphp requiredphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Tryphp tophp getphp itphp fromphp thephp php$php_SERVERphp arrayphp first
php php php php php php php php php$tempphp php=php php'HTTPphp_php'php php.php strtoupperphp(strphp_replacephp(php'php-php'php,php php'php_php'php,php php$headerphp)php)php;
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php$tempphp]php)php)php php{
php php php php php php php php php php php php returnphp php$php_SERVERphp[php$tempphp]php;
php php php php php php php php php}

php php php php php php php php php/php/php Thisphp seemsphp tophp bephp thephp onlyphp wayphp tophp getphp thephp Authorizationphp headerphp on
php php php php php php php php php/php/php Apache
php php php php php php php php ifphp php(functionphp_existsphp(php'apachephp_requestphp_headersphp'php)php)php php{
php php php php php php php php php php php php php$headersphp php=php apachephp_requestphp_headersphp(php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$headersphp[php$headerphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$headersphp[php$headerphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$headerphp php=php strtolowerphp(php$headerphp)php;
php php php php php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(strtolowerphp(php$keyphp)php php=php=php php$headerphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp requestphp URIphp scheme
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSchemephp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>getServerphp(php'HTTPSphp'php)php php=php=php php'onphp'php)php php?php selfphp:php:SCHEMEphp_HTTPSphp php:php selfphp:php:SCHEMEphp_HTTPphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp HTTPphp hostphp.
php php php php php php*
php php php php php php*php php"Hostphp"php php"php:php"php hostphp php[php php"php:php"php portphp php]php php;php Sectionphp php3php.php2php.php2
php php php php php php*php Notephp thephp HTTPphp Hostphp headerphp isphp notphp thephp samephp asphp thephp URIphp hostphp.
php php php php php php*php Itphp includesphp thephp portphp whilephp thephp URIphp hostphp doesnphp'tphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHttpHostphp(php)
php php php php php{
php php php php php php php php php$hostphp php=php php$thisphp-php>getServerphp(php'HTTPphp_HOSTphp'php)php;
php php php php php php php php ifphp php(php!emptyphp(php$hostphp)php)php php{
php php php php php php php php php php php php returnphp php$hostphp;
php php php php php php php php php}

php php php php php php php php php$schemephp php=php php$thisphp-php>getSchemephp(php)php;
php php php php php php php php php$namephp php php php=php php$thisphp-php>getServerphp(php'SERVERphp_NAMEphp'php)php;
php php php php php php php php php$portphp php php php=php php$thisphp-php>getServerphp(php'SERVERphp_PORTphp'php)php;

php php php php php php php php ifphp(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php elseifphp php(php(php$schemephp php=php=php selfphp:php:SCHEMEphp_HTTPphp php&php&php php$portphp php=php=php php8php0php)php php|php|php php(php$schemephp php=php=php selfphp:php:SCHEMEphp_HTTPSphp php&php&php php$portphp php=php=php php4php4php3php)php)php php{
php php php php php php php php php php php php returnphp php$namephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$namephp php.php php'php:php'php php.php php$portphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp clientphp'sphp IPphp addres
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$checkProxy
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getClientIpphp(php$checkProxyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$checkProxyphp php&php&php php$thisphp-php>getServerphp(php'HTTPphp_CLIENTphp_IPphp'php)php php!php=php nullphp)php php{
php php php php php php php php php php php php php$ipphp php=php php$thisphp-php>getServerphp(php'HTTPphp_CLIENTphp_IPphp'php)php;
php php php php php php php php php}php elsephp ifphp php(php$checkProxyphp php&php&php php$thisphp-php>getServerphp(php'HTTPphp_Xphp_FORWARDEDphp_FORphp'php)php php!php=php nullphp)php php{
php php php php php php php php php php php php php$ipphp php=php php$thisphp-php>getServerphp(php'HTTPphp_Xphp_FORWARDEDphp_FORphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$ipphp php=php php$thisphp-php>getServerphp(php'REMOTEphp_ADDRphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$ipphp;
php php php php php}
php}
