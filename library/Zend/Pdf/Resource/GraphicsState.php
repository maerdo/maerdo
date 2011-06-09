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
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp.phpphp'php;


php/php*php*
php php*php Graphicsphp Statephp.
php php*
php php*php Whilephp somephp parametersphp inphp thephp graphicsphp statephp canphp bephp setphp withphp individualphp operatorsphp,
php php*php asphp shownphp inphp Tablephp php4php.php7php,php othersphp cannotphp.php Thephp latterphp canphp onlyphp bephp setphp withphp thephp generic
php php*php graphicsphp statephp operatorphp gsphp php(PDFphp php1php.php2php)php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_GraphicsStatephp extendsphp Zendphp_Pdfphp_Resource
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$extGStateObject
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp_Objectphp php$extGStateObjectphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$extGStateObjectphp php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Createphp newphp Graphicsphp Statephp object
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp.phpphp'php;
php php php php php php php php php php php php php$factoryphp php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;

php php php php php php php php php php php php php$gsDictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php php php php php$gsDictionaryphp-php>Typephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'ExtGStatephp'php)php;

php php php php php php php php php php php php php$extGStateObjectphp php=php php$factoryphp-php>newObjectphp(php$gsDictionaryphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$extGStateObjectphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Graphicsphp statephp PDFphp objectphp mustphp bephp aphp dictionaryphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$gsDictionaryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp transparancy
php php php php php php*
php php php php php php*php php$alphaphp php=php=php php0php php php-php transparent
php php php php php php*php php$alphaphp php=php=php php1php php php-php opaque
php php php php php php*
php php php php php php*php Transparencyphp modesphp,php supportedphp byphp PDFphp:
php php php php php php*php Normalphp php(defaultphp)php,php Multiplyphp,php Screenphp,php Overlayphp,php Darkenphp,php Lightenphp,php ColorDodgephp,php ColorBurnphp,php HardLightphp,
php php php php php php*php SoftLightphp,php Differencephp,php Exclusion
php php php php php php*
php php php php php php*php php@paramphp floatphp php$alpha
php php php php php php*php php@paramphp stringphp php$mode
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setAlphaphp(php$alphaphp,php php$modephp php=php php'Normalphp'php)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$modephp,php arrayphp(php'Normalphp'php,php php'Multiplyphp'php,php php'Screenphp'php,php php'Overlayphp'php,php php'Darkenphp'php,php php'Lightenphp'php,php php'ColorDodgephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ColorBurnphp'php,php php'HardLightphp'php,php php'SoftLightphp'php,php php'Differencephp'php,php php'Exclusionphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unsupportedphp transparencyphp modephp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_numericphp(php$alphaphp)php php php|php|php php php$alphaphp <php php0php php php|php|php php php$alphaphp php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Alphaphp valuephp mustphp bephp numericphp betweenphp php0php php(transparentphp)php andphp php1php php(opaquephp)php.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_resourcephp-php>BMphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$modephp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>CAphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$alphaphp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>caphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$alphaphp)php;
php php php php php}


php php php php php/php*php*php php@todophp addphp otherphp Graphicsphp Statephp featuresphp supportphp php*php/
php}

