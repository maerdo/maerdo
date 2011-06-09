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
php php*php php@versionphp php php php php$Idphp:php EntryAbstractphp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php{
php php php php php/php*php*
php php php php php php*php Feedphp entryphp data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php DOMphp documentphp object
php php php php php php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_domDocumentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Entryphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Feedphp_Entryphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_entryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Pointerphp tophp thephp currentphp entry
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_entryKeyphp php=php php0php;

php php php php php/php*php*
php php php php php php*php XPathphp object
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xpathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php XPathphp query
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xpathPrefixphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Entryphp_Abstractphp php$entry
php php php php php php*php php@paramphp php intphp php$entryKey
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$entryphp,php php$entryKeyphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_entryphp php php php php php php php=php php$entryphp;
php php php php php php php php php$thisphp-php>php_entryKeyphp php php php php=php php$entryKeyphp;
php php php php php php php php php$thisphp-php>php_domDocumentphp php=php php$entryphp-php>ownerDocumentphp;

php php php php php php php php ifphp php(php$typephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php php$typephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php Zendphp_Feedphp_Readerphp:php:detectTypephp(php$entryphp-php>ownerDocumentphp,php truephp)php;
php php php php php php php php php}
php php php php php php php php php/php/php setphp thephp XPathphp queryphp prefixphp forphp thephp entryphp beingphp queried
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0
php php php php php php php php php php php php php|php|php php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>setXpathPrefixphp(php'php/php/rssphp:itemphp[php'php php.php php(php$thisphp-php>php_entryKeyphp+php1php)php php.php php'php]php'php)php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0
php php php php php php php php php php php php php php php php php php php|php|php php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>setXpathPrefixphp(php'php/php/atomphp:entryphp[php'php php.php php(php$thisphp-php>php_entryKeyphp+php1php)php php.php php'php]php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setXpathPrefixphp(php'php/php/itemphp[php'php php.php php(php$thisphp-php>php_entryKeyphp+php1php)php php.php php'php]php'php)php;
php php php php php php php php php}
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
php php php php php php*php Getphp thephp Entryphp'sphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php php$assumedphp php=php php$thisphp-php>getDomDocumentphp(php)php-php>encodingphp;
php php php php php php php php returnphp php$assumedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'typephp'php]php;
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
php php php php php php*php Getphp thephp XPathphp queryphp object
php php php php php php*
php php php php php php*php php@returnphp DOMXPath
php php php php php php*php/
php php php php publicphp functionphp getXpathphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_xpathphp)php php{
php php php php php php php php php php php php php$thisphp-php>setXpathphp(newphp DOMXPathphp(php$thisphp-php>getDomDocumentphp(php)php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_xpathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp thephp entryphp tophp anphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
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
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php php php php php php*php/
php php php php publicphp functionphp setXpathPrefixphp(php$prefixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathPrefixphp php=php php$prefixphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp XMLphp namespaces
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp abstractphp functionphp php_registerNamespacesphp(php)php;
php}
