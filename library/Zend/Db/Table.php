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
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Tablephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Tablephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Tablephp_Definition
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp/Definitionphp.phpphp'php;

php/php*php*
php php*php Classphp forphp SQLphp tablephp interfacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Tablephp extendsphp Zendphp_Dbphp_Tablephp_Abstract
php{

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)php php-php Forphp concretephp implementationphp ofphp Zendphp_Dbphp_Table
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$configphp stringphp canphp referencephp aphp Zendphp_Registryphp keyphp forphp aphp dbphp adapter
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ORphp itphp canphp referencephp thephp namephp ofphp aphp table
php php php php php php*php php@paramphp arrayphp|Zendphp_Dbphp_Tablephp_Definitionphp php$definition
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$configphp php=php arrayphp(php)php,php php$definitionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$definitionphp php!php=php=php nullphp php&php&php isphp_arrayphp(php$definitionphp)php)php php{
php php php php php php php php php php php php php$definitionphp php=php newphp Zendphp_Dbphp_Tablephp_Definitionphp(php$definitionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$configphp)php)php php{
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php$configphp)php)php php{
php php php php php php php php php php php php php php php php triggerphp_errorphp(php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_METHODphp_php_php php.php php'php(php\php'registryNamephp\php'php)php isphp notphp validphp usagephp ofphp Zendphp_Dbphp_Tablephp,php php'
php php php php php php php php php php php php php php php php php php php php php.php php'tryphp extendingphp Zendphp_Dbphp_Tablephp_Abstractphp inphp yourphp extendingphp classesphp.php'php,
php php php php php php php php php php php php php php php php php php php php Ephp_USERphp_NOTICE
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$configphp php=php arrayphp(selfphp:php:ADAPTERphp php=php>php php$configphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php processphp thisphp asphp tablephp withphp orphp withoutphp aphp definition
php php php php php php php php php php php php php php php php ifphp php(php$definitionphp instanceofphp Zendphp_Dbphp_Tablephp_Definition
php php php php php php php php php php php php php php php php php php php php php&php&php php$definitionphp-php>hasTableConfigphp(php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp willphp havephp DEFINITIONphp_CONFIGphp_NAMEphp php&php DEFINITION
php php php php php php php php php php php php php php php php php php php php php$configphp php=php php$definitionphp-php>getTableConfigphp(php$configphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$configphp php=php arrayphp(selfphp:php:NAMEphp php=php>php php$configphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$configphp)php;
php php php php php}
php}
