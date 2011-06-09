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
php php*php php@versionphp php php php php$Idphp:php Directoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Storagephp_Directory
php{

php php php php php/php*php*
php php php php php php*php Closesphp thephp storephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp closephp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp stringsphp,php onephp forphp eachphp filephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp fileListphp(php)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp,php emptyphp filephp inphp thephp directoryphp withphp thephp givenphp php$filenamephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php abstractphp publicphp functionphp createFilephp(php$filenamephp)php;


php php php php php/php*php*
php php php php php php*php Removesphp anphp existingphp php$filenamephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp deleteFilephp(php$filenamephp)php;

php php php php php/php*php*
php php php php php php*php Purgephp filephp ifphp itphp'sphp cachedphp byphp directoryphp object
php php php php php php*
php php php php php php*php Methodphp isphp usedphp tophp preventphp php'toophp manyphp openphp filesphp'php error
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp purgeFilephp(php$filenamephp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp aphp filephp withphp thephp givenphp php$filenamephp existsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp fileExistsphp(php$filenamephp)php;


php php php php php/php*php*
php php php php php php*php Returnsphp thephp lengthphp ofphp aphp php$filenamephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp fileLengthphp(php$filenamephp)php;


php php php php php/php*php*
php php php php php php*php Returnsphp thephp UNIXphp timestampphp php$filenamephp wasphp lastphp modifiedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp fileModifiedphp(php$filenamephp)php;


php php php php php/php*php*
php php php php php php*php Renamesphp anphp existingphp filephp inphp thephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$from
php php php php php php*php php@paramphp stringphp php$to
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp renameFilephp(php$fromphp,php php$tophp)php;


php php php php php/php*php*
php php php php php php*php Setsphp thephp modifiedphp timephp ofphp php$filenamephp tophp nowphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp touchFilephp(php$filenamephp)php;


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
php php php php abstractphp publicphp functionphp getFileObjectphp(php$filenamephp,php php$shareHandlerphp php=php truephp)php;

php}

