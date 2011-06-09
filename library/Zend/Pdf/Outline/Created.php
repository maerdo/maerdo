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
php php*php php@versionphp php php php php$Idphp:php Createdphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Outlinephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Outlinephp.phpphp'php;

php/php*php*
php php*php PDFphp outlinephp representationphp class
php php*
php php*php php@todophp Implementphp anphp abilityphp tophp associatephp anphp outlinephp itemphp withphp aphp structurephp elementphp php(PDFphp php1php.php3php featurephp)
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Outlines
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Outlinephp_Createdphp extendsphp Zendphp_Pdfphp_Outline
php{
php php php php php/php*php*
php php php php php php*php Outlinephp titlephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_titlephp;

php php php php php/php*php*
php php php php php php*php Colorphp tophp bephp usedphp forphp thephp outlinephp entryphp’sphp textphp.

php php php php php php*php Itphp usesphp thephp DeviceRGBphp colorphp spacephp forphp colorphp representationphp.
php php php php php php*php Nullphp meansphp defaultphp valuephp php-php blackphp php(php[php0php.php0php php0php.php0php php0php.php0php]php inphp RGBphp representationphp)php.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Colorphp_Rgb
php php php php php php*php/
php php php php protectedphp php$php_colorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp outlinephp itemphp isphp displayedphp inphp italicphp.
php php php php php php*php Defaultphp valuephp isphp falsephp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_italicphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp outlinephp itemphp isphp displayedphp inphp boldphp.
php php php php php php*php Defaultphp valuephp isphp falsephp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_boldphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Targetphp destinationphp orphp actionphp.
php php php php php php*php Stringphp meansphp namedphp destination
php php php php php php*
php php php php php php*php Nullphp meansphp nophp targetphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Destinationphp|Zendphp_Pdfphp_Action
php php php php php php*php/
php php php php protectedphp php$php_targetphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Getphp outlinephp titlephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_titlephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp title
php php php php php php*
php php php php php php*php php@paramphp stringphp php$title
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$titlephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_titlephp php=php php$titlephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp italic
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isItalicphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_italicphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isItalicphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isItalic
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsItalicphp(php$isItalicphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_italicphp php=php php$isItalicphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp bold
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isBoldphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_boldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isBoldphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isBold
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsBoldphp(php$isBoldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_boldphp php=php php$isBoldphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp outlinephp textphp colorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Colorphp_Rgb
php php php php php php*php/
php php php php publicphp functionphp getColorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_colorphp;
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
php php php php php php php php php$thisphp-php>php_colorphp php=php php$colorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp outlinephp targetphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Target
php php php php php php*php/
php php php php publicphp functionphp getTargetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_targetphp;
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
php php php php php php php php ifphp php(isphp_stringphp(php$targetphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Namedphp.phpphp'php;
php php php php php php php php php php php php php$targetphp php=php newphp Zendphp_Pdfphp_Destinationphp_Namedphp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$targetphp php=php=php=php nullphp php php|php|php php php$targetphp instanceofphp Zendphp_Pdfphp_Targetphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_targetphp php=php php$targetphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp targetphp hasphp tophp bephp Zendphp_Pdfphp_Destinationphp orphp Zendphp_Pdfphp_Actionphp objectphp orphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'titlephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Titlephp parameterphp isphp requiredphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
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

php php php php php php php php php$outlineDictionaryphp php=php php$factoryphp-php>newObjectphp(newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php)php;

php php php php php php php php php$outlineDictionaryphp-php>Titlephp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$thisphp-php>getTitlephp(php)php)php;

php php php php php php php php php$targetphp php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php ifphp php(php$targetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php}php elsephp ifphp php(php$targetphp instanceofphp Zendphp_Pdfphp_Destinationphp)php php{
php php php php php php php php php php php php php$outlineDictionaryphp-php>Destphp php=php php$targetphp-php>getResourcephp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$targetphp instanceofphp Zendphp_Pdfphp_Actionphp)php php{
php php php php php php php php php php php php php$outlineDictionaryphp-php>Aphp php php php php=php php$targetphp-php>getResourcephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp targetphp hasphp tophp bephp Zendphp_Pdfphp_Destinationphp,php Zendphp_Pdfphp_Actionphp objectphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$colorphp php=php php$thisphp-php>getColorphp(php)php;
php php php php php php php php ifphp php(php$colorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$componentsphp php=php php$colorphp-php>getComponentsphp(php)php;
php php php php php php php php php php php php php$colorComponentElementsphp php=php arrayphp(newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php0php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$componentsphp[php2php]php)php)php;
php php php php php php php php php php php php php$outlineDictionaryphp-php>Cphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$colorComponentElementsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isItalicphp(php)php php php|php|php php php$thisphp-php>isBoldphp(php)php)php php{
php php php php php php php php php php php php php$outlineDictionaryphp-php>Fphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php(php$thisphp-php>isItalicphp(php)php?php php1php php:php php0php)php php php|php php php php/php/php Bitphp php1php php-php Italic
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>isBoldphp(php)php?php php php php2php php:php php0php)php)php;php php php php php/php/php Bitphp php2php php-php Bold
php php php php php php php php php}


php php php php php php php php php$outlineDictionaryphp-php>Parentphp php=php php$parentphp;
php php php php php php php php php$outlineDictionaryphp-php>Prevphp php php php=php php$prevphp;

php php php php php php php php php$lastChildphp php=php nullphp;
php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$childOutlinephp)php php{
php php php php php php php php php php php php ifphp php(php$processedOutlinesphp-php>containsphp(php$childOutlinephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinesphp cyclycphp referencephp isphp detectedphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$lastChildphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$lastChildphp php=php php$childOutlinephp-php>dumpOutlinephp(php$factoryphp,php truephp,php php$outlineDictionaryphp,php nullphp,php php$processedOutlinesphp)php;
php php php php php php php php php php php php php php php php php$outlineDictionaryphp-php>Firstphp php=php php$lastChildphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$childOutlineDictionaryphp php=php php$childOutlinephp-php>dumpOutlinephp(php$factoryphp,php truephp,php php$outlineDictionaryphp,php php$lastChildphp,php php$processedOutlinesphp)php;
php php php php php php php php php php php php php php php php php$lastChildphp-php>Nextphp php=php php$childOutlineDictionaryphp;
php php php php php php php php php php php php php php php php php$lastChildphp php php php php php php php=php php$childOutlineDictionaryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$outlineDictionaryphp-php>Lastphp php=php php$lastChildphp;

php php php php php php php php ifphp php(countphp(php$thisphp-php>childOutlinesphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$outlineDictionaryphp-php>Countphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php(php$thisphp-php>isOpenphp(php)php?php php1php php:php php-php1php)php*countphp(php$thisphp-php>childOutlinesphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$outlineDictionaryphp;
php php php php php}
php}
