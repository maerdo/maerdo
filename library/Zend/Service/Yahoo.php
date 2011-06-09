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
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Yahoophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Yahoo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Yahoo
php{
php php php php php/php*php*
php php php php php php*php Yahoophp Developerphp Applicationphp ID
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$appIdphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp RESTphp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php protectedphp php$php_restphp;


php php php php php/php*php*
php php php php php php*php Setsphp thephp applicationphp IDphp andphp instantiatesphp thephp RESTphp client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$appIdphp specifiedphp thephp developerphp'sphp appid
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$appIdphp)
php php php php php{
php php php php php php php php php$thisphp-php>appIdphp php=php php(stringphp)php php$appIdphp;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Restphp_Client
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_restphp php=php newphp Zendphp_Restphp_Clientphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievephp Inlinkphp Dataphp fromphp siteexplorerphp.yahoophp.comphp.php php Aphp basicphp query
php php php php php php*php consistsphp simplyphp ofphp aphp URLphp.php php Additionalphp optionsphp thatphp canphp be
php php php php php php*php specifiedphp consistphp ofphp:
php php php php php php*php php'resultsphp'php php php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php1php0php0
php php php php php php*php php'startphp'php php php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'entirephp_sitephp'php php php=php>php boolphp php Dataphp forphp thephp wholephp sitephp orphp aphp singlephp page
php php php php php php*php php'omitphp_inlinksphp'php php=php>php php(nonephp|domainphp|subdomainphp)php php Filterphp inlinksphp fromphp thesephp sources
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php thephp queryphp beingphp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php anyphp optionalphp parameters
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_ResultSetphp php Thephp returnphp set
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp inlinkDataSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'resultsphp'php php php php php php=php>php php'php5php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php=php>php php1php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$thisphp-php>php_validateInlinkDataSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/SiteExplorerServicephp/Vphp1php/inlinkDataphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_InlinkDataResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/InlinkDataResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_InlinkDataResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Performphp aphp searchphp ofphp imagesphp.php php Thephp mostphp basicphp queryphp consistsphp simply
php php php php php php*php ofphp aphp plainphp textphp searchphp,php butphp youphp canphp alsophp specifyphp thephp typephp of
php php php php php php*php imagephp,php thephp formatphp,php colorphp,php etcphp.
php php php php php php*
php php php php php php*php Thephp specificphp optionsphp arephp:
php php php php php php*php php'typephp'php php php php php php php php=php>php php(allphp|anyphp|phrasephp)php php Howphp tophp parsephp thephp queryphp terms
php php php php php php*php php'resultsphp'php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php5php0
php php php php php php*php php'startphp'php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'formatphp'php php php php php php=php>php php(anyphp|bmpphp|gifphp|jpegphp|pngphp)php php Thephp typephp ofphp imagesphp tophp searchphp for
php php php php php php*php php'colorationphp'php php=php>php php(anyphp|colorphp|bwphp)php php Thephp colorationphp ofphp imagesphp tophp searchphp for
php php php php php php*php php'adultphp_okphp'php php php php=php>php boolphp php Flagphp tophp allowphp php'adultphp'php imagesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php thephp queryphp tophp bephp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp anphp optionalphp arrayphp ofphp queryphp options
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_ImageResultSetphp thephp searchphp results
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp imageSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'typephp'php php php php php php php php=php>php php'allphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'resultsphp'php php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'formatphp'php php php php php php=php>php php'anyphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'colorationphp'php php=php>php php'anyphp'php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateImageSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/ImageSearchServicephp/Vphp1php/imageSearchphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_YahooImageResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/ImageResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_ImageResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Performphp aphp searchphp onphp localphp.yahoophp.comphp.php php Thephp basicphp search
php php php php php php*php consistsphp ofphp aphp queryphp andphp somephp fragmentphp ofphp locationphp informationphp;
php php php php php php*php forphp examplephp zipcodephp,php latitudephp/longitudephp,php orphp streetphp addressphp.
php php php php php php*
php php php php php php*php Queryphp optionsphp includephp:
php php php php php php*php php'resultsphp'php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php5php0
php php php php php php*php php'startphp'php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'sortphp'php php php php php php php php=php>php php(relevancephp|titlephp|distancephp|ratingphp)php Howphp tophp orderphp yourphp results
php php php php php php*
php php php php php php*php php'radiusphp'php php php php php php=php>php floatphp php Thephp radiusphp php(inphp milesphp)php inphp whichphp tophp search
php php php php php php*
php php php php php php*php php'longitudephp'php php php=php>php floatphp php Thephp longitudephp ofphp thephp locationphp tophp searchphp around
php php php php php php*php php'latitudephp'php php php php=php>php floatphp php Thephp latitudephp ofphp thephp locationphp tophp searchphp around
php php php php php php*
php php php php php php*php php'zipphp'php php php php php php php php php=php>php stringphp Thephp zipcodephp tophp searchphp around
php php php php php php*
php php php php php php*php php'streetphp'php php php php php php=php>php stringphp php Thephp streetphp addressphp tophp searchphp around
php php php php php php*php php'cityphp'php php php php php php php php=php>php stringphp php Thephp cityphp forphp addressphp search
php php php php php php*php php'statephp'php php php php php php php=php>php stringphp php Thephp statephp forphp addressphp search
php php php php php php*php php'locationphp'php php php php=php>php stringphp php Anphp adhocphp locationphp stringphp tophp searchphp around
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php Thephp queryphp stringphp youphp wantphp tophp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php Thephp searchphp optionsphp,php includingphp location
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_LocalResultSetphp Thephp results
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp localSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'resultsphp'php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'sortphp'php php php php php=php>php php'distancephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'radiusphp'php php php=php>php php5php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateLocalSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/localphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/LocalSearchServicephp/Vphp1php/localSearchphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_LocalResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/LocalResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_LocalResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Executephp aphp searchphp onphp newsphp.yahoophp.comphp.php Thisphp methodphp minimallyphp takesphp a
php php php php php php*php textphp queryphp tophp searchphp onphp.
php php php php php php*
php php php php php php*php Queryphp optionsphp coonsistphp ofphp:
php php php php php php*
php php php php php php*php php'resultsphp'php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php5php0
php php php php php php*php php'startphp'php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'sortphp'php php php php php php php php=php>php php(rankphp|datephp)php php Howphp tophp orderphp yourphp results
php php php php php php*php php'languagephp'php php php php=php>php langphp php Thephp targetphp documentphp languagephp tophp match
php php php php php php*php php'typephp'php php php php php php php php=php>php php(allphp|anyphp|phrasephp)php php Howphp thephp queryphp shouldphp bephp parsed
php php php php php php*php php'sitephp'php php php php php php php php=php>php stringphp php Aphp sitephp tophp whichphp yourphp searchphp shouldphp bephp restricted
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php Thephp queryphp tophp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php Thephp arrayphp ofphp optionalphp parameters
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_NewsResultSetphp php Thephp queryphp returnphp set
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp newsSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'typephp'php php php php php php=php>php php'allphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'sortphp'php php php php php php=php>php php'rankphp'php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateNewsSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/NewsSearchServicephp/Vphp1php/newsSearchphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_NewsResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/NewsResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_NewsResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievephp Pagephp Dataphp fromphp siteexplorerphp.yahoophp.comphp.php php Aphp basicphp query
php php php php php php*php consistsphp simplyphp ofphp aphp URLphp.php php Additionalphp optionsphp thatphp canphp be
php php php php php php*php specifiedphp consistphp ofphp:
php php php php php php*php php'resultsphp'php php php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php1php0php0
php php php php php php*php php'startphp'php php php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'domainphp_onlyphp'php php php=php>php boolphp php Dataphp forphp justphp thephp givenphp domainphp orphp allphp subphp-domainsphp also
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php thephp queryphp beingphp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php anyphp optionalphp parameters
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_ResultSetphp php Thephp returnphp set
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp pageDataSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'resultsphp'php php php php php php=php>php php'php5php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php=php>php php1php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$thisphp-php>php_validatePageDataSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/SiteExplorerServicephp/Vphp1php/pageDataphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_PageDataResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/PageDataResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_PageDataResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Performphp aphp searchphp ofphp videosphp.php php Thephp mostphp basicphp queryphp consistsphp simply
php php php php php php*php ofphp aphp plainphp textphp searchphp,php butphp youphp canphp alsophp specifyphp thephp formatphp of
php php php php php php*php videophp.
php php php php php php*
php php php php php php*php Thephp specificphp optionsphp arephp:
php php php php php php*php php'typephp'php php php php php php php php=php>php php(allphp|anyphp|phrasephp)php php Howphp tophp parsephp thephp queryphp terms
php php php php php php*php php'resultsphp'php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php5php0
php php php php php php*php php'startphp'php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'formatphp'php php php php php php=php>php php(anyphp|aviphp|flashphp|mpegphp|msmediaphp|quicktimephp|realmediaphp)php php Thephp typephp ofphp videosphp tophp searchphp for
php php php php php php*php php'adultphp_okphp'php php php php=php>php boolphp php Flagphp tophp allowphp php'adultphp'php videosphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php thephp queryphp tophp bephp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp anphp optionalphp arrayphp ofphp queryphp options
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_VideoResultSetphp thephp searchphp results
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp videoSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'typephp'php php php php php php php php=php>php php'allphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'resultsphp'php php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'formatphp'php php php php php php=php>php php'anyphp'php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateVideoSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/VideoSearchServicephp/Vphp1php/videoSearchphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_YahooVideoResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/VideoResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_VideoResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Performphp aphp webphp contentphp searchphp onphp searchphp.yahoophp.comphp.php php Aphp basicphp query
php php php php php php*php consistsphp simplyphp ofphp aphp textphp queryphp.php php Additionalphp optionsphp thatphp canphp be
php php php php php php*php specifiedphp consistphp ofphp:
php php php php php php*php php'resultsphp'php php php php php=php>php intphp php Howphp manyphp resultsphp tophp returnphp,php maxphp isphp php5php0
php php php php php php*php php'startphp'php php php php php php php=php>php intphp php Thephp startphp offsetphp forphp searchphp results
php php php php php php*php php'languagephp'php php php php=php>php langphp php Thephp targetphp documentphp languagephp tophp match
php php php php php php*php php'typephp'php php php php php php php php=php>php php(allphp|anyphp|phrasephp)php php Howphp thephp queryphp shouldphp bephp parsed
php php php php php php*php php'sitephp'php php php php php php php php=php>php stringphp php Aphp sitephp tophp whichphp yourphp searchphp shouldphp bephp restricted
php php php php php php*php php'formatphp'php php php php php php=php>php php(anyphp|htmlphp|mswordphp|pdfphp|pptphp|rssphp|txtphp|xlsphp)
php php php php php php*php php'adultphp_okphp'php php php php=php>php boolphp php permitphp php'adultphp'php contentphp inphp thephp searchphp results
php php php php php php*php php'similarphp_okphp'php php=php>php boolphp php permitphp similarphp resultsphp inphp thephp resultphp set
php php php php php php*php php'countryphp'php php php php php=php>php stringphp php Thephp countryphp codephp forphp thephp contentphp searched
php php php php php php*php php'licensephp'php php php php php=php>php php(anyphp|ccphp_anyphp|ccphp_commercialphp|ccphp_modifiablephp)php php Thephp licensephp ofphp contentphp beingphp searched
php php php php php php*php php'regionphp'php php php php php php=php>php Thephp regionalphp searchphp enginephp onphp whichphp thephp servicephp performsphp thephp searchphp.php defaultphp usphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php thephp queryphp beingphp run
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php anyphp optionalphp parameters
php php php php php php*php php@returnphp Zendphp_Servicephp_Yahoophp_WebResultSetphp php Thephp returnphp set
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp webSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'typephp'php php php php php php=php>php php'allphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'startphp'php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'resultsphp'php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'formatphp'php php php php=php>php php'anyphp'php)php;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$queryphp,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$thisphp-php>php_validateWebSearchphp(php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(php'httpphp:php/php/searchphp.yahooapisphp.comphp'php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php'php/WebSearchServicephp/Vphp1php/webSearchphp'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Yahoophp_WebResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Yahoophp/WebResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Yahoophp_WebResultSetphp(php$domphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp referencephp tophp thephp RESTphp client
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRestClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_restphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Inlinkphp Dataphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateInlinkDataSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'resultsphp'php,php php'startphp'php,php php'entirephp_sitephp'php,php php'omitphp_inlinksphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php1php0php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'omitphp_inlinksphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'omitphp_inlinksphp'php,php php$optionsphp[php'omitphp_inlinksphp'php]php,php arrayphp(php'nonephp'php,php php'domainphp'php,php php'subdomainphp'php)php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Imagephp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateImageSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'typephp'php,php php'resultsphp'php,php php'startphp'php,php php'formatphp'php,php php'colorationphp'php,php php'adultphp_okphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php switchphp(php$optionsphp[php'typephp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php'allphp'php:
php php php php php php php php php php php php php php php php casephp php'anyphp'php:
php php php php php php php php php php php php php php php php casephp php'phrasephp'php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'typephp'php:php php'php{php$optionsphp[php'typephp'php]php}php'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php5php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'formatphp'php]php)php)php php{
php php php php php php php php php php php php switchphp php(php$optionsphp[php'formatphp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php'anyphp'php:
php php php php php php php php php php php php php php php php casephp php'bmpphp'php:
php php php php php php php php php php php php php php php php casephp php'gifphp'php:
php php php php php php php php php php php php php php php php casephp php'jpegphp'php:
php php php php php php php php php php php php php php php php casephp php'pngphp'php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'formatphp'php:php php{php$optionsphp[php'formatphp'php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'colorationphp'php]php)php)php php{
php php php php php php php php php php php php switchphp php(php$optionsphp[php'colorationphp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php'anyphp'php:
php php php php php php php php php php php php php php php php casephp php'colorphp'php:
php php php php php php php php php php php php php php php php casephp php'bwphp'php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'colorationphp'php:php php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php{php$optionsphp[php'colorationphp'php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Localphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateLocalSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'resultsphp'php,php php'startphp'php,php php'sortphp'php,php php'radiusphp'php,php php'streetphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'cityphp'php,php php'statephp'php,php php'zipphp'php,php php'locationphp'php,php php'latitudephp'php,php php'longitudephp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php2php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php2php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'longitudephp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php-php9php0php)php-php>setMaxphp(php9php0php)php-php>isValidphp(php$optionsphp[php'longitudephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'longitudephp'php:php php{php$optionsphp[php'longitudephp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'latitudephp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php-php1php8php0php)php-php>setMaxphp(php1php8php0php)php-php>isValidphp(php$optionsphp[php'latitudephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'latitudephp'php:php php{php$optionsphp[php'latitudephp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'zipphp'php]php)php php&php&php php!pregphp_matchphp(php'php/php(php^php\dphp{php5php}php$php)php|php(php^php\dphp{php5php}php-php\dphp{php4php}php$php)php/php'php,php php$optionsphp[php'zipphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'zipphp'php:php php{php$optionsphp[php'zipphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php php$hasLocationphp php=php falsephp;
php php php php php php php php php$locationFieldsphp php=php arrayphp(php'streetphp'php,php php'cityphp'php,php php'statephp'php,php php'zipphp'php,php php'locationphp'php)php;
php php php php php php php php foreachphp php(php$locationFieldsphp asphp php$fieldphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php$fieldphp]php)php php&php&php php$optionsphp[php$fieldphp]php php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$hasLocationphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$hasLocationphp php&php&php php(php!issetphp(php$optionsphp[php'latitudephp'php]php)php php|php|php php!issetphp(php$optionsphp[php'longitudephp'php]php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Locationphp dataphp arephp requiredphp butphp missingphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!inphp_arrayphp(php$optionsphp[php'sortphp'php]php,php arrayphp(php'relevancephp'php,php php'titlephp'php,php php'distancephp'php,php php'ratingphp'php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'sortphp'php:php php{php$optionsphp[php'sortphp'php]php}php"php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Newsphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateNewsSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'resultsphp'php,php php'startphp'php,php php'sortphp'php,php php'languagephp'php,php php'typephp'php,php php'sitephp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php5php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'languagephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateLanguagephp(php$optionsphp[php'languagephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'sortphp'php,php php$optionsphp[php'sortphp'php]php,php arrayphp(php'rankphp'php,php php'datephp'php)php)php;
php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'typephp'php,php php$optionsphp[php'typephp'php]php,php arrayphp(php'allphp'php,php php'anyphp'php,php php'phrasephp'php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Pagephp Dataphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validatePageDataSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'resultsphp'php,php php'startphp'php,php php'domainphp_onlyphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php1php0php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Videophp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateVideoSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'typephp'php,php php'resultsphp'php,php php'startphp'php,php php'formatphp'php,php php'adultphp_okphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'typephp'php,php php$optionsphp[php'typephp'php]php,php arrayphp(php'allphp'php,php php'anyphp'php,php php'phrasephp'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php5php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'formatphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'formatphp'php,php php$optionsphp[php'formatphp'php]php,php arrayphp(php'anyphp'php,php php'aviphp'php,php php'flashphp'php,php php'mpegphp'php,php php'msmediaphp'php,php php'quicktimephp'php,php php'realmediaphp'php)php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Webphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateWebSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'appidphp'php,php php'queryphp'php,php php'resultsphp'php,php php'startphp'php,php php'languagephp'php,php php'typephp'php,php php'formatphp'php,php php'adultphp_okphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'similarphp_okphp'php,php php'countryphp'php,php php'sitephp'php,php php'subscriptionphp'php,php php'licensephp'php,php php'regionphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php1php0php0php,php truephp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'resultsphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php)php-php>isValidphp(php$optionsphp[php'resultsphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'resultsphp'php:php php{php$optionsphp[php'resultsphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'startphp'php]php)php php&php&php php!php$betweenphp-php>setMinphp(php1php)php-php>setMaxphp(php1php0php0php0php)php-php>isValidphp(php$optionsphp[php'startphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'startphp'php:php php{php$optionsphp[php'startphp'php]php}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'languagephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateLanguagephp(php$optionsphp[php'languagephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'typephp'php,php php$optionsphp[php'typephp'php]php,php arrayphp(php'allphp'php,php php'anyphp'php,php php'phrasephp'php)php)php;
php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'formatphp'php,php php$optionsphp[php'formatphp'php]php,php arrayphp(php'anyphp'php,php php'htmlphp'php,php php'mswordphp'php,php php'pdfphp'php,php php'pptphp'php,php php'rssphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'txtphp'php,php php'xlsphp'php)php)php;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'licensephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'licensephp'php,php php$optionsphp[php'licensephp'php]php,php arrayphp(php'anyphp'php,php php'ccphp_anyphp'php,php php'ccphp_commercialphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ccphp_modifiablephp'php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'regionphp'php]php)php)php{
php php php php php php php php php php php php php$thisphp-php>php_validateInArrayphp(php'regionphp'php,php php$optionsphp[php'regionphp'php]php,php arrayphp(php'arphp'php,php php'auphp'php,php php'atphp'php,php php'brphp'php,php php'caphp'php,php php'ctphp'php,php php'dkphp'php,php php'fiphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'frphp'php,php php'dephp'php,php php'inphp'php,php php'idphp'php,php php'itphp'php,php php'myphp'php,php php'mxphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'nlphp'php,php php'nophp'php,php php'phphp'php,php php'ruphp'php,php php'sgphp'php,php php'esphp'php,php php'sephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'chphp'php,php php'thphp'php,php php'ukphp'php,php php'usphp'php)php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Preparephp optionsphp forphp sendingphp tophp Yahoophp!
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php php php php php php php php Searchphp Query
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php php php php php php php Userphp specifiedphp options
php php php php php php*php php@paramphp php arrayphp php php$defaultOptionsphp Requiredphp/Defaultphp options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareOptionsphp(php$queryphp,php arrayphp php$optionsphp,php arrayphp php$defaultOptionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$optionsphp[php'appidphp'php]php php=php php$thisphp-php>appIdphp;
php php php php php php php php php$optionsphp[php'queryphp'php]php php=php php(stringphp)php php$queryphp;

php php php php php php php php returnphp arrayphp_mergephp(php$defaultOptionsphp,php php$optionsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp chosenphp languagephp isphp notphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$langphp Languagephp code
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateLanguagephp(php$langphp)
php php php php php{
php php php php php php php php php$languagesphp php=php arrayphp(php'arphp'php,php php'bgphp'php,php php'caphp'php,php php'szhphp'php,php php'tzhphp'php,php php'hrphp'php,php php'csphp'php,php php'daphp'php,php php'nlphp'php,php php'enphp'php,php php'etphp'php,php php'fiphp'php,php php'frphp'php,php php'dephp'php,php php'elphp'php,
php php php php php php php php php php php php php'hephp'php,php php'huphp'php,php php'isphp'php,php php'idphp'php,php php'itphp'php,php php'japhp'php,php php'kophp'php,php php'lvphp'php,php php'ltphp'php,php php'nophp'php,php php'faphp'php,php php'plphp'php,php php'ptphp'php,php php'rophp'php,php php'ruphp'php,php php'skphp'php,php php'srphp'php,php php'slphp'php,
php php php php php php php php php php php php php'esphp'php,php php'svphp'php,php php'thphp'php,php php'trphp'
php php php php php php php php php php php php php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$langphp,php php$languagesphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Thephp selectedphp languagephp php'php$langphp'php isphp notphp supportedphp"php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp checkphp forphp aphp differencephp betweenphp twophp arraysphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php Userphp specifiedphp options
php php php php php php*php php@paramphp php arrayphp php$validOptionsphp Validphp options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp ifphp differencephp isphp foundphp php(ephp.gphp.php,php unsupportedphp queryphp optionphp)
php php php php php php*php/
php php php php protectedphp functionphp php_compareOptionsphp(arrayphp php$optionsphp,php arrayphp php$validOptionsphp)
php php php php php{
php php php php php php php php php$differencephp php=php arrayphp_diffphp(arrayphp_keysphp(php$optionsphp)php,php php$validOptionsphp)php;
php php php php php php php php ifphp php(php$differencephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Thephp followingphp parametersphp arephp invalidphp:php php'php php.php joinphp(php'php,php php'php,php php$differencephp)php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp thatphp aphp namedphp valuephp isphp inphp thephp givenphp array
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php Namephp associatedphp withphp thephp value
php php php php php php*php php@paramphp php mixedphp php php$valuephp Value
php php php php php php*php php@paramphp php arrayphp php php$arrayphp Arrayphp inphp whichphp tophp checkphp forphp thephp value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateInArrayphp(php$namephp,php php$valuephp,php arrayphp php$arrayphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php php$arrayphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php"Invalidphp valuephp forphp optionphp php'php$namephp'php:php php$valuephp"php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp ifphp responsephp isphp anphp error
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$domphp DOMphp Objectphp representingphp thephp resultphp XML
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exceptionphp Thrownphp whenphp thephp resultphp fromphp Yahoophp!php isphp anphp error
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_checkErrorsphp(DOMDocumentphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'yapiphp'php,php php'urnphp:yahoophp:apiphp'php)php;

php php php php php php php php ifphp php(php$xpathphp-php>queryphp(php'php/php/yapiphp:Errorphp'php)php-php>lengthphp php>php=php php1php)php php{
php php php php php php php php php php php php php$messagephp php=php php$xpathphp-php>queryphp(php'php/php/yapiphp:Errorphp/yapiphp:Messagephp/textphp(php)php'php)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$messagephp)php;
php php php php php php php php php}
php php php php php}
php}
