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
php php*php php@versionphp php php php php$Idphp:php FileParserphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp utilityphp classphp forphp parsingphp binaryphp filesphp.
php php*
php php*php Providesphp aphp libraryphp ofphp methodsphp tophp quicklyphp navigatephp andphp extractphp variousphp data
php php*php typesphp php(signedphp andphp unsignedphp integersphp,php floatingphp-php andphp fixedphp-pointphp numbersphp,
php php*php stringsphp,php etcphp.php)php fromphp thephp filephp.
php php*
php php*php Filephp accessphp isphp managedphp viaphp aphp php{php@linkphp Zendphp_Pdfphp_FileParserDataSourcephp}php objectphp.
php php*php Thisphp allowsphp thephp samephp parserphp codephp tophp workphp withphp manyphp differentphp dataphp sourcesphp:
php php*php inphp-memoryphp objectsphp,php filesystemphp filesphp,php etcphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_FileParser
php{
php php php/php*php*php*php*php Classphp Constantsphp php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Littlephp-endianphp bytephp orderphp php(php0xphp0php4php php0xphp0php3php php0xphp0php2php php0xphp0php1php)php.
php php php php php php*php/
php php php php constphp BYTEphp_ORDERphp_LITTLEphp_ENDIANphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Bigphp-endianphp bytephp orderphp php(php0xphp0php1php php0xphp0php2php php0xphp0php3php php0xphp0php4php)php.
php php php php php php*php/
php php php php constphp BYTEphp_ORDERphp_BIGphp_ENDIANphp php php php php=php php1php;



php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp thatphp thephp filephp hasphp passedphp aphp cursoryphp validationphp checkphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isScreenedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp thatphp thephp filephp hasphp beenphp sucessfullyphp parsedphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isParsedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Objectphp representingphp thephp dataphp sourcephp tophp bephp parsedphp.
php php php php php php*php php@varphp Zendphp_Pdfphp_FileParserDataSource
php php php php php php*php/
php php php php protectedphp php$php_dataSourcephp php=php nullphp;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Abstractphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Performsphp aphp cursoryphp checkphp tophp verifyphp thatphp thephp binaryphp filephp isphp inphp thephp expected
php php php php php php*php formatphp.php Intendedphp tophp quicklyphp weedphp outphp obviouslyphp bogusphp filesphp.
php php php php php php*
php php php php php php*php Mustphp setphp php$thisphp-php>php_isScreenedphp tophp truephp ifphp successfulphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp screenphp(php)php;

php php php php php/php*php*
php php php php php php*php Readsphp andphp parsesphp thephp completephp binaryphp filephp.
php php php php php php*
php php php php php php*php Mustphp setphp php$thisphp-php>php_isParsedphp tophp truephp ifphp successfulphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp parsephp(php)php;


php php php/php*php Objectphp Lifecyclephp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Verifiesphp thatphp thephp dataphp sourcephp hasphp beenphp properlyphp initializedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserDataSourcephp php$dataSource
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_FileParserDataSourcephp php$dataSourcephp)
php php php php php{
php php php php php php php php ifphp php(php$dataSourcephp-php>getSizephp(php)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Thephp dataphp sourcephp hasphp notphp beenphp properlyphp initializedphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:BADphp_DATAphp_SOURCEphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataSourcephp php=php php$dataSourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp destructorphp.
php php php php php php*
php php php php php php*php Discardsphp thephp dataphp sourcephp objectphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataSourcephp php=php nullphp;
php php php php php}


php php php/php*php Accessorsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp thephp filephp hasphp passedphp aphp cursoryphp validationphp checkphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isScreenedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isScreenedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp thephp filephp hasphp beenphp successfullyphp parsedphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isParsedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isParsedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp dataphp sourcephp objectphp representingphp thephp filephp beingphp parsedphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_FileParserDataSource
php php php php php php*php/
php php php php publicphp functionphp getDataSourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataSourcephp;
php php php php php}


php php php/php*php Primitivephp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Conveniencephp wrapperphp forphp thephp dataphp sourcephp objectphp'sphp moveToOffsetphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offsetphp Destinationphp bytephp offsetphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveToOffsetphp(php$offsetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataSourcephp-php>moveToOffsetphp(php$offsetphp)php;
php php php php php}

php php php php publicphp functionphp getOffsetphp(php)php php{
php php php php php php php returnphp php$thisphp-php>php_dataSourcephp-php>getOffsetphp(php)php;
php php php php php}

php php php php publicphp functionphp getSizephp(php)php php{
php php php php php php php returnphp php$thisphp-php>php_dataSourcephp-php>getSizephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp wrapperphp forphp thephp dataphp sourcephp objectphp'sphp readBytesphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp readphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readBytesphp(php$byteCountphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$byteCountphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp wrapperphp forphp thephp dataphp sourcephp objectphp'sphp skipBytesphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp skipphp.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp skipBytesphp(php$byteCountphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataSourcephp-php>skipBytesphp(php$byteCountphp)php;
php php php php php}


php php php/php*php Parserphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Readsphp thephp signedphp integerphp valuephp fromphp thephp binaryphp filephp atphp thephp currentphp byte
php php php php php php*php offsetphp.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$sizephp Sizephp ofphp integerphp inphp bytesphp:php php1php-php4
php php php php php php*php php@paramphp integerphp php$byteOrderphp php(optionalphp)php Bigphp-php orphp littlephp-endianphp bytephp orderphp.
php php php php php php*php php php Usephp thephp BYTEphp_ORDERphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php.
php php php php php php*php php php Ifphp omittedphp,php usesphp bigphp-endianphp.
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readIntphp(php$sizephp,php php$byteOrderphp php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)
php php php php php{
php php php php php php php php ifphp php(php(php$sizephp <php php1php)php php|php|php php(php$sizephp php>php php4php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp signedphp integerphp sizephp:php php$sizephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INVALIDphp_INTEGERphp_SIZEphp)php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$sizephp)php;
php php php php php php php php php/php*php unpackphp(php)php willphp notphp workphp forphp thisphp methodphp becausephp itphp alwaysphp worksphp in
php php php php php php php php php php*php thephp hostphp bytephp orderphp forphp signedphp integersphp.php Itphp alsophp doesphp notphp allowphp for
php php php php php php php php php php*php variablephp integerphp sizesphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)php php{
php php php php php php php php php php php php php$numberphp php=php ordphp(php$bytesphp[php0php]php)php;
php php php php php php php php php php php php ifphp php(php(php$numberphp php&php php0xphp8php0php)php php=php=php php0xphp8php0php)php php{
php php php php php php php php php php php php php php php php php/php*php Thisphp numberphp isphp negativephp.php Extractphp thephp positivephp equivalentphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$numberphp php=php php(php~php php$numberphp)php php&php php0xffphp;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php php$sizephp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$numberphp php=php php(php$numberphp <php<php php8php)php php|php php(php(php~php ordphp(php$bytesphp[php$iphp]php)php)php php&php php0xffphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php*php Nowphp turnphp thisphp backphp intophp aphp negativephp numberphp byphp takingphp the
php php php php php php php php php php php php php php php php php php*php twophp'sphp complementphp php(wephp didnphp'tphp addphp onephp abovephp sophp wonphp't
php php php php php php php php php php php php php php php php php php*php subtractphp itphp belowphp)php.php Thisphp worksphp reliablyphp onphp bothphp php3php2php-php and
php php php php php php php php php php php php php php php php php php*php php6php4php-bitphp systemsphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$numberphp php=php php~php$numberphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php php$sizephp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$numberphp php=php php(php$numberphp <php<php php8php)php php|php ordphp(php$bytesphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_LITTLEphp_ENDIANphp)php php{
php php php php php php php php php php php php php$numberphp php=php ordphp(php$bytesphp[php$sizephp php-php php1php]php)php;
php php php php php php php php php php php php ifphp php(php(php$numberphp php&php php0xphp8php0php)php php=php=php php0xphp8php0php)php php{
php php php php php php php php php php php php php php php php php/php*php Negativephp numberphp.php Seephp discussionphp abovephp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$numberphp php=php php0php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php-php-php$sizephp;php php$iphp php>php=php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php php php php php$numberphp php|php=php php(php(php~php ordphp(php$bytesphp[php$iphp]php)php)php php&php php0xffphp)php <php<php php(php$iphp php*php php8php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$numberphp php=php php~php$numberphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$numberphp php=php php0php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php-php-php$sizephp;php php$iphp php>php=php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php php php php php$numberphp php|php=php ordphp(php$bytesphp[php$iphp]php)php <php<php php(php$iphp php*php php8php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp bytephp orderphp:php php$byteOrderphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INVALIDphp_BYTEphp_ORDERphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$numberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp unsignedphp integerphp valuephp fromphp thephp binaryphp filephp atphp thephp currentphp byte
php php php php php php*php offsetphp.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php NOTEphp:php Ifphp youphp askphp forphp aphp php4php-bytephp unsignedphp integerphp onphp aphp php3php2php-bitphp machinephp,php the
php php php php php php*php resultingphp valuephp WILLphp BEphp SIGNEDphp becausephp PHPphp usesphp signedphp integersphp internally
php php php php php php*php forphp everythingphp.php Tophp guaranteephp portabilityphp,php bephp surephp tophp usephp bitwisephp operators
php php php php php php*php operatorsphp onphp largephp unsignedphp integersphp!
php php php php php php*
php php php php php php*php php@paramphp integerphp php$sizephp Sizephp ofphp integerphp inphp bytesphp:php php1php-php4
php php php php php php*php php@paramphp integerphp php$byteOrderphp php(optionalphp)php Bigphp-php orphp littlephp-endianphp bytephp orderphp.
php php php php php php*php php php Usephp thephp BYTEphp_ORDERphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php.
php php php php php php*php php php Ifphp omittedphp,php usesphp bigphp-endianphp.
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readUIntphp(php$sizephp,php php$byteOrderphp php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)
php php php php php{
php php php php php php php php ifphp php(php(php$sizephp <php php1php)php php|php|php php(php$sizephp php>php php4php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp unsignedphp integerphp sizephp:php php$sizephp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INVALIDphp_INTEGERphp_SIZEphp)php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$sizephp)php;
php php php php php php php php php/php*php unpackphp(php)php isphp aphp bitphp heavyweightphp forphp thisphp simplephp conversionphp.php Just
php php php php php php php php php php*php workphp thephp bytesphp directlyphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)php php{
php php php php php php php php php php php php php$numberphp php=php ordphp(php$bytesphp[php0php]php)php;
php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php php$sizephp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$numberphp php=php php(php$numberphp <php<php php8php)php php|php ordphp(php$bytesphp[php$iphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_LITTLEphp_ENDIANphp)php php{
php php php php php php php php php php php php php$numberphp php=php php0php;
php php php php php php php php php php php php forphp php(php$iphp php=php php-php-php$sizephp;php php$iphp php>php=php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php$numberphp php|php=php ordphp(php$bytesphp[php$iphp]php)php <php<php php(php$iphp php*php php8php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp bytephp orderphp:php php$byteOrderphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INVALIDphp_BYTEphp_ORDERphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$numberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp thephp specifiedphp bitphp isphp setphp inphp thephp integerphp bitfieldphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$bitphp Bitphp numberphp tophp testphp php(iphp.ephp.php php-php php0php-php3php1php)
php php php php php php*php php@paramphp integerphp php$bitField
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isBitSetphp(php$bitphp,php php$bitFieldphp)
php php php php php{
php php php php php php php php php$bitMaskphp php=php php1php <php<php php$bitphp;
php php php php php php php php php$isSetphp php=php php(php(php$bitFieldphp php&php php$bitMaskphp)php php=php=php php$bitMaskphp)php;
php php php php php php php php returnphp php$isSetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp signedphp fixedphp-pointphp numberphp fromphp thephp binaryphp filephp atphp thephp current
php php php php php php*php bytephp offsetphp.
php php php php php php*
php php php php php php*php Commonphp fixedphp-pointphp sizesphp arephp php2php.php1php4php andphp php1php6php.php1php6php.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$mantissaBitsphp Numberphp ofphp bitsphp inphp thephp mantissa
php php php php php php*php php@paramphp integerphp php$fractionBitsphp Numberphp ofphp bitsphp inphp thephp fraction
php php php php php php*php php@paramphp integerphp php$byteOrderphp php(optionalphp)php Bigphp-php orphp littlephp-endianphp bytephp orderphp.
php php php php php php*php php php Usephp thephp BYTEphp_ORDERphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php.
php php php php php php*php php php Ifphp omittedphp,php usesphp bigphp-endianphp.
php php php php php php*php php@returnphp float
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readFixedphp(php$mantissaBitsphp,php php$fractionBitsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$byteOrderphp php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)
php php php php php{
php php php php php php php php php$bitsToReadphp php=php php$mantissaBitsphp php+php php$fractionBitsphp;
php php php php php php php php ifphp php(php(php$bitsToReadphp php%php php8php)php php!php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Fixedphp-pointphp numbersphp arephp wholephp bytesphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:BADphp_FIXEDphp_POINTphp_SIZEphp)php;
php php php php php php php php php}
php php php php php php php php php$numberphp php=php php$thisphp-php>readIntphp(php(php$bitsToReadphp php>php>php php3php)php,php php$byteOrderphp)php php/php php(php1php <php<php php$fractionBitsphp)php;
php php php php php php php php returnphp php$numberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp Unicodephp UTFphp-php1php6php-encodedphp stringphp fromphp thephp binaryphp filephp atphp the
php php php php php php*php currentphp bytephp offsetphp.
php php php php php php*
php php php php php php*php Thephp bytephp orderphp ofphp thephp UTFphp-php1php6php stringphp mustphp bephp specifiedphp.php Youphp mustphp also
php php php php php php*php supplyphp thephp desiredphp resultingphp characterphp setphp.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@todophp Considerphp changingphp php$byteCountphp tophp aphp characterphp countphp.php Theyphp arephp not
php php php php php php*php php php alwaysphp equivalentphp php(inphp thephp casephp ofphp surrogatesphp)php.
php php php php php php*php php@todophp Makephp php$byteOrderphp optionalphp ifphp therephp isphp aphp bytephp-orderphp markphp php(BOMphp)php inphp the
php php php php php php*php php php stringphp beingphp extractedphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp php(charactersphp php*php php2php)php tophp returnphp.
php php php php php php*php php@paramphp integerphp php$byteOrderphp php(optionalphp)php Bigphp-php orphp littlephp-endianphp bytephp orderphp.
php php php php php php*php php php Usephp thephp BYTEphp_ORDERphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php.
php php php php php php*php php php Ifphp omittedphp,php usesphp bigphp-endianphp.
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php Desiredphp resultingphp characterphp setphp.
php php php php php php*php php php Youphp mayphp usephp anyphp characterphp setphp supportedphp byphp php{php@linkphp iconvphp(php)php}php.php Ifphp omittedphp,
php php php php php php*php php php usesphp php'currentphp localephp'php.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringUTFphp1php6php(php$byteCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$byteOrderphp php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$characterSetphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$byteCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$byteCountphp)php;
php php php php php php php php ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp)php php{
php php php php php php php php php php php php ifphp php(php$characterSetphp php=php=php php'UTFphp-php1php6BEphp'php)php php{
php php php php php php php php php php php php php php php php returnphp php$bytesphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp iconvphp(php'UTFphp-php1php6BEphp'php,php php$characterSetphp,php php$bytesphp)php;
php php php php php php php php php}php elsephp ifphp php(php$byteOrderphp php=php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_LITTLEphp_ENDIANphp)php php{
php php php php php php php php php php php php ifphp php(php$characterSetphp php=php=php php'UTFphp-php1php6LEphp'php)php php{
php php php php php php php php php php php php php php php php returnphp php$bytesphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp iconvphp(php'UTFphp-php1php6LEphp'php,php php$characterSetphp,php php$bytesphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Invalidphp bytephp orderphp:php php$byteOrderphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INVALIDphp_BYTEphp_ORDERphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp Macphp Romanphp-encodedphp stringphp fromphp thephp binaryphp filephp atphp thephp current
php php php php php php*php bytephp offsetphp.
php php php php php php*
php php php php php php*php Youphp mustphp supplyphp thephp desiredphp resultingphp characterphp setphp.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp php(charactersphp)php tophp returnphp.
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php Desiredphp resultingphp characterphp setphp.
php php php php php php*php php php Youphp mayphp usephp anyphp characterphp setphp supportedphp byphp php{php@linkphp iconvphp(php)php}php.php Ifphp omittedphp,
php php php php php php*php php php usesphp php'currentphp localephp'php.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringMacRomanphp(php$byteCountphp,php php$characterSetphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$byteCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$byteCountphp)php;
php php php php php php php php ifphp php(php$characterSetphp php=php=php php'MacRomanphp'php)php php{
php php php php php php php php php php php php returnphp php$bytesphp;
php php php php php php php php php}
php php php php php php php php returnphp iconvphp(php'MacRomanphp'php,php php$characterSetphp,php php$bytesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp Pascalphp stringphp fromphp thephp binaryphp filephp atphp thephp currentphp bytephp offsetphp.
php php php php php php*
php php php php php php*php Thephp lengthphp ofphp thephp Pascalphp stringphp isphp determinedphp byphp readingphp thephp lengthphp bytes
php php php php php php*php whichphp preceedphp thephp characterphp dataphp.php Youphp mustphp supplyphp thephp desiredphp resulting
php php php php php php*php characterphp setphp.
php php php php php php*
php php php php php php*php Advancesphp thephp offsetphp byphp thephp numberphp ofphp bytesphp readphp.php Throwsphp anphp exceptionphp if
php php php php php php*php anphp errorphp occursphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php Desiredphp resultingphp characterphp setphp.
php php php php php php*php php php Youphp mayphp usephp anyphp characterphp setphp supportedphp byphp php{php@linkphp iconvphp(php)php}php.php Ifphp omittedphp,
php php php php php php*php php php usesphp php'currentphp localephp'php.
php php php php php php*php php@paramphp integerphp php$lengthBytesphp php(optionalphp)php Numberphp ofphp bytesphp thatphp makephp upphp the
php php php php php php*php php php lengthphp.php Defaultphp isphp php1php.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringPascalphp(php$characterSetphp php=php php'php'php,php php$lengthBytesphp php=php php1php)
php php php php php{
php php php php php php php php php$byteCountphp php=php php$thisphp-php>readUIntphp(php$lengthBytesphp)php;
php php php php php php php php ifphp php(php$byteCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php php$thisphp-php>php_dataSourcephp-php>readBytesphp(php$byteCountphp)php;
php php php php php php php php ifphp php(php$characterSetphp php=php=php php'ASCIIphp'php)php php{
php php php php php php php php php php php php returnphp php$bytesphp;
php php php php php php php php php}
php php php php php php php php returnphp iconvphp(php'ASCIIphp'php,php php$characterSetphp,php php$bytesphp)php;
php php php php php}

php}
