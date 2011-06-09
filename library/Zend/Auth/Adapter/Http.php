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
php php*php php@subpackagephp Zendphp_Authphp_Adapterphp_Http
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;


php/php*php*
php php*php HTTPphp Authenticationphp Adapter
php php*
php php*php Implementsphp aphp prettyphp goodphp chunkphp ofphp RFCphp php2php6php1php7php.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapterphp_Http
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@todophp php php php php php php Supportphp authphp-int
php php*php php@todophp php php php php php php Trackphp noncesphp,php noncephp-countphp,php opaquephp forphp replayphp protectionphp andphp stalephp support
php php*php php@todophp php php php php php php Supportphp Authenticationphp-Infophp header
php php*php/
classphp Zendphp_Authphp_Adapterphp_Httpphp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp HTTPphp Requestphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php protectedphp php$php_requestphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp thephp HTTPphp Responsephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Http
php php php php php php*php/
php php php php protectedphp php$php_responsephp;

php php php php php/php*php*
php php php php php php*php Objectphp thatphp looksphp upphp userphp credentialsphp forphp thephp Basicphp scheme
php php php php php php*
php php php php php php*php php@varphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_basicResolverphp;

php php php php php/php*php*
php php php php php php*php Objectphp thatphp looksphp upphp userphp credentialsphp forphp thephp Digestphp scheme
php php php php php php*
php php php php php php*php php@varphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_digestResolverphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp authenticationphp schemesphp supportedphp byphp thisphp class
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_supportedSchemesphp php=php arrayphp(php'basicphp'php,php php'digestphp'php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp schemesphp thisphp classphp willphp acceptphp fromphp thephp client
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_acceptSchemesphp;

php php php php php/php*php*
php php php php php php*php Spacephp-delimitedphp listphp ofphp protectedphp domainsphp forphp Digestphp Auth
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_domainsphp;

php php php php php/php*php*
php php php php php php*php Thephp protectionphp realmphp tophp use
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_realmphp;

php php php php php/php*php*
php php php php php php*php Noncephp timeoutphp period
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_nonceTimeoutphp;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp sendphp thephp opaquephp valuephp inphp thephp headerphp.php Truephp byphp default
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useOpaquephp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp supportedphp digestphp algorithmsphp.php Iphp wantphp tophp supportphp bothphp MDphp5php and
php php php php php php*php MDphp5php-sessphp,php butphp MDphp5php-sessphp wonphp'tphp makephp itphp intophp thephp firstphp versionphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_supportedAlgosphp php=php arrayphp(php'MDphp5php'php)php;

php php php php php/php*php*
php php php php php php*php Thephp actualphp algorithmphp tophp usephp.php Defaultsphp tophp MDphp5
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_algophp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp supportedphp qopphp optionsphp.php Myphp intetionphp isphp tophp supportphp bothphp php'authphp'php and
php php php php php php*php php'authphp-intphp'php,php butphp php'authphp-intphp'php wonphp'tphp makephp itphp intophp thephp firstphp versionphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_supportedQopsphp php=php arrayphp(php'authphp'php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp dophp Proxyphp Authenticationphp insteadphp ofphp originphp server
php php php php php php*php authenticationphp php(sendphp php4php0php7php'sphp insteadphp ofphp php4php0php1php'sphp)php.php Offphp byphp defaultphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_imaProxyphp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp thephp clientphp isphp IEphp andphp didnphp'tphp botherphp tophp returnphp thephp opaquephp string
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_ieNoOpaquephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$configphp Configurationphp settingsphp:
php php php php php php*php php php php php'acceptphp_schemesphp'php php=php>php php'basicphp'php|php'digestphp'php|php'basicphp digestphp'
php php php php php php*php php php php php'realmphp'php php=php>php php<stringphp>
php php php php php php*php php php php php'digestphp_domainsphp'php php=php>php php<stringphp>php Spacephp-delimitedphp listphp ofphp URIs
php php php php php php*php php php php php'noncephp_timeoutphp'php php=php>php php<intphp>
php php php php php php*php php php php php'usephp_opaquephp'php php=php>php php<boolphp>php Whetherphp tophp sendphp thephp opaquephp valuephp inphp thephp header
php php php php php php*php php php php php'alogrithmphp'php php=php>php php<stringphp>php Seephp php$php_supportedAlgosphp.php Defaultphp:php MDphp5
php php php php php php*php php php php php'proxyphp_authphp'php php=php>php php<boolphp>php Whetherphp tophp dophp authenticationphp asphp aphp Proxy
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$configphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'hashphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php_php_CLASSphp_php_php php php.php php'php requiresphp thephp php\php'hashphp\php'php extensionphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestphp php php=php nullphp;
php php php php php php php php php$thisphp-php>php_responsephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_ieNoOpaquephp php=php falsephp;


php php php php php php php php ifphp php(emptyphp(php$configphp[php'acceptphp_schemesphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Configphp keyphp php\php'acceptphp_schemesphp\php'php isphp requiredphp'php)php;
php php php php php php php php php}

php php php php php php php php php$schemesphp php=php explodephp(php'php php'php,php php$configphp[php'acceptphp_schemesphp'php]php)php;
php php php php php php php php php$thisphp-php>php_acceptSchemesphp php=php arrayphp_intersectphp(php$schemesphp,php php$thisphp-php>php_supportedSchemesphp)php;
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_acceptSchemesphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Nophp supportedphp schemesphp givenphp inphp php\php'acceptphp_schemesphp\php'php.php Validphp valuesphp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php implodephp(php'php,php php'php,php php$thisphp-php>php_supportedSchemesphp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Doublephp-quotesphp arephp usedphp tophp delimitphp thephp realmphp stringphp inphp thephp HTTPphp headerphp,
php php php php php php php php php/php/php andphp colonsphp arephp fieldphp delimitersphp inphp thephp passwordphp filephp.
php php php php php php php php ifphp php(emptyphp(php$configphp[php'realmphp'php]php)php php|php|
php php php php php php php php php php php php php!ctypephp_printphp(php$configphp[php'realmphp'php]php)php php|php|
php php php php php php php php php php php php strposphp(php$configphp[php'realmphp'php]php,php php'php:php'php)php php!php=php=php falsephp php|php|
php php php php php php php php php php php php strposphp(php$configphp[php'realmphp'php]php,php php'php"php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Configphp keyphp php\php'realmphp\php'php isphp requiredphp,php andphp mustphp containphp onlyphp printablephp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'charactersphp,php excludingphp quotationphp marksphp andphp colonsphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_realmphp php=php php$configphp[php'realmphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(inphp_arrayphp(php'digestphp'php,php php$thisphp-php>php_acceptSchemesphp)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$configphp[php'digestphp_domainsphp'php]php)php php|php|
php php php php php php php php php php php php php php php php php!ctypephp_printphp(php$configphp[php'digestphp_domainsphp'php]php)php php|php|
php php php php php php php php php php php php php php php php strposphp(php$configphp[php'digestphp_domainsphp'php]php,php php'php"php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Configphp keyphp php\php'digestphp_domainsphp\php'php isphp requiredphp,php andphp mustphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'onlyphp printablephp charactersphp,php excludingphp quotationphp marksphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_domainsphp php=php php$configphp[php'digestphp_domainsphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$configphp[php'noncephp_timeoutphp'php]php)php php|php|
php php php php php php php php php php php php php php php php php!isphp_numericphp(php$configphp[php'noncephp_timeoutphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Configphp keyphp php\php'noncephp_timeoutphp\php'php isphp requiredphp,php andphp mustphp bephp anphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'integerphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_nonceTimeoutphp php=php php(intphp)php php$configphp[php'noncephp_timeoutphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Wephp usephp thephp opaquephp valuephp unlessphp explicitlyphp toldphp notphp to
php php php php php php php php php php php php ifphp php(issetphp(php$configphp[php'usephp_opaquephp'php]php)php php&php&php falsephp php=php=php php(boolphp)php php$configphp[php'usephp_opaquephp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_useOpaquephp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_useOpaquephp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$configphp[php'algorithmphp'php]php)php php&php&php inphp_arrayphp(php$configphp[php'algorithmphp'php]php,php php$thisphp-php>php_supportedAlgosphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_algophp php=php php$configphp[php'algorithmphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_algophp php=php php'MDphp5php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Donphp'tphp bephp aphp proxyphp unlessphp explicitlyphp toldphp tophp dophp so
php php php php php php php php ifphp php(issetphp(php$configphp[php'proxyphp_authphp'php]php)php php&php&php truephp php=php=php php(boolphp)php php$configphp[php'proxyphp_authphp'php]php)php php{
php php php php php php php php php php php php php$thisphp-php>php_imaProxyphp php=php truephp;php php php/php/php Iphp'mphp aphp Proxy
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_imaProxyphp php=php falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp php_basicResolverphp property
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interfacephp php$resolver
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setBasicResolverphp(Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interfacephp php$resolverphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_basicResolverphp php=php php$resolverphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp php_basicResolverphp property
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getBasicResolverphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_basicResolverphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp php_digestResolverphp property
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interfacephp php$resolver
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setDigestResolverphp(Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interfacephp php$resolverphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_digestResolverphp php=php php$resolverphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp php_digestResolverphp property
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getDigestResolverphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_digestResolverphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp Requestphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Httpphp php$request
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(Zendphp_Controllerphp_Requestphp_Httpphp php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp Requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Http
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp Responsephp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Responsephp_Httpphp php$response
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Controllerphp_Responsephp_Httpphp php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp Responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Http
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Authenticate
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_requestphp)php php|php|
php php php php php php php php php php php php emptyphp(php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Requestphp andphp Responsephp objectsphp mustphp bephp setphp beforephp callingphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'authenticatephp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_imaProxyphp)php php{
php php php php php php php php php php php php php$getHeaderphp php=php php'Proxyphp-Authorizationphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$getHeaderphp php=php php'Authorizationphp'php;
php php php php php php php php php}

php php php php php php php php php$authHeaderphp php=php php$thisphp-php>php_requestphp-php>getHeaderphp(php$getHeaderphp)php;
php php php php php php php php ifphp php(php!php$authHeaderphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php listphp(php$clientSchemephp)php php=php explodephp(php'php php'php,php php$authHeaderphp)php;
php php php php php php php php php$clientSchemephp php=php strtolowerphp(php$clientSchemephp)php;

php php php php php php php php php/php/php Thephp serverphp canphp issuephp multiplephp challengesphp,php butphp thephp clientphp should
php php php php php php php php php/php/php answerphp withphp onlyphp thephp selectedphp authphp schemephp.
php php php php php php php php ifphp php(php!inphp_arrayphp(php$clientSchemephp,php php$thisphp-php>php_supportedSchemesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setHttpResponseCodephp(php4php0php0php)php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp_UNCATEGORIZEDphp,
php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php arrayphp(php'Clientphp requestedphp anphp incorrectphp orphp unsupportedphp authenticationphp schemephp'php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php clientphp sentphp aphp schemephp thatphp isphp notphp thephp onephp required
php php php php php php php php ifphp php(php!inphp_arrayphp(php$clientSchemephp,php php$thisphp-php>php_acceptSchemesphp)php)php php{
php php php php php php php php php php php php php/php/php challengephp againphp thephp client
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$clientSchemephp)php php{
php php php php php php php php php php php php casephp php'basicphp'php:
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_basicAuthphp(php$authHeaderphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'digestphp'php:
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_digestAuthphp(php$authHeaderphp)php;
php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Unsupportedphp authenticationphp schemephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Challengephp Client
php php php php php php*
php php php php php php*php Setsphp aphp php4php0php1php orphp php4php0php7php Unauthorizedphp responsephp codephp,php andphp createsphp the
php php php php php php*php appropriatephp Authenticatephp headerphp(sphp)php tophp promptphp forphp credentialsphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Resultphp Alwaysphp returnsphp aphp nonphp-identityphp Authphp result
php php php php php php*php/
php php php php protectedphp functionphp php_challengeClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_imaProxyphp)php php{
php php php php php php php php php php php php php$statusCodephp php=php php4php0php7php;
php php php php php php php php php php php php php$headerNamephp php=php php'Proxyphp-Authenticatephp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$statusCodephp php=php php4php0php1php;
php php php php php php php php php php php php php$headerNamephp php=php php'WWWphp-Authenticatephp'php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_responsephp-php>setHttpResponseCodephp(php$statusCodephp)php;

php php php php php php php php php/php/php Sendphp aphp challengephp inphp eachphp acceptablephp authenticationphp scheme
php php php php php php php php ifphp php(inphp_arrayphp(php'basicphp'php,php php$thisphp-php>php_acceptSchemesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setHeaderphp(php$headerNamephp,php php$thisphp-php>php_basicHeaderphp(php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(inphp_arrayphp(php'digestphp'php,php php$thisphp-php>php_acceptSchemesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setHeaderphp(php$headerNamephp,php php$thisphp-php>php_digestHeaderphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp,
php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php arrayphp(php'Invalidphp orphp absentphp credentialsphp;php challengingphp clientphp'php)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Basicphp Header
php php php php php php*
php php php php php php*php Generatesphp aphp Proxyphp-php orphp WWWphp-Authenticatephp headerphp valuephp inphp thephp Basic
php php php php php php*php authenticationphp schemephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Authenticatephp headerphp value
php php php php php php*php/
php php php php protectedphp functionphp php_basicHeaderphp(php)
php php php php php{
php php php php php php php php returnphp php'Basicphp realmphp=php"php'php php.php php$thisphp-php>php_realmphp php.php php'php"php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Digestphp Header
php php php php php php*
php php php php php php*php Generatesphp aphp Proxyphp-php orphp WWWphp-Authenticatephp headerphp valuephp inphp thephp Digest
php php php php php php*php authenticationphp schemephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Authenticatephp headerphp value
php php php php php php*php/
php php php php protectedphp functionphp php_digestHeaderphp(php)
php php php php php{
php php php php php php php php php$wwwauthphp php=php php'Digestphp realmphp=php"php'php php.php php$thisphp-php>php_realmphp php.php php'php"php,php php'
php php php php php php php php php php php php php php php php php php.php php'domainphp=php"php'php php.php php$thisphp-php>php_domainsphp php.php php'php"php,php php'
php php php php php php php php php php php php php php php php php php.php php'noncephp=php"php'php php.php php$thisphp-php>php_calcNoncephp(php)php php.php php'php"php,php php'
php php php php php php php php php php php php php php php php php php.php php(php$thisphp-php>php_useOpaquephp php?php php'opaquephp=php"php'php php.php php$thisphp-php>php_calcOpaquephp(php)php php.php php'php"php,php php'php php:php php'php'php)
php php php php php php php php php php php php php php php php php php.php php'algorithmphp=php"php'php php.php php$thisphp-php>php_algophp php.php php'php"php,php php'
php php php php php php php php php php php php php php php php php php.php php'qopphp=php"php'php php.php implodephp(php'php,php'php,php php$thisphp-php>php_supportedQopsphp)php php.php php'php"php'php;

php php php php php php php php returnphp php$wwwauthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Basicphp Authentication
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$headerphp Clientphp'sphp Authorizationphp header
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php protectedphp functionphp php_basicAuthphp(php$headerphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$headerphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Thephp valuephp ofphp thephp clientphp Authorizationphp headerphp isphp requiredphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_basicResolverphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Aphp basicResolverphp objectphp mustphp bephp setphp beforephp doingphp Basicphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'authenticationphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Decodephp thephp Authorizationphp header
php php php php php php php php php$authphp php=php substrphp(php$headerphp,php strlenphp(php'Basicphp php'php)php)php;
php php php php php php php php php$authphp php=php basephp6php4php_decodephp(php$authphp)php;
php php php php php php php php ifphp php(php!php$authphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Unablephp tophp basephp6php4php_decodephp Authorizationphp headerphp valuephp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Seephp ZFphp-php1php2php5php3php.php Validatephp thephp credentialsphp thephp samephp wayphp thephp digest
php php php php php php php php php/php/php implementationphp doesphp.php Ifphp invalidphp credentialsphp arephp detectedphp,
php php php php php php php php php/php/php rephp-challengephp thephp clientphp.
php php php php php php php php ifphp php(php!ctypephp_printphp(php$authphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}
php php php php php php php php php/php/php Fixphp forphp ZFphp-php1php5php1php5php:php Nowphp rephp-challengesphp onphp emptyphp usernamephp orphp password
php php php php php php php php php$credsphp php=php arrayphp_filterphp(explodephp(php'php:php'php,php php$authphp)php)php;
php php php php php php php php ifphp php(countphp(php$credsphp)php php!php=php php2php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php php$passwordphp php=php php$thisphp-php>php_basicResolverphp-php>resolvephp(php$credsphp[php0php]php,php php$thisphp-php>php_realmphp)php;
php php php php php php php php ifphp php(php$passwordphp php&php&php php$thisphp-php>php_secureStringComparephp(php$passwordphp,php php$credsphp[php1php]php)php)php php{
php php php php php php php php php php php php php$identityphp php=php arrayphp(php'usernamephp'php=php>php$credsphp[php0php]php,php php'realmphp'php=php>php$thisphp-php>php_realmphp)php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:SUCCESSphp,php php$identityphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Digestphp Authentication
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$headerphp Clientphp'sphp Authorizationphp header
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Resultphp Validphp authphp resultphp onlyphp onphp successfulphp auth
php php php php php php*php/
php php php php protectedphp functionphp php_digestAuthphp(php$headerphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$headerphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Thephp valuephp ofphp thephp clientphp Authorizationphp headerphp isphp requiredphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_digestResolverphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Aphp digestResolverphp objectphp mustphp bephp setphp beforephp doingphp Digestphp authenticationphp'php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php php$thisphp-php>php_parseDigestAuthphp(php$headerphp)php;
php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setHttpResponseCodephp(php4php0php0php)php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp_UNCATEGORIZEDphp,
php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php arrayphp(php'Invalidphp Authorizationphp headerphp formatphp'php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Seephp ZFphp-php1php0php5php2php.php Thisphp codephp wasphp aphp bitphp toophp unforgivingphp ofphp invalid
php php php php php php php php php/php/php usernamesphp.php Nowphp,php ifphp thephp usernamephp isphp badphp,php wephp rephp-challengephp thephp clientphp.
php php php php php php php php ifphp php(php'php:php:invalidphp:php:php'php php=php=php php$dataphp[php'usernamephp'php]php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Verifyphp thatphp thephp clientphp sentphp backphp thephp samephp nonce
php php php php php php php php ifphp php(php$thisphp-php>php_calcNoncephp(php)php php!php=php php$dataphp[php'noncephp'php]php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}
php php php php php php php php php/php/php Thephp opaquephp valuephp isphp alsophp requiredphp tophp matchphp,php butphp ofphp coursephp IEphp doesnphp't
php php php php php php php php php/php/php playphp ballphp.
php php php php php php php php ifphp php(php!php$thisphp-php>php_ieNoOpaquephp php&php&php php$thisphp-php>php_calcOpaquephp(php)php php!php=php php$dataphp[php'opaquephp'php]php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Lookphp upphp thephp userphp'sphp passwordphp hashphp.php Ifphp notphp foundphp,php denyphp accessphp.
php php php php php php php php php/php/php Thisphp makesphp nophp assumptionsphp aboutphp howphp thephp passwordphp hashphp was
php php php php php php php php php/php/php constructedphp beyondphp thatphp itphp mustphp havephp beenphp builtphp inphp suchphp aphp wayphp as
php php php php php php php php php/php/php tophp bephp recreatablephp withphp thephp currentphp settingsphp ofphp thisphp objectphp.
php php php php php php php php php$haphp1php php=php php$thisphp-php>php_digestResolverphp-php>resolvephp(php$dataphp[php'usernamephp'php]php,php php$dataphp[php'realmphp'php]php)php;
php php php php php php php php ifphp php(php$haphp1php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp MDphp5php-sessphp isphp usedphp,php aphp1php valuephp isphp madephp ofphp thephp userphp'sphp password
php php php php php php php php php/php/php hashphp withphp thephp serverphp andphp clientphp noncephp appendedphp,php separatedphp by
php php php php php php php php php/php/php colonsphp.
php php php php php php php php ifphp php(php$thisphp-php>php_algophp php=php=php php'MDphp5php-sessphp'php)php php{
php php php php php php php php php php php php php$haphp1php php=php hashphp(php'mdphp5php'php,php php$haphp1php php.php php'php:php'php php.php php$dataphp[php'noncephp'php]php php.php php'php:php'php php.php php$dataphp[php'cnoncephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Calculatephp hphp(aphp2php)php.php Thephp valuephp ofphp thisphp hashphp dependsphp onphp thephp qop
php php php php php php php php php/php/php optionphp selectedphp byphp thephp clientphp andphp thephp supportedphp hashphp functions
php php php php php php php php switchphp php(php$dataphp[php'qopphp'php]php)php php{
php php php php php php php php php php php php casephp php'authphp'php:
php php php php php php php php php php php php php php php php php$aphp2php php=php php$thisphp-php>php_requestphp-php>getMethodphp(php)php php.php php'php:php'php php.php php$dataphp[php'uriphp'php]php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'authphp-intphp'php:
php php php php php php php php php php php php php php php php php/php/php Shouldphp bephp REQUESTphp_METHODphp php.php php'php:php'php php.php uriphp php.php php'php:php'php php.php hashphp(entityphp-bodyphp)php,
php php php php php php php php php php php php php php php php php/php/php butphp thisphp isnphp'tphp supportedphp yetphp,php sophp fallphp throughphp tophp defaultphp case
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Clientphp requestedphp anphp unsupportedphp qopphp optionphp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/php Usingphp hashphp(php)php shouldphp makephp parameterizingphp thephp hashphp algorithm
php php php php php php php php php/php/php easier
php php php php php php php php php$haphp2php php=php hashphp(php'mdphp5php'php,php php$aphp2php)php;


php php php php php php php php php/php/php Calculatephp thephp serverphp'sphp versionphp ofphp thephp requestphp-digestphp.php Thisphp must
php php php php php php php php php/php/php matchphp php$dataphp[php'responsephp'php]php.php Seephp RFCphp php2php6php1php7php,php sectionphp php3php.php2php.php2php.php1
php php php php php php php php php$messagephp php=php php$dataphp[php'noncephp'php]php php.php php'php:php'php php.php php$dataphp[php'ncphp'php]php php.php php'php:php'php php.php php$dataphp[php'cnoncephp'php]php php.php php'php:php'php php.php php$dataphp[php'qopphp'php]php php.php php'php:php'php php.php php$haphp2php;
php php php php php php php php php$digestphp php php=php hashphp(php'mdphp5php'php,php php$haphp1php php.php php'php:php'php php.php php$messagephp)php;

php php php php php php php php php/php/php Ifphp ourphp digestphp matchesphp thephp clientphp'sphp letphp themphp inphp,php otherwisephp return
php php php php php php php php php/php/php aphp php4php0php1php codephp andphp exitphp tophp preventphp accessphp tophp thephp protectedphp resourcephp.
php php php php php php php php ifphp php(php$thisphp-php>php_secureStringComparephp(php$digestphp,php php$dataphp[php'responsephp'php]php)php)php php{
php php php php php php php php php php php php php$identityphp php=php arrayphp(php'usernamephp'php=php>php$dataphp[php'usernamephp'php]php,php php'realmphp'php=php>php$dataphp[php'realmphp'php]php)php;
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:SUCCESSphp,php php$identityphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_challengeClientphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp Nonce
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp noncephp value
php php php php php php*php/
php php php php protectedphp functionphp php_calcNoncephp(php)
php php php php php{
php php php php php php php php php/php/php Oncephp subtlephp consequencephp ofphp thisphp timeoutphp calculationphp isphp thatphp it
php php php php php php php php php/php/php actuallyphp dividesphp allphp ofphp timephp intophp php_nonceTimeoutphp-sizedphp sectionsphp,php such
php php php php php php php php php/php/php thatphp thephp valuephp ofphp timeoutphp isphp thephp pointphp inphp timephp ofphp thephp next
php php php php php php php php php/php/php approachingphp php"boundaryphp"php ofphp aphp sectionphp.php Thisphp allowsphp thephp serverphp to
php php php php php php php php php/php/php consistentlyphp generatephp thephp samephp timeoutphp php(andphp hencephp thephp samephp nonce
php php php php php php php php php/php/php valuephp)php acrossphp requestsphp,php butphp onlyphp asphp longphp asphp onephp ofphp those
php php php php php php php php php/php/php php"boundariesphp"php isphp notphp crossedphp betweenphp requestsphp.php Ifphp thatphp happensphp,php the
php php php php php php php php php/php/php noncephp willphp changephp onphp itsphp ownphp,php andphp effectivelyphp logphp thephp userphp outphp.php This
php php php php php php php php php/php/php wouldphp bephp surprisingphp ifphp thephp userphp justphp loggedphp inphp.
php php php php php php php php php$timeoutphp php=php ceilphp(timephp(php)php php/php php$thisphp-php>php_nonceTimeoutphp)php php*php php$thisphp-php>php_nonceTimeoutphp;

php php php php php php php php php$noncephp php=php hashphp(php'mdphp5php'php,php php$timeoutphp php.php php'php:php'php php.php php$thisphp-php>php_requestphp-php>getServerphp(php'HTTPphp_USERphp_AGENTphp'php)php php.php php'php:php'php php.php php_php_CLASSphp_php_php)php;
php php php php php php php php returnphp php$noncephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp Opaque
php php php php php php*
php php php php php php*php Thephp opaquephp stringphp canphp bephp anythingphp;php thephp clientphp mustphp returnphp itphp exactlyphp as
php php php php php php*php itphp wasphp sentphp.php Itphp mayphp bephp usefulphp tophp storephp dataphp inphp thisphp stringphp inphp some
php php php php php php*php applicationsphp.php Ideallyphp,php aphp newphp valuephp forphp thisphp wouldphp bephp generatedphp eachphp time
php php php php php php*php aphp WWWphp-Authenticatephp headerphp isphp sentphp php(inphp orderphp tophp reducephp predictabilityphp)php,
php php php php php php*php butphp wephp wouldphp havephp tophp bephp ablephp tophp createphp thephp samephp exactphp valuephp acrossphp at
php php php php php php*php leastphp twophp separatephp requestsphp fromphp thephp samephp clientphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp opaquephp value
php php php php php php*php/
php php php php protectedphp functionphp php_calcOpaquephp(php)
php php php php php{
php php php php php php php php returnphp hashphp(php'mdphp5php'php,php php'Opaquephp Dataphp:php'php php.php php_php_CLASSphp_php_php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp Digestphp Authorizationphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$headerphp Clientphp'sphp Authorizationphp:php HTTPphp header
php php php php php php*php php@returnphp arrayphp|falsephp Dataphp elementsphp fromphp headerphp,php orphp falsephp ifphp anyphp partphp of
php php php php php php*php php php php php php php php php thephp headerphp isphp invalid
php php php php php php*php/
php php php php protectedphp functionphp php_parseDigestAuthphp(php$headerphp)
php php php php php{
php php php php php php php php php$tempphp php=php nullphp;
php php php php php php php php php$dataphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Seephp ZFphp-php1php0php5php2php.php Detectphp invalidphp usernamesphp insteadphp ofphp justphp returningphp a
php php php php php php php php php/php/php php4php0php0php codephp.
php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/usernamephp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)
php php php php php php php php php php php php php php php php php php php|php|php php!ctypephp_printphp(php$tempphp[php1php]php)
php php php php php php php php php php php php php php php php php php php|php|php strposphp(php$tempphp[php1php]php,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$dataphp[php'usernamephp'php]php php=php php'php:php:invalidphp:php:php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'usernamephp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/realmphp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!ctypephp_printphp(php$tempphp[php1php]php)php php|php|php strposphp(php$tempphp[php1php]php,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'realmphp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/noncephp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!ctypephp_xdigitphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'noncephp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/uriphp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php/php/php Sectionphp php3php.php2php.php2php.php5php inphp RFCphp php2php6php1php7php saysphp thephp authenticatingphp serverphp must
php php php php php php php php php/php/php verifyphp thatphp thephp URIphp fieldphp inphp thephp Authorizationphp headerphp isphp forphp the
php php php php php php php php php/php/php samephp resourcephp requestedphp inphp thephp Requestphp Linephp.
php php php php php php php php php$rUriphp php=php php@parsephp_urlphp(php$thisphp-php>php_requestphp-php>getRequestUriphp(php)php)php;
php php php php php php php php php$cUriphp php=php php@parsephp_urlphp(php$tempphp[php1php]php)php;
php php php php php php php php ifphp php(falsephp php=php=php=php php$rUriphp php|php|php falsephp php=php=php=php php$cUriphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Makephp surephp thephp pathphp portionphp ofphp bothphp URIsphp isphp thephp same
php php php php php php php php php php php php ifphp php(php$rUriphp[php'pathphp'php]php php!php=php php$cUriphp[php'pathphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Sectionphp php3php.php2php.php2php.php5php seemsphp tophp suggestphp thatphp thephp valuephp ofphp thephp URI
php php php php php php php php php php php php php/php/php Authorizationphp fieldphp shouldphp bephp madephp intophp anphp absolutephp URIphp ifphp the
php php php php php php php php php php php php php/php/php Requestphp URIphp isphp absolutephp,php butphp itphp'sphp vaguephp,php andphp thatphp'sphp aphp bunchphp of
php php php php php php php php php php php php php/php/php codephp Iphp donphp'tphp wantphp tophp writephp rightphp nowphp.
php php php php php php php php php php php php php$dataphp[php'uriphp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/responsephp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php3php2php php!php=php strlenphp(php$tempphp[php1php]php)php php|php|php php!ctypephp_xdigitphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'responsephp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php/php/php Thephp specphp saysphp thisphp shouldphp defaultphp tophp MDphp5php ifphp omittedphp.php OKphp,php sophp howphp does
php php php php php php php php php/php/php thatphp squarephp withphp thephp algophp wephp sendphp outphp inphp thephp WWWphp-Authenticatephp headerphp,
php php php php php php php php php/php/php ifphp itphp canphp easilyphp bephp overriddenphp byphp thephp clientphp?
php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/algorithmphp=php"php?php(php'php php.php php$thisphp-php>php_algophp php.php php'php)php"php?php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php$retphp php&php&php php!emptyphp(php$tempphp[php1php]php)
php php php php php php php php php php php php php php php php php php&php&php inphp_arrayphp(php$tempphp[php1php]php,php php$thisphp-php>php_supportedAlgosphp)php)php php{
php php php php php php php php php php php php php$dataphp[php'algorithmphp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'algorithmphp'php]php php=php php'MDphp5php'php;php php php/php/php php=php php$thisphp-php>php_algophp;php php?
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php/php/php Notphp optionalphp inphp thisphp implementation
php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/cnoncephp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!ctypephp_printphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'cnoncephp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php/php/php Ifphp thephp serverphp sentphp anphp opaquephp valuephp,php thephp clientphp mustphp sendphp itphp back
php php php php php php php php ifphp php(php$thisphp-php>php_useOpaquephp)php php{
php php php php php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/opaquephp=php"php(php[php^php"php]php+php)php"php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{

php php php php php php php php php php php php php php php php php/php/php Bigphp surprisephp:php IEphp isnphp'tphp RFCphp php2php6php1php7php-compliantphp.
php php php php php php php php php php php php php php php php ifphp php(falsephp php!php=php=php strposphp(php$thisphp-php>php_requestphp-php>getHeaderphp(php'Userphp-Agentphp'php)php,php php'MSIEphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp[php1php]php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ieNoOpaquephp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Thisphp implementationphp onlyphp sendsphp MDphp5php hexphp stringsphp inphp thephp opaquephp value
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ieNoOpaquephp php&php&
php php php php php php php php php php php php php php php php php(php3php2php php!php=php strlenphp(php$tempphp[php1php]php)php php|php|php php!ctypephp_xdigitphp(php$tempphp[php1php]php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$dataphp[php'opaquephp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$tempphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php Notphp optionalphp inphp thisphp implementationphp,php butphp mustphp bephp onephp ofphp thephp supported
php php php php php php php php php/php/php qopphp types
php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/qopphp=php"php?php(php'php php.php implodephp(php'php|php'php,php php$thisphp-php>php_supportedQopsphp)php php.php php'php)php"php?php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(php$tempphp[php1php]php,php php$thisphp-php>php_supportedQopsphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'qopphp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php php/php/php Notphp optionalphp inphp thisphp implementationphp.php Thephp specphp saysphp thisphp value
php php php php php php php php php/php/php shouldnphp'tphp bephp aphp quotedphp stringphp,php butphp apparentlyphp somephp implementations
php php php php php php php php php/php/php quotephp itphp anywayphp.php Seephp ZFphp-php1php5php4php4php.
php php php php php php php php php$retphp php=php pregphp_matchphp(php'php/ncphp=php"php?php(php[php0php-php9Aphp-Faphp-fphp]php{php8php}php)php"php?php/php'php,php php$headerphp,php php$tempphp)php;
php php php php php php php php ifphp php(php!php$retphp php|php|php emptyphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php8php php!php=php strlenphp(php$tempphp[php1php]php)php php|php|php php!ctypephp_xdigitphp(php$tempphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'ncphp'php]php php=php php$tempphp[php1php]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php nullphp;

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Securelyphp comparephp twophp stringsphp forphp equalityphp whilephp avoidedphp Cphp levelphp memcmpphp(php)
php php php php php php*php optimisationsphp capablephp ofphp leakingphp timingphp informationphp usefulphp tophp anphp attacker
php php php php php php*php attemptingphp tophp iterativelyphp guessphp thephp unknownphp stringphp php(ephp.gphp.php passwordphp)php being
php php php php php php*php comparedphp againstphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$a
php php php php php php*php php@paramphp stringphp php$b
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_secureStringComparephp(php$aphp,php php$bphp)
php php php php php{
php php php php php php php php ifphp php(strlenphp(php$aphp)php php!php=php=php strlenphp(php$bphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php0php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$aphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$resultphp php|php=php ordphp(php$aphp[php$iphp]php)php php^php ordphp(php$bphp[php$iphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp php=php=php php0php;
php php php php php}
php}
