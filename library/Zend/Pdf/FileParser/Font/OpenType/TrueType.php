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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TrueTypephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserphp/Fontphp/OpenTypephp.phpphp'php;

php/php*php*
php php*php Parsesphp anphp OpenTypephp fontphp filephp containingphp TrueTypephp outlinesphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp_TrueTypephp extendsphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenType
php{
php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Concretephp Classphp Implementationphp php*php/

php php php php php/php*php*
php php php php php php*php Verifiesphp thatphp thephp fontphp filephp actuallyphp containsphp TrueTypephp outlinesphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp screenphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isScreenedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:screenphp(php)php;

php php php php php php php php switchphp php(php$thisphp-php>php_readScalerTypephp(php)php)php php{
php php php php php php php php php php php php casephp php0xphp0php0php0php1php0php0php0php0php:php php php php php/php/php versionphp php1php.php0php php-php Windowsphp TrueTypephp signature
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php0xphp7php4php7php2php7php5php6php5php:php php php php php/php/php php'truephp'php php-php Macintoshphp TrueTypephp signature
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp aphp TrueTypephp fontphp filephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:WRONGphp_FONTphp_TYPEphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>fontTypephp php=php Zendphp_Pdfphp_Fontphp:php:TYPEphp_TRUETYPEphp;
php php php php php php php php php$thisphp-php>php_isScreenedphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp andphp parsesphp thephp TrueTypephp fontphp dataphp fromphp thephp filephp onphp diskphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:parsephp(php)php;

php php php php php php php php php/php*php Therephp isphp nothingphp additionalphp tophp parsephp forphp TrueTypephp fontsphp atphp thisphp timephp.
php php php php php php php php php php*php/

php php php php php php php php php$thisphp-php>php_isParsedphp php=php truephp;
php php php php php}
php}
