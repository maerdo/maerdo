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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Bootstrap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Bootstrapphp.phpphp php2php0php8php8php5php php2php0php1php0php-php0php2php-php0php3php php1php9php:php3php3php:php5php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php Concretephp basephp classphp forphp bootstrapphp classes
php php*
php php*php Registersphp andphp utilizesphp Zendphp_Controllerphp_Frontphp byphp defaultphp.
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Bootstrap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php php php php extendsphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php{
php php php php php/php*php*
php php php php php php*php Applicationphp resourcephp namespace
php php php php php php*php php@varphp falsephp|string
php php php php php php*php/
php php php php protectedphp php$php_appNamespacephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Applicationphp resourcephp autoloader
php php php php php php*php php@varphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php protectedphp php$php_resourceLoaderphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Ensurephp FrontControllerphp resourcephp isphp registered
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$application
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$applicationphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$applicationphp)php;

php php php php php php php php ifphp php(php$applicationphp-php>hasOptionphp(php'resourceloaderphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(arrayphp(
php php php php php php php php php php php php php php php php php'resourceloaderphp'php php=php>php php$applicationphp-php>getOptionphp(php'resourceloaderphp'php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>getResourceLoaderphp(php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>hasPluginResourcephp(php'FrontControllerphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>registerPluginResourcephp(php'FrontControllerphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Runphp thephp application
php php php php php php*
php php php php php php*php Checksphp tophp seephp thatphp wephp havephp aphp defaultphp controllerphp directoryphp.php Ifphp notphp,php an
php php php php php php*php exceptionphp isphp thrownphp.
php php php php php php*
php php php php php php*php Ifphp sophp,php itphp registersphp thephp bootstrapphp withphp thephp php'bootstrapphp'php parameterphp of
php php php php php php*php thephp frontphp controllerphp,php andphp dispatchesphp thephp frontphp controllerphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp runphp(php)
php php php php php{
php php php php php php php php php$frontphp php php php=php php$thisphp-php>getResourcephp(php'FrontControllerphp'php)php;
php php php php php php php php php$defaultphp php=php php$frontphp-php>getDefaultModulephp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$frontphp-php>getControllerDirectoryphp(php$defaultphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Nophp defaultphp controllerphp directoryphp registeredphp withphp frontphp controllerphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$frontphp-php>setParamphp(php'bootstrapphp'php,php php$thisphp)php;
php php php php php php php php php$responsephp php=php php$frontphp-php>dispatchphp(php)php;
php php php php php php php php ifphp php(php$frontphp-php>returnResponsephp(php)php)php php{
php php php php php php php php php php php php returnphp php$responsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp modulephp resourcephp loader
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_Autoloaderphp_Resourcephp php$loader
php php php php php php*php php@returnphp Zendphp_Applicationphp_Modulephp_Bootstrap
php php php php php php*php/
php php php php publicphp functionphp setResourceLoaderphp(Zendphp_Loaderphp_Autoloaderphp_Resourcephp php$loaderphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourceLoaderphp php=php php$loaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp modulephp resourcephp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp getResourceLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$thisphp-php>php_resourceLoaderphp)
php php php php php php php php php php php php php&php&php php(falsephp php!php=php=php php(php$namespacephp php=php php$thisphp-php>getAppNamespacephp(php)php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$rphp php php php php=php newphp ReflectionClassphp(php$thisphp)php;
php php php php php php php php php php php php php$pathphp php=php php$rphp-php>getFileNamephp(php)php;
php php php php php php php php php php php php php$thisphp-php>setResourceLoaderphp(newphp Zendphp_Applicationphp_Modulephp_Autoloaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php$namespacephp,
php php php php php php php php php php php php php php php php php'basePathphp'php php php=php>php dirnamephp(php$pathphp)php,
php php php php php php php php php php php php php)php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_resourceLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp applicationphp namespacephp php(usedphp forphp modulephp autoloadingphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAppNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_appNamespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp applicationphp namespacephp php(forphp modulephp autoloadingphp)
php php php php php php*
php php php php php php*php php@paramphp php string
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php php php php php php*php/
php php php php publicphp functionphp setAppNamespacephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_appNamespacephp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
