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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Regexphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Regexphp Route
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Routephp_Regexphp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Abstract
php{
php php php php protectedphp php$php_regexphp php=php nullphp;
php php php php protectedphp php$php_defaultsphp php=php arrayphp(php)php;
php php php php protectedphp php$php_reversephp php=php nullphp;
php php php php protectedphp php$php_mapphp php=php arrayphp(php)php;
php php php php protectedphp php$php_valuesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Instantiatesphp routephp basedphp onphp passedphp Zendphp_Configphp structure
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$configphp Configurationphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$defsphp php=php php(php$configphp-php>defaultsphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>defaultsphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php php$mapphp php=php php(php$configphp-php>mapphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>mapphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php php$reversephp php=php php(issetphp(php$configphp-php>reversephp)php)php php?php php$configphp-php>reversephp php:php nullphp;
php php php php php php php php returnphp newphp selfphp(php$configphp-php>routephp,php php$defsphp,php php$mapphp,php php$reversephp)php;
php php php php php}

php php php php publicphp functionphp php_php_constructphp(php$routephp,php php$defaultsphp php=php arrayphp(php)php,php php$mapphp php=php arrayphp(php)php,php php$reversephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_regexphp php php php php=php php$routephp;
php php php php php php php php php$thisphp-php>php_defaultsphp php=php php(arrayphp)php php$defaultsphp;
php php php php php php php php php$thisphp-php>php_mapphp php php php php php php=php php(arrayphp)php php$mapphp;
php php php php php php php php php$thisphp-php>php_reversephp php php=php php$reversephp;
php php php php php}

php php php php publicphp functionphp getVersionphp(php)php php{
php php php php php php php php returnphp php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp pathphp withphp aphp previouslyphp definedphp routephp.
php php php php php php*php Assignsphp andphp returnsphp anphp arrayphp ofphp defaultsphp onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pathphp Pathphp usedphp tophp matchphp againstphp thisphp routingphp map
php php php php php php*php php@returnphp arrayphp|falsephp php Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$pathphp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$partialphp)php php{
php php php php php php php php php php php php php$pathphp php=php trimphp(urldecodephp(php$pathphp)php,php php'php/php'php)php;
php php php php php php php php php php php php php$regexphp php=php php'php#php^php'php php.php php$thisphp-php>php_regexphp php.php php'php$php#iphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$regexphp php=php php'php#php^php'php php.php php$thisphp-php>php_regexphp php.php php'php#iphp'php;
php php php php php php php php php}

php php php php php php php php php$resphp php=php pregphp_matchphp(php$regexphp,php php$pathphp,php php$valuesphp)php;

php php php php php php php php ifphp php(php$resphp php=php=php=php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$partialphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMatchedPathphp(php$valuesphp[php0php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php arrayphp_filterphp_keyphp(php)php?php Whyphp isnphp'tphp thisphp inphp aphp standardphp PHPphp functionphp setphp yetphp?php php:php)
php php php php php php php php foreachphp php(php$valuesphp asphp php$iphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_intphp(php$iphp)php php|php|php php$iphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$valuesphp[php$iphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp;

php php php php php php php php php$valuesphp php php php=php php$thisphp-php>php_getMappedValuesphp(php$valuesphp)php;
php php php php php php php php php$defaultsphp php=php php$thisphp-php>php_getMappedValuesphp(php$thisphp-php>php_defaultsphp,php falsephp,php truephp)php;
php php php php php php php php php$returnphp php php php=php php$valuesphp php+php php$defaultsphp;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapsphp numericallyphp indexedphp arrayphp valuesphp tophp itphp'sphp associativephp mappedphp counterpartphp.
php php php php php php*php Orphp vicephp versaphp.php Usesphp userphp providedphp mapphp arrayphp whichphp consistsphp ofphp indexphp php=php>php name
php php php php php php*php parameterphp mappingphp.php Ifphp mapphp isphp notphp foundphp,php itphp returnsphp originalphp arrayphp.
php php php php php php*
php php php php php php*php Methodphp stripsphp destinationphp typephp ofphp keysphp formphp sourcephp arrayphp.php Iephp.php ifphp sourcephp arrayphp is
php php php php php php*php indexedphp numericallyphp thenphp everyphp associativephp keyphp willphp bephp strippedphp.php Vicephp versaphp ifphp reversed
php php php php php php*php isphp setphp tophp truephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$valuesphp Indexedphp orphp associativephp arrayphp ofphp valuesphp tophp map
php php php php php php*php php@paramphp php booleanphp php$reversedphp Falsephp meansphp translationphp ofphp indexphp tophp associationphp.php Truephp meansphp reversephp.
php php php php php php*php php@paramphp php booleanphp php$preservephp Shouldphp wrongphp typephp ofphp keysphp bephp preservedphp orphp strippedphp.
php php php php php php*php php@returnphp arrayphp php php Anphp arrayphp ofphp mappedphp values
php php php php php php*php/
php php php php protectedphp functionphp php_getMappedValuesphp(php$valuesphp,php php$reversedphp php=php falsephp,php php$preservephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_mapphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php$valuesphp;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_intphp(php$keyphp)php php&php&php php!php$reversedphp)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_mapphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$indexphp php=php php$thisphp-php>php_mapphp[php$keyphp]php;
php php php php php php php php php php php php php php php php php}php elseifphp php(falsephp php=php=php=php php(php$indexphp php=php arrayphp_searchphp(php$keyphp,php php$thisphp-php>php_mapphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$indexphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$returnphp[php$indexphp]php php=php php$valuesphp[php$keyphp]php;
php php php php php php php php php php php php php}php elseifphp php(php$reversedphp)php php{
php php php php php php php php php php php php php php php php php$indexphp php=php php$keyphp;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_intphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_mapphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$indexphp php=php php$thisphp-php>php_mapphp[php$keyphp]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$indexphp php=php arrayphp_searchphp(php$keyphp,php php$thisphp-php>php_mapphp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php$indexphp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php$indexphp]php php=php php$valuesphp[php$keyphp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(php$preservephp)php php{
php php php php php php php php php php php php php php php php php$returnphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp aphp URLphp pathphp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$dataphp Anphp arrayphp ofphp namephp php(orphp indexphp)php andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php falsephp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_reversephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php'Cannotphp assemblephp.php Reversedphp routephp isphp notphp specifiedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$defaultValuesMappedphp php php=php php$thisphp-php>php_getMappedValuesphp(php$thisphp-php>php_defaultsphp,php truephp,php falsephp)php;
php php php php php php php php php$matchedValuesMappedphp php php=php php$thisphp-php>php_getMappedValuesphp(php$thisphp-php>php_valuesphp,php truephp,php falsephp)php;
php php php php php php php php php$dataValuesMappedphp php php php php php=php php$thisphp-php>php_getMappedValuesphp(php$dataphp,php truephp,php falsephp)php;

php php php php php php php php php/php/php handlephp resetsphp,php ifphp sophp requestedphp php(Byphp nullphp valuephp)php tophp dophp so
php php php php php php php php ifphp php(php(php$resetKeysphp php=php arrayphp_searchphp(nullphp,php php$dataValuesMappedphp,php truephp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$resetKeysphp asphp php$resetKeyphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$matchedValuesMappedphp[php$resetKeyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$matchedValuesMappedphp[php$resetKeyphp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$dataValuesMappedphp[php$resetKeyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php mergephp allphp thephp dataphp togetherphp,php firstphp defaultsphp,php thenphp valuesphp matchedphp,php thenphp supplied
php php php php php php php php php$mergedDataphp php=php php$defaultValuesMappedphp;
php php php php php php php php php$mergedDataphp php=php php$thisphp-php>php_arrayMergeNumericKeysphp(php$mergedDataphp,php php$matchedValuesMappedphp)php;
php php php php php php php php php$mergedDataphp php=php php$thisphp-php>php_arrayMergeNumericKeysphp(php$mergedDataphp,php php$dataValuesMappedphp)php;

php php php php php php php php ifphp php(php$encodephp)php php{
php php php php php php php php php php php php foreachphp php(php$mergedDataphp asphp php$keyphp php=php>php php&php$valuephp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ksortphp(php$mergedDataphp)php;

php php php php php php php php php$returnphp php=php php@vsprintfphp(php$thisphp-php>php_reversephp,php php$mergedDataphp)php;

php php php php php php php php ifphp php(php$returnphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php'Cannotphp assemblephp.php Toophp fewphp argumentsphp?php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;

php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp singlephp parameterphp ofphp routephp'sphp defaults
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Arrayphp keyphp ofphp thephp parameter
php php php php php php*php php@returnphp stringphp Previouslyphp setphp default
php php php php php php*php/
php php php php publicphp functionphp getDefaultphp(php$namephp)php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_defaultsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultsphp[php$namephp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp defaults
php php php php php php*
php php php php php php*php php@returnphp arrayphp Routephp defaults
php php php php php php*php/
php php php php publicphp functionphp getDefaultsphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp variablesphp whichphp arephp usedphp byphp thephp route
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getVariablesphp(php)
php php php php php{
php php php php php php php php php$variablesphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_mapphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_numericphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$variablesphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$variablesphp[php]php php=php php$keyphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$variablesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_arrayMergeNumericKeysphp(php)php php-php allowsphp forphp aphp strictphp keyphp php(numericphp'sphp includedphp)php arrayphp_mergephp.
php php php php php php*php phpphp'sphp arrayphp_mergephp(php)php lacksphp thephp abilityphp tophp mergephp withphp numericphp keysphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$arrayphp1
php php php php php php*php php@paramphp arrayphp php$arrayphp2
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_arrayMergeNumericKeysphp(Arrayphp php$arrayphp1php,php Arrayphp php$arrayphp2php)
php php php php php{
php php php php php php php php php$returnArrayphp php=php php$arrayphp1php;
php php php php php php php php foreachphp php(php$arrayphp2php asphp php$arrayphp2Indexphp php=php>php php$arrayphp2Valuephp)php php{
php php php php php php php php php php php php php$returnArrayphp[php$arrayphp2Indexphp]php php=php php$arrayphp2Valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnArrayphp;
php php php php php}


php}
