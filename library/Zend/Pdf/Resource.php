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
php php*php php@versionphp php php php php$Idphp:php Resourcephp.phpphp php2php2php9php0php9php php2php0php1php0php-php0php8php-php2php7php php1php9php:php5php7php:php4php8Zphp alexanderphp php$
php php*php/


php/php*php*
php php*php PDFphp filephp Resourcephp abstraction
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Resource
php{
php php php php php/php*php*
php php php php php php*php Eachphp Pdfphp resourcephp php(fontsphp,php imagesphp,php php.php.php.php)php interactsphp withphp aphp PDFphp itselfphp.
php php php php php php*php Itphp createsphp appropriatephp PDFphp objectsphp,php structuresphp andphp sometimephp embeddedphp filesphp.
php php php php php php*php Resourcesphp arephp referencedphp inphp contentphp streamsphp byphp namesphp,php whichphp arephp storedphp in
php php php php php php*php aphp pagephp resourcephp dictionariesphp.
php php php php php php*
php php php php php php*php Thusphp,php resourcesphp mustphp bephp attachedphp tophp thephp PDFphp.
php php php php php php*
php php php php php php*php Resourcephp abstractionphp usesphp ownphp PDFphp objectphp factoryphp tophp storephp allphp necessaryphp informationphp.
php php php php php php*php Atphp thephp renderphp timephp internalphp objectphp factoryphp isphp appendedphp tophp thephp globalphp PDFphp file
php php php php php php*php factoryphp.
php php php php php php*
php php php php php php*php Resourcephp abstractionphp alsophp cashesphp informationphp aboutphp renderedphp PDFphp filesphp and
php php php php php php*php doesnphp'tphp duplicatephp resourcephp descriptionphp eachphp timephp thenphp Resourcephp isphp rendered
php php php php php php*php php(referencedphp)php.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_objectFactoryphp;

php php php php php/php*php*
php php php php php php*php Mainphp resourcephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php protectedphp php$php_resourcephp;

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Ifphp resourcephp isphp notphp aphp Zendphp_Pdfphp_Elementphp objectphp,php thenphp streamphp objectphp withphp specifiedphp valuephp is
php php php php php php*php generatedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp|stringphp php$resource
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Pdfphp_Elementphp_Objectphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_objectFactoryphp php=php php$resourcephp-php>getFactoryphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php php php php php php=php php$resourcephp;

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp.phpphp'php;

php php php php php php php php php$thisphp-php>php_objectFactoryphp php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Pdfphp_Elementphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php php=php php$thisphp-php>php_objectFactoryphp-php>newObjectphp(php$resourcephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php php=php php$thisphp-php>php_objectFactoryphp-php>newStreamObjectphp(php$resourcephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp pagephp,php extractphp itphp andphp dependentphp objectsphp fromphp thephp currentphp documentphp,
php php php php php php*php sophp itphp canphp bephp usedphp withinphp otherphp docsphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_clonephp(php)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp*php/

php/php/php php php php php php php php php$factoryphp php=php Zendphp_Pdfphp_ElementFactoryphp:php:createFactoryphp(php1php)php;
php/php/php php php php php php php php php$processedphp php=php arrayphp(php)php;
php/php/
php/php/php php php php php php php php php/php/php Clonephp dictionaryphp objectphp.
php/php/php php php php php php php php php/php/php Dophp itphp explicitlyphp tophp preventphp sharingphp resourcephp attributesphp betweenphp different
php/php/php php php php php php php php php/php/php resultsphp ofphp clonephp operationphp php(otherphp resourcesphp arephp stillphp sharedphp)
php/php/php php php php php php php php php$dictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php/php/php php php php php php php php foreachphp php(php$thisphp-php>php_pageDictionaryphp-php>getKeysphp(php)php asphp php$keyphp)php php{
php/php/php php php php php php php php php php$dictionaryphp-php>php$keyphp php=php php$thisphp-php>php_pageDictionaryphp-php>php$keyphp-php>makeClonephp(php$factoryphp-php>getFactoryphp(php)php,
php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$processedphp,
php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp:php:CLONEphp_MODEphp_SKIPphp_PAGESphp)php;
php/php/php php php php php php php php php}
php/php/
php/php/php php php php php php php php php$thisphp-php>php_pageDictionaryphp php=php php$factoryphp-php>newObjectphp(php$dictionaryphp)php;
php/php/php php php php php php php php php$thisphp-php>php_objectFactoryphp php php=php php$factoryphp;
php/php/php php php php php php php php php$thisphp-php>php_attachedphp php php php php php php php=php falsephp;
php/php/php php php php php php php php php$thisphp-php>php_stylephp php php php php php php php php php php=php nullphp;
php/php/php php php php php php php php php$thisphp-php>php_fontphp php php php php php php php php php php php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp resourcephp,php extractphp itphp andphp dependentphp objectsphp fromphp thephp currentphp documentphp,
php php php php php php*php sophp itphp canphp bephp usedphp withinphp otherphp docsphp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php php@paramphp arrayphp php$processed
php php php php php php*php php@returnphp Zendphp_Pdfphp_Page
php php php php php php*php/
php php php php publicphp functionphp cloneResourcephp(php$factoryphp,php php&php$processedphp)
php php php php php{
php php php php php php php php php/php*php*php php@todophp implementationphp*php/

php/php/php php php php php php php php php/php/php Clonephp dictionaryphp objectphp.
php/php/php php php php php php php php php/php/php Dophp itphp explicitlyphp tophp preventphp sharingphp pagephp attributesphp betweenphp different
php/php/php php php php php php php php php/php/php resultsphp ofphp clonePagephp(php)php operationphp php(otherphp resourcesphp arephp stillphp sharedphp)
php/php/php php php php php php php php php$dictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php/php/php php php php php php php php foreachphp php(php$thisphp-php>php_pageDictionaryphp-php>getKeysphp(php)php asphp php$keyphp)php php{
php/php/php php php php php php php php php php php php php$dictionaryphp-php>php$keyphp php=php php$thisphp-php>php_pageDictionaryphp-php>php$keyphp-php>makeClonephp(php$factoryphp-php>getFactoryphp(php)php,
php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$processedphp,
php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp:php:CLONEphp_MODEphp_SKIPphp_PAGESphp)php;
php/php/php php php php php php php php php}
php/php/
php/php/php php php php php php php php php$clonedPagephp php=php newphp Zendphp_Pdfphp_Pagephp(php$factoryphp-php>newObjectphp(php$dictionaryphp)php,php php$factoryphp)php;
php/php/php php php php php php php php php$clonedPagephp-php>php_attachedphp php=php falsephp;
php/php/
php/php/php php php php php php php php returnphp php$clonedPagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp resourcephp.
php php php php php php*php Usedphp tophp referencephp resourcephp inphp anphp internalphp PDFphp dataphp structuresphp php(resourcephp dictionariesphp)
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp getResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp factoryphp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getFactoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectFactoryphp;
php php php php php}
php}
