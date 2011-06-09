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
php php*php php@versionphp php php php php$Idphp:php ConferenceCallAbstractphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/BaseTypephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_ConferenceCallphp_ConferenceCallAbstract
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php{
php php php php php/php*php*
php php php php php php*php returnsphp thephp responsephp objectphp orphp null
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php php$rphp php=php newphp ReflectionClassphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$rphp-php>getPropertiesphp(php)php asphp php$pphp)php php{
php php php php php php php php php php php php php$namephp php=php php$pphp-php>getNamephp(php)php;
php php php php php php php php php php php php ifphp php(strposphp(php$namephp,php php'Responsephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp php$pphp-php>getValuephp(php$thisphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php parsephp thephp responsephp dataphp andphp throwsphp exceptions
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_Exception
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{
php php php php php php php php php$retValphp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php ifphp php(php$retValphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>statusCodephp php php php php=php php9php9php9php9php;
php php php php php php php php php php php php php$thisphp-php>statusMessagephp php=php php'Internalphp responsephp propertyphp notphp foundphp.php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>statusCodephp php php php php=php php$retValphp-php>getStatusCodephp(php)php;
php php php php php php php php php php php php php$thisphp-php>statusMessagephp php=php php$retValphp-php>getStatusMessagephp(php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:parsephp(php)php;
php php php php php php php php returnphp php$retValphp;
php php php php php}
php}
