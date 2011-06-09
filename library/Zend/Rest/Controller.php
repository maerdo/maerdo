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
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Controllerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Controllerphp_Actionphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp.phpphp'php;

php/php*php*
php php*php Anphp abstractphp classphp tophp guidephp implementationphp ofphp actionphp controllersphp forphp usephp with
php php*php Zendphp_Restphp_Routephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp Zendphp_Rest
php php*php php@seephp Zendphp_Restphp_Route
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Restphp_Controllerphp extendsphp Zendphp_Controllerphp_Action
php{
php php php php php/php*php*
php php php php php php*php Thephp indexphp actionphp handlesphp indexphp/listphp requestsphp;php itphp shouldphp respondphp withphp a
php php php php php php*php listphp ofphp thephp requestedphp resourcesphp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp indexActionphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp getphp actionphp handlesphp GETphp requestsphp andphp receivesphp anphp php'idphp'php parameterphp;php it
php php php php php php*php shouldphp respondphp withphp thephp serverphp resourcephp statephp ofphp thephp resourcephp identified
php php php php php php*php byphp thephp php'idphp'php valuephp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp getActionphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp postphp actionphp handlesphp POSTphp requestsphp;php itphp shouldphp acceptphp andphp digestphp a
php php php php php php*php POSTedphp resourcephp representationphp andphp persistphp thephp resourcephp statephp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp postActionphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp putphp actionphp handlesphp PUTphp requestsphp andphp receivesphp anphp php'idphp'php parameterphp;php it
php php php php php php*php shouldphp updatephp thephp serverphp resourcephp statephp ofphp thephp resourcephp identifiedphp by
php php php php php php*php thephp php'idphp'php valuephp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp putActionphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp deletephp actionphp handlesphp DELETEphp requestsphp andphp receivesphp anphp php'idphp'
php php php php php php*php parameterphp;php itphp shouldphp updatephp thephp serverphp resourcephp statephp ofphp thephp resource
php php php php php php*php identifiedphp byphp thephp php'idphp'php valuephp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp deleteActionphp(php)php;

php}