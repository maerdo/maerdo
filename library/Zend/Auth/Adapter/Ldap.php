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
php php*php php@subpackagephp Zendphp_Authphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Ldapphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_Ldapphp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Thephp Zendphp_Ldapphp contextphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldap
php php php php php php*php/
php php php php protectedphp php$php_ldapphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp arrayphp ofphp arraysphp ofphp Zendphp_Ldapphp optionsphp passedphp tophp thephp constructorphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp usernamephp ofphp thephp accountphp beingphp authenticatedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_usernamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp passwordphp ofphp thephp accountphp beingphp authenticatedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_passwordphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp DNphp ofphp thephp authenticatedphp accountphp.php Usedphp tophp retrievephp thephp accountphp entryphp onphp requestphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_authenticatedDnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php Anphp arrayphp ofphp arraysphp ofphp Zendphp_Ldapphp options
php php php php php php*php php@paramphp php stringphp php$usernamephp Thephp usernamephp ofphp thephp accountphp beingphp authenticated
php php php php php php*php php@paramphp php stringphp php$passwordphp Thephp passwordphp ofphp thephp accountphp beingphp authenticated
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php,php php$usernamephp php=php nullphp,php php$passwordphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php ifphp php(php$usernamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setUsernamephp(php$usernamephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$passwordphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPasswordphp(php$passwordphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp arrayphp ofphp arraysphp ofphp Zendphp_Ldapphp optionsphp ofphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp arrayphp ofphp arraysphp ofphp Zendphp_Ldapphp optionsphp tophp bephp usedphp by
php php php php php php*php thisphp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Thephp arrayphp ofphp arraysphp ofphp Zendphp_Ldapphp options
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php isphp_arrayphp(php$optionsphp)php php?php php$optionsphp php:php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp usernamephp ofphp thephp accountphp beingphp authenticatedphp,php or
php php php php php php*php NULLphp ifphp nonephp isphp setphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getUsernamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_usernamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp usernamephp forphp binding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$usernamephp Thephp usernamephp forphp binding
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setUsernamephp(php$usernamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_usernamephp php=php php(stringphp)php php$usernamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp passwordphp ofphp thephp accountphp beingphp authenticatedphp,php or
php php php php php php*php NULLphp ifphp nonephp isphp setphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getPasswordphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_passwordphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp passwortphp forphp thephp account
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$passwordphp Thephp passwordphp ofphp thephp accountphp beingphp authenticated
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setPasswordphp(php$passwordphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_passwordphp php=php php(stringphp)php php$passwordphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setIdentityphp(php)php php-php setphp thephp identityphp php(usernamephp)php tophp bephp used
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@seephp setUsernamephp(php)php}
php php php php php php*
php php php php php php*php Closesphp ZFphp-php6php8php1php3
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$identity
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setIdentityphp(php$identityphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setUsernamephp(php$identityphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setCredentialphp(php)php php-php setphp thephp credentialphp php(passwordphp)php valuephp tophp bephp used
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@seephp setPasswordphp(php)php}
php php php php php php*
php php php php php php*php Closesphp ZFphp-php6php8php1php3
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$credential
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCredentialphp(php$credentialphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setPasswordphp(php$credentialphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp LDAPphp Object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp Thephp Zendphp_Ldapphp objectphp usedphp tophp authenticatephp thephp credentials
php php php php php php*php/
php php php php publicphp functionphp getLdapphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_ldapphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldap
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_ldapphp php=php newphp Zendphp_Ldapphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_ldapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp Ldapphp connection
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Ldapphp php$ldapphp Anphp existingphp Ldapphp object
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Ldapphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setLdapphp(Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_ldapphp php=php php$ldapphp;

php php php php php php php php php$thisphp-php>setOptionsphp(arrayphp(php$ldapphp-php>getOptionsphp(php)php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp domainphp namephp forphp thephp currentphp LDAPphp optionsphp.php Thisphp isphp used
php php php php php php*php forphp skippingphp redundantphp operationsphp php(ephp.gphp.php authenticationsphp)php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getAuthorityNamephp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php$thisphp-php>getLdapphp(php)php-php>getOptionsphp(php)php;
php php php php php php php php php$namephp php=php php$optionsphp[php'accountDomainNamephp'php]php;
php php php php php php php php ifphp php(php!php$namephp)
php php php php php php php php php php php php php$namephp php=php php$optionsphp[php'accountDomainNameShortphp'php]php;
php php php php php php php php returnphp php$namephp php?php php$namephp php:php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Authenticatephp thephp user
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;

php php php php php php php php php$messagesphp php=php arrayphp(php)php;
php php php php php php php php php$messagesphp[php0php]php php=php php'php'php;php php/php/php reserved
php php php php php php php php php$messagesphp[php1php]php php=php php'php'php;php php/php/php reserved

php php php php php php php php php$usernamephp php=php php$thisphp-php>php_usernamephp;
php php php php php php php php php$passwordphp php=php php$thisphp-php>php_passwordphp;

php php php php php php php php ifphp php(php!php$usernamephp)php php{
php php php php php php php php php php php php php$codephp php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp;
php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'Aphp usernamephp isphp requiredphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(php$codephp,php php'php'php,php php$messagesphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$passwordphp)php php{
php php php php php php php php php php php php php/php*php Aphp passwordphp isphp requiredphp becausephp somephp serversphp will
php php php php php php php php php php php php php php*php treatphp anphp emptyphp passwordphp asphp anphp anonymousphp bindphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$codephp php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp;
php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'Aphp passwordphp isphp requiredphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(php$codephp,php php'php'php,php php$messagesphp)php;
php php php php php php php php php}

php php php php php php php php php$ldapphp php=php php$thisphp-php>getLdapphp(php)php;

php php php php php php php php php$codephp php=php Zendphp_Authphp_Resultphp:php:FAILUREphp;
php php php php php php php php php$messagesphp[php0php]php php=php php"Authorityphp notphp foundphp:php php$usernamephp"php;
php php php php php php php php php$failedAuthoritiesphp php=php arrayphp(php)php;

php php php php php php php php php/php*php Iteratephp throughphp eachphp serverphp andphp tryphp tophp authenticatephp thephp supplied
php php php php php php php php php php*php credentialsphp againstphp itphp.
php php php php php php php php php php*php/
php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp asphp php$namephp php=php>php php$optionsphp)php php{

php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Adapterphp optionsphp arrayphp notphp anphp arrayphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$adapterOptionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$ldapphp,php php$optionsphp)php;
php php php php php php php php php php php php php$dnamephp php=php php'php'php;

php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php ifphp php(php$messagesphp[php1php]php)
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php$messagesphp[php1php]php;
php php php php php php php php php php php php php php php php php$messagesphp[php1php]php php=php php'php'php;
php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php$thisphp-php>php_optionsToStringphp(php$optionsphp)php;

php php php php php php php php php php php php php php php php php$dnamephp php=php php$thisphp-php>php_getAuthorityNamephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$failedAuthoritiesphp[php$dnamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php Ifphp multiplephp setsphp ofphp serverphp optionsphp forphp thephp samephp domain
php php php php php php php php php php php php php php php php php php php php php php*php arephp suppliedphp,php wephp wantphp tophp skipphp redundantphp authentications
php php php php php php php php php php php php php php php php php php php php php php*php wherephp thephp identityphp orphp credentialsphp wherephp foundphp tophp be
php php php php php php php php php php php php php php php php php php php php php php*php invalidphp withphp anotherphp serverphp forphp thephp samephp domainphp.php The
php php php php php php php php php php php php php php php php php php php php php php*php php$failedAuthoritiesphp arrayphp tracksphp thisphp conditionphp php(andphp also
php php php php php php php php php php php php php php php php php php php php php php*php servesphp tophp supplyphp thephp originalphp errorphp messagephp)php.
php php php php php php php php php php php php php php php php php php php php php php*php Thisphp fixesphp issuephp ZFphp-php4php0php9php3php.
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php1php]php php=php php$failedAuthoritiesphp[php$dnamephp]php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php"Skippingphp previouslyphp failedphp authorityphp:php php$dnamephp"php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$canonicalNamephp php=php php$ldapphp-php>getCanonicalAccountNamephp(php$usernamephp)php;
php php php php php php php php php php php php php php php php php$ldapphp-php>bindphp(php$canonicalNamephp,php php$passwordphp)php;
php php php php php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php php php php php*php Fixesphp problemphp whenphp authenticatedphp userphp isphp notphp allowedphp tophp retrieve
php php php php php php php php php php php php php php php php php php*php groupphp-membershipphp informationphp orphp ownphp accountphp.
php php php php php php php php php php php php php php php php php php*php Thisphp requiresphp thatphp thephp userphp specifiedphp withphp php"usernamephp"php andphp optionally
php php php php php php php php php php php php php php php php php php*php php"passwordphp"php inphp thephp Zendphp_Ldapphp optionsphp isphp ablephp tophp retrievephp thephp required
php php php php php php php php php php php php php php php php php php*php informationphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$requireRebindphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'usernamephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$ldapphp-php>bindphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$requireRebindphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$dnphp php=php php$ldapphp-php>getCanonicalAccountNamephp(php$canonicalNamephp,php Zendphp_Ldapphp:php:ACCTNAMEphp_FORMphp_DNphp)php;

php php php php php php php php php php php php php php php php php$groupResultphp php=php php$thisphp-php>php_checkGroupMembershipphp(php$ldapphp,php php$canonicalNamephp,php php$dnphp,php php$adapterOptionsphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$groupResultphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_authenticatedDnphp php=php php$dnphp;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php1php]php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php"php$canonicalNamephp authenticationphp successfulphp"php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$requireRebindphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php rebindingphp withphp authenticatedphp user
php php php php php php php php php php php php php php php php php php php php php php php php php$ldapphp-php>bindphp(php$dnphp,php php$passwordphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:SUCCESSphp,php php$canonicalNamephp,php php$messagesphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'Accountphp isphp notphp aphp memberphp ofphp thephp specifiedphp groupphp'php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php1php]php php=php php$groupResultphp;
php php php php php php php php php php php php php php php php php php php php php$failedAuthoritiesphp[php$dnamephp]php php=php php$groupResultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php catchphp php(Zendphp_Ldapphp_Exceptionphp php$zlephp)php php{

php php php php php php php php php php php php php php php php php/php*php LDAPphp basedphp authenticationphp isphp notoriouslyphp difficultphp tophp diagnosephp.php Therefore
php php php php php php php php php php php php php php php php php php*php wephp bendphp overphp backwardsphp tophp capturephp andphp recordphp everyphp possiblephp bitphp of
php php php php php php php php php php php php php php php php php php*php informationphp whenphp somethingphp goesphp wrongphp.
php php php php php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php php php php php php$errphp php=php php$zlephp-php>getCodephp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$errphp php=php=php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_Xphp_DOMAINphp_MISMATCHphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php Thisphp errorphp indicatesphp thatphp thephp domainphp suppliedphp inphp the
php php php php php php php php php php php php php php php php php php php php php php*php usernamephp didphp notphp matchphp thephp domainsphp inphp thephp serverphp options
php php php php php php php php php php php php php php php php php php php php php php*php andphp thereforephp wephp shouldphp justphp skipphp tophp thephp nextphp setphp of
php php php php php php php php php php php php php php php php php php php php php php*php serverphp optionsphp.
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$errphp php=php=php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_NOphp_SUCHphp_OBJECTphp)php php{
php php php php php php php php php php php php php php php php php php php php php$codephp php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php0php]php php=php php"Accountphp notphp foundphp:php php$usernamephp"php;
php php php php php php php php php php php php php php php php php php php php php$failedAuthoritiesphp[php$dnamephp]php php=php php$zlephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$errphp php=php=php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_INVALIDphp_CREDENTIALSphp)php php{
php php php php php php php php php php php php php php php php php php php php php$codephp php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'Invalidphp credentialsphp'php;
php php php php php php php php php php php php php php php php php php php php php$failedAuthoritiesphp[php$dnamephp]php php=php php$zlephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$linephp php=php php$zlephp-php>getLinephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php$zlephp-php>getFilephp(php)php php.php php"php(php$linephp)php:php php"php php.php php$zlephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php strphp_replacephp(php$passwordphp,php php'php*php*php*php*php*php'php,php php$zlephp-php>getTraceAsStringphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php0php]php php=php php'Anphp unexpectedphp failurephp occurredphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$messagesphp[php1php]php php=php php$zlephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$msgphp php=php issetphp(php$messagesphp[php1php]php)php php?php php$messagesphp[php1php]php php:php php$messagesphp[php0php]php;
php php php php php php php php php$messagesphp[php]php php=php php"php$usernamephp authenticationphp failedphp:php php$msgphp"php;

php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(php$codephp,php php$usernamephp,php php$messagesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp LDAPphp specificphp optionsphp onphp thephp Zendphp_Ldapphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp ofphp authphp-adapterphp specificphp options
php php php php php php*php/
php php php php protectedphp functionphp php_prepareOptionsphp(Zendphp_Ldapphp php$ldapphp,php arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$adapterOptionsphp php=php arrayphp(
php php php php php php php php php php php php php'groupphp'php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'groupDnphp'php php php php php php=php>php php$ldapphp-php>getBaseDnphp(php)php,
php php php php php php php php php php php php php'groupScopephp'php php php=php>php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_SUBphp,
php php php php php php php php php php php php php'groupAttrphp'php php php php=php>php php'cnphp'php,
php php php php php php php php php php php php php'groupFilterphp'php php=php>php php'objectClassphp=groupOfUniqueNamesphp'php,
php php php php php php php php php php php php php'memberAttrphp'php php php=php>php php'uniqueMemberphp'php,
php php php php php php php php php php php php php'memberIsDnphp'php php php=php>php true
php php php php php php php php php)php;
php php php php php php php php foreachphp php(php$adapterOptionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$optionsphp[php$keyphp]php;
php php php php php php php php php php php php php php php php unsetphp(php$optionsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'groupScopephp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(intphp)php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$valuephp,php arrayphp(Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_BASEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_ONEphp,php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_SUBphp)php,php truephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$adapterOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'memberIsDnphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$adapterOptionsphp[php$keyphp]php php=php php(php$valuephp php=php=php=php truephp php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php=php=php php'php1php'php php|php|php strcasecmpphp(php$valuephp,php php'truephp'php)php php=php=php php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$adapterOptionsphp[php$keyphp]php php=php trimphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$ldapphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php returnphp php$adapterOptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp thephp groupphp membershipphp ofphp thephp boundphp user
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@paramphp php stringphp php php php php$canonicalName
php php php php php php*php php@paramphp php stringphp php php php php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php$adapterOptions
php php php php php php*php php@returnphp stringphp|true
php php php php php php*php/
php php php php protectedphp functionphp php_checkGroupMembershipphp(Zendphp_Ldapphp php$ldapphp,php php$canonicalNamephp,php php$dnphp,php arrayphp php$adapterOptionsphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterOptionsphp[php'groupphp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$adapterOptionsphp[php'memberIsDnphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$userphp php=php php$canonicalNamephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$userphp php=php php$dnphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Filter
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Filterphp.phpphp'php;
php php php php php php php php php$groupNamephp php=php Zendphp_Ldapphp_Filterphp:php:equalsphp(php$adapterOptionsphp[php'groupAttrphp'php]php,php php$adapterOptionsphp[php'groupphp'php]php)php;
php php php php php php php php php$membershipphp php=php Zendphp_Ldapphp_Filterphp:php:equalsphp(php$adapterOptionsphp[php'memberAttrphp'php]php,php php$userphp)php;
php php php php php php php php php$groupphp php=php Zendphp_Ldapphp_Filterphp:php:andFilterphp(php$groupNamephp,php php$membershipphp)php;
php php php php php php php php php$groupFilterphp php=php php$adapterOptionsphp[php'groupFilterphp'php]php;
php php php php php php php php ifphp php(php!emptyphp(php$groupFilterphp)php)php php{
php php php php php php php php php php php php php$groupphp php=php php$groupphp-php>addAndphp(php$groupFilterphp)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$ldapphp-php>countphp(php$groupphp,php php$adapterOptionsphp[php'groupDnphp'php]php,php php$adapterOptionsphp[php'groupScopephp'php]php)php;

php php php php php php php php ifphp php(php$resultphp php=php=php=php php1php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php'Failedphp tophp verifyphp groupphp membershipphp withphp php'php php.php php$groupphp-php>toStringphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getAccountObjectphp(php)php php-php Returnsphp thephp resultphp entryphp asphp aphp stdClassphp object
php php php php php php*
php php php php php php*php Thisphp resemblesphp thephp featurephp php{php@seephp Zendphp_Authphp_Adapterphp_DbTablephp:php:getResultRowObjectphp(php)php}php.
php php php php php php*php Closesphp ZFphp-php6php8php1php3
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$returnAttribs
php php php php php php*php php@paramphp php arrayphp php$omitAttribs
php php php php php php*php php@returnphp stdClassphp|boolean
php php php php php php*php/
php php php php publicphp functionphp getAccountObjectphp(arrayphp php$returnAttribsphp php=php arrayphp(php)php,php arrayphp php$omitAttribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_authenticatedDnphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$returnObjectphp php=php newphp stdClassphp(php)php;

php php php php php php php php php$omitAttribsphp php=php arrayphp_mapphp(php'strtolowerphp'php,php php$omitAttribsphp)php;

php php php php php php php php php$entryphp php=php php$thisphp-php>getLdapphp(php)php-php>getEntryphp(php$thisphp-php>php_authenticatedDnphp,php php$returnAttribsphp,php truephp)php;
php php php php php php php php foreachphp php(php$entryphp asphp php$attrphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$attrphp,php php$omitAttribsphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php skipphp attributesphp markedphp tophp bephp omitted
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$returnObjectphp-php>php$attrphp php=php php(countphp(php$valuephp)php php>php php1php)php php?php php$valuephp php:php php$valuephp[php0php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnObjectphp-php>php$attrphp php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$returnObjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp optionsphp tophp string
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_optionsToStringphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$strphp php=php php'php'php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php=php=php=php php'passwordphp'php)
php php php php php php php php php php php php php php php php php$valphp php=php php'php*php*php*php*php*php'php;
php php php php php php php php php php php php ifphp php(php$strphp)
php php php php php php php php php php php php php php php php php$strphp php.php=php php'php,php'php;
php php php php php php php php php php php php php$strphp php.php=php php$keyphp php.php php'php=php'php php.php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php$strphp;
php php php php php}
php}
