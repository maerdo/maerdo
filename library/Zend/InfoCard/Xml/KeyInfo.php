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
php php*php php@versionphp php php php php$Idphp:php KeyInfophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Element
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp.phpphp'php;

php/php*php*
php php*php Factoryphp classphp tophp returnphp aphp XMLphp KeyInfophp blockphp basedphp onphp inputphp XML
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_KeyInfo
php{
php php php php php/php*php*
php php php php php php*php Constructorphp php(disabledphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp KeyInfophp objectphp basedphp onphp thephp inputphp KeyInfophp XMLphp block
php php php php php php*
php php php php php php*php php@paramphp stringphp php$xmlDataphp Thephp KeyInfophp XMLphp Block
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Abstract
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp getInstancephp(php$xmlDataphp)
php php php php php{

php php php php php php php php ifphp(php$xmlDataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp-php>asXMLphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$xmlDataphp)php)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp Dataphp providedphp tophp createphp instancephp"php)php;
php php php php php php php php php}

php php php php php php php php php$sxephp php=php simplexmlphp_loadphp_stringphp(php$strXmlDataphp)php;

php php php php php php php php php$namespacesphp php=php php$sxephp-php>getDocNameSpacesphp(php)php;

php php php php php php php php ifphp(php!emptyphp(php$namespacesphp)php)php php{
php php php php php php php php php php php php foreachphp(php$sxephp-php>getDocNameSpacesphp(php)php asphp php$namespacephp)php php{
php php php php php php php php php php php php php php php php switchphp(php$namespacephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php0php/php0php9php/xmldsigphp#php'php:
php php php php php php php php php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/KeyInfophp/XmlDSigphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$strXmlDataphp,php php'Zendphp_InfoCardphp_Xmlphp_KeyInfophp_XmlDSigphp'php)php;
php php php php php php php php php php php php php php php php php php php php defaultphp:

php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unknownphp KeyInfophp Namespacephp providedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php Wephp arephp ignoringphp thesephp linesphp,php asphp XDebugphp reportsphp eachphp asphp aphp php"nonphp executedphp"php line
php php php php php php php php php php php php php php php php php php php php php/php/php whichphp breaksphp myphp coveragephp php%
php php php php php php php php php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php/php php@codeCoverageIgnoreEnd

php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/KeyInfophp/Defaultphp.phpphp'php;
php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$strXmlDataphp,php php'Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Defaultphp'php)php;
php php php php php}
php}
