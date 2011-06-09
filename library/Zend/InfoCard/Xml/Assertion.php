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
php php*php php@versionphp php php php php$Idphp:php Assertionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Assertionphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Assertionphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Factoryphp objectphp tophp retrievephp anphp Assertionphp objectphp basedphp onphp thephp typephp ofphp XMLphp documentphp provided
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
finalphp classphp Zendphp_InfoCardphp_Xmlphp_Assertion
php{
php php php php php/php*php*
php php php php php php*php Thephp namespacephp forphp aphp SAMLphp-formattedphp Assertionphp document
php php php php php php*php/
php php php php constphp TYPEphp_SAMLphp php=php php'urnphp:oasisphp:namesphp:tcphp:SAMLphp:php1php.php0php:assertionphp'php;

php php php php php/php*php*
php php php php php php*php Constructorphp php(disabledphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp aphp InfoCardphp Assertionphp objectphp basedphp onphp thephp XMLphp dataphp provided
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@paramphp stringphp php$xmlDataphp Thephp XMLphp-Formattedphp Assertion
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_Assertionphp_Interface
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp getInstancephp(php$xmlDataphp)
php php php php php{

php php php php php php php php ifphp(php$xmlDataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp-php>asXMLphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$xmlDataphp)php)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp Dataphp providedphp tophp createphp instancephp"php)php;
php php php php php php php php php}

php php php php php php php php php$sxephp php=php simplexmlphp_loadphp_stringphp(php$strXmlDataphp)php;

php php php php php php php php php$namespacesphp php=php php$sxephp-php>getDocNameSpacesphp(php)php;

php php php php php php php php foreachphp(php$namespacesphp asphp php$namespacephp)php php{
php php php php php php php php php php php php switchphp(php$namespacephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:TYPEphp_SAMLphp:
php php php php php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Assertionphp/Samlphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$strXmlDataphp,php php'Zendphp_InfoCardphp_Xmlphp_Assertionphp_Samlphp'php,php nullphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp determinephp Assertionphp typephp byphp Namespacephp"php)php;
php php php php php}
php}
