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
php php*php php@versionphp php php php php$Idphp:php Rarphp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressAbstract
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressAbstractphp.phpphp'php;

php/php*php*
php php*php Compressionphp adapterphp forphp Rar
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp_Rarphp extendsphp Zendphp_Filterphp_Compressphp_CompressAbstract
php{
php php php php php/php*php*
php php php php php php*php Compressionphp Options
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'callbackphp'php php=php>php Callbackphp forphp compression
php php php php php php*php php php php php php'archivephp'php php php=php>php Archivephp tophp use
php php php php php php*php php php php php php'passwordphp'php php=php>php Passwordphp tophp use
php php php php php php*php php php php php php'targetphp'php php php php=php>php Targetphp tophp writephp thephp filesphp to
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'callbackphp'php php=php>php nullphp,
php php php php php php php php php'archivephp'php php php=php>php nullphp,
php php php php php php php php php'passwordphp'php php=php>php nullphp,
php php php php php php php php php'targetphp'php php php php=php>php php'php.php'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'rarphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp rarphp extensionphp'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp callbackphp forphp compression
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'callbackphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp callbackphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$callback
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Rar
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Callbackphp canphp notphp bephp accessedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'callbackphp'php]php php=php php$callbackphp;
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
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Rar
php php php php php php*php/
php php php php publicphp functionphp setArchivephp(php$archivephp)
php php php php php{
php php php php php php php php php$archivephp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php php$archivephp)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'archivephp'php]php php=php php(stringphp)php php$archivephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp password
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPasswordphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'passwordphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp passwordphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$password
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Rar
php php php php php php*php/
php php php php publicphp functionphp setPasswordphp(php$passwordphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'passwordphp'php]php php=php php(stringphp)php php$passwordphp;
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
php php php php php php*php php@paramphp php stringphp|arrayphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp compressphp(php$contentphp)
php php php php php{
php php php php php php php php php$callbackphp php=php php$thisphp-php>getCallbackphp(php)php;
php php php php php php php php ifphp php(php$callbackphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Nophp compressionphp callbackphp availablephp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php unsetphp(php$optionsphp[php'callbackphp'php]php)php;

php php php php php php php php php$resultphp php=php callphp_userphp_funcphp(php$callbackphp,php php$optionsphp,php php$contentphp)php;
php php php php php php php php ifphp php(php$resultphp php!php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Errorphp compressingphp thephp RARphp Archivephp'php)php;
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
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'RARphp Archivephp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php php$passwordphp php=php php$thisphp-php>getPasswordphp(php)php;
php php php php php php php php ifphp php(php$passwordphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$archivephp php=php rarphp_openphp(php$archivephp,php php$passwordphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$archivephp php=php rarphp_openphp(php$archivephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$archivephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp openingphp thephp RARphp Archivephp"php)php;
php php php php php php php php php}

php php php php php php php php php$targetphp php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php ifphp php(php!isphp_dirphp(php$targetphp)php)php php{
php php php php php php php php php php php php php$targetphp php=php dirnamephp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php php$filelistphp php=php rarphp_listphp(php$archivephp)php;
php php php php php php php php ifphp php(php!php$filelistphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Errorphp readingphp thephp RARphp Archivephp"php)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$filelistphp asphp php$filephp)php php{
php php php php php php php php php php php php php$filephp-php>extractphp(php$targetphp)php;
php php php php php php php php php}

php php php php php php php php rarphp_closephp(php$archivephp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'Rarphp'php;
php php php php php}
php}
