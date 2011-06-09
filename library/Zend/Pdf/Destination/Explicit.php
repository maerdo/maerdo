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
php php*php php@subpackagephp Destination
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Explicitphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Destinationphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp.phpphp'php;

php/php*php*
php php*php Abstractphp PDFphp explicitphp destinationphp representationphp class
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Destination
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Destinationphp_Explicitphp extendsphp Zendphp_Pdfphp_Destination
php{
php php php php php/php*php*
php php php php php php*php Destinationphp descriptionphp array
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Array
php php php php php php*php/
php php php php protectedphp php$php_destinationArrayphp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp itphp'sphp aphp remotephp destination
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isRemotephp;

php php php php php/php*php*
php php php php php php*php Explicitphp destinationphp objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$destinationArray
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$destinationArrayphp)
php php php php php{
php php php php php php php php ifphp php(php$destinationArrayphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Explicitphp destinationphp resourcephp Arrayphp mustphp bephp aphp directphp orphp anphp indirectphp arrayphp objectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_destinationArrayphp php=php php$destinationArrayphp;

php php php php php php php php switchphp php(countphp(php$thisphp-php>php_destinationArrayphp-php>itemsphp)php)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Destinationphp arrayphp mustphp containphp aphp pagephp referencephp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Destinationphp arrayphp mustphp containphp aphp destinationphp typephp namephp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php switchphp php(php$thisphp-php>php_destinationArrayphp-php>itemsphp[php0php]php-php>getTypephp(php)php)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Elementphp:php:TYPEphp_NUMERICphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_isRemotephp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_isRemotephp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Destinationphp targetphp mustphp bephp aphp pagephp numberphp orphp pagephp dictionaryphp objectphp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp itphp'sphp aphp remotephp destination
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isRemotephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isRemotephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp resource
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp getResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_destinationArrayphp;
php php php php php}
php}
