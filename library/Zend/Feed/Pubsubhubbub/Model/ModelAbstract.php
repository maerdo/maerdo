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
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ModelAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*php php@seephp Zendphp_Dbphp_Tablephp php*php/
requirephp_oncephp php'Zendphp/Dbphp/Tablephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Registry
php php*php Seemsphp tophp fixphp thephp filephp notphp beingphp includedphp byphp Zendphp_Dbphp_Tablephp.php.php.
php php*php/
requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_ModelAbstract
php{
php php php php php/php*php*
php php php php php php*php Zendphp_Dbphp_Tablephp instancephp tophp hostphp databasephp methods
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Table
php php php php php php*php/
php php php php protectedphp php$php_dbphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@paramphp php Zendphp_Dbphp_Tablephp_Abstractphp php$tableGateway
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Dbphp_Tablephp_Abstractphp php$tableGatewayphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$tableGatewayphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$partsphp php=php explodephp(php'php_php'php,php getphp_classphp(php$thisphp)php)php;
php php php php php php php php php php php php php$tablephp php=php strtolowerphp(arrayphp_popphp(php$partsphp)php)php;
php php php php php php php php php php php php php$thisphp-php>php_dbphp php=php newphp Zendphp_Dbphp_Tablephp(php$tablephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dbphp php=php php$tableGatewayphp;
php php php php php php php php php}
php php php php php}

php}
