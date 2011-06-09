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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Popphp3php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Protocolphp_Popphp3
php{
php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp inphp secondsphp forphp initiatingphp session
php php php php php php*php/
php php php php constphp TIMEOUTphp_CONNECTIONphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php savesphp ifphp serverphp supportsphp top
php php php php php php*php php@varphp nullphp|bool
php php php php php php*php/
php php php php publicphp php$hasTopphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php socketphp tophp popphp3
php php php php php php*php php@varphp nullphp|resource
php php php php php php*php/
php php php php protectedphp php$php_socketphp;

php php php php php/php*php*
php php php php php php*php greetingphp timestampphp forphp apop
php php php php php php*php php@varphp nullphp|string
php php php php php php*php/
php php php php protectedphp php$php_timestampphp;


php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$hostphp php hostnamephp orphp IPphp addressphp ofphp POPphp3php serverphp,php ifphp givenphp connectphp(php)php isphp called
php php php php php php*php php@paramphp php intphp|nullphp php php php php$portphp php portphp ofphp POPphp3php serverphp,php nullphp forphp defaultphp php(php1php1php0php orphp php9php9php5php forphp sslphp)
php php php php php php*php php@paramphp php boolphp|stringphp php$sslphp php php usephp sslphp?php php'SSLphp'php,php php'TLSphp'php orphp false
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$hostphp php=php php'php'php,php php$portphp php=php nullphp,php php$sslphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$hostphp)php php{
php php php php php php php php php php php php php$thisphp-php>connectphp(php$hostphp,php php$portphp,php php$sslphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Publicphp destructor
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>logoutphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Openphp connectionphp tophp POPphp3php server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$hostphp php hostnamephp orphp IPphp addressphp ofphp POPphp3php server
php php php php php php*php php@paramphp php intphp|nullphp php php php php$portphp php ofphp POPphp3php serverphp,php defaultphp isphp php1php1php0php php(php9php9php5php forphp sslphp)
php php php php php php*php php@paramphp php stringphp|boolphp php$sslphp php php usephp php'SSLphp'php,php php'TLSphp'php orphp false
php php php php php php*php php@returnphp stringphp welcomephp message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php nullphp,php php$sslphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$sslphp php=php=php php'SSLphp'php)php php{
php php php php php php php php php php php php php$hostphp php=php php'sslphp:php/php/php'php php.php php$hostphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$portphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$portphp php=php php$sslphp php=php=php php'SSLphp'php php?php php9php9php5php php:php php1php1php0php;
php php php php php php php php php}

php php php php php php php php php$errnophp php php=php php php0php;
php php php php php php php php php$errstrphp php=php php'php'php;
php php php php php php php php php$thisphp-php>php_socketphp php=php php@fsockopenphp(php$hostphp,php php$portphp,php php$errnophp,php php$errstrphp,php selfphp:php:TIMEOUTphp_CONNECTIONphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_socketphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp connectphp tophp hostphp;php errorphp php=php php'php php.php php$errstrphp php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php php(errnophp php=php php'php php.php php$errnophp php.php php'php php)php'php)php;
php php php php php php php php php}

php php php php php php php php php$welcomephp php=php php$thisphp-php>readResponsephp(php)php;

php php php php php php php php strtokphp(php$welcomephp,php php'<php'php)php;
php php php php php php php php php$thisphp-php>php_timestampphp php=php strtokphp(php'php>php'php)php;
php php php php php php php php ifphp php(php!strposphp(php$thisphp-php>php_timestampphp,php php'php@php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_timestampphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_timestampphp php=php php'<php'php php.php php$thisphp-php>php_timestampphp php.php php'php>php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$sslphp php=php=php=php php'TLSphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>requestphp(php'STLSphp'php)php;
php php php php php php php php php php php php php$resultphp php=php streamphp_socketphp_enablephp_cryptophp(php$thisphp-php>php_socketphp,php truephp,php STREAMphp_CRYPTOphp_METHODphp_TLSphp_CLIENTphp)php;
php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp enablephp TLSphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$welcomephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Sendphp aphp request
php php php php php php*
php php php php php php*php php@paramphp stringphp php$requestphp yourphp requestphp withoutphp newline
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp sendRequestphp(php$requestphp)
php php php php php{
php php php php php php php php php$resultphp php=php php@fputsphp(php$thisphp-php>php_socketphp,php php$requestphp php.php php"php\rphp\nphp"php)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'sendphp failedphp php-php connectionphp closedphp?php'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php readphp aphp response
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$multilinephp responsephp hasphp multiplephp linesphp andphp shouldphp bephp readphp untilphp php"php<nlphp>php.php<nlphp>php"
php php php php php php*php php@returnphp stringphp response
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readResponsephp(php$multilinephp php=php falsephp)
php php php php php{
php php php php php php php php php$resultphp php=php php@fgetsphp(php$thisphp-php>php_socketphp)php;
php php php php php php php php ifphp php(php!isphp_stringphp(php$resultphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'readphp failedphp php-php connectionphp closedphp?php'php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php trimphp(php$resultphp)php;
php php php php php php php php ifphp php(strposphp(php$resultphp,php php'php php'php)php)php php{
php php php php php php php php php php php php listphp(php$statusphp,php php$messagephp)php php=php explodephp(php'php php'php,php php$resultphp,php php2php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$statusphp php=php php$resultphp;
php php php php php php php php php php php php php$messagephp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$statusphp php!php=php php'php+OKphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'lastphp requestphp failedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$multilinephp)php php{
php php php php php php php php php php php php php$messagephp php=php php'php'php;
php php php php php php php php php php php php php$linephp php=php fgetsphp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php php php php whilephp php(php$linephp php&php&php rtrimphp(php$linephp,php php"php\rphp\nphp"php)php php!php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$linephp[php0php]php php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$linephp php=php substrphp(php$linephp,php php1php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$messagephp php.php=php php$linephp;
php php php php php php php php php php php php php php php php php$linephp php=php fgetsphp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php php php php php}php;
php php php php php php php php php}

php php php php php php php php returnphp php$messagephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Sendphp requestphp andphp getphp resposne
php php php php php php*
php php php php php php*php php@seephp sendRequestphp(php)php,php readResponsephp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$requestphp php php php request
php php php php php php*php php@paramphp php boolphp php php php$multilinephp php multilinephp responsephp?
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php resultphp fromphp readResponsephp(php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp requestphp(php$requestphp,php php$multilinephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>sendRequestphp(php$requestphp)php;
php php php php php php php php returnphp php$thisphp-php>readResponsephp(php$multilinephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Endphp communicationphp withphp POPphp3php serverphp php(alsophp closesphp socketphp)
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp logoutphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_socketphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>requestphp(php'QUITphp'php)php;
php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php ignorephp errorphp php-php wephp'rephp closingphp thephp socketphp anyway
php php php php php php php php php}

php php php php php php php php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php$thisphp-php>php_socketphp php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp capabilitiesphp fromphp POPphp3php server
php php php php php php*
php php php php php php*php php@returnphp arrayphp listphp ofphp capabilities
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp capaphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php'CAPAphp'php,php truephp)php;
php php php php php php php php returnphp explodephp(php"php\nphp"php,php php$resultphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Loginphp tophp POPphp3php serverphp.php Canphp usephp APOP
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp php php php php php username
php php php php php php*php php@paramphp php stringphp php$passwordphp php password
php php php php php php*php php@paramphp php boolphp php php php$tryphp_apopphp php shouldphp APOPphp bephp triedphp?
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp loginphp(php$userphp,php php$passwordphp,php php$tryApopphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$tryApopphp php&php&php php$thisphp-php>php_timestampphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>requestphp(php"APOPphp php$userphp php"php php.php mdphp5php(php$thisphp-php>php_timestampphp php.php php$passwordphp)php)php;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php ignore
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"USERphp php$userphp"php)php;
php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"PASSphp php$passwordphp"php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp STATphp callphp forphp messagephp countphp andphp sizephp sum
php php php php php php*
php php php php php php*php php@paramphp php intphp php$messagesphp php outphp parameterphp withphp countphp ofphp messages
php php php php php php*php php@paramphp php intphp php$octetsphp php php php outphp parameterphp withphp sizephp inphp octectsphp ofphp messages
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp statusphp(php&php$messagesphp,php php&php$octetsphp)
php php php php php{
php php php php php php php php php$messagesphp php=php php0php;
php php php php php php php php php$octetsphp php=php php0php;
php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php'STATphp'php)php;

php php php php php php php php listphp(php$messagesphp,php php$octetsphp)php php=php explodephp(php'php php'php,php php$resultphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp LISTphp callphp forphp sizephp ofphp messagephp(sphp)
php php php php php php*
php php php php php php*php php@paramphp php intphp|nullphp php$msgnophp numberphp ofphp messagephp,php nullphp forphp all
php php php php php php*php php@returnphp intphp|arrayphp sizephp ofphp givenphp messagephp orphp listphp withphp arrayphp(numphp php=php>php sizephp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getListphp(php$msgnophp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$msgnophp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"LISTphp php$msgnophp"php)php;

php php php php php php php php php php php php listphp(php,php php$resultphp)php php=php explodephp(php'php php'php,php php$resultphp)php;
php php php php php php php php php php php php returnphp php(intphp)php$resultphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php'LISTphp'php,php truephp)php;
php php php php php php php php php$messagesphp php=php arrayphp(php)php;
php php php php php php php php php$linephp php=php strtokphp(php$resultphp,php php"php\nphp"php)php;
php php php php php php php php whilephp php(php$linephp)php php{
php php php php php php php php php php php php listphp(php$nophp,php php$sizephp)php php=php explodephp(php'php php'php,php trimphp(php$linephp)php)php;
php php php php php php php php php php php php php$messagesphp[php(intphp)php$nophp]php php=php php(intphp)php$sizephp;
php php php php php php php php php php php php php$linephp php=php strtokphp(php"php\nphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$messagesphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp UIDLphp callphp forphp gettingphp aphp uniqueid
php php php php php php*
php php php php php php*php php@paramphp php intphp|nullphp php$msgnophp numberphp ofphp messagephp,php nullphp forphp all
php php php php php php*php php@returnphp stringphp|arrayphp uniqueidphp ofphp messagephp orphp listphp withphp arrayphp(numphp php=php>php uniqueidphp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp uniqueidphp(php$msgnophp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$msgnophp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"UIDLphp php$msgnophp"php)php;

php php php php php php php php php php php php listphp(php,php php$resultphp)php php=php explodephp(php'php php'php,php php$resultphp)php;
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php'UIDLphp'php,php truephp)php;

php php php php php php php php php$resultphp php=php explodephp(php"php\nphp"php,php php$resultphp)php;
php php php php php php php php php$messagesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultphp asphp php$linephp)php php{
php php php php php php php php php php php php ifphp php(php!php$linephp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php listphp(php$nophp,php php$idphp)php php=php explodephp(php'php php'php,php trimphp(php$linephp)php,php php2php)php;
php php php php php php php php php php php php php$messagesphp[php(intphp)php$nophp]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php returnphp php$messagesphp;

php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp TOPphp callphp forphp gettingphp headersphp andphp maybephp somephp bodyphp lines
php php php php php php*php Thisphp methodphp alsophp setsphp hasTopphp php-php beforephp itphp itphp'sphp notphp knownphp ifphp topphp isphp supported
php php php php php php*
php php php php php php*php Thephp fallbackphp makesphp normalephp RETRphp callphp,php whichphp retrievesphp thephp wholephp messagephp.php Additional
php php php php php php*php linesphp arephp notphp removedphp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php php$msgnophp php php php numberphp ofphp message
php php php php php php*php php@paramphp php intphp php php$linesphp php php php numberphp ofphp wantedphp bodyphp linesphp php(emptyphp linephp isphp insertedphp afterphp headerphp linesphp)
php php php php php php*php php@paramphp php boolphp php$fallbackphp fallbackphp withphp fullphp retrievephp ifphp topphp isphp notphp supported
php php php php php php*php php@returnphp stringphp messagephp headersphp withphp wantedphp bodyphp lines
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp topphp(php$msgnophp,php php$linesphp php=php php0php,php php$fallbackphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasTopphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$fallbackphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>retrievephp(php$msgnophp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'topphp notphp supportedphp andphp nophp fallbackphp wantedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>hasTopphp php=php truephp;

php php php php php php php php php$linesphp php=php php(php!php$linesphp php|php|php php$linesphp <php php1php)php php?php php0php php:php php(intphp)php$linesphp;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"TOPphp php$msgnophp php$linesphp"php,php truephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>hasTopphp php=php falsephp;
php php php php php php php php php php php php ifphp php(php$fallbackphp)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>retrievephp(php$msgnophp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp aphp RETRphp callphp forphp retrievingphp aphp fullphp messagephp withphp headersphp andphp body
php php php php php php*
php php php php php php*php php@deprecatedphp sincephp php1php.php1php.php0php;php thisphp methodphp hasphp aphp typophp php-php pleasephp usephp retrievephp(php)
php php php php php php*php php@paramphp php intphp php$msgnophp php messagephp number
php php php php php php*php php@returnphp stringphp message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp retrivephp(php$msgnophp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>retrievephp(php$msgnophp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp aphp RETRphp callphp forphp retrievingphp aphp fullphp messagephp withphp headersphp andphp body
php php php php php php*
php php php php php php*php php@paramphp php intphp php$msgnophp php messagephp number
php php php php php php*php php@returnphp stringphp message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp retrievephp(php$msgnophp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>requestphp(php"RETRphp php$msgnophp"php,php truephp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp NOOPphp callphp,php maybephp neededphp forphp keepingphp thephp serverphp happy
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>requestphp(php'NOOPphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp aphp DELEphp countphp tophp removephp aphp message
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$msgnophp)
php php php php php{
php php php php php php php php php$thisphp-php>requestphp(php"DELEphp php$msgnophp"php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp RSETphp callphp,php whichphp rollbacksphp deletephp requests
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp undeletephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>requestphp(php'RSETphp'php)php;
php php php php php}
php}
