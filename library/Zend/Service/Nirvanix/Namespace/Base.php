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
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Basephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Nirvanixphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Nirvanixphp/Responsephp.phpphp'php;

php/php*php*
php php*php Thephp Nirvanixphp webphp servicesphp arephp splitphp intophp namespacesphp.php php Thisphp isphp aphp proxyphp class
php php*php representingphp onephp namespacephp.php php Itphp allowsphp callsphp tophp thephp namespacephp tophp bephp madephp by
php php*php PHPphp objectphp callsphp ratherphp thanphp byphp havingphp tophp constructphp HTTPphp clientphp requestsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Base
php{
php php php php php/php*php*
php php php php php php*php HTTPphp clientphp instancephp thatphp willphp bephp usedphp tophp makephp callsphp to
php php php php php php*php thephp Nirvanixphp webphp servicesphp.
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp php$php_httpClientphp;

php php php php php/php*php*
php php php php php php*php Hostphp tophp usephp forphp callsphp tophp thisphp Nirvanixphp namespacephp.php php Itphp isphp possible
php php php php php php*php thatphp thephp userphp willphp wishphp tophp usephp differentphp hostsphp forphp differentphp namespacesphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostphp php=php php'httpphp:php/php/servicesphp.nirvanixphp.comphp'php;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thisphp namespacephp asphp usedphp inphp thephp URLphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namespacephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Defaultsphp forphp POSTphp parametersphp.php php Whenphp aphp requestphp tophp thephp servicephp isphp tophp be
php php php php php php*php madephp,php thephp POSTphp parametersphp arephp mergedphp intophp thesephp.php php Thisphp isphp aphp convenience
php php php php php php*php featurephp sophp parametersphp thatphp arephp repeatedlyphp requiredphp likephp sessionToken
php php php php php php*php dophp notphp needphp tophp bephp suppliedphp againphp andphp againphp byphp thephp userphp.
php php php php php php*
php php php php php php*php php@paramphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php php$optionsphp php arrayphp php Optionsphp andphp dependencyphp injection
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'baseUrlphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_hostphp php=php php$optionsphp[php'baseUrlphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'namespacephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_namespacephp php=php php$optionsphp[php'namespacephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'defaultsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultsphp php=php php$optionsphp[php'defaultsphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php issetphp(php$optionsphp[php'httpClientphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'httpClientphp'php]php php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_httpClientphp php=php php$optionsphp[php'httpClientphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whenphp aphp methodphp callphp isphp madephp againstphp thisphp proxyphp,php convertphp itphp to
php php php php php php*php anphp HTTPphp requestphp tophp makephp againstphp thephp Nirvanixphp RESTphp servicephp.
php php php php php php*
php php php php php php*php php$imfsphp-php>DeleteFilesphp(arrayphp(php'filePathphp'php php=php>php php'foophp'php)php)php;
php php php php php php*
php php php php php php*php Assumingphp thisphp objectphp wasphp proxyingphp thephp IMFSphp namespacephp,php the
php php php php php php*php methodphp callphp abovephp wouldphp callphp thephp DeleteFilesphp commandphp.php php The
php php php php php php*php POSTphp parametersphp wouldphp bephp filePathphp,php mergedphp withphp the
php php php php php php*php php$thisphp-php>php_defaultsphp php(containingphp thephp sessionTokenphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$methodNamephp php Namephp ofphp thephp commandphp tophp call
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php onphp thisphp namespacephp.
php php php php php php*php php@paramphp php arrayphp php php php$argsphp php php php php php php php Onlyphp thephp firstphp isphp usedphp andphp itphp mustphp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php anphp arrayphp.php php Itphp containsphp thephp POSTphp paramsphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanixphp_Response
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodNamephp,php php$argsphp)
php php php php php{
php php php php php php php php php$uriphp php=php php$thisphp-php>php_makeUriphp(php$methodNamephp)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setUriphp(php$uriphp)php;

php php php php php php php php ifphp php(php!issetphp(php$argsphp[php0php]php)php php|php|php php!isphp_arrayphp(php$argsphp[php0php]php)php)php php{
php php php php php php php php php php php php php$argsphp[php0php]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$thisphp-php>php_defaultsphp,php php$argsphp[php0php]php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setParameterPostphp(php$paramsphp)php;

php php php php php php php php php$httpResponsephp php=php php$thisphp-php>php_httpClientphp-php>requestphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php returnphp php$thisphp-php>php_wrapResponsephp(php$httpResponsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp HTTPphp clientphp usedphp forphp thisphp namespacephp.php php Thisphp isphp useful
php php php php php php*php forphp inspectingphp thephp lastphp requestphp orphp directlyphp interactingphp withphp the
php php php php php php*php HTTPphp clientphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp completephp URIphp fromphp anphp RPCphp methodphp namephp.php php Allphp Nirvanixphp REST
php php php php php php*php servicephp URIsphp usephp thephp samephp formatphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$methodNamephp php RPCphp methodphp name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_makeUriphp(php$methodNamephp)
php php php php php{
php php php php php php php php php$methodNamephp php=php ucfirstphp(php$methodNamephp)php;
php php php php php php php php returnphp php"php{php$thisphp-php>php_hostphp}php/wsphp/php{php$thisphp-php>php_namespacephp}php/php{php$methodNamephp}php.ashxphp"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allphp Nirvanixphp RESTphp servicephp callsphp returnphp anphp XMLphp payloadphp.php php Thisphp method
php php php php php php*php makesphp aphp Zendphp_Servicephp_Nirvanixphp_Responsephp fromphp thatphp XMLphp payloadphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Responsephp php php$httpResponsephp php Rawphp responsephp fromphp Nirvanix
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanixphp_Responsephp php php php php Wrappedphp response
php php php php php php*php/
php php php php protectedphp functionphp php_wrapResponsephp(php$httpResponsephp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Servicephp_Nirvanixphp_Responsephp(php$httpResponsephp-php>getBodyphp(php)php)php;
php php php php php}
php}
