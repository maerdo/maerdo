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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Uploadphp.phpphp php2php3php5php7php0php php2php0php1php0php-php1php2php-php2php0php php0php8php:php3php8php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp maximumphp sizephp ofphp aphp filephp upphp tophp aphp maxphp ofphp php2GB
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Uploadphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*php@php#php+
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp INIphp_SIZEphp php php php php php php php=php php'fileUploadErrorIniSizephp'php;
php php php php constphp FORMphp_SIZEphp php php php php php php=php php'fileUploadErrorFormSizephp'php;
php php php php constphp PARTIALphp php php php php php php php php=php php'fileUploadErrorPartialphp'php;
php php php php constphp NOphp_FILEphp php php php php php php php php=php php'fileUploadErrorNoFilephp'php;
php php php php constphp NOphp_TMPphp_DIRphp php php php php php=php php'fileUploadErrorNoTmpDirphp'php;
php php php php constphp CANTphp_WRITEphp php php php php php=php php'fileUploadErrorCantWritephp'php;
php php php php constphp EXTENSIONphp php php php php php php=php php'fileUploadErrorExtensionphp'php;
php php php php constphp ATTACKphp php php php php php php php php php=php php'fileUploadErrorAttackphp'php;
php php php php constphp FILEphp_NOTphp_FOUNDphp php=php php'fileUploadErrorFileNotFoundphp'php;
php php php php constphp UNKNOWNphp php php php php php php php php=php php'fileUploadErrorUnknownphp'php;
php php php php php/php*php*php@php#php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INIphp_SIZEphp php php php php php php php=php>php php"Filephp php'php%valuephp%php'php exceedsphp thephp definedphp iniphp sizephp"php,
php php php php php php php php selfphp:php:FORMphp_SIZEphp php php php php php php=php>php php"Filephp php'php%valuephp%php'php exceedsphp thephp definedphp formphp sizephp"php,
php php php php php php php php selfphp:php:PARTIALphp php php php php php php php php=php>php php"Filephp php'php%valuephp%php'php wasphp onlyphp partiallyphp uploadedphp"php,
php php php php php php php php selfphp:php:NOphp_FILEphp php php php php php php php php=php>php php"Filephp php'php%valuephp%php'php wasphp notphp uploadedphp"php,
php php php php php php php php selfphp:php:NOphp_TMPphp_DIRphp php php php php php=php>php php"Nophp temporaryphp directoryphp wasphp foundphp forphp filephp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:CANTphp_WRITEphp php php php php php=php>php php"Filephp php'php%valuephp%php'php canphp'tphp bephp writtenphp"php,
php php php php php php php php selfphp:php:EXTENSIONphp php php php php php php=php>php php"Aphp PHPphp extensionphp returnedphp anphp errorphp whilephp uploadingphp thephp filephp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:ATTACKphp php php php php php php php php php=php>php php"Filephp php'php%valuephp%php'php wasphp illegallyphp uploadedphp.php Thisphp couldphp bephp aphp possiblephp attackphp"php,
php php php php php php php php selfphp:php:FILEphp_NOTphp_FOUNDphp php=php>php php"Filephp php'php%valuephp%php'php wasphp notphp foundphp"php,
php php php php php php php php selfphp:php:UNKNOWNphp php php php php php php php php=php>php php"Unknownphp errorphp whilephp uploadingphp filephp php'php%valuephp%php'php"
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp arrayphp ofphp files
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_filesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Thephp arrayphp php$filesphp mustphp bephp givenphp inphp syntaxphp ofphp Zendphp_Filephp_Transferphp tophp bephp checked
php php php php php php*php Ifphp nophp filesphp arephp givenphp thephp php$php_FILESphp arrayphp willphp bephp usedphp automaticallyphp.
php php php php php php*php NOTEphp:php Thisphp validatorphp willphp onlyphp workphp withphp HTTPphp POSTphp uploadsphp!
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$filesphp Arrayphp ofphp filesphp inphp syntaxphp ofphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$filesphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$filesphp php=php php$filesphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFilesphp(php$filesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp arrayphp ofphp setphp files
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filesphp php(Optionalphp)php Thephp filephp tophp returnphp inphp detail
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Ifphp filephp isphp notphp found
php php php php php php*php/
php php php php publicphp functionphp getFilesphp(php$filephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$filephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$namephp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php=php php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php$filephp]php php=php php$thisphp-php>php_filesphp[php$namephp]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$contentphp[php'namephp'php]php php=php=php=php php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php$namephp]php php=php php$thisphp-php>php_filesphp[php$namephp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$returnphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp filephp php'php$filephp'php wasphp notphp foundphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_filesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp filesphp tophp bephp checked
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$filesphp Thephp filesphp tophp checkphp inphp syntaxphp ofphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Uploadphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFilesphp(php$filesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$filesphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_filesphp php=php php$php_FILESphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_filesphp php=php php$filesphp;
php php php php php php php php php}

php php php php php php php php php/php/php seephp ZFphp-php1php0php7php3php8
php php php php php php php php ifphp php(isphp_nullphp(php$thisphp-php>php_filesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$thisphp-php>php_filesphp asphp php$filephp php=php>php php$contentphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$contentphp[php'errorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_filesphp[php$filephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp filephp wasphp uploadedphp withoutphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Singlephp filephp tophp checkphp forphp uploadphp errorsphp,php whenphp givingphp nullphp thephp php$php_FILESphp array
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php fromphp initializationphp willphp bephp used
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messagesphp php=php nullphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$valuephp,php php$thisphp-php>php_filesphp)php)php php{
php php php php php php php php php php php php php$filesphp[php$valuephp]php php=php php$thisphp-php>php_filesphp[php$valuephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$filephp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$contentphp[php'namephp'php]php)php php&php&php php(php$contentphp[php'namephp'php]php php=php=php=php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$filesphp[php$filephp]php php=php php$thisphp-php>php_filesphp[php$filephp]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(issetphp(php$contentphp[php'tmpphp_namephp'php]php)php php&php&php php(php$contentphp[php'tmpphp_namephp'php]php php=php=php=php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$filesphp[php$filephp]php php=php php$thisphp-php>php_filesphp[php$filephp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FILEphp_NOTphp_FOUNDphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$filesphp asphp php$filephp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp;
php php php php php php php php php php php php switchphp(php$contentphp[php'errorphp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_uploadedphp_filephp(php$contentphp[php'tmpphp_namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:ATTACKphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:INIphp_SIZEphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FORMphp_SIZEphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:PARTIALphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php4php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOphp_FILEphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php6php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOphp_TMPphp_DIRphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php7php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:CANTphp_WRITEphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php8php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:EXTENSIONphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:UNKNOWNphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_messagesphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp errorphp ofphp thephp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@paramphp php stringphp php$errorType
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php protectedphp functionphp php_throwphp(php$filephp,php php$errorTypephp)
php php php php php{
php php php php php php php php ifphp php(php$filephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$filephp)php andphp php!emptyphp(php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
