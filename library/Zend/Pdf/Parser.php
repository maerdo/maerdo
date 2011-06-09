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
php php*php php@versionphp php php php php$Idphp:php Parserphp.phpphp php2php3php3php9php5php php2php0php1php0php-php1php1php-php1php9php php1php5php:php3php0php:php4php7Zphp alexanderphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_StringParserphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/StringParserphp.phpphp'php;


php/php*php*
php php*php PDFphp filephp parser
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Parser
php{
php php php php php/php*php*
php php php php php php*php Stringphp parser
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_StringParser
php php php php php php*php/
php php php php privatephp php$php_stringParserphp;

php php php php php/php*php*
php php php php php php*php Lastphp PDFphp filephp trailer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Trailerphp_Keeper
php php php php php php*php/
php php php php privatephp php$php_trailerphp;

php php php php php/php*php*
php php php php php php*php PDFphp versionphp specifiedphp inphp thephp filephp header
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_pdfVersionphp;


php php php php php/php*php*
php php php php php php*php Getphp lengthphp ofphp sourcephp PDF
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getPDFLengthphp(php)
php php php php php{
php php php php php php php php returnphp strlenphp(php$thisphp-php>php_stringParserphp-php>dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp PDFphp String
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPDFStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_stringParserphp-php>dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php PDFphp versionphp specifiedphp inphp thephp filephp header
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPDFVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pdfVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp XReferencephp tablephp andphp referencedphp objects
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php@returnphp Zendphp_Pdfphp_Trailerphp_Keeper
php php php php php php*php/
php php php php privatephp functionphp php_loadXRefTablephp(php$offsetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp php=php php$offsetphp;

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Referencephp/Tablephp.phpphp'php;
php php php php php php php php php$refTablephp php=php newphp Zendphp_Pdfphp_Elementphp_Referencephp_Tablephp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Referencephp/Contextphp.phpphp'php;
php php php php php php php php php$contextphp php php=php newphp Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp(php$thisphp-php>php_stringParserphp,php php$refTablephp)php;
php php php php php php php php php$thisphp-php>php_stringParserphp-php>setContextphp(php$contextphp)php;

php php php php php php php php php$nextLexemephp php=php php$thisphp-php>php_stringParserphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$nextLexemephp php=php=php php'xrefphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Commonphp crossphp-referencephp table
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>skipWhiteSpacephp(php)php;
php php php php php php php php php php php php whilephp php(php php(php$nextLexemephp php=php php$thisphp-php>php_stringParserphp-php>readLexemephp(php)php)php php!php=php php'trailerphp'php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php$nextLexemephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Crossphp-referencephp tablephp subheaderphp valuesphp mustphp containphp onlyphp digitsphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp-strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$objNumphp php=php php(intphp)php$nextLexemephp;

php php php php php php php php php php php php php php php php php$refCountphp php=php php$thisphp-php>php_stringParserphp-php>readLexemephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php$refCountphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Crossphp-referencephp tablephp subheaderphp valuesphp mustphp containphp onlyphp digitsphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp-strlenphp(php$refCountphp)php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>skipWhiteSpacephp(php)php;
php php php php php php php php php php php php php php php php whilephp php(php$refCountphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$objectOffsetphp php=php substrphp(php$thisphp-php>php_stringParserphp-php>dataphp,php php$thisphp-php>php_stringParserphp-php>offsetphp,php php1php0php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php$objectOffsetphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Offsetphp mustphp containphp onlyphp digitsphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php Forcephp php$objectOffsetphp tophp bephp treatedphp asphp decimalphp insteadphp ofphp octalphp number
php php php php php php php php php php php php php php php php php php php php forphp php(php$numStartphp php=php php0php;php php$numStartphp <php strlenphp(php$objectOffsetphp)php-php1php;php php$numStartphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$objectOffsetphp[php$numStartphp]php php!php=php php'php0php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$objectOffsetphp php=php substrphp(php$objectOffsetphp,php php$numStartphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp php+php=php php1php0php;

php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Valuephp separatorphp mustphp bephp whitephp spacephp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp+php+php;

php php php php php php php php php php php php php php php php php php php php php$genNumberphp php=php substrphp(php$thisphp-php>php_stringParserphp-php>dataphp,php php$thisphp-php>php_stringParserphp-php>offsetphp,php php5php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php$objectOffsetphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Offsetphp mustphp containphp onlyphp digitsphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php Forcephp php$objectOffsetphp tophp bephp treatedphp asphp decimalphp insteadphp ofphp octalphp number
php php php php php php php php php php php php php php php php php php php php forphp php(php$numStartphp php=php php0php;php php$numStartphp <php strlenphp(php$genNumberphp)php-php1php;php php$numStartphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$genNumberphp[php$numStartphp]php php!php=php php'php0php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$genNumberphp php=php substrphp(php$genNumberphp,php php$numStartphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp php+php=php php5php;

php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Valuephp separatorphp mustphp bephp whitephp spacephp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp+php+php;

php php php php php php php php php php php php php php php php php php php php php$inUseKeyphp php=php php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp+php+php;

php php php php php php php php php php php php php php php php php php php php switchphp php(php$inUseKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'fphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php freephp entry
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php php$thisphp-php>php_refTablephp[php$objNumphp php.php php'php php'php php.php php$genNumberphp php.php php'php Rphp'php]php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$refTablephp-php>addReferencephp(php$objNumphp php.php php'php php'php php.php php$genNumberphp php.php php'php Rphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objectOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php'nphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php inphp-usephp entry

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$refTablephp-php>addReferencephp(php$objNumphp php.php php'php php'php php.php php$genNumberphp php.php php'php Rphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objectOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php php!Zendphp_Pdfphp_StringParserphp:php:isWhiteSpacephp(ordphp(php php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php php)php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Valuephp separatorphp mustphp bephp whitephp spacephp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp+php+php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php php!Zendphp_Pdfphp_StringParserphp:php:isWhiteSpacephp(ordphp(php php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php php)php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp crossphp-referencephp tablephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Valuephp separatorphp mustphp bephp whitephp spacephp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp+php+php;

php php php php php php php php php php php php php php php php php php php php php$refCountphp-php-php;
php php php php php php php php php php php php php php php php php php php php php$objNumphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$trailerDictOffsetphp php=php php$thisphp-php>php_stringParserphp-php>offsetphp;
php php php php php php php php php php php php php$trailerDictphp php=php php$thisphp-php>php_stringParserphp-php>readElementphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$trailerDictphp instanceofphp Zendphp_Pdfphp_Elementphp_Dictionaryphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php Dictionaryphp expectedphp afterphp php\php'trailerphp\php'php keywordphp.php'php,php php$trailerDictOffsetphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xrefStreamphp php=php php$thisphp-php>php_stringParserphp-php>getObjectphp(php$offsetphp,php php$contextphp)php;

php php php php php php php php php php php php ifphp php(php!php$xrefStreamphp instanceofphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php Crossphp-referencephp streamphp expectedphp.php'php,php php$offsetphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$trailerDictphp php=php php$xrefStreamphp-php>dictionaryphp;
php php php php php php php php php php php php ifphp php(php$trailerDictphp-php>Typephp-php>valuephp php!php=php php'XRefphp'php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php Crossphp-referencephp streamphp objectphp mustphp havephp php/Typephp propertyphp assignedphp tophp php/XRefphp.php'php,php php$offsetphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$trailerDictphp-php>Wphp php=php=php=php nullphp php php|php|php php$trailerDictphp-php>Wphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Crossphp referencephp streamphp dictionaryphp doesnphp\php'tphp havephp Wphp entryphp orphp itphp\php'sphp notphp anphp arrayphp.php'php,php php$offsetphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$entryFieldphp1Sizephp php=php php$trailerDictphp-php>Wphp-php>itemsphp[php0php]php-php>valuephp;
php php php php php php php php php php php php php$entryFieldphp2Sizephp php=php php$trailerDictphp-php>Wphp-php>itemsphp[php1php]php-php>valuephp;
php php php php php php php php php php php php php$entryFieldphp3Sizephp php=php php$trailerDictphp-php>Wphp-php>itemsphp[php2php]php-php>valuephp;

php php php php php php php php php php php php ifphp php(php$entryFieldphp2Sizephp php=php=php php0php php|php|php php$entryFieldphp3Sizephp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Wrongphp Wphp dictionaryphp entryphp.php Onlyphp typephp fieldphp ofphp streamphp entriesphp hasphp defaultphp valuephp andphp couldphp bephp zerophp lengthphp.php'php,php php$offsetphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$xrefStreamDataphp php=php php$xrefStreamphp-php>valuephp;

php php php php php php php php php php php php ifphp php(php$trailerDictphp-php>Indexphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$trailerDictphp-php>Indexphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Crossphp referencephp streamphp dictionaryphp Indexphp entryphp mustphp bephp anphp arrayphp.php'php,php php$offsetphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$sectionsphp php=php countphp(php$trailerDictphp-php>Indexphp-php>itemsphp)php/php2php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$sectionsphp php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$streamOffsetphp php=php php0php;

php php php php php php php php php php php php php$sizephp php php php php=php php$entryFieldphp1Sizephp php+php php$entryFieldphp2Sizephp php+php php$entryFieldphp3Sizephp;
php php php php php php php php php php php php php$entriesphp php=php strlenphp(php$xrefStreamDataphp)php/php$sizephp;

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$sectionsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$trailerDictphp-php>Indexphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$objNumphp php php=php php$trailerDictphp-php>Indexphp-php>itemsphp[php$countphp*php2php php php php php]php-php>valuephp;
php php php php php php php php php php php php php php php php php php php php php$entriesphp php=php php$trailerDictphp-php>Indexphp-php>itemsphp[php$countphp*php2php php+php php1php]php-php>valuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$objNumphp php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$entriesphp php=php php$trailerDictphp-php>Sizephp-php>valuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$entriesphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$entryFieldphp1Sizephp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$entryFieldphp1Sizephp php=php=php php1php)php php{php php/php/php Optimyzephp onephp-bytephp fieldphp case
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php ordphp(php$xrefStreamDataphp[php$streamOffsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php Zendphp_Pdfphp_StringParserphp:php:parseIntFromStreamphp(php$xrefStreamDataphp,php php$streamOffsetphp,php php$entryFieldphp1Sizephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$streamOffsetphp php+php=php php$entryFieldphp1Sizephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$entryFieldphp2Sizephp php=php=php php1php)php php{php php/php/php Optimyzephp onephp-bytephp fieldphp case
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp2php php=php ordphp(php$xrefStreamDataphp[php$streamOffsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp2php php=php Zendphp_Pdfphp_StringParserphp:php:parseIntFromStreamphp(php$xrefStreamDataphp,php php$streamOffsetphp,php php$entryFieldphp2Sizephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$streamOffsetphp php+php=php php$entryFieldphp2Sizephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$entryFieldphp3Sizephp php=php=php php1php)php php{php php/php/php Optimyzephp onephp-bytephp fieldphp case
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp3php php=php ordphp(php$xrefStreamDataphp[php$streamOffsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp3php php=php Zendphp_Pdfphp_StringParserphp:php:parseIntFromStreamphp(php$xrefStreamDataphp,php php$streamOffsetphp,php php$entryFieldphp3Sizephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$streamOffsetphp php+php=php php$entryFieldphp3Sizephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Freephp object
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$refTablephp-php>addReferencephp(php$objNumphp php.php php'php php'php php.php php$fieldphp3php php.php php'php Rphp'php,php php$fieldphp2php,php falsephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Debugphp outputphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php echophp php"Freephp objectphp php-php php$objNumphp php$fieldphp3php Rphp,php nextphp freephp php-php php$fieldphp2php\nphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Inphp usephp object
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$refTablephp-php>addReferencephp(php$objNumphp php.php php'php php'php php.php php$fieldphp3php php.php php'php Rphp'php,php php$fieldphp2php,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Debugphp outputphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php echophp php"Inphp-usephp objectphp php-php php$objNumphp php$fieldphp3php Rphp,php offsetphp php-php php$fieldphp2php\nphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Objectphp inphp anphp objectphp stream
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Debugphp outputphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php echophp php"Compressedphp objectphp php-php php$objNumphp php0php Rphp,php objectphp streamphp php-php php$fieldphp2php php0php Rphp,php offsetphp php-php php$fieldphp3php\nphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$objNumphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php php$streamOffsetphp php.php php'php php'php php.php strlenphp(php$xrefStreamDataphp)php php.php php"php\nphp"php;
php php php php php php php php php php php php php/php/php php"php$entriesphp\nphp"php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Crossphp-referencephp streamsphp arephp notphp supportedphp yetphp.php'php)php;
php php php php php php php php php}


php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Trailerphp/Keeperphp.phpphp'php;
php php php php php php php php php$trailerObjphp php=php newphp Zendphp_Pdfphp_Trailerphp_Keeperphp(php$trailerDictphp,php php$contextphp)php;
php php php php php php php php ifphp php(php$trailerDictphp-php>Prevphp instanceofphp Zendphp_Pdfphp_Elementphp_Numericphp php|php|
php php php php php php php php php php php php php$trailerDictphp-php>Prevphp instanceofphp Zendphp_Pdfphp_Elementphp_Referencephp php)php php{
php php php php php php php php php php php php php$trailerObjphp-php>setPrevphp(php$thisphp-php>php_loadXRefTablephp(php$trailerDictphp-php>Prevphp-php>valuephp)php)php;
php php php php php php php php php php php php php$contextphp-php>getRefTablephp(php)php-php>setParentphp(php$trailerObjphp-php>getPrevphp(php)php-php>getRefTablephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Wephp setphp php'php/Prevphp'php dictionaryphp propertyphp tophp thephp currentphp crossphp-referencephp sectionphp offsetphp.
php php php php php php php php php php*php Itphp doesnphp'tphp correspondphp tophp thephp actualphp dataphp,php butphp isphp truephp whenphp trailerphp willphp bephp used
php php php php php php php php php php*php asphp aphp trailerphp forphp nextphp generatedphp PDFphp sectionphp.
php php php php php php php php php php*php/
php php php php php php php php php$trailerObjphp-php>Prevphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$offsetphp)php;

php php php php php php php php returnphp php$trailerObjphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp Trailerphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Trailerphp_Keeper
php php php php php php*php/
php php php php publicphp functionphp getTrailerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_trailerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php Notephp:php PHPphp duplicatesphp stringphp,php whichphp isphp sentphp byphp valuephp,php onlyphp ofphp itphp'sphp updatedphp.
php php php php php php*php Thusphp wephp donphp'tphp needphp tophp carephp aboutphp overhead
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$source
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php php@paramphp booleanphp php$load
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$sourcephp,php Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp,php php$loadphp)
php php php php php{
php php php php php php php php ifphp php(php$loadphp)php php{
php php php php php php php php php php php php ifphp php(php(php$pdfFilephp php=php php@fopenphp(php$sourcephp,php php'rbphp'php)php)php php=php=php=php falsephp php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Canphp notphp openphp php'php$sourcephp'php filephp forphp readingphp.php"php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php php php php php php$byteCountphp php=php filesizephp(php$sourcephp)php;
php php php php php php php php php php php php whilephp php(php$byteCountphp php>php php0php php&php&php php!feofphp(php$pdfFilephp)php)php php{
php php php php php php php php php php php php php php php php php$nextBlockphp php=php freadphp(php$pdfFilephp,php php$byteCountphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$nextBlockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Errorphp occuredphp whilephp php'php$sourcephp'php filephp readingphp.php"php php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$dataphp php.php=php php$nextBlockphp;
php php php php php php php php php php php php php php php php php$byteCountphp php-php=php strlenphp(php$nextBlockphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$byteCountphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Errorphp occuredphp whilephp php'php$sourcephp'php filephp readingphp.php"php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$pdfFilephp)php;

php php php php php php php php php php php php php$thisphp-php>php_stringParserphp php=php newphp Zendphp_Pdfphp_StringParserphp(php$dataphp,php php$factoryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_stringParserphp php=php newphp Zendphp_Pdfphp_StringParserphp(php$sourcephp,php php$factoryphp)php;
php php php php php php php php php}

php php php php php php php php php$pdfVersionCommentphp php=php php$thisphp-php>php_stringParserphp-php>readCommentphp(php)php;
php php php php php php php php ifphp php(substrphp(php$pdfVersionCommentphp,php php0php,php php5php)php php!php=php php'php%PDFphp-php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Filephp isphp notphp aphp PDFphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$pdfVersionphp php=php substrphp(php$pdfVersionCommentphp,php php5php)php;
php php php php php php php php ifphp php(versionphp_comparephp(php$pdfVersionphp,php php'php0php.php9php'php,php php php'<php'php)php php php|php|
php php php php php php php php php php php php versionphp_comparephp(php$pdfVersionphp,php php'php1php.php6php1php'php,php php'php>php=php'php)
php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todo
php php php php php php php php php php php php php php*php Tophp supportphp PDFphp versionsphp php1php.php5php php(Acrobatphp php6php)php andphp PDFphp versionphp php1php.php7php php(Acrobatphp php7php)
php php php php php php php php php php php php php php*php Streamphp compressionphp filterphp mustphp bephp implementedphp php(forphp compressedphp objectphp streamsphp)php.
php php php php php php php php php php php php php php*php Crossphp referencephp streamsphp mustphp bephp implemented
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'Unsupportedphp PDFphp versionphp.php Zendphp_Pdfphp supportsphp PDFphp php1php.php0php-php1php.php4php.php Currentphp versionphp php-php php\php'php%fphp\php'php'php,php php$pdfVersionphp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_pdfVersionphp php=php php$pdfVersionphp;

php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp php=php strrposphp(php$thisphp-php>php_stringParserphp-php>dataphp,php php'php%php%EOFphp'php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_stringParserphp-php>offsetphp php=php=php=php falsephp php|php|
php php php php php php php php php php php php strlenphp(php$thisphp-php>php_stringParserphp-php>dataphp)php php-php php$thisphp-php>php_stringParserphp-php>offsetphp php>php php7php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Pdfphp filephp syntaxphp errorphp.php Endphp-ofphp-flephp markerphp expectedphp atphp thephp endphp ofphp filephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp-php-php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Gophp tophp endphp ofphp crossphp-referencephp tablephp offset
php php php php php php php php php php*php/
php php php php php php php php whilephp php(Zendphp_Pdfphp_StringParserphp:php:isWhiteSpacephp(php ordphp(php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php)php php)php&php&
php php php php php php php php php php php php php php php php(php$thisphp-php>php_stringParserphp-php>offsetphp php>php php0php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp-php-php;
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php Gophp tophp thephp startphp ofphp crossphp-referencephp tablephp offset
php php php php php php php php php php*php/
php php php php php php php php whilephp php(php php(php!Zendphp_Pdfphp_StringParserphp:php:isWhiteSpacephp(php ordphp(php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php)php php)php)php&php&
php php php php php php php php php php php php php php php php(php$thisphp-php>php_stringParserphp-php>offsetphp php>php php0php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp-php-php;
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php Gophp tophp thephp endphp ofphp php'startxrefphp'php keyword
php php php php php php php php php php*php/
php php php php php php php php whilephp php(Zendphp_Pdfphp_StringParserphp:php:isWhiteSpacephp(php ordphp(php$thisphp-php>php_stringParserphp-php>dataphp[php$thisphp-php>php_stringParserphp-php>offsetphp]php)php php)php&php&
php php php php php php php php php php php php php php php php(php$thisphp-php>php_stringParserphp-php>offsetphp php>php php0php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp-php-php;
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php Gophp tophp thephp whitephp spacephp php(eolphp markerphp)php beforephp php'startxrefphp'php keyword
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_stringParserphp-php>offsetphp php-php=php php9php;

php php php php php php php php php$nextLexemephp php=php php$thisphp-php>php_stringParserphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'startxrefphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'Pdfphp filephp syntaxphp errorphp.php php\php'startxrefphp\php'php keywordphp expectedphp.php Offsetphp php-php php0xphp%Xphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp-strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$startXrefphp php=php php$thisphp-php>php_stringParserphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$startXrefphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'Pdfphp filephp syntaxphp errorphp.php Crossphp-referencephp tablephp offsetphp mustphp containphp onlyphp digitsphp.php Offsetphp php-php php0xphp%Xphp.php'php,php php$thisphp-php>php_stringParserphp-php>offsetphp-strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_trailerphp php=php php$thisphp-php>php_loadXRefTablephp(php$startXrefphp)php;
php php php php php php php php php$factoryphp-php>setObjectCountphp(php$thisphp-php>php_trailerphp-php>Sizephp-php>valuephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Objectphp destructor
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_stringParserphp-php>cleanUpphp(php)php;
php php php php php}
php}
