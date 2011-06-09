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
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Consumerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_OpenId
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Extension
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp/Extensionphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Consumerphp_Storage
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp/Consumerphp/Storagephp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php OpenIDphp consumerphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_OpenIdphp_Consumer
php{

php php php php php/php*php*
php php php php php php*php Referencephp tophp anphp implementationphp ofphp storagephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_OpenIdphp_Consumerphp_Storagephp php$php_storage
php php php php php php*php/
php php php php protectedphp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Enablesphp orphp disablesphp consumerphp tophp usephp associationphp withphp serverphp basedphp on
php php php php php php*php Diffiephp-Hellmanphp keyphp agreement
php php php php php php*
php php php php php php*php php@varphp Zendphp_OpenIdphp_Consumerphp_Storagephp php$php_dumbMode
php php php php php php*php/
php php php php protectedphp php$php_dumbModephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Internalphp cachephp tophp preventphp unnecessaryphp accessphp tophp storage
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_cache
php php php php php php*php/
php php php php protectedphp php$php_cachephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php HTTPphp clientphp tophp makephp HTTPphp requests
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Clientphp php$php_httpClient
php php php php php php*php/
php php php php privatephp php$php_httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php HTTPphp sessionphp tophp storephp climedphp_idphp betweenphp requests
php php php php php php*
php php php php php php*php php@varphp Zendphp_Sessionphp_Namespacephp php$php_session
php php php php php php*php/
php php php php privatephp php$php_sessionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Lastphp errorphp messagephp forphp logiphp,php checkphp orphp verifyphp failure
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_error
php php php php php php*php/
php php php php privatephp php$php_errorphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp Zendphp_OpenIdphp_Consumerphp objectphp withphp givenphp php$storagephp.
php php php php php php*php Enablesphp orphp disablesphp futurephp associationphp withphp serverphp basedphp on
php php php php php php*php Diffiephp-Hellmanphp keyphp agreementphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_OpenIdphp_Consumerphp_Storagephp php$storagephp implementationphp ofphp custom
php php php php php php*php php storagephp object
php php php php php php*php php@paramphp boolphp php$dumbModephp Enablesphp orphp disablesphp consumerphp tophp usephp association
php php php php php php*php php withphp serverphp basedphp onphp Diffiephp-Hellmanphp keyphp agreement
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_OpenIdphp_Consumerphp_Storagephp php$storagephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dumbModephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$storagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/OpenIdphp/Consumerphp/Storagephp/Filephp.phpphp"php;
php php php php php php php php php php php php php$thisphp-php>php_storagephp php=php newphp Zendphp_OpenIdphp_Consumerphp_Storagephp_Filephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dumbModephp php=php php$dumbModephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp checkphp php(withphp possiblephp userphp interactionphp)php ofphp OpenIDphp identityphp.
php php php php php php*
php php php php php php*php Thisphp isphp thephp firstphp stepphp ofphp OpenIDphp authenticationphp processphp.
php php php php php php*php Onphp successphp thephp functionphp doesphp notphp returnphp php(itphp doesphp HTTPphp redirectionphp to
php php php php php php*php serverphp andphp exitsphp)php.php Onphp failurephp itphp returnsphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp OpenIDphp identity
php php php php php php*php php@paramphp stringphp php$returnTophp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*php php@paramphp stringphp php$rootphp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp loginphp(php$idphp,php php$returnTophp php=php nullphp,php php$rootphp php=php nullphp,php php$extensionsphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_checkIdphp(
php php php php php php php php php php php php falsephp,
php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php$returnTophp,
php php php php php php php php php php php php php$rootphp,
php php php php php php php php php php php php php$extensionsphp,
php php php php php php php php php php php php php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp immediatephp checkphp php(withoutphp userphp interactionphp)php ofphp OpenIDphp identityphp.
php php php php php php*
php php php php php php*php Thisphp isphp thephp firstphp stepphp ofphp OpenIDphp authenticationphp processphp.
php php php php php php*php Onphp successphp thephp functionphp doesphp notphp returnphp php(itphp doesphp HTTPphp redirectionphp to
php php php php php php*php serverphp andphp exitsphp)php.php Onphp failurephp itphp returnsphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp OpenIDphp identity
php php php php php php*php php@paramphp stringphp php$returnTophp HTTPphp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*php php@paramphp stringphp php$rootphp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp checkphp(php$idphp,php php$returnTophp=nullphp,php php$rootphp=nullphp,php php$extensionsphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)

php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_checkIdphp(
php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php$returnTophp,
php php php php php php php php php php php php php$rootphp,
php php php php php php php php php php php php php$extensionsphp,
php php php php php php php php php php php php php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifiesphp authenticationphp responsephp fromphp OpenIDphp serverphp.
php php php php php php*
php php php php php php*php Thisphp isphp thephp secondphp stepphp ofphp OpenIDphp authenticationphp processphp.
php php php php php php*php Thephp functionphp returnsphp truephp onphp successfulphp authenticationphp andphp falsephp on
php php php php php php*php failurephp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp HTTPphp queryphp dataphp fromphp OpenIDphp server
php php php php php php*php php@paramphp stringphp php&php$identityphp thisphp argumentphp isphp setphp tophp endphp-userphp'sphp claimed
php php php php php php*php php identifierphp orphp OpenIDphp providerphp localphp identifierphp.
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp verifyphp(php$paramsphp,php php&php$identityphp php=php php"php"php,php php$extensionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setErrorphp(php'php'php)php;

php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_nsphp'php]php)php php&php&
php php php php php php php php php php php php php$paramsphp[php'openidphp_nsphp'php]php php=php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php"openidphp_claimedphp_idphp"php]php)php)php php{
php php php php php php php php php php php php php$identityphp php=php php$paramsphp[php"openidphp_claimedphp_idphp"php]php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php"openidphp_identityphp"php]php)php)php{
php php php php php php php php php php php php php$identityphp php=php php$paramsphp[php"openidphp_identityphp"php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$identityphp php=php php"php"php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$versionphp <php php2php.php0php php&php&php php!issetphp(php$paramsphp[php"openidphp_claimedphp_idphp"php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_sessionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_sessionphp-php>identityphp php=php=php=php php$identityphp)php php{
php php php php php php php php php php php php php php php php php php php php php$identityphp php=php php$thisphp-php>php_sessionphp-php>claimedphp_idphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(definedphp(php'SIDphp'php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php"zendphp_openidphp"php]php[php"identityphp"php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php issetphp(php$php_SESSIONphp[php"zendphp_openidphp"php]php[php"claimedphp_idphp"php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php"zendphp_openidphp"php]php[php"identityphp"php]php php=php=php=php php$identityphp)php php{
php php php php php php php php php php php php php php php php php php php php php$identityphp php=php php$php_SESSIONphp[php"zendphp_openidphp"php]php[php"claimedphp_idphp"php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Sessionphp/Namespacephp.phpphp"php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp php=php newphp Zendphp_Sessionphp_Namespacephp(php"zendphp_openidphp"php)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_sessionphp-php>identityphp php=php=php=php php$identityphp)php php{
php php php php php php php php php php php php php php php php php php php php php$identityphp php=php php$thisphp-php>php_sessionphp-php>claimedphp_idphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_modephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.modephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.returnphp_tophp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_signedphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.signedphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_sigphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.sigphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$paramsphp[php'openidphp_modephp'php]php php!php=php php'idphp_resphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Wrongphp openidphp.modephp php'php"php.php$paramsphp[php'openidphp_modephp'php]php.php"php'php php!php=php php'idphp_resphp'php"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_assocphp_handlephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.assocphp_handlephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$paramsphp[php'openidphp_returnphp_tophp'php]php php!php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php)php php{
php php php php php php php php php php php php php/php*php Ignorephp queryphp partphp inphp openidphp.returnphp_tophp php*php/
php php php php php php php php php php php php php$posphp php=php strposphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php,php php'php?php'php)php;
php php php php php php php php php php php php ifphp php(php$posphp php=php=php=php falsephp php|php|
php php php php php php php php php php php php php php php php SUBSTRphp(php$paramsphp[php'openidphp_returnphp_tophp'php]php,php php0php php,php php$posphp)php php!php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php)php php{

php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Wrongphp openidphp.returnphp_tophp php'php"php.
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp_returnphp_tophp'php]php.php"php'php php!php=php php'php"php php.php Zendphp_OpenIdphp:php:selfUrlphp(php)php php.php"php'php"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_responsephp_noncephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.responsephp_noncephp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'openidphp_opphp_endpointphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.opphp_endpointphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php/php*php OpenIDphp php2php.php0php php(php1php1php.php3php)php Checkingphp thephp Noncephp php*php/
php php php php php php php php php php php php php}php elsephp ifphp php(php!php$thisphp-php>php_storagephp-php>isUniqueNoncephp(php$paramsphp[php'openidphp_opphp_endpointphp'php]php,php php$paramsphp[php'openidphp_responsephp_noncephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Duplicatephp openidphp.responsephp_noncephp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'openidphp_invalidatephp_handlephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_storagephp-php>getAssociationByHandlephp(
php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp_invalidatephp_handlephp'php]php,
php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_storagephp-php>delAssociationphp(php$urlphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_storagephp-php>getAssociationByHandlephp(
php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp_assocphp_handlephp'php]php,
php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php php$signedphp php=php explodephp(php'php,php'php,php php$paramsphp[php'openidphp_signedphp'php]php)php;
php php php php php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php php php php php foreachphp php(php$signedphp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php$dataphp php.php=php php$keyphp php.php php'php:php'php php.php php$paramsphp[php'openidphp_php'php php.php strtrphp(php$keyphp,php'php.php'php,php'php_php'php)php]php php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(basephp6php4php_decodephp(php$paramsphp[php'openidphp_sigphp'php]php)php php=php=
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp:php:hashHmacphp(php$macFuncphp,php php$dataphp,php php$secretphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'parseResponsephp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Extensionphp:php:parseResponsephp failurephp"php)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php*php OpenIDphp php2php.php0php php(php1php1php.php2php)php Verifyingphp Discoveredphp Informationphp php*php/
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_claimedphp_idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$idphp php=php php$paramsphp[php'openidphp_claimedphp_idphp'php]php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Normalizationphp failedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php!php$thisphp-php>php_discoveryphp(php$idphp,php php$discoveredphp_serverphp,php php$discoveredphp_versionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Discoveryphp failedphp:php php"php php.php php$thisphp-php>getErrorphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php(php!emptyphp(php$paramsphp[php'openidphp_identityphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php"openidphp_identityphp"php]php php!php=php php$idphp)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php!emptyphp(php$paramsphp[php'openidphp_opphp_endpointphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp_opphp_endpointphp'php]php php!php=php php$discoveredphp_serverphp)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$discoveredphp_versionphp php!php=php php$versionphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Discoveryphp informationphp verificationphp failedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_storagephp-php>delAssociationphp(php$urlphp)php;
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Signaturephp checkphp failedphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php else
php php php php php php php php php{
php php php php php php php php php php php php php/php*php Usephp dumbphp modephp php*php/
php php php php php php php php php php php php ifphp php(issetphp(php$paramsphp[php'openidphp_claimedphp_idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$paramsphp[php'openidphp_claimedphp_idphp'php]php;
php php php php php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'openidphp_identityphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$paramsphp[php'openidphp_identityphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp openidphp.claimedphp_idphp andphp openidphp.identityphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Normalizationphp failedphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php!php$thisphp-php>php_discoveryphp(php$idphp,php php$serverphp,php php$discoveredphp_versionphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Discoveryphp failedphp:php php"php php.php php$thisphp-php>getErrorphp(php)php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php OpenIDphp php2php.php0php php(php1php1php.php2php)php Verifyingphp Discoveredphp Informationphp php*php/
php php php php php php php php php php php php ifphp php(php(issetphp(php$paramsphp[php'openidphp_identityphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php$paramsphp[php"openidphp_identityphp"php]php php!php=php php$idphp)php php|php|
php php php php php php php php php php php php php php php php php(issetphp(php$paramsphp[php'openidphp_opphp_endpointphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp_opphp_endpointphp'php]php php!php=php php$serverphp)php php|php|
php php php php php php php php php php php php php php php php php$discoveredphp_versionphp php!php=php php$versionphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Discoveryphp informationphp verificationphp failedphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$paramsphp2php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php'openidphp_nsphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.nsphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_nsphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_sregphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.sregphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_sregphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strposphp(php$keyphp,php php'openidphp_php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'openidphp.php'php php.php substrphp(php$keyphp,php strlenphp(php'openidphp_php'php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp2php[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$paramsphp2php[php'openidphp.modephp'php]php php=php php'checkphp_authenticationphp'php;
php php php php php php php php php php php php php$retphp php=php php$thisphp-php>php_httpRequestphp(php$serverphp,php php'POSTphp'php,php php$paramsphp2php,php php$statusphp)php;
php php php php php php php php php php php php ifphp php(php$statusphp php!php=php php2php0php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"php'Dumbphp'php signaturephp verificationphp HTTPphp requestphp failedphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$retphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp(explodephp(php"php\nphp"php,php php$retphp)php asphp php$linephp)php php{
php php php php php php php php php php php php php php php php php php php php php$linephp php=php trimphp(php$linephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$linephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$xphp php=php explodephp(php'php:php'php,php php$linephp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$xphp)php php&php&php countphp(php$xphp)php php=php=php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php listphp(php$keyphp,php php$valuephp)php php=php php$xphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rphp[trimphp(php$keyphp)php]php php=php trimphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$retphp php=php php$rphp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$retphp[php'invalidatephp_handlephp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_storagephp-php>getAssociationByHandlephp(
php php php php php php php php php php php php php php php php php php php php php$retphp[php'invalidatephp_handlephp'php]php,
php php php php php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_storagephp-php>delAssociationphp(php$urlphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$retphp[php'isphp_validphp'php]php)php php&php&php php$retphp[php'isphp_validphp'php]php php=php=php php'truephp'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'parseResponsephp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Extensionphp:php:parseResponsephp failurephp"php)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"php'Dumbphp'php signaturephp verificationphp failedphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp assiciationphp inphp internalphp chacephp andphp externalphp storage
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp url
php php php php php php*php php@paramphp stringphp php$handlephp associationphp handle
php php php php php php*php php@paramphp stringphp php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php$secretphp sharedphp secret
php php php php php php*php php@paramphp integerphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addAssociationphp(php$urlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_cachephp[php$urlphp]php php=php arrayphp(php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php;
php php php php php php php php returnphp php$thisphp-php>php_storagephp-php>addAssociationphp(
php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php$handlephp,
php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php$expiresphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrivephp assiciationphp informationphp forphp givenphp php$urlphp fromphp internalphp cahcephp or
php php php php php php*php externalphp storage
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp url
php php php php php php*php php@paramphp stringphp php&php$handlephp associationphp handle
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp integerphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getAssociationphp(php$urlphp,php php&php$handlephp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_cachephp[php$urlphp]php)php)php php{
php php php php php php php php php php php php php$handlephp php php php=php php$thisphp-php>php_cachephp[php$urlphp]php[php0php]php;
php php php php php php php php php php php php php$macFuncphp php=php php$thisphp-php>php_cachephp[php$urlphp]php[php1php]php;
php php php php php php php php php php php php php$secretphp php php php=php php$thisphp-php>php_cachephp[php$urlphp]php[php2php]php;
php php php php php php php php php php php php php$expiresphp php php=php php$thisphp-php>php_cachephp[php$urlphp]php[php3php]php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_storagephp-php>getAssociationphp(
php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php$handlephp,
php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_cachephp[php$urlphp]php php=php arrayphp(php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp HTTPphp requestphp tophp givenphp php$urlphp usingphp givenphp HTTPphp php$methodphp.
php php php php php php*php Sendphp additinalphp queryphp specifiedphp byphp variablephp/valuephp arrayphp,
php php php php php php*php Onphp successphp returnsphp HTTPphp responsephp withoutphp headersphp,php falsephp onphp failurephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp url
php php php php php php*php php@paramphp stringphp php$methodphp HTTPphp requestphp methodphp php'GETphp'php orphp php'POSTphp'
php php php php php php*php php@paramphp arrayphp php$paramsphp additionalphp qweryphp parametersphp tophp bephp passedphp with
php php php php php php*php php@paramphp intphp php&php$stausphp HTTPphp statusphp code
php php php php php php*php php request
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_httpRequestphp(php$urlphp,php php$methodphp php=php php'GETphp'php,php arrayphp php$paramsphp php=php arrayphp(php)php,php php&php$statusphp php=php nullphp)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>php_httpClientphp;
php php php php php php php php ifphp php(php$clientphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$clientphp php=php newphp Zendphp_Httpphp_Clientphp(
php php php php php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'maxredirectsphp'php php=php>php php4php,
php php php php php php php php php php php php php php php php php php php php php php php php php'timeoutphp'php php php php php php php=php>php php1php5php,
php php php php php php php php php php php php php php php php php php php php php php php php php'useragentphp'php php php php php=php>php php'Zendphp_OpenIdphp'
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php}

php php php php php php php php php$clientphp-php>resetParametersphp(php)php;
php php php php php php php php ifphp php(php$methodphp php=php=php php'POSTphp'php)php php{
php php php php php php php php php php php php php$clientphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php php php php php php$clientphp-php>setParameterPostphp(php$paramsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$clientphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:GETphp)php;
php php php php php php php php php php php php php$clientphp-php>setParameterGetphp(php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php'HTTPphp Requestphp failedphp:php php'php php.php php$ephp-php>getMessagephp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$statusphp php=php php$responsephp-php>getStatusphp(php)php;
php php php php php php php php php$bodyphp php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php ifphp php(php$statusphp php=php=php php2php0php0php php|php|php php(php$statusphp php=php=php php4php0php0php php&php&php php!emptyphp(php$bodyphp)php)php)php php{
php php php php php php php php php php php php returnphp php$bodyphp;
php php php php php php php php php}elsephp{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php'Badphp HTTPphp responsephp'php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp php(orphp reusephp existingphp)php associationphp betweenphp OpenIDphp consumerphp and
php php php php php php*php OpenIDphp serverphp basedphp onphp Diffiephp-Hellmanphp keyphp agreementphp.php Returnsphp true
php php php php php php*php onphp successphp andphp falsephp onphp failurephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp url
php php php php php php*php php@paramphp floatphp php$versionphp OpenIDphp protocolphp version
php php php php php php*php php@paramphp stringphp php$privphp_keyphp forphp testingphp only
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_associatephp(php$urlphp,php php$versionphp,php php$privphp_keyphp=nullphp)
php php php php php{

php php php php php php php php php/php*php Checkphp ifphp wephp alreadyphp havephp associationphp inphp chacephp orphp storagephp php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_getAssociationphp(
php php php php php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php php php php php$handlephp,
php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_dumbModephp)php php{
php php php php php php php php php php php php php/php*php Usephp dumbphp modephp php*php/
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'openidphp.nsphp'php php php php php php php php php php php php=php>php Zendphp_OpenIdphp:php:NSphp_php2php_php0php,
php php php php php php php php php php php php php php php php php'openidphp.modephp'php php php php php php php php php php=php>php php'associatephp'php,
php php php php php php php php php php php php php php php php php'openidphp.assocphp_typephp'php php php php=php>php php'HMACphp-SHAphp2php5php6php'php,
php php php php php php php php php php php php php php php php php'openidphp.sessionphp_typephp'php php=php>php php'DHphp-SHAphp2php5php6php'php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'openidphp.modephp'php php php php php php php php php php=php>php php'associatephp'php,
php php php php php php php php php php php php php php php php php'openidphp.assocphp_typephp'php php php php=php>php php'HMACphp-SHAphp1php'php,
php php php php php php php php php php php php php php php php php'openidphp.sessionphp_typephp'php php=php>php php'DHphp-SHAphp1php'php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$dhphp php=php Zendphp_OpenIdphp:php:createDhKeyphp(packphp(php'Hphp*php'php,php Zendphp_OpenIdphp:php:DHphp_Pphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php packphp(php'Hphp*php'php,php Zendphp_OpenIdphp:php:DHphp_Gphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privphp_keyphp)php;
php php php php php php php php php$dhphp_detailsphp php=php Zendphp_OpenIdphp:php:getDhKeyDetailsphp(php$dhphp)php;

php php php php php php php php php$paramsphp[php'openidphp.dhphp_modulusphp'php]php php php php php php php php php php=php basephp6php4php_encodephp(
php php php php php php php php php php php php Zendphp_OpenIdphp:php:btwocphp(php$dhphp_detailsphp[php'pphp'php]php)php)php;
php php php php php php php php php$paramsphp[php'openidphp.dhphp_genphp'php]php php php php php php php php php php php php php php=php basephp6php4php_encodephp(
php php php php php php php php php php php php Zendphp_OpenIdphp:php:btwocphp(php$dhphp_detailsphp[php'gphp'php]php)php)php;
php php php php php php php php php$paramsphp[php'openidphp.dhphp_consumerphp_publicphp'php]php php=php basephp6php4php_encodephp(
php php php php php php php php php php php php Zendphp_OpenIdphp:php:btwocphp(php$dhphp_detailsphp[php'pubphp_keyphp'php]php)php)php;

php php php php php php php php whilephp(php1php)php php{
php php php php php php php php php php php php php$retphp php=php php$thisphp-php>php_httpRequestphp(php$urlphp,php php'POSTphp'php,php php$paramsphp,php php$statusphp)php;
php php php php php php php php php php php php ifphp php(php$retphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"HTTPphp requestphp failedphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$rphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$badphp_responsephp php=php falsephp;
php php php php php php php php php php php php foreachphp(explodephp(php"php\nphp"php,php php$retphp)php asphp php$linephp)php php{
php php php php php php php php php php php php php php php php php$linephp php=php trimphp(php$linephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$linephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$xphp php=php explodephp(php'php:php'php,php php$linephp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$xphp)php php&php&php countphp(php$xphp)php php=php=php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php listphp(php$keyphp,php php$valuephp)php php=php php$xphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$rphp[trimphp(php$keyphp)php]php php=php trimphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$badphp_responsephp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$badphp_responsephp php&php&php strposphp(php$retphp,php php'Unknownphp sessionphp typephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$rphp[php'errorphp_codephp'php]php php=php php'unsupportedphp-typephp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$retphp php=php php$rphp;

php php php php php php php php php php php php ifphp php(issetphp(php$retphp[php'errorphp_codephp'php]php)php php&php&
php php php php php php php php php php php php php php php php php$retphp[php'errorphp_codephp'php]php php=php=php php'unsupportedphp-typephp'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$paramsphp[php'openidphp.sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp2php5php6php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp.sessionphp_typephp'php]php php=php php'DHphp-SHAphp1php'php;
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp.assocphp_typephp'php]php php=php php'HMACphp-SHAphp1php'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$paramsphp[php'openidphp.sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp1php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'openidphp.sessionphp_typephp'php]php php=php php'nophp-encryptionphp'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Thephp OpenIDphp servicephp respondedphp withphp:php php"php php.php php$retphp[php'errorphp_codephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$statusphp php!php=php php2php0php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Thephp serverphp respondedphp withphp statusphp codephp:php php"php php.php php$statusphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php php&php&
php php php php php php php php php php php php issetphp(php$retphp[php'nsphp'php]php)php php&php&
php php php php php php php php php php php php php$retphp[php'nsphp'php]php php!php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Wrongphp namespacephp definitionphp inphp thephp serverphp responsephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$retphp[php'assocphp_handlephp'php]php)php php|php|
php php php php php php php php php php php php php!issetphp(php$retphp[php'expiresphp_inphp'php]php)php php|php|
php php php php php php php php php php php php php!issetphp(php$retphp[php'assocphp_typephp'php]php)php php|php|
php php php php php php php php php php php php php$paramsphp[php'openidphp.assocphp_typephp'php]php php!php=php php$retphp[php'assocphp_typephp'php]php)php php{
php php php php php php php php php php php php ifphp php(php$paramsphp[php'openidphp.assocphp_typephp'php]php php!php=php php$retphp[php'assocphp_typephp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Thephp returnedphp assocphp_typephp differedphp fromphp thephp suppliedphp openidphp.assocphp_typephp"php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Missingphp requiredphp dataphp fromphp providerphp php(assocphp_handlephp,php expiresphp_inphp,php assocphp_typephp arephp requiredphp)php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$handlephp php php php php php=php php$retphp[php'assocphp_handlephp'php]php;
php php php php php php php php php$expiresInphp php=php php$retphp[php'expiresphp_inphp'php]php;

php php php php php php php php ifphp php(php$retphp[php'assocphp_typephp'php]php php=php=php php'HMACphp-SHAphp1php'php)php php{
php php php php php php php php php php php php php$macFuncphp php=php php'shaphp1php'php;
php php php php php php php php php}php elsephp ifphp php(php$retphp[php'assocphp_typephp'php]php php=php=php php'HMACphp-SHAphp2php5php6php'php php&php&
php php php php php php php php php php php php php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$macFuncphp php=php php'shaphp2php5php6php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Unsupportedphp assocphp_typephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(emptyphp(php$retphp[php'sessionphp_typephp'php]php)php php|php|
php php php php php php php php php php php php php php(php$versionphp php>php=php php2php.php0php php&php&php php$retphp[php'sessionphp_typephp'php]php php=php=php php'nophp-encryptionphp'php)php)php php&php&
php php php php php php php php php php php php php issetphp(php$retphp[php'macphp_keyphp'php]php)php)php php{
php php php php php php php php php php php php php$secretphp php=php basephp6php4php_decodephp(php$retphp[php'macphp_keyphp'php]php)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$retphp[php'sessionphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$retphp[php'sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp1php'php php&php&
php php php php php php php php php php php php php!emptyphp(php$retphp[php'dhphp_serverphp_publicphp'php]php)php php&php&
php php php php php php php php php php php php php!emptyphp(php$retphp[php'encphp_macphp_keyphp'php]php)php)php php{
php php php php php php php php php php php php php$dhFuncphp php=php php'shaphp1php'php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$retphp[php'sessionphp_typephp'php]php)php php&php&
php php php php php php php php php php php php php$retphp[php'sessionphp_typephp'php]php php=php=php php'DHphp-SHAphp2php5php6php'php php&php&
php php php php php php php php php php php php php$versionphp php>php=php php2php.php0php php&php&
php php php php php php php php php php php php php!emptyphp(php$retphp[php'dhphp_serverphp_publicphp'php]php)php php&php&
php php php php php php php php php php php php php!emptyphp(php$retphp[php'encphp_macphp_keyphp'php]php)php)php php{
php php php php php php php php php php php php php$dhFuncphp php=php php'shaphp2php5php6php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Unsupportedphp sessionphp_typephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dhFuncphp)php)php php{
php php php php php php php php php php php php php$serverPubphp php=php basephp6php4php_decodephp(php$retphp[php'dhphp_serverphp_publicphp'php]php)php;
php php php php php php php php php php php php php$dhSecphp php=php Zendphp_OpenIdphp:php:computeDhSecretphp(php$serverPubphp,php php$dhphp)php;
php php php php php php php php php php php php ifphp php(php$dhSecphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"DHphp secretphp comutationphp failedphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$secphp php=php Zendphp_OpenIdphp:php:digestphp(php$dhFuncphp,php php$dhSecphp)php;
php php php php php php php php php php php php ifphp php(php$secphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Couldphp notphp createphp digestphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$secretphp php=php php$secphp php^php basephp6php4php_decodephp(php$retphp[php'encphp_macphp_keyphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$macFuncphp php=php=php php'shaphp1php'php)php php{
php php php php php php php php php php php php ifphp php(Zendphp_OpenIdphp:php:strlenphp(php$secretphp)php php!php=php php2php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Thephp lengthphp ofphp thephp shaphp1php secretphp mustphp bephp php2php0php"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$macFuncphp php=php=php php'shaphp2php5php6php'php)php php{
php php php php php php php php php php php php ifphp php(Zendphp_OpenIdphp:php:strlenphp(php$secretphp)php php!php=php php3php2php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Thephp lengthphp ofphp thephp shaphp2php5php6php secretphp mustphp bephp php3php2php"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_addAssociationphp(
php php php php php php php php php php php php php$urlphp,
php php php php php php php php php php php php php$handlephp,
php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php timephp(php)php php+php php$expiresInphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp discoveryphp ofphp identityphp andphp findsphp OpenIDphp URLphp,php OpenIDphp serverphp URL
php php php php php php*php andphp OpenIDphp protocolphp versionphp.php Returnsphp truephp onphp succeesphp andphp falsephp on
php php php php php php*php failurephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php&php$idphp OpenIDphp identityphp URL
php php php php php php*php php@paramphp stringphp php&php$serverphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp floatphp php&php$versionphp OpenIDphp protocolphp version
php php php php php php*php php@returnphp bool
php php php php php php*php php@todophp OpenIDphp php2php.php0php php(php7php.php3php)php XRIphp andphp Yadisphp discovery
php php php php php php*php/
php php php php protectedphp functionphp php_discoveryphp(php&php$idphp,php php&php$serverphp,php php&php$versionphp)
php php php php php{
php php php php php php php php php$realIdphp php=php php$idphp;
php php php php php php php php ifphp php(php$thisphp-php>php_storagephp-php>getDiscoveryInfophp(
php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php$realIdphp,
php php php php php php php php php php php php php php php php php$serverphp,
php php php php php php php php php php php php php php php php php$versionphp,
php php php php php php php php php php php php php php php php php$expirephp)php)php php{
php php php php php php php php php php php php php$idphp php=php php$realIdphp;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php/php*php TODOphp:php OpenIDphp php2php.php0php php(php7php.php3php)php XRIphp andphp Yadisphp discoveryphp php*php/

php php php php php php php php php/php*php HTMLphp-basedphp discoveryphp php*php/
php php php php php php php php php$responsephp php=php php$thisphp-php>php_httpRequestphp(php$idphp,php php'GETphp'php,php arrayphp(php)php,php php$statusphp)php;
php php php php php php php php ifphp php(php$statusphp php!php=php php2php0php0php php|php|php php!isphp_stringphp(php$responsephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp2php.providerphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php1php[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php2php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php php php php php$serverphp php=php php$rphp[php3php]php;
php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php1php[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp2php.providerphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php3php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php$versionphp php=php php2php.php0php;
php php php php php php php php php php php php php$serverphp php=php php$rphp[php2php]php;
php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp.serverphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php1php[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php2php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php php php php php php$serverphp php=php php$rphp[php3php]php;
php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php1php[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp.serverphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php3php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php$versionphp php=php php1php.php1php;
php php php php php php php php php php php php php$serverphp php=php php$rphp[php2php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp2php.localphp_idphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php1php[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php2php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php php php php php$realIdphp php=php php$rphp[php3php]php;
php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php1php[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp2php.localphp_idphp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php3php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php php php php php$realIdphp php=php php$rphp[php2php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp.delegatephp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php1php[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php2php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php php php php php$realIdphp php=php php$rphp[php3php]php;
php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php php php php php'php/php<linkphp[php^php>php]php*hrefphp=php(php[php"php\php'php]php)php(php[php^php"php\php'php]php+php)php\php\php1php[php^php>php]php*relphp=php(php[php"php\php'php]php)php[php php\tphp]php*php(php?php:php[php^php php\tphp"php\php'php]php+php[php php\tphp]php+php)php*php?openidphp.delegatephp[php php\tphp]php*php[php^php"php\php'php]php*php\php\php3php[php^php>php]php*php\php/php?php>php/iphp'php,
php php php php php php php php php php php php php php php php php php php php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php$rphp)php)php php{
php php php php php php php php php php php php php php php php php$realIdphp php=php php$rphp[php2php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$expirephp php=php timephp(php)php php+php php6php0php php*php php6php0php;
php php php php php php php php php$thisphp-php>php_storagephp-php>addDiscoveryInfophp(php$idphp,php php$realIdphp,php php$serverphp,php php$versionphp,php php$expirephp)php;
php php php php php php php php php$idphp php=php php$realIdphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp checkphp ofphp OpenIDphp identityphp.
php php php php php php*
php php php php php php*php Thisphp isphp thephp firstphp stepphp ofphp OpenIDphp authenticationphp processphp.
php php php php php php*php Onphp successphp thephp functionphp doesphp notphp returnphp php(itphp doesphp HTTPphp redirectionphp to
php php php php php php*php serverphp andphp exitsphp)php.php Onphp failurephp itphp returnsphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$immediatephp enablesphp orphp disablesphp interactionphp withphp user
php php php php php php*php php@paramphp stringphp php$idphp OpenIDphp identity
php php php php php php*php php@paramphp stringphp php$returnTophp HTTPphp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*php php@paramphp stringphp php$rootphp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_checkIdphp(php$immediatephp,php php$idphp,php php$returnTophp=nullphp,php php$rootphp=nullphp,
php php php php php php php php php$extensionsphp=nullphp,php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setErrorphp(php'php'php)php;

php php php php php php php php ifphp php(php!Zendphp_OpenIdphp:php:normalizephp(php$idphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Normalisationphp failedphp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$claimedIdphp php=php php$idphp;

php php php php php php php php ifphp php(php!php$thisphp-php>php_discoveryphp(php$idphp,php php$serverphp,php php$versionphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Discoveryphp failedphp:php php"php php.php php$thisphp-php>getErrorphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_associatephp(php$serverphp,php php$versionphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Associationphp failedphp:php php"php php.php php$thisphp-php>getErrorphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_getAssociationphp(
php php php php php php php php php php php php php php php php php$serverphp,
php php php php php php php php php php php php php php php php php$handlephp,
php php php php php php php php php php php php php php php php php$macFuncphp,
php php php php php php php php php php php php php php php php php$secretphp,
php php php php php php php php php php php php php php php php php$expiresphp)php)php php{
php php php php php php php php php php php php php/php*php Usephp dumbphp modephp php*php/
php php php php php php php php php php php php unsetphp(php$handlephp)php;
php php php php php php php php php php php php unsetphp(php$macFuncphp)php;
php php php php php php php php php php php php unsetphp(php$secretphp)php;
php php php php php php php php php php php php unsetphp(php$expiresphp)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$paramsphp[php'openidphp.nsphp'php]php php=php Zendphp_OpenIdphp:php:NSphp_php2php_php0php;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'openidphp.modephp'php]php php=php php$immediatephp php?
php php php php php php php php php php php php php'checkidphp_immediatephp'php php:php php'checkidphp_setupphp'php;

php php php php php php php php php$paramsphp[php'openidphp.identityphp'php]php php=php php$idphp;

php php php php php php php php php$paramsphp[php'openidphp.claimedphp_idphp'php]php php=php php$claimedIdphp;

php php php php php php php php ifphp php(php$versionphp <php=php php2php.php0php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_sessionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp-php>identityphp php=php php$idphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp-php>claimedphp_idphp php=php php$claimedIdphp;
php php php php php php php php php php php php php}php elsephp ifphp php(definedphp(php'SIDphp'php)php)php php{
php php php php php php php php php php php php php php php php php$php_SESSIONphp[php"zendphp_openidphp"php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php"identityphp"php php=php>php php$idphp,
php php php php php php php php php php php php php php php php php php php php php"claimedphp_idphp"php php=php>php php$claimedIdphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Sessionphp/Namespacephp.phpphp"php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp php=php newphp Zendphp_Sessionphp_Namespacephp(php"zendphp_openidphp"php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp-php>identityphp php=php php$idphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sessionphp-php>claimedphp_idphp php=php php$claimedIdphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$handlephp)php)php php{
php php php php php php php php php php php php php$paramsphp[php'openidphp.assocphp_handlephp'php]php php=php php$handlephp;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'openidphp.returnphp_tophp'php]php php=php Zendphp_OpenIdphp:php:absoluteUrlphp(php$returnTophp)php;

php php php php php php php php ifphp php(emptyphp(php$rootphp)php)php php{
php php php php php php php php php php php php php$rootphp php=php Zendphp_OpenIdphp:php:selfUrlphp(php)php;
php php php php php php php php php php php php ifphp php(php$rootphp[strlenphp(php$rootphp)php-php1php]php php!php=php php'php/php'php)php php{
php php php php php php php php php php php php php php php php php$rootphp php=php dirnamephp(php$rootphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$versionphp php>php=php php2php.php0php)php php{
php php php php php php php php php php php php php$paramsphp[php'openidphp.realmphp'php]php php=php php$rootphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp[php'openidphp.trustphp_rootphp'php]php php=php php$rootphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_OpenIdphp_Extensionphp:php:forAllphp(php$extensionsphp,php php'prepareRequestphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setErrorphp(php"Extensionphp:php:prepareRequestphp failurephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php Zendphp_OpenIdphp:php:redirectphp(php$serverphp,php php$paramsphp,php php$responsephp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp HTTPphp clientphp objectphp tophp makephp HTTPphp requests
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp php$clientphp HTTPphp clientphp objectphp tophp bephp used
php php php php php php*php/
php php php php publicphp functionphp setHttpClientphp(php$clientphp)php php{
php php php php php php php php php$thisphp-php>php_httpClientphp php=php php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp HTTPphp clientphp objectphp thatphp willphp bephp usedphp tophp makephp HTTPphp requests
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp sessionphp objectphp tophp storephp climedphp_id
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Sessionphp_Namespacephp php$sessionphp HTTPphp clientphp objectphp tophp bephp used
php php php php php php*php/
php php php php publicphp functionphp setSessionphp(Zendphp_Sessionphp_Namespacephp php$sessionphp)php php{
php php php php php php php php php$thisphp-php>php_sessionphp php=php php$sessionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp sessionphp objectphp thatphp isphp usedphp tophp storephp climedphp_id
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Sessionphp_Namespace
php php php php php php*php/
php php php php publicphp functionphp getSessionphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_sessionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp errorphp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$messagephp errorphp message
php php php php php php*php/
php php php php protectedphp functionphp php_setErrorphp(php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorphp php=php php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp errorphp messagephp thatphp explainsphp failurephp ofphp loginphp,php checkphp orphp verify
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorphp;
php php php php php}

php}
