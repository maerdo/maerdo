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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Integerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_XmlRpcphp_Valuephp_Scalar
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp/Scalarphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Valuephp_Integerphp extendsphp Zendphp_XmlRpcphp_Valuephp_Scalar
php{

php php php php php/php*php*
php php php php php php*php Setphp thephp valuephp ofphp anphp integerphp nativephp type
php php php php php php*
php php php php php php*php php@paramphp intphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php>php PHPphp_INTphp_MAXphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Valuephp_Exceptionphp(php'Overlongphp integerphp givenphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_typephp php=php selfphp:php:XMLRPCphp_TYPEphp_INTEGERphp;
php php php php php php php php php$thisphp-php>php_valuephp php=php php(intphp)php$valuephp;php php php php php/php/php Makephp surephp thisphp valuephp isphp integer
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp valuephp ofphp thisphp objectphp,php convertphp thephp XMLphp-RPCphp nativephp integerphp valuephp intophp aphp PHPphp integer
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}
php}
