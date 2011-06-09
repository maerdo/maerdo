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
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php2php9php0php9php php2php0php1php0php-php0php8php-php2php7php php1php9php:php5php7php:php4php8Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Streamphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Elementphp_Objectphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp.phpphp'php;

php/php*php*
php php*php PDFphp filephp php'streamphp objectphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp extendsphp Zendphp_Pdfphp_Elementphp_Object
php{
php php php php php/php*php*
php php php php php php*php StreamObjectphp dictionary
php php php php php php*php Requiredphp enriesphp:
php php php php php php*php Length
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Dictionary
php php php php php php*php/
php php php php privatephp php$php_dictionaryphp;

php php php php php/php*php*
php php php php php php*php Flagphp whichphp signalsphp,php thatphp streamphp isphp decoded
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_streamDecodedphp;

php php php php php/php*php*
php php php php php php*php Storedphp originalphp streamphp objectphp dictionaryphp.
php php php php php php*php Usedphp tophp decodephp streamphp atphp accessphp timephp.
php php php php php php*
php php php php php php*php Thephp onlyphp propertiesphp affectingphp decodingphp arephp soredphp herephp.
php php php php php php*
php php php php php php*php php@varphp arrayphp|null
php php php php php php*php/
php php php php privatephp php$php_initialDictionaryDataphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$val
php php php php php php*php php@paramphp integerphp php$objNum
php php php php php php*php php@paramphp integerphp php$genNum
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factory
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp|nullphp php$dictionary
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valphp,php php$objNumphp,php php$genNumphp,php Zendphp_Pdfphp_ElementFactoryphp php$factoryphp,php php$dictionaryphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(newphp Zendphp_Pdfphp_Elementphp_Streamphp(php$valphp)php,php php$objNumphp,php php$genNumphp,php php$factoryphp)php;

php php php php php php php php ifphp php(php$dictionaryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>Lengthphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(strlenphp(php php$valphp php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp php php php php=php php$dictionaryphp;
php php php php php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php falsephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Extractphp dictionaryphp dataphp whichphp arephp usedphp tophp storephp informationphp andphp tophp normalizephp filters
php php php php php php*php informationphp beforephp defilteringphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php privatephp functionphp php_extractDictionaryDataphp(php)
php php php php php{
php php php php php php php php php$dictionaryArrayphp php=php arrayphp(php)php;

php php php php php php php php php$dictionaryArrayphp[php'Filterphp'php]php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$dictionaryArrayphp[php'DecodeParmsphp'php]php php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>Filterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Dophp nothingphp.
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_dictionaryphp-php>Filterphp-php>getTypephp(php)php php=php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>Filterphp-php>itemsphp asphp php$idphp php=php>php php$filterphp)php php{
php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'Filterphp'php]php[php$idphp]php php php php php php php=php php$filterphp-php>valuephp;
php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'DecodeParmsphp'php]php[php$idphp]php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>itemsphp[php$idphp]php php!php=php=php nullphp php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>itemsphp[php$idphp]php-php>valuephp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>itemsphp[php$idphp]php-php>getKeysphp(php)php asphp php$paramKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'DecodeParmsphp'php]php[php$idphp]php[php$paramKeyphp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>itemsphp[php$idphp]php-php>php$paramKeyphp-php>valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_dictionaryphp-php>Filterphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_NULLphp)php php{
php php php php php php php php php php php php php$dictionaryArrayphp[php'Filterphp'php]php[php0php]php php php php php php php=php php$thisphp-php>php_dictionaryphp-php>Filterphp-php>valuephp;
php php php php php php php php php php php php php$dictionaryArrayphp[php'DecodeParmsphp'php]php[php0php]php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>getKeysphp(php)php asphp php$paramKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'DecodeParmsphp'php]php[php0php]php[php$paramKeyphp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>DecodeParmsphp-php>php$paramKeyphp-php>valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>Fphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$dictionaryArrayphp[php'Fphp'php]php php=php php$thisphp-php>php_dictionaryphp-php>Fphp-php>valuephp;
php php php php php php php php php}

php php php php php php php php php$dictionaryArrayphp[php'FFilterphp'php]php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$dictionaryArrayphp[php'FDecodeParmsphp'php]php php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>FFilterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Dophp nothingphp.
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_dictionaryphp-php>FFilterphp-php>getTypephp(php)php php=php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>FFilterphp-php>itemsphp asphp php$idphp php=php>php php$filterphp)php php{
php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'FFilterphp'php]php[php$idphp]php php php php php php php=php php$filterphp-php>valuephp;
php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'FDecodeParmsphp'php]php[php$idphp]php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>itemsphp[php$idphp]php php!php=php=php nullphp php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>itemsphp[php$idphp]php-php>valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>itemsphp[php$idphp]php-php>getKeysphp(php)php asphp php$paramKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'FDecodeParmsphp'php]php[php$idphp]php[php$paramKeyphp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>itemsphp[php$idphp]php-php>itemsphp[php$paramKeyphp]php-php>valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dictionaryArrayphp[php'FFilterphp'php]php[php0php]php php php php php php php=php php$thisphp-php>php_dictionaryphp-php>FFilterphp-php>valuephp;
php php php php php php php php php php php php php$dictionaryArrayphp[php'FDecodeParmsphp'php]php[php0php]php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>getKeysphp(php)php asphp php$paramKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php$dictionaryArrayphp[php'FDecodeParmsphp'php]php[php0php]php[php$paramKeyphp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dictionaryphp-php>FDecodeParmsphp-php>itemsphp[php$paramKeyphp]php-php>valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$dictionaryArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp stream
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_decodeStreamphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_initialDictionaryDataphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp php=php php$thisphp-php>php_extractDictionaryDataphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Allphp appliedphp streamphp filtersphp mustphp bephp processedphp tophp decodephp streamphp.
php php php php php php php php php php*php Ifphp wephp donphp'tphp recognizephp anyphp ofphp appliedphp filetrsphp anphp exceptionphp shouldphp bephp thrownphp here
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_initialDictionaryDataphp[php'Fphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*php php@todophp Checkphp,php howphp externalphp filesphp canphp bephp processedphp.php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Externalphp filtersphp arephp notphp supportedphp nowphp.php'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_initialDictionaryDataphp[php'Filterphp'php]php asphp php$idphp php=php>php php$filterNamephp php)php php{
php php php php php php php php php php php php php$valueRefphp php=php php&php$thisphp-php>php_valuephp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_valuephp-php>valuephp-php>touchphp(php)php;
php php php php php php php php php php php php switchphp php(php$filterNamephp)php php{
php php php php php php php php php php php php php php php php casephp php'ASCIIHexDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/AsciiHexphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_AsciiHexphp:php:decodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'ASCIIphp8php5Decodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Asciiphp8php5php.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Asciiphp8php5php:php:decodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'FlateDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Compressionphp/Flatephp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Compressionphp_Flatephp:php:decodephp(php$valueRefphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp[php'DecodeParmsphp'php]php[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'LZWDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Compressionphp/Lzwphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Compressionphp_Lzwphp:php:decodephp(php$valueRefphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp[php'DecodeParmsphp'php]php[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'RunLengthDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/RunLengthphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_RunLengthphp:php:decodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp streamphp filterphp:php php\php'php'php php.php php$filterNamephp php.php php'php\php'php.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp stream
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_encodeStreamphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Allphp appliedphp streamphp filtersphp mustphp bephp processedphp tophp encodephp streamphp.
php php php php php php php php php php*php Ifphp wephp donphp'tphp recognizephp anyphp ofphp appliedphp filetrsphp anphp exceptionphp shouldphp bephp thrownphp here
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_initialDictionaryDataphp[php'Fphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*php php@todophp Checkphp,php howphp externalphp filesphp canphp bephp processedphp.php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Externalphp filtersphp arephp notphp supportedphp nowphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$filtersphp php=php arrayphp_reversephp(php$thisphp-php>php_initialDictionaryDataphp[php'Filterphp'php]php,php truephp)php;

php php php php php php php php foreachphp php(php$filtersphp asphp php$idphp php=php>php php$filterNamephp php)php php{
php php php php php php php php php php php php php$valueRefphp php=php php&php$thisphp-php>php_valuephp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_valuephp-php>valuephp-php>touchphp(php)php;
php php php php php php php php php php php php switchphp php(php$filterNamephp)php php{
php php php php php php php php php php php php php php php php casephp php'ASCIIHexDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/AsciiHexphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_AsciiHexphp:php:encodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'ASCIIphp8php5Decodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Asciiphp8php5php.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Asciiphp8php5php:php:encodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'FlateDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Compressionphp/Flatephp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Compressionphp_Flatephp:php:encodephp(php$valueRefphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp[php'DecodeParmsphp'php]php[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'LZWDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Compressionphp/Lzwphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_Compressionphp_Lzwphp:php:encodephp(php$valueRefphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp[php'DecodeParmsphp'php]php[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php casephp php'RunLengthDecodephp'php:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/RunLengthphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valueRefphp php=php Zendphp_Pdfphp_Filterphp_RunLengthphp:php:encodephp(php$valueRefphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp streamphp filterphp:php php\php'php'php php.php php$filterNamephp php.php php'php\php'php.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php ifphp php(php$propertyphp php=php=php php'dictionaryphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Ifphp streamphp isphp notphp decodedphp yetphp,php thenphp storephp originalphp decodingphp optionsphp php(dophp itphp onlyphp oncephp)php.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php(php php!php$thisphp-php>php_streamDecodedphp php)php php&php&php php(php$thisphp-php>php_initialDictionaryDataphp php=php=php=php nullphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp php=php php$thisphp-php>php_extractDictionaryDataphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp-php>php_dictionaryphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$propertyphp php=php=php php'valuephp'php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_streamDecodedphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_decodeStreamphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp streamphp objectphp propertyphp requestedphp.php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$propertyphp php=php=php php'valuephp'php)php php{
php php php php php php php php php php php php php$valueRefphp php=php php&php$thisphp-php>php_valuephp-php>valuephp-php>getRefphp(php)php;
php php php php php php php php php php php php php$valueRefphp php=php php$valuephp;
php php php php php php php php php php php php php$thisphp-php>php_valuephp-php>valuephp-php>touchphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php truephp;

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp streamphp objectphp propertyphp:php php\php'php'php php.php php$propertyphp php.php php'php\php'php.php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Treatphp streamphp dataphp asphp alreadyphp encoded
php php php php php php*php/
php php php php publicphp functionphp skipFiltersphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamDecodedphp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Callphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_streamDecodedphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_decodeStreamphp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(countphp(php$argsphp)php)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>php$methodphp(php)php;
php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>php$methodphp(php$argsphp[php0php]php)php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unsupportedphp numberphp ofphp argumentsphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detachphp PDFphp objectphp fromphp thephp factoryphp php(ifphp applicablephp)php,php clonephp itphp andphp attachphp tophp newphp factoryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factoryphp php Thephp factoryphp tophp attach
php php php php php php*php php@paramphp arrayphp php&php$processedphp php Listphp ofphp alreadyphp processedphp indirectphp objectsphp,php usedphp tophp avoidphp objectsphp duplication
php php php php php php*php php@paramphp integerphp php$modephp php Cloningphp modephp php(definesphp filterphp forphp objectsphp cloningphp)
php php php php php php*php php@returnsphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp makeClonephp(Zendphp_Pdfphp_ElementFactoryphp php$factoryphp,php arrayphp php&php$processedphp,php php$modephp)
php php php php php{
php php php php php php php php php$idphp php=php splphp_objectphp_hashphp(php$thisphp)php;
php php php php php php php php ifphp php(issetphp(php$processedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php/php/php Dophp nothingphp ifphp objectphp isphp alreadyphp processed
php php php php php php php php php php php php php/php/php returnphp it
php php php php php php php php php php php php returnphp php$processedphp[php$idphp]php;
php php php php php php php php php}

php php php php php php php php php$streamValuephp php php php php php php=php php$thisphp-php>php_valuephp;
php php php php php php php php php$streamDictionaryphp php=php php$thisphp-php>php_dictionaryphp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;

php php php php php php php php php/php/php Makephp newphp emptyphp instancephp ofphp streamphp objectphp andphp registerphp itphp inphp php$processedphp container
php php php php php php php php php$processedphp[php$idphp]php php=php php$clonedObjectphp php=php php$factoryphp-php>newStreamObjectphp(php'php'php)php;

php php php php php php php php php/php/php Copyphp currentphp objectphp dataphp andphp state
php php php php php php php php php$clonedObjectphp-php>php_dictionaryphp php php php php php php php php php php php php=php php$thisphp-php>php_dictionaryphp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;
php php php php php php php php php$clonedObjectphp-php>php_valuephp php php php php php php php php php php php php php php php php php=php php$thisphp-php>php_valuephp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;
php php php php php php php php php$clonedObjectphp-php>php_initialDictionaryDataphp php=php php$thisphp-php>php_initialDictionaryDataphp;
php php php php php php php php php$clonedObjectphp-php>php_streamDecodedphp php php php php php php php php php=php php$thisphp-php>php_streamDecodedphp;

php php php php php php php php returnphp php php$clonedObjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dumpphp objectphp tophp aphp stringphp tophp savephp withinphp PDFphp file
php php php php php php*
php php php php php php*php php$factoryphp parameterphp definesphp operationphp contextphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp dumpphp(Zendphp_Pdfphp_ElementFactoryphp php$factoryphp)
php php php php php{
php php php php php php php php php$shiftphp php=php php$factoryphp-php>getEnumerationShiftphp(php$thisphp-php>php_factoryphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_streamDecodedphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp php=php php$thisphp-php>php_extractDictionaryDataphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_encodeStreamphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_initialDictionaryDataphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$newDictionaryphp php php php=php php$thisphp-php>php_extractDictionaryDataphp(php)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_initialDictionaryDataphp php!php=php=php php$newDictionaryphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_decodeStreamphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_initialDictionaryDataphp php=php php$newDictionaryphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_encodeStreamphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp streamphp length
php php php php php php php php php$thisphp-php>dictionaryphp-php>Lengthphp-php>valuephp php=php php$thisphp-php>php_valuephp-php>lengthphp(php)php;

php php php php php php php php returnphp php php$thisphp-php>php_objNumphp php+php php$shiftphp php.php php"php php"php php.php php$thisphp-php>php_genNumphp php.php php"php objphp php\nphp"
php php php php php php php php php php php php php php.php php php$thisphp-php>dictionaryphp-php>toStringphp(php$factoryphp)php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php php$thisphp-php>php_valuephp-php>toStringphp(php$factoryphp)php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php"endobjphp\nphp"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp upphp resourcesphp,php usedphp byphp object
php php php php php php*php/
php php php php publicphp functionphp cleanUpphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dictionaryphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_valuephp php php php php php php=php nullphp;
php php php php php}
php}
