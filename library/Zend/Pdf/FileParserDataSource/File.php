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
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_FileParserDataSourcephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserDataSourcephp.phpphp'php;


php/php*php*
php php*php Concretephp subclassphp ofphp php{php@linkphp Zendphp_Pdfphp_FileParserDataSourcephp}php thatphp providesphp an
php php*php interfacephp tophp filesystemphp objectsphp.
php php*
php php*php Notephp thatphp thisphp classphp cannotphp bephp usedphp forphp otherphp sourcesphp thatphp mayphp bephp supported
php php*php byphp php{php@linkphp fopenphp(php)php}php php(throughphp URLphp wrappersphp)php.php Itphp mayphp bephp usedphp forphp local
php php*php filesystemphp objectsphp onlyphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_FileParserDataSourcephp_Filephp extendsphp Zendphp_Pdfphp_FileParserDataSource
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Fullyphp-qualifiedphp pathphp tophp thephp filephp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filePathphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Filephp resourcephp handlephp php.
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_fileResourcephp php=php nullphp;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Concretephp Classphp Implementationphp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Validatesphp thephp pathphp tophp thephp filephp,php ensuresphp thatphp itphp isphp readablephp,php thenphp opens
php php php php php php*php itphp forphp readingphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp filephp isphp missingphp orphp cannotphp bephp openedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filePathphp Fullyphp-qualifiedphp pathphp tophp thephp filephp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filePathphp)
php php php php php{
php php php php php php php php ifphp php(php!php php(isphp_filephp(php$filePathphp)php php|php|php isphp_linkphp(php$filePathphp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp filephp pathphp:php php$filePathphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:BADphp_FILEphp_PATHphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php isphp_readablephp(php$filePathphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Filephp isphp notphp readablephp:php php$filePathphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:NOTphp_READABLEphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$thisphp-php>php_sizephp php=php php@filesizephp(php$filePathphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Errorphp whilephp obtainingphp filephp sizephp:php php$filePathphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CANTphp_GETphp_FILEphp_SIZEphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$thisphp-php>php_fileResourcephp php=php php@fopenphp(php$filePathphp,php php'rbphp'php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Cannotphp openphp filephp forphp readingphp:php php$filePathphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CANTphp_OPENphp_FILEphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_filePathphp php=php php$filePathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp destructorphp.
php php php php php php*
php php php php php php*php Closesphp thephp filephp ifphp itphp hadphp beenphp successfullyphp openedphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_fileResourcephp)php)php php{
php php php php php php php php php php php php php@fclosephp(php$thisphp-php>php_fileResourcephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp specifiedphp numberphp ofphp rawphp bytesphp fromphp thephp filephp atphp thephp byte
php php php php php php*php offsetphp ofphp thephp currentphp readphp positionphp.
php php php php php php*
php php php php php php*php Advancesphp thephp readphp positionphp byphp thephp numberphp ofphp bytesphp readphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp anphp errorphp wasphp encounteredphp whilephp readingphp thephp filephp or
php php php php php php*php ifphp therephp isphp insufficientphp dataphp tophp completelyphp fulfillphp thephp requestphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp readphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readBytesphp(php$byteCountphp)
php php php php php{
php php php php php php php php php$bytesphp php=php php@freadphp(php$thisphp-php>php_fileResourcephp,php php$byteCountphp)php;
php php php php php php php php ifphp php(php$bytesphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unexpectedphp errorphp whilephp readingphp filephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:ERRORphp_DURINGphp_READphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(strlenphp(php$bytesphp)php php!php=php php$byteCountphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Insufficientphp dataphp tophp readphp php$byteCountphp bytesphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INSUFFICIENTphp_DATAphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_offsetphp php+php=php php$byteCountphp;
php php php php php php php php returnphp php$bytesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp entirephp contentsphp ofphp thephp filephp asphp aphp stringphp.
php php php php php php*
php php php php php php*php Preservesphp thephp currentphp filephp seekphp positionphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readAllBytesphp(php)
php php php php php{
php php php php php php php php returnphp filephp_getphp_contentsphp(php$thisphp-php>php_filePathphp)php;
php php php php php}


php php php/php*php Objectphp Magicphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp fullphp filesystemphp pathphp ofphp thephp filephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filePathphp;
php php php php php}


php php php/php*php Primitivephp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Seeksphp thephp filephp readphp positionphp tophp thephp specifiedphp bytephp offsetphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp filephp pointerphp cannotphp bephp movedphp orphp ifphp itphp is
php php php php php php*php movedphp beyondphp EOFphp php(endphp ofphp filephp)php.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offsetphp Destinationphp bytephp offsetphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveToOffsetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_offsetphp php=php=php php$offsetphp)php php{
php php php php php php php php php php php php returnphp;php php php php php/php/php Notphp movingphp;php dophp nothingphp.
php php php php php php php php php}
php php php php php php php php parentphp:php:moveToOffsetphp(php$offsetphp)php;
php php php php php php php php php$resultphp php=php php@fseekphp(php$thisphp-php>php_fileResourcephp,php php$offsetphp,php SEEKphp_SETphp)php;
php php php php php php php php ifphp php(php$resultphp php!php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Errorphp whilephp settingphp newphp filephp positionphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:CANTphp_SETphp_FILEphp_POSITIONphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(feofphp(php$thisphp-php>php_fileResourcephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Movedphp beyondphp thephp endphp ofphp thephp filephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:MOVEphp_BEYONDphp_ENDphp_OFphp_FILEphp)php;
php php php php php php php php php}
php php php php php}

php}
