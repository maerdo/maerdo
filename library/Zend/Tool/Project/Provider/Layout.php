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
php php*php php@versionphp php php php php$Idphp:php Layoutphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
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
classphp Zendphp_Toolphp_Projectphp_Providerphp_Layoutphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstractphp implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$layoutNamephp php=php php'layoutphp'php)
php php php php php{
php php php php php php php php php$applicationDirectoryphp php=php php$profilephp-php>searchphp(php'applicationDirectoryphp'php)php;
php php php php php php php php php$layoutDirectoryphp php=php php$applicationDirectoryphp-php>searchphp(php'layoutsDirectoryphp'php)php;

php php php php php php php php ifphp php(php$layoutDirectoryphp php=php=php falsephp)php php{
php php php php php php php php php php php php php$layoutDirectoryphp php=php php$applicationDirectoryphp-php>createResourcephp(php'layoutsDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$layoutScriptsDirectoryphp php=php php$layoutDirectoryphp-php>searchphp(php'layoutScriptsDirectoryphp'php)php;

php php php php php php php php ifphp php(php$layoutScriptsDirectoryphp php=php=php falsephp)php php{
php php php php php php php php php php php php php$layoutScriptsDirectoryphp php=php php$layoutDirectoryphp-php>createResourcephp(php'layoutScriptsDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$layoutScriptFilephp php=php php$layoutScriptsDirectoryphp-php>searchphp(php'layoutScriptFilephp'php,php arrayphp(php'layoutNamephp'php php=php>php php'layoutphp'php)php)php;

php php php php php php php php ifphp php(php$layoutScriptFilephp php=php=php falsephp)php php{
php php php php php php php php php php php php php$layoutScriptFilephp php=php php$layoutScriptsDirectoryphp-php>createResourcephp(php'layoutScriptFilephp'php,php arrayphp(php'layoutNamephp'php php=php>php php'layoutphp'php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$layoutScriptFilephp;
php php php php php}

php php php php publicphp functionphp enablephp(php)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$applicationConfigResourcephp php=php php$profilephp-php>searchphp(php'ApplicationConfigFilephp'php)php;

php php php php php php php php ifphp php(php!php$applicationConfigResourcephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Aphp projectphp withphp anphp applicationphp configphp filephp isphp requiredphp tophp usephp thisphp providerphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$zcphp php=php php$applicationConfigResourcephp-php>getAsZendConfigphp(php)php;

php php php php php php php php ifphp php(issetphp(php$zcphp-php>resourcesphp)php php&php&php issetphp(php$zfphp-php>resourcesphp-php>layoutphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Aphp layoutphp resourcephp alreadyphp existsphp inphp thisphp projectphp\php'sphp applicationphp configurationphp filephp.php'php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$layoutPathphp php=php php'APPLICATIONphp_PATHphp php"php/layoutsphp/scriptsphp/php"php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp addphp php"resourcesphp.layoutphp.layoutPathphp"php keyphp tophp thephp applicationphp configphp filephp.php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$applicationConfigResourcephp-php>addStringItemphp(php'resourcesphp.layoutphp.layoutPathphp'php,php php$layoutPathphp,php php'productionphp'php,php falsephp)php;
php php php php php php php php php php php php php$applicationConfigResourcephp-php>createphp(php)php;

php php php php php php php php php php php php php$layoutScriptFilephp php=php selfphp:php:createResourcephp(php$profilephp)php;

php php php php php php php php php php php php php$layoutScriptFilephp-php>createphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Layoutsphp havephp beenphp enabledphp,php andphp aphp defaultphp layoutphp createdphp atphp php'
php php php php php php php php php php php php php php php php php.php php$layoutScriptFilephp-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Aphp layoutphp entryphp hasphp beenphp addedphp tophp thephp applicationphp configphp filephp.php'php)php;
php php php php php php php php php}



php php php php php}

php php php php publicphp functionphp disablephp(php)
php php php php php{
php php php php php php php php php/php/php php@todo
php php php php php}



php}
