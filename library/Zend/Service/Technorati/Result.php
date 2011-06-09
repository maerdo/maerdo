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
php php*php php@versionphp php php php php$Idphp:php Resultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Representsphp aphp singlephp Technoratiphp Searchphp queryphp resultphp objectphp.
php php*php Itphp isphp neverphp returnedphp asphp aphp standalonephp objectphp,
php php*php butphp itphp alwaysphp belongsphp tophp aphp validphp Zendphp_Servicephp_Technoratiphp_SearchResultSetphp objectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@abstract
php php*php/
abstractphp classphp Zendphp_Servicephp_Technoratiphp_Result
php{
php php php php php/php*php*
php php php php php php*php Anphp associativephp arrayphp ofphp php'fieldNamephp'php php=php>php php'xmlfieldtagphp'
php php php php php php*
php php php php php php*php php@varphp php php php php array
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_fieldsphp;

php php php php php/php*php*
php php php php php php*php Thephp ReSTphp fragmentphp forphp thisphp resultphp object
php php php php php php*
php php php php php php*php php@varphp php php php php DomElement
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_domphp;

php php php php php/php*php*
php php php php php php*php Objectphp forphp php$thisphp-php>php_dom
php php php php php php*
php php php php php php*php php@varphp php php php php DOMXpath
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_xpathphp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp objectphp fromphp DOMphp Elementphp.
php php php php php php*php Propertiesphp arephp automaticallyphp fetchedphp fromphp XML
php php php php php php*php accordingphp tophp arrayphp ofphp php$php_fieldsphp tophp bephp readphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomElementphp php$resultphp php thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomElementphp php$domphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;
php php php php php php php php php$thisphp-php>php_domphp php=php php$domphp;

php php php php php php php php php/php/php defaultphp fieldsphp forphp allphp searchphp results
php php php php php php php php php$fieldsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php mergephp withphp childphp'sphp objectphp fields
php php php php php php php php php$thisphp-php>php_fieldsphp php=php arrayphp_mergephp(php$thisphp-php>php_fieldsphp,php php$fieldsphp)php;

php php php php php php php php php/php/php addphp resultsphp tophp appropriatephp fields
php php php php php php php php foreachphp(php$thisphp-php>php_fieldsphp asphp php$phpNamephp php=php>php php$xmlNamephp)php php{
php php php php php php php php php php php php php$queryphp php=php php"php.php/php$xmlNamephp/textphp(php)php"php;
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$queryphp,php php$thisphp-php>php_domphp)php;
php php php php php php php php php php php php ifphp php(php$nodephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$phpNamephp}php php=php php(stringphp)php php$nodephp-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp weblogphp nodephp andphp setsphp weblogphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp php void
php php php php php php*php/
php php php php protectedphp functionphp php_parseWeblogphp(php)
php php php php php{
php php php php php php php php php/php/php weblogphp objectphp field
php php php php php php php php php$resultphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php.php/weblogphp'php,php php$thisphp-php>php_domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Weblog
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Weblogphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_weblogphp php=php newphp Zendphp_Servicephp_Technoratiphp_Weblogphp(php$resultphp-php>itemphp(php0php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_weblogphp php=php nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp documentphp fragmentphp forphp thisphp objectphp asphp XMLphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp php php thephp documentphp fragmentphp forphp thisphp object
php php php php php php*php php php php php php php php php php php php php php php php php php convertedphp intophp XMLphp format
php php php php php php*php/
php php php php publicphp functionphp getXmlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domphp-php>ownerDocumentphp-php>saveXMLphp(php$thisphp-php>php_domphp)php;
php php php php php}
php}
