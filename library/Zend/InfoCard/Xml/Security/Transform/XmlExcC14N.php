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
php php*php php@subpackagephp Zendphp_InfoCardphp_Xmlphp_Security
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php XmlExcCphp1php4Nphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Transformphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Aphp Transformphp tophp performphp Cphp1php4nphp XMLphp Exclusivephp Canonicalization
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xmlphp_Security
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_XmlExcCphp1php4N
php php php php implementsphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Transformphp thephp inputphp XMLphp basedphp onphp Cphp1php4nphp XMLphp Exclusivephp Canonicalizationphp rules
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Exception
php php php php php php*php php@paramphp stringphp php$strXMLDataphp Thephp inputphp XML
php php php php php php*php php@returnphp stringphp Thephp outputphp XML
php php php php php php*php/
php php php php publicphp functionphp transformphp(php$strXMLDataphp)
php php php php php{
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$strXMLDataphp)php;

php php php php php php php php ifphp(methodphp_existsphp(php$domphp,php php'Cphp1php4Nphp'php)php)php php{
php php php php php php php php php php php php returnphp php$domphp-php>Cphp1php4Nphp(truephp,php falsephp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Transformphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Exceptionphp(php"Thisphp transformphp requiresphp thephp Cphp1php4Nphp(php)php methodphp tophp existphp inphp thephp DOMphp extensionphp"php)php;
php php php php php}
php}
