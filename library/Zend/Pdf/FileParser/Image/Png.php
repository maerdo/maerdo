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
php php*php php@versionphp php php php php$Idphp:php Pngphp.phpphp php2php2php6php5php3php php2php0php1php0php-php0php7php-php2php2php php1php8php:php4php1php:php3php9Zphp mabephp php$
php php*php/

php/php*php*php php@seephp Zendphp_Pdfphp_FileParserphp_Imagephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserphp/Imagephp.phpphp'php;


php/php*php*
php php*php Abstractphp basephp classphp forphp Imagephp filephp parsersphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_FileParserphp_Imagephp_Pngphp extendsphp Zendphp_Pdfphp_FileParserphp_Image
php{
php php php php php protectedphp php$php_isPNGphp;
php php php php php protectedphp php$php_widthphp;
php php php php php protectedphp php$php_heightphp;
php php php php php protectedphp php$php_bitsphp;
php php php php php protectedphp php$php_colorphp;
php php php php php protectedphp php$php_compressionphp;
php php php php php protectedphp php$php_preFilterphp;
php php php php php protectedphp php$php_interlacingphp;

php php php php php protectedphp php$php_imageDataphp;
php php php php php protectedphp php$php_paletteDataphp;
php php php php php protectedphp php$php_transparencyDataphp;

php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/

php php php php php publicphp functionphp getWidthphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_widthphp;
php php php php php php}

php php php php php publicphp functionphp getHeightphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_widthphp;
php php php php php php}

php php php php php publicphp functionphp getBitDepthphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_bitsphp;
php php php php php php}

php php php php php publicphp functionphp getColorSpacephp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_colorphp;
php php php php php php}

php php php php php publicphp functionphp getCompressionStrategyphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_compressionphp;
php php php php php php}

php php php php php publicphp functionphp getPaethFilterphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_preFilterphp;
php php php php php php}

php php php php php publicphp functionphp getInterlacingModephp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_interlacingphp;
php php php php php php}

php php php php php publicphp functionphp getRawImageDataphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_imageDataphp;
php php php php php php}

php php php php php publicphp functionphp getRawPaletteDataphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_paletteDataphp;
php php php php php php}

php php php php php publicphp functionphp getRawTransparencyDataphp(php)php php{
php php php php php php php php php php ifphp(php!php$thisphp-php>php_isParsedphp)php php{
php php php php php php php php php php php php php php php php$thisphp-php>parsephp(php)php;
php php php php php php php php php php php}
php php php php php php php php php php returnphp php$thisphp-php>php_transparencyDataphp;
php php php php php php}

php php php/php*php Semiphp-Concretephp Classphp Implementationphp php*php/

php php php php php/php*php*
php php php php php php*php Verifiesphp thatphp thephp imagephp filephp isphp inphp thephp expectedphp formatphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp screenphp(php)
php php php php php{
php php php php php php php php php ifphp php(php$thisphp-php>php_isScreenedphp)php php{
php php php php php php php php php php php php php returnphp;
php php php php php php php php php php}
php php php php php php php php php returnphp php$thisphp-php>php_checkSignaturephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp andphp parsesphp thephp imagephp dataphp fromphp thephp filephp onphp diskphp.
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

php php php php php php php php php$thisphp-php>php_parseIHDRChunkphp(php)php;
php php php php php php php php php$thisphp-php>php_parseChunksphp(php)php;
php php php php php}


php php php php protectedphp functionphp php_parseSignaturephp(php)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php1php)php;php php/php/Skipphp thephp firstphp bytephp php(php%php)
php php php php php php php php php ifphp(php'PNGphp'php php!php=php php$thisphp-php>readBytesphp(php3php)php)php php{
php php php php php php php php php php php php php php php php$thisphp-php>php_isPNGphp php=php falsephp;
php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php$thisphp-php>php_isPNGphp php=php truephp;
php php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_checkSignaturephp(php)php php{
php php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_isPNGphp)php)php php{
php php php php php php php php php php php php php php php$thisphp-php>php_parseSignaturephp(php)php;
php php php php php php php php php php}
php php php php php php php php php returnphp php$thisphp-php>php_isPNGphp;
php php php php php}

php php php php protectedphp functionphp php_parseChunksphp(php)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php3php3php)php;php php/php/Variablephp chunksphp startphp atphp thephp endphp ofphp IHDR

php php php php php php php php php php/php/Startphp processingphp chunksphp.php Ifphp therephp arephp nophp morephp bytesphp tophp readphp parsingphp isphp completephp.
php php php php php php php php php php$sizephp php=php php$thisphp-php>getSizephp(php)php;
php php php php php php php php php whilephp(php$sizephp php-php php$thisphp-php>getOffsetphp(php)php php>php=php php8php)php php{
php php php php php php php php php php php php php php php$chunkLengthphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php php php php php ifphp(php$chunkLengthphp <php php0php php|php|php php(php$chunkLengthphp php+php php$thisphp-php>getOffsetphp(php)php php+php php4php)php php>php php$sizephp)php php{
php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"PNGphp Corruptphp:php Invalidphp Chunkphp Sizephp Inphp Filephp.php"php)php;
php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php$chunkTypephp php=php php$thisphp-php>readBytesphp(php4php)php;
php php php php php php php php php php php php php php php$offsetphp php=php php$thisphp-php>getOffsetphp(php)php;

php php php php php php php php php php php php php php php/php/Ifphp wephp knowphp howphp tophp processphp thephp chunkphp,php dophp itphp herephp,php elsephp ignorephp thephp chunkphp andphp movephp onphp tophp thephp next
php php php php php php php php php php php php php php switchphp(php$chunkTypephp)php php{
php php php php php php php php php php php php php php php php php php php casephp php'IDATphp'php:php php/php/php Thisphp chunkphp mayphp appearphp morephp thanphp oncephp.php Itphp containsphp thephp actualphp imagephp dataphp.
php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_parseIDATChunkphp(php$offsetphp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php casephp php'PLTEphp'php:php php/php/php Thisphp chunkphp containsphp thephp imagephp palettephp.
php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_parsePLTEChunkphp(php$offsetphp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php casephp php'tRNSphp'php:php php/php/php Thisphp chunkphp containsphp nonphp-alphaphp channelphp transparencyphp data
php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_parseTRNSChunkphp(php$offsetphp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php casephp php'IENDphp'php:
php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;php php/php/Endphp thephp loopphp too

php php php php php php php php php php php php php php php php php php php php/php/php@TODOphp Implementphp thephp restphp ofphp thephp PNGphp chunksphp.php php(Therephp arephp manyphp notphp implementedphp herephp)
php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php ifphp(php$offsetphp php+php php$chunkLengthphp php+php php4php <php php$sizephp)php php{
php php php php php php php php php php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$offsetphp php+php php$chunkLengthphp php+php php4php)php;php php/php/Skipphp pastphp thephp dataphp finalizerphp.php php(Donphp'tphp relyphp onphp thephp parsephp tophp leavephp thephp offsetsphp correctphp)
php php php php php php php php php php php php php php php}
php php php php php php php php php php}
php php php php php php php php php ifphp(emptyphp(php$thisphp-php>php_imageDataphp)php)php php{
php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp php(php php"Thisphp PNGphp isphp corruptphp.php Allphp pngphp mustphp containphp IDATphp chunksphp.php"php php)php;
php php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_parseIHDRChunkphp(php)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php1php2php)php;php php/php/IHDRphp mustphp alwaysphp startphp atphp offsetphp php1php2php andphp runphp forphp php1php7php bytes
php php php php php php php php php ifphp(php!php$thisphp-php>readBytesphp(php4php)php php=php=php php'IHDRphp'php)php php{
php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Thisphp PNGphp isphp corruptphp.php Thephp firstphp chunkphp inphp aphp PNGphp filephp mustphp bephp IHDRphp.php"php php)php;
php php php php php php php php php php}
php php php php php php php php php php$thisphp-php>php_widthphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php$thisphp-php>php_heightphp php=php php$thisphp-php>readUIntphp(php4php)php;
php php php php php php php php php php$thisphp-php>php_bitsphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php$thisphp-php>php_colorphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php$thisphp-php>php_compressionphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php$thisphp-php>php_preFilterphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php$thisphp-php>php_interlacingphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php ifphp(php$thisphp-php>php_interlacingphp php!php=php Zendphp_Pdfphp_Imagephp:php:PNGphp_INTERLACINGphp_DISABLEDphp)php php{
php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Onlyphp nonphp-interlacedphp imagesphp arephp currentlyphp supportedphp.php"php php)php;
php php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_parseIDATChunkphp(php$chunkOffsetphp,php php$chunkLengthphp)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$chunkOffsetphp)php;
php php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_imageDataphp)php)php php{
php php php php php php php php php php php php php php php$thisphp-php>php_imageDataphp php=php php$thisphp-php>readBytesphp(php$chunkLengthphp)php;
php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php$thisphp-php>php_imageDataphp php.php=php php$thisphp-php>readBytesphp(php$chunkLengthphp)php;
php php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_parsePLTEChunkphp(php$chunkOffsetphp,php php$chunkLengthphp)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$chunkOffsetphp)php;
php php php php php php php php php php$thisphp-php>php_paletteDataphp php=php php$thisphp-php>readBytesphp(php$chunkLengthphp)php;
php php php php php}

php php php php protectedphp functionphp php_parseTRNSChunkphp(php$chunkOffsetphp,php php$chunkLengthphp)php php{
php php php php php php php php php php$thisphp-php>moveToOffsetphp(php$chunkOffsetphp)php;

php php php php php php php php php php/php/Processingphp ofphp tRNSphp dataphp variesphp dependendingphp onphp thephp colorphp depth

php php php php php php php php php switchphp(php$thisphp-php>php_colorphp)php php{
php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Imagephp:php:PNGphp_CHANNELphp_GRAYphp:
php php php php php php php php php php php php php php php php php php php$baseColorphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transparencyDataphp php=php arrayphp(php$baseColorphp,php php$baseColorphp)php;
php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Imagephp:php:PNGphp_CHANNELphp_RGBphp:

php php php php php php php php php php php php php php php php php php php/php/php@TODOphp Fixphp thisphp hackphp.
php php php php php php php php php php php php php php php php php php php/php/Thisphp parserphp cheatsphp andphp onlyphp usesphp thephp lsbphp'sphp php(andphp onlyphp worksphp withphp <php php1php6php bitphp depthphp imagesphp)

php php php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php php php php php php Fromphp thephp standardphp:

php php php php php php php php php php php php php php php php php php php php php php php Forphp colorphp typephp php2php php(truecolorphp)php,php thephp tRNSphp chunkphp containsphp aphp singlephp RGBphp colorphp valuephp,php storedphp inphp thephp formatphp:

php php php php php php php php php php php php php php php php php php php php php php php Redphp:php php php php2php bytesphp,php rangephp php0php php.php.php php(php2php^bitdepthphp)php-php1
php php php php php php php php php php php php php php php php php php php php php php php Greenphp:php php2php bytesphp,php rangephp php0php php.php.php php(php2php^bitdepthphp)php-php1
php php php php php php php php php php php php php php php php php php php php php php php Bluephp:php php php2php bytesphp,php rangephp php0php php.php.php php(php2php^bitdepthphp)php-php1

php php php php php php php php php php php php php php php php php php php php php php php php(Ifphp thephp imagephp bitphp depthphp isphp lessphp thanphp php1php6php,php thephp leastphp significantphp bitsphp arephp usedphp andphp thephp othersphp arephp php0php.php)
php php php php php php php php php php php php php php php php php php php php php php php Pixelsphp ofphp thephp specifiedphp colorphp valuephp arephp tophp bephp treatedphp asphp transparentphp php(equivalentphp tophp alphaphp valuephp php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php allphp otherphp pixelsphp arephp tophp bephp treatedphp asphp fullyphp opaquephp php(alphaphp valuephp php2bitdepthphp-php1php)php.

php php php php php php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php php php php php php php php$redphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php1php)php;
php php php php php php php php php php php php php php php php php php php$greenphp php=php php$thisphp-php>readIntphp(php1php)php;
php php php php php php php php php php php php php php php php php php php$thisphp-php>skipBytesphp(php1php)php;
php php php php php php php php php php php php php php php php php php php$bluephp php=php php$thisphp-php>readIntphp(php1php)php;

php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transparencyDataphp php=php arrayphp(php$redphp,php php$redphp,php php$greenphp,php php$greenphp,php php$bluephp,php php$bluephp)php;

php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Imagephp:php:PNGphp_CHANNELphp_INDEXEDphp:

php php php php php php php php php php php php php php php php php php php/php/php@TODOphp Fixphp thisphp hackphp.
php php php php php php php php php php php php php php php php php php php/php/Thisphp parserphp cheatsphp toophp.php Itphp onlyphp masksphp thephp firstphp colorphp inphp thephp palettephp.

php php php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php php php php php php Fromphp thephp standardphp:

php php php php php php php php php php php php php php php php php php php php php php php Forphp colorphp typephp php3php php(indexedphp colorphp)php,php thephp tRNSphp chunkphp containsphp aphp seriesphp ofphp onephp-bytephp alphaphp valuesphp,php correspondingphp tophp entriesphp inphp thephp PLTEphp chunkphp:

php php php php php php php php php php php php php php php php php php php php php php php php php php Alphaphp forphp palettephp indexphp php0php:php php php1php byte
php php php php php php php php php php php php php php php php php php php php php php php php php php Alphaphp forphp palettephp indexphp php1php:php php php1php byte
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php.php.etcphp.php.php.

php php php php php php php php php php php php php php php php php php php php php php php Eachphp entryphp indicatesphp thatphp pixelsphp ofphp thephp correspondingphp palettephp indexphp mustphp bephp treatedphp asphp havingphp thephp specifiedphp alphaphp valuephp.
php php php php php php php php php php php php php php php php php php php php php php php Alphaphp valuesphp havephp thephp samephp interpretationphp asphp inphp anphp php8php-bitphp fullphp alphaphp channelphp:php php0php isphp fullyphp transparentphp,php php2php5php5php isphp fullyphp opaquephp,
php php php php php php php php php php php php php php php php php php php php php php php regardlessphp ofphp imagephp bitphp depthphp.php Thephp tRNSphp chunkphp mustphp notphp containphp morephp alphaphp valuesphp thanphp therephp arephp palettephp entriesphp,
php php php php php php php php php php php php php php php php php php php php php php php butphp tRNSphp canphp containphp fewerphp valuesphp thanphp therephp arephp palettephp entriesphp.php Inphp thisphp casephp,php thephp alphaphp valuephp forphp allphp remainingphp palette
php php php php php php php php php php php php php php php php php php php php php php php entriesphp isphp assumedphp tophp bephp php2php5php5php.php Inphp thephp commonphp casephp inphp whichphp onlyphp palettephp indexphp php0php needphp bephp madephp transparentphp,php onlyphp aphp onephp-byte
php php php php php php php php php php php php php php php php php php php php php php php tRNSphp chunkphp isphp neededphp.

php php php php php php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php php php php php php php php$tmpDataphp php=php php$thisphp-php>readBytesphp(php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php ifphp(php(php$trnsIdxphp php=php strposphp(php$tmpDataphp,php php"php\php0php"php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transparencyDataphp php=php arrayphp(php$trnsIdxphp,php php$trnsIdxphp)php;
php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Imagephp:php:PNGphp_CHANNELphp_GRAYphp_ALPHAphp:
php php php php php php php php php php php php php php php php php php php/php/Fallphp throughphp tophp thephp nextphp case
php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Imagephp:php:PNGphp_CHANNELphp_RGBphp_ALPHAphp:
php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"tRNSphp chunkphp illegalphp forphp Alphaphp Channelphp Imagesphp"php php)php;
php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php}
php php php php php}
php}
