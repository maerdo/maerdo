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
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/EntryAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Collectionphp_Category
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Collectionphp/Categoryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Feedphp_Atomphp_Source
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Feedphp/Atomphp/Sourcephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Atomphp_Entry
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php{
php php php php php/php*php*
php php php php php php*php Getphp thephp specifiedphp author
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getAuthorphp(php$indexphp php=php php0php)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>getAuthorsphp(php)php;

php php php php php php php php ifphp php(issetphp(php$authorsphp[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp php$authorsphp[php$indexphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp withphp feedphp authors
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAuthorsphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'authorsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$authorsphp php=php arrayphp(php)php;
php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:authorphp'php)php;

php php php php php php php php ifphp php(php!php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php TODOphp:php Limitphp queryphp tophp feedphp levelphp elsphp onlyphp!
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php'php/php/atomphp:authorphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$authorphp)php php{
php php php php php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_getAuthorphp(php$authorphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$authorphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$authorsphp[php]php php=php php$authorphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$authorsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$authorsphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$authorsphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Authorphp(
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Readerphp:php:arrayUniquephp(php$authorsphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php php$authorsphp;
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'contentphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'contentphp'php]php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php nullphp;

php php php php php php php php php$elphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:contentphp'php)php;
php php php php php php php php ifphp(php$elphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php$elphp php=php php$elphp-php>itemphp(php0php)php;
php php php php php php php php php php php php php$typephp php=php php$elphp-php>getAttributephp(php'typephp'php)php;
php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'php'php:
php php php php php php php php php php php php php php php php casephp php'textphp'php:
php php php php php php php php php php php php php php php php casephp php'textphp/plainphp'php:
php php php php php php php php php php php php php php php php casephp php'htmlphp'php:
php php php php php php php php php php php php php php php php casephp php'textphp/htmlphp'php:
php php php php php php php php php php php php php php php php php php php php php$contentphp php=php php$elphp-php>nodeValuephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'xhtmlphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getXpathphp(php)php-php>registerNamespacephp(php'xhtmlphp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/xhtmlphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$xhtmlphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:contentphp/xhtmlphp:divphp'
php php php php php php php php php php php php php php php php php php php php php)php-php>itemphp(php0php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php$xhtmlphp-php>setAttributephp(php'xmlnsphp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/xhtmlphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$dphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php$xhtmlsphp php=php php$dphp-php>importNodephp(php$xhtmlphp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php$dphp-php>appendChildphp(php$xhtmlsphp)php;
php php php php php php php php php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>php_collectXhtmlphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$dphp-php>saveXMLphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$dphp-php>lookupPrefixphp(php'httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/xhtmlphp'php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/varphp_dumpphp(php$contentphp)php;php exitphp;

php php php php php php php php ifphp php(php!php$contentphp)php php{
php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>getDescriptionphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'contentphp'php]php php=php trimphp(php$contentphp)php;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'contentphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp outphp XHTMLphp tophp removephp thephp namespacing
php php php php php php*php/
php php php php protectedphp functionphp php_collectXhtmlphp(php$xhtmlphp,php php$prefixphp)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$prefixphp)php)php php$prefixphp php=php php$prefixphp php.php php'php:php'php;
php php php php php php php php php$matchesphp php=php arrayphp(
php php php php php php php php php php php php php"php/<php\php?xmlphp[php^<php]php*php>php[php^<php]php*<php"php php.php php$prefixphp php.php php"divphp[php^<php]php*php/php"php,
php php php php php php php php php php php php php"php/<php\php/php"php php.php php$prefixphp php.php php"divphp>php\sphp*php$php/php"
php php php php php php php php php)php;
php php php php php php php php php$xhtmlphp php=php pregphp_replacephp(php$matchesphp,php php'php'php,php php$xhtmlphp)php;
php php php php php php php php ifphp php(php!emptyphp(php$prefixphp)php)php php{
php php php php php php php php php php php php php$xhtmlphp php=php pregphp_replacephp(php"php/php(<php[php\php/php]php?php)php"php php.php php$prefixphp php.php php"php(php[aphp-zAphp-Zphp]php+php)php/php"php,php php'php$php1php$php2php'php,php php$xhtmlphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$xhtmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datecreatedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>php_getAtomTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:createdphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:publishedphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dateCreatedphp)php php{
php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$datephp-php>setphp(php$dateCreatedphp,php Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datecreatedphp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datemodifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>php_getAtomTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:modifiedphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:updatedphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dateModifiedphp)php php{
php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$datephp-php>setphp(php$dateModifiedphp,php Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'descriptionphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php php php php php}

php php php php php php php php php$descriptionphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:summaryphp)php'php)php;

php php php php php php php php ifphp php(php!php$descriptionphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'descriptionphp'php]php php=php php$descriptionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp enclosure
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEnclosurephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'enclosurephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'enclosurephp'php]php;
php php php php php php php php php}

php php php php php php php php php$enclosurephp php=php nullphp;

php php php php php php php php php$nodeListphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:linkphp[php@relphp=php"enclosurephp"php]php'php)php;

php php php php php php php php ifphp php(php$nodeListphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php$enclosurephp php=php newphp stdClassphp(php)php;
php php php php php php php php php php php php php$enclosurephp-php>urlphp php php php php=php php$nodeListphp-php>itemphp(php0php)php-php>getAttributephp(php'hrefphp'php)php;
php php php php php php php php php php php php php$enclosurephp-php>lengthphp php=php php$nodeListphp-php>itemphp(php0php)php-php>getAttributephp(php'lengthphp'php)php;
php php php php php php php php php php php php php$enclosurephp-php>typephp php php php=php php$nodeListphp-php>itemphp(php0php)php-php>getAttributephp(php'typephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'enclosurephp'php]php php=php php$enclosurephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'enclosurephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp ID
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php php php php php}

php php php php php php php php php$idphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:idphp)php'php)php;

php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getPermalinkphp(php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getPermalinkphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getTitlephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$idphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp basephp URIphp ofphp thephp feedphp php(ifphp setphp)php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'baseUrlphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'baseUrlphp'php]php;
php php php php php php php php php}

php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'
php php php php php php php php php php php php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php@xmlphp:basephp[php1php]php'
php php php php php php php php php.php php'php)php'php)php;

php php php php php php php php ifphp php(php!php$baseUrlphp)php php{
php php php php php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php/php/php@xmlphp:basephp[php1php]php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$baseUrlphp)php php{
php php php php php php php php php php php php php$baseUrlphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'baseUrlphp'php]php php=php php$baseUrlphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'baseUrlphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp specificphp link
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLinkphp(php$indexphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'linksphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>getLinksphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'linksphp'php]php[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linksphp'php]php[php$indexphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp links
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLinksphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'linksphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linksphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linksphp php=php arrayphp(php)php;

php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:linkphp[php@relphp=php"alternatephp"php]php/php@hrefphp'php php.php php'php|php'php php.
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:linkphp[notphp(php@relphp)php]php/php@hrefphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$linkphp)php php{
php php php php php php php php php php php php php php php php php$linksphp[php]php php=php php$thisphp-php>php_absolutiseUriphp(php$linkphp-php>valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'linksphp'php]php php=php php$linksphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linksphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp permalinkphp tophp thephp entry
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPermalinkphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLinkphp(php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp title
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php php php php php}

php php php php php php php php php$titlephp php=php php$thisphp-php>getXpathphp(php)php-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:titlephp)php'php)php;

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'titlephp'php]php php=php php$titlephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp commentsphp/repliesphp forphp currentphp entry
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getCommentCountphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'commentcountphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentcountphp'php]php;
php php php php php php php php php}

php php php php php php php php php$countphp php=php nullphp;

php php php php php php php php php$thisphp-php>getXpathphp(php)php-php>registerNamespacephp(php'threadphp1php0php'php,php php'httpphp:php/php/purlphp.orgphp/syndicationphp/threadphp/php1php.php0php'php)php;
php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:linkphp[php@relphp=php"repliesphp"php]php/php@threadphp1php0php:countphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$countphp php=php php$listphp-php>itemphp(php0php)php-php>valuephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'commentcountphp'php]php php=php php$countphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentcountphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp URIphp pointingphp tophp thephp HTMLphp pagephp wherephp commentsphp canphp bephp madephp onphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCommentLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'commentlinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentlinkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php nullphp;

php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:linkphp[php@relphp=php"repliesphp"php andphp php@typephp=php"textphp/htmlphp"php]php/php@hrefphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$linkphp php=php php$listphp-php>itemphp(php0php)php-php>valuephp;
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_absolutiseUriphp(php$linkphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'commentlinkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp URIphp pointingphp tophp aphp feedphp ofphp allphp commentsphp forphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCommentFeedLinkphp(php$typephp php=php php'atomphp'php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'commentfeedlinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php nullphp;

php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:linkphp[php@relphp=php"repliesphp"php andphp php@typephp=php"applicationphp/php'php.php$typephp.php'php+xmlphp"php]php/php@hrefphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$linkphp php=php php$listphp-php>itemphp(php0php)php-php>valuephp;
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_absolutiseUriphp(php$linkphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp categories
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Collectionphp_Category
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'categoriesphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_getAtomTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp:categoryphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Sincephp Atomphp php0php.php3php didphp notphp supportphp categoriesphp,php itphp wouldphp havephp usedphp the
php php php php php php php php php php php php php php*php Dublinphp Corephp extensionphp.php Howeverphp therephp isphp aphp smallphp possibilityphp Atomphp php0php.php3
php php php php php php php php php php php php php php*php mayphp havephp beenphp retrofittiedphp tophp usephp Atomphp php1php.php0php insteadphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>getXpathphp(php)php-php>registerNamespacephp(php'atomphp1php0php'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/atomphp1php0php:categoryphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp;
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php php php php php$categoryCollectionphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'termphp'php php=php>php php$categoryphp-php>getAttributephp(php'termphp'php)php,
php php php php php php php php php php php php php php php php php php php php php'schemephp'php php=php>php php$categoryphp-php>getAttributephp(php'schemephp'php)php,
php php php php php php php php php php php php php php php php php php php php php'labelphp'php php=php>php php$categoryphp-php>getAttributephp(php'labelphp'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp newphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php php$categoryCollectionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sourcephp feedphp metadataphp fromphp thephp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Feedphp_Atomphp_Sourcephp|null
php php php php php php*php/
php php php php publicphp functionphp getSourcephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'sourcephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'sourcephp'php]php;
php php php php php php php php php}

php php php php php php php php php$sourcephp php=php nullphp;
php php php php php php php php php/php/php TODOphp:php Investigatephp whyphp php_getAtomTypephp(php)php failsphp herephp.php Isphp itphp evenphp neededphp?
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>getXpathphp(php)php-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:sourcephp[php1php]php'php)php;
php php php php php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php php php php php$elementphp php=php php$listphp-php>itemphp(php0php)php;
php php php php php php php php php php php php php php php php php$sourcephp php=php newphp Zendphp_Feedphp_Readerphp_Feedphp_Atomphp_Sourcephp(php$elementphp,php php$thisphp-php>getXpathPrefixphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'sourcephp'php]php php=php php$sourcephp;
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'sourcephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php Attemptphp tophp absolutisephp thephp URIphp,php iphp.ephp.php ifphp aphp relativephp URIphp applyphp the
php php php php php php*php php xmlphp:basephp valuephp asphp aphp prefixphp tophp turnphp intophp anphp absolutephp URIphp.
php php php php php php*php/
php php php php protectedphp functionphp php_absolutiseUriphp(php$linkphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getBaseUrlphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>getBaseUrlphp(php)php php.php php$linkphp;
php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$linkphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$linkphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp authorphp entry
php php php php php php*
php php php php php php*php php@paramphp DOMElementphp php$element
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getAuthorphp(DOMElementphp php$elementphp)
php php php php php{
php php php php php php php php php$authorphp php=php arrayphp(php)php;

php php php php php php php php php$emailNodephp php=php php$elementphp-php>getElementsByTagNamephp(php'emailphp'php)php;
php php php php php php php php php$nameNodephp php php=php php$elementphp-php>getElementsByTagNamephp(php'namephp'php)php;
php php php php php php php php php$uriNodephp php php php=php php$elementphp-php>getElementsByTagNamephp(php'uriphp'php)php;

php php php php php php php php ifphp php(php$emailNodephp-php>lengthphp php&php&php strlenphp(php$emailNodephp-php>itemphp(php0php)php-php>nodeValuephp)php php>php php0php)php php{
php php php php php php php php php php php php php$authorphp[php'emailphp'php]php php=php php$emailNodephp-php>itemphp(php0php)php-php>nodeValuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$nameNodephp-php>lengthphp php&php&php strlenphp(php$nameNodephp-php>itemphp(php0php)php-php>nodeValuephp)php php>php php0php)php php{
php php php php php php php php php php php php php$authorphp[php'namephp'php]php php=php php$nameNodephp-php>itemphp(php0php)php-php>nodeValuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$uriNodephp-php>lengthphp php&php&php strlenphp(php$uriNodephp-php>itemphp(php0php)php-php>nodeValuephp)php php>php php0php)php php{
php php php php php php php php php php php php php$authorphp[php'uriphp'php]php php=php php$uriNodephp-php>itemphp(php0php)php-php>nodeValuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$authorphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$authorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_getAtomTypephp(php)php)php php{
php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php:
php php php php php php php php php php php php php php php php php$thisphp-php>getXpathphp(php)php-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>getXpathphp(php)php-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp thephp presencephp ofphp anyphp Atomphp namespacesphp inphp use
php php php php php php*php/
php php php php protectedphp functionphp php_getAtomTypephp(php)
php php php php php{
php php php php php php php php php$domphp php=php php$thisphp-php>getDomDocumentphp(php)php;
php php php php php php php php php$prefixAtomphp0php3php php=php php$domphp-php>lookupPrefixphp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)php;
php php php php php php php php php$prefixAtomphp1php0php php=php php$domphp-php>lookupPrefixphp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
php php php php php php php php ifphp php(php$domphp-php>isDefaultNamespacephp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)
php php php php php php php php php|php|php php!emptyphp(php$prefixAtomphp0php3php)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$domphp-php>isDefaultNamespacephp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)
php php php php php php php php php|php|php php!emptyphp(php$prefixAtomphp1php0php)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php;
php php php php php php php php php}
php php php php php}
php}
