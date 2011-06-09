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
php php*php php@versionphp php php php php$Idphp:php Collectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_XmlRpcphp_Value
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_XmlRpcphp_Valuephp_Collectionphp extendsphp Zendphp_XmlRpcphp_Value
php{

php php php php php/php*php*
php php php php php php*php Setphp thephp valuephp ofphp aphp collectionphp typephp php(arrayphp andphp structphp)php nativephp types
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp)
php php php php php{
php php php php php php php php php$valuesphp php=php php(arrayphp)php$valuephp;php php php php/php/php Makephp surephp thatphp thephp valuephp isphp anphp array
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php/php/php Ifphp thephp elementsphp ofphp thephp givenphp arrayphp arephp notphp Zendphp_XmlRpcphp_Valuephp objectsphp,
php php php php php php php php php php php php php/php/php wephp needphp tophp convertphp themphp asphp suchphp php(usingphp autophp-detectionphp fromphp PHPphp valuephp)
php php php php php php php php php php php php ifphp php(php!php$valuephp instanceofphp parentphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php selfphp:php:getXmlRpcValuephp(php$valuephp,php selfphp:php:AUTOphp_DETECTphp_TYPEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_valuephp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp valuephp ofphp thisphp objectphp,php convertphp thephp XMLphp-RPCphp nativephp collectionphp valuesphp intophp aphp PHPphp array
php php php php php php*
php php php php php php*php php@returnphp arary
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php php$valuesphp php=php php(arrayphp)php$thisphp-php>php_valuephp;
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php/php*php php@varphp php$valuephp Zendphp_XmlRpcphp_Valuephp php*php/
php php php php php php php php php php php php php$valuesphp[php$keyphp]php php=php php$valuephp-php>getValuephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuesphp;
php php php php php}
php}
