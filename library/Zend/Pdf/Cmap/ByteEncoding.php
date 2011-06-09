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
php php*php php@versionphp php php php php$Idphp:php ByteEncodingphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_Cmapphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Cmapphp.phpphp'php;


php/php*php*
php php*php Implementsphp thephp php"bytephp encodingphp"php characterphp mapphp php(typephp php0php)php.
php php*
php php*php Thisphp isphp thephp php(legacyphp)php Applephp standardphp encodingphp mechanismphp andphp providesphp coverage
php php*php forphp charactersphp inphp thephp Macphp Romanphp characterphp setphp onlyphp.php Consequentlyphp,php thisphp cmap
php php*php typephp shouldphp bephp usedphp onlyphp asphp aphp lastphp resortphp.
php php*
php php*php Thephp mappingphp fromphp Macphp Romanphp tophp Unicodephp canphp bephp foundphp at
php php*php php{php@linkphp httpphp:php/php/wwwphp.unicodephp.orgphp/Publicphp/MAPPINGSphp/VENDORSphp/APPLEphp/ROMANphp.TXTphp}php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Cmapphp_ByteEncodingphp extendsphp Zendphp_Pdfphp_Cmap
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Glyphphp indexphp arrayphp.php Storesphp thephp actualphp glyphphp numbersphp.php Thephp arrayphp keysphp are
php php php php php php*php thephp translatedphp Unicodephp codephp pointsphp.
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

php php php php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_glyphIndexArrayphp[php$characterCodephp]php)php)php php{
php php php php php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$glyphNumbersphp[php$keyphp]php php=php php$thisphp-php>php_glyphIndexArrayphp[php$characterCodephp]php;

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
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_glyphIndexArrayphp[php$characterCodephp]php)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Cmapphp:php:MISSINGphp_CHARACTERphp_GLYPHphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_glyphIndexArrayphp[php$characterCodephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp containingphp thephp Unicodephp charactersphp thatphp havephp entriesphp in
php php php php php php*php thisphp characterphp mapphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp Unicodephp characterphp codesphp.
php php php php php php*php/
php php php php publicphp functionphp getCoveredCharactersphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_glyphIndexArrayphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_glyphIndexArrayphp;
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
php php php php php php php php php/php*php Sanityphp checkphp:php Thisphp tablephp mustphp bephp exactlyphp php2php6php2php bytesphp longphp.
php php php php php php php php php php*php/
php php php php php php php php php$actualLengthphp php=php strlenphp(php$cmapDataphp)php;
php php php php php php php php ifphp php(php$actualLengthphp php!php=php php2php6php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Insufficientphp tablephp dataphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CMAPphp_TABLEphp_DATAphp_TOOphp_SMALLphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Sanityphp checkphp:php Makephp surephp thisphp isphp rightphp dataphp forphp thisphp tablephp typephp.
php php php php php php php php php php*php/
php php php php php php php php php$typephp php=php php$thisphp-php>php_extractUIntphp2php(php$cmapDataphp,php php0php)php;
php php php php php php php php ifphp php(php$typephp php!php=php Zendphp_Pdfphp_Cmapphp:php:TYPEphp_BYTEphp_ENCODINGphp)php php{
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

php php php php php php php php php/php*php Thephp mappingphp betweenphp thephp Macphp Romanphp andphp Unicodephp charactersphp isphp staticphp.
php php php php php php php php php php*php Forphp simplicityphp,php justphp putphp allphp php2php5php6php glyphphp indicesphp intophp onephp arrayphp keyed
php php php php php php php php php php*php offphp thephp correspondingphp Unicodephp characterphp.
php php php php php php php php php php*php/
php php php php php php php php php$iphp php=php php6php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp1fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp3fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp4fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp5fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp6fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7php9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7aphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7bphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7cphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7dphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7ephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp7fphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdcphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xeaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xebphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xedphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xecphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xeephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xefphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfbphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfcphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php2php0php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php2php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdfphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php1php2php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php6php0php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php1ephp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php6php4php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php6php5php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php0php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php1php1php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php0fphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php3cphp0php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php2bphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php3aphp9php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xephp6php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbfphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xacphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php1aphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php9php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php4php8php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php2php0php6php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xabphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbbphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php2php6php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xaphp0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp0php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp5php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php5php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php5php3php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1php3php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1php4php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1cphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1dphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1php8php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1php9php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php5caphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xffphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php7php8php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php4php4php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0acphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php3php9php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php3aphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfbphp0php1php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfbphp0php2php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php2php1php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp7php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1aphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php1ephp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp2php0php3php0php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp1php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcbphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcphp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcdphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcephp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xcfphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xccphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp3php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp4php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xfphp8ffphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp2php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdaphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdbphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xdphp9php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php1php3php1php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2cphp6php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2dcphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xafphp]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2dphp8php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2dphp9php]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2daphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xbphp8php]php php php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2ddphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2dbphp]php php=php ordphp(php$cmapDataphp[php$iphp+php+php]php)php;
php php php php php php php php php$thisphp-php>php_glyphIndexArrayphp[php0xphp0php2cphp7php]php php=php ordphp(php$cmapDataphp[php$iphp]php)php;
php php php php php}

php}
