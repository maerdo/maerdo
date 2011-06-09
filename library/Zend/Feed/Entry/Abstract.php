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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feed
php php*php/
requirephp_oncephp php'Zendphp/Feedphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Element
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Elementphp.phpphp'php;


php/php*php*
php php*php Zendphp_Feedphp_Entryphp_Abstractphp representsphp aphp singlephp entryphp inphp anphp Atomphp orphp RSS
php php*php feedphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Entryphp_Abstractphp extendsphp Zendphp_Feedphp_Element
php{
php php php php php/php*php*
php php php php php php*php Rootphp XMLphp elementphp forphp entriesphp.php Subclassesphp mustphp definephp thisphp tophp a
php php php php php php*php nonphp-nullphp valuephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp;

php php php php php/php*php*
php php php php php php*php Rootphp namespacephp forphp entriesphp.php Subclassesphp mayphp definephp thisphp tophp a
php php php php php php*php nonphp-nullphp valuephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootNamespacephp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Zendphp_Feedphp_Entryphp_Abstractphp constructor
php php php php php php*
php php php php php php*php Thephp Zendphp_Feedphp_Entryphp_Abstractphp constructorphp takesphp thephp URIphp ofphp thephp feedphp thephp entry
php php php php php php*php isphp partphp ofphp,php andphp optionallyphp anphp XMLphp constructphp php(usuallyphp a
php php php php php php*php SimpleXMLElementphp,php butphp itphp canphp bephp anphp XMLphp stringphp orphp aphp DOMNodephp as
php php php php php php*php wellphp)php thatphp containsphp thephp contentsphp ofphp thephp entryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uri
php php php php php php*php php@paramphp php SimpleXMLElementphp|DOMNodephp|stringphp php php$element
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$uriphp php=php nullphp,php php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$elementphp instanceofphp DOMElementphp)php)php php{
php php php php php php php php php php php php ifphp php(php$elementphp)php php{
php php php php php php php php php php php php php php php php php/php/php Loadphp thephp feedphp asphp anphp XMLphp DOMDocumentphp object
php php php php php php php php php php php php php php php php php@iniphp_setphp(php'trackphp_errorsphp'php,php php1php)php;
php php php php php php php php php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php php php php php php php php php$statusphp php=php php@php$docphp-php>loadXMLphp(php$elementphp)php;
php php php php php php php php php php php php php php php php php@iniphp_restorephp(php'trackphp_errorsphp'php)php;

php php php php php php php php php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php preventphp thephp classphp tophp generatephp anphp undefinedphp variablephp noticephp php(ZFphp-php2php5php9php0php)
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$phpphp_errormsgphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'xdebugphp_isphp_enabledphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp,php whenphp XDebugphp isphp runningphp)php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp)php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"DOMDocumentphp cannotphp parsephp XMLphp:php php$phpphp_errormsgphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$elementphp php=php php$docphp-php>getElementsByTagNamephp(php$thisphp-php>php_rootElementphp)php-php>itemphp(php0php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$elementphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Nophp rootphp <php'php php.php php$thisphp-php>php_rootElementphp php.php php'php>php elementphp foundphp,php cannotphp parsephp feedphp.php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php'utfphp-php8php'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_rootNamespacephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$elementphp php=php php$docphp-php>createElementNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$thisphp-php>php_rootNamespacephp)php,php php$thisphp-php>php_rootElementphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$elementphp php=php php$docphp-php>createElementphp(php$thisphp-php>php_rootElementphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$elementphp)php;
php php php php php}

php}
