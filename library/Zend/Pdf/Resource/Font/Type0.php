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
php php*php php@versionphp php php php php$Idphp:php Typephp0php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp.phpphp'php;

php/php*php*
php php*php Adobephp PDFphp compositephp fontsphp implementation
php php*
php php*php Aphp compositephp fontphp isphp onephp whosephp glyphsphp arephp obtainedphp fromphp otherphp fontsphp orphp fromphp fontlike
php php*php objectsphp calledphp CIDFontsphp php(php{php@linkphp Zendphp_Pdfphp_Resourcephp_Fontphp_CidFontphp}php)php,php organizedphp hierarchicallyphp.
php php*php Inphp PDFphp,php aphp compositephp fontphp isphp representedphp byphp aphp fontphp dictionaryphp whosephp Subtypephp valuephp isphp Typephp0php;
php php*php thisphp isphp alsophp calledphp aphp Typephp php0php fontphp php(thephp Typephp php0php fontphp atphp thephp topphp levelphp ofphp thephp hierarchyphp isphp the
php php*php rootphp fontphp)php.
php php*
php php*php Inphp PDFphp,php aphp Typephp php0php fontphp isphp aphp CIDphp-keyedphp fontphp.
php php*
php php*php CIDphp-keyedphp fontsphp providephp effectivephp methodphp tophp operatephp withphp multiphp-bytephp characterphp encodingsphp.
php php*
php php*php Thephp CIDphp-keyedphp fontphp architecturephp specifiesphp thephp externalphp representationphp ofphp certainphp fontphp programsphp,
php php*php calledphp CMapphp andphp CIDFontphp filesphp,php alongphp withphp somephp conventionsphp forphp combiningphp andphp usingphp thosephp filesphp.
php php*
php php*php Aphp CIDphp-keyedphp fontphp isphp thephp combinationphp ofphp aphp CMapphp withphp onephp orphp morephp CIDFontsphp,php simplephp fontsphp,
php php*php orphp compositephp fontsphp containingphp glyphphp descriptionsphp.
php php*
php php*php Thephp termphp php'CIDphp-keyedphp fontphp'php reflectsphp thephp factphp thatphp CIDphp php(characterphp identifierphp)php numbers
php php*php arephp usedphp tophp indexphp andphp accessphp thephp glyphphp descriptionsphp inphp thephp fontphp.
php php*
php php*
php php*php Fontphp objectsphp shouldphp bephp normallyphp bephp obtainedphp fromphp thephp factoryphp methods
php php*php php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithNamephp}php andphp php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithPathphp}php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Fontphp_Typephp0php extendsphp Zendphp_Pdfphp_Resourcephp_Font
php{
php php php php php/php*php*
php php php php php php*php Descendantphp CIDFont
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Resourcephp_Fontphp_CidFont
php php php php php php*php/
php php php php privatephp php$php_descendantFontphp;


php php php php php/php*php*
php php php php php php*php Generatephp ToUnicodephp characterphp mapphp data
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php staticphp privatephp functionphp getToUnicodeCMapDataphp(php)
php php php php php{
php php php php php php php php returnphp php'php/CIDInitphp php/ProcSetphp findresourcephp beginphp php'php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php1php2php dictphp beginphp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'begincmapphp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php/CIDSystemInfophp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'<php<php/Registryphp php(Adobephp)php php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php/Orderingphp php(UCSphp)php php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php/Supplementphp php0php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php>php>php defphp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php/CMapNamephp php/Adobephp-Identityphp-UCSphp defphp php'php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php/CMapTypephp php2php defphp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php1php begincodespacerangephp'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'<php0php0php0php0php>php php<FFFFphp>php php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'endcodespacerangephp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'php1php beginbfrangephp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'<php0php0php0php0php>php php<FFFFphp>php <php0php0php0php0php>php php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'endbfrangephp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'endcmapphp php'php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'CMapNamephp currentdictphp php/CMapphp defineresourcephp popphp php'php php php php php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php'endphp php'
php php php php php php php php php php php php php php.php php'endphp php'php;
php php php php php php php php php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Resourcephp_Fontphp_CidFontphp php$descendantFontphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;

php php php php php php php php php$thisphp-php>php_objectFactoryphp-php>attachphp(php$descendantFontphp-php>getFactoryphp(php)php)php;

php php php php php php php php php$thisphp-php>php_fontTypephp php php php php php php php=php Zendphp_Pdfphp_Fontphp:php:TYPEphp_TYPEphp_php0php;
php php php php php php php php php$thisphp-php>php_descendantFontphp php=php php$descendantFontphp;


php php php php php php php php php$thisphp-php>php_fontNamesphp php php php php=php php$descendantFontphp-php>getFontNamesphp(php)php;

php php php php php php php php php$thisphp-php>php_isBoldphp php php php php php php php=php php$descendantFontphp-php>isBoldphp(php)php;
php php php php php php php php php$thisphp-php>php_isItalicphp php php php php php=php php$descendantFontphp-php>isItalicphp(php)php;
php php php php php php php php php$thisphp-php>php_isMonospacedphp php=php php$descendantFontphp-php>isMonospacephp(php)php;

php php php php php php php php php$thisphp-php>php_underlinePositionphp php php=php php$descendantFontphp-php>getUnderlinePositionphp(php)php;
php php php php php php php php php$thisphp-php>php_underlineThicknessphp php=php php$descendantFontphp-php>getUnderlineThicknessphp(php)php;
php php php php php php php php php$thisphp-php>php_strikePositionphp php php php php php=php php$descendantFontphp-php>getStrikePositionphp(php)php;
php php php php php php php php php$thisphp-php>php_strikeThicknessphp php php php php=php php$descendantFontphp-php>getStrikeThicknessphp(php)php;

php php php php php php php php php$thisphp-php>php_unitsPerEmphp php=php php$descendantFontphp-php>getUnitsPerEmphp(php)php;

php php php php php php php php php$thisphp-php>php_ascentphp php php=php php$descendantFontphp-php>getAscentphp(php)php;
php php php php php php php php php$thisphp-php>php_descentphp php=php php$descendantFontphp-php>getDescentphp(php)php;
php php php php php php php php php$thisphp-php>php_lineGapphp php=php php$descendantFontphp-php>getLineGapphp(php)php;


php php php php php php php php php$thisphp-php>php_resourcephp-php>Subtypephp php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Typephp0php'php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>BaseFontphp php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$descendantFontphp-php>getResourcephp(php)php-php>BaseFontphp-php>valuephp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>DescendantFontsphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(arrayphp(php php$descendantFontphp-php>getResourcephp(php)php php)php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>Encodingphp php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Identityphp-Hphp'php)php;

php php php php php php php php php$toUnicodephp php=php php$thisphp-php>php_objectFactoryphp-php>newStreamObjectphp(selfphp:php:getToUnicodeCMapDataphp(php)php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>ToUnicodephp php=php php$toUnicodephp;

php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp glyphphp numbersphp correspondingphp tophp thephp Unicodephp charactersphp.
php php php php php php*
php php php php php php*php Zendphp_Pdfphp usesphp php'Identityphp-Hphp'php encodingphp forphp Typephp php0php fontsphp.
php php php php php php*php Sophp wephp donphp'tphp needphp tophp performphp anyphp conversion
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp glyphNumberForCharacterphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$characterCodesphp Arrayphp ofphp Unicodephp characterphp codesphp php(codephp pointsphp)php.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php/
php php php php publicphp functionphp glyphNumbersForCharactersphp(php$characterCodesphp)
php php php php php{
php php php php php php php php returnphp php$characterCodesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp glyphphp numberphp correspondingphp tophp thephp Unicodephp characterphp.
php php php php php php*
php php php php php php*php Zendphp_Pdfphp usesphp php'Identityphp-Hphp'php encodingphp forphp Typephp php0php fontsphp.
php php php php php php*php Sophp wephp donphp'tphp needphp tophp performphp anyphp conversion
php php php php php php*
php php php php php php*php php@paramphp integerphp php$characterCodephp Unicodephp characterphp codephp php(codephp pointphp)php.
php php php php php php*php php@returnphp integerphp Glyphphp numberphp.
php php php php php php*php/
php php php php publicphp functionphp glyphNumberForCharacterphp(php$characterCodephp)
php php php php php{
php php php php php php php php returnphp php$characterCodephp;
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
php php php php php php php php returnphp php$thisphp-php>php_descendantFontphp-php>getCoveredPercentagephp(php$stringphp,php php$charEncodingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp glyphsphp.
php php php php php php*
php php php php php php*php Thephp widthsphp arephp expressedphp inphp thephp fontphp'sphp glyphphp spacephp.php Youphp arephp responsible
php php php php php php*php forphp convertingphp tophp userphp spacephp asphp necessaryphp.php Seephp php{php@linkphp unitsPerEmphp(php)php}php.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp glyphphp numberphp isphp outphp ofphp rangephp.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp widthForGlyphphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp widthsForGlyphsphp(php$glyphNumbersphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descendantFontphp-php>widthsForCharsphp(php$glyphNumbersphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_descendantFontphp-php>widthForCharphp(php$glyphNumberphp)php;
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
php php php php php php php php returnphp iconvphp(php$charEncodingphp,php php'UTFphp-php1php6BEphp'php,php php$stringphp)php;
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
php php php php php php php php publicphp functionphp decodeStringphp(php$stringphp,php php$charEncodingphp)
php php php php php{
php php php php php php php php returnphp iconvphp(php'UTFphp-php1php6BEphp'php,php php$charEncodingphp,php php$stringphp)php;
php php php php php}
php}
