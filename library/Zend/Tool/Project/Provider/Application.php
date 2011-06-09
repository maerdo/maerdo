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
php php*php php@versionphp php php php php$Idphp:php Applicationphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Application
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'ClassNamePrefixphp'php)php;

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@paramphp php$classNamePrefixphp Prefixphp ofphp classes
php php php php php php*php php@paramphp php$force
php php php php php php*php/
php php php php publicphp functionphp changeClassNamePrefixphp(php$classNamePrefixphp php/php*php php,php php$forcephp php=php falsephp php*php/php)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$originalClassNamePrefixphp php=php php$classNamePrefixphp;

php php php php php php php php ifphp php(substrphp(php$classNamePrefixphp,php php-php1php)php php!php=php php'php_php'php)php php{
php php php php php php php php php php php php php$classNamePrefixphp php.php=php php'php_php'php;
php php php php php php php php php}

php php php php php php php php php$configFileResourcephp php=php php$profilephp-php>searchphp(php'ApplicationConfigFilephp'php)php;
php php php php php php php php php$zcphp php=php php$configFileResourcephp-php>getAsZendConfigphp(php'productionphp'php)php;
php php php php php php php php ifphp php(php$zcphp-php>appnamespacephp php=php=php php$classNamePrefixphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Thephp requestedphp namephp php'php php.php php$classNamePrefixphp php.php php'php isphp alreadyphp thephp prefixphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php removephp thephp old
php php php php php php php php php$configFileResourcephp-php>removeStringItemphp(php'appnamespacephp'php,php php'productionphp'php)php;
php php php php php php php php php$configFileResourcephp-php>createphp(php)php;

php php php php php php php php php/php/php addphp thephp new
php php php php php php php php php$configFileResourcephp-php>addStringItemphp(php'appnamespacephp'php,php php$classNamePrefixphp,php php'productionphp'php,php truephp)php;
php php php php php php php php php$configFileResourcephp-php>createphp(php)php;

php php php php php php php php php/php/php updatephp thephp projectphp profile
php php php php php php php php php$applicationDirectoryphp php=php php$profilephp-php>searchphp(php'ApplicationDirectoryphp'php)php;
php php php php php php php php php$applicationDirectoryphp-php>setClassNamePrefixphp(php$classNamePrefixphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$originalClassNamePrefixphp php!php=php=php php$classNamePrefixphp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php thephp namephp providedphp php"php'php php.php php$originalClassNamePrefixphp php.php php'php"php wasphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php alteredphp tophp php"php'php php.php php$classNamePrefixphp php.php php'php"php forphp correctnessphp.php'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php php'yellowphp'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php notephp tophp thephp user
php php php php php php php php php$responsephp-php>appendContentphp(php'Notephp:php Allphp existingphp modelsphp willphp needphp tophp bephp alteredphp tophp thisphp newphp namespacephp byphp handphp'php,php arrayphp(php'colorphp'php php=php>php php'yellowphp'php)php)php;
php php php php php php php php php$responsephp-php>appendContentphp(php'applicationphp.iniphp updatedphp withphp newphp appnamespacephp php'php php.php php$classNamePrefixphp)php;

php php php php php php php php php/php/php storephp profile
php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php}

php}
