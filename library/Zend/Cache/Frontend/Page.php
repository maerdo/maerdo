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
php php*php php@versionphp php php php php$Idphp:php Pagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Cachephp_Frontendphp_Pagephp extendsphp Zendphp_Cachephp_Core
php{
php php php php php/php*php*
php php php php php php*php Thisphp frontendphp specificphp options
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php httpphp_conditionalphp php:
php php php php php php*php php-php ifphp truephp,php httpphp conditionalphp modephp isphp on
php php php php php php*php WARNINGphp php:php httpphp_conditionalphp OPTIONphp ISphp NOTphp IMPLEMENTEDphp FORphp THEphp MOMENTphp php(TODOphp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php debugphp_headerphp php:
php php php php php php*php php-php ifphp truephp,php aphp debugphp textphp isphp addedphp beforephp eachphp cachedphp pages
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php contentphp_typephp_memorizationphp php:
php php php php php php*php php-php deprecatedphp php=php>php usephp memorizephp_headersphp instead
php php php php php php*php php-php ifphp thephp Contentphp-Typephp headerphp isphp sentphp afterphp thephp cachephp wasphp startedphp,php the
php php php php php php*php php php correspondingphp valuephp canphp bephp memorizedphp andphp replayedphp whenphp thephp cachephp isphp hit
php php php php php php*php php php php(ifphp falsephp php(defaultphp)php,php thephp frontendphp doesnphp'tphp takephp carephp ofphp Contentphp-Typephp headerphp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php memorizephp_headersphp php:
php php php php php php*php php-php anphp arrayphp ofphp stringsphp correspondingphp tophp somephp HTTPphp headersphp namephp.php Listedphp headers
php php php php php php*php php php willphp bephp storedphp withphp cachephp datasphp andphp php"replayedphp"php whenphp thephp cachephp isphp hit
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php defaultphp_optionsphp php:
php php php php php php*php php-php anphp associativephp arrayphp ofphp defaultphp optionsphp php:
php php php php php php*php php php php php php-php php(booleanphp)php cachephp php:php cachephp isphp onphp byphp defaultphp ifphp true
php php php php php php*php php php php php php-php php(booleanphp)php cacheWithXXXVariablesphp php php(XXXXphp php=php php'Getphp'php,php php'Postphp'php,php php'Sessionphp'php,php php'Filesphp'php orphp php'Cookiephp'php)php php:
php php php php php php*php php php php php php php ifphp truephp,php php cachephp isphp stillphp onphp evenphp ifphp therephp arephp somephp variablesphp inphp thisphp superglobalphp array
php php php php php php*php php php php php php php ifphp falsephp,php cachephp isphp offphp ifphp therephp arephp somephp variablesphp inphp thisphp superglobalphp array
php php php php php php*php php php php php php-php php(booleanphp)php makeIdWithXXXVariablesphp php(XXXXphp php=php php'Getphp'php,php php'Postphp'php,php php'Sessionphp'php,php php'Filesphp'php orphp php'Cookiephp'php)php php:
php php php php php php*php php php php php php php ifphp truephp,php wephp havephp tophp usephp thephp contentphp ofphp thisphp superglobalphp arrayphp tophp makephp aphp cachephp id
php php php php php php*php php php php php php php ifphp falsephp,php thephp cachephp idphp wonphp'tphp bephp dependentphp ofphp thephp contentphp ofphp thisphp superglobalphp array
php php php php php php*php php php php php php-php php(intphp)php specificphp_lifetimephp php:php cachephp specificphp lifetime
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(falsephp php=php>php globalphp lifetimephp isphp usedphp,php nullphp php=php>php infinitephp lifetimephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php integerphp php=php>php thisphp lifetimephp isphp usedphp)php,php thisphp php"lifetimephp"php isphp probablyphp only
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php usefullphp whenphp usedphp withphp php"regexpsphp"php array
php php php php php php*php php php php php php-php php(arrayphp)php tagsphp php:php arrayphp ofphp tagsphp php(stringsphp)
php php php php php php*php php php php php php-php php(intphp)php priorityphp php:php integerphp betweenphp php0php php(veryphp lowphp priorityphp)php andphp php1php0php php(maximumphp priorityphp)php usedphp by
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php somephp particularphp backends
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php regexpsphp php:
php php php php php php*php php-php anphp associativephp arrayphp tophp setphp optionsphp onlyphp forphp somephp REQUESTphp_URI
php php php php php php*php php-php keysphp arephp php(pcrephp)php regexps
php php php php php php*php php-php valuesphp arephp associativephp arrayphp withphp specificphp optionsphp tophp setphp ifphp thephp regexpphp matchsphp onphp php$php_SERVERphp[php'REQUESTphp_URIphp'php]
php php php php php php*php php php php(seephp defaultphp_optionsphp forphp thephp listphp ofphp availablephp optionsphp)
php php php php php php*php php-php ifphp severalphp regexpsphp matchphp thephp php$php_SERVERphp[php'REQUESTphp_URIphp'php]php,php onlyphp thephp lastphp onephp willphp bephp used
php php php php php php*
php php php php php php*php php@varphp arrayphp options
php php php php php php*php/
php php php php protectedphp php$php_specificOptionsphp php=php arrayphp(
php php php php php php php php php'httpphp_conditionalphp'php php=php>php falsephp,
php php php php php php php php php'debugphp_headerphp'php php=php>php falsephp,
php php php php php php php php php'contentphp_typephp_memorizationphp'php php=php>php falsephp,
php php php php php php php php php'memorizephp_headersphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'defaultphp_optionsphp'php php=php>php arrayphp(
php php php php php php php php php php php php php'cachephp_withphp_getphp_variablesphp'php php=php>php falsephp,
php php php php php php php php php php php php php'cachephp_withphp_postphp_variablesphp'php php=php>php falsephp,
php php php php php php php php php php php php php'cachephp_withphp_sessionphp_variablesphp'php php=php>php falsephp,
php php php php php php php php php php php php php'cachephp_withphp_filesphp_variablesphp'php php=php>php falsephp,
php php php php php php php php php php php php php'cachephp_withphp_cookiephp_variablesphp'php php=php>php falsephp,
php php php php php php php php php php php php php'makephp_idphp_withphp_getphp_variablesphp'php php=php>php truephp,
php php php php php php php php php php php php php'makephp_idphp_withphp_postphp_variablesphp'php php=php>php truephp,
php php php php php php php php php php php php php'makephp_idphp_withphp_sessionphp_variablesphp'php php=php>php truephp,
php php php php php php php php php php php php php'makephp_idphp_withphp_filesphp_variablesphp'php php=php>php truephp,
php php php php php php php php php php php php php'makephp_idphp_withphp_cookiephp_variablesphp'php php=php>php truephp,
php php php php php php php php php php php php php'cachephp'php php=php>php truephp,
php php php php php php php php php php php php php'specificphp_lifetimephp'php php=php>php falsephp,
php php php php php php php php php php php php php'tagsphp'php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'priorityphp'php php=php>php null
php php php php php php php php php)php,
php php php php php php php php php'regexpsphp'php php=php>php arrayphp(php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp arrayphp tophp storephp somephp options
php php php php php php*
php php php php php php*php php@varphp arrayphp associativephp arrayphp ofphp options
php php php php php php*php/
php php php php protectedphp php$php_activeOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Ifphp truephp,php thephp pagephp wonphp'tphp bephp cached
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_cancelphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$optionsphp php php php php php php php php php php php php php php php Associativephp arrayphp ofphp options
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php switchphp php(php$namephp)php php{
php php php php php php php php php php php php php php php php casephp php'regexpsphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setRegexpsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'defaultphp_optionsphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setDefaultOptionsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'contentphp_typephp_memorizationphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setContentTypeMemorizationphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_specificOptionsphp[php'httpphp_conditionalphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_specificOptionsphp[php'httpphp_conditionalphp'php]php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'httpphp_conditionalphp isphp notphp implementedphp forphp thephp momentphp php!php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setOptionphp(php'automaticphp_serializationphp'php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Specificphp setterphp forphp thephp php'defaultphp_optionsphp'php optionphp php(withphp somephp additionalphp testsphp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp array
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDefaultOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'defaultphp_optionsphp mustphp bephp anphp arrayphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"invalidphp optionphp php[php$keyphp]php php!php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_specificOptionsphp[php'defaultphp_optionsphp'php]php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'defaultphp_optionsphp'php]php[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp deprecatedphp contentTypeMemorizationphp option
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$valuephp value
php php php php php php*php php@returnphp void
php php php php php php*php php@deprecated
php php php php php php*php/
php php php php protectedphp functionphp php_setContentTypeMemorizationphp(php$valuephp)
php php php php php{
php php php php php php php php php$foundphp php=php nullphp;
php php php php php php php php foreachphp php(php$thisphp-php>php_specificOptionsphp[php'memorizephp_headersphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(strtolowerphp(php$valuephp)php php=php=php php'contentphp-typephp'php)php php{
php php php php php php php php php php php php php php php php php$foundphp php=php php$keyphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!php$foundphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'memorizephp_headersphp'php]php[php]php php=php php'Contentphp-Typephp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$foundphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_specificOptionsphp[php'memorizephp_headersphp'php]php[php$foundphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Specificphp setterphp forphp thephp php'regexpsphp'php optionphp php(withphp somephp additionalphp testsphp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp array
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setRegexpsphp(php$regexpsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$regexpsphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'regexpsphp optionphp mustphp bephp anphp arrayphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$regexpsphp asphp php$regexpphp=php>php$confphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$confphp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'regexpsphp optionphp mustphp bephp anphp arrayphp ofphp arraysphp php!php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$validKeysphp php=php arrayphp_keysphp(php$thisphp-php>php_specificOptionsphp[php'defaultphp_optionsphp'php]php)php;
php php php php php php php php php php php php foreachphp php(php$confphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"unknownphp optionphp php[php$keyphp]php php!php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$keyphp,php php$validKeysphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$regexpsphp[php$regexpphp]php[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setOptionphp(php'regexpsphp'php,php php$regexpsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp thephp cache
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php(optionalphp)php Aphp cachephp idphp php(ifphp youphp setphp aphp valuephp herephp,php maybephp youphp havephp tophp usephp Outputphp frontendphp insteadphp)
php php php php php php*php php@paramphp php booleanphp php$doNotDiephp Forphp unitphp testingphp onlyphp php!
php php php php php php*php php@returnphp booleanphp Truephp ifphp thephp cachephp isphp hitphp php(falsephp elsephp)
php php php php php php*php/
php php php php publicphp functionphp startphp(php$idphp php=php falsephp,php php$doNotDiephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_cancelphp php=php falsephp;
php php php php php php php php php$lastMatchingRegexpphp php=php nullphp;
php php php php php php php php foreachphp php(php$thisphp-php>php_specificOptionsphp[php'regexpsphp'php]php asphp php$regexpphp php=php>php php$confphp)php php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php`php$regexpphp`php"php,php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$lastMatchingRegexpphp php=php php$regexpphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_activeOptionsphp php=php php$thisphp-php>php_specificOptionsphp[php'defaultphp_optionsphp'php]php;
php php php php php php php php ifphp php(php$lastMatchingRegexpphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$confphp php=php php$thisphp-php>php_specificOptionsphp[php'regexpsphp'php]php[php$lastMatchingRegexpphp]php;
php php php php php php php php php php php php foreachphp php(php$confphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_activeOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_activeOptionsphp[php'cachephp'php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_makeIdphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$arrayphp php=php php$thisphp-php>loadphp(php$idphp)php;
php php php php php php php php ifphp php(php$arrayphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$dataphp php=php php$arrayphp[php'dataphp'php]php;
php php php php php php php php php php php php php$headersphp php=php php$arrayphp[php'headersphp'php]php;
php php php php php php php php php php php php ifphp php(php!headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp=php>php$headerCouplephp)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php php$headerCouplephp[php0php]php;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$headerCouplephp[php1php]php;
php php php php php php php php php php php php php php php php php php php php headerphp(php"php$namephp:php php$valuephp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_specificOptionsphp[php'debugphp_headerphp'php]php)php php{
php php php php php php php php php php php php php php php php echophp php'DEBUGphp HEADERphp php:php Thisphp isphp aphp cachedphp pagephp php!php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php echophp php$dataphp;
php php php php php php php php php php php php ifphp php(php$doNotDiephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php diephp(php)php;
php php php php php php php php php}
php php php php php php php php obphp_startphp(arrayphp(php$thisphp,php php'php_flushphp'php)php)php;
php php php php php php php php obphp_implicitphp_flushphp(falsephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cancelphp thephp currentphp cachingphp process
php php php php php php*php/
php php php php publicphp functionphp cancelphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_cancelphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php callbackphp forphp outputphp buffering
php php php php php php*php php(shouldnphp'tphp reallyphp bephp calledphp manuallyphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp Bufferedphp output
php php php php php php*php php@returnphp stringphp Dataphp tophp sendphp tophp browser
php php php php php php*php/
php php php php publicphp functionphp php_flushphp(php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_cancelphp)php php{
php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php}
php php php php php php php php php$contentTypephp php=php nullphp;
php php php php php php php php php$storedHeadersphp php=php arrayphp(php)php;
php php php php php php php php php$headersListphp php=php headersphp_listphp(php)php;
php php php php php php php php foreachphp(php$thisphp-php>php_specificOptionsphp[php'memorizephp_headersphp'php]php asphp php$keyphp=php>php$headerNamephp)php php{
php php php php php php php php php php php php foreachphp php(php$headersListphp asphp php$headerSentphp)php php{
php php php php php php php php php php php php php php php php php$tmpphp php=php explodephp(php'php:php'php,php php$headerSentphp)php;
php php php php php php php php php php php php php php php php php$headerSentNamephp php=php trimphp(arrayphp_shiftphp(php$tmpphp)php)php;
php php php php php php php php php php php php php php php php ifphp php(strtolowerphp(php$headerNamephp)php php=php=php strtolowerphp(php$headerSentNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$headerSentValuephp php=php trimphp(implodephp(php'php:php'php,php php$tmpphp)php)php;
php php php php php php php php php php php php php php php php php php php php php$storedHeadersphp[php]php php=php arrayphp(php$headerSentNamephp,php php$headerSentValuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$arrayphp php=php arrayphp(
php php php php php php php php php php php php php'dataphp'php php=php>php php$dataphp,
php php php php php php php php php php php php php'headersphp'php php=php>php php$storedHeaders
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>savephp(php$arrayphp,php nullphp,php php$thisphp-php>php_activeOptionsphp[php'tagsphp'php]php,php php$thisphp-php>php_activeOptionsphp[php'specificphp_lifetimephp'php]php,php php$thisphp-php>php_activeOptionsphp[php'priorityphp'php]php)php;
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp anphp idphp dependingphp onphp REQUESTphp_URIphp andphp superglobalphp arraysphp php(dependingphp onphp optionsphp)
php php php php php php*
php php php php php php*php php@returnphp mixedphp|falsephp aphp cachephp idphp php(stringphp)php,php falsephp ifphp thephp cachephp shouldphp havephp notphp tophp bephp used
php php php php php php*php/
php php php php protectedphp functionphp php_makeIdphp(php)
php php php php php{
php php php php php php php php php$tmpphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php$arrayphp php=php explodephp(php'php?php'php,php php$tmpphp,php php2php)php;
php php php php php php php php php php php$tmpphp php=php php$arrayphp[php0php]php;
php php php php php php php php foreachphp php(arrayphp(php'Getphp'php,php php'Postphp'php,php php'Sessionphp'php,php php'Filesphp'php,php php'Cookiephp'php)php asphp php$arrayNamephp)php php{
php php php php php php php php php php php php php$tmpphp2php php=php php$thisphp-php>php_makePartialIdphp(php$arrayNamephp,php php$thisphp-php>php_activeOptionsphp[php'cachephp_withphp_php'php php.php strtolowerphp(php$arrayNamephp)php php.php php'php_variablesphp'php]php,php php$thisphp-php>php_activeOptionsphp[php'makephp_idphp_withphp_php'php php.php strtolowerphp(php$arrayNamephp)php php.php php'php_variablesphp'php]php)php;
php php php php php php php php php php php php ifphp php(php$tmpphp2php=php=php=falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$tmpphp php=php php$tmpphp php.php php$tmpphp2php;
php php php php php php php php php}
php php php php php php php php returnphp mdphp5php(php$tmpphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp partialphp idphp dependingphp onphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$arrayNamephp Superglobalphp arrayphp name
php php php php php php*php php@paramphp php boolphp php php php$boolphp1php php php php php Ifphp truephp,php cachephp isphp stillphp onphp evenphp ifphp therephp arephp somephp variablesphp inphp thephp superglobalphp array
php php php php php php*php php@paramphp php boolphp php php php$boolphp2php php php php php Ifphp truephp,php wephp havephp tophp usephp thephp contentphp ofphp thephp superglobalphp arrayphp tophp makephp aphp partialphp id
php php php php php php*php php@returnphp mixedphp|falsephp Partialphp idphp php(stringphp)php orphp falsephp ifphp thephp cachephp shouldphp havephp notphp tophp bephp used
php php php php php php*php/
php php php php protectedphp functionphp php_makePartialIdphp(php$arrayNamephp,php php$boolphp1php,php php$boolphp2php)
php php php php php{
php php php php php php php php switchphp php(php$arrayNamephp)php php{
php php php php php php php php casephp php'Getphp'php:
php php php php php php php php php php php php php$varphp php=php php$php_GETphp;
php php php php php php php php php php php php breakphp;
php php php php php php php php casephp php'Postphp'php:
php php php php php php php php php php php php php$varphp php=php php$php_POSTphp;
php php php php php php php php php php php php breakphp;
php php php php php php php php casephp php'Sessionphp'php:
php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp)php)php php{
php php php php php php php php php php php php php php php php php$varphp php=php php$php_SESSIONphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$varphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php breakphp;
php php php php php php php php casephp php'Cookiephp'php:
php php php php php php php php php php php php ifphp php(issetphp(php$php_COOKIEphp)php)php php{
php php php php php php php php php php php php php php php php php$varphp php=php php$php_COOKIEphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$varphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php breakphp;
php php php php php php php php casephp php'Filesphp'php:
php php php php php php php php php php php php php$varphp php=php php$php_FILESphp;
php php php php php php php php php php php php breakphp;
php php php php php php php php defaultphp:
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$boolphp1php)php php{
php php php php php php php php php php php php ifphp php(php$boolphp2php)php php{
php php php php php php php php php php php php php php php php returnphp serializephp(php$varphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$varphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php'php'php;
php php php php php}

php}
