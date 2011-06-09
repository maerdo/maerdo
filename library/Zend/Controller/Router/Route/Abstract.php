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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Routerphp_Routephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Interfacephp.phpphp'php;

php/php*php*
php php*php Abstractphp Route
php php*
php php*php Implementsphp interfacephp andphp providesphp conveniencephp methods
php php*
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp implementsphp Zendphp_Controllerphp_Routerphp_Routephp_Interface
php{
php php php php php/php*php*
php php php php php php*php Wetherphp thisphp routephp isphp abstractphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isAbstractphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Pathphp matchedphp byphp thisphp route
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_matchedPathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Getphp thephp versionphp ofphp thephp route
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php2php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp partiallyphp matchedphp path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setMatchedPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchedPathphp php=php php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp partiallyphp matchedphp path
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMatchedPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_matchedPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp orphp setphp wetherphp thisphp isphp anphp abstractphp routephp orphp not
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAbstractphp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$flagphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_isAbstractphp php=php php$flagphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_isAbstractphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp chain
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php$route
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$separator
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Routephp_Chain
php php php php php php*php/
php php php php publicphp functionphp chainphp(Zendphp_Controllerphp_Routerphp_Routephp_Abstractphp php$routephp,php php$separatorphp php=php php'php/php'php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Routephp/Chainphp.phpphp'php;

php php php php php php php php php$chainphp php=php newphp Zendphp_Controllerphp_Routerphp_Routephp_Chainphp(php)php;
php php php php php php php php php$chainphp-php>chainphp(php$thisphp)php-php>chainphp(php$routephp,php php$separatorphp)php;

php php php php php php php php returnphp php$chainphp;
php php php php php}

php}
