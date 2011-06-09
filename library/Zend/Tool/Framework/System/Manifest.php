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
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Manifestphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/ProviderManifestablephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Manifestphp/ActionManifestablephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Providerphp/Versionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Providerphp/Configphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Providerphp/Phpinfophp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Providerphp/Manifestphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Actionphp/Createphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Systemphp/Actionphp/Deletephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Systemphp_Manifest
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Manifestphp_ProviderManifestablephp,php Zendphp_Toolphp_Frameworkphp_Manifestphp_ActionManifestable
php{

php php php php publicphp functionphp getProvidersphp(php)
php php php php php{
php php php php php php php php php$providersphp php=php arrayphp(
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Versionphp(php)php,
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Configphp(php)php,
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Phpinfophp(php)php,
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Providerphp_Manifestphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$providersphp;
php php php php php}

php php php php publicphp functionphp getActionsphp(php)
php php php php php{
php php php php php php php php php$actionsphp php=php arrayphp(
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Actionphp_Createphp(php)php,
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Systemphp_Actionphp_Deletephp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$actionsphp;
php php php php php}
php}
