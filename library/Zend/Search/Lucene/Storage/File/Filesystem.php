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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filesystemphp.phpphp php2php3php3php9php5php php2php0php1php0php-php1php1php-php1php9php php1php5php:php3php0php:php4php7Zphp alexanderphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Storagephp_Filephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Filephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp_Filesystemphp extendsphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php{
php php php php php/php*php*
php php php php php php*php Resourcephp ofphp thephp openphp file
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_fileHandlephp;


php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Openphp thephp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@paramphp stringphp php$mode
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filenamephp,php php$modephp=php'rphp+bphp'php)
php php php php php{
php php php php php php php php globalphp php$phpphp_errormsgphp;

php php php php php php php php ifphp php(strposphp(php$modephp,php php'wphp'php)php php=php=php=php falsephp php php&php&php php php!isphp_readablephp(php$filenamephp)php)php php{
php php php php php php php php php php php php php/php/php openingphp forphp readingphp nonphp-readablephp file
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Filephp php\php'php'php php.php php$filenamephp php.php php'php\php'php isphp notphp readablephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$trackErrorsphp php=php iniphp_getphp(php'trackphp_errorsphp'php)php;
php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php'php1php'php)php;

php php php php php php php php php$thisphp-php>php_fileHandlephp php=php php@fopenphp(php$filenamephp,php php$modephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_fileHandlephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$phpphp_errormsgphp)php;
php php php php php php php php php}

php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp filephp positionphp indicatorphp andphp advancesphp thephp filephp pointerphp.
php php php php php php*php Thephp newphp positionphp,php measuredphp inphp bytesphp fromphp thephp beginningphp ofphp thephp filephp,
php php php php php php*php isphp obtainedphp byphp addingphp offsetphp tophp thephp positionphp specifiedphp byphp whencephp,
php php php php php php*php whosephp valuesphp arephp definedphp asphp followsphp:
php php php php php php*php SEEKphp_SETphp php-php Setphp positionphp equalphp tophp offsetphp bytesphp.
php php php php php php*php SEEKphp_CURphp php-php Setphp positionphp tophp currentphp locationphp plusphp offsetphp.
php php php php php php*php SEEKphp_ENDphp php-php Setphp positionphp tophp endphp-ofphp-filephp plusphp offsetphp.php php(Tophp movephp to
php php php php php php*php aphp positionphp beforephp thephp endphp-ofphp-filephp,php youphp needphp tophp passphp aphp negativephp value
php php php php php php*php inphp offsetphp.php)
php php php php php php*php SEEKphp_CURphp isphp thephp onlyphp supportedphp offsetphp typephp forphp compoundphp files
php php php php php php*
php php php php php php*php Uponphp successphp,php returnsphp php0php;php otherwisephp,php returnsphp php-php1
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp integerphp php$whence
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp seekphp(php$offsetphp,php php$whencephp=SEEKphp_SETphp)
php php php php php{
php php php php php php php php returnphp fseekphp(php$thisphp-php>php_fileHandlephp,php php$offsetphp,php php$whencephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp filephp positionphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp tellphp(php)
php php php php php{
php php php php php php php php returnphp ftellphp(php$thisphp-php>php_fileHandlephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Flushphp outputphp.
php php php php php php*
php php php php php php*php Returnsphp truephp onphp successphp orphp falsephp onphp failurephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp flushphp(php)
php php php php php{
php php php php php php php php returnphp fflushphp(php$thisphp-php>php_fileHandlephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp Filephp object
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_fileHandlephp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php php@fclosephp(php$thisphp-php>php_fileHandlephp)php;
php php php php php php php php php php php php php$thisphp-php>php_fileHandlephp php=php nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp sizephp ofphp thephp alreadyphp openedphp file
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp sizephp(php)
php php php php php{
php php php php php php php php php$positionphp php=php ftellphp(php$thisphp-php>php_fileHandlephp)php;
php php php php php php php php fseekphp(php$thisphp-php>php_fileHandlephp,php php0php,php SEEKphp_ENDphp)php;
php php php php php php php php php$sizephp php=php ftellphp(php$thisphp-php>php_fileHandlephp)php;
php php php php php php php php fseekphp(php$thisphp-php>php_fileHandlephp,php$positionphp)php;

php php php php php php php php returnphp php$sizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp aphp php$lengthphp bytesphp fromphp thephp filephp andphp advancephp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_freadphp(php$lengthphp=php1php)
php php php php php{
php php php php php php php php ifphp php(php$lengthphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$lengthphp <php php1php0php2php4php)php php{
php php php php php php php php php php php php returnphp freadphp(php$thisphp-php>php_fileHandlephp,php php$lengthphp)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php whilephp php(php$lengthphp php>php php0php php&php&php php!feofphp(php$thisphp-php>php_fileHandlephp)php)php php{
php php php php php php php php php php php php php$nextBlockphp php=php freadphp(php$thisphp-php>php_fileHandlephp,php php$lengthphp)php;
php php php php php php php php php php php php ifphp php(php$nextBlockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php php"Errorphp occuredphp whilephp filephp readingphp.php"php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dataphp php.php=php php$nextBlockphp;
php php php php php php php php php php php php php$lengthphp php-php=php strlenphp(php$nextBlockphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$lengthphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php php"Errorphp occuredphp whilephp filephp readingphp.php"php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Writesphp php$lengthphp numberphp ofphp bytesphp php(allphp,php ifphp php$lengthphp=php=php=nullphp)php tophp thephp end
php php php php php php*php ofphp thephp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php/
php php php php protectedphp functionphp php_fwritephp(php$dataphp,php php$lengthphp=nullphp)
php php php php php{
php php php php php php php php ifphp php(php$lengthphp php=php=php=php nullphp php)php php{
php php php php php php php php php php php php fwritephp(php$thisphp-php>php_fileHandlephp,php php$dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php fwritephp(php$thisphp-php>php_fileHandlephp,php php$dataphp,php php$lengthphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Lockphp file
php php php php php php*
php php php php php php*php Lockphp typephp mayphp bephp aphp LOCKphp_SHphp php(sharedphp lockphp)php orphp aphp LOCKphp_EXphp php(exclusivephp lockphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$lockType
php php php php php php*php php@paramphp booleanphp php$nonBlockingLock
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp lockphp(php$lockTypephp,php php$nonBlockingLockphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$nonBlockingLockphp)php php{
php php php php php php php php php php php php returnphp flockphp(php$thisphp-php>php_fileHandlephp,php php$lockTypephp php|php LOCKphp_NBphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp flockphp(php$thisphp-php>php_fileHandlephp,php php$lockTypephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Unlockphp file
php php php php php php*
php php php php php php*php Returnsphp truephp onphp success
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp unlockphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_fileHandlephp php!php=php=php nullphp php)php php{
php php php php php php php php php php php php returnphp flockphp(php$thisphp-php>php_fileHandlephp,php LOCKphp_UNphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}
php}

