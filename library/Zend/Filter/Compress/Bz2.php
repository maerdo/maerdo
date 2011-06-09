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
php php*php php@versionphp php php php php$Idphp:php Bzphp2php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressAbstract
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressAbstractphp.phpphp'php;

php/php*php*
php php*php Compressionphp adapterphp forphp Bzphp2
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp_Bzphp2php extendsphp Zendphp_Filterphp_Compressphp_CompressAbstract
php{
php php php php php/php*php*
php php php php php php*php Compressionphp Options
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'blocksizephp'php php=php>php Blocksizephp tophp usephp fromphp php0php-php9
php php php php php php*php php php php php php'archivephp'php php php php=php>php Archivephp tophp use
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'blocksizephp'php php=php>php php4php,
php php php php php php php php php'archivephp'php php php php=php>php nullphp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'bzphp2php'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp bzphp2php extensionphp'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp blocksize
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getBlocksizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'blocksizephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp blocksize
php php php php php php*
php php php php php php*php php@paramphp integerphp php$level
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Bzphp2
php php php php php php*php/
php php php php publicphp functionphp setBlocksizephp(php$blocksizephp)
php php php php php{
php php php php php php php php ifphp php(php(php$blocksizephp <php php0php)php php|php|php php(php$blocksizephp php>php php9php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Blocksizephp mustphp bephp betweenphp php0php andphp php9php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'blocksizephp'php]php php=php php(intphp)php php$blocksizephp;
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
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Bzphp2
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
php php php php php php php php php php php php php$filephp php=php bzopenphp(php$archivephp,php php'wphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$filephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp openingphp thephp archivephp php'php"php php.php php$archivephp php.php php"php'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php bzwritephp(php$filephp,php php$contentphp)php;
php php php php php php php php php php php php bzclosephp(php$filephp)php;
php php php php php php php php php php php php php$compressedphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$compressedphp php=php bzcompressphp(php$contentphp,php php$thisphp-php>getBlocksizephp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_intphp(php$compressedphp)php)php php{
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
php php php php php php php php ifphp php(filephp_existsphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$archivephp php=php php$contentphp;
php php php php php php php php php}

php php php php php php php php ifphp php(filephp_existsphp(php$archivephp)php)php php{
php php php php php php php php php php php php php$filephp php=php bzopenphp(php$archivephp,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$filephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp openingphp thephp archivephp php'php"php php.php php$contentphp php.php php"php'php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$compressedphp php=php bzreadphp(php$filephp)php;
php php php php php php php php php php php php bzclosephp(php$filephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$compressedphp php=php bzdecompressphp(php$contentphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_intphp(php$compressedphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp duringphp decompressionphp'php)php;
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
php php php php php php php php returnphp php'Bzphp2php'php;
php php php php php}
php}
