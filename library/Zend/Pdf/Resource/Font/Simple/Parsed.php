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
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Parsedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp_Simplephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp/Simplephp.phpphp'php;

php/php*php*
php php*php Parsedphp andphp php(optionalyphp)php embeddedphp fontsphp implementation
php php*
php php*php OpenTypephp fontsphp canphp containphp eitherphp TrueTypephp orphp PostScriptphp Typephp php1php outlinesphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Resourcephp_Fontphp_Simplephp_Parsedphp extendsphp Zendphp_Pdfphp_Resourcephp_Fontphp_Simple
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php$fontParserphp Fontphp parserphp objectphp containingphp OpenTypephp filephp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php$fontParserphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;


php php php php php php php php php$fontParserphp-php>parsephp(php)php;

php php php php php php php php php/php*php Objectphp propertiesphp php*php/

php php php php php php php php php$thisphp-php>php_fontNamesphp php=php php$fontParserphp-php>namesphp;

php php php php php php php php php$thisphp-php>php_isBoldphp php php php php php php php=php php$fontParserphp-php>isBoldphp;
php php php php php php php php php$thisphp-php>php_isItalicphp php php php php php=php php$fontParserphp-php>isItalicphp;
php php php php php php php php php$thisphp-php>php_isMonospacedphp php=php php$fontParserphp-php>isMonospacedphp;

php php php php php php php php php$thisphp-php>php_underlinePositionphp php php=php php$fontParserphp-php>underlinePositionphp;
php php php php php php php php php$thisphp-php>php_underlineThicknessphp php=php php$fontParserphp-php>underlineThicknessphp;
php php php php php php php php php$thisphp-php>php_strikePositionphp php php php php php=php php$fontParserphp-php>strikePositionphp;
php php php php php php php php php$thisphp-php>php_strikeThicknessphp php php php php=php php$fontParserphp-php>strikeThicknessphp;

php php php php php php php php php$thisphp-php>php_unitsPerEmphp php=php php$fontParserphp-php>unitsPerEmphp;

php php php php php php php php php$thisphp-php>php_ascentphp php php=php php$fontParserphp-php>ascentphp;
php php php php php php php php php$thisphp-php>php_descentphp php=php php$fontParserphp-php>descentphp;
php php php php php php php php php$thisphp-php>php_lineGapphp php=php php$fontParserphp-php>lineGapphp;

php php php php php php php php php$thisphp-php>php_glyphWidthsphp php php php php php php php=php php$fontParserphp-php>glyphWidthsphp;
php php php php php php php php php$thisphp-php>php_missingGlyphWidthphp php=php php$thisphp-php>php_glyphWidthsphp[php0php]php;


php php php php php php php php php$thisphp-php>php_cmapphp php=php php$fontParserphp-php>cmapphp;


php php php php php php php php php/php*php Resourcephp dictionaryphp php*php/

php php php php php php php php php$baseFontphp php=php php$thisphp-php>getFontNamephp(Zendphp_Pdfphp_Fontphp:php:NAMEphp_POSTSCRIPTphp,php php'enphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>BaseFontphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$baseFontphp)php;

php php php php php php php php php$thisphp-php>php_resourcephp-php>FirstCharphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php0php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>LastCharphp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(countphp(php$thisphp-php>php_glyphWidthsphp)php php-php php1php)php;

php php php php php php php php php/php*php Nowphp convertphp thephp scalarphp glyphphp widthsphp tophp Zendphp_Pdfphp_Elementphp_Numericphp objectsphp.
php php php php php php php php php php*php/
php php php php php php php php php$pdfWidthsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_glyphWidthsphp asphp php$widthphp)php php{
php php php php php php php php php php php php php$pdfWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$thisphp-php>toEmSpacephp(php$widthphp)php)php;
php php php php php php php php php}
php php php php php php php php php/php*php Createphp thephp Zendphp_Pdfphp_Elementphp_Arrayphp objectphp andphp addphp itphp tophp thephp fontphp's
php php php php php php php php php php*php objectphp factoryphp andphp resourcephp dictionaryphp.
php php php php php php php php php php*php/
php php php php php php php php php$widthsArrayElementphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$pdfWidthsphp)php;
php php php php php php php php php$widthsObjectphp php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(php$widthsArrayElementphp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>Widthsphp php=php php$widthsObjectphp;
php php php php php}
php}
