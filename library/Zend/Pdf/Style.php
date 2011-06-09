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
php php*php php@versionphp php php php php$Idphp:php Stylephp.phpphp php2php2php9php0php8php php2php0php1php0php-php0php8php-php2php5php php2php0php:php5php2php:php4php7Zphp alexanderphp php$
php php*php/


php/php*php*
php php*php Stylephp objectphp.
php php*php Stylephp objectphp doesnphp'tphp directlyphp correspondphp tophp anyphp PDFphp filephp objectphp.
php php*php Itphp'sphp utilityphp classphp,php usedphp asphp aphp containerphp forphp stylephp informationphp.
php php*php Itphp'sphp usedphp byphp Zendphp_Pdfphp_Pagephp classphp inphp drawphp operationsphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Style
php{
php php php php php/php*php*
php php php php php php*php Fillphp colorphp.
php php php php php php*php Usedphp tophp fillphp geometricphp shapesphp orphp textphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Colorphp|null
php php php php php php*php/
php php php php privatephp php$php_fillColorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Linephp colorphp.
php php php php php php*php Currentphp colorphp,php usedphp forphp linesphp andphp fontphp outlinesphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Colorphp|null
php php php php php php*php/

php php php php privatephp php$php_colorphp;

php php php php php/php*php*
php php php php php php*php Linephp widthphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Numeric
php php php php php php*php/
php php php php privatephp php$php_lineWidthphp;

php php php php php/php*php*
php php php php php php*php Arrayphp whichphp describesphp linephp dashingphp patternphp.
php php php php php php*php Itphp'sphp arrayphp ofphp numericphp:
php php php php php php*php arrayphp(php$onphp_lengthphp,php php$offphp_lengthphp,php php$onphp_lengthphp,php php$offphp_lengthphp,php php.php.php.php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_lineDashingPatternphp;

php php php php php/php*php*
php php php php php php*php Linephp dashingphp phase
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php privatephp php$php_lineDashingPhasephp;

php php php php php/php*php*
php php php php php php*php Currentphp font
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Resourcephp_Font
php php php php php php*php/
php php php php privatephp php$php_fontphp;

php php php php php/php*php*
php php php php php php*php Fontphp size
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php privatephp php$php_fontSizephp;



php php php php php/php*php*
php php php php php php*php Createphp stylephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Stylephp php$anotherStyle
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$anotherStylephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$anotherStylephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_fillColorphp php php php php php php php php php php=php php$anotherStylephp-php>php_fillColorphp;
php php php php php php php php php php php php php$thisphp-php>php_colorphp php php php php php php php php php php php php php php=php php$anotherStylephp-php>php_colorphp;
php php php php php php php php php php php php php$thisphp-php>php_lineWidthphp php php php php php php php php php php=php php$anotherStylephp-php>php_lineWidthphp;
php php php php php php php php php php php php php$thisphp-php>php_lineDashingPatternphp php=php php$anotherStylephp-php>php_lineDashingPatternphp;
php php php php php php php php php php php php php$thisphp-php>php_lineDashingPhasephp php php php=php php$anotherStylephp-php>php_lineDashingPhasephp;
php php php php php php php php php php php php php$thisphp-php>php_fontphp php php php php php php php php php php php php php php php=php php$anotherStylephp-php>php_fontphp;
php php php php php php php php php php php php php$thisphp-php>php_fontSizephp php php php php php php php php php php php=php php$anotherStylephp-php>php_fontSizephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp fillphp colorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp php$color
php php php php php php*php/
php php php php publicphp functionphp setFillColorphp(Zendphp_Pdfphp_Colorphp php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fillColorphp php=php php$colorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linephp colorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp php$color
php php php php php php*php/
php php php php publicphp functionphp setLineColorphp(Zendphp_Pdfphp_Colorphp php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_colorphp php=php php$colorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linephp widthphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$width
php php php php php php*php/
php php php php publicphp functionphp setLineWidthphp(php$widthphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_lineWidthphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp linephp dashingphp pattern
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$pattern
php php php php php php*php php@paramphp floatphp php$phase
php php php php php php*php/
php php php php publicphp functionphp setLineDashingPatternphp(php$patternphp,php php$phasephp php=php php0php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Pagephp.phpphp'php;
php php php php php php php php ifphp php(php$patternphp php=php=php=php Zendphp_Pdfphp_Pagephp:php:LINEphp_DASHINGphp_SOLIDphp)php php{
php php php php php php php php php php php php php$patternphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$phasephp php php php=php php0php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_lineDashingPatternphp php=php php$patternphp;
php php php php php php php php php$thisphp-php>php_lineDashingPhasephp php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$phasephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp currentphp fontphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Resourcephp_Fontphp php$font
php php php php php php*php php@paramphp floatphp php$fontSize
php php php php php php*php/
php php php php publicphp functionphp setFontphp(Zendphp_Pdfphp_Resourcephp_Fontphp php$fontphp,php php$fontSizephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fontphp php=php php$fontphp;
php php php php php php php php php$thisphp-php>php_fontSizephp php=php php$fontSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Modifyphp currentphp fontphp size
php php php php php php*
php php php php php php*php php@paramphp floatphp php$fontSize
php php php php php php*php/
php php php php publicphp functionphp setFontSizephp(php$fontSizephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fontSizephp php=php php$fontSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fillphp colorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Colorphp|null
php php php php php php*php/
php php php php publicphp functionphp getFillColorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fillColorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp linephp colorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Colorphp|null
php php php php php php*php/
php php php php publicphp functionphp getLineColorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_colorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp linephp widthphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getLineWidthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lineWidthphp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp linephp dashingphp pattern
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLineDashingPatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lineDashingPatternphp;
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
php php php php php php*php Getphp linephp dashingphp phase
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getLineDashingPhasephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lineDashingPhasephp-php>valuephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Dumpphp stylephp tophp aphp stringphp,php whichphp canphp bephp directlyphp insertedphp intophp contentphp stream
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp instructionsphp(php)
php php php php php{
php php php php php php php php php$instructionsphp php=php php'php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_fillColorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$instructionsphp php.php=php php$thisphp-php>php_fillColorphp-php>instructionsphp(falsephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_colorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$instructionsphp php.php=php php$thisphp-php>php_colorphp-php>instructionsphp(truephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_lineWidthphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$instructionsphp php.php=php php$thisphp-php>php_lineWidthphp-php>toStringphp(php)php php.php php"php wphp\nphp"php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_lineDashingPatternphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
php php php php php php php php php php php php php$dashPatternphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_lineDashingPatternphp asphp php$dashItemphp)php php{
php php php php php php php php php php php php php php php php php$dashElementphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$dashItemphp)php;
php php php php php php php php php php php php php php php php php$dashPatternphp-php>itemsphp[php]php php=php php$dashElementphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$instructionsphp php.php=php php$dashPatternphp-php>toStringphp(php)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_lineDashingPhasephp-php>toStringphp(php)php php.php php"php dphp\nphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$instructionsphp;
php php php php php}

php}
