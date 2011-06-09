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
php php*php php@versionphp php php php php$Idphp:php Imapphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Protocolphp_Imap
php{
php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp inphp secondsphp forphp initiatingphp session
php php php php php php*php/
php php php php constphp TIMEOUTphp_CONNECTIONphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php socketphp tophp imapphp server
php php php php php php*php php@varphp resourcephp|null
php php php php php php*php/
php php php php protectedphp php$php_socketphp;

php php php php php/php*php*
php php php php php php*php counterphp forphp requestphp tag
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_tagCountphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php$hostphp php hostnamephp orphp IPphp addressphp ofphp IMAPphp serverphp,php ifphp givenphp connectphp(php)php isphp called
php php php php php php*php php@paramphp php intphp|nullphp php$portphp php portphp ofphp IMAPphp serverphp,php nullphp forphp defaultphp php(php1php4php3php orphp php9php9php3php forphp sslphp)
php php php php php php*php php@paramphp php boolphp php php php php php$sslphp php php usephp sslphp?php php'SSLphp'php,php php'TLSphp'php orphp false
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$hostphp php=php php'php'php,php php$portphp php=php nullphp,php php$sslphp php=php falsephp)
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
php php php php php php*php Openphp connectionphp tophp IMAPphp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$hostphp php hostnamephp orphp IPphp addressphp ofphp IMAPphp server
php php php php php php*php php@paramphp php intphp|nullphp php php php php$portphp php ofphp IMAPphp serverphp,php defaultphp isphp php1php4php3php php(php9php9php3php forphp sslphp)
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
php php php php php php php php php php php php php$portphp php=php php$sslphp php=php=php=php php'SSLphp'php php?php php9php9php3php php:php php1php4php3php;
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

php php php php php php php php ifphp php(php!php$thisphp-php>php_assumedNextLinephp(php'php*php OKphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'hostphp doesnphp\php'tphp allowphp connectionphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$sslphp php=php=php=php php'TLSphp'php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>requestAndResponsephp(php'STARTTLSphp'php)php;
php php php php php php php php php php php php php$resultphp php=php php$resultphp php&php&php streamphp_socketphp_enablephp_cryptophp(php$thisphp-php>php_socketphp,php truephp,php STREAMphp_CRYPTOphp_METHODphp_TLSphp_CLIENTphp)php;
php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp enablephp TLSphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp thephp nextphp linephp fromphp socketphp withphp errorphp checkingphp,php butphp nothingphp else
php php php php php php*
php php php php php php*php php@returnphp stringphp nextphp line
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_nextLinephp(php)
php php php php php{
php php php php php php php php php$linephp php=php php@fgetsphp(php$thisphp-php>php_socketphp)php;
php php php php php php php php ifphp php(php$linephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp readphp php-php connectionphp closedphp?php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$linephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp nextphp linephp andphp assumephp itphp startsphp withphp php$startphp.php somephp requestsphp givephp aphp simple
php php php php php php*php feedbackphp sophp wephp canphp quicklyphp checkphp ifphp wephp canphp gophp onphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$startphp thephp firstphp bytesphp wephp assumephp tophp bephp inphp thephp nextphp line
php php php php php php*php php@returnphp boolphp linephp startsphp withphp php$start
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_assumedNextLinephp(php$startphp)
php php php php php{
php php php php php php php php php$linephp php=php php$thisphp-php>php_nextLinephp(php)php;
php php php php php php php php returnphp strposphp(php$linephp,php php$startphp)php php=php=php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp nextphp linephp andphp splitphp thephp tagphp.php thatphp'sphp thephp normalphp casephp forphp aphp responsephp line
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp tagphp ofphp linephp isphp returnedphp byphp reference
php php php php php php*php php@returnphp stringphp nextphp line
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_nextTaggedLinephp(php&php$tagphp)
php php php php php{
php php php php php php php php php$linephp php=php php$thisphp-php>php_nextLinephp(php)php;

php php php php php php php php php/php/php seperatephp tagphp fromphp line
php php php php php php php php listphp(php$tagphp,php php$linephp)php php=php explodephp(php'php php'php,php php$linephp,php php2php)php;

php php php php php php php php returnphp php$linephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php splitphp aphp givenphp linephp inphp tokensphp.php aphp tokenphp isphp literalphp ofphp anyphp formphp orphp aphp list
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$linephp linephp tophp decode
php php php php php php*php php@returnphp arrayphp tokensphp,php literalsphp arephp returnedphp asphp stringphp,php listsphp asphp array
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_decodeLinephp(php$linephp)
php php php php php{
php php php php php php php php php$tokensphp php=php arrayphp(php)php;
php php php php php php php php php$stackphp php=php arrayphp(php)php;

php php php php php php php php php/php*
php php php php php php php php php php php php Wephp startphp tophp decodephp thephp responsephp herephp.php Thephp unterstoodphp tokensphp arephp:
php php php php php php php php php php php php php php php php literal
php php php php php php php php php php php php php php php php php"literalphp"php orphp alsophp php"litphp\php\erphp\php"alphp"
php php php php php php php php php php php php php php php php php{bytesphp}php<NLphp>literal
php php php php php php php php php php php php php php php php php(literalsphp*php)
php php php php php php php php php php php php Allphp tokensphp arephp returnedphp inphp anphp arrayphp.php Literalsphp inphp bracesphp php(thephp lastphp unterstood
php php php php php php php php php php php php tokenphp inphp thephp listphp)php arephp returnedphp asphp anphp arrayphp ofphp tokensphp.php Iphp.ephp.php thephp followingphp responsephp:
php php php php php php php php php php php php php php php php php"foophp"php bazphp php{php3php}php<NLphp>barphp php(php"fphp\php\php\php"oophp"php barphp)
php php php php php php php php php php php php wouldphp bephp returnedphp asphp:
php php php php php php php php php php php php php php php php arrayphp(php'foophp'php,php php'bazphp'php,php php'barphp'php,php arrayphp(php'fphp\php\php\php"oophp'php,php php'barphp'php)php)php;

php php php php php php php php php php php php php/php/php TODOphp:php addphp handlingphp ofphp php'php[php'php andphp php'php]php'php tophp parserphp forphp easierphp handlingphp ofphp responsephp text
php php php php php php php php php*php/
php php php php php php php php php/php/php php replacephp anyphp traillingphp php<NLphp>php includingphp spacesphp withphp aphp singlephp space
php php php php php php php php php$linephp php=php rtrimphp(php$linephp)php php.php php'php php'php;
php php php php php php php php whilephp php(php(php$posphp php=php strposphp(php$linephp,php php'php php'php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$tokenphp php=php substrphp(php$linephp,php php0php,php php$posphp)php;
php php php php php php php php php php php php whilephp php(php$tokenphp[php0php]php php=php=php php'php(php'php)php php{
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$stackphp,php php$tokensphp)php;
php php php php php php php php php php php php php php php php php$tokensphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$tokenphp php=php substrphp(php$tokenphp,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$tokenphp[php0php]php php=php=php php'php"php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php%php^php\php(php*php"php(php(php.php|php\php\php\php\php|php\php\php"php)php*php?php)php"php php*php%php'php,php php$linephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tokensphp[php]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php$linephp php=php substrphp(php$linephp,php strlenphp(php$matchesphp[php0php]php)php)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$tokenphp[php0php]php php=php=php php'php{php'php)php php{
php php php php php php php php php php php php php php php php php$endPosphp php=php strposphp(php$tokenphp,php php'php}php'php)php;
php php php php php php php php php php php php php php php php php$charsphp php=php substrphp(php$tokenphp,php php1php,php php$endPosphp php-php php1php)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$charsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tokenphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php whilephp php(strlenphp(php$tokenphp)php <php php$charsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp php.php=php php$thisphp-php>php_nextLinephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$linephp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(strlenphp(php$tokenphp)php php>php php$charsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$linephp php=php substrphp(php$tokenphp,php php$charsphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp php=php substrphp(php$tokenphp,php php0php,php php$charsphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$linephp php.php=php php$thisphp-php>php_nextLinephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$tokensphp[php]php php=php php$tokenphp;
php php php php php php php php php php php php php php php php php php php php php$linephp php=php trimphp(php$linephp)php php.php php'php php'php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$stackphp php&php&php php$tokenphp[strlenphp(php$tokenphp)php php-php php1php]php php=php=php php'php)php'php)php php{
php php php php php php php php php php php php php php php php php/php/php closingphp bracesphp arephp notphp seperatedphp byphp spacesphp,php sophp wephp needphp tophp countphp them
php php php php php php php php php php php php php php php php php$bracesphp php=php strlenphp(php$tokenphp)php;
php php php php php php php php php php php php php php php php php$tokenphp php=php rtrimphp(php$tokenphp,php php'php)php'php)php;
php php php php php php php php php php php php php php php php php/php/php onlyphp countphp bracesphp ifphp morephp thanphp one
php php php php php php php php php php php php php php php php php$bracesphp php-php=php strlenphp(php$tokenphp)php php+php php1php;
php php php php php php php php php php php php php php php php php/php/php onlyphp addphp ifphp tokenphp hadphp morephp thanphp justphp closingphp braces
php php php php php php php php php php php php php php php php ifphp php(rtrimphp(php$tokenphp)php php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$tokensphp[php]php php=php rtrimphp(php$tokenphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tokenphp php=php php$tokensphp;
php php php php php php php php php php php php php php php php php$tokensphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php/php/php specialphp handlinephp ifphp morephp thanphp onephp closingphp brace
php php php php php php php php php php php php php php php php whilephp php(php$bracesphp-php-php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$tokensphp[php]php php=php php$tokenphp;
php php php php php php php php php php php php php php php php php php php php php$tokenphp php=php php$tokensphp;
php php php php php php php php php php php php php php php php php php php php php$tokensphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$tokensphp[php]php php=php php$tokenphp;
php php php php php php php php php php php php php$linephp php=php substrphp(php$linephp,php php$posphp php+php php1php)php;
php php php php php php php php php}

php php php php php php php php php/php/php maybephp thephp serverphp forgotphp tophp sendphp somephp closingphp braces
php php php php php php php php whilephp php(php$stackphp)php php{
php php php php php php php php php php php php php$childphp php=php php$tokensphp;
php php php php php php php php php php php php php$tokensphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php$tokensphp[php]php php=php php$childphp;
php php php php php php php php php}

php php php php php php php php returnphp php$tokensphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php readphp aphp responsephp php"linephp"php php(couldphp alsophp bephp morephp thanphp onephp realphp linephp ifphp responsephp hasphp php{php.php.php}php<NLphp>php)
php php php php php php*php andphp dophp aphp simplephp decode
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php php$tokensphp php php php decodedphp tokensphp arephp returnedphp byphp referencephp,php ifphp php$dontParse
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp truephp thephp unparsedphp linephp isphp returnedphp here
php php php php php php*php php@paramphp php stringphp php php php php php php php php$wantedTagphp checkphp forphp thisphp tagphp forphp responsephp codephp.php Defaultphp php'php*php'php is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuationphp tagphp.
php php php php php php*php php@paramphp php boolphp php php php php php php php php php php$dontParsephp ifphp truephp onlyphp thephp unparsedphp linephp isphp returnedphp php$tokens
php php php php php php*php php@returnphp boolphp ifphp returnedphp tagphp matchesphp wantedphp tag
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readLinephp(php&php$tokensphp php=php arrayphp(php)php,php php$wantedTagphp php=php php'php*php'php,php php$dontParsephp php=php falsephp)
php php php php php{
php php php php php php php php php$linephp php=php php$thisphp-php>php_nextTaggedLinephp(php$tagphp)php;
php php php php php php php php ifphp php(php!php$dontParsephp)php php{
php php php php php php php php php php php php php$tokensphp php=php php$thisphp-php>php_decodeLinephp(php$linephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tokensphp php=php php$linephp;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp tagphp isphp wantedphp tagphp wephp mightphp bephp atphp thephp endphp ofphp aphp multilinephp response
php php php php php php php php returnphp php$tagphp php=php=php php$wantedTagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php readphp allphp linesphp ofphp responsephp untilphp givenphp tagphp isphp foundphp php(lastphp linephp ofphp responsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$tagphp php php php php php php thephp tagphp ofphp yourphp request
php php php php php php*php php@paramphp php stringphp|arrayphp php$filterphp php php php youphp canphp filterphp thephp responsephp sophp youphp getphp onlyphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php givenphp responsephp lines
php php php php php php*php php@paramphp php boolphp php php php php php php php php php$dontParsephp ifphp truephp everyphp linephp isphp returnedphp unparsedphp insteadphp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp decodedphp tokens
php php php php php php*php php@returnphp nullphp|boolphp|arrayphp tokensphp ifphp successphp,php falsephp ifphp errorphp,php nullphp ifphp badphp request
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readResponsephp(php$tagphp,php php$dontParsephp php=php falsephp)
php php php php php{
php php php php php php php php php$linesphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php!php$thisphp-php>readLinephp(php$tokensphp,php php$tagphp,php php$dontParsephp)php)php php{
php php php php php php php php php php php php php$linesphp[php]php php=php php$tokensphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dontParsephp)php php{
php php php php php php php php php php php php php/php/php lastphp tophp charsphp arephp stillphp neededphp forphp responsephp code
php php php php php php php php php php php php php$tokensphp php=php arrayphp(substrphp(php$tokensphp,php php0php,php php2php)php)php;
php php php php php php php php php}
php php php php php php php php php/php/php lastphp linephp hasphp responsephp code
php php php php php php php php ifphp php(php$tokensphp[php0php]php php=php=php php'OKphp'php)php php{
php php php php php php php php php php php php returnphp php$linesphp php?php php$linesphp php:php truephp;
php php php php php php php php php}php elsephp ifphp php(php$tokensphp[php0php]php php=php=php php'NOphp'php)php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php sendphp aphp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$commandphp yourphp requestphp command
php php php php php php*php php@paramphp php arrayphp php php$tokensphp php additionalphp parametersphp tophp commandphp,php usephp escapeStringphp(php)php tophp prepare
php php php php php php*php php@paramphp php stringphp php$tagphp php php php php providephp aphp tagphp otherwisephp anphp autogeneratedphp isphp returned
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp sendRequestphp(php$commandphp,php php$tokensphp php=php arrayphp(php)php,php php&php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$tagphp)php php{
php php php php php php php php php php php php php+php+php$thisphp-php>php_tagCountphp;
php php php php php php php php php php php php php$tagphp php=php php'TAGphp'php php.php php$thisphp-php>php_tagCountphp;
php php php php php php php php php}

php php php php php php php php php$linephp php=php php$tagphp php.php php'php php'php php.php php$commandphp;

php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$tokenphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php@fputsphp(php$thisphp-php>php_socketphp,php php$linephp php.php php'php php'php php.php php$tokenphp[php0php]php php.php php"php\rphp\nphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp writephp php-php connectionphp closedphp?php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_assumedNextLinephp(php'php+php php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp sendphp literalphp stringphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$linephp php=php php$tokenphp[php1php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$linephp php.php=php php'php php'php php.php php$tokenphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php@fputsphp(php$thisphp-php>php_socketphp,php php$linephp php.php php"php\rphp\nphp"php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'cannotphp writephp php-php connectionphp closedphp?php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php sendphp aphp requestphp andphp getphp responsephp atphp once
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$commandphp php php commandphp asphp inphp sendRequestphp(php)
php php php php php php*php php@paramphp php arrayphp php php$tokensphp php php php parametersphp asphp inphp sendRequestphp(php)
php php php php php php*php php@paramphp php boolphp php php php$dontParsephp ifphp truephp unparsedphp linesphp arephp returnedphp insteadphp ofphp tokens
php php php php php php*php php@returnphp mixedphp responsephp asphp inphp readResponsephp(php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp requestAndResponsephp(php$commandphp,php php$tokensphp php=php arrayphp(php)php,php php$dontParsephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>sendRequestphp(php$commandphp,php php$tokensphp,php php$tagphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>readResponsephp(php$tagphp,php php$dontParsephp)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php escapephp onephp orphp morephp literalsphp iphp.ephp.php forphp sendRequest
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$stringphp thephp literalphp/php-s
php php php php php php*php php@returnphp stringphp|arrayphp escapephp literalsphp,php literalsphp withphp newlinephp arphp returned
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php asphp arrayphp(php'php{sizephp}php'php,php php'stringphp'php)php;
php php php php php php*php/
php php php php publicphp functionphp escapeStringphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(funcphp_numphp_argsphp(php)php <php php2php)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$stringphp,php php"php\nphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php'php{php'php php.php strlenphp(php$stringphp)php php.php php'php}php'php,php php$stringphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php'php"php'php php.php strphp_replacephp(arrayphp(php'php\php\php'php,php php'php"php'php)php,php arrayphp(php'php\php\php\php\php'php,php php'php\php\php"php'php)php,php php$stringphp)php php.php php'php"php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(funcphp_getphp_argsphp(php)php asphp php$stringphp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php php$thisphp-php>escapeStringphp(php$stringphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php escapephp aphp listphp withphp literalsphp orphp lists
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$listphp listphp withphp literalsphp orphp listsphp asphp PHPphp array
php php php php php php*php php@returnphp stringphp escapedphp listphp forphp imap
php php php php php php*php/
php php php php publicphp functionphp escapeListphp(php$listphp)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$listphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$vphp)php)php php{
php/php/php php php php php php php php php php php php php php php$resultphp[php]php php=php php$thisphp-php>escapeStringphp(php$vphp)php;
php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$vphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php]php php=php php$thisphp-php>escapeListphp(php$vphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php'php(php'php php.php implodephp(php'php php'php,php php$resultphp)php php.php php'php)php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loginphp tophp IMAPphp serverphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp php php php php php username
php php php php php php*php php@paramphp php stringphp php$passwordphp php password
php php php php php php*php php@returnphp boolphp success
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp loginphp(php$userphp,php php$passwordphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'LOGINphp'php,php php$thisphp-php>escapeStringphp(php$userphp,php php$passwordphp)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php logoutphp ofphp imapphp server
php php php php php php*
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp logoutphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php ifphp php(php$thisphp-php>php_socketphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>requestAndResponsephp(php'LOGOUTphp'php,php arrayphp(php)php,php truephp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php ignoringphp exception
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_socketphp)php;
php php php php php php php php php php php php php$thisphp-php>php_socketphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp capabilitiesphp fromphp IMAPphp server
php php php php php php*
php php php php php php*php php@returnphp arrayphp listphp ofphp capabilities
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp capabilityphp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>requestAndResponsephp(php'CAPABILITYphp'php)php;

php php php php php php php php ifphp php(php!php$responsephp)php php{
php php php php php php php php php php php php returnphp php$responsephp;
php php php php php php php php php}

php php php php php php php php php$capabilitiesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$responsephp asphp php$linephp)php php{
php php php php php php php php php php php php php$capabilitiesphp php=php arrayphp_mergephp(php$capabilitiesphp,php php$linephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$capabilitiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Examinephp andphp selectphp havephp thephp samephp responsephp.php Thephp commonphp codephp forphp both
php php php php php php*php isphp inphp thisphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$commandphp canphp bephp php'EXAMINEphp'php orphp php'SELECTphp'php andphp thisphp isphp usedphp asphp command
php php php php php php*php php@paramphp php stringphp php$boxphp whichphp folderphp tophp changephp tophp orphp examine
php php php php php php*php php@returnphp boolphp|arrayphp falsephp ifphp errorphp,php arrayphp withphp returnedphp information
php php php php php php*php php php php php php php php php php php php php php php php php php php php otherwisephp php(flagsphp,php existsphp,php recentphp,php uidvalidityphp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp examineOrSelectphp(php$commandphp php=php php'EXAMINEphp'php,php php$boxphp php=php php'INBOXphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>sendRequestphp(php$commandphp,php arrayphp(php$thisphp-php>escapeStringphp(php$boxphp)php)php,php php$tagphp)php;

php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php!php$thisphp-php>readLinephp(php$tokensphp,php php$tagphp)php)php php{
php php php php php php php php php php php php ifphp php(php$tokensphp[php0php]php php=php=php php'FLAGSphp'php)php php{
php php php php php php php php php php php php php php php php arrayphp_shiftphp(php$tokensphp)php;
php php php php php php php php php php php php php php php php php$resultphp[php'flagsphp'php]php php=php php$tokensphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php switchphp php(php$tokensphp[php1php]php)php php{
php php php php php php php php php php php php php php php php casephp php'EXISTSphp'php:
php php php php php php php php php php php php php php php php casephp php'RECENTphp'php:
php php php php php php php php php php php php php php php php php php php php php$resultphp[strtolowerphp(php$tokensphp[php1php]php)php]php php=php php$tokensphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php[UIDVALIDITYphp'php:
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'uidvalidityphp'php]php php=php php(intphp)php$tokensphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php/php ignore
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$tokensphp[php0php]php php!php=php php'OKphp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php changephp folder
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$boxphp changephp tophp thisphp folder
php php php php php php*php php@returnphp boolphp|arrayphp seephp examineOrselectphp(php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$boxphp php=php php'INBOXphp'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>examineOrSelectphp(php'SELECTphp'php,php php$boxphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php examinephp folder
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$boxphp examinephp thisphp folder
php php php php php php*php php@returnphp boolphp|arrayphp seephp examineOrselectphp(php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp examinephp(php$boxphp php=php php'INBOXphp'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>examineOrSelectphp(php'EXAMINEphp'php,php php$boxphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php fetchphp onephp orphp morephp itemsphp ofphp onephp orphp morephp messages
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$itemsphp itemsphp tophp fetchphp fromphp messagephp(sphp)php asphp stringphp php(ifphp onlyphp onephp itemphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php orphp arrayphp ofphp strings
php php php php php php*php php@paramphp php intphp php php php php php php php php php php$fromphp php messagephp forphp itemsphp orphp startphp messagephp ifphp php$tophp php!php=php=php null
php php php php php php*php php@paramphp php intphp|nullphp php php php php php$tophp php php php ifphp nullphp onlyphp onephp messagephp php(php$fromphp)php isphp fetchedphp,php elsephp itphp'sphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php lastphp messagephp,php INFphp meansphp lastphp messagephp avaible
php php php php php php*php php@returnphp stringphp|arrayphp ifphp onlyphp onephp itemphp ofphp onephp messagephp isphp fetchedphp itphp'sphp returnedphp asphp string
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php ifphp itemsphp ofphp onephp messagephp arephp fetchedphp itphp'sphp returnedphp asphp php(namephp php=php>php valuephp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php ifphp onephp itemsphp ofphp messagesphp arephp fetchedphp itphp'sphp returnedphp asphp php(msgnophp php=php>php valuephp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php ifphp itemsphp ofphp messagesphp arephp fetchtedphp itphp'sphp returnedphp asphp php(msgnophp php=php>php php(namephp php=php>php valuephp)php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp fetchphp(php$itemsphp,php php$fromphp,php php$tophp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$fromphp)php)php php{
php php php php php php php php php php php php php$setphp php=php implodephp(php'php,php'php,php php$fromphp)php;
php php php php php php php php php}php elsephp ifphp php(php$tophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$setphp php=php php(intphp)php$fromphp;
php php php php php php php php php}php elsephp ifphp php(php$tophp php=php=php=php INFphp)php php{
php php php php php php php php php php php php php$setphp php=php php(intphp)php$fromphp php.php php'php:php*php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$setphp php=php php(intphp)php$fromphp php.php php'php:php'php php.php php(intphp)php$tophp;
php php php php php php php php php}

php php php php php php php php php$itemsphp php=php php(arrayphp)php$itemsphp;
php php php php php php php php php$itemListphp php=php php$thisphp-php>escapeListphp(php$itemsphp)php;

php php php php php php php php php$thisphp-php>sendRequestphp(php'FETCHphp'php,php arrayphp(php$setphp,php php$itemListphp)php,php php$tagphp)php;

php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php!php$thisphp-php>readLinephp(php$tokensphp,php php$tagphp)php)php php{
php php php php php php php php php php php php php/php/php ignorephp otherphp responses
php php php php php php php php php php php php ifphp php(php$tokensphp[php1php]php php!php=php php'FETCHphp'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php ignorephp otherphp messages
php php php php php php php php php php php php ifphp php(php$tophp php=php=php=php nullphp php&php&php php!isphp_arrayphp(php$fromphp)php php&php&php php$tokensphp[php0php]php php!php=php php$fromphp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php ifphp wephp onlyphp wantphp onephp itemphp wephp returnphp thatphp onephp directly
php php php php php php php php php php php php ifphp php(countphp(php$itemsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$tokensphp[php2php]php[php0php]php php=php=php php$itemsphp[php0php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp php=php php$tokensphp[php2php]php[php1php]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php maybephp thephp serverphp sendphp anphp otherphp fieldphp wephp didnphp'tphp wanted
php php php php php php php php php php php php php php php php php php php php php$countphp php=php countphp(php$tokensphp[php2php]php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php wephp startphp withphp php2php,php becausephp php0php wasphp alreadyphp checked
php php php php php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php2php;php php$iphp <php php$countphp;php php$iphp php+php=php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$tokensphp[php2php]php[php$iphp]php php!php=php php$itemsphp[php0php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp php=php php$tokensphp[php2php]php[php$iphp php+php php1php]php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php whilephp php(keyphp(php$tokensphp[php2php]php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[currentphp(php$tokensphp[php2php]php)php]php php=php nextphp(php$tokensphp[php2php]php)php;
php php php php php php php php php php php php php php php php php php php php nextphp(php$tokensphp[php2php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php ifphp wephp wantphp onlyphp onephp messagephp wephp canphp ignorephp everythingphp elsephp andphp justphp return
php php php php php php php php php php php php ifphp php(php$tophp php=php=php=php nullphp php&php&php php!isphp_arrayphp(php$fromphp)php php&php&php php$tokensphp[php0php]php php=php=php php$fromphp)php php{
php php php php php php php php php php php php php php php php php/php/php wephp stillphp needphp tophp readphp allphp lines
php php php php php php php php php php php php php php php php whilephp php(php!php$thisphp-php>readLinephp(php$tokensphp,php php$tagphp)php)php;
php php php php php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php$tokensphp[php0php]php]php php=php php$dataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tophp php=php=php=php nullphp php&php&php php!isphp_arrayphp(php$fromphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Protocolphp_Exceptionphp(php'thephp singlephp idphp wasphp notphp foundphp inphp responsephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp mailboxphp list
php php php php php php*
php php php php php php*php thisphp methodphp canphp'tphp bephp namedphp afterphp thephp IMAPphp commandphp php'LISTphp'php,php asphp listphp isphp aphp reservedphp keyword
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$referencephp mailboxphp referencephp forphp list
php php php php php php*php php@paramphp php stringphp php$mailboxphp php php mailboxphp namephp matchphp withphp wildcards
php php php php php php*php php@returnphp arrayphp mailboxesphp thatphp matchedphp php$mailboxphp asphp arrayphp(globalNamephp php=php>php arrayphp(php'delimphp'php php=php>php php.php.php,php php'flagsphp'php php=php>php php.php.php)php)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp listMailboxphp(php$referencephp php=php php'php'php,php php$mailboxphp php=php php'php*php'php)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php$listphp php=php php$thisphp-php>requestAndResponsephp(php'LISTphp'php,php php$thisphp-php>escapeStringphp(php$referencephp,php php$mailboxphp)php)php;
php php php php php php php php ifphp php(php!php$listphp php|php|php php$listphp php=php=php=php truephp)php php{
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$listphp asphp php$itemphp)php php{
php php php php php php php php php php php php ifphp php(countphp(php$itemphp)php php!php=php php4php php|php|php php$itemphp[php0php]php php!php=php php'LISTphp'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php$itemphp[php3php]php]php php=php arrayphp(php'delimphp'php php=php>php php$itemphp[php2php]php,php php'flagsphp'php php=php>php php$itemphp[php1php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp flags
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php$flagsphp php flagsphp tophp setphp,php addphp orphp removephp php-php seephp php$mode
php php php php php php*php php@paramphp php intphp php php php php php php php php php$fromphp php php messagephp forphp itemsphp orphp startphp messagephp ifphp php$tophp php!php=php=php null
php php php php php php*php php@paramphp php intphp|nullphp php php php php$tophp php php php php ifphp nullphp onlyphp onephp messagephp php(php$fromphp)php isphp fetchedphp,php elsephp itphp'sphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php lastphp messagephp,php INFphp meansphp lastphp messagephp avaible
php php php php php php*php php@paramphp php stringphp|nullphp php$modephp php php php'php+php'php tophp addphp flagsphp,php php'php-php'php tophp removephp flagsphp,php everythingphp elsephp setsphp thephp flagsphp asphp given
php php php php php php*php php@paramphp php boolphp php php php php php php php php$silentphp ifphp falsephp thephp returnphp valuesphp arephp thephp newphp flagsphp forphp thephp wantedphp messages
php php php php php php*php php@returnphp boolphp|arrayphp newphp flagsphp ifphp php$silentphp isphp falsephp,php elsephp truephp orphp falsephp dependingphp onphp success
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp storephp(arrayphp php$flagsphp,php php$fromphp,php php$tophp php=php nullphp,php php$modephp php=php nullphp,php php$silentphp php=php truephp)
php php php php php{
php php php php php php php php php$itemphp php=php php'FLAGSphp'php;
php php php php php php php php ifphp php(php$modephp php=php=php php'php+php'php php|php|php php$modephp php=php=php php'php-php'php)php php{
php php php php php php php php php php php php php$itemphp php=php php$modephp php.php php$itemphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$silentphp)php php{
php php php php php php php php php php php php php$itemphp php.php=php php'php.SILENTphp'php;
php php php php php php php php php}

php php php php php php php php php$flagsphp php=php php$thisphp-php>escapeListphp(php$flagsphp)php;
php php php php php php php php php$setphp php=php php(intphp)php$fromphp;
php php php php php php php php ifphp php(php$tophp php!php=php nullphp)php php{
php php php php php php php php php php php php php$setphp php.php=php php'php:php'php php.php php(php$tophp php=php=php INFphp php?php php'php*php'php php:php php(intphp)php$tophp)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>requestAndResponsephp(php'STOREphp'php,php arrayphp(php$setphp,php php$itemphp,php php$flagsphp)php,php php$silentphp)php;

php php php php php php php php ifphp php(php$silentphp)php php{
php php php php php php php php php php php php returnphp php$resultphp php?php truephp php:php falsephp;
php php php php php php php php php}

php php php php php php php php php$tokensphp php=php php$resultphp;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php ifphp php(php$tokenphp[php1php]php php!php=php php'FETCHphp'php php|php|php php$tokenphp[php2php]php[php0php]php php!php=php php'FLAGSphp'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php$tokenphp[php0php]php]php php=php php$tokenphp[php2php]php[php1php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php appendphp aphp newphp messagephp tophp givenphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp php$folderphp php namephp ofphp targetphp folder
php php php php php php*php php@paramphp stringphp php$messagephp fullphp messagephp content
php php php php php php*php php@paramphp arrayphp php php$flagsphp php php flagsphp forphp newphp message
php php php php php php*php php@paramphp stringphp php$datephp php php php datephp forphp newphp message
php php php php php php*php php@returnphp boolphp success
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$folderphp,php php$messagephp,php php$flagsphp php=php nullphp,php php$datephp php=php nullphp)
php php php php php{
php php php php php php php php php$tokensphp php=php arrayphp(php)php;
php php php php php php php php php$tokensphp[php]php php=php php$thisphp-php>escapeStringphp(php$folderphp)php;
php php php php php php php php ifphp php(php$flagsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$tokensphp[php]php php=php php$thisphp-php>escapeListphp(php$flagsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$datephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$tokensphp[php]php php=php php$thisphp-php>escapeStringphp(php$datephp)php;
php php php php php php php php php}
php php php php php php php php php$tokensphp[php]php php=php php$thisphp-php>escapeStringphp(php$messagephp)php;

php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'APPENDphp'php,php php$tokensphp,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php copyphp messagephp setphp fromphp currentphp folderphp tophp otherphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php$folderphp destinationphp folder
php php php php php php*php php@paramphp intphp|nullphp php$tophp php php php php ifphp nullphp onlyphp onephp messagephp php(php$fromphp)php isphp fetchedphp,php elsephp itphp'sphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php lastphp messagephp,php INFphp meansphp lastphp messagephp avaible
php php php php php php*php php@returnphp boolphp success
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp copyphp(php$folderphp,php php$fromphp,php php$tophp php=php nullphp)
php php php php php{
php php php php php php php php php$setphp php=php php(intphp)php$fromphp;
php php php php php php php php ifphp php(php$tophp php!php=php nullphp)php php{
php php php php php php php php php php php php php$setphp php.php=php php'php:php'php php.php php(php$tophp php=php=php INFphp php?php php'php*php'php php:php php(intphp)php$tophp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'COPYphp'php,php arrayphp(php$setphp,php php$thisphp-php>escapeStringphp(php$folderphp)php)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp aphp newphp folderphp php(andphp parentphp foldersphp ifphp neededphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$folderphp folderphp name
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp createphp(php$folderphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'CREATEphp'php,php arrayphp(php$thisphp-php>escapeStringphp(php$folderphp)php)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php renamephp anphp existingphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp php$oldphp oldphp name
php php php php php php*php php@paramphp stringphp php$newphp newphp name
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp renamephp(php$oldphp,php php$newphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'RENAMEphp'php,php php$thisphp-php>escapeStringphp(php$oldphp,php php$newphp)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php removephp aphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp php$folderphp folderphp name
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$folderphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'DELETEphp'php,php arrayphp(php$thisphp-php>escapeStringphp(php$folderphp)php)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php permanentlyphp removephp messages
php php php php php php*
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp expungephp(php)
php php php php php{
php php php php php php php php php/php/php TODOphp:php parsephp responsephp?
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'EXPUNGEphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php sendphp noop
php php php php php php*
php php php php php php*php php@returnphp boolphp success
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php php/php/php TODOphp:php parsephp response
php php php php php php php php returnphp php$thisphp-php>requestAndResponsephp(php'NOOPphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php dophp aphp searchphp request
php php php php php php*
php php php php php php*php Thisphp methodphp isphp currentlyphp markedphp asphp internalphp asphp thephp APIphp mightphp changephp andphp isphp not
php php php php php php*php safephp ifphp youphp donphp'tphp takephp precautionsphp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp arrayphp messagephp ids
php php php php php php*php/
php php php php publicphp functionphp searchphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>requestAndResponsephp(php'SEARCHphp'php,php php$paramsphp)php;
php php php php php php php php ifphp php(php!php$responsephp)php php{
php php php php php php php php php php php php returnphp php$responsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$responsephp asphp php$idsphp)php php{
php php php php php php php php php php php php ifphp php(php$idsphp[php0php]php php=php=php php'SEARCHphp'php)php php{
php php php php php php php php php php php php php php php php arrayphp_shiftphp(php$idsphp)php;
php php php php php php php php php php php php php php php php returnphp php$idsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php}
