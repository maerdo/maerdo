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
php php*php php@versionphp php php php php$Idphp:php Testphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Testphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php{

php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'Applicationphp'php,php php'Libraryphp'php)php;

php php php php php/php*php*
php php php php php php*php isTestingEnabledphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isTestingEnabledphp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'testsDirectoryphp'php)php;
php php php php php php php php php$testsDirectoryphp php=php php$profilephp-php>searchphp(php$profileSearchParamsphp)php;

php php php php php php php php returnphp php$testsDirectoryphp-php>isEnabledphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createApplicationResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$controllerName
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@paramphp stringphp php$moduleName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp createApplicationResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$controllerNamephp,php php$actionNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createApplicationResourcephp(php)php expectsphp php\php"controllerNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$actionNamephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Viewphp:php:createApplicationResourcephp(php)php expectsphp php\php"actionNamephp\php"php isphp thephp namephp ofphp aphp controllerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$testsDirectoryResourcephp php=php php$profilephp-php>searchphp(php'testsDirectoryphp'php)php;

php php php php php php php php ifphp php(php(php$testAppDirectoryResourcephp php=php php$testsDirectoryResourcephp-php>searchphp(php'testApplicationDirectoryphp'php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$testAppDirectoryResourcephp php=php php$testsDirectoryResourcephp-php>createResourcephp(php'testApplicationDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$moduleNamephp)php php{
php php php php php php php php php php php php php/php/php@todophp php$moduleName
php php php php php php php php php php php php php$moduleNamephp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$testAppControllerDirectoryResourcephp php=php php$testAppDirectoryResourcephp-php>searchphp(php'testApplicationControllerDirectoryphp'php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$testAppControllerDirectoryResourcephp php=php php$testAppDirectoryResourcephp-php>createResourcephp(php'testApplicationControllerDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$testAppControllerFileResourcephp php=php php$testAppControllerDirectoryResourcephp-php>createResourcephp(php'testApplicationControllerFilephp'php,php arrayphp(php'forControllerNamephp'php php=php>php php$controllerNamephp)php)php;

php php php php php php php php returnphp php$testAppControllerFileResourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createLibraryResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$libraryClassName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp createLibraryResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$libraryClassNamephp)
php php php php php{
php php php php php php php php php$testLibraryDirectoryResourcephp php=php php$profilephp-php>searchphp(arrayphp(php'TestsDirectoryphp'php,php php'TestLibraryDirectoryphp'php)php)php;


php php php php php php php php php$fsPartsphp php=php explodephp(php'php_php'php,php php$libraryClassNamephp)php;

php php php php php php php php php$currentDirectoryResourcephp php=php php$testLibraryDirectoryResourcephp;

php php php php php php php php whilephp php(php$nameOrNamespacePartphp php=php arrayphp_shiftphp(php$fsPartsphp)php)php php{

php php php php php php php php php php php php ifphp php(countphp(php$fsPartsphp)php php>php php0php)php php{

php php php php php php php php php php php php php php php php ifphp php(php(php$libraryDirectoryResourcephp php=php php$currentDirectoryResourcephp-php>searchphp(arrayphp(php'TestLibraryNamespaceDirectoryphp'php php=php>php arrayphp(php'namespaceNamephp'php php=php>php php$nameOrNamespacePartphp)php)php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$currentDirectoryResourcephp php=php php$currentDirectoryResourcephp-php>createResourcephp(php'TestLibraryNamespaceDirectoryphp'php,php arrayphp(php'namespaceNamephp'php php=php>php php$nameOrNamespacePartphp)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$currentDirectoryResourcephp php=php php$libraryDirectoryResourcephp;
php php php php php php php php php php php php php php php php php}


php php php php php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php php php php ifphp php(php(php$libraryFileResourcephp php=php php$currentDirectoryResourcephp-php>searchphp(arrayphp(php'TestLibraryFilephp'php php=php>php arrayphp(php'forClassNamephp'php php=php>php php$libraryClassNamephp)php)php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$libraryFileResourcephp php=php php$currentDirectoryResourcephp-php>createResourcephp(php'TestLibraryFilephp'php,php arrayphp(php'forClassNamephp'php php=php>php php$libraryClassNamephp)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$libraryFileResourcephp;
php php php php php}

php php php php publicphp functionphp enablephp(php)
php php php php php{

php php php php php}

php php php php publicphp functionphp disablephp(php)
php php php php php{

php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$libraryClassName
php php php php php php*php/
php php php php publicphp functionphp createphp(php$libraryClassNamephp)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(php)php;

php php php php php php php php ifphp php(php!selfphp:php:isTestingEnabledphp(php$profilephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Testingphp isphp notphp enabledphp forphp thisphp projectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$testLibraryResourcephp php=php selfphp:php:createLibraryResourcephp(php$profilephp,php php$libraryClassNamephp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp libraryphp stubphp inphp locationphp php'php php.php php$testLibraryResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp libraryphp stubphp inphp locationphp php'php php.php php$testLibraryResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$testLibraryResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}

php}
