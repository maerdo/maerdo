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
php php*php php@versionphp php php php php$Idphp:php PhpSerializephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Serializerphp_Adapterphp_AdapterAbstractphp php*php/
requirephp_oncephp php'Zendphp/Serializerphp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serializerphp_Adapterphp_PhpSerializephp extendsphp Zendphp_Serializerphp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php php php@varphp nullphp|stringphp Serializedphp booleanphp falsephp value
php php php php php php*php/
php php php php privatephp staticphp php$php_serializedFalsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$opts
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optsphp)php;

php php php php php php php php ifphp php(selfphp:php:php$php_serializedFalsephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_serializedFalsephp php=php serializephp(falsephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp usingphp serializephp(php)
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exceptionphp Onphp serializephp error
php php php php php php*php/
php php php php publicphp functionphp serializephp(php$valuephp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$retphp php=php serializephp(php$valuephp)php;
php php php php php php php php ifphp php(php$retphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php$lastErrphp[php'messagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unserialize
php php php php php php*
php php php php php php*php php@todophp php php Allowphp integrationphp withphp unserializephp_callbackphp_func
php php php php php php*php php@paramphp php stringphp php$serialized
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exceptionphp onphp unserializephp error
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$serializedphp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php TODOphp:php php@seephp phpphp.iniphp directivephp php"unserializephp_callbackphp_funcphp"
php php php php php php php php php$retphp php=php php@unserializephp(php$serializedphp)php;
php php php php php php php php ifphp php(php$retphp php=php=php=php falsephp php&php&php php$serializedphp php!php=php=php selfphp:php:php$php_serializedFalsephp)php php{
php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php$lastErrphp[php'messagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$retphp;
php php php php php}
php}
