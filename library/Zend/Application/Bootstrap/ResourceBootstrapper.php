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
php php*php php@versionphp php php php php$Idphp:php ResourceBootstrapperphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Interfacephp forphp bootstrapphp classesphp thatphp utilizephp resourcephp plugins
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Bootstrap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php{
php php php php php/php*php*
php php php php php php*php Registerphp aphp resourcephp withphp thephp bootstrap
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Applicationphp_Resourcephp_Resourcephp php$resource
php php php php php php*php php@paramphp php nullphp|arrayphp|Zendphp_Configphp php php php php php php php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php php php php php php*php/
php php php php publicphp functionphp registerPluginResourcephp(php$resourcephp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Unregisterphp aphp resourcephp fromphp thephp bootstrap
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Applicationphp_Resourcephp_Resourcephp php$resource
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php php php php php php*php/
php php php php publicphp functionphp unregisterPluginResourcephp(php$resourcephp)php;

php php php php php/php*php*
php php php php php php*php Isphp thephp requestedphp resourcephp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPluginResourcephp(php$resourcephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp resource
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*php/
php php php php publicphp functionphp getPluginResourcephp(php$resourcephp)php;

php php php php php/php*php*
php php php php php php*php Getphp allphp resources
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginResourcesphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp justphp resourcephp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginResourceNamesphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loaderphp tophp usephp tophp fetchphp resources
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp Zendphp_Loaderphp_PluginLoader
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loaderphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp loaderphp forphp resources
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php)php;
php}
