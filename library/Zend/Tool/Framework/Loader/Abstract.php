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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Loaderphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Interfacephp,php Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Repositoryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_retrievedFilesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_loadedClassesphp php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php_getFiles
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp Ofphp Files
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_getFilesphp(php)php;

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)php php-php requiredphp byphp thephp enabledphp interfacephp tophp getphp anphp instancephp of
php php php php php php*php thephp registry
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php loadphp(php)php php-php calledphp byphp thephp clientphp initializephp routinephp tophp loadphp files
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp loadphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_retrievedFilesphp php=php php$thisphp-php>getRetrievedFilesphp(php)php;
php php php php php php php php php$thisphp-php>php_loadedClassesphp php php=php arrayphp(php)php;

php php php php php php php php php$manifestRepositoryphp php=php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php;
php php php php php php php php php$providerRepositoryphp php=php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php php$loadedClassesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php loopphp throughphp filesphp andphp findphp thephp classesphp declaredphp byphp loadingphp thephp file
php php php php php php php php foreachphp php(php$thisphp-php>php_retrievedFilesphp asphp php$filephp)php php{
php php php php php php php php php php php php ifphp(isphp_dirphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$classesLoadedBeforephp php=php getphp_declaredphp_classesphp(php)php;
php php php php php php php php php php php php php$oldLevelphp php=php errorphp_reportingphp(Ephp_ALLphp php|php php~Ephp_STRICTphp)php;php php/php/php removephp strictphp sophp thatphp otherphp packagesphp wontphp throwphp warnings
php php php php php php php php php php php php php/php/php shouldphp wephp lintphp thephp filesphp herephp?php iphp thinkphp so
php php php php php php php php php php php php includephp_oncephp php$filephp;
php php php php php php php php php php php php errorphp_reportingphp(php$oldLevelphp)php;php php/php/php restorephp oldphp errorphp level
php php php php php php php php php php php php php$classesLoadedAfterphp php=php getphp_declaredphp_classesphp(php)php;
php php php php php php php php php php php php php$loadedClassesphp php=php arrayphp_mergephp(php$loadedClassesphp,php arrayphp_diffphp(php$classesLoadedAfterphp,php php$classesLoadedBeforephp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php loopphp throughphp thephp loadedphp classesphp andphp ensurephp that
php php php php php php php php foreachphp php(php$loadedClassesphp asphp php$loadedClassphp)php php{

php php php php php php php php php php php php php/php/php reflectphp classphp tophp seephp ifphp itsphp somethingphp wephp wantphp tophp load
php php php php php php php php php php php php php$reflectionClassphp php=php newphp ReflectionClassphp(php$loadedClassphp)php;
php php php php php php php php php php php php ifphp php(php$reflectionClassphp-php>implementsInterfacephp(php'Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp'php)
php php php php php php php php php php php php php php php php php&php&php php!php$reflectionClassphp-php>isAbstractphp(php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$manifestRepositoryphp-php>addManifestphp(php$reflectionClassphp-php>newInstancephp(php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadedClassesphp[php]php php=php php$loadedClassphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$reflectionClassphp-php>implementsInterfacephp(php'Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp'php)
php php php php php php php php php php php php php php php php php&php&php php!php$reflectionClassphp-php>isAbstractphp(php)
php php php php php php php php php php php php php php php php php&php&php php!php$providerRepositoryphp-php>hasProviderphp(php$reflectionClassphp-php>getNamephp(php)php,php falsephp)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$providerRepositoryphp-php>addProviderphp(php$reflectionClassphp-php>newInstancephp(php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadedClassesphp[php]php php=php php$loadedClassphp;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_loadedClassesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getRetrievedFilesphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Filesphp Retrieved
php php php php php php*php/
php php php php publicphp functionphp getRetrievedFilesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_retrievedFilesphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_retrievedFilesphp php=php php$thisphp-php>php_getFilesphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_retrievedFilesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getLoadedClassesphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Loadedphp Classes
php php php php php php*php/
php php php php publicphp functionphp getLoadedClassesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_loadedClassesphp;
php php php php php}


php}
