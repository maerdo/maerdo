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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Viewphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Viewphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php createResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$actionNamephp,php php$controllerNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$actionNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createResourcephp(php)php expectsphp php\php"actionNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php php php php php$noModuleSearchphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$noModuleSearchphp php=php arrayphp(php'modulesDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'viewsDirectoryphp'php;
php php php php php php php php php$profileSearchParamsphp[php]php php=php php'viewScriptsDirectoryphp'php;

php php php php php php php php ifphp php(php(php$viewScriptsDirectoryphp php=php php$profilephp-php>searchphp(php$profileSearchParamsphp,php php$noModuleSearchphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp doesphp notphp havephp aphp viewScriptsDirectoryphp resourcephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php'viewControllerScriptsDirectoryphp'php]php php=php arrayphp(php'forControllerNamephp'php php=php>php php$controllerNamephp)php;

php php php php php php php php php/php/php php@todophp checkphp ifphp belowphp isphp failingphp bphp/cphp ofphp abovephp searchphp params
php php php php php php php php ifphp php(php(php$viewControllerScriptsDirectoryphp php=php php$viewScriptsDirectoryphp-php>searchphp(php$profileSearchParamsphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$viewControllerScriptsDirectoryphp php=php php$viewScriptsDirectoryphp-php>createResourcephp(php'viewControllerScriptsDirectoryphp'php,php arrayphp(php'forControllerNamephp'php php=php>php php$controllerNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$newViewScriptFilephp php=php php$viewControllerScriptsDirectoryphp-php>createResourcephp(php'ViewScriptFilephp'php,php arrayphp(php'forActionNamephp'php php=php>php php$actionNamephp)php)php;

php php php php php php php php returnphp php$newViewScriptFilephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$actionNameOrSimpleName
php php php php php php*php/
php php php php publicphp functionphp createphp(php$controllerNamephp,php php$actionNameOrSimpleNamephp)
php php php php php{

php php php php php php php php ifphp php(php$controllerNamephp php=php=php php'php'php php|php|php php$actionNameOrSimpleNamephp php=php=php php'php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'ControllerNamephp andphp/orphp ActionNamephp arephp emptyphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(php)php;

php php php php php php php php php$viewphp php=php selfphp:php:createResourcephp(php$profilephp,php php$actionNameOrSimpleNamephp,php php$controllerNamephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(
php php php php php php php php php php php php php php php php php'Wouldphp createphp aphp viewphp scriptphp inphp locationphp php'php php.php php$viewphp-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(
php php php php php php php php php php php php php php php php php'Creatingphp aphp viewphp scriptphp inphp locationphp php'php php.php php$viewphp-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$viewphp-php>createphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}
php}
