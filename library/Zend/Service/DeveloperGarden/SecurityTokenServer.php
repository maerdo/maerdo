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
php php*php php@versionphp php php php php$Idphp:php SecurityTokenServerphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cache
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/SecurityTokenServerphp/Cachephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/ClientAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponse
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SecurityTokenServerphp/SecurityTokenResponsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_GetTokensResponse
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SecurityTokenServerphp/GetTokensResponsephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServer
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php{
php php php php php/php*php*
php php php php php php*php wsdlphp file
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFilephp php=php php'httpsphp:php/php/stsphp.idmphp.telekomphp.comphp/TokenServicephp?wsdlphp'php;

php php php php php/php*php*
php php php php php php*php wsdlphp filephp local
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFileLocalphp php=php php'Wsdlphp/TokenServicephp.wsdlphp'php;

php php php php php/php*php*
php php php php php php*php Responsephp,php Requestphp Classmapping
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*
php php php php php php*php/
php php php php protectedphp php$php_classMapphp php=php arrayphp(
php php php php php php php php php'SecurityTokenResponsephp'php php=php>php php'Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponsephp'php,
php php php php php php php php php'getTokensResponsephp'php php php php php php=php>php php'Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_GetTokensResponsephp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php doesphp thephp loginphp andphp returnphp thephp specificphp response
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponse
php php php php php php*php/
php php php php publicphp functionphp getLoginTokenphp(php)
php php php php php{
php php php php php php php php php$tokenphp php=php Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cachephp:php:getTokenFromCachephp(
php php php php php php php php php php php php php'securityTokenphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$tokenphp php=php=php=php null
php php php php php php php php php php php php php|php|php php!php$tokenphp-php>isValidphp(php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$tokenphp php=php php$thisphp-php>getSoapClientphp(php)php-php>loginphp(php'loginphp'php)php;
php php php php php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cachephp:php:setTokenToCachephp(
php php php php php php php php php php php php php php php php php'securityTokenphp'php,
php php php php php php php php php php php php php php php php php$token
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$tokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp fetchedphp tokenphp fromphp tokenphp server
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_GetTokensResponse
php php php php php php*php/
php php php php publicphp functionphp getTokensphp(php)
php php php php php{
php php php php php php php php php$tokenphp php=php Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cachephp:php:getTokenFromCachephp(
php php php php php php php php php php php php php'getTokensphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$tokenphp php=php=php=php null
php php php php php php php php php php php php php|php|php php!php$tokenphp-php>isValidphp(php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$tokenphp php=php php$thisphp-php>getSoapClientphp(php)php-php>getTokensphp(arrayphp(
php php php php php php php php php php php php php php php php php'serviceIdphp'php php=php>php php$thisphp-php>php_serviceAuthId
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cachephp:php:setTokenToCachephp(
php php php php php php php php php php php php php php php php php'getTokensphp'php,
php php php php php php php php php php php php php php php php php$token
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$tokenphp;
php php php php php}
php}
