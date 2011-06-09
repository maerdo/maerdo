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
php php*php php@versionphp php php php php$Idphp:php Basephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Actionphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Actionphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Actionphp_Basephp implementsphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interface
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructorphp php-
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setNamephp(php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php implementphp php$optionsphp herephp inphp thephp futurephp ifphp thisphp isphp needed
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Actionphp_Base
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_namephp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_namephp php=php php$thisphp-php>php_parseNamephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_parseNamephp php-php internalphp methodphp tophp determinephp thephp namephp ofphp anphp actionphp whenphp onephp isphp notphp explicityphp providedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$action
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_parseNamephp(php)
php php php php php{
php php php php php php php php php$classNamephp php=php getphp_classphp(php$thisphp)php;
php php php php php php php php php$actionNamephp php=php substrphp(php$classNamephp,php strrposphp(php$classNamephp,php php'php_php'php)php+php1php)php;
php php php php php php php php returnphp php$actionNamephp;
php php php php php}

php}
