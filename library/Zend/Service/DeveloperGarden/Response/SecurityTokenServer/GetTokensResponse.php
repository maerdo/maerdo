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
php php*php php@versionphp php php php php$Idphp:php GetTokensResponsephp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/ResponseAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SecurityTokenServerphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_GetTokensResponse
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php php php php implementsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interface
php{
php php php php php/php*php*
php php php php php php*php thephp securityphp token
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponse
php php php php php php*php/
php php php php publicphp php$securityTokenphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php returnsphp thephp securityphp token
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getSecurityTokenphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp securityphp token
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSecurityTokenphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>securityTokenphp instanceofphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SecurityTokenServerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Nophp validphp securityTokenphp foundphp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>securityTokenphp-php>getTokenDataphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp truephp ifphp thephp storedphp tokenphp dataphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp implementphp thephp truephp tokenphp validationphp check
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>securityTokenphp)
php php php php php php php php php php php php php&php&php php!emptyphp(php$thisphp-php>securityTokenphp-php>tokenDataphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}
php}
