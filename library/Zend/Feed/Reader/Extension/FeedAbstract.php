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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FeedAbstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Entryphp_Atom
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Entryphp/Atomphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Entryphp_Rss
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Entryphp/Rssphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php{
php php php php php/php*php*
php php php php php php*php Parsedphp feedphp data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Parsedphp feedphp dataphp inphp thephp shapephp ofphp aphp DOMDocument
php php php php php php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_domDocumentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp basephp XPathphp queryphp usedphp tophp retrievephp feedphp data
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xpathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp XPathphp prefix
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xpathPrefixphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Abstractphp php$feedphp Thephp sourcephp Zendphp_Feedphp object
php php php php php php*php php@paramphp php stringphp php$typephp Feedphp type
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp,php php$typephp php=php nullphp,php DOMXPathphp php$xpathphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_domDocumentphp php=php php$domphp;

php php php php php php php php ifphp php(php$typephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php php$typephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php Zendphp_Feedphp_Readerphp:php:detectTypephp(php$domphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$xpathphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_xpathphp php=php php$xpathphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_domDocumentphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_registerNamespacesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp DOM
php php php php php php*
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp getDomDocumentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domDocumentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Feedphp'sphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php php$assumedphp php=php php$thisphp-php>getDomDocumentphp(php)php-php>encodingphp;
php php php php php php php php returnphp php$assumedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'typephp'php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp feedphp asphp anphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)php php/php/php untested
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp XPathphp query
php php php php php php*
php php php php php php*php php@paramphp php DOMXPathphp php$xpath
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php php php php php php*php/
php php php php publicphp functionphp setXpathphp(DOMXPathphp php$xpathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp php=php php$xpathphp;
php php php php php php php php php$thisphp-php>php_registerNamespacesphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp DOMXPathphp object
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getXpathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xpathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp XPathphp prefix
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getXpathPrefixphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xpathPrefixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp XPathphp prefix
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Feedphp_Atom
php php php php php php*php/
php php php php publicphp functionphp setXpathPrefixphp(php$prefixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathPrefixphp php=php php$prefixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_registerNamespacesphp(php)php;
php}
