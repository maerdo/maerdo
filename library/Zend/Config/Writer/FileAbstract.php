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
php php*php php@packagephp php php php Zendphp_Config
php php*php php@packagephp php php php Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php"Zendphp/Configphp/Writerphp.phpphp"php;

php/php*php*
php php*php Abstractphp Filephp Writer
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_package
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FileAbstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Configphp_Writerphp_FileAbstractphp extendsphp Zendphp_Configphp_Writer
php{
php php php php php/php*php*
php php php php php php*php Filenamephp tophp writephp to
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filenamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Wetherphp tophp exclusivelyphp lockphp thephp filephp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_exclusiveLockphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Setphp thephp targetphp filename
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@returnphp Zendphp_Configphp_Writerphp_Array
php php php php php php*php/
php php php php publicphp functionphp setFilenamephp(php$filenamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filenamephp php=php php$filenamephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp wetherphp tophp exclusivelyphp lockphp thephp filephp orphp not
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php php php php php$exclusiveLock
php php php php php php*php php@returnphp Zendphp_Configphp_Writerphp_Array
php php php php php php*php/
php php php php publicphp functionphp setExclusiveLockphp(php$exclusiveLockphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_exclusiveLockphp php=php php$exclusiveLockphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp configurationphp tophp filephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php php@paramphp boolphp php$exclusiveLock
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp writephp(php$filenamephp php=php nullphp,php Zendphp_Configphp php$configphp php=php nullphp,php php$exclusiveLockphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$filenamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setFilenamephp(php$filenamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$configphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$configphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$exclusiveLockphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setExclusiveLockphp(php$exclusiveLockphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_filenamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Nophp filenamephp wasphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_configphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Nophp configphp wasphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$configStringphp php=php php$thisphp-php>renderphp(php)php;

php php php php php php php php php$flagsphp php=php php0php;

php php php php php php php php ifphp php(php$thisphp-php>php_exclusiveLockphp)php php{
php php php php php php php php php php php php php$flagsphp php|php=php LOCKphp_EXphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php@filephp_putphp_contentsphp(php$thisphp-php>php_filenamephp,php php$configStringphp,php php$flagsphp)php;

php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Couldphp notphp writephp tophp filephp php"php'php php.php php$thisphp-php>php_filenamephp php.php php'php"php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp Zendphp_Configphp intophp aphp configphp filephp stringphp.
php php php php php php*
php php php php php php*php php@sincephp php1php.php1php0
php php php php php php*php php@todophp Forphp php2php.php0php thisphp shouldphp bephp redonephp intophp anphp abstractphp methodphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php returnphp php"php"php;
php php php php php}
php}