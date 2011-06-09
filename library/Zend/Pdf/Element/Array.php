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
php php*php php@versionphp php php php php$Idphp:php Arrayphp.phpphp php2php2php7php9php7php php2php0php1php0php-php0php8php-php0php6php php1php5php:php0php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*
php php*php PDFphp filephp php'arrayphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Arrayphp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Arrayphp elementphp items
php php php php php php*
php php php php php php*php Arrayphp ofphp Zendphp_Pdfphp_Elementphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$itemsphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$valphp php php php-php arrayphp ofphp Zendphp_Pdfphp_Elementphp objects
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>itemsphp php=php newphp ArrayObjectphp(php)php;

php php php php php php php php ifphp php(php$valphp php!php=php=php nullphp php php&php&php php isphp_arrayphp(php$valphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$valphp asphp php$elementphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$elementphp instanceofphp Zendphp_Pdfphp_Elementphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Arrayphp elementsphp mustphp bephp Zendphp_Pdfphp_Elementphp objectsphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>itemsphp[php]php php=php php$elementphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$valphp php!php=php=php nullphp)php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Argumentphp mustphp bephp anphp arrayphp'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Undefinedphp propertyphp:php Zendphp_Pdfphp_Elementphp_Arrayphp:php:php$php'php php.php php$propertyphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setter
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$offset
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Undefinedphp propertyphp:php Zendphp_Pdfphp_Elementphp_Arrayphp:php:php$php'php php.php php$propertyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Pdfphp_Elementphp:php:TYPEphp_ARRAYphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp objectphp asphp string
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php php$outStrphp php=php php'php[php'php;
php php php php php php php php php$lastNLphp php=php php0php;

php php php php php php php php foreachphp php(php$thisphp-php>itemsphp asphp php$elementphp)php php{
php php php php php php php php php php php php ifphp php(strlenphp(php$outStrphp)php php-php php$lastNLphp php>php php1php2php8php)php php php{
php php php php php php php php php php php php php php php php php$outStrphp php.php=php php"php\nphp"php;
php php php php php php php php php php php php php php php php php$lastNLphp php=php strlenphp(php$outStrphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outStrphp php.php=php php$elementphp-php>toStringphp(php$factoryphp)php php.php php'php php'php;
php php php php php php php php php}
php php php php php php php php php$outStrphp php.php=php php'php]php'php;

php php php php php php php php returnphp php$outStrphp;
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
php php php php php php php php php$newArrayphp php=php newphp selfphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>itemsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$newArrayphp-php>itemsphp[php$keyphp]php php=php php$valuephp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$newArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp topphp levelphp parentphp indirectphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$parent
php php php php php php*php/
php php php php publicphp functionphp setParentObjectphp(Zendphp_Pdfphp_Elementphp_Objectphp php$parentphp)
php php php php php{
php php php php php php php php parentphp:php:setParentObjectphp(php$parentphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$itemphp-php>setParentObjectphp(php$parentphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp PDFphp elementphp tophp PHPphp typephp.
php php php php php php*
php php php php php php*php Dictionaryphp isphp returnedphp asphp anphp associativephp array
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp toPhpphp(php)
php php php php php{
php php php php php php php php php$phpArrayphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$phpArrayphp[php]php php=php php$itemphp-php>toPhpphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$phpArrayphp;
php php php php php}
php}
