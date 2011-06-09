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
php php*php php@versionphp php php php php$Idphp:php Gzphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressAbstract
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressAbstractphp.phpphp'php;

php/php*php*
php php*php Compressionphp adapterphp forphp Gzipphp php(ZLibphp)
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp_Gzphp extendsphp Zendphp_Filterphp_Compressphp_CompressAbstract
php{
php php php php php/php*php*
php php php php php php*php Compressionphp Options
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'levelphp'php php php php php=php>php Compressionphp levelphp php0php-php9
php php php php php php*php php php php php php'modephp'php php php php php php=php>php Compressionphp modephp,php canphp bephp php'compressphp'php,php php'deflatephp'
php php php php php php*php php php php php php'archivephp'php php php=php>php Archivephp tophp use
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'levelphp'php php php php=php>php php9php,
php php php php php php php php php'modephp'php php php php php=php>php php'compressphp'php,
php php php php php php php php php'archivephp'php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp|nullphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'zlibphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp zlibphp extensionphp'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp compressionphp level
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLevelphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'levelphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp compressionphp level
php php php php php php*
php php php php php php*php php@paramphp integerphp php$level
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Gz
php php php php php php*php/
php php php php publicphp functionphp setLevelphp(php$levelphp)
php php php php php{
php php php php php php php php ifphp php(php(php$levelphp <php php0php)php php|php|php php(php$levelphp php>php php9php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Levelphp mustphp bephp betweenphp php0php andphp php9php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'levelphp'php]php php=php php(intphp)php php$levelphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp compressionphp mode
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'modephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp compressionphp mode
php php php php php php*
php php php php php php*php php@paramphp stringphp php$modephp Supportedphp arephp php'compressphp'php,php php'deflatephp'php andphp php'filephp'
php php php php php php*php/
php php php php publicphp functionphp setModephp(php$modephp)
php php php php php{
php php php php php php php php ifphp php(php(php$modephp php!php=php php'compressphp'php)php php&php&php php(php$modephp php!php=php php'deflatephp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Givenphp compressionphp modephp notphp supportedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'modephp'php]php php=php php$modephp;
php php php php php php php php returnphp php$thisphp;
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
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Gz
php php php php php php*php/
php php php php publicphp functionphp setArchivephp(php$archivephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'archivephp'php]php php=php php(stringphp)php php$archivephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Compressesphp thephp givenphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp compressphp(php$contentphp)
php php php php php{
php php php php php php php php php$archivephp php=php php$thisphp-php>getArchivephp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$archivephp)php)php php{
php php php php php php php php php php php php php$filephp php=php gzopenphp(php$archivephp,php php'wphp'php php.php php$thisphp-php>getLevelphp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$filephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp openingphp thephp archivephp php'php"php php.php php$thisphp-php>php_optionsphp[php'archivephp'php]php php.php php"php'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php gzwritephp(php$filephp,php php$contentphp)php;
php php php php php php php php php php php php gzclosephp(php$filephp)php;
php php php php php php php php php php php php php$compressedphp php=php truephp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_optionsphp[php'modephp'php]php php=php=php php'deflatephp'php)php php{
php php php php php php php php php php php php php$compressedphp php=php gzdeflatephp(php$contentphp,php php$thisphp-php>getLevelphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$compressedphp php=php gzcompressphp(php$contentphp,php php$thisphp-php>getLevelphp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$compressedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp duringphp compressionphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$compressedphp;
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
php php php php php php php php php$modephp php php php php=php php$thisphp-php>getModephp(php)php;
php php php php php php php php ifphp php(filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$archivephp php=php php$contentphp;
php php php php php php php php php}

php php php php php php php php ifphp php(filephp_existsphp(php$archivephp)php)php php{
php php php php php php php php php php php php php$handlerphp php=php fopenphp(php$archivephp,php php"rbphp"php)php;
php php php php php php php php php php php php ifphp php(php!php$handlerphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp openingphp thephp archivephp php'php"php php.php php$archivephp php.php php"php'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php fseekphp(php$handlerphp,php php-php4php,php SEEKphp_ENDphp)php;
php php php php php php php php php php php php php$packetphp php=php freadphp(php$handlerphp,php php4php)php;
php php php php php php php php php php php php php$bytesphp php php=php unpackphp(php"Vphp"php,php php$packetphp)php;
php php php php php php php php php php php php php$sizephp php php php=php endphp(php$bytesphp)php;
php php php php php php php php php php php php fclosephp(php$handlerphp)php;

php php php php php php php php php php php php php$filephp php php php php php php php=php gzopenphp(php$archivephp,php php'rphp'php)php;
php php php php php php php php php php php php php$compressedphp php=php gzreadphp(php$filephp,php php$sizephp)php;
php php php php php php php php php php php php gzclosephp(php$filephp)php;
php php php php php php php php php}php elsephp ifphp php(php$modephp php=php=php php'deflatephp'php)php php{
php php php php php php php php php php php php php$compressedphp php=php gzinflatephp(php$contentphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$compressedphp php=php gzuncompressphp(php$contentphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$compressedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp duringphp compressionphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$compressedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'Gzphp'php;
php php php php php}
php}
