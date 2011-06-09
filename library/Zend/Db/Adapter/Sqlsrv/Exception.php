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
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Exceptionphp.phpphp php2php0php6php2php5php php2php0php1php0php-php0php1php-php2php5php php2php1php:php0php3php:php5php3Zphp ralphphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Dbphp_Adapterphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Dbphp/Adapterphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exception
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Adapterphp_Sqlsrvphp_Exceptionphp extendsphp Zendphp_Dbphp_Adapterphp_Exception
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Ifphp php$messagephp isphp anphp arrayphp,php thephp assumptionphp isphp thatphp thephp returnphp valuephp of
php php php php php php*php sqlsrvphp_errorsphp(php)php wasphp providedphp.php Ifphp sophp,php itphp thenphp retrievesphp thephp mostphp recent
php php php php php php*php errorphp fromphp thatphp stackphp,php andphp setsphp thephp messagephp andphp codephp basedphp onphp itphp.
php php php php php php*
php php php php php php*php php@paramphp nullphp|arrayphp|stringphp php$message
php php php php php php*php php@paramphp nullphp|intphp php$code
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$messagephp php=php nullphp,php php$codephp php=php php0php)
php php php php php{
php php php php php php php ifphp php(isphp_arrayphp(php$messagephp)php)php php{
php php php php php php php php php php php php php/php/php Errorphp shouldphp bephp arrayphp ofphp errors
php php php php php php php php php php php php php/php/php Wephp onlyphp needphp firstphp onephp php(php?php)
php php php php php php php php php php php php ifphp php(issetphp(php$messagephp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$messagephp[php0php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$codephp php php php php=php php(intphp)php php php php php$messagephp[php'codephp'php]php;
php php php php php php php php php php php php php$messagephp php=php php(stringphp)php php$messagephp[php'messagephp'php]php;
php php php php php php php php}
php php php php php php php parentphp:php:php_php_constructphp(php$messagephp,php php$codephp,php newphp Exceptionphp(php$messagephp,php php$codephp)php)php;
php php php php}
php}
