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
php php*php php@versionphp php php php php$Idphp:php DbTableFilephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_DbTableFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_AbstractClassFile
php{

php php php php protectedphp php$php_dbTableNamephp php=php nullphp;

php php php php protectedphp php$php_actualTableNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'DbTableFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dbTableNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'dbTableNamephp'php)php;
php php php php php php php php php$thisphp-php>php_actualTableNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'actualTableNamephp'php)php;
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php ucfirstphp(php$thisphp-php>php_dbTableNamephp)php php.php php'php.phpphp'php;
php php php php php php php php parentphp:php:initphp(php)php;
php php php php php}

php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'dbTableNamephp'php php=php>php php$thisphp-php>php_dbTableNamephp)php;
php php php php php}

php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php php$classNamephp php=php php$thisphp-php>getFullClassNamephp(php$thisphp-php>php_dbTableNamephp,php php'Modelphp_DbTablephp'php)php;

php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php'fileNamephp'php php=php>php php$thisphp-php>getPathphp(php)php,
php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'Zendphp_Dbphp_Tablephp_Abstractphp'php,
php php php php php php php php php php php php php php php php php php php php php'propertiesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'php_namephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'visibilityphp'php php=php>php Zendphp_CodeGeneratorphp_Phpphp_Propertyphp:php:VISIBILITYphp_PROTECTEDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'defaultValuephp'php php=php>php php$thisphp-php>php_actualTableName
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php,

php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php returnphp php$codeGenFilephp-php>generatephp(php)php;
php php php php php}

php}
