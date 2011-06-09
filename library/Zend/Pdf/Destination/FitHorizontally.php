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
php php*php php@versionphp php php php php$Idphp:php FitHorizontallyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Destinationphp_Explicitphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Explicitphp.phpphp'php;

php/php*php*
php php*php Zendphp_Pdfphp_Destinationphp_FitHorizontallyphp explicitphp detination
php php*
php php*php Destinationphp arrayphp:php php[pagephp php/FitHphp topphp]
php php*
php php*php Displayphp thephp pagephp designatedphp byphp pagephp,php withphp thephp verticalphp coordinatephp topphp positioned
php php*php atphp thephp topphp edgephp ofphp thephp windowphp andphp thephp contentsphp ofphp thephp pagephp magnified
php php*php justphp enoughphp tophp fitphp thephp entirephp widthphp ofphp thephp pagephp withinphp thephp windowphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Destination
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Destinationphp_FitHorizontallyphp extendsphp Zendphp_Pdfphp_Destinationphp_Explicit
php{
php php php php php/php*php*
php php php php php php*php Createphp destinationphp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Pagephp|integerphp php$pagephp php Pagephp objectphp orphp pagephp number
php php php php php php*php php@paramphp floatphp php$topphp php Topphp edgephp ofphp displayedphp page
php php php php php php*php php@returnphp Zendphp_Pdfphp_Destinationphp_FitHorizontally
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$pagephp,php php$topphp)
php php php php php{
php php php php php php php php php$destinationArrayphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;

php php php php php php php php ifphp php(php$pagephp instanceofphp Zendphp_Pdfphp_Pagephp)php php{
php php php php php php php php php php php php php$destinationArrayphp-php>itemsphp[php]php php=php php$pagephp-php>getPageDictionaryphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_integerphp(php$pagephp)php)php php{
php php php php php php php php php php php php php$destinationArrayphp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$pagephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Pagephp entryphp mustphp bephp aphp Zendphp_Pdfphp_Pagephp objectphp orphp aphp pagephp numberphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$destinationArrayphp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FitHphp'php)php;
php php php php php php php php php$destinationArrayphp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topphp)php;

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Destinationphp_FitHorizontallyphp(php$destinationArrayphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp topphp edgephp ofphp thephp displayedphp page
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getTopEdgephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_destinationArrayphp-php>itemsphp[php2php]php-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp topphp edgephp ofphp thephp displayedphp page
php php php php php php*
php php php php php php*php php@paramphp floatphp php$top
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_FitHorizontally
php php php php php php*php/
php php php php publicphp functionphp setTopEdgephp(php$topphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_destinationArrayphp-php>itemsphp[php2php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
