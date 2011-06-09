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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Config
php php*php php@copyrightphp Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Yamlphp.phpphp php2php3php2php9php4php php2php0php1php0php-php1php1php-php0php5php php0php0php:php2php7php:php3php4Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;

php/php*php*
php php*php YAMLphp Adapterphp forphp Zendphp_Config
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Config
php php*php php@copyrightphp Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Yamlphp extendsphp Zendphp_Config
php{
php php php php php/php*php*
php php php php php php*php Attributephp namephp thatphp indicatesphp whatphp sectionphp aphp configphp extendsphp from
php php php php php php*php/
php php php php constphp EXTENDSphp_NAMEphp php=php php"php_extendsphp"php;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp skipphp extendsphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_skipExtendsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whatphp tophp callphp whenphp wephp needphp tophp decodephp somephp YAMLphp?
php php php php php php*
php php php php php php*php php@varphp callable
php php php php php php*php/
php php php php protectedphp php$php_yamlDecoderphp php=php arrayphp(php_php_CLASSphp_php_php,php php'decodephp'php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp ignorephp constantsphp inphp parsedphp YAML
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp staticphp php$php_ignoreConstantsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp parserphp shouldphp ignorephp constantsphp orphp not
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setIgnoreConstantsphp(php$flagphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_ignoreConstantsphp php=php php(boolphp)php php$flagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp parserphp shouldphp ignorephp constantsphp orphp not
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp ignoreConstantsphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_ignoreConstantsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp forphp decodingphp YAML
php php php php php php*
php php php php php php*php php@returnphp callable
php php php php php php*php/
php php php php publicphp functionphp getYamlDecoderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_yamlDecoderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp forphp decodingphp YAML
php php php php php php*
php php php php php php*php php@paramphp php php$yamlDecoderphp thephp decoderphp tophp set
php php php php php php*php php@returnphp Zendphp_Configphp_Yaml
php php php php php php*php/
php php php php publicphp functionphp setYamlDecoderphp(php$yamlDecoderphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$yamlDecoderphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Invalidphp parameterphp tophp setYamlDecoderphp(php)php php-php mustphp bephp callablephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_yamlDecoderphp php=php php$yamlDecoderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp sectionphp php$sectionphp fromphp thephp configphp filephp encodedphp asphp YAML
php php php php php php*
php php php php php php*php Sectionsphp arephp definedphp asphp propertiesphp ofphp thephp mainphp object
php php php php php php*
php php php php php php*php Inphp orderphp tophp extendphp anotherphp sectionphp,php aphp sectionphp definesphp thephp php"php_extendsphp"
php php php php php php*php propertyphp havingphp aphp valuephp ofphp thephp sectionphp namephp fromphp whichphp thephp extending
php php php php php php*php sectionphp inheritsphp valuesphp.
php php php php php php*
php php php php php php*php Notephp thatphp thephp keysphp inphp php$sectionphp willphp overridephp anyphp keysphp ofphp thephp same
php php php php php php*php namephp inphp thephp sectionsphp thatphp havephp beenphp includedphp viaphp php"php_extendsphp"php.
php php php php php php*
php php php php php php*php Optionsphp mayphp includephp:
php php php php php php*php php-php allowphp_modificationsphp:php whetherphp orphp notphp thephp configphp objectphp isphp mutable
php php php php php php*php php-php skipphp_extendsphp:php whetherphp orphp notphp tophp skipphp processingphp ofphp parentphp configuration
php php php php php php*php php-php yamlphp_decoderphp:php aphp callbackphp tophp usephp tophp decodephp thephp Yamlphp source
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$yamlphp php php php php YAMLphp filephp tophp process
php php php php php php*php php@paramphp php mixedphp php php php$sectionphp Sectionphp tophp process
php php php php php php*php php@paramphp php booleanphp php$optionsphp Whetherphp modifiacationsphp arephp allowedphp atphp runtime
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$yamlphp,php php$sectionphp php=php nullphp,php php$optionsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$yamlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Filenamephp isphp notphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$ignoreConstantsphp php php php php=php php$staticIgnoreConstantsphp php=php selfphp:php:ignoreConstantsphp(php)php;
php php php php php php php php php$allowModificationsphp php=php falsephp;
php php php php php php php php ifphp php(isphp_boolphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$allowModificationsphp php=php php$optionsphp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'allowphp_modificationsphp'php:
php php php php php php php php php php php php php php php php php php php php casephp php'allowmodificationsphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$allowModificationsphp php=php php(boolphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'skipphp_extendsphp'php:
php php php php php php php php php php php php php php php php php php php php casephp php'skipextendsphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_skipExtendsphp php=php php(boolphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'ignorephp_constantsphp'php:
php php php php php php php php php php php php php php php php php php php php casephp php'ignoreconstantsphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$ignoreConstantsphp php=php php(boolphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'yamlphp_decoderphp'php:
php php php php php php php php php php php php php php php php php php php php casephp php'yamldecoderphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setYamlDecoderphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Suppressphp warningsphp andphp errorsphp whilephp loadingphp file
php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_loadFileErrorHandlerphp'php)php)php;
php php php php php php php php php$yamlphp php=php filephp_getphp_contentsphp(php$yamlphp)php;
php php php php php php php php restorephp_errorphp_handlerphp(php)php;

php php php php php php php php php/php/php Checkphp ifphp therephp wasphp aphp errorphp whilephp loadingphp file
php php php php php php php php ifphp php(php$thisphp-php>php_loadFileErrorStrphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php$thisphp-php>php_loadFileErrorStrphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Overridephp staticphp valuephp forphp ignorephp_constantsphp ifphp providedphp inphp php$options
php php php php php php php php selfphp:php:setIgnoreConstantsphp(php$ignoreConstantsphp)php;

php php php php php php php php php/php/php Parsephp YAML
php php php php php php php php php$configphp php=php callphp_userphp_funcphp(php$thisphp-php>getYamlDecoderphp(php)php,php php$yamlphp)php;

php php php php php php php php php/php/php Resetphp originalphp staticphp statephp ofphp ignorephp_constants
php php php php php php php php selfphp:php:setIgnoreConstantsphp(php$staticIgnoreConstantsphp)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$configphp)php php{
php php php php php php php php php php php php php/php/php decodephp failed
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Errorphp parsingphp YAMLphp dataphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$sectionphp)php php{
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$configphp asphp php$sectionNamephp php=php>php php$sectionDataphp)php php{
php php php php php php php php php php php php php php php php php$dataArrayphp[php$sectionNamephp]php php=php php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionNamephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$sectionphp)php)php php{
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$sectionphp asphp php$sectionNamephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp[php$sectionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(php'Sectionphp php"php%sphp"php cannotphp bephp foundphp'php,php php$sectionphp)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$dataArrayphp php=php arrayphp_mergephp(php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionNamephp)php,php php$dataArrayphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp[php$sectionphp]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(php'Sectionphp php"php%sphp"php cannotphp bephp foundphp'php,php php$sectionphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dataArrayphp php=php php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionphp)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$dataArrayphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Sectionphp inphp thephp yamlphp dataphp containsphp justphp onephp topphp levelphp string
php php php php php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php$sectionphp php=php>php php$dataArrayphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loadedSectionphp php=php php$sectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp functionphp tophp processphp eachphp elementphp inphp thephp sectionphp andphp handle
php php php php php php*php thephp php"php_extendsphp"php inheritancephp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php$dataphp Dataphp arrayphp tophp process
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php$sectionphp Sectionphp tophp process
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php$configphp php Configurationphp whichphp wasphp parsedphp yet
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp php$sectionphp cannotphp bephp found
php php php php php php*php/
php php php php protectedphp functionphp php_processExtendsphp(arrayphp php$dataphp,php php$sectionphp,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$sectionphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(php'Sectionphp php"php%sphp"php cannotphp bephp foundphp'php,php php$sectionphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisSectionphp php php=php php$dataphp[php$sectionphp]php;

php php php php php php php php ifphp php(isphp_arrayphp(php$thisSectionphp)php php&php&php issetphp(php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_assertValidExtendphp(php$sectionphp,php php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php)php;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_skipExtendsphp)php php{
php php php php php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_processExtendsphp(php$dataphp,php php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php,php php$configphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php)php;
php php php php php php php php php}

php php php php php php php php php$configphp php=php php$thisphp-php>php_arrayMergeRecursivephp(php$configphp,php php$thisSectionphp)php;

php php php php php php php php returnphp php$configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Veryphp dumbphp YAMLphp parser
php php php php php php*
php php php php php php*php Untilphp wephp havephp Zendphp_Yamlphp.php.php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$yamlphp YAMLphp source
php php php php php php*php php@returnphp arrayphp Decodedphp data
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$yamlphp)
php php php php php{
php php php php php php php php php$linesphp php=php explodephp(php"php\nphp"php,php php$yamlphp)php;
php php php php php php php php resetphp(php$linesphp)php;
php php php php php php php php returnphp selfphp:php:php_decodeYamlphp(php0php,php php$linesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Servicephp functionphp tophp decodephp YAML
php php php php php php*
php php php php php php*php php@paramphp php intphp php$currentIndentphp Currentphp indentphp level
php php php php php php*php php@paramphp php arrayphp php$linesphp php YAMLphp lines
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_decodeYamlphp(php$currentIndentphp,php php&php$linesphp)
php php php php php{
php php php php php php php php php$configphp php php php=php arrayphp(php)php;
php php php php php php php php php$inIndentphp php=php falsephp;
php php php php php php php php whilephp php(listphp(php$nphp,php php$linephp)php php=php eachphp(php$linesphp)php)php php{
php php php php php php php php php php php php php$linenophp php=php php$nphp+php1php;
php php php php php php php php php php php php ifphp php(strlenphp(php$linephp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$linephp[php0php]php php=php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php php/php/php comment
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$indentphp php=php strspnphp(php$linephp,php php"php php"php)php;

php php php php php php php php php php php php php/php/php linephp withoutphp thephp spaces
php php php php php php php php php php php php php$linephp php=php trimphp(php$linephp)php;
php php php php php php php php php php php php ifphp php(strlenphp(php$linephp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$indentphp <php php$currentIndentphp)php php{
php php php php php php php php php php php php php php php php php/php/php thisphp levelphp isphp done
php php php php php php php php php php php php php php php php prevphp(php$linesphp)php;
php php php php php php php php php php php php php php php php returnphp php$configphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$inIndentphp)php php{
php php php php php php php php php php php php php php php php php$currentIndentphp php=php php$indentphp;
php php php php php php php php php php php php php php php php php$inIndentphp php php php php php php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php(php\wphp+php)php:php\sphp*php(php.php*php)php/php"php,php php$linephp,php php$mphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php keyphp:php value
php php php php php php php php php php php php php php php php ifphp php(php$mphp[php2php]php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php simplephp keyphp:php value
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$mphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp forphp booleansphp andphp constants
php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(tphp(ruephp)php?php|onphp|yphp(esphp)php?php)php$php/iphp'php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(pregphp_matchphp(php'php/php^php(fphp(alsephp)php?php|offphp|nphp(ophp)php?php)php$php/iphp'php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php!selfphp:php:php$php_ignoreConstantsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php testphp forphp constants
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php selfphp:php:php_replaceConstantsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php keyphp:php andphp thenphp valuesphp onphp newphp lines
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php selfphp:php:php_decodeYamlphp(php$currentIndentphp php+php php1php,php php$linesphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php php&php&php php!countphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"php"php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$configphp[php$mphp[php1php]php]php php=php php$valuephp;
php php php php php php php php php php php php php}php elseifphp php(php$linephp[php0php]php php=php=php php"php-php"php)php php{
php php php php php php php php php php php php php php php php php/php/php itemphp inphp thephp listphp:
php php php php php php php php php php php php php php php php php/php/php php-php FOO
php php php php php php php php php php php php php php php php ifphp php(strlenphp(php$linephp)php php>php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$configphp[php]php php=php substrphp(php$linephp,php php2php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$configphp[php]php php=php selfphp:php:php_decodeYamlphp(php$currentIndentphp php+php php1php,php php$linesphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php'Errorphp parsingphp YAMLphp atphp linephp php%dphp php-php unsupportedphp syntaxphp:php php"php%sphp"php'php,
php php php php php php php php php php php php php php php php php php php php php$linenophp,php php$line
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Replacephp anyphp constantsphp referencedphp inphp aphp stringphp withphp theirphp values
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_replaceConstantsphp(php$valuephp)
php php php php php{
php php php php php php php php foreachphp php(selfphp:php:php_getConstantsphp(php)php asphp php$constantphp)php php{
php php php php php php php php php php php php ifphp php(strstrphp(php$valuephp,php php$constantphp)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php$constantphp,php constantphp(php$constantphp)php,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp php(reversephp)php sortedphp listphp ofphp definedphp constantphp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getConstantsphp(php)
php php php php php{
php php php php php php php php php$constantsphp php=php arrayphp_keysphp(getphp_definedphp_constantsphp(php)php)php;
php php php php php php php php rsortphp(php$constantsphp,php SORTphp_STRINGphp)php;
php php php php php php php php returnphp php$constantsphp;
php php php php php}
php}
