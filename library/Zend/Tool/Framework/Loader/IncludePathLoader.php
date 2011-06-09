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
php php*php php@versionphp php php php php$Idphp:php IncludePathLoaderphp.phpphp php2php0php9php0php4php php2php0php1php0php-php0php2php-php0php4php php1php6php:php1php8php:php1php8Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Loaderphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Loaderphp_IncludePathLoaderphp_RecursiveFilterIterator
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Loaderphp/IncludePathLoaderphp/RecursiveFilterIteratorphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Loaderphp_IncludePathLoaderphp extendsphp Zendphp_Toolphp_Frameworkphp_Loaderphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php php_getFilesphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp filesphp tophp load
php php php php php php*php/
php php php php protectedphp functionphp php_getFilesphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php$pathsphp php=php Zendphp_Loaderphp:php:explodeIncludePathphp(php)php;

php php php php php php php php php/php/php usedphp forphp checkingphp similarlyphp namedphp files
php php php php php php php php php$relativeItemsphp php php php=php arrayphp(php)php;
php php php php php php php php php$filesphp php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$isZendTraversedphp php=php falsephp;

php php php php php php php php foreachphp php(php$pathsphp asphp php$pathphp)php php{

php php php php php php php php php php php php php/php/php defaultphp patternsphp tophp use
php php php php php php php php php php php php php$filterDenyDirectoryPatternphp php=php php'php.php*php(php/php|php\php\php\php\php)php.svnphp'php;
php php php php php php php php php php php php php$filterAcceptFilePatternphp php php php php=php php'php.php*php(php?php:Manifestphp|Providerphp)php\php.phpphp$php'php;

php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$pathphp)php php|php|php php$pathphp[php0php]php php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$realIncludePathphp php=php realpathphp(php$pathphp)php;

php php php php php php php php php php php php php/php/php ensurephp thatphp wephp onlyphp traversephp aphp singlephp versionphp ofphp Zendphp Frameworkphp onphp allphp includephp paths
php php php php php php php php php php php php ifphp php(filephp_existsphp(php$realIncludePathphp php.php php'php/Zendphp/Toolphp/Frameworkphp/Loaderphp/IncludePathLoaderphp.phpphp'php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$isZendTraversedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$isZendTraversedphp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php usephp thephp denyphp directoryphp patternphp thatphp includesphp thephp pathphp tophp php'Zendphp'php,php itphp willphp notphp bephp accepted
php php php php php php php php php php php php php php php php php php php php php$filterDenyDirectoryPatternphp php=php php'php.php*php(php(php/php|php\php\php\php\php)php.svnphp|php'php php.php pregphp_quotephp(php$realIncludePathphp php.php DIRECTORYphp_SEPARATORphp)php php.php php'Zendphp)php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php createphp recursivephp directoryphp iterator
php php php php php php php php php php php php php$rdiphp php=php newphp RecursiveDirectoryIteratorphp(php$pathphp)php;

php php php php php php php php php php php php php/php/php passphp inphp thephp RecursiveDirectoryIteratorphp php&php thephp patterns
php php php php php php php php php php php php php$filterphp php=php newphp Zendphp_Toolphp_Frameworkphp_Loaderphp_IncludePathLoaderphp_RecursiveFilterIteratorphp(
php php php php php php php php php php php php php php php php php$rdiphp,
php php php php php php php php php php php php php php php php php$filterDenyDirectoryPatternphp,
php php php php php php php php php php php php php php php php php$filterAcceptFilePattern
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php/php/php buildphp thephp riiphp withphp thephp filter
php php php php php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(php$filterphp)php;

php php php php php php php php php php php php php/php/php iteratephp overphp thephp acceptedphp items
php php php php php php php php php php php php foreachphp php(php$iteratorphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$filephp php=php php(stringphp)php$itemphp;
php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>php_fileIsBlacklistedphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php ensurephp thatphp thephp samephp namedphp filephp fromphp separatephp includephp_pathsphp isphp notphp loaded
php php php php php php php php php php php php php php php php php$relativeItemphp php=php pregphp_replacephp(php'php#php^php'php php.php pregphp_quotephp(php$realIncludePathphp php.php DIRECTORYphp_SEPARATORphp,php php'php#php'php)php php.php php'php#php'php,php php'php'php,php php$itemphp-php>getRealPathphp(php)php)php;

php php php php php php php php php php php php php php php php php/php/php nophp linksphp allowedphp herephp forphp now
php php php php php php php php php php php php php php php php ifphp php(php$itemphp-php>isLinkphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php nophp itemsphp thatphp arephp relavitelyphp thephp samephp arephp allowed
php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$relativeItemphp,php php$relativeItemsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$relativeItemsphp[php]php php=php php$relativeItemphp;
php php php php php php php php php php php php php php php php php$filesphp[php]php php=php php$itemphp-php>getRealPathphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$filesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_fileIsBlacklistedphp(php$filephp)
php php php php php{
php php php php php php php php php$blacklistphp php=php arrayphp(
php php php php php php php php php php php php php"PHPUnitphp"php.DIRECTORYphp_SEPARATORphp.php"Frameworkphp"php,
php php php php php php php php php php php php php"Zendphp"php.DIRECTORYphp_SEPARATORphp.php"OpenIdphp"php.DIRECTORYphp_SEPARATORphp.php"Providerphp"
php php php php php php php php php)php;

php php php php php php php php foreachphp(php$blacklistphp ASphp php$blacklitedPatternphp)php php{
php php php php php php php php php php php php ifphp(strposphp(php$filephp,php php$blacklitedPatternphp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}
php}
