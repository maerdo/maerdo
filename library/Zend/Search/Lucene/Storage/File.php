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
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php{
php php php php php/php*php*
php php php php php php*php Readsphp php$lengthphp numberphp ofphp bytesphp atphp thephp currentphp positionphp inphp the
php php php php php php*php filephp andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_freadphp(php$lengthphp=php1php)php;


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
php php php php php php*php Uponphp successphp,php returnsphp php0php;php otherwisephp,php returnsphp php-php1
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp integerphp php$whence
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp seekphp(php$offsetphp,php php$whencephp=SEEKphp_SETphp)php;

php php php php php/php*php*
php php php php php php*php Getphp filephp positionphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp tellphp(php)php;

php php php php php/php*php*
php php php php php php*php Flushphp outputphp.
php php php php php php*
php php php php php php*php Returnsphp truephp onphp successphp orphp falsephp onphp failurephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp flushphp(php)php;

php php php php php/php*php*
php php php php php php*php Writesphp php$lengthphp numberphp ofphp bytesphp php(allphp,php ifphp php$lengthphp=php=php=nullphp)php tophp thephp end
php php php php php php*php ofphp thephp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_fwritephp(php$dataphp,php php$lengthphp=nullphp)php;

php php php php php/php*php*
php php php php php php*php Lockphp file
php php php php php php*
php php php php php php*php Lockphp typephp mayphp bephp aphp LOCKphp_SHphp php(sharedphp lockphp)php orphp aphp LOCKphp_EXphp php(exclusivephp lockphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$lockType
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp lockphp(php$lockTypephp,php php$nonBlockinLockphp php=php falsephp)php;

php php php php php/php*php*
php php php php php php*php Unlockphp file
php php php php php php*php/
php php php php abstractphp publicphp functionphp unlockphp(php)php;

php php php php php/php*php*
php php php php php php*php Readsphp aphp bytephp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp readBytephp(php)
php php php php php{
php php php php php php php php returnphp ordphp(php$thisphp-php>php_freadphp(php1php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp aphp bytephp tophp thephp endphp ofphp thephp filephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byte
php php php php php php*php/
php php php php publicphp functionphp writeBytephp(php$bytephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fwritephp(chrphp(php$bytephp)php,php php1php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp numphp bytesphp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$num
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readBytesphp(php$numphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_freadphp(php$numphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp numphp bytesphp ofphp dataphp php(allphp,php ifphp php$numphp=php=php=nullphp)php tophp thephp end
php php php php php php*php ofphp thephp stringphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp integerphp php$num
php php php php php php*php/
php php php php publicphp functionphp writeBytesphp(php$dataphp,php php$numphp=nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fwritephp(php$dataphp,php php$numphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readsphp anphp integerphp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp readIntphp(php)
php php php php php{
php php php php php php php php php$strphp php=php php$thisphp-php>php_freadphp(php4php)php;

php php php php php php php php returnphp php ordphp(php$strphp[php0php]php)php <php<php php2php4php php|
php php php php php php php php php php php php php php php php ordphp(php$strphp[php1php]php)php <php<php php1php6php php|
php php php php php php php php php php php php php php php php ordphp(php$strphp[php2php]php)php <php<php php8php php php|
php php php php php php php php php php php php php php php php ordphp(php$strphp[php3php]php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Writesphp anphp integerphp tophp thephp endphp ofphp filephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php/
php php php php publicphp functionphp writeIntphp(php$valuephp)
php php php php php{
php php php php php php php php settypephp(php$valuephp,php php'integerphp'php)php;
php php php php php php php php php$thisphp-php>php_fwritephp(php chrphp(php$valuephp>php>php2php4php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php1php6php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php8php php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp php php php php php&php php0xFFphp)php,php php php php4php php php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp longphp integerphp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp integerphp|float
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp readLongphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Checkphp,php thatphp wephp workphp inphp php6php4php-bitphp modephp.
php php php php php php php php php php*php fseekphp(php)php usesphp longphp forphp offsetphp.php Thusphp,php largestphp indexphp segmentphp filephp sizephp inphp php3php2bitphp modephp isphp php2Gb
php php php php php php php php php php*php/
php php php php php php php php ifphp php(PHPphp_INTphp_SIZEphp php>php php4php)php php{
php php php php php php php php php php php php php$strphp php=php php$thisphp-php>php_freadphp(php8php)php;

php php php php php php php php php php php php returnphp php ordphp(php$strphp[php0php]php)php <php<php php5php6php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php1php]php)php <php<php php4php8php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php2php]php)php <php<php php4php0php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php3php]php)php <php<php php3php2php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php4php]php)php <php<php php2php4php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php5php]php)php <php<php php1php6php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php6php]php)php <php<php php8php php php php|
php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp[php7php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>readLongphp3php2Bitphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp longphp integerphp tophp thephp endphp ofphp file
php php php php php php*
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp writeLongphp(php$valuephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Checkphp,php thatphp wephp workphp inphp php6php4php-bitphp modephp.
php php php php php php php php php php*php fseekphp(php)php andphp ftellphp(php)php usephp longphp forphp offsetphp.php Thusphp,php largestphp indexphp segmentphp filephp sizephp inphp php3php2bitphp modephp isphp php2Gb
php php php php php php php php php php*php/
php php php php php php php php ifphp php(PHPphp_INTphp_SIZEphp php>php php4php)php php{
php php php php php php php php php php php php settypephp(php$valuephp,php php'integerphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_fwritephp(php chrphp(php$valuephp>php>php5php6php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php4php8php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php4php0php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php3php2php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php2php4php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php1php6php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp>php>php8php php php&php php0xFFphp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php chrphp(php$valuephp php php php php php&php php0xFFphp)php,php php php php8php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>writeLongphp3php2Bitphp(php$valuephp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp longphp integerphp fromphp thephp currentphp positionphp inphp thephp filephp,
php php php php php php*php advancesphp thephp filephp pointerphp andphp returnphp itphp asphp floatphp php(forphp php3php2php-bitphp platformsphp)php.
php php php php php php*
php php php php php php*php php@returnphp integerphp|float
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp readLongphp3php2Bitphp(php)
php php php php php{
php php php php php php php php php$wordHighphp php=php php$thisphp-php>readIntphp(php)php;
php php php php php php php php php$wordLowphp php php=php php$thisphp-php>readIntphp(php)php;

php php php php php php php php ifphp php(php$wordHighphp php&php php(intphp)php0xphp8php0php0php0php0php0php0php0php)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp negativephp valuephp sincephp thephp highestphp bitphp isphp set
php php php php php php php php php php php php ifphp php(php$wordHighphp php=php=php php(intphp)php0xFFFFFFFFphp php php&php&php php php(php$wordLowphp php&php php(intphp)php0xphp8php0php0php0php0php0php0php0php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$wordLowphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Longphp integersphp lowerphp thanphp php-php2php1php4php7php4php8php3php6php4php8php php(php0xphp8php0php0php0php0php0php0php0php)php arephp notphp supportedphp onphp php3php2php-bitphp platformsphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php ifphp php(php$wordLowphp <php php0php)php php{
php php php php php php php php php php php php php/php/php Valuephp isphp largephp thanphp php0xphp7FFFphp FFFFphp.php Representphp lowphp wordphp asphp floatphp.
php php php php php php php php php php php php php$wordLowphp php&php=php php0xphp7FFFFFFFphp;
php php php php php php php php php php php php php$wordLowphp php+php=php php(floatphp)php0xphp8php0php0php0php0php0php0php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$wordHighphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Returnphp valuephp asphp integerphp ifphp possible
php php php php php php php php php php php php returnphp php$wordLowphp;
php php php php php php php php php}

php php php php php php php php returnphp php$wordHighphp*php(floatphp)php0xphp1php0php0php0php0php0php0php0php0php/php*php php0xphp0php0php0php0php0php0php0php1php php0php0php0php0php0php0php0php0php php*php/php php+php php$wordLowphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Writesphp longphp integerphp tophp thephp endphp ofphp filephp php(php3php2php-bitphp platformsphp implementationphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp|floatphp php$value
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp writeLongphp3php2Bitphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp <php php(intphp)php0xphp8php0php0php0php0php0php0php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Longphp integersphp lowerphp thanphp php-php2php1php4php7php4php8php3php6php4php8php php(php0xphp8php0php0php0php0php0php0php0php)php arephp notphp supportedphp onphp php3php2php-bitphp platformsphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$valuephp <php php0php)php php{
php php php php php php php php php php php php php$wordHighphp php=php php(intphp)php0xFFFFFFFFphp;
php php php php php php php php php php php php php$wordLowphp php php=php php(intphp)php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$wordHighphp php=php php(intphp)php(php$valuephp/php(floatphp)php0xphp1php0php0php0php0php0php0php0php0php/php*php php0xphp0php0php0php0php0php0php0php1php php0php0php0php0php0php0php0php0php php*php/php)php;
php php php php php php php php php php php php php$wordLowphp php php=php php$valuephp php-php php$wordHighphp*php(floatphp)php0xphp1php0php0php0php0php0php0php0php0php/php*php php0xphp0php0php0php0php0php0php0php1php php0php0php0php0php0php0php0php0php php*php/php;

php php php php php php php php php php php php ifphp php(php$wordLowphp php>php php0xphp7FFFFFFFphp)php php{
php php php php php php php php php php php php php php php php php/php/php Highestphp bitphp ofphp lowphp wordphp isphp setphp.php Translatephp itphp tophp thephp correspondingphp negativephp integerphp value
php php php php php php php php php php php php php php php php php$wordLowphp php-php=php php0xphp8php0php0php0php0php0php0php0php;
php php php php php php php php php php php php php php php php php$wordLowphp php|php=php php0xphp8php0php0php0php0php0php0php0php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeIntphp(php$wordHighphp)php;
php php php php php php php php php$thisphp-php>writeIntphp(php$wordLowphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp variablephp-lengthphp integerphp fromphp thephp current
php php php php php php*php positionphp inphp thephp filephp andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp readVIntphp(php)
php php php php php{
php php php php php php php php php$nextBytephp php=php ordphp(php$thisphp-php>php_freadphp(php1php)php)php;
php php php php php php php php php$valphp php=php php$nextBytephp php&php php0xphp7Fphp;

php php php php php php php php forphp php(php$shiftphp=php7php;php php(php$nextBytephp php&php php0xphp8php0php)php php!php=php php0php;php php$shiftphp php+php=php php7php)php php{
php php php php php php php php php php php php php$nextBytephp php=php ordphp(php$thisphp-php>php_freadphp(php1php)php)php;
php php php php php php php php php php php php php$valphp php|php=php php(php$nextBytephp php&php php0xphp7Fphp)php <php<php php$shiftphp;
php php php php php php php php php}
php php php php php php php php returnphp php$valphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp aphp variablephp-lengthphp integerphp tophp thephp endphp ofphp filephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php/
php php php php publicphp functionphp writeVIntphp(php$valuephp)
php php php php php{
php php php php php php php php settypephp(php$valuephp,php php'integerphp'php)php;
php php php php php php php php whilephp php(php$valuephp php>php php0xphp7Fphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_fwritephp(chrphp(php php(php$valuephp php&php php0xphp7Fphp)php|php0xphp8php0php php)php)php;
php php php php php php php php php php php php php$valuephp php>php>php=php php7php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_fwritephp(chrphp(php$valuephp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readsphp aphp stringphp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readStringphp(php)
php php php php php{
php php php php php php php php php$strlenphp php=php php$thisphp-php>readVIntphp(php)php;
php php php php php php php php ifphp php(php$strlenphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Thisphp implementationphp supportsphp onlyphp Basicphp Multilingualphp Plane
php php php php php php php php php php php php php php*php php(BMPphp)php charactersphp php(fromphp php0xphp0php0php0php0php tophp php0xFFFFphp)php andphp doesnphp'tphp support
php php php php php php php php php php php php php php*php php"supplementaryphp charactersphp"php php(charactersphp whosephp codephp pointsphp are
php php php php php php php php php php php php php php*php greaterphp thanphp php0xFFFFphp)
php php php php php php php php php php php php php php*php Javaphp php2php representsphp thesephp charactersphp asphp aphp pairphp ofphp charphp php(php1php6php-bitphp)
php php php php php php php php php php php php php php*php valuesphp,php thephp firstphp fromphp thephp highphp-surrogatesphp rangephp php(php0xDphp8php0php0php-php0xDBFFphp)php,
php php php php php php php php php php php php php php*php thephp secondphp fromphp thephp lowphp-surrogatesphp rangephp php(php0xDCphp0php0php-php0xDFFFphp)php.php Then
php php php php php php php php php php php php php php*php theyphp arephp encodedphp asphp usualphp UTFphp-php8php charactersphp inphp sixphp bytesphp.
php php php php php php php php php php php php php php*php Standardphp UTFphp-php8php representationphp usesphp fourphp bytesphp forphp supplementary
php php php php php php php php php php php php php php*php charactersphp.
php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php php$strphp_valphp php=php php$thisphp-php>php_freadphp(php$strlenphp)php;

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$strlenphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php(php ordphp(php$strphp_valphp[php$countphp]php)php php&php php0xCphp0php php)php php=php=php php0xCphp0php)php php{
php php php php php php php php php php php php php php php php php php php php php$addBytesphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp_valphp[php$countphp]php)php php&php php0xphp2php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$addBytesphp+php+php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Neverphp usedphp.php Javaphp2php doesnphp'tphp encodephp stringsphp inphp fourphp bytes
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp_valphp[php$countphp]php)php php&php php0xphp1php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$addBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$strphp_valphp php.php=php php$thisphp-php>php_freadphp(php$addBytesphp)php;
php php php php php php php php php php php php php php php php php php php php php$strlenphp php+php=php php$addBytesphp;

php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp forphp nullphp characterphp.php Javaphp2php encodesphp nullphp character
php php php php php php php php php php php php php php php php php php php php php/php/php inphp twophp bytesphp.
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp_valphp[php$countphp]php)php php php php=php=php php0xCphp0php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$strphp_valphp[php$countphp+php1php]php)php php=php=php php0xphp8php0php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$strphp_valphp[php$countphp]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$strphp_valphp php=php substrphp(php$strphp_valphp,php0php,php$countphp+php1php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php substrphp(php$strphp_valphp,php$countphp+php2php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$countphp php+php=php php$addBytesphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$strphp_valphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp aphp stringphp tophp thephp endphp ofphp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$str
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp writeStringphp(php$strphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Thisphp implementationphp supportsphp onlyphp Basicphp Multilingualphp Plane
php php php php php php php php php php*php php(BMPphp)php charactersphp php(fromphp php0xphp0php0php0php0php tophp php0xFFFFphp)php andphp doesnphp'tphp support
php php php php php php php php php php*php php"supplementaryphp charactersphp"php php(charactersphp whosephp codephp pointsphp are
php php php php php php php php php php*php greaterphp thanphp php0xFFFFphp)
php php php php php php php php php php*php Javaphp php2php representsphp thesephp charactersphp asphp aphp pairphp ofphp charphp php(php1php6php-bitphp)
php php php php php php php php php php*php valuesphp,php thephp firstphp fromphp thephp highphp-surrogatesphp rangephp php(php0xDphp8php0php0php-php0xDBFFphp)php,
php php php php php php php php php php*php thephp secondphp fromphp thephp lowphp-surrogatesphp rangephp php(php0xDCphp0php0php-php0xDFFFphp)php.php Then
php php php php php php php php php php*php theyphp arephp encodedphp asphp usualphp UTFphp-php8php charactersphp inphp sixphp bytesphp.
php php php php php php php php php php*php Standardphp UTFphp-php8php representationphp usesphp fourphp bytesphp forphp supplementary
php php php php php php php php php php*php charactersphp.
php php php php php php php php php php*php/

php php php php php php php php php/php/php convertphp inputphp tophp aphp stringphp beforephp iteratingphp stringphp characters
php php php php php php php php settypephp(php$strphp,php php'stringphp'php)php;

php php php php php php php php php$charsphp php=php php$strlenphp php=php strlenphp(php$strphp)php;
php php php php php php php php php$containNullCharsphp php=php falsephp;

php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$strlenphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Stringphp isphp alreadyphp inphp Javaphp php2php representationphp.
php php php php php php php php php php php php php php*php Wephp shouldphp onlyphp calculatephp actualphp stringphp lengthphp andphp replace
php php php php php php php php php php php php php php*php php\xphp0php0php byphp php\xCphp0php\xphp8php0
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php(ordphp(php$strphp[php$countphp]php)php php&php php0xCphp0php)php php=php=php php0xCphp0php)php php{
php php php php php php php php php php php php php php php php php$addBytesphp php=php php1php;
php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$countphp]php)php php&php php0xphp2php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php$addBytesphp+php+php;

php php php php php php php php php php php php php php php php php php php php php/php/php Neverphp usedphp.php Javaphp2php doesnphp'tphp encodephp stringsphp inphp fourphp bytes
php php php php php php php php php php php php php php php php php php php php php/php/php andphp wephp dontphp'tphp supportphp nonphp-BMPphp characters
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$countphp]php)php php&php php0xphp1php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$addBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$charsphp php-php=php php$addBytesphp;

php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$countphp]php)php php=php=php php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php$containNullCharsphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$countphp php+php=php php$addBytesphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$charsphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Invalidphp UTFphp-php8php stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeVIntphp(php$charsphp)php;
php php php php php php php php ifphp php(php$containNullCharsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_fwritephp(strphp_replacephp(php$strphp,php php"php\xphp0php0php"php,php php"php\xCphp0php\xphp8php0php"php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fwritephp(php$strphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Readsphp binaryphp dataphp fromphp thephp currentphp positionphp inphp thephp file
php php php php php php*php andphp advancesphp thephp filephp pointerphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readBinaryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_freadphp(php$thisphp-php>readVIntphp(php)php)php;
php php php php php}
php}
