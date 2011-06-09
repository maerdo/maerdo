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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php LockManagerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Directoryphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Storagephp_Filephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Storagephp/Filephp.phpphp'php;

php/php*php*
php php*php Thisphp isphp anphp utilityphp classphp whichphp providesphp indexphp locksphp processingphp functionality
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_LockManager
php{
php php php php php/php*php*
php php php php php php*php constsphp forphp namephp ofphp filephp tophp showphp lockphp status
php php php php php php*php/
php php php php constphp WRITEphp_LOCKphp_FILEphp php php php php php php php php php php php php php php php php=php php'writephp.lockphp.filephp'php;
php php php php constphp READphp_LOCKphp_FILEphp php php php php php php php php php php php php php php php php php=php php'readphp.lockphp.filephp'php;
php php php php constphp READphp_LOCKphp_PROCESSINGphp_LOCKphp_FILEphp php=php php'readphp-lockphp-processingphp.lockphp.filephp'php;
php php php php constphp OPTIMIZATIONphp_LOCKphp_FILEphp php php php php php php php php php=php php'optimizationphp.lockphp.filephp'php;

php php php php php/php*php*
php php php php php php*php Obtainphp exclusivephp writephp lockphp onphp thephp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp obtainWriteLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>createFilephp(selfphp:php:WRITEphp_LOCKphp_FILEphp)php;
php php php php php php php php ifphp php(php!php$lockphp-php>lockphp(LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Canphp\php'tphp obtainphp exclusivephp indexphp lockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$lockphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Releasephp exclusivephp writephp lock
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php/
php php php php publicphp staticphp functionphp releaseWriteLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:WRITEphp_LOCKphp_FILEphp)php;
php php php php php php php php php$lockphp-php>unlockphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Obtainphp thephp exclusivephp php"readphp escalationphp/dephp-escalationphp"php lock
php php php php php php*
php php php php php php*php Requiredphp tophp protectphp thephp escalatephp/dephp-escalatephp readphp lockphp process
php php php php php php*php onphp GFSphp php(andphp potentiallyphp otherphp)php mountedphp filesystemsphp.
php php php php php php*
php php php php php php*php Whyphp wephp needphp thisphp:
php php php php php php*php php Whilephp GFSphp supportsphp clusterphp-widephp lockingphp viaphp flockphp(php)php,php itphp's
php php php php php php*php php implementationphp isnphp'tphp quitephp whatphp itphp shouldphp bephp.php php Thephp locking
php php php php php php*php php semanticsphp thatphp workphp consistentlyphp onphp aphp localphp filesystemphp tendphp to
php php php php php php*php php failphp onphp GFSphp mountedphp filesystemsphp.php php Thisphp appearsphp tophp bephp aphp designphp defect
php php php php php php*php php inphp thephp implementationphp ofphp GFSphp.php php Howphp thisphp manifestsphp itselfphp isphp that
php php php php php php*php php conditionalphp promotionphp ofphp aphp sharedphp lockphp tophp exclusivephp willphp always
php php php php php php*php php failphp,php lockphp releasephp requestsphp arephp honoredphp butphp notphp immediately
php php php php php php*php php processedphp php(causingphp erraticphp failuresphp ofphp subsequentphp conditional
php php php php php php*php php requestsphp)php andphp thephp releasingphp ofphp thephp exclusivephp lockphp beforephp the
php php php php php php*php php sharedphp lockphp isphp setphp whenphp aphp lockphp isphp demotedphp php(whichphp canphp openphp aphp window
php php php php php php*php php ofphp opportunityphp forphp anotherphp processphp tophp gainphp anphp exclusivephp lockphp when
php php php php php php*php php itphp shoudlnphp'tphp bephp allowedphp tophp)php.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_startReadLockProcessingphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>createFilephp(selfphp:php:READphp_LOCKphp_PROCESSINGphp_LOCKphp_FILEphp)php;
php php php php php php php php ifphp php(php!php$lockphp-php>lockphp(LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Canphp\php'tphp obtainphp exclusivephp lockphp forphp thephp readphp lockphp processingphp filephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$lockphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Releasephp thephp exclusivephp php"readphp escalationphp/dephp-escalationphp"php lock
php php php php php php*
php php php php php php*php Requiredphp tophp protectphp thephp escalatephp/dephp-escalatephp readphp lockphp process
php php php php php php*php onphp GFSphp php(andphp potentiallyphp otherphp)php mountedphp filesystemsphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php/
php php php php privatephp staticphp functionphp php_stopReadLockProcessingphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:READphp_LOCKphp_PROCESSINGphp_LOCKphp_FILEphp)php;
php php php php php php php php php$lockphp-php>unlockphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Obtainphp sharedphp readphp lockphp onphp thephp index
php php php php php php*
php php php php php php*php Itphp doesnphp'tphp blockphp otherphp readphp orphp updatephp processesphp,php butphp preventphp indexphp fromphp thephp prematurephp cleaningphp-up
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$defaultLockDirectory
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp obtainReadLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>createFilephp(selfphp:php:READphp_LOCKphp_FILEphp)php;
php php php php php php php php ifphp php(php!php$lockphp-php>lockphp(LOCKphp_SHphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Canphp\php'tphp obtainphp sharedphp readingphp indexphp lockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$lockphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Releasephp sharedphp readphp lock
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php/
php php php php publicphp staticphp functionphp releaseReadLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:READphp_LOCKphp_FILEphp)php;
php php php php php php php php php$lockphp-php>unlockphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Escalatephp Readphp lockphp tophp exclusivephp level
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp escalateReadLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php selfphp:php:php_startReadLockProcessingphp(php$lockDirectoryphp)php;

php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:READphp_LOCKphp_FILEphp)php;

php php php php php php php php php/php/php Firstphp,php releasephp thephp sharedphp lockphp forphp thephp benefitphp ofphp GFSphp since
php php php php php php php php php/php/php itphp willphp failphp thephp conditionalphp requestphp tophp promotephp thephp lockphp to
php php php php php php php php php/php/php php"exclusivephp"php whilephp thephp sharedphp lockphp isphp heldphp php(evenphp whenphp wephp are
php php php php php php php php php/php/php thephp onlyphp holderphp)php.
php php php php php php php php php$lockphp-php>unlockphp(php)php;

php php php php php php php php php/php/php GFSphp isphp reallyphp poorphp.php php Whilephp thephp abovephp php"unlockphp"php returnsphp,php GFS
php php php php php php php php php/php/php doesnphp'tphp cleanphp upphp itphp'sphp tablesphp rightphp awayphp php(whichphp willphp potentially
php php php php php php php php php/php/php causephp thephp conditionalphp lockingphp forphp thephp php"exclusivephp"php lockphp tophp failphp.
php php php php php php php php php/php/php Wephp willphp retryphp thephp conditionalphp lockphp requestphp severalphp timesphp onphp a
php php php php php php php php php/php/php failurephp tophp getphp pastphp thisphp.php php Thephp performancephp hitphp isphp negligible
php php php php php php php php php/php/php inphp thephp grandphp schemephp ofphp thingsphp andphp onlyphp willphp occurphp withphp GFS
php php php php php php php php php/php/php filesystemsphp orphp ifphp anotherphp localphp processphp hasphp thephp sharedphp lock
php php php php php php php php php/php/php onphp localphp filesystemsphp.
php php php php php php php php forphp php(php$retriesphp php=php php0php;php php$retriesphp <php php1php0php;php php$retriesphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$lockphp-php>lockphp(LOCKphp_EXphp,php truephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Exclusivephp lockphp isphp obtainedphp!
php php php php php php php php php php php php php php php php selfphp:php:php_stopReadLockProcessingphp(php$lockDirectoryphp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php waitphp php1php microsecond
php php php php php php php php php php php php usleepphp(php1php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Restorephp lockphp state
php php php php php php php php php$lockphp-php>lockphp(LOCKphp_SHphp)php;

php php php php php php php php selfphp:php:php_stopReadLockProcessingphp(php$lockDirectoryphp)php;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dephp-escalatephp Readphp lockphp tophp sharedphp level
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php/
php php php php publicphp staticphp functionphp deEscalateReadLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:READphp_LOCKphp_FILEphp)php;
php php php php php php php php php$lockphp-php>lockphp(LOCKphp_SHphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Obtainphp exclusivephp optimizationphp lockphp onphp thephp index
php php php php php php*
php php php php php php*php Returnsphp lockphp objectphp onphp successphp andphp falsephp otherwisephp php(doesnphp'tphp blockphp executionphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp staticphp functionphp obtainOptimizationLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>createFilephp(selfphp:php:OPTIMIZATIONphp_LOCKphp_FILEphp)php;
php php php php php php php php ifphp php(php!php$lockphp-php>lockphp(LOCKphp_EXphp,php truephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$lockphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Releasephp exclusivephp optimizationphp lock
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectory
php php php php php php*php/
php php php php publicphp staticphp functionphp releaseOptimizationLockphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$lockDirectoryphp)
php php php php php{
php php php php php php php php php$lockphp php=php php$lockDirectoryphp-php>getFileObjectphp(selfphp:php:OPTIMIZATIONphp_LOCKphp_FILEphp)php;
php php php php php php php php php$lockphp-php>unlockphp(php)php;
php php php php php}

php}
