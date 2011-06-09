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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DbInspectorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp implementsphp authenticationphp againstphp XMLphp filephp withphp rolesphp forphp Flexphp Builderphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Adobe
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Adobephp_DbInspector
php{

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp database
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dbTypephp Databasephp adapterphp typephp forphp Zendphp_Db
php php php php php php*php php@paramphp arrayphp|objectphp php$dbDescriptionphp Adapterphp-specificphp connectionphp settings
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php php@seephp Zendphp_Dbphp:php:factoryphp(php)
php php php php php php*php/
php php php php protectedphp functionphp php_connectphp(php$dbTypephp,php php$dbDescriptionphp)
php php php php php{
php php php php php php php php ifphp(isphp_objectphp(php$dbDescriptionphp)php)php php{
php php php php php php php php php php php php php$dbDescriptionphp php=php getphp_objectphp_varsphp(php$dbDescriptionphp)php;
php php php php php php php php php}
php php php php php php php php returnphp Zendphp_Dbphp:php:factoryphp(php$dbTypephp,php php$dbDescriptionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Describephp databasephp objectphp.
php php php php php php*
php php php php php php*php Usagephp examplephp:
php php php php php php*php php$inspectorphp-php>describeTablephp(php'Pdophp_Mysqlphp'php,
php php php php php php*php php php php php arrayphp(
php php php php php php*php php php php php php php php php php'hostphp'php php php php php php=php>php php'php1php2php7php.php0php.php0php.php1php'php,
php php php php php php*php php php php php php php php php php'usernamephp'php php=php>php php'webuserphp'php,
php php php php php php*php php php php php php php php php php'passwordphp'php php=php>php php'xxxxxxxxphp'php,
php php php php php php*php php php php php php php php php php'dbnamephp'php php php php=php>php php'testphp'
php php php php php php*php php php php php php)php,
php php php php php php*php php php php php php'mytablephp'
php php php php php php*php php)php;
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dbTypephp Databasephp adapterphp typephp forphp Zendphp_Db
php php php php php php*php php@paramphp arrayphp|objectphp php$dbDescriptionphp Adapterphp-specificphp connectionphp settings
php php php php php php*php php@paramphp stringphp php$tableNamephp Tablephp name
php php php php php php*php php@returnphp arrayphp Tablephp description
php php php php php php*php php@seephp Zendphp_Dbphp:php:describeTablephp(php)
php php php php php php*php php@seephp Zendphp_Dbphp:php:factoryphp(php)
php php php php php php*php/
php php php php publicphp functionphp describeTablephp(php$dbTypephp,php php$dbDescriptionphp,php php$tableNamephp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_connectphp(php$dbTypephp,php php$dbDescriptionphp)php;
php php php php php php php php returnphp php$dbphp-php>describeTablephp(php$tableNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp databasephp connection
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dbTypephp Databasephp adapterphp typephp forphp Zendphp_Db
php php php php php php*php php@paramphp arrayphp|objectphp php$dbDescriptionphp Adapterphp-specificphp connectionphp settings
php php php php php php*php php@returnphp bool
php php php php php php*php php@seephp Zendphp_Dbphp:php:factoryphp(php)
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$dbTypephp,php php$dbDescriptionphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_connectphp(php$dbTypephp,php php$dbDescriptionphp)php;
php php php php php php php php php$dbphp-php>listTablesphp(php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp listphp ofphp databasephp tables
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dbTypephp Databasephp adapterphp typephp forphp Zendphp_Db
php php php php php php*php php@paramphp arrayphp|objectphp php$dbDescriptionphp Adapterphp-specificphp connectionphp settings
php php php php php php*php php@returnphp arrayphp Listphp ofphp thephp tables
php php php php php php*php/
php php php php publicphp functionphp getTablesphp(php$dbTypephp,php php$dbDescriptionphp)
php php php php php{
php php php php php php php php php$dbphp php=php php$thisphp-php>php_connectphp(php$dbTypephp,php php$dbDescriptionphp)php;
php php php php php php php php returnphp php$dbphp-php>listTablesphp(php)php;
php php php php php}
php}
