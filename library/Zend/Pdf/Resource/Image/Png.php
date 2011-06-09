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
php php*php php@versionphp php php php php$Idphp:php Pngphp.phpphp php2php3php3php9php5php php2php0php1php0php-php1php1php-php1php9php php1php5php:php3php0php:php4php7Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp/Binaryphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Imagephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Imagephp.phpphp'php;

php/php*php*
php php*php PNGphp image
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp extendsphp Zendphp_Pdfphp_Resourcephp_Image
php{
php php php php constphp PNGphp_COMPRESSIONphp_DEFAULTphp_STRATEGYphp php=php php0php;
php php php php constphp PNGphp_COMPRESSIONphp_FILTEREDphp php=php php1php;
php php php php constphp PNGphp_COMPRESSIONphp_HUFFMANphp_ONLYphp php=php php2php;
php php php php constphp PNGphp_COMPRESSIONphp_RLEphp php=php php3php;

php php php php constphp PNGphp_FILTERphp_NONEphp php=php php0php;
php php php php constphp PNGphp_FILTERphp_SUBphp php=php php1php;
php php php php constphp PNGphp_FILTERphp_UPphp php=php php2php;
php php php php constphp PNGphp_FILTERphp_AVERAGEphp php=php php3php;
php php php php constphp PNGphp_FILTERphp_PAETHphp php=php php4php;

php php php php constphp PNGphp_INTERLACINGphp_DISABLEDphp php=php php0php;
php php php php constphp PNGphp_INTERLACINGphp_ENABLEDphp php=php php1php;

php php php php constphp PNGphp_CHANNELphp_GRAYphp php=php php0php;
php php php php constphp PNGphp_CHANNELphp_RGBphp php=php php2php;
php php php php constphp PNGphp_CHANNELphp_INDEXEDphp php=php php3php;
php php php php constphp PNGphp_CHANNELphp_GRAYphp_ALPHAphp php=php php4php;
php php php php constphp PNGphp_CHANNELphp_RGBphp_ALPHAphp php=php php6php;

php php php php protectedphp php$php_widthphp;
php php php php protectedphp php$php_heightphp;
php php php php protectedphp php$php_imagePropertiesphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageFileName
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php@todophp Addphp compressionphp conversionsphp tophp supportphp compressionphp strategysphp otherphp thanphp PNGphp_COMPRESSIONphp_DEFAULTphp_STRATEGYphp.
php php php php php php*php php@todophp Addphp prephp-compressionphp filteringphp.
php php php php php php*php php@todophp Addphp interlacedphp imagephp handlingphp.
php php php php php php*php php@todophp Addphp supportphp forphp php1php6php-bitphp imagesphp.php Requiresphp PDFphp versionphp bumpphp tophp php1php.php5php atphp leastphp.
php php php php php php*php php@todophp Addphp processingphp forphp allphp PNGphp chunksphp definedphp inphp thephp specphp.php gAMAphp etcphp.
php php php php php php*php php@todophp Fixphp tRNSphp chunkphp supportphp forphp Indexedphp Imagesphp tophp aphp SMaskphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$imageFileNamephp)
php php php php php{
php php php php php php php php ifphp php(php(php$imageFilephp php=php php@fopenphp(php$imageFileNamephp,php php'rbphp'php)php)php php=php=php=php falsephp php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Canphp notphp openphp php'php$imageFileNamephp'php filephp forphp readingphp.php"php php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php)php;

php php php php php php php php php/php/Checkphp ifphp thephp filephp isphp aphp PNG
php php php php php php php php fseekphp(php$imageFilephp,php php1php,php SEEKphp_CURphp)php;php php/php/Firstphp signaturephp bytephp php(php%php)
php php php php php php php php ifphp php(php'PNGphp'php php!php=php freadphp(php$imageFilephp,php php3php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Imagephp isphp notphp aphp PNGphp'php)php;
php php php php php php php php php}
php php php php php php php php fseekphp(php$imageFilephp,php php1php2php,php SEEKphp_CURphp)php;php php/php/Signaturephp bytesphp php(Includesphp thephp IHDRphp chunkphp)php IHDRphp processedphp linerarlyphp becausephp itphp doesntphp containphp aphp variablephp chunkphp length
php php php php php php php php php$wtmpphp php=php unpackphp(php'Niphp'php,freadphp(php$imageFilephp,php php4php)php)php;php php/php/Unpackphp aphp php4php-Bytephp Long
php php php php php php php php php$widthphp php=php php$wtmpphp[php'iphp'php]php;
php php php php php php php php php$htmpphp php=php unpackphp(php'Niphp'php,freadphp(php$imageFilephp,php php4php)php)php;
php php php php php php php php php$heightphp php=php php$htmpphp[php'iphp'php]php;
php php php php php php php php php$bitsphp php=php ordphp(freadphp(php$imageFilephp,php php1php)php)php;php php/php/Higherphp thanphp php8php bitphp depthsphp arephp onlyphp supportedphp inphp laterphp versionsphp ofphp PDFphp.
php php php php php php php php php$colorphp php=php ordphp(freadphp(php$imageFilephp,php php1php)php)php;

php php php php php php php php php$compressionphp php=php ordphp(freadphp(php$imageFilephp,php php1php)php)php;
php php php php php php php php php$prefilterphp php=php ordphp(freadphp(php$imageFilephp,php1php)php)php;

php php php php php php php php ifphp php(php(php$interlacingphp php=php ordphp(freadphp(php$imageFilephp,php1php)php)php)php php!php=php Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_INTERLACINGphp_DISABLEDphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Onlyphp nonphp-interlacedphp imagesphp arephp currentlyphp supportedphp.php"php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_widthphp php=php php$widthphp;
php php php php php php php php php$thisphp-php>php_heightphp php=php php$heightphp;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'bitDepthphp'php]php php=php php$bitsphp;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'pngColorTypephp'php]php php=php php$colorphp;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'pngFilterTypephp'php]php php=php php$prefilterphp;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'pngCompressionTypephp'php]php php=php php$compressionphp;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'pngInterlacingTypephp'php]php php=php php$interlacingphp;

php php php php php php php php fseekphp(php$imageFilephp,php php4php,php SEEKphp_CURphp)php;php php/php/php4php Bytephp Endingphp Sequence
php php php php php php php php php$imageDataphp php=php php'php'php;

php php php php php php php php php/php*
php php php php php php php php php php*php Thephp followingphp loopphp processesphp PNGphp chunksphp.php php4php Bytephp Longsphp arephp packedphp firstphp givephp thephp chunkphp length
php php php php php php php php php php*php followedphp byphp thephp chunkphp signaturephp,php aphp fourphp bytephp codephp.php IDATphp andphp IENDphp arephp manditoryphp inphp anyphp PNGphp.
php php php php php php php php php php*php/
php php php php php php php php whilephp php(php!feofphp(php$imageFilephp)php)php php{
php php php php php php php php php php php php php$chunkLengthBytesphp php=php freadphp(php$imageFilephp,php php4php)php;
php php php php php php php php php php php php ifphp php(php$chunkLengthBytesphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Errorphp ocuuredphp whilephp imagephp filephp readingphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$chunkLengthtmpphp php=php unpackphp(php'Niphp'php,php php$chunkLengthBytesphp)php;
php php php php php php php php php php php php php$chunkLengthphp php php php php=php php$chunkLengthtmpphp[php'iphp'php]php;
php php php php php php php php php php php php php$chunkTypephp php php php php php php=php freadphp(php$imageFilephp,php php4php)php;
php php php php php php php php php php php php switchphp(php$chunkTypephp)php php{
php php php php php php php php php php php php php php php php casephp php'IDATphp'php:php php/php/Imagephp Data
php php php php php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php php php php php*php Readsphp thephp actualphp imagephp dataphp fromphp thephp PNGphp filephp.php Sincephp wephp knowphp atphp thisphp pointphp thatphp thephp compression
php php php php php php php php php php php php php php php php php php php php php php*php strategyphp isphp thephp defaultphp strategyphp,php wephp alsophp knowphp thatphp thisphp dataphp isphp Zipphp compressedphp.php Wephp willphp eitherphp copy
php php php php php php php php php php php php php php php php php php php php php php*php thephp dataphp directlyphp tophp thephp PDFphp andphp providephp thephp correctphp FlateDecodephp predictorphp,php orphp decompressphp thephp data
php php php php php php php php php php php php php php php php php php php php php php*php decodephp thephp filtersphp andphp outputphp thephp dataphp asphp aphp rawphp pixelphp mapphp.
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php$imageDataphp php.php=php freadphp(php$imageFilephp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php fseekphp(php$imageFilephp,php php4php,php SEEKphp_CURphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'PLTEphp'php:php php/php/Palette
php php php php php php php php php php php php php php php php php php php php php$paletteDataphp php=php freadphp(php$imageFilephp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php fseekphp(php$imageFilephp,php php4php,php SEEKphp_CURphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'tRNSphp'php:php php/php/Basicphp php(nonphp-alphaphp channelphp)php transparencyphp.
php php php php php php php php php php php php php php php php php php php php php$trnsDataphp php=php freadphp(php$imageFilephp,php php$chunkLengthphp)php;
php php php php php php php php php php php php php php php php php php php php switchphp php(php$colorphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_GRAYphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$baseColorphp php=php ordphp(substrphp(php$trnsDataphp,php php1php,php php1php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$transparencyDataphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$baseColorphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$baseColorphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$redphp php=php ordphp(substrphp(php$trnsDataphp,php1php,php1php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$greenphp php=php ordphp(substrphp(php$trnsDataphp,php3php,php1php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$bluephp php=php ordphp(substrphp(php$trnsDataphp,php5php,php1php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$transparencyDataphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$redphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$redphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$greenphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$greenphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bluephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bluephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_INDEXEDphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/Findphp thephp firstphp transparentphp colorphp inphp thephp indexphp,php wephp willphp maskphp thatphp.php php(Thisphp isphp aphp bitphp ofphp aphp hackphp.php Thisphp shouldphp bephp aphp SMaskphp andphp maskphp allphp entriesphp valuesphp)php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php(php$trnsIdxphp php=php strposphp(php$trnsDataphp,php php"php\php0php"php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$transparencyDataphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$trnsIdxphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$trnsIdxphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_GRAYphp_ALPHAphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp throughphp tophp thephp nextphp case

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp_ALPHAphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"tRNSphp chunkphp illegalphp forphp Alphaphp Channelphp Imagesphp"php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php fseekphp(php$imageFilephp,php php4php,php SEEKphp_CURphp)php;php php/php/php4php Bytephp Endingphp Sequence
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'IENDphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp php2php;php php/php/Endphp thephp loopphp too

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php fseekphp(php$imageFilephp,php php$chunkLengthphp php+php php4php,php SEEKphp_CURphp)php;php php/php/Skipphp thephp section
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php fclosephp(php$imageFilephp)php;

php php php php php php php php php$compressedphp php=php truephp;
php php php php php php php php php$imageDataTmpphp php=php php'php'php;
php php php php php php php php php$smaskDataphp php=php php'php'php;
php php php php php php php php switchphp php(php$colorphp)php php{
php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp:
php php php php php php php php php php php php php php php php php$colorSpacephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceRGBphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_GRAYphp:
php php php php php php php php php php php php php php php php php$colorSpacephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceGrayphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_INDEXEDphp:
php php php php php php php php php php php php php php php php ifphp(emptyphp(php$paletteDataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"PNGphp Corruptionphp:php Nophp palettephp dataphp readphp forphp indexedphp typephp PNGphp.php"php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$colorSpacephp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php php php php php php php php php php$colorSpacephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Indexedphp'php)php;
php php php php php php php php php php php php php php php php php$colorSpacephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceRGBphp'php)php;
php php php php php php php php php php php php php php php php php$colorSpacephp-php>itemsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php(strlenphp(php$paletteDataphp)php/php3php-php1php)php)php;
php php php php php php php php php php php php php php php php php$paletteObjectphp php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(newphp Zendphp_Pdfphp_Elementphp_Stringphp_Binaryphp(php$paletteDataphp)php)php;
php php php php php php php php php php php php php php php php php$colorSpacephp-php>itemsphp[php]php php=php php$paletteObjectphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_GRAYphp_ALPHAphp:
php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php*php Tophp decodephp PNGphp'sphp withphp alphaphp dataphp wephp mustphp createphp twophp imagesphp fromphp onephp.php Onephp imagephp willphp containphp thephp Grayphp data
php php php php php php php php php php php php php php php php php php*php thephp otherphp willphp containphp thephp Grayphp transparencyphp overlayphp dataphp.php Thephp formerphp willphp becomephp thephp objectphp dataphp andphp thephp latter
php php php php php php php php php php php php php php php php php php*php willphp becomephp thephp Shadowphp Maskphp php(SMaskphp)php.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php ifphp(php$bitsphp php>php php8php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Alphaphp PNGsphp withphp bitphp depthphp php>php php8php arephp notphp yetphp supportedphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$colorSpacephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceGrayphp'php)php;

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp.phpphp'php;
php php php php php php php php php php php php php php php php php$decodingObjFactoryphp php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp php=php php$decodingObjFactoryphp-php>newStreamObjectphp(php$imageDataphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>Filterphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Predictorphp php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php1php5php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Columnsphp php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Colorsphp php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php2php)php;php php php php/php/GreyAlpha
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>BitsPerComponentphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bitsphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>skipFiltersphp(php)php;

php php php php php php php php php php php php php php php php php$pngDataRawDecodedphp php=php php$decodingStreamphp-php>valuephp;

php php php php php php php php php php php php php php php php php/php/Iteratephp everyphp pixelphp andphp copyphp outphp grayphp dataphp andphp alphaphp channelphp php(thisphp willphp bephp slowphp)
php php php php php php php php php php php php php php php php forphp(php$pixelphp php=php php0php,php php$pixelcountphp php=php php(php$widthphp php*php php$heightphp)php;php php$pixelphp <php php$pixelcountphp;php php$pixelphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$imageDataTmpphp php.php=php php$pngDataRawDecodedphp[php(php$pixelphp*php2php)php]php;
php php php php php php php php php php php php php php php php php php php php php$smaskDataphp php.php=php php$pngDataRawDecodedphp[php(php$pixelphp*php2php)php+php1php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$compressedphp php=php falsephp;
php php php php php php php php php php php php php php php php php$imageDataphp php php=php php$imageDataTmpphp;php php/php/Overwritephp imagephp dataphp withphp thephp grayphp channelphp withoutphp alpha
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp_ALPHAphp:
php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php*php Tophp decodephp PNGphp'sphp withphp alphaphp dataphp wephp mustphp createphp twophp imagesphp fromphp onephp.php Onephp imagephp willphp containphp thephp RGBphp data
php php php php php php php php php php php php php php php php php php*php thephp otherphp willphp containphp thephp Grayphp transparencyphp overlayphp dataphp.php Thephp formerphp willphp becomephp thephp objectphp dataphp andphp thephp latter
php php php php php php php php php php php php php php php php php php*php willphp becomephp thephp Shadowphp Maskphp php(SMaskphp)php.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php ifphp(php$bitsphp php>php php8php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Alphaphp PNGsphp withphp bitphp depthphp php>php php8php arephp notphp yetphp supportedphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$colorSpacephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceRGBphp'php)php;

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp.phpphp'php;
php php php php php php php php php php php php php php php php php$decodingObjFactoryphp php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp php=php php$decodingObjFactoryphp-php>newStreamObjectphp(php$imageDataphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>Filterphp php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Predictorphp php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php1php5php)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Columnsphp php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>Colorsphp php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php4php)php;php php php php/php/RGBA
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>dictionaryphp-php>DecodeParmsphp-php>BitsPerComponentphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bitsphp)php;
php php php php php php php php php php php php php php php php php$decodingStreamphp-php>skipFiltersphp(php)php;

php php php php php php php php php php php php php php php php php$pngDataRawDecodedphp php=php php$decodingStreamphp-php>valuephp;

php php php php php php php php php php php php php php php php php/php/Iteratephp everyphp pixelphp andphp copyphp outphp rgbphp dataphp andphp alphaphp channelphp php(thisphp willphp bephp slowphp)
php php php php php php php php php php php php php php php php forphp(php$pixelphp php=php php0php,php php$pixelcountphp php=php php(php$widthphp php*php php$heightphp)php;php php$pixelphp <php php$pixelcountphp;php php$pixelphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$imageDataTmpphp php.php=php php$pngDataRawDecodedphp[php(php$pixelphp*php4php)php+php0php]php php.php php$pngDataRawDecodedphp[php(php$pixelphp*php4php)php+php1php]php php.php php$pngDataRawDecodedphp[php(php$pixelphp*php4php)php+php2php]php;
php php php php php php php php php php php php php php php php php php php php php$smaskDataphp php.php=php php$pngDataRawDecodedphp[php(php$pixelphp*php4php)php+php3php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$compressedphp php=php falsephp;
php php php php php php php php php php php php php php php php php$imageDataphp php php=php php$imageDataTmpphp;php php/php/Overwritephp imagephp dataphp withphp thephp RGBphp channelphp withoutphp alpha
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"PNGphp Corruptionphp:php Invalidphp colorphp spacephp.php"php php)php;
php php php php php php php php php}

php php php php php php php php ifphp(emptyphp(php$imageDataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Corruptphp PNGphp Imagephp.php Mandatoryphp IDATphp chunkphp notphp foundphp.php"php php)php;
php php php php php php php php php}

php php php php php php php php php$imageDictionaryphp php=php php$thisphp-php>php_resourcephp-php>dictionaryphp;
php php php php php php php php ifphp(php!emptyphp(php$smaskDataphp)php)php php{
php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php*php Includesphp thephp Alphaphp transparencyphp dataphp asphp aphp Grayphp Imagephp,php thenphp assignsphp thephp imagephp asphp thephp Shadowphp Maskphp forphp thephp mainphp imagephp dataphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$smaskStreamphp php=php php$thisphp-php>php_objectFactoryphp-php>newStreamObjectphp(php$smaskDataphp)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>Typephp php php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'XObjectphp'php)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>Subtypephp php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Imagephp'php)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>Widthphp php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>Heightphp php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$heightphp)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>ColorSpacephp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DeviceGrayphp'php)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>BitsPerComponentphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bitsphp)php;
php php php php php php php php php php php php php$imageDictionaryphp-php>SMaskphp php=php php$smaskStreamphp;

php php php php php php php php php php php php php/php/php Encodephp streamphp withphp FlateDecodephp filter
php php php php php php php php php php php php php$smaskStreamDecodeParmsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$smaskStreamDecodeParmsphp[php'Predictorphp'php]php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php1php5php)php;
php php php php php php php php php php php php php$smaskStreamDecodeParmsphp[php'Columnsphp'php]php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php php php php php$smaskStreamDecodeParmsphp[php'Colorsphp'php]php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php1php)php;
php php php php php php php php php php php php php$smaskStreamDecodeParmsphp[php'BitsPerComponentphp'php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php8php)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>DecodeParmsphp php php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php$smaskStreamDecodeParmsphp)php;
php php php php php php php php php php php php php$smaskStreamphp-php>dictionaryphp-php>Filterphp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php!emptyphp(php$transparencyDataphp)php)php php{
php php php php php php php php php php php php php/php/Thisphp isphp experimentalphp andphp notphp properlyphp testedphp.
php php php php php php php php php php php php php$imageDictionaryphp-php>Maskphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$transparencyDataphp)php;
php php php php php php php php php}

php php php php php php php php php$imageDictionaryphp-php>Widthphp php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php$imageDictionaryphp-php>Heightphp php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$heightphp)php;
php php php php php php php php php$imageDictionaryphp-php>ColorSpacephp php php php php php php php=php php$colorSpacephp;
php php php php php php php php php$imageDictionaryphp-php>BitsPerComponentphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bitsphp)php;
php php php php php php php php php$imageDictionaryphp-php>Filterphp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'FlateDecodephp'php)php;

php php php php php php php php php$decodeParmsphp php=php arrayphp(php)php;
php php php php php php php php php$decodeParmsphp[php'Predictorphp'php]php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php1php5php)php;php php/php/php Optimalphp prediction
php php php php php php php php php$decodeParmsphp[php'Columnsphp'php]php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$widthphp)php;
php php php php php php php php php$decodeParmsphp[php'Colorsphp'php]php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php(php(php$colorphp=php=Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp php|php|php php$colorphp=php=Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp:php:PNGphp_CHANNELphp_RGBphp_ALPHAphp)php?php(php3php)php:php(php1php)php)php)php;
php php php php php php php php php$decodeParmsphp[php'BitsPerComponentphp'php]php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$bitsphp)php;
php php php php php php php php php$imageDictionaryphp-php>DecodeParmsphp php php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php$decodeParmsphp)php;

php php php php php php php php php/php/Includephp onlyphp thephp imagephp IDATphp sectionphp dataphp.
php php php php php php php php php$thisphp-php>php_resourcephp-php>valuephp php=php php$imageDataphp;

php php php php php php php php php/php/Skipphp doublephp compression
php php php php php php php php ifphp php(php$compressedphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resourcephp-php>skipFiltersphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp width
php php php php php php*php/
php php php php publicphp functionphp getPixelWidthphp(php)php php{
php php php php returnphp php$thisphp-php>php_widthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp height
php php php php php php*php/
php php php php publicphp functionphp getPixelHeightphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_heightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp properties
php php php php php php*php/
php php php php publicphp functionphp getPropertiesphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_imagePropertiesphp;
php php php php php}
php}
