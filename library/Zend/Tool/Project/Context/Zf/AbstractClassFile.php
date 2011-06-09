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
php php*php php@versionphp php php php php$Idphp:php AbstractClassFilephp.phpphp php2php3php4php1php7php php2php0php1php0php-php1php1php-php2php0php php1php6php:php2php4php:php3php5Zphp ramonphp php$
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
abstractphp classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_AbstractClassFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php getFullClassNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp php$localClassName
php php php php php php*php php@paramphp php$classContextName
php php php php php php*php/
php php php php publicphp functionphp getFullClassNamephp(php$localClassNamephp,php php$classContextNamephp php=php nullphp)
php php php php php{

php php php php php php php php php/php/php findphp thephp ApplicationDirectoryphp ORphp ModuleDirectory
php php php php php php php php php$currentResourcephp php=php php$thisphp-php>php_resourcephp;
php php php php php php php php dophp php{
php php php php php php php php php php php php php$resourceNamephp php=php php$currentResourcephp-php>getNamephp(php)php;
php php php php php php php php php php php php ifphp php(php$resourceNamephp php=php=php php'ApplicationDirectoryphp'php php|php|php php$resourceNamephp php=php=php php'ModuleDirectoryphp'php)php php{
php php php php php php php php php php php php php php php php php$containingResourcephp php=php php$currentResourcephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(php$currentResourcephp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php php php php php php php php&php&php php$currentResourcephp php=php php$currentResourcephp-php>getParentResourcephp(php)php)php;

php php php php php php php php php$fullClassNamephp php=php php'php'php;

php php php php php php php php php/php/php gophp findphp thephp properphp prefix
php php php php php php php php ifphp php(issetphp(php$containingResourcephp)php)php php{
php php php php php php php php php php php php ifphp php(php$containingResourcephp-php>getNamephp(php)php php=php=php php'ApplicationDirectoryphp'php)php php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php$containingResourcephp-php>getAttributephp(php'classNamePrefixphp'php)php;
php php php php php php php php php php php php php php php php php$fullClassNamephp php=php php$prefixphp;
php php php php php php php php php php php php php}php elseifphp php(php$containingResourcephp-php>getNamephp(php)php php=php=php php'ModuleDirectoryphp'php)php php{
php php php php php php php php php php php php php php php php php$prefixphp php=php ucfirstphp(php$containingResourcephp-php>getAttributephp(php'moduleNamephp'php)php)php php.php php'php_php'php;
php php php php php php php php php php php php php php php php php$fullClassNamephp php=php php$prefixphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$classContextNamephp)php php{
php php php php php php php php php php php php php$fullClassNamephp php.php=php rtrimphp(php$classContextNamephp,php php'php_php'php)php php.php php'php_php'php;
php php php php php php php php php}
php php php php php php php php php$fullClassNamephp php.php=php php$localClassNamephp;

php php php php php php php php returnphp php$fullClassNamephp;
php php php php php}

php}
