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
php php*php php@subpackagephp Module
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Bootstrapphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Bootstrapphp/Bootstrapphp.phpphp'php;

php/php*php*
php php*php Basephp bootstrapphp classphp forphp modules
php php*
php php*php php@usesphp php php php php php php Zendphp_Loaderphp_Autoloaderphp_Resource
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Module
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Applicationphp_Modulephp_Bootstrap
php php php php extendsphp Zendphp_Applicationphp_Bootstrapphp_Bootstrap
php{
php php php php php/php*php*
php php php php php php*php Setphp thisphp explicitlyphp tophp reducephp impactphp ofphp determiningphp modulephp name
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleNamephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$application
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$applicationphp)
php php php php php{
php php php php php php php php php$thisphp-php>setApplicationphp(php$applicationphp)php;

php php php php php php php php php/php/php Usephp samephp pluginphp loaderphp asphp parentphp bootstrap
php php php php php php php php ifphp php(php$applicationphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapperphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPluginLoaderphp(php$applicationphp-php>getPluginLoaderphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$keyphp php=php strtolowerphp(php$thisphp-php>getModuleNamephp(php)php)php;
php php php php php php php php ifphp php(php$applicationphp-php>hasOptionphp(php$keyphp)php)php php{
php php php php php php php php php php php php php/php/php Donphp'tphp runphp viaphp setOptionsphp(php)php tophp preventphp duplicatephp initialization
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$applicationphp-php>getOptionphp(php$keyphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$applicationphp-php>hasOptionphp(php'resourceloaderphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(arrayphp(
php php php php php php php php php php php php php php php php php'resourceloaderphp'php php=php>php php$applicationphp-php>getOptionphp(php'resourceloaderphp'php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>initResourceLoaderphp(php)php;

php php php php php php php php php/php/php ZFphp-php6php5php4php5php:php ensurephp frontphp controllerphp resourcephp isphp loaded
php php php php php php php php ifphp php(php!php$thisphp-php>hasPluginResourcephp(php'FrontControllerphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>registerPluginResourcephp(php'FrontControllerphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ZFphp-php6php5php4php5php:php preventphp recursivephp registrationphp ofphp modules
php php php php php php php php ifphp php(php$thisphp-php>hasPluginResourcephp(php'modulesphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>unregisterPluginResourcephp(php'modulesphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Ensurephp resourcephp loaderphp isphp loaded
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initResourceLoaderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getResourceLoaderphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp applicationphp namespace
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp getModuleNamephp(php)php}php,php andphp returnsphp thephp currentphp module
php php php php php php*php name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAppNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getModuleNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp modulephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModuleNamephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_moduleNamephp)php)php php{
php php php php php php php php php php php php php$classphp php=php getphp_classphp(php$thisphp)php;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php[aphp-zphp]php[aphp-zphp0php-php9php]php*php)php_php/iphp'php,php php$classphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php$classphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_moduleNamephp php=php php$prefixphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_moduleNamephp;
php php php php php}
php}
