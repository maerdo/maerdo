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
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Smtpphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Protocolphp_Smtp
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Smtpphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Transportphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Abstractphp.phpphp'php;


php/php*php*
php php*php SMTPphp connectionphp object
php php*
php php*php Loadsphp anphp instancephp ofphp Zendphp_Mailphp_Protocolphp_Smtpphp andphp forwardsphp smtpphp transactions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Transportphp_Smtpphp extendsphp Zendphp_Mailphp_Transportphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php EOLphp characterphp stringphp usedphp byphp transport
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$EOLphp php=php php"php\nphp"php;

php php php php php/php*php*
php php php php php php*php Remotephp smtpphp hostnamephp orphp iphp.pphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostphp;


php php php php php/php*php*
php php php php php php*php Portphp number
php php php php php php*
php php php php php php*php php@varphp integerphp|null
php php php php php php*php/
php php php php protectedphp php$php_portphp;


php php php php php/php*php*
php php php php php php*php Localphp clientphp hostnamephp orphp iphp.pphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php php'localhostphp'php;


php php php php php/php*php*
php php php php php php*php Authenticationphp typephp OPTIONAL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_authphp;


php php php php php/php*php*
php php php php php php*php Configphp optionsphp forphp authentication
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp;


php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Mailphp_Protocolphp_Smtp
php php php php php php*
php php php php php php*php php@varphp Zendphp_Mailphp_Protocolphp_Smtp
php php php php php php*php/
php php php php protectedphp php$php_connectionphp;


php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hostphp OPTIONALphp php(Defaultphp:php php1php2php7php.php0php.php0php.php1php)
php php php php php php*php php@paramphp php arrayphp|nullphp php$configphp OPTIONALphp php(Defaultphp:php nullphp)
php php php php php php*php php@returnphp void
php php php php php php*
php php php php php php*php php@todophp Someonephp pleasephp makephp thisphp compatible
php php php php php php*php php php php php php php withphp thephp SendMailphp transportphp classphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$hostphp php=php php'php1php2php7php.php0php.php0php.php1php'php,php Arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$configphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_namephp php=php php$configphp[php'namephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$configphp[php'portphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_portphp php=php php$configphp[php'portphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$configphp[php'authphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_authphp php=php php$configphp[php'authphp'php]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hostphp php=php php$hostphp;
php php php php php php php php php$thisphp-php>php_configphp php=php php$configphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Classphp destructorphp tophp ensurephp allphp openphp connectionsphp arephp closed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_connectionphp instanceofphp Zendphp_Mailphp_Protocolphp_Smtpphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>quitphp(php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Protocolphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php ignore
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>disconnectphp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp thephp connectionphp protocolphp instance
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Mailphp_Protocolphp_Abstractphp php$client
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setConnectionphp(Zendphp_Mailphp_Protocolphp_Abstractphp php$connectionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectionphp php=php php$connectionphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getsphp thephp connectionphp protocolphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Protocolphp|null
php php php php php php*php/
php php php php publicphp functionphp getConnectionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_connectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp anphp emailphp viaphp thephp SMTPphp connectionphp protocol
php php php php php php*
php php php php php php*php Thephp connectionphp viaphp thephp protocolphp adapterphp isphp madephp justphp-inphp-timephp tophp allowphp a
php php php php php php*php developerphp tophp addphp aphp customphp adapterphp ifphp requiredphp beforephp mailphp isphp sentphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@todophp Renamephp thisphp tophp sendMailphp,php itphp'sphp aphp publicphp methodphp.php.php.
php php php php php php*php/
php php php php publicphp functionphp php_sendMailphp(php)
php php php php php{
php php php php php php php php php/php/php Ifphp sendingphp multiplephp messagesphp perphp sessionphp usephp existingphp adapter
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_connectionphp instanceofphp Zendphp_Mailphp_Protocolphp_Smtpphp)php)php php{
php php php php php php php php php php php php php/php/php Checkphp ifphp authenticationphp isphp requiredphp andphp determinephp requiredphp class
php php php php php php php php php php php php php$connectionClassphp php=php php'Zendphp_Mailphp_Protocolphp_Smtpphp'php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_authphp)php php{
php php php php php php php php php php php php php php php php php$connectionClassphp php.php=php php'php_Authphp_php'php php.php ucwordsphp(php$thisphp-php>php_authphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$connectionClassphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$connectionClassphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setConnectionphp(newphp php$connectionClassphp(php$thisphp-php>php_hostphp,php php$thisphp-php>php_portphp,php php$thisphp-php>php_configphp)php)php;
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>connectphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>helophp(php$thisphp-php>php_namephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Resetphp connectionphp tophp ensurephp reliablephp transaction
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>rsetphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp senderphp emailphp address
php php php php php php php php php$thisphp-php>php_connectionphp-php>mailphp(php$thisphp-php>php_mailphp-php>getReturnPathphp(php)php)php;

php php php php php php php php php/php/php Setphp recipientphp forwardphp paths
php php php php php php php php foreachphp php(php$thisphp-php>php_mailphp-php>getRecipientsphp(php)php asphp php$recipientphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_connectionphp-php>rcptphp(php$recipientphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Issuephp DATAphp commandphp tophp client
php php php php php php php php php$thisphp-php>php_connectionphp-php>dataphp(php$thisphp-php>headerphp php.php Zendphp_Mimephp:php:LINEENDphp php.php php$thisphp-php>bodyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatphp andphp fixphp headers
php php php php php php*
php php php php php php*php Somephp SMTPphp serversphp dophp notphp stripphp BCCphp headersphp.php Mostphp clientsphp dophp itphp themselvesphp asphp dophp wephp.
php php php php php php*
php php php php php php*php php@accessphp php protected
php php php php php php*php php@paramphp php php arrayphp php$headers
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php Zendphp_Transportphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_prepareHeadersphp(php$headersphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_mailphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'php_prepareHeadersphp requiresphp aphp registeredphp Zendphp_Mailphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$headersphp[php'Bccphp'php]php)php;

php php php php php php php php php/php/php Preparephp headers
php php php php php php php php parentphp:php:php_prepareHeadersphp(php$headersphp)php;
php php php php php}
php}
