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
php php*php php@versionphp php php php php$Idphp:php TwoLevelsphp.phpphp php2php2php7php3php6php php2php0php1php0php-php0php7php-php3php0php php1php6php:php2php5php:php5php4Zphp andyfowlerphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/ExtendedInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backend
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Cachephp_Backendphp_TwoLevelsphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php slowphp_backendphp php:
php php php php php php*php php-php Slowphp backendphp name
php php php php php php*php php-php Mustphp implementphp thephp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php php php php php*php php-php Shouldphp providephp aphp bigphp storage
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php fastphp_backendphp php:
php php php php php php*php php-php Flowphp backendphp name
php php php php php php*php php-php Mustphp implementphp thephp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php php php php php*php php-php Mustphp bephp muchphp fasterphp thanphp slowphp_backend
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(arrayphp)php slowphp_backendphp_optionsphp php:
php php php php php php*php php-php Slowphp backendphp optionsphp php(seephp correspondingphp backendphp)
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(arrayphp)php fastphp_backendphp_optionsphp php:
php php php php php php*php php-php Fastphp backendphp optionsphp php(seephp correspondingphp backendphp)
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php statsphp_updatephp_factorphp php:
php php php php php php*php php-php Disablephp php/php Tunephp thephp computationphp ofphp thephp fastphp backendphp fillingphp percentage
php php php php php php*php php-php Whenphp savingphp aphp recordphp intophp cachephp php:
php php php php php php*php php php php php php1php php php php php php php php php php php php php php php php=php>php systematicphp computationphp ofphp thephp fastphp backendphp fillingphp percentage
php php php php php php*php php php php php xphp php(integerphp)php php>php php1php php=php>php computationphp ofphp thephp fastphp backendphp fillingphp percentagephp randomlyphp php1php timesphp onphp xphp cachephp write
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php slowphp_backendphp_customphp_namingphp php:
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php fastphp_backendphp_customphp_namingphp php:
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php slowphp_backendphp_autoloadphp php:
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php fastphp_backendphp_autoloadphp php:
php php php php php php*php php-php Seephp Zendphp_Cachephp:php:factoryphp(php)php method
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php autophp_refreshphp_fastphp_cache
php php php php php php*php php-php Ifphp truephp,php autophp refreshphp thephp fastphp cachephp whenphp aphp cachephp recordphp isphp hit
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'slowphp_backendphp'php php=php>php php'Filephp'php,
php php php php php php php php php'fastphp_backendphp'php php=php>php php'Apcphp'php,
php php php php php php php php php'slowphp_backendphp_optionsphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'fastphp_backendphp_optionsphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'statsphp_updatephp_factorphp'php php=php>php php1php0php,
php php php php php php php php php'slowphp_backendphp_customphp_namingphp'php php=php>php falsephp,
php php php php php php php php php'fastphp_backendphp_customphp_namingphp'php php=php>php falsephp,
php php php php php php php php php'slowphp_backendphp_autoloadphp'php php=php>php falsephp,
php php php php php php php php php'fastphp_backendphp_autoloadphp'php php=php>php falsephp,
php php php php php php php php php'autophp_refreshphp_fastphp_cachephp'php php=php>php true
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Slowphp Backend
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php php php php php*php/
php php php php protectedphp php$php_slowBackendphp;

php php php php php/php*php*
php php php php php php*php Fastphp Backend
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php php php php php php*php/
php php php php protectedphp php$php_fastBackendphp;

php php php php php/php*php*
php php php php php php*php Cachephp forphp thephp fastphp backendphp fillingphp percentage
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_fastBackendFillingPercentagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'slowphp_backendphp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'slowphp_backendphp optionphp hasphp tophp setphp'php)php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_optionsphp[php'slowphp_backendphp'php]php instanceofphp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_slowBackendphp php=php php$thisphp-php>php_optionsphp[php'slowphp_backendphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_slowBackendphp php=php Zendphp_Cachephp:php:php_makeBackendphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'slowphp_backendphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'slowphp_backendphp_optionsphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'slowphp_backendphp_customphp_namingphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'slowphp_backendphp_autoloadphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php'Zendphp_Cachephp_Backendphp_ExtendedInterfacephp'php,php classphp_implementsphp(php$thisphp-php>php_slowBackendphp)php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'slowphp_backendphp mustphp implementphp thephp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp interfacephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'fastphp_backendphp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'fastphp_backendphp optionphp hasphp tophp setphp'php)php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_optionsphp[php'fastphp_backendphp'php]php instanceofphp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_fastBackendphp php=php php$thisphp-php>php_optionsphp[php'fastphp_backendphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fastBackendphp php=php Zendphp_Cachephp:php:php_makeBackendphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'fastphp_backendphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'fastphp_backendphp_optionsphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'fastphp_backendphp_customphp_namingphp'php]php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'fastphp_backendphp_autoloadphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php'Zendphp_Cachephp_Backendphp_ExtendedInterfacephp'php,php classphp_implementsphp(php$thisphp-php>php_fastBackendphp)php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'fastphp_backendphp mustphp implementphp thephp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp interfacephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_slowBackendphp-php>setDirectivesphp(php$thisphp-php>php_directivesphp)php;
php php php php php php php php php$thisphp-php>php_fastBackendphp-php>setDirectivesphp(php$thisphp-php>php_directivesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp mixedphp|falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$fastTestphp php=php php$thisphp-php>php_fastBackendphp-php>testphp(php$idphp)php;
php php php php php php php php ifphp php(php$fastTestphp)php php{
php php php php php php php php php php php php returnphp php$fastTestphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>testphp(php$idphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php Datasphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@paramphp php intphp php php php$priorityphp php php php php php php php php integerphp betweenphp php0php php(veryphp lowphp priorityphp)php andphp php1php0php php(maximumphp priorityphp)php usedphp byphp somephp particularphp backends
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp,php php$priorityphp php=php php8php)
php php php php php{
php php php php php php php php php$usagephp php=php php$thisphp-php>php_getFastFillingPercentagephp(php'savingphp'php)php;
php php php php php php php php php$boolFastphp php=php truephp;
php php php php php php php php php$lifetimephp php=php php$thisphp-php>getLifetimephp(php$specificLifetimephp)php;
php php php php php php php php php$preparedDataphp php=php php$thisphp-php>php_prepareDataphp(php$dataphp,php php$lifetimephp,php php$priorityphp)php;
php php php php php php php php ifphp php(php(php$priorityphp php>php php0php)php php&php&php php(php1php0php php*php php$priorityphp php>php=php php$usagephp)php)php php{
php php php php php php php php php php php php php$fastLifetimephp php=php php$thisphp-php>php_getFastLifetimephp(php$lifetimephp,php php$priorityphp)php;
php php php php php php php php php php php php php$boolFastphp php=php php$thisphp-php>php_fastBackendphp-php>savephp(php$preparedDataphp,php php$idphp,php arrayphp(php)php,php php$fastLifetimephp)php;
php php php php php php php php php php php php php$boolSlowphp php=php php$thisphp-php>php_slowBackendphp-php>savephp(php$preparedDataphp,php php$idphp,php php$tagsphp,php php$lifetimephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$boolSlowphp php=php php$thisphp-php>php_slowBackendphp-php>savephp(php$preparedDataphp,php php$idphp,php php$tagsphp,php php$lifetimephp)php;
php php php php php php php php php php php php ifphp php(php$boolSlowphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$boolFastphp php=php php$thisphp-php>php_fastBackendphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$boolFastphp php&php&php php!php$thisphp-php>php_fastBackendphp-php>testphp(php$idphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php somephp backendsphp returnphp falsephp onphp removephp(php)php evenphp ifphp thephp keyphp neverphp existedphp.php php(andphp itphp wonphp'tphp ifphp fastphp isphp fullphp)
php php php php php php php php php php php php php php php php php php php php php/php/php allphp wephp carephp aboutphp isphp thatphp thephp keyphp doesnphp'tphp existphp now
php php php php php php php php php php php php php php php php php php php php php$boolFastphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php(php$boolFastphp php&php&php php$boolSlowphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php Notephp php:php returnphp valuephp isphp alwaysphp php"stringphp"php php(unserializationphp isphp donephp byphp thephp corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$resphp php=php php$thisphp-php>php_fastBackendphp-php>loadphp(php$idphp,php php$doNotTestCacheValidityphp)php;
php php php php php php php php ifphp php(php$resphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_slowBackendphp-php>loadphp(php$idphp,php php$doNotTestCacheValidityphp)php;
php php php php php php php php php php php php ifphp php(php$resphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php/php therephp isphp nophp cachephp atphp allphp forphp thisphp id
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$arrayphp php=php unserializephp(php$resphp)php;
php php php php php php php php php/php/php maybephp,php wephp havephp tophp refreshphp thephp fastphp cachephp php?
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'autophp_refreshphp_fastphp_cachephp'php]php)php php{
php php php php php php php php php php php php ifphp php(php$arrayphp[php'priorityphp'php]php php=php=php php1php0php)php php{
php php php php php php php php php php php php php php php php php/php/php nophp needphp tophp refreshphp thephp fastphp cachephp withphp priorityphp php=php php1php0
php php php php php php php php php php php php php php php php returnphp php$arrayphp[php'dataphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$newFastLifetimephp php=php php$thisphp-php>php_getFastLifetimephp(php$arrayphp[php'lifetimephp'php]php,php php$arrayphp[php'priorityphp'php]php,php timephp(php)php php-php php$arrayphp[php'expirephp'php]php)php;
php php php php php php php php php php php php php/php/php wephp havephp thephp timephp tophp refreshphp thephp fastphp cache
php php php php php php php php php php php php php$usagephp php=php php$thisphp-php>php_getFastFillingPercentagephp(php'loadingphp'php)php;
php php php php php php php php php php php php ifphp php(php(php$arrayphp[php'priorityphp'php]php php>php php0php)php php&php&php php(php1php0php php*php php$arrayphp[php'priorityphp'php]php php>php=php php$usagephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php wephp canphp refreshphp thephp fastphp cache
php php php php php php php php php php php php php php php php php$preparedDataphp php=php php$thisphp-php>php_prepareDataphp(php$arrayphp[php'dataphp'php]php,php php$arrayphp[php'lifetimephp'php]php,php php$arrayphp[php'priorityphp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_fastBackendphp-php>savephp(php$preparedDataphp,php php$idphp,php arrayphp(php)php,php php$newFastLifetimephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp[php'dataphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php php$boolFastphp php=php php$thisphp-php>php_fastBackendphp-php>removephp(php$idphp)php;
php php php php php php php php php$boolSlowphp php=php php$thisphp-php>php_slowBackendphp-php>removephp(php$idphp)php;
php php php php php php php php returnphp php$boolFastphp php&php&php php$boolSlowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php removephp cachephp entriesphp notphp php{matchingphp onephp ofphp thephp givenphp tagsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php php$boolFastphp php=php php$thisphp-php>php_fastBackendphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php;
php php php php php php php php php php php php php php php php php$boolSlowphp php=php php$thisphp-php>php_slowBackendphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php;
php php php php php php php php php php php php php php php php returnphp php$boolFastphp php&php&php php$boolSlowphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp)php;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>php_slowBackendphp-php>getIdsMatchingTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$boolphp php=php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php$resphp php=php php$resphp php&php&php php$boolphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>php_slowBackendphp-php>getIdsNotMatchingTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$boolphp php=php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php$resphp php=php php$resphp php&php&php php$boolphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$idsphp php=php php$thisphp-php>php_slowBackendphp-php>getIdsMatchingAnyTagsphp(php$tagsphp)php;
php php php php php php php php php php php php php php php php php$resphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp php(php$idsphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php$boolphp php=php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php$resphp php=php php$resphp php&php&php php$boolphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$resphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getIdsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getTagsphp(php)php;
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
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getIdsMatchingTagsphp(php$tagsphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getIdsNotMatchingTagsphp(php$tagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp anyphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp anyphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingAnyTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getIdsMatchingAnyTagsphp(php$tagsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getFillingPercentagephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp metadatasphp forphp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php expirephp php:php thephp expirephp timestamp
php php php php php php*php php-php tagsphp php:php aphp stringphp arrayphp ofphp tags
php php php php php php*php php-php mtimephp php:php timestampphp ofphp lastphp modificationphp time
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp arrayphp arrayphp ofphp metadatasphp php(falsephp ifphp thephp cachephp idphp isphp notphp foundphp)
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>getMetadatasphp(php$idphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_slowBackendphp-php>touchphp(php$idphp,php php$extraLifetimephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp associativephp arrayphp ofphp capabilitiesphp php(booleansphp)php ofphp thephp backend
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php automaticphp_cleaningphp php(isphp automatingphp cleaningphp necessaryphp)
php php php php php php*php php-php tagsphp php(arephp tagsphp supportedphp)
php php php php php php*php php-php expiredphp_readphp php(isphp itphp possiblephp tophp readphp expiredphp cachephp records
php php php php php php*php php php php php php php php php php php php php php php php php php(forphp doNotTestCacheValidityphp optionphp forphp examplephp)php)
php php php php php php*php php-php priorityphp doesphp thephp backendphp dealphp withphp priorityphp whenphp saving
php php php php php php*php php-php infinitephp_lifetimephp php(isphp infinitephp lifetimephp canphp workphp withphp thisphp backendphp)
php php php php php php*php php-php getphp_listphp php(isphp itphp possiblephp tophp getphp thephp listphp ofphp cachephp idsphp andphp thephp completephp listphp ofphp tagsphp)
php php php php php php*
php php php php php php*php php@returnphp arrayphp associativephp ofphp withphp capabilities
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)
php php php php php{
php php php php php php php php php$slowBackendCapabilitiesphp php=php php$thisphp-php>php_slowBackendphp-php>getCapabilitiesphp(php)php;
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'automaticphp_cleaningphp'php php=php>php php$slowBackendCapabilitiesphp[php'automaticphp_cleaningphp'php]php,
php php php php php php php php php php php php php'tagsphp'php php=php>php php$slowBackendCapabilitiesphp[php'tagsphp'php]php,
php php php php php php php php php php php php php'expiredphp_readphp'php php=php>php php$slowBackendCapabilitiesphp[php'expiredphp_readphp'php]php,
php php php php php php php php php php php php php'priorityphp'php php=php>php php$slowBackendCapabilitiesphp[php'priorityphp'php]php,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php=php>php php$slowBackendCapabilitiesphp[php'infinitephp_lifetimephp'php]php,
php php php php php php php php php php php php php'getphp_listphp'php php=php>php php$slowBackendCapabilitiesphp[php'getphp_listphp'php]
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp aphp serializedphp arrayphp tophp storephp datasphp andphp metadatasphp informations
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dataphp dataphp tophp store
php php php php php php*php php@paramphp intphp php$lifetimephp originalphp lifetime
php php php php php php*php php@paramphp intphp php$priorityphp priority
php php php php php php*php php@returnphp stringphp serializephp arrayphp tophp storephp intophp cache
php php php php php php*php/
php php php php privatephp functionphp php_prepareDataphp(php$dataphp,php php$lifetimephp,php php$priorityphp)
php php php php php{
php php php php php php php php php$ltphp php=php php$lifetimephp;
php php php php php php php php ifphp php(php$ltphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$ltphp php=php php9php9php9php9php9php9php9php9php9php9php;
php php php php php php php php php}
php php php php php php php php returnphp serializephp(arrayphp(
php php php php php php php php php php php php php'dataphp'php php=php>php php$dataphp,
php php php php php php php php php php php php php'lifetimephp'php php=php>php php$lifetimephp,
php php php php php php php php php php php php php'expirephp'php php=php>php timephp(php)php php+php php$ltphp,
php php php php php php php php php php php php php'priorityphp'php php=php>php php$priority
php php php php php php php php php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computephp andphp returnphp thephp lifetimephp forphp thephp fastphp backend
php php php php php php*
php php php php php php*php php@paramphp intphp php$lifetimephp originalphp lifetime
php php php php php php*php php@paramphp intphp php$priorityphp priority
php php php php php php*php php@paramphp intphp php$maxLifetimephp maximumphp lifetime
php php php php php php*php php@returnphp intphp lifetimephp forphp thephp fastphp backend
php php php php php php*php/
php php php php privatephp functionphp php_getFastLifetimephp(php$lifetimephp,php php$priorityphp,php php$maxLifetimephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$lifetimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php ifphp lifetimephp isphp nullphp,php wephp havephp anphp infinitephp lifetime
php php php php php php php php php php php php php/php/php wephp needphp tophp usephp arbitraryphp lifetimes
php php php php php php php php php php php php php$fastLifetimephp php=php php(intphp)php php(php2php5php9php2php0php0php0php php/php php(php1php1php php-php php$priorityphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fastLifetimephp php=php php(intphp)php php(php$lifetimephp php/php php(php1php1php php-php php$priorityphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$maxLifetimephp php!php=php=php nullphp)php php&php&php php(php$maxLifetimephp php>php=php php0php)php)php php{
php php php php php php php php php php php php ifphp php(php$fastLifetimephp php>php php$maxLifetimephp)php php{
php php php php php php php php php php php php php php php php returnphp php$maxLifetimephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$fastLifetimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php PUBLICphp METHODphp FORphp UNITphp TESTINGphp ONLYphp php!
php php php php php php*
php php php php php php*php Forcephp aphp cachephp recordphp tophp expire
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php/
php php php php publicphp functionphp php_php_php_expirephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fastBackendphp-php>removephp(php$idphp)php;
php php php php php php php php php$thisphp-php>php_slowBackendphp-php>php_php_php_expirephp(php$idphp)php;
php php php php php}

php php php php privatephp functionphp php_getFastFillingPercentagephp(php$modephp)
php php php php php{

php php php php php php php php ifphp php(php$modephp php=php=php php'savingphp'php)php php{
php php php php php php php php php php php php php/php/php modephp saving
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_fastBackendFillingPercentagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_fastBackendFillingPercentagephp php=php php$thisphp-php>php_fastBackendphp-php>getFillingPercentagephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$randphp php=php randphp(php1php,php php$thisphp-php>php_optionsphp[php'statsphp_updatephp_factorphp'php]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$randphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php wephp forcephp aphp refresh
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fastBackendFillingPercentagephp php=php php$thisphp-php>php_fastBackendphp-php>getFillingPercentagephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php modephp loading
php php php php php php php php php php php php php/php/php wephp computephp thephp percentagephp onlyphp ifphp itphp'sphp notphp availablephp inphp cache
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_fastBackendFillingPercentagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_fastBackendFillingPercentagephp php=php php$thisphp-php>php_fastBackendphp-php>getFillingPercentagephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_fastBackendFillingPercentagephp;
php php php php php}

php}
