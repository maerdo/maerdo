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
php php*php php@packagephp php php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php TimeSyncphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_TimeSync
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_TimeSyncphp implementsphp IteratorAggregate
php{
php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp timeserverphp protocolphp tophp php"Ntpphp"php.php Thisphp willphp bephp called
php php php php php php*php whenphp nophp protocolphp isphp specified
php php php php php php*php/
php php php php constphp DEFAULTphp_PROTOCOLphp php=php php'Ntpphp'php;

php php php php php/php*php*
php php php php php php*php Containsphp arrayphp ofphp timeserverphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_timeserversphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp aphp referencephp tophp thephp timeserverphp thatphp isphp currentlyphp beingphp used
php php php php php php*
php php php php php php*php php@varphp object
php php php php php php*php/
php php php php protectedphp php$php_currentphp;

php php php php php/php*php*
php php php php php php*php Allowedphp timeserverphp schemes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedSchemesphp php=php arrayphp(
php php php php php php php php php'Ntpphp'php,
php php php php php php php php php'Sntpphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Configurationphp arrayphp,php setphp usingphp thephp constructorphp orphp using
php php php php php php*php php:php:setOptionsphp(php)php orphp php:php:setOptionphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp staticphp php$optionsphp php=php arrayphp(
php php php php php php php php php'timeoutphp'php php=php>php php1
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_TimeSyncphp constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$targetphp php-php OPTIONALphp singlephp timeserverphp,php orphp anphp arrayphp ofphp timeserversphp.
php php php php php php*php php@paramphp php stringphp php php php php php php php$aliasphp php php-php OPTIONALphp anphp aliasphp forphp thisphp timeserver
php php php php php php*php php@returnphp php object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$targetphp php=php nullphp,php php$aliasphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$targetphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>addServerphp(php$targetphp,php php$aliasphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php returnphp anphp iteratablephp objectphp forphp usephp inphp foreachphp andphp thephp likephp,
php php php php php php*php thisphp completesphp thephp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayObjectphp(php$thisphp-php>php_timeserversphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp timeserverphp orphp multiplephp timeservers
php php php php php php*
php php php php php php*php Serverphp shouldphp bephp aphp singlephp stringphp representationphp ofphp aphp timeserverphp,
php php php php php php*php orphp aphp structuredphp arrayphp listingphp multiplephp timeserversphp.
php php php php php php*
php php php php php php*php Ifphp youphp providephp anphp arrayphp ofphp timeserversphp inphp thephp php$targetphp variablephp,
php php php php php php*php php$aliasphp willphp bephp ignoredphp.php youphp canphp enterphp thesephp asphp thephp arrayphp key
php php php php php php*php inphp thephp providedphp arrayphp,php whichphp shouldphp bephp structuredphp asphp followsphp:
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*php php$examplephp php=php arrayphp(
php php php php php php*php php php php'serverphp_aphp'php php=php>php php'ntpphp:php/php/php1php2php7php.php0php.php0php.php1php'php,
php php php php php php*php php php php'serverphp_bphp'php php=php>php php'ntpphp:php/php/php1php2php7php.php0php.php0php.php1php:php1php2php3php'php,
php php php php php php*php php php php'serverphp_cphp'php php=php>php php'ntpphp:php/php/php[php2php0php0php0php:php3php6php4php:php2php3php4php:php:php2php.php5php]php'php,
php php php php php php*php php php php'serverphp_dphp'php php=php>php php'ntpphp:php/php/php[php2php0php0php0php:php3php6php4php:php2php3php4php:php:php2php.php5php]php:php1php2php3php'
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php Ifphp nophp portphp numberphp hasphp beenphp supliedphp,php thephp defaultphp matchingphp port
php php php php php php*php numberphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php Supportedphp protocolsphp arephp:
php php php php php php*php php-php ntp
php php php php php php*php php-php sntp
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$targetphp php-php Singlephp timeserverphp,php orphp anphp arrayphp ofphp timeserversphp.
php php php php php php*php php@paramphp php stringphp php php php php php php php$aliasphp php php-php OPTIONALphp anphp aliasphp forphp thisphp timeserver
php php php php php php*php php@throwsphp Zendphp_TimeSyncphp_Exception
php php php php php php*php/
php php php php publicphp functionphp addServerphp(php$targetphp,php php$aliasphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$targetphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$targetphp asphp php$keyphp php=php>php php$serverphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_addServerphp(php$serverphp,php php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_addServerphp(php$targetphp,php php$aliasphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp forphp thephp givenphp options
php php php php php php*
php php php php php php*php Thisphp willphp replacephp anyphp currentlyphp definedphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$optionsphp php-php Anphp arrayphp ofphp optionsphp tophp bephp set
php php php php php php*php/
php php php php publicphp staticphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php Zendphp_TimeSyncphp:php:php$optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Marksphp aphp nameserverphp asphp current
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|integerphp php$aliasphp php-php Thephp aliasphp fromphp thephp timeserverphp tophp setphp asphp current
php php php php php php*php php@throwsphp php Zendphp_TimeSyncphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setServerphp(php$aliasphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_timeserversphp[php$aliasphp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_timeserversphp[php$aliasphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php"php'php$aliasphp'php doesphp notphp pointphp tophp validphp timeserverphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp valuephp tophp thephp option
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$keyphp php-php Thephp optionphp'sphp identifier
php php php php php php*php php@returnphp php mixed
php php php php php php*php php@throwsphp php Zendphp_TimeSyncphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp getOptionsphp(php$keyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$keyphp php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp Zendphp_TimeSyncphp:php:php$optionsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(Zendphp_TimeSyncphp:php:php$optionsphp[php$keyphp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php returnphp Zendphp_TimeSyncphp:php:php$optionsphp[php$keyphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php"php'php$keyphp'php doesphp notphp pointphp tophp validphp optionphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp specifiedphp timeserverphp byphp alias
php php php php php php*php Ifphp nophp aliasphp isphp givenphp itphp willphp returnphp thephp currentphp timeserver
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|integerphp php$aliasphp php-php Thephp aliasphp fromphp thephp timeserverphp tophp return
php php php php php php*php php@returnphp php object
php php php php php php*php php@throwsphp php Zendphp_TimeSyncphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getServerphp(php$aliasphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$aliasphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_currentphp)php php&php&php php$thisphp-php>php_currentphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_currentphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php'therephp isphp nophp timeserverphp setphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_timeserversphp[php$aliasphp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_timeserversphp[php$aliasphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php"php'php$aliasphp'php doesphp notphp pointphp tophp validphp timeserverphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp informationphp sentphp/returnedphp fromphp thephp currentphp timeserver
php php php php php php*
php php php php php php*php php@returnphp php array
php php php php php php*php/
php php php php publicphp functionphp getInfophp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getServerphp(php)php-php>getInfophp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp thephp timeserverphp listphp usingphp thephp fallbackphp mechanism
php php php php php php*
php php php php php php*php Ifphp therephp arephp multiplephp serversphp listedphp,php thisphp methodphp willphp actphp asphp a
php php php php php php*php facadephp andphp willphp tryphp tophp returnphp thephp datephp fromphp thephp firstphp serverphp that
php php php php php php*php returnsphp aphp validphp resultphp.
php php php php php php*
php php php php php php*php php@paramphp php php php$localephp php-php OPTIONALphp locale
php php php php php php*php php@returnphp php object
php php php php php php*php php@throwsphp php Zendphp_TimeSyncphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php foreachphp php(php$thisphp-php>php_timeserversphp asphp php$aliasphp php=php>php php$serverphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$serverphp;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php returnphp php$serverphp-php>getDatephp(php$localephp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_TimeSyncphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$masterExceptionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$masterExceptionphp php=php newphp Zendphp_TimeSyncphp_Exceptionphp(php'allphp timeserversphp arephp bogusphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$masterExceptionphp-php>addExceptionphp(php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php throwphp php$masterExceptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp timeserverphp objectphp tophp thephp timeserverphp list
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$targetphp php php php-php Singlephp timeserverphp,php orphp anphp arrayphp ofphp timeserversphp.
php php php php php php*php php@paramphp php stringphp php php php php php php php$aliasphp php php php php-php Anphp aliasphp forphp thisphp timeserver
php php php php php php*php/
php php php php protectedphp functionphp php_addServerphp(php$targetphp,php php$aliasphp)
php php php php php{
php php php php php php php php ifphp php(php$posphp php=php strposphp(php$targetphp,php php'php:php/php/php'php)php)php php{
php php php php php php php php php php php php php$protocolphp php=php substrphp(php$targetphp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php$adressphp php=php substrphp(php$targetphp,php php$posphp php+php php3php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$adressphp php=php php$targetphp;
php php php php php php php php php php php php php$protocolphp php=php selfphp:php:DEFAULTphp_PROTOCOLphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$posphp php=php strrposphp(php$adressphp,php php'php:php'php)php)php php{
php php php php php php php php php php php php php$posbrphp php=php strposphp(php$adressphp,php php'php]php'php)php;
php php php php php php php php php php php php ifphp php(php$posbrphp andphp php(php$posphp php>php php$posbrphp)php)php php{
php php php php php php php php php php php php php php php php php$portphp php=php substrphp(php$adressphp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php php php php php$adressphp php=php substrphp(php$adressphp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php!php$posbrphp andphp php$posphp)php php{
php php php php php php php php php php php php php php php php php$portphp php=php substrphp(php$adressphp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php php php php php$adressphp php=php substrphp(php$adressphp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$portphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$portphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$protocolphp php=php ucfirstphp(strtolowerphp(php$protocolphp)php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$protocolphp,php php$thisphp-php>php_allowedSchemesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/TimeSyncphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_TimeSyncphp_Exceptionphp(php"php'php$protocolphp'php isphp notphp aphp supportedphp protocolphp"php)php;
php php php php php php php php php}

php php php php php php php php php$classNamephp php=php php'Zendphp_TimeSyncphp_php'php php.php php$protocolphp;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classNamephp)php;
php php php php php php php php php}
php php php php php php php php php$timeServerObjphp php=php newphp php$classNamephp(php$adressphp,php php$portphp)php;

php php php php php php php php php$thisphp-php>php_timeserversphp[php$aliasphp]php php=php php$timeServerObjphp;
php php php php php}
php}
