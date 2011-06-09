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
php php*php php@versionphp php php php php$Idphp:php Sendmailphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Transportphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Classphp forphp sendingphp eMailsphp viaphp thephp PHPphp internalphp mailphp(php)php function
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Transportphp_Sendmailphp extendsphp Zendphp_Mailphp_Transportphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Subject
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$subjectphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Configphp optionsphp forphp sendmailphp parameters
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$parametersphp;

php php php php php/php*php*
php php php php php php*php EOLphp characterphp string
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$EOLphp php=php PHPphp_EOLphp;

php php php php php/php*php*
php php php php php php*php errorphp information
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errstrphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$parametersphp OPTIONALphp php(Defaultphp:php nullphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$parametersphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$parametersphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$parametersphp php=php php$parametersphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$parametersphp)php)php php{
php php php php php php php php php php php php php$parametersphp php=php implodephp(php'php php'php,php php$parametersphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>parametersphp php=php php$parametersphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Sendphp mailphp usingphp PHPphp nativephp mailphp(php)
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp ifphp parametersphp isphp set
php php php php php php*php php php php php php php php php butphp notphp aphp string
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp onphp mailphp(php)php failure
php php php php php php*php/
php php php php publicphp functionphp php_sendMailphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>parametersphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_handleMailErrorsphp'php)php)php;
php php php php php php php php php php php php php$resultphp php=php mailphp(
php php php php php php php php php php php php php php php php php$thisphp-php>recipientsphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_mailphp-php>getSubjectphp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>bodyphp,
php php php php php php php php php php php php php php php php php$thisphp-php>headerphp)php;
php php php php php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp(php!isphp_stringphp(php$thisphp-php>parametersphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php php php php php*php Exceptionphp isphp thrownphp herephp because
php php php php php php php php php php php php php php php php php php*php php$parametersphp isphp aphp publicphp property
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Parametersphp werephp setphp butphp arephp notphp aphp stringphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_handleMailErrorsphp'php)php)php;
php php php php php php php php php php php php php$resultphp php=php mailphp(
php php php php php php php php php php php php php php php php php$thisphp-php>recipientsphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_mailphp-php>getSubjectphp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>bodyphp,
php php php php php php php php php php php php php php php php php$thisphp-php>headerphp,
php php php php php php php php php php php php php php php php php$thisphp-php>parametersphp)php;
php php php php php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_errstrphp php!php=php=php nullphp php|php|php php!php$resultphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Unablephp tophp sendphp mailphp.php php'php php.php php$thisphp-php>php_errstrphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Formatphp andphp fixphp headers
php php php php php php*
php php php php php php*php mailphp(php)php usesphp itsphp php$tophp andphp php$subjectphp argumentsphp tophp setphp thephp Tophp:php andphp Subjectphp:
php php php php php php*php headersphp,php respectivelyphp.php Thisphp methodphp stripsphp thosephp outphp asphp aphp sanityphp checkphp to
php php php php php php*php preventphp duplicatephp headerphp entriesphp.
php php php php php php*
php php php php php php*php php@accessphp php protected
php php php php php php*php php@paramphp php php arrayphp php$headers
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Transportphp_Exception
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

php php php php php php php php php/php/php mailphp(php)php usesphp itsphp php$tophp parameterphp tophp setphp thephp Tophp:php headerphp,php andphp thephp php$subject
php php php php php php php php php/php/php parameterphp tophp setphp thephp Subjectphp:php headerphp.php Wephp needphp tophp stripphp themphp outphp.
php php php php php php php php ifphp php(php0php php=php=php=php strposphp(PHPphp_OSphp,php php'WINphp'php)php)php php{
php php php php php php php php php php php php php/php/php Ifphp thephp currentphp recipientsphp listphp isphp emptyphp,php throwphp anphp error
php php php php php php php php php php php php ifphp php(emptyphp(php$thisphp-php>recipientsphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Missingphp Tophp addressesphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Allphp othersphp,php simplyphp grabphp thephp recipientsphp andphp unsetphp thephp Tophp:php header
php php php php php php php php php php php php ifphp php(php!issetphp(php$headersphp[php'Tophp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Missingphp Tophp headerphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php unsetphp(php$headersphp[php'Tophp'php]php[php'appendphp'php]php)php;
php php php php php php php php php php php php php$thisphp-php>recipientsphp php=php implodephp(php'php,php'php,php php$headersphp[php'Tophp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Removephp recipientphp header
php php php php php php php php unsetphp(php$headersphp[php'Tophp'php]php)php;

php php php php php php php php php/php/php Removephp subjectphp headerphp,php ifphp present
php php php php php php php php ifphp php(issetphp(php$headersphp[php'Subjectphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$headersphp[php'Subjectphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Preparephp headers
php php php php php php php php parentphp:php:php_prepareHeadersphp(php$headersphp)php;

php php php php php php php php php/php/php Fixphp issuephp withphp emptyphp blankphp linephp ontopphp whenphp usingphp Sendmailphp Trnasport
php php php php php php php php php$thisphp-php>headerphp php=php rtrimphp(php$thisphp-php>headerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Temporaryphp errorphp handlerphp forphp PHPphp nativephp mailphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp intphp php php php php$errno
php php php php php php*php php@paramphp stringphp php$errstr
php php php php php php*php php@paramphp stringphp php$errfile
php php php php php php*php php@paramphp stringphp php$errline
php php php php php php*php php@paramphp arrayphp php php$errcontext
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp php_handleMailErrorsphp(php$errnophp,php php$errstrphp,php php$errfilephp php=php nullphp,php php$errlinephp php=php nullphp,php arrayphp php$errcontextphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errstrphp php=php php$errstrphp;
php php php php php php php php returnphp truephp;
php php php php php}

php}
