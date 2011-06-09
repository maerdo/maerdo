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
php php*php php@versionphp php php php php$Idphp:php ProjectProviderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_ProjectProviderphp extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php createResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@paramphp stringphp php$projectProviderName
php php php php php php*php php@paramphp stringphp php$actionNames
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$projectProviderNamephp,php php$actionNamesphp php=php nullphp)
php php php php php{

php php php php php php php php ifphp php(php!isphp_stringphp(php$projectProviderNamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Zendphp_Toolphp_Projectphp_Providerphp_Controllerphp:php:createResourcephp(php)php expectsphp php\php"projectProviderNamephp\php"php isphp thephp namephp ofphp aphp projectphp providerphp resourcephp tophp createphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;
php php php php php php php php php$profileSearchParamsphp[php]php php=php php'projectProvidersDirectoryphp'php;

php php php php php php php php php$projectProviderphp php=php php$profilephp-php>createResourceAtphp(php$profileSearchParamsphp,php php'projectProviderFilephp'php,php arrayphp(php'projectProviderNamephp'php php=php>php php$projectProviderNamephp,php php'actionNamesphp'php php=php>php php$actionNamesphp)php)php;

php php php php php php php php returnphp php$projectProviderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ProjectProviderphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp stubphp forphp Zendphp_Toolphp Projectphp Provider
php php php php php php*
php php php php php php*php php@varphp stringphp php php php php php php php$namephp php php php php php php php php php php php classphp namephp forphp newphp Zendphp_Toolphp Projectphp Provider
php php php php php php*php php@varphp arrayphp|stringphp php$actionsphp php php php php php php php php listphp ofphp providerphp methods
php php php php php php*php php@throwsphp Zendphp_Toolphp_Projectphp_Providerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$actionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfileRequiredphp(php)php;

php php php php php php php php php$projectProviderphp php=php selfphp:php:createResourcephp(php$profilephp,php php$namephp,php php$actionsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp createphp aphp projectphp providerphp namedphp php'php php.php php$name
php php php php php php php php php php php php php php php php php.php php'php inphp locationphp php'php php.php php$projectProviderphp-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Creatingphp aphp projectphp providerphp namedphp php'php php.php php$name
php php php php php php php php php php php php php php php php php.php php'php inphp locationphp php'php php.php php$projectProviderphp-php>getPathphp(php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$projectProviderphp-php>createphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}

php php php php php}
php}
