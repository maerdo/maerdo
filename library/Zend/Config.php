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
php php*php php@versionphp php php php php$Idphp:php Configphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp implementsphp Countablephp,php Iterator
php{
php php php php php/php*php*
php php php php php php*php Whetherphp inphp-memoryphp modificationsphp tophp configurationphp dataphp arephp allowed
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_allowModificationsphp;

php php php php php/php*php*
php php php php php php*php Iterationphp index
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_indexphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp elementsphp inphp configurationphp data
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_countphp;

php php php php php/php*php*
php php php php php php*php Containsphp arrayphp ofphp configurationphp data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Usedphp whenphp unsettingphp valuesphp duringphp iterationphp tophp ensurephp wephp dophp notphp skip
php php php php php php*php thephp nextphp element
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_skipNextIterationphp;

php php php php php/php*php*
php php php php php php*php Containsphp whichphp configphp filephp sectionsphp werephp loadedphp.php Thisphp isphp null
php php php php php php*php ifphp allphp sectionsphp werephp loadedphp,php aphp stringphp namephp ifphp onephp sectionphp isphp loaded
php php php php php php*php andphp anphp arrayphp ofphp stringphp namesphp ifphp multiplephp sectionsphp werephp loadedphp.
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_loadedSectionphp;

php php php php php/php*php*
php php php php php php*php Thisphp isphp usedphp tophp trackphp sectionphp inheritancephp.php Thephp keysphp arephp namesphp ofphp sectionsphp that
php php php php php php*php extendphp otherphp sectionsphp,php andphp thephp valuesphp arephp thephp extendedphp sectionsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extendsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Loadphp filephp errorphp stringphp.
php php php php php php*
php php php php php php*php Isphp nullphp ifphp therephp wasphp nophp errorphp whilephp filephp loading
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_loadFileErrorStrphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Zendphp_Configphp providesphp aphp propertyphp basedphp interfacephp to
php php php php php php*php anphp arrayphp.php Thephp dataphp arephp readphp-onlyphp unlessphp php$allowModifications
php php php php php php*php isphp setphp tophp truephp onphp constructionphp.
php php php php php php*
php php php php php php*php Zendphp_Configphp alsophp implementsphp Countablephp andphp Iteratorphp to
php php php php php php*php facilitatephp easyphp accessphp tophp thephp dataphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$array
php php php php php php*php php@paramphp php booleanphp php$allowModifications
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$arrayphp,php php$allowModificationsphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_allowModificationsphp php=php php(booleanphp)php php$allowModificationsphp;
php php php php php php php php php$thisphp-php>php_loadedSectionphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_indexphp php=php php0php;
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$arrayphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$keyphp]php php=php newphp selfphp(php$valuephp,php php$thisphp-php>php_allowModificationsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_countphp php=php countphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp valuephp andphp returnphp php$defaultphp ifphp therephp isphp nophp elementphp setphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$default
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getphp(php$namephp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$defaultphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp functionphp sophp thatphp php$objphp-php>valuephp willphp workphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Onlyphp allowphp settingphp ofphp aphp propertyphp ifphp php$allowModifications
php php php php php php*php wasphp setphp tophp truephp onphp constructionphp.php Otherwisephp,php throwphp anphp exceptionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_allowModificationsphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php newphp selfphp(php$valuephp,php truephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_countphp php=php countphp(php$thisphp-php>php_dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Configphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Zendphp_Configphp isphp readphp onlyphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deepphp clonephp ofphp thisphp instancephp tophp ensurephp thatphp nestedphp Zendphp_Configs
php php php php php php*php arephp alsophp clonedphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_clonephp(php)
php php php php php{
php php php php php php php$arrayphp php=php arrayphp(php)php;
php php php php php php foreachphp php(php$thisphp-php>php_dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php$arrayphp[php$keyphp]php php=php clonephp php$valuephp;
php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php$arrayphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php}
php php php php php php php}
php php php php php php php$thisphp-php>php_dataphp php=php php$arrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp associativephp arrayphp ofphp thephp storedphp dataphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$arrayphp php=php arrayphp(php)php;
php php php php php php php php php$dataphp php=php php$thisphp-php>php_dataphp;
php php php php php php php php foreachphp php(php$dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$arrayphp[php$keyphp]php php=php php$valuephp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$arrayphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Supportphp issetphp(php)php overloadingphp onphp PHPphp php5php.php1
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_dataphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Supportphp unsetphp(php)php overloadingphp onphp PHPphp php5php.php1
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_allowModificationsphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$namephp]php)php;
php php php php php php php php php php php php php$thisphp-php>php_countphp php=php countphp(php$thisphp-php>php_dataphp)php;
php php php php php php php php php php php php php$thisphp-php>php_skipNextIterationphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Configphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Zendphp_Configphp isphp readphp onlyphp'php)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Countablephp interface
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Iteratorphp interface
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_skipNextIterationphp php=php falsephp;
php php php php php php php php returnphp currentphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Iteratorphp interface
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Iteratorphp interface
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_skipNextIterationphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_skipNextIterationphp php=php falsephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php nextphp(php$thisphp-php>php_dataphp)php;
php php php php php php php php php$thisphp-php>php_indexphp+php+php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Iteratorphp interface
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_skipNextIterationphp php=php falsephp;
php php php php php php php php resetphp(php$thisphp-php>php_dataphp)php;
php php php php php php php php php$thisphp-php>php_indexphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Iteratorphp interface
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_indexphp <php php$thisphp-php>php_countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp sectionphp namephp(sphp)php loadedphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getSectionNamephp(php)
php php php php php{
php php php php php php php php ifphp(isphp_arrayphp(php$thisphp-php>php_loadedSectionphp)php php&php&php countphp(php$thisphp-php>php_loadedSectionphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadedSectionphp php=php php$thisphp-php>php_loadedSectionphp[php0php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_loadedSectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp allphp sectionsphp werephp loaded
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp areAllSectionsLoadedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_loadedSectionphp php=php=php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Mergephp anotherphp Zendphp_Configphp withphp thisphp onephp.php Thephp items
php php php php php php*php inphp php$mergephp willphp overridephp thephp samephp namedphp itemsphp in
php php php php php php*php thephp currentphp configphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$merge
php php php php php php*php php@returnphp Zendphp_Config
php php php php php php*php/
php php php php publicphp functionphp mergephp(Zendphp_Configphp php$mergephp)
php php php php php{
php php php php php php php php foreachphp(php$mergephp asphp php$keyphp php=php>php php$itemphp)php php{
php php php php php php php php php php php php ifphp(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php php php php php ifphp(php$itemphp instanceofphp Zendphp_Configphp php&php&php php$thisphp-php>php$keyphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$thisphp-php>php$keyphp-php>mergephp(newphp Zendphp_Configphp(php$itemphp-php>toArrayphp(php)php,php php!php$thisphp-php>readOnlyphp(php)php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$itemphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp(php$itemphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php newphp Zendphp_Configphp(php$itemphp-php>toArrayphp(php)php,php php!php$thisphp-php>readOnlyphp(php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$itemphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preventphp anyphp morephp modificationsphp beingphp madephp tophp thisphp instancephp.php Useful
php php php php php php*php afterphp mergephp(php)php hasphp beenphp usedphp tophp mergephp multiplephp Zendphp_Configphp objects
php php php php php php*php intophp onephp objectphp whichphp shouldphp thenphp notphp bephp modifiedphp againphp.
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp setReadOnlyphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_allowModificationsphp php=php falsephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$valuephp-php>setReadOnlyphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thisphp Zendphp_Configphp objectphp isphp readphp onlyphp orphp notphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp readOnlyphp(php)
php php php php php{
php php php php php php php php returnphp php!php$thisphp-php>php_allowModificationsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp extends
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExtendsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_extendsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp extendphp forphp Zendphp_Configphp_Writer
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$extendingSection
php php php php php php*php php@paramphp php stringphp php$extendedSection
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setExtendphp(php$extendingSectionphp,php php$extendedSectionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$extendedSectionphp php=php=php=php nullphp php&php&php issetphp(php$thisphp-php>php_extendsphp[php$extendingSectionphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_extendsphp[php$extendingSectionphp]php)php;
php php php php php php php php php}php elsephp ifphp php(php$extendedSectionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_extendsphp[php$extendingSectionphp]php php=php php$extendedSectionphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp php$extendingSectionphp mayphp notphp extendphp php$extendedSectionphp,
php php php php php php*php andphp tracksphp thephp sectionphp extensionphp ifphp itphp isphp validphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$extendingSection
php php php php php php*php php@paramphp php stringphp php$extendedSection
php php php php php php*php php@throwsphp Zendphp_Configphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_assertValidExtendphp(php$extendingSectionphp,php php$extendedSectionphp)
php php php php php{
php php php php php php php php php/php/php detectphp circularphp sectionphp inheritance
php php php php php php php php php$extendedSectionCurrentphp php=php php$extendedSectionphp;
php php php php php php php php whilephp php(arrayphp_keyphp_existsphp(php$extendedSectionCurrentphp,php php$thisphp-php>php_extendsphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_extendsphp[php$extendedSectionCurrentphp]php php=php=php php$extendingSectionphp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Configphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Illegalphp circularphp inheritancephp detectedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$extendedSectionCurrentphp php=php php$thisphp-php>php_extendsphp[php$extendedSectionCurrentphp]php;
php php php php php php php php php}
php php php php php php php php php/php/php rememberphp thatphp thisphp sectionphp extendsphp anotherphp section
php php php php php php php php php$thisphp-php>php_extendsphp[php$extendingSectionphp]php php=php php$extendedSectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anyphp errorsphp fromphp simplexmlphp_loadphp_filephp orphp parsephp_iniphp_file
php php php php php php*
php php php php php php*php php@paramphp integerphp php$errno
php php php php php php*php php@paramphp stringphp php$errstr
php php php php php php*php php@paramphp stringphp php$errfile
php php php php php php*php php@paramphp integerphp php$errline
php php php php php php*php/
php php php php protectedphp functionphp php_loadFileErrorHandlerphp(php$errnophp,php php$errstrphp,php php$errfilephp,php php$errlinephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_loadFileErrorStrphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadFileErrorStrphp php=php php$errstrphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_loadFileErrorStrphp php.php=php php(PHPphp_EOLphp php.php php$errstrphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp twophp arraysphp recursivelyphp,php overwritingphp keysphp ofphp thephp samephp name
php php php php php php*php inphp php$firstArrayphp withphp thephp valuephp inphp php$secondArrayphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$firstArrayphp php Firstphp array
php php php php php php*php php@paramphp php mixedphp php$secondArrayphp Secondphp arrayphp tophp mergephp intophp firstphp array
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_arrayMergeRecursivephp(php$firstArrayphp,php php$secondArrayphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$firstArrayphp)php php&php&php isphp_arrayphp(php$secondArrayphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$secondArrayphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$firstArrayphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$firstArrayphp[php$keyphp]php php=php php$thisphp-php>php_arrayMergeRecursivephp(php$firstArrayphp[php$keyphp]php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp(php$keyphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$firstArrayphp=php arrayphp(php0php=php>php$thisphp-php>php_arrayMergeRecursivephp(php$firstArrayphp,php php$valuephp)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$firstArrayphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$firstArrayphp php=php php$secondArrayphp;
php php php php php php php php php}

php php php php php php php php returnphp php$firstArrayphp;
php php php php php}
php}