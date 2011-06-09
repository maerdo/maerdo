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
php php*php php@versionphp php php php php$Idphp:php HeadStylephp.phpphp php2php0php1php0php4php php2php0php1php0php-php0php1php-php0php6php php2php1php:php2php6php:php0php1Zphp matthewphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalonephp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Standalonephp.phpphp'php;

php/php*php*
php php*php Helperphp forphp settingphp andphp retrievingphp stylesheets
php php*
php php*php php@usesphp php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HeadStylephp extendsphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php{
php php php php php/php*php*
php php php php php php*php Registryphp keyphp forphp placeholder
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp php=php php'Zendphp_Viewphp_Helperphp_HeadStylephp'php;

php php php php php/php*php*
php php php php php php*php Allowedphp optionalphp attributes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionalAttributesphp php=php arrayphp(php'langphp'php,php php'titlephp'php,php php'mediaphp'php,php php'dirphp'php)php;

php php php php php/php*php*
php php php php php php*php Allowedphp mediaphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_mediaTypesphp php=php arrayphp(
php php php php php php php php php'allphp'php,php php'auralphp'php,php php'braillephp'php,php php'handheldphp'php,php php'printphp'php,
php php php php php php php php php'projectionphp'php,php php'screenphp'php,php php'ttyphp'php,php php'tvphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Capturephp typephp andphp/orphp attributesphp php(usedphp forphp hintingphp duringphp capturephp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_captureAttrsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Capturephp lock
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_captureLockphp;

php php php php php/php*php*
php php php php php php*php Capturephp typephp php(appendphp,php prependphp,php setphp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_captureTypephp;

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
php php php php php php*php Returnphp headStylephp object
php php php php php php*
php php php php php php*php Returnsphp headStylephp helperphp objectphp;php optionallyphp,php allowsphp specifying
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$contentphp Stylesheetphp contents
php php php php php php*php php@paramphp php stringphp php$placementphp Appendphp,php prependphp,php orphp set
php php php php php php*php php@paramphp php stringphp|arrayphp php$attributesphp Optionalphp attributesphp tophp utilize
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadStyle
php php php php php php*php/
php php php php publicphp functionphp headStylephp(php$contentphp php=php nullphp,php php$placementphp php=php php'APPENDphp'php,php php$attributesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$contentphp)php php&php&php isphp_stringphp(php$contentphp)php)php php{
php php php php php php php php php php php php switchphp php(strtoupperphp(php$placementphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'SETphp'php:
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php php'setStylephp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'PREPENDphp'php:
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php php'prependStylephp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'APPENDphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php php'appendStylephp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$contentphp,php php$attributesphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadphp methodphp calls
php php php php php php*
php php php php php php*php Allowsphp thephp followingphp methodphp callsphp:
php php php php php php*php php-php appendStylephp(php$contentphp,php php$attributesphp php=php arrayphp(php)php)
php php php php php php*php php-php offsetSetStylephp(php$indexphp,php php$contentphp,php php$attributesphp php=php arrayphp(php)php)
php php php php php php*php php-php prependStylephp(php$contentphp,php php$attributesphp php=php arrayphp(php)php)
php php php php php php*php php-php setStylephp(php$contentphp,php php$attributesphp php=php arrayphp(php)php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp Whenphp nophp php$contentphp providedphp orphp invalidphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php?Pphp<actionphp>setphp|php(apphp|prephp)pendphp|offsetSetphp)php(Stylephp)php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$indexphp php php=php nullphp;
php php php php php php php php php php php php php$argcphp php php php=php countphp(php$argsphp)php;
php php php php php php php php php php php php php$actionphp php=php php$matchesphp[php'actionphp'php]php;

php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php0php <php php$argcphp)php php{
php php php php php php php php php php php php php php php php php php php php php$indexphp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php-php-php$argcphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php1php php>php php$argcphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Methodphp php"php%sphp"php requiresphp minimallyphp contentphp forphp thephp stylesheetphp'php,php php$methodphp)php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$contentphp php=php php$argsphp[php0php]php;
php php php php php php php php php php php php php$attrsphp php php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$argsphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php$attrsphp php=php php(arrayphp)php php$argsphp[php1php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>createDataphp(php$contentphp,php php$attrsphp)php;

php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>offsetSetphp(php$indexphp,php php$itemphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$itemphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_php_callphp(php$methodphp,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp valuephp isphp aphp validphp stylephp tag
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php(php!php$valuephp instanceofphp stdClassphp)
php php php php php php php php php php php php php|php|php php!issetphp(php$valuephp-php>contentphp)
php php php php php php php php php php php php php|php|php php!issetphp(php$valuephp-php>attributesphp)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp appendphp tophp enforcephp stylephp creation
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp appendphp;php pleasephp usephp appendStylephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>appendphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp offsetSetphp tophp enforcephp stylephp creation
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$index
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$indexphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp offsetSetphp;php pleasephp usephp offsetSetStylephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetSetphp(php$indexphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp prependphp tophp enforcephp stylephp creation
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp prependphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp prependphp;php pleasephp usephp prependStylephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>prependphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp setphp tophp enforcephp stylephp creation
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp setphp;php pleasephp usephp setStylephp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>setphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp capturephp action
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$captureType
php php php php php php*php php@paramphp php stringphp php$typeOrAttrs
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureStartphp(php$typephp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp,php php$attrsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_captureLockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Exceptionphp(php'Cannotphp nestphp headStylephp capturesphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_captureLockphp php php php php php php php php=php truephp;
php php php php php php php php php$thisphp-php>php_captureAttrsphp php php php php php php php=php php$attrsphp;
php php php php php php php php php$thisphp-php>php_captureTypephp php php php php php php php php=php php$typephp;
php php php php php php php php obphp_startphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp capturephp actionphp andphp store
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureEndphp(php)
php php php php php{
php php php php php php php php php$contentphp php php php php php php php php php php php php php=php obphp_getphp_cleanphp(php)php;
php php php php php php php php php$attrsphp php php php php php php php php php php php php php php php=php php$thisphp-php>php_captureAttrsphp;
php php php php php php php php php$thisphp-php>php_captureAttrsphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_captureLockphp php php=php falsephp;

php php php php php php php php switchphp php(php$thisphp-php>php_captureTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:SETphp:
php php php php php php php php php php php php php php php php php$thisphp-php>setStylephp(php$contentphp,php php$attrsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>prependStylephp(php$contentphp,php php$attrsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>appendStylephp(php$contentphp,php php$attrsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp contentphp andphp attributesphp intophp validphp stylephp tag
php php php php php php*
php php php php php php*php php@paramphp php stdClassphp php$itemphp Itemphp tophp render
php php php php php php*php php@paramphp php stringphp php$indentphp Indentationphp tophp use
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp itemToStringphp(stdClassphp php$itemphp,php php$indentphp)
php php php php php{
php php php php php php php php php$attrStringphp php=php php'php'php;
php php php php php php php php ifphp php(php!emptyphp(php$itemphp-php>attributesphp)php)php php{
php php php php php php php php php php php php php$encphp php=php php'UTFphp-php8php'php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Interface
php php php php php php php php php php php php php php php php php&php&php methodphp_existsphp(php$thisphp-php>viewphp,php php'getEncodingphp'php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$encphp php=php php$thisphp-php>viewphp-php>getEncodingphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$itemphp-php>attributesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$keyphp,php php$thisphp-php>php_optionalAttributesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php'mediaphp'php php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp(falsephp php=php=php=php strposphp(php$valuephp,php php'php,php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php php$thisphp-php>php_mediaTypesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$mediaphp_typesphp php=php explodephp(php'php,php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$mediaphp_typesphp asphp php$typephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php trimphp(php$typephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_mediaTypesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php.php=php php$typephp php.php'php,php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php0php,php php-php1php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$attrStringphp php.php=php sprintfphp(php'php php%sphp=php"php%sphp"php'php,php php$keyphp,php htmlspecialcharsphp(php$valuephp,php ENTphp_COMPATphp,php php$encphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$htmlphp php=php php'php<stylephp typephp=php"textphp/cssphp"php'php php.php php$attrStringphp php.php php'php>php'php php.php PHPphp_EOL
php php php php php php php php php php php php php php php.php php$indentphp php.php php'<php!php-php-php'php php.php PHPphp_EOLphp php.php php$indentphp php.php php$itemphp-php>contentphp php.php PHPphp_EOLphp php.php php$indentphp php.php php'php-php-php>php'php php.php PHPphp_EOL
php php php php php php php php php php php php php php php.php php'<php/stylephp>php'php;

php php php php php php php php ifphp php(issetphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)
php php php php php php php php php php php php php&php&php php!emptyphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)
php php php php php php php php php php php php php&php&php isphp_stringphp(php$itemphp-php>attributesphp[php'conditionalphp'php]php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$htmlphp php=php php'<php!php-php-php[ifphp php'php php.php php$itemphp-php>attributesphp[php'conditionalphp'php]php php.php php'php]php>php php'php php.php php$htmlphp php.php php'<php!php[endifphp]php-php-php>php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp stringphp representationphp ofphp placeholder
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$indent
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$indentphp php=php nullphp)
php php php php php{
php php php php php php php php php$indentphp php=php php(nullphp php!php=php=php php$indentphp)
php php php php php php php php php php php php php php php php php?php php$thisphp-php>getWhitespacephp(php$indentphp)
php php php php php php php php php php php php php php php php php:php php$thisphp-php>getIndentphp(php)php;

php php php php php php php php php$itemsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>getContainerphp(php)php-php>ksortphp(php)php;
php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$itemphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$itemsphp[php]php php=php php$thisphp-php>itemToStringphp(php$itemphp,php php$indentphp)php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$indentphp php.php implodephp(php$thisphp-php>getSeparatorphp(php)php php.php php$indentphp,php php$itemsphp)php;
php php php php php php php php php$returnphp php=php pregphp_replacephp(php"php/php(php\rphp\nphp?php|php\nphp)php/php"php,php php'php$php1php'php php.php php$indentphp,php php$returnphp)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp dataphp itemphp forphp usephp inphp stack
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@returnphp stdClass
php php php php php php*php/
php php php php publicphp functionphp createDataphp(php$contentphp,php arrayphp php$attributesphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$attributesphp[php'mediaphp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'mediaphp'php]php php=php php'screenphp'php;
php php php php php php php php php}php elsephp ifphp(isphp_arrayphp(php$attributesphp[php'mediaphp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'mediaphp'php]php php=php implodephp(php'php,php'php,php php$attributesphp[php'mediaphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php newphp stdClassphp(php)php;
php php php php php php php php php$dataphp-php>contentphp php php php php=php php$contentphp;
php php php php php php php php php$dataphp-php>attributesphp php=php php$attributesphp;

php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
