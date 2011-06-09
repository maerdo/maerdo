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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Repositoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/TopLevelRestrictablephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/NotOverwritablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp implementsphp Countable
php{

php php php php protectedphp staticphp php$php_instancephp php=php nullphp;
php php php php protectedphp staticphp php$php_isInitializedphp php=php falsephp;

php php php php protectedphp php$php_shortContextNamesphp php=php arrayphp(php)php;
php php php php protectedphp php$php_contextsphp php php php php php php php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Enterphp descriptionphp herephp.php.php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Repository
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_instancephp php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php publicphp staticphp functionphp resetInstancephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_instancephp php=php nullphp;
php php php php php php php php selfphp:php:php$php_isInitializedphp php=php falsephp;
php php php php php}

php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_isInitializedphp php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>addContextClassphp(php'Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectDirectoryphp'php)
php php php php php php php php php php php php php php php php php php-php>addContextClassphp(php'Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectProfileFilephp'php)
php php php php php php php php php php php php php php php php php php-php>addContextClassphp(php'Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectProvidersDirectoryphp'php)php;
php php php php php php php php php php php php selfphp:php:php$php_isInitializedphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp addContextsFromDirectoryphp(php$directoryphp,php php$prefixphp)
php php php php php{
php php php php php php php php php$prefixphp php=php trimphp(php$prefixphp,php php'php_php'php)php php.php php'php_php'php;
php php php php php php php php foreachphp php(newphp DirectoryIteratorphp(php$directoryphp)php asphp php$directoryItemphp)php php{
php php php php php php php php php php php php ifphp php(php$directoryItemphp-php>isDotphp(php)php php|php|php php(substrphp(php$directoryItemphp-php>getFilenamephp(php)php,php php-php4php)php php!php=php=php php'php.phpphp'php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$classphp php=php php$prefixphp php.php substrphp(php$directoryItemphp-php>getFilenamephp(php)php,php php0php,php php-php4php)php;
php php php php php php php php php php php php php$thisphp-php>addContextClassphp(php$classphp)php;
php php php php php php php php php}
php php php php php}


php php php php publicphp functionphp addContextClassphp(php$contextClassphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php$contextClassphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$contextClassphp)php;
php php php php php php php php php}
php php php php php php php php php$reflectionContextClassphp php=php newphp ReflectionClassphp(php$contextClassphp)php;
php php php php php php php php ifphp php(php$reflectionContextClassphp-php>isInstantiablephp(php)php)php php{
php php php php php php php php php php php php php$contextphp php=php newphp php$contextClassphp(php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>addContextphp(php$contextphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enterphp descriptionphp herephp.php.php.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$context
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Repository
php php php php php php*php/
php php php php publicphp functionphp addContextphp(Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$contextphp)
php php php php php{
php php php php php php php php php$isSystemphp php php php php php php php=php php(php$contextphp instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_Interfacephp)php;
php php php php php php php php php$isTopLevelphp php php php php php=php php(php$contextphp instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_TopLevelRestrictablephp)php;
php php php php php php php php php$isOverwritablephp php=php php!php(php$contextphp instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_NotOverwritablephp)php;

php php php php php php php php php$indexphp php=php php(countphp(php$thisphp-php>php_contextsphp)php)php php?php maxphp(arrayphp_keysphp(php$thisphp-php>php_contextsphp)php)php php+php php1php php:php php1php;

php php php php php php php php php$normalNamephp php=php php$thisphp-php>php_normalizeNamephp(php$contextphp-php>getNamephp(php)php)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_shortContextNamesphp[php$normalNamephp]php)php php&php&php php(php$thisphp-php>php_contextsphp[php$thisphp-php>php_shortContextNamesphp[php$normalNamephp]php]php[php'isOverwritablephp'php]php php=php=php=php falsephp)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(php'Contextphp php'php php.php php$contextphp-php>getNamephp(php)php php.php php'php isphp notphp overwriteablephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_shortContextNamesphp[php$normalNamephp]php php=php php$indexphp;
php php php php php php php php php$thisphp-php>php_contextsphp[php$indexphp]php php=php arrayphp(
php php php php php php php php php php php php php'isTopLevelphp'php php php php php php=php>php php$isTopLevelphp,
php php php php php php php php php php php php php'isSystemphp'php php php php php php php php=php>php php$isSystemphp,
php php php php php php php php php php php php php'isOverwritablephp'php php=php>php php$isOverwritablephp,
php php php php php php php php php php php php php'normalNamephp'php php php php php php=php>php php$normalNamephp,
php php php php php php php php php php php php php'contextphp'php php php php php php php php php=php>php php$context
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getContextphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasContextphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(php'Contextphp byphp namephp php'php php.php php$namephp php.php php'php doesphp notphp existphp inphp thephp registryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeNamephp(php$namephp)php;
php php php php php php php php returnphp clonephp php$thisphp-php>php_contextsphp[php$thisphp-php>php_shortContextNamesphp[php$namephp]php]php[php'contextphp'php]php;
php php php php php}

php php php php publicphp functionphp hasContextphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeNamephp(php$namephp)php;
php php php php php php php php returnphp php(issetphp(php$thisphp-php>php_shortContextNamesphp[php$namephp]php)php php?php truephp php:php falsephp)php;
php php php php php}

php php php php publicphp functionphp isSystemContextphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasContextphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeNamephp(php$namephp)php;
php php php php php php php php php$indexphp php=php php$thisphp-php>php_shortContextNamesphp[php$namephp]php;
php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$indexphp]php[php'isSystemContextphp'php]php;
php php php php php}

php php php php publicphp functionphp isTopLevelContextphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasContextphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeNamephp(php$namephp)php;
php php php php php php php php php$indexphp php=php php$thisphp-php>php_shortContextNamesphp[php$namephp]php;
php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$indexphp]php[php'isTopLevelphp'php]php;
php php php php php}

php php php php publicphp functionphp isOverwritableContextphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasContextphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeNamephp(php$namephp)php;
php php php php php php php php php$indexphp php=php php$thisphp-php>php_shortContextNamesphp[php$namephp]php;
php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$indexphp]php[php'isOverwritablephp'php]php;
php php php php php}

php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_contextsphp)php;
php php php php php}

php php php php protectedphp functionphp php_normalizeNamephp(php$namephp)
php php php php php{
php php php php php php php php returnphp strtolowerphp(php$namephp)php;
php php php php php}

php}
