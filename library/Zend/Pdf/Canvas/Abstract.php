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

requirephp_oncephp php'Zendphp/Pdfphp/Canvasphp/Interfacephp.phpphp'php;

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
php php*php Canvasphp isphp anphp abstractphp rectanglephp drawingphp areaphp whichphp canphp bephp droppedphp into
php php*php pagephp objectphp atphp specifiedphp placephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Canvasphp_Abstractphp implementsphp Zendphp_Pdfphp_Canvasphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Drawingphp instructions
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentsphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Currentphp font
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Resourcephp_Font
php php php php php php*php/
php php php php protectedphp php$php_fontphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp fontphp size
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_fontSizephp;

php php php php php/php*php*
php php php php php php*php Currentphp style
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Style
php php php php php php*php/
php php php php protectedphp php$php_stylephp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Counterphp forphp thephp php"Savephp"php operations
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_saveCountphp php=php php0php;


php php php php php/php*php*
php php php php php php*php Addphp procedureSetphp tophp thephp Pagephp description
php php php php php php*
php php php php php php*php php@paramphp stringphp php$procSetName
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_addProcSetphp(php$procSetNamephp)php;

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
php php php php abstractphp protectedphp functionphp php_attachResourcephp(php$typephp,php Zendphp_Pdfphp_Resourcephp php$resourcephp)php;

php php php php php/php*php*
php php php php php php*php Drawphp aphp canvasphp atphp thephp specifiedphp location
php php php php php php*
php php php php php php*php Ifphp upperphp rightphp cornerphp isphp notphp specifiedphp thenphp canvasphp heghtphp andphp width
php php php php php php*php arephp usedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Canvasphp_Interfacephp php$canvas
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawCanvasphp(Zendphp_Pdfphp_Canvasphp_Interfacephp php$canvasphp,php php$xphp1php,php php$yphp1php,php php$xphp2php php=php nullphp,php php$yphp2php php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>saveGSphp(php)php;

php php php php php php php php php$thisphp-php>translatephp(php$xphp1php,php php$yphp1php)php;

php php php php php php php php ifphp php(php$xphp2php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$withphp php=php php$canvasphp-php>getWidthphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$withphp php=php php$xphp2php php-php php$xphp1php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$yphp2php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$heightphp php=php php$canvasphp-php>getHeightphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$heightphp php=php php$yphp2php php-php php$yphp1php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>clipRectanglephp(php0php,php php0php,php php$withphp,php php$heightphp)php;

php php php php php php php php ifphp php(php$xphp2php php!php=php=php nullphp php php|php|php php php$yphp2php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Drawnphp canvasphp hasphp tophp bephp scaledphp.
php php php php php php php php php php php php ifphp php(php$xphp2php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$xScalephp php=php php$withphp/php$canvasphp-php>getWidthphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$xScalephp php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$yphp2php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$yScalephp php=php php$heightphp/php$canvasphp-php>getHeightphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$yScalephp php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>scalephp(php$xScalephp,php php$yScalephp)php;
php php php php php php php php php}

php php php php php php php php php$contentsToDrawphp php=php php$canvasphp-php>getContentsphp(php)php;
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/

php php php php php php php php php$thisphp-php>restoreGSphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp fillphp colorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp php$color
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setFillColorphp(Zendphp_Pdfphp_Colorphp php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$colorphp-php>instructionsphp(falsephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linephp colorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp php$color
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setLineColorphp(Zendphp_Pdfphp_Colorphp php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$colorphp-php>instructionsphp(truephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linephp widthphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$width
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setLineWidthphp(php$widthphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$widthObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$widthObjphp-php>toStringphp(php)php php.php php"php wphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linephp dashingphp pattern
php php php php php php*
php php php php php php*php Patternphp isphp anphp arrayphp ofphp floatsphp:php arrayphp(onphp_lengthphp,php offphp_lengthphp,php onphp_lengthphp,php offphp_lengthphp,php php.php.php.php)
php php php php php php*php orphp Zendphp_Pdfphp_Pagephp:php:LINEphp_DASHINGphp_SOLIDphp constant
php php php php php php*php Phasephp isphp shiftphp fromphp thephp beginningphp ofphp linephp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$pattern
php php php php php php*php php@paramphp arrayphp php$phase
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setLineDashingPatternphp(php$patternphp,php php$phasephp php=php php0php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Pagephp.phpphp'php;
php php php php php php php php ifphp php(php$patternphp php=php=php=php Zendphp_Pdfphp_Pagephp:php:LINEphp_DASHINGphp_SOLIDphp)php php{
php php php php php php php php php php php php php$patternphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$phasephp php php php=php php0php;
php php php php php php php php php}

php php php php php php php php php$dashPatternphp php php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php php$phaseEleemntphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$phasephp)php;

php php php php php php php php foreachphp php(php$patternphp asphp php$dashItemphp)php php{
php php php php php php php php php php php php php$dashElementphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$dashItemphp)php;
php php php php php php php php php php php php php$dashPatternphp-php>itemsphp[php]php php=php php$dashElementphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$dashPatternphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$phaseEleemntphp-php>toStringphp(php)php php.php php"php dphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp currentphp fontphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Resourcephp_Fontphp php$font
php php php php php php*php php@paramphp floatphp php$fontSize
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setFontphp(Zendphp_Pdfphp_Resourcephp_Fontphp php$fontphp,php php$fontSizephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'Textphp'php)php;
php php php php php php php php php$fontNamephp php=php php$thisphp-php>php_attachResourcephp(php'Fontphp'php,php php$fontphp)php;

php php php php php php php php php$thisphp-php>php_fontphp php php php php php=php php$fontphp;
php php php php php php php php php$thisphp-php>php_fontSizephp php=php php$fontSizephp;

php php php php php php php php php$fontNameObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$fontNamephp)php;
php php php php php php php php php$fontSizeObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontSizephp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$fontNameObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$fontSizeObjphp-php>toStringphp(php)php php.php php"php Tfphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp stylephp tophp usephp forphp futurephp drawingphp operationsphp onphp thisphp page
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Stylephp php$style
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setStylephp(Zendphp_Pdfphp_Stylephp php$stylephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'Textphp'php)php;
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php ifphp php(php$stylephp-php>getFontphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setFontphp(php$stylephp-php>getFontphp(php)php,php php$stylephp-php>getFontSizephp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$stylephp-php>instructionsphp(php$thisphp-php>php_dictionaryphp-php>Resourcesphp)php;

php php php php php php php php php$thisphp-php>php_stylephp php=php php$stylephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp fontphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Resourcephp_Fontphp php$font
php php php php php php*php/
php php php php publicphp functionphp getFontphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fontphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp fontphp size
php php php php php php*
php php php php php php*php php@returnphp floatphp php$fontSize
php php php php php php*php/
php php php php publicphp functionphp getFontSizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fontSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp stylephp,php appliedphp tophp thephp pagephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Style
php php php php php php*php/
php php php php publicphp functionphp getStylephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_stylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp thephp graphicsphp statephp ofphp thisphp pagephp.
php php php php php php*php Thisphp takesphp aphp snapshotphp ofphp thephp currentlyphp appliedphp stylephp,php positionphp,php clippingphp areaphp and
php php php php php php*php anyphp rotationphp/translationphp/scalingphp thatphp hasphp beenphp appliedphp.
php php php php php php*
php php php php php php*php php@todophp checkphp forphp thephp openphp paths
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exceptionphp php php php php-php ifphp aphp savephp isphp performedphp withphp anphp openphp path
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp saveGSphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_saveCountphp+php+php;

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php qphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Restorephp thephp graphicsphp statephp thatphp wasphp savedphp withphp thephp lastphp callphp tophp saveGSphp(php)php.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exceptionphp php php php-php ifphp therephp isphp nophp previouslyphp savedphp state
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp restoreGSphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_saveCountphp-php-php <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Restoringphp graphicsphp statephp whichphp isphp notphp savedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Qphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
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
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setAlphaphp(php$alphaphp,php php$modephp php=php php'Normalphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'Textphp'php)php;
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$graphicsStatephp php=php newphp Zendphp_Pdfphp_Resourcephp_GraphicsStatephp(php)php;

php php php php php php php php php$graphicsStatephp-php>setAlphaphp(php$alphaphp,php php$modephp)php;
php php php php php php php php php$gStateNamephp php=php php$thisphp-php>php_attachResourcephp(php'ExtGStatephp'php,php php$graphicsStatephp)php;

php php php php php php php php php$gStateNameObjectphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$gStateNamephp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$gStateNameObjectphp-php>toStringphp(php)php php.php php"php gsphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Intersectphp currentphp clippingphp areaphp withphp aphp circlephp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$x
php php php php php php*php php@paramphp floatphp php$y
php php php php php php*php php@paramphp floatphp php$radius
php php php php php php*php php@paramphp floatphp php$startAngle
php php php php php php*php php@paramphp floatphp php$endAngle
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clipCirclephp(php$xphp,php php$yphp,php php$radiusphp,php php$startAnglephp php=php nullphp,php php$endAnglephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>clipEllipsephp(php$xphp php-php php$radiusphp,php php$yphp php-php php$radiusphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$xphp php+php php$radiusphp,php php$yphp php+php php$radiusphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$startAnglephp,php php$endAnglephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Intersectphp currentphp clippingphp areaphp withphp aphp polygonphp.
php php php php php php*
php php php php php php*php Methodphp signaturesphp:
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)php;
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp,php php$endAnglephp)php;
php php php php php php*
php php php php php php*php php@todophp processphp specialphp casesphp withphp php$xphp2php-php$xphp1php php=php=php php0php orphp php$yphp2php-php$yphp1php php=php=php php0
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp floatphp php$startAngle
php php php php php php*php php@paramphp floatphp php$endAngle
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clipEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp php=php nullphp,php php$endAnglephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php ifphp php(php$xphp2php <php php$xphp1php)php php{
php php php php php php php php php php php php php$tempphp php=php php$xphp1php;
php php php php php php php php php php php php php$xphp1php php php php=php php$xphp2php;
php php php php php php php php php php php php php$xphp2php php php php=php php$tempphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$yphp2php <php php$yphp1php)php php{
php php php php php php php php php php php php php$tempphp php=php php$yphp1php;
php php php php php php php php php php php php php$yphp1php php php php=php php$yphp2php;
php php php php php php php php php php php php php$yphp2php php php php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$xphp php=php php(php$xphp1php php+php php$xphp2php)php/php2php.php;
php php php php php php php php php$yphp php=php php(php$yphp1php php+php php$yphp2php)php/php2php.php;

php php php php php php php php php$xCphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp)php;
php php php php php php php php php$yCphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp)php;

php php php php php php php php ifphp php(php$startAnglephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$startAnglephp php!php=php php0php)php php{php php$startAnglephp php=php fmodphp(php$startAnglephp,php Mphp_PIphp*php2php)php;php php}
php php php php php php php php php php php php ifphp php(php$endAnglephp php php php!php=php php0php)php php{php php$endAnglephp php php php=php fmodphp(php$endAnglephp,php php php Mphp_PIphp*php2php)php;php php}

php php php php php php php php php php php php ifphp php(php$startAnglephp php>php php$endAnglephp)php php{
php php php php php php php php php php php php php php php php php$endAnglephp php+php=php Mphp_PIphp*php2php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$clipPathphp php php php php=php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php mphp\nphp"php;
php php php php php php php php php php php php php$clipSectorsphp php=php php(intphp)ceilphp(php(php$endAnglephp php-php php$startAnglephp)php/Mphp_PIphp_php4php)php;
php php php php php php php php php php php php php$clipRadiusphp php php=php maxphp(php$xphp2php php-php php$xphp1php,php php$yphp2php php-php php$yphp1php)php;

php php php php php php php php php php php php forphp(php$countphp php=php php0php;php php$countphp <php=php php$clipSectorsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$pAnglephp php=php php$startAnglephp php+php php(php$endAnglephp php-php php$startAnglephp)php*php$countphp/php(floatphp)php$clipSectorsphp;

php php php php php php php php php php php php php php php php php$pXphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php+php cosphp(php$pAnglephp)php*php$clipRadiusphp)php;
php php php php php php php php php php php php php php php php php$pYphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php+php sinphp(php$pAnglephp)php*php$clipRadiusphp)php;
php php php php php php php php php php php php php php php php php$clipPathphp php.php=php php$pXphp-php>toStringphp(php)php php.php php'php php'php php.php php$pYphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$clipPathphp php.php php"hphp\nWphp\nnphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php$xLeftphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$xRightphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php)php;
php php php php php php php php php$yUpphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php)php;
php php php php php php php php php$yDownphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;

php php php php php php php php php$xDeltaphp php php=php php2php*php(Mphp_SQRTphp2php php-php php1php)php*php(php$xphp2php php-php php$xphp1php)php/php3php.php;
php php php php php php php php php$yDeltaphp php php=php php2php*php(Mphp_SQRTphp2php php-php php1php)php*php(php$yphp2php php-php php$yphp1php)php/php3php.php;
php php php php php php php php php$xrphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php+php php$xDeltaphp)php;
php php php php php php php php php$xlphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php-php php$xDeltaphp)php;
php php php php php php php php php$yuphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php+php php$yDeltaphp)php;
php php php php php php php php php$ydphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php-php php$yDeltaphp)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php"php mphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xrphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$yuphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$ydphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xrphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xlphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$ydphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$yuphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xlphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"hphp\nWphp\nnphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Intersectphp currentphp clippingphp areaphp withphp aphp polygonphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$xphp php php-php arrayphp ofphp floatphp php(thephp Xphp cophp-ordinatesphp ofphp thephp verticesphp)
php php php php php php*php php@paramphp arrayphp php$yphp php php-php arrayphp ofphp floatphp php(thephp Yphp cophp-ordinatesphp ofphp thephp verticesphp)
php php php php php php*php php@paramphp integerphp php$fillMethod
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clipPolygonphp(php$xphp,php php$yphp,php php$fillMethodphp php=php Zendphp_Pdfphp_Pagephp:php:FILLphp_METHODphp_NONphp_ZEROphp_WINDINGphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$firstPointphp php=php truephp;
php php php php php php php php foreachphp php(php$xphp asphp php$idphp php=php>php php$xValphp)php php{
php php php php php php php php php php php php php$xObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xValphp)php;
php php php php php php php php php php php php php$yObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp[php$idphp]php)php;

php php php php php php php php php php php php ifphp php(php$firstPointphp)php php{
php php php php php php php php php php php php php php php php php$pathphp php=php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php mphp\nphp"php;
php php php php php php php php php php php php php php php php php$firstPointphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$pathphp php.php=php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$pathphp;

php php php php php php php php ifphp php(php$fillMethodphp php=php=php Zendphp_Pdfphp_Pagephp:php:FILLphp_METHODphp_NONphp_ZEROphp_WINDINGphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php hphp\nphp Wphp\nnphp\nphp"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Evenphp-Oddphp fillphp methodphp.
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php hphp\nphp Wphp*php\nnphp\nphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Intersectphp currentphp clippingphp areaphp withphp aphp rectanglephp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp clipRectanglephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$xphp1Objphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$yphp1Objphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$widthObjphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php php-php php$xphp1php)php;
php php php php php php php php php$heightphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php php-php php$yphp1php)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$widthObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$heightphp2Objphp-php>toStringphp(php)php php.php php"php rephp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"php Wphp\nnphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php/php*php*
php php php php php php*php Drawphp aphp circlephp centeredphp onphp xphp,php yphp withphp aphp radiusphp ofphp radiusphp.
php php php php php php*
php php php php php php*php Methodphp signaturesphp:
php php php php php php*php drawCirclephp(php$xphp,php php$yphp,php php$radiusphp)php;
php php php php php php*php drawCirclephp(php$xphp,php php$yphp,php php$radiusphp,php php$fillTypephp)php;
php php php php php php*php drawCirclephp(php$xphp,php php$yphp,php php$radiusphp,php php$startAnglephp,php php$endAnglephp)php;
php php php php php php*php drawCirclephp(php$xphp,php php$yphp,php php$radiusphp,php php$startAnglephp,php php$endAnglephp,php php$fillTypephp)php;
php php php php php php*
php php php php php php*
php php php php php php*php Itphp'sphp notphp aphp reallyphp circlephp,php becausephp PDFphp supportsphp onlyphp cubicphp Bezierphp curvesphp.
php php php php php php*php Butphp php_veryphp_php goodphp approximationphp.
php php php php php php*php Itphp differsphp fromphp aphp realphp circlephp onphp aphp maximumphp php0php.php0php0php0php2php6php radiuses
php php php php php php*php php(atphp PIphp/php8php,php php3php*PIphp/php8php,php php5php*PIphp/php8php,php php7php*PIphp/php8php,php php9php*PIphp/php8php,php php1php1php*PIphp/php8php,php php1php3php*PIphp/php8php andphp php1php5php*PIphp/php8php anglesphp)php.
php php php php php php*php Atphp php0php,php PIphp/php4php,php PIphp/php2php,php php3php*PIphp/php4php,php PIphp,php php5php*PIphp/php4php,php php3php*PIphp/php2php andphp php7php*PIphp/php4php itphp'sphp exactlyphp aphp tangentphp tophp aphp circlephp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$x
php php php php php php*php php@paramphp floatphp php$y
php php php php php php*php php@paramphp floatphp php$radius
php php php php php php*php php@paramphp mixedphp php$paramphp4
php php php php php php*php php@paramphp mixedphp php$paramphp5
php php php php php php*php php@paramphp mixedphp php$paramphp6
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp php drawCirclephp(php$xphp,php php$yphp,php php$radiusphp,php php$paramphp4php php=php nullphp,php php$paramphp5php php=php nullphp,php php$paramphp6php php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>drawEllipsephp(php$xphp php-php php$radiusphp,php php$yphp php-php php$radiusphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$xphp php+php php$radiusphp,php php$yphp php+php php$radiusphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramphp4php,php php$paramphp5php,php php$paramphp6php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp anphp ellipsephp insidephp thephp specifiedphp rectanglephp.
php php php php php php*
php php php php php php*php Methodphp signaturesphp:
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)php;
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$fillTypephp)php;
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp,php php$endAnglephp)php;
php php php php php php*php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp,php php$endAnglephp,php php$fillTypephp)php;
php php php php php php*
php php php php php php*php php@todophp processphp specialphp casesphp withphp php$xphp2php-php$xphp1php php=php=php php0php orphp php$yphp2php-php$yphp1php php=php=php php0
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp mixedphp php$paramphp5
php php php php php php*php php@paramphp mixedphp php$paramphp6
php php php php php php*php php@paramphp mixedphp php$paramphp7
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$paramphp5php php=php nullphp,php php$paramphp6php php=php nullphp,php php$paramphp7php php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$paramphp5php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)php;
php php php php php php php php php php php php php$startAnglephp php=php nullphp;
php php php php php php php php php php php php php$fillTypephp php=php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp;
php php php php php php php php php}php elsephp ifphp php(php$paramphp6php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$fillTypephp)php;
php php php php php php php php php php php php php$startAnglephp php=php nullphp;
php php php php php php php php php php php php php$fillTypephp php=php php$paramphp5php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp,php php$endAnglephp)php;
php php php php php php php php php php php php php/php/php drawEllipsephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$startAnglephp,php php$endAnglephp,php php$fillTypephp)php;
php php php php php php php php php php php php php$startAnglephp php=php php$paramphp5php;
php php php php php php php php php php php php php$endAnglephp php php php=php php$paramphp6php;

php php php php php php php php php php php php ifphp php(php$paramphp7php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$fillTypephp php=php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$fillTypephp php=php php$paramphp7php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php ifphp php(php$xphp2php <php php$xphp1php)php php{
php php php php php php php php php php php php php$tempphp php=php php$xphp1php;
php php php php php php php php php php php php php$xphp1php php php php=php php$xphp2php;
php php php php php php php php php php php php php$xphp2php php php php=php php$tempphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$yphp2php <php php$yphp1php)php php{
php php php php php php php php php php php php php$tempphp php=php php$yphp1php;
php php php php php php php php php php php php php$yphp1php php php php=php php$yphp2php;
php php php php php php php php php php php php php$yphp2php php php php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$xphp php=php php(php$xphp1php php+php php$xphp2php)php/php2php.php;
php php php php php php php php php$yphp php=php php(php$yphp1php php+php php$yphp2php)php/php2php.php;

php php php php php php php php php$xCphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp)php;
php php php php php php php php php$yCphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp)php;

php php php php php php php php ifphp php(php$startAnglephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$startAnglephp php!php=php php0php)php php{php php$startAnglephp php=php fmodphp(php$startAnglephp,php Mphp_PIphp*php2php)php;php php}
php php php php php php php php php php php php ifphp php(php$endAnglephp php php php!php=php php0php)php php{php php$endAnglephp php php php=php fmodphp(php$endAnglephp,php php php Mphp_PIphp*php2php)php;php php}

php php php php php php php php php php php php ifphp php(php$startAnglephp php>php php$endAnglephp)php php{
php php php php php php php php php php php php php php php php php$endAnglephp php+php=php Mphp_PIphp*php2php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$clipPathphp php php php php=php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php mphp\nphp"php;
php php php php php php php php php php php php php$clipSectorsphp php=php php(intphp)ceilphp(php(php$endAnglephp php-php php$startAnglephp)php/Mphp_PIphp_php4php)php;
php php php php php php php php php php php php php$clipRadiusphp php php=php maxphp(php$xphp2php php-php php$xphp1php,php php$yphp2php php-php php$yphp1php)php;

php php php php php php php php php php php php forphp(php$countphp php=php php0php;php php$countphp <php=php php$clipSectorsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$pAnglephp php=php php$startAnglephp php+php php(php$endAnglephp php-php php$startAnglephp)php*php$countphp/php(floatphp)php$clipSectorsphp;

php php php php php php php php php php php php php php php php php$pXphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php+php cosphp(php$pAnglephp)php*php$clipRadiusphp)php;
php php php php php php php php php php php php php php php php php$pYphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php+php sinphp(php$pAnglephp)php*php$clipRadiusphp)php;
php php php php php php php php php php php php php php php php php$clipPathphp php.php=php php$pXphp-php>toStringphp(php)php php.php php'php php'php php.php php$pYphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"qphp\nphp"php php.php php$clipPathphp php.php php"hphp\nWphp\nnphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php$xLeftphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$xRightphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php)php;
php php php php php php php php php$yUpphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php)php;
php php php php php php php php php$yDownphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;

php php php php php php php php php$xDeltaphp php php=php php2php*php(Mphp_SQRTphp2php php-php php1php)php*php(php$xphp2php php-php php$xphp1php)php/php3php.php;
php php php php php php php php php$yDeltaphp php php=php php2php*php(Mphp_SQRTphp2php php-php php1php)php*php(php$yphp2php php-php php$yphp1php)php/php3php.php;
php php php php php php php php php$xrphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php+php php$xDeltaphp)php;
php php php php php php php php php$xlphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp php-php php$xDeltaphp)php;
php php php php php php php php php$yuphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php+php php$yDeltaphp)php;
php php php php php php php php php$ydphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp php-php php$yDeltaphp)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php"php mphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xrphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$yuphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xRightphp-php>toStringphp(php)php php.php php'php php'php php.php php$ydphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xrphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xlphp-php>toStringphp(php)php php.php php'php php'php php.php php$yDownphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$ydphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$yCphp-php>toStringphp(php)php php.php php"php cphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xLeftphp-php>toStringphp(php)php php.php php'php php'php php.php php$yuphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php$xlphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php php php php php$xCphp-php>toStringphp(php)php php.php php'php php'php php.php php$yUpphp-php>toStringphp(php)php php.php php"php cphp\nphp"php;

php php php php php php php php switchphp php(php$fillTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Bphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php fphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Sphp\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$startAnglephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"Qphp\nphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp anphp imagephp atphp thephp specifiedphp positionphp onphp thephp pagephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Imagephp php$image
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawImagephp(Zendphp_Pdfphp_Resourcephp_Imagephp php$imagephp,php php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$imageNamephp php php php php=php php$thisphp-php>php_attachResourcephp(php'XObjectphp'php,php php$imagephp)php;
php php php php php php php php php$imageNameObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$imageNamephp)php;

php php php php php php php php php$xphp1Objphp php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$yphp1Objphp php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$widthObjphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php php-php php$xphp1php)php;
php php php php php php php php php$heightObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php php-php php$yphp1php)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"qphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php1php php0php php0php php1php php'php php.php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$widthObjphp-php>toStringphp(php)php php.php php'php php0php php0php php'php php.php php$heightObjphp-php>toStringphp(php)php php.php php"php php0php php0php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$imageNameObjphp-php>toStringphp(php)php php.php php"php Dophp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"Qphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp LayoutBoxphp atphp thephp specifiedphp positionphp onphp thephp pagephp.
php php php php php php*
php php php php php php*php php@internalphp php(notphp implementedphp nowphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_LayoutBoxphp php$box
php php php php php php*php php@paramphp floatphp php$x
php php php php php php*php php@paramphp floatphp php$y
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawLayoutBoxphp(php$boxphp,php php$xphp,php php$yphp)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp linephp fromphp xphp1php,yphp1php tophp xphp2php,yphp2php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawLinephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$xphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php)php;
php php php php php php php php php$yphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php mphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xphp2Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp2Objphp-php>toStringphp(php)php php.php php"php lphp\nphp Sphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp.
php php php php php php*
php php php php php php*php Ifphp php$fillTypephp isphp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp or
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp,php thenphp polygonphp isphp automaticallyphp closedphp.
php php php php php php*php Seephp detailedphp descriptionphp ofphp thesephp methodsphp inphp aphp PDFphp documentation
php php php php php php*php php(sectionphp php4php.php4php.php2php Pathphp paintingphp Operatorsphp,php Fillingphp)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$xphp php php-php arrayphp ofphp floatphp php(thephp Xphp cophp-ordinatesphp ofphp thephp verticesphp)
php php php php php php*php php@paramphp arrayphp php$yphp php php-php arrayphp ofphp floatphp php(thephp Yphp cophp-ordinatesphp ofphp thephp verticesphp)
php php php php php php*php php@paramphp integerphp php$fillType
php php php php php php*php php@paramphp integerphp php$fillMethod
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawPolygonphp(php$xphp,php php$yphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fillTypephp php=php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fillMethodphp php=php Zendphp_Pdfphp_Pagephp:php:FILLphp_METHODphp_NONphp_ZEROphp_WINDINGphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$firstPointphp php=php truephp;
php php php php php php php php foreachphp php(php$xphp asphp php$idphp php=php>php php$xValphp)php php{
php php php php php php php php php php php php php$xObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xValphp)php;
php php php php php php php php php php php php php$yObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp[php$idphp]php)php;

php php php php php php php php php php php php ifphp php(php$firstPointphp)php php{
php php php php php php php php php php php php php php php php php$pathphp php=php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php mphp\nphp"php;
php php php php php php php php php php php php php php php php php$firstPointphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$pathphp php.php=php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$pathphp;

php php php php php php php php switchphp php(php$fillTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp:
php php php php php php php php php php php php php php php php ifphp php(php$fillMethodphp php=php=php Zendphp_Pdfphp_Pagephp:php:FILLphp_METHODphp_NONphp_ZEROphp_WINDINGphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php bphp\nphp"php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Evenphp-Oddphp fillphp methodphp.
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php bphp*php\nphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp:
php php php php php php php php php php php php php php php php ifphp php(php$fillMethodphp php=php=php Zendphp_Pdfphp_Pagephp:php:FILLphp_METHODphp_NONphp_ZEROphp_WINDINGphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php hphp\nphp fphp\nphp"php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Evenphp-Oddphp fillphp methodphp.
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php hphp\nphp fphp*php\nphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Sphp\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp rectanglephp.
php php php php php php*
php php php php php php*php Fillphp typesphp:
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp php-php fillphp rectanglephp andphp strokephp php(defaultphp)
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp php php php php php php-php strokephp rectangle
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp php php php php php php php php-php fillphp rectangle
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp integerphp php$fillType
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawRectanglephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$fillTypephp php=php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php php$xphp1Objphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp1php)php;
php php php php php php php php php$yphp1Objphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp1php)php;
php php php php php php php php php$widthObjphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp2php php-php php$xphp1php)php;
php php php php php php php php php$heightphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp2php php-php php$yphp1php)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$widthObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$heightphp2Objphp-php>toStringphp(php)php php.php php"php rephp\nphp"php;

php php php php php php php php switchphp php(php$fillTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Bphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php fphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Sphp\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp roundedphp rectanglephp.
php php php php php php*
php php php php php php*php Fillphp typesphp:
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp php-php fillphp rectanglephp andphp strokephp php(defaultphp)
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp php php php php php php-php strokephp rectangle
php php php php php php*php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp php php php php php php php php-php fillphp rectangle
php php php php php php*
php php php php php php*php radiusphp isphp anphp integerphp representingphp radiusphp ofphp thephp fourphp cornersphp,php orphp anphp array
php php php php php php*php ofphp fourphp integersphp representingphp thephp radiusphp startingphp atphp topphp leftphp,php going
php php php php php php*php clockwise
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp1
php php php php php php*php php@paramphp floatphp php$yphp1
php php php php php php*php php@paramphp floatphp php$xphp2
php php php php php php*php php@paramphp floatphp php$yphp2
php php php php php php*php php@paramphp integerphp|arrayphp php$radius
php php php php php php*php php@paramphp integerphp php$fillType
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawRoundedRectanglephp(php$xphp1php,php php$yphp1php,php php$xphp2php,php php$yphp2php,php php$radiusphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fillTypephp php=php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp)
php php php php php{

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;

php php php php php php php php ifphp(php!isphp_arrayphp(php$radiusphp)php)php php{
php php php php php php php php php php php php php$radiusphp php=php arrayphp(php$radiusphp,php php$radiusphp,php php$radiusphp,php php$radiusphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php4php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php ifphp(php!issetphp(php$radiusphp[php$iphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$radiusphp[php$iphp]php php=php php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$topLeftXphp php php php php php php=php php$xphp1php;
php php php php php php php php php$topLeftYphp php php php php php php=php php$yphp2php;
php php php php php php php php php$topRightXphp php php php php php=php php$xphp2php;
php php php php php php php php php$topRightYphp php php php php php=php php$yphp2php;
php php php php php php php php php$bottomRightXphp php php=php php$xphp2php;
php php php php php php php php php$bottomRightYphp php php=php php$yphp1php;
php php php php php php php php php$bottomLeftXphp php php php=php php$xphp1php;
php php php php php php php php php$bottomLeftYphp php php php=php php$yphp1php;

php php php php php php php php php/php/drawphp topphp side
php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftXphp php+php php$radiusphp[php0php]php)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftYphp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php mphp\nphp"php;
php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightXphp php-php php$radiusphp[php1php]php)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightYphp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;

php php php php php php php php php/php/drawphp topphp rightphp cornerphp ifphp needed
php php php php php php php php ifphp php(php$radiusphp[php1php]php php!php=php php0php)php php{
php php php php php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightXphp)php;
php php php php php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightYphp)php;
php php php php php php php php php php php php php$xphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightXphp)php;
php php php php php php php php php php php php php$yphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightYphp)php;
php php php php php php php php php php php php php$xphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightXphp)php;
php php php php php php php php php php php php php$yphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topRightYphp php-php php$radiusphp[php1php]php)php;
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp2Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp2Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp3Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp3Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php cphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/drawphp rightphp side
php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightXphp)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightYphp php+php php$radiusphp[php2php]php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;

php php php php php php php php php/php/drawphp bottomphp rightphp cornerphp ifphp needed
php php php php php php php php ifphp php(php$radiusphp[php2php]php php!php=php php0php)php php{
php php php php php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightXphp)php;
php php php php php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightYphp)php;
php php php php php php php php php php php php php$xphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightXphp)php;
php php php php php php php php php php php php php$yphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightYphp)php;
php php php php php php php php php php php php php$xphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightXphp php-php php$radiusphp[php2php]php)php;
php php php php php php php php php php php php php$yphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomRightYphp)php;
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp2Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp2Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp3Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp3Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php cphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/drawphp bottomphp side
php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftXphp php+php php$radiusphp[php3php]php)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftYphp)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;

php php php php php php php php php/php/drawphp bottomphp leftphp cornerphp ifphp needed
php php php php php php php php ifphp php(php$radiusphp[php3php]php php!php=php php0php)php php{
php php php php php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftXphp)php;
php php php php php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftYphp)php;
php php php php php php php php php php php php php$xphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftXphp)php;
php php php php php php php php php php php php php$yphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftYphp)php;
php php php php php php php php php php php php php$xphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftXphp)php;
php php php php php php php php php php php php php$yphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bottomLeftYphp php+php php$radiusphp[php3php]php)php;
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp2Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp2Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp3Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp3Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php cphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/drawphp leftphp side
php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftXphp)php;
php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftYphp php-php php$radiusphp[php0php]php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php"php lphp\nphp"php;

php php php php php php php php php/php/drawphp topphp leftphp cornerphp ifphp needed
php php php php php php php php ifphp php(php$radiusphp[php0php]php php!php=php php0php)php php{
php php php php php php php php php php php php php$xphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftXphp)php;
php php php php php php php php php php php php php$yphp1Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftYphp)php;
php php php php php php php php php php php php php$xphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftXphp)php;
php php php php php php php php php php php php php$yphp2Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftYphp)php;
php php php php php php php php php php php php php$xphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftXphp php+php php$radiusphp[php0php]php)php;
php php php php php php php php php php php php php$yphp3Objphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$topLeftYphp)php;
php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xphp1Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp1Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp2Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp2Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$xphp3Objphp-php>toStringphp(php)php php.php php'php php'php php.php php$yphp3Objphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php cphp\nphp"php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$fillTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Bphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php fphp*php\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"php Sphp\nphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp linephp ofphp textphp atphp thephp specifiedphp positionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp floatphp php$x
php php php php php php*php php@paramphp floatphp php$y
php php php php php php*php php@paramphp stringphp php$charEncodingphp php(optionalphp)php Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php php Defaultsphp tophp currentphp localephp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp drawTextphp(php$textphp,php php$xphp,php php$yphp,php php$charEncodingphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_fontphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Fontphp hasphp notphp beenphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'Textphp'php)php;

php php php php php php php php php$textObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$thisphp-php>php_fontphp-php>encodeStringphp(php$textphp,php php$charEncodingphp)php)php;
php php php php php php php php php$xObjphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp)php;
php php php php php php php php php$yObjphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp)php;

php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php"BTphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php Tdphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$textObjphp-php>toStringphp(php)php php.php php"php Tjphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"ETphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php php/php*php*
php php php php php php*php Closephp thephp pathphp byphp drawingphp aphp straightphp linephp backphp tophp itphp'sphp beginningphp.
php php php php php php*
php php php php php php*php php@internalphp php(needsphp implementationphp)
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exceptionphp php php php php-php ifphp aphp pathphp hasnphp'tphp beenphp startedphp withphp pathMovephp(php)
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp pathClosephp(php)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Continuephp thephp openphp pathphp inphp aphp straightphp linephp tophp thephp specifiedphp positionphp.
php php php php php php*
php php php php php php*php php@internalphp php(needsphp implementationphp)
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp php php-php thephp Xphp cophp-ordinatephp tophp movephp to
php php php php php php*php php@paramphp floatphp php$yphp php php-php thephp Yphp cophp-ordinatephp tophp movephp to
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp pathLinephp(php$xphp,php php$yphp)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp aphp newphp pathphp atphp thephp specifiedphp positionphp.php Ifphp aphp pathphp hasphp alreadyphp beenphp startedphp,
php php php php php php*php movephp thephp cursorphp withoutphp drawingphp aphp linephp.
php php php php php php*
php php php php php php*php php@internalphp php(needsphp implementationphp)
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp php php-php thephp Xphp cophp-ordinatephp tophp movephp to
php php php php php php*php php@paramphp floatphp php$yphp php php-php thephp Yphp cophp-ordinatephp tophp movephp to
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp pathMovephp(php$xphp,php php$yphp)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp php*php/
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rotatephp thephp pagephp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp php php-php thephp Xphp cophp-ordinatephp ofphp rotationphp point
php php php php php php*php php@paramphp floatphp php$yphp php php-php thephp Yphp cophp-ordinatephp ofphp rotationphp point
php php php php php php*php php@paramphp floatphp php$anglephp php-php rotationphp angle
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp rotatephp(php$xphp,php php$yphp,php php$anglephp)
php php php php php{
php php php php php php php php php$cosphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(cosphp(php$anglephp)php)php;
php php php php php php php php php$sinphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(sinphp(php$anglephp)php)php;
php php php php php php php php php$mSinphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-php$sinphp-php>valuephp)php;

php php php php php php php php php$xObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp)php;
php php php php php php php php php$yObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp)php;

php php php php php php php php php$mXObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-php$xphp)php;
php php php php php php php php php$mYObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-php$yphp)php;


php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php'php1php php0php php0php php1php php'php php.php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$cosphp-php>toStringphp(php)php php.php php'php php'php php.php php$sinphp-php>toStringphp(php)php php.php php'php php'php php.php php$mSinphp-php>toStringphp(php)php php.php php'php php'php php.php php$cosphp-php>toStringphp(php)php php.php php"php php0php php0php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php1php php0php php0php php1php php'php php.php php$mXObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$mYObjphp-php>toStringphp(php)php php.php php"php cmphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scalephp coordinationphp systemphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xScalephp php-php Xphp dimentionphp scalephp factor
php php php php php php*php php@paramphp floatphp php$yScalephp php-php Yphp dimentionphp scalephp factor
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp scalephp(php$xScalephp,php php$yScalephp)
php php php php php{
php php php php php php php php php$xScaleObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xScalephp)php;
php php php php php php php php php$yScaleObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yScalephp)php;

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$xScaleObjphp-php>toStringphp(php)php php.php php'php php0php php0php php'php php.php php$yScaleObjphp-php>toStringphp(php)php php.php php"php php0php php0php cmphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp coordinationphp systemphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xShiftphp php-php Xphp coordinatephp shift
php php php php php php*php php@paramphp floatphp php$yShiftphp php-php Yphp coordinatephp shift
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp translatephp(php$xShiftphp,php php$yShiftphp)
php php php php php{
php php php php php php php php php$xShiftObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xShiftphp)php;
php php php php php php php php php$yShiftObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yShiftphp)php;

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php'php1php php0php php0php php1php php'php php.php php$xShiftObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yShiftObjphp-php>toStringphp(php)php php.php php"php cmphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp coordinationphp systemphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$xphp php php-php thephp Xphp cophp-ordinatephp ofphp axisphp skewphp point
php php php php php php*php php@paramphp floatphp php$yphp php php-php thephp Yphp cophp-ordinatephp ofphp axisphp skewphp point
php php php php php php*php php@paramphp floatphp php$xAnglephp php-php Xphp axisphp skewphp angle
php php php php php php*php php@paramphp floatphp php$yAnglephp php-php Yphp axisphp skewphp angle
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp skewphp(php$xphp,php php$yphp,php php$xAnglephp,php php$yAnglephp)
php php php php php{
php php php php php php php php php$tanXObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(tanphp(php$xAnglephp)php)php;
php php php php php php php php php$tanYObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-tanphp(php$yAnglephp)php)php;

php php php php php php php php php$xObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$xphp)php;
php php php php php php php php php$yObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$yphp)php;

php php php php php php php php php$mXObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-php$xphp)php;
php php php php php php php php php$mYObjphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php-php$yphp)php;

php php php php php php php php php$thisphp-php>php_addProcSetphp(php'PDFphp'php)php;
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php'php1php php0php php0php php1php php'php php.php php$xObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$yObjphp-php>toStringphp(php)php php.php php"php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php1php php'php php.php php$tanXObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$tanYObjphp-php>toStringphp(php)php php.php php"php php1php php0php php0php cmphp\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php1php php0php php0php php1php php'php php.php php$mXObjphp-php>toStringphp(php)php php.php php'php php'php php.php php$mYObjphp-php>toStringphp(php)php php.php php"php cmphp\nphp"php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp thephp rawphp dataphp tophp thephp pagephp'sphp contentphp streamphp.
php php php php php php*
php php php php php php*php Bephp surephp tophp consultphp thephp PDFphp referencephp tophp ensurephp yourphp syntaxphp isphp correctphp.php No
php php php php php php*php attemptphp isphp madephp tophp ensurephp thephp validityphp ofphp thephp streamphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp stringphp php$procSetphp php(optionalphp)php Namephp ofphp ProcSetphp tophp addphp.
php php php php php php*php php@returnphp Zendphp_Pdfphp_Canvasphp_Interface
php php php php php php*php/
php php php php publicphp functionphp rawWritephp(php$dataphp,php php$procSetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php emptyphp(php$procSetphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_addProcSetphp(php$procSetphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_contentsphp php.php=php php$dataphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
