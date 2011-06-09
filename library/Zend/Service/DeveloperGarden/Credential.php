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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Credentialphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Credential
php{
php php php php php/php*php*
php php php php php php*php Servicephp Authphp Username
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_usernamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Servicephp Password
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_passwordphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Servicephp Realmphp php-php defaultphp tphp-onlinephp.de
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_realmphp php=php php'tphp-onlinephp.dephp'php;

php php php php php/php*php*
php php php php php php*php constructorphp tophp initphp thephp internalphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$username
php php php php php php*php php@paramphp stringphp php$password
php php php php php php*php php@paramphp stringphp php$realm
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Credential
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$usernamephp php=php nullphp,php php$passwordphp php=php nullphp,php php$realmphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$usernamephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setUsernamephp(php$usernamephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$passwordphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPasswordphp(php$passwordphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$realmphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRealmphp(php$realmphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php splitphp thephp passwordphp intophp anphp array
php php php php php php*
php php php php php php*php php@paramphp stringphp php$password
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setPasswordphp(php$passwordphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$passwordphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Emptyphp passwordphp notphp permittedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$passwordphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Passwordphp mustphp bephp aphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_passwordphp php=php php$passwordphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp currentphp configuredphp password
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPasswordphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_passwordphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp thephp newphp login
php php php php php php*
php php php php php php*php php@paramphp stringphp php$username
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setUsernamephp(php$usernamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$usernamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Emptyphp usernamephp notphp permittedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$usernamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Usernamephp mustphp bephp aphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_usernamephp php=php php$usernamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp username
php php php php php php*
php php php php php php*php ifphp php$withRealmphp php=php=php truephp wephp combinephp usernamephp andphp realmphp like
php php php php php php*php usernamephp@realm
php php php php php php*
php php php php php php*php php@paramphp php$booleanphp withRealm
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getUsernamephp(php$withRealmphp php=php falsephp)
php php php php php{
php php php php php php php php php$retValuephp php=php php$thisphp-php>php_usernamephp;
php php php php php php php php ifphp php(php$withRealmphp)php php{
php php php php php php php php php php php php php$retValuephp php=php sprintfphp(
php php php php php php php php php php php php php php php php php'php%sphp@php%sphp'php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_usernamephp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_realm
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp thephp newphp realm
php php php php php php*
php php php php php php*php php@paramphp stringphp php$realm
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setRealmphp(php$realmphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$realmphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Emptyphp realmphp notphp permittedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$realmphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Realmphp mustphp bephp aphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_realmphp php=php php$realmphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp realm
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getRealmphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_realmphp;
php php php php php}
php}

