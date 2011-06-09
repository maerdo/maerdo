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
php php*php php@versionphp php php php php$Idphp:php VoiceButlerAbstractphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/ResponseAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_VoiceButlerphp_VoiceButlerAbstract
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php{
php php php php php/php*php*
php php php php php php*php thephp returnphp fromphp thephp smsphp request
php php php php php php*
php php php php php php*php php@varphp stdClass
php php php php php php*php/
php php php php publicphp php$returnphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php returnsphp thephp returnphp object
php php php php php php*
php php php php php php*php php@returnphp stdClass
php php php php php php*php/
php php php php publicphp functionphp getReturnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php parsephp thephp responsephp dataphp andphp throwsphp exceptions
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasErrorphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_Exceptionphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getErrorMessagephp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>getErrorCodephp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp errorphp code
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getErrorCodephp(php)
php php php php php{
php php php php php php php php php$retValuephp php=php nullphp;
php php php php php php php php ifphp php(php$thisphp-php>returnphp instanceofphp stdClassphp)php php{
php php php php php php php php php php php php php$retValuephp php=php php$thisphp-php>returnphp-php>statusphp;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp errorphp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorMessagephp(php)
php php php php php{
php php php php php php php php php$retValuephp php=php nullphp;
php php php php php php php php ifphp php(php$thisphp-php>returnphp instanceofphp stdClassphp)php php{
php php php php php php php php php php php php php$retValuephp php=php php$thisphp-php>returnphp-php>errphp_msgphp;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp truephp ifphp thephp errorCodephp isphp notphp nullphp andphp notphp php0php0php0php0
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>returnphp php=php=php=php null
php php php php php php php php php php php php php php php php php|php|php php$thisphp-php>returnphp-php>statusphp php=php=php php'php0php0php0php0php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp truephp ifphp wephp havephp aphp errorphp situation
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasErrorphp(php)
php php php php php{
php php php php php php php php php$retValuephp php=php falsephp;
php php php php php php php php ifphp php(php$thisphp-php>returnphp instanceofphp stdClass
php php php php php php php php php php php php php&php&php php$thisphp-php>returnphp-php>statusphp php!php=php php'php0php0php0php0php'
php php php php php php php php php)php php{
php php php php php php php php php php php php php$retValuephp php=php truephp;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}
php}
