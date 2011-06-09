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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Response
php{
php php php php php/php*php*
php php php php php php*php XMLphp namespacephp usedphp forphp SimpleDBphp responsesphp.
php php php php php php*php/
php php php php protectedphp php$php_xmlNamespacephp php=php php'httpphp:php/php/sdbphp.amazonawsphp.comphp/docphp/php2php0php0php9php-php0php4php-php1php5php/php'php;

php php php php php/php*php*
php php php php php php*php Thephp originalphp HTTPphp response
php php php php php php*
php php php php php php*php Thisphp containsphp thephp responsephp bodyphp andphp headersphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php privatephp php$php_httpResponsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp responsephp documentphp object
php php php php php php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php privatephp php$php_documentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp responsephp XPath
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php privatephp php$php_xpathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Lastphp errorphp code
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_errorCodephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Lastphp errorphp message
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_errorMessagephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp highphp-levelphp SimpleDBphp responsephp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Responsephp php$httpResponsephp thephp HTTPphp responsephp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Httpphp_Responsephp php$httpResponsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_httpResponsephp php=php php$httpResponsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp XPathphp objectphp forphp thisphp response
php php php php php php*
php php php php php php*php php@returnphp DOMXPathphp thephp XPathphp objectphp forphp responsephp.
php php php php php php*php/
php php php php publicphp functionphp getXPathphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_xpathphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$documentphp php=php php$thisphp-php>getDocumentphp(php)php;
php php php php php php php php php php php php ifphp php(php$documentphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp php=php falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$documentphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'sdbphp'php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getNamespacephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_xpathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp SimpleXMLphp documentphp objectphp forphp thisphp response
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp getSimpleXMLDocumentphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$bodyphp php=php php$thisphp-php>php_httpResponsephp-php>getBodyphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Httpphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$bodyphp php=php falsephp;
php php php php php php php php php}


php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$bodyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp HTTPphp responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php publicphp functionphp getHttpResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpResponsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp documentphp objectphp forphp thisphp response
php php php php php php*
php php php php php php*php php@returnphp DOMDocumentphp thephp DOMphp Documentphp forphp thisphp responsephp.
php php php php php php*php/
php php php php publicphp functionphp getDocumentphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$bodyphp php=php php$thisphp-php>php_httpResponsephp-php>getBodyphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Httpphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$bodyphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_documentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$bodyphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php/php turnphp offphp libxmlphp errorphp handling
php php php php php php php php php php php php php php php php php$errorsphp php=php libxmlphp_usephp_internalphp_errorsphp(php)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_documentphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_documentphp-php>loadXMLphp(php$bodyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_documentphp php=php falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php resetphp libxmlphp errorphp handling
php php php php php php php php php php php php php php php php libxmlphp_clearphp_errorsphp(php)php;
php php php php php php php php php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(php$errorsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_documentphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_documentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp setphp XMLphp Namespacephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xmlNamespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp XMLphp Namespace
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php/
php php php php publicphp functionphp setNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlNamespacephp php=php php$namespacephp;
php php php php php}
php}
