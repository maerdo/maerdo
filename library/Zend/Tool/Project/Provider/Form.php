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
php php*php php@versionphp php php php php$Idphp:php Formphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Formphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php{

php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$formNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$formNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Formphp:php:createResourcephp(php)php expectsphp php\php"formNamephp\php"php isphp thephp namephp ofphp aphp formphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$formsDirectoryphp php=php selfphp:php:php_getFormsDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php)php)php php{
php php php php php php php php php php php php ifphp php(php$moduleNamephp)php php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp formphp directoryphp forphp modulephp php"php'php php.php php$moduleNamephp php.php php'php"php wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp formphp directoryphp wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php$exceptionMessagephp)php;
php php php php php php php php php}

php php php php php php php php php$newFormphp php=php php$formsDirectoryphp-php>createResourcephp(
php php php php php php php php php php php php php'formFilephp'php,
php php php php php php php php php php php php arrayphp(php'formNamephp'php php=php>php php$formNamephp,php php'moduleNamephp'php php=php>php php$moduleNamephp)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$newFormphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$formName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp hasResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$formNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$formNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Formphp:php:createResourcephp(php)php expectsphp php\php"formNamephp\php"php isphp thephp namephp ofphp aphp formphp resourcephp tophp checkphp forphp existencephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$formsDirectoryphp php=php selfphp:php:php_getFormsDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php;
php php php php php php php php returnphp php(php(php$formsDirectoryphp-php>searchphp(arrayphp(php'formFilephp'php php=php>php arrayphp(php'formNamephp'php php=php>php php$formNamephp)php)php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getFormsDirectoryResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getFormsDirectoryResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'formsDirectoryphp'php;

php php php php php php php php returnphp php$profilephp-php>searchphp(php$profileSearchParamsphp)php;
php php php php php}

php php php php publicphp functionphp enablephp(php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php/php/php determinephp ifphp testingphp isphp enabledphp inphp thephp project
php php php php php php php php php$testingEnabledphp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:isTestingEnabledphp(php$thisphp-php>php_loadedProfilephp)php;

php php php php php php php php php$formDirectoryResourcephp php=php selfphp:php:php_getFormsDirectoryResourcephp(php$thisphp-php>php_loadedProfilephp,php php$modulephp)php;

php php php php php php php php ifphp php(php$formDirectoryResourcephp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp alreadyphp hasphp formsphp enabledphp.php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp enablephp formsphp directoryphp atphp php'php php.php php$formDirectoryResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Enablingphp formsphp directoryphp atphp php'php php.php php$formDirectoryResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$formDirectoryResourcephp-php>setEnabledphp(truephp)php;
php php php php php php php php php php php php php php php php php$formDirectoryResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp form
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php/php/php determinephp ifphp testingphp isphp enabledphp inphp thephp project
php php php php php php php php php$testingEnabledphp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:isTestingEnabledphp(php$thisphp-php>php_loadedProfilephp)php;

php php php php php php php php ifphp php(selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp alreadyphp hasphp aphp formphp namedphp php'php php.php php$namephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp thatphp therephp isphp notphp aphp dashphp orphp underscorephp,php returnphp ifphp doesntphp matchphp regex
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php[php_php-php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Formphp namesphp shouldphp bephp camelphp casedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php ucwordsphp(php$namephp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$formResourcephp php=php selfphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php;

php php php php php php php php php php php php ifphp php(php$testingEnabledphp)php php{
php php php php php php php php php php php php php php php php php$testFormResourcephp php=php nullphp;
php php php php php php php php php php php php php php php php php/php/php php$testFormResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:createApplicationResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php'indexphp'php,php php$modulephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php php php php php php$responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php dophp thephp creation
php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{

php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp createphp aphp formphp atphp php'php php php.php php$formResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;

php php php php php php php php php php php php ifphp php(php$testFormResourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp createphp aphp formphp testphp filephp atphp php'php php.php php$testFormResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Creatingphp aphp formphp atphp php'php php.php php$formResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$formResourcephp-php>createphp(php)php;

php php php php php php php php php php php php ifphp php(php$testFormResourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Creatingphp aphp formphp testphp filephp atphp php'php php.php php$testFormResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$testFormResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}


php}