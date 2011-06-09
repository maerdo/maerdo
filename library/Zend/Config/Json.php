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
php php*php php@copyrightphp Copyrightphp php(cphp)php php2php0php0php5php-php2php0php0php9php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Jsonphp.phpphp php2php3php2php9php4php php2php0php1php0php-php1php1php-php0php5php php0php0php:php2php7php:php3php4Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Json
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php JSONphp Adapterphp forphp Zendphp_Config
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Config
php php*php php@copyrightphp Copyrightphp php(cphp)php php2php0php0php5php-php2php0php0php9php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Jsonphp extendsphp Zendphp_Config
php{
php php php php php/php*php*
php php php php php php*php Namephp ofphp objectphp keyphp indicatingphp sectionphp currentphp sectionphp extends
php php php php php php*php/
php php php php constphp EXTENDSphp_NAMEphp php=php php"php_extendsphp"php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp ignorephp constantsphp inphp thephp JSONphp string
php php php php php php*
php php php php php php*php Notephp:php ifphp youphp dophp notphp havephp constantphp namesphp inphp quotationsphp inphp yourphp JSON
php php php php php php*php stringphp,php theyphp mayphp leadphp tophp syntaxphp errorsphp whenphp parsingphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_ignoreConstantsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp skipphp extendsphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_skipExtendsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Loadsphp thephp sectionphp php$sectionphp fromphp thephp configphp filephp encodedphp asphp JSON
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
php php php php php php*php php@paramphp php stringphp php php$jsonphp php php php php JSONphp filephp orphp stringphp tophp process
php php php php php php*php php@paramphp php mixedphp php php php$sectionphp Sectionphp tophp process
php php php php php php*php php@paramphp php booleanphp php$optionsphp Whetherphp modifiacationsphp arephp allowedphp atphp runtime
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp JSONphp textphp isphp notphp setphp orphp cannotphp bephp loaded
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp sectionphp php$sectionNamephp cannotphp bephp foundphp inphp php$json
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$jsonphp,php php$sectionphp php=php nullphp,php php$optionsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$jsonphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Filenamephp isphp notphp setphp'php)php;
php php php php php php php php php}

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
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ignoreConstantsphp php=php php(boolphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_loadFileErrorHandlerphp'php)php)php;php php/php/php Warningsphp andphp errorsphp arephp suppressed
php php php php php php php php ifphp php(php$jsonphp[php0php]php php!php=php php'php{php'php)php php{
php php php php php php php php php php php php php$jsonphp php=php filephp_getphp_contentsphp(php$jsonphp)php;
php php php php php php php php php}
php php php php php php php php restorephp_errorphp_handlerphp(php)php;

php php php php php php php php php/php/php Checkphp ifphp therephp wasphp aphp errorphp whilephp loadingphp file
php php php php php php php php ifphp php(php$thisphp-php>php_loadFileErrorStrphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php$thisphp-php>php_loadFileErrorStrphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Replacephp constants
php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreConstantsphp)php php{
php php php php php php php php php php php php php$jsonphp php=php php$thisphp-php>php_replaceConstantsphp(php$jsonphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Parsephp/decode
php php php php php php php php php$configphp php=php Zendphp_Jsonphp:php:decodephp(php$jsonphp)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$configphp)php php{
php php php php php php php php php php php php php/php/php decodephp failed
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Errorphp parsingphp JSONphp dataphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$sectionphp php=php=php=php nullphp)php php{
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
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(php'Sectionphp php"php%sphp"php cannotphp bephp foundphp'php,php php$sectionNamephp)php)php;
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
php php php php php php php php php php php php php php php php php/php/php Sectionphp inphp thephp JSONphp dataphp containsphp justphp onephp topphp levelphp string
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
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp php$sectionphp cannotphp bephp found
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_processExtendsphp(arrayphp php$dataphp,php php$sectionphp,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$sectionphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(sprintfphp(php'Sectionphp php"php%sphp"php cannotphp bephp foundphp'php,php php$sectionphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisSectionphp php php=php php$dataphp[php$sectionphp]php;

php php php php php php php php ifphp php(isphp_arrayphp(php$thisSectionphp)php php&php&php issetphp(php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisSectionphp[selfphp:php:EXTENDSphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Invalidphp extendsphp clausephp:php mustphp bephp aphp stringphp;php arrayphp receivedphp'php)php;
php php php php php php php php php php php php php}
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
php php php php php php*php Replacephp anyphp constantsphp referencedphp inphp aphp stringphp withphp theirphp values
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_replaceConstantsphp(php$valuephp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_getConstantsphp(php)php asphp php$constantphp)php php{
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
php php php php protectedphp functionphp php_getConstantsphp(php)
php php php php php{
php php php php php php php php php$constantsphp php=php arrayphp_keysphp(getphp_definedphp_constantsphp(php)php)php;
php php php php php php php php rsortphp(php$constantsphp,php SORTphp_STRINGphp)php;
php php php php php php php php returnphp php$constantsphp;
php php php php php}
php}
