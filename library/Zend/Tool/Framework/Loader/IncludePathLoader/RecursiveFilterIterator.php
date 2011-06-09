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
php php*php php@versionphp php php php php$Idphp:php RecursiveFilterIteratorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Loaderphp_IncludePathLoaderphp_RecursiveFilterIteratorphp extendsphp RecursiveFilterIterator
php{

php php php php protectedphp php$php_denyDirectoryPatternphp php=php nullphp;
php php php php protectedphp php$php_acceptFilePatternphp php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructor
php php php php php php*
php php php php php php*php php@paramphp RecursiveIteratorphp php$iterator
php php php php php php*php php@paramphp stringphp php$denyDirectoryPattern
php php php php php php*php php@paramphp stringphp php$acceptFilePattern
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(RecursiveIteratorphp php$iteratorphp,php php$denyDirectoryPatternphp php=php nullphp,php php$acceptFilePatternphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_denyDirectoryPatternphp php=php php$denyDirectoryPatternphp;
php php php php php php php php php$thisphp-php>php_acceptFilePatternphp php php php php=php php$acceptFilePatternphp;
php php php php php php php php parentphp:php:php_php_constructphp(php$iteratorphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php acceptphp(php)php php-php Whichphp iterablephp itemsphp tophp acceptphp orphp denyphp,php requiredphp byphp FilterInterface
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp acceptphp(php)
php php php php php{
php php php php php php php php php$currentNodephp php=php php$thisphp-php>currentphp(php)php;
php php php php php php php php php$currentNodeRealPathphp php=php php$currentNodephp-php>getRealPathphp(php)php;

php php php php php php php php php/php/php ifphp thephp currentphp nodephp isphp aphp directoryphp ANDphp doesnphp'tphp matchphp thephp denyDirectoryphp patternphp,php accept
php php php php php php php php ifphp php(php$currentNodephp-php>isDirphp(php)
php php php php php php php php php php php php php&php&php php!pregphp_matchphp(php'php#php'php php.php php$thisphp-php>php_denyDirectoryPatternphp php.php php'php#php'php,php php$currentNodeRealPathphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp thephp filephp matchesphp thephp acceptphp filephp patternphp,php accept
php php php php php php php php php$acceptablephp php=php php(pregphp_matchphp(php'php#php'php php.php php$thisphp-php>php_acceptFilePatternphp php.php php'php#php'php,php php$currentNodeRealPathphp)php)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$acceptablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getChildrenphp(php)php php-php overriddenphp fromphp RecursiveFilterIteratorphp tophp allowphp thephp persistencephp of
php php php php php php*php thephp php$php_denyDirectoryPatternphp andphp thephp php$php_acceptFilePatternphp whenphp subphp iteratorsphp ofphp thisphp filter
php php php php php php*php arephp neededphp tophp bephp createdphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Loaderphp_IncludePathLoaderphp_RecursiveFilterIterator
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>refphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>refphp php=php newphp ReflectionClassphp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>refphp-php>newInstancephp(
php php php php php php php php php php php php php$thisphp-php>getInnerIteratorphp(php)php-php>getChildrenphp(php)php,
php php php php php php php php php php php php php$thisphp-php>php_denyDirectoryPatternphp,
php php php php php php php php php php php php php$thisphp-php>php_acceptFilePattern
php php php php php php php php php php php php php)php;
php php php php php}

php}

