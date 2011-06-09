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
php php*php php@packagephp php php php Zendphp_Navigation
php php*php php@subpackagephp Page
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mvcphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Navigationphp_Page
php php*php/
requirephp_oncephp php'Zendphp/Navigationphp/Pagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_HelperBroker
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;

php/php*php*
php php*php Usedphp tophp checkphp ifphp pagephp isphp active
php php*
php php*php php@seephp Zendphp_Controllerphp_Front
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;

php/php*php*
php php*php Representsphp aphp pagephp thatphp isphp definedphp usingphp modulephp,php controllerphp,php actionphp,php route
php php*php namephp andphp routephp paramsphp tophp assemblephp thephp href
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Navigation
php php*php php@subpackagephp Page
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Navigationphp_Pagephp_Mvcphp extendsphp Zendphp_Navigationphp_Page
php{
php php php php php/php*php*
php php php php php php*php Actionphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_actionphp;

php php php php php/php*php*
php php php php php php*php Controllerphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_controllerphp;

php php php php php/php*php*
php php php php php php*php Modulephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modulephp;

php php php php php/php*php*
php php php php php php*php Paramsphp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Routephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_routephp;

php php php php php/php*php*
php php php php php php*php Whetherphp paramsphp shouldphp bephp resetphp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_resetParamsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Cachedphp href
php php php php php php*
php php php php php php*php Thephp usephp ofphp thisphp variablephp minimizesphp executionphp timephp whenphp getHrefphp(php)php is
php php php php php php*php calledphp morephp thanphp oncephp duringphp thephp lifetimephp ofphp aphp requestphp.php Ifphp aphp property
php php php php php php*php isphp updatedphp,php thephp cachephp isphp invalidatedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hrefCachephp;

php php php php php/php*php*
php php php php php php*php Actionphp helperphp forphp assemblingphp URLs
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*php php@varphp Zendphp_Controllerphp_Actionphp_Helperphp_Url
php php php php php php*php/
php php php php protectedphp staticphp php$php_urlHelperphp php=php nullphp;

php php php php php/php/php Accessorsphp:

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp pagephp shouldphp bephp consideredphp activephp orphp not
php php php php php php*
php php php php php php*php Thisphp methodphp willphp comparephp thephp pagephp propertiesphp againstphp thephp requestphp object
php php php php php php*php thatphp isphp foundphp inphp thephp frontphp controllerphp.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$recursivephp php php[optionalphp]php whetherphp pagephp shouldphp bephp considered
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php activephp ifphp anyphp childphp pagesphp arephp activephp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp.
php php php php php php*php php@returnphp boolphp php php php php php php php php php php php php whetherphp pagephp shouldphp bephp consideredphp activephp orphp not
php php php php php php*php/
php php php php publicphp functionphp isActivephp(php$recursivephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_activephp)php php{
php php php php php php php php php php php php php$frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php php php php php$reqParamsphp php=php php$frontphp-php>getRequestphp(php)php-php>getParamsphp(php)php;

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'modulephp'php,php php$reqParamsphp)php)php php{
php php php php php php php php php php php php php php php php php$reqParamsphp[php'modulephp'php]php php=php php$frontphp-php>getDefaultModulephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$myParamsphp php=php php$thisphp-php>php_paramsphp;

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_modulephp)php php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'modulephp'php]php php=php php$thisphp-php>php_modulephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'modulephp'php]php php=php php$frontphp-php>getDefaultModulephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_controllerphp)php php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'controllerphp'php]php php=php php$thisphp-php>php_controllerphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'controllerphp'php]php php=php php$frontphp-php>getDefaultControllerNamephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_actionphp)php php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'actionphp'php]php php=php php$thisphp-php>php_actionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$myParamsphp[php'actionphp'php]php php=php php$frontphp-php>getDefaultActionphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(arrayphp_intersectphp_assocphp(php$reqParamsphp,php php$myParamsphp)php)php php=php=
php php php php php php php php php php php php php php php php countphp(php$myParamsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_activephp php=php truephp;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:isActivephp(php$recursivephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp hrefphp forphp thisphp page
php php php php php php*
php php php php php php*php Thisphp methodphp usesphp php{php@linkphp Zendphp_Controllerphp_Actionphp_Helperphp_Urlphp}php tophp assemble
php php php php php php*php thephp hrefphp basedphp onphp thephp pagephp'sphp propertiesphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp php pagephp href
php php php php php php*php/
php php php php publicphp functionphp getHrefphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_hrefCachephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_hrefCachephp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_urlHelperphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_urlHelperphp php=
php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'Urlphp'php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php php$thisphp-php>getParamsphp(php)php;

php php php php php php php php ifphp php(php$paramphp php=php php$thisphp-php>getModulephp(php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'modulephp'php]php php=php php$paramphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramphp php=php php$thisphp-php>getControllerphp(php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'controllerphp'php]php php=php php$paramphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramphp php=php php$thisphp-php>getActionphp(php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'actionphp'php]php php=php php$paramphp;
php php php php php php php php php}

php php php php php php php php php$urlphp php=php selfphp:php:php$php_urlHelperphp-php>urlphp(php$paramsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getRoutephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResetParamsphp(php)php)php;

php php php php php php php php returnphp php$thisphp-php>php_hrefCachephp php=php php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp actionphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$actionphp php php php php php php php php php php php php actionphp name
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp invalidphp php$actionphp isphp given
php php php php php php*php/
php php php php publicphp functionphp setActionphp(php$actionphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$actionphp php&php&php php!isphp_stringphp(php$actionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$actionphp mustphp bephp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_actionphp php=php php$actionphp;
php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp actionphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp|nullphp php actionphp name
php php php php php php*php/
php php php php publicphp functionphp getActionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp controllerphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$controllerphp php php php controllerphp name
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp invalidphp controllerphp namephp isphp given
php php php php php php*php/
php php php php publicphp functionphp setControllerphp(php$controllerphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$controllerphp php&php&php php!isphp_stringphp(php$controllerphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$controllerphp mustphp bephp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_controllerphp php=php php$controllerphp;
php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp controllerphp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp|nullphp php controllerphp namephp orphp null
php php php php php php*php/
php php php php publicphp functionphp getControllerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_controllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp modulephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$modulephp php php php php php php php modulephp name
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp invalidphp modulephp namephp isphp given
php php php php php php*php/
php php php php publicphp functionphp setModulephp(php$modulephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$modulephp php&php&php php!isphp_stringphp(php$modulephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$modulephp mustphp bephp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_modulephp php=php php$modulephp;
php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp modulephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp|nullphp php modulephp namephp orphp null
php php php php php php*php/
php php php php publicphp functionphp getModulephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_modulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp paramsphp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|nullphp php$paramsphp php php php php php php php php[optionalphp]php pagephp paramsphp.php Defaultphp isphp null
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php whichphp setsphp nophp paramsphp.
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$paramsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_paramsphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php TODOphp:php dophp thisphp morephp intelligentlyphp?
php php php php php php php php php php php php php$thisphp-php>php_paramsphp php=php php$paramsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp paramsphp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp php pagephp params
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp routephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$routephp php php php php php php php php php php php php php routephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp invalidphp php$routephp isphp given
php php php php php php*php/
php php php php publicphp functionphp setRoutephp(php$routephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$routephp php&php&php php(php!isphp_stringphp(php$routephp)php php|php|php strlenphp(php$routephp)php <php php1php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$routephp mustphp bephp aphp nonphp-emptyphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_routephp php=php php$routephp;
php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp routephp namephp tophp usephp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp php routephp name
php php php php php php*php/
php php php php publicphp functionphp getRoutephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_routephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp paramsphp shouldphp bephp resetphp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$resetParamsphp php php php php php php php php whetherphp paramsphp shouldphp bephp resetphp when
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php assemblingphp URL
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp_Mvcphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setResetParamsphp(php$resetParamsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resetParamsphp php=php php(boolphp)php php$resetParamsphp;
php php php php php php php php php$thisphp-php>php_hrefCachephp php=php nullphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp paramsphp shouldphp bephp resetphp whenphp assemblingphp URL
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp paramsphp shouldphp bephp resetphp whenphp assemblingphp URL
php php php php php php*php/
php php php php publicphp functionphp getResetParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resetParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp actionphp helperphp forphp assemblingphp URLs
php php php php php php*
php php php php php php*php php@seephp getHrefphp(php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Actionphp_Helperphp_Urlphp php$uhphp php URLphp helper
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setUrlHelperphp(Zendphp_Controllerphp_Actionphp_Helperphp_Urlphp php$uhphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_urlHelperphp php=php php$uhphp;
php php php php php}

php php php php php/php/php Publicphp methodsphp:

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp representationphp ofphp thephp page
php php php php php php*
php php php php php php*php php@returnphp arrayphp php associativephp arrayphp containingphp allphp pagephp properties
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_mergephp(
php php php php php php php php php php php php parentphp:php:toArrayphp(php)php,
php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php'actionphp'php php php php php php php php=php>php php$thisphp-php>getActionphp(php)php,
php php php php php php php php php php php php php php php php php'controllerphp'php php php php=php>php php$thisphp-php>getControllerphp(php)php,
php php php php php php php php php php php php php php php php php'modulephp'php php php php php php php php=php>php php$thisphp-php>getModulephp(php)php,
php php php php php php php php php php php php php php php php php'paramsphp'php php php php php php php php=php>php php$thisphp-php>getParamsphp(php)php,
php php php php php php php php php php php php php php php php php'routephp'php php php php php php php php php=php>php php$thisphp-php>getRoutephp(php)php,
php php php php php php php php php php php php php php php php php'resetphp_paramsphp'php php=php>php php$thisphp-php>getResetParamsphp(php)
php php php php php php php php php php php php php)php)php;
php php php php php}
php}
