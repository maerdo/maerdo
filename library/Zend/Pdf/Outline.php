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
php php*php php@versionphp php php php php$Idphp:php Outlinephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Abstractphp PDFphp outlinephp representationphp class
php php*
php php*php php@todophp Implementphp anphp abilityphp tophp associatephp anphp outlinephp itemphp withphp aphp structurephp elementphp php(PDFphp php1php.php3php featurephp)
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Outlines
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Outlinephp implementsphp RecursiveIteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Truephp ifphp outlinephp isphp openphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_openphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp childphp outlinesphp php(arrayphp ofphp Zendphp_Pdfphp_Outlinephp objectsphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$childOutlinesphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Getphp outlinephp titlephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getTitlephp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp outlinephp title
php php php php php php*
php php php php php php*php php@paramphp stringphp php$title
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php abstractphp publicphp functionphp setTitlephp(php$titlephp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp openphp byphp default
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isOpenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_openphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp php'isOpenphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isOpen
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp setIsOpenphp(php$isOpenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_openphp php=php php$isOpenphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp italic
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp isItalicphp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp php'isItalicphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isItalic
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php abstractphp publicphp functionphp setIsItalicphp(php$isItalicphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp outlinephp itemphp isphp displayedphp inphp bold
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp isBoldphp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp php'isBoldphp'php outlinephp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isBold
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php abstractphp publicphp functionphp setIsBoldphp(php$isBoldphp)php;


php php php php php/php*php*
php php php php php php*php Getphp outlinephp textphp colorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Colorphp_Rgb
php php php php php php*php/
php php php php abstractphp publicphp functionphp getColorphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp outlinephp textphp colorphp.
php php php php php php*php php(nullphp meansphp defaultphp colorphp whichphp isphp blackphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Colorphp_Rgbphp php$color
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php abstractphp publicphp functionphp setColorphp(Zendphp_Pdfphp_Colorphp_Rgbphp php$colorphp)php;

php php php php php/php*php*
php php php php php php*php Getphp outlinephp targetphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Target
php php php php php php*php/
php php php php abstractphp publicphp functionphp getTargetphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp outlinephp targetphp.
php php php php php php*php Nullphp meansphp nophp target
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Targetphp|stringphp php$target
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php abstractphp publicphp functionphp setTargetphp(php$targetphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp outlinephp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'titlephp'php php php=php>php php$thisphp-php>php_titlephp,
php php php php php php php php php php php php php php php php php php php php php php'openphp'php php php php=php>php php$thisphp-php>php_openphp,
php php php php php php php php php php php php php php php php php php php php php php'colorphp'php php php=php>php php$thisphp-php>php_colorphp,
php php php php php php php php php php php php php php php php php php php php php php'italicphp'php php=php>php php$thisphp-php>php_italicphp,
php php php php php php php php php php php php php php php php php php php php php php'boldphp'php php php php=php>php php$thisphp-php>php_boldphp,
php php php php php php php php php php php php php php php php php php php php php php'targetphp'php php=php>php php$thisphp-php>php_targetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outlinephp options
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Pdfphp_Action
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'titlephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setTitlephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'openphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setIsOpenphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'colorphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setColorphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'italicphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setIsItalicphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'boldphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setIsBoldphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'targetphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setTargetphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unknownphp optionphp namephp php-php php'php$keyphp'php.php"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Outlinephp object
php php php php php php*
php php php php php php*php Itphp providesphp twophp formsphp ofphp inputphp parametersphp:
php php php php php php*
php php php php php php*php php1php.php Zendphp_Pdfphp_Outlinephp:php:createphp(stringphp php$titlephp[php,php Zendphp_Pdfphp_Targetphp php$targetphp]php)
php php php php php php*php php2php.php Zendphp_Pdfphp_Outlinephp:php:createphp(arrayphp php$optionsphp)
php php php php php php*
php php php php php php*php Secondphp formphp allowsphp tophp providephp outlinephp optionsphp asphp anphp arrayphp.
php php php php php php*php Thephp followedphp optionsphp arephp supportedphp:
php php php php php php*php php php php'titlephp'php php php-php stringphp,php outlinephp titlephp,php required
php php php php php php*php php php php'openphp'php php php php-php booleanphp,php truephp ifphp outlinephp entryphp isphp openphp php(defaultphp valuephp isphp falsephp)
php php php php php php*php php php php'colorphp'php php php-php Zendphp_Pdfphp_Colorphp_Rgbphp objectphp,php truephp ifphp outlinephp entryphp isphp openphp php(defaultphp valuephp isphp nullphp php-php blackphp)
php php php php php php*php php php php'italicphp'php php-php booleanphp,php truephp ifphp outlinephp entryphp isphp displayedphp inphp italicphp php(defaultphp valuephp isphp falsephp)
php php php php php php*php php php php'boldphp'php php php php-php booleanphp,php truephp ifphp outlinephp entryphp isphp displayedphp inphp boldphp php(defaultphp valuephp isphp falsephp)
php php php php php php*php php php php'targetphp'php php-php Zendphp_Pdfphp_Targetphp objectphp orphp stringphp,php outlinephp itemphp destination
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$paramphp1php,php php$paramphp2php php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Outlinephp/Createdphp.phpphp'php;
php php php php php php php php ifphp php(isphp_stringphp(php$paramphp1php)php)php php{
php php php php php php php php php php php php ifphp php(php$paramphp2php php!php=php=php nullphp php php&php&php php php!php(php$paramphp2php instanceofphp Zendphp_Pdfphp_Targetphp php php|php|php php isphp_stringphp(php$paramphp2php)php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp createphp methodphp takesphp php$titlephp php(stringphp)php andphp php$targetphp php(Zendphp_Pdfphp_Targetphp orphp stringphp)php orphp anphp arrayphp asphp anphp inputphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Outlinephp_Createdphp(arrayphp(php'titlephp'php php php=php>php php$paramphp1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'targetphp'php php=php>php php$paramphp2php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$paramphp1php)php php php|php|php php php$paramphp2php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Outlinephp createphp methodphp takesphp php$titlephp php(stringphp)php andphp php$destinationphp php(Zendphp_Pdfphp_Destinationphp)php orphp anphp arrayphp asphp anphp inputphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Outlinephp_Createdphp(php$paramphp1php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp numberphp ofphp thephp totalphp numberphp ofphp openphp itemsphp atphp allphp levelsphp ofphp thephp outlinephp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp openOutlinesCountphp(php)
php php php php php{
php php php php php php php php php$countphp php=php php1php;php php/php/php Includephp thisphp outline

php php php php php php php php ifphp php(php$thisphp-php>isOpenphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>childOutlinesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php$countphp php+php=php php$childphp-php>openOutlinesCountphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dumpphp Outlinephp andphp itsphp childphp outlinesphp intophp PDFphp structures
php php php php php php*
php php php php php php*php Returnsphp dictionaryphp indirectphp objectphp orphp reference
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php php php php$factoryphp objectphp factoryphp forphp newlyphp createdphp indirectphp objects
php php php php php php*php php@paramphp booleanphp php$updateNavigationphp php Updatephp navigationphp flag
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$parentphp php php Parentphp outlinephp dictionaryphp reference
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$prevphp php php php php Previousphp outlinephp dictionaryphp reference
php php php php php php*php php@paramphp SplObjectStoragephp php$processedOutlinesphp php Listphp ofphp alreadyphp processedphp outlines
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php abstractphp publicphp functionphp dumpOutlinephp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updateNavigationphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp php$parentphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp php$prevphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php SplObjectStoragephp php$processedOutlinesphp php=php nullphp)php;


php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/
php php php php php/php/php php RecursiveIteratorphp interfacephp methods
php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childphp outlinephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outline
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp currentphp iteratorphp key
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Gophp tophp nextphp child
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp children
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php returnphp resetphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp currentphp positionphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>childOutlinesphp)php php!php=php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childphp outlinephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Outlinephp|null
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp containerphp hasphp anyphp pages
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>childOutlinesphp)php php>php php0php;
php php php php php}


php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/
php php php php php/php/php php Countablephp interfacephp methods
php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/

php php php php php/php*php*
php php php php php php*php countphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}
php}
