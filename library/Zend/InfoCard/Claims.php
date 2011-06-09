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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Claimsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Resultphp valuephp ofphp thephp InfoCardphp componentphp,php containsphp anyphp errorphp messagesphp andphp claims
php php*php fromphp thephp processingphp ofphp anphp informationphp cardphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Claims
php{
php php php php php/php*php*
php php php php php php*php Successfulphp validationphp andphp extraionphp ofphp claims
php php php php php php*php/
php php php php constphp RESULTphp_SUCCESSphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Indicatesphp therephp wasphp anphp errorphp processingphp thephp XMLphp document
php php php php php php*php/
php php php php constphp RESULTphp_PROCESSINGphp_FAILUREphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Indicatesphp thatphp thephp signaturephp valuesphp withinphp thephp XMLphp documentphp failedphp verification
php php php php php php*php/
php php php php constphp RESULTphp_VALIDATIONphp_FAILUREphp php=php php3php;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp namespacephp tophp assumephp inphp thesephp claims
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultNamespacephp php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Aphp booleanphp indicatingphp ifphp thephp claimsphp shouldphp bephp considerphp php"validphp"php orphp notphp basedphp onphp processing
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isValidphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Thephp errorphp messagephp ifphp any
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errorphp php=php php"php"php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp claimsphp takenphp fromphp thephp informationphp card
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_claimsphp;

php php php php php/php*php*
php php php php php php*php Thephp resultphp codephp ofphp processingphp thephp informationphp cardphp asphp definedphp byphp thephp constantsphp ofphp thisphp class
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_codephp;

php php php php php/php*php*
php php php php php php*php Overridephp forphp thephp safeguardphp whichphp ensuresphp thatphp youphp donphp'tphp usephp claimsphp whichphp failedphp validationphp.
php php php php php php*php Usedphp inphp situationsphp whenphp therephp wasphp aphp validationphp errorphp youphp'dphp likephp tophp ignore
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Claims
php php php php php php*php/
php php php php publicphp functionphp forceValidphp(php)
php php php php php{
php php php php php php php php triggerphp_errorphp(php"Forcingphp Claimsphp tophp bephp validphp althoughphp itphp isphp aphp securityphp riskphp"php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php$thisphp-php>php_isValidphp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp PPIphp php(Privatephp Personalphp Identifierphp)php associatedphp withphp thephp informationphp card
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp privatephp personalphp identifier
php php php php php php*php/
php php php php publicphp functionphp getCardIDphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getClaimphp(php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/wsphp/php2php0php0php5php/php0php5php/identityphp/claimsphp/privatepersonalidentifierphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp defaultphp namespacephp usedphp inphp thisphp informationphp cardphp.php Ifphp aphp defaultphp namespacephp wasphp not
php php php php php php*php setphp,php itphp figuresphp outphp whichphp onephp tophp considerphp php'defaultphp'php byphp takingphp thephp firstphp namespacephp sortedphp byphp usephp-count
php php php php php php*php inphp claims
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@returnphp stringphp Thephp defaultphp namespace
php php php php php php*php/
php php php php publicphp functionphp getDefaultNamespacephp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_defaultNamespacephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$namespacesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$leaderphp php=php php'php'php;
php php php php php php php php php php php php foreachphp(php$thisphp-php>php_claimsphp asphp php$claimphp)php php{
php php php php php php php php php php php php php php php php ifphp(php!issetphp(php$namespacesphp[php$claimphp[php'namespacephp'php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$namespacesphp[php$claimphp[php'namespacephp'php]php]php php=php php1php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$namespacesphp[php$claimphp[php'namespacephp'php]php]php+php+php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp(emptyphp(php$leaderphp)php php|php|php php(php$namespacesphp[php$claimphp[php'namespacephp'php]php]php php>php php$leaderphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$leaderphp php=php php$claimphp[php'namespacephp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(emptyphp(php$leaderphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Failedphp tophp determinephp defaultphp namespacephp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>setDefaultNamespacephp(php$leaderphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_defaultNamespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp namespacephp,php overridingphp anyphp existingphp default
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@paramphp stringphp php$namespacephp Thephp defaultphp namespacephp tophp use
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Claims
php php php php php php*php/
php php php php publicphp functionphp setDefaultNamespacephp(php$namespacephp)
php php php php php{

php php php php php php php php foreachphp(php$thisphp-php>php_claimsphp asphp php$claimphp)php php{
php php php php php php php php php php php php ifphp(php$namespacephp php=php=php php$claimphp[php'namespacephp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_defaultNamespacephp php=php php$namespacephp;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Atphp leastphp onephp claimphp mustphp existphp inphp specifiedphp namespacephp tophp makephp itphp thephp defaultphp namespacephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatesphp ifphp thisphp claimphp objectphp containsphp validatedphp claimsphp orphp not
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isValidphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp errorphp messagephp containedphp withinphp thephp claimsphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$errorphp Thephp errorphp message
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Claims
php php php php php php*php/
php php php php publicphp functionphp setErrorphp(php$errorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorphp php=php php$errorphp;
php php php php php php php php php$thisphp-php>php_isValidphp php=php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp errorphp messagephp containedphp withinphp thephp claimsphp object
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp errorphp message
php php php php php php*php/
php php php php publicphp functionphp getErrorMsgphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp claimsphp forphp thephp claimsphp objectphp.php Canphp onlyphp bephp setphp oncephp andphp isphp done
php php php php php php*php byphp thephp componentphp itselfphp.php Internalphp usephp onlyphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@paramphp arrayphp php$claims
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Claims
php php php php php php*php/
php php php php publicphp functionphp setClaimsphp(Arrayphp php$claimsphp)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_claimsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Claimphp objectsphp arephp readphp-onlyphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_claimsphp php=php php$claimsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp resultphp codephp ofphp thephp claimsphp objectphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@paramphp intphp php$codephp Thephp resultphp code
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Claims
php php php php php php*php/
php php php php publicphp functionphp setCodephp(php$codephp)
php php php php php{
php php php php php php php php switchphp(php$codephp)php php{
php php php php php php php php php php php php casephp selfphp:php:RESULTphp_PROCESSINGphp_FAILUREphp:
php php php php php php php php php php php php casephp selfphp:php:RESULTphp_SUCCESSphp:
php php php php php php php php php php php php casephp selfphp:php:RESULTphp_VALIDATIONphp_FAILUREphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_codephp php=php php$codephp;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Attemptedphp tophp setphp unknownphp errorphp codephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp resultphp codephp ofphp thephp claimsphp object
php php php php php php*
php php php php php php*php php@returnphp integerphp Thephp resultphp code
php php php php php php*php/
php php php php publicphp functionphp getCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_codephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp claimphp byphp providingphp itsphp completephp claimphp URI
php php php php php php*
php php php php php php*php php@paramphp stringphp php$claimURIphp Thephp completephp claimphp URIphp tophp retrieve
php php php php php php*php php@returnphp mixedphp Thephp claimphp matchingphp thatphp specificphp URIphp orphp nullphp ifphp notphp found
php php php php php php*php/
php php php php publicphp functionphp getClaimphp(php$claimURIphp)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>claimExistsphp(php$claimURIphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_claimsphp[php$claimURIphp]php[php'valuephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatesphp ifphp aphp specificphp claimphp URIphp existsphp orphp notphp withinphp thephp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$claimURIphp Thephp completephp claimphp URIphp tophp check
php php php php php php*php php@returnphp boolphp truephp ifphp thephp claimphp existsphp,php falsephp ifphp notphp found
php php php php php php*php/
php php php php publicphp functionphp claimExistsphp(php$claimURIphp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_claimsphp[php$claimURIphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp helperphp function
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$kphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Claimphp objectsphp arephp readphp-onlyphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp helperphp function
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$kphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>claimExistsphp(php"php{php$thisphp-php>getDefaultNamespacephp(php)php}php/php$kphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp helperphp function
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$kphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getClaimphp(php"php{php$thisphp-php>getDefaultNamespacephp(php)php}php/php$kphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp helperphp function
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$kphp,php php$vphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Exceptionphp(php"Claimphp objectsphp arephp readphp-onlyphp"php)php;
php php php php php}
php}
