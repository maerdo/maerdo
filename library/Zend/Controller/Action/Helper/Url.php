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
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Urlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp creatingphp URLsphp forphp redirectsphp andphp otherphp tasks
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_Urlphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Createphp URLphp basedphp onphp defaultphp route
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp simplephp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php php$controllerphp php=php php$requestphp-php>getControllerNamephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$modulephp php=php php$requestphp-php>getModuleNamephp(php)php;
php php php php php php php php php}

php php php php php php php php php$urlphp php=php php$controllerphp php.php php'php/php'php php.php php$actionphp;
php php php php php php php php ifphp php(php$modulephp php!php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php-php>getDefaultModulephp(php)php)php php{
php php php php php php php php php php php php php$urlphp php=php php$modulephp php.php php'php/php'php php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php'php'php php!php=php=php php(php$baseUrlphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getBaseUrlphp(php)php)php)php php{
php php php php php php php php php php php php php$urlphp php=php php$baseUrlphp php.php php'php/php'php php.php php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$paramsphp)php php{
php php php php php php php php php php php php php$paramPairsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$paramPairsphp[php]php php=php urlencodephp(php$keyphp)php php.php php'php/php'php php.php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$paramStringphp php=php implodephp(php'php/php'php,php php$paramPairsphp)php;
php php php php php php php php php php php php php$urlphp php.php=php php'php/php'php php.php php$paramStringphp;
php php php php php php php php php}

php php php php php php php php php$urlphp php=php php'php/php'php php.php ltrimphp(php$urlphp,php php'php/php'php)php;

php php php php php php php php returnphp php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblesphp aphp URLphp basedphp onphp aphp givenphp route
php php php php php php*
php php php php php php*php Thisphp methodphp willphp typicallyphp bephp usedphp forphp morephp complexphp operationsphp,php asphp it
php php php php php php*php tiesphp intophp thephp routephp objectsphp registeredphp withphp thephp routerphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$urlOptionsphp Optionsphp passedphp tophp thephp assemblephp methodphp ofphp thephp Routephp objectphp.
php php php php php php*php php@paramphp php mixedphp php php php$namephp php php php php php php Thephp namephp ofphp aphp Routephp tophp usephp.php Ifphp nullphp itphp willphp usephp thephp currentphp Route
php php php php php php*php php@paramphp php booleanphp php$reset
php php php php php php*php php@paramphp php booleanphp php$encode
php php php php php php*php php@returnphp stringphp Urlphp forphp thephp linkphp hrefphp attributephp.
php php php php php php*php/
php php php php publicphp functionphp urlphp(php$urlOptionsphp php=php arrayphp(php)php,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php php$routerphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getRouterphp(php)php;
php php php php php php php php returnphp php$routerphp-php>assemblephp(php$urlOptionsphp,php php$namephp,php php$resetphp,php php$encodephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp helperphp whenphp calledphp asphp php$thisphp-php>php_helperphp-php>urlphp(php)php fromphp anphp actionphp controller
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp simplephp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php stringphp php$controller
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@paramphp php arrayphp php php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp directphp(php$actionphp,php php$controllerphp php=php nullphp,php php$modulephp php=php nullphp,php arrayphp php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>simplephp(php$actionphp,php php$controllerphp,php php$modulephp,php php$paramsphp)php;
php php php php php}
php}
