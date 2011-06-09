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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php XmlEncphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_EncryptedDataphp/Abstractphp.php
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/EncryptedDataphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp XmlEncphp formattedphp EncryptedDataphp XMLphp block
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_EncryptedDataphp_XmlEncphp extendsphp Zendphp_InfoCardphp_Xmlphp_EncryptedDataphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Encryptedphp CipherValuephp blockphp fromphp thephp EncryptedDataphp XMLphp document
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp stringphp Thephp valuephp ofphp thephp CipherValuephp blockphp basephp6php4php encoded
php php php php php php*php/
php php php php publicphp functionphp getCipherValuephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'encphp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#php'php)php;

php php php php php php php php listphp(php,php$cipherdataphp)php php=php php$thisphp-php>xpathphp(php"php/php/encphp:CipherDataphp"php)php;

php php php php php php php php ifphp(php!php(php$cipherdataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp encphp:CipherDataphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php listphp(php,php$ciphervaluephp)php php=php php$cipherdataphp-php>xpathphp(php"php/php/encphp:CipherValuephp"php)php;

php php php php php php php php ifphp(php!php(php$ciphervaluephp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp fidnphp thephp encphp:CipherValuephp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php$ciphervaluephp;
php php php php php}
php}
