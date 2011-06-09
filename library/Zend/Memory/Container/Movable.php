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
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Movablephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Memoryphp_Containerphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Containerphp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_Valuephp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Valuephp.phpphp'php;

php/php*php*
php php*php Memoryphp valuephp container
php php*
php php*php Movablephp php(mayphp bephp swappedphp withphp specifiedphp backendphp andphp unloadedphp)php.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Memoryphp_Containerphp_Movablephp extendsphp Zendphp_Memoryphp_Containerphp php{
php php php php php/php*php*
php php php php php php*php Internalphp objectphp Id
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_idphp;

php php php php php/php*php*
php php php php php php*php Memoryphp managerphp reference
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Manager
php php php php php php*php/
php php php php privatephp php$php_memManagerphp;

php php php php php/php*php*
php php php php php php*php Valuephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Value
php php php php php php*php/
php php php php privatephp php$php_valuephp;

php php php php php/php*php*php Valuephp statesphp php*php/
php php php php constphp LOADEDphp php php php=php php1php;
php php php php constphp SWAPPEDphp php php=php php2php;
php php php php constphp LOCKEDphp php php php=php php4php;

php php php php php/php*php*
php php php php php php*php Valuephp statephp php(LOADEDphp/SWAPPEDphp/LOCKEDphp)
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_statephp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Memoryphp_Managerphp php$memoryManager
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Memoryphp_Managerphp php$memoryManagerphp,php php$idphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_memManagerphp php=php php$memoryManagerphp;
php php php php php php php php php$thisphp-php>php_idphp php php php php=php php$idphp;
php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:LOADEDphp;
php php php php php php php php php$thisphp-php>php_valuephp php=php newphp Zendphp_Memoryphp_Valuephp(php$valuephp,php php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lockphp objectphp inphp memoryphp.
php php php php php php*php/
php php php php publicphp functionphp lockphp(php)
php php php php php{
php php php php php php php php ifphp php(php php!php(php$thisphp-php>php_statephp php&php selfphp:php:LOADEDphp)php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_memManagerphp-php>loadphp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOADEDphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOCKEDphp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todo
php php php php php php php php php php*php Itphp'sphp possiblephp tophp setphp php"valuephp"php containerphp attributephp tophp avoidphp modificationphp tracingphp,php whilephp itphp'sphp locked
php php php php php php php php php php*php Checkphp,php ifphp itphp'sphp php morephp effective
php php php php php php php php php php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Unlockphp object
php php php php php php*php/
php php php php publicphp functionphp unlockphp(php)
php php php php php{
php php php php php php php php php/php/php Clearphp LOCKEDphp statephp bit
php php php php php php php php php$thisphp-php>php_statephp php&php=php php~selfphp:php:LOCKEDphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp objectphp isphp locked
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isLockedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_statephp php&php selfphp:php:LOCKEDphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php Loadsphp objectphp ifphp necessaryphp andphp movesphp itphp tophp thephp topphp ofphp loadedphp objectsphp listphp.
php php php php php php*php Swapsphp objectsphp fromphp thephp bottomphp ofphp loadedphp objectsphp listphp,php ifphp necessaryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Memoryphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php ifphp php(php$propertyphp php!php=php php'valuephp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Memoryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Memoryphp_Exceptionphp(php'Unknownphp propertyphp:php Zendphp_Memoryphp_containerphp:php:php$php'php php.php php$propertyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php php!php(php$thisphp-php>php_statephp php&php selfphp:php:LOADEDphp)php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_memManagerphp-php>loadphp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOADEDphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$propertyphp php!php=php php'valuephp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Memoryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Memoryphp_Exceptionphp(php'Unknownphp propertyphp:php Zendphp_Memoryphp_containerphp:php:php$php'php php.php php$propertyphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:LOADEDphp;
php php php php php php php php php$thisphp-php>php_valuephp php=php newphp Zendphp_Memoryphp_Valuephp(php$valuephp,php php$thisphp)php;

php php php php php php php php php$thisphp-php>php_memManagerphp-php>processUpdatephp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp stringphp valuephp reference
php php php php php php*
php php php php php php*php php_Mustphp_php bephp usedphp forphp valuephp accessphp beforephp PHPphp vphp php5php.php2
php php php php php php*php orphp php_mayphp_php bephp usedphp forphp performancephp considerations
php php php php php php*
php php php php php php*php php@returnphp php&string
php php php php php php*php/
php php php php publicphp functionphp php&getRefphp(php)
php php php php php{
php php php php php php php php ifphp php(php php!php(php$thisphp-php>php_statephp php&php selfphp:php:LOADEDphp)php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_memManagerphp-php>loadphp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOADEDphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_valuephp-php>getRefphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Signalphp,php thatphp valuephp isphp updatedphp byphp externalphp codephp.
php php php php php php*
php php php php php php*php Shouldphp bephp usedphp togetherphp withphp getRefphp(php)
php php php php php php*php/
php php php php publicphp functionphp touchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_memManagerphp-php>processUpdatephp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp containerphp valuephp updatephp.
php php php php php php*php Mustphp bephp calledphp onlyphp byphp valuephp object
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp processUpdatephp(php)
php php php php php{
php php php php php php php php php/php/php Clearphp SWAPPEDphp statephp bit
php php php php php php php php php$thisphp-php>php_statephp php&php=php php~selfphp:php:SWAPPEDphp;

php php php php php php php php php$thisphp-php>php_memManagerphp-php>processUpdatephp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp modificationsphp trace
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp startTracephp(php)
php php php php php{
php php php php php php php php ifphp php(php php!php(php$thisphp-php>php_statephp php&php selfphp:php:LOADEDphp)php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_memManagerphp-php>loadphp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOADEDphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuephp-php>startTracephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp valuephp php(usedphp byphp memoryphp managerphp whenphp valuephp isphp loadedphp)
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php newphp Zendphp_Memoryphp_Valuephp(php$valuephp,php php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp valuephp php(usedphp byphp memoryphp managerphp whenphp valuephp isphp swappedphp)
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp unloadValuephp(php)
php php php php php{
php php php php php php php php php/php/php Clearphp LOADEDphp statephp bit
php php php php php php php php php$thisphp-php>php_statephp php&php=php php~selfphp:php:LOADEDphp;

php php php php php php php php php$thisphp-php>php_valuephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp,php thatphp objectphp isphp swapped
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp markAsSwappedphp(php)
php php php php php{
php php php php php php php php php/php/php Clearphp LOADEDphp statephp bit
php php php php php php php php php$thisphp-php>php_statephp php|php=php selfphp:php:LOADEDphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp objectphp isphp markedphp asphp swapped
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSwappedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_statephp php&php selfphp:php:SWAPPEDphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp objectphp id
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_idphp;
php php php php php}
php php php php php/php*php*
php php php php php php*php Destroyphp memoryphp containerphp andphp removephp itphp fromphp memoryphp managerphp list
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp destroyphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Wephp donphp'tphp cleanphp upphp swapphp becausephp ofphp performancephp considerations
php php php php php php php php php php*php Cleaningphp isphp performedphp byphp Memoryphp Managerphp destructor
php php php php php php php php php php*php/

php php php php php php php php php$thisphp-php>php_memManagerphp-php>unlinkphp(php$thisphp,php php$thisphp-php>php_idphp)php;
php php php php php}
php}
