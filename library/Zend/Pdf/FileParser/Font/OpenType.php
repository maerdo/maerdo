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
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php OpenTypephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_FileParserphp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserphp/Fontphp.phpphp'php;

php/php*php*
php php*php Abstractphp basephp classphp forphp OpenTypephp fontphp filephp parsersphp.
php php*
php php*php TrueTypephp wasphp originallyphp developedphp byphp Applephp andphp wasphp adoptedphp asphp thephp default
php php*php fontphp formatphp forphp thephp Microsoftphp Windowsphp platformphp.php OpenTypephp isphp anphp extensionphp of
php php*php TrueTypephp,php developedphp jointlyphp byphp Microsoftphp andphp Adobephp,php whichphp addsphp supportphp for
php php*php PostScriptphp fontphp dataphp.
php php*
php php*php Thisphp abstractphp parserphp classphp formsphp thephp foundationphp forphp concretephp subclassesphp which
php php*php extractphp eitherphp TrueTypephp orphp PostScriptphp fontphp dataphp fromphp thephp filephp.
php php*
php php*php Allphp OpenTypephp filesphp usephp bigphp-endianphp bytephp orderingphp.
php php*
php php*php Thephp fullphp TrueTypephp andphp OpenTypephp specificationsphp canphp bephp foundphp atphp:
php php*php php<ulphp>
php php*php php php<liphp>php{php@linkphp httpphp:php/php/developerphp.applephp.comphp/textfontsphp/TTRefManphp/php}
php php*php php php<liphp>php{php@linkphp httpphp:php/php/wwwphp.microsoftphp.comphp/typographyphp/OTSPECphp/php}
php php*php php php<liphp>php{php@linkphp httpphp:php/php/partnersphp.adobephp.comphp/publicphp/developerphp/opentypephp/indexphp_specphp.htmlphp}
php php*php <php/ulphp>
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp extendsphp Zendphp_Pdfphp_FileParserphp_Font
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Storesphp thephp scalerphp typephp php(fontphp typephp)php forphp thephp fontphp filephp.php See
php php php php php php*php php{php@linkphp php_readScalerTypephp(php)php}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_scalerTypephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Storesphp thephp bytephp offsetsphp tophp thephp variousphp informationphp tablesphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tableDirectoryphp php=php arrayphp(php)php;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Semiphp-Concretephp Classphp Implementationphp php*php/

php php php php php/php*php*
php php php php php php*php Verifiesphp thatphp thephp fontphp filephp isphp inphp thephp expectedphp formatphp.
php php php php php php*
php php php php php php*php NOTEphp:php Thisphp methodphp shouldphp bephp overriddenphp inphp subclassesphp tophp checkphp the
php php php php php php*php specificphp formatphp andphp setphp php$thisphp-php>php_isScreenedphp!
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp screenphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isScreenedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_readScalerTypephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp andphp parsesphp thephp fontphp dataphp fromphp thephp filephp onphp diskphp.
php php php php php php*
php php php php php php*php NOTEphp:php Thisphp methodphp shouldphp bephp overriddenphp inphp subclassesphp tophp addphp typephp-
php php php php php php*php specificphp parsingphp andphp setphp php$thisphp-php>isParsedphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php*php Screenphp thephp fontphp filephp firstphp,php ifphp itphp hasnphp'tphp beenphp donephp yetphp.
php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>screenphp(php)php;

php php php php php php php php php/php*php Startphp byphp readingphp thephp tablephp directoryphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_parseTableDirectoryphp(php)php;

php php php php php php php php php/php*php Thenphp parsephp allphp ofphp thephp requiredphp tablesphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_parseHeadTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseNameTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parsePostTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseHheaTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseMaxpTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseOsphp2Tablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseHmtxTablephp(php)php;
php php php php php php php php php$thisphp-php>php_parseCmapTablephp(php)php;

php php php php php php php php php/php*php Ifphp presentphp,php parsephp thephp optionalphp tablesphp.
php php php php php php php php php php*php/
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Addphp parserphp forphp kerningphp pairsphp.
php php php php php php php php php php*php php@todophp Addphp parserphp forphp ligaturesphp.
php php php php php php php php php php*php php@todophp Addphp parserphp forphp otherphp usefulphp hintingphp tablesphp.
php php php php php php php php php php*php/
php php php php php}



php php php/php*php*php*php*php Internalphp Methodsphp php*php*php*php*php/


php php php/php*php Parserphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp tablephp directoryphp.
php php php php php php*
php php php php php php*php Thephp tablephp directoryphp containsphp thephp identifierphp,php checksumphp,php bytephp offsetphp,php and
php php php php php php*php lengthphp ofphp eachphp ofphp thephp informationphp tablesphp housedphp inphp thephp fontphp filephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseTableDirectoryphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>moveToOffsetphp(php4php)php;

php php php php php php php php php$tableCountphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'php%dphp tablesphp'php,php php$tableCountphp)php;

php php php php php php php php php/php*php Sanityphp checkphp,php inphp casephp wephp'rephp notphp actuallyphp readingphp aphp OpenTypephp filephp and
php php php php php php php php php php*php thephp firstphp fourphp bytesphp coincidentallyphp matchedphp anphp OpenTypephp signaturephp in
php php php php php php php php php php*php screenphp(php)php abovephp.
php php php php php php php php php php*
php php php php php php php php php php*php Therephp arephp atphp minimumphp php7php requiredphp tablesphp:php cmapphp,php headphp,php hheaphp,php hmtxphp,php maxpphp,
php php php php php php php php php php*php namephp,php andphp postphp.php Inphp thephp currentphp OpenTypephp standardphp,php onlyphp php3php2php tablephp types
php php php php php php php php php php*php arephp definedphp,php sophp usephp php5php0php asphp aphp practicalphp limitphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php(php$tableCountphp <php php7php)php php|php|php php(php$tableCountphp php>php php5php0php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Tablephp countphp notphp withinphp expectedphp rangephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:BADphp_TABLEphp_COUNTphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Skipphp thephp nextphp php6php bytesphp,php whichphp containphp valuesphp tophp aidphp aphp binaryphp searchphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php6php)php;

php php php php php php php php php/php*php Thephp directoryphp containsphp fourphp valuesphp:php thephp namephp ofphp thephp tablephp,php checksumphp,
php php php php php php php php php php*php offsetphp tophp thephp tablephp fromphp thephp beginningphp ofphp thephp fontphp,php andphp actualphp data
php php php php php php php php php php*php lengthphp ofphp thephp tablephp.
php php php php php php php php php php*php/
php php php php php php php php forphp php(php$tableIndexphp php=php php0php;php php$tableIndexphp <php php$tableCountphp;php php$tableIndexphp+php+php)php php{
php php php php php php php php php php php php php$tableNamephp php=php php$thisphp-php>readBytesphp(php4php)php;

php php php php php php php php php php php php php/php*php Wephp ignorephp thephp checksumphp herephp forphp twophp reasonsphp:php Firstphp,php thephp PDFphp viewer
php php php php php php php php php php php php php php*php willphp dophp thisphp laterphp anywayphp;php Secondphp,php calculatingphp thephp checksumphp would
php php php php php php php php php php php php php php*php requirephp unsignedphp integersphp,php whichphp PHPphp doesphp notphp currentlyphp providephp.
php php php php php php php php php php php php php php*php Wephp mayphp revisitphp thisphp inphp thephp futurephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php4php)php;

php php php php php php php php php php php php php$tableOffsetphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php php$tableLengthphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'php%sphp offsetphp:php php0xphp%xphp;php lengthphp:php php%dphp'php,php php$tableNamephp,php php$tableOffsetphp,php php$tableLengthphp)php;

php php php php php php php php php php php php php/php*php Sanityphp checksphp forphp offsetphp andphp lengthphp valuesphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$fileSizephp php=php php$thisphp-php>php_dataSourcephp-php>getSizephp(php)php;
php php php php php php php php php php php php ifphp php(php(php$tableOffsetphp <php php0php)php php|php|php php(php$tableOffsetphp php>php php$fileSizephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Tablephp offsetphp php(php$tableOffsetphp)php notphp withinphp expectedphp rangephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INDEXphp_OUTphp_OFphp_RANGEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php(php$tableLengthphp <php php0php)php php|php|php php(php(php$tableOffsetphp php+php php$tableLengthphp)php php>php php$fileSizephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Tablephp lengthphp php(php$tableLengthphp)php notphp withinphp expectedphp rangephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INDEXphp_OUTphp_OFphp_RANGEphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_tableDirectoryphp[php$tableNamephp]php[php'offsetphp'php]php php=php php$tableOffsetphp;
php php php php php php php php php php php php php$thisphp-php>php_tableDirectoryphp[php$tableNamephp]php[php'lengthphp'php]php php=php php$tableLengthphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp headphp php(Fontphp Headerphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp headphp tablephp containsphp globalphp informationphp aboutphp thephp fontphp suchphp asphp the
php php php php php php*php revisionphp numberphp andphp globalphp metricsphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseHeadTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'headphp'php)php;

php php php php php php php php php/php*php Wephp canphp readphp anyphp versionphp php1php tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>php_readTableVersionphp(php1php,php php1php)php;

php php php php php php php php php/php*php Skipphp thephp fontphp revisionphp numberphp andphp checksumphp adjustmentphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php8php)php;

php php php php php php php php php$magicNumberphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php ifphp php(php$magicNumberphp php!php=php php0xphp5fphp0fphp3cfphp5php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp magicphp numberphp.php Expectedphp:php php0xphp5fphp0fphp3cfphp5php;php actualphp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php sprintfphp(php'php%xphp'php,php php$magicNumberphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:BADphp_MAGICphp_NUMBERphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Mostphp ofphp thephp flagsphp wephp ignorephp,php butphp therephp arephp aphp fewphp valuesphp thatphp are
php php php php php php php php php php*php usefulphp forphp ourphp layoutphp routinesphp.
php php php php php php php php php php*php/
php php php php php php php php php$flagsphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>baselineAtZerophp php php php php=php php$thisphp-php>isBitSetphp(php0php,php php$flagsphp)php;
php php php php php php php php php$thisphp-php>useIntegerScalingphp php=php php$thisphp-php>isBitSetphp(php3php,php php$flagsphp)php;

php php php php php php php php php$thisphp-php>unitsPerEmphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Unitsphp perphp emphp:php php%dphp'php,php php$thisphp-php>unitsPerEmphp)php;

php php php php php php php php php/php*php Skipphp creationphp andphp modificationphp datephp/timephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php1php6php)php;

php php php php php php php php php$thisphp-php>xMinphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>yMinphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>xMaxphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>yMaxphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Fontphp boundingphp boxphp:php php%dphp php%dphp php%dphp php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>xMinphp,php php$thisphp-php>yMinphp,php php$thisphp-php>xMaxphp,php php$thisphp-php>yMaxphp)php;

php php php php php php php php php/php*php Thephp stylephp bitsphp herephp mustphp matchphp thephp fsSelectionphp bitsphp inphp thephp OSphp/php2
php php php php php php php php php php*php tablephp,php ifphp presentphp.
php php php php php php php php php php*php/
php php php php php php php php php$macStyleBitsphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>isBoldphp php php php=php php$thisphp-php>isBitSetphp(php0php,php php$macStyleBitsphp)php;
php php php php php php php php php$thisphp-php>isItalicphp php=php php$thisphp-php>isBitSetphp(php1php,php php$macStyleBitsphp)php;

php php php php php php php php php/php*php Wephp donphp'tphp needphp thephp remainderphp ofphp dataphp inphp thisphp tablephp:php smallestphp readable
php php php php php php php php php php*php sizephp,php fontphp directionphp hintphp,php indexToLocFormatphp,php andphp glyphDataFormatphp.
php php php php php php php php php php*php/
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp namephp php(Namingphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp namephp tablephp containsphp allphp ofphp thephp identifyingphp stringsphp associatedphp with
php php php php php php*php thephp fontphp suchphp asphp itsphp namephp,php copyrightphp,php trademarkphp,php licensephp,php etcphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseNameTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'namephp'php)php;
php php php php php php php php php$baseOffsetphp php=php php$thisphp-php>php_tableDirectoryphp[php'namephp'php]php[php'offsetphp'php]php;

php php php php php php php php php/php*php Thephp namephp tablephp beginsphp withphp aphp shortphp headerphp,php followedphp byphp eachphp ofphp the
php php php php php php php php php php*php fixedphp-lengthphp namephp recordsphp,php followedphp byphp thephp variablephp-lengthphp stringsphp.
php php php php php php php php php php*php/

php php php php php php php php php/php*php Wephp onlyphp understandphp versionphp php0php tablesphp.
php php php php php php php php php php*php/
php php php php php php php php php$tableFormatphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php ifphp php(php$tableFormatphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unablephp tophp readphp formatphp php$tableFormatphp tablephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:DONTphp_UNDERSTANDphp_TABLEphp_VERSIONphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Formatphp php%dphp tablephp'php,php php$tableFormatphp)php;

php php php php php php php php php$nameCountphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'php%dphp namephp stringsphp'php,php php$nameCountphp)php;

php php php php php php php php php$storageOffsetphp php=php php$thisphp-php>readUIntphp(php2php)php php+php php$baseOffsetphp;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Storagephp offsetphp:php php0xphp%xphp'php,php php$storageOffsetphp)php;

php php php php php php php php php/php*php Scanphp thephp namephp recordsphp forphp thosephp wephp'rephp interestedphp inphp.php Wephp'llphp skipphp over
php php php php php php php php php php*php encodingsphp andphp languagesphp wephp donphp'tphp understandphp orphp supportphp.php Preferphp the
php php php php php php php php php php*php Microsoftphp Unicodephp encodingphp forphp aphp givenphp namephp/languagephp combinationphp,php but
php php php php php php php php php php*php usephp Macphp Romanphp ifphp nothingphp elsephp isphp availablephp.php Wephp willphp extractphp the
php php php php php php php php php php*php actualphp stringsphp laterphp.
php php php php php php php php php php*php/
php php php php php php php php php$nameRecordsphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$nameIndexphp php=php php0php;php php$nameIndexphp <php php$nameCountphp;php php$nameIndexphp+php+php)php php{

php php php php php php php php php php php php php$platformIDphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$encodingIDphp php=php php$thisphp-php>readUIntphp(php2php)php;

php php php php php php php php php php php php ifphp php(php!php php(php php(php(php$platformIDphp php=php=php php3php)php php&php&php php(php$encodingIDphp php=php=php php1php)php)php php|php|php php php php php/php/php Microsoftphp Unicode
php php php php php php php php php php php php php php php php php php php php php(php(php$platformIDphp php=php=php php1php)php php&php&php php(php$encodingIDphp php=php=php php0php)php)php php php php php php php php/php/php Macphp Roman
php php php php php php php php php php php php php php php php php php php php)php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php8php)php;php php php php php/php/php Notphp aphp supportedphp encodingphp.php Movephp onphp.
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$languageIDphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$nameIDphp php php php php php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$nameLengthphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$nameOffsetphp php=php php$thisphp-php>readUIntphp(php2php)php;

php php php php php php php php php php php php php$languageCodephp php=php php$thisphp-php>php_languageCodeForPlatformphp(php$platformIDphp,php php$languageIDphp)php;
php php php php php php php php php php php php ifphp php(php$languageCodephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Skippingphp languageIDphp:php php0xphp%xphp;php platformIDphp php%dphp'php,php php$languageIDphp,php php$platformIDphp)php;
php php php php php php php php php php php php php php php php continuephp;php php php php php/php/php Notphp aphp supportedphp languagephp.php Movephp onphp.
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Addingphp nameIDphp:php php%dphp;php languageIDphp:php php0xphp%xphp;php platformIDphp:php php%dphp;php offsetphp:php php0xphp%xphp php(php0xphp%xphp)php;php lengthphp:php php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$nameIDphp,php php$languageIDphp,php php$platformIDphp,php php$baseOffsetphp php+php php$nameOffsetphp,php php$nameOffsetphp,php php$nameLengthphp)php;

php php php php php php php php php php php php php/php*php Entriesphp inphp thephp namephp tablephp arephp sortedphp byphp platformphp IDphp.php Ifphp anphp entry
php php php php php php php php php php php php php php*php existsphp forphp bothphp Macphp Romanphp andphp Microsoftphp Unicodephp,php thephp Unicodephp entry
php php php php php php php php php php php php php php*php willphp prevailphp sincephp itphp isphp processedphp lastphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$nameRecordsphp[php$nameIDphp]php[php$languageCodephp]php php=php arrayphp(php'platformphp'php php=php>php php$platformIDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'offsetphp'php php php php=php>php php$nameOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'lengthphp'php php php php=php>php php$nameLengthphp php)php;
php php php php php php php php php}

php php php php php php php php php/php*php Nowphp gophp backphp andphp extractphp thephp interestingphp stringsphp.
php php php php php php php php php php*php/
php php php php php php php php php$fontNamesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nameRecordsphp asphp php$namephp php=php>php php$languagesphp)php php{
php php php php php php php php php php php php foreachphp php(php$languagesphp asphp php$languagephp php=php>php php$attributesphp)php php{
php php php php php php php php php php php php php php php php php$stringOffsetphp php=php php$storageOffsetphp php+php php$attributesphp[php'offsetphp'php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$stringOffsetphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$attributesphp[php'platformphp'php]php php=php=php php3php)php php{
php php php php php php php php php php php php php php php php php php php php php$stringphp php=php php$thisphp-php>readStringUTFphp1php6php(php$attributesphp[php'lengthphp'php]php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$stringphp php=php php$thisphp-php>readStringMacRomanphp(php$attributesphp[php'lengthphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$fontNamesphp[php$namephp]php[php$languagephp]php php=php php$stringphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>namesphp php=php php$fontNamesphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp postphp php(PostScriptphp Informationphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp postphp tablephp containsphp additionalphp informationphp requiredphp forphp usingphp thephp font
php php php php php php*php onphp PostScriptphp printersphp.php Itphp alsophp containsphp thephp preferredphp locationphp and
php php php php php php*php thicknessphp forphp anphp underlinephp,php whichphp isphp usedphp byphp ourphp layoutphp codephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parsePostTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'postphp'php)php;

php php php php php php php php php/php*php Wephp canphp readphp versionsphp php1php-php4php tablesphp.
php php php php php php php php php php*php/
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>php_readTableVersionphp(php1php,php php4php)php;

php php php php php php php php php$thisphp-php>italicAnglephp php=php php$thisphp-php>readFixedphp(php1php6php,php php1php6php)php;

php php php php php php php php php$thisphp-php>underlinePositionphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>underlineThicknessphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php$fixedPitchphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php$thisphp-php>isMonospacedphp php=php php(php$fixedPitchphp php!php=php=php php0php)php;

php php php php php php php php php/php*php Skipphp overphp PostScriptphp virtualphp memoryphp usagephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php1php6php)php;

php php php php php php php php php/php*php Thephp formatphp ofphp thephp remainderphp ofphp thisphp tablephp isphp dependentphp onphp thephp table
php php php php php php php php php php*php versionphp.php Howeverphp,php sincephp itphp containsphp glyphphp orderingphp informationphp and
php php php php php php php php php php*php PostScriptphp namesphp whichphp wephp donphp'tphp usephp,php movephp onphp.php php(Thisphp mayphp changephp at
php php php php php php php php php php*php somephp pointphp inphp thephp futurephp thoughphp.php.php.php)
php php php php php php php php php php*php/
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp hheaphp php(Horizontalphp Headerphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp hheaphp tablephp containsphp informationphp usedphp forphp horizontalphp layoutphp.php Itphp also
php php php php php php*php containsphp somephp verticalphp layoutphp informationphp forphp Applephp systemsphp.php Thephp vertical
php php php php php php*php layoutphp informationphp forphp thephp PDFphp filephp isphp usuallyphp takenphp fromphp thephp OSphp/php2php tablephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseHheaTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'hheaphp'php)php;

php php php php php php php php php/php*php Wephp canphp readphp anyphp versionphp php1php tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>php_readTableVersionphp(php1php,php php1php)php;

php php php php php php php php php/php*php Thephp typographicphp ascentphp,php descentphp,php andphp linephp gapphp valuesphp arephp Applephp-
php php php php php php php php php php*php specificphp.php Similarphp valuesphp existphp inphp thephp OSphp/php2php tablephp.php Wephp'llphp usephp these
php php php php php php php php php php*php valuesphp unlessphp betterphp valuesphp arephp foundphp inphp OSphp/php2php.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>ascentphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>descentphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>lineGapphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Thephp descentphp valuephp isphp supposedphp tophp bephp negativephp-php-itphp'sphp thephp distance
php php php php php php php php php php*php relativephp tophp thephp baselinephp.php Howeverphp,php somephp fontsphp improperlyphp storephp a
php php php php php php php php php php*php positivephp valuephp inphp thisphp fieldphp.php Ifphp aphp positivephp valuephp isphp foundphp,php flipphp the
php php php php php php php php php php*php signphp andphp recordphp aphp warningphp inphp thephp debugphp logphp thatphp wephp didphp thisphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>descentphp php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Warningphp:php Fontphp shouldphp specifyphp negativephp descentphp.php Actualphp:php php%dphp;php Usingphp php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>descentphp,php php-php$thisphp-php>descentphp)php;
php php php php php php php php php php php php php$thisphp-php>descentphp php=php php-php$thisphp-php>descentphp;
php php php php php php php php php}

php php php php php php php php php/php*php Skipphp overphp advancephp widthphp,php leftphp andphp rightphp sidebearingphp,php maxphp xphp extentphp,
php php php php php php php php php php*php caretphp slopephp risephp,php runphp,php andphp offsetphp,php andphp thephp fourphp reservedphp fieldsphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php2php2php)php;

php php php php php php php php php/php*php Thesephp valuesphp arephp neededphp tophp readphp thephp hmtxphp tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>metricDataFormatphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>numberHMetricsphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'hmtxphp dataphp formatphp:php php%dphp;php numberphp ofphp metricsphp:php php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>metricDataFormatphp,php php$thisphp-php>numberHMetricsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp hheaphp php(Horizontalphp Headerphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp hheaphp tablephp containsphp informationphp usedphp forphp horizontalphp layoutphp.php Itphp also
php php php php php php*php containsphp somephp verticalphp layoutphp informationphp forphp Applephp systemsphp.php Thephp vertical
php php php php php php*php layoutphp informationphp forphp thephp PDFphp filephp isphp usuallyphp takenphp fromphp thephp OSphp/php2php tablephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseMaxpTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'maxpphp'php)php;

php php php php php php php php php/php*php Wephp donphp'tphp carephp aboutphp tablephp versionphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_readTableVersionphp(php0php,php php1php)php;

php php php php php php php php php/php*php Thephp numberphp ofphp glyphsphp inphp thephp fontphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>numGlyphsphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'numberphp ofphp glyphsphp:php php%dphp'php,php php$thisphp-php>numGlyphsphp)php;

php php php php php php php php php/php/php Skipphp otherphp maxpphp tablephp entriesphp php(ifphp presentedphp withphp tablephp versionphp php1php.php0php)php.php.php.
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp OSphp/php2php php(OSphp/php2php andphp Windowsphp Metricsphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp OSphp/php2php tablephp containsphp additionalphp metricsphp dataphp thatphp isphp requiredphp tophp use
php php php php php php*php thephp fontphp onphp thephp OSphp/php2php orphp Microsoftphp Windowsphp platformsphp.php Itphp isphp notphp required
php php php php php php*php forphp Macintoshphp fontsphp,php sophp mayphp notphp alwaysphp bephp presentphp.php Whenphp availablephp,php wephp use
php php php php php php*php thisphp tablephp tophp determinephp mostphp ofphp thephp verticalphp layoutphp andphp stylistic
php php php php php php*php informationphp andphp forphp thephp fontphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseOsphp2Tablephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>numberHMetricsphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"hheaphp tablephp mustphp bephp parsedphp priorphp tophp callingphp thisphp methodphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:PARSEDphp_OUTphp_OFphp_ORDERphp)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'OSphp/php2php'php)php;
php php php php php php php php php}php catchphp php(Zendphp_Pdfphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php Thisphp tablephp isphp notphp alwaysphp presentphp.php Ifphp missingphp,php usephp defaultphp valuesphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php ifphp php(php$ephp-php>getCodephp(php)php php=php=php Zendphp_Pdfphp_Exceptionphp:php:REQUIREDphp_TABLEphp_NOTphp_FOUNDphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Nophp OSphp/php2php tablephp foundphp.php Usingphp defaultphp valuesphp'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>fontWeightphp php=php Zendphp_Pdfphp_Fontphp:php:WEIGHTphp_NORMALphp;
php php php php php php php php php php php php php php php php php$thisphp-php>fontWidthphp php=php Zendphp_Pdfphp_Fontphp:php:WIDTHphp_NORMALphp;
php php php php php php php php php php php php php php php php php$thisphp-php>isEmbeddablephp php=php truephp;
php php php php php php php php php php php php php php php php php$thisphp-php>isSubsettablephp php=php truephp;
php php php php php php php php php php php php php php php php php$thisphp-php>strikeThicknessphp php=php php$thisphp-php>unitsPerEmphp php*php php0php.php0php5php;
php php php php php php php php php php php php php php php php php$thisphp-php>strikePositionphp php php=php php$thisphp-php>unitsPerEmphp php*php php0php.php2php2php5php;
php php php php php php php php php php php php php php php php php$thisphp-php>isSerifFontphp php php php php php php=php falsephp;php php php php php/php/php thephp stylephp ofphp thephp fontphp isphp unknown
php php php php php php php php php php php php php php php php php$thisphp-php>isSansSerifFontphp php php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>isOrnamentalFontphp php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>isScriptFontphp php php php php php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>isSymbolicFontphp php php php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>isAdobeLatinSubsetphp php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>vendorIDphp php=php php'php'php;
php php php php php php php php php php php php php php php php php$thisphp-php>xHeightphp php=php php0php;
php php php php php php php php php php php php php php php php php$thisphp-php>capitalHeightphp php=php php0php;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php Somethingphp elsephp wentphp wrongphp.php Throwphp thisphp exceptionphp higherphp upphp thephp chainphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Versionphp php0php tablesphp arephp becomingphp rarerphp thesephp daysphp.php Theyphp arephp onlyphp found
php php php php php php php php php php*php inphp olderphp fontsphp.
php php php php php php php php php php*
php php php php php php php php php php*php Versionphp php1php formallyphp definesphp thephp Unicodephp characterphp rangephp bitsphp andphp adds
php php php php php php php php php php*php twophp newphp fieldsphp tophp thephp endphp ofphp thephp tablephp.
php php php php php php php php php php*
php php php php php php php php php php*php Versionphp php2php definesphp severalphp additionalphp flagsphp tophp thephp embeddingphp bits
php php php php php php php php php php*php php(fsTypephp fieldphp)php andphp fivephp newphp fieldsphp tophp thephp endphp ofphp thephp tablephp.
php php php php php php php php php php*
php php php php php php php php php php*php Versionsphp php2php andphp php3php arephp structurallyphp identicalphp.php Therephp arephp onlyphp two
php php php php php php php php php php*php significantphp differencesphp betweenphp thephp twophp:php Firstphp,php inphp versionphp php3php,php the
php php php php php php php php php php*php averagephp characterphp widthphp php(xAvgCharWidthphp fieldphp)php isphp calculatedphp usingphp all
php php php php php php php php php php*php nonphp-zerophp widthphp glyphsphp inphp thephp fontphp insteadphp ofphp justphp thephp Latinphp lowerphp-
php php php php php php php php php php*php casephp alphabeticphp charactersphp;php thisphp doesnphp'tphp affectphp usphp.php Secondphp,php in
php php php php php php php php php php*php versionphp php3php,php thephp embeddingphp bitsphp php(fsTypephp fieldphp)php havephp beenphp madephp mutually
php php php php php php php php php php*php exclusivephp;php seephp additionalphp discussonphp onphp thisphp belowphp.
php php php php php php php php php php*
php php php php php php php php php php*php Wephp canphp understandphp allphp fourphp ofphp thesephp tablephp versionsphp.
php php php php php php php php php php*php/
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php ifphp php(php(php$tableVersionphp <php php0php)php php|php|php php(php$tableVersionphp php>php php3php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unablephp tophp readphp versionphp php$tableVersionphp tablephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:DONTphp_UNDERSTANDphp_TABLEphp_VERSIONphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Versionphp php%dphp tablephp'php,php php$tableVersionphp)php;

php php php php php php php php php$thisphp-php>averageCharWidthphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Indicatesphp thephp visualphp weightphp andphp aspectphp ratiophp ofphp thephp charactersphp.php Used
php php php php php php php php php php*php primarilyphp tophp logicallyphp sortphp fontsphp inphp listsphp.php Alsophp usedphp tophp helpphp choose
php php php php php php php php php php*php aphp morephp appropriatephp substitutephp fontphp whenphp necessaryphp.php Seephp thephp WEIGHTphp_
php php php php php php php php php php*php andphp WIDTHphp_php constantsphp definedphp inphp Zendphp_Pdfphp_Fontphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>fontWeightphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>fontWidthphp php php=php php$thisphp-php>readUIntphp(php2php)php;

php php php php php php php php php/php*php Describesphp thephp fontphp embeddingphp licensingphp rightsphp.php Wephp canphp onlyphp embedphp and
php php php php php php php php php php*php subsetphp aphp fontphp whenphp givenphp explicitphp permissionphp.
php php php php php php php php php php*
php php php php php php php php php php*php NOTEphp:php Wephp alwaysphp interpretphp thesephp bitsphp accordingphp tophp thephp rulesphp defined
php php php php php php php php php php*php inphp versionphp php3php ofphp thisphp tablephp,php regardlessphp ofphp thephp actualphp versionphp.php This
php php php php php php php php php php*php meansphp wephp willphp performphp ourphp checksphp inphp orderphp fromphp thephp mostphp-restrictive
php php php php php php php php php php*php tophp thephp leastphp.
php php php php php php php php php php*php/
php php php php php php php php php$embeddingFlagsphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Embeddingphp flagsphp:php php%dphp'php,php php$embeddingFlagsphp)php;
php php php php php php php php ifphp php(php$thisphp-php>isBitSetphp(php9php,php php$embeddingFlagsphp)php)php php{
php php php php php php php php php php php php php/php*php Onlyphp bitmapsphp mayphp bephp embeddedphp.php Wephp donphp'tphp havephp thephp abilityphp tophp strip
php php php php php php php php php php php php php php*php outlinesphp fromphp fontsphp yetphp,php sophp thisphp meansphp nophp embedphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>isEmbeddablephp php=php falsephp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>isBitSetphp(php1php,php php$embeddingFlagsphp)php)php php{
php php php php php php php php php php php php php/php*php Restrictedphp licensephp embeddingphp.php Wephp currentlyphp donphp'tphp havephp anyphp wayphp to
php php php php php php php php php php php php php php*php enforcephp thisphp,php sophp interpretphp thisphp asphp nophp embedphp.php Thisphp mayphp bephp revised
php php php php php php php php php php php php php php*php inphp thephp futurephp.php.php.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>isEmbeddablephp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php Thephp remainderphp ofphp thephp bitphp settingsphp grantphp usphp permissionphp tophp embed
php php php php php php php php php php php php php php*php thephp fontphp.php Therephp mayphp bephp additionalphp usagephp rightsphp grantedphp orphp denied
php php php php php php php php php php php php php php*php butphp thosephp onlyphp affectphp thephp PDFphp viewerphp applicationphp,php notphp ourphp codephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>isEmbeddablephp php=php truephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Fontphp php'php php.php php(php$thisphp-php>isEmbeddablephp php?php php'mayphp'php php:php php'mayphp notphp'php)php php.php php'php bephp embeddedphp'php)php;
php php php php php php php php php$isSubsettablephp php=php php$thisphp-php>isBitSetphp(php$embeddingFlagsphp,php php8php)php;

php php php php php php php php php/php*php Recommendedphp sizephp andphp offsetphp forphp synthesizedphp subscriptphp charactersphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>subscriptXSizephp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>subscriptYSizephp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>subscriptXOffsetphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>subscriptYOffsetphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Recommendedphp sizephp andphp offsetphp forphp synthesizedphp superscriptphp charactersphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>superscriptXSizephp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>superscriptYSizephp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>superscriptXOffsetphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>superscriptYOffsetphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Sizephp andphp verticalphp offsetphp forphp thephp strikethroughphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>strikeThicknessphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>strikePositionphp php php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Describesphp thephp classphp ofphp fontphp:php serifphp,php sansphp serifphp,php scriptphp.php etcphp.php These
php php php php php php php php php php*php valuesphp arephp definedphp herephp:
php php php php php php php php php php*php php php httpphp:php/php/wwwphp.microsoftphp.comphp/OpenTypephp/OTSpecphp/ibmfcphp.htm
php php php php php php php php php php*php/
php php php php php php php php php$familyClassphp php=php php(php$thisphp-php>readUIntphp(php2php)php php>php>php php8php)php;php php php php php/php/php donphp'tphp carephp aboutphp subclass
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Fontphp familyphp classphp:php php%dphp'php,php php$familyClassphp)php;
php php php php php php php php php$thisphp-php>isSerifFontphp php php php php php php=php php(php(php(php$familyClassphp php>php=php php1php)php php&php&php php(php$familyClassphp <php=php php5php)php)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$familyClassphp php=php=php php7php)php)php;
php php php php php php php php php$thisphp-php>isSansSerifFontphp php php=php php(php$familyClassphp php=php=php php8php)php;
php php php php php php php php php$thisphp-php>isOrnamentalFontphp php=php php(php$familyClassphp php=php=php php9php)php;
php php php php php php php php php$thisphp-php>isScriptFontphp php php php php php=php php(php$familyClassphp php=php=php php1php0php)php;
php php php php php php php php php$thisphp-php>isSymbolicFontphp php php php=php php(php$familyClassphp php=php=php php1php2php)php;

php php php php php php php php php/php*php Skipphp overphp thephp PANOSEphp numberphp.php Thephp interestingphp valuesphp forphp usphp overlap
php php php php php php php php php php*php withphp thephp fontphp familyphp classphp definedphp abovephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php1php0php)php;

php php php php php php php php php/php*php Thephp Unicodephp rangephp isphp madephp upphp ofphp fourphp php4php-bytephp unsignedphp longphp integers
php php php php php php php php php php*php whichphp arephp usedphp asphp bitfieldsphp coveringphp aphp php1php2php8php-bitphp rangephp.php Eachphp bit
php php php php php php php php php php*php representsphp aphp Unicodephp codephp blockphp.php Ifphp thephp bitphp isphp setphp,php thisphp fontphp at
php php php php php php php php php php*php leastphp partiallyphp coversphp thephp charactersphp inphp thatphp blockphp.
php php php php php php php php php php*php/
php php php php php php php php php$unicodeRangephp1php php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php$unicodeRangephp2php php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php$unicodeRangephp3php php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php$unicodeRangephp4php php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Unicodephp rangesphp:php php0xphp%xphp php0xphp%xphp php0xphp%xphp php0xphp%xphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php$unicodeRangephp1php,php php$unicodeRangephp2php,php php$unicodeRangephp3php,php php$unicodeRangephp4php)php;

php php php php php php php php php/php*php Thephp Unicodephp rangephp isphp currentlyphp onlyphp usedphp tophp decidephp ifphp thephp character
php php php php php php php php php php*php setphp coveredphp byphp thephp fontphp isphp aphp subsetphp ofphp thephp Adobephp Latinphp setphp,php meaning
php php php php php php php php php php*php itphp onlyphp hasphp thephp basicphp latinphp setphp.php Ifphp itphp coversphp anyphp otherphp charactersphp,
php php php php php php php php php php*php evenphp anyphp ofphp thephp extendedphp latinphp charactersphp,php itphp isphp consideredphp symbolic
php php php php php php php php php php*php tophp PDFphp andphp mustphp bephp describedphp differentlyphp inphp thephp Fontphp Descriptorphp.
php php php php php php php php php php*php/
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Fontphp isphp recognizedphp asphp Adobephp Latinphp subsetphp fontphp ifphp itphp onlyphp contains
php php php php php php php php php php*php Basicphp Latinphp charactersphp php(onlyphp bitphp php0php ofphp Unicodephp rangephp bitsphp isphp setphp)php.
php php php php php php php php php php*php Actuallyphp,php otherphp Unicodephp subrangesphp likephp Generalphp Punctuationphp php(bitphp php3php1php)php also
php php php php php php php php php php*php fallphp intophp Adobephp Latinphp charactersphp.php Sophp thisphp codephp hasphp tophp bephp modifiedphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>isAdobeLatinSubsetphp php=php php(php(php$unicodeRangephp1php php=php=php php1php)php php&php&php php(php$unicodeRangephp2php php=php=php php0php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$unicodeRangephp3php php=php=php php0php)php php&php&php php(php$unicodeRangephp4php php=php=php php0php)php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php(php$thisphp-php>isAdobeLatinSubsetphp php?php php'Isphp'php php:php php'Isphp notphp'php)php php.php php'php aphp subsetphp ofphp Adobephp Latinphp'php)php;

php php php php php php php php php$thisphp-php>vendorIDphp php=php php$thisphp-php>readBytesphp(php4php)php;

php php php php php php php php php/php*php Skipphp thephp fontphp stylephp bitsphp.php Wephp usephp thephp valuesphp foundphp inphp thephp php'headphp'php tablephp.
php php php php php php php php php php*php Alsophp skipphp thephp firstphp Unicodephp andphp lastphp Unicodephp characterphp indiciesphp.php Our
php php php php php php php php php php*php cmapphp implementationphp doesphp notphp needphp thesephp valuesphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php6php)php;

php php php php php php php php php/php*php Typographicphp ascenderphp,php descenderphp,php andphp linephp gapphp.php Thesephp valuesphp are
php php php php php php php php php php*php preferredphp tophp thosephp inphp thephp php'hheaphp'php tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>ascentphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>descentphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php$thisphp-php>lineGapphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php/php*php Thephp descentphp valuephp isphp supposedphp tophp bephp negativephp-php-itphp'sphp thephp distance
php php php php php php php php php php*php relativephp tophp thephp baselinephp.php Howeverphp,php somephp fontsphp improperlyphp storephp a
php php php php php php php php php php*php positivephp valuephp inphp thisphp fieldphp.php Ifphp aphp positivephp valuephp isphp foundphp,php flipphp the
php php php php php php php php php php*php signphp andphp recordphp aphp warningphp inphp thephp debugphp logphp thatphp wephp didphp thisphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>descentphp php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Warningphp:php Fontphp shouldphp specifyphp negativephp descentphp.php Actualphp:php php%dphp;php Usingphp php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>descentphp,php php-php$thisphp-php>descentphp)php;
php php php php php php php php php php php php php$thisphp-php>descentphp php=php php-php$thisphp-php>descentphp;
php php php php php php php php php}

php php php php php php php php php/php*php Skipphp overphp Windowsphp-specificphp ascentphp andphp descentphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>skipBytesphp(php4php)php;

php php php php php php php php php/php*php Versionsphp php0php andphp php1php tablesphp dophp notphp containphp thephp xphp orphp capitalphp height
php php php php php php php php php php*php fieldsphp.php Recordphp zerophp forphp unknownphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$tableVersionphp <php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>xHeightphp php=php php0php;
php php php php php php php php php php php php php$thisphp-php>capitalHeightphp php=php php0php;
php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php/php*php Skipphp overphp thephp Windowsphp codephp pagephp coveragesphp.php Wephp arephp onlyphp concerned
php php php php php php php php php php php php php php*php withphp Unicodephp coveragephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php8php)php;

php php php php php php php php php php php php php$thisphp-php>xHeightphp php=php php$thisphp-php>readIntphp(php2php)php;
php php php php php php php php php php php php php$thisphp-php>capitalHeightphp php=php php$thisphp-php>readIntphp(php2php)php;

php php php php php php php php php php php php php/php*php Ignorephp thephp remainingphp fieldsphp inphp thisphp tablephp.php Theyphp arephp Windowsphp-specificphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Obtainphp thephp xphp andphp capitalphp heightsphp fromphp thephp php'glyfphp'php tablephp ifphp they
php php php php php php php php php php*php php php havenphp'tphp beenphp suppliedphp herephp insteadphp ofphp storingphp zerophp.
php php php php php php php php php php*php/
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp hmtxphp php(Horizontalphp Metricsphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp hmtxphp tablephp containsphp thephp horizontalphp metricsphp forphp everyphp glyphphp contained
php php php php php php*php withinphp thephp fontphp.php Thesephp arephp thephp criticalphp valuesphp forphp horizontalphp layoutphp of
php php php php php php*php textphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseHmtxTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'hmtxphp'php)php;

php php php php php php php php ifphp php(php!php php$thisphp-php>numberHMetricsphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"hheaphp tablephp mustphp bephp parsedphp priorphp tophp callingphp thisphp methodphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:PARSEDphp_OUTphp_OFphp_ORDERphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Wephp onlyphp understandphp versionphp php0php tablesphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>metricDataFormatphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unablephp tophp readphp formatphp php$thisphp-php>metricDataFormatphp tablephp.php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:DONTphp_UNDERSTANDphp_TABLEphp_VERSIONphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Thephp hmtxphp tablephp hasphp nophp headerphp.php Forphp eachphp glpyhphp inphp thephp fontphp,php itphp contains
php php php php php php php php php php*php thephp glyphphp'sphp advancephp widthphp andphp itsphp leftphp sidephp bearingphp.php Wephp donphp'tphp usephp the
php php php php php php php php php php*php leftphp sidephp bearingphp.
php php php php php php php php php php*php/
php php php php php php php php php$glyphWidthsphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$thisphp-php>numberHMetricsphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$glyphWidthsphp[php$iphp]php php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php2php)php;
php php php php php php php php php}
php php php php php php php php php/php*php Populatephp lastphp valuephp forphp thephp restphp ofphp array
php php php php php php php php php php*php/
php php php php php php php php whilephp php(countphp(php$glyphWidthsphp)php <php php$thisphp-php>numGlyphsphp)php php{
php php php php php php php php php php php php php$glyphWidthsphp[php]php php=php endphp(php$glyphWidthsphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>glyphWidthsphp php=php php$glyphWidthsphp;

php php php php php php php php php/php*php Therephp isphp anphp optionalphp tablephp ofphp leftphp sidephp bearingsphp whichphp isphp sometimes
php php php php php php php php php php*php usedphp forphp monospacedphp fontsphp.php Wephp donphp'tphp usephp thephp leftphp sidephp bearingphp,php so
php php php php php php php php php php*php wephp canphp safelyphp ignorephp itphp.
php php php php php php php php php php*php/
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsesphp thephp OpenTypephp cmapphp php(Characterphp tophp Glyphphp Mappingphp)php tablephp.
php php php php php php*
php php php php php php*php Thephp cmapphp tablephp providesphp thephp mapsphp fromphp characterphp codesphp tophp fontphp glyphsphp.
php php php php php php*php Therephp arephp usuallyphp atphp leastphp twophp characterphp mapsphp inphp aphp fontphp:php Microsoftphp Unicode
php php php php php php*php andphp Macintoshphp Romanphp.php Forphp veryphp complexphp fontsphp,php therephp mayphp alsophp bephp mappings
php php php php php php*php forphp thephp charactersphp inphp thephp Unicodephp Surrogatesphp Areaphp,php whichphp arephp UCSphp-php4
php php php php php php*php charactersphp.
php php php php php php*
php php php php php php*php php@todophp Needphp tophp reworkphp thephp selectionphp logicphp forphp pickingphp aphp subtablephp.php Wephp should
php php php php php php*php php php havephp anphp explicitphp listphp ofphp preferencesphp,php followedphp byphp aphp listphp ofphp thosephp that
php php php php php php*php php php arephp tolerablephp.php Mostphp specificallyphp,php sincephp everythingphp abovephp thisphp layerphp deals
php php php php php php*php php php inphp Unicodephp,php wephp needphp tophp bephp surephp tophp onlyphp acceptphp formatphp php0php MacRomanphp tablesphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parseCmapTablephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_jumpToTablephp(php'cmapphp'php)php;
php php php php php php php php php$baseOffsetphp php=php php$thisphp-php>php_tableDirectoryphp[php'cmapphp'php]php[php'offsetphp'php]php;

php php php php php php php php php/php*php Wephp onlyphp understandphp versionphp php0php tablesphp.
php php php php php php php php php php*php/
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php ifphp php(php$tableVersionphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unablephp tophp readphp versionphp php$tableVersionphp tablephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:DONTphp_UNDERSTANDphp_TABLEphp_VERSIONphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Versionphp php%dphp tablephp'php,php php$tableVersionphp)php;

php php php php php php php php php$subtableCountphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php$thisphp-php>php_debugLogphp(php'php%dphp subtablesphp'php,php php$subtableCountphp)php;

php php php php php php php php php/php*php Likephp thephp namephp tablephp,php therephp mayphp bephp manyphp differentphp encodingphp subtables
php php php php php php php php php php*php presentphp.php Ideallyphp,php wephp arephp lookingphp forphp anphp acceptablephp Unicodephp tablephp.
php php php php php php php php php php*php/
php php php php php php php php php$subtablesphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$subtableIndexphp php=php php0php;php php$subtableIndexphp <php php$subtableCountphp;php php$subtableIndexphp+php+php)php php{

php php php php php php php php php php php php php$platformIDphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$encodingIDphp php=php php$thisphp-php>readUIntphp(php2php)php;

php php php php php php php php php php php php ifphp php(php!php php(php php(php(php$platformIDphp php=php=php php0php)php php&php&php php(php$encodingIDphp php=php=php php3php)php)php php|php|php php php php php/php/php Unicodephp php2php.php0php orphp later
php php php php php php php php php php php php php php php php php php php php php(php(php$platformIDphp php=php=php php0php)php php&php&php php(php$encodingIDphp php=php=php php0php)php)php php|php|php php php php php/php/php Unicode
php php php php php php php php php php php php php php php php php php php php php(php(php$platformIDphp php=php=php php3php)php php&php&php php(php$encodingIDphp php=php=php php1php)php)php php|php|php php php php php/php/php Microsoftphp Unicode
php php php php php php php php php php php php php php php php php php php php php(php(php$platformIDphp php=php=php php1php)php php&php&php php(php$encodingIDphp php=php=php php0php)php)php php php php php php php php/php/php Macphp Roman
php php php php php php php php php php php php php php php php php php php php)php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Unsupportedphp encodingphp:php platformIDphp:php php%dphp;php encodingIDphp:php php%dphp;php skippingphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$platformIDphp,php php$encodingIDphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php4php)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$subtableOffsetphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php ifphp php(php$subtableOffsetphp <php php0php)php php{php php php php php/php/php Sanityphp checkphp forphp php4php-bytephp unsignedphp onphp php3php2php-bitphp platform
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Offsetphp php0xphp%xphp outphp ofphp rangephp forphp platformIDphp:php php%dphp;php skippingphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subtableOffsetphp,php php$platformIDphp)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Foundphp subtablephp;php platformIDphp:php php%dphp;php encodingIDphp:php php%dphp;php offsetphp:php php0xphp%xphp php(php0xphp%xphp)php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$platformIDphp,php php$encodingIDphp,php php$baseOffsetphp php+php php$subtableOffsetphp,php php$subtableOffsetphp)php;

php php php php php php php php php php php php php$subtablesphp[php$platformIDphp]php[php$encodingIDphp]php[php]php php=php php$subtableOffsetphp;
php php php php php php php php php}

php php php php php php php php php/php*php Inphp preferredphp orderphp,php findphp aphp subtablephp tophp usephp.
php php php php php php php php php php*php/
php php php php php php php php php$offsetsphp php=php arrayphp(php)php;

php php php php php php php php php/php*php Unicodephp php2php.php0php orphp laterphp semantics
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$subtablesphp[php0php]php[php3php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$subtablesphp[php0php]php[php3php]php asphp php$offsetphp)php php{
php php php php php php php php php php php php php php php php php$offsetsphp[php]php php=php php$offsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Unicodephp defaultphp semantics
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$subtablesphp[php0php]php[php0php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$subtablesphp[php0php]php[php0php]php asphp php$offsetphp)php php{
php php php php php php php php php php php php php php php php php$offsetsphp[php]php php=php php$offsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Microsoftphp Unicode
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$subtablesphp[php3php]php[php1php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$subtablesphp[php3php]php[php1php]php asphp php$offsetphp)php php{
php php php php php php php php php php php php php php php php php$offsetsphp[php]php php=php php$offsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Macphp Romanphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$subtablesphp[php1php]php[php0php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$subtablesphp[php1php]php[php0php]php asphp php$offsetphp)php php{
php php php php php php php php php php php php php php php php php$offsetsphp[php]php php=php php$offsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$cmapTypephp php=php php-php1php;

php php php php php php php php foreachphp php(php$offsetsphp asphp php$offsetphp)php php{
php php php php php php php php php php php php php$cmapOffsetphp php=php php$baseOffsetphp php+php php$offsetphp;
php php php php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$cmapOffsetphp)php;
php php php php php php php php php php php php php$formatphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php$languagephp php=php php-php1php;
php php php php php php php php php php php php switchphp php(php$formatphp)php php{
php php php php php php php php php php php php php php php php casephp php0xphp0php:
php php php php php php php php php php php php php php php php php php php php php$cmapLengthphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$languagephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Typephp php0php cmapphp tablesphp mustphp bephp languagephp-independentphp;php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php languagephp:php php%dphp;php skippingphp'php,php php$languagephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php0xphp4php:php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php0xphp6php:
php php php php php php php php php php php php php php php php php php php php php$cmapLengthphp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>readUIntphp(php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$languagephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Warningphp:php cmapphp tablesphp mustphp bephp languagephp-independentphp php-php thisphp fontphp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php mayphp notphp workphp properlyphp;php languagephp:php php%dphp'php,php php$languagephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php0xphp2php:php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php0xphp8php:php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php0xaphp:php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php0xcphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Formatphp:php php0xphp%xphp currentlyphp unsupportedphp;php skippingphp'php,php php$formatphp)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php/php/php$thisphp-php>skipBytesphp(php2php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php$cmapLengthphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php$languagephp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php php php php php php php php php php/php/ifphp php(php$languagephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php php php php$thisphp-php>php_debugLogphp(php'Warningphp:php cmapphp tablesphp mustphp bephp languagephp-independentphp php-php thisphp fontphp'
php php php php php php php php php php php php php php php php php php php php php/php/php php php php php php php php php php php php php php php php php php php php php php.php php'php mayphp notphp workphp properlyphp;php languagephp:php php%dphp'php,php php$languagephp)php;
php php php php php php php php php php php php php php php php php php php php php/php/php}
php php php php php php php php php php php php php php php php php php php php php/php/breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Unknownphp subtablephp formatphp:php php0xphp%xphp;php skippingphp'php,php php$formatphp)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$cmapTypephp php=php php$formatphp;
php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$cmapTypephp php=php=php php-php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unablephp tophp findphp usablephp cmapphp tablephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CANTphp_FINDphp_GOODphp_CMAPphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Nowphp extractphp thephp subtablephp dataphp andphp createphp aphp Zendphp_Pdfphp_FontCmapphp objectphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Usingphp cmapphp typephp php%dphp;php offsetphp:php php0xphp%xphp;php lengthphp:php php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php$cmapTypephp,php php$cmapOffsetphp,php php$cmapLengthphp)php;
php php php php php php php php php$thisphp-php>moveToOffsetphp(php$cmapOffsetphp)php;
php php php php php php php php php$cmapDataphp php=php php$thisphp-php>readBytesphp(php$cmapLengthphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Cmapphp.phpphp'php;
php php php php php php php php php$thisphp-php>cmapphp php=php Zendphp_Pdfphp_Cmapphp:php:cmapWithTypeDataphp(php$cmapTypephp,php php$cmapDataphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readsphp thephp scalerphp typephp fromphp thephp headerphp ofphp thephp OpenTypephp fontphp filephp and
php php php php php php*php returnsphp itphp asphp anphp unsignedphp longphp integerphp.
php php php php php php*
php php php php php php*php Thephp scalerphp typephp definesphp thephp typephp ofphp fontphp:php OpenTypephp fontphp filesphp mayphp contain
php php php php php php*php TrueTypephp orphp PostScriptphp outlinesphp.php Throwsphp anphp exceptionphp ifphp thephp scalerphp type
php php php php php php*php isphp notphp recognizedphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_readScalerTypephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_scalerTypephp php!php=php php0php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_scalerTypephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>moveToOffsetphp(php0php)php;

php php php php php php php php php$thisphp-php>php_scalerTypephp php=php php$thisphp-php>readUIntphp(php4php)php;

php php php php php php php php switchphp php(php$thisphp-php>php_scalerTypephp)php php{
php php php php php php php php php php php php casephp php0xphp0php0php0php1php0php0php0php0php:php php php php php/php/php versionphp php1php.php0php php-php Windowsphp TrueTypephp signature
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Windowsphp TrueTypephp signaturephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php0xphp7php4php7php2php7php5php6php5php:php php php php php/php/php php'truephp'php php-php Macintoshphp TrueTypephp signature
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'Macintoshphp TrueTypephp signaturephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php0xphp4fphp5php4php5php4php4fphp:php php php php php/php/php php'OTTOphp'php php-php thephp CFFphp signature
php php php php php php php php php php php php php php php php php$thisphp-php>php_debugLogphp(php'PostScriptphp CFFphp signaturephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php0xphp7php4php7php9php7php0php3php1php:php php php php php/php/php php'typphp1php'
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unsupportedphp fontphp typephp:php PostScriptphp inphp sfntphp wrapperphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:WRONGphp_FONTphp_TYPEphp)php;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp anphp OpenTypephp fontphp filephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:WRONGphp_FONTphp_TYPEphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_scalerTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp aphp givenphp tablephp'sphp existencephp,php thenphp setsphp thephp filephp pointerphp tophp the
php php php php php php*php startphp ofphp thatphp tablephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_jumpToTablephp(php$tableNamephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_tableDirectoryphp[php$tableNamephp]php)php)php php{php php php php php/php/php dophp notphp allowphp NULLphp orphp zero
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Requiredphp tablephp php'php$tableNamephp'php notphp foundphp!php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:REQUIREDphp_TABLEphp_NOTphp_FOUNDphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php"Parsingphp php$tableNamephp tablephp.php.php.php"php)php;
php php php php php php php php php$thisphp-php>moveToOffsetphp(php$thisphp-php>php_tableDirectoryphp[php$tableNamephp]php[php'offsetphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp fixedphp php1php6php.php1php6php tablephp versionphp numberphp andphp checksphp forphp compatibilityphp.
php php php php php php*php Ifphp thephp versionphp isphp incompatiblephp,php throwsphp anphp exceptionphp.php Ifphp itphp isphp compatiblephp,
php php php php php php*php returnsphp thephp versionphp numberphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$minVersionphp Minimumphp compatiblephp versionphp numberphp.
php php php php php php*php php@paramphp floatphp php$maxVertionphp Maximumphp compatiblephp versionphp numberphp.
php php php php php php*php php@returnphp floatphp Tablephp versionphp numberphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_readTableVersionphp(php$minVersionphp,php php$maxVersionphp)
php php php php php{
php php php php php php php php php$tableVersionphp php=php php$thisphp-php>readFixedphp(php1php6php,php php1php6php)php;
php php php php php php php php ifphp php(php(php$tableVersionphp <php php$minVersionphp)php php|php|php php(php$tableVersionphp php>php php$maxVersionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unablephp tophp readphp versionphp php$tableVersionphp tablephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:DONTphp_UNDERSTANDphp_TABLEphp_VERSIONphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_debugLogphp(php'Versionphp php%php.php2fphp tablephp'php,php php$tableVersionphp)php;
php php php php php php php php returnphp php$tableVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp methodphp thatphp returnsphp ISOphp php6php3php9php twophp-letterphp languagephp codesphp fromphp the
php php php php php php*php TrueTypephp platformphp andphp languagephp IDphp.php Returnsphp NULLphp forphp languagesphp thatphp are
php php php php php php*php notphp supportedphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$platformID
php php php php php php*php php@paramphp integerphp php$encodingID
php php php php php php*php php@returnphp stringphp php|php null
php php php php php php*php/
php php php php protectedphp functionphp php_languageCodeForPlatformphp(php$platformIDphp,php php$languageIDphp)
php php php php php{
php php php php php php php php ifphp php(php$platformIDphp php=php=php php3php)php php{php php php php php/php/php Microsoftphp encodingphp.
php php php php php php php php php php php php php/php*php Thephp lowphp-orderphp bytesphp specifyphp thephp languagephp,php thephp highphp-orderphp bytes
php php php php php php php php php php php php php php*php specifyphp thephp dialectphp.php Wephp justphp carephp aboutphp thephp languagephp.php Forphp the
php php php php php php php php php php php php php php*php completephp listphp,php seephp:
php php php php php php php php php php php php php php*php php php httpphp:php/php/wwwphp.microsoftphp.comphp/globaldevphp/referencephp/lcidphp-allphp.mspx
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$languageIDphp php&php=php php0xffphp;
php php php php php php php php php php php php switchphp php(php$languageIDphp)php php{
php php php php php php php php php php php php php php php php casephp php0xphp0php9php:
php php php php php php php php php php php php php php php php php php php php returnphp php'enphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0cphp:
php php php php php php php php php php php php php php php php php php php php returnphp php'frphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0php7php:
php php php php php php php php php php php php php php php php php php php php returnphp php'dephp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1php0php:
php php php php php php php php php php php php php php php php php php php php returnphp php'itphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1php3php:
php php php php php php php php php php php php php php php php php php php php returnphp php'nlphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1dphp:
php php php php php php php php php php php php php php php php php php php php returnphp php'svphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0aphp:
php php php php php php php php php php php php php php php php php php php php returnphp php'esphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0php6php:
php php php php php php php php php php php php php php php php php php php php returnphp php'daphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1php6php:
php php php php php php php php php php php php php php php php php php php php returnphp php'ptphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1php4php:
php php php php php php php php php php php php php php php php php php php php returnphp php'nophp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0dphp:
php php php php php php php php php php php php php php php php php php php php returnphp php'hephp'php;
php php php php php php php php php php php php php php php php casephp php0xphp1php1php:
php php php php php php php php php php php php php php php php php php php php returnphp php'japhp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0php1php:
php php php php php php php php php php php php php php php php php php php php returnphp php'arphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0bphp:
php php php php php php php php php php php php php php php php php php php php returnphp php'fiphp'php;
php php php php php php php php php php php php php php php php casephp php0xphp0php8php:
php php php php php php php php php php php php php php php php php php php php returnphp php'elphp'php;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp ifphp php(php$platformIDphp php=php=php php1php)php php{php php php php php/php/php Macintoshphp encodingphp.
php php php php php php php php php php php php switchphp php(php$languageIDphp)php php{
php php php php php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php php php php returnphp php'enphp'php;
php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php returnphp php'frphp'php;
php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php returnphp php'dephp'php;
php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php returnphp php'itphp'php;
php php php php php php php php php php php php php php php php casephp php4php:
php php php php php php php php php php php php php php php php php php php php returnphp php'nlphp'php;
php php php php php php php php php php php php php php php php casephp php5php:
php php php php php php php php php php php php php php php php php php php php returnphp php'svphp'php;
php php php php php php php php php php php php php php php php casephp php6php:
php php php php php php php php php php php php php php php php php php php php returnphp php'esphp'php;
php php php php php php php php php php php php php php php php casephp php7php:
php php php php php php php php php php php php php php php php php php php php returnphp php'daphp'php;
php php php php php php php php php php php php php php php php casephp php8php:
php php php php php php php php php php php php php php php php php php php php returnphp php'ptphp'php;
php php php php php php php php php php php php php php php php casephp php9php:
php php php php php php php php php php php php php php php php php php php php returnphp php'nophp'php;
php php php php php php php php php php php php php php php php casephp php1php0php:
php php php php php php php php php php php php php php php php php php php php returnphp php'hephp'php;
php php php php php php php php php php php php php php php php casephp php1php1php:
php php php php php php php php php php php php php php php php php php php php returnphp php'japhp'php;
php php php php php php php php php php php php php php php php casephp php1php2php:
php php php php php php php php php php php php php php php php php php php php returnphp php'arphp'php;
php php php php php php php php php php php php php php php php casephp php1php3php:
php php php php php php php php php php php php php php php php php php php php returnphp php'fiphp'php;
php php php php php php php php php php php php php php php php casephp php1php4php:
php php php php php php php php php php php php php php php php php php php php returnphp php'elphp'php;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{php php php php php/php/php Unknownphp encodingphp.
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php}
