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
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_DublinCorephp_Entry
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php{
php php php php php/php*php*
php php php php php php*php Getphp anphp authorphp entry
php php php php php php*
php php php php php php*php php@paramphp DOMElementphp php$element
php php php php php php*php php@returnphp string
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
php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php1php:creatorphp'php)php;

php php php php php php php php ifphp php(php!php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php0php:creatorphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php1php:publisherphp'php)php;

php php php php php php php php php php php php ifphp php(php!php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php0php:publisherphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$authorphp)php php{
php php php php php php php php php php php php php php php php php$authorsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$authorphp-php>nodeValue
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$authorsphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Authorphp(
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Readerphp:php:arrayUniquephp(php$authorsphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$authorsphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php php$authorsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp categoriesphp php(subjectsphp underphp DCphp)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Collectionphp_Category
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'categoriesphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php1php:subjectphp'php)php;

php php php php php php php php ifphp php(php!php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/php/dcphp1php0php:subjectphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$categoryCollectionphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp;
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php php php php php$categoryCollectionphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'termphp'php php=php>php php$categoryphp-php>nodeValuephp,
php php php php php php php php php php php php php php php php php php php php php'schemephp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php'labelphp'php php=php>php php$categoryphp-php>nodeValuephp,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$categoryCollectionphp php=php newphp Zendphp_Feedphp_Readerphp_Collectionphp_Categoryphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php php$categoryCollectionphp;
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDescriptionphp(php)php;
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

php php php php php php php php php$descriptionphp php=php nullphp;
php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php1php:descriptionphp)php'php)php;

php php php php php php php php ifphp php(php!php$descriptionphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php0php:descriptionphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$descriptionphp)php php{
php php php php php php php php php php php php php$descriptionphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'descriptionphp'php]php php=php php$descriptionphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
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

php php php php php php php php php$idphp php=php nullphp;
php php php php php php php php php$idphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php1php:identifierphp)php'php)php;

php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php0php:identifierphp)php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
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

php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php$titlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php1php:titlephp)php'php)php;

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php0php:titlephp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'titlephp'php]php php=php php$titlephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Datephp|null
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datephp'php]php;
php php php php php php php php php}

php php php php php php php php php$dphp php php php php=php nullphp;
php php php php php php php php php$datephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php1php:datephp)php'php)php;

php php php php php php php php ifphp php(php!php$datephp)php php{
php php php php php php php php php php php php php$datephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/dcphp1php0php:datephp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$datephp)php php{
php php php php php php php php php php php php php$dphp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$dphp-php>setphp(php$datephp,php Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datephp'php]php php=php php$dphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp DCphp namespaces
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'dcphp1php0php'php,php php'httpphp:php/php/purlphp.orgphp/dcphp/elementsphp/php1php.php0php/php'php)php;
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'dcphp1php1php'php,php php'httpphp:php/php/purlphp.orgphp/dcphp/elementsphp/php1php.php1php/php'php)php;
php php php php php}
php}
