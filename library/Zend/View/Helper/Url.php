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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Urlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp makingphp easyphp linksphp andphp gettingphp urlsphp thatphp dependphp onphp thephp routesphp andphp router
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Urlphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Generatesphp anphp urlphp givenphp thephp namephp ofphp aphp routephp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$urlOptionsphp Optionsphp passedphp tophp thephp assemblephp methodphp ofphp thephp Routephp objectphp.
php php php php php php*php php@paramphp php mixedphp php$namephp Thephp namephp ofphp aphp Routephp tophp usephp.php Ifphp nullphp itphp willphp usephp thephp currentphp Route
php php php php php php*php php@paramphp php boolphp php$resetphp Whetherphp orphp notphp tophp resetphp thephp routephp defaultsphp withphp thosephp provided
php php php php php php*php php@returnphp stringphp Urlphp forphp thephp linkphp hrefphp attributephp.
php php php php php php*php/
php php php php publicphp functionphp urlphp(arrayphp php$urlOptionsphp php=php arrayphp(php)php,php php$namephp php=php nullphp,php php$resetphp php=php falsephp,php php$encodephp php=php truephp)
php php php php php{
php php php php php php php php php$routerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getRouterphp(php)php;
php php php php php php php php returnphp php$routerphp-php>assemblephp(php$urlOptionsphp,php php$namephp,php php$resetphp,php php$encodephp)php;
php php php php php}
php}
