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
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Resultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Result
php{
php php php php php/php*php*
php php php php php php*php Generalphp Failure
php php php php php php*php/
php php php php constphp FAILUREphp php php php php php php php php php php php php php php php php php php php php php php php php=php php php0php;

php php php php php/php*php*
php php php php php php*php Failurephp duephp tophp identityphp notphp beingphp foundphp.
php php php php php php*php/
php php php php constphp FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp php php php php php=php php-php1php;

php php php php php/php*php*
php php php php php php*php Failurephp duephp tophp identityphp beingphp ambiguousphp.
php php php php php php*php/
php php php php constphp FAILUREphp_IDENTITYphp_AMBIGUOUSphp php php php php php=php php-php2php;

php php php php php/php*php*
php php php php php php*php Failurephp duephp tophp invalidphp credentialphp beingphp suppliedphp.
php php php php php php*php/
php php php php constphp FAILUREphp_CREDENTIALphp_INVALIDphp php php php php php=php php-php3php;

php php php php php/php*php*
php php php php php php*php Failurephp duephp tophp uncategorizedphp reasonsphp.
php php php php php php*php/
php php php php constphp FAILUREphp_UNCATEGORIZEDphp php php php php php php php php php php=php php-php4php;

php php php php php/php*php*
php php php php php php*php Authenticationphp successphp.
php php php php php php*php/
php php php php constphp SUCCESSphp php php php php php php php php php php php php php php php php php php php php php php php php=php php php1php;

php php php php php/php*php*
php php php php php php*php Authenticationphp resultphp code
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_codephp;

php php php php php/php*php*
php php php php php php*php Thephp identityphp usedphp inphp thephp authenticationphp attempt
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_identityphp;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp stringphp reasonsphp whyphp thephp authenticationphp attemptphp wasphp unsuccessful
php php php php php php*
php php php php php php*php Ifphp authenticationphp wasphp successfulphp,php thisphp shouldphp bephp anphp emptyphp arrayphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messagesphp;

php php php php php/php*php*
php php php php php php*php Setsphp thephp resultphp codephp,php identityphp,php andphp failurephp messages
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php$code
php php php php php php*php php@paramphp php mixedphp php php php$identity
php php php php php php*php php@paramphp php arrayphp php php php$messages
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$codephp,php php$identityphp,php arrayphp php$messagesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$codephp php=php php(intphp)php php$codephp;

php php php php php php php php ifphp php(php$codephp <php selfphp:php:FAILUREphp_UNCATEGORIZEDphp)php php{
php php php php php php php php php php php php php$codephp php=php selfphp:php:FAILUREphp;
php php php php php php php php php}php elseifphp php(php$codephp php>php selfphp:php:SUCCESSphp php)php php{
php php php php php php php php php php php php php$codephp php=php php1php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_codephp php php php php php=php php$codephp;
php php php php php php php php php$thisphp-php>php_identityphp php=php php$identityphp;
php php php php php php php php php$thisphp-php>php_messagesphp php=php php$messagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp thephp resultphp representsphp aphp successfulphp authenticationphp attempt
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_codephp php>php php0php)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getCodephp(php)php php-php Getphp thephp resultphp codephp forphp thisphp authenticationphp attempt
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_codephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp identityphp usedphp inphp thephp authenticationphp attempt
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getIdentityphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_identityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp stringphp reasonsphp whyphp thephp authenticationphp attemptphp wasphp unsuccessful
php php php php php php*
php php php php php php*php Ifphp authenticationphp wasphp successfulphp,php thisphp methodphp returnsphp anphp emptyphp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagesphp;
php php php php php}
php}
