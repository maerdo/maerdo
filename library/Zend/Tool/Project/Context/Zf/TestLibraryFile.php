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
php php*php php@versionphp php php php php$Idphp:php TestLibraryFilephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Filephp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_TestLibraryFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_forClassNamephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'TestLibraryFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_TestLibraryFile
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_forClassNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'forClassNamephp'php)php;
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php ucfirstphp(ltrimphp(strrchrphp(php$thisphp-php>php_forClassNamephp,php php'php_php'php)php,php php'php_php'php)php)php php.php php'Testphp.phpphp'php;
php php php php php php php php parentphp:php:initphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{

php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp_Wordphp_DashToCamelCasephp(php)php;

php php php php php php php php php$classNamephp php=php php$filterphp-php>filterphp(php$thisphp-php>php_forClassNamephp)php php.php php'Testphp'php;

php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php'requiredFilesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'PHPUnitphp/Frameworkphp/TestCasephp.phpphp'
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'PHPUnitphp_Frameworkphp_TestCasephp'php,
php php php php php php php php php php php php php php php php php php php php php'methodsphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'setUpphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php php'php php php php php php php php php/php*php Setupphp Routinephp php*php/php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'tearDownphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php php'php php php php php php php php php/php*php Tearphp Downphp Routinephp php*php/php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;

php php php php php php php php returnphp php$codeGenFilephp-php>generatephp(php)php;
php php php php php}

php}