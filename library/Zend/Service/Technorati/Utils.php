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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Utilsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Collectionphp ofphp utilitiesphp forphp variousphp Zendphp_Servicephp_Technoratiphp classesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_Utils
php{
php php php php php/php*php*
php php php php php php*php Parsesphp,php validatesphp andphp returnsphp aphp validphp Zendphp_Uriphp object
php php php php php php*php fromphp givenphp php$inputphp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|Zendphp_Uriphp_Httpphp php$input
php php php php php php*php php@returnphp php nullphp|Zendphp_Uriphp_Http
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php*php php@static
php php php php php php*php/
php php php php publicphp staticphp functionphp normalizeUriHttpphp(php$inputphp)
php php php php php{
php php php php php php php php php/php/php allowphp nullphp asphp value
php php php php php php php php ifphp php(php$inputphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Uri
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;
php php php php php php php php ifphp php(php$inputphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$uriphp php=php php$inputphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php(stringphp)php php$inputphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php wrapphp exceptionphp underphp Zendphp_Servicephp_Technoratiphp_Exceptionphp object
php php php php php php php php php php php php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Technoratiphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php allowphp inlyphp Zendphp_Uriphp_Httpphp objectsphp orphp childphp classes
php php php php php php php php ifphp php(php!php(php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Technoratiphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Invalidphp URLphp php$uriphp,php onlyphp HTTPphp(Sphp)php protocolsphp canphp bephp usedphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$uriphp;
php php php php php}
php php php php php/php*php*
php php php php php php*php Parsesphp,php validatesphp andphp returnsphp aphp validphp Zendphp_Datephp object
php php php php php php*php fromphp givenphp php$inputphp.
php php php php php php*
php php php php php php*php php$inputphp canphp bephp eitherphp aphp stringphp,php anphp integerphp orphp aphp Zendphp_Datephp objectphp.
php php php php php php*php Ifphp php$inputphp isphp stringphp orphp intphp,php itphp willphp bephp providedphp tophp Zendphp_Datephp asphp itphp isphp.
php php php php php php*php Ifphp php$inputphp isphp aphp Zendphp_Datephp objectphp,php thephp objectphp instancephp willphp bephp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php php mixedphp|Zendphp_Datephp php$input
php php php php php php*php php@returnphp php nullphp|Zendphp_Date
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php*php php@static
php php php php php php*php/
php php php php publicphp staticphp functionphp normalizeDatephp(php$inputphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Date
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Datephp.phpphp'php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Locale
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php php php php php php php php php/php/php allowphp nullphp asphp valuephp andphp returnphp validphp Zendphp_Datephp objects
php php php php php php php php ifphp php(php(php$inputphp php=php=php=php nullphp)php php|php|php php(php$inputphp instanceofphp Zendphp_Datephp)php)php php{
php php php php php php php php php php php php returnphp php$inputphp;
php php php php php php php php php}

php php php php php php php php php/php/php duephp tophp aphp BCphp breakphp asphp ofphp ZFphp php1php.php5php itphp'sphp notphp safephp tophp usephp Zendphp_Datephp:php:isDatephp(php)php here
php php php php php php php php php/php/php seephp ZFphp-php2php5php2php4php,php ZFphp-php2php3php3php4
php php php php php php php php ifphp php(php@strtotimephp(php$inputphp)php php!php=php=php FALSEphp)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Datephp(php$inputphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Technoratiphp_Exceptionphp(php"php'php$inputphp'php isphp notphp aphp validphp Datephp/Timephp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@todophp publicphp staticphp functionphp xpathQueryAndSetphp(php)php php{php}
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php php@todophp publicphp staticphp functionphp xpathQueryAndSetIfphp(php)php php{php}
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php php@todophp publicphp staticphp functionphp xpathQueryAndSetUnlessphp(php)php php{php}
php php php php php php*php/
php}
