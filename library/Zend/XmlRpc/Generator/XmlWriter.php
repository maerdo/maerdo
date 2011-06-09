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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Generator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php XmlWriterphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@varphp Zendphp_XmlRpcphp_Generatorphp_GeneratorAbstract
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Generatorphp/GeneratorAbstractphp.phpphp'php;

php/php*php*
php php*php XMLphp generatorphp adapterphp basedphp onphp XMLWriter
php php*php/
classphp Zendphp_XmlRpcphp_Generatorphp_XmlWriterphp extendsphp Zendphp_XmlRpcphp_Generatorphp_GeneratorAbstract
php{
php php php php php/php*php*
php php php php php php*php XMLWriterphp instance
php php php php php php*
php php php php php php*php php@varphp XMLWriter
php php php php php php*php/
php php php php protectedphp php$php_xmlWriterphp;

php php php php php/php*php*
php php php php php php*php Initializedphp XMLWriterphp instance
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlWriterphp php=php newphp XMLWriterphp(php)php;
php php php php php php php php php$thisphp-php>php_xmlWriterphp-php>openMemoryphp(php)php;
php php php php php php php php php$thisphp-php>php_xmlWriterphp-php>startDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_encodingphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Openphp aphp newphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp XMLphp elementphp name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_openElementphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlWriterphp-php>startElementphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp XMLphp textphp dataphp intophp thephp currentlyphp openedphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$textphp XMLphp textphp data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writeTextDataphp(php$textphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlWriterphp-php>textphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp anphp previouslyphp openedphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_closeElementphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlWriterphp-php>endElementphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xmlWriterphp-php>flushphp(falsephp)php;
php php php php php}
php}