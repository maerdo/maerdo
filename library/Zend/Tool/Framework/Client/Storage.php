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
php php*php php@versionphp php php php php$Idphp:php Storagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_AdapterInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Storagephp/AdapterInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storage
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_AdapterInterface
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAdapterphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$adapterphp)php)php php{
php php php php php php php php php php php php php$storageAdapterClassphp php=php php'Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_php'php php.php ucfirstphp(php$adapterphp)php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$storageAdapterClassphp)php;
php php php php php php php php php php php php php$adapterphp php=php newphp php$storageAdapterClassphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php}

php php php php publicphp functionphp isEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_adapterphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_AdapterInterfacephp)php;
php php php php php}

php php php php publicphp functionphp putphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp-php>putphp(php$namephp,php php$valuephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getphp(php$namephp,php php$defaultValuephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_adapterphp-php>hasphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_adapterphp-php>getphp(php$namephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$defaultValuephp;
php php php php php php php php php}

php php php php php}

php php php php publicphp functionphp hasphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_adapterphp-php>hasphp(php$namephp)php;
php php php php php}

php php php php publicphp functionphp removephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp-php>removephp(php$namephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getStreamUriphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_adapterphp-php>getStreamUriphp(php$namephp)php;
php php php php php}
php}
