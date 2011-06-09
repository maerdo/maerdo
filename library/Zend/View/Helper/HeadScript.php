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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php HeadScriptphp.phpphp php2php3php5php4php9php php2php0php1php0php-php1php2php-php1php8php php0php6php:php3php3php:php3php0Zphp mjhphp_caphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalonephp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Standalonephp.phpphp'php;

php/php*php*
php php*php Helperphp forphp settingphp andphp retrievingphp scriptphp elementsphp forphp HTMLphp headphp section
php php*
php php*php php@usesphp php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HeadScriptphp extendsphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Scriptphp typephp contants
php php php php php php*php php@constphp string
php php php php php php*php/
php php php php constphp FILEphp php php php=php php'FILEphp'php;
php php php php constphp SCRIPTphp php=php php'SCRIPTphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Registryphp keyphp forphp placeholder
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp php=php php'Zendphp_Viewphp_Helperphp_HeadScriptphp'php;

php php php php php/php*php*
php php php php php php*php Arephp arbitraryphp attributesphp allowedphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_arbitraryAttributesphp php=php falsephp;

php php php php php/php*php*php#php@php+
php php php php php php*php Capturephp typephp andphp/orphp attributesphp php(usedphp forphp hintingphp duringphp capturephp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_captureLockphp;
php php php php protectedphp php$php_captureScriptTypephp php php=php nullphp;
php php php php protectedphp php$php_captureScriptAttrsphp php=php nullphp;
php php php php protectedphp php$php_captureTypephp;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Optionalphp allowedphp attributesphp forphp scriptphp tag
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionalAttributesphp php=php arrayphp(
php php php php php php php php php'charsetphp'php,php php'deferphp'php,php php'languagephp'php,php php'srcphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Requiredphp attributesphp forphp scriptphp tag
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_requiredAttributesphp php=php arrayphp(php'typephp'php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp formatphp scriptsphp usingphp CDATAphp;php usedphp onlyphp ifphp doctype
php php php php php php*php helperphp isphp notphp accessible
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php publicphp php$useCdataphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Setphp separatorphp tophp PHPphp_EOLphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;
php php php php php php php php php$thisphp-php>setSeparatorphp(PHPphp_EOLphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp headScriptphp object
php php php php php php*
php php php php php php*php Returnsphp headScriptphp helperphp objectphp;php optionallyphp,php allowsphp specifyingphp aphp script
php php php php php php*php orphp scriptphp filephp tophp includephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Scriptphp orphp file
php php php php php php*php php@paramphp php stringphp php$specphp Scriptphp/url
php php php php php php*php php@paramphp php stringphp php$placementphp Appendphp,php prependphp,php orphp set
php php php php php php*php php@paramphp php arrayphp php$attrsphp Arrayphp ofphp scriptphp attributes
php php php php php php*php php@paramphp php stringphp php$typephp Scriptphp typephp andphp/orphp arrayphp ofphp scriptphp attributes
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadScript
php php php php php php*php/
php php php php publicphp functionphp headScriptphp(php$modephp php=php Zendphp_Viewphp_Helperphp_HeadScriptphp:php:FILEphp,php php$specphp php=php nullphp,php php$placementphp php=php php'APPENDphp'php,php arrayphp php$attrsphp php=php arrayphp(php)php,php php$typephp php=php php'textphp/javascriptphp'php)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$specphp)php php&php&php isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php php$actionphp php php php php=php ucfirstphp(strtolowerphp(php$modephp)php)php;
php php php php php php php php php php php php php$placementphp php=php strtolowerphp(php$placementphp)php;
php php php php php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php php php php php casephp php'setphp'php:
php php php php php php php php php php php php php php php php casephp php'prependphp'php:
php php php php php php php php php php php php php php php php casephp php'appendphp'php:
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php php$placementphp php.php php$actionphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php php'appendphp'php php.php php$actionphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$specphp,php php$typephp,php php$attrsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp capturephp action
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$captureType
php php php php php php*php php@paramphp php stringphp php$typeOrAttrs
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureStartphp(php$captureTypephp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_captureLockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Exceptionphp(php'Cannotphp nestphp headScriptphp capturesphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_captureLockphp php php php php php php php php=php truephp;
php php php php php php php php php$thisphp-php>php_captureTypephp php php php php php php php php=php php$captureTypephp;
php php php php php php php php php$thisphp-php>php_captureScriptTypephp php php=php php$typephp;
php php php php php php php php php$thisphp-php>php_captureScriptAttrsphp php=php php$attrsphp;
php php php php php php php php obphp_startphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp capturephp actionphp andphp store
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureEndphp(php)
php php php php php{
php php php php php php php php php$contentphp php php php php php php php php php php php php php php php php php php php=php obphp_getphp_cleanphp(php)php;
php php php php php php php php php$typephp php php php php php php php php php php php php php php php php php php php php php php=php php$thisphp-php>php_captureScriptTypephp;
php php php php php php php php php$attrsphp php php php php php php php php php php php php php php php php php php php php php=php php$thisphp-php>php_captureScriptAttrsphp;
php php php php php php php php php$thisphp-php>php_captureScriptTypephp php php=php nullphp;
php php php php php php php php php$thisphp-php>php_captureScriptAttrsphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_captureLockphp php php php php php php php php=php falsephp;

php php php php php php php php switchphp php(php$thisphp-php>php_captureTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:SETphp:
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:PREPENDphp:
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp:
php php php php php php php php php php php php php php php php php$actionphp php=php strtolowerphp(php$thisphp-php>php_captureTypephp)php php.php php'Scriptphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$actionphp php=php php'appendScriptphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php$actionphp(php$contentphp,php php$typephp,php php$attrsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadphp methodphp access
php php php php php php*
php php php php php php*php Allowsphp thephp followingphp methodphp callsphp:
php php php php php php*php php-php appendFilephp(php$srcphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php offsetSetFilephp(php$indexphp,php php$srcphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php prependFilephp(php$srcphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php setFilephp(php$srcphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php appendScriptphp(php$scriptphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php offsetSetScriptphp(php$indexphp,php php$srcphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php prependScriptphp(php$scriptphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*php php-php setScriptphp(php$scriptphp,php php$typephp php=php php'textphp/javascriptphp'php,php php$attrsphp php=php arrayphp(php)php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadScript
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp ifphp toophp fewphp argumentsphp orphp invalidphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php?Pphp<actionphp>setphp|php(apphp|prephp)pendphp|offsetSetphp)php(php?Pphp<modephp>Filephp|Scriptphp)php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php ifphp php(php1php php>php countphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Methodphp php"php%sphp"php requiresphp atphp leastphp onephp argumentphp'php,php php$methodphp)php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$actionphp php php=php php$matchesphp[php'actionphp'php]php;
php php php php php php php php php php php php php$modephp php php php php=php strtolowerphp(php$matchesphp[php'modephp'php]php)php;
php php php php php php php php php php php php php$typephp php php php php=php php'textphp/javascriptphp'php;
php php php php php php php php php php php php php$attrsphp php php php=php arrayphp(php)php;

php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php php$indexphp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php ifphp php(php1php php>php countphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Methodphp php"php%sphp"php requiresphp atphp leastphp twophp argumentsphp,php anphp indexphp andphp sourcephp'php,php php$methodphp)php)php;
php php php php php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$contentphp php=php php$argsphp[php0php]php;

php php php php php php php php php php php php ifphp php(issetphp(php$argsphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php(stringphp)php php$argsphp[php1php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$argsphp[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php$attrsphp php=php php(arrayphp)php php$argsphp[php2php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php php php php php casephp php'scriptphp'php:
php php php php php php php php php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>createDataphp(php$typephp,php php$attrsphp,php php$contentphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetSetphp(php$indexphp,php php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'filephp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_isDuplicatephp(php$contentphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$attrsphp[php'srcphp'php]php php=php php$contentphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>createDataphp(php$typephp,php php$attrsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetSetphp(php$indexphp,php php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_php_callphp(php$methodphp,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp filephp specifiedphp aphp duplicatephp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_isDuplicatephp(php$filephp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>getContainerphp(php)php asphp php$itemphp)php php{
php php php php php php php php php php php php ifphp php(php(php$itemphp-php>sourcephp php=php=php=php nullphp)
php php php php php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'srcphp'php,php php$itemphp-php>attributesphp)
php php php php php php php php php php php php php php php php php&php&php php(php$filephp php=php=php php$itemphp-php>attributesphp[php'srcphp'php]php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp scriptphp providedphp validphp?
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php(php!php$valuephp instanceofphp stdClassphp)
php php php php php php php php php php php php php|php|php php!issetphp(php$valuephp-php>typephp)
php php php php php php php php php php php php php|php|php php(php!issetphp(php$valuephp-php>sourcephp)php php&php&php php!issetphp(php$valuephp-php>attributesphp)php)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp append
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp argumentphp passedphp tophp appendphp(php)php;php pleasephp usephp onephp ofphp thephp helperphp methodsphp,php appendScriptphp(php)php orphp appendFilephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>appendphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp prepend
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp prependphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp argumentphp passedphp tophp prependphp(php)php;php pleasephp usephp onephp ofphp thephp helperphp methodsphp,php prependScriptphp(php)php orphp prependFilephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>prependphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp set
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp argumentphp passedphp tophp setphp(php)php;php pleasephp usephp onephp ofphp thephp helperphp methodsphp,php setScriptphp(php)php orphp setFilephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>setphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp offsetSet
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$index
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$indexphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp argumentphp passedphp tophp offsetSetphp(php)php;php pleasephp usephp onephp ofphp thephp helperphp methodsphp,php offsetSetScriptphp(php)php orphp offsetSetFilephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetSetphp(php$indexphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp ifphp arbitraryphp attributesphp arephp allowed
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadScript
php php php php php php*php/
php php php php publicphp functionphp setAllowArbitraryAttributesphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_arbitraryAttributesphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Arephp arbitraryphp attributesphp allowedphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp arbitraryAttributesAllowedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_arbitraryAttributesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp scriptphp HTML
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php stringphp|intphp php$indent
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp itemToStringphp(php$itemphp,php php$indentphp,php php$escapeStartphp,php php$escapeEndphp)
php php php php php{
php php php php php php php php php$attrStringphp php=php php'php'php;
php php php php php php php php ifphp php(php!emptyphp(php$itemphp-php>attributesphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$itemphp-php>attributesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>arbitraryAttributesAllowedphp(php)
php php php php php php php php php php php php php php php php php php php php php&php&php php!inphp_arrayphp(php$keyphp,php php$thisphp-php>php_optionalAttributesphp)php)
php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php'deferphp'php php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php'deferphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$attrStringphp php.php=php sprintfphp(php'php php%sphp=php"php%sphp"php'php,php php$keyphp,php php(php$thisphp-php>php_autoEscapephp)php php?php php$thisphp-php>php_escapephp(php$valuephp)php php:php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$typephp php=php php(php$thisphp-php>php_autoEscapephp)php php?php php$thisphp-php>php_escapephp(php$itemphp-php>typephp)php php:php php$itemphp-php>typephp;
php php php php php php php php php$htmlphp php php=php php'php<scriptphp typephp=php"php'php php.php php$typephp php.php php'php"php'php php.php php$attrStringphp php.php php'php>php'php;
php php php php php php php php ifphp php(php!emptyphp(php$itemphp-php>sourcephp)php)php php{
php php php php php php php php php php php php php php php$htmlphp php.php=php PHPphp_EOLphp php.php php$indentphp php.php php'php php php php php'php php.php php$escapeStartphp php.php PHPphp_EOLphp php.php php$itemphp-php>sourcephp php.php php$indentphp php.php php'php php php php php'php php.php php$escapeEndphp php.php PHPphp_EOLphp php.php php$indentphp;
php php php php php php php php php}
php php php php php php php php php$htmlphp php.php=php php'<php/scriptphp>php'php;

php php php php php php php php ifphp php(issetphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)
php php php php php php php php php php php php php&php&php php!emptyphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)
php php php php php php php php php php php php php&php&php isphp_stringphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$htmlphp php=php php$indentphp php.php php'<php!php-php-php[ifphp php'php php.php php$itemphp-php>attributesphp[php'conditionalphp'php]php php.php php'php]php>php php'php php.php php$htmlphp php.php php'<php!php[endifphp]php-php-php>php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$htmlphp php=php php$indentphp php.php php$htmlphp;
php php php php php php php php php}

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp stringphp representation
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$indent
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$indentphp php=php nullphp)
php php php php php{
php php php php php php php php php$indentphp php=php php(nullphp php!php=php=php php$indentphp)
php php php php php php php php php php php php php php php php php?php php$thisphp-php>getWhitespacephp(php$indentphp)
php php php php php php php php php php php php php php php php php:php php$thisphp-php>getIndentphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>viewphp)php php{
php php php php php php php php php php php php php$useCdataphp php=php php$thisphp-php>viewphp-php>doctypephp(php)php-php>isXhtmlphp(php)php php?php truephp php:php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$useCdataphp php=php php$thisphp-php>useCdataphp php?php truephp php:php falsephp;
php php php php php php php php php}
php php php php php php php php php$escapeStartphp php=php php(php$useCdataphp)php php?php php'php/php/<php!php[CDATAphp[php'php php:php php'php/php/<php!php-php-php'php;
php php php php php php php php php$escapeEndphp php php php=php php(php$useCdataphp)php php?php php'php/php/php]php]php>php'php php php php php php php php:php php'php/php/php-php-php>php'php;

php php php php php php php php php$itemsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>getContainerphp(php)php-php>ksortphp(php)php;
php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$itemphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$itemsphp[php]php php=php php$thisphp-php>itemToStringphp(php$itemphp,php php$indentphp,php php$escapeStartphp,php php$escapeEndphp)php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php implodephp(php$thisphp-php>getSeparatorphp(php)php,php php$itemsphp)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp dataphp itemphp containingphp allphp necessaryphp componentsphp ofphp script
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp stdClass
php php php php php php*php/
php php php php publicphp functionphp createDataphp(php$typephp,php arrayphp php$attributesphp,php php$contentphp php=php nullphp)
php php php php php{
php php php php php php php php php$dataphp php php php php php php php php php php php php php=php newphp stdClassphp(php)php;
php php php php php php php php php$dataphp-php>typephp php php php php php php php=php php$typephp;
php php php php php php php php php$dataphp-php>attributesphp php=php php$attributesphp;
php php php php php php php php php$dataphp-php>sourcephp php php php php php=php php$contentphp;
php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
