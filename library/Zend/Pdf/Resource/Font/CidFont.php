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
php php*php php@versionphp php php php php$Idphp:php CidFontphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp.phpphp'php;

php/php*php*
php php*php Adobephp PDFphp CIDFontphp fontphp objectphp implementation
php php*
php php*php Aphp CIDFontphp programphp containsphp glyphphp descriptionsphp thatphp arephp accessedphp usingphp aphp CIDphp as
php php*php thephp characterphp selectorphp.php Therephp arephp twophp typesphp ofphp CIDFontphp.php Aphp Typephp php0php CIDFontphp contains
php php*php glyphphp descriptionsphp basedphp onphp Adobephp’sphp Typephp php1php fontphp formatphp,php whereasphp thosephp inphp a
php php*php Typephp php2php CIDFontphp arephp basedphp onphp thephp TrueTypephp fontphp formatphp.
php php*
php php*php Aphp CIDFontphp dictionaryphp isphp aphp PDFphp objectphp thatphp containsphp informationphp aboutphp aphp CIDFontphp programphp.
php php*php Althoughphp itsphp Typephp valuephp isphp Fontphp,php aphp CIDFontphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encoding
php php*php entryphp,php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php andphp itphp cannotphp be
php php*php usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.php Itphp isphp usedphp onlyphp asphp aphp descendantphp ofphp aphp Typephp php0php fontphp.
php php*php Thephp CMapphp inphp thephp Typephp php0php fontphp isphp whatphp definesphp thephp encodingphp thatphp mapsphp characterphp codesphp tophp CIDs
php php*php inphp thephp CIDFontphp.
php php*
php php*php Fontphp objectsphp shouldphp bephp normallyphp bephp obtainedphp fromphp thephp factoryphp methods
php php*php php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithNamephp}php andphp php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithPathphp}php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Resourcephp_Fontphp_CidFontphp extendsphp Zendphp_Pdfphp_Resourcephp_Font
php{
php php php php php/php*php*
php php php php php php*php Objectphp representingphp thephp fontphp'sphp cmapphp php(characterphp tophp glyphphp mapphp)php.
php php php php php php*php php@varphp Zendphp_Pdfphp_Cmap
php php php php php php*php/
php php php php protectedphp php$php_cmapphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp containingphp thephp widthsphp ofphp eachphp characterphp thatphp havephp entriesphp inphp usedphp characterphp mapphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_charWidthsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Widthphp forphp charactersphp missedphp inphp thephp font
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_missingCharWidthphp php=php php0php;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php$fontParserphp Fontphp parserphp object
php php php php php php*php php php containingphp OpenTypephp filephp.
php php php php php php*php php@paramphp integerphp php$embeddingOptionsphp Optionsphp forphp fontphp embeddingphp.
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


php php php php php php php php php$thisphp-php>php_cmapphp php=php php$fontParserphp-php>cmapphp;


php php php php php php php php php/php*php Resourcephp dictionaryphp php*php/

php php php php php php php php php$baseFontphp php=php php$thisphp-php>getFontNamephp(Zendphp_Pdfphp_Fontphp:php:NAMEphp_POSTSCRIPTphp,php php'enphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>BaseFontphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$baseFontphp)php;


php php php php php php php php php/php*php*
php php php php php php php php php php*php Preparephp widthsphp arrayphp.
php php php php php php php php php php*php/
php php php php php php php php php/php*php Constractphp charactersphp widthsphp arrayphp usingphp fontphp CMapphp andphp glyphsphp widthsphp arrayphp php*php/
php php php php php php php php php$glyphWidthsphp php=php php$fontParserphp-php>glyphWidthsphp;
php php php php php php php php php$charGlyphsphp php php=php php$thisphp-php>php_cmapphp-php>getCoveredCharactersGlyphsphp(php)php;
php php php php php php php php php$charWidthsphp php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$charGlyphsphp asphp php$charCodephp php=php>php php$glyphphp)php php{
php php php php php php php php php php php php php$charWidthsphp[php$charCodephp]php php=php php$glyphWidthsphp[php$glyphphp]php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_charWidthsphp php php php php php php php=php php$charWidthsphp;
php php php php php php php php php$thisphp-php>php_missingCharWidthphp php=php php$glyphWidthsphp[php0php]php;

php php php php php php php php php/php*php Widthphp arrayphp optimizationphp.php Stepphp1php:php extractphp defaultphp valuephp php*php/
php php php php php php php php php$widthFrequenciesphp php=php arrayphp_countphp_valuesphp(php$charWidthsphp)php;
php php php php php php php php php$defaultWidthphp php php php php php php php php php php=php nullphp;
php php php php php php php php php$defaultWidthFrequencyphp php=php php-php1php;
php php php php php php php php foreachphp php(php$widthFrequenciesphp asphp php$widthphp php=php>php php$frequencyphp)php php{
php php php php php php php php php php php php ifphp php(php$frequencyphp php>php php$defaultWidthFrequencyphp)php php{
php php php php php php php php php php php php php php php php php$defaultWidthphp php php php php php php php php php php=php php$widthphp;
php php php php php php php php php php php php php php php php php$defaultWidthFrequencyphp php=php php$frequencyphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Storephp defaultphp valuephp inphp thephp fontphp dictionary
php php php php php php php php php$thisphp-php>php_resourcephp-php>DWphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$thisphp-php>toEmSpacephp(php$defaultWidthphp)php)php;

php php php php php php php php php/php/php Removephp charactersphp whichphp correspondsphp tophp defaultphp widthphp fromphp thephp widthsphp array
php php php php php php php php php$defWidthCharsphp php=php arrayphp_keysphp(php$charWidthsphp,php php$defaultWidthphp)php;
php php php php php php php php foreachphp php(php$defWidthCharsphp asphp php$charCodephp)php php{
php php php php php php php php php php php php unsetphp(php$charWidthsphp[php$charCodephp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Orderphp cheracterphp widthsphp arayphp byphp characterphp codes
php php php php php php php php ksortphp(php$charWidthsphp,php SORTphp_NUMERICphp)php;

php php php php php php php php php/php*php Widthphp arrayphp optimizationphp.php Stepphp2php:php Compactphp characterphp codesphp sequencesphp php*php/
php php php php php php php php php$lastCharCodephp php=php php-php1php;
php php php php php php php php php$widthsSequencesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$charWidthsphp asphp php$charCodephp php=php>php php$widthphp)php php{
php php php php php php php php php php php php ifphp php(php$lastCharCodephp php=php=php php-php1php)php php{
php php php php php php php php php php php php php php php php php$charCodesSequensephp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$sequenceStartCodephp php=php php$charCodephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$charCodephp php!php=php php$lastCharCodephp php+php php1php)php php{
php php php php php php php php php php php php php php php php php/php/php Newphp chractersphp sequencephp detected
php php php php php php php php php php php php php php php php php$widthsSequencesphp[php$sequenceStartCodephp]php php=php php$charCodesSequensephp;
php php php php php php php php php php php php php php php php php$charCodesSequensephp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$sequenceStartCodephp php=php php$charCodephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$charCodesSequensephp[php]php php=php php$widthphp;
php php php php php php php php php php php php php$lastCharCodephp php=php php$charCodephp;
php php php php php php php php php}
php php php php php php php php php/php/php Savephp lastphp sequencephp,php ifphp widthsphp arrayphp isphp notphp emptyphp php(itphp mayphp happensphp forphp monospacedphp fontsphp)
php php php php php php php php ifphp php(countphp(php$charWidthsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$widthsSequencesphp[php$sequenceStartCodephp]php php=php php$charCodesSequensephp;
php php php php php php php php php}

php php php php php php php php php$pdfCharsWidthsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$widthsSequencesphp asphp php$startCodephp php=php>php php$widthsSequencephp)php php{
php php php php php php php php php php php php php/php*php Widthphp arrayphp optimizationphp.php Stepphp3php:php Compactphp widthsphp sequencesphp php*php/
php php php php php php php php php php php php php$pdfWidthsphp php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$lastWidthphp php php php php php php php php=php php-php1php;
php php php php php php php php php php php php php$widthsInSequencephp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$widthsSequencephp asphp php$widthphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$lastWidthphp php!php=php php$widthphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Newphp widthphp isphp detected
php php php php php php php php php php php php php php php php php php php php ifphp php(php$widthsInSequencephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Previousphp widthphp valuephp wasphp aphp partphp ofphp thephp widthsphp sequencephp.php Savephp itphp asphp php'cphp_php1stphp cphp_lastphp wphp'php.
php php php php php php php php php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp)php;php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Firstphp characterphp code
php php php php php php php php php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp php+php php$widthsInSequencephp php-php php1php)php;php php/php/php Lastphp characterphp code
php php php php php php php php php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$thisphp-php>toEmSpacephp(php$lastWidthphp)php)php;php php php php php php php php/php/php Width

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Resetphp widthsphp sequence
php php php php php php php php php php php php php php php php php php php php php php php php php$startCodephp php=php php$startCodephp php+php php$widthsInSequencephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$widthsInSequencephp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Collectphp newphp width
php php php php php php php php php php php php php php php php php php php php php$pdfWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$thisphp-php>toEmSpacephp(php$widthphp)php)php;

php php php php php php php php php php php php php php php php php php php php php$lastWidthphp php=php php$widthphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Widthphp isphp equalphp tophp previous
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$pdfWidthsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Wephp alreadyphp havephp somephp widthsphp collected
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Sophp,php wephp'vephp justphp detectedphp newphp widthsphp sequence

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Removephp lastphp elementphp fromphp widthsphp listphp,php sincephp itphp'sphp aphp partphp ofphp widthsphp sequence
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp_popphp(php$pdfWidthsphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php andphp writephp thephp restphp ifphp itphp'sphp notphp empty
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$pdfWidthsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Savephp itphp asphp php'cphp_php1stphp php[wphp1php wphp2php php.php.php.php wnphp]php'php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp)php;php php/php/php Firstphp characterphp code
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$pdfWidthsphp)php;php php php php/php/php Widthsphp array

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Resetphp widthsphp collection
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$startCodephp php+php=php countphp(php$pdfWidthsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pdfWidthsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$widthsInSequencephp php=php php2php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Continuephp widthsphp sequence
php php php php php php php php php php php php php php php php php php php php php php php php php$widthsInSequencephp+php+php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Checkphp ifphp wephp havephp widthsphp collectionphp orphp widthsphp sequencephp tophp witephp itphp down
php php php php php php php php php php php php ifphp php(countphp(php$pdfWidthsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Wephp havephp somephp widthsphp collected
php php php php php php php php php php php php php php php php php/php/php Savephp itphp asphp php'cphp_php1stphp php[wphp1php wphp2php php.php.php.php wnphp]php'php.
php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp)php;php php/php/php Firstphp characterphp code
php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$pdfWidthsphp)php;php php php php/php/php Widthsphp array
php php php php php php php php php php php php php}php elsephp ifphp php(php$widthsInSequencephp php!php=php php0php)php{
php php php php php php php php php php php php php php php php php/php/php Wephp havephp widthsphp sequence
php php php php php php php php php php php php php php php php php/php/php Savephp itphp asphp php'cphp_php1stphp cphp_lastphp wphp'php.
php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp)php;php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Firstphp characterphp code
php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$startCodephp php+php php$widthsInSequencephp php-php php1php)php;php php/php/php Lastphp characterphp code
php php php php php php php php php php php php php php php php php$pdfCharsWidthsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$thisphp-php>toEmSpacephp(php$lastWidthphp)php)php;php php php php php php php php/php/php Width
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Createphp thephp Zendphp_Pdfphp_Elementphp_Arrayphp objectphp andphp addphp itphp tophp thephp fontphp's
php php php php php php php php php php*php objectphp factoryphp andphp resourcephp dictionaryphp.
php php php php php php php php php php*php/
php php php php php php php php php$widthsArrayElementphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$pdfCharsWidthsphp)php;
php php php php php php php php php$widthsObjectphp php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(php$widthsArrayElementphp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>Wphp php=php php$widthsObjectphp;


php php php php php php php php php/php*php CIDSystemInfophp dictionaryphp php*php/
php php php php php php php php php$cidSystemInfophp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php$cidSystemInfophp-php>Registryphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php'Adobephp'php)php;
php php php php php php php php php$cidSystemInfophp-php>Orderingphp php php php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php'UCSphp'php)php;
php php php php php php php php php$cidSystemInfophp-php>Supplementphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php0php)php;
php php php php php php php php php$cidSystemInfoObjectphp php php php php php php php php php php php php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(php$cidSystemInfophp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>CIDSystemInfophp php=php php$cidSystemInfoObjectphp;
php php php php php}



php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp glyphphp numbersphp correspondingphp tophp thephp Unicodephp charactersphp.
php php php php php php*
php php php php php php*php Ifphp aphp particularphp characterphp doesnphp'tphp existphp inphp thisphp fontphp,php thephp specialphp php'missing
php php php php php php*php characterphp glyphphp'php willphp bephp substitutedphp.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp glyphNumberForCharacterphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$characterCodesphp Arrayphp ofphp Unicodephp characterphp codesphp php(codephp pointsphp)php.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php/
php php php php publicphp functionphp glyphNumbersForCharactersphp(php$characterCodesphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp glyphphp numberphp correspondingphp tophp thephp Unicodephp characterphp.
php php php php php php*
php php php php php php*php Ifphp aphp particularphp characterphp doesnphp'tphp existphp inphp thisphp fontphp,php thephp specialphp php'missing
php php php php php php*php characterphp glyphphp'php willphp bephp substitutedphp.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp glyphNumbersForCharactersphp(php)php}php whichphp isphp optimizedphp forphp bulk
php php php php php php*php operationsphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$characterCodephp Unicodephp characterphp codephp php(codephp pointphp)php.
php php php php php php*php php@returnphp integerphp Glyphphp numberphp.
php php php php php php*php/
php php php php publicphp functionphp glyphNumberForCharacterphp(php$characterCodephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp numberphp betweenphp php0php andphp php1php inclusivephp thatphp indicatesphp thephp percentage
php php php php php php*php ofphp charactersphp inphp thephp stringphp whichphp arephp coveredphp byphp glyphsphp inphp thisphp fontphp.
php php php php php php*
php php php php php php*php Sincephp nophp onephp fontphp willphp containphp glyphsphp forphp thephp entirephp Unicodephp character
php php php php php php*php rangephp,php thisphp methodphp canphp bephp usedphp tophp helpphp locatephp aphp suitablephp fontphp whenphp the
php php php php php php*php actualphp contentsphp ofphp thephp stringphp arephp notphp knownphp.
php php php php php php*
php php php php php php*php Notephp thatphp somephp fontsphp liephp aboutphp thephp charactersphp theyphp supportphp.php Additionallyphp,
php php php php php php*php fontsphp donphp'tphp usuallyphp containphp glyphsphp forphp controlphp charactersphp suchphp asphp tabs
php php php php php php*php andphp linephp breaksphp,php sophp itphp isphp rarephp thatphp youphp willphp getphp backphp aphp fullphp php1php.php0php scorephp.
php php php php php php*php Thephp resultingphp valuephp shouldphp bephp consideredphp informationalphp onlyphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp php(optionalphp)php Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php php Ifphp omittedphp,php usesphp php'currentphp localephp'php.
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getCoveredPercentagephp(php$stringphp,php php$charEncodingphp php=php php'php'php)
php php php php php{
php php php php php php php php php/php*php Convertphp thephp stringphp tophp UTFphp-php1php6BEphp encodingphp sophp wephp canphp matchphp thephp stringphp's
php php php php php php php php php php*php characterphp codesphp tophp thosephp foundphp inphp thephp cmapphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$charEncodingphp php!php=php php'UTFphp-php1php6BEphp'php)php php{
php php php php php php php php php php php php php$stringphp php=php iconvphp(php$charEncodingphp,php php'UTFphp-php1php6BEphp'php,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php php$charCountphp php=php iconvphp_strlenphp(php$stringphp,php php'UTFphp-php1php6BEphp'php)php;
php php php php php php php php ifphp php(php$charCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php php/php*php Calculatephp thephp scorephp byphp doingphp aphp lookupphp forphp eachphp characterphp.
php php php php php php php php php php*php/
php php php php php php php php php$scorephp php=php php0php;
php php php php php php php php php$maxIndexphp php=php strlenphp(php$stringphp)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$maxIndexphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todophp Properlyphp handlephp charactersphp encodedphp asphp surrogatephp pairsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$charCodephp php=php php(ordphp(php$stringphp[php$iphp]php)php <php<php php8php)php php|php ordphp(php$stringphp[php+php+php$iphp]php)php;
php php php php php php php php php php php php php/php*php Thisphp couldphp probablyphp bephp optimizedphp aphp bitphp withphp aphp binaryphp searchphp.php.php.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_charWidthsphp[php$charCodephp]php)php)php php{
php php php php php php php php php php php php php php php php php$scorephp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$scorephp php/php php$charCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp Charsphp.
php php php php php php*
php php php php php php*php Thephp widthsphp arephp expressedphp inphp thephp fontphp'sphp glyphphp spacephp.php Youphp arephp responsible
php php php php php php*php forphp convertingphp tophp userphp spacephp asphp necessaryphp.php Seephp php{php@linkphp unitsPerEmphp(php)php}php.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp widthForCharphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php/
php php php php publicphp functionphp widthsForCharsphp(php$charCodesphp)
php php php php php{
php php php php php php php php php$widthsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$charCodesphp asphp php$keyphp php=php>php php$charCodephp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_charWidthsphp[php$charCodephp]php)php)php php{
php php php php php php php php php php php php php php php php php$widthsphp[php$keyphp]php php=php php$thisphp-php>php_missingCharWidthphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$widthsphp[php$keyphp]php php=php php$thisphp-php>php_charWidthsphp[php$charCodephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$widthsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthphp ofphp thephp characterphp.
php php php php php php*
php php php php php php*php Likephp php{php@linkphp widthsForCharsphp(php)php}php butphp usedphp forphp onephp charphp atphp aphp timephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$charCode
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp widthForCharphp(php$charCodephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_charWidthsphp[php$charCodephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_missingCharWidthphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_charWidthsphp[php$charCodephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp glyphsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp widthsForGlyphsphp(php$glyphNumbersphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthphp ofphp thephp glyphphp.
php php php php php php*
php php php php php php*php Likephp php{php@linkphp widthsForGlyphsphp(php)php}php butphp usedphp forphp onephp glyphphp atphp aphp timephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$glyphNumber
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp widthForGlyphphp(php$glyphNumberphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp stringphp tophp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php php php php php php*php/
php php php php publicphp functionphp encodeStringphp(php$stringphp,php php$charEncodingphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp stringphp fromphp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp resultingphp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp decodeStringphp(php$stringphp,php php$charEncodingphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php CIDFontphp objectphp isphp notphp actuallyphp aphp fontphp.php Itphp doesphp notphp havephp anphp Encodingphp entryphp,
php php php php php php php php php php*php itphp cannotphp bephp listedphp inphp thephp Fontphp subdictionaryphp ofphp aphp resourcephp dictionaryphp,php and
php php php php php php php php php php*php itphp cannotphp bephp usedphp asphp thephp operandphp ofphp thephp Tfphp operatorphp.
php php php php php php php php php php*
php php php php php php php php php php*php Throwphp anphp exceptionphp.
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'CIDFontphp PDFphp objectsphp couldphp notphp bephp usedphp asphp thephp operandphp ofphp thephp textphp drawingphp operatorsphp'php)php;
php php php php php}
php}
