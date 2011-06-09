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
php php*php php@versionphp php php php php$Idphp:php FontDescriptorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;

php/php*php*php Zendphp_Pdfphp_Fontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Fontphp.phpphp'php;


php/php*php*
php php*php FontDescriptorphp implementation
php php*
php php*php Aphp fontphp descriptorphp specifiesphp metricsphp andphp otherphp attributesphp ofphp aphp simplephp fontphp orphp a
php php*php CIDFontphp asphp aphp wholephp,php asphp distinctphp fromphp thephp metricsphp ofphp individualphp glyphsphp.php Thesephp font
php php*php metricsphp providephp informationphp thatphp enablesphp aphp viewerphp applicationphp tophp synthesizephp a
php php*php substitutephp fontphp orphp selectphp aphp similarphp fontphp whenphp thephp fontphp programphp isphp unavailablephp.php The
php php*php fontphp descriptorphp mayphp alsophp bephp usedphp tophp embedphp thephp fontphp programphp inphp thephp PDFphp filephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Fontphp_FontDescriptor
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Zendphp_Pdfphp_Resourcephp_Fontphp_FontDescriptorphp isphp notphp intendedphp tophp bephp instantiatedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php Thephp php$embeddingOptionsphp parameterphp allowsphp youphp tophp setphp certainphp flagsphp related
php php php php php php*php tophp fontphp embeddingphp.php Youphp mayphp combinephp optionsphp byphp ORphp-ingphp themphp togetherphp.php See
php php php php php php*php thephp EMBEDphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_Fontphp}php forphp thephp listphp of
php php php php php php*php availablephp optionsphp andphp theirphp descriptionsphp.
php php php php php php*
php php php php php php*php Notephp thatphp itphp isphp notphp requriedphp thatphp fontsphp bephp embeddedphp withinphp thephp PDFphp file
php php php php php php*php tophp usephp themphp.php Ifphp thephp recipientphp ofphp thephp PDFphp hasphp thephp fontphp installedphp onphp their
php php php php php php*php computerphp,php theyphp willphp seephp thephp correctphp fontsphp inphp thephp documentphp.php Ifphp theyphp donphp'tphp,
php php php php php php*php thephp PDFphp viewerphp willphp substitutephp orphp synthesizephp aphp replacementphp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Resourcephp_Fontphp php$fontphp Font
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php$fontParserphp Fontphp parserphp objectphp containingphp parsedphp TrueTypephp filephp.
php php php php php php*php php@paramphp integerphp php$embeddingOptionsphp Optionsphp forphp fontphp embeddingphp.
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Dictionary
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(Zendphp_Pdfphp_Resourcephp_Fontphp php$fontphp,php Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp php$fontParserphp,php php$embeddingOptionsphp)
php php php php php{
php php php php php php php php php/php*php Thephp fontphp descriptorphp objectphp containsphp thephp restphp ofphp thephp fontphp metricsphp and
php php php php php php php php php php*php thephp informationphp aboutphp thephp embeddedphp fontphp programphp php(ifphp appliciblephp)php.
php php php php php php php php php php*php/
php php php php php php php php php$fontDescriptorphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;

php php php php php php php php php$fontDescriptorphp-php>Typephp php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FontDescriptorphp'php)php;
php php php php php php php php php$fontDescriptorphp-php>FontNamephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$fontphp-php>getResourcephp(php)php-php>BaseFontphp-php>valuephp)php;

php php php php php php php php php/php*php Thephp fontphp flagsphp valuephp isphp aphp bitfieldphp thatphp describesphp thephp stylistic
php php php php php php php php php php*php attributesphp ofphp thephp fontphp.php Wephp willphp setphp asphp manyphp ofphp thephp bitsphp asphp canphp be
php php php php php php php php php php*php determinedphp fromphp thephp fontphp parserphp.
php php php php php php php php php php*php/
php php php php php php php php php$flagsphp php=php php0php;
php php php php php php php php ifphp php(php$fontParserphp-php>isMonospacedphp)php php{php php php php php/php/php bitphp php1php:php FixedPitch
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$fontParserphp-php>isSerifFontphp)php php{php php php php php/php/php bitphp php2php:php Serif
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php1php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php php$fontParserphp-php>isAdobeLatinSubsetphp)php php{php php php php php/php/php bitphp php3php:php Symbolic
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php2php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$fontParserphp-php>isScriptFontphp)php php{php php php php php/php/php bitphp php4php:php Script
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php3php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$fontParserphp-php>isAdobeLatinSubsetphp)php php{php php php php php/php/php bitphp php6php:php Nonsymbolic
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php5php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$fontParserphp-php>isItalicphp)php php{php php php php php/php/php bitphp php7php:php Italic
php php php php php php php php php php php php php$flagsphp php|php=php php1php <php<php php6php;
php php php php php php php php php}
php php php php php php php php php/php/php bitsphp php1php7php-php1php9php:php AllCapphp,php SmallCapphp,php ForceBoldphp;php notphp available
php php php php php php php php php$fontDescriptorphp-php>Flagsphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$flagsphp)php;

php php php php php php php php php$fontBBoxphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>xMinphp)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>yMinphp)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>xMaxphp)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>yMaxphp)php)php)php;
php php php php php php php php php$fontDescriptorphp-php>FontBBoxphp php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$fontBBoxphp)php;

php php php php php php php php php$fontDescriptorphp-php>ItalicAnglephp php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontParserphp-php>italicAnglephp)php;

php php php php php php php php php$fontDescriptorphp-php>Ascentphp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>ascentphp)php)php;
php php php php php php php php php$fontDescriptorphp-php>Descentphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontphp-php>toEmSpacephp(php$fontParserphp-php>descentphp)php)php;

php php php php php php php php php$fontDescriptorphp-php>CapHeightphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontParserphp-php>capitalHeightphp)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Thephp verticalphp stemphp widthphp isphp notphp yetphp extractedphp fromphp thephp OpenTypephp font
php php php php php php php php php php*php filephp.php Forphp nowphp,php recordphp zerophp whichphp isphp interpretedphp asphp php'unknownphp'php.
php php php php php php php php php php*php php@todophp Calculatephp valuephp forphp StemVphp.
php php php php php php php php php php*php/
php php php php php php php php php$fontDescriptorphp-php>StemVphp php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php0php)php;

php php php php php php php php php$fontDescriptorphp-php>MissingWidthphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$fontParserphp-php>glyphWidthsphp[php0php]php)php;

php php php php php php php php php/php*php Setphp upphp fontphp embeddingphp.php Thisphp isphp wherephp thephp actualphp fontphp programphp itself
php php php php php php php php php php*php isphp embeddedphp withinphp thephp PDFphp documentphp.
php php php php php php php php php php*
php php php php php php php php php php*php Notephp thatphp itphp isphp notphp requriedphp thatphp fontsphp bephp embeddedphp withinphp thephp PDF
php php php php php php php php php php*php documentphp tophp usephp themphp.php Ifphp thephp recipientphp ofphp thephp PDFphp hasphp thephp font
php php php php php php php php php php*php installedphp onphp theirphp computerphp,php theyphp willphp seephp thephp correctphp fontsphp inphp the
php php php php php php php php php php*php documentphp.php Ifphp theyphp donphp'tphp,php thephp PDFphp viewerphp willphp substitutephp orphp synthesize
php php php php php php php php php php*php aphp replacementphp.
php php php php php php php php php php*
php php php php php php php php php php*php Therephp arephp severalphp guidelinesphp forphp fontphp embeddingphp:
php php php php php php php php php php*
php php php php php php php php php php*php Firstphp,php thephp developerphp mightphp specificallyphp requestphp notphp tophp embedphp thephp fontphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php(php$embeddingOptionsphp php&php Zendphp_Pdfphp_Fontphp:php:EMBEDphp_DONTphp_EMBEDphp)php)php php{

php php php php php php php php php php php php php/php*php Secondphp,php thephp fontphp authorphp mayphp havephp setphp copyrightphp bitsphp thatphp prohibit
php php php php php php php php php php php php php php*php thephp fontphp programphp fromphp beingphp embeddedphp.php Yesphp thisphp isphp controversialphp,
php php php php php php php php php php php php php php*php butphp itphp'sphp thephp rulesphp:
php php php php php php php php php php php php php php*php php php httpphp:php/php/partnersphp.adobephp.comphp/publicphp/developerphp/enphp/acrobatphp/sdkphp/FontPoliciesphp.pdf
php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php*php Tophp keepphp thephp developerphp inphp thephp loopphp,php andphp tophp preventphp surprisingphp bug
php php php php php php php php php php php php php php*php reportsphp ofphp php"yourphp PDFphp doesnphp'tphp havephp thephp rightphp fontsphp,php"php throwphp an
php php php php php php php php php php php php php php*php exceptionphp ifphp thephp fontphp cannotphp bephp embeddedphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!php php$fontParserphp-php>isEmbeddablephp)php php{
php php php php php php php php php php php php php php php php php/php*php Thisphp exceptionphp mayphp bephp suppressedphp ifphp thephp developerphp decidesphp that
php php php php php php php php php php php php php php php php php php*php itphp'sphp notphp aphp bigphp dealphp thatphp thephp fontphp programphp canphp'tphp bephp embeddedphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php ifphp php(php!php(php$embeddingOptionsphp php&php Zendphp_Pdfphp_Fontphp:php:EMBEDphp_SUPPRESSphp_EMBEDphp_EXCEPTIONphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$messagephp php=php php'Thisphp fontphp cannotphp bephp embeddedphp inphp thephp PDFphp documentphp.php Ifphp youphp wouldphp likephp tophp usephp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'itphp anywayphp,php youphp mustphp passphp Zendphp_Pdfphp_Fontphp:php:EMBEDphp_SUPPRESSphp_EMBEDphp_EXCEPTIONphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'inphp thephp php$optionsphp parameterphp ofphp thephp fontphp constructorphp.php'php;
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php$messagephp,php Zendphp_Pdfphp_Exceptionphp:php:FONTphp_CANTphp_BEphp_EMBEDDEDphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php Otherwisephp,php thephp defaultphp behaviorphp isphp tophp embedphp allphp customphp fontsphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php/php*php Thisphp sectionphp willphp changephp soonphp tophp aphp streamphp objectphp data
php php php php php php php php php php php php php php php php php php*php providerphp modelphp sophp thatphp wephp donphp'tphp havephp tophp keepphp aphp copyphp ofphp the
php php php php php php php php php php php php php php php php php php*php entirephp fontphp inphp memoryphp.
php php php php php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php php php php php*php Wephp alsophp cannotphp buildphp fontphp subsettingphp untilphp thephp dataphp provider
php php php php php php php php php php php php php php php php php php*php modelphp isphp inphp placephp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$fontFilephp php=php php$fontParserphp-php>getDataSourcephp(php)php-php>readAllBytesphp(php)php;
php php php php php php php php php php php php php php php php php$fontFileObjectphp php=php php$fontphp-php>getFactoryphp(php)php-php>newStreamObjectphp(php$fontFilephp)php;
php php php php php php php php php php php php php php php php php$fontFileObjectphp-php>dictionaryphp-php>Lengthphp1php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(strlenphp(php$fontFilephp)php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php(php$embeddingOptionsphp php&php Zendphp_Pdfphp_Fontphp:php:EMBEDphp_DONTphp_COMPRESSphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php Compressphp thephp fontphp filephp usingphp Flatephp.php Thisphp generallyphp cutsphp file
php php php php php php php php php php php php php php php php php php php php php php*php sizesphp byphp aboutphp halfphp!
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php$fontFileObjectphp-php>dictionaryphp-php>Filterphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$fontParserphp instanceofphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp_Typephp1php php/php*php notphp implementedphp nowphp php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php$fontDescriptorphp-php>FontFilephp php php=php php$fontFileObjectphp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$fontParserphp instanceofphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp_TrueTypephp)php php{
php php php php php php php php php php php php php php php php php php php php php$fontDescriptorphp-php>FontFilephp2php php=php php$fontFileObjectphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$fontDescriptorphp-php>FontFilephp3php php=php php$fontFileObjectphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$fontDescriptorphp;
php php php php php}
php}
