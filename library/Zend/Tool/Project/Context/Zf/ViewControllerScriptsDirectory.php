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
php php*php php@versionphp php php php php$Idphp:php ViewControllerScriptsDirectoryphp.phpphp php2php3php3php4php3php php2php0php1php0php-php1php1php-php1php5php php1php5php:php3php3php:php2php2Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Directoryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filter
php php*php/
requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Wordphp_CamelCaseToDash
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Wordphp/CamelCaseToDashphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filterphp_StringToLower
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/StringToLowerphp.phpphp'php;


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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ViewControllerScriptsDirectoryphp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'controllerNamephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp name
php php php php php php*php/
php php php php protectedphp php$php_forControllerNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ViewControllerScriptsDirectory
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_forControllerNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'forControllerNamephp'php)php;
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php php$thisphp-php>php_convertControllerNameToFilesystemNamephp(php$thisphp-php>php_forControllerNamephp)php;
php php php php php php php php parentphp:php:initphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributesphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'forControllerNamephp'php php=php>php php$thisphp-php>php_forControllerName
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ViewControllerScriptsDirectoryphp'php;
php php php php php}

php php php php protectedphp functionphp php_convertControllerNameToFilesystemNamephp(php$controllerNamephp)
php php php php php{
php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php$filterphp-php>addFilterphp(newphp Zendphp_Filterphp_Wordphp_CamelCaseToDashphp(php)php)
php php php php php php php php php php php php php-php>addFilterphp(newphp Zendphp_Filterphp_StringToLowerphp(php)php)php;
php php php php php php php php returnphp php$filterphp-php>filterphp(php$controllerNamephp)php;
php php php php php}

php}
