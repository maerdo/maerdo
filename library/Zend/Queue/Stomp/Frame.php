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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Framephp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Stompphp_FrameInterface
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Stompphp/FrameInterfacephp.phpphp'php;

php/php*php*
php php*php Thisphp classphp representsphp aphp Stompphp Frame
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Stompphp_Frame
php php php php implementsphp Zendphp_Queuephp_Stompphp_FrameInterface
php{
php php php php constphp ENDphp_OFphp_FRAMEphp php php php=php php"php\xphp0php0php\nphp"php;
php php php php constphp CONTENTphp_LENGTHphp php=php php'contentphp-lengthphp'php;
php php php php constphp EOLphp php php php php php php php php php php php php=php php"php\nphp"php;

php php php php php/php*php*
php php php php php php*php Headersphp forphp thephp frame
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp commandphp forphp thephp frame
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_commandphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp bodyphp ofphp thephp frame
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_bodyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Dophp thephp contentphp-lengthphp automaticallyphp?
php php php php php php*php/
php php php php protectedphp php$php_autoContentLengthphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setHeadersphp(arrayphp(php)php)php;
php php php php php php php php php$thisphp-php>setBodyphp(nullphp)php;
php php php php php php php php php$thisphp-php>setCommandphp(nullphp)php;
php php php php php php php php php$thisphp-php>setAutoContentLengthphp(truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp thephp statusphp ofphp thephp autophp contentphp length
php php php php php php*
php php php php php php*php Ifphp AutoContentLengthphp isphp truephp thisphp codephp willphp automaticallyphp putphp the
php php php php php php*php contentphp-lengthphp headerphp inphp,php evenphp ifphp itphp isphp alreadyphp setphp byphp thephp userphp.
php php php php php php*
php php php php php php*php Thisphp isphp donephp tophp makephp thephp messagephp sendingphp morephp reliablephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAutoContentLengthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoContentLengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAutoContentLengthphp(php)
php php php php php php*
php php php php php php*php Setphp thephp valuephp onphp orphp offphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$auto
php php php php php php*php php@returnphp php$thisphp;
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAutoContentLengthphp(php$autophp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_boolphp(php$autophp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$autophp isphp notphp aphp booleanphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_autoContentLengthphp php=php php$autophp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp headers
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp headers
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp arrayphp valuesphp arephp notphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$headers
php php php php php php*php php@returnphp php$this
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeadersphp(arrayphp php$headersphp)
php php php php php{
php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setHeaderphp(php$headerphp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp valuephp forphp aphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Frame
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$headerphp,php php$valuephp)php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$headerphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$headerphp isphp notphp aphp stringphp:php php'php php.php printphp_rphp(php$headerphp,php truephp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$valuephp isphp notphp aphp stringphp:php php'php php.php printphp_rphp(php$valuephp,php truephp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_headersphp[php$headerphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp valuephp forphp aphp header
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp headerphp doesphp notphp existphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$headerphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$headerphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$headerphp isphp notphp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$thisphp-php>php_headersphp[php$headerphp]php)
php php php php php php php php php php php php php?php php$thisphp-php>php_headersphp[php$headerphp]
php php php php php php php php php php php php php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp bodyphp forphp thisphp frame
php php php php php php*
php php php php php php*php Returnsphp falsephp ifphp thephp bodyphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@returnphp falsephp|string
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bodyphp php=php=php=php null
php php php php php php php php php php php php php?php false
php php php php php php php php php php php php php:php php$thisphp-php>php_bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp bodyphp forphp thisphp frame
php php php php php php*
php php php php php php*php Setphp tophp nullphp forphp nophp bodyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$body
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Frame
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setBodyphp(php$bodyphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$bodyphp)php php&php&php php$bodyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$bodyphp isphp notphp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_bodyphp php=php php$bodyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp commandphp forphp thisphp frame
php php php php php php*
php php php php php php*php Returnphp falsephp ifphp thephp commandphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php publicphp functionphp getCommandphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_commandphp php=php=php=php null
php php php php php php php php php php php php php?php false
php php php php php php php php php php php php php:php php$thisphp-php>php_commandphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp bodyphp forphp thisphp frame
php php php php php php*
php php php php php php*php php@paramphp php stringphp|null
php php php php php php*php php@returnphp Zendphp_Queuephp_Stompphp_Frame
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCommandphp(php$commandphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$commandphp)php php&php&php php$commandphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$commandphp isphp notphp aphp stringphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_commandphp php=php php$commandphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Takesphp thephp currentphp parametersphp andphp returnsphp aphp Stompphp Frame
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp toFramephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getCommandphp(php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Youphp mustphp setphp thephp commandphp'php)php;
php php php php php php php php php}

php php php php php php php php php$commandphp php=php php$thisphp-php>getCommandphp(php)php;
php php php php php php php php php$headersphp php=php php$thisphp-php>getHeadersphp(php)php;
php php php php php php php php php$bodyphp php php php php=php php$thisphp-php>getBodyphp(php)php;
php php php php php php php php php$framephp php php php=php php'php'php;

php php php php php php php php php/php/php addphp aphp contentphp-lengthphp tophp thephp SENDphp commandphp.
php php php php php php php php php/php/php php@seephp httpphp:php/php/stompphp.codehausphp.orgphp/Protocol
php php php php php php php php ifphp php(php$thisphp-php>getAutoContentLengthphp(php)php)php php{
php php php php php php php php php php php php php$headersphp[selfphp:php:CONTENTphp_LENGTHphp]php php=php strlenphp(php$thisphp-php>getBodyphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Command
php php php php php php php php php$framephp php=php php$commandphp php.php selfphp:php:EOLphp;

php php php php php php php php php/php/php Headers
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php$framephp php.php=php php$keyphp php.php php'php:php php'php php.php php$valuephp php.php selfphp:php:EOLphp;
php php php php php php php php php}

php php php php php php php php php/php/php Seperator
php php php php php php php php php$framephp php.php=php selfphp:php:EOLphp;php php/php/php blankphp linephp requiredphp byphp protocol

php php php php php php php php php/php/php addphp thephp bodyphp ifphp any
php php php php php php php php ifphp php(php$bodyphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$framephp php.php=php php$bodyphp;
php php php php php php php php php}
php php php php php php php php php$framephp php.php=php selfphp:php:ENDphp_OFphp_FRAMEphp;

php php php php php php php php returnphp php$framephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@seephp toFramephp(php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>toFramephp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Queuephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$returnphp php=php php'php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Acceptsphp aphp framephp andphp deconstructsphp thephp framephp intophp itsphp componentphp parts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$framephp php-php aphp stompphp frame
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp fromFramephp(php$framephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$framephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'php$framephp isphp notphp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$headersphp php=php arrayphp(php)php;
php php php php php php php php php$bodyphp php php php php=php nullphp;
php php php php php php php php php$commandphp php=php falsephp;
php php php php php php php php php$headerphp php php=php php'php'php;

php php php php php php php php php/php/php separatephp thephp headersphp andphp thephp body
php php php php php php php php php$matchphp php=php selfphp:php:EOLphp php.php selfphp:php:EOLphp;
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php'php php.php php$matchphp php.php php'php/php'php,php php$framephp)php)php php{
php php php php php php php php php php php php listphp php(php$headerphp,php php$bodyphp)php php=php explodephp(php$matchphp,php php$framephp,php php2php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$headerphp php=php php$framephp;
php php php php php php php php php}

php php php php php php php php php/php/php blowphp upphp headers
php php php php php php php php php$headersphp php=php explodephp(selfphp:php:EOLphp,php php$headerphp)php;
php php php php php php php php unsetphp(php$headerphp)php;

php php php php php php php php php/php/php getphp thephp commandphp php(firstphp linephp)
php php php php php php php php php$thisphp-php>setCommandphp(arrayphp_shiftphp(php$headersphp)php)php;

php php php php php php php php php/php/php setphp eachphp ofphp thephp headersphp.
php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$headerphp,php php'php:php'php)php php>php php0php)php php{
php php php php php php php php php php php php php php php php listphp(php$namephp,php php$valuephp)php php=php explodephp(php'php:php'php,php php$headerphp,php php2php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setHeaderphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php cropphp thephp bodyphp ifphp contentphp-lengthphp isphp present
php php php php php php php php ifphp php(php$thisphp-php>getHeaderphp(selfphp:php:CONTENTphp_LENGTHphp)php php!php=php=php falsephp php)php php{
php php php php php php php php php php php php php$lengthphp php=php php(intphp)php php$thisphp-php>getHeaderphp(selfphp:php:CONTENTphp_LENGTHphp)php;
php php php php php php php php php php php php php$bodyphp php php php=php substrphp(php$bodyphp,php php0php,php php$lengthphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setBodyphp(php$bodyphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
