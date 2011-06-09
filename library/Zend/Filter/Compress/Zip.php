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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Zipphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressAbstract
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressAbstractphp.phpphp'php;

php/php*php*
php php*php Compressionphp adapterphp forphp zip
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp_Zipphp extendsphp Zendphp_Filterphp_Compressphp_CompressAbstract
php{
php php php php php/php*php*
php php php php php php*php Compressionphp Options
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'archivephp'php php php=php>php Archivephp tophp use
php php php php php php*php php php php php php'passwordphp'php php=php>php Passwordphp tophp use
php php php php php php*php php php php php php'targetphp'php php php php=php>php Targetphp tophp writephp thephp filesphp to
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'archivephp'php php=php>php nullphp,
php php php php php php php php php'targetphp'php php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'zipphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp zipphp extensionphp'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp archive
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getArchivephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'archivephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp archivephp tophp usephp forphp dephp-php/compression
php php php php php php*
php php php php php php*php php@paramphp stringphp php$archivephp Archivephp tophp use
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Rar
php php php php php php*php/
php php php php publicphp functionphp setArchivephp(php$archivephp)
php php php php php{
php php php php php php php php php$archivephp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php php$archivephp)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'archivephp'php]php php=php php(stringphp)php php$archivephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp targetpath
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTargetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'targetphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp targetphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$target
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Rar
php php php php php php*php/
php php php php publicphp functionphp setTargetphp(php$targetphp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(dirnamephp(php$targetphp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Thephp directoryphp php'php$targetphp'php doesphp notphp existphp"php)php;
php php php php php php php php php}

php php php php php php php php php$targetphp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php php$targetphp)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'targetphp'php]php php=php php(stringphp)php php$targetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Compressesphp thephp givenphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp stringphp Compressedphp archive
php php php php php php*php/
php php php php publicphp functionphp compressphp(php$contentphp)
php php php php php{
php php php php php php php php php$zipphp php=php newphp ZipArchivephp(php)php;
php php php php php php php php php$resphp php=php php$zipphp-php>openphp(php$thisphp-php>getArchivephp(php)php,php ZipArchivephp:php:CREATEphp php|php ZipArchivephp:php:OVERWRITEphp)php;

php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$contentphp php php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php realpathphp(php$contentphp)php)php;
php php php php php php php php php php php php php$basenamephp php=php substrphp(php$contentphp,php strrposphp(php$contentphp,php DIRECTORYphp_SEPARATORphp)php php+php php1php)php;
php php php php php php php php php php php php ifphp php(isphp_dirphp(php$contentphp)php)php php{
php php php php php php php php php php php php php php php php php$indexphp php php php php=php strrposphp(php$contentphp,php DIRECTORYphp_SEPARATORphp)php php+php php1php;
php php php php php php php php php php php php php php php php php$contentphp php.php=php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php php php php php php php php php$stackphp php php php php=php arrayphp(php$contentphp)php;
php php php php php php php php php php php php php php php php whilephp php(php!emptyphp(php$stackphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$currentphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php php php php php$filesphp php php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php php$dirphp php=php dirphp(php$currentphp)php;
php php php php php php php php php php php php php php php php php php php php whilephp php(falsephp php!php=php=php php(php$nodephp php=php php$dirphp-php>readphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$nodephp php=php=php php'php.php'php)php php|php|php php(php$nodephp php=php=php php'php.php.php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_dirphp(php$currentphp php.php php$nodephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$stackphp,php php$currentphp php.php php$nodephp php.php DIRECTORYphp_SEPARATORphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_filephp(php$currentphp php.php php$nodephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$filesphp[php]php php=php php$nodephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$localphp php=php substrphp(php$currentphp,php php$indexphp)php;
php php php php php php php php php php php php php php php php php php php php php$zipphp-php>addEmptyDirphp(substrphp(php$localphp,php php0php,php php-php1php)php)php;

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$filesphp asphp php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$zipphp-php>addFilephp(php$currentphp php.php php$filephp,php php$localphp php.php php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resphp php=php php$zipphp-php>addFilephp(php$contentphp,php php$basenamephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$filephp php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php php php php php ifphp php(php!isphp_dirphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php$filephp php=php basenamephp(php$filephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$filephp php=php php"zipphp.tmpphp"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resphp php=php php$zipphp-php>addFromStringphp(php$filephp,php php$contentphp)php;
php php php php php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$zipphp-php>closephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'archivephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decompressesphp thephp givenphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp decompressphp(php$contentphp)
php php php php php{
php php php php php php php php php$archivephp php=php php$thisphp-php>getArchivephp(php)php;
php php php php php php php php ifphp php(filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$archivephp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php realpathphp(php$contentphp)php)php;
php php php php php php php php php}php elseifphp php(emptyphp(php$archivephp)php php|php|php php!filephp_existsphp(php$archivephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'ZIPphp Archivephp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php php$zipphp php=php newphp ZipArchivephp(php)php;
php php php php php php php php php$resphp php=php php$zipphp-php>openphp(php$archivephp)php;

php php php php php php php php php$targetphp php=php php$thisphp-php>getTargetphp(php)php;

php php php php php php php php ifphp php(php!emptyphp(php$targetphp)php php&php&php php!isphp_dirphp(php$targetphp)php)php php{
php php php php php php php php php php php php php$targetphp php=php dirnamephp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$targetphp)php)php php{
php php php php php php php php php php php php php$targetphp php=php rtrimphp(php$targetphp,php php'php/php\php\php'php)php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$targetphp)php php|php|php php!isphp_dirphp(php$targetphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Nophp targetphp forphp ZIPphp decompressionphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php2php.php8php'php,php php'<php'php)php)php php{
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$zipphp-php>numFilesphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$statIndexphp php=php php$zipphp-php>statIndexphp(php$iphp)php;
php php php php php php php php php php php php php php php php php$currNamephp php=php php$statIndexphp[php'namephp'php]php;
php php php php php php php php php php php php php php php php ifphp php(php(php$currNamephp{php0php}php php=php=php php'php/php'php)php php|php|
php php php php php php php php php php php php php php php php php php php php php(substrphp(php$currNamephp,php php0php,php php2php)php php=php=php php'php.php.php'php)php php|php|
php php php php php php php php php php php php php php php php php php php php php(substrphp(php$currNamephp,php php0php,php php4php)php php=php=php php'php.php/php.php.php'php)
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Upwardphp directoryphp traversalphp wasphp detectedphp insidephp php'php php.php php$archive
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php pleasephp usephp PHPphp php5php.php2php.php8php orphp greaterphp tophp takephp advantagephp ofphp pathphp resolutionphp featuresphp ofphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'thephp zipphp extensionphp inphp thisphp decompressphp(php)php methodphp.php'
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$resphp php=php php@php$zipphp-php>extractTophp(php$targetphp)php;
php php php php php php php php ifphp php(php$resphp php!php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php$thisphp-php>php_errorStringphp(php$resphp)php)php;
php php php php php php php php php}

php php php php php php php php php$zipphp-php>closephp(php)php;
php php php php php php php php returnphp php$targetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp properphp stringphp basedphp onphp thephp givenphp errorphp constant
php php php php php php*
php php php php php php*php php@paramphp stringphp php$error
php php php php php php*php/
php php php php protectedphp functionphp php_errorStringphp(php$errorphp)
php php php php php{
php php php php php php php php switchphp(php$errorphp)php php{
php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_MULTIDISKphp php:
php php php php php php php php php php php php php php php php returnphp php'Multidiskphp ZIPphp Archivesphp notphp supportedphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_RENAMEphp php:
php php php php php php php php php php php php php php php php returnphp php'Failedphp tophp renamephp thephp temporaryphp filephp forphp ZIPphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_CLOSEphp php:
php php php php php php php php php php php php php php php php returnphp php'Failedphp tophp closephp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_SEEKphp php:
php php php php php php php php php php php php php php php php returnphp php'Failurephp whilephp seekingphp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_READphp php:
php php php php php php php php php php php php php php php php returnphp php'Failurephp whilephp readingphp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_WRITEphp php:
php php php php php php php php php php php php php php php php returnphp php'Failurephp whilephp writingphp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_CRCphp php:
php php php php php php php php php php php php php php php php returnphp php'CRCphp failurephp withinphp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_ZIPCLOSEDphp php:
php php php php php php php php php php php php php php php php returnphp php'ZIPphp Archivephp alreadyphp closedphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_NOENTphp php:
php php php php php php php php php php php php php php php php returnphp php'Nophp suchphp filephp withinphp thephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_EXISTSphp php:
php php php php php php php php php php php php php php php php returnphp php'ZIPphp Archivephp alreadyphp existsphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_OPENphp php:
php php php php php php php php php php php php php php php php returnphp php'Canphp notphp openphp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_TMPOPENphp php:
php php php php php php php php php php php php php php php php returnphp php'Failurephp creatingphp temporaryphp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_ZLIBphp php:
php php php php php php php php php php php php php php php php returnphp php'ZLibphp Problemphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_MEMORYphp php:
php php php php php php php php php php php php php php php php returnphp php'Memoryphp allocationphp problemphp whilephp workingphp onphp aphp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_CHANGEDphp php:
php php php php php php php php php php php php php php php php returnphp php'ZIPphp Entryphp hasphp beenphp changedphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_COMPNOTSUPPphp php:
php php php php php php php php php php php php php php php php returnphp php'Compressionphp methodphp notphp supportedphp withinphp ZLibphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_EOFphp php:
php php php php php php php php php php php php php php php php returnphp php'Prematurephp EOFphp withinphp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_INVALphp php:
php php php php php php php php php php php php php php php php returnphp php'Invalidphp argumentphp forphp ZLIBphp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_NOZIPphp php:
php php php php php php php php php php php php php php php php returnphp php'Givenphp filephp isphp nophp zipphp archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_INTERNALphp php:
php php php php php php php php php php php php php php php php returnphp php'Internalphp errorphp whilephp workingphp onphp aphp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_INCONSphp php:
php php php php php php php php php php php php php php php php returnphp php'Inconsistentphp ZIPphp archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_REMOVEphp php:
php php php php php php php php php php php php php php php php returnphp php'Canphp notphp removephp ZIPphp Archivephp'php;

php php php php php php php php php php php php casephp ZipArchivephp:php:ERphp_DELETEDphp php:
php php php php php php php php php php php php php php php php returnphp php'ZIPphp Entryphp hasphp beenphp deletedphp'php;

php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php returnphp php'Unknownphp errorphp withinphp ZIPphp Archivephp'php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'Zipphp'php;
php php php php php}
php}
