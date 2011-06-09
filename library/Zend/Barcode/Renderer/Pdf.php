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
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@subpackagephp Renderer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Pdfphp.phpphp php2php2php4php1php8php php2php0php1php0php-php0php6php-php1php1php php1php6php:php2php7php:php2php2Zphp mikaelkaelphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Barcodephp_Rendererphp_RendererAbstractphp php*php/
requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Pdfphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Pdfphp_Pagephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Pagephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Pdfphp_Colorphp_Rgbphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/Rgbphp.phpphp'php;

php/php*php*
php php*php Classphp forphp renderingphp thephp barcodephp inphp PDFphp resource
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Rendererphp_Pdfphp extendsphp Zendphp_Barcodephp_Rendererphp_RendererAbstract
php{
php php php php php/php*php*
php php php php php php*php PDFphp resource
php php php php php php*php php@varphp Zendphp_Pdf
php php php php php php*php/
php php php php protectedphp php$php_resourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Pagephp numberphp inphp PDFphp resource
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_pagephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Modulephp sizephp rendering
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_moduleSizephp php=php php0php.php5php;

php php php php php/php*php*
php php php php php php*php Setphp anphp imagephp resourcephp tophp drawphp thephp barcodephp inside
php php php php php php*php php@paramphp resourcephp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setResourcephp(php$pdfphp,php php$pagephp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php!php$pdfphp instanceofphp Zendphp_Pdfphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp Zendphp_Pdfphp resourcephp providedphp tophp setResourcephp(php)php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_resourcephp php=php php$pdfphp;
php php php php php php php php php$thisphp-php>php_pagephp php php php php php=php intvalphp(php$pagephp)php;

php php php php php php php php ifphp php(php!countphp(php$thisphp-php>php_resourcephp-php>pagesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_pagephp php=php php0php;
php php php php php php php php php php php php php$thisphp-php>php_resourcephp-php>pagesphp[php]php php=php newphp Zendphp_Pdfphp_Pagephp(
php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Pagephp:php:SIZEphp_Aphp4
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp rendererphp parameters
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkParamsphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp thephp barcodephp inphp thephp PDFphp,php sendphp headersphp andphp thephp PDF
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>drawphp(php)php;
php php php php php php php php headerphp(php"Contentphp-Typephp:php applicationphp/pdfphp"php)php;
php php php php php php php php echophp php$thisphp-php>php_resourcephp-php>renderphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp PDFphp resource
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initRendererphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php=php newphp Zendphp_Pdfphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_resourcephp-php>pagesphp[php]php php=php newphp Zendphp_Pdfphp_Pagephp(
php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Pagephp:php:SIZEphp_Aphp4
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$pdfPagephp php=php php$thisphp-php>php_resourcephp-php>pagesphp[php$thisphp-php>php_pagephp]php;
php php php php php php php php php$thisphp-php>php_adjustPositionphp(php$pdfPagephp-php>getHeightphp(php)php,php php$pdfPagephp-php>getWidthphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp renderingphp resource
php php php php php php*php php@paramphp arrayphp php$points
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp booleanphp php$filled
php php php php php php*php/
php php php php protectedphp functionphp php_drawPolygonphp(php$pointsphp,php php$colorphp,php php$filledphp php=php truephp)
php php php php php{
php php php php php php php php php$pagephp php=php php$thisphp-php>php_resourcephp-php>pagesphp[php$thisphp-php>php_pagephp]php;
php php php php php php php php foreachphp php(php$pointsphp asphp php$pointphp)php php{
php php php php php php php php php php php php php$xphp[php]php php=php php$pointphp[php0php]php php*php php$thisphp-php>php_moduleSizephp php+php php$thisphp-php>php_leftOffsetphp;
php php php php php php php php php php php php php$yphp[php]php php=php php$pagephp-php>getHeightphp(php)php php-php php$pointphp[php1php]php php*php php$thisphp-php>php_moduleSizephp php-php php$thisphp-php>php_topOffsetphp;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$yphp)php php=php=php php4php)php php{
php php php php php php php php php php php php ifphp php(php$xphp[php0php]php php!php=php php$xphp[php3php]php php&php&php php$yphp[php0php]php php=php=php php$yphp[php3php]php)php php{
php php php php php php php php php php php php php php php php php$yphp[php0php]php php-php=php php(php$thisphp-php>php_moduleSizephp php/php php2php)php;
php php php php php php php php php php php php php php php php php$yphp[php3php]php php-php=php php(php$thisphp-php>php_moduleSizephp php/php php2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$xphp[php1php]php php!php=php php$xphp[php2php]php php&php&php php$yphp[php1php]php php=php=php php$yphp[php2php]php)php php{
php php php php php php php php php php php php php php php php php$yphp[php1php]php php+php=php php(php$thisphp-php>php_moduleSizephp php/php php2php)php;
php php php php php php php php php php php php php php php php php$yphp[php2php]php php+php=php php(php$thisphp-php>php_moduleSizephp php/php php2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$colorphp php=php newphp Zendphp_Pdfphp_Colorphp_Rgbphp(
php php php php php php php php php php php php php(php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php)php php/php php2php5php5php.php0php,
php php php php php php php php php php php php php(php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php)php php/php php2php5php5php.php0php,
php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0php0php0FFphp)php php/php php2php5php5php.php0
php php php php php php php php php)php;

php php php php php php php php php$pagephp-php>setLineColorphp(php$colorphp)php;
php php php php php php php php php$pagephp-php>setFillColorphp(php$colorphp)php;
php php php php php php php php php$pagephp-php>setLineWidthphp(php$thisphp-php>php_moduleSizephp)php;

php php php php php php php php php$fillTypephp php=php php(php$filledphp)
php php php php php php php php php php php php php php php php php php php?php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_FILLphp_ANDphp_STROKE
php php php php php php php php php php php php php php php php php php php:php Zendphp_Pdfphp_Pagephp:php:SHAPEphp_DRAWphp_STROKEphp;

php php php php php php php php php$pagephp-php>drawPolygonphp(php$xphp,php php$yphp,php php$fillTypephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp textphp inphp thephp renderingphp resource
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp floatphp php$size
php php php php php php*php php@paramphp arrayphp php$position
php php php php php php*php php@paramphp stringphp php$font
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp stringphp php$alignment
php php php php php php*php php@paramphp floatphp php$orientation
php php php php php php*php/
php php php php protectedphp functionphp php_drawTextphp(
php php php php php php php php php$textphp,
php php php php php php php php php$sizephp,
php php php php php php php php php$positionphp,
php php php php php php php php php$fontphp,
php php php php php php php php php$colorphp,
php php php php php php php php php$alignmentphp php=php php'centerphp'php,
php php php php php php php php php$orientationphp php=php php0
php php php php php)php php{
php php php php php php php php php$pagephp php php=php php$thisphp-php>php_resourcephp-php>pagesphp[php$thisphp-php>php_pagephp]php;
php php php php php php php php php$colorphp php=php newphp Zendphp_Pdfphp_Colorphp_Rgbphp(
php php php php php php php php php php php php php(php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php)php php/php php2php5php5php.php0php,
php php php php php php php php php php php php php(php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php)php php/php php2php5php5php.php0php,
php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0php0php0FFphp)php php/php php2php5php5php.php0
php php php php php php php php php)php;

php php php php php php php php php$pagephp-php>setLineColorphp(php$colorphp)php;
php php php php php php php php php$pagephp-php>setFillColorphp(php$colorphp)php;
php php php php php php php php php$pagephp-php>setFontphp(Zendphp_Pdfphp_Fontphp:php:fontWithPathphp(php$fontphp)php,php php$sizephp php*php php$thisphp-php>php_moduleSizephp php*php php1php.php2php)php;

php php php php php php php php php$widthphp php=php php$thisphp-php>widthForStringUsingFontSizephp(
php php php php php php php php php php php php php$textphp,
php php php php php php php php php php php php Zendphp_Pdfphp_Fontphp:php:fontWithPathphp(php$fontphp)php,
php php php php php php php php php php php php php$sizephp php*php php$thisphp-php>php_moduleSize
php php php php php php php php php)php;

php php php php php php php php php$anglephp php=php piphp(php)php php*php php$orientationphp php/php php1php8php0php;
php php php php php php php php php$leftphp php=php php$positionphp[php0php]php php*php php$thisphp-php>php_moduleSizephp php+php php$thisphp-php>php_leftOffsetphp;
php php php php php php php php php$topphp php php=php php$pagephp-php>getHeightphp(php)php php-php php$positionphp[php1php]php php*php php$thisphp-php>php_moduleSizephp php-php php$thisphp-php>php_topOffsetphp;

php php php php php php php php switchphp php(php$alignmentphp)php php{
php php php php php php php php php php php php casephp php'centerphp'php:
php php php php php php php php php php php php php php php php php$leftphp php-php=php php(php$widthphp php/php php2php)php php*php cosphp(php$anglephp)php;
php php php php php php php php php php php php php php php php php$topphp php php-php=php php(php$widthphp php/php php2php)php php*php sinphp(php$anglephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'rightphp'php:
php php php php php php php php php php php php php php php php php$leftphp php-php=php php$widthphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php php$pagephp-php>rotatephp(php$leftphp,php php$topphp,php php$anglephp)php;
php php php php php php php php php$pagephp-php>drawTextphp(php$textphp,php php$leftphp,php php$topphp)php;
php php php php php php php php php$pagephp-php>rotatephp(php$leftphp,php php$topphp,php php-php php$anglephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp thephp widthphp ofphp aphp stringphp:
php php php php php php*php inphp casephp ofphp usingphp alignmentphp parameterphp inphp drawText
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp Zendphp_Pdfphp_Fontphp php$font
php php php php php php*php php@paramphp floatphp php$fontSize
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp widthForStringUsingFontSizephp(php$textphp,php php$fontphp,php php$fontSizephp)
php php php php php{
php php php php php php php php php$drawingStringphp php=php iconvphp(php'UTFphp-php8php'php,php php'UTFphp-php1php6BEphp/php/IGNOREphp'php,php php$textphp)php;
php php php php php php php php php$charactersphp php php php php=php arrayphp(php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$drawingStringphp)php;php php$iphp php+php+php)php php{
php php php php php php php php php php php php php$charactersphp[php]php php=php php(ordphp(php$drawingStringphp[php$iphp php+php+php]php)php <php<php php8php)php php|php ordphp(php$drawingStringphp[php$iphp]php)php;
php php php php php php php php php}
php php php php php php php php php$glyphsphp php=php php$fontphp-php>glyphNumbersForCharactersphp(php$charactersphp)php;
php php php php php php php php php$widthsphp php=php php$fontphp-php>widthsForGlyphsphp(php$glyphsphp)php;
php php php php php php php php php$stringWidthphp php=php php(arrayphp_sumphp(php$widthsphp)php php/php php$fontphp-php>getUnitsPerEmphp(php)php)php php*php php$fontSizephp;
php php php php php php php php returnphp php$stringWidthphp;
php php php php php}
php}
