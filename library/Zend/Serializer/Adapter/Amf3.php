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
php php*php php@versionphp php php php php$Idphp:php Amfphp3php.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Serializerphp_Adapterphp_AdapterAbstractphp php*php/
requirephp_oncephp php'Zendphp/Serializerphp/Adapterphp/AdapterAbstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_OutputStreamphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/OutputStreamphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp3php/Serializerphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_InputStreamphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/InputStreamphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Amfphp3php_Deserializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp3php/Deserializerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serializerphp_Adapterphp_Amfphp3php extendsphp Zendphp_Serializerphp_Adapterphp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php Serializephp aphp PHPphp valuephp tophp AMFphp3php format
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp serializephp(php$valuephp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php php{
php php php php php php php php php php php php php$streamphp php php php php php=php newphp Zendphp_Amfphp_Parsephp_OutputStreamphp(php)php;
php php php php php php php php php php php php php$serializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializerphp(php$streamphp)php;
php php php php php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php php php php returnphp php$streamphp-php>getStreamphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php'Serializationphp failedphp byphp previousphp errorphp'php,php php0php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deserializephp anphp AMFphp3php valuephp tophp PHP
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$opts
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$valuephp,php arrayphp php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$streamphp php php php php php php php=php newphp Zendphp_Amfphp_Parsephp_InputStreamphp(php$valuephp)php;
php php php php php php php php php php php php php$deserializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp3php_Deserializerphp(php$streamphp)php;
php php php php php php php php php php php php returnphp php$deserializerphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php'Unserializationphp failedphp byphp previousphp errorphp'php,php php0php,php php$ephp)php;
php php php php php php php php php}
php php php php php}
php}
