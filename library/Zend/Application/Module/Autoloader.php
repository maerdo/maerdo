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
php php*php php@versionphp php php php php$Idphp:php Autoloaderphp.phpphp php2php0php2php5php0php php2php0php1php0php-php0php1php-php1php2php php2php2php:php1php5php:php2php0Zphp daspridphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Loaderphp_Autoloaderphp_Resourcephp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/Autoloaderphp/Resourcephp.phpphp'php;

php/php*php*
php php*php Resourcephp loaderphp forphp applicationphp modulephp classes
php php*
php php*php php@usesphp php php php php php php Zendphp_Loaderphp_Autoloaderphp_Resource
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Module
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Modulephp_Autoloaderphp extendsphp Zendphp_Loaderphp_Autoloaderphp_Resource
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>initDefaultResourceTypesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp defaultphp resourcephp typesphp forphp modulephp resourcephp classes
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initDefaultResourceTypesphp(php)
php php php php php{
php php php php php php php php php$basePathphp php=php php$thisphp-php>getBasePathphp(php)php;
php php php php php php php php php$thisphp-php>addResourceTypesphp(arrayphp(
php php php php php php php php php php php php php'dbtablephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Modelphp_DbTablephp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'modelsphp/DbTablephp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'mappersphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Modelphp_Mapperphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'modelsphp/mappersphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'formphp'php php php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Formphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'formsphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'modelphp'php php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Modelphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'modelsphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'pluginphp'php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Pluginphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'pluginsphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'servicephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Servicephp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'servicesphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'viewhelperphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Viewphp_Helperphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'viewsphp/helpersphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'viewfilterphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php php'Viewphp_Filterphp'php,
php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php=php>php php'viewsphp/filtersphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>setDefaultResourceTypephp(php'modelphp'php)php;
php php php php php}
php}
