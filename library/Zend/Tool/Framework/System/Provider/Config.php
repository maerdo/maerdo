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
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Providerphp/Abstractphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php"Zendphp/Configphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Configphp_Writerphp_Ini
php php*php/
requirephp_oncephp php"Zendphp/Configphp/Writerphp/Iniphp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php"Zendphp/Loaderphp.phpphp"php;

php/php*php*
php php*php Configurationphp Provider
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@packagephp php php php Framework
php php*php php@usesphp php php php php php php Zendphp_Toolphp_Frameworkphp_Providerphp_Abstract
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Configphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Configphp extendsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_levelCompletedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php arrayphp ofphp specialtiesphp handledphp byphp thisphp provider
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'Manifestphp'php,php php'Providerphp'php)php;

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp createphp(php)
php php php php php{
php php php php php php php php php/php*php php@varphp php$userConfigphp Zendphp_Toolphp_Frameworkphp_Clientphp_Configphp php*php/
php php php php php php php php php$userConfigphp php=php php$thisphp-php>php_registryphp-php>getConfigphp(php)php;

php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php ifphp php(php$userConfigphp-php>existsphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Aphp configurationphp alreadyphp existsphp,php cannotphp createphp aphp newphp onephp.php"php)php;
php php php php php php php php php}

php php php php php php php php php$homeDirectoryphp php=php php$thisphp-php>php_detectHomeDirectoryphp(php)php;

php php php php php php php php php$writerphp php=php newphp Zendphp_Configphp_Writerphp_Iniphp(php)php;
php php php php php php php php php$writerphp-php>setRenderWithoutSectionsphp(php)php;
php php php php php php php php php$filenamephp php=php php$homeDirectoryphp.php"php/php.zfphp.iniphp"php;

php php php php php php php php php$configphp php=php arrayphp(
php php php php php php php php php php php php php'phpphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'includephp_pathphp'php php=php>php getphp_includephp_pathphp(php)php,
php php php php php php php php php php php php php)php,
php php php php php php php php php)php;
php php php php php php php php php$writerphp-php>writephp(php$filenamephp,php newphp Zendphp_Configphp(php$configphp)php)php;

php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php php$respphp-php>appendContentphp(php"Successfullyphp writtenphp Zendphp Toolphp configphp.php"php)php;
php php php php php php php php php$respphp-php>appendContentphp(php"Itphp isphp locatedphp atphp:php php"php.php$filenamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_detectHomeDirectoryphp(php)
php php php php php{
php php php php php php php php php$envVarsphp php=php arrayphp(php"ZFphp_HOMEphp"php,php php"HOMEphp"php,php php"HOMEPATHphp"php)php;
php php php php php php php php foreachphp(php$envVarsphp ASphp php$envphp)php php{
php php php php php php php php php php php php php$homeDirectoryphp php=php getenvphp(php$envphp)php;
php php php php php php php php php php php php ifphp php(php$homeDirectoryphp php!php=php falsephp php&php&php filephp_existsphp(php$homeDirectoryphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$homeDirectoryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(php"Cannotphp detectphp userphp homephp directoryphp,php setphp ZFphp_HOMEphp enviromentphp variablephp.php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Showphp Zendphp Toolphp Userphp Configuration
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp showphp(php)
php php php php php{
php php php php php php php php php$userConfigphp php=php php$thisphp-php>php_loadUserConfigIfExistsphp(php)php;
php php php php php php php php php$configArrayphp php=php php$userConfigphp-php>getConfigInstancephp(php)php-php>toArrayphp(php)php;

php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php$iphp php=php php0php;
php php php php php php php php php$treephp php=php php"php"php;
php php php php php php php php foreachphp(php$configArrayphp ASphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php$treephp php.php=php php$thisphp-php>php_printTreephp(php$kphp,php php$vphp,php php1php,php countphp(php$configArrayphp)php=php=php$iphp)php;
php php php php php php php php php}
php php php php php php php php php$respphp-php>appendContentphp(php"Userphp Configurationphp:php php"php.php$userConfigphp-php>getConfigFilepathphp(php)php,php arrayphp(php"colorphp"php php=php>php php"greenphp"php)php)php;
php php php php php php php php php$respphp-php>appendContentphp(php$treephp,php arrayphp(php"indentionphp"php php=php>php php2php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp intphp php$level
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_printTreephp(php$keyphp,php php$valuephp,php php$levelphp=php1php,php php$isLastphp=falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_levelCompletedphp[php$levelphp]php php=php falsephp;

php php php php php php php php php$prefixphp php=php php"php"php;
php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php php$levelphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_levelCompletedphp[php$iphp]php php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$prefixphp php.php=php php"php php php php php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$prefixphp php.php=php php"php|php php php php"php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$isLastphp)php php{
php php php php php php php php php php php php php$pointerphp php=php php"php`php-php-php php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$pointerphp php=php php"php|php-php-php php"php;
php php php php php php php php php}

php php php php php php php php php$treephp php=php php"php"php;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$treephp php.php=php php$prefixphp.php$pointerphp.php$keyphp.PHPphp_EOLphp;

php php php php php php php php php php php php ifphp php(php$isLastphp php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_levelCompletedphp[php$levelphp]php php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$iphp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php$treephp php.php=php php$thisphp-php>php_printTreephp(php$kphp,php php$vphp,php php$levelphp+php1php,php php(countphp(php$valuephp)php=php=php$iphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$treephp php.php=php php$prefixphp.php$pointerphp.php$keyphp.php"php:php php"php.trimphp(php$valuephp)php.PHPphp_EOLphp;
php php php php php php php php php}

php php php php php php php php returnphp php$treephp;
php php php php php}

php php php php publicphp functionphp enablephp(php)
php php php php php{
php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php php$respphp-php>appendContentphp(php'Usephp eitherphp php"zfphp enablephp configphp.providerphp"php orphp php"zfphp enablephp configphp.manifestphp"php.php'php)php;
php php php php php}

php php php php publicphp functionphp disablephp(php)
php php php php php{
php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php php$respphp-php>appendContentphp(php'Usephp eitherphp php"zfphp disablephp configphp.providerphp"php orphp php"zfphp disablephp configphp.manifestphp"php.php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$className
php php php php php php*php/
php php php php publicphp functionphp enableProviderphp(php$classNamephp)
php php php php php{
php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classNamephp)php;
php php php php php php php php php$reflClassphp php=php newphp ReflectionClassphp(php$classNamephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php"Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp"php,php php$reflClassphp-php>getInterfaceNamesphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(php"Givenphp classphp isphp notphp aphp providerphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_doEnablephp(php$classNamephp)php;
php php php php php}

php php php php protectedphp functionphp php_doEnablephp(php$classNamephp)
php php php php php{

php php php php php php php php php$userConfigphp php=php php$thisphp-php>php_loadUserConfigIfExistsphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$userConfigphp-php>basicloaderphp)php)php php{
php php php php php php php php php php php php php$userConfigphp-php>basicloaderphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$userConfigphp-php>basicloaderphp-php>classesphp)php)php php{
php php php php php php php php php php php php php$userConfigphp-php>basicloaderphp-php>classesphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$providerClassesphp php=php php$userConfigphp-php>basicloaderphp-php>classesphp-php>toArrayphp(php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$classNamephp,php php$providerClassesphp)php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$providerClassesphp)php)php php{
php php php php php php php php php php php php php php php php php$posphp php=php maxphp(arrayphp_keysphp(php$providerClassesphp)php)php+php1php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$posphp php=php php0php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$userConfigphp-php>basicloaderphp-php>classesphp-php>php$posphp php=php php$classNamephp;

php php php php php php php php php php php php ifphp php(php$userConfigphp-php>savephp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(
php php php php php php php php php php php php php php php php php php php php php"Providerphp/Manifestphp php'php"php.php$classNamephp.php"php'php wasphp enabledphp forphp usagephp withphp Zendphp Toolphp.php"php,
php php php php php php php php php php php php php php php php php php php php arrayphp(php"colorphp"php php=php>php php"greenphp"php,php php"aligncenterphp"php php=php>php truephp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php"Couldphp notphp writephp userphp configurationphp tophp persistencephp.php"
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Providerphp/Manifestphp php'php"php.php$classNamephp.php"php'php isphp alreadyphp enabledphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$className
php php php php php php*php/
php php php php publicphp functionphp enableManifestphp(php$classNamephp)
php php php php php{
php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classNamephp)php;
php php php php php php php php php$reflClassphp php=php newphp ReflectionClassphp(php$classNamephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php"Zendphp_Toolphp_Frameworkphp_Manifestphp_Interfacephp"php,php php$reflClassphp-php>getInterfaceNamesphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(php"Givenphp classphp isphp notphp aphp manifestphp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_doEnablephp(php$classNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$className
php php php php php php*php/
php php php php publicphp functionphp disableManifestphp(php$classNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>disableProviderphp(php$classNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$className
php php php php php php*php/
php php php php publicphp functionphp disableProviderphp(php$classNamephp)
php php php php php{
php php php php php php php php php$userConfigphp php=php php$thisphp-php>php_loadUserConfigIfExistsphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$userConfigphp-php>basicloaderphp)php)php php{
php php php php php php php php php php php php php$userConfigphp-php>basicloaderphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$userConfigphp-php>basicloaderphp-php>classesphp)php)php php{
php php php php php php php php php php php php php$userConfigphp-php>basicloaderphp-php>classesphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$providerClassesphp php=php php$userConfigphp-php>basicloaderphp-php>classesphp-php>toArrayphp(php)php;
php php php php php php php php ifphp php(php(php$keyphp php=php arrayphp_searchphp(php$classNamephp,php php$providerClassesphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php unsetphp(php$userConfigphp-php>basicloaderphp-php>classesphp-php>php$keyphp)php;

php php php php php php php php php php php php ifphp php(php$userConfigphp-php>savephp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(
php php php php php php php php php php php php php php php php php php php php php"Providerphp/Manifestphp php'php"php.php$classNamephp.php"php'php wasphp disabledphp.php"php,
php php php php php php php php php php php php php php php php php php php php arrayphp(php"colorphp"php php=php>php php"greenphp"php,php php"aligncenterphp"php php=php>php truephp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php"Couldphp notphp writephp userphp configurationphp tophp persistencephp.php"
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Providerphp/Manifestphp php'php"php.php$classNamephp.php"php'php isphp notphp enabledphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Config
php php php php php php*php/
php php php php protectedphp functionphp php_loadUserConfigIfExistsphp(php)
php php php php php{
php php php php php php php php php/php*php php@varphp php$userConfigphp Zendphp_Toolphp_Frameworkphp_Clientphp_Configphp php*php/
php php php php php php php php php$userConfigphp php=php php$thisphp-php>php_registryphp-php>getConfigphp(php)php;

php php php php php php php php php$respphp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php ifphp php(php!php$userConfigphp-php>existsphp(php)php)php php{
php php php php php php php php php php php php php$respphp-php>appendContentphp(php"Userphp hasphp nophp configphp filephp.php"php,php arrayphp(php"aligncenterphp"php php=php>php truephp,php php"colorphp"php php=php>php arrayphp(php'hiWhitephp'php,php php'bgRedphp'php)php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$userConfigphp;
php php php php php}
php}