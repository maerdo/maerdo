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
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*
php php*php/
abstractphp classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_StorageEntityAbstract
php{
php php php php php/php*php*
php php php php php php*php Data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp forphp settingphp properties
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php Namephp ofphp thephp property
php php php php php php*php php@paramphp stringphp php$valuephp php php php Valuephp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[strtolowerphp(php$namephp)php]php php=php php$valuephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php throwphp newphp Exceptionphp(php"Unknownphp propertyphp:php php"php php.php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp forphp gettingphp properties
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php Namephp ofphp thephp property
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(strtolowerphp(php$namephp)php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[strtolowerphp(php$namephp)php]php;
php php php php php php php php php}

php php php php php php php php throwphp newphp Exceptionphp(php"Unknownphp propertyphp:php php"php php.php php$namephp)php;
php php php php php}
php}
