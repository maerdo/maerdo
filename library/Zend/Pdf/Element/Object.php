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
php php*php php@versionphp php php php php$Idphp:php Objectphp.phpphp php2php2php8php4php4php php2php0php1php0php-php0php8php-php1php6php php1php5php:php3php8php:php5php3Zphp alexanderphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*
php php*php PDFphp filephp php'indirectphp objectphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Objectphp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php protectedphp php$php_valuephp;

php php php php php/php*php*
php php php php php php*php Objectphp numberphp withinphp PDFphp file
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_objNumphp;

php php php php php/php*php*
php php php php php php*php Generationphp number
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_genNumphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp factoryphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_ElementFactory
php php php php php php*php/
php php php php protectedphp php$php_factoryphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$val
php php php php php php*php php@paramphp integerphp php$objNum
php php php php php php*php php@paramphp integerphp php$genNum
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factory
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$valphp,php php$objNumphp,php php$genNumphp,php Zendphp_Pdfphp_ElementFactoryphp php$factoryphp)
php php php php php{
php php php php php php php php ifphp php(php$valphp instanceofphp selfphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp numberphp mustphp notphp bephp anphp instancephp ofphp Zendphp_Pdfphp_Elementphp_Objectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php php!php(isphp_integerphp(php$objNumphp)php php&php&php php$objNumphp php>php php0php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp numberphp mustphp bephp positivephp integerphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php php!php(isphp_integerphp(php$genNumphp)php php&php&php php$genNumphp php>php=php php0php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Generationphp numberphp mustphp bephp nonphp-negativephp integerphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuephp php php php=php php$valphp;
php php php php php php php php php$thisphp-php>php_objNumphp php php=php php$objNumphp;
php php php php php php php php php$thisphp-php>php_genNumphp php php=php php$genNumphp;
php php php php php php php php php$thisphp-php>php_factoryphp php=php php$factoryphp;

php php php php php php php php php$thisphp-php>setParentObjectphp(php$thisphp)php;

php php php php php php php php php$factoryphp-php>registerObjectphp(php$thisphp,php php$objNumphp php.php php'php php'php php.php php$genNumphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp,php thatphp objectphp isphp generatedphp byphp specifiedphp factory
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_ElementFactory
php php php php php php*php/
php php php php publicphp functionphp getFactoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_factoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>getTypephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp objectphp number
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getObjNumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objNumphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp generationphp number
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getGenNumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_genNumphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp referencephp tophp thephp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$factoryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$shiftphp php=php php0php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$shiftphp php=php php$factoryphp-php>getEnumerationShiftphp(php$thisphp-php>php_factoryphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_objNumphp php+php php$shiftphp php.php php'php php'php php.php php$thisphp-php>php_genNumphp php.php php'php Rphp'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Dumpphp objectphp tophp aphp stringphp tophp savephp withinphp PDFphp filephp.
php php php php php php*
php php php php php php*php php$factoryphp parameterphp definesphp operationphp contextphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp dumpphp(Zendphp_Pdfphp_ElementFactoryphp php$factoryphp)
php php php php php{
php php php php php php php php php$shiftphp php=php php$factoryphp-php>getEnumerationShiftphp(php$thisphp-php>php_factoryphp)php;

php php php php php php php php returnphp php php$thisphp-php>php_objNumphp php+php php$shiftphp php.php php"php php"php php.php php$thisphp-php>php_genNumphp php.php php"php objphp php\nphp"
php php php php php php php php php php php php php php.php php php$thisphp-php>php_valuephp-php>toStringphp(php$factoryphp)php php.php php"php\nphp"
php php php php php php php php php php php php php php.php php"endobjphp\nphp"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>php$propertyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp-php>php$propertyphp php=php php$valuephp;
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
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_valuephp,php php$methodphp)php,php php$argsphp)php;
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

php php php php php php php php php/php/php Createphp obectphp withphp nullphp valuephp andphp registerphp itphp inphp php$processedphp container
php php php php php php php php php$processedphp[php$idphp]php php=php php$clonedObjectphp php=php php$factoryphp-php>newObjectphp(newphp Zendphp_Pdfphp_Elementphp_Nullphp(php)php)php;

php php php php php php php php php/php/php Pecursivelyphp processphp actualphp data
php php php php php php php php php$clonedObjectphp-php>php_valuephp php=php php$thisphp-php>php_valuephp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;

php php php php php php php php ifphp php(php$clonedObjectphp-php>php_valuephp instanceofphp Zendphp_Pdfphp_Elementphp_Nullphp)php php{
php php php php php php php php php php php php php/php/php Dophp notphp storephp nullphp objectsphp withinphp php$processedphp containerphp sincephp itphp mayphp bephp filtered
php php php php php php php php php php php php php/php/php byphp php$modephp parameterphp butphp usedphp inphp somephp futurephp pass
php php php php php php php php php php php php unsetphp(php$processedphp[php$idphp]php)php;

php php php php php php php php php php php php php/php/php Returnphp directphp nullphp object
php php php php php php php php php php php php returnphp php$clonedObjectphp-php>php_valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$clonedObjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp objectphp asphp modifiedphp,php tophp includephp itphp intophp newphp PDFphp filephp segment
php php php php php php*php/
php php php php publicphp functionphp touchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_factoryphp-php>markAsModifiedphp(php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp objectphp,php whichphp canphp bephp usedphp tophp identifyphp objectphp andphp itsphp referencesphp identity
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp getObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp upphp resourcesphp,php usedphp byphp object
php php php php php php*php/
php php php php publicphp functionphp cleanUpphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp PDFphp elementphp tophp PHPphp typephp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp toPhpphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>toPhpphp(php)php;
php php php php php}
php}
