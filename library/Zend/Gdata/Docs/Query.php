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
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Docs
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Queryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Gdataphp_Query
php php*php/
requirephp_oncephp(php'Zendphp/Gdataphp/Queryphp.phpphp'php)php;

php/php*php*
php php*php Assistsphp inphp constructingphp queriesphp forphp Googlephp Documentphp Listphp documents
php php*
php php*php php@linkphp httpphp:php/php/codephp.googlephp.comphp/apisphp/gdataphp/spreadsheetsphp/
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Docs
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Gdataphp_Docsphp_Queryphp extendsphp Zendphp_Gdataphp_Query
php{

php php php php php/php*php*
php php php php php php*php Thephp basephp URLphp forphp retrievingphp aphp documentphp list
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp DOCUMENTSphp_LISTphp_FEEDphp_URIphp php=php php'httpphp:php/php/docsphp.googlephp.comphp/feedsphp/documentsphp'php;

php php php php php/php*php*
php php php php php php*php Thephp genericphp basephp URLphp usedphp byphp somephp inheritedphp methods
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultFeedUriphp php=php selfphp:php:DOCUMENTSphp_LISTphp_FEEDphp_URIphp;

php php php php php/php*php*
php php php php php php*php Thephp visibilityphp tophp bephp usedphp whenphp queryingphp forphp thephp feedphp.php Aphp requestphp forphp a
php php php php php php*php feedphp withphp privatephp visbilityphp requiresphp thephp userphp tophp bephp authenricatedphp.
php php php php php php*php Privatephp isphp thephp onlyphp avilablephp visibilityphp forphp thephp documentsphp listphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_visibilityphp php=php php'privatephp'php;

php php php php php/php*php*
php php php php php php*php Thephp projectionphp determinesphp howphp muchphp detailphp shouldphp bephp givenphp inphp the
php php php php php php*php resultphp ofphp thephp queryphp.php Fullphp isphp thephp onlyphp validphp projectionphp forphp the
php php php php php php*php documentsphp listphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_projectionphp php=php php'fullphp'php;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp instancephp ofphp aphp Zendphp_Gdataphp_Docsphp_Queryphp objectphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp projectionphp forphp thisphp queryphp.php Commonphp valuesphp forphp projection
php php php php php php*php includephp php'fullphp'php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Gdataphp_Docsphp_Queryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setProjectionphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_projectionphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp visibilityphp forphp thisphp queryphp.php Commonphp valuesphp forphp visibility
php php php php php php*php includephp php'privatephp'php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Gdataphp_Docsphp_Queryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setVisibilityphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_visibilityphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp projectionphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp projection
php php php php php php*php/
php php php php publicphp functionphp getProjectionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_projectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp visibilityphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp visibility
php php php php php php*php/
php php php php publicphp functionphp getVisibilityphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_visibilityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp titlephp attributephp forphp thisphp queryphp.php Thephp titlephp parameterphp isphp used
php php php php php php*php tophp restrictphp thephp resultsphp tophp documentsphp whosephp titlesphp eitherphp containphp or
php php php php php php*php completelyphp matchphp thephp titlephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Gdataphp_Docsphp_Queryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_paramsphp[php'titlephp'php]php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_paramsphp[php'titlephp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp titlephp attributephp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp title
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_paramsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php'titlephp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp titlephp-exactphp attributephp forphp thisphp queryphp.
php php php php php php*php Ifphp titlephp-exactphp isphp setphp tophp truephp,php thephp titlephp queryphp parameterphp willphp bephp used
php php php php php php*php inphp anphp exactphp matchphp.php Onlyphp documentsphp withphp aphp titlephp identicalphp tophp the
php php php php php php*php titlephp parameterphp willphp bephp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$valuephp Usephp eitherphp truephp orphp false
php php php php php php*php php@returnphp Zendphp_Gdataphp_Docsphp_Queryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTitleExactphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_paramsphp[php'titlephp-exactphp'php]php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_paramsphp[php'titlephp-exactphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp titlephp-exactphp attributephp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp titlephp-exact
php php php php php php*php/
php php php php publicphp functionphp getTitleExactphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'titlephp-exactphp'php,php php$thisphp-php>php_paramsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php'titlephp-exactphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp fullphp queryphp URLphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp url
php php php php php php*php/
php php php php publicphp functionphp getQueryUrlphp(php)
php php php php php{
php php php php php php php php php$uriphp php=php php$thisphp-php>php_defaultFeedUriphp;

php php php php php php php php ifphp php(php$thisphp-php>php_visibilityphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$uriphp php.php=php php'php/php'php php.php php$thisphp-php>php_visibilityphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Gdataphp/Appphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Gdataphp_Appphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Aphp visibilityphp mustphp bephp providedphp forphp cellphp queriesphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_projectionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$uriphp php.php=php php'php/php'php php.php php$thisphp-php>php_projectionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Gdataphp/Appphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Gdataphp_Appphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Aphp projectionphp mustphp bephp providedphp forphp cellphp queriesphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$uriphp php.php=php php$thisphp-php>getQueryStringphp(php)php;
php php php php php php php php returnphp php$uriphp;
php php php php php}

php}
