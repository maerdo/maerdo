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
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Wddxphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Serializerphp_Adapterphp_AdapterAbstractphp php*php/
requirephp_oncephp php'Zendphp/Serializerphp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php php@linkphp php php php php php php httpphp:php/php/wwwphp.infoloomphp.comphp/gcaconfsphp/WEBphp/chicagophp9php8php/simeonovphp.HTM
php php*php php@linkphp php php php php php php httpphp:php/php/enphp.wikipediaphp.orgphp/wikiphp/WDDX
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serializerphp_Adapterphp_Wddxphp extendsphp Zendphp_Serializerphp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Defaultphp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'commentphp'php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exceptionphp ifphp wddxphp extensionphp notphp found
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'wddxphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php'PHPphp extensionphp php"wddxphp"php isphp requiredphp forphp thisphp adapterphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp PHPphp tophp WDDX
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exceptionphp onphp wddxphp error
php php php php php php*php/
php php php php publicphp functionphp serializephp(php$valuephp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$optsphp php=php php$optsphp php+php php$thisphp-php>php_optionsphp;

php php php php php php php php ifphp php(issetphp(php$optsphp[php'commentphp'php]php)php php&php&php php$optsphp[php'commentphp'php]php)php php{
php php php php php php php php php php php php php$wddxphp php=php wddxphp_serializephp_valuephp(php$valuephp,php php(stringphp)php$optsphp[php'commentphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$wddxphp php=php wddxphp_serializephp_valuephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$wddxphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php$lastErrphp[php'messagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$wddxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unserializephp fromphp WDDXphp tophp PHP
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$wddx
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exceptionphp onphp wddxphp error
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$wddxphp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$retphp php=php wddxphp_deserializephp(php$wddxphp)php;

php php php php php php php php ifphp php(php$retphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php checkphp ifphp thephp returnedphp NULLphp isphp valid
php php php php php php php php php php php php php/php/php orphp basedphp onphp anphp invalidphp wddxphp string
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$simpleXmlphp php=php newphp SimpleXMLElementphp(php$wddxphp)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$simpleXmlphp-php>dataphp[php0php]php-php>nullphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp nullphp;php php/php/php validphp null
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$errMsgphp php=php php'Canphp\php'tphp unserializephp wddxphp stringphp'php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$errMsgphp php=php php$ephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php$errMsgphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$retphp;
php php php php php}
php}
