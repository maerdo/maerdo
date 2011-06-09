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
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Functionphp.phpphp php2php2php6php4php8php php2php0php1php0php-php0php7php-php2php0php php1php4php:php4php3php:php2php7Zphp mabephp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Core
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Corephp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Frontendphp_Functionphp extendsphp Zendphp_Cachephp_Core
php{
php php php php php/php*php*
php php php php php php*php Thisphp frontendphp specificphp options
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php cachephp_byphp_defaultphp php:
php php php php php php*php php-php ifphp truephp,php functionphp callsphp willphp bephp cachedphp byphp default
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php cachedphp_functionsphp php:
php php php php php php*php php-php anphp arrayphp ofphp functionphp namesphp whichphp willphp bephp cachedphp php(evenphp ifphp cachephp_byphp_defaultphp php=php falsephp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php nonphp_cachedphp_functionsphp php:
php php php php php php*php php-php anphp arrayphp ofphp functionphp namesphp whichphp wonphp'tphp bephp cachedphp php(evenphp ifphp cachephp_byphp_defaultphp php=php truephp)
php php php php php php*
php php php php php php*php php@varphp arrayphp options
php php php php php php*php/
php php php php protectedphp php$php_specificOptionsphp php=php arrayphp(
php php php php php php php php php'cachephp_byphp_defaultphp'php php=php>php truephp,
php php php php php php php php php'cachedphp_functionsphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'nonphp_cachedphp_functionsphp'php php=php>php arrayphp(php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setOptionphp(php'automaticphp_serializationphp'php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mainphp methodphp php:php callphp thephp specifiedphp functionphp orphp getphp thephp resultphp fromphp cache
php php php php php php*
php php php php php php*php php@paramphp php callbackphp php$callbackphp php php php php php php php php Aphp validphp callback
php php php php php php*php php@paramphp php arrayphp php php php php$parametersphp php php php php php php Functionphp parameters
php php php php php php*php php@paramphp php arrayphp php php php php$tagsphp php php php php php php php php php php php php Cachephp tags
php php php php php php*php php@paramphp php intphp php php php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@paramphp php intphp php php php php php php$priorityphp php php php php php php php php integerphp betweenphp php0php php(veryphp lowphp priorityphp)php andphp php1php0php php(maximumphp priorityphp)php usedphp byphp somephp particularphp backends
php php php php php php*php php@returnphp mixedphp Result
php php php php php php*php/
php php php php publicphp functionphp callphp(php$callbackphp,php arrayphp php$parametersphp php=php arrayphp(php)php,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp,php php$priorityphp php=php php8php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp,php truephp,php php$namephp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp callbackphp'php)php;
php php php php php php php php php}

php php php php php php php php php$cacheBoolphp1php php=php php$thisphp-php>php_specificOptionsphp[php'cachephp_byphp_defaultphp'php]php;
php php php php php php php php php$cacheBoolphp2php php=php inphp_arrayphp(php$namephp,php php$thisphp-php>php_specificOptionsphp[php'cachedphp_functionsphp'php]php)php;
php php php php php php php php php$cacheBoolphp3php php=php inphp_arrayphp(php$namephp,php php$thisphp-php>php_specificOptionsphp[php'nonphp_cachedphp_functionsphp'php]php)php;
php php php php php php php php php$cachephp php=php php(php(php$cacheBoolphp1php php|php|php php$cacheBoolphp2php)php php&php&php php(php!php$cacheBoolphp3php)php)php;
php php php php php php php php ifphp php(php!php$cachephp)php php{
php php php php php php php php php php php php php/php/php Cachingphp ofphp thisphp callbackphp isphp disabled
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$parametersphp)php;
php php php php php php php php php}

php php php php php php php php php$idphp php=php php$thisphp-php>php_makeIdphp(php$callbackphp,php php$parametersphp)php;
php php php php php php php php ifphp php(php php(php$rsphp php=php php$thisphp-php>loadphp(php$idphp)php)php php&php&php issetphp(php$rsphp[php0php]php,php php$rsphp[php1php]php)php)php php{
php php php php php php php php php php php php php/php/php Aphp cachephp isphp available
php php php php php php php php php php php php php$outputphp php=php php$rsphp[php0php]php;
php php php php php php php php php php php php php$returnphp php=php php$rsphp[php1php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Aphp cachephp isphp notphp availablephp php(orphp notphp validphp forphp thisphp frontendphp)
php php php php php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php php php php obphp_implicitphp_flushphp(falsephp)php;
php php php php php php php php php php php php php$returnphp php=php callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$parametersphp)php;
php php php php php php php php php php php php php$outputphp php=php obphp_getphp_contentsphp(php)php;
php php php php php php php php php php php php obphp_endphp_cleanphp(php)php;
php php php php php php php php php php php php php$dataphp php=php arrayphp(php$outputphp,php php$returnphp)php;
php php php php php php php php php php php php php$thisphp-php>savephp(php$dataphp,php php$idphp,php php$tagsphp,php php$specificLifetimephp,php php$priorityphp)php;
php php php php php php php php php}

php php php php php php php php echophp php$outputphp;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ZFphp-php9php9php7php0
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php/
php php php php privatephp functionphp php_makeIdphp(php$callbackphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>makeIdphp(php$callbackphp,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp cachephp idphp fromphp thephp functionphp namephp andphp parameters
php php php php php php*
php php php php php php*php php@paramphp php callbackphp php$callbackphp Aphp validphp callback
php php php php php php*php php@paramphp php arrayphp php php php php$argsphp php php php php Functionphp parameters
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp stringphp Cachephp id
php php php php php php*php/
php php php php publicphp functionphp makeIdphp(php$callbackphp,php arrayphp php$argsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp,php truephp,php php$namephp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp callbackphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php functionsphp,php methodsphp andphp classnamesphp arephp casephp-insensitive
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;

php php php php php php php php php/php/php generatephp aphp uniquephp idphp forphp objectphp callbacks
php php php php php php php php ifphp php(isphp_objectphp(php$callbackphp)php)php php{php php/php/php Closuresphp php&php php_php_invoke
php php php php php php php php php php php php php$objectphp php=php php$callbackphp;
php php php php php php php php php}php elseifphp php(issetphp(php$callbackphp[php0php]php)php)php php{php php/php/php arrayphp(php$objectphp,php php'methodphp'php)
php php php php php php php php php php php php php$objectphp php=php php$callbackphp[php0php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$objectphp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$tmpphp php=php php@serializephp(php$callbackphp)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php$ephp-php>getMessagephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$tmpphp)php php{
php php php php php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Canphp'tphp serializephp callbackphp objectphp tophp generatephp idphp:php php{php$lastErrphp[php'messagephp'php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$namephp.php=php php'php_php_php'php php.php php$tmpphp;
php php php php php php php php php}

php php php php php php php php php/php/php generatephp aphp uniquephp idphp forphp arguments
php php php php php php php php php$argsStrphp php=php php'php'php;
php php php php php php php php ifphp php(php$argsphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$argsStrphp php=php php@serializephp(arrayphp_valuesphp(php$argsphp)php)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php$ephp-php>getMessagephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$argsStrphp)php php{
php php php php php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php php php php php throwphp Zendphp_Cachephp:php:throwExceptionphp(php"Canphp'tphp serializephp argumentsphp tophp generatephp idphp:php php{php$lastErrphp[php'messagephp'php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp mdphp5php(php$namephp php.php php$argsStrphp)php;
php php php php php}

php}
