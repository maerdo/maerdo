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
php php*php php@versionphp php php php php$Idphp:php Directoryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Abstractphp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directoryphp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'directoryphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directoryphp;
php php php php php php*php/
php php php php publicphp functionphp createphp(php)
php php php php php{
php php php php php php php php php/php/php checkphp tophp ensurephp thephp parentphp existsphp,php ifphp notphp,php callphp itphp andphp createphp it
php php php php php php php php ifphp php(php(php$parentResourcephp php=php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php php{
php php php php php php php php php php php php ifphp php(php(php(php$parentContextphp php=php php$parentResourcephp-php>getContextphp(php)php)php instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Abstractphp)
php php php php php php php php php php php php php php php php php&php&php php(php!php$parentContextphp-php>existsphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$parentResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!filephp_existsphp(php$thisphp-php>getPathphp(php)php)php)php php{
php php php php php php php php php php php php mkdirphp(php$thisphp-php>getPathphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php deletephp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcephp-php>setDeletedphp(truephp)php;
php php php php php php php php rmdirphp(php$thisphp-php>getPathphp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php}