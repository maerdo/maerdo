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
php php*php php@versionphp php php php php$Idphp:php Modelphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Modelphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php{

php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$modelNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$modelNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Modelphp:php:createResourcephp(php)php expectsphp php\php"modelNamephp\php"php isphp thephp namephp ofphp aphp modelphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$modelsDirectoryphp php=php selfphp:php:php_getModelsDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php)php)php php{
php php php php php php php php php php php php ifphp php(php$moduleNamephp)php php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp modelphp directoryphp forphp modulephp php"php'php php.php php$moduleNamephp php.php php'php"php wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$exceptionMessagephp php=php php'Aphp modelphp directoryphp wasphp notphp foundphp.php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php$exceptionMessagephp)php;
php php php php php php php php php}

php php php php php php php php php$newModelphp php=php php$modelsDirectoryphp-php>createResourcephp(
php php php php php php php php php php php php php'modelFilephp'php,
php php php php php php php php php php php php arrayphp(php'modelNamephp'php php=php>php php$modelNamephp,php php'moduleNamephp'php php=php>php php$moduleNamephp)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$newModelphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$modelName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp hasResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$modelNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$modelNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Modelphp:php:createResourcephp(php)php expectsphp php\php"modelNamephp\php"php isphp thephp namephp ofphp aphp modelphp resourcephp tophp checkphp forphp existencephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$modelsDirectoryphp php=php selfphp:php:php_getModelsDirectoryResourcephp(php$profilephp,php php$moduleNamephp)php;
php php php php php php php php returnphp php(php(php$modelsDirectoryphp-php>searchphp(arrayphp(php'modelFilephp'php php=php>php arrayphp(php'modelNamephp'php php=php>php php$modelNamephp)php)php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getModelsDirectoryResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getModelsDirectoryResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'modelsDirectoryphp'php;

php php php php php php php php returnphp php$profilephp-php>searchphp(php$profileSearchParamsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp model
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$originalNamephp php=php php$namephp;

php php php php php php php php php$namephp php=php ucwordsphp(php$namephp)php;

php php php php php php php php php/php/php determinephp ifphp testingphp isphp enabledphp inphp thephp project
php php php php php php php php php$testingEnabledphp php=php falsephp;php php/php/Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:isTestingEnabledphp(php$thisphp-php>php_loadedProfilephp)php;
php php php php php php php php php$testModelResourcephp php=php nullphp;

php php php php php php php php php/php/php Checkphp thatphp therephp isphp notphp aphp dashphp orphp underscorephp,php returnphp ifphp doesntphp matchphp regex
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php[php_php-php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Modelphp namesphp shouldphp bephp camelphp casedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp alreadyphp hasphp aphp modelphp namedphp php'php php.php php$namephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp requestphp/responsephp object
php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php/php/php alertphp thephp userphp aboutphp inlinephp convertedphp names
php php php php php php php php php$tensephp php=php php(php(php$requestphp-php>isPretendphp(php)php)php php?php php'wouldphp bephp'php php:php php'isphp'php)php;

php php php php php php php php ifphp php(php$namephp php!php=php=php php$originalNamephp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php Thephp canonicalphp modelphp namephp thatphp php'php php.php php$tense
php php php php php php php php php php php php php php php php php php php php php.php php'php usedphp withphp otherphp providersphp isphp php"php'php php.php php$namephp php.php php'php"php;php'
php php php php php php php php php php php php php php php php php php php php php.php php'php notphp php"php'php php.php php$originalNamephp php.php php'php"php asphp suppliedphp'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php arrayphp(php'yellowphp'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$modelResourcephp php=php selfphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php;

php php php php php php php php php php php php ifphp php(php$testingEnabledphp)php php{
php php php php php php php php php php php php php php php php php/php/php php$testModelResourcephp php=php Zendphp_Toolphp_Projectphp_Providerphp_Testphp:php:createApplicationResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php'indexphp'php,php php$modulephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php dophp thephp creation
php php php php php php php php ifphp php(php$requestphp-php>isPretendphp(php)php)php php{

php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp modelphp atphp php'php php php.php php$modelResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;

php php php php php php php php php php php php ifphp php(php$testModelResourcephp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp modelphp testphp filephp atphp php'php php.php php$testModelResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp modelphp atphp php'php php.php php$modelResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$modelResourcephp-php>createphp(php)php;

php php php php php php php php php php php php ifphp php(php$testModelResourcephp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp modelphp testphp filephp atphp php'php php.php php$testModelResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$testModelResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}


php}
