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
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Routerphp.phpphp php2php0php8php1php4php php2php0php1php0php-php0php2php-php0php1php php2php0php:php1php3php:php0php8Zphp freakphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp initializingphp thephp locale
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_Base
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Router
php php php php extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php protectedphp php$php_routerphp;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getRouterphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp routerphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Rewrite
php php php php php php*php/
php php php php publicphp functionphp getRouterphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_routerphp)php php{
php php php php php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php php php php php php$bootstrapphp-php>bootstrapphp(php'FrontControllerphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_routerphp php=php php$bootstrapphp-php>getContainerphp(php)php-php>frontcontrollerphp-php>getRouterphp(php)php;

php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'routesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'routesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'chainNameSeparatorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_routerphp-php>setChainNameSeparatorphp(php$optionsphp[php'chainNameSeparatorphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'useRequestParametersAsGlobalphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_routerphp-php>useRequestParametersAsGlobalphp(php$optionsphp[php'useRequestParametersAsGlobalphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_routerphp-php>addConfigphp(newphp Zendphp_Configphp(php$optionsphp[php'routesphp'php]php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_routerphp;
php php php php php}
php}
