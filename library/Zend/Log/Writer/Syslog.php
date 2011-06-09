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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Syslogphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp php*php/
requirephp_oncephp php'Zendphp/Logphp.phpphp'php;

php/php*php*php Zendphp_Logphp_Writerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Writerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Writesphp logphp messagesphp tophp syslog
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Logphp_Writerphp_Syslogphp extendsphp Zendphp_Logphp_Writerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Mapsphp Zendphp_Logphp prioritiesphp tophp PHPphp'sphp syslogphp priorities
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_prioritiesphp php=php arrayphp(
php php php php php php php php Zendphp_Logphp:php:EMERGphp php php=php>php LOGphp_EMERGphp,
php php php php php php php php Zendphp_Logphp:php:ALERTphp php php=php>php LOGphp_ALERTphp,
php php php php php php php php Zendphp_Logphp:php:CRITphp php php php=php>php LOGphp_CRITphp,
php php php php php php php php Zendphp_Logphp:php:ERRphp php php php php=php>php LOGphp_ERRphp,
php php php php php php php php Zendphp_Logphp:php:WARNphp php php php=php>php LOGphp_WARNINGphp,
php php php php php php php php Zendphp_Logphp:php:NOTICEphp php=php>php LOGphp_NOTICEphp,
php php php php php php php php Zendphp_Logphp:php:INFOphp php php php=php>php LOGphp_INFOphp,
php php php php php php php php Zendphp_Logphp:php:DEBUGphp php php=php>php LOGphp_DEBUGphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp logphp priorityphp php-php forphp unmappedphp customphp priorities
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultPriorityphp php=php LOGphp_NOTICEphp;

php php php php php/php*php*
php php php php php php*php Lastphp applicationphp namephp setphp byphp aphp syslogphp-writerphp instance
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_lastApplicationphp;

php php php php php/php*php*
php php php php php php*php Lastphp facilityphp namephp setphp byphp aphp syslogphp-writerphp instance
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_lastFacilityphp;

php php php php php/php*php*
php php php php php php*php Applicationphp namephp usedphp byphp thisphp syslogphp-writerphp instance
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_applicationphp php=php php'Zendphp_Logphp'php;

php php php php php/php*php*
php php php php php php*php Facilityphp usedphp byphp thisphp syslogphp-writerphp instance
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_facilityphp php=php LOGphp_USERphp;

php php php php php/php*php*
php php php php php php*php Typesphp ofphp programphp availablephp tophp loggingphp ofphp message
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validFacilitiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paramsphp Arrayphp ofphp optionsphp;php mayphp includephp php"applicationphp"php andphp php"facilityphp"php keys
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'applicationphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_applicationphp php=php php$paramsphp[php'applicationphp'php]php;
php php php php php php php php php}

php php php php php php php php php$runInitializeSyslogphp php=php truephp;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'facilityphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFacilityphp(php$paramsphp[php'facilityphp'php]php)php;
php php php php php php php php php php php php php$runInitializeSyslogphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$runInitializeSyslogphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_initializeSyslogphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Writerphp_Syslog
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Syslog
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php returnphp newphp selfphp(selfphp:php:php_parseConfigphp(php$configphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp valuesphp facilities
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initializeValidFacilitiesphp(php)
php php php php php{
php php php php php php php php php$constantsphp php=php arrayphp(
php php php php php php php php php php php php php'LOGphp_AUTHphp'php,
php php php php php php php php php php php php php'LOGphp_AUTHPRIVphp'php,
php php php php php php php php php php php php php'LOGphp_CRONphp'php,
php php php php php php php php php php php php php'LOGphp_DAEMONphp'php,
php php php php php php php php php php php php php'LOGphp_KERNphp'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp0php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp1php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp2php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp3php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp4php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp5php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp6php'php,
php php php php php php php php php php php php php'LOGphp_LOCALphp7php'php,
php php php php php php php php php php php php php'LOGphp_LPRphp'php,
php php php php php php php php php php php php php'LOGphp_MAILphp'php,
php php php php php php php php php php php php php'LOGphp_NEWSphp'php,
php php php php php php php php php php php php php'LOGphp_SYSLOGphp'php,
php php php php php php php php php php php php php'LOGphp_USERphp'php,
php php php php php php php php php php php php php'LOGphp_UUCPphp'
php php php php php php php php php)php;

php php php php php php php php foreachphp php(php$constantsphp asphp php$constantphp)php php{
php php php php php php php php php php php php ifphp php(definedphp(php$constantphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_validFacilitiesphp[php]php php=php constantphp(php$constantphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp syslogphp php/php setphp applicationphp namephp andphp facility
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initializeSyslogphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_lastApplicationphp php=php php$thisphp-php>php_applicationphp;
php php php php php php php php selfphp:php:php$php_lastFacilityphp php php php php=php php$thisphp-php>php_facilityphp;
php php php php php php php php openlogphp(php$thisphp-php>php_applicationphp,php LOGphp_PIDphp,php php$thisphp-php>php_facilityphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp syslogphp facility
php php php php php php*
php php php php php php*php php@paramphp php intphp php$facilityphp Syslogphp facility
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Syslog
php php php php php php*php php@throwsphp Zendphp_Logphp_Exceptionphp forphp invalidphp logphp facility
php php php php php php*php/
php php php php publicphp functionphp setFacilityphp(php$facilityphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_facilityphp php=php=php=php php$facilityphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!countphp(php$thisphp-php>php_validFacilitiesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_initializeValidFacilitiesphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!inphp_arrayphp(php$facilityphp,php php$thisphp-php>php_validFacilitiesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Invalidphp logphp facilityphp providedphp;php pleasephp seephp httpphp:php/php/phpphp.netphp/openlogphp forphp aphp listphp ofphp validphp facilityphp valuesphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php'WINphp'php php=php=php strtoupperphp(substrphp(PHPphp_OSphp,php php0php,php php3php)php)
php php php php php php php php php php php php php&php&php php(php$facilityphp php!php=php=php LOGphp_USERphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Onlyphp LOGphp_USERphp isphp aphp validphp logphp facilityphp onphp Windowsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_facilityphp php=php php$facilityphp;
php php php php php php php php php$thisphp-php>php_initializeSyslogphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp applicationphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$applicationphp Applicationphp name
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Syslog
php php php php php php*php/
php php php php publicphp functionphp setApplicationNamephp(php$applicationphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_applicationphp php=php=php=php php$applicationphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_applicationphp php=php php$applicationphp;
php php php php php php php php php$thisphp-php>php_initializeSyslogphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp syslogphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp shutdownphp(php)
php php php php php{
php php php php php php php php closelogphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp messagephp tophp syslogphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$eventphp eventphp data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$eventphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$eventphp[php'priorityphp'php]php,php php$thisphp-php>php_prioritiesphp)php)php php{
php php php php php php php php php php php php php$priorityphp php=php php$thisphp-php>php_prioritiesphp[php$eventphp[php'priorityphp'php]php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$priorityphp php=php php$thisphp-php>php_defaultPriorityphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_applicationphp php!php=php=php selfphp:php:php$php_lastApplication
php php php php php php php php php php php php php|php|php php$thisphp-php>php_facilityphp php!php=php=php selfphp:php:php$php_lastFacilityphp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>php_initializeSyslogphp(php)php;
php php php php php php php php php}

php php php php php php php php syslogphp(php$priorityphp,php php$eventphp[php'messagephp'php]php)php;
php php php php php}
php}
