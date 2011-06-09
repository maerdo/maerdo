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
php php*php php@versionphp php php php php$Idphp:php EntryAbstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Readerphp_EntryAbstract
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
php php php php php php*php php@varphp Zendphp_Feedphp_Entryphp_Interface
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
php php php php php php*php Registeredphp extensions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extensionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$entry
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
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php Zendphp_Feedphp_Readerphp:php:detectTypephp(php$feedphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_loadExtensionsphp(php)php;
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
php php php php php php*php Getphp thephp entryphp element
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getElementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Entryphp'sphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php php$assumedphp php=php php$thisphp-php>getDomDocumentphp(php)php-php>encodingphp;
php php php php php php php php ifphp php(emptyphp(php$assumedphp)php)php php{
php php php php php php php php php php php php php$assumedphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$assumedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp entryphp asphp xml
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$entryphp php=php php$domphp-php>importNodephp(php$thisphp-php>getElementphp(php)php,php truephp)php;
php php php php php php php php php$domphp-php>appendChildphp(php$entryphp)php;
php php php php php php php php returnphp php$domphp-php>saveXmlphp(php)php;
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
php php php php php php*php Setphp thephp XPathphp query
php php php php php php*
php php php php php php*php php@paramphp php DOMXPathphp php$xpath
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Entryphp_EntryAbstract
php php php php php php*php/
php php php php publicphp functionphp setXpathphp(DOMXPathphp php$xpathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp php=php php$xpathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp registeredphp extensions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExtensionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_extensionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp Extensionphp objectphp withphp thephp matchingphp namephp php(postfixedphp withphp php_Entryphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php php php php php php*php/
php php php php publicphp functionphp getExtensionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp php.php php'php_Entryphp'php,php php$thisphp-php>php_extensionsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_extensionsphp[php$namephp php.php php'php_Entryphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp overloadingphp:php callphp givenphp methodphp onphp firstphp extensionphp implementingphp it
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exceptionphp ifphp nophp extensionsphp implementsphp thephp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$extensionphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$extensionphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Methodphp:php php'php php.php php$method
php php php php php php php php php php php php php.php php'doesphp notphp existphp andphp couldphp notphp bephp locatedphp onphp aphp registeredphp Extensionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp extensionsphp fromphp Zendphp_Feedphp_Reader
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadExtensionsphp(php)
php php php php php{
php php php php php php php php php$allphp php=php Zendphp_Feedphp_Readerphp:php:getExtensionsphp(php)php;
php php php php php php php php php$feedphp php=php php$allphp[php'entryphp'php]php;
php php php php php php php php foreachphp php(php$feedphp asphp php$extensionphp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$extensionphp,php php$allphp[php'corephp'php]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$classNamephp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php$extensionphp)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extensionphp]php php=php newphp php$classNamephp(
php php php php php php php php php php php php php php php php php$thisphp-php>getElementphp(php)php,php php$thisphp-php>php_entryKeyphp,php php$thisphp-php>php_dataphp[php'typephp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}
php}
