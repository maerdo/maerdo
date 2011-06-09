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
php php*php php@versionphp php php php php$Idphp:php BootstrapFilephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_BootstrapFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'Bootstrapphp.phpphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_applicationConfigFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_applicationDirectoryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Application
php php php php php php*php/
php php php php protectedphp php$php_applicationInstancephp php=php nullphp;


php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'BootstrapFilephp'php;
php php php php php}

php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php parentphp:php:initphp(php)php;

php php php php php php php php php$thisphp-php>php_applicationConfigFilephp php=php php$thisphp-php>php_resourcephp-php>getProfilephp(php)php-php>searchphp(php'ApplicationConfigFilephp'php)php;
php php php php php php php php php$thisphp-php>php_applicationDirectoryphp php=php php$thisphp-php>php_resourcephp-php>getProfilephp(php)php-php>searchphp(php'ApplicationDirectoryphp'php)php;

php php php php php php php php ifphp php(php(php$thisphp-php>php_applicationConfigFilephp php=php=php=php falsephp)php php|php|php php(php$thisphp-php>php_applicationDirectoryphp php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Tophp usephp thephp BootstrapFilephp contextphp,php yourphp projectphp requiresphp thephp usephp ofphp bothphp thephp php"ApplicationConfigFilephp"php andphp php"ApplicationDirectoryphp"php contextsphp.php'php)php;
php php php php php php php php php}


php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{

php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'Bootstrapphp'php,
php php php php php php php php php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'Zendphp_Applicationphp_Bootstrapphp_Bootstrapphp'php,
php php php php php php php php php php php php php php php php php php php php php)php)php,
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;

php php php php php php php php returnphp php$codeGenFilephp-php>generatephp(php)php;
php php php php php}

php php php php publicphp functionphp getApplicationInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_applicationInstancephp php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_applicationConfigFilephp-php>getContextphp(php)php-php>existsphp(php)php)php php{
php php php php php php php php php php php php php php php php definephp(php'APPLICATIONphp_PATHphp'php,php php$thisphp-php>php_applicationDirectoryphp-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$applicationOptionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$applicationOptionsphp[php'configphp'php]php php=php php$thisphp-php>php_applicationConfigFilephp-php>getPathphp(php)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_applicationInstancephp php=php newphp Zendphp_Applicationphp(
php php php php php php php php php php php php php php php php php php php php php'developmentphp'php,
php php php php php php php php php php php php php php php php php php php php php$applicationOptions
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_applicationInstancephp;
php php php php php}
php}
