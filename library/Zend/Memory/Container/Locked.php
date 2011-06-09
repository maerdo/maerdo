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
php php*php php@versionphp php php php php$Idphp:php Lockedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Memoryphp_Containerphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Containerphp.phpphp'php;

php/php*php*
php php*php Memoryphp valuephp container
php php*
php php*php Lockedphp php(alwaysphp storedphp inphp memoryphp)php.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Memoryphp_Containerphp_Lockedphp extendsphp Zendphp_Memoryphp_Container
php{
php php php php php/php*php*
php php php php php php*php Valuephp object
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$valuephp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Memoryphp_Managerphp php$memoryManager
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>valuephp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lockphp objectphp inphp memoryphp.
php php php php php php*php/
php php php php publicphp functionphp lockphp(php)
php php php php php{
php php php php php php php php php/php*php Dophp nothingphp php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Unlockphp object
php php php php php php*php/
php php php php publicphp functionphp unlockphp(php)
php php php php php{
php php php php php php php php php/php*php Dophp nothingphp php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp objectphp isphp locked
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isLockedphp(php)
php php php php php{
php php php php php php php php returnphp truephp;
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
php php php php php php php php returnphp php$thisphp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Signalphp,php thatphp valuephp isphp updatedphp byphp externalphp codephp.
php php php php php php*
php php php php php php*php Shouldphp bephp usedphp togetherphp withphp getRefphp(php)
php php php php php php*php/
php php php php publicphp functionphp touchphp(php)
php php php php php{
php php php php php php php php php/php*php Dophp nothingphp php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp memoryphp containerphp andphp removephp itphp fromphp memoryphp managerphp list
php php php php php php*php/
php php php php publicphp functionphp destroyphp(php)
php php php php php{
php php php php php php php php php/php*php Dophp nothingphp php*php/
php php php php php}
php}
