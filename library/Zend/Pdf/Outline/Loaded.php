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
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Loadedphp.phpphp php2php3php1php9php5php php2php0php1php0php-php1php0php-php2php1php php1php0php:php1php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Outlinephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Outlinephp.phpphp'php;

php/php*php*
php php*php Traceablephp PDFphp outlinephp representationphp class
php php*
php php*php Instancesphp ofphp thisphp classphp tracephp objectphp updatephp uperationsphp.php Thatphp allowsphp tophp avoidphp outlinesphp PDFphp treephp update
php php*php whichphp shouldphp bephp performedphp atphp eachphp documentphp updatephp otherwisephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Outlines
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Outlinephp_Loadedphp extendsphp Zendphp_Pdfphp_Outline
php{
php php php php php/php*php*
php php php php php php*php Outlinephp dictionaryphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Dictionaryphp|Zendphp_Pdfphp_Elementphp_Objectphp|Zendphp_Pdfphp_Elementphp_Reference
php php php php php php*php/
php php php php protectedphp php$php_outlineDictionaryphp;

php php php php php/php*php*
php php php php php php*php originalphp arrayphp ofphp childphp outlines
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_originalChildOutlinesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp outlinephp titlephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Titlephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp dictionaryphp Titlephp entryphp isphp requiredphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_outlineDictionaryphp-php>Titlephp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp title
php php php php php php*
php php php php php php*php php@paramphp stringphp php$title
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$titlephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Titlephp-php>touchphp(php)php;
php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Titlephp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$titlephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isOpenphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isOpen
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsOpenphp(php$isOpenphp)
php php php php php{
php php php php php php php php parentphp:php:setIsOpenphp(php$isOpenphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Countphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Dophp Nothingphp.
php php php php php php php php php php php php returnphp thisphp;
php php php php php php php php php}

php php php php php php php php php$childrenCountphp php=php php$thisphp-php>php_outlineDictionaryphp-php>Countphp-php>valuephp;
php php php php php php php php php$isOpenCurrentStatephp php=php php(php$childrenCountphp php>php php0php)php;
php php php php php php php php ifphp php(php$isOpenphp php!php=php php$isOpenCurrentStatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Countphp-php>touchphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Countphp-php>valuephp php=php php(php$isOpenphp?php php1php php:php php-php1php)php*absphp(php$childrenCountphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp italic
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isItalicphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php&php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isItalicphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isItalic
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsItalicphp(php$isItalicphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$isItalicphp?php php1php php:php php0php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>touchphp(php)php;
php php php php php php php php php php php php ifphp php(php$isItalicphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php=php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php|php php1php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php=php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php|php php~php1php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp bold
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isBoldphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php&php php2php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isBoldphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isBold
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsBoldphp(php$isBoldphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$isBoldphp?php php2php php:php php0php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>touchphp(php)php;
php php php php php php php php php php php php ifphp php(php$isBoldphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php=php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php|php php2php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php=php php$thisphp-php>php_outlineDictionaryphp-php>Fphp-php>valuephp php|php php~php2php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp outlinephp textphp colorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Colorphp_Rgb
php php php php php php*php/
php php php php publicphp functionphp getColorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Cphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$componentsphp php=php php$thisphp-php>php_outlineDictionaryphp-php>Cphp-php>itemsphp;

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/Rgbphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Pdfphp_Colorphp_Rgbphp(php$componentsphp[php0php]php,php php$componentsphp[php1php]php,php php$componentsphp[php2php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp textphp colorphp.
php php php php php php*php php(nullphp meansphp defaultphp colorphp whichphp isphp blackphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp_Rgbphp php$color
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setColorphp(Zendphp_Pdfphp_Colorphp_Rgbphp php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;

php php php php php php php php ifphp php(php$colorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Cphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$componentsphp php=php php$colorphp-php>getComponentsphp(php)php;
php php php php php php php php php php php php php$colorComponentElementsphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php0php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php2php]php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Cphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$colorComponentElementsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp outlinephp targetphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Target
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getTargetphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Destphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Aphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp dictionaryphp mayphp containphp Destphp orphp Aphp entryphp,php butphp notphp bothphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp.phpphp'php;
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Destinationphp:php:loadphp(php$thisphp-php>php_outlineDictionaryphp-php>Destphp)php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_outlineDictionaryphp-php>Aphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp.phpphp'php;
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Actionphp:php:loadphp(php$thisphp-php>php_outlineDictionaryphp-php>Aphp)php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp targetphp.
php php php php php php*php Nullphp meansphp nophp target
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Targetphp|stringphp php$target
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTargetphp(php$targetphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$targetphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Namedphp.phpphp'php;
php php php php php php php php php php php php php$targetphp php=php Zendphp_Pdfphp_Destinationphp_Namedphp:php:createphp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$targetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Destphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Aphp php php php php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(php$targetphp instanceofphp Zendphp_Pdfphp_Destinationphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Destphp php=php php$targetphp-php>getResourcephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Aphp php php php php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(php$targetphp instanceofphp Zendphp_Pdfphp_Actionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Destphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Aphp php php php php=php php$targetphp-php>getResourcephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp targetphp hasphp tophp bephp Zendphp_Pdfphp_Destinationphp orphp Zendphp_Pdfphp_Actionphp objectphp orphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp options
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionsphp_Traceable
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php parentphp:php:setOptionsphp(php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}



php php php php php/php*php*
php php php php php php*php Createphp PDFphp outlinephp objectphp usingphp specifiedphp dictionary
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$dictionaryphp php(Itphp'sphp actuallyphp Dictionaryphp orphp Dictionaryphp Objectphp orphp Referencephp tophp aphp Dictionaryphp Objectphp)
php php php php php php*php php@paramphp Zendphp_Pdfphp_Actionphp php php$parentAction
php php php php php php*php php@paramphp SplObjectStoragephp php$processedOutlinesphp php Listphp ofphp alreadyphp processedphp Outlinephp dictionariesphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php usedphp tophp avoidphp cyclicphp references
php php php php php php*php php@returnphp Zendphp_Pdfphp_Action
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$dictionaryphp,php SplObjectStoragephp php$processedDictionariesphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dictionaryphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'php$dictionaryphp mastphp bephp anphp indirectphp dictionaryphp objectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$processedDictionariesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$processedDictionariesphp php=php newphp SplObjectStoragephp(php)php;
php php php php php php php php php}
php php php php php php php php php$processedDictionariesphp-php>attachphp(php$dictionaryphp)php;

php php php php php php php php php$thisphp-php>php_outlineDictionaryphp php=php php$dictionaryphp;

php php php php php php php php ifphp php(php$dictionaryphp-php>Countphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$dictionaryphp-php>Countphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_NUMERICphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp dictionaryphp Countphp entryphp mustphp bephp aphp numericphp elementphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$childOutlinesCountphp php=php php$dictionaryphp-php>Countphp-php>valuephp;
php php php php php php php php php php php php ifphp php(php$childOutlinesCountphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_openphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$childOutlinesCountphp php=php absphp(php$childOutlinesCountphp)php;

php php php php php php php php php php php php php$childDictionaryphp php=php php$dictionaryphp-php>Firstphp;

php php php php php php php php php php php php php$childrenphp php=php newphp SplObjectStoragephp(php)php;
php php php php php php php php php php php php whilephp php(php$childDictionaryphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php/php Checkphp childrenphp structurephp forphp cyclicphp references
php php php php php php php php php php php php php php php php ifphp php(php$childrenphp-php>containsphp(php$childDictionaryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp childsphp loadphp errorphp.php'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$processedDictionariesphp-php>containsphp(php$childDictionaryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>childOutlinesphp[php]php php=php newphp Zendphp_Pdfphp_Outlinephp_Loadedphp(php$childDictionaryphp,php php$processedDictionariesphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$childDictionaryphp php=php php$childDictionaryphp-php>Nextphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_originalChildOutlinesphp php=php php$thisphp-php>childOutlinesphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Dumpphp Outlinephp andphp itsphp childphp outlinesphp intophp PDFphp structures
php php php php php php*
php php php php php php*php Returnsphp dictionaryphp indirectphp objectphp orphp reference
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php php php php$factoryphp objectphp factoryphp forphp newlyphp createdphp indirectphp objects
php php php php php php*php php@paramphp booleanphp php$updateNavigationphp php Updatephp navigationphp flag
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$parentphp php php Parentphp outlinephp dictionaryphp reference
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$prevphp php php php php Previousphp outlinephp dictionaryphp reference
php php php php php php*php php@paramphp SplObjectStoragephp php$processedOutlinesphp php Listphp ofphp alreadyphp processedphp outlines
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp dumpOutlinephp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updateNavigationphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp php$parentphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp php$prevphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php SplObjectStoragephp php$processedOutlinesphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$processedOutlinesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$processedOutlinesphp php=php newphp SplObjectStoragephp(php)php;
php php php php php php php php php}
php php php php php php php php php$processedOutlinesphp-php>attachphp(php$thisphp)php;

php php php php php php php php ifphp php(php$updateNavigationphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Parentphp php=php php$parentphp;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Prevphp php php php=php php$prevphp;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Nextphp php php php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$updateChildNavigationphp php=php falsephp;
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_originalChildOutlinesphp)php php!php=php countphp(php$thisphp-php>childOutlinesphp)php)php php{
php php php php php php php php php php php php php/php/php Ifphp originalphp andphp currentphp childrenphp arraysphp havephp differentphp sizephp thenphp childrenphp listphp wasphp updated
php php php php php php php php php php php php php$updateChildNavigationphp php=php truephp;
php php php php php php php php php}php elsephp ifphp php(php php!php(arrayphp_keysphp(php$thisphp-php>php_originalChildOutlinesphp)php php=php=php=php arrayphp_keysphp(php$thisphp-php>childOutlinesphp)php)php php)php php{
php php php php php php php php php php php php php/php/php Ifphp originalphp andphp currentphp childrenphp arraysphp havephp differentphp keysphp php(withphp aphp glancephp tophp anphp orderphp)php thenphp childrenphp listphp wasphp updated
php php php php php php php php php php php php php$updateChildNavigationphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$keyphp php=php>php php$childOutlinephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_originalChildOutlinesphp[php$keyphp]php php!php=php=php php$childOutlinephp)php php{
php php php php php php php php php php php php php php php php php php php php php$updateChildNavigationphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$lastChildphp php=php nullphp;
php php php php php php php php ifphp php(php$updateChildNavigationphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>touchphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Firstphp php=php nullphp;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$childOutlinephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$processedOutlinesphp-php>containsphp(php$childOutlinephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinesphp cyclycphp referencephp isphp detectedphp.php'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$lastChildphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Firstphp passphp.php Updatephp Outlinesphp dictionaryphp Firstphp entryphp usingphp correspondingphp value
php php php php php php php php php php php php php php php php php php php php php$lastChildphp php=php php$childOutlinephp-php>dumpOutlinephp(php$factoryphp,php php$updateChildNavigationphp,php php$thisphp-php>php_outlineDictionaryphp,php nullphp,php php$processedOutlinesphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Firstphp php=php php$lastChildphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Updatephp previousphp outlinephp dictionaryphp Nextphp entryphp php(Prevphp isphp updatedphp withinphp dumpOutlinephp(php)php methodphp)
php php php php php php php php php php php php php php php php php php php php php$childOutlineDictionaryphp php=php php$childOutlinephp-php>dumpOutlinephp(php$factoryphp,php php$updateChildNavigationphp,php php$thisphp-php>php_outlineDictionaryphp,php php$lastChildphp,php php$processedOutlinesphp)php;
php php php php php php php php php php php php php php php php php php php php php$lastChildphp-php>Nextphp php=php php$childOutlineDictionaryphp;
php php php php php php php php php php php php php php php php php php php php php$lastChildphp php php php php php php php=php php$childOutlineDictionaryphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Lastphp php php=php php$lastChildphp;

php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>childOutlinesphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Countphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php(php$thisphp-php>isOpenphp(php)php?php php1php php:php php-php1php)php*countphp(php$thisphp-php>childOutlinesphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outlineDictionaryphp-php>Countphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$childOutlinephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$processedOutlinesphp-php>containsphp(php$childOutlinephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinesphp cyclycphp referencephp isphp detectedphp.php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$lastChildphp php=php php$childOutlinephp-php>dumpOutlinephp(php$factoryphp,php php$updateChildNavigationphp,php php$thisphp-php>php_outlineDictionaryphp,php php$lastChildphp,php php$processedOutlinesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_outlineDictionaryphp;
php php php php php}

php php php php publicphp functionphp dumpphp(php$levelphp php=php php0php)
php php php php php{
php php php php php php php php printfphp(php"php:php%php3dphp:php%sphp:php%sphp:php%sphp%sphp php php:php\nphp"php,php countphp(php$thisphp-php>childOutlinesphp)php,php$thisphp-php>isItalicphp(php)php?php php'iphp'php:php'php php'php,php php$thisphp-php>isBoldphp(php)php?php php'bphp'php:php'php php'php,php strphp_padphp(php'php'php,php php4php*php$levelphp)php,php php$thisphp-php>getTitlephp(php)php)php;

php php php php php php php php ifphp php(php$thisphp-php>isOpenphp(php)php php php|php|php php truephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php$childphp-php>dumpphp(php$levelphp php+php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
