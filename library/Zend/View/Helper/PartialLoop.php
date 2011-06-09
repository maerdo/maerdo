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
php php*php php@versionphp php php php php$Idphp:php PartialLoopphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Partialphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Partialphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp renderingphp aphp templatephp fragmentphp inphp itsphp ownphp variablephp scopephp;php iterates
php php*php overphp dataphp providedphp andphp rendersphp forphp eachphp iterationphp.
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_PartialLoopphp extendsphp Zendphp_Viewphp_Helperphp_Partial
php{

php php php php php/php*php*
php php php php php php*php Markerphp tophp wherephp thephp pointerphp isphp atphp inphp thephp loop
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$partialCounterphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Rendersphp aphp templatephp fragmentphp withinphp aphp variablephp scopephp distinctphp fromphp the
php php php php php php*php callingphp Viewphp objectphp.
php php php php php php*
php php php php php php*php Ifphp nophp argumentsphp arephp providedphp,php returnsphp objectphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Namephp ofphp viewphp script
php php php php php php*php php@paramphp php stringphp|arrayphp php$modulephp Ifphp php$modelphp isphp emptyphp,php andphp php$modulephp isphp anphp arrayphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thesephp arephp thephp variablesphp tophp populatephp inphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php viewphp.php Otherwisephp,php thephp modulephp inphp whichphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php partialphp resides
php php php php php php*php php@paramphp php arrayphp php$modelphp Variablesphp tophp populatephp inphp thephp view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp partialLoopphp(php$namephp php=php nullphp,php php$modulephp php=php nullphp,php php$modelphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php0php php=php=php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(nullphp php=php=php=php php$modelphp)php php&php&php php(nullphp php!php=php=php php$modulephp)php)php php{
php php php php php php php php php php php php php$modelphp php php=php php$modulephp;
php php php php php php php php php php php php php$modulephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$modelphp)
php php php php php php php php php php php php php&php&php php(php!php$modelphp instanceofphp Traversablephp)
php php php php php php php php php php php php php&php&php php(isphp_objectphp(php$modelphp)php php&php&php php!methodphp_existsphp(php$modelphp,php php'toArrayphp'php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Partialphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Helperphp_Partialphp_Exceptionphp(php'PartialLoopphp helperphp requiresphp iterablephp dataphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_objectphp(php$modelphp)
php php php php php php php php php php php php php&php&php php(php!php$modelphp instanceofphp Traversablephp)
php php php php php php php php php php php php php&php&php methodphp_existsphp(php$modelphp,php php'toArrayphp'php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$modelphp php=php php$modelphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php php'php'php;
php php php php php php php php php/php/php resetphp thephp counterphp ifphp itphp'sphp callphp again
php php php php php php php php php$thisphp-php>partialCounterphp php=php php0php;
php php php php php php php php foreachphp php(php$modelphp asphp php$itemphp)php php{
php php php php php php php php php php php php php/php/php incrementphp thephp counterphp variable
php php php php php php php php php php php php php$thisphp-php>partialCounterphp+php+php;

php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>partialphp(php$namephp,php php$modulephp,php php$itemphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$contentphp;
php php php php php}
php}
