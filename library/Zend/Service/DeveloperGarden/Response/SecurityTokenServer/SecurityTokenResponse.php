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
php php*php php@versionphp php php php php$Idphp:php SecurityTokenResponsephp.phpphp php2php1php1php8php9php php2php0php1php0php-php0php2php-php2php4php php0php1php:php5php0php:php3php3Zphp stasphp php$
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
classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_SecurityTokenResponse
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ResponseAbstract
php php php php implementsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SecurityTokenServerphp_Interface
php{
php php php php php/php*php*
php php php php php php*php thephp tokenphp formatphp,php shouldphp bephp samlphp2php0
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$tokenFormatphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php thephp tokenphp encodingphp,php shouldphp bephp textphp/xml
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$tokenEncodingphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php thephp tokenDataphp shouldphp bephp aphp validphp Assertionphp value
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php publicphp php$tokenDataphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php returnsphp thephp tokenData
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenDataphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>tokenDataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_Exceptionphp(php'Nophp validphp tokenDataphp foundphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>tokenDataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp tokenphp formatphp value
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenFormatphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>tokenFormatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp tokenphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>tokenEncodingphp;
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
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>securityTokenDataphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}
php}
