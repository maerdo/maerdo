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
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php2php7php9php1php php2php0php1php0php-php0php8php-php0php4php php1php6php:php1php1php:php4php7Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Finding
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_domphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xPathphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@paramphp php DOMElementphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$domphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php=php php$domphp;
php php php php php php php php php$thisphp-php>php_initXPathphp(php)php;
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@paramphp php stringphp php$attribute
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp attributesphp(php$tagphp,php php$attributephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$attributephp)php php{
php php php php php php php php php php php php php/php/php allphp attributes
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$tagphp,php php$thisphp-php>php_attributesphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_attributesphp[php$tagphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php aphp specificphp attribute
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_attributesphp[php$tagphp]php[php$attributephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_attributesphp[php$tagphp]php[php$attributephp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp objectphp.
php php php php php php*
php php php php php php*php Postphp constructphp logicphp,php classesphp mustphp readphp theirphp membersphp herephp.php Calledphp from
php php php php php php*php php{php@linkphp php_php_constructphp(php)php}php asphp finalphp stepphp ofphp objectphp initializationphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp DOMXPathphp forphp currentphp DOMphp objectphp.
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Servicephp_Ebayphp_Findingphp:php:php_parseResponsephp(php)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initXPathphp(php)
php php php php php{
php php php php php php php php php$documentphp php=php php$thisphp-php>php_domphp-php>ownerDocumentphp;
php php php php php php php php ifphp php(php!issetphp(php$documentphp-php>ebayFindingXPathphp)php)php php{
php php php php php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$documentphp)php;
php php php php php php php php php php php php foreachphp php(Zendphp_Servicephp_Ebayphp_Findingphp:php:getXmlNamespacesphp(php)php asphp php$aliasphp php=php>php php$uriphp)php php{
php php php php php php php php php php php php php php php php php$xpathphp-php>registerNamespacephp(php$aliasphp,php php$uriphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$documentphp-php>ebayFindingXPathphp php=php php$xpathphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_xPathphp php=php php$documentphp-php>ebayFindingXPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getDomphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp DOMXPath
php php php php php php*php/
php php php php publicphp functionphp getXPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$arrayphp Whenphp truephp meansphp itphp expectsphp morephp thanphp onephp nodephp occurence
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_queryphp(php$pathphp,php php$typephp,php php$arrayphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php findphp values
php php php php php php php php php$valuesphp php=php arrayphp(php)php;
php php php php php php php php php$nodesphp php php=php php$thisphp-php>php_xPathphp-php>queryphp(php$pathphp,php php$thisphp-php>php_domphp)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$valuephp php php php php=php php(stringphp)php php$nodephp-php>nodeValuephp;
php php php php php php php php php php php php php$valuesphp[php]php php=php Zendphp_Servicephp_Ebayphp_Abstractphp:php:toPhpValuephp(php$valuephp,php php$typephp)php;
php php php php php php php php php php php php ifphp php(php!php$arrayphp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php array
php php php php php php php php ifphp php(php$arrayphp)php php{
php php php php php php php php php php php php returnphp php$valuesphp;
php php php php php php php php php}

php php php php php php php php php/php/php singlephp value
php php php php php php php php ifphp php(countphp(php$valuesphp)php)php php{
php php php php php php php php php php php php returnphp resetphp(php$valuesphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php nophp nodesphp fount
php php php php php php php php returnphp nullphp;
php php php php php}
php}
