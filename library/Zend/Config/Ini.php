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
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Iniphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Iniphp extendsphp Zendphp_Config
php{
php php php php php/php*php*
php php php php php php*php Stringphp thatphp separatesphp nestingphp levelsphp ofphp configurationphp dataphp identifiers
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_nestSeparatorphp php=php php'php.php'php;

php php php php php/php*php*
php php php php php php*php Stringphp thatphp separatesphp thephp parentphp sectionphp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sectionSeparatorphp php=php php'php:php'php;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp skipphp extendsphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_skipExtendsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Loadsphp thephp sectionphp php$sectionphp fromphp thephp configphp filephp php$filenamephp for
php php php php php php*php accessphp facilitatedphp byphp nestedphp objectphp propertiesphp.
php php php php php php*
php php php php php php*php Ifphp thephp sectionphp namephp containsphp aphp php"php:php"php thenphp thephp sectionphp namephp tophp thephp right
php php php php php php*php isphp loadedphp andphp includedphp intophp thephp propertiesphp.php Notephp thatphp thephp keysphp in
php php php php php php*php thisphp php$sectionphp willphp overridephp anyphp keysphp ofphp thephp same
php php php php php php*php namephp inphp thephp sectionsphp thatphp havephp beenphp includedphp viaphp php"php:php"php.
php php php php php php*
php php php php php php*php Ifphp thephp php$sectionphp isphp nullphp,php thenphp allphp sectionsphp inphp thephp iniphp filephp arephp loadedphp.
php php php php php php*
php php php php php php*php Ifphp anyphp keyphp includesphp aphp php"php.php"php,php thenphp thisphp willphp actphp asphp aphp separatorphp to
php php php php php php*php createphp aphp subphp-propertyphp.
php php php php php php*
php php php php php php*php examplephp iniphp filephp:
php php php php php php*php php php php php php php[allphp]
php php php php php php*php php php php php php dbphp.connectionphp php=php database
php php php php php php*php php php php php php hostnamephp php=php live
php php php php php php*
php php php php php php*php php php php php php php[stagingphp php:php allphp]
php php php php php php*php php php php php php hostnamephp php=php staging
php php php php php php*
php php php php php php*php afterphp callingphp php$dataphp php=php newphp Zendphp_Configphp_Iniphp(php$filephp,php php'stagingphp'php)php;php then
php php php php php php*php php php php php php php$dataphp-php>hostnamephp php=php=php=php php"stagingphp"
php php php php php php*php php php php php php php$dataphp-php>dbphp-php>connectionphp php=php=php=php php"databasephp"
php php php php php php*
php php php php php php*php Thephp php$optionsphp parameterphp mayphp bephp providedphp asphp eitherphp aphp booleanphp orphp anphp arrayphp.
php php php php php php*php Ifphp providedphp asphp aphp booleanphp,php thisphp setsphp thephp php$allowModificationsphp optionphp of
php php php php php php*php Zendphp_Configphp.php Ifphp providedphp asphp anphp arrayphp,php therephp arephp twophp configuration
php php php php php php*php directivesphp thatphp mayphp bephp setphp.php Forphp examplephp:
php php php php php php*
php php php php php php*php php$optionsphp php=php arrayphp(
php php php php php php*php php php php php php'allowModificationsphp'php php=php>php falsephp,
php php php php php php*php php php php php php'nestSeparatorphp'php php php php php php php=php>php php'php-php>php'
php php php php php php*php php php php php php php)php;
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php$filename
php php php php php php*php php@paramphp php stringphp|nullphp php php php$section
php php php php php php*php php@paramphp php booleanphp|arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filenamephp,php php$sectionphp php=php nullphp,php php$optionsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$filenamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Filenamephp isphp notphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$allowModificationsphp php=php falsephp;
php php php php php php php php ifphp php(isphp_boolphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$allowModificationsphp php=php php$optionsphp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'allowModificationsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$allowModificationsphp php=php php(boolphp)php php$optionsphp[php'allowModificationsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'nestSeparatorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_nestSeparatorphp php=php php(stringphp)php php$optionsphp[php'nestSeparatorphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'skipExtendsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_skipExtendsphp php=php php(boolphp)php php$optionsphp[php'skipExtendsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$iniArrayphp php=php php$thisphp-php>php_loadIniFilephp(php$filenamephp)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$sectionphp)php php{
php php php php php php php php php php php php php/php/php Loadphp entirephp file
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$iniArrayphp asphp php$sectionNamephp php=php>php php$sectionDataphp)php php{
php php php php php php php php php php php php php php php php ifphp(php!isphp_arrayphp(php$sectionDataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataArrayphp php=php php$thisphp-php>php_arrayMergeRecursivephp(php$dataArrayphp,php php$thisphp-php>php_processKeyphp(arrayphp(php)php,php php$sectionNamephp,php php$sectionDataphp)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$dataArrayphp[php$sectionNamephp]php php=php php$thisphp-php>php_processSectionphp(php$iniArrayphp,php php$sectionNamephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Loadphp onephp orphp morephp sections
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$sectionphp)php)php php{
php php php php php php php php php php php php php php php php php$sectionphp php=php arrayphp(php$sectionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$sectionphp asphp php$sectionNamephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$iniArrayphp[php$sectionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Sectionphp php'php$sectionNamephp'php cannotphp bephp foundphp inphp php$filenamephp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$dataArrayphp php=php php$thisphp-php>php_arrayMergeRecursivephp(php$thisphp-php>php_processSectionphp(php$iniArrayphp,php php$sectionNamephp)php,php php$dataArrayphp)php;

php php php php php php php php php php php php php}
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loadedSectionphp php=php php$sectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp INIphp filephp fromphp diskphp usingphp parsephp_iniphp_filephp(php)php.php Usephp aphp privatephp error
php php php php php php*php handlerphp tophp convertphp anyphp loadingphp errorsphp intophp aphp Zendphp_Configphp_Exception
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseIniFilephp(php$filenamephp)
php php php php php{
php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_loadFileErrorHandlerphp'php)php)php;
php php php php php php php php php$iniArrayphp php=php parsephp_iniphp_filephp(php$filenamephp,php truephp)php;php php/php/php Warningsphp andphp errorsphp arephp suppressed
php php php php php php php php restorephp_errorphp_handlerphp(php)php;

php php php php php php php php php/php/php Checkphp ifphp therephp wasphp aphp errorphp whilephp loadingphp file
php php php php php php php php ifphp php(php$thisphp-php>php_loadFileErrorStrphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php$thisphp-php>php_loadFileErrorStrphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$iniArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp iniphp filephp andphp preprocessphp thephp sectionphp separatorphp php(php'php:php'php inphp the
php php php php php php*php sectionphp namephp php(thatphp isphp usedphp forphp sectionphp extensionphp)php sophp thatphp thephp resultant
php php php php php php*php arrayphp hasphp thephp correctphp sectionphp namesphp andphp thephp extensionphp informationphp is
php php php php php php*php storedphp inphp aphp subphp-keyphp calledphp php'php;extendsphp'php.php Wephp usephp php'php;extendsphp'php asphp thisphp can
php php php php php php*php neverphp bephp aphp validphp keyphp namephp inphp anphp INIphp filephp thatphp hasphp beenphp loadedphp using
php php php php php php*php parsephp_iniphp_filephp(php)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadIniFilephp(php$filenamephp)
php php php php php{
php php php php php php php php php$loadedphp php=php php$thisphp-php>php_parseIniFilephp(php$filenamephp)php;
php php php php php php php php php$iniArrayphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$loadedphp asphp php$keyphp php=php>php php$dataphp)
php php php php php php php php php{
php php php php php php php php php php php php php$piecesphp php=php explodephp(php$thisphp-php>php_sectionSeparatorphp,php php$keyphp)php;
php php php php php php php php php php php php php$thisSectionphp php=php trimphp(php$piecesphp[php0php]php)php;
php php php php php php php php php php php php switchphp php(countphp(php$piecesphp)php)php php{
php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php php$iniArrayphp[php$thisSectionphp]php php=php php$dataphp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php php$extendedSectionphp php=php trimphp(php$piecesphp[php1php]php)php;
php php php php php php php php php php php php php php php php php php php php php$iniArrayphp[php$thisSectionphp]php php=php arrayphp_mergephp(arrayphp(php'php;extendsphp'php=php>php$extendedSectionphp)php,php php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Sectionphp php'php$thisSectionphp'php mayphp notphp extendphp multiplephp sectionsphp inphp php$filenamephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$iniArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp eachphp elementphp inphp thephp sectionphp andphp handlephp thephp php"php;extendsphp"php inheritance
php php php php php php*php keyphp.php Passesphp controlphp tophp php_processKeyphp(php)php tophp handlephp thephp nestphp separator
php php php php php php*php subphp-propertyphp syntaxphp thatphp mayphp bephp usedphp withinphp thephp keyphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$iniArray
php php php php php php*php php@paramphp php stringphp php$section
php php php php php php*php php@paramphp php arrayphp php php$config
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_processSectionphp(php$iniArrayphp,php php$sectionphp,php php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisSectionphp php=php php$iniArrayphp[php$sectionphp]php;

php php php php php php php php foreachphp php(php$thisSectionphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(strtolowerphp(php$keyphp)php php=php=php php'php;extendsphp'php)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$iniArrayphp[php$valuephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_assertValidExtendphp(php$sectionphp,php php$valuephp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_skipExtendsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_processSectionphp(php$iniArrayphp,php php$valuephp,php php$configphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Parentphp sectionphp php'php$sectionphp'php cannotphp bephp foundphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_processKeyphp(php$configphp,php php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assignphp thephp keyphp'sphp valuephp tophp thephp propertyphp listphp.php Handlesphp the
php php php php php php*php nestphp separatorphp forphp subphp-propertiesphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$config
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_processKeyphp(php$configphp,php php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$keyphp,php php$thisphp-php>php_nestSeparatorphp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$piecesphp php=php explodephp(php$thisphp-php>php_nestSeparatorphp,php php$keyphp,php php2php)php;
php php php php php php php php php php php php ifphp php(strlenphp(php$piecesphp[php0php]php)php php&php&php strlenphp(php$piecesphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp[php$piecesphp[php0php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$piecesphp[php0php]php php=php=php=php php'php0php'php php&php&php php!emptyphp(php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php convertphp thephp currentphp valuesphp inphp php$configphp intophp anphp array
php php php php php php php php php php php php php php php php php php php php php php php php php$configphp php=php arrayphp(php$piecesphp[php0php]php php=php>php php$configphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$configphp[php$piecesphp[php0php]php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$configphp[php$piecesphp[php0php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Cannotphp createphp subphp-keyphp forphp php'php{php$piecesphp[php0php]php}php'php asphp keyphp alreadyphp existsphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$configphp[php$piecesphp[php0php]php]php php=php php$thisphp-php>php_processKeyphp(php$configphp[php$piecesphp[php0php]php]php,php php$piecesphp[php1php]php,php php$valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Configphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Invalidphp keyphp php'php$keyphp'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$configphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$configphp;
php php php php php}
php}
