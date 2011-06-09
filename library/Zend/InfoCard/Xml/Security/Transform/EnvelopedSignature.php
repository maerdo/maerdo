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
php php*php php@versionphp php php php php$Idphp:php EnvelopedSignaturephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Transformphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Aphp objectphp implementingphp thephp EnvelopedSignaturephp XMLphp Transform
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xmlphp_Security
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_EnvelopedSignature
php php php php implementsphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Transformsphp thephp XMLphp Documentphp accordingphp tophp thephp EnvelopedSignaturephp Transform
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Exception
php php php php php php*php php@paramphp stringphp php$strXMLDataphp Thephp inputphp XMLphp data
php php php php php php*php php@returnphp stringphp thephp transformedphp XMLphp data
php php php php php php*php/
php php php php publicphp functionphp transformphp(php$strXMLDataphp)
php php php php php{
php php php php php php php php php$sxephp php=php simplexmlphp_loadphp_stringphp(php$strXMLDataphp)php;

php php php php php php php php ifphp(php!php$sxephp-php>Signaturephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Transformphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Exceptionphp(php"Unablephp tophp locatephp Signaturephp Blockphp forphp EnvelopedSignaturephp Transformphp"php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$sxephp-php>Signaturephp)php;

php php php php php php php php returnphp php$sxephp-php>asXMLphp(php)php;
php php php php php}
php}
