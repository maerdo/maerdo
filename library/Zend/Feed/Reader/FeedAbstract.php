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
php php*php php@versionphp php php php php$Idphp:php FeedAbstractphp.phpphp php2php2php0php9php2php php2php0php1php0php-php0php5php-php0php4php php1php2php:php5php0php:php5php1Zphp padraicphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_feedphp_Readerphp_FeedInterface
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/FeedInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Readerphp_FeedAbstractphp implementsphp Zendphp_Feedphp_Readerphp_FeedInterface
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
php php php php php php*php Anphp arrayphp ofphp parsedphp feedphp entries
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_entriesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Aphp pointerphp forphp thephp iteratorphp tophp keepphp trackphp ofphp thephp entriesphp array
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_entriesKeyphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp basephp XPathphp queryphp usedphp tophp retrievephp feedphp data
php php php php php php*
php php php php php php*php php@varphp DOMXPath
php php php php php php*php/
php php php php protectedphp php$php_xpathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp loadedphp extensions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extensionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Originalphp Sourcephp URIphp php(setphp ifphp importedphp fromphp aphp URIphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_originalSourceUriphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp DomDocumentphp Thephp DOMphp objectphp forphp thephp feedphp'sphp XML
php php php php php php*php php@paramphp stringphp php$typephp Feedphp type
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domDocumentphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_domDocumentphp php=php php$domDocumentphp;
php php php php php php php php php$thisphp-php>php_xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_domDocumentphp)php;

php php php php php php php php ifphp php(php$typephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php php$typephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'typephp'php]php php=php Zendphp_Feedphp_Readerphp:php:detectTypephp(php$thisphp-php>php_domDocumentphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_registerNamespacesphp(php)php;
php php php php php php php php php$thisphp-php>php_indexEntriesphp(php)php;
php php php php php php php php php$thisphp-php>php_loadExtensionsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp originalphp sourcephp URIphp forphp thephp feedphp beingphp parsedphp.php Thisphp value
php php php php php php*php isphp returnedphp fromphp getFeedLinkphp(php)php methodphp ifphp thephp feedphp doesphp notphp carry
php php php php php php*php aphp selfphp-referencingphp URIphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uri
php php php php php php*php/
php php php php publicphp functionphp setOriginalSourceUriphp(php$uriphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_originalSourceUriphp php=php php$uriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp originalphp sourcephp URIphp forphp thephp feedphp beingphp parsedphp.php Returnsphp nullphp if
php php php php php php*php unsetphp orphp thephp feedphp wasphp notphp importedphp fromphp aphp URIphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getOriginalSourceUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_originalSourceUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp feedphp entriesphp.
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_entriesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_EntryInterface
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php ifphp php(substrphp(php$thisphp-php>getTypephp(php)php,php php0php,php php3php)php php=php=php php'rssphp'php)php php{
php php php php php php php php php php php php php$readerphp php=php newphp Zendphp_Feedphp_Readerphp_Entryphp_Rssphp(php$thisphp-php>php_entriesphp[php$thisphp-php>keyphp(php)php]php,php php$thisphp-php>keyphp(php)php,php php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$readerphp php=php newphp Zendphp_Feedphp_Readerphp_Entryphp_Atomphp(php$thisphp-php>php_entriesphp[php$thisphp-php>keyphp(php)php]php,php php$thisphp-php>keyphp(php)php,php php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$readerphp-php>setXpathphp(php$thisphp-php>php_xpathphp)php;

php php php php php php php php returnphp php$readerphp;
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
php php php php php php php php ifphp php(emptyphp(php$assumedphp)php)php php{
php php php php php php php php php php php php php$assumedphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$assumedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedphp asphp xml
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php php returnphp php$thisphp-php>getDomDocumentphp(php)php-php>saveXmlphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp DOMElementphp representingphp thephp itemsphp/feedphp element
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getElementphp(php)
php php php php php{
php php php php php php php php php php returnphp php$thisphp-php>getDomDocumentphp(php)php-php>documentElementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp DOMXPathphp objectphp forphp thisphp feed
php php php php php php*
php php php php php php*php php@returnphp DOMXPath
php php php php php php*php/
php php php php publicphp functionphp getXpathphp(php)
php php php php php{
php php php php php php php php php php returnphp php$thisphp-php>php_xpathphp;
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
php php php php php php*php Returnphp thephp currentphp feedphp key
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entriesKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp thephp feedphp pointerphp forward
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_entriesKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp thephp pointerphp inphp thephp feedphp object
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_entriesKeyphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp tophp seephp ifphp thephp iteratorphp isphp stillphp valid
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php0php <php=php php$thisphp-php>php_entriesKeyphp php&php&php php$thisphp-php>php_entriesKeyphp <php php$thisphp-php>countphp(php)php;
php php php php php}

php php php php publicphp functionphp getExtensionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_extensionsphp;
php php php php php}

php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$extensionphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$extensionphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Methodphp:php php'php php.php php$method
php php php php php php php php php.php php'doesphp notphp existphp andphp couldphp notphp bephp locatedphp onphp aphp registeredphp Extensionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp Extensionphp objectphp withphp thephp matchingphp namephp php(postfixedphp withphp php_Feedphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php php php php php php*php/
php php php php publicphp functionphp getExtensionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp php.php php'php_Feedphp'php,php php$thisphp-php>php_extensionsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_extensionsphp[php$namephp php.php php'php_Feedphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php protectedphp functionphp php_loadExtensionsphp(php)
php php php php php{
php php php php php php php php php$allphp php=php Zendphp_Feedphp_Readerphp:php:getExtensionsphp(php)php;
php php php php php php php php php$feedphp php=php php$allphp[php'feedphp'php]php;
php php php php php php php php foreachphp php(php$feedphp asphp php$extensionphp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$extensionphp,php php$allphp[php'corephp'php]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$classNamephp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php$extensionphp)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extensionphp]php php=php newphp php$classNamephp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDomDocumentphp(php)php,php php$thisphp-php>php_dataphp[php'typephp'php]php,php php$thisphp-php>php_xpath
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp allphp entriesphp tophp thephp internalphp entriesphp array
php php php php php php*
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_indexEntriesphp(php)php;

php php php php php/php*php*
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_registerNamespacesphp(php)php;
php}
