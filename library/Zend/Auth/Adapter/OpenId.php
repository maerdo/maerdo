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
php php*php php@versionphp php php php php$Idphp:php OpenIdphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Consumer
php php*php/
requirephp_oncephp php'Zendphp/OpenIdphp/Consumerphp.phpphp'php;


php/php*php*
php php*php Aphp Zendphp_Authphp Authenticationphp Adapterphp allowingphp thephp usephp ofphp OpenIDphp protocolphp asphp an
php php*php authenticationphp mechanism
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_OpenIdphp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp identityphp valuephp beingphp authenticated
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_idphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp anphp implementationphp ofphp aphp storagephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_OpenIdphp_Consumerphp_Storage
php php php php php php*php/
php php php php privatephp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_returnTophp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_rootphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_extensionsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp responsephp objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php privatephp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Enablesphp orphp disablesphp interactionphp withphp userphp duringphp authenticationphp on
php php php php php php*php OpenIDphp providerphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp php$php_checkphp_immediatephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php HTTPphp clientphp tophp makephp HTTPphp requests
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Clientphp php$php_httpClient
php php php php php php*php/
php php php php privatephp php$php_httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp thephp identityphp value
php php php php php php*php php@paramphp Zendphp_OpenIdphp_Consumerphp_Storagephp php$storagephp anphp optionalphp implementation
php php php php php php*php php php php php php php php ofphp aphp storagephp object
php php php php php php*php php@paramphp stringphp php$returnTophp HTTPphp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*php php@paramphp stringphp php$rootphp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*php php@paramphp mixedphp php$extensionsphp extensionphp objectphp orphp arrayphp ofphp extensionsphp objects
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp anphp optionalphp response
php php php php php php*php php php php php php php php objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$idphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Consumerphp_Storagephp php$storagephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$returnTophp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rootphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$extensionsphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)php php{
php php php php php php php php php$thisphp-php>php_idphp php php php php php php php php php=php php$idphp;
php php php php php php php php php$thisphp-php>php_storagephp php php php php=php php$storagephp;
php php php php php php php php php$thisphp-php>php_returnTophp php php php=php php$returnTophp;
php php php php php php php php php$thisphp-php>php_rootphp php php php php php php php=php php$rootphp;
php php php php php php php php php$thisphp-php>php_extensionsphp php=php php$extensionsphp;
php php php php php php php php php$thisphp-php>php_responsephp php php php=php php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp tophp bephp usedphp asphp thephp identity
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp thephp identityphp value
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setIdentityphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_idphp php=php php$idphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp storagephp implementationphp whichphp willphp bephp usephp byphp OpenId
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_OpenIdphp_Consumerphp_Storagephp php$storage
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setStoragephp(Zendphp_OpenIdphp_Consumerphp_Storagephp php$storagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp HTTPphp URLphp tophp redirectphp responsephp fromphp serverphp to
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$returnTo
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setReturnTophp(php$returnTophp)
php php php php php{
php php php php php php php php php$thisphp-php>php_returnTophp php=php php$returnTophp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp HTTPphp URLphp tophp identifyphp consumerphp onphp server
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$root
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRootphp(php$rootphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rootphp php=php php$rootphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp OpenIDphp extensionphp(sphp)
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$extensions
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setExtensionsphp(php$extensionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_extensionsphp php=php php$extensionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp anphp optionalphp responsephp objectphp tophp performphp HTTPphp orphp HTMLphp formphp redirection
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$root
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablesphp orphp disablesphp interactionphp withphp userphp duringphp authenticationphp on
php php php php php php*php OpenIDphp providerphp.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$checkphp_immediate
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_OpenIdphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCheckImmediatephp(php$checkphp_immediatephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkphp_immediatephp php=php php$checkphp_immediatephp;
php php php php php php php php returnphp php$thisphp;
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
php php php php php php*php Authenticatesphp thephp givenphp OpenIdphp identityphp.
php php php php php php*php Definedphp byphp Zendphp_Authphp_Adapterphp_Interfacephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exceptionphp Ifphp answeringphp thephp authenticationphp queryphp isphp impossible
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)php php{
php php php php php php php php php$idphp php=php php$thisphp-php>php_idphp;
php php php php php php php php ifphp php(php!emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php php$consumerphp php=php newphp Zendphp_OpenIdphp_Consumerphp(php$thisphp-php>php_storagephp)php;
php php php php php php php php php php php php php$consumerphp-php>setHttpClientphp(php$thisphp-php>php_httpClientphp)php;
php php php php php php php php php php php php php/php*php loginphp(php)php isphp neverphp returnsphp onphp successphp php*php/
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_checkphp_immediatephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$consumerphp-php>loginphp(php$idphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_returnTophp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_rootphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_extensionsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php"Authenticationphp failedphp"php,php php$consumerphp-php>getErrorphp(php)php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php!php$consumerphp-php>checkphp(php$idphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_returnTophp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_rootphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_extensionsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php"Authenticationphp failedphp"php,php php$consumerphp-php>getErrorphp(php)php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp php=php php(issetphp(php$php_SERVERphp[php'REQUESTphp_METHODphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php$php_SERVERphp[php'REQUESTphp_METHODphp'php]php=php=php'POSTphp'php)php php?php php$php_POSTphp:php php$php_GETphp;
php php php php php php php php php php php php php$consumerphp php=php newphp Zendphp_OpenIdphp_Consumerphp(php$thisphp-php>php_storagephp)php;
php php php php php php php php php php php php php$consumerphp-php>setHttpClientphp(php$thisphp-php>php_httpClientphp)php;
php php php php php php php php php php php php ifphp php(php$consumerphp-php>verifyphp(
php php php php php php php php php php php php php php php php php php php php php$paramsphp,
php php php php php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_extensionsphp)php)php php{
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:SUCCESSphp,
php php php php php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(php"Authenticationphp successfulphp"php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php php php php php php php php php$idphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(php"Authenticationphp failedphp"php,php php$consumerphp-php>getErrorphp(php)php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php}
