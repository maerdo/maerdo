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
php php*php php@seephp Zendphp_Feedphp_Readerphp_FeedAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/FeedAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_Atomphp_Feed
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/Atomphp/Feedphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Feedphp_Atomphp extendsphp Zendphp_Feedphp_Readerphp_FeedAbstract
php{

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMDocumentphp php$domphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$domphp,php php$typephp)php;
php php php php php php php php php$atomClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'Atomphp_Feedphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'Atomphp_Feedphp'php]php php=php newphp php$atomClassphp(php$domphp,php php$thisphp-php>php_dataphp[php'typephp'php]php,php php$thisphp-php>php_xpathphp)php;
php php php php php php php php php$atomClassphp php=php Zendphp_Feedphp_Readerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php'DublinCorephp_Feedphp'php)php;
php php php php php php php php php$thisphp-php>php_extensionsphp[php'DublinCorephp_Feedphp'php]php php=php newphp php$atomClassphp(php$domphp,php php$thisphp-php>php_dataphp[php'typephp'php]php,php php$thisphp-php>php_xpathphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php php$extensionphp-php>setXpathPrefixphp(php'php/atomphp:feedphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp author
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

php php php php php php php php php$authorsphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getAuthorsphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php php$authorsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp copyrightphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCopyrightphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'copyrightphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php php php php php}

php php php php php php php php php$copyrightphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCopyrightphp(php)php;

php php php php php php php php ifphp php(php!php$copyrightphp)php php{
php php php php php php php php php php php php php$copyrightphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'copyrightphp'php]php php=php php$copyrightphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datecreatedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDateCreatedphp(php)php;

php php php php php php php php ifphp php(php!php$dateCreatedphp)php php{
php php php php php php php php php php php php php$dateCreatedphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datecreatedphp'php]php php=php php$dateCreatedphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datemodifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDateModifiedphp(php)php;

php php php php php php php php ifphp php(php!php$dateModifiedphp)php php{
php php php php php php php php php php php php php$dateModifiedphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php php=php php$dateModifiedphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp lastBuildphp datephp.php Thisphp isphp notphp implementedphp inphp Atomphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLastBuildDatephp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp description
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'descriptionphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php php php php php}

php php php php php php php php php$descriptionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getDescriptionphp(php)php;

php php php php php php php php ifphp php(php!php$descriptionphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'descriptionphp'php]php php=php php$descriptionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp generatorphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getGeneratorphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'generatorphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'generatorphp'php]php;
php php php php php php php php php}

php php php php php php php php php$generatorphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getGeneratorphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'generatorphp'php]php php=php php$generatorphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'generatorphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp ID
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
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
php php php php php php*php Getphp thephp feedphp language
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLanguagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'languagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$languagephp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getLanguagephp(php)php;

php php php php php php php php ifphp php(php!php$languagephp)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/php/php@xmlphp:langphp[php1php]php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$languagephp)php php{
php php php php php php php php php php php php php$languagephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'languagephp'php]php php=php php$languagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp sourcephp website
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'baseUrlphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'baseUrlphp'php]php;
php php php php php php php php php}

php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getBaseUrlphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'baseUrlphp'php]php php=php php$baseUrlphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'baseUrlphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp sourcephp website
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'linkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getLinkphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'linkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedphp imagephp data
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'imagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getImagephp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp feedphp'sphp XMLphp Url
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFeedLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'feedlinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedlinkphp'php]php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getFeedLinkphp(php)php;

php php php php php php php php ifphp php(php$linkphp php=php=php=php nullphp php|php|php emptyphp(php$linkphp)php)php php{
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>getOriginalSourceUriphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'feedlinkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedlinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp title
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
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
php php php php php php*php Getphp anphp arrayphp ofphp anyphp supportedphp Pusubhubbubphp endpoints
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getHubsphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'hubsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$hubsphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getHubsphp(php)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'hubsphp'php]php php=php php$hubsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
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

php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'Atomphp'php)php-php>getCategoriesphp(php)php;

php php php php php php php php ifphp php(countphp(php$categoryCollectionphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php php$thisphp-php>getExtensionphp(php'DublinCorephp'php)php-php>getCategoriesphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php php$categoryCollectionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp allphp entriesphp tophp thephp internalphp entriesphp array
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_indexEntriesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php php|php|
php php php php php php php php php php php php php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$entriesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$entriesphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'php/php/atomphp:entryphp'php)php;

php php php php php php php php php php php php foreachphp(php$entriesphp asphp php$indexphp=php>php$entryphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_entriesphp[php$indexphp]php php=php php$entryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_dataphp[php'typephp'php]php)php php{
php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
php php php php php php php php php}
php php php php php}
php}
