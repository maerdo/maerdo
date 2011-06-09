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
php php*php php@versionphp php php php php$Idphp:php Rgbphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Colorphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Colorphp.phpphp'php;

php/php*php*
php php*php RGBphp colorphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Colorphp_Rgbphp extendsphp Zendphp_Pdfphp_Color
php{
php php php php php/php*php*
php php php php php php*php Redphp levelphp.
php php php php php php*php php0php.php0php php(zerophp concentrationphp)php php-php php1php.php0php php(maximumphp concentrationphp)
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Numeric
php php php php php php*php/
php php php php privatephp php$php_rphp;

php php php php php/php*php*
php php php php php php*php Greenphp levelphp.
php php php php php php*php php0php.php0php php(zerophp concentrationphp)php php-php php1php.php0php php(maximumphp concentrationphp)
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Numeric
php php php php php php*php/
php php php php privatephp php$php_gphp;

php php php php php/php*php*
php php php php php php*php Bluephp levelphp.
php php php php php php*php php0php.php0php php(zerophp concentrationphp)php php-php php1php.php0php php(maximumphp concentrationphp)
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Numeric
php php php php php php*php/
php php php php privatephp php$php_bphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp floatphp php$r
php php php php php php*php php@paramphp floatphp php$g
php php php php php php*php php@paramphp floatphp php$b
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$rphp,php php$gphp,php php$bphp)
php php php php php{
php php php php php php php php php/php*php*php Clampphp valuesphp tophp legalphp limitsphp.php php*php/
php php php php php php php php ifphp php(php$rphp <php php0php)php php{php php$rphp php=php php0php;php php}
php php php php php php php php ifphp php(php$rphp php>php php1php)php php{php php$rphp php=php php1php;php php}

php php php php php php php php ifphp php(php$gphp <php php0php)php php{php php$gphp php=php php0php;php php}
php php php php php php php php ifphp php(php$gphp php>php php1php)php php{php php$gphp php=php php1php;php php}

php php php php php php php php ifphp php(php$bphp <php php0php)php php{php php$bphp php=php php0php;php php}
php php php php php php php php ifphp php(php$bphp php>php php1php)php php{php php$bphp php=php php1php;php php}

php php php php php php php php php$thisphp-php>php_rphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$rphp)php;
php php php php php php php php php$thisphp-php>php_gphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$gphp)php;
php php php php php php php php php$thisphp-php>php_bphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Instructionsphp,php whichphp canphp bephp directlyphp insertedphp intophp contentphp stream
php php php php php php*php tophp switchphp colorphp.
php php php php php php*php Colorphp setphp instructionsphp differphp forphp strokingphp andphp nonstrokingphp operationsphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$stroking
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp instructionsphp(php$strokingphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php.php php$thisphp-php>php_gphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php.php php$thisphp-php>php_bphp-php>toStringphp(php)php php.php php php php php php(php$strokingphp?php php"php RGphp\nphp"php php:php php"php rgphp\nphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp colorphp componentsphp php(colorphp spacephp dependentphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getComponentsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php$thisphp-php>php_rphp-php>valuephp,php php$thisphp-php>php_gphp-php>valuephp,php php$thisphp-php>php_bphp-php>valuephp)php;
php php php php php}
php}

