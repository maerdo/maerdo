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
php php*php php@versionphp php php php php$Idphp:php ProjectProviderFilephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Filephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_File
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Filephp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ProjectProviderFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_projectProviderNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_actionNamesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ProjectProviderFile
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{

php php php php php php php php php$thisphp-php>php_projectProviderNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'projectProviderNamephp'php)php;
php php php php php php php php php$thisphp-php>php_actionNamesphp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'actionNamesphp'php)php;
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php ucfirstphp(php$thisphp-php>php_projectProviderNamephp)php php.php php'Providerphp.phpphp'php;

php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_actionNamesphp,php php'php,php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_actionNamesphp php=php explodephp(php'php,php'php,php php$thisphp-php>php_actionNamesphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_actionNamesphp php=php php(php$thisphp-php>php_actionNamesphp)php php?php arrayphp(php$thisphp-php>php_actionNamesphp)php php:php arrayphp(php)php;
php php php php php php php php php}

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
php php php php php php php php php php php php php'projectProviderNamephp'php php=php>php php$thisphp-php>getProjectProviderNamephp(php)php,
php php php php php php php php php php php php php'actionNamesphp'php php=php>php implodephp(php'php,php'php,php php$thisphp-php>php_actionNamesphp)
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ProjectProviderFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProjectProviderNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getProjectProviderNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_projectProviderNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{

php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp_Wordphp_DashToCamelCasephp(php)php;

php php php php php php php php php$classNamephp php=php php$filterphp-php>filterphp(php$thisphp-php>php_projectProviderNamephp)php php.php php'Providerphp'php;

php php php php php php php php php$classphp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php'namephp'php php=php>php php$classNamephp,
php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'Zendphp_Toolphp_Projectphp_Providerphp_Abstractphp'
php php php php php php php php php php php php php)php)php;

php php php php php php php php php$methodsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_actionNamesphp asphp php$actionNamephp)php php{
php php php php php php php php php php php php php$methodsphp[php]php php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$actionNamephp,
php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php php'php php php php php php php php php/php*php*php php@todophp Implementationphp php*php/php'
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$methodsphp)php php{
php php php php php php php php php php php php php$classphp-php>setMethodsphp(php$methodsphp)php;
php php php php php php php php php}

php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php'requiredFilesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php,
php php php php php php php php php php php php php php php php php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(php$classphp)
php php php php php php php php php php php php php)php)php;

php php php php php php php php returnphp php$codeGenFilephp-php>generatephp(php)php;
php php php php php}

php}
