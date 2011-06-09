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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Enablephp Dojophp components
php php*
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dojophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojo
php{
php php php php php/php*php*
php php php php php php*php Basephp pathphp tophp AOLphp CDN
php php php php php php*php/
php php php php constphp CDNphp_BASEphp_AOLphp php=php php'httpphp:php/php/ophp.aolcdnphp.comphp/dojophp/php'php;

php php php php php/php*php*
php php php php php php*php Pathphp tophp dojophp onphp AOLphp CDNphp php(followingphp versionphp stringphp)
php php php php php php*php/
php php php php constphp CDNphp_DOJOphp_PATHphp_AOLphp php=php php'php/dojophp/dojophp.xdphp.jsphp'php;

php php php php php/php*php*
php php php php php php*php Basephp pathphp tophp Googlephp CDN
php php php php php php*php/
php php php php constphp CDNphp_BASEphp_GOOGLEphp php=php php'httpphp:php/php/ajaxphp.googleapisphp.comphp/ajaxphp/libsphp/dojophp/php'php;

php php php php php/php*php*
php php php php php php*php Pathphp tophp dojophp onphp Googlephp CDNphp php(followingphp versionphp stringphp)
php php php php php php*php/
php php php php constphp CDNphp_DOJOphp_PATHphp_GOOGLEphp php=php php'php/dojophp/dojophp.xdphp.jsphp'php;

php php php php php/php*php*
php php php php php php*php Dojophp-enablephp aphp formphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Formphp php$form
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp enableFormphp(Zendphp_Formphp php$formphp)
php php php php php{
php php php php php php php php php$formphp-php>addPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php,php php'decoratorphp'php)
php php php php php php php php php php php php php php-php>addPrefixPathphp(php'Zendphp_Dojophp_Formphp_Elementphp'php,php php'Zendphp/Dojophp/Formphp/Elementphp'php,php php'elementphp'php)
php php php php php php php php php php php php php php-php>addElementPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php,php php'decoratorphp'php)
php php php php php php php php php php php php php php-php>addDisplayGroupPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php)
php php php php php php php php php php php php php php-php>setDefaultDisplayGroupClassphp(php'Zendphp_Dojophp_Formphp_DisplayGroupphp'php)php;

php php php php php php php php foreachphp php(php$formphp-php>getSubFormsphp(php)php asphp php$subFormphp)php php{
php php php php php php php php php php php php selfphp:php:enableFormphp(php$subFormphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$viewphp php=php php$formphp-php>getViewphp(php)php)php)php php{
php php php php php php php php php php php php selfphp:php:enableViewphp(php$viewphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Dojophp-enablephp aphp viewphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp enableViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php ifphp php(falsephp php=php=php=php php$viewphp-php>getPluginLoaderphp(php'helperphp'php)php-php>getPathsphp(php'Zendphp_Dojophp_Viewphp_Helperphp'php)php)php php{
php php php php php php php php php php php php php$viewphp-php>addHelperPathphp(php'Zendphp/Dojophp/Viewphp/Helperphp'php,php php'Zendphp_Dojophp_Viewphp_Helperphp'php)php;
php php php php php php php php php}
php php php php php}
php}

