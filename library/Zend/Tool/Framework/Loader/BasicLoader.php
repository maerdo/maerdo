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
php php*php php@versionphp php php php php$Idphp:php BasicLoaderphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Loaderphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Loaderphp_BasicLoader
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Interfacephp,php Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Repositoryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_classesToLoadphp php=php arrayphp(php)php;

php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php php$setMethodphp php=php php'setphp'php php.php php$optionNamephp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$setMethodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$setMethodphp}php(php$optionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

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
php php php php php php*php php@paramphp php arrayphp php$classesToLoad
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setClassesToLoadphp(arrayphp php$classesToLoadphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_classesToLoadphp php=php php$classesToLoadphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp loadphp(php)
php php php php php{
php php php php php php php php php$manifestRegistryphp php=php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php;
php php php php php php php php php$providerRegistryphp php=php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php php$loadedClassesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php loopphp throughphp thephp loadedphp classesphp andphp ensurephp that
php php php php php php php php foreachphp php(php$thisphp-php>php_classesToLoadphp asphp php$classphp)php php{

php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php reflectphp classphp tophp seephp ifphp itsphp somethingphp wephp wantphp tophp load
php php php php php php php php php php php php php$reflectionClassphp php=php newphp ReflectionClassphp(php$classphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isManifestImplementationphp(php$reflectionClassphp)php)php php{
php php php php php php php php php php php php php php php php php$manifestRegistryphp-php>addManifestphp(php$reflectionClassphp-php>newInstancephp(php)php)php;
php php php php php php php php php php php php php php php php php$loadedClassesphp[php]php php=php php$classphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isProviderImplementationphp(php$reflectionClassphp)php)php php{
php php php php php php php php php php php php php php php php php$providerRegistryphp-php>addProviderphp(php$reflectionClassphp-php>newInstancephp(php)php)php;
php php php php php php php php php php php php php php php php php$loadedClassesphp[php]php php=php php$classphp;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$loadedClassesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php ReflectionClassphp php$reflectionClass
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php privatephp functionphp php_isManifestImplementationphp(php$reflectionClassphp)
php php php php php{
php php php php php php php php returnphp php(
php php php php php php php php php php php php php$reflectionClassphp-php>implementsInterfacephp(php'Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp'php)
php php php php php php php php php php php php php php php php php&php&php php!php$reflectionClassphp-php>isAbstractphp(php)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php ReflectionClassphp php$reflectionClass
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php privatephp functionphp php_isProviderImplementationphp(php$reflectionClassphp)
php php php php php{
php php php php php php php php php$providerRegistryphp php=php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php returnphp php(
php php php php php php php php php php php php php$reflectionClassphp-php>implementsInterfacephp(php'Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp'php)
php php php php php php php php php php php php php php php php php&php&php php!php$reflectionClassphp-php>isAbstractphp(php)
php php php php php php php php php php php php php php php php php&php&php php!php$providerRegistryphp-php>hasProviderphp(php$reflectionClassphp-php>getNamephp(php)php,php falsephp)
php php php php php php php php php)php;
php php php php php}

php}