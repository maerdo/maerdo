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
php php*php php@versionphp php php php php$Idphp:php Structphp.phpphp php2php2php0php2php4php php2php0php1php0php-php0php4php-php2php7php php1php8php:php0php8php:php2php4Zphp matthewphp php$
php php*php/


php/php*php*
php php*php Zendphp_XmlRpcphp_Valuephp_Collection
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp/Collectionphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Valuephp_Structphp extendsphp Zendphp_XmlRpcphp_Valuephp_Collection
php{
php php php php php/php*php*
php php php php php php*php Setphp thephp valuephp ofphp anphp structphp nativephp type
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php selfphp:php:XMLRPCphp_TYPEphp_STRUCTphp;
php php php php php php php php parentphp:php:php_php_constructphp(php$valuephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Generatephp thephp XMLphp codephp thatphp representphp structphp nativephp MXLphp-RPCphp value
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_generateXMLphp(php)
php php php php php{
php php php php php php php php php$generatorphp php=php php$thisphp-php>getGeneratorphp(php)php;
php php php php php php php php php$generatorphp-php>openElementphp(php'valuephp'php)
php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'structphp'php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_valuephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_valuephp asphp php$namephp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php php/php*php php@varphp php$valphp Zendphp_XmlRpcphp_Valuephp php*php/
php php php php php php php php php php php php php php php php php$generatorphp-php>openElementphp(php'memberphp'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'namephp'php,php php$namephp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'namephp'php)php;
php php php php php php php php php php php php php php php php php$valphp-php>generateXmlphp(php)php;
php php php php php php php php php php php php php php php php php$generatorphp-php>closeElementphp(php'memberphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$generatorphp-php>closeElementphp(php'structphp'php)
php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'valuephp'php)php;
php php php php php}
php}