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
php php*php php@versionphp php php php php$Idphp:php SegmentToDeltaphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_Cmapphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Cmapphp.phpphp'php;


php/php*php*
php php*php Implementsphp thephp php"segmentphp mappingphp tophp deltaphp valuesphp"php characterphp mapphp php(typephp php4php)php.
php php*
php php*php Thisphp isphp thephp Microsoftphp standardphp mappingphp tablephp typephp forphp OpenTypephp fontsphp.php It
php php*php providesphp thephp abilityphp tophp coverphp multiplephp contiguousphp rangesphp ofphp thephp Unicode
php php*php characterphp setphp,php withphp thephp exceptionphp ofphp Unicodephp Surrogatesphp php(Uphp+Dphp8php0php0php php-php Uphp+DFFFphp)php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Cmapphp_SegmentToDeltaphp extendsphp Zendphp_Pdfphp_Cmap
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp segmentsphp inphp thephp tablephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_segmentCountphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp sizephp ofphp thephp binaryphp searchphp rangephp forphp segmentsphp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_searchRangephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp binaryphp searchphp stepsphp requiredphp tophp coverphp thephp entirephp search
php php php php php php*php rangephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_searchIterationsphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp endingphp characterphp codesphp forphp eachphp segmentphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_segmentTableEndCodesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp endingphp characterphp codephp forphp thephp segmentphp atphp thephp endphp ofphp thephp lowphp search
php php php php php php*php rangephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_searchRangeEndCodephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp startingphp characterphp codesphp forphp eachphp segmentphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_segmentTableStartCodesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp characterphp codephp tophp glyphphp deltaphp valuesphp forphp eachphp segmentphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_segmentTableIdDeltasphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp offsetsphp intophp thephp glyphphp indexphp arrayphp forphp eachphp segmentphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_segmentTableIdRangeOffsetsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Glyphphp indexphp arrayphp.php Storesphp glyphphp numbersphp,php usedphp withphp rangephp offsetphp.
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

php php php php php php php php php php php php php/php*php Thesephp tablesphp onlyphp coverphp thephp php1php6php-bitphp characterphp rangephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$characterCodephp php>php php0xffffphp)php php{
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php Determinephp wherephp tophp startphp thephp binaryphp searchphp.php Thephp segmentsphp are
php php php php php php php php php php php php php php*php orderedphp fromphp lowestphp-tophp-highestphp.php Wephp arephp lookingphp forphp thephp first
php php php php php php php php php php php php php php*php segmentphp whosephp endphp codephp isphp greaterphp thanphp orphp equalphp tophp ourphp character
php php php php php php php php php php php php php php*php codephp.
php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php*php Ifphp thephp endphp codephp atphp thephp topphp ofphp thephp searchphp rangephp isphp largerphp,php then
php php php php php php php php php php php php php php*php ourphp targetphp isphp probablyphp belowphp itphp.
php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php*php Ifphp itphp isphp smallerphp,php ourphp targetphp isphp probablyphp abovephp itphp,php sophp movephp the
php php php php php php php php php php php php php php*php searchphp rangephp tophp thephp endphp ofphp thephp segmentphp listphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_searchRangeEndCodephp php>php=php php$characterCodephp)php php{
php php php php php php php php php php php php php php php php php$searchIndexphp php=php php$thisphp-php>php_searchRangephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$searchIndexphp php=php php$thisphp-php>php_segmentCountphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php Nowphp dophp aphp binaryphp searchphp tophp findphp thephp firstphp segmentphp whosephp endphp code
php php php php php php php php php php php php php php*php isphp greaterphp orphp equalphp tophp ourphp characterphp codephp.php Nophp matterphp thephp number
php php php php php php php php php php php php php php*php ofphp segmentsphp php(therephp mayphp bephp hundredsphp inphp aphp largephp fontphp)php,php wephp willphp only
php php php php php php php php php php php php php php*php needphp tophp performphp php$thisphp-php>php_searchIterationsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_searchIterationsphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableEndCodesphp[php$searchIndexphp]php php>php=php php$characterCodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$subtableIndexphp php=php php$searchIndexphp;
php php php php php php php php php php php php php php php php php php php php php$searchIndexphp php-php=php php$thisphp-php>php_searchRangephp php>php>php php$iphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$searchIndexphp php+php=php php$thisphp-php>php_searchRangephp php>php>php php$iphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php Ifphp thephp segmentphp'sphp startphp codephp isphp greaterphp thanphp ourphp characterphp codephp,
php php php php php php php php php php php php php php*php thatphp characterphp isphp notphp representedphp inphp thisphp fontphp.php Movephp onphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableStartCodesphp[php$subtableIndexphp]php php>php php$characterCodephp)php php{
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$subtableIndexphp]php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php*php Thisphp segmentphp usesphp aphp simplephp mappingphp fromphp characterphp codephp to
php php php php php php php php php php php php php php php php php php*php glyphphp numberphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php php(php$characterCodephp php+php php$thisphp-php>php_segmentTableIdDeltasphp[php$subtableIndexphp]php)php php%php php6php5php5php3php6php;

php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php Thisphp segmentphp reliesphp onphp thephp glyphphp indexphp arrayphp tophp determinephp the
php php php php php php php php php php php php php php php php php php*php glyphphp numberphp.php Thephp calculationphp belowphp determinesphp thephp correct
php php php php php php php php php php php php php php php php php php*php indexphp intophp thatphp arrayphp.php Itphp'sphp aphp littlephp oddphp becausephp thephp range
php php php php php php php php php php php php php php php php php php*php offsetphp inphp thephp fontphp filephp isphp designedphp tophp quicklyphp providephp an
php php php php php php php php php php php php php php php php php php*php addressphp ofphp thephp indexphp inphp thephp rawphp binaryphp dataphp insteadphp ofphp the
php php php php php php php php php php php php php php php php php php*php indexphp itselfphp.php Sincephp wephp'vephp parsedphp thephp dataphp intophp arraysphp,php we
php php php php php php php php php php php php php php php php php php*php mustphp processphp itphp aphp bitphp differentlyphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$glyphIndexphp php=php php(php$characterCodephp php-php php$thisphp-php>php_segmentTableStartCodesphp[php$subtableIndexphp]php php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$subtableIndexphp]php php-php php$thisphp-php>php_segmentCountphp php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subtableIndexphp php-php php1php)php;
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php php$thisphp-php>php_glyphIndexArrayphp[php$glyphIndexphp]php;

php php php php php php php php php php php php php}

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
php php php php php php php php php/php*php Thisphp codephp isphp prettyphp muchphp aphp copyphp ofphp glyphNumbersForCharactersphp(php)php.
php php php php php php php php php php*php Seephp thatphp methodphp forphp inlinephp documentationphp.
php php php php php php php php php php*php/

php php php php php php php php ifphp php(php$characterCodephp php>php php0xffffphp)php php{
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_searchRangeEndCodephp php>php=php php$characterCodephp)php php{
php php php php php php php php php php php php php$searchIndexphp php=php php$thisphp-php>php_searchRangephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$searchIndexphp php=php php$thisphp-php>php_segmentCountphp;
php php php php php php php php php}

php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_searchIterationsphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableEndCodesphp[php$searchIndexphp]php php>php=php php$characterCodephp)php php{
php php php php php php php php php php php php php php php php php$subtableIndexphp php=php php$searchIndexphp;
php php php php php php php php php php php php php php php php php$searchIndexphp php-php=php php$thisphp-php>php_searchRangephp php>php>php php$iphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$searchIndexphp php+php=php php$thisphp-php>php_searchRangephp php>php>php php$iphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableStartCodesphp[php$subtableIndexphp]php php>php php$characterCodephp)php php{
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$subtableIndexphp]php php=php=php php0php)php php{
php php php php php php php php php php php php php$glyphNumberphp php=php php(php$characterCodephp php+php php$thisphp-php>php_segmentTableIdDeltasphp[php$subtableIndexphp]php)php php%php php6php5php5php3php6php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$glyphIndexphp php=php php(php$characterCodephp php-php php$thisphp-php>php_segmentTableStartCodesphp[php$subtableIndexphp]php php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$subtableIndexphp]php php-php php$thisphp-php>php_segmentCountphp php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subtableIndexphp php-php php1php)php;
php php php php php php php php php php php php php$glyphNumberphp php=php php$thisphp-php>php_glyphIndexArrayphp[php$glyphIndexphp]php;
php php php php php php php php php}
php php php php php php php php returnphp php$glyphNumberphp;
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
php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_segmentCountphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php forphp php(php$codephp php=php php$thisphp-php>php_segmentTableStartCodesphp[php$iphp]php;php php$codephp <php=php php$thisphp-php>php_segmentTableEndCodesphp[php$iphp]php;php php$codephp+php+php)php php{
php php php php php php php php php php php php php php php php php$characterCodesphp[php]php php=php php$codephp;
php php php php php php php php php php php php php}
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

php php php php php php php php forphp php(php$segmentNumphp php=php php1php;php php$segmentNumphp <php=php php$thisphp-php>php_segmentCountphp;php php$segmentNumphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$segmentNumphp]php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$deltaphp php=php php$thisphp-php>php_segmentTableIdDeltasphp[php$segmentNumphp]php;

php php php php php php php php php php php php php php php php forphp php(php$codephp php=php php php$thisphp-php>php_segmentTableStartCodesphp[php$segmentNumphp]php;
php php php php php php php php php php php php php php php php php php php php php php$codephp <php=php php$thisphp-php>php_segmentTableEndCodesphp[php$segmentNumphp]php;
php php php php php php php php php php php php php php php php php php php php php php$codephp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$codephp]php php=php php(php$codephp php+php php$deltaphp)php php%php php6php5php5php3php6php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$codephp php php php php php php php=php php$thisphp-php>php_segmentTableStartCodesphp[php$segmentNumphp]php;
php php php php php php php php php php php php php php php php php$glyphIndexphp php=php php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$segmentNumphp]php php-php php(php$thisphp-php>php_segmentCountphp php-php php$segmentNumphp)php php-php php1php;

php php php php php php php php php php php php php php php php whilephp php(php$codephp <php=php php$thisphp-php>php_segmentTableEndCodesphp[php$segmentNumphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$codephp]php php=php php$thisphp-php>php_glyphIndexArrayphp[php$glyphIndexphp]php;

php php php php php php php php php php php php php php php php php php php php php$codephp+php+php;
php php php php php php php php php php php php php php php php php php php php php$glyphIndexphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
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
php php php php php php php php php/php*php Sanityphp checkphp:php Thephp tablephp shouldphp bephp atphp leastphp php2php3php bytesphp inphp sizephp.
php php php php php php php php php php*php/
php php php php php php php php php$actualLengthphp php=php strlenphp(php$cmapDataphp)php;
php php php php php php php php ifphp php(php$actualLengthphp <php php2php3php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Insufficientphp tablephp dataphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_TABLEphp_DATAphp_TOOphp_SMALLphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Sanityphp checkphp:php Makephp surephp thisphp isphp rightphp dataphp forphp thisphp tablephp typephp.
php php php php php php php php php php*php/
php php php php php php php php php$typephp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php0php)php;
php php php php php php php php ifphp php(php$typephp php!php=php Zendphp_Pdfphp_Cmapphp:php:TYPEphp_SEGMENTphp_TOphp_DELTAphp)php php{
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

php php php php php php php php php/php*php Thesephp twophp valuesphp arephp storedphp premultipliedphp byphp twophp whichphp isphp convienent
php php php php php php php php php php*php whenphp usingphp thephp binaryphp dataphp directlyphp,php butphp wephp'rephp parsingphp itphp outphp to
php php php php php php php php php php*php nativephp PHPphp dataphp typesphp,php sophp dividephp byphp twophp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_segmentCountphp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php6php)php php>php>php php1php;
php php php php php php php php php$thisphp-php>php_searchRangephp php php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php8php)php php>php>php php1php;

php php php php php php php php php$thisphp-php>php_searchIterationsphp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php1php0php)php php+php php1php;

php php php php php php php php php$offsetphp php=php php1php4php;
php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_segmentCountphp;php php$iphp+php+php,php php$offsetphp php+php=php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>php_segmentTableEndCodesphp[php$iphp]php php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php$offsetphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_searchRangeEndCodephp php=php php$thisphp-php>php_segmentTableEndCodesphp[php$thisphp-php>php_searchRangephp]php;

php php php php php php php php php$offsetphp php+php=php php2php;php php php php php/php/php reservedphp bytes

php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_segmentCountphp;php php$iphp+php+php,php php$offsetphp php+php=php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>php_segmentTableStartCodesphp[php$iphp]php php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php$offsetphp)php;
php php php php php php php php php}

php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_segmentCountphp;php php$iphp+php+php,php php$offsetphp php+php=php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>php_segmentTableIdDeltasphp[php$iphp]php php=php php$thisphp-php>php_extractIntphp2php(php$cmapDataphp,php php$offsetphp)php;php php php php php/php/php signed
php php php php php php php php php}

php php php php php php php php php/php*php Thephp rangephp offsetphp helpsphp determinephp thephp indexphp intophp thephp glyphphp indexphp arrayphp.
php php php php php php php php php php*php Likephp thephp segmentphp countphp andphp searchphp rangephp abovephp,php itphp'sphp storedphp asphp aphp byte
php php php php php php php php php php*php multiplephp inphp thephp fontphp,php sophp dividephp byphp twophp asphp wephp extractphp thephp valuesphp.
php php php php php php php php php php*php/
php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php=php php$thisphp-php>php_segmentCountphp;php php$iphp+php+php,php php$offsetphp php+php=php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>php_segmentTableIdRangeOffsetsphp[php$iphp]php php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php$offsetphp)php php>php>php php1php;
php php php php php php php php php}

php php php php php php php php php/php*php Thephp sizephp ofphp thephp glyphphp indexphp arrayphp variesphp byphp fontphp andphp dependsphp onphp the
php php php php php php php php php php*php extentphp ofphp thephp usagephp ofphp rangephp offsetsphp versusphp deltasphp.php Somephp fontsphp may
php php php php php php php php php php*php notphp havephp anyphp entriesphp inphp thisphp arrayphp.
php php php php php php php php php php*php/
php php php php php php php php forphp php(php;php php$offsetphp <php php$lengthphp;php php$offsetphp php+php=php php2php)php php{
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
