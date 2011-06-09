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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Ntpphp.phpphp php2php1php4php8php0php php2php0php1php0php-php0php3php-php1php3php php2php2php:php0php9php:php2php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php Zendphp_TimeSyncphp_Protocol
php php*php/
requirephp_oncephp php'Zendphp/TimeSyncphp/Protocolphp.phpphp'php;

php/php*php*
php php*php NTPphp Protocolphp handlingphp class
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_TimeSyncphp_Ntpphp extendsphp Zendphp_TimeSyncphp_Protocol
php{
php php php php php/php*php*
php php php php php php*php NTPphp portphp numberphp php(php1php2php3php)php assignedphp byphp thephp Internetphp Assignedphp Numbersphp Authority
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_portphp php=php php1php2php3php;

php php php php php/php*php*
php php php php php php*php NTPphp classphp constructorphp,php setsphp thephp timeserverphp andphp portphp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$timeserverphp Adressphp ofphp thephp timeserverphp tophp connectphp to
php php php php php php*php php@paramphp integerphp php$portphp php php php php php php php(Optionalphp)php Portphp forphp thisphp timeserver
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$timeserverphp,php php$portphp php=php php1php2php3php)
php php php php php{
php php php php php php php php php$thisphp-php>php_timeserverphp php=php php'udpphp:php/php/php'php php.php php$timeserverphp;
php php php php php php php php ifphp php(php$portphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_portphp php=php php$portphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp localphp timestampphp forphp transmissionphp inphp ourphp requestphp packet
php php php php php php*
php php php php php php*php NTPphp timestampsphp arephp representedphp asphp aphp php6php4php-bitphp fixedphp-pointphp numberphp,php in
php php php php php php*php secondsphp relativephp tophp php0php0php0php0php UTphp onphp php1php Januaryphp php1php9php0php0php.php php Thephp integerphp partphp is
php php php php php php*php inphp thephp firstphp php3php2php bitsphp andphp thephp fractionphp partphp inphp thephp lastphp php3php2php bits
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php)
php php php php php{
php php php php php php php php php$fracphp php php php=php microtimephp(php)php;
php php php php php php php php php$fracbaphp php=php php(php$fracphp php&php php0xffphp0php0php0php0php0php0php)php php>php>php php2php4php;
php php php php php php php php php$fracbbphp php=php php(php$fracphp php&php php0xphp0php0ffphp0php0php0php0php)php php>php>php php1php6php;
php php php php php php php php php$fracbcphp php=php php(php$fracphp php&php php0xphp0php0php0php0ffphp0php0php)php php>php>php php8php;
php php php php php php php php php$fracbdphp php=php php(php$fracphp php&php php0xphp0php0php0php0php0php0ffphp)php;

php php php php php php php php php$secphp php php php=php php(timephp(php)php php+php php2php2php0php8php9php8php8php8php0php0php)php;
php php php php php php php php php$secbaphp php=php php(php$secphp php&php php0xffphp0php0php0php0php0php0php)php php>php>php php2php4php;
php php php php php php php php php$secbbphp php=php php(php$secphp php&php php0xphp0php0ffphp0php0php0php0php)php php>php>php php1php6php;
php php php php php php php php php$secbcphp php=php php(php$secphp php&php php0xphp0php0php0php0ffphp0php0php)php php>php>php php8php;
php php php php php php php php php$secbdphp php=php php(php$secphp php&php php0xphp0php0php0php0php0php0ffphp)php;

php php php php php php php php php/php/php Flags
php php php php php php php php php$nulphp php php php php php php php=php chrphp(php0xphp0php0php)php;
php php php php php php php php php$nulbytephp php php php=php php$nulphp php.php php$nulphp php.php php$nulphp php.php php$nulphp;
php php php php php php php php php$ntppacketphp php=php chrphp(php0xdphp9php)php php.php php$nulphp php.php chrphp(php0xphp0aphp)php php.php chrphp(php0xfaphp)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Rootphp delay
php php php php php php php php php php*
php php php php php php php php php php*php Indicatesphp thephp totalphp roundtripphp delayphp tophp thephp primaryphp reference
php php php php php php php php php php*php sourcephp atphp thephp rootphp ofphp thephp synchronizationphp subnetphp,php inphp seconds
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php php$nulphp php.php php$nulphp php.php chrphp(php0xphp1cphp)php php.php chrphp(php0xphp9bphp)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Clockphp Dispersion
php php php php php php php php php php*
php php php php php php php php php php*php Indicatesphp thephp maximumphp errorphp relativephp tophp thephp primaryphp referencephp sourcephp atphp the
php php php php php php php php php php*php rootphp ofphp thephp synchronizationphp subnetphp,php inphp seconds
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php php$nulphp php.php chrphp(php0xphp0php8php)php php.php chrphp(php0xdphp7php)php php.php chrphp(php0xffphp)php;

php php php php php php php php php/php*
php php php php php php php php php php*php ReferenceClockID
php php php php php php php php php php*
php php php php php php php php php php*php Identifyingphp thephp particularphp referencephp clock
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php php$nulbytephp;

php php php php php php php php php/php*
php php php php php php php php php php*php Thephp localphp timephp,php inphp timestampphp formatphp,php atphp thephp peerphp whenphp itsphp latestphp NTPphp message
php php php php php php php php php php*php wasphp sentphp.php Contanisphp anphp integerphp andphp aphp fractionalphp part
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php chrphp(php$secbaphp)php php php.php chrphp(php$secbbphp)php php php.php chrphp(php$secbcphp)php php php.php chrphp(php$secbdphp)php;
php php php php php php php php php$ntppacketphp php.php=php chrphp(php$fracbaphp)php php.php chrphp(php$fracbbphp)php php.php chrphp(php$fracbcphp)php php.php chrphp(php$fracbdphp)php;

php php php php php php php php php/php*
php php php php php php php php php php*php Thephp localphp timephp,php inphp timestampphp formatphp,php atphp thephp peerphp.php Containsphp anphp integer
php php php php php php php php php php*php andphp aphp fractionalphp partphp.
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php php$nulbytephp;
php php php php php php php php php$ntppacketphp php.php=php php$nulbytephp;

php php php php php php php php php/php*
php php php php php php php php php php*php Thisphp isphp thephp localphp timephp,php inphp timestampphp formatphp,php whenphp thephp latestphp NTPphp messagephp from
php php php php php php php php php php*php thephp peerphp arrivedphp.php Contanisphp anphp integerphp andphp aphp fractionalphp partphp.
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php php$nulbytephp;
php php php php php php php php php$ntppacketphp php.php=php php$nulbytephp;

php php php php php php php php php/php*
php php php php php php php php php php*php Thephp localphp timephp,php inphp timestampphp formatphp,php atphp whichphp the
php php php php php php php php php php*php NTPphp messagephp departedphp thephp senderphp.php Contanisphp anphp integer
php php php php php php php php php php*php andphp aphp fractionalphp partphp.
php php php php php php php php php php*php/
php php php php php php php php php$ntppacketphp php.php=php chrphp(php$secbaphp)php php php.php chrphp(php$secbbphp)php php php.php chrphp(php$secbcphp)php php php.php chrphp(php$secbdphp)php;
php php php php php php php php php$ntppacketphp php.php=php chrphp(php$fracbaphp)php php.php chrphp(php$fracbbphp)php php.php chrphp(php$fracbcphp)php php.php chrphp(php$fracbdphp)php;

php php php php php php php php returnphp php$ntppacketphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatesphp aphp php3php2bitphp integer
php php php php php php*
php php php php php php*php php@paramphp stringphp php$input
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_getIntegerphp(php$inputphp)
php php php php php{
php php php php php php php php php$fphp1php php php=php strphp_padphp(ordphp(php$inputphp[php0php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php1php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php2php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php3php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php returnphp php(intphp)php php$fphp1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatesphp aphp php3php2bitphp signedphp fixedphp pointphp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$input
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php protectedphp functionphp php_getFloatphp(php$inputphp)
php php php php php{
php php php php php php php php php$fphp1php php php=php strphp_padphp(ordphp(php$inputphp[php0php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php1php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php2php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp1php php.php=php strphp_padphp(ordphp(php$inputphp[php3php]php)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$fphp2php php php=php php$fphp1php php>php>php php1php7php;
php php php php php php php php php$fphp3php php php=php php(php$fphp1php php&php php0xphp0php0php0php1FFFFphp)php;
php php php php php php php php php$fphp1php php php=php php$fphp2php php.php php'php.php'php php.php php$fphp3php;
php php php php php php php php returnphp php(floatphp)php php$fphp1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatesphp aphp php6php4bitphp timestamp
php php php php php php*
php php php php php php*php php@paramphp stringphp php$input
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php protectedphp functionphp php_getTimestampphp(php$inputphp)
php php php php php{
php php php php php php php php php$fphp1php php php=php php(ordphp(php$inputphp[php0php]php)php php*php powphp(php2php5php6php,php php3php)php)php;
php php php php php php php php php$fphp1php php+php=php php(ordphp(php$inputphp[php1php]php)php php*php powphp(php2php5php6php,php php2php)php)php;
php php php php php php php php php$fphp1php php+php=php php(ordphp(php$inputphp[php2php]php)php php*php powphp(php2php5php6php,php php1php)php)php;
php php php php php php php php php$fphp1php php+php=php php(ordphp(php$inputphp[php3php]php)php)php;
php php php php php php php php php$fphp1php php-php=php php2php2php0php8php9php8php8php8php0php0php;

php php php php php php php php php$fphp2php php php=php php(ordphp(php$inputphp[php4php]php)php php*php powphp(php2php5php6php,php php3php)php)php;
php php php php php php php php php$fphp2php php+php=php php(ordphp(php$inputphp[php5php]php)php php*php powphp(php2php5php6php,php php2php)php)php;
php php php php php php php php php$fphp2php php+php=php php(ordphp(php$inputphp[php6php]php)php php*php powphp(php2php5php6php,php php1php)php)php;
php php php php php php php php php$fphp2php php+php=php php(ordphp(php$inputphp[php7php]php)php)php;

php php php php php php php php returnphp php(floatphp)php php(php$fphp1php php.php php"php.php"php php.php php$fphp2php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php Thisphp willphp returnphp anphp arrayphp withphp binaryphp dataphp listingphp:
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_TimeSyncphp_Exceptionphp Whenphp timeserverphp canphp notphp bephp connected
php php php php php php*php/
php php php php protectedphp functionphp php_readphp(php)
php php php php php{
php php php php php php php php php$flagsphp php=php ordphp(freadphp(php$thisphp-php>php_socketphp,php php1php)php)php;
php php php php php php php php php$infophp php php=php streamphp_getphp_metaphp_dataphp(php$thisphp-php>php_socketphp)php;

php php php php php php php php ifphp php(php$infophp[php'timedphp_outphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php'couldphp notphp connectphp tophp php'php php.
php php php php php php php php php php php php php php php php php"php'php$thisphp-php>php_timeserverphp'php onphp portphp php'php$thisphp-php>php_portphp'php,php reasonphp:php php'serverphp timedphp outphp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php arrayphp(
php php php php php php php php php php php php php'flagsphp'php php php php php php php php php php php=php>php php$flagsphp,
php php php php php php php php php php php php php'stratumphp'php php php php php php php php php=php>php ordphp(freadphp(php$thisphp-php>php_socketphp,php php1php)php)php,
php php php php php php php php php php php php php'pollphp'php php php php php php php php php php php php=php>php ordphp(freadphp(php$thisphp-php>php_socketphp,php php1php)php)php,
php php php php php php php php php php php php php'precisionphp'php php php php php php php=php>php ordphp(freadphp(php$thisphp-php>php_socketphp,php php1php)php)php,
php php php php php php php php php php php php php'rootdelayphp'php php php php php php php=php>php php$thisphp-php>php_getFloatphp(freadphp(php$thisphp-php>php_socketphp,php php4php)php)php,
php php php php php php php php php php php php php'rootdispersionphp'php php=php>php php$thisphp-php>php_getFloatphp(freadphp(php$thisphp-php>php_socketphp,php php4php)php)php,
php php php php php php php php php php php php php'referenceidphp'php php php php php=php>php freadphp(php$thisphp-php>php_socketphp,php php4php)php,
php php php php php php php php php php php php php'referencestampphp'php php=php>php php$thisphp-php>php_getTimestampphp(freadphp(php$thisphp-php>php_socketphp,php php8php)php)php,
php php php php php php php php php php php php php'originatestampphp'php php=php>php php$thisphp-php>php_getTimestampphp(freadphp(php$thisphp-php>php_socketphp,php php8php)php)php,
php php php php php php php php php php php php php'receivestampphp'php php php php=php>php php$thisphp-php>php_getTimestampphp(freadphp(php$thisphp-php>php_socketphp,php php8php)php)php,
php php php php php php php php php php php php php'transmitstampphp'php php php=php>php php$thisphp-php>php_getTimestampphp(freadphp(php$thisphp-php>php_socketphp,php php8php)php)php,
php php php php php php php php php php php php php'clientreceivedphp'php php=php>php microtimephp(truephp)
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_disconnectphp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp thephp NTPphp packetphp tophp thephp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp Dataphp tophp sendphp tophp thephp timeserver
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectphp(php)php;

php php php php php php php php fwritephp(php$thisphp-php>php_socketphp,php php$dataphp)php;
php php php php php php php php streamphp_setphp_timeoutphp(php$thisphp-php>php_socketphp,php Zendphp_TimeSyncphp:php:php$optionsphp[php'timeoutphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractsphp thephp binaryphp dataphp returnedphp fromphp thephp timeserver
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$binaryphp Dataphp returnedphp fromphp thephp timeserver
php php php php php php*php php@returnphp integerphp Differencephp inphp seconds
php php php php php php*php/
php php php php protectedphp functionphp php_extractphp(php$binaryphp)
php php php php php{
php php php php php php php php php/php*
php php php php php php php php php php*php Leapphp Indicatorphp bitphp php1php1php0php0php php0php0php0php0
php php php php php php php php php php*
php php php php php php php php php php*php Codephp warningphp ofphp impendingphp leapphp-secondphp tophp bephp insertedphp atphp thephp endphp of
php php php php php php php php php php*php thephp lastphp dayphp ofphp thephp currentphp monthphp.
php php php php php php php php php php*php/
php php php php php php php php php$leapphp php=php php(php$binaryphp[php'flagsphp'php]php php&php php0xcphp0php)php php>php>php php6php;
php php php php php php php php switchphp(php$leapphp)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'leapphp'php]php php=php php'php0php php-php nophp warningphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'leapphp'php]php php=php php'php1php php-php lastphp minutephp hasphp php6php1php secondsphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'leapphp'php]php php=php php'php2php php-php lastphp minutephp hasphp php5php9php secondsphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'leapphp'php]php php=php php'php3php php-php notphp syncronisedphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Versionphp Numberphp bitphp php0php0php1php1php php1php0php0php0
php php php php php php php php php php*
php php php php php php php php php php*php Thisphp shouldphp bephp php3php php(RFCphp php1php3php0php5php)
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_infophp[php'versionphp'php]php php=php php(php$binaryphp[php'flagsphp'php]php php&php php0xphp3php8php)php php>php>php php3php;

php php php php php php php php php/php*
php php php php php php php php php php*php Modephp bitphp php0php0php0php0php php0php1php1php1
php php php php php php php php php php*
php php php php php php php php php php*php Exceptphp inphp broadcastphp modephp,php anphp NTPphp associationphp isphp formedphp whenphp twophp peers
php php php php php php php php php php*php exchangephp messagesphp andphp onephp orphp bothphp ofphp themphp createphp andphp maintainphp an
php php php php php php php php php php*php instantiationphp ofphp thephp protocolphp machinephp,php calledphp anphp associationphp.
php php php php php php php php php php*php/
php php php php php php php php php$modephp php=php php(php$binaryphp[php'flagsphp'php]php php&php php0xphp0php7php)php;
php php php php php php php php switchphp(php$modephp)php php{
php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'symetricphp activephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'symetricphp passivephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'clientphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php4php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'serverphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php5php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'broadcastphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'modephp'php]php php=php php'reservedphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$ntpserviceidphp php=php php'Unknownphp Stratumphp php'php php.php php$binaryphp[php'stratumphp'php]php php.php php'php Servicephp'php;

php php php php php php php php php/php*
php php php php php php php php php php*php Referencephp Clockphp Identifier
php php php php php php php php php php*
php php php php php php php php php php*php Identifiesphp thephp particularphp referencephp clockphp.
php php php php php php php php php php*php/
php php php php php php php php php$refidphp php=php strtoupperphp(php$binaryphp[php'referenceidphp'php]php)php;
php php php php php php php php switchphp(php$binaryphp[php'stratumphp'php]php)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php ifphp php(substrphp(php$refidphp,php php0php,php php3php)php php=php=php=php php'DCNphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'DCNphp routingphp protocolphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php4php)php php=php=php=php php'NISTphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'NISTphp publicphp modemphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php3php)php php=php=php=php php'TSPphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'TSPphp timephp protocolphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php3php)php php=php=php=php php'DTSphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'Digitalphp Timephp Servicephp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php ifphp php(substrphp(php$refidphp,php php0php,php php4php)php php=php=php=php php'ATOMphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'Atomicphp Clockphp php(calibratedphp)php'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php3php)php php=php=php=php php'VLFphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'VLFphp radiophp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$refidphp php=php=php=php php'CALLSIGNphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'Genericphp radiophp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php4php)php php=php=php=php php'LORCphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'LORANphp-Cphp radionavigationphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php4php)php php=php=php=php php'GOESphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'GOESphp UHFphp environmentphp satellitephp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$refidphp,php php0php,php php3php)php php=php=php=php php'GPSphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$ntpserviceidphp php=php php'GPSphp UHFphp satellitephp positioningphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$ntpserviceidphp php php=php ordphp(substrphp(php$binaryphp[php'referenceidphp'php]php,php php0php,php php1php)php)php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php php'php.php'php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php ordphp(substrphp(php$binaryphp[php'referenceidphp'php]php,php php1php,php php1php)php)php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php php'php.php'php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php ordphp(substrphp(php$binaryphp[php'referenceidphp'php]php,php php2php,php php1php)php)php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php php'php.php'php;
php php php php php php php php php php php php php php php php php$ntpserviceidphp php.php=php ordphp(substrphp(php$binaryphp[php'referenceidphp'php]php,php php3php,php php1php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_infophp[php'ntpidphp'php]php php=php php$ntpserviceidphp;

php php php php php php php php php/php*
php php php php php php php php php php*php Stratum
php php php php php php php php php php*
php php php php php php php php php php*php Indicatesphp thephp stratumphp levelphp ofphp thephp localphp clock
php php php php php php php php php php*php/
php php php php php php php php switchphp(php$binaryphp[php'stratumphp'php]php)php php{
php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'stratumphp'php]php php=php php'undefinedphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'stratumphp'php]php php=php php'primaryphp referencephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_infophp[php'stratumphp'php]php php=php php'secondaryphp referencephp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Indicatesphp thephp totalphp roundtripphp delayphp tophp thephp primaryphp referencephp sourcephp atphp the
php php php php php php php php php php*php rootphp ofphp thephp synchronizationphp subnetphp,php inphp secondsphp.
php php php php php php php php php php*
php php php php php php php php php php*php Bothphp positivephp andphp negativephp valuesphp,php dependingphp onphp clockphp precisionphp andphp skewphp,php are
php php php php php php php php php php*php possiblephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_infophp[php'rootdelayphp'php]php php=php php$binaryphp[php'rootdelayphp'php]php;

php php php php php php php php php/php*
php php php php php php php php php php*php Indicatesphp thephp maximumphp errorphp relativephp tophp thephp primaryphp referencephp sourcephp atphp the
php php php php php php php php php php*php rootphp ofphp thephp synchronizationphp subnetphp,php inphp secondsphp.
php php php php php php php php php php*
php php php php php php php php php php*php Onlyphp positivephp valuesphp greaterphp thanphp zerophp arephp possiblephp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_infophp[php'rootdispersionphp'php]php php=php php$binaryphp[php'rootdispersionphp'php]php;

php php php php php php php php php/php*
php php php php php php php php php php*php Thephp roundtripphp delayphp ofphp thephp peerphp clockphp relativephp tophp thephp localphp clock
php php php php php php php php php php*php overphp thephp networkphp pathphp betweenphp themphp,php inphp secondsphp.
php php php php php php php php php php*
php php php php php php php php php php*php Notephp thatphp thisphp variablephp canphp takephp onphp bothphp positivephp andphp negativephp valuesphp,
php php php php php php php php php php*php dependingphp onphp clockphp precisionphp andphp skewphp-errorphp accumulationphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_infophp[php'roundtripphp'php]php php php=php php$binaryphp[php'receivestampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'roundtripphp'php]php php-php=php php$binaryphp[php'originatestampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'roundtripphp'php]php php-php=php php$binaryphp[php'transmitstampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'roundtripphp'php]php php+php=php php$binaryphp[php'clientreceivedphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'roundtripphp'php]php php/php=php php2php;

php php php php php php php php php/php/php Thephp offsetphp ofphp thephp peerphp clockphp relativephp tophp thephp localphp clockphp,php inphp secondsphp.
php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php php=php php$binaryphp[php'receivestampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php-php=php php$binaryphp[php'originatestampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php+php=php php$binaryphp[php'transmitstampphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php-php=php php$binaryphp[php'clientreceivedphp'php]php;
php php php php php php php php php$thisphp-php>php_infophp[php'offsetphp'php]php php/php=php php2php;
php php php php php php php php php$timephp php=php php(timephp(php)php php-php php$thisphp-php>php_infophp[php'offsetphp'php]php)php;

php php php php php php php php returnphp php$timephp;
php php php php php}
php}
