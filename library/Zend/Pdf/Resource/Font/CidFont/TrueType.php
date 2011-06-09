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
php php*php php@versionphp php php php php$Idphp:php TrueTypephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/

requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;

php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp_FontDescriptorphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp/FontDescriptorphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Fontphp_CidFontphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Fontphp/CidFontphp.phpphp'php;

php/php*php*
php php*php Typephp php2php CIDFontsphp implementation
php php*
php php*php Forphp Typephp php2php,php thephp CIDFontphp programphp isphp actuallyphp aphp TrueTypephp fontphp programphp,php whichphp has
php php*php nophp nativephp notionphp ofphp CIDsphp.php Inphp aphp TrueTypephp fontphp programphp,php glyphphp descriptionsphp are
php php*php identifiedphp byphp glyphphp indexphp valuesphp.php Glyphphp indicesphp arephp internalphp tophp thephp fontphp andphp arephp not
php php*php definedphp consistentlyphp fromphp onephp fontphp tophp anotherphp.php Insteadphp,php aphp TrueTypephp fontphp program
php php*php containsphp aphp php'cmapphp'php tablephp thatphp providesphp mappingsphp directlyphp fromphp characterphp codesphp to
php php*php glyphphp indicesphp forphp onephp orphp morephp predefinedphp encodingsphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Fontphp_CidFontphp_TrueTypephp extendsphp Zendphp_Pdfphp_Resourcephp_Fontphp_CidFont
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@todophp Joingphp thisphp classphp withphp Zendphp_Pdfphp_Resourcephp_Fontphp_Simplephp_Parsedphp_TrueType
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp_TrueTypephp php$fontParserphp Fontphp parser
php php php php php php*php php php objectphp containingphp parsedphp TrueTypephp filephp.
php php php php php php*php php@paramphp integerphp php$embeddingOptionsphp Optionsphp forphp fontphp embeddingphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_FileParserphp_Fontphp_OpenTypephp_TrueTypephp php$fontParserphp,php php$embeddingOptionsphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$fontParserphp,php php$embeddingOptionsphp)php;

php php php php php php php php php$thisphp-php>php_fontTypephp php=php Zendphp_Pdfphp_Fontphp:php:TYPEphp_CIDFONTphp_TYPEphp_php2php;

php php php php php php php php php$thisphp-php>php_resourcephp-php>Subtypephp php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'CIDFontTypephp2php'php)php;

php php php php php php php php php$fontDescriptorphp php=php Zendphp_Pdfphp_Resourcephp_Fontphp_FontDescriptorphp:php:factoryphp(php$thisphp,php php$fontParserphp,php php$embeddingOptionsphp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>FontDescriptorphp php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(php$fontDescriptorphp)php;

php php php php php php php php php/php*php Preparephp CIDToGIDMapphp php*php/
php php php php php php php php php/php/php Initializephp php1php2php8Kphp stringphp ofphp nullphp charactersphp php(php6php5php5php3php6php php2php bytephp integersphp)
php php php php php php php php php$cidToGidMapDataphp php=php strphp_repeatphp(php"php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php0php"php,php php8php1php9php2php)php;
php php php php php php php php php/php/php Fillphp thephp index
php php php php php php php php php$charGlyphsphp php=php php$thisphp-php>php_cmapphp-php>getCoveredCharactersGlyphsphp(php)php;
php php php php php php php php foreachphp php(php$charGlyphsphp asphp php$charCodephp php=php>php php$glyphphp)php php{
php php php php php php php php php php php php php$cidToGidMapDataphp[php$charCodephp*php2php php php php php]php php=php chrphp(php$glyphphp php>php>php php8php)php;
php php php php php php php php php php php php php$cidToGidMapDataphp[php$charCodephp*php2php php+php php1php]php php=php chrphp(php$glyphphp php&php php0xFFphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php Storephp CIDToGIDMapphp withinphp compressedphp streamphp object
php php php php php php php php php$cidToGidMapphp php=php php$thisphp-php>php_objectFactoryphp-php>newStreamObjectphp(php$cidToGidMapDataphp)php;
php php php php php php php php php$cidToGidMapphp-php>dictionaryphp-php>Filterphp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>CIDToGIDMapphp php=php php$cidToGidMapphp;
php php php php php}

php}
