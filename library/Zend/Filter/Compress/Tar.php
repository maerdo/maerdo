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
php php*php php@versionphp php php php php$Idphp:php Tarphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressAbstract
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressAbstractphp.phpphp'php;

php/php*php*
php php*php Compressionphp adapterphp forphp Tar
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp_Tarphp extendsphp Zendphp_Filterphp_Compressphp_CompressAbstract
php{
php php php php php/php*php*
php php php php php php*php Compressionphp Options
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'archivephp'php php php=php>php Archivephp tophp use
php php php php php php*php php php php php php'targetphp'php php php php=php>php Targetphp tophp writephp thephp filesphp to
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'archivephp'php php php=php>php nullphp,
php php php php php php php php php'targetphp'php php php php=php>php php'php.php'php,
php php php php php php php php php'modephp'php php php php php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php'Archivephp_Tarphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php'Archivephp_Tarphp'php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp PEARsphp Archivephp_Tarphp'php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
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
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Tar
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
php php php php php php*php Setsphp thephp targetpathphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$target
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Tar
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
php php php php php php*php Returnsphp thephp setphp compressionphp mode
php php php php php php*php/
php php php php publicphp functionphp getModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'modephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Compressionphp modephp tophp use
php php php php php php*php Eighterphp Gzphp orphp Bzphp2
php php php php php php*
php php php php php php*php php@paramphp stringphp php$mode
php php php php php php*php/
php php php php publicphp functionphp setModephp(php$modephp)
php php php php php{
php php php php php php php php php$modephp php=php ucfirstphp(strtolowerphp(php$modephp)php)php;
php php php php php php php php ifphp php(php(php$modephp php!php=php php'Bzphp2php'php)php php&php&php php(php$modephp php!php=php php'Gzphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Thephp modephp php'php$modephp'php isphp unknownphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$modephp php=php=php php'Bzphp2php'php)php php&php&php php(php!extensionphp_loadedphp(php'bzphp2php'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp modephp needsphp thephp bzphp2php extensionphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$modephp php=php=php php'Gzphp'php)php php&php&php php(php!extensionphp_loadedphp(php'zlibphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp modephp needsphp thephp zlibphp extensionphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Compressesphp thephp givenphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp compressphp(php$contentphp)
php php php php php{
php php php php php php php php php$archivephp php=php newphp Archivephp_Tarphp(php$thisphp-php>getArchivephp(php)php,php php$thisphp-php>getModephp(php)php)php;
php php php php php php php php ifphp php(php!filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$filephp php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php php php php php ifphp php(isphp_dirphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php$filephp php.php=php DIRECTORYphp_SEPARATORphp php.php php"tarphp.tmpphp"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp php=php filephp_putphp_contentsphp(php$filephp,php php$contentphp)php;
php php php php php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp creatingphp thephp temporaryphp filephp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$contentphp php=php php$filephp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_dirphp(php$contentphp)php)php php{
php php php php php php php php php php php php php/php/php collectphp allphp filephp infos
php php php php php php php php php php php php foreachphp php(newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php php php php php php php php php php php php php newphp RecursiveDirectoryIteratorphp(php$contentphp,php RecursiveDirectoryIteratorphp:php:KEYphp_ASphp_PATHNAMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRST
php php php php php php php php php php php php php php php php php php php php php)php asphp php$directoryphp php=php>php php$info
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$infophp-php>isFilephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$filephp[php]php php=php php$directoryphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$contentphp php=php php$filephp;
php php php php php php php php php}

php php php php php php php php php$resultphp php php=php php$archivephp-php>createphp(php$contentphp)php;
php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp creatingphp thephp Tarphp archivephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getArchivephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decompressesphp thephp givenphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp decompressphp(php$contentphp)
php php php php php{
php php php php php php php php php$archivephp php=php php$thisphp-php>getArchivephp(php)php;
php php php php php php php php ifphp php(filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$archivephp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php realpathphp(php$contentphp)php)php;
php php php php php php php php php}php elseifphp php(emptyphp(php$archivephp)php php|php|php php!filephp_existsphp(php$archivephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Tarphp Archivephp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php php$archivephp php=php newphp Archivephp_Tarphp(php$archivephp,php php$thisphp-php>getModephp(php)php)php;
php php php php php php php php php$targetphp php php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php ifphp php(php!isphp_dirphp(php$targetphp)php)php php{
php php php php php php php php php php php php php$targetphp php=php dirnamephp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$archivephp-php>extractphp(php$targetphp)php;
php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp whilephp extractingphp thephp Tarphp archivephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'Tarphp'php;
php php php php php}
php}
