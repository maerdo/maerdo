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
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Profiler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Firebugphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dbphp_Profilerphp php*php/
requirephp_oncephp php'Zendphp/Dbphp/Profilerphp.phpphp'php;

php/php*php*php Zendphp_Wildfirephp_Pluginphp_FirePhpphp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Pluginphp/FirePhpphp.phpphp'php;

php/php*php*php Zendphp_Wildfirephp_Pluginphp_FirePhpphp_TableMessagephp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Pluginphp/FirePhpphp/TableMessagephp.phpphp'php;

php/php*php*
php php*php Writesphp DBphp eventsphp asphp logphp messagesphp tophp thephp Firebugphp Consolephp viaphp FirePHPphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Profiler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Profilerphp_Firebugphp extendsphp Zendphp_Dbphp_Profiler
php{
php php php php php/php*php*
php php php php php php*php Thephp originalphp labelphp forphp thisphp profilerphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_labelphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp labelphp templatephp forphp thisphp profiler
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_labelphp_templatephp php=php php'php%labelphp%php php(php%totalCountphp%php php@php php%totalDurationphp%php secphp)php'php;

php php php php php/php*php*
php php php php php php*php Thephp messagephp envelopephp holdingphp thephp profilingphp summary
php php php php php php*php php@varphp Zendphp_Wildfirephp_Pluginphp_FirePhpphp_TableMessage
php php php php php php*php/
php php php php protectedphp php$php_messagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp totalphp timephp takenphp forphp allphp profiledphp queriesphp.
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_totalElapsedTimephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$labelphp OPTIONALphp Labelphp forphp thephp profilingphp infophp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$labelphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_labelphp php=php php$labelphp;
php php php php php php php php ifphp(php!php$thisphp-php>php_labelphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_labelphp php=php php'Zendphp_Dbphp_Profilerphp_Firebugphp'php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp orphp disablephp thephp profilerphp.php php Ifphp php$enablephp isphp falsephp,php thephp profiler
php php php php php php*php isphp disabledphp andphp willphp notphp logphp anyphp queriesphp sentphp tophp itphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$enable
php php php php php php*php php@returnphp Zendphp_Dbphp_Profilerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setEnabledphp(php$enablephp)
php php php php php{
php php php php php php php php parentphp:php:setEnabledphp(php$enablephp)php;

php php php php php php php php ifphp php(php$thisphp-php>getEnabledphp(php)php)php php{

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_messagephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp php=php newphp Zendphp_Wildfirephp_Pluginphp_FirePhpphp_TableMessagephp(php$thisphp-php>php_labelphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp-php>setBufferedphp(truephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp-php>setHeaderphp(arrayphp(php'Timephp'php,php'Eventphp'php,php'Parametersphp'php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp-php>setDestroyphp(truephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp-php>setOptionphp(php'includeLineNumbersphp'php,php falsephp)php;
php php php php php php php php php php php php php php php php Zendphp_Wildfirephp_Pluginphp_FirePhpphp:php:getInstancephp(php)php-php>sendphp(php$thisphp-php>php_messagephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_messagephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp-php>setDestroyphp(truephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagephp php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Interceptphp thephp queryphp endphp andphp logphp thephp profilingphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$queryId
php php php php php php*php php@throwsphp Zendphp_Dbphp_Profilerphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp queryEndphp(php$queryIdphp)
php php php php php{
php php php php php php php php php$statephp php=php parentphp:php:queryEndphp(php$queryIdphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>getEnabledphp(php)php php|php|php php$statephp php=php=php selfphp:php:IGNOREDphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_messagephp-php>setDestroyphp(falsephp)php;

php php php php php php php php php$profilephp php=php php$thisphp-php>getQueryProfilephp(php$queryIdphp)php;

php php php php php php php php php$thisphp-php>php_totalElapsedTimephp php+php=php php$profilephp-php>getElapsedSecsphp(php)php;

php php php php php php php php php$thisphp-php>php_messagephp-php>addRowphp(arrayphp(php(stringphp)roundphp(php$profilephp-php>getElapsedSecsphp(php)php,php5php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$profilephp-php>getQueryphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$paramsphp=php$profilephp-php>getQueryParamsphp(php)php)php?php$paramsphp:nullphp)php)php;

php php php php php php php php php$thisphp-php>updateMessageLabelphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp thephp labelphp ofphp thephp messagephp holdingphp thephp profilephp infophp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp updateMessageLabelphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_messagephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_messagephp-php>setLabelphp(strphp_replacephp(arrayphp(php'php%labelphp%php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php%totalCountphp%php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php%totalDurationphp%php'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php$thisphp-php>php_labelphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getTotalNumQueriesphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(stringphp)roundphp(php$thisphp-php>php_totalElapsedTimephp,php5php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_labelphp_templatephp)php)php;
php php php php php}
php}
