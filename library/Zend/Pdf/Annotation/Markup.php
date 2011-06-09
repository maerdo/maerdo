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
php php*php php@versionphp php php php php$Idphp:php Markupphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
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
php php*php Aphp markupphp annotation
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Annotation
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Annotationphp_Markupphp extendsphp Zendphp_Pdfphp_Annotation
php{
php php php php php/php*php*
php php php php php php*php Annotationphp subtypes
php php php php php php*php/
php php php php constphp SUBTYPEphp_HIGHLIGHTphp php=php php'Highlightphp'php;
php php php php constphp SUBTYPEphp_UNDERLINEphp php=php php'Underlinephp'php;
php php php php constphp SUBTYPEphp_SQUIGGLYphp php php=php php'Squigglyphp'php;
php php php php constphp SUBTYPEphp_STRIKEOUTphp php=php php'StrikeOutphp'php;

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
php php php php php php php php php php php php php!inphp_arrayphp(php php$annotationDictionaryphp-php>Subtypephp-php>valuephp,
php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:SUBTYPEphp_HIGHLIGHTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:SUBTYPEphp_UNDERLINEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:SUBTYPEphp_SQUIGGLYphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:SUBTYPEphp_STRIKEOUTphp)php php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Subtypephp php=php>php Markupphp entryphp isphp omittedphp orphp hasphp wrongphp valuephp.php'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$annotationDictionaryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp markupphp annotationphp object
php php php php php php*
php php php php php php*php Textphp markupphp annotationsphp appearphp asphp highlightsphp,php underlinesphp,php strikeoutsphp or
php php php php php php*php jaggedphp php(php"squigglyphp"php)php underlinesphp inphp thephp textphp ofphp aphp documentphp.php Whenphp openedphp,
php php php php php php*php theyphp displayphp aphp popphp-upphp windowphp containingphp thephp textphp ofphp thephp associatedphp notephp.
php php php php php php*
php php php php php php*php php$subTypephp parameterphp mayphp contain
php php php php php php*php php php php php Zendphp_Pdfphp_Annotationphp_Markupphp:php:SUBTYPEphp_HIGHLIGHT
php php php php php php*php php php php php Zendphp_Pdfphp_Annotationphp_Markupphp:php:SUBTYPEphp_UNDERLINE
php php php php php php*php php php php php Zendphp_Pdfphp_Annotationphp_Markupphp:php:SUBTYPEphp_SQUIGGLY
php php php php php php*php php php php php Zendphp_Pdfphp_Annotationphp_Markupphp:php:SUBTYPEphp_STRIKEOUT
php php php php php php*php forphp forphp aphp highlightphp,php underlinephp,php squigglyphp-underlinephp,php orphp strikeoutphp annotationphp,
php php php php php php*php respectivelyphp.
php php php php php php*
php php php php php php*php php$quadPointsphp isphp anphp arrayphp ofphp php8xNphp numbersphp specifyingphp thephp coordinatesphp of
php php php php php php*php Nphp quadrilateralsphp defaultphp userphp spacephp.php Eachphp quadrilateralphp encompassesphp aphp wordphp or
php php php php php php*php groupphp ofphp contiguousphp wordsphp inphp thephp textphp underlyingphp thephp annotationphp.
php php php php php php*php Thephp coordinatesphp forphp eachphp quadrilateralphp arephp givenphp inphp thephp order
php php php php php php*php php php php php xphp1php yphp1php xphp2php yphp2php xphp3php yphp3php xphp4php yphp4
php php php php php php*php specifyingphp thephp quadrilateralphp’sphp fourphp verticesphp inphp counterclockwisephp order
php php php php php php*php startingphp fromphp leftphp bottomphp cornerphp.
php php php php php php*php Thephp textphp isphp orientedphp withphp respectphp tophp thephp edgephp connectingphp points
php php php php php php*php php(xphp1php,php yphp1php)php andphp php(xphp2php,php yphp2php)php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp stringphp php$subType
php php php php php php*php php@paramphp arrayphp php$quadPointsphp php php[xphp1php yphp1php xphp2php yphp2php xphp3php yphp3php xphp4php yphp4php]
php php php php php php*php php@returnphp Zendphp_Pdfphp_Annotationphp_Markup
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$textphp,php php$subTypephp,php php$quadPointsphp)
php php php php php{
php php php php php php php php php$annotationDictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;

php php php php php php php php php$annotationDictionaryphp-php>Typephp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Annotphp'php)php;
php php php php php php php php php$annotationDictionaryphp-php>Subtypephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$subTypephp)php;

php php php php php php php php php$rectanglephp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php)php;
php php php php php php php php php$rectanglephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php)php;
php php php php php php php php php$annotationDictionaryphp-php>Rectphp php=php php$rectanglephp;

php php php php php php php php php$annotationDictionaryphp-php>Contentsphp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$textphp)php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$quadPointsphp)php php php|php|php php countphp(php$quadPointsphp)php php=php=php php0php php php|php|php php countphp(php$quadPointsphp)php php%php php8php php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'php$quadPointsphp parameterphp mustphp bephp anphp arrayphp ofphp php8xNphp numbersphp'php)php;
php php php php php php php php php}
php php php php php php php php php$pointsphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php foreachphp php(php$quadPointsphp asphp php$quadPointphp)php php{
php php php php php php php php php php php php php$pointsphp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$quadPointphp)php;
php php php php php php php php php}
php php php php php php php php php$annotationDictionaryphp-php>QuadPointsphp php=php php$pointsphp;

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Annotationphp_Markupphp(php$annotationDictionaryphp)php;
php php php php php}
php}
