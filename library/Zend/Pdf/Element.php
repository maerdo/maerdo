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
php php*php php@versionphp php php php php$Idphp:php Elementphp.phpphp php2php2php7php9php7php php2php0php1php0php-php0php8php-php0php6php php1php5php:php0php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*
php php*php PDFphp filephp elementphp implementation
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Element
php{
php php php php constphp TYPEphp_BOOLphp php php php php php php php php=php php1php;
php php php php constphp TYPEphp_NUMERICphp php php php php php=php php2php;
php php php php constphp TYPEphp_STRINGphp php php php php php php=php php3php;
php php php php constphp TYPEphp_NAMEphp php php php php php php php php=php php4php;
php php php php constphp TYPEphp_ARRAYphp php php php php php php php=php php5php;
php php php php constphp TYPEphp_DICTIONARYphp php php=php php6php;
php php php php constphp TYPEphp_STREAMphp php php php php php php=php php7php;
php php php php constphp TYPEphp_NULLphp php php php php php php php php=php php1php1php;

php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp topphp levelphp indirectphp objectphp,php whichphp containsphp thisphp elementphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php privatephp php$php_parentObjectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*php Seephp ZPdfPDFConstphp forphp possiblephp values
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp getTypephp(php)php;

php php php php php/php*php*
php php php php php php*php Convertphp elementphp tophp aphp stringphp,php whichphp canphp bephp directly
php php php php php php*php writtenphp tophp aphp PDFphp filephp.
php php php php php php*
php php php php php php*php php$factoryphp parameterphp definesphp operationphp contextphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp toStringphp(php$factoryphp php=php nullphp)php;

php php php php constphp CLONEphp_MODEphp_SKIPphp_PAGESphp php php php php=php php1php;php php/php/php Dophp notphp followphp pagesphp duringphp deepphp copyphp process
php php php php constphp CLONEphp_MODEphp_FORCEphp_CLONINGphp php=php php2php;php php/php/php Forcephp topphp levelphp objectphp cloningphp evenphp itphp'sphp alreadyphp processed

php php php php php/php*php*
php php php php php php*php Detachphp PDFphp objectphp fromphp thephp factoryphp php(ifphp applicablephp)php,php clonephp itphp andphp attachphp tophp newphp factoryphp.
php php php php php php*
php php php php php php*php php@todophp Itphp'sphp nevessryphp tophp checkphp ifphp SplObjectStoragephp classphp worksphp faster
php php php php php php*php php(Needsphp PHPphp php5php.php3php.xphp tophp attachphp objectphp php_withphp_php additionalphp dataphp tophp storagephp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factoryphp php Thephp factoryphp tophp attach
php php php php php php*php php@paramphp arrayphp php&php$processedphp Listphp ofphp alreadyphp processedphp indirectphp objectsphp,php usedphp tophp avoidphp objectsphp duplication
php php php php php php*php php@paramphp integerphp php$modephp php Cloningphp modephp php(definesphp filterphp forphp objectsphp cloningphp)
php php php php php php*php php@returnsphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp makeClonephp(Zendphp_Pdfphp_ElementFactoryphp php$factoryphp,php arrayphp php&php$processedphp,php php$modephp)
php php php php php{
php php php php php php php php returnphp clonephp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp topphp levelphp parentphp indirectphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$parent
php php php php php php*php/
php php php php publicphp functionphp setParentObjectphp(Zendphp_Pdfphp_Elementphp_Objectphp php$parentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentObjectphp php=php php$parentphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp topphp levelphp parentphp indirectphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp getParentObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parentObjectphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Markphp objectphp asphp modifiedphp,php tophp includephp itphp intophp newphp PDFphp filephp segmentphp.
php php php php php php*
php php php php php php*php Wephp donphp'tphp automatephp thisphp actionphp tophp keepphp controlphp onphp PDFphp updatephp processphp.
php php php php php php*php Allphp newphp objectsphp arephp treatedphp asphp php"modifiedphp"php automaticallyphp.
php php php php php php*php/
php php php php publicphp functionphp touchphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_parentObjectphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_parentObjectphp-php>touchphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp upphp resourcesphp,php usedphp byphp object
php php php php php php*php/
php php php php publicphp functionphp cleanUpphp(php)
php php php php php{
php php php php php php php php php/php/php Dophp nothing
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp PDFphp elementphp tophp PHPphp typephp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp toPhpphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp PHPphp valuephp intophp PDFphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$input
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp staticphp functionphp phpToPdfphp(php$inputphp)
php php php php php{
php php php php php php php php ifphp php(isphp_numericphp(php$inputphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$inputphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_boolphp(php$inputphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Booleanphp(php$inputphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$inputphp)php)php php{
php php php php php php php php php php php php php$pdfElementsArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$isDictionaryphp php=php falsephp;

php php php php php php php php php php php php foreachphp php(php$inputphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$isDictionaryphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$pdfElementsArrayphp[php$keyphp]php php=php Zendphp_Pdfphp_Elementphp:php:phpToPdfphp(php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$isDictionaryphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php$pdfElementsArrayphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$pdfElementsArrayphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Stringphp(php(stringphp)php$inputphp)php;
php php php php php php php php php}
php php php php php}
php}
