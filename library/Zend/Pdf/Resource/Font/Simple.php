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
php php*php php@versionphp php php php php$Idphp:php Simplephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp.phpphp'php;

php/php*php*
php php*php Adobephp PDFphp Simplephp fontsphp implementation
php php*
php php*php PDFphp simplephp fontsphp functionalityphp isphp presentedphp byphp Adobephp Typephp php1
php php*php php(includingphp standardphp PDFphp Typephp1php builtphp-inphp fontsphp)php andphp TrueTypephp fontsphp supportphp.
php php*
php php*php Bothphp fontsphp havephp thephp followingphp propertiesphp:
php php*php php-php Glyphsphp inphp thephp fontphp arephp selectedphp byphp singlephp-bytephp characterphp codesphp obtainedphp fromphp a
php php*php php php stringphp thatphp isphp shownphp byphp thephp textphp-showingphp operatorsphp.php Logicallyphp,php thesephp codesphp index
php php*php php php intophp aphp tablephp ofphp php2php5php6php glyphsphp;php thephp mappingphp fromphp codesphp tophp glyphsphp isphp calledphp thephp fontphp’s
php php*php php php encodingphp.
php php*php php php PDFphp specificationphp providesphp aphp possibilityphp tophp specifyphp anyphp userphp definedphp encodingphp inphp addition
php php*php php php tophp thephp standardphp builtphp-inphp encodingsphp:php Standardphp-Encodingphp,php MacRomanEncodingphp,php WinAnsiEncodingphp,
php php*php php php andphp PDFDocEncodingphp,php butphp Zendphp_Pdfphp simplephp fontsphp implementationphp operatesphp onlyphp with
php php*php php php Windowsphp ANSIphp encodingphp php(exceptphp Symbolphp andphp ZapfDingbatsphp builtphp-inphp fontsphp)php.
php php*
php php*php php-php Eachphp glyphphp hasphp aphp singlephp setphp ofphp metricsphp,php includingphp aphp horizontalphp displacementphp or
php php*php php php widthphp.php Thatphp isphp,php simplephp fontsphp supportphp onlyphp horizontalphp writingphp modephp.
php php*
php php*
php php*php Thephp codephp inphp thisphp classphp isphp commonphp tophp bothphp typesphp.php Howeverphp,php youphp willphp onlyphp deal
php php*php directlyphp withphp subclassesphp.
php php*
php php*php Fontphp objectsphp shouldphp bephp normallyphp bephp obtainedphp fromphp thephp factoryphp methods
php php*php php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithNamephp}php andphp php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithPathphp}php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Resourcephp_Fontphp_Simplephp extendsphp Zendphp_Pdfphp_Resourcephp_Font
php{
php php php php php/php*php*
php php php php php php*php Objectphp representingphp thephp fontphp'sphp cmapphp php(characterphp tophp glyphphp mapphp)php.
php php php php php php*php php@varphp Zendphp_Pdfphp_Cmap
php php php php php php*php/
php php php php protectedphp php$php_cmapphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp containingphp thephp widthsphp ofphp eachphp ofphp thephp glyphsphp containedphp inphp thephp fontphp.
php php php php php php*
php php php php php php*php Keysphp arephp integersphp startingphp fromphp php0php,php whichphp corespondsphp tophp Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp.
php php php php php php*
php php php php php php*php Fontphp characterphp mapphp mayphp containphp gapsphp forphp actuallyphp usedphp glyphsphp,php neverthelessphp glyphWidthsphp array
php php php php php php*php containsphp widthsphp forphp allphp glyphsphp evenphp theyphp arephp unusedphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_glyphWidthsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Widthphp forphp glyphsphp missedphp inphp thephp font
php php php php php php*
php php php php php php*php Notephp:php Adobephp PDFphp specficationphp php(Vphp1php.php4php php-php Vphp1php.php6php)php doesnphp'tphp definephp behaviorphp forphp rendering
php php php php php php*php charactersphp missedphp inphp thephp standardphp PDFphp fontsphp php(suchphp usphp php0xphp7Fphp php(DELphp)php Windowsphp ANSIphp codephp)
php php php php php php*php Adobephp Fontphp Metricsphp filesphp doesnphp'tphp alsophp definephp metricsphp forphp php"missedphp glyphphp"php.
php php php php php php*php Wephp providephp characterphp widthphp asphp php"php0php"php forphp thisphp casephp,php butphp actuallyphp itphp dependsphp onphp PDFphp viewer
php php php php php php*php implementationphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_missingGlyphWidthphp php=php php0php;


php php php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Objectphp Lifecyclephp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todo
php php php php php php php php php php*php Itphp'sphp easyphp tophp addphp otherphp encodingsphp supportphp nowphp php(Standardphp-Encodingphp,php MacRomanEncodingphp,
php php php php php php php php php php*php PDFDocEncodingphp,php MacExpertEncodingphp,php Symbolphp,php andphp ZapfDingbatsphp)php.
php php php php php php php php php php*php Stepsphp forphp thephp implementationphp:
php php php php php php php php php php*php php-php completelyphp describephp allphp PDFphp singlephp bytephp encodingsphp inphp thephp documentation
php php php php php php php php php php*php php-php implementphp nonphp-WinAnsiphp encodingsphp processingphp intophp encodeStringphp(php)php/decodeStringphp(php)php methods
php php php php php php php php php php*
php php php php php php php php php php*php Thesephp encodingsphp willphp bephp automaticallyphp supportedphp forphp standardphp builtinphp PDFphp fontsphp asphp well
php php php php php php php php php php*php asphp forphp externalphp fontsphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_resourcephp-php>Encodingphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'WinAnsiEncodingphp'php)php;
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
php php php php php php php php returnphp php$thisphp-php>php_cmapphp-php>glyphNumbersForCharactersphp(php$characterCodesphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_cmapphp-php>glyphNumberForCharacterphp(php$characterCodephp)php;
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
php php php php php php php php php php php php ifphp php(PHPphp_OSphp php!php=php php'AIXphp'php)php php{php php/php/php AIXphp doesntphp knowphp whatphp UTFphp-php1php6BEphp is
php php php php php php php php php php php php php php php php php$stringphp php=php iconvphp(php$charEncodingphp,php php'UTFphp-php1php6BEphp'php,php php$stringphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$charCountphp php=php php(PHPphp_OSphp php!php=php php'AIXphp'php)php php?php iconvphp_strlenphp(php$stringphp,php php'UTFphp-php1php6BEphp'php)php php:php strlenphp(php$stringphp)php;
php php php php php php php php ifphp php(php$charCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php php/php*php Fetchphp thephp coveredphp characterphp codephp listphp fromphp thephp fontphp'sphp cmapphp.
php php php php php php php php php php*php/
php php php php php php php php php$coveredCharactersphp php=php php$thisphp-php>php_cmapphp-php>getCoveredCharactersphp(php)php;

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
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$charCodephp,php php$coveredCharactersphp)php)php php{
php php php php php php php php php php php php php php php php php$scorephp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$scorephp php/php php$charCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp glyphsphp.
php php php php php php*
php php php php php php*php Thephp widthsphp arephp expressedphp inphp thephp fontphp'sphp glyphphp spacephp.php Youphp arephp responsible
php php php php php php*php forphp convertingphp tophp userphp spacephp asphp necessaryphp.php Seephp php{php@linkphp unitsPerEmphp(php)php}php.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp widthForGlyphphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php/
php php php php publicphp functionphp widthsForGlyphsphp(php$glyphNumbersphp)
php php php php php{
php php php php php php php php php$widthsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$glyphNumbersphp asphp php$keyphp php=php>php php$glyphNumberphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_glyphWidthsphp[php$glyphNumberphp]php)php)php php{
php php php php php php php php php php php php php php php php php$widthsphp[php$keyphp]php php=php php$thisphp-php>php_missingGlyphWidthphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$widthsphp[php$keyphp]php php=php php$thisphp-php>php_glyphWidthsphp[php$glyphNumberphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$widthsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthphp ofphp thephp glyphphp.
php php php php php php*
php php php php php php*php Likephp php{php@linkphp widthsForGlyphsphp(php)php}php butphp usedphp forphp onephp glyphphp atphp aphp timephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$glyphNumber
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp widthForGlyphphp(php$glyphNumberphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_glyphWidthsphp[php$glyphNumberphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_missingGlyphWidthphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_glyphWidthsphp[php$glyphNumberphp]php;
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
php php php php php php php php ifphp php(PHPphp_OSphp php=php=php php'AIXphp'php)php php{
php php php php php php php php php php php php returnphp php$stringphp;php php/php/php returningphp herephp bphp/cphp AIXphp doesntphp knowphp whatphp CPphp1php2php5php2php is
php php php php php php php php php}

php php php php php php php php returnphp iconvphp(php$charEncodingphp,php php'CPphp1php2php5php2php/php/IGNOREphp'php,php php$stringphp)php;
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
php php php php php php php php returnphp iconvphp(php'CPphp1php2php5php2php'php,php php$charEncodingphp,php php$stringphp)php;
php php php php php}
php}
