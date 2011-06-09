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
php php*php php@versionphp php php php php$Idphp:php ElementFactoryphp.phpphp php2php2php7php9php7php php2php0php1php0php-php0php8php-php0php6php php1php5php:php0php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp/Interfacephp.phpphp'php;

php/php*php*
php php*php PDFphp elementphp factoryphp.
php php*php Responsibilityphp isphp tophp logphp PDFphp changes
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_ElementFactoryphp implementsphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp modifiedphp objectsphp.
php php php php php php*php Alsophp containsphp newphp andphp removedphp objects
php php php php php php*
php php php php php php*php Arrayphp:php ojbectNumberphp php=php>php Zendphp_Pdfphp_Elementphp_Object
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_modifiedObjectsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp removedphp objects
php php php php php php*
php php php php php php*php Arrayphp:php ojbectNumberphp php=php>php Zendphp_Pdfphp_Elementphp_Object
php php php php php php*
php php php php php php*php php@varphp SplObjectStorage
php php php php php php*php/
php php php php privatephp php$php_removedObjectsphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp registeredphp objectsphp.
php php php php php php*php Usedphp forphp resourcesphp cleanphp upphp whenphp factoryphp isphp destroyedphp.
php php php php php php*
php php php php php php*php Arrayphp ofphp Zendphp_Pdfphp_Elementphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_registeredObjectsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php PDFphp objectphp counterphp.
php php php php php php*php Actuallyphp itphp'sphp anphp objectphp numberphp forphp newphp PDFphp object
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_objectCountphp;


php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp attachedphp objectphp factoriesphp.
php php php php php php*php Arrayphp ofphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_attachedFactoriesphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Factoryphp internalphp id
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_factoryIdphp;

php php php php php/php*php*
php php php php php php*php Identityphp,php usedphp forphp factoryphp idphp generation
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp staticphp php$php_identityphp php=php php0php;


php php php php php/php*php*
php php php php php php*php Internalphp cachephp tophp savephp calculatedphp shifts
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_shiftCalculationCachephp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objCount
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$objCountphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectCountphp php php php php=php php(intphp)php$objCountphp;
php php php php php php php php php$thisphp-php>php_factoryIdphp php php php php php php=php selfphp:php:php$php_identityphp+php+php;
php php php php php php php php php$thisphp-php>php_removedObjectsphp php=php newphp SplObjectStoragephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp factory
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getFactoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp generator
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objCount
php php php php php php*php php@returnphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php staticphp publicphp functionphp createFactoryphp(php$objCountphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/ElementFactoryphp/Proxyphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Pdfphp_ElementFactoryphp_Proxyphp(newphp Zendphp_Pdfphp_ElementFactoryphp(php$objCountphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp factoryphp andphp cleanphp-upphp resources
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_modifiedObjectsphp php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_removedObjectsphp php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_attachedFactoriesphp php=php nullphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_registeredObjectsphp asphp php$objphp)php php{
php php php php php php php php php php php php php$objphp-php>cleanUpphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_registeredObjectsphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sourcephp factoryphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_ElementFactory
php php php php php php*php/
php php php php publicphp functionphp resolvephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp factoryphp ID
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_factoryIdphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp counter
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objCount
php php php php php php*php/
php php php php publicphp functionphp setObjectCountphp(php$objCountphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectCountphp php=php php(intphp)php$objCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp objectphp counter
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getObjectCountphp(php)
php php php php php{
php php php php php php php php php$countphp php=php php$thisphp-php>php_objectCountphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_attachedFactoriesphp asphp php$attachedphp)php php{
php php php php php php php php php php php php php$countphp php+php=php php$attachedphp-php>getObjectCountphp(php)php php-php php1php;php php/php/php php-php1php asphp php"php0php"php objectphp isphp aphp specialphp casephp andphp sharedphp betweenphp factories
php php php php php php php php php}

php php php php php php php php returnphp php$countphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Attachphp factoryphp tophp thephp currentphp;
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php/
php php php php publicphp functionphp attachphp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp)
php php php php php{
php php php php php php php php ifphp php(php php$factoryphp php=php=php=php php$thisphp php|php|php issetphp(php$thisphp-php>php_attachedFactoriesphp[php$factoryphp-php>getIdphp(php)php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Donphp'tphp attachphp factoryphp twicephp.
php php php php php php php php php php php php php php*php Wephp dophp notphp checkphp recusivelyphp becausephp ofphp naturephp ofphp attachphp operation
php php php php php php php php php php php php php php*php php(Pagesphp arephp alwaysphp attachedphp tophp thephp Documentsphp,php Fontsphp arephp alwaysphp attached
php php php php php php php php php php php php php php*php tophp thephp pagesphp evenphp ifphp pagesphp alreadyphp usephp Documentphp levelphp objectphp factoryphp andphp sophp onphp)
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_attachedFactoriesphp[php$factoryphp-php>getIdphp(php)php]php php=php php$factoryphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatephp objectphp enumerationphp shiftphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp calculateShiftphp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp)
php php php php php{
php php php php php php php php ifphp php(php$factoryphp php=php=php=php php$thisphp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_shiftCalculationCachephp[php$factoryphp-php>php_factoryIdphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_shiftCalculationCachephp[php$factoryphp-php>php_factoryIdphp]php;
php php php php php php php php php}

php php php php php php php php php$shiftphp php=php php$thisphp-php>php_objectCountphp php-php php1php;

php php php php php php php php foreachphp php(php$thisphp-php>php_attachedFactoriesphp asphp php$subFactoryphp)php php{
php php php php php php php php php php php php php$subFactoryShiftphp php=php php$subFactoryphp-php>calculateShiftphp(php$factoryphp)php;

php php php php php php php php php php php php ifphp php(php$subFactoryShiftphp php!php=php php-php1php)php php{
php php php php php php php php php php php php php php php php php/php/php contextphp found
php php php php php php php php php php php php php php php php php$thisphp-php>php_shiftCalculationCachephp[php$factoryphp-php>php_factoryIdphp]php php=php php$shiftphp php+php php$subFactoryShiftphp;
php php php php php php php php php php php php php php php php returnphp php$shiftphp php+php php$subFactoryShiftphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$shiftphp php+php=php php$subFactoryphp-php>getObjectCountphp(php)php-php1php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_shiftCalculationCachephp[php$factoryphp-php>php_factoryIdphp]php php=php php-php1php;
php php php php php php php php returnphp php-php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp enumerationphp shiftphp cachephp.
php php php php php php*php Hasphp tophp bephp usedphp afterphp PDFphp renderphp operationphp tophp letphp followedphp updatesphp bephp correctphp.
php php php php php php*php/
php php php php publicphp functionphp cleanEnumerationShiftCachephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_shiftCalculationCachephp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_attachedFactoriesphp asphp php$attachedphp)php php{
php php php php php php php php php php php php php$attachedphp-php>cleanEnumerationShiftCachephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrivephp objectphp enumerationphp shiftphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getEnumerationShiftphp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp)
php php php php php{
php php php php php php php php ifphp php(php(php$shiftphp php=php php$thisphp-php>calculateShiftphp(php$factoryphp)php)php php=php=php php-php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp objectphp contextphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$shiftphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp objectphp asphp modifiedphp inphp contextphp ofphp currentphp factoryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$obj
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp markAsModifiedphp(Zendphp_Pdfphp_Elementphp_Objectphp php$objphp)
php php php php php{
php php php php php php php php ifphp php(php$objphp-php>getFactoryphp(php)php php!php=php=php php$thisphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp isphp notphp generatedphp byphp thisphp factoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_modifiedObjectsphp[php$objphp-php>getObjNumphp(php)php]php php=php php$objphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Removephp objectphp inphp contextphp ofphp currentphp factoryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$obj
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp removephp(Zendphp_Pdfphp_Elementphp_Objectphp php$objphp)
php php php php php{
php php php php php php php php ifphp php(php!php$objphp-php>compareFactoryphp(php$thisphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp isphp notphp generatedphp byphp thisphp factoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_modifiedObjectsphp[php$objphp-php>getObjNumphp(php)php]php php=php php$objphp;
php php php php php php php php php$thisphp-php>php_removedObjectsphp-php>attachphp(php$objphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Generatephp newphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*
php php php php php php*php php@todophp Reusagephp ofphp thephp freedphp objectphp.php Itphp'sphp notphp aphp supportphp ofphp newphp featurephp,php butphp onlyphp improvementphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$objectValue
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp newObjectphp(Zendphp_Pdfphp_Elementphp php$objectValuephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp.phpphp'php;
php php php php php php php php php$objphp php=php newphp Zendphp_Pdfphp_Elementphp_Objectphp(php$objectValuephp,php php$thisphp-php>php_objectCountphp+php+php,php php0php,php php$thisphp)php;
php php php php php php php php php$thisphp-php>php_modifiedObjectsphp[php$objphp-php>getObjNumphp(php)php]php php=php php$objphp;
php php php php php php php php returnphp php$objphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp newphp Zendphp_Pdfphp_Elementphp_Objectphp_Stream
php php php php php php*
php php php php php php*php php@todophp Reusagephp ofphp thephp freedphp objectphp.php Itphp'sphp notphp aphp supportphp ofphp newphp featurephp,php butphp onlyphp improvementphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$objectValue
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Objectphp_Stream
php php php php php php*php/
php php php php publicphp functionphp newStreamObjectphp(php$streamValuephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp/Streamphp.phpphp'php;
php php php php php php php php php$objphp php=php newphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp(php$streamValuephp,php php$thisphp-php>php_objectCountphp+php+php,php php0php,php php$thisphp)php;
php php php php php php php php php$thisphp-php>php_modifiedObjectsphp[php$objphp-php>getObjNumphp(php)php]php php=php php$objphp;
php php php php php php php php returnphp php$objphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Enumeratephp modifiedphp objectsphp.
php php php php php php*php Returnsphp arrayphp ofphp Zendphp_Pdfphp_UpdateInfoContainer
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$rootFactory
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listModifiedObjectsphp(php$rootFactoryphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$rootFactoryphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$rootFactoryphp php=php php$thisphp;
php php php php php php php php php php php php php$shiftphp php=php php0php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$shiftphp php=php php$rootFactoryphp-php>getEnumerationShiftphp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php ksortphp(php$thisphp-php>php_modifiedObjectsphp)php;

php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/UpdateInfoContainerphp.phpphp'php;
php php php php php php php php foreachphp php(php$thisphp-php>php_modifiedObjectsphp asphp php$objNumphp php=php>php php$objphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_removedObjectsphp-php>containsphp(php$objphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$objNumphp+php$shiftphp]php php=php newphp Zendphp_Pdfphp_UpdateInfoContainerphp(php$objNumphp php+php php$shiftphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objphp-php>getGenNumphp(php)php+php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resultphp[php$objNumphp+php$shiftphp]php php=php newphp Zendphp_Pdfphp_UpdateInfoContainerphp(php$objNumphp php+php php$shiftphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objphp-php>getGenNumphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objphp-php>dumpphp(php$rootFactoryphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_attachedFactoriesphp asphp php$factoryphp)php php{
php php php php php php php php php php php php php$resultphp php+php=php php$factoryphp-php>listModifiedObjectsphp(php$rootFactoryphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp objectphp inphp thephp factory
php php php php php php*
php php php php php php*php Itphp'sphp usedphp tophp clearphp php"parentphp objectphp"php referenciesphp whenphp factoryphp isphp closedphp andphp cleanphp upphp resources
php php php php php php*
php php php php php php*php php@paramphp stringphp php$refString
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp php$obj
php php php php php php*php/
php php php php publicphp functionphp registerObjectphp(Zendphp_Pdfphp_Elementphp_Objectphp php$objphp,php php$refStringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registeredObjectsphp[php$refStringphp]php php=php php$objphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp objectphp specifiedphp byphp reference
php php php php php php*
php php php php php php*php php@paramphp stringphp php$refString
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Objectphp|null
php php php php php php*php/
php php php php publicphp functionphp fetchObjectphp(php$refStringphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_registeredObjectsphp[php$refStringphp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_registeredObjectsphp[php$refStringphp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp ifphp PDFphp filephp wasphp modified
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_modifiedObjectsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_attachedFactoriesphp asphp php$subFactoryphp)php php{
php php php php php php php php php php php php ifphp php(php$subFactoryphp-php>isModifiedphp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}

