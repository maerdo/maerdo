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
php php*php php@versionphp php php php php$Idphp:
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp/Binaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Booleanphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Nullphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*
php php*php Resourcephp extractorphp classphp isphp usedphp tophp detachphp resourcesphp fromphp originalphp PDFphp documentphp.
php php*
php php*php Itphp providesphp resourcesphp sharingphp,php sophp differentphp pagesphp orphp otherphp PDFphp resourcesphp canphp share
php php*php itsphp dependentphp resourcesphp php(ephp.gphp.php fontsphp orphp imagesphp)php orphp otherphp resourcesphp stillphp usephp themphp withoutphp duplicationphp.
php php*php Itphp alsophp reducesphp outputphp PDFphp sizephp,php requiredphp memoryphp forphp PDFphp processingphp and
php php*php processingphp timephp.
php php*
php php*php Thephp samephp extractorphp mayphp bephp usedphp forphp differentphp sourcephp documentsphp,php several
php php*php extractorsphp mayphp bephp usedphp forphp constractingphp onephp targetphp documentphp,php butphp extractor
php php*php mustphp notphp bephp sharedphp betweenphp targetphp documentsphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Extractor
php{
php php php php php/php*php*
php php php php php php*php PDFphp objectsphp factoryphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_factoryphp;

php php php php php/php*php*
php php php php php php*php Reusablephp listphp ofphp alreadyphp processedphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_processedphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_factoryphp php php php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;
php php php php php php php php php$thisphp-php>php_processedphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp pagephp,php extractphp itphp andphp dependentphp objectsphp fromphp thephp currentphp documentphp,
php php php php php php*php sophp itphp canphp bephp usedphp withinphp otherphp docs
php php php php php php*
php php php php php php*php returnphp Zendphp_Pdfphp_Page
php php php php php php*php/
php php php php publicphp functionphp clonePagephp(Zendphp_Pdfphp_Pagephp php$pagephp)
php php php php php{
php php php php php php php php returnphp php$pagephp-php>clonePagephp(php$thisphp-php>php_factoryphp,php php$thisphp-php>php_processedphp)php;
php php php php php}
php}

