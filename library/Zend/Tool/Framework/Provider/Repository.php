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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Repositoryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Providerphp_Signature
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Signaturephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Providerphp_Repository
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp,php IteratorAggregatephp,php Countable
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registry
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_processOnAddphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp[php]
php php php php php php*php/
php php php php protectedphp php$php_unprocessedProvidersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signaturephp[php]
php php php php php php*php/
php php php php protectedphp php$php_providerSignaturesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Inteface
php php php php php php*php/
php php php php protectedphp php$php_providersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp ProcessOnAddphp flag
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$processOnAdd
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp setProcessOnAddphp(php$processOnAddphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_processOnAddphp php=php php(boolphp)php php$processOnAddphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp providerphp tophp thephp repositoryphp forphp processing
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$provider
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Providerphp_Repository
php php php php php php*php/
php php php php publicphp functionphp addProviderphp(Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$providerphp,php php$overwriteExistingProviderphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$providerphp instanceofphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp)php php{
php php php php php php php php php php php php php$providerphp-php>setRegistryphp(php$thisphp-php>php_registryphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$providerphp,php php'getNamephp'php)php)php php{
php php php php php php php php php php php php php$providerNamephp php=php php$providerphp-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$providerNamephp php=php php$thisphp-php>php_parseNamephp(php$providerphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp aphp providerphp byphp thephp givenphp namephp alreadyphp existphp,php andphp itsphp notphp setphp asphp overwritablephp,php throwphp exception
php php php php php php php php ifphp php(php!php$overwriteExistingProviderphp php&php&
php php php php php php php php php php php php php(arrayphp_keyphp_existsphp(php$providerNamephp,php php$thisphp-php>php_unprocessedProvidersphp)
php php php php php php php php php php php php php php php php php|php|php arrayphp_keyphp_existsphp(php$providerNamephp,php php$thisphp-php>php_providersphp)php)php)
php php php php php php php php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Providerphp_Exceptionphp(php'Aphp providerphp byphp thephp namephp php'php php.php php$providerName
php php php php php php php php php php php php php php php php php.php php'php isphp alreadyphp registeredphp andphp php$overrideExistingProviderphp isphp setphp tophp falsephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_unprocessedProvidersphp[php$providerNamephp]php php=php php$providerphp;

php php php php php php php php php/php/php ifphp processphp hasphp alreadyphp beenphp calledphp,php processphp immediatelyphp.
php php php php php php php php ifphp php(php$thisphp-php>php_processOnAddphp)php php{
php php php php php php php php php php php php php$thisphp-php>processphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp hasProviderphp(php$providerOrClassNamephp,php php$processedOnlyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$providerOrClassNamephp instanceofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp)php php{
php php php php php php php php php php php php php$targetProviderClassNamephp php=php getphp_classphp(php$providerOrClassNamephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$targetProviderClassNamephp php=php php(stringphp)php php$providerOrClassNamephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$processedOnlyphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_unprocessedProvidersphp asphp php$unprocessedProviderphp)php php{
php php php php php php php php php php php php php php php php ifphp php(getphp_classphp(php$unprocessedProviderphp)php php=php=php php$targetProviderClassNamephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_providersphp asphp php$processedProviderphp)php php{
php php php php php php php php php php php php ifphp php(getphp_classphp(php$processedProviderphp)php php=php=php php$targetProviderClassNamephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp allphp ofphp thephp unprocessedphp providers
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp processphp(php)
php php php php php{

php php php php php php php php php/php/php processphp allphp providersphp inphp thephp unprocessedProvidersphp array
php php php php php php php php php/php/foreachphp php(php$thisphp-php>php_unprocessedProvidersphp asphp php$providerNamephp php=php>php php$providerphp)php php{
php php php php php php php php resetphp(php$thisphp-php>php_unprocessedProvidersphp)php;
php php php php php php php php whilephp php(php$thisphp-php>php_unprocessedProvidersphp)php php{

php php php php php php php php php php php php php$providerNamephp php=php keyphp(php$thisphp-php>php_unprocessedProvidersphp)php;
php php php php php php php php php php php php php$providerphp php=php arrayphp_shiftphp(php$thisphp-php>php_unprocessedProvidersphp)php;

php php php php php php php php php php php php php/php/php createphp aphp signaturephp forphp thephp providedphp provider
php php php php php php php php php php php php php$providerSignaturephp php=php newphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signaturephp(php$providerphp)php;

php php php php php php php php php php php php ifphp php(php$providerSignaturephp instanceofphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp)php php{
php php php php php php php php php php php php php php php php php$providerSignaturephp-php>setRegistryphp(php$thisphp-php>php_registryphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$providerSignaturephp-php>processphp(php)php;

php php php php php php php php php php php php php/php/php ensurephp thephp namephp isphp lowercasedphp forphp easierphp searching
php php php php php php php php php php php php php$providerNamephp php=php strtolowerphp(php$providerNamephp)php;

php php php php php php php php php php php php php/php/php addphp tophp thephp appropraitephp place
php php php php php php php php php php php php php$thisphp-php>php_providerSignaturesphp[php$providerNamephp]php php=php php$providerSignaturephp;
php php php php php php php php php php php php php$thisphp-php>php_providersphp[php$providerNamephp]php php php php php php php php php php php=php php$providerSignaturephp-php>getProviderphp(php)php;

php php php php php php php php php php php php ifphp php(php$providerphp instanceofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Initializablephp)php php{
php php php php php php php php php php php php php php php php php$providerphp-php>initializephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php getProvidersphp(php)php Getphp allphp thephp providersphp inphp thephp repository
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getProvidersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProviderSignaturesphp(php)php Getphp allphp thephp providerphp signatures
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getProviderSignaturesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providerSignaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProviderphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getProviderphp(php$providerNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providersphp[strtolowerphp(php$providerNamephp)php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProviderSignaturephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signature
php php php php php php*php/
php php php php publicphp functionphp getProviderSignaturephp(php$providerNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providerSignaturesphp[strtolowerphp(php$providerNamephp)php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php countphp(php)php php-php returnphp thephp numberphp ofphp providers
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_providersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php Requiredphp byphp thephp IteratorAggregatephp Interface
php php php php php php*
php php php php php php*php php@returnphp ArrayIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>getProvidersphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_parseNamephp php-php internalphp methodphp tophp determinephp thephp namephp ofphp anphp actionphp whenphp onephp isphp notphp explicityphp providedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$action
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_parseNamephp(Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$providerphp)
php php php php php{
php php php php php php php php php$classNamephp php=php getphp_classphp(php$providerphp)php;
php php php php php php php php php$providerNamephp php=php php$classNamephp;
php php php php php php php php ifphp php(strposphp(php$providerNamephp,php php'php_php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$providerNamephp php=php substrphp(php$providerNamephp,php strrposphp(php$providerNamephp,php php'php_php'php)php+php1php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(substrphp(php$providerNamephp,php php-php8php)php php=php=php php'Providerphp'php)php php{
php php php php php php php php php php php php php$providerNamephp php=php substrphp(php$providerNamephp,php php0php,php strlenphp(php$providerNamephp)php-php8php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$providerNamephp;
php php php php php}

php}
