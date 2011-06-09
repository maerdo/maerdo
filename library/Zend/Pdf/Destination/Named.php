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
php php*php php@versionphp php php php php$Idphp:php Namedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Destinationphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp.phpphp'php;

php/php*php*
php php*php Destinationphp arrayphp:php php[pagephp php/Fitphp]
php php*
php php*php Displayphp thephp pagephp designatedphp byphp pagephp,php withphp itsphp contentsphp magnifiedphp justphp enough
php php*php tophp fitphp thephp entirephp pagephp withinphp thephp windowphp bothphp horizontallyphp andphp verticallyphp.php If
php php*php thephp requiredphp horizontalphp andphp verticalphp magnificationphp factorsphp arephp differentphp,php use
php php*php thephp smallerphp ofphp thephp twophp,php centeringphp thephp pagephp withinphp thephp windowphp inphp thephp other
php php*php dimensionphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Destination
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Destinationphp_Namedphp extendsphp Zendphp_Pdfphp_Destination
php{
php php php php php/php*php*
php php php php php php*php Destinationphp name
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Namephp|Zendphp_Pdfphp_Elementphp_String
php php php php php php*php/
php php php php protectedphp php$php_nameElementphp;

php php php php php/php*php*
php php php php php php*php Namedphp destinationphp objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp php$resource
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_NAMEphp php php&php&php php php$resourcephp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_STRINGphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Namedphp destinationphp resourcephp mustphp bephp aphp PDFphp namephp orphp aphp PDFphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_nameElementphp php=php php$resourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp namedphp destinationphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Pdfphp_Destinationphp_Named
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$namephp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_Namedphp(newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$namephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp name
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_nameElementphp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp resource
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp getResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_nameElementphp;
php php php php php}
php}
