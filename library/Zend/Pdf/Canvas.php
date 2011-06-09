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
php php*php php@versionphp php php php php$Idphp:php Stylephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

requirephp_oncephp php'Zendphp/Pdfphp/Canvasphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Canvasphp isphp anphp abstractphp rectanglephp drawingphp areaphp whichphp canphp bephp droppedphp into
php php*php pagephp objectphp atphp specifiedphp placephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Canvasphp extendsphp Zendphp_Pdfphp_Canvasphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Canvasphp procedurephp setsphp.
php php php php php php*
php php php php php php*php Allowedphp valuesphp:php php'PDFphp'php,php php'Textphp'php,php php'ImageBphp'php,php php'ImageCphp'php,php php'ImageIphp'php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_procSetphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Canvasphp widthphp expressedphp inphp defaultphp userphp spacephp unitsphp php(php1php/php7php2php inchphp)
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_widthphp;

php php php php php/php*php*
php php php php php php*php Canvasphp heightphp expressedphp inphp defaultphp userphp spacephp unitsphp php(php1php/php7php2php inchphp)
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_heightphp;

php php php php protectedphp php$php_resourcesphp php=php arrayphp(php'Fontphp'php php php php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'XObjectphp'php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ExtGStatephp'php php=php>php arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp floatphp php$width
php php php php php php*php php@paramphp floatphp php$height
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$widthphp,php php$heightphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_widthphp php php=php php$widthphp;
php php php php php php php php php$thisphp-php>php_heightphp php=php php$heightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp procedurephp setphp tophp thephp canvasphp description
php php php php php php*
php php php php php php*php php@paramphp stringphp php$procSetName
php php php php php php*php/
php php php php protectedphp functionphp php_addProcSetphp(php$procSetNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_procsetphp[php$procSetNamephp]php php=php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp resourcephp tophp thephp canvas
php php php php php php*
php php php php php php*php Methodphp returnsphp aphp namephp ofphp thephp resourcephp whichphp canphp bephp used
php php php php php php*php asphp aphp resourcephp referencephp withinphp drawingphp instructionsphp stream
php php php php php php*php Allowedphp typesphp:php php'ExtGStatephp'php,php php'ColorSpacephp'php,php php'Patternphp'php,php php'Shadingphp'php,
php php php php php php*php php'XObjectphp'php,php php'Fontphp'php,php php'Propertiesphp'
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@paramphp Zendphp_Pdfphp_Resourcephp php$resource
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_attachResourcephp(php$typephp,php Zendphp_Pdfphp_Resourcephp php$resourcephp)
php php php php php{
php php php php php php php php php/php/php Checkphp,php thatphp resourcephp isphp alreadyphp attachedphp tophp resourcephp setphp.
php php php php php php php php php$resObjectphp php=php php$resourcephp-php>getResourcephp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_resourcesphp[php$typephp]php asphp php$resNamephp php=php>php php$collectedResObjectphp)php php{
php php php php php php php php php php php php ifphp php(php$collectedResObjectphp php=php=php=php php$resObjectphp)php php{
php php php php php php php php php php php php php php php php returnphp php$resNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$idCounterphp php=php php1php;
php php php php php php php php dophp php{
php php php php php php php php php php php php php$newResNamephp php=php php$typephp[php0php]php php.php php$idCounterphp+php+php;
php php php php php php php php php}php whilephp php(issetphp(php$thisphp-php>php_resourcesphp[php$typephp]php[php$newResNamephp]php)php)php;

php php php php php php php php php$thisphp-php>php_resourcesphp[php$typephp]php[php$newResNamephp]php php=php php$resObjectphp;

php php php php php php php php returnphp php$newResNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp dictionariesphp ofphp usedphp resourcesphp.
php php php php php php*
php php php php php php*php Usedphp forphp canvasphp implementationsphp interoperability
php php php php php php*
php php php php php php*php Structurephp ofphp thephp returnedphp arrayphp:
php php php php php php*php arrayphp(
php php php php php php*php php php php<resTypeNamephp>php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php<resTypeNamephp>php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php<resNamephp>php php=php>php php<Zendphp_Pdfphp_Resourcephp objectphp>php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php.php.php.
php php php php php php*php php php php'ProcSetphp'php php=php>php arrayphp(php)
php php php php php php*php php)
php php php php php php*
php php php php php php*php wherephp ProcSetphp arrayphp isphp aphp listphp ofphp usedphp procedurephp setsphp namesphp php(stringsphp)php.
php php php php php php*php Allowedphp procedurephp setphp namesphp:php php'PDFphp'php,php php'Textphp'php,php php'ImageBphp'php,php php'ImageCphp'php,php php'ImageIphp'
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getResourcesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcesphp[php'ProcSetphp'php]php php=php arrayphp_keysphp(php$thisphp-php>php_procSetphp)php;
php php php php php php php php returnphp php$thisphp-php>php_resourcesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp drawingphp instructionsphp stream
php php php php php php*
php php php php php php*php Itphp hasphp tophp bephp returnedphp asphp aphp PDFphp streamphp objectphp tophp makephp itphp reusablephp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnsphp Zendphp_Pdfphp_Resourcephp_ContentStream
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp heightphp ofphp thisphp pagephp inphp pointsphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getHeightphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_heightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp widthphp ofphp thisphp pagephp inphp pointsphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getWidthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_widthphp;
php php php php php}
php}
