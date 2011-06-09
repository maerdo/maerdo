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
php php*php php@versionphp php php php php$Idphp:php Destinationphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Targetphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Targetphp.phpphp'php;


php/php*php*
php php*php Abstractphp PDFphp destinationphp representationphp class
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Destination
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Destinationphp extendsphp Zendphp_Pdfphp_Target
php{
php php php php php/php*php*
php php php php php php*php Loadphp Destinationphp objectphp fromphp aphp specifiedphp resource
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp php$destinationArray
php php php php php php*php php@returnphp Zendphp_Pdfphp_Destination
php php php php php php*php/
php php php php publicphp staticphp functionphp loadphp(Zendphp_Pdfphp_Elementphp php$resourcephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
php php php php php php php php ifphp php(php$resourcephp-php>getTypephp(php)php php=php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_NAMEphp php php|php|php php php$resourcephp-php>getTypephp(php)php php=php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_STRINGphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Namedphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_Namedphp(php$resourcephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$resourcephp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Anphp explicitphp destinationphp mustphp bephp aphp directphp orphp anphp indirectphp arrayphp objectphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$resourcephp-php>itemsphp)php <php php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Anphp explicitphp destinationphp arrayphp mustphp containphp atphp leastphp twophp elementsphp.php'php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$resourcephp-php>itemsphp[php1php]php-php>valuephp)php php{
php php php php php php php php php php php php casephp php'XYZphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Zoomphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_Zoomphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Fitphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Fitphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_Fitphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitHphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitHorizontallyphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitHorizontallyphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitVphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitVerticallyphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitVerticallyphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitRphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitRectanglephp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitRectanglephp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitBphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitBoundingBoxphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitBoundingBoxphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitBHphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitBoundingBoxHorizontallyphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitBoundingBoxHorizontallyphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'FitBVphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/FitBoundingBoxVerticallyphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitBoundingBoxVerticallyphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Unknownphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_Unknownphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}
php}
