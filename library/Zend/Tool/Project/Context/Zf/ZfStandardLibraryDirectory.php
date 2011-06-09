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
php php*php php@versionphp php php php php$Idphp:php ZfStandardLibraryDirectoryphp.phpphp php2php0php9php0php4php php2php0php1php0php-php0php2php-php0php4php php1php6php:php1php8php:php1php8Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Directoryphp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ZfStandardLibraryDirectoryphp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_Directory
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'Zendphp'php;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ZfStandardLibraryDirectoryphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp createphp(php)
php php php php php{
php php php php php php php php parentphp:php:createphp(php)php;
php php php php php php php php php$zfPathphp php=php php$thisphp-php>php_getZfPathphp(php)php;
php php php php php php php php ifphp php(php$zfPathphp php!php=php falsephp)php php{
php php php php php php php php php php php php php$zfIteratorphp php=php newphp RecursiveDirectoryIteratorphp(php$zfPathphp)php;
php php php php php php php php php php php php foreachphp php(php$riiphp php=php newphp RecursiveIteratorIteratorphp(php$zfIteratorphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php asphp php$filephp)php php{
php php php php php php php php php php php php php php php php php$relativePathphp php=php pregphp_replacephp(php'php#php^php'php.pregphp_quotephp(realpathphp(php$zfPathphp)php,php php'php#php'php)php.php'php#php'php,php php'php'php,php realpathphp(php$filephp-php>getPathphp(php)php)php)php php.php DIRECTORYphp_SEPARATORphp php.php php$filephp-php>getFilenamephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$relativePathphp,php DIRECTORYphp_SEPARATORphp php.php php'php.php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$filephp-php>isDirphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php mkdirphp(php$thisphp-php>getBaseDirectoryphp(php)php php.php DIRECTORYphp_SEPARATORphp php.php php$thisphp-php>getFilesystemNamephp(php)php php.php php$relativePathphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php copyphp(php$filephp-php>getPathnamephp(php)php,php php$thisphp-php>getBaseDirectoryphp(php)php php.php DIRECTORYphp_SEPARATORphp php.php php$thisphp-php>getFilesystemNamephp(php)php php.php php$relativePathphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getZfPathphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php protectedphp functionphp php_getZfPathphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php foreachphp php(Zendphp_Loaderphp:php:explodeIncludePathphp(php)php asphp php$includePathphp)php php{
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$includePathphp)php php|php|php php$includePathphp[php0php]php php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(realpathphp(php$checkedPathphp php=php rtrimphp(php$includePathphp,php php'php\php\php/php'php)php php.php php'php/Zendphp/Loaderphp.phpphp'php)php php!php=php=php falsephp php&php&php filephp_existsphp(php$checkedPathphp)php)php php{
php php php php php php php php php php php php php php php php returnphp dirnamephp(php$checkedPathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php}
