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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filesystemphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Directoryphp.phpphp'php;


php/php*php*
php php*php FileSystemphp implementationphp ofphp Directoryphp abstractionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp_Filesystemphp extendsphp Zendphp_Searchphp_Lucenephp_Storagephp_Directory
php{
php php php php php/php*php*
php php php php php php*php Filesystemphp pathphp tophp thephp directory
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dirPathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Cachephp forphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp_Filesystemphp objects
php php php php php php*php Arrayphp:php filenamephp php=php>php Zendphp_Searchphp_Lucenephp_Storagephp_Filephp object
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php protectedphp php$php_fileHandlersphp;

php php php php php/php*php*
php php php php php php*php Defaultphp filephp permissions
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultFilePermissionsphp php=php php0php6php6php6php;


php php php php php/php*php*
php php php php php php*php Getphp defaultphp filephp permissions
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultFilePermissionsphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultFilePermissionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp filephp permissions
php php php php php php*
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultFilePermissionsphp(php$modephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultFilePermissionsphp php=php php$modephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp recursivephp directoryphp creation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dir
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@paramphp booleanphp php$recursive
php php php php php php*php php@returnphp boolean
php php php php php php*php/

php php php php publicphp staticphp functionphp mkdirsphp(php$dirphp,php php$modephp php=php php0php7php7php7php,php php$recursivephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php(php$dirphp php=php=php=php nullphp)php php|php|php php$dirphp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_dirphp(php$dirphp)php php|php|php php$dirphp php=php=php=php php'php/php'php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp php(selfphp:php:mkdirsphp(dirnamephp(php$dirphp)php,php php$modephp,php php$recursivephp)php)php php{
php php php php php php php php php php php php returnphp mkdirphp(php$dirphp,php php$modephp)php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php Checksphp ifphp php$pathphp isphp aphp directoryphp orphp triesphp tophp createphp itphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$pathphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$pathphp)php)php php{
php php php php php php php php php php php php ifphp php(filephp_existsphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Pathphp existsphp,php butphp itphp\php'sphp notphp aphp directoryphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php!selfphp:php:mkdirsphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php"Canphp'tphp createphp directoryphp php'php$pathphp'php.php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dirPathphp php=php php$pathphp;
php php php php php php php php php$thisphp-php>php_fileHandlersphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Closesphp thephp storephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_fileHandlersphp asphp php$fileObjectphp)php php{
php php php php php php php php php php php php php$fileObjectphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fileHandlersphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp stringsphp,php onephp forphp eachphp filephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fileListphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;

php php php php php php php php php$dirContentphp php=php opendirphp(php php$thisphp-php>php_dirPathphp php)php;
php php php php php php php php whilephp php(php(php$filephp php=php readdirphp(php$dirContentphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php(php$filephp php=php=php php'php.php.php'php)php|php|php(php$filephp php=php=php php'php.php'php)php)php php php continuephp;

php php php php php php php php php php php php ifphp(php php!isphp_dirphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filephp)php php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$filephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php closedirphp(php$dirContentphp)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp,php emptyphp filephp inphp thephp directoryphp withphp thephp givenphp php$filenamephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createFilephp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Filephp/Filesystemphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php php=php newphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp_Filesystemphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filenamephp,php php'wphp+bphp'php)php;

php php php php php php php php php/php/php Setphp filephp permissionsphp,php butphp donphp'tphp carephp aboutphp anyphp possiblephp failuresphp,php sincephp filephp mayphp bephp already
php php php php php php php php php/php/php createdphp byphp antherphp userphp whichphp hasphp tophp carephp aboutphp rightphp permissions
php php php php php php php php php@chmodphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filenamephp,php selfphp:php:php$php_defaultFilePermissionsphp)php;

php php php php php php php php returnphp php$thisphp-php>php_fileHandlersphp[php$filenamephp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Removesphp anphp existingphp php$filenamephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteFilephp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php;

php php php php php php php php globalphp php$phpphp_errormsgphp;
php php php php php php php php php$trackErrorsphp php=php iniphp_getphp(php'trackphp_errorsphp'php)php;php iniphp_setphp(php'trackphp_errorsphp'php,php php'php1php'php)php;
php php php php php php php php ifphp php(php!php@unlinkphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filenamephp)php)php php{
php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Canphp\php'tphp deletephp filephp:php php'php php.php php$phpphp_errormsgphp)php;
php php php php php php php php php}
php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Purgephp filephp ifphp itphp'sphp cachedphp byphp directoryphp object
php php php php php php*
php php php php php php*php Methodphp isphp usedphp tophp preventphp php'toophp manyphp openphp filesphp'php error
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp purgeFilephp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp aphp filephp withphp thephp givenphp php$filenamephp existsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp fileExistsphp(php$filenamephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_fileHandlersphp[php$filenamephp]php)php php|php|
php php php php php php php php php php php php php php php filephp_existsphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filenamephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp lengthphp ofphp aphp php$filenamephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp fileLengthphp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_fileHandlersphp[php$filenamephp]php-php>sizephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp filesizephp(php$thisphp-php>php_dirPathphp php.php'php/php'php.php php$filenamephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp UNIXphp timestampphp php$filenamephp wasphp lastphp modifiedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp fileModifiedphp(php$filenamephp)
php php php php php{
php php php php php php php php returnphp filemtimephp(php$thisphp-php>php_dirPathphp php.php'php/php'php.php php$filenamephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Renamesphp anphp existingphp filephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$from
php php php php php php*php php@paramphp stringphp php$to
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp renameFilephp(php$fromphp,php php$tophp)
php php php php php{
php php php php php php php php globalphp php$phpphp_errormsgphp;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fileHandlersphp[php$fromphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$fromphp]php-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_fileHandlersphp[php$fromphp]php)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fileHandlersphp[php$tophp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$tophp]php-php>closephp(php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_fileHandlersphp[php$tophp]php)php;

php php php php php php php php ifphp php(filephp_existsphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$tophp)php)php php{
php php php php php php php php php php php php ifphp php(php!unlinkphp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$tophp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Deletephp operationphp failedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$trackErrorsphp php=php iniphp_getphp(php'trackphp_errorsphp'php)php;
php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php'php1php'php)php;

php php php php php php php php php$successphp php=php php@renamephp(php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$fromphp,php php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$tophp)php;
php php php php php php php php ifphp php(php!php$successphp)php php{
php php php php php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$phpphp_errormsgphp)php;
php php php php php php php php php}

php php php php php php php php iniphp_setphp(php'trackphp_errorsphp'php,php php$trackErrorsphp)php;

php php php php php php php php returnphp php$successphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp thephp modifiedphp timephp ofphp php$filenamephp tophp nowphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp touchFilephp(php$filenamephp)
php php php php php{
php php php php php php php php returnphp touchphp(php$thisphp-php>php_dirPathphp php.php'php/php'php.php php$filenamephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp objectphp forphp aphp givenphp php$filenamephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php Ifphp php$shareHandlerphp optionphp isphp truephp,php thenphp filephp handlerphp canphp bephp sharedphp betweenphp Filephp Object
php php php php php php*php requestsphp.php Itphp speedphp-upsphp performancephp,php butphp makesphp problemsphp withphp filephp positionphp.
php php php php php php*php Sharedphp handlerphp arephp goodphp forphp shortphp atomicphp requestsphp.
php php php php php php*php Nonphp-sharedphp handlersphp arephp usefulphp forphp streamphp filephp readingphp php(especialphp forphp compoundphp filesphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@paramphp booleanphp php$shareHandler
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php publicphp functionphp getFileObjectphp(php$filenamephp,php php$shareHandlerphp php=php truephp)
php php php php php{
php php php php php php php php php$fullFilenamephp php=php php$thisphp-php>php_dirPathphp php.php php'php/php'php php.php php$filenamephp;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Filephp/Filesystemphp.phpphp'php;
php php php php php php php php ifphp php(php!php$shareHandlerphp)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp_Filesystemphp(php$fullFilenamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php-php>seekphp(php0php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_fileHandlersphp[php$filenamephp]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fileHandlersphp[php$filenamephp]php php=php newphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp_Filesystemphp(php$fullFilenamephp)php;
php php php php php php php php returnphp php$thisphp-php>php_fileHandlersphp[php$filenamephp]php;
php php php php php}
php}

