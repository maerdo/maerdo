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
php php*php php@versionphp php php php php$Idphp:php Smtpphp.phpphp php2php3php4php7php6php php2php0php1php0php-php1php2php-php0php6php php2php0php:php1php0php:php2php7Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Protocolphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Smtpphp implementationphp ofphp Zendphp_Mailphp_Protocolphp_Abstract
php php*
php php*php Minimumphp implementationphp accordingphp tophp RFCphp2php8php2php1php:php EHLOphp,php MAILphp FROMphp,php RCPTphp TOphp,php DATAphp,php RSETphp,php NOOPphp,php QUIT
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Protocolphp_Smtpphp extendsphp Zendphp_Mailphp_Protocolphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp transportphp methodphp forphp thephp socket
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_transportphp php=php php'tcpphp'php;


php php php php php/php*php*
php php php php php php*php Indicatesphp thatphp aphp sessionphp isphp requestedphp tophp bephp secure
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_securephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp anphp smtpphp sessionphp hasphp beenphp startedphp byphp thephp HELOphp command
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_sessphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp thephp HELOphp commandphp hasphp beenphp issues
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_helophp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp anphp smtpphp AUTHphp hasphp beenphp issuedphp andphp authenticated
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_authphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp aphp MAILphp commandphp hasphp beenphp issued
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_mailphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp onephp orphp morephp RCTPphp commandsphp havephp beenphp issued
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_rcptphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Indicatesphp thatphp DATAphp hasphp beenphp issuedphp andphp sent
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$host
php php php php php php*php php@paramphp php integerphp php$port
php php php php php php*php php@paramphp php arrayphp php php php$config
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$hostphp php=php php'php1php2php7php.php0php.php0php.php1php'php,php php$portphp php=php nullphp,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$configphp[php'sslphp'php]php)php)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$configphp[php'sslphp'php]php)php)php php{
php php php php php php php php php php php php php php php php casephp php'tlsphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_securephp php=php php'tlsphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'sslphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transportphp php=php php'sslphp'php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_securephp php=php php'sslphp'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$portphp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$portphp php=php php4php6php5php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php$configphp[php'sslphp'php]php php.php php'php isphp unsupportedphp SSLphp typephp'php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp nophp portphp hasphp beenphp specifiedphp thenphp checkphp thephp masterphp PHPphp iniphp filephp.php Defaultsphp tophp php2php5php ifphp thephp iniphp settingphp isphp nullphp.
php php php php php php php php ifphp php(php$portphp php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php(php$portphp php=php iniphp_getphp(php'smtpphp_portphp'php)php)php php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$portphp php=php php2php5php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$hostphp,php php$portphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp serverphp withphp thephp parametersphp givenphp inphp thephp constructorphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp connectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_connectphp(php$thisphp-php>php_transportphp php.php php'php:php/php/php'php php.php php$thisphp-php>php_hostphp php.php php'php:php'php.php php$thisphp-php>php_portphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Initiatephp HELOphp/EHLOphp sequencephp andphp setphp flagphp tophp indicatephp validphp smtpphp session
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hostphp Thephp clientphp hostnamephp orphp IPphp addressphp php(defaultphp:php php1php2php7php.php0php.php0php.php1php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp helophp(php$hostphp php=php php'php1php2php7php.php0php.php0php.php1php'php)
php php php php php{
php php php php php php php php php/php/php Respectphp RFCphp php2php8php2php1php andphp disallowphp HELOphp attemptsphp ifphp sessionphp isphp alreadyphp initiatedphp.
php php php php php php php php ifphp php(php$thisphp-php>php_sessphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Cannotphp issuephp HELOphp tophp existingphp sessionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Validatephp clientphp hostname
php php php php php php php php ifphp php(php!php$thisphp-php>php_validHostphp-php>isValidphp(php$hostphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(joinphp(php'php,php php'php,php php$thisphp-php>php_validHostphp-php>getMessagesphp(php)php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Initiatephp helophp sequence
php php php php php php php php php$thisphp-php>php_expectphp(php2php2php0php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php$thisphp-php>php_ehlophp(php$hostphp)php;

php php php php php php php php php/php/php Ifphp aphp TLSphp sessionphp isphp requiredphp,php commencephp negotiation
php php php php php php php php ifphp php(php$thisphp-php>php_securephp php=php=php php'tlsphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sendphp(php'STARTTLSphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_expectphp(php2php2php0php,php php1php8php0php)php;
php php php php php php php php php php php php ifphp php(php!streamphp_socketphp_enablephp_cryptophp(php$thisphp-php>php_socketphp,php truephp,php STREAMphp_CRYPTOphp_METHODphp_TLSphp_CLIENTphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Unablephp tophp connectphp viaphp TLSphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_ehlophp(php$hostphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_startSessionphp(php)php;
php php php php php php php php php$thisphp-php>authphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Sendphp EHLOphp orphp HELOphp dependingphp onphp capabilitiesphp ofphp smtpphp host
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hostphp Thephp clientphp hostnamephp orphp IPphp addressphp php(defaultphp:php php1php2php7php.php0php.php0php.php1php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_ehlophp(php$hostphp)
php php php php php{
php php php php php php php php php/php/php Supportphp forphp olderphp,php lessphp-compliantphp remotephp serversphp.php Triesphp multiplephp attemptsphp ofphp EHLOphp orphp HELOphp.
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_sendphp(php'EHLOphp php'php php.php php$hostphp)php;
php php php php php php php php php php php php php$thisphp-php>php_expectphp(php2php5php0php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_sendphp(php'HELOphp php'php php.php php$hostphp)php;
php php php php php php php php php php php php php$thisphp-php>php_expectphp(php2php5php0php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp MAILphp command
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fromphp Senderphp mailbox
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp mailphp(php$fromphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_sessphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Aphp validphp sessionphp hasphp notphp beenphp startedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_sendphp(php'MAILphp FROMphp:<php'php php.php php$fromphp php.php php'php>php'php)php;
php php php php php php php php php$thisphp-php>php_expectphp(php2php5php0php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2

php php php php php php php php php/php/php Setphp mailphp tophp truephp,php clearphp recipientsphp andphp anyphp existingphp dataphp flagsphp asphp perphp php4php.php1php.php1php.php2php ofphp RFCphp php2php8php2php1
php php php php php php php php php$thisphp-php>php_mailphp php=php truephp;
php php php php php php php php php$thisphp-php>php_rcptphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_dataphp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp RCPTphp command
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tophp Receiverphp(sphp)php mailbox
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rcptphp(php$tophp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_mailphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Nophp senderphp reversephp pathphp hasphp beenphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp rcptphp tophp truephp,php asphp perphp php4php.php1php.php1php.php3php ofphp RFCphp php2php8php2php1
php php php php php php php php php$thisphp-php>php_sendphp(php'RCPTphp TOphp:<php'php php.php php$tophp php.php php'php>php'php)php;
php php php php php php php php php$thisphp-php>php_expectphp(arrayphp(php2php5php0php,php php2php5php1php)php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php$thisphp-php>php_rcptphp php=php truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp DATAphp command
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dataphp(php$dataphp)
php php php php php{
php php php php php php php php php/php/php Ensurephp recipientsphp havephp beenphp set
php php php php php php php php ifphp php(php$thisphp-php>php_rcptphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Nophp recipientphp forwardphp pathphp hasphp beenphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_sendphp(php'DATAphp'php)php;
php php php php php php php php php$thisphp-php>php_expectphp(php3php5php4php,php php1php2php0php)php;php php/php/php Timeoutphp setphp forphp php2php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2

php php php php php php php php foreachphp php(explodephp(Zendphp_Mimephp:php:LINEENDphp,php php$dataphp)php asphp php$linephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$linephp,php php'php.php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Escapephp linesphp prefixedphp withphp aphp php'php.php'
php php php php php php php php php php php php php php php php php$linephp php=php php'php.php'php php.php php$linephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_sendphp(php$linephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_sendphp(php'php.php'php)php;
php php php php php php php php php$thisphp-php>php_expectphp(php2php5php0php,php php6php0php0php)php;php php/php/php Timeoutphp setphp forphp php1php0php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php$thisphp-php>php_dataphp php=php truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp thephp RSETphp commandphp andphp validatesphp answer
php php php php php php*
php php php php php php*php Canphp bephp usedphp tophp restorephp aphp cleanphp smtpphp communicationphp statephp whenphp aphp transactionphp hasphp beenphp cancelledphp orphp commencingphp aphp newphp transactionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rsetphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sendphp(php'RSETphp'php)php;
php php php php php php php php php/php/php MSphp ESMTPphp doesnphp'tphp followphp RFCphp,php seephp php[ZFphp-php1php3php7php7php]
php php php php php php php php php$thisphp-php>php_expectphp(arrayphp(php2php5php0php,php php2php2php0php)php)php;

php php php php php php php php php$thisphp-php>php_mailphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_rcptphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_dataphp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp thephp NOOPphp commandphp andphp validatesphp answer
php php php php php php*
php php php php php php*php Notphp usedphp byphp Zendphp_Mailphp,php couldphp bephp usedphp tophp keepphp aphp connectionphp alivephp orphp checkphp ifphp itphp isphp stillphp openphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sendphp(php'NOOPphp'php)php;
php php php php php php php php php$thisphp-php>php_expectphp(php2php5php0php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp thephp VRFYphp commandphp andphp validatesphp answer
php php php php php php*
php php php php php php*php Notphp usedphp byphp Zendphp_Mailphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp Userphp Namephp orphp eMailphp tophp verify
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp vrfyphp(php$userphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sendphp(php'VRFYphp php'php php.php php$userphp)php;
php php php php php php php php php$thisphp-php>php_expectphp(arrayphp(php2php5php0php,php php2php5php1php,php php2php5php2php)php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php}


php php php php php/php*php*
php php php php php php*php Issuesphp thephp QUITphp commandphp andphp clearsphp thephp currentphp session
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp quitphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_sessphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_sendphp(php'QUITphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_expectphp(php2php2php1php,php php3php0php0php)php;php php/php/php Timeoutphp setphp forphp php5php minutesphp asphp perphp RFCphp php2php8php2php1php php4php.php5php.php3php.php2
php php php php php php php php php php php php php$thisphp-php>php_stopSessionphp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Defaultphp authenticationphp method
php php php php php php*
php php php php php php*php Thisphp defaultphp methodphp isphp implementedphp byphp AUTHphp adaptersphp tophp properlyphp authenticatephp tophp aphp remotephp hostphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp authphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_authphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Alreadyphp authenticatedphp forphp thisphp sessionphp'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Closesphp connection
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp disconnectphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_disconnectphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Startphp mailphp session
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_startSessionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessphp php=php truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Stopphp mailphp session
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_stopSessionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessphp php=php falsephp;
php php php php php}
php}
