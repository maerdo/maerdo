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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php2php7php9php7php php2php0php1php0php-php0php8php-php0php6php php1php5php:php0php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;

php/php*php*
php php*php PDFphp filephp php'streamphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Streamphp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Container
php php php php php php*php/
php php php php publicphp php$valuephp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$val
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valphp)
php php php php php{
php php php php php php php php php$thisphp-php>valuephp php=php Zendphp_Pdfphp:php:getMemoryManagerphp(php)php-php>createphp(php$valphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Pdfphp_Elementphp:php:TYPEphp_STREAMphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Streamphp lengthphp.
php php php php php php*php php(Methodphp isphp usedphp tophp avoidphp stringphp copyingphp,php whichphp mayphp occursphp inphp somephp casesphp)
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp lengthphp(php)
php php php php php{
php php php php php php php php returnphp strlenphp(php$thisphp-php>valuephp-php>getRefphp(php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Clearphp stream
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php php$refphp php=php php&php$thisphp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php$refphp php=php php'php'php;
php php php php php php php php php$thisphp-php>valuephp-php>touchphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Appendphp valuephp tophp aphp stream
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$val
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$valphp)
php php php php php{
php php php php php php php php php$refphp php=php php&php$thisphp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php$refphp php.php=php php(stringphp)php$valphp;
php php php php php php php php php$thisphp-php>valuephp-php>touchphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Detachphp PDFphp objectphp fromphp thephp factoryphp php(ifphp applicablephp)php,php clonephp itphp andphp attachphp tophp newphp factoryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factoryphp php Thephp factoryphp tophp attach
php php php php php php*php php@paramphp arrayphp php&php$processedphp php Listphp ofphp alreadyphp processedphp indirectphp objectsphp,php usedphp tophp avoidphp objectsphp duplication
php php php php php php*php php@paramphp integerphp php$modephp php Cloningphp modephp php(definesphp filterphp forphp objectsphp cloningphp)
php php php php php php*php php@returnsphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp makeClonephp(Zendphp_Pdfphp_ElementFactoryphp php$factoryphp,php arrayphp php&php$processedphp,php php$modephp)
php php php php php{
php php php php php php php php returnphp newphp selfphp(php$thisphp-php>valuephp-php>getRefphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp objectphp asphp string
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php"streamphp\nphp"php php.php php$thisphp-php>valuephp-php>getRefphp(php)php php.php php"php\nendstreamphp"php;
php php php php php}
php}
