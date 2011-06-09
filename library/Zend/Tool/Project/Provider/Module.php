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
php php*php php@versionphp php php php php$Idphp:php Modulephp.phpphp php2php3php4php1php9php php2php0php1php0php-php1php1php-php2php0php php2php1php:php3php7php:php4php6Zphp ramonphp php$
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
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilter
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Iteratorphp/ContextFilterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_EnabledResourceFilter
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Iteratorphp/EnabledResourceFilterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Module
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php publicphp staticphp functionphp createResourcesphp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$moduleNamephp,php Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$targetModuleResourcephp php=php nullphp)
php php php php php{

php php php php php php php php php/php/php findphp thephp applictionphp directoryphp,php itphp willphp servephp asphp ourphp modulephp skeleton
php php php php php php php php ifphp php(php$targetModuleResourcephp php=php=php nullphp)php php{
php php php php php php php php php php php php php$targetModuleResourcephp php=php php$profilephp-php>searchphp(php'applicationDirectoryphp'php)php;
php php php php php php php php php php php php php$targetModuleEnabledResourcesphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'ControllersDirectoryphp'php,php php'ModelsDirectoryphp'php,php php'ViewsDirectoryphp'php,
php php php php php php php php php php php php php php php php php'ViewScriptsDirectoryphp'php,php php'ViewHelpersDirectoryphp'php,php php'ViewFiltersDirectoryphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php findphp thephp actualphp modulesphp directoryphp wephp willphp usephp tophp housephp ourphp module
php php php php php php php php php$modulesDirectoryphp php=php php$profilephp-php>searchphp(php'modulesDirectoryphp'php)php;

php php php php php php php php php/php/php ifphp therephp isphp aphp modulephp directoryphp alreadyphp,php except
php php php php php php php php ifphp php(php$modulesDirectoryphp-php>searchphp(arrayphp(php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Aphp modulephp namedphp php"php'php php.php php$moduleNamephp php.php php'php"php alreadyphp existsphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php createphp thephp modulephp directory
php php php php php php php php php$moduleDirectoryphp php=php php$modulesDirectoryphp-php>createResourcephp(php'moduleDirectoryphp'php,php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;

php php php php php php php php php/php/php createphp aphp contextphp filterphp sophp thatphp wephp canphp pullphp outphp onlyphp whatphp wephp needphp fromphp thephp modulephp skeleton
php php php php php php php php php$moduleContextFilterIteratorphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilterphp(
php php php php php php php php php php php php php$targetModuleResourcephp,
php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php'denyNamesphp'php php=php>php arrayphp(php'ModulesDirectoryphp'php,php php'ViewControllerScriptsDirectoryphp'php)php,
php php php php php php php php php php php php php php php php php'denyTypephp'php php php=php>php php'Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Filephp'
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php;

php php php php php php php php php/php/php thephp iteratorphp forphp thephp modulephp skeleton
php php php php php php php php php$targetIteratorphp php=php newphp RecursiveIteratorIteratorphp(php$moduleContextFilterIteratorphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;

php php php php php php php php php/php/php initializephp somephp loopphp statephp information
php php php php php php php php php$currentDepthphp php=php php0php;
php php php php php php php php php$parentResourcesphp php=php arrayphp(php)php;
php php php php php php php php php$currentResourcephp php=php php$moduleDirectoryphp;

php php php php php php php php php/php/php loopphp throughphp thephp targetphp modulephp skeleton
php php php php php php php php foreachphp php(php$targetIteratorphp asphp php$targetSubResourcephp)php php{

php php php php php php php php php php php php php$depthDifferencephp php=php php$targetIteratorphp-php>getDepthphp(php)php php-php php$currentDepthphp;
php php php php php php php php php php php php php$currentDepthphp php=php php$targetIteratorphp-php>getDepthphp(php)php;

php php php php php php php php php php php php ifphp php(php$depthDifferencephp php=php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php/php/php ifphp wephp wentphp downphp intophp aphp childphp,php makephp note
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$parentResourcesphp,php php$currentResourcephp)php;
php php php php php php php php php php php php php php php php php/php/php thisphp willphp havephp alwaysphp beenphp setphp previouslyphp byphp anotherphp loop
php php php php php php php php php php php php php php php php php$currentResourcephp php=php php$currentChildResourcephp;
php php php php php php php php php php php php php}php elseifphp php(php$depthDifferencephp <php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php ifphp wephp wentphp upphp tophp aphp parentphp,php makephp note
php php php php php php php php php php php php php php php php php$iphp php=php php$depthDifferencephp;
php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php/php/php ifphp wephp wentphp outphp morephp thanphp php1php parentphp,php getphp tophp thephp correctphp parent
php php php php php php php php php php php php php php php php php php php php php$currentResourcephp php=php arrayphp_popphp(php$parentResourcesphp)php;
php php php php php php php php php php php php php php php php php}php whilephp php(php$iphp-php-php php>php php0php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php getphp parametersphp forphp thephp newlyphp createdphp modulephp resource
php php php php php php php php php php php php php$paramsphp php=php php$targetSubResourcephp-php>getAttributesphp(php)php;
php php php php php php php php php php php php php$currentChildResourcephp php=php php$currentResourcephp-php>createResourcephp(php$targetSubResourcephp-php>getNamephp(php)php,php php$paramsphp)php;

php php php php php php php php php php php php php/php/php basedphp ofphp thephp providedphp listphp php(Currentlyphp upphp topphp)php,php enablephp specificphp resources
php php php php php php php php php php php php ifphp php(issetphp(php$targetModuleEnabledResourcesphp)php)php php{
php php php php php php php php php php php php php php php php php$currentChildResourcephp-php>setEnabledphp(inphp_arrayphp(php$targetSubResourcephp-php>getNamephp(php)php,php php$targetModuleEnabledResourcesphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$currentChildResourcephp-php>setEnabledphp(php$targetSubResourcephp-php>isEnabledphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$moduleDirectoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp)php php/php/php,php php$moduleProfilephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$resourcesphp php=php selfphp:php:createResourcesphp(php$thisphp-php>php_loadedProfilephp,php php$namephp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Iphp wouldphp createphp thephp followingphp modulephp andphp artifactsphp:php'php)php;
php php php php php php php php php php php php foreachphp php(newphp RecursiveIteratorIteratorphp(php$resourcesphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_callablephp(arrayphp(php$resourcephp-php>getContextphp(php)php,php php'getPathphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php$resourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp thephp followingphp modulephp andphp artifactsphp:php'php)php;
php php php php php php php php php php php php php$enabledFilterphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_EnabledResourceFilterphp(php$resourcesphp)php;
php php php php php php php php php php php php foreachphp php(newphp RecursiveIteratorIteratorphp(php$enabledFilterphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php$resourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$resourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Addedphp aphp keyphp forphp pathphp modulephp directoryphp tophp thephp applicationphp.iniphp filephp'php)php;
php php php php php php php php php php php php php$appConfigFilephp php=php php$thisphp-php>php_loadedProfilephp-php>searchphp(php'ApplicationConfigFilephp'php)php;
php php php php php php php php php php php php php$appConfigFilephp-php>removeStringItemphp(php'resourcesphp.frontControllerphp.moduleDirectoryphp'php,php php'productionphp'php)php;
php php php php php php php php php php php php php$appConfigFilephp-php>addStringItemphp(php'resourcesphp.frontControllerphp.moduleDirectoryphp'php,php php'APPLICATIONphp_PATHphp php"php/modulesphp"php'php,php php'productionphp'php,php falsephp)php;

php php php php php php php php php php php php ifphp php(strtolowerphp(php$namephp)php php=php=php php'defaultphp'php)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Addedphp aphp keyphp forphp thephp defaultphp modulephp tophp thephp applicationphp.iniphp filephp'php)php;
php php php php php php php php php php php php php php php php php$appConfigFilephp-php>addStringItemphp(php'resourcesphp.frontControllerphp.paramsphp.prefixDefaultModulephp'php,php php'php1php'php,php php'productionphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$appConfigFilephp-php>createphp(php)php;

php php php php php php php php php php php php php/php/php storephp changesphp tophp thephp profile
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}

php}

