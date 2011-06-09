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
php php*php php@versionphp php php php php$Idphp:php Actionphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Pretendablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Action
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
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
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Actionphp:php:createResourcephp(php)php expectsphp php\php"actionNamephp\php"php isphp thephp namephp ofphp aphp actionphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Actionphp:php:createResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$controllerFilephp php=php selfphp:php:php_getControllerFileResourcephp(php$profilephp,php php$controllerNamephp,php php$moduleNamephp)php;

php php php php php php php php php$actionMethodphp php=php php$controllerFilephp-php>createResourcephp(php'ActionMethodphp'php,php arrayphp(php'actionNamephp'php php=php>php php$actionNamephp)php)php;

php php php php php php php php returnphp php$actionMethodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp hasResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$actionNamephp,php php$controllerNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$actionNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Actionphp:php:createResourcephp(php)php expectsphp php\php"actionNamephp\php"php isphp thephp namephp ofphp aphp actionphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Actionphp:php:createResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$controllerFilephp php=php selfphp:php:php_getControllerFileResourcephp(php$profilephp,php php$controllerNamephp,php php$moduleNamephp)php;

php php php php php php php php ifphp php(php$controllerFilephp php=php=php nullphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Controllerphp php'php php.php php$controllerNamephp php.php php'php wasphp notphp foundphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(php(php$controllerFilephp-php>searchphp(arrayphp(php'actionMethodphp'php php=php>php arrayphp(php'actionNamephp'php php=php>php php$actionNamephp)php)php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getControllerFileResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getControllerFileResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$controllerNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'controllersDirectoryphp'php;
php php php php php php php php php$profileSearchParamsphp[php'controllerFilephp'php]php php=php arrayphp(php'controllerNamephp'php php=php>php php$controllerNamephp)php;

php php php php php php php php returnphp php$profilephp-php>searchphp(php$profileSearchParamsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php php Actionphp namephp forphp controllerphp,php inphp camelCasephp formatphp.
php php php php php php*php php@paramphp stringphp php$controllerNamephp Controllerphp namephp actionphp shouldphp bephp appliedphp tophp.
php php php php php php*php php@paramphp boolphp php$viewIncludedphp php php php php Whetherphp thephp viewphp shouldphp thephp viewphp bephp includedphp.
php php php php php php*php php@paramphp stringphp php$modulephp php php php php php php php php Modulephp namephp actionphp shouldphp bephp appliedphp tophp.
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$controllerNamephp php=php php'Indexphp'php,php php$viewIncludedphp php=php truephp,php php$modulephp php=php nullphp)
php php php php php{

php php php php php php php php php$thisphp-php>php_loadProfilephp(php)php;

php php php php php php php php php/php/php Checkphp thatphp therephp isphp notphp aphp dashphp orphp underscorephp,php returnphp ifphp doesntphp matchphp regex
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php[php_php-php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Actionphp namesphp shouldphp bephp camelphp casedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$originalNamephp php=php php$namephp;
php php php php php php php php php$originalControllerNamephp php=php php$controllerNamephp;

php php php php php php php php php/php/php ensurephp itphp isphp camelCasephp php(lowerphp firstphp letterphp)
php php php php php php php php php$namephp php=php strtolowerphp(substrphp(php$namephp,php php0php,php php1php)php)php php.php substrphp(php$namephp,php php1php)php;

php php php php php php php php php/php/php ensurephp controllerphp isphp MixedCase
php php php php php php php php php$controllerNamephp php=php ucfirstphp(php$controllerNamephp)php;

php php php php php php php php ifphp php(selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$controllerNamephp,php php$modulephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp controllerphp php(php'php php.php php$controllerNamephp php.php php'php)php alreadyphp hasphp anphp actionphp namedphp php(php'php php.php php$namephp php.php php'php)php'php)php;
php php php php php php php php php}

php php php php php php php php php$actionMethodphp php=php selfphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$controllerNamephp,php php$modulephp)php;

php php php php php php php php php/php/php getphp requestphp/responsephp object
php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php/php/php alertphp thephp userphp aboutphp inlinephp convertedphp names
php php php php php php php php php$tensephp php=php php(php(php$requestphp-php>isPretendphp(php)php)php php?php php'wouldphp bephp'php php:php php'isphp'php)php;

php php php php php php php php ifphp php(php$namephp php!php=php=php php$originalNamephp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php Thephp canonicalphp actionphp namephp thatphp php'php php.php php$tense
php php php php php php php php php php php php php php php php php php php php php.php php'php usedphp withphp otherphp providersphp isphp php"php'php php.php php$namephp php.php php'php"php;php'
php php php php php php php php php php php php php php php php php php php php php.php php'php notphp php"php'php php.php php$originalNamephp php.php php'php"php asphp suppliedphp'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php arrayphp(php'yellowphp'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$controllerNamephp php!php=php=php php$originalControllerNamephp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php Thephp canonicalphp controllerphp namephp thatphp php'php php.php php$tense
php php php php php php php php php php php php php php php php php php php php php.php php'php usedphp withphp otherphp providersphp isphp php"php'php php.php php$controllerNamephp php.php php'php"php;php'
php php php php php php php php php php php php php php php php php php php php php.php php'php notphp php"php'php php.php php$originalControllerNamephp php.php php'php"php asphp suppliedphp'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php arrayphp(php'yellowphp'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$tensephp)php;

php php php php php php php php ifphp php(php$requestphp-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Wouldphp createphp anphp actionphp namedphp php'php php.php php$namephp php.
php php php php php php php php php php php php php php php php php'php insidephp controllerphp atphp php'php php.php php$actionMethodphp-php>getParentResourcephp(php)php-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Creatingphp anphp actionphp namedphp php'php php.php php$namephp php.
php php php php php php php php php php php php php php php php php'php insidephp controllerphp atphp php'php php.php php$actionMethodphp-php>getParentResourcephp(php)php-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$actionMethodphp-php>createphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$viewIncludedphp)php php{
php php php php php php php php php php php php php$viewResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$controllerNamephp,php php$modulephp)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php php php php php'Wouldphp createphp aphp viewphp scriptphp forphp thephp php'php php.php php$namephp php.php php'php actionphp methodphp atphp php'php php.php php$viewResourcephp-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php php php php php'Creatingphp aphp viewphp scriptphp forphp thephp php'php php.php php$namephp php.php php'php actionphp methodphp atphp php'php php.php php$viewResourcephp-php>getContextphp(php)php-php>getPathphp(php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$viewResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php}

php}
