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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Filephp_Transfer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Transferphp.phpphp php2php1php2php0php1php php2php0php1php0php-php0php2php-php2php4php php2php2php:php1php3php:php2php0Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php Basephp classphp forphp allphp protocolsphp supportingphp filephp transfers
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Filephp_Transfer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filephp_Transfer
php{
php php php php php/php*php*
php php php php php php*php Arrayphp holdingphp allphp directions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp filephp processingphp handler
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$adapterphp php php Adapterphp tophp use
php php php php php php*php php@paramphp php booleanphp php$directionphp OPTIONALphp Falsephp meansphp Downloadphp,php truephp meansphp upload
php php php php php php*php php@paramphp php arrayphp php php php$optionsphp php php OPTIONALphp Optionsphp tophp setphp forphp thisphp adapter
php php php php php php*php php@throwsphp Zendphp_Filephp_Transferphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$adapterphp php=php php'Httpphp'php,php php$directionphp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setAdapterphp(php$adapterphp,php php$directionphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$adapterphp php php Adapterphp tophp use
php php php php php php*php php@paramphp php booleanphp php$directionphp OPTIONALphp Falsephp meansphp Downloadphp,php truephp meansphp upload
php php php php php php*php php@paramphp php arrayphp php php php$optionsphp php php OPTIONALphp Optionsphp tophp setphp forphp thisphp adapter
php php php php php php*php php@throwsphp Zendphp_Filephp_Transferphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp,php php$directionphp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php'Zendphp/Filephp/Transferphp/Adapterphp/php'php php.php ucfirstphp(php$adapterphp)php.php php'php.phpphp'php)php)php php{
php php php php php php php php php php php php php$adapterphp php=php php'Zendphp_Filephp_Transferphp_Adapterphp_php'php php.php ucfirstphp(php$adapterphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php$adapterphp)php)php php{
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$adapterphp)php;
php php php php php php php php php}

php php php php php php php php php$directionphp php=php php(integerphp)php php$directionphp;
php php php php php php php php php$thisphp-php>php_adapterphp[php$directionphp]php php=php newphp php$adapterphp(php$optionsphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp[php$directionphp]php instanceofphp Zendphp_Filephp_Transferphp_Adapterphp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php"Adapterphp php"php php.php php$adapterphp php.php php"php doesphp notphp extendphp Zendphp_Filephp_Transferphp_Adapterphp_Abstractphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp adapters
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$directionphp Onphp nullphp,php allphp directionsphp arephp returned
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php Onphp falsephp,php downloadphp directionphp isphp returned
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php Onphp truephp,php uploadphp directionphp isphp returned
php php php php php php*php php@returnphp arrayphp|Zendphp_Filephp_Transferphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php$directionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$directionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php php php php php}

php php php php php php php php php$directionphp php=php php(integerphp)php php$directionphp;
php php php php php php php php returnphp php$thisphp-php>php_adapterphp[php$directionphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callsphp allphp methodsphp fromphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php Methodphp tophp call
php php php php php php*php php@paramphp php arrayphp php php$optionsphp Optionsphp forphp thisphp method
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'directionphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$directionphp php=php php(integerphp)php php$optionsphp[php'directionphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$directionphp php=php php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_adapterphp[php$directionphp]php,php php$methodphp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_adapterphp[php$directionphp]php,php php$methodphp)php,php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php"Unknownphp methodphp php'php"php php.php php$methodphp php.php php"php'php calledphp!php"php)php;
php php php php php}
php}
