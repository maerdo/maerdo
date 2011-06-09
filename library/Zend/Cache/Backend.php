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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Backendphp.phpphp php2php0php8php8php0php php2php0php1php0php-php0php2php-php0php3php php1php8php:php1php8php:php3php2Zphp matthewphp php$
php php*php/


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Backend
php{
php php php php php/php*php*
php php php php php php*php Frontendphp orphp Corephp directives
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php lifetimephp php:
php php php php php php*php php-php Cachephp lifetimephp php(inphp secondsphp)
php php php php php php*php php-php Ifphp nullphp,php thephp cachephp isphp validphp forever
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php loggingphp php:
php php php php php php*php php-php ifphp setphp tophp truephp,php aphp loggingphp isphp activatedphp throwphp Zendphp_Log
php php php php php php*
php php php php php php*php php@varphp arrayphp directives
php php php php php php*php/
php php php php protectedphp php$php_directivesphp php=php arrayphp(
php php php php php php php php php'lifetimephp'php php=php>php php3php6php0php0php,
php php php php php php php php php'loggingphp'php php php=php>php falsephp,
php php php php php php php php php'loggerphp'php php php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp frontendphp directives
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$directivesphp Assocphp ofphp directives
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDirectivesphp(php$directivesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$directivesphp)php)php Zendphp_Cachephp:php:throwExceptionphp(php'Directivesphp parameterphp mustphp bephp anphp arrayphp'php)php;
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$directivesphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Incorrectphp optionphp namephp php:php php$namephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_directivesphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_directivesphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loggerSanityphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Incorrectphp optionphp namephp php:php php$namephp"php)php;
php php php php php php php php php}
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp lifephp time
php php php php php php*
php php php php php php*php ifphp php$specificLifetimephp isphp notphp falsephp,php thephp givenphp specificphp lifephp timephp isphp used
php php php php php php*php elsephp,php thephp globalphp lifetimephp isphp used
php php php php php php*
php php php php php php*php php@paramphp php intphp php$specificLifetime
php php php php php php*php php@returnphp intphp Cachephp lifephp time
php php php php php php*php/
php php php php publicphp functionphp getLifetimephp(php$specificLifetimephp)
php php php php php{
php php php php php php php php ifphp php(php$specificLifetimephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_directivesphp[php'lifetimephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$specificLifetimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp thephp automaticphp cleaningphp isphp availablephp forphp thephp backend
php php php php php php*
php php php php php php*php DEPRECATEDphp php:php usephp getCapabilitiesphp(php)php instead
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAutomaticCleaningAvailablephp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp systemphp TMPphp directoryphp andphp detectphp ifphp wephp havephp readphp access
php php php php php php*
php php php php php php*php inspiredphp fromphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exceptionphp ifphp unablephp tophp determinephp directory
php php php php php php*php/
php php php php publicphp functionphp getTmpDirphp(php)
php php php php php{
php php php php php php php php php$tmpdirphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(arrayphp(php$php_ENVphp,php php$php_SERVERphp)php asphp php$tabphp)php php{
php php php php php php php php php php php php foreachphp php(arrayphp(php'TMPDIRphp'php,php php'TEMPphp'php,php php'TMPphp'php,php php'windirphp'php,php php'SystemRootphp'php)php asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$tabphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$keyphp php=php=php php'windirphp'php)php orphp php(php$keyphp php=php=php php'SystemRootphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$dirphp php=php realpathphp(php$tabphp[php$keyphp]php php.php php'php\php\tempphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$dirphp php=php realpathphp(php$tabphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$dirphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$uploadphp php=php iniphp_getphp(php'uploadphp_tmpphp_dirphp'php)php;
php php php php php php php php ifphp php(php$uploadphp)php php{
php php php php php php php php php php php php php$dirphp php=php realpathphp(php$uploadphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$dirphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'sysphp_getphp_tempphp_dirphp'php)php)php php{
php php php php php php php php php php php php php$dirphp php=php sysphp_getphp_tempphp_dirphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$dirphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php/php Attempphp tophp detectphp byphp creatingphp aphp temporaryphp file
php php php php php php php php php$tempFilephp php=php tempnamphp(mdphp5php(uniqidphp(randphp(php)php,php TRUEphp)php)php,php php'php'php)php;
php php php php php php php php ifphp php(php$tempFilephp)php php{
php php php php php php php php php php php php php$dirphp php=php realpathphp(dirnamephp(php$tempFilephp)php)php;
php php php php php php php php php php php php unlinkphp(php$tempFilephp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$dirphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php'php/tmpphp'php)php)php php{
php php php php php php php php php php php php returnphp php'php/tmpphp'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_isGoodTmpDirphp(php'php\php\tempphp'php)php)php php{
php php php php php php php php php php php php returnphp php'php\php\tempphp'php;
php php php php php php php php php}
php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Couldphp notphp determinephp tempphp directoryphp,php pleasephp specifyphp aphp cachephp_dirphp manuallyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp ifphp thephp givenphp temporaryphp directoryphp isphp readablephp andphp writable
php php php php php php*
php php php php php php*php php@paramphp php$dirphp temporaryphp directory
php php php php php php*php php@returnphp booleanphp truephp ifphp thephp directoryphp isphp ok
php php php php php php*php/
php php php php protectedphp functionphp php_isGoodTmpDirphp(php$dirphp)
php php php php php{
php php php php php php php php ifphp php(isphp_readablephp(php$dirphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_writablephp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp surephp ifphp wephp enablephp loggingphp thatphp thephp Zendphp_Logphp class
php php php php php php*php isphp availablephp.
php php php php php php*php Createphp aphp defaultphp logphp objectphp ifphp nonephp isphp setphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loggerSanityphp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_directivesphp[php'loggingphp'php]php)php php|php|php php!php$thisphp-php>php_directivesphp[php'loggingphp'php]php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_directivesphp[php'loggerphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_directivesphp[php'loggerphp'php]php instanceofphp Zendphp_Logphp)php php{
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Loggerphp objectphp isphp notphp anphp instancephp ofphp Zendphp_Logphp classphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Createphp aphp defaultphp loggerphp tophp thephp standardphp outputphp stream
php php php php php php php php requirephp_oncephp php'Zendphp/Logphp.phpphp'php;
php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Writerphp/Streamphp.phpphp'php;
php php php php php php php php php$loggerphp php=php newphp Zendphp_Logphp(newphp Zendphp_Logphp_Writerphp_Streamphp(php'phpphp:php/php/outputphp'php)php)php;
php php php php php php php php php$thisphp-php>php_directivesphp[php'loggerphp'php]php php=php php$loggerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Logphp aphp messagephp atphp thephp WARNphp php(php4php)php priorityphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_logphp(php$messagephp,php php$priorityphp php=php php4php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_directivesphp[php'loggingphp'php]php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_directivesphp[php'loggerphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Loggingphp isphp enabledphp butphp loggerphp isphp notphp setphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$loggerphp php=php php$thisphp-php>php_directivesphp[php'loggerphp'php]php;
php php php php php php php php ifphp php(php!php$loggerphp instanceofphp Zendphp_Logphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Loggerphp objectphp isphp notphp anphp instancephp ofphp Zendphp_Logphp classphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$loggerphp-php>logphp(php$messagephp,php php$priorityphp)php;
php php php php php}
php}
