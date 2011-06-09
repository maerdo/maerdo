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
php php*php php@versionphp php php php php$Idphp:php TrimmedTablephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_Cmapphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Cmapphp.phpphp'php;


php/php*php*
php php*php Implementsphp thephp php"trimmedphp tablephp mappingphp"php characterphp mapphp php(typephp php6php)php.
php php*
php php*php Thisphp tablephp typephp isphp preferredphp overphp thephp php{php@linkphp Zendphp_Pdfphp_Cmapphp_SegmentToDeltaphp}
php php*php tablephp whenphp thephp Unicodephp charactersphp coveredphp byphp thephp fontphp fallphp intophp aphp single
php php*php contiguousphp rangephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Cmapphp_TrimmedTablephp extendsphp Zendphp_Pdfphp_Cmap
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Thephp startingphp characterphp codephp coveredphp byphp thisphp tablephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_startCodephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp endingphp characterphp codephp coveredphp byphp thisphp tablephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_endCodephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Glyphphp indexphp arrayphp.php Storesphp thephp actualphp glyphphp numbersphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_glyphIndexArrayphp php=php arrayphp(php)php;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Concretephp Classphp Implementationphp php*php/

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
php php php php php php php php php$glyphNumbersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$characterCodesphp asphp php$keyphp php=php>php php$characterCodephp)php php{

php php php php php php php php php php php php ifphp php(php(php$characterCodephp <php php$thisphp-php>php_startCodephp)php php|php|php php(php$characterCodephp php>php php$thisphp-php>php_endCodephp)php)php php{
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$glyphIndexphp php=php php$characterCodephp php-php php$thisphp-php>php_startCodephp;
php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php php$thisphp-php>php_glyphIndexArrayphp[php$glyphIndexphp]php;

php php php php php php php php php}
php php php php php php php php returnphp php$glyphNumbersphp;
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
php php php php php php php php ifphp php(php(php$characterCodephp <php php$thisphp-php>php_startCodephp)php php|php|php php(php$characterCodephp php>php php$thisphp-php>php_endCodephp)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php}
php php php php php php php php php$glyphIndexphp php=php php$characterCodephp php-php php$thisphp-php>php_startCodephp;
php php php php php php php php returnphp php$thisphp-php>php_glyphIndexArrayphp[php$glyphIndexphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp thephp Unicodephp charactersphp thatphp havephp entriesphp in
php php php php php php*php thisphp characterphp mapphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp Unicodephp characterphp codesphp.
php php php php php php*php/
php php php php publicphp functionphp getCoveredCharactersphp(php)
php php php php php{
php php php php php php php php php$characterCodesphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$codephp php=php php$thisphp-php>php_startCodephp;php php$codephp <php=php php$thisphp-php>php_endCodephp;php php$codephp+php+php)php php{
php php php php php php php php php php php php php$characterCodesphp[php]php php=php php$codephp;
php php php php php php php php php}
php php php php php php php php returnphp php$characterCodesphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp thephp glyphsphp numbersphp thatphp havephp entriesphp inphp thisphp characterphp mapphp.
php php php php php php*php Keysphp arephp Unicodephp characterphp codesphp php(integersphp)
php php php php php php*
php php php php php php*php Thisphp functionalityphp isphp partiallyphp coveredphp byphp glyphNumbersForCharactersphp(getCoveredCharactersphp(php)php)
php php php php php php*php callphp,php butphp thisphp methodphp dophp itphp inphp morephp effectivephp wayphp php(preparephp completephp listphp insteadphp ofphp searching
php php php php php php*php glyphphp forphp eachphp characterphp codephp)php.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp arrayphp Arrayphp representingphp php<Unicodephp characterphp codephp>php php=php>php php<glyphphp numberphp>php pairsphp.
php php php php php php*php/
php php php php publicphp functionphp getCoveredCharactersGlyphsphp(php)
php php php php php{
php php php php php php php php php$glyphNumbersphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$codephp php=php php$thisphp-php>php_startCodephp;php php$codephp <php=php php$thisphp-php>php_endCodephp;php php$codephp+php+php)php php{
php php php php php php php php php php php php php$glyphNumbersphp[php$codephp]php php=php php$thisphp-php>php_glyphIndexArrayphp[php$codephp php-php php$thisphp-php>php_startCodephp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$glyphNumbersphp;
php php php php php}


php php php/php*php Objectphp Lifecyclephp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php Parsesphp thephp rawphp binaryphp tablephp dataphp.php Throwsphp anphp exceptionphp ifphp thephp tablephp is
php php php php php php*php malformedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$cmapDataphp Rawphp binaryphp cmapphp tablephp dataphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$cmapDataphp)
php php php php php{
php php php php php php php php php/php*php Sanityphp checkphp:php Thephp tablephp shouldphp bephp atphp leastphp php9php bytesphp inphp sizephp.
php php php php php php php php php php*php/
php php php php php php php php php$actualLengthphp php=php strlenphp(php$cmapDataphp)php;
php php php php php php php php ifphp php(php$actualLengthphp <php php9php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Insufficientphp tablephp dataphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_TABLEphp_DATAphp_TOOphp_SMALLphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Sanityphp checkphp:php Makephp surephp thisphp isphp rightphp dataphp forphp thisphp tablephp typephp.
php php php php php php php php php php*php/
php php php php php php php php php$typephp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php0php)php;
php php php php php php php php ifphp php(php$typephp php!php=php Zendphp_Pdfphp_Cmapphp:php:TYPEphp_TRIMMEDphp_TABLEphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp cmapphp tablephp typephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_WRONGphp_TABLEphp_TYPEphp)php;
php php php php php php php php php}

php php php php php php php php php$lengthphp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php2php)php;
php php php php php php php php ifphp php(php$lengthphp php!php=php php$actualLengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Tablephp lengthphp php(php$lengthphp)php doesphp notphp matchphp actualphp lengthphp php(php$actualLengthphp)php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_WRONGphp_TABLEphp_LENGTHphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Mappingphp tablesphp shouldphp bephp languagephp-independentphp.php Thephp fontphp mayphp notphp work
php php php php php php php php php php*php asphp expectedphp ifphp theyphp arephp notphp.php Unfortunatelyphp,php manyphp fontphp filesphp inphp the
php php php php php php php php php php*php wildphp incorrectlyphp recordphp aphp languagephp IDphp inphp thisphp fieldphp,php sophp wephp canphp't
php php php php php php php php php php*php callphp thisphp aphp failurephp.
php php php php php php php php php php*php/
php php php php php php php php php$languagephp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php4php)php;
php php php php php php php php ifphp php(php$languagephp php!php=php php0php)php php{
php php php php php php php php php php php php php/php/php Recordphp aphp warningphp herephp somehowphp?
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_startCodephp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php6php)php;

php php php php php php php php php$entryCountphp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php8php)php;
php php php php php php php php php$expectedCountphp php=php php(php$lengthphp php-php php1php0php)php php>php>php php1php;
php php php php php php php php ifphp php(php$entryCountphp php!php=php php$expectedCountphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Entryphp countphp isphp wrongphp;php expectedphp:php php$expectedCountphp;php actualphp:php php$entryCountphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_WRONGphp_ENTRYphp_COUNTphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_endCodephp php=php php$thisphp-php>php_startCodephp php+php php$entryCountphp php-php php1php;

php php php php php php php php php$offsetphp php=php php1php0php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$entryCountphp;php php$iphp+php+php,php php$offsetphp php+php=php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php]php php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php$offsetphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Sanityphp checkphp:php Afterphp readingphp allphp ofphp thephp dataphp,php wephp shouldphp bephp atphp thephp end
php php php php php php php php php php*php ofphp thephp tablephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$offsetphp php!php=php php$lengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Endingphp offsetphp php(php$offsetphp)php doesphp notphp matchphp lengthphp php(php$lengthphp)php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_FINALphp_OFFSETphp_NOTphp_LENGTHphp)php;
php php php php php php php php php}
php php php php php}

php}
