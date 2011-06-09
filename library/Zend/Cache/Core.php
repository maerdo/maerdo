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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Corephp.phpphp php2php2php6php5php1php php2php0php1php0php-php0php7php-php2php1php php0php4php:php1php9php:php4php4Zphp ramonphp php$
php php*php/


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Core
php{
php php php php php/php*php*
php php php php php php*php Messages
php php php php php php*php/
php php php php constphp BACKENDphp_NOTphp_SUPPORTSphp_TAGphp php=php php'tagsphp arephp notphp supportedphp byphp thephp currentphp backendphp'php;
php php php php constphp BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp php=php php'Currentphp backendphp doesnphp\php'tphp implementphp thephp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp,php sophp thisphp methodphp isphp notphp availablephp'php;

php php php php php/php*php*
php php php php php php*php Backendphp Object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Backendphp_Interfacephp php$php_backend
php php php php php php*php/
php php php php protectedphp php$php_backendphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php writephp_controlphp php:
php php php php php php*php php-php Enablephp php/php disablephp writephp controlphp php(thephp cachephp isphp readphp justphp afterphp writingphp tophp detectphp corruptphp entriesphp)
php php php php php php*php php-php Enablephp writephp controlphp willphp lightlyphp slowphp thephp cachephp writingphp butphp notphp thephp cachephp reading
php php php php php php*php Writephp controlphp canphp detectphp somephp corruptphp cachephp filesphp butphp maybephp itphp'sphp notphp aphp perfectphp control
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php cachingphp php:
php php php php php php*php php-php Enablephp php/php disablephp caching
php php php php php php*php php(canphp bephp veryphp usefulphp forphp thephp debugphp ofphp cachedphp scriptsphp)
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php cachephp_idphp_prefixphp php:
php php php php php php*php php-php prefixphp forphp cachephp idsphp php(namespacephp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php automaticphp_serializationphp php:
php php php php php php*php php-php Enablephp php/php disablephp automaticphp serialization
php php php php php php*php php-php Itphp canphp bephp usedphp tophp savephp directlyphp datasphp whichphp arenphp'tphp stringsphp php(butphp itphp'sphp slowerphp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(intphp)php automaticphp_cleaningphp_factorphp php:
php php php php php php*php php-php Disablephp php/php Tunephp thephp automaticphp cleaningphp process
php php php php php php*php php-php Thephp automaticphp cleaningphp processphp destroyphp toophp oldphp php(forphp thephp givenphp lifephp timephp)
php php php php php php*php php php cachephp filesphp whenphp aphp newphp cachephp filephp isphp writtenphp php:
php php php php php php*php php php php php php0php php php php php php php php php php php php php php php php=php>php nophp automaticphp cachephp cleaning
php php php php php php*php php php php php php1php php php php php php php php php php php php php php php php=php>php systematicphp cachephp cleaning
php php php php php php*php php php php php xphp php(integerphp)php php>php php1php php=php>php automaticphp cleaningphp randomlyphp php1php timesphp onphp xphp cachephp write
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(intphp)php lifetimephp php:
php php php php php php*php php-php Cachephp lifetimephp php(inphp secondsphp)
php php php php php php*php php-php Ifphp nullphp,php thephp cachephp isphp validphp foreverphp.
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php loggingphp php:
php php php php php php*php php-php Ifphp setphp tophp truephp,php loggingphp isphp activatedphp php(butphp thephp systemphp isphp slowerphp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php ignorephp_userphp_abort
php php php php php php*php php-php Ifphp setphp tophp truephp,php thephp corephp willphp setphp thephp ignorephp_userphp_abortphp PHPphp flagphp insidephp the
php php php php php php*php php php savephp(php)php methodphp tophp avoidphp cachephp corruptionsphp inphp somephp casesphp php(defaultphp falsephp)
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_optionsphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'writephp_controlphp'php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php'cachingphp'php php php php php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php'cachephp_idphp_prefixphp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'automaticphp_serializationphp'php php php php=php>php falsephp,
php php php php php php php php php'automaticphp_cleaningphp_factorphp'php php=php>php php1php0php,
php php php php php php php php php'lifetimephp'php php php php php php php php php php php php php php php php php php php=php>php php3php6php0php0php,
php php php php php php php php php'loggingphp'php php php php php php php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php'loggerphp'php php php php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'ignorephp_userphp_abortphp'php php php php php php php php php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp optionsphp whichphp havephp tophp bephp transferedphp tophp backend
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_directivesList
php php php php php php*php/
php php php php protectedphp staticphp php$php_directivesListphp php=php arrayphp(php'lifetimephp'php,php php'loggingphp'php,php php'loggerphp'php)php;

php php php php php/php*php*
php php php php php php*php Notphp usedphp forphp thephp corephp,php justphp aphp sortphp aphp hintphp tophp getphp aphp commonphp setOptionphp(php)php methodphp php(forphp thephp corephp andphp forphp frontendsphp)
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_specificOptions
php php php php php php*php/
php php php php protectedphp php$php_specificOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Lastphp usedphp cachephp id
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_lastId
php php php php php php*php/
php php php php privatephp php$php_lastIdphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp thephp backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php php php php php*
php php php php php php*php php@varphp booleanphp php$php_extendedBackend
php php php php php php*php/
php php php php protectedphp php$php_extendedBackendphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp capabilitiesphp ofphp thephp backendphp php(onlyphp ifphp itphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_backendCapabilitiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Associativephp arrayphp ofphp optionsphp orphp Zendphp_Configphp instance
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Optionsphp passedphp werephp notphp anphp arrayphp"
php php php php php php php php php php php php php.php php"php orphp Zendphp_Configphp instancephp.php"php)php;
php php php php php php php php php}
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_loggerSanityphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp usingphp anphp instancephp ofphp typephp Zendphp_Config
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$optionsphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp backend
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cachephp_Backendphp php$backendObject
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setBackendphp(Zendphp_Cachephp_Backendphp php$backendObjectphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_backendphp=php php$backendObjectphp;
php php php php php php php php php/php/php somephp optionsphp php(listedphp inphp php$php_directivesListphp)php havephp tophp bephp given
php php php php php php php php php/php/php tophp thephp backendphp toophp php(evenphp ifphp theyphp arephp notphp php"backendphp specificphp"php)
php php php php php php php php php$directivesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(Zendphp_Cachephp_Corephp:php:php$php_directivesListphp asphp php$directivephp)php php{
php php php php php php php php php php php php php$directivesphp[php$directivephp]php php=php php$thisphp-php>php_optionsphp[php$directivephp]php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_backendphp-php>setDirectivesphp(php$directivesphp)php;
php php php php php php php php ifphp php(inphp_arrayphp(php'Zendphp_Cachephp_Backendphp_ExtendedInterfacephp'php,php classphp_implementsphp(php$thisphp-php>php_backendphp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_extendedBackendphp php=php truephp;
php php php php php php php php php php php php php$thisphp-php>php_backendCapabilitiesphp php=php php$thisphp-php>php_backendphp-php>getCapabilitiesphp(php)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp backend
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Backendphp backendphp object
php php php php php php*php/
php php php php publicphp functionphp getBackendphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_backendphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp frontendphp tophp setphp anphp option
php php php php php php*
php php php php php php*php Therephp isphp anphp additionalphp validationphp php(relativelyphp tophp thephp protectedphp php_setOptionphp methodphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php Namephp ofphp thephp option
php php php php php php*php php@paramphp php mixedphp php php$valuephp Valuephp ofphp thephp option
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
php php php php php php php php php php php php php/php/php Thisphp isphp aphp Corephp option
php php php php php php php php php php php php php$thisphp-php>php_setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_specificOptionsphp)php)php php{
php php php php php php php php php php php php php/php/php Thisphp aphp specicphp optionphp ofphp thisphp frontend
php php php php php php php php php php php php php$thisphp-php>php_specificOptionsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp frontendphp tophp getphp anphp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php Namephp ofphp thephp option
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp mixedphp optionphp value
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Thisphp isphp aphp Corephp option
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$namephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_specificOptionsphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Thisphp aphp specicphp optionphp ofphp thisphp frontend
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_specificOptionsphp[php$namephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Incorrectphp optionphp namephp php:php php$namephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php Namephp ofphp thephp option
php php php php php php*php php@paramphp php mixedphp php php$valuephp Valuephp ofphp thephp option
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_setOptionphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php php|php|php php!arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Incorrectphp optionphp namephp php:php php$namephp"php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$namephp php=php=php php'lifetimephp'php php&php&php emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php nullphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_optionsphp[php$namephp]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forcephp aphp newphp lifetime
php php php php php php*
php php php php php php*php Thephp newphp valuephp isphp setphp forphp thephp corephp/frontendphp butphp forphp thephp backendphp toophp php(directivephp)
php php php php php php*
php php php php php php*php php@paramphp php intphp php$newLifetimephp Newphp lifetimephp php(inphp secondsphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setLifetimephp(php$newLifetimephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'lifetimephp'php]php php=php php$newLifetimephp;
php php php php php php php php php$thisphp-php>php_backendphp-php>setDirectivesphp(arrayphp(
php php php php php php php php php php php php php'lifetimephp'php php=php>php php$newLifetime
php php php php php php php php php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@paramphp php booleanphp php$doNotUnserializephp php php php php php php Dophp notphp serializephp php(evenphp ifphp automaticphp_serializationphp isphp truephp)php php=php>php forphp internalphp use
php php php php php php*php php@returnphp mixedphp|falsephp Cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp,php php$doNotUnserializephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;php php/php/php cachephp idphp mayphp needphp prefix
php php php php php php php php php$thisphp-php>php_lastIdphp php=php php$idphp;
php php php php php php php php selfphp:php:php_validateIdOrTagphp(php$idphp)php;
php php php php php php php php php$dataphp php=php php$thisphp-php>php_backendphp-php>loadphp(php$idphp,php php$doNotTestCacheValidityphp)php;
php php php php php php php php ifphp php(php$dataphp=php=php=falsephp)php php{
php php php php php php php php php php php php php/php/php nophp cachephp available
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php!php$doNotUnserializephp)php php&php&php php$thisphp-php>php_optionsphp[php'automaticphp_serializationphp'php]php)php php{
php php php php php php php php php php php php php/php/php wephp needphp tophp unserializephp beforephp sendingphp thephp result
php php php php php php php php php php php php returnphp unserializephp(php$dataphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp id
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp intphp|falsephp Lastphp modifiedphp timephp ofphp cachephp entryphp ifphp itphp isphp availablephp,php falsephp otherwise
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;php php/php/php cachephp idphp mayphp needphp prefix
php php php php php php php php selfphp:php:php_validateIdOrTagphp(php$idphp)php;
php php php php php php php php php$thisphp-php>php_lastIdphp php=php php$idphp;
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>testphp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp dataphp inphp aphp cache
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$dataphp php php php php php php php php php php Dataphp tophp putphp inphp cachephp php(canphp bephp anotherphp typephp thanphp stringphp ifphp automaticphp_serializationphp isphp onphp)
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php Cachephp idphp php(ifphp notphp setphp,php thephp lastphp cachephp idphp willphp bephp usedphp)
php php php php php php*php php@paramphp php arrayphp php$tagsphp php php php php php php php php php php Cachephp tags
php php php php php php*php php@paramphp php intphp php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@paramphp php intphp php php php$priorityphp php php php php php php php php integerphp betweenphp php0php php(veryphp lowphp priorityphp)php andphp php1php0php php(maximumphp priorityphp)php usedphp byphp somephp particularphp backends
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp php=php nullphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp,php php$priorityphp php=php php8php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_lastIdphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php_validateIdOrTagphp(php$idphp)php;
php php php php php php php php selfphp:php:php_validateTagsArrayphp(php$tagsphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'automaticphp_serializationphp'php]php)php php{
php php php php php php php php php php php php php/php/php wephp needphp tophp serializephp datasphp beforephp storingphp them
php php php php php php php php php php php php php$dataphp php=php serializephp(php$dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Datasphp mustphp bephp stringphp orphp setphp automaticphp_serializationphp php=php truephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php/php automaticphp cleaning
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'automaticphp_cleaningphp_factorphp'php]php php>php php0php)php php{
php php php php php php php php php php php php php$randphp php=php randphp(php1php,php php$thisphp-php>php_optionsphp[php'automaticphp_cleaningphp_factorphp'php]php)php;
php php php php php php php php php php php php ifphp php(php$randphp=php=php1php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Newphp way
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_backendCapabilitiesphp[php'automaticphp_cleaningphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Corephp:php:savephp(php)php php/php automaticphp cleaningphp isphp notphp availablephp/necessaryphp withphp thisphp backendphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Deprecatedphp wayphp php(willphp bephp removedphp inphp nextphp majorphp versionphp)
php php php php php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_backendphp,php php'isAutomaticCleaningAvailablephp'php)php php&php&php php(php$thisphp-php>php_backendphp-php>isAutomaticCleaningAvailablephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Corephp:php:savephp(php)php php/php automaticphp cleaningphp isphp notphp availablephp/necessaryphp withphp thisphp backendphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'ignorephp_userphp_abortphp'php]php)php php{
php php php php php php php php php php php php php$abortphp php=php ignorephp_userphp_abortphp(truephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$thisphp-php>php_extendedBackendphp)php php&php&php php(php$thisphp-php>php_backendCapabilitiesphp[php'priorityphp'php]php)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_backendphp-php>savephp(php$dataphp,php php$idphp,php php$tagsphp,php php$specificLifetimephp,php php$priorityphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_backendphp-php>savephp(php$dataphp,php php$idphp,php php$tagsphp,php php$specificLifetimephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'ignorephp_userphp_abortphp'php]php)php php{
php php php php php php php php php php php php ignorephp_userphp_abortphp(php$abortphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php/php/php maybephp thephp cachephp isphp corruptedphp,php sophp wephp removephp itphp php!
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'loggingphp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Corephp:php:savephp(php)php php:php impossiblephp tophp savephp cachephp php(idphp=php$idphp)php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'writephp_controlphp'php]php)php php{
php php php php php php php php php php php php php$dataphp2php php=php php$thisphp-php>php_backendphp-php>loadphp(php$idphp,php truephp)php;
php php php php php php php php php php php php ifphp php(php$dataphp!php=php$dataphp2php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Corephp:php:savephp(php)php php/php writephp_controlphp php:php writtenphp andphp readphp dataphp dophp notphp matchphp'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_backendphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cache
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp idphp tophp remove
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;php php/php/php cachephp idphp mayphp needphp prefix
php php php php php php php php selfphp:php:php_validateIdOrTagphp(php$idphp)php;
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>removephp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp cachephp entries
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php php'allphp'php php(defaultphp)php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php'oldphp'php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php'matchingTagphp'php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php php'notMatchingTagphp'php php=php>php removephp cachephp entriesphp notphp matchingphp onephp ofphp thephp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php php'matchingAnyTagphp'php php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$mode
php php php php php php*php php@paramphp php arrayphp|stringphp php$tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php php'allphp'php,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(php$modephp,php arrayphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp)php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp cleaningphp modephp'php)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php_validateTagsArrayphp(php$tagsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>cleanphp(php$modephp,php php$tagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_backendCapabilitiesphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_SUPPORTSphp_TAGphp)php;
php php php php php php php php php}

php php php php php php php php php$idsphp php=php php$thisphp-php>php_backendphp-php>getIdsMatchingTagsphp(php$tagsphp)php;

php php php php php php php php php/php/php wephp needphp tophp removephp cachephp_idphp_prefixphp fromphp idsphp php(seephp php#ZFphp-php6php1php7php8php,php php#ZFphp-php7php6php0php0php)
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$prefixphp php php php php=php php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php;
php php php php php php php php php php php php php$prefixLenphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php php php php foreachphp php(php$idsphp asphp php&php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$idphp,php php$prefixphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$idphp php=php substrphp(php$idphp,php php$prefixLenphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$idsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp donphp'tphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ORphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp notphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsNotMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_backendCapabilitiesphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_SUPPORTSphp_TAGphp)php;
php php php php php php php php php}

php php php php php php php php php$idsphp php=php php$thisphp-php>php_backendphp-php>getIdsNotMatchingTagsphp(php$tagsphp)php;

php php php php php php php php php/php/php wephp needphp tophp removephp cachephp_idphp_prefixphp fromphp idsphp php(seephp php#ZFphp-php6php1php7php8php,php php#ZFphp-php7php6php0php0php)
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$prefixphp php php php php=php php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php;
php php php php php php php php php php php php php$prefixLenphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php php php php foreachphp php(php$idsphp asphp php&php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$idphp,php php$prefixphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$idphp php=php substrphp(php$idphp,php php$prefixLenphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$idsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp anyphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ORphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp matchingphp anyphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingAnyTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_backendCapabilitiesphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_SUPPORTSphp_TAGphp)php;
php php php php php php php php php}

php php php php php php php php php$idsphp php=php php$thisphp-php>php_backendphp-php>getIdsMatchingAnyTagsphp(php$tagsphp)php;

php php php php php php php php php/php/php wephp needphp tophp removephp cachephp_idphp_prefixphp fromphp idsphp php(seephp php#ZFphp-php6php1php7php8php,php php#ZFphp-php7php6php0php0php)
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$prefixphp php php php php=php php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php;
php php php php php php php php php php php php php$prefixLenphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php php php php foreachphp php(php$idsphp asphp php&php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$idphp,php php$prefixphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$idphp php=php substrphp(php$idphp,php php$prefixLenphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$idsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}

php php php php php php php php php$idsphp php=php php$thisphp-php>php_backendphp-php>getIdsphp(php)php;

php php php php php php php php php/php/php wephp needphp tophp removephp cachephp_idphp_prefixphp fromphp idsphp php(seephp php#ZFphp-php6php1php7php8php,php php#ZFphp-php7php6php0php0php)
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$prefixphp php php php php=php php&php php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php;
php php php php php php php php php php php php php$prefixLenphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php php php php foreachphp php(php$idsphp asphp php&php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$idphp,php php$prefixphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$idphp php=php substrphp(php$idphp,php php$prefixLenphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$idsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_backendCapabilitiesphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_SUPPORTSphp_TAGphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>getTagsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>getFillingPercentagephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp metadatasphp forphp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php Thephp arrayphp willphp includephp thesephp keysphp php:
php php php php php php*php php-php expirephp php:php thephp expirephp timestamp
php php php php php php*php php-php tagsphp php:php aphp stringphp arrayphp ofphp tags
php php php php php php*php php-php mtimephp php:php timestampphp ofphp lastphp modificationphp time
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp arrayphp arrayphp ofphp metadatasphp php(falsephp ifphp thephp cachephp idphp isphp notphp foundphp)
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;php php/php/php cachephp idphp mayphp needphp prefix
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>getMetadatasphp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givephp php(ifphp possiblephp)php anphp extraphp lifetimephp tophp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@paramphp intphp php$extraLifetime
php php php php php php*php php@returnphp booleanphp truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp touchphp(php$idphp,php php$extraLifetimephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_extendedBackendphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(selfphp:php:BACKENDphp_NOTphp_IMPLEMENTSphp_EXTENDEDphp_IFphp)php;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp(php$idphp)php;php php/php/php cachephp idphp mayphp needphp prefix
php php php php php php php php returnphp php$thisphp-php>php_backendphp-php>touchphp(php$idphp,php php$extraLifetimephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp cachephp idphp orphp aphp tagphp php(securityphp,php reliablephp filenamesphp,php reservedphp prefixesphp.php.php.php)
php php php php php php*
php php php php php php*php Throwphp anphp exceptionphp ifphp aphp problemphp isphp found
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stringphp Cachephp idphp orphp tag
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_validateIdOrTagphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$stringphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp idphp orphp tagphp php:php mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(substrphp(php$stringphp,php php0php,php php9php)php php=php=php php'internalphp-php'php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'php"internalphp-php*php"php idsphp orphp tagsphp arephp reservedphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php~php^php[aphp-zAphp-Zphp0php-php9php_php]php+php$php~Dphp'php,php php$stringphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Invalidphp idphp orphp tagphp php'php$stringphp'php php:php mustphp usephp onlyphp php[aphp-zAphp-Zphp0php-php9php_php]php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp tagsphp arrayphp php(securityphp,php reliablephp filenamesphp,php reservedphp prefixesphp.php.php.php)
php php php php php php*
php php php php php php*php Throwphp anphp exceptionphp ifphp aphp problemphp isphp found
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_validateTagsArrayphp(php$tagsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$tagsphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp tagsphp arrayphp php:php mustphp bephp anphp arrayphp'php)php;
php php php php php php php php php}
php php php php php php php php foreachphp(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php selfphp:php:php_validateIdOrTagphp(php$tagphp)php;
php php php php php php php php php}
php php php php php php php php resetphp(php$tagsphp)php;
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
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_optionsphp[php'loggingphp'php]php)php php|php|php php!php$thisphp-php>php_optionsphp[php'loggingphp'php]php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'loggerphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'loggerphp'php]php instanceofphp Zendphp_Logphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Createphp aphp defaultphp loggerphp tophp thephp standardphp outputphp stream
php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Writerphp/Streamphp.phpphp'php;
php php php php php php php php requirephp_oncephp php'Zendphp/Logphp.phpphp'php;
php php php php php php php php php$loggerphp php=php newphp Zendphp_Logphp(newphp Zendphp_Logphp_Writerphp_Streamphp(php'phpphp:php/php/outputphp'php)php)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'loggerphp'php]php php=php php$loggerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Logphp aphp messagephp atphp thephp WARNphp php(php4php)php priorityphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_logphp(php$messagephp,php php$priorityphp php=php php4php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'loggingphp'php]php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(issetphp(php$thisphp-php>php_optionsphp[php'loggerphp'php]php)php php|php|php php$thisphp-php>php_optionsphp[php'loggerphp'php]php instanceofphp Zendphp_Logphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Loggingphp isphp enabledphp butphp loggerphp isphp notphp setphp'php)php;
php php php php php php php php php}
php php php php php php php php php$loggerphp php=php php$thisphp-php>php_optionsphp[php'loggerphp'php]php;
php php php php php php php php php$loggerphp-php>logphp(php$messagephp,php php$priorityphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp andphp returnphp aphp cachephp id
php php php php php php*
php php php php php php*php Checksphp php'cachephp_idphp_prefixphp'php andphp returnsphp newphp idphp withphp prefixphp orphp simplyphp thephp idphp ifphp null
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp stringphp Cachephp idphp php(withphp orphp withoutphp prefixphp)
php php php php php php*php/
php php php php protectedphp functionphp php_idphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php(php$idphp php!php=php=php nullphp)php php&php&php issetphp(php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'cachephp_idphp_prefixphp'php]php php.php php$idphp;php php/php/php returnphp withphp prefix
php php php php php php php php php}
php php php php php php php php returnphp php$idphp;php php/php/php nophp prefixphp,php justphp returnphp thephp php$idphp passed
php php php php php}

php}
