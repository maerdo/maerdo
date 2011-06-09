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
php php*php php@versionphp php php php php$Idphp:php Partialphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp renderingphp aphp templatephp fragmentphp inphp itsphp ownphp variablephp scopephp.
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Partialphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Variablephp tophp whichphp objectphp willphp bephp assigned
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_objectKeyphp;

php php php php php/php*php*
php php php php php php*php Rendersphp aphp templatephp fragmentphp withinphp aphp variablephp scopephp distinctphp fromphp the
php php php php php php*php callingphp Viewphp objectphp.
php php php php php php*
php php php php php php*php Ifphp nophp argumentsphp arephp passedphp,php returnsphp thephp helperphp instancephp.
php php php php php php*
php php php php php php*php Ifphp thephp php$modelphp isphp anphp arrayphp,php itphp isphp passedphp tophp thephp viewphp objectphp'sphp assignphp(php)
php php php php php php*php methodphp.
php php php php php php*
php php php php php php*php Ifphp thephp php$modelphp isphp anphp objectphp,php itphp firstphp checksphp tophp seephp ifphp thephp object
php php php php php php*php implementsphp aphp php'toArrayphp'php methodphp;php ifphp sophp,php itphp passesphp thephp resultphp ofphp that
php php php php php php*php methodphp tophp tophp thephp viewphp objectphp'sphp assignphp(php)php methodphp.php Otherwisephp,php thephp resultphp of
php php php php php php*php getphp_objectphp_varsphp(php)php isphp passedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Namephp ofphp viewphp script
php php php php php php*php php@paramphp php stringphp|arrayphp php$modulephp Ifphp php$modelphp isphp emptyphp,php andphp php$modulephp isphp anphp arrayphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thesephp arephp thephp variablesphp tophp populatephp inphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php viewphp.php Otherwisephp,php thephp modulephp inphp whichphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php partialphp resides
php php php php php php*php php@paramphp php arrayphp php$modelphp Variablesphp tophp populatephp inphp thephp view
php php php php php php*php php@returnphp stringphp|Zendphp_Viewphp_Helperphp_Partial
php php php php php php*php/
php php php php publicphp functionphp partialphp(php$namephp php=php nullphp,php php$modulephp php=php nullphp,php php$modelphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php0php php=php=php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$viewphp php=php php$thisphp-php>cloneViewphp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>partialCounterphp)php)php php{
php php php php php php php php php php php php php$viewphp-php>partialCounterphp php=php php$thisphp-php>partialCounterphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$modulephp)php php&php&php isphp_stringphp(php$modulephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php php php php php$moduleDirphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getControllerDirectoryphp(php$modulephp)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$moduleDirphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Partialphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Helperphp_Partialphp_Exceptionphp(php'Cannotphp renderphp partialphp;php modulephp doesphp notphp existphp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$viewsDirphp php=php dirnamephp(php$moduleDirphp)php php.php php'php/viewsphp'php;
php php php php php php php php php php php php php$viewphp-php>addBasePathphp(php$viewsDirphp)php;
php php php php php php php php php}php elseifphp php(php(nullphp php=php=php php$modelphp)php php&php&php php(nullphp php!php=php=php php$modulephp)
php php php php php php php php php php php php php&php&php php(isphp_arrayphp(php$modulephp)php php|php|php isphp_objectphp(php$modulephp)php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$modelphp php=php php$modulephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$modelphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$modelphp)php)php php{
php php php php php php php php php php php php php php php php php$viewphp-php>assignphp(php$modelphp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_objectphp(php$modelphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$objectKeyphp php=php php$thisphp-php>getObjectKeyphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$viewphp-php>assignphp(php$objectKeyphp,php php$modelphp)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(methodphp_existsphp(php$modelphp,php php'toArrayphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$viewphp-php>assignphp(php$modelphp-php>toArrayphp(php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$viewphp-php>assignphp(getphp_objectphp_varsphp(php$modelphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$viewphp-php>renderphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp thephp currentphp View
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp functionphp cloneViewphp(php)
php php php php php{
php php php php php php php php php$viewphp php=php clonephp php$thisphp-php>viewphp;
php php php php php php php php php$viewphp-php>clearVarsphp(php)php;
php php php php php php php php returnphp php$viewphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Partial
php php php php php php*php/
php php php php publicphp functionphp setObjectKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_objectKeyphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_objectKeyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp objectphp key
php php php php php php*
php php php php php php*php Thephp objectKeyphp isphp thephp variablephp tophp whichphp anphp objectphp inphp thephp iteratorphp willphp be
php php php php php php*php assignedphp.
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getObjectKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectKeyphp;
php php php php php}
php}
