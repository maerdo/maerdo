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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Versionphp.phpphp php2php2php7php6php3php php2php0php1php0php-php0php8php-php0php2php php0php2php:php5php9php:php3php6Zphp ramonphp php$
php php*php/

requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*
php php*php Versionphp Provider
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Version
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp,php Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php constphp MODEphp_MAJORphp php=php php'majorphp'php;
php php php php constphp MODEphp_MINORphp php=php php'minorphp'php;
php php php php constphp MODEphp_MINIphp php php=php php'miniphp'php;

php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'MajorPartphp'php,php php'MinorPartphp'php,php php'MiniPartphp'php)php;

php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Showphp Action
php php php php php php*
php php php php php php*php php@paramphp stringphp php$modephp Thephp modephp switchphp canphp bephp onephp ofphp:php majorphp,php minorphp,php orphp miniphp php(defaultphp)
php php php php php php*php php@paramphp boolphp php$nameIncluded
php php php php php php*php/
php php php php publicphp functionphp showphp(php$modephp php=php selfphp:php:MODEphp_MINIphp,php php$nameIncludedphp php=php truephp)
php php php php php{

php php php php php php php php php$versionInfophp php=php php$thisphp-php>php_splitVersionphp(php)php;

php php php php php php php php switchphp(php$modephp)php php{
php php php php php php php php php php php php casephp selfphp:php:MODEphp_MINORphp:
php php php php php php php php php php php php php php php php unsetphp(php$versionInfophp[php'miniphp'php]php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:MODEphp_MAJORphp:
php php php php php php php php php php php php php php php php unsetphp(php$versionInfophp[php'miniphp'php]php,php php$versionInfophp[php'minorphp'php]php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$outputphp php=php implodephp(php'php.php'php,php php$versionInfophp)php;

php php php php php php php php ifphp php(php$nameIncludedphp)php php{
php php php php php php php php php php php php php$outputphp php=php php'Zendphp Frameworkphp Versionphp:php php'php php.php php$outputphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_registryphp-php>responsephp-php>appendContentphp(php$outputphp)php;
php php php php php}

php php php php publicphp functionphp showMajorPartphp(php$nameIncludedphp php=php truephp)
php php php php php{
php php php php php php php php php$versionNumbersphp php=php php$thisphp-php>php_splitVersionphp(php)php;
php php php php php php php php php$outputphp php=php php(php(php$nameIncludedphp php=php=php truephp)php php?php php'ZFphp Majorphp Versionphp:php php'php php:php nullphp)php php.php php$versionNumbersphp[php'majorphp'php]php;
php php php php php php php php php$thisphp-php>php_registryphp-php>responsephp-php>appendContentphp(php$outputphp)php;
php php php php php}

php php php php publicphp functionphp showMinorPartphp(php$nameIncludedphp php=php truephp)
php php php php php{
php php php php php php php php php$versionNumbersphp php=php php$thisphp-php>php_splitVersionphp(php)php;
php php php php php php php php php$outputphp php=php php(php(php$nameIncludedphp php=php=php truephp)php php?php php'ZFphp Minorphp Versionphp:php php'php php:php nullphp)php php.php php$versionNumbersphp[php'minorphp'php]php;
php php php php php php php php php$thisphp-php>php_registryphp-php>responsephp-php>appendContentphp(php$outputphp)php;
php php php php php}

php php php php publicphp functionphp showMiniPartphp(php$nameIncludedphp php=php truephp)
php php php php php{
php php php php php php php php php$versionNumbersphp php=php php$thisphp-php>php_splitVersionphp(php)php;
php php php php php php php php php$outputphp php=php php(php(php$nameIncludedphp php=php=php truephp)php php?php php'ZFphp Miniphp Versionphp:php php'php php:php nullphp)php php php.php php$versionNumbersphp[php'miniphp'php]php;
php php php php php php php php php$thisphp-php>php_registryphp-php>responsephp-php>appendContentphp(php$outputphp)php;
php php php php php}

php php php php protectedphp functionphp php_splitVersionphp(php)
php php php php php{
php php php php php php php php listphp(php$majorphp,php php$minorphp,php php$miniphp)php php=php explodephp(php'php.php'php,php Zendphp_Versionphp:php:VERSIONphp)php;
php php php php php php php php returnphp arrayphp(php'majorphp'php php=php>php php$majorphp,php php'minorphp'php php=php>php php$minorphp,php php'miniphp'php php=php>php php$miniphp)php;
php php php php php}

php}
