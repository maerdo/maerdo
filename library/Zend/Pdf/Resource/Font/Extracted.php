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
php php*php php@versionphp php php php php$Idphp:php Extractedphp.phpphp php2php0php8php6php6php php2php0php1php0php-php0php2php-php0php3php php0php5php:php3php0php:php0php7Zphp yoshidaphp@zendphp.cophp.jpphp php$
php php*php/


php/php*php*php php@seephp Zendphp_Pdfphp_Resourcephp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp.phpphp'php;

php/php*php*
php php*php Extractedphp fontsphp implementation
php php*
php php*php Thesphp classphp allowsphp tophp extractphp fontsphp alreadyphp mentionedphp withinphp PDFphp documentphp andphp usephp them
php php*php forphp textphp drawingphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Fontphp_Extractedphp extendsphp Zendphp_Pdfphp_Resourcephp_Font
php{
php php php php php/php*php*
php php php php php php*php Messages
php php php php php php*php/
php php php php constphp TYPEphp_NOTphp_SUPPORTEDphp php=php php'Unsupportedphp fontphp typephp.php'php;
php php php php constphp ENCODINGphp_NOTphp_SUPPORTEDphp php php=php php'Fontphp encodingphp isphp notphp supportedphp'php;
php php php php constphp OPERATIONphp_NOTphp_SUPPORTEDphp php=php php'Operationphp isphp notphp supportedphp forphp extractedphp fontsphp'php;

php php php php php/php*php*
php php php php php php*php Extractedphp fontphp encoding
php php php php php php*
php php php php php php*php Onlyphp php'Identityphp-Hphp'php andphp php'WinAnsiEncodingphp'php encodingsphp arephp supportedphp now
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php$fontDictionaryphp isphp aphp Zendphp_Pdfphp_Elementphp_Referencephp orphp Zendphp_Pdfphp_Elementphp_Objectphp object
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$fontDictionary
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$fontDictionaryphp)
php php php php php{
php php php php php php php php php/php/php Extractphp objectphp factoryphp andphp resourcephp objectphp fromphp fontphp dirctionaryphp object
php php php php php php php php php$thisphp-php>php_objectFactoryphp php=php php$fontDictionaryphp-php>getFactoryphp(php)php;
php php php php php php php php php$thisphp-php>php_resourcephp php php php php php php=php php$fontDictionaryphp;

php php php php php php php php ifphp php(php$fontDictionaryphp-php>Encodingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php$fontDictionaryphp-php>Encodingphp-php>valuephp;
php php php php php php php php php}

php php php php php php php php switchphp php(php$fontDictionaryphp-php>Subtypephp-php>valuephp)php php{
php php php php php php php php php php php php casephp php'Typephp0php'php:
php php php php php php php php php php php php php php php php php/php/php Compositephp typephp php0php font
php php php php php php php php php php php php php php php php ifphp php(countphp(php$fontDictionaryphp-php>DescendantFontsphp-php>itemsphp)php php!php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Multiplephp descendantphp fontsphp arephp notphp supported
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:TYPEphp_NOTphp_SUPPORTEDphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$fontDictionaryIteratorphp php=php php$fontDictionaryphp-php>DescendantFontsphp-php>itemsphp-php>getIteratorphp(php)php;
php php php php php php php php php php php php php php php php php$fontDictionaryIteratorphp-php>rewindphp(php)php;
php php php php php php php php php php php php php php php php php$descendantFontphp php=php php$fontDictionaryIteratorphp-php>currentphp(php)php;
php php php php php php php php php php php php php php php php php$fontDescriptorphp php=php php$descendantFontphp-php>FontDescriptorphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Typephp1php'php:
php php php php php php php php php php php php php php php php ifphp php(php$fontDictionaryphp-php>FontDescriptorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Thatphp'sphp onephp ofphp thephp standardphp fonts
php php php php php php php php php php php php php php php php php php php php php$standardFontphp php=php Zendphp_Pdfphp_Fontphp:php:fontWithNamephp(php$fontDictionaryphp-php>BaseFontphp-php>valuephp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fontNamesphp php php php php php php php php php php=php php$standardFontphp-php>getFontNamesphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_isBoldphp php php php php php php php php php php php php php=php php$standardFontphp-php>isBoldphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_isItalicphp php php php php php php php php php php php=php php$standardFontphp-php>isItalicphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_isMonospacephp php php php php php php php php=php php$standardFontphp-php>isMonospacephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_underlinePositionphp php php=php php$standardFontphp-php>getUnderlinePositionphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_underlineThicknessphp php=php php$standardFontphp-php>getUnderlineThicknessphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_strikePositionphp php php php php php=php php$standardFontphp-php>getStrikePositionphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_strikeThicknessphp php php php php=php php$standardFontphp-php>getStrikeThicknessphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_unitsPerEmphp php php php php php php php php php=php php$standardFontphp-php>getUnitsPerEmphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ascentphp php php php php php php php php php php php php php=php php$standardFontphp-php>getAscentphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_descentphp php php php php php php php php php php php php=php php$standardFontphp-php>getDescentphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lineGapphp php php php php php php php php php php php php=php php$standardFontphp-php>getLineGapphp(php)php;

php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$fontDescriptorphp php=php php$fontDictionaryphp-php>FontDescriptorphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'TrueTypephp'php:
php php php php php php php php php php php php php php php php php$fontDescriptorphp php=php php$fontDictionaryphp-php>FontDescriptorphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:TYPEphp_NOTphp_SUPPORTEDphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fontNamesphp[Zendphp_Pdfphp_Fontphp:php:NAMEphp_POSTSCRIPTphp]php[php'enphp'php]php php=php iconvphp(php'UTFphp-php8php'php,php php'UTFphp-php1php6BEphp'php,php php$fontDictionaryphp-php>BaseFontphp-php>valuephp)php;

php php php php php php php php php$thisphp-php>php_isBoldphp php php php php php php php php php php php php php=php falsephp;php php/php/php thisphp propertyphp isphp actuallyphp notphp usedphp anywhere
php php php php php php php php php$thisphp-php>php_isItalicphp php php php php php php php php php php php=php php(php php(php$fontDescriptorphp-php>Flagsphp-php>valuephp php&php php(php1php <php<php php6php)php)php php!php=php php0php php)php;php php/php/php Bitphp-php7php isphp set
php php php php php php php php php$thisphp-php>php_isMonospacephp php php php php php php php php=php php(php php(php$fontDescriptorphp-php>Flagsphp-php>valuephp php&php php(php1php <php<php php0php)php)php php!php=php php0php php)php;php php/php/php Bitphp-php1php isphp set
php php php php php php php php php$thisphp-php>php_underlinePositionphp php php=php nullphp;php php/php/php Canphp'tphp bephp extracted
php php php php php php php php php$thisphp-php>php_underlineThicknessphp php=php nullphp;php php/php/php Canphp'tphp bephp extracted
php php php php php php php php php$thisphp-php>php_strikePositionphp php php php php php=php nullphp;php php/php/php Canphp'tphp bephp extracted
php php php php php php php php php$thisphp-php>php_strikeThicknessphp php php php php=php nullphp;php php/php/php Canphp'tphp bephp extracted
php php php php php php php php php$thisphp-php>php_unitsPerEmphp php php php php php php php php php=php nullphp;php php/php/php Canphp'tphp bephp extracted
php php php php php php php php php$thisphp-php>php_ascentphp php php php php php php php php php php php php php=php php$fontDescriptorphp-php>Ascentphp-php>valuephp;
php php php php php php php php php$thisphp-php>php_descentphp php php php php php php php php php php php php=php php$fontDescriptorphp-php>Descentphp-php>valuephp;
php php php php php php php php php$thisphp-php>php_lineGapphp php php php php php php php php php php php php=php nullphp;php php/php/php Canphp'tphp bephp extracted
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
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:OPERATIONphp_NOTphp_SUPPORTEDphp)php;
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
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:OPERATIONphp_NOTphp_SUPPORTEDphp)php;
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
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:OPERATIONphp_NOTphp_SUPPORTEDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp glyphsphp.
php php php php php php*
php php php php php php*php Thephp widthsphp arephp expressedphp inphp thephp fontphp'sphp glyphphp spacephp.php Youphp arephp responsible
php php php php php php*php forphp convertingphp tophp userphp spacephp asphp necessaryphp.php Seephp php{php@linkphp unitsPerEmphp(php)php}php.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp widthForGlyphphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp widthsForGlyphsphp(php$glyphNumbersphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:OPERATIONphp_NOTphp_SUPPORTEDphp)php;
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
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:OPERATIONphp_NOTphp_SUPPORTEDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp stringphp tophp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php Thephp methodphp isphp usedphp tophp preparephp stringphp forphp textphp drawingphp operators
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp encodeStringphp(php$stringphp,php php$charEncodingphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php=php=php php'Identityphp-Hphp'php)php php{
php php php php php php php php php php php php returnphp iconvphp(php$charEncodingphp,php php'UTFphp-php1php6BEphp'php,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php=php=php php'WinAnsiEncodingphp'php)php php{
php php php php php php php php php php php php returnphp iconvphp(php$charEncodingphp,php php'CPphp1php2php5php2php/php/IGNOREphp'php,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:ENCODINGphp_NOTphp_SUPPORTEDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp stringphp fromphp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php Thephp methodphp isphp usedphp tophp convertphp stringsphp retrievedphp fromphp existingphp contentphp streams
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp resultingphp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp decodeStringphp(php$stringphp,php php$charEncodingphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php=php=php php'Identityphp-Hphp'php)php php{
php php php php php php php php php php php php returnphp iconvphp(php'UTFphp-php1php6BEphp'php,php php$charEncodingphp,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php=php=php php'WinAnsiEncodingphp'php)php php{
php php php php php php php php php php php php returnphp iconvphp(php'CPphp1php2php5php2php'php,php php$charEncodingphp,php php$stringphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(selfphp:php:ENCODINGphp_NOTphp_SUPPORTEDphp)php;
php php php php php}
php}
