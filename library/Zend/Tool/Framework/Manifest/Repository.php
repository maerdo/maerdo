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
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Repository
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp,php IteratorAggregatephp,php Countable
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Providerphp_Registryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_manifestsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_metadatasphp php=php arrayphp(php)php;

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
php php php php php php*php addManifestphp(php)php php-php Addphp aphp manifestphp forphp laterphp processing
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp php$manifest
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Repository
php php php php php php*php/
php php php php publicphp functionphp addManifestphp(Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp php$manifestphp)
php php php php php{
php php php php php php php php php/php/php wephp needphp tophp getphp anphp indexphp numberphp sophp thatphp manifestsphp with
php php php php php php php php php/php/php higherphp indexesphp havephp priorityphp overphp others
php php php php php php php php php$indexphp php=php countphp(php$thisphp-php>php_manifestsphp)php;

php php php php php php php php ifphp php(php$manifestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp)php php{
php php php php php php php php php php php php php$manifestphp-php>setRegistryphp(php$thisphp-php>php_registryphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp thephp manifestphp suppliesphp aphp getIndexphp(php)php methodphp,php usephp it
php php php php php php php php ifphp php(php$manifestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Indexablephp)php php{
php php php php php php php php php php php php php$indexphp php=php php$manifestphp-php>getIndexphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp thephp requiredphp objectsphp fromphp thephp frameworkphp registry
php php php php php php php php php$actionRepositoryphp php php php=php php$thisphp-php>php_registryphp-php>getActionRepositoryphp(php)php;
php php php php php php php php php$providerRepositoryphp php=php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php php/php/php loadphp providersphp ifphp interfacephp supportsphp thatphp method
php php php php php php php php ifphp php(php$manifestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Manifestphp_ProviderManifestablephp)php php{
php php php php php php php php php php php php php$providersphp php=php php$manifestphp-php>getProvidersphp(php)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$providersphp)php)php php{
php php php php php php php php php php php php php php php php php$providersphp php=php arrayphp(php$providersphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$providersphp asphp php$providerphp)php php{

php php php php php php php php php php php php php php php php php/php/php ifphp providerphp isphp aphp stringphp,php tryphp andphp loadphp itphp asphp anphp object
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$providerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$providerphp php=php newphp php$providerphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$providerphp instanceofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Aphp providerphp providedphp byphp thephp php'php php.php getphp_classphp(php$manifestphp)
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php doesphp notphp implementphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp'
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!php$providerRepositoryphp-php>hasProviderphp(php$providerphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$providerRepositoryphp-php>addProviderphp(php$providerphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php php/php/php loadphp actionsphp ifphp interfacephp supportsphp thatphp method
php php php php php php php php ifphp php(php$manifestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Manifestphp_ActionManifestablephp)php php{
php php php php php php php php php php php php php$actionsphp php=php php$manifestphp-php>getActionsphp(php)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$actionsphp)php)php php{
php php php php php php php php php php php php php php php php php$actionsphp php=php arrayphp(php$actionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$actionsphp asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$actionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$actionphp php=php newphp Zendphp_Toolphp_Frameworkphp_Actionphp_Basephp(php$actionphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$actionRepositoryphp-php>addActionphp(php$actionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php shouldphp wephp detectphp collisionsphp herephp?php doesphp itphp evenphp matterphp?
php php php php php php php php php$thisphp-php>php_manifestsphp[php$indexphp]php php=php php$manifestphp;
php php php php php php php php ksortphp(php$thisphp-php>php_manifestsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getManifestsphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp[php]
php php php php php php*php/
php php php php publicphp functionphp getManifestsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_manifestsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php addMetadataphp(php)php php-php addphp aphp metadataphp peicephp byphp peice
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Metadataphp php$metadata
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Repository
php php php php php php*php/
php php php php publicphp functionphp addMetadataphp(Zendphp_Toolphp_Frameworkphp_Metadataphp_Interfacephp php$metadataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_metadatasphp[php]php php=php php$metadataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php processphp(php)php php-php Processphp isphp expectedphp tophp bephp calledphp atphp thephp endphp ofphp clientphp constructionphp timephp.
php php php php php php*php Byphp thisphp timephp,php thephp loaderphp hasphp runphp andphp loadedphp anyphp foundphp manifestsphp intophp thephp repository
php php php php php php*php forphp loading
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Repository
php php php php php php*php/
php php php php publicphp functionphp processphp(php)
php php php php php{

php php php php php php php php foreachphp php(php$thisphp-php>php_manifestsphp asphp php$manifestphp)php php{
php php php php php php php php php php php php ifphp php(php$manifestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Manifestphp_MetadataManifestablephp)php php{
php php php php php php php php php php php php php php php php php$metadatasphp php=php php$manifestphp-php>getMetadataphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$metadatasphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$metadatasphp php=php arrayphp(php$metadatasphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php foreachphp php(php$metadatasphp asphp php$metadataphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$metadataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php'Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamicphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Metadataphp/Dynamicphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$metadataphp php=php newphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamicphp(php$metadataphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$metadataphp instanceofphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Aphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Interfacephp objectphp wasphp notphp foundphp inphp manifestphp php'php php.php getphp_classphp(php$manifestphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addMetadataphp(php$metadataphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getMetadatasphp(php)php php-php Thisphp isphp thephp mainphp searchphp functionphp forphp thephp repositoryphp.
php php php php php php*
php php php php php php*php examplephp:php Thisphp willphp retrievephp allphp metadataphp thatphp matchesphp thephp followingphp criteria
php php php php php php*php php php php php php php$manifestRepophp-php>getMetadatasphp(arrayphp(
php php php php php php*php php php php php php php php php php php'providerNamephp'php php=php>php php'Versionphp'php,
php php php php php php*php php php php php php php php php php php'actionNamephp'php php=php>php php'showphp'
php php php php php php*php php php php php php php php php php php)php)php;
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$searchProperties
php php php php php php*php php@paramphp boolphp php$includeNonExistentProperties
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Metadataphp[php]
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(Arrayphp php$searchPropertiesphp php=php arrayphp(php)php,php php$includeNonExistentPropertiesphp php=php truephp)
php php php php php{

php php php php php php php php php$returnMetadatasphp php=php arrayphp(php)php;

php php php php php php php php php/php/php loopphp throughphp thephp metadatasphp sophp thatphp wephp canphp searchphp eachphp individualphp one
php php php php php php php php foreachphp php(php$thisphp-php>php_metadatasphp asphp php$metadataphp)php php{

php php php php php php php php php php php php php/php/php eachphp valuephp willphp bephp retrievedphp fromphp thephp metadataphp,php eachphp metadataphp should
php php php php php php php php php php php php php/php/php implementphp aphp getterphp methodphp tophp retrievephp thephp value
php php php php php php php php php php php php foreachphp php(php$searchPropertiesphp asphp php$searchPropertyNamephp php=php>php php$searchPropertyValuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$metadataphp,php php'getphp'php php.php php$searchPropertyNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$metadataphp-php>php{php'getphp'php php.php php$searchPropertyNamephp}php(php)php php!php=php php$searchPropertyValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ifphp thephp metadataphp supportsphp aphp specificphp propertyphp butphp thephp valuephp doesphp not
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php matchphp,php movephp on
php php php php php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elseifphp php(php!php$includeNonExistentPropertiesphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php ifphp thephp optionphp php$includeNonExitentPropertiesphp isphp falsephp,php thenphp movephp onphp as
php php php php php php php php php php php php php php php php php php php php php/php/php wephp dontphp wantphp tophp includephp thisphp metadataphp ifphp nonphp existent
php php php php php php php php php php php php php php php php php php php php php/php/php searchphp propertiesphp arephp notphp insidephp thephp targetphp php(currentphp)php metadata
php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php allphp searchingphp hasphp beenphp accountedphp forphp,php ifphp wephp reachphp thisphp pointphp,php thenphp thephp metadata
php php php php php php php php php php php php php/php/php isphp goodphp andphp wephp canphp returnphp it
php php php php php php php php php php php php php$returnMetadatasphp[php]php php=php php$metadataphp;

php php php php php php php php php}

php php php php php php php php returnphp php$returnMetadatasphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getMetadataphp(php)php php-php Thisphp willphp proxyphp tophp getMetadatasphp(php)php,php butphp willphp onlyphp returnphp aphp singlephp metadataphp.php php Thisphp method
php php php php php php*php shouldphp bephp usedphp inphp situationsphp wherephp thephp searchphp criteriaphp isphp knownphp tophp onlyphp findphp aphp singlephp metadataphp object
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$searchProperties
php php php php php php*php php@paramphp boolphp php$includeNonExistentProperties
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Metadata
php php php php php php*php/
php php php php publicphp functionphp getMetadataphp(Arrayphp php$searchPropertiesphp php=php arrayphp(php)php,php php$includeNonExistentPropertiesphp php=php truephp)
php php php php php{
php php php php php php php php php$metadatasphp php=php php$thisphp-php>getMetadatasphp(php$searchPropertiesphp,php php$includeNonExistentPropertiesphp)php;
php php php php php php php php returnphp arrayphp_shiftphp(php$metadatasphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_toStringphp(php)php php-php castphp tophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php$metadatasByTypephp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_metadatasphp asphp php$metadataphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$metadataphp-php>getTypephp(php)php,php php$metadatasByTypephp)php)php php{
php php php php php php php php php php php php php php php php php$metadatasByTypephp[php$metadataphp-php>getTypephp(php)php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$metadatasByTypephp[php$metadataphp-php>getTypephp(php)php]php[php]php php=php php$metadataphp;
php php php php php php php php php}

php php php php php php php php php$stringphp php=php php'php'php;
php php php php php php php php foreachphp php(php$metadatasByTypephp asphp php$typephp php=php>php php$metadatasphp)php php{
php php php php php php php php php php php php php$stringphp php.php=php php$typephp php.php PHPphp_EOLphp;
php php php php php php php php php php php php foreachphp php(php$metadatasphp asphp php$metadataphp)php php{
php php php php php php php php php php php php php php php php php$metadataStringphp php=php php'php php php php php'php php.php php$metadataphp-php>php_php_toStringphp(php)php php.php PHPphp_EOLphp;
php php php php php php php php php php php php php php php php php/php/php$metadataStringphp php=php strphp_replacephp(PHPphp_EOLphp,php PHPphp_EOLphp php.php php'php php php php php'php,php php$metadataStringphp)php;
php php php php php php php php php php php php php php php php php$stringphp php.php=php php$metadataStringphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php countphp(php)php php-php requiredphp byphp thephp Countablephp Interface
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_metadatasphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php requiredphp byphp thephp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp ArrayIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>php_metadatasphp)php;
php php php php php}

php}
