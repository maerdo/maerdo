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
php php*php php@versionphp php php php php$Idphp:php Controllerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Controller
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php php/php*php*
php php php php php php*php createResourcephp willphp createphp thephp controllerFilephp resourcephp atphp thephp appropriatephp locationphp inphp the
php php php php php php*php profilephp.php php NOTEphp:php itphp isphp yourphp jobphp tophp executephp thephp createphp(php)php methodphp onphp thephp resourcephp,php asphp wellphp as
php php php php php php*php storephp thephp profilephp whenphp donephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$controllerNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Controllerphp:php:createResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$controllersDirectoryphp php=php selfphp:php:php_getControllersDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php)php)php php{
php php php php php php php php php php php php ifphp php(php$moduleNamephp)php php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp controllerphp directoryphp forphp modulephp php"php'php php.php php$moduleNamephp php.php php'php"php wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp controllerphp directoryphp wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php$exceptionMessagephp)php;
php php php php php php php php php}

php php php php php php php php php$newControllerphp php=php php$controllersDirectoryphp-php>createResourcephp(
php php php php php php php php php php php php php'controllerFilephp'php,
php php php php php php php php php php php php arrayphp(php'controllerNamephp'php php=php>php php$controllerNamephp,php php'moduleNamephp'php php=php>php php$moduleNamephp)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$newControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp hasResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$controllerNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Controllerphp:php:createResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$controllersDirectoryphp php=php selfphp:php:php_getControllersDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php;
php php php php php php php php returnphp php(php(php$controllersDirectoryphp-php>searchphp(arrayphp(php'controllerFilephp'php php=php>php arrayphp(php'controllerNamephp'php php=php>php php$controllerNamephp)php)php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getControllersDirectoryResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getControllersDirectoryResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'controllersDirectoryphp'php;

php php php php php php php php returnphp php$profilephp-php>searchphp(php$profileSearchParamsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp controller
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Thephp namephp ofphp thephp controllerphp tophp createphp,php inphp camelCasephp.
php php php php php php*php php@paramphp boolphp php$indexActionIncludedphp Whetherphp orphp notphp tophp createphp thephp indexphp actionphp.
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$indexActionIncludedphp php=php truephp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php/php/php determinephp ifphp testingphp isphp enabledphp inphp thephp project
php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Testphp.phpphp'php;
php php php php php php php php php$testingEnabledphp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:isTestingEnabledphp(php$thisphp-php>php_loadedProfilephp)php;

php php php php php php php php ifphp php(selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp alreadyphp hasphp aphp controllerphp namedphp php'php php.php php$namephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp thatphp therephp isphp notphp aphp dashphp orphp underscorephp,php returnphp ifphp doesntphp matchphp regex
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php[php_php-php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Controllerphp namesphp shouldphp bephp camelphp casedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$originalNamephp php=php php$namephp;
php php php php php php php php php$namephp php=php ucfirstphp(php$namephp)php;

php php php php php php php php php/php/php getphp requestphp php&php response
php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$controllerResourcephp php=php selfphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php;
php php php php php php php php php php php php ifphp php(php$indexActionIncludedphp)php php{
php php php php php php php php php php php php php php php php php$indexActionResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Actionphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php'indexphp'php,php php$namephp,php php$modulephp)php;
php php php php php php php php php php php php php php php php php$indexActionViewResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php'indexphp'php,php php$namephp,php php$modulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$testingEnabledphp)php php{
php php php php php php php php php php php php php php php php php$testControllerResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:createApplicationResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php'indexphp'php,php php$modulephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php determimephp ifphp wephp needphp tophp notephp tophp thephp userphp aboutphp thephp name
php php php php php php php php ifphp php(php(php$namephp php!php=php=php php$originalNamephp)php)php php{
php php php php php php php php php php php php php$tensephp php=php php(php(php$requestphp-php>isPretendphp(php)php)php php?php php'wouldphp bephp'php php:php php'isphp'php)php;
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php Thephp canonicalphp controllerphp namephp thatphp php'php php.php php$tense
php php php php php php php php php php php php php php php php php php php php php.php php'php usedphp withphp otherphp providersphp isphp php"php'php php.php php$namephp php.php php'php"php;php'
php php php php php php php php php php php php php php php php php php php php php.php php'php notphp php"php'php php.php php$originalNamephp php.php php'php"php asphp suppliedphp'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php arrayphp(php'yellowphp'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php unsetphp(php$tensephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php dophp thephp creation
php php php php php php php php ifphp php(php$requestphp-php>isPretendphp(php)php)php php{

php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp controllerphp atphp php'php php php.php php$controllerResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;

php php php php php php php php php php php php ifphp php(issetphp(php$indexActionResourcephp)php)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp anphp indexphp actionphp methodphp inphp controllerphp php'php php.php php$namephp)php;
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp viewphp scriptphp forphp thephp indexphp actionphp methodphp atphp php'php php.php php$indexActionViewResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$testControllerResourcephp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp controllerphp testphp filephp atphp php'php php.php php$testControllerResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp controllerphp atphp php'php php.php php$controllerResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$controllerResourcephp-php>createphp(php)php;

php php php php php php php php php php php php ifphp php(issetphp(php$indexActionResourcephp)php)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp anphp indexphp actionphp methodphp inphp controllerphp php'php php.php php$namephp)php;
php php php php php php php php php php php php php php php php php$indexActionResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp viewphp scriptphp forphp thephp indexphp actionphp methodphp atphp php'php php.php php$indexActionViewResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$indexActionViewResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$testControllerResourcephp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp controllerphp testphp filephp atphp php'php php.php php$testControllerResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$testControllerResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}



php}
