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
php php*php php@versionphp php php php php$Idphp:php FileParserDataSourcephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp helperphp classphp forphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php thatphp providesphp the
php php*php dataphp sourcephp forphp parsingphp.
php php*
php php*php Concretephp subclassesphp allowphp forphp parsingphp ofphp inphp-memoryphp,php filesystemphp,php andphp other
php php*php sourcesphp throughphp aphp commonphp APIphp.php Thesephp subclassesphp alsophp takephp carephp ofphp error
php php*php handlingphp andphp otherphp mundanephp tasksphp.
php php*
php php*php Subclassesphp mustphp implementphp atphp minimumphp php{php@linkphp php_php_constructphp(php)php}php,
php php*php php{php@linkphp php_php_destructphp(php)php}php,php php{php@linkphp readBytesphp(php)php}php,php andphp php{php@linkphp readAllBytesphp(php)php}php.
php php*php Subclassesphp shouldphp alsophp overridephp php{php@linkphp moveToOffsetphp(php)php}php and
php php*php php{php@linkphp php_php_toStringphp(php)php}php asphp appropriatephp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_FileParserDataSource
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Totalphp sizephp inphp bytesphp ofphp thephp dataphp sourcephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_sizephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Bytephp offsetphp ofphp thephp currentphp readphp positionphp withinphp thephp dataphp sourcephp.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_offsetphp php=php php0php;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Abstractphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.php Opensphp thephp dataphp sourcephp forphp parsingphp.
php php php php php php*
php php php php php php*php Mustphp setphp php$thisphp-php>php_sizephp tophp thephp totalphp sizephp inphp bytesphp ofphp thephp dataphp sourcephp.
php php php php php php*
php php php php php php*php Uponphp returnphp thephp dataphp sourcephp canphp bephp interrogatedphp usingphp thephp primitive
php php php php php php*php methodsphp describedphp herephp.
php php php php php php*
php php php php php php*php Ifphp thephp dataphp sourcephp cannotphp bephp openedphp forphp anyphp reasonphp php(suchphp asphp insufficient
php php php php php php*php permissionsphp,php missingphp filephp,php etcphp.php)php,php willphp throwphp anphp appropriatephp exceptionphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp php_php_constructphp(php)php;

php php php php php/php*php*
php php php php php php*php Objectphp destructorphp.php Closesphp thephp dataphp sourcephp.
php php php php php php*
php php php php php php*php Mayphp alsophp performphp cleanupphp tasksphp suchphp asphp deletingphp temporaryphp filesphp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp php_php_destructphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp specifiedphp numberphp ofphp rawphp bytesphp fromphp thephp dataphp sourcephp atphp the
php php php php php php*php bytephp offsetphp ofphp thephp currentphp readphp positionphp.
php php php php php php*
php php php php php php*php Mustphp advancephp thephp readphp positionphp byphp thephp numberphp ofphp bytesphp readphp byphp updating
php php php php php php*php php$thisphp-php>php_offsetphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp therephp isphp insufficientphp dataphp tophp completelyphp fulfill
php php php php php php*php thephp requestphp orphp ifphp anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp readphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp readBytesphp(php$byteCountphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp entirephp contentsphp ofphp thephp dataphp sourcephp asphp aphp stringphp.
php php php php php php*
php php php php php php*php Thisphp methodphp mayphp bephp calledphp atphp anyphp timephp andphp sophp mustphp preservephp thephp byte
php php php php php php*php offsetphp ofphp thephp readphp positionphp,php bothphp throughphp php$thisphp-php>php_offsetphp andphp whatever
php php php php php php*php otherphp additionalphp pointersphp php(suchphp asphp thephp seekphp positionphp ofphp aphp filephp pointerphp)
php php php php php php*php thatphp mightphp bephp usedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp readAllBytesphp(php)php;


php php php/php*php Objectphp Magicphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp aphp descriptionphp ofphp thephp objectphp forphp debuggingphp purposesphp.
php php php php php php*
php php php php php php*php Subclassesphp shouldphp overridephp thisphp methodphp tophp providephp aphp morephp specific
php php php php php php*php descriptionphp ofphp thephp actualphp objectphp beingphp representedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp getphp_classphp(php$thisphp)php;
php php php php php}


php php php/php*php Accessorsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp bytephp offsetphp ofphp thephp currentphp readphp positionphp withinphp thephp data
php php php php php php*php sourcephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getOffsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_offsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp sizephp inphp bytesphp ofphp thephp dataphp sourcephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sizephp;
php php php php php}


php php php/php*php Primitivephp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Movesphp thephp currentphp readphp positionphp tophp thephp specifiedphp bytephp offsetphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp youphp attemptphp tophp movephp beforephp thephp beginningphp orphp beyond
php php php php php php*php thephp endphp ofphp thephp dataphp sourcephp.
php php php php php php*
php php php php php php*php Ifphp aphp subclassphp needsphp tophp performphp additionalphp tasksphp php(suchphp asphp performingphp a
php php php php php php*php fseekphp(php)php onphp aphp filesystemphp sourcephp)php,php itphp shouldphp dophp sophp afterphp callingphp this
php php php php php php*php parentphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offsetphp Destinationphp bytephp offsetphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveToOffsetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_offsetphp php=php=php php$offsetphp)php php{
php php php php php php php php php php php php returnphp;php php php php php/php/php Notphp movingphp;php dophp nothingphp.
php php php php php php php php php}
php php php php php php php php ifphp php(php$offsetphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Attemptphp tophp movephp beforephp startphp ofphp dataphp sourcephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:MOVEphp_BEFOREphp_STARTphp_OFphp_FILEphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$offsetphp php>php=php php$thisphp-php>php_sizephp)php php{php php php php php/php/php Offsetsphp arephp zerophp-basedphp.
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Attemptphp tophp movephp beyondphp endphp ofphp dataphp sourcephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:MOVEphp_BEYONDphp_ENDphp_OFphp_FILEphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_offsetphp php=php php$offsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shiftsphp thephp currentphp readphp positionphp withinphp thephp dataphp sourcephp byphp thephp specified
php php php php php php*php numberphp ofphp bytesphp.
php php php php php php*
php php php php php php*php Youphp mayphp movephp forwardphp php(positivephp numbersphp)php orphp backwardphp php(negativephp numbersphp)php.
php php php php php php*php Throwsphp anphp exceptionphp youphp attemptphp tophp movephp beforephp thephp beginningphp orphp beyond
php php php php php php*php thephp endphp ofphp thephp dataphp sourcephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp skipphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp skipBytesphp(php$byteCountphp)
php php php php php{
php php php php php php php php php$thisphp-php>moveToOffsetphp(php$thisphp-php>php_offsetphp php+php php$byteCountphp)php;
php php php php php}
php}
