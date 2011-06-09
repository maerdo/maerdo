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
php php*php php@versionphp php php php php$Idphp:php Atomphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_EntryInterface
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/EntryInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_EntryAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/EntryAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_Atomphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/Atomphp/Entryphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Entryphp_Atomphp extendsphp Zendphp_Feedphp_Readerphp_EntryAbstractphp implementsphp Zendphp_Feedphp_Readerphp_EntryInterface
php{
php php php php php/php*php*
php php php php php php*php XPathphp query
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xpathQueryphp php=php php'php'php;

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
php php php php php php php php parentphp:php:php_php_constructphp(php$entryphp,php php$entryKeyphp,php php$typephp)php;

php php php php php php php php php/php/php Everyonephp byphp nowphp shouldphp knowphp XPathphp indicesphp startphp fromphp php1php notphp php0
php php php php php php php php php$thisphp-php>php_xpathQueryphp php=php php'php/php/atomphp:entryphp[php'php php.php php(php$thisphp-php>php_entryKeyphp php+php php1php)php php.php php'php]php'php;

php php php php php php php php php$atomClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'Atomphp_Entryphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'Atomphp_Entryphp'php]php php=php newphp php$atomClassphp(php$entryphp,php php$entryKeyphp,php php$typephp)php;

php php php php php php php php php$threadClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'Threadphp_Entryphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'Threadphp_Entryphp'php]php php=php newphp php$threadClassphp(php$entryphp,php php$entryKeyphp,php php$typephp)php;

php php php php php php php php php$threadClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'DublinCorephp_Entryphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'DublinCorephp_Entryphp'php]php php=php newphp php$threadClassphp(php$entryphp,php php$entryKeyphp,php php$typephp)php;
php php php php php}

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

php php php php php php php php php$peoplephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getAuthorsphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php php$peoplephp;

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

php php php php php php php php php$contentphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getContentphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'contentphp'php]php php=php php$contentphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'contentphp'php]php;
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

php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDateCreatedphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'datecreatedphp'php]php php=php php$dateCreatedphp;

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

php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDateModifiedphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php php=php php$dateModifiedphp;

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

php php php php php php php php php$descriptionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDescriptionphp(php)php;

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

php php php php php php php php php$enclosurephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getEnclosurephp(php)php;

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

php php php php php php php php php$idphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getIdphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
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

php php php php php php php php php$linksphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getLinksphp(php)php;

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

php php php php php php php php php$titlephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getTitlephp(php)php;

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

php php php php php php php php php$commentcountphp php=php php$thisphp-php>getExtensionphp(php'Threadphp'php)php-php>getCommentCountphp(php)php;

php php php php php php php php ifphp php(php!php$commentcountphp)php php{
php php php php php php php php php php php php php$commentcountphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCommentCountphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'commentcountphp'php]php php=php php$commentcountphp;

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

php php php php php php php php php$commentlinkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCommentLinkphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'commentlinkphp'php]php php=php php$commentlinkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp URIphp pointingphp tophp aphp feedphp ofphp allphp commentsphp forphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCommentFeedLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'commentfeedlinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$commentfeedlinkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCommentFeedLinkphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php php=php php$commentfeedlinkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentfeedlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp categoryphp dataphp asphp aphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Collectionphp_Category
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'categoriesphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCategoriesphp(php)php;

php php php php php php php php ifphp php(countphp(php$categoryCollectionphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getCategoriesphp(php)php;
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

php php php php php php php php php$sourcephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getSourcephp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'sourcephp'php]php php=php php$sourcephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'sourcephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp XPathphp queryphp php(inclphp.php onphp allphp Extensionsphp)
php php php php php php*
php php php php php php*php php@paramphp DOMXPathphp php$xpath
php php php php php php*php/
php php php php publicphp functionphp setXpathphp(DOMXPathphp php$xpathphp)
php php php php php{
php php php php php php php php parentphp:php:setXpathphp(php$xpathphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php php$extensionphp-php>setXpathphp(php$thisphp-php>php_xpathphp)php;
php php php php php php php php php}
php php php php php}
php}
