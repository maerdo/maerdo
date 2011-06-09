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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Interfacephp.phpphp'php;

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
abstractphp classphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstractphp implementsphp Zendphp_Toolphp_Projectphp_Contextphp_Interface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_resourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseDirectoryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$parentBaseDirectoryphp php=php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php-php>getContextphp(php)php-php>getPathphp(php)php;
php php php php php php php php php$thisphp-php>php_baseDirectoryphp php=php php$parentBaseDirectoryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resource
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setResourcephp(Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resourcephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcephp php=php php$resourcephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setBaseDirectoryphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$baseDirectory
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setBaseDirectoryphp(php$baseDirectoryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_baseDirectoryphp php=php rtrimphp(strphp_replacephp(php'php\php\php'php,php php'php/php'php,php php$baseDirectoryphp)php,php php'php/php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getBaseDirectoryphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBaseDirectoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_baseDirectoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setFilesystemNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filesystemName
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFilesystemNamephp(php$filesystemNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php php$filesystemNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getFilesystemNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFilesystemNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filesystemNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPathphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPathphp(php)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_baseDirectoryphp;
php php php php php php php php ifphp php(php$thisphp-php>php_filesystemNamephp)php php{
php php php php php php php php php php php php php$pathphp php.php=php php'php/php'php php.php php$thisphp-php>php_filesystemNamephp;
php php php php php php php php php}
php php php php php php php php returnphp php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php existsphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp existsphp(php)
php php php php php{
php php php php php php php php returnphp filephp_existsphp(php$thisphp-php>getPathphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php Createphp thisphp resourcephp/context
php php php php php php*
php php php php php php*php/
php php php php abstractphp publicphp functionphp createphp(php)php;

php php php php php/php*php*
php php php php php php*php deletephp(php)
php php php php php php*
php php php php php php*php Deletephp thisphp resoucephp/context
php php php php php php*
php php php php php php*php/
php php php php abstractphp publicphp functionphp deletephp(php)php;

php}