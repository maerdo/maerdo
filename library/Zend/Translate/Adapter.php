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
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@subpackagephp Zendphp_Translatephp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Adapterphp.phpphp php2php3php5php1php8php php2php0php1php0php-php1php2php-php1php6php php1php3php:php3php1php:php2php5Zphp bittarmanphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Locale
php php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Translatephp_Plural
php php*php/
requirephp_oncephp php'Zendphp/Translatephp/Pluralphp.phpphp'php;

php/php*php*
php php*php Basicphp adapterphp classphp forphp eachphp translationphp sourcephp adapter
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@subpackagephp Zendphp_Translatephp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Translatephp_Adapterphp php{
php php php php php/php*php*
php php php php php php*php Showsphp ifphp localephp detectionphp isphp inphp automaticphp level
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_automaticphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Internalphp valuephp tophp seephp alreadyphp routedphp languages
php php php php php php*php php@varphp arrayphp(php)
php php php php php php*php/
php php php php privatephp php$php_routedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Internalphp cachephp forphp allphp adapters
php php php php php php*php php@varphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php protectedphp staticphp php$php_cachephp php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Internalphp valuephp tophp rememberphp ifphp cachephp supportsphp tags
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp staticphp php$php_cacheTagsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Scansphp forphp thephp localephp withinphp thephp namephp ofphp thephp directory
php php php php php php*php php@constantphp integer
php php php php php php*php/
php php php php constphp LOCALEphp_DIRECTORYphp php=php php'directoryphp'php;

php php php php php/php*php*
php php php php php php*php Scansphp forphp thephp localephp withinphp thephp namephp ofphp thephp file
php php php php php php*php php@constantphp integer
php php php php php php*php/
php php php php constphp LOCALEphp_FILENAMEphp php php=php php'filenamephp'php;

php php php php php/php*php*
php php php php php php*php Arrayphp withphp allphp optionsphp,php eachphp adapterphp canphp havephp ownphp additionalphp options
php php php php php php*php php php php'clearphp'php php php php php php php php php php php php=php>php whenphp truephp,php clearsphp alreadyphp loadedphp translationsphp whenphp addingphp newphp files
php php php php php php*php php php php'contentphp'php php php php php php php php php php=php>php contentphp tophp translatephp orphp filephp orphp directoryphp withphp content
php php php php php php*php php php php'disableNoticesphp'php php php=php>php whenphp truephp,php omitsphp noticesphp fromphp beingphp displayed
php php php php php php*php php php php'ignorephp'php php php php php php php php php php php=php>php aphp prefixphp forphp filesphp andphp directoriesphp whichphp arephp notphp beingphp added
php php php php php php*php php php php'localephp'php php php php php php php php php php php=php>php thephp actualphp setphp localephp tophp use
php php php php php php*php php php php'logphp'php php php php php php php php php php php php php php=php>php aphp instancephp ofphp Zendphp_Logphp wherephp logsphp arephp writtenphp to
php php php php php php*php php php php'logMessagephp'php php php php php php php=php>php messagephp tophp bephp logged
php php php php php php*php php php php'logPriorityphp'php php php php php php=php>php priorityphp whichphp isphp usedphp tophp writephp thephp logphp message
php php php php php php*php php php php'logUntranslatedphp'php php=php>php whenphp truephp,php untranslatedphp messagesphp arephp notphp logged
php php php php php php*php php php php'reloadphp'php php php php php php php php php php php=php>php reloadsphp thephp cachephp byphp readingphp thephp contentphp again
php php php php php php*php php php php'scanphp'php php php php php php php php php php php php php=php>php searchesphp forphp translationphp filesphp usingphp thephp LOCALEphp constants
php php php php php php*php php php php'tagphp'php php php php php php php php php php php php php php=php>php tagphp tophp usephp forphp thephp cache
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'clearphp'php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php'contentphp'php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'disableNoticesphp'php php php=php>php falsephp,
php php php php php php php php php'ignorephp'php php php php php php php php php php php=php>php php'php.php'php,
php php php php php php php php php'localephp'php php php php php php php php php php php=php>php php'autophp'php,
php php php php php php php php php'logphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'logMessagephp'php php php php php php php=php>php php"Untranslatedphp messagephp withinphp php'php%localephp%php'php:php php%messagephp%php"php,
php php php php php php php php php'logPriorityphp'php php php php php php=php>php php5php,
php php php php php php php php php'logUntranslatedphp'php php=php>php falsephp,
php php php php php php php php php'reloadphp'php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php'routephp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'scanphp'php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'tagphp'php php php php php php php php php php php php php php=php>php php'Zendphp_Translatephp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Translationphp table
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_translatephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Generatesphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Translationphp optionsphp forphp thisphp adapter
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php php php php php php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp php php php php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'contentphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'cachephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php selfphp:php:setCachephp(php$optionsphp[php'cachephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'cachephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php)php php{
php php php php php php php php php php php php php$idphp php=php php'Zendphp_Translatephp_php'php php.php php$thisphp-php>toStringphp(php)php php.php php'php_Optionsphp'php;
php php php php php php php php php php php php php$resultphp php=php selfphp:php:php$php_cachephp-php>loadphp(php$idphp)php;
php php php php php php php php php php php php ifphp php(php$resultphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp php=php php$resultphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'localephp'php]php)php php|php|php php(php$optionsphp[php'localephp'php]php php=php=php=php php"autophp"php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_automaticphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_automaticphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php php$localephp php=php nullphp;
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'localephp'php]php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$optionsphp[php'localephp'php]php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'localephp'php]php php=php php$localephp;

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>addTranslationphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getLocalephp(php)php php!php=php=php php(stringphp)php php$optionsphp[php'localephp'php]php)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp translations
php php php php php php*
php php php php php php*php Thisphp mayphp bephp aphp newphp languagephp orphp additionalphp contentphp forphp anphp existingphp language
php php php php php php*php Ifphp thephp keyphp php'clearphp'php isphp truephp,php thenphp translationsphp forphp thephp specified
php php php php php php*php languagephp willphp bephp replacedphp andphp addedphp otherwise
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Optionsphp andphp translationsphp tophp bephp added
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addTranslationphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp php php php php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'contentphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php$originatephp php=php nullphp;
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'localephp'php]php)php)php php{
php php php php php php php php php php php php php$originatephp php=php php(stringphp)php php$optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(arrayphp_keyphp_existsphp(php'logphp'php,php php$optionsphp)php)php php&php&php php!php(php$optionsphp[php'logphp'php]php instanceofphp Zendphp_Logphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'Instancephp ofphp Zendphp_Logphp expectedphp forphp optionphp logphp'php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!php(php$optionsphp[php'contentphp'php]php instanceofphp Zendphp_Translatephp)php php&php&php php!php(php$optionsphp[php'contentphp'php]php instanceofphp Zendphp_Translatephp_Adapterphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'localephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php nullphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php Zendphp_Localephp:php:findLocalephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php"Thephp givenphp Languagephp php'php{php$optionsphp[php'localephp'php]php}php'php doesphp notphp existphp"php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php php=php php$optionsphp php+php php$thisphp-php>php_optionsphp;
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp[php'contentphp'php]php)php andphp isphp_dirphp(php$optionsphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php realpathphp(php$optionsphp[php'contentphp'php]php)php;
php php php php php php php php php php php php php$prevphp php=php php'php'php;
php php php php php php php php php php php php foreachphp php(newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php php php php php php php php php php newphp RecursiveDirectoryIteratorphp(php$optionsphp[php'contentphp'php]php,php RecursiveDirectoryIteratorphp:php:KEYphp_ASphp_PATHNAMEphp)php,
php php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php asphp php$directoryphp php=php>php php$infophp)php php{
php php php php php php php php php php php php php php php php php$filephp php=php php$infophp-php>getFilenamephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp[php'ignorephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$optionsphp[php'ignorephp'php]php asphp php$keyphp php=php>php php$ignorephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php'regexphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php$ignorephp,php php$directoryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ignorephp filesphp matchingphp thephp givenphp regexphp fromphp optionphp php'ignorephp'php andphp allphp filesphp below
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$directoryphp,php DIRECTORYphp_SEPARATORphp php.php php$ignorephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ignorephp filesphp matchingphp firstphp charactersphp fromphp optionphp php'ignorephp'php andphp allphp filesphp below
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$directoryphp,php DIRECTORYphp_SEPARATORphp php.php php$optionsphp[php'ignorephp'php]php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ignorephp filesphp matchingphp firstphp charactersphp fromphp optionphp php'ignorephp'php andphp allphp filesphp below
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$infophp-php>isDirphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php pathnamephp asphp locale
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$optionsphp[php'scanphp'php]php php=php=php=php selfphp:php:LOCALEphp_DIRECTORYphp)php andphp php(Zendphp_Localephp:php:isLocalephp(php$filephp,php truephp,php falsephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$prevphp php php php php php php php php php php php php php php=php php(stringphp)php php$optionsphp[php'localephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$infophp-php>isFilephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php filenamephp asphp locale
php php php php php php php php php php php php php php php php php php php php ifphp php(php$optionsphp[php'scanphp'php]php php=php=php=php selfphp:php:LOCALEphp_FILENAMEphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filenamephp php=php explodephp(php'php.php'php,php php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp_popphp(php$filenamephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$filenamephp php=php implodephp(php'php.php'php,php php$filenamephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(Zendphp_Localephp:php:isLocalephp(php(stringphp)php php$filenamephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php php(stringphp)php php$filenamephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php php=php explodephp(php'php.php'php,php php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$partsphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp2php php+php=php explodephp(php'php_php'php,php php$tokenphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php php=php arrayphp_mergephp(php$partsphp,php php$partsphp2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$partsphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp2php php+php=php explodephp(php'php-php'php,php php$tokenphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php arrayphp_mergephp(php$partsphp,php php$partsphp2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php arrayphp_uniquephp(php$partsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prevphp php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$partsphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(Zendphp_Localephp:php:isLocalephp(php$tokenphp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strlenphp(php$prevphp)php <php=php strlenphp(php$tokenphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php php$tokenphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prevphp php php php php php php php php php php php php php php=php php$tokenphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php php$infophp-php>getPathnamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addTranslationDataphp(php$optionsphp)php;
php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Translatephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ignorephp failedphp sourcesphp whilephp scanning
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_addTranslationDataphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(issetphp(php$thisphp-php>php_translatephp[php$originatephp]php)php php=php=php=php truephp)php andphp php(countphp(php$thisphp-php>php_translatephp[php$originatephp]php)php php>php php0php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$originatephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp newphp adapterphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Adapterphp options
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$changephp php=php falsephp;
php php php php php php php php php$localephp php=php nullphp;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$optionphp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'localephp'php)php php{
php php php php php php php php php php php php php php php php php$localephp php=php php$optionphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php(issetphp(php$thisphp-php>php_optionsphp[php$keyphp]php)php andphp php(php$thisphp-php>php_optionsphp[php$keyphp]php php!php=php php$optionphp)php)php or
php php php php php php php php php php php php php php php php php php php php php!issetphp(php$thisphp-php>php_optionsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php(php$keyphp php=php=php php'logphp'php)php php&php&php php!php(php$optionphp instanceofphp Zendphp_Logphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'Instancephp ofphp Zendphp_Logphp expectedphp forphp optionphp logphp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'cachephp'php)php php{
php php php php php php php php php php php php php php php php php php php php selfphp:php:setCachephp(php$optionphp)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$keyphp]php php=php php$optionphp;
php php php php php php php php php php php php php php php php php$changephp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php andphp php(php$changephp php=php=php truephp)php)php php{
php php php php php php php php php php php php php$idphp php=php php'Zendphp_Translatephp_php'php php.php php$thisphp-php>toStringphp(php)php php.php php'php_Optionsphp'php;
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$thisphp-php>php_optionsphp,php php$idphp,php arrayphp(php$thisphp-php>php_optionsphp[php'tagphp'php]php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$thisphp-php>php_optionsphp,php php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adaptersphp namephp andphp itphp'sphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$optionKeyphp Stringphp returnsphp thisphp option
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp returnsphp allphp options
php php php php php php*php php@returnphp integerphp|stringphp|arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php$optionKeyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php$optionKeyphp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$optionKeyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp locale
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Localephp|stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp locale
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp Localephp tophp set
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp)
php php php php php{
php php php php php php php php ifphp php(php(php$localephp php=php=php=php php"autophp"php)php orphp php(php$localephp php=php=php=php nullphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_automaticphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_automaticphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php"Thephp givenphp Languagephp php(php{php$localephp}php)php doesphp notphp existphp"php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_translatephp[php$localephp]php)php)php php{
php php php php php php php php php php php php php$tempphp php=php explodephp(php'php_php'php,php php$localephp)php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_translatephp[php$tempphp[php0php]php]php)php andphp php!issetphp(php$thisphp-php>php_translatephp[php$localephp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'disableNoticesphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'logphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'logphp'php]php-php>logphp(php"Thephp languagephp php'php{php$localephp}php'php hasphp tophp bephp addedphp beforephp itphp canphp bephp usedphp.php"php,php php$thisphp-php>php_optionsphp[php'logPriorityphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php triggerphp_errorphp(php"Thephp languagephp php'php{php$localephp}php'php hasphp tophp bephp addedphp beforephp itphp canphp bephp usedphp.php"php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$localephp php=php php$tempphp[php0php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_translatephp[php$localephp]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'disableNoticesphp'php]php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'logphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'logphp'php]php-php>logphp(php"Nophp translationphp forphp thephp languagephp php'php{php$localephp}php'php availablephp.php"php,php php$thisphp-php>php_optionsphp[php'logPriorityphp'php]php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php triggerphp_errorphp(php"Nophp translationphp forphp thephp languagephp php'php{php$localephp}php'php availablephp.php"php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'localephp'php]php php!php=php php$localephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'localephp'php]php php=php php$localephp;

php php php php php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php'Zendphp_Translatephp_php'php php.php php$thisphp-php>toStringphp(php)php php.php php'php_Optionsphp'php;
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$thisphp-php>php_optionsphp,php php$idphp,php arrayphp(php$thisphp-php>php_optionsphp[php'tagphp'php]php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$thisphp-php>php_optionsphp,php php$idphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp availablephp languagesphp fromphp thisphp adapter
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getListphp(php)
php php php php php{
php php php php php php php php php$listphp php=php arrayphp_keysphp(php$thisphp-php>php_translatephp)php;
php php php php php php php php php$resultphp php=php nullphp;
php php php php php php php php foreachphp(php$listphp asphp php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_translatephp[php$valuephp]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php$valuephp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp messagephp idphp forphp aphp givenphp translation
php php php php php php*php Ifphp nophp localephp isphp givenphp,php thephp actualphp languagephp willphp bephp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$messagephp Messagephp tophp getphp thephp keyphp for
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(optionalphp)php Languagephp tophp returnphp thephp messagephp idsphp from
php php php php php php*php php@returnphp stringphp|arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getMessageIdphp(php$messagephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$localephp)php orphp php!php$thisphp-php>isAvailablephp(php$localephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp_searchphp(php$messagephp,php php$thisphp-php>php_translatephp[php(stringphp)php php$localephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp availablephp messagephp idsphp fromphp thisphp adapter
php php php php php php*php Ifphp nophp localephp isphp givenphp,php thephp actualphp languagephp willphp bephp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(optionalphp)php Languagephp tophp returnphp thephp messagephp idsphp from
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessageIdsphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$localephp)php orphp php!php$thisphp-php>isAvailablephp(php$localephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_translatephp[php(stringphp)php php$localephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp availablephp translationsphp fromphp thisphp adapter
php php php php php php*php Ifphp nophp localephp isphp givenphp,php thephp actualphp languagephp willphp bephp used
php php php php php php*php Ifphp php'allphp'php isphp givenphp thephp completephp translationphp dictionaryphp willphp bephp returned
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(optionalphp)php Languagephp tophp returnphp thephp messagesphp from
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp php=php=php=php php'allphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_translatephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(emptyphp(php$localephp)php php=php=php=php truephp)php orphp php(php$thisphp-php>isAvailablephp(php$localephp)php php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_translatephp[php(stringphp)php php$localephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp wishedphp languagephp availablephp php?
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Locale
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp Languagephp tophp searchphp forphp,php identicalphp withphp localephp identifierphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php@seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAvailablephp(php$localephp)
php php php php php{
php php php php php php php php php$returnphp php=php issetphp(php$thisphp-php>php_translatephp[php(stringphp)php php$localephp]php)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp translationphp data
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php php php php php php php$data
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$locale
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php$optionsphp php(optionalphp)
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_loadTranslationDataphp(php$dataphp,php php$localephp,php arrayphp php$optionsphp php=php arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Internalphp functionphp forphp addingphp translationphp data
php php php php php php*
php php php php php php*php Thisphp mayphp bephp aphp newphp languagephp orphp additionalphp dataphp forphp anphp existingphp language
php php php php php php*php Ifphp thephp optionsphp php'clearphp'php isphp truephp,php thenphp thephp translationphp dataphp forphp thephp specified
php php php php php php*php languagephp isphp replacedphp andphp addedphp otherwise
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Locale
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$contentphp Translationphp dataphp tophp add
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp Providesphp fluentphp interface
php php php php php php*php/
php php php php privatephp functionphp php_addTranslationDataphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php+php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$optionsphp[php'contentphp'php]php instanceofphp Zendphp_Translatephp)php php|php|php php(php$optionsphp[php'contentphp'php]php instanceofphp Zendphp_Translatephp_Adapterphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'usetranslateadapterphp'php]php php=php truephp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'localephp'php]php)php php&php&php php(php$optionsphp[php'localephp'php]php php!php=php=php php'autophp'php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php php$optionsphp[php'contentphp'php]php-php>getMessagesphp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$contentphp php=php php$optionsphp[php'contentphp'php]php;
php php php php php php php php php php php php php php php php php$localesphp php=php php$contentphp-php>getListphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$localesphp asphp php$localephp)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php php=php php$localephp;
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php php$contentphp-php>getMessagesphp(php$localephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addTranslationDataphp(php$optionsphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php Zendphp_Localephp:php:findLocalephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php"Thephp givenphp Languagephp php'php{php$optionsphp[php'localephp'php]php}php'php doesphp notphp existphp"php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp[php'clearphp'php]php php|php|php php!issetphp(php$thisphp-php>php_translatephp[php$optionsphp[php'localephp'php]php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatephp[php$optionsphp[php'localephp'php]php]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$readphp php=php truephp;
php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php)php php{
php php php php php php php php php php php php php$idphp php=php php'Zendphp_Translatephp_php'php php.php mdphp5php(serializephp(php$optionsphp[php'contentphp'php]php)php)php php.php php'php_php'php php.php php$thisphp-php>toStringphp(php)php;
php php php php php php php php php php php php php$tempphp php=php selfphp:php:php$php_cachephp-php>loadphp(php$idphp)php;
php php php php php php php php php php php php ifphp php(php$tempphp)php php{
php php php php php php php php php php php php php php php php php$readphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp[php'reloadphp'php]php)php php{
php php php php php php php php php php php php php$readphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$readphp)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'usetranslateadapterphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php$optionsphp[php'localephp'php]php php=php>php php$optionsphp[php'contentphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tempphp php=php php$thisphp-php>php_loadTranslationDataphp(php$optionsphp[php'contentphp'php]php,php php$optionsphp[php'localephp'php]php,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$tempphp)php)php php{
php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$tempphp)php;
php php php php php php php php foreachphp(php$keysphp asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_translatephp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_translatephp[php$keyphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$tempphp)php php&php&php isphp_arrayphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_translatephp[php$keyphp]php php=php php$tempphp[php$keyphp]php php+php php$thisphp-php>php_translatephp[php$keyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_automaticphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$findphp php=php newphp Zendphp_Localephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php php php php php$browserphp php=php php$findphp-php>getEnvironmentphp(php)php php+php php$findphp-php>getBrowserphp(php)php;
php php php php php php php php php php php php arsortphp(php$browserphp)php;
php php php php php php php php php php php php foreachphp(php$browserphp asphp php$languagephp php=php>php php$qualityphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_translatephp[php$languagephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'localephp'php]php php=php php$languagephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$readphp)php andphp php(issetphp(selfphp:php:php$php_cachephp)php)php)php php{
php php php php php php php php php php php php php$idphp php=php php'Zendphp_Translatephp_php'php php.php mdphp5php(serializephp(php$optionsphp[php'contentphp'php]php)php)php php.php php'php_php'php php.php php$thisphp-php>toStringphp(php)php;
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$tempphp,php php$idphp,php arrayphp(php$thisphp-php>php_optionsphp[php'tagphp'php]php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$tempphp,php php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatesphp thephp givenphp string
php php php php php php*php returnsphp thephp translation
php php php php php php*
php php php php php php*php php@seephp Zendphp_Locale
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php$messageIdphp Translationphp stringphp,php orphp Arrayphp forphp pluralphp translations
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php php php php(optionalphp)php Localephp/Languagephp tophp usephp,php identicalphp with
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php localephp identifierphp,php php@seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp translatephp(php$messageIdphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php php$pluralphp php=php nullphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$messageIdphp)php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$messageIdphp)php php>php php2php)php php{
php php php php php php php php php php php php php php php php php$numberphp php=php arrayphp_popphp(php$messageIdphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_numericphp(php$numberphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$plocalephp php=php php$numberphp;
php php php php php php php php php php php php php php php php php php php php php$numberphp php php=php arrayphp_popphp(php$messageIdphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$plocalephp php=php php'enphp'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$pluralphp php php php php=php php$messageIdphp;
php php php php php php php php php php php php php php php php php$messageIdphp php=php php$messageIdphp[php0php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messageIdphp php=php php$messageIdphp[php0php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php falsephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php languagephp doesphp notphp existphp,php returnphp originalphp string
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php$messageIdphp,php php$localephp)php;
php php php php php php php php php php php php php php php php php/php/php usephp reroutingphp whenphp enabled
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_optionsphp[php'routephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$localephp,php php$thisphp-php>php_optionsphp[php'routephp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php!arrayphp_keyphp_existsphp(php$localephp,php php$thisphp-php>php_routedphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp[php$localephp]php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>translatephp(php$messageIdphp,php php$thisphp-php>php_optionsphp[php'routephp'php]php[php$localephp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$pluralphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$messageIdphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$rulephp php=php Zendphp_Translatephp_Pluralphp:php:getPluralphp(php$numberphp,php php$plocalephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$pluralphp[php$rulephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$rulephp php=php php0php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$pluralphp[php$rulephp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php$localephp)php;
php php php php php php php php php}

php php php php php php php php php$localephp php=php php(stringphp)php php$localephp;
php php php php php php php php ifphp php(php(isphp_stringphp(php$messageIdphp)php php|php|php isphp_intphp(php$messageIdphp)php)php php&php&php issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php)php)php php{
php php php php php php php php php php php php php/php/php returnphp originalphp translation
php php php php php php php php php php php php ifphp php(php$pluralphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$rulephp php=php Zendphp_Translatephp_Pluralphp:php:getPluralphp(php$numberphp,php php$localephp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$pluralphp[php0php]php]php[php$rulephp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_translatephp[php$localephp]php[php$pluralphp[php0php]php]php[php$rulephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(strlenphp(php$localephp)php php!php=php php2php)php php{
php php php php php php php php php php php php php/php/php fasterphp thanphp creatingphp aphp newphp localephp andphp separatephp thephp leadingphp part
php php php php php php php php php php php php php$localephp php=php substrphp(php$localephp,php php0php,php php-strlenphp(strrchrphp(php$localephp,php php'php_php'php)php)php)php;

php php php php php php php php php php php php ifphp php(php(isphp_stringphp(php$messageIdphp)php php|php|php isphp_intphp(php$messageIdphp)php)php php&php&php issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php returnphp regionlessphp translationphp php(enphp_USphp php-php>php enphp)
php php php php php php php php php php php php php php php php ifphp php(php$pluralphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$rulephp php=php Zendphp_Translatephp_Pluralphp:php:getPluralphp(php$numberphp,php php$localephp)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$pluralphp[php0php]php]php[php$rulephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_translatephp[php$localephp]php[php$pluralphp[php0php]php]php[php$rulephp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_logphp(php$messageIdphp,php php$localephp)php;
php php php php php php php php php/php/php usephp reroutingphp whenphp enabled
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_optionsphp[php'routephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$localephp,php php$thisphp-php>php_optionsphp[php'routephp'php]php)php php&php&
php php php php php php php php php php php php php php php php php!arrayphp_keyphp_existsphp(php$localephp,php php$thisphp-php>php_routedphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_routedphp[php$localephp]php php=php truephp;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>translatephp(php$messageIdphp,php php$thisphp-php>php_optionsphp[php'routephp'php]php[php$localephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_routedphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$pluralphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$messageIdphp;
php php php php php php php php php}

php php php php php php php php php$rulephp php=php Zendphp_Translatephp_Pluralphp:php:getPluralphp(php$numberphp,php php$plocalephp)php;
php php php php php php php php ifphp php(php!issetphp(php$pluralphp[php$rulephp]php)php)php php{
php php php php php php php php php php php php php$rulephp php=php php0php;
php php php php php php php php php}

php php php php php php php php returnphp php$pluralphp[php$rulephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatesphp thephp givenphp stringphp usingphp pluralphp notations
php php php php php php*php Returnsphp thephp translatedphp string
php php php php php php*
php php php php php php*php php@seephp Zendphp_Locale
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$singularphp Singularphp translationphp string
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$pluralphp php php Pluralphp translationphp string
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$numberphp php php Numberphp forphp detectingphp thephp correctphp plural
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php php php(Optionalphp)php Localephp/Languagephp tophp usephp,php identicalphp with
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php localephp identifierphp,php php@seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp pluralphp(php$singularphp,php php$pluralphp,php php$numberphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>translatephp(arrayphp(php$singularphp,php php$pluralphp,php php$numberphp)php,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Logsphp aphp messagephp whenphp thephp logphp optionphp isphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$messagephp Messagephp tophp log
php php php php php php*php php@paramphp Stringphp php$localephp php Localephp tophp log
php php php php php php*php/
php php php php protectedphp functionphp php_logphp(php$messagephp,php php$localephp)php php{
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'logUntranslatedphp'php]php)php php{
php php php php php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%messagephp%php'php,php php$messagephp,php php$thisphp-php>php_optionsphp[php'logMessagephp'php]php)php;
php php php php php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%localephp%php'php,php php$localephp,php php$messagephp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'logphp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'logphp'php]php-php>logphp(php$messagephp,php php$thisphp-php>php_optionsphp[php'logPriorityphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php triggerphp_errorphp(php$messagephp,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatesphp thephp givenphp string
php php php php php php*php returnsphp thephp translation
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$messageIdphp Translationphp string
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php php php php(optionalphp)php Localephp/Languagephp tophp usephp,php identicalphp withphp locale
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php identifierphp,php php@seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php(php$messageIdphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>translatephp(php$messageIdphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp aphp stringphp isphp translatedphp withinphp thephp sourcephp orphp not
php php php php php php*php returnsphp boolean
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$messageIdphp Translationphp string
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php$originalphp php php(optionalphp)php Allowphp translationphp onlyphp forphp originalphp language
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php whenphp truephp,php aphp translationphp forphp php'enphp_USphp'php wouldphp givephp falsephp whenphp itphp can
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php bephp translatedphp withphp php'enphp'php only
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php php php php(optionalphp)php Localephp/Languagephp tophp usephp,php identicalphp withphp localephp identifierphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isTranslatedphp(php$messageIdphp,php php$originalphp php=php falsephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(php$originalphp php!php=php=php falsephp)php andphp php(php$originalphp php!php=php=php truephp)php)php php{
php php php php php php php php php php php php php$localephp php php php=php php$originalphp;
php php php php php php php php php php php php php$originalphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_optionsphp[php'localephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php falsephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php languagephp doesphp notphp existphp,php returnphp originalphp string
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php$localephp)php;
php php php php php php php php php}

php php php php php php php php php$localephp php=php php(stringphp)php php$localephp;
php php php php php php php php ifphp php(php(isphp_stringphp(php$messageIdphp)php php|php|php isphp_intphp(php$messageIdphp)php)php php&php&php issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php)php)php php{
php php php php php php php php php php php php php/php/php returnphp originalphp translation
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp ifphp php(php(strlenphp(php$localephp)php php!php=php php2php)php andphp php(php$originalphp php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php/php/php fasterphp thanphp creatingphp aphp newphp localephp andphp separatephp thephp leadingphp part
php php php php php php php php php php php php php$localephp php=php substrphp(php$localephp,php php0php,php php-strlenphp(strrchrphp(php$localephp,php php'php_php'php)php)php)php;

php php php php php php php php php php php php ifphp php(php(isphp_stringphp(php$messageIdphp)php php|php|php isphp_intphp(php$messageIdphp)php)php php&php&php issetphp(php$thisphp-php>php_translatephp[php$localephp]php[php$messageIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php returnphp regionlessphp translationphp php(enphp_USphp php-php>php enphp)
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Nophp translationphp foundphp,php returnphp original
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp cache
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Corephp Thephp setphp cache
php php php php php php*php/
php php php php publicphp staticphp functionphp getCachephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp cachephp forphp allphp Zendphp_Translatephp_Adapters
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Corephp php$cachephp Cachephp tophp storephp to
php php php php php php*php/
php php php php publicphp staticphp functionphp setCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php php$cachephp;
php php php php php php php php selfphp:php:php_getTagSupportForCachephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp aphp cachephp isphp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasCachephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_cachephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp anyphp setphp cache
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeCachephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp allphp setphp cachephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tagphp Tagphp tophp clearphp whenphp thephp defaultphp tagphp namephp isphp notphp used
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearCachephp(php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Cachephp.phpphp'php;
php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php ifphp php(php$tagphp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$tagphp php=php php'Zendphp_Translatephp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp,php arrayphp(php$tagphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp toStringphp(php)php;

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp checkphp ifphp thephp givenphp cachephp supportsphp tags
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp php$cache
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getTagSupportForCachephp(php)
php php php php php{
php php php php php php php php php$backendphp php=php selfphp:php:php$php_cachephp-php>getBackendphp(php)php;
php php php php php php php php ifphp php(php$backendphp instanceofphp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp)php php{
php php php php php php php php php php php php php$cacheOptionsphp php=php php$backendphp-php>getCapabilitiesphp(php)php;
php php php php php php php php php php php php selfphp:php:php$php_cacheTagsphp php=php php$cacheOptionsphp[php'tagsphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$php_cacheTagsphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_cacheTagsphp;
php php php php php}
php}
