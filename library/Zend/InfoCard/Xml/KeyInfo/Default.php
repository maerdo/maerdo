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
php php*php php@versionphp php php php php$Idphp:php Defaultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/KeyInfophp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_SecurityTokenReference
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/SecurityTokenReferencephp.phpphp'php;

php/php*php*
php php*php Anphp objectphp representationphp ofphp aphp XMLphp php<KeyInfophp>php blockphp whichphp doesnphp'tphp providephp aphp namespace
php php*php Inphp thisphp contextphp,php itphp isphp assumedphp tophp meanphp thatphp itphp isphp thephp typephp ofphp KeyInfophp blockphp which
php php*php containsphp thephp SecurityTokenReference
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Defaultphp extendsphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Returnsphp thephp objectphp representationphp ofphp thephp SecurityTokenReferencephp block
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_SecurityTokenReference
php php php php php php*php/
php php php php publicphp functionphp getSecurityTokenReferencephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'ophp'php,php php'httpphp:php/php/docsphp.oasisphp-openphp.orgphp/wssphp/php2php0php0php4php/php0php1php/oasisphp-php2php0php0php4php0php1php-wssphp-wssecurityphp-secextphp-php1php.php0php.xsdphp'php)php;

php php php php php php php php listphp(php$sectokenrefphp)php php=php php$thisphp-php>xpathphp(php'php/php/ophp:SecurityTokenReferencephp'php)php;

php php php php php php php php ifphp(php!php(php$sectokenrefphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php'Couldphp notphp locatephp thephp Securityphp Tokenphp Referencephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp Zendphp_InfoCardphp_Xmlphp_SecurityTokenReferencephp:php:getInstancephp(php$sectokenrefphp)php;
php php php php php}
php}
