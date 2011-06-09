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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Validate
php php*php/
requirephp_oncephp php'Zendphp/Validatephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Validatephp_Hostname
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Hostnamephp.phpphp'php;


php/php*php*
php php*php Zendphp_Mailphp_Protocolphp_Abstract
php php*
php php*php Providesphp lowphp-levelphp methodsphp forphp concretephp adaptersphp tophp communicatephp withphp aphp remotephp mailphp serverphp andphp trackphp requestsphp andphp responsesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@todophp Implementphp proxyphp settings
php php*php/
abstractphp classphp Zendphp_Mailphp_Protocolphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Mailphp defaultphp EOLphp string
php php php php php php*php/
php php php php constphp EOLphp php=php php"php\rphp\nphp"php;


php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp inphp secondsphp forphp initiatingphp session
php php php php php php*php/
php php php php constphp TIMEOUTphp_CONNECTIONphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php Maximumphp ofphp thephp transactionphp log
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_maximumLogphp php=php php6php4php;


php php php php php/php*php*
php php php php php php*php Hostnamephp orphp IPphp addressphp ofphp remotephp server
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostphp;


php php php php php/php*php*
php php php php php php*php Portphp numberphp ofphp connection
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_portphp;


php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Validatephp tophp checkphp hostnames
php php php php php php*php php@varphp Zendphp_Validate
php php php php php php*php/
php php php php protectedphp php$php_validHostphp;


php php php php php/php*php*
php php php php php php*php Socketphp connectionphp resource
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_socketphp;


php php php php php/php*php*
php php php php php php*php Lastphp requestphp sentphp tophp server
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_requestphp;


php php php php php/php*php*
php php php php php php*php Arrayphp ofphp serverphp responsesphp tophp lastphp request
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_responsephp;


php php php php php/php*php*
php php php php php php*php Stringphp templatephp forphp parsingphp serverphp responsesphp usingphp sscanfphp php(defaultphp:php php3php digitphp codephp andphp responsephp stringphp)
php php php php php php*php php@varphp resource
php php php php php php*php php@deprecatedphp Sincephp php1php.php1php0php.php3
php php php php php php*php/
php php php php protectedphp php$php_templatephp php=php php'php%dphp%sphp'php;


php php php php php/php*php*
php php php php php php*php Logphp ofphp mailphp requestsphp andphp serverphp responsesphp forphp aphp session
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_logphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$hostphp OPTIONALphp Hostnamephp ofphp remotephp connectionphp php(defaultphp:php php1php2php7php.php0php.php0php.php1php)
php php php php php php*php php@paramphp php integerphp php$portphp OPTIONALphp Portphp numberphp php(defaultphp:php nullphp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$hostphp php=php php'php1php2php7php.php0php.php0php.php1php'php,php php$portphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validHostphp php=php newphp Zendphp_Validatephp(php)php;
php php php php php php php php php$thisphp-php>php_validHostphp-php>addValidatorphp(newphp Zendphp_Validatephp_Hostnamephp(Zendphp_Validatephp_Hostnamephp:php:ALLOWphp_ALLphp)php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_validHostphp-php>isValidphp(php$hostphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(joinphp(php'php,php php'php,php php$thisphp-php>php_validHostphp-php>getMessagesphp(php)php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hostphp php=php php$hostphp;
php php php php php php php php php$thisphp-php>php_portphp php=php php$portphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Classphp destructorphp tophp cleanupphp openphp resources
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_disconnectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp maximumphp logphp size
php php php php php php*
php php php php php php*php php@paramphp integerphp php$maximumLogphp Maximumphp logphp size
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setMaximumLogphp(php$maximumLogphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_maximumLogphp php=php php(intphp)php php$maximumLogphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp maximumphp logphp size
php php php php php php*
php php php php php php*php php@returnphp intphp thephp maximumphp logphp size
php php php php php php*php/
php php php php publicphp functionphp getMaximumLogphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_maximumLogphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Createphp aphp connectionphp tophp thephp remotephp host
php php php php php php*
php php php php php php*php Concretephp adaptersphp forphp thisphp classphp willphp implementphp theirphp ownphp uniquephp connectphp scriptsphp,php usingphp thephp php_connectphp(php)php methodphp tophp createphp thephp socketphp resourcephp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp connectphp(php)php;


php php php php php/php*php*
php php php php php php*php Retrievephp thephp lastphp clientphp request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievephp thephp lastphp serverphp response
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievephp thephp transactionphp log
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLogphp(php)
php php php php php{
php php php php php php php php returnphp implodephp(php'php'php,php php$thisphp-php>php_logphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Resetphp thephp transactionphp log
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp resetLogphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp thephp transactionphp log
php php php php php php*
php php php php php php*php php@paramphp php stringphp newphp transaction
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addLogphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_maximumLogphp php>php=php php0php php&php&php countphp(php$thisphp-php>php_logphp)php php>php=php php$thisphp-php>php_maximumLogphp)php php{
php php php php php php php php php php php php arrayphp_shiftphp(php$thisphp-php>php_logphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_logphp[php]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp serverphp usingphp thephp suppliedphp transportphp andphp target
php php php php php php*
php php php php php php*php Anphp examplephp php$remotephp stringphp mayphp bephp php'tcpphp:php/php/mailphp.examplephp.comphp:php2php5php'php orphp php'sshphp:php/php/hostnamephp.comphp:php2php2php2php2php'
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$remotephp Remote
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php$remotephp)
php php php php php{
php php php php php php php php php$errorNumphp php=php php0php;
php php php php php php php php php$errorStrphp php=php php'php'php;

php php php php php php php php php/php/php openphp connection
php php php php php php php php php$thisphp-php>php_socketphp php=php php@streamphp_socketphp_clientphp(php$remotephp,php php$errorNumphp,php php$errorStrphp,php selfphp:php:TIMEOUTphp_CONNECTIONphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_socketphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$errorNumphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$errorStrphp php=php php'Couldphp notphp openphp socketphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php$errorStrphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$resultphp php=php php$thisphp-php>php_setStreamTimeoutphp(selfphp:php:TIMEOUTphp_CONNECTIONphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Couldphp notphp setphp streamphp timeoutphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Disconnectphp fromphp remotephp hostphp andphp freephp resource
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_disconnectphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Sendphp thephp givenphp requestphp followedphp byphp aphp LINEENDphp tophp thephp serverphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$request
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp integerphp|booleanphp Numberphp ofphp bytesphp writtenphp tophp remotephp host
php php php php php php*php/
php php php php protectedphp functionphp php_sendphp(php$requestphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Nophp connectionphp hasphp beenphp establishedphp tophp php'php php.php php$thisphp-php>php_hostphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;

php php php php php php php php php$resultphp php=php fwritephp(php$thisphp-php>php_socketphp,php php$requestphp php.php selfphp:php:EOLphp)php;

php php php php php php php php php/php/php Savephp requestphp tophp internalphp log
php php php php php php php php php$thisphp-php>php_addLogphp(php$requestphp php.php selfphp:php:EOLphp)php;

php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Couldphp notphp sendphp requestphp tophp php'php php.php php$thisphp-php>php_hostphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp aphp linephp fromphp thephp streamphp.
php php php php php php*
php php php php php php*php php@varphp php php php integerphp php$timeoutphp Perphp-requestphp timeoutphp valuephp ifphp applicable
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_receivephp(php$timeoutphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_socketphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Nophp connectionphp hasphp beenphp establishedphp tophp php'php php.php php$thisphp-php>php_hostphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Adaptersphp mayphp wishphp tophp supplyphp perphp-commendphp timeoutsphp accordingphp tophp appropriatephp RFC
php php php php php php php php ifphp php(php$timeoutphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_setStreamTimeoutphp(php$timeoutphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Retrievephp response
php php php php php php php php php$reponsephp php=php fgetsphp(php$thisphp-php>php_socketphp,php php1php0php2php4php)php;

php php php php php php php php php/php/php Savephp requestphp tophp internalphp log
php php php php php php php php php$thisphp-php>php_addLogphp(php$reponsephp)php;

php php php php php php php php php/php/php Checkphp metaphp dataphp tophp ensurephp connectionphp isphp stillphp valid
php php php php php php php php php$infophp php=php streamphp_getphp_metaphp_dataphp(php$thisphp-php>php_socketphp)php;

php php php php php php php php ifphp php(php!emptyphp(php$infophp[php'timedphp_outphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php$thisphp-php>php_hostphp php.php php'php hasphp timedphp outphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$reponsephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'Couldphp notphp readphp fromphp php'php php.php php$thisphp-php>php_hostphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$reponsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsephp serverphp responsephp forphp successfulphp codes
php php php php php php*
php php php php php php*php Readphp thephp responsephp fromphp thephp streamphp andphp checkphp forphp expectedphp returnphp codephp.
php php php php php php*php Throwsphp aphp Zendphp_Mailphp_Protocolphp_Exceptionphp ifphp anphp unexpectedphp codephp isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$codephp Onephp orphp morephp codesphp thatphp indicatephp aphp successfulphp response
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@returnphp stringphp Lastphp linephp ofphp responsephp string
php php php php php php*php/
php php php php protectedphp functionphp php_expectphp(php$codephp,php php$timeoutphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php arrayphp(php)php;
php php php php php php php php php$cmdphp php php=php php'php'php;
php php php php php php php php php$morephp php=php php'php'php;
php php php php php php php php php$msgphp php php=php php'php'php;
php php php php php php php php php$errMsgphp php=php php'php'php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$codephp)php)php php{
php php php php php php php php php php php php php$codephp php=php arrayphp(php$codephp)php;
php php php php php php php php php}

php php php php php php php php dophp php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp[php]php php=php php$resultphp php=php php$thisphp-php>php_receivephp(php$timeoutphp)php;
php php php php php php php php php php php php listphp(php$cmdphp,php php$morephp,php php$msgphp)php php=php pregphp_splitphp(php'php/php(php[php\sphp-php]php+php)php/php'php,php php$resultphp,php php2php,php PREGphp_SPLITphp_DELIMphp_CAPTUREphp)php;

php php php php php php php php php php php php ifphp php(php$errMsgphp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$errMsgphp php.php=php php'php php'php php.php php$msgphp;
php php php php php php php php php php php php php}php elseifphp php(php$cmdphp php=php=php=php nullphp php|php|php php!inphp_arrayphp(php$cmdphp,php php$codephp)php)php php{
php php php php php php php php php php php php php php php php php$errMsgphp php=php php php$msgphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php whilephp php(strposphp(php$morephp,php php'php-php'php)php php=php=php=php php0php)php;php php/php/php Thephp php'php-php'php messagephp prefixphp indicatesphp anphp informationphp stringphp insteadphp ofphp aphp responsephp stringphp.

php php php php php php php php ifphp php(php$errMsgphp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php$errMsgphp,php php$cmdphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$msgphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp streamphp timeout
php php php php php php*
php php php php php php*php php@paramphp integerphp php$timeout
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_setStreamTimeoutphp(php$timeoutphp)
php php php php php{
php php php php php php php returnphp streamphp_setphp_timeoutphp(php$thisphp-php>php_socketphp,php php$timeoutphp)php;
php php php php php}
php}
