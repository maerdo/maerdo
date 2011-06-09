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
php php*php php@packagephp php php php Zendphp_Dom
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Queryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Domphp_Queryphp_Cssphp2Xpath
php php*php/
requirephp_oncephp php'Zendphp/Domphp/Queryphp/Cssphp2Xpathphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Domphp_Queryphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Domphp/Queryphp/Resultphp.phpphp'php;

php/php*php*
php php*php Queryphp DOMphp structuresphp basedphp onphp CSSphp selectorsphp andphp/orphp XPath
php php*
php php*php php@packagephp php php php Zendphp_Dom
php php*php php@subpackagephp Query
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Domphp_Query
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Documentphp types
php php php php php php*php/
php php php php constphp DOCphp_XMLphp php php php=php php'docXmlphp'php;
php php php php constphp DOCphp_HTMLphp php php=php php'docHtmlphp'php;
php php php php constphp DOCphp_XHTMLphp php=php php'docXhtmlphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_documentphp;

php php php php php/php*php*
php php php php php php*php DOMDocumentphp errorsphp,php ifphp any
php php php php php php*php php@varphp falsephp|array
php php php php php php*php/
php php php php protectedphp php$php_documentErrorsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Documentphp type
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_docTypephp;

php php php php php/php*php*
php php php php php php*php Documentphp encoding
php php php php php php*php php@varphp nullphp|string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php XPathphp namespaces
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_xpathNamespacesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php$document
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$documentphp php=php nullphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setEncodingphp(php$encodingphp)php;
php php php php php php php php php$thisphp-php>setDocumentphp(php$documentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp documentphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Domphp_Query
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(nullphp php=php=php=php php$encodingphp)php php?php nullphp php:php php(stringphp)php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp encoding
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp documentphp tophp query
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$document
php php php php php php*php php@paramphp php nullphp|stringphp php$encodingphp Documentphp encoding
php php php php php php*php php@returnphp Zendphp_Domphp_Query
php php php php php php*php/
php php php php publicphp functionphp setDocumentphp(php$documentphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php0php php=php=php=php strlenphp(php$documentphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php/php/php breakingphp XMLphp declarationphp tophp makephp syntaxphp highlightingphp work
php php php php php php php php ifphp php(php'<php'php php.php php'php?xmlphp'php php=php=php substrphp(trimphp(php$documentphp)php,php php0php,php php5php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>setDocumentXmlphp(php$documentphp,php php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(strstrphp(php$documentphp,php php'DTDphp XHTMLphp'php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>setDocumentXhtmlphp(php$documentphp,php php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>setDocumentHtmlphp(php$documentphp,php php$encodingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp HTMLphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$document
php php php php php php*php php@paramphp php nullphp|stringphp php$encodingphp Documentphp encoding
php php php php php php*php php@returnphp Zendphp_Domphp_Query
php php php php php php*php/
php php php php publicphp functionphp setDocumentHtmlphp(php$documentphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_documentphp php=php php(stringphp)php php$documentphp;
php php php php php php php php php$thisphp-php>php_docTypephp php php=php selfphp:php:DOCphp_HTMLphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$encodingphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp XHTMLphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$document
php php php php php php*php php@paramphp php nullphp|stringphp php$encodingphp Documentphp encoding
php php php php php php*php php@returnphp Zendphp_Domphp_Query
php php php php php php*php/
php php php php publicphp functionphp setDocumentXhtmlphp(php$documentphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_documentphp php=php php(stringphp)php php$documentphp;
php php php php php php php php php$thisphp-php>php_docTypephp php php=php selfphp:php:DOCphp_XHTMLphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$encodingphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp XMLphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$document
php php php php php php*php php@paramphp php nullphp|stringphp php$encodingphp Documentphp encoding
php php php php php php*php php@returnphp Zendphp_Domphp_Query
php php php php php php*php/
php php php php publicphp functionphp setDocumentXmlphp(php$documentphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_documentphp php=php php(stringphp)php php$documentphp;
php php php php php php php php php$thisphp-php>php_docTypephp php php=php selfphp:php:DOCphp_XMLphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$encodingphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp document
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDocumentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_documentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDocumentTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anyphp DOMDocumentphp errorsphp found
php php php php php php*
php php php php php php*php php@returnphp falsephp|array
php php php php php php*php/
php php php php publicphp functionphp getDocumentErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_documentErrorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp aphp CSSphp selectorphp query
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$query
php php php php php php*php php@returnphp Zendphp_Domphp_Queryphp_Result
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$queryphp)
php php php php php{
php php php php php php php php php$xpathQueryphp php=php Zendphp_Domphp_Queryphp_Cssphp2Xpathphp:php:transformphp(php$queryphp)php;
php php php php php php php php returnphp php$thisphp-php>queryXpathphp(php$xpathQueryphp,php php$queryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp anphp XPathphp query
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$xpathQuery
php php php php php php*php php@paramphp php stringphp php$queryphp CSSphp selectorphp query
php php php php php php*php php@returnphp Zendphp_Domphp_Queryphp_Result
php php php php php php*php/
php php php php publicphp functionphp queryXpathphp(php$xpathQueryphp,php php$queryphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$documentphp php=php php$thisphp-php>getDocumentphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Domphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Domphp_Exceptionphp(php'Cannotphp queryphp;php nophp documentphp registeredphp'php)php;
php php php php php php php php php}

php php php php php php php php php$encodingphp php=php php$thisphp-php>getEncodingphp(php)php;
php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(truephp)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$encodingphp)php php{
php php php php php php php php php php php php php$domDocphp php=php newphp DOMDocumentphp(php'php1php.php0php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$domDocphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$encodingphp)php;
php php php php php php php php php}
php php php php php php php php php$typephp php php php=php php$thisphp-php>getDocumentTypephp(php)php;
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp selfphp:php:DOCphp_XMLphp:
php php php php php php php php php php php php php php php php php$successphp php=php php$domDocphp-php>loadXMLphp(php$documentphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DOCphp_HTMLphp:
php php php php php php php php php php php php casephp selfphp:php:DOCphp_XHTMLphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$successphp php=php php$domDocphp-php>loadHTMLphp(php$documentphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php php$errorsphp php=php libxmlphp_getphp_errorsphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$errorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_documentErrorsphp php=php php$errorsphp;
php php php php php php php php php php php php libxmlphp_clearphp_errorsphp(php)php;
php php php php php php php php php}
php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(falsephp)php;

php php php php php php php php ifphp php(php!php$successphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Domphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Domphp_Exceptionphp(sprintfphp(php'Errorphp parsingphp documentphp php(typephp php=php=php php%sphp)php'php,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php php$nodeListphp php php php=php php$thisphp-php>php_getNodeListphp(php$domDocphp,php php$xpathQueryphp)php;
php php php php php php php php returnphp newphp Zendphp_Domphp_Queryphp_Resultphp(php$queryphp,php php$xpathQueryphp,php php$domDocphp,php php$nodeListphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp XPathphp namespaces
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$xpathNamespaces
php php php php php php*php php@returnphp php void
php php php php php php*php/
php php php php publicphp functionphp registerXpathNamespacesphp(php$xpathNamespacesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathNamespacesphp php=php php$xpathNamespacesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp nodephp list
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$document
php php php php php php*php php@paramphp php stringphp|arrayphp php$xpathQuery
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getNodeListphp(php$documentphp,php php$xpathQueryphp)
php php php php php{
php php php php php php php php php$xpathphp php php php php php php=php newphp DOMXPathphp(php$documentphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_xpathNamespacesphp asphp php$prefixphp php=php>php php$namespaceUriphp)php php{
php php php php php php php php php php php php php$xpathphp-php>registerNamespacephp(php$prefixphp,php php$namespaceUriphp)php;
php php php php php php php php php}
php php php php php php php php php$xpathQueryphp php=php php(stringphp)php php$xpathQueryphp;
php php php php php php php php ifphp php(pregphp_matchphp_allphp(php'php|php\php[containsphp\php(php(php@php[aphp-zphp0php-php9php_php-php]php+php)php,php\sphp?php\php'php php|iphp'php,php php$xpathQueryphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$attributephp)php php{
php php php php php php php php php php php php php php php php php$queryStringphp php=php php'php/php/php*php[php'php php.php php$attributephp php.php php'php]php'php;
php php php php php php php php php php php php php php php php php$attributeNamephp php=php substrphp(php$attributephp,php php1php)php;
php php php php php php php php php php php php php php php php php$nodesphp php=php php$xpathphp-php>queryphp(php$queryStringphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$attrphp php=php php$nodephp-php>attributesphp-php>getNamedItemphp(php$attributeNamephp)php;
php php php php php php php php php php php php php php php php php php php php php$attrphp-php>valuephp php=php php'php php'php php.php php$attrphp-php>valuephp php.php php'php php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$xpathphp-php>queryphp(php$xpathQueryphp)php;
php php php php php}
php}
