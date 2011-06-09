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
php php*php php@versionphp php php php php$Idphp:php HeadMetaphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalonephp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Standalonephp.phpphp'php;

php/php*php*
php php*php Zendphp_Layoutphp_Viewphp_Helperphp_HeadMeta
php php*
php php*php php@seephp php php php php php php php httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php/dtdsphp.html
php php*php php@usesphp php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HeadMetaphp extendsphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php{
php php php php php/php*php*
php php php php php php*php Typesphp ofphp attributes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_typeKeysphp php php php php php=php arrayphp(php'namephp'php,php php'httpphp-equivphp'php,php php'charsetphp'php)php;
php php php php protectedphp php$php_requiredKeysphp php=php arrayphp(php'contentphp'php)php;
php php php php protectedphp php$php_modifierKeysphp php=php arrayphp(php'langphp'php,php php'schemephp'php)php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp registryphp key
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp php=php php'Zendphp_Viewphp_Helperphp_HeadMetaphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Setphp separatorphp tophp PHPphp_EOL
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;
php php php php php php php php php$thisphp-php>setSeparatorphp(PHPphp_EOLphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp objectphp instancephp;php optionallyphp addphp metaphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php stringphp php$keyValue
php php php php php php*php php@paramphp php stringphp php$keyType
php php php php php php*php php@paramphp php arrayphp php$modifiers
php php php php php php*php php@paramphp php stringphp php$placement
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadMeta
php php php php php php*php/
php php php php publicphp functionphp headMetaphp(php$contentphp php=php nullphp,php php$keyValuephp php=php nullphp,php php$keyTypephp php=php php'namephp'php,php php$modifiersphp php=php arrayphp(php)php,php php$placementphp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$contentphp)php php&php&php php(nullphp php!php=php=php php$keyValuephp)php)php php{
php php php php php php php php php php php php php$itemphp php php php=php php$thisphp-php>createDataphp(php$keyTypephp,php php$keyValuephp,php php$contentphp,php php$modifiersphp)php;
php php php php php php php php php php php php php$actionphp php=php strtolowerphp(php$placementphp)php;
php php php php php php php php php php php php switchphp php(php$actionphp)php php{
php php php php php php php php php php php php php php php php casephp php'appendphp'php:
php php php php php php php php php php php php php php php php casephp php'prependphp'php:
php php php php php php php php php php php php php php php php casephp php'setphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>appendphp(php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php protectedphp functionphp php_normalizeTypephp(php$typephp)
php php php php php{
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'Namephp'php:
php php php php php php php php php php php php php php php php returnphp php'namephp'php;
php php php php php php php php php php php php casephp php'HttpEquivphp'php:
php php php php php php php php php php php php php php php php returnphp php'httpphp-equivphp'php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Invalidphp typephp php"php%sphp"php passedphp tophp php_normalizeTypephp'php,php php$typephp)php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadphp methodphp access
php php php php php php*
php php php php php php*php Allowsphp thephp followingphp php'virtualphp'php methodsphp:
php php php php php php*php php-php appendNamephp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*php php-php offsetGetNamephp(php$indexphp,php php$keyValuephp,php php$contentphp,php php$modifersphp php=php arrayphp(php)php)
php php php php php php*php php-php prependNamephp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*php php-php setNamephp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*php php-php appendHttpEquivphp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*php php-php offsetGetHttpEquivphp(php$indexphp,php php$keyValuephp,php php$contentphp,php php$modifersphp php=php arrayphp(php)php)
php php php php php php*php php-php prependHttpEquivphp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*php php-php setHttpEquivphp(php$keyValuephp,php php$contentphp,php php$modifiersphp php=php arrayphp(php)php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadMeta
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php?Pphp<actionphp>setphp|php(prephp|apphp)pendphp|offsetSetphp)php(php?Pphp<typephp>Namephp|HttpEquivphp)php$php/php'php,php php$methodphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$actionphp php=php php$matchesphp[php'actionphp'php]php;
php php php php php php php php php php php php php$typephp php php php=php php$thisphp-php>php_normalizeTypephp(php$matchesphp[php'typephp'php]php)php;
php php php php php php php php php php php php php$argcphp php php php=php countphp(php$argsphp)php;
php php php php php php php php php php php php php$indexphp php php=php nullphp;

php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php0php <php php$argcphp)php php{
php php php php php php php php php php php php php php php php php php php php php$indexphp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php-php-php$argcphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php2php php>php php$argcphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Toophp fewphp argumentsphp providedphp;php requiresphp keyphp valuephp,php andphp contentphp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php3php php>php php$argcphp)php php{
php php php php php php php php php php php php php php php php php$argsphp[php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$itemphp php php=php php$thisphp-php>createDataphp(php$typephp,php php$argsphp[php0php]php,php php$argsphp[php1php]php,php php$argsphp[php2php]php)php;

php php php php php php php php php php php php ifphp php(php'offsetSetphp'php php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>offsetSetphp(php$indexphp,php php$itemphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php$actionphp(php$itemphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_php_callphp(php$methodphp,php php$argsphp)php;
php php php php php}

php	php/php*php*
php	php php*php Createphp anphp HTMLphp5php-stylephp metaphp charsetphp tagphp.php Somethingphp likephp php<metaphp charsetphp=php"utfphp-php8php"php>
php	php php*
php	php php*php Notphp validphp inphp aphp nonphp-HTMLphp5php doctype
php	php php*
php	php php*php php@paramphp stringphp php$charset
php	php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadMetaphp Providesphp aphp fluentphp interface
php	php php*php/
php php php php publicphp functionphp setCharsetphp(php$charsetphp)
php php php php php{
php php php php php php php php php$itemphp php=php newphp stdClassphp;
php php php php php php php php php$itemphp-php>typephp php=php php'charsetphp'php;
php php php php php php php php php$itemphp-php>charsetphp php=php php$charsetphp;
php php php php php php php php php$itemphp-php>contentphp php=php nullphp;
php php php php php php php php php$itemphp-php>modifiersphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>setphp(php$itemphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp itemphp isphp valid
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$item
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_isValidphp(php$itemphp)
php php php php php{
php php php php php php php php ifphp php(php(php!php$itemphp instanceofphp stdClassphp)
php php php php php php php php php php php php php|php|php php!issetphp(php$itemphp-php>typephp)
php php php php php php php php php php php php php|php|php php!issetphp(php$itemphp-php>modifiersphp)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$itemphp-php>contentphp)
php php php php php php php php php&php&php php(php!php php$thisphp-php>viewphp-php>doctypephp(php)php-php>isHtmlphp5php(php)
php php php php php php php php php|php|php php(php!php php$thisphp-php>viewphp-php>doctypephp(php)php-php>isHtmlphp5php(php)php php&php&php php$itemphp-php>typephp php!php=php=php php'charsetphp'php)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Append
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp appendphp;php pleasephp usephp appendMetaphp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>appendphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php OffsetSet
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$index
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$indexphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp offsetSetphp;php pleasephp usephp offsetSetNamephp(php)php orphp offsetSetHttpEquivphp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetSetphp(php$indexphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php OffsetUnset
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$index
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$indexphp,php php$thisphp-php>getContainerphp(php)php-php>getKeysphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp indexphp passedphp tophp offsetUnsetphp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetUnsetphp(php$indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Prepend
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp prependphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp prependphp;php pleasephp usephp prependMetaphp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>prependphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Set
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp valuephp passedphp tophp setphp;php pleasephp usephp setMetaphp(php)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php foreachphp php(php$containerphp-php>getArrayCopyphp(php)php asphp php$indexphp php=php>php php$itemphp)php php{
php php php php php php php php php php php php ifphp php(php$itemphp-php>typephp php=php=php php$valuephp-php>typephp php&php&php php$itemphp-php>php{php$itemphp-php>typephp}php php=php=php php$valuephp-php>php{php$valuephp-php>typephp}php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>offsetUnsetphp(php$indexphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>appendphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp metaphp HTMLphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$typeValue
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php arrayphp php$modifiers
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp itemToStringphp(stdClassphp php$itemphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$itemphp-php>typephp,php php$thisphp-php>php_typeKeysphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Invalidphp typephp php"php%sphp"php providedphp forphp metaphp'php,php php$itemphp-php>typephp)php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php php php php php$typephp php=php php$itemphp-php>typephp;

php php php php php php php php php$modifiersStringphp php=php php'php'php;
php php php php php php php php foreachphp php(php$itemphp-php>modifiersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>viewphp-php>doctypephp(php)php-php>isHtmlphp5php(php)
php php php php php php php php php php php php php&php&php php$keyphp php=php=php php'schemephp'php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp modifierphp php'
php php php php php php php php php php php php php php php php php.php php'php"schemephp"php providedphp;php notphp supportedphp byphp HTMLphp5php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$keyphp,php php$thisphp-php>php_modifierKeysphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$modifiersStringphp php.php=php php$keyphp php.php php'php=php"php'php php.php php$thisphp-php>php_escapephp(php$valuephp)php php.php php'php"php php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Abstractphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>viewphp-php>doctypephp(php)php-php>isHtmlphp5php(php)
php php php php php php php php php php php php php&php&php php$typephp php=php=php php'charsetphp'php)php php{
php php php php php php php php php php php php php php php php php$tplphp php=php php(php$thisphp-php>viewphp-php>doctypephp(php)php-php>isXhtmlphp(php)php)
php php php php php php php php php php php php php php php php php php php php php?php php'php<metaphp php%sphp=php"php%sphp"php/php>php'
php php php php php php php php php php php php php php php php php php php php php:php php'php<metaphp php%sphp=php"php%sphp"php>php'php;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>viewphp-php>doctypephp(php)php-php>isXhtmlphp(php)php)php php{
php php php php php php php php php php php php php php php php php$tplphp php=php php'php<metaphp php%sphp=php"php%sphp"php contentphp=php"php%sphp"php php%sphp/php>php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tplphp php=php php'php<metaphp php%sphp=php"php%sphp"php contentphp=php"php%sphp"php php%sphp>php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tplphp php=php php'php<metaphp php%sphp=php"php%sphp"php contentphp=php"php%sphp"php php%sphp/php>php'php;
php php php php php php php php php}

php php php php php php php php php$metaphp php=php sprintfphp(
php php php php php php php php php php php php php$tplphp,
php php php php php php php php php php php php php$typephp,
php php php php php php php php php php php php php$thisphp-php>php_escapephp(php$itemphp-php>php$typephp)php,
php php php php php php php php php php php php php$thisphp-php>php_escapephp(php$itemphp-php>contentphp)php,
php php php php php php php php php php php php php$modifiersString
php php php php php php php php php)php;
php php php php php php php php returnphp php$metaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp placeholderphp asphp string
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
php php php php php php php php tryphp php{
php php php php php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$itemsphp[php]php php=php php$thisphp-php>itemToStringphp(php$itemphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Viewphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php triggerphp_errorphp(php$ephp-php>getMessagephp(php)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$indentphp php.php implodephp(php$thisphp-php>php_escapephp(php$thisphp-php>getSeparatorphp(php)php)php php.php php$indentphp,php php$itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp dataphp itemphp forphp insertingphp intophp stack
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$typeValue
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php arrayphp php$modifiers
php php php php php php*php php@returnphp stdClass
php php php php php php*php/
php php php php publicphp functionphp createDataphp(php$typephp,php php$typeValuephp,php php$contentphp,php arrayphp php$modifiersphp)
php php php php php{
php php php php php php php php php$dataphp php php php php php php php php php php php php=php newphp stdClassphp;
php php php php php php php php php$dataphp-php>typephp php php php php php php=php php$typephp;
php php php php php php php php php$dataphp-php>php$typephp php php php php php=php php$typeValuephp;
php php php php php php php php php$dataphp-php>contentphp php php php=php php$contentphp;
php php php php php php php php php$dataphp-php>modifiersphp php=php php$modifiersphp;
php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
