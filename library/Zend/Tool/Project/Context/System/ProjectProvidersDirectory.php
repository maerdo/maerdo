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
php php*php php@versionphp php php php php$Idphp:php ProjectProvidersDirectoryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Directoryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_NotOverwritable
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/NotOverwritablephp.phpphp'php;

php/php*php*
php php*php Thisphp classphp isphp thephp frontphp mostphp classphp forphp utilizingphp Zendphp_Toolphp_Project
php php*
php php*php Aphp profilephp isphp aphp hierarchicalphp setphp ofphp resourcesphp thatphp keepphp trackphp of
php php*php itemsphp withinphp aphp specificphp projectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectProvidersDirectory
php php php php extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php php php implementsphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_Interfacephp,
php php php php php php php php php php php php php php php Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_NotOverwritable
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'providersphp'php;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ProjectProvidersDirectoryphp'php;
php php php php php}

php php php php publicphp functionphp loadProvidersphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php ifphp php(filephp_existsphp(php$thisphp-php>getPathphp(php)php)php)php php{

php php php php php php php php php php php php php$providerRepositoryphp php=php php$registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php php php php php foreachphp php(newphp DirectoryIteratorphp(php$thisphp-php>getPathphp(php)php)php asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$itemphp-php>isFilephp(php)php php&php&php php(php(php$suffixStartphp php=php strposphp(php$itemphp-php>getFilenamephp(php)php,php php'Providerphp.phpphp'php)php)php php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$classNamephp php=php substrphp(php$itemphp-php>getFilenamephp(php)php,php php0php,php php$suffixStartphp+php8php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php php$loadableFilesphp[php$classNamephp]php php=php php$itemphp-php>getPathnamephp(php)php;
php php php php php php php php php php php php php php php php php php php php includephp_oncephp php$itemphp-php>getPathnamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$providerRepositoryphp-php>addProviderphp(newphp php$classNamephp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php}