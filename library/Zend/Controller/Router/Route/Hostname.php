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
php php*php php@versionphp php php php php$Idphp:php Hostnamephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Hostnamephp Route
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@seephp php php php php php php php httpphp:php/php/manualsphp.rubyonrailsphp.comphp/readphp/chapterphp/php6php5
php php*php/
classphp Zendphp_Controllerphp_Routerphp_Routephp_Hostnamephp extendsphp Zendphp_Controllerphp_Routerphp_Routephp_Abstract
php{

php php php php protectedphp php$php_hostVariablephp php php php=php php'php:php'php;
php php php php protectedphp php$php_regexDelimiterphp php=php php'php#php'php;
php php php php protectedphp php$php_defaultRegexphp php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Holdsphp namesphp ofphp allphp routephp'sphp patternphp variablephp namesphp.php Arrayphp indexphp holdsphp aphp positionphp inphp hostphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_variablesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp Routephp patternsphp forphp allphp hostphp partsphp.php Inphp casephp ofphp aphp variablephp itphp storesphp itphp'sphp regex
php php php php php php*php requirementphp orphp nullphp.php Inphp casephp ofphp aphp staticphp partphp,php itphp holdsphp onlyphp itphp'sphp directphp valuephp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_partsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp userphp submittedphp defaultphp valuesphp forphp routephp'sphp variablesphp.php Namephp andphp valuephp pairsphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp userphp submittedphp regularphp expressionphp patternsphp forphp routephp'sphp variablesphp'php valuesphp.
php php php php php php*php Namephp andphp valuephp pairsphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_requirementsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp scheme
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_schemephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp filledphp onphp matchphp(php)php thatphp holdsphp matchedphp pathphp values
php php php php php php*php forphp givenphp variablephp namesphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_valuesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentphp requestphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_requestphp;

php php php php php/php*php*
php php php php php php*php Helperphp varphp thatphp holdsphp aphp countphp ofphp routephp patternphp'sphp staticphp parts
php php php php php php*php forphp validation
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp php$php_staticCountphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Setphp thephp requestphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp|nullphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_requestphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_requestphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getRequestphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Instantiatesphp routephp basedphp onphp passedphp Zendphp_Configphp structure
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$configphp Configurationphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$reqsphp php php php=php php(php$configphp-php>reqsphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>reqsphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php php$defsphp php php php=php php(php$configphp-php>defaultsphp instanceofphp Zendphp_Configphp)php php?php php$configphp-php>defaultsphp-php>toArrayphp(php)php php:php arrayphp(php)php;
php php php php php php php php php$schemephp php=php php(issetphp(php$configphp-php>schemephp)php)php php?php php$configphp-php>schemephp php:php nullphp;
php php php php php php php php returnphp newphp selfphp(php$configphp-php>routephp,php php$defsphp,php php$reqsphp,php php$schemephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparesphp thephp routephp forphp mappingphp byphp splittingphp php(explodingphp)php it
php php php php php php*php tophp aphp correspondingphp atomicphp partsphp.php Thesephp partsphp arephp assigned
php php php php php php*php aphp positionphp whichphp isphp laterphp usedphp forphp matchingphp andphp preparingphp valuesphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$routephp Mapphp usedphp tophp matchphp withphp laterphp submittedphp hostname
php php php php php php*php php@paramphp arrayphp php php$defaultsphp Defaultsphp forphp mapphp variablesphp withphp keysphp asphp variablephp names
php php php php php php*php php@paramphp arrayphp php php$reqsphp Regularphp expressionphp requirementsphp forphp variablesphp php(keysphp asphp variablephp namesphp)
php php php php php php*php php@paramphp stringphp php$scheme
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$routephp,php php$defaultsphp php=php arrayphp(php)php,php php$reqsphp php=php arrayphp(php)php,php php$schemephp php=php nullphp)
php php php php php{
php php php php php php php php php$routephp php php php php php php php php php php php php php php php=php trimphp(php$routephp,php php'php.php'php)php;
php php php php php php php php php$thisphp-php>php_defaultsphp php php php php php=php php(arrayphp)php php$defaultsphp;
php php php php php php php php php$thisphp-php>php_requirementsphp php=php php(arrayphp)php php$reqsphp;
php php php php php php php php php$thisphp-php>php_schemephp php php php php php php php=php php$schemephp;

php php php php php php php php ifphp php(php$routephp php!php=php php'php'php)php php{
php php php php php php php php php php php php foreachphp php(explodephp(php'php.php'php,php php$routephp)php asphp php$posphp php=php>php php$partphp)php php{
php php php php php php php php php php php php php php php php ifphp php(substrphp(php$partphp,php php0php,php php1php)php php=php=php php$thisphp-php>php_hostVariablephp)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php substrphp(php$partphp,php php1php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_partsphp[php$posphp]php php=php php(issetphp(php$reqsphp[php$namephp]php)php php?php php$reqsphp[php$namephp]php php:php php$thisphp-php>php_defaultRegexphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_variablesphp[php$posphp]php php=php php$namephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_partsphp[php$posphp]php php=php php$partphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_staticCountphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchesphp aphp userphp submittedphp pathphp withphp partsphp definedphp byphp aphp mapphp.php Assignsphp and
php php php php php php*php returnsphp anphp arrayphp ofphp variablesphp onphp aphp successfulphp matchphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Httpphp php$requestphp Requestphp tophp getphp thephp hostphp from
php php php php php php*php php@returnphp arrayphp|falsephp Anphp arrayphp ofphp assignedphp valuesphp orphp aphp falsephp onphp aphp mismatch
php php php php php php*php/
php php php php publicphp functionphp matchphp(php$requestphp)
php php php php php{
php php php php php php php php php/php/php Checkphp thephp schemephp ifphp required
php php php php php php php php ifphp php(php$thisphp-php>php_schemephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$schemephp php=php php$requestphp-php>getSchemephp(php)php;

php php php php php php php php php php php php ifphp php(php$schemephp php!php=php=php php$thisphp-php>php_schemephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Getphp thephp hostphp andphp removephp unnecessaryphp portphp information
php php php php php php php php php$hostphp php=php php$requestphp-php>getHttpHostphp(php)php;
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php:php\dphp+php$php#php'php,php php$hostphp,php php$resultphp)php php=php=php=php php1php)php php{
php php php php php php php php php php php php php$hostphp php=php substrphp(php$hostphp,php php0php,php php-strlenphp(php$resultphp[php0php]php)php)php;
php php php php php php php php php}

php php php php php php php php php$hostStaticCountphp php=php php0php;
php php php php php php php php php$valuesphp php=php arrayphp(php)php;

php php php php php php php php php$hostphp php=php trimphp(php$hostphp,php php'php.php'php)php;

php php php php php php php php ifphp php(php$hostphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php$hostphp php=php explodephp(php'php.php'php,php php$hostphp)php;

php php php php php php php php php php php php foreachphp php(php$hostphp asphp php$posphp php=php>php php$hostPartphp)php php{
php php php php php php php php php php php php php php php php php/php/php Hostphp isphp longerphp thanphp aphp routephp,php itphp'sphp notphp aphp match
php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$posphp,php php$thisphp-php>php_partsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$namephp php=php issetphp(php$thisphp-php>php_variablesphp[php$posphp]php)php php?php php$thisphp-php>php_variablesphp[php$posphp]php php:php nullphp;
php php php php php php php php php php php php php php php php php$hostPartphp php=php urldecodephp(php$hostPartphp)php;

php php php php php php php php php php php php php php php php php/php/php Ifphp itphp'sphp aphp staticphp partphp,php matchphp directly
php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php=php nullphp php&php&php php$thisphp-php>php_partsphp[php$posphp]php php!php=php php$hostPartphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Ifphp itphp'sphp aphp variablephp withphp requirementphp,php matchphp aphp regexphp.php Ifphp notphp php-php everythingphp matches
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_partsphp[php$posphp]php php!php=php=php nullphp php&php&php php!pregphp_matchphp(php$thisphp-php>php_regexDelimiterphp php.php php'php^php'php php.php php$thisphp-php>php_partsphp[php$posphp]php php.php php'php$php'php php.php php$thisphp-php>php_regexDelimiterphp php.php php'iuphp'php,php php$hostPartphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Ifphp itphp'sphp aphp variablephp storephp itphp'sphp valuephp forphp later
php php php php php php php php php php php php php php php php ifphp php(php$namephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php$namephp]php php=php php$hostPartphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$hostStaticCountphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp ifphp allphp staticphp mappingsphp havephp beenphp matched
php php php php php php php php ifphp php(php$thisphp-php>php_staticCountphp php!php=php php$hostStaticCountphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$valuesphp php+php php$thisphp-php>php_defaultsphp;

php php php php php php php php php/php/php Checkphp ifphp allphp mapphp variablesphp havephp beenphp initialized
php php php php php php php php foreachphp php(php$thisphp-php>php_variablesphp asphp php$varphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$varphp,php php$returnphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp;

php php php php php php php php returnphp php$returnphp;

php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp userphp submittedphp parametersphp formingphp aphp hostnamephp definedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$dataphp Anphp arrayphp ofphp variablephp andphp valuephp pairsphp usedphp asphp parameters
php php php php php php*php php@paramphp php booleanphp php$resetphp Whetherphp orphp notphp tophp setphp routephp defaultsphp withphp thosephp providedphp inphp php$data
php php php php php php*php php@returnphp stringphp Routephp pathphp withphp userphp submittedphp parameters
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$dataphp php=php arrayphp(php)php,php php$resetphp php=php falsephp,php php$encodephp php=php falsephp,php php$partialphp php=php falsephp)
php php php php php{
php php php php php php php php php$hostphp php=php arrayphp(php)php;
php php php php php php php php php$flagphp php=php falsephp;

php php php php php php php php foreachphp php(php$thisphp-php>php_partsphp asphp php$keyphp php=php>php php$partphp)php php{
php php php php php php php php php php php php php$namephp php=php issetphp(php$thisphp-php>php_variablesphp[php$keyphp]php)php php?php php$thisphp-php>php_variablesphp[php$keyphp]php php:php nullphp;

php php php php php php php php php php php php php$useDefaultphp php=php falsephp;
php php php php php php php php php php php php ifphp php(issetphp(php$namephp)php php&php&php arrayphp_keyphp_existsphp(php$namephp,php php$dataphp)php php&php&php php$dataphp[php$namephp]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$useDefaultphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php$namephp]php)php php&php&php php!php$useDefaultphp)php php{
php php php php php php php php php php php php php php php php php php php php php$hostphp[php$keyphp]php php=php php$dataphp[php$namephp]php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$dataphp[php$namephp]php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(php!php$resetphp php&php&php php!php$useDefaultphp php&php&php issetphp(php$thisphp-php>php_valuesphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$hostphp[php$keyphp]php php=php php$thisphp-php>php_valuesphp[php$namephp]php;
php php php php php php php php php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_defaultsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$hostphp[php$keyphp]php php=php php$thisphp-php>php_defaultsphp[php$namephp]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Routerphp_Exceptionphp(php$namephp php.php php'php isphp notphp specifiedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$hostphp[php$keyphp]php php=php php$partphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php'php'php;

php php php php php php php php foreachphp php(arrayphp_reversephp(php$hostphp,php truephp)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$flagphp php|php|php php!issetphp(php$thisphp-php>php_variablesphp[php$keyphp]php)php php|php|php php$valuephp php!php=php=php php$thisphp-php>getDefaultphp(php$thisphp-php>php_variablesphp[php$keyphp]php)php php|php|php php$partialphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$encodephp)php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php$returnphp php=php php'php.php'php php.php php$valuephp php.php php$returnphp;
php php php php php php php php php php php php php php php php php$flagphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$urlphp php=php trimphp(php$returnphp,php php'php.php'php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_schemephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$schemephp php=php php$thisphp-php>php_schemephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php php php php ifphp php(php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php php{
php php php php php php php php php php php php php php php php php$schemephp php=php php$requestphp-php>getSchemephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$schemephp php=php php'httpphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$hostnamephp php=php implodephp(php'php.php'php,php php$hostphp)php;
php php php php php php php php php$urlphp php php php php php php=php php$schemephp php.php php'php:php/php/php'php php.php php$urlphp;

php php php php php php php php returnphp php$urlphp;
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
php php php php php php php php returnphp nullphp;
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
php php php php php php php php returnphp php$thisphp-php>php_variablesphp;
php php php php php}
php}
