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
php php*php php@subpackagephp Annotation
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Textphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Annotationphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Annotationphp.phpphp'php;

php/php*php*
php php*php Aphp textphp annotationphp representsphp aphp php"stickyphp notephp"php attachedphp tophp aphp pointphp inphp thephp PDFphp documentphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Annotation
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Annotationphp_Textphp extendsphp Zendphp_Pdfphp_Annotation
php{
php php php php php/php*php*
php php php php php php*php Annotationphp objectphp constructor
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$annotationDictionaryphp)
php php php php php{
php php php php php php php php ifphp php(php$annotationDictionaryphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Annotationphp dictionaryphp resourcephp hasphp tophp bephp aphp dictionaryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$annotationDictionaryphp-php>Subtypephp php=php=php=php nullphp php php|php|
php php php php php php php php php php php php php$annotationDictionaryphp-php>Subtypephp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_NAMEphp php php|php|
php php php php php php php php php php php php php$annotationDictionaryphp-php>Subtypephp-php>valuephp php!php=php php'Textphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Subtypephp php=php>php Textphp entryphp isphp requiresphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$annotationDictionaryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp linkphp annotationphp object
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@returnphp Zendphp_Pdfphp_Annotationphp_Text
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$textphp)
php php php php php{
php php php php php php php php php$annotationDictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;

php php php php php php php php php$annotationDictionaryphp-php>Typephp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Annotphp'php)php;
php php php php php php php php php$annotationDictionaryphp-php>Subtypephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Textphp'php)php;

php php php php php php php php php$rectanglephp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php)php;
php php php php php php php php php$annotationDictionaryphp-php>Rectphp php=php php$rectanglephp;

php php php php php php php php php$annotationDictionaryphp-php>Contentsphp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$textphp)php;

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Annotationphp_Textphp(php$annotationDictionaryphp)php;
php php php php php}
php}
