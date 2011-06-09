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
php php*php php@versionphp php php php php$Idphp:php ProjectDirectoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_TopLevelRestrictable
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Systemphp/TopLevelRestrictablephp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectDirectory
php php php php extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php php php implementsphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_Interfacephp,
php php php php php php php php php php php php php php php Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_NotOverwritablephp,
php php php php php php php php php php php php php php php Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_TopLevelRestrictable
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ProjectDirectoryphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectDirectory
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php/php/php getphp basephp pathphp fromphp attributesphp php(wouldphp bephp inphp pathphp attributephp)
php php php php php php php php php$projectDirectoryphp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'pathphp'php)php;

php php php php php php php php php/php/php ifphp notphp,php getphp fromphp profile
php php php php php php php php ifphp php(php$projectDirectoryphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$projectDirectoryphp php=php php$thisphp-php>php_resourcephp-php>getProfilephp(php)php-php>getAttributephp(php'projectDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp notphp,php exceptionphp.
php php php php php php php php ifphp php(php$projectDirectoryphp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'projectDirectoryphp cannotphp findphp thephp directoryphp forphp thisphp projectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_baseDirectoryphp php=php rtrimphp(php$projectDirectoryphp,php php'php\php\php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Systemphp_ProjectDirectory
php php php php php php*php/
php php php php publicphp functionphp createphp(php)
php php php php php{
php php php php php php php php ifphp php(filephp_existsphp(php$thisphp-php>getPathphp(php)php)php)php php{
php php php php php php php php php php php php php/php*
php php php php php php php php php php php php foreachphp php(newphp DirectoryIteratorphp(php$thisphp-php>getPathphp(php)php)php asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$itemphp-php>isDotphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$registryphp-php>getClientphp(php)php-php>isInteractivephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php@todophp promptphp forphp override
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Contextphp_Exceptionphp(php'Thisphp directoryphp isphp notphp emptyphp,php projectphp creationphp abortedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php*php/
php php php php php php php php php}

php php php php php php php php parentphp:php:createphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}