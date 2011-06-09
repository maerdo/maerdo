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
php php*php php@versionphp php php php php$Idphp:php Referencephp.phpphp php2php2php7php9php7php php2php0php1php0php-php0php8php-php0php6php php1php5php:php0php2php:php1php2Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Nullphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;

php/php*php*
php php*php PDFphp filephp php'referencephp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Referencephp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*php Thephp referencephp tophp thephp object
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php privatephp php$php_refphp;

php php php php php/php*php*
php php php php php php*php Objectphp numberphp withinphp PDFphp file
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_objNumphp;

php php php php php/php*php*
php php php php php php*php Generationphp number
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_genNumphp;

php php php php php/php*php*
php php php php php php*php Referencephp context
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Referencephp_Context
php php php php php php*php/
php php php php privatephp php$php_contextphp;


php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp factoryphp.
php php php php php php*
php php php php php php*php Itphp'sphp thephp samephp asphp referencedphp objectphp factoryphp,php butphp wephp savephp itphp herephp tophp avoid
php php php php php php*php unnecessaryphp dereferencingphp,php whechphp canphp producephp cascadephp dereferencingphp andphp parsingphp.
php php php php php php*php Thephp samephp forphp duplicationphp ofphp getFactoryphp(php)php functionphp.php Itphp canphp bephp processedphp byphp php_php_callphp(php)
php php php php php php*php methodphp,php butphp wephp catchphp itphp herephp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_ElementFactory
php php php php php php*php/
php php php php privatephp php$php_factoryphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp:
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objNum
php php php php php php*php php@paramphp integerphp php$genNum
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$context
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factory
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$objNumphp,php php$genNumphp php=php php0php,php Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$contextphp,php Zendphp_Pdfphp_ElementFactoryphp php$factoryphp)
php php php php php{
php php php php php php php php ifphp php(php php!php(isphp_integerphp(php$objNumphp)php php&php&php php$objNumphp php>php php0php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp numberphp mustphp bephp positivephp integerphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php php!php(isphp_integerphp(php$genNumphp)php php&php&php php$genNumphp php>php=php php0php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Generationphp numberphp mustphp bephp nonphp-negativephp integerphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_objNumphp php php=php php$objNumphp;
php php php php php php php php php$thisphp-php>php_genNumphp php php=php php$genNumphp;
php php php php php php php php php$thisphp-php>php_refphp php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;
php php php php php php php php php$thisphp-php>php_factoryphp php=php php$factoryphp;
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
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_refphp-php>getTypephp(php)php;
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
php php php php php php*php Dereferencephp.
php php php php php php*php Takephp inderectphp objectphp,php takephp php$valuephp memberphp ofphp thisphp objectphp php(mustphp bephp Zendphp_Pdfphp_Elementphp)php,
php php php php php php*php takephp referencephp tophp thephp php$valuephp memberphp ofphp thisphp objectphp andphp assignphp itphp to
php php php php php php*php php$valuephp memberphp ofphp currentphp PDFphp Referencephp object
php php php php php php*php php$objphp canphp bephp null
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_dereferencephp(php)
php php php php php{
php php php php php php php php ifphp php(php(php$objphp php=php php$thisphp-php>php_factoryphp-php>fetchObjectphp(php$thisphp-php>php_objNumphp php.php php'php php'php php.php php$thisphp-php>php_genNumphp)php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$objphp php=php php$thisphp-php>php_contextphp-php>getParserphp(php)php-php>getObjectphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>getRefTablephp(php)php-php>getOffsetphp(php$thisphp-php>php_objNumphp php.php php'php php'php php.php php$thisphp-php>php_genNumphp php.php php'php Rphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_context
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$objphp php=php=php=php nullphp php)php php{
php php php php php php php php php php php php php$thisphp-php>php_refphp php=php newphp Zendphp_Pdfphp_Elementphp_Nullphp(php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$objphp-php>toStringphp(php)php php!php=php php$thisphp-php>php_objNumphp php.php php'php php'php php.php php$thisphp-php>php_genNumphp php.php php'php Rphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Incorrectphp referencephp tophp thephp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_refphp php=php php$objphp;
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
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Thisphp codephp duplicatesphp codephp inphp Zendphp_Pdfphp_Elementphp_Objectphp classphp,
php php php php php php php php php/php/php butphp allowsphp tophp avoidphp unnecessaryphp methodphp callphp inphp mostphp cases
php php php php php php php php php$idphp php=php splphp_objectphp_hashphp(php$thisphp-php>php_refphp)php;
php php php php php php php php ifphp php(issetphp(php$processedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php/php/php Dophp nothingphp ifphp objectphp isphp alreadyphp processed
php php php php php php php php php php php php php/php/php returnphp it
php php php php php php php php php php php php returnphp php$processedphp[php$idphp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_refphp-php>makeClonephp(php$factoryphp,php php$processedphp,php php$modephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp objectphp asphp modifiedphp,php tophp includephp itphp intophp newphp PDFphp filephp segmentphp.
php php php php php php*php/
php php php php publicphp functionphp touchphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_refphp-php>touchphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp objectphp,php whichphp canphp bephp usedphp tophp identifyphp objectphp andphp itsphp referencesphp identity
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp getObjectphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_refphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_refphp-php>php$propertyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_refphp-php>php$propertyphp php=php php$valuephp;
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
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_refphp,php php$methodphp)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp upphp resources
php php php php php php*php/
php php php php publicphp functionphp cleanUpphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_refphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp PDFphp elementphp tophp PHPphp typephp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp toPhpphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_refphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dereferencephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_refphp-php>toPhpphp(php)php;
php php php php php}
php}
