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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Message
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PlatformJobphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Message
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Messagephp.phpphp'php;

php/php*php*
php php*php Classphp forphp managingphp Zendphp Platformphp JobQueuephp jobsphp viaphp Zendphp_Queue
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Message
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Messagephp_PlatformJobphp extendsphp Zendphp_Queuephp_Message
php{
php php php php php/php*php*
php php php php php php*php php@varphp ZendApiphp_Job
php php php php php php*php/
php php php php protectedphp php$php_jobphp;

php php php php php/php*php*
php php php php php php*php Jobphp identifier
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_idphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Thephp constructorphp shouldphp bephp anphp arrayphp ofphp optionsphp.
php php php php php php*
php php php php php php*php Ifphp thephp optionphp php'dataphp'php isphp providedphp,php andphp isphp anphp instancephp ofphp ZendApiphp_Jobphp,
php php php php php php*php thatphp objectphp willphp bephp usedphp asphp thephp internalphp jobphp;php ifphp thatphp optionphp isphp notphp a
php php php php php php*php ZendApiphp_Jobphp instancephp,php anphp exceptionphp willphp bephp thrownphp.
php php php php php php*
php php php php php php*php Alternatelyphp,php youphp mayphp specifyphp thephp php'scriptphp'php parameterphp,php whichphp shouldphp bephp a
php php php php php php*php JobQueuephp scriptphp thephp jobphp willphp requestphp.php Aphp newphp ZendApiphp_Jobphp objectphp willphp then
php php php php php php*php bephp createdphp usingphp thatphp scriptphp andphp anyphp optionsphp youphp providephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php(php$optionsphp[php'dataphp'php]php instanceofphp ZendApiphp_Jobphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Dataphp mustphp bephp anphp instancephp ofphp ZendApiphp_Jobphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_jobphp php=php php$optionsphp[php'dataphp'php]php;
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$thisphp-php>php_jobphp-php>getPropertiesphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'scriptphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Thephp scriptphp isphp mandatoryphp dataphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_jobphp php=php newphp ZendApiphp_Jobphp(php$optionsphp[php'scriptphp'php]php)php;
php php php php php php php php php php php php php$thisphp-php>php_setJobPropertiesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp jobphp identifier
php php php php php php*
php php php php php php*php Usedphp withinphp Zendphp_Queuephp onlyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp_PlatformJob
php php php php php php*php/
php php php php publicphp functionphp setJobIdphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_idphp php=php php$idphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp jobphp identifier
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getJobIdphp(php)
php php php php php{
php php php php php php php php returnphp php(php(php$thisphp-php>php_idphp)php php?php php php$thisphp-php>php_idphp php:php php$thisphp-php>php_jobphp-php>getIDphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp internalphp ZendApiphp_Jobphp instance
php php php php php php*
php php php php php php*php php@returnphp ZendApiphp_Job
php php php php php php*php/
php php php php publicphp functionphp getJobphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_jobphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp queuephp andphp dataphp inphp serializedphp object
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp serializephp(php'php_jobphp'php,php php'php_idphp'php,php php'php_dataphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp thephp classphp namephp ofphp thephp Queuephp objectphp forphp whichphp this
php php php php php php*php Messagephp wasphp createdphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getQueueClassphp(php)
php php php php php{
php php php php php php php php returnphp php'Zendphp_Queuephp_Adapterphp_Platformphp_JQphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp propertiesphp onphp thephp ZendApiphp_Jobphp instance
php php php php php php*
php php php php php php*php Anyphp optionsphp inphp thephp php{php@linkphp php$php_dataphp}php arrayphp willphp bephp checkedphp.php Thosephp matching
php php php php php php*php optionsphp inphp ZendApiphp_Jobphp willphp bephp usedphp tophp setphp thosephp optionsphp inphp that
php php php php php php*php instancephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setJobPropertiesphp(php)php php{

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'scriptphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setScriptphp(php$thisphp-php>php_dataphp[php'scriptphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'priorityphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setJobPriorityphp(php$thisphp-php>php_dataphp[php'priorityphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setJobNamephp(php$thisphp-php>php_dataphp[php'namephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'predecessorphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setJobDependencyphp(php$thisphp-php>php_dataphp[php'predecessorphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'preservedphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setPreservedphp(php$thisphp-php>php_dataphp[php'preservedphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'userphp_variablesphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setUserVariablesphp(php$thisphp-php>php_dataphp[php'userphp_variablesphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_dataphp[php'intervalphp'php]php)php)php php{
php php php php php php php php php php php php php$endTimephp php=php issetphp(php$thisphp-php>php_dataphp[php'endphp_timephp'php]php)php php?php php$thisphp-php>php_dataphp[php'endphp_timephp'php]php php:php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setRecurrenceDataphp(php$thisphp-php>php_dataphp[php'intervalphp'php]php,php php$endTimephp)php;
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_dataphp[php'intervalphp'php]php)php php&php&php php(php$thisphp-php>php_dataphp[php'intervalphp'php]php php=php=php=php php'php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setRecurrenceDataphp(php0php,php0php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'scheduledphp_timephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setScheduledTimephp(php$thisphp-php>php_dataphp[php'scheduledphp_timephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'applicationphp_idphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_jobphp-php>setApplicationIDphp(php$thisphp-php>php_dataphp[php'applicationphp_idphp'php]php)php;
php php php php php php php php php}
php php php php php}
php}
