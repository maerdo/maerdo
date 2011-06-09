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
php php*php php@versionphp php php php php$Idphp:php Cachephp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cache
php{
php php php php php/php*php*
php php php php php php*php arrayphp withphp storedphp tokens
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_storedTokenphp php=php arrayphp(
php php php php php php php php php'securityTokenphp'php php=php>php nullphp,
php php php php php php php php php'getTokensphp'php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp cachephp forphp tokenphp values
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Core
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp php$php_cachephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php PHPphp SOAPphp wsdlphp cachephp constant
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp staticphp php$php_wsdlCachephp php=php nullphp;

php/php/php php@codeCoverageIgnoreStart
php php php php php/php*php*
php php php php php php*php Constructorphp overridingphp php-php makephp surephp thatphp aphp developerphp cannotphp instantiate
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}
php/php/php php@codeCoverageIgnoreEnd

php php php php php/php*php*
php php php php php php*php returnsphp storedphp tokenphp fromphp cachephp orphp null
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tokenId
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interfacephp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getTokenFromCachephp(php$tokenIdphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$tokenIdphp,php selfphp:php:php$php_storedTokenphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'tokenIDphp php'php php.php php$tokenIdphp php.php php'php unknownphp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:hasCachephp(php)php php&php&php selfphp:php:php$php_storedTokenphp[php$tokenIdphp]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$cachephp php=php selfphp:php:getCachephp(php)php;
php php php php php php php php php php php php php$tokenphp php=php php$cachephp-php>loadphp(mdphp5php(php$tokenIdphp)php)php;
php php php php php php php php php php php php ifphp php(php$tokenphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_storedTokenphp[php$tokenIdphp]php php=php php$tokenphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_storedTokenphp[php$tokenIdphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp newphp valuephp forphp thephp givenphp tokenId
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tokenId
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Exception
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interfacephp php$tokenValue
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setTokenToCachephp(php$tokenIdphp,
php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interfacephp php$tokenValue
php php php php php)php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$tokenIdphp,php selfphp:php:php$php_storedTokenphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'tokenIDphp php'php php.php php$tokenIdphp php.php php'php unknownphp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:hasCachephp(php)php)php php{
php php php php php php php php php php php php php$cachephp php=php selfphp:php:getCachephp(php)php;
php php php php php php php php php php php php php$cachephp-php>savephp(php$tokenValuephp,php mdphp5php(php$tokenIdphp)php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_storedTokenphp[php$tokenIdphp]php php=php php$tokenValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php resetphp thephp internalphp cachephp structure
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp resetTokenCachephp(php)
php php php php php{
php php php php php php php php foreachphp php(selfphp:php:php$php_storedTokenphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$valuephp php=php nullphp;
php php php php php php php php php php php php selfphp:php:php$php_storedTokenphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp cache
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php publicphp staticphp functionphp getCachephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp cachephp forphp token
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Corephp php$cachephp Aphp cachephp frontend
php php php php php php*php/
php php php php publicphp staticphp functionphp setCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php php$cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp aphp cachephp isphp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasCachephp(php)
php php php php php{
php php php php php php php php returnphp php(selfphp:php:php$php_cachephp php!php=php=php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp anyphp cache
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeCachephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp allphp cachephp data
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearCachephp(php)
php php php php php{
php php php php php php php php php$cachephp php=php selfphp:php:getCachephp(php)php;
php php php php php php php php ifphp php(methodphp_existsphp(php$cachephp,php php'cleanphp'php)php)php php{
php php php php php php php php php php php php php$cachephp-php>cleanphp(php)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$php_wsdlCachephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp wsdlphp cache
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getWsdlCachephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_wsdlCachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp cachephp forphp wsdlphp file
php php php php php php*
php php php php php php*php php@paramphp integerphp php$cache
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setWsdlCachephp(php$cachephp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_wsdlCachephp php=php php$cachephp;
php php php php php}
php}
