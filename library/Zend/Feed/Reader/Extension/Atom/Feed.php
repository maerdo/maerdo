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
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/FeedAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Collectionphp_Author
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Collectionphp/Authorphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Atomphp_Feed
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php{
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

php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php'php/php/atomphp:authorphp'php)php;

php php php php php php php php php$authorsphp php=php arrayphp(php)php;

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
php php php php php php*php Getphp thephp copyrightphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCopyrightphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'copyrightphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php php php php php}

php php php php php php php php php$copyrightphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:copyrightphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:rightsphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$copyrightphp)php php{
php php php php php php php php php php php php php$copyrightphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'copyrightphp'php]php php=php php$copyrightphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Datephp|null
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datecreatedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:createdphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dateCreatedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:publishedphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dateCreatedphp)php php{
php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$datephp-php>setphp(php$dateCreatedphp,php Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datecreatedphp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datecreatedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Datephp|null
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'datemodifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
php php php php php php php php php}

php php php php php php php php php$datephp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:modifiedphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dateModifiedphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:updatedphp)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dateModifiedphp)php php{
php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$datephp-php>setphp(php$dateModifiedphp,php Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php php=php php$datephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'datemodifiedphp'php]php;
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

php php php php php php php php php$descriptionphp php=php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:taglinephp)php'php)php;php php/php/php TODOphp:php Isphp thisphp thephp samephp asphp subtitlephp?
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:subtitlephp)php'php)php;
php php php php php php php php php}

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
php php php php php php php php php/php/php TODOphp:php Addphp uriphp support
php php php php php php php php php$generatorphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:generatorphp)php'php)php;

php php php php php php php php ifphp php(php!php$generatorphp)php php{
php php php php php php php php php php php php php$generatorphp php=php nullphp;
php php php php php php php php php}

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

php php php php php php php php php$idphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:idphp)php'php)php;

php php php php php php php php ifphp php(php!php$idphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getLinkphp(php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>getLinkphp(php)php;
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
php php php php php php*php Getphp thephp feedphp language
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLanguagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'languagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$languagephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:langphp)php'php)php;

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
php php php php php php*php Getphp thephp feedphp image
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'imagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$imageUrlphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:logophp)php'php)php;

php php php php php php php php ifphp php(php!php$imageUrlphp)php php{
php php php php php php php php php php php php php$imagephp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$imagephp php=php arrayphp(php'uriphp'php=php>php$imageUrlphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$imagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp image
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getIconphp(php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'iconphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'iconphp'php]php;
php php php php php php php php php}

php php php php php php php php php$imageUrlphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:iconphp)php'php)php;

php php php php php php php php ifphp php(php!php$imageUrlphp)php php{
php php php php php php php php php php php php php$imagephp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$imagephp php=php arrayphp(php'uriphp'php=php>php$imageUrlphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'iconphp'php]php php=php php$imagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'iconphp'php]php;
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

php php php php php php php php php$baseUrlphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php/php/php@xmlphp:basephp[php1php]php)php'php)php;

php php php php php php php php ifphp php(php!php$baseUrlphp)php php{
php php php php php php php php php php php php php$baseUrlphp php=php nullphp;
php php php php php php php php php}
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

php php php php php php php php php$linkphp php=php nullphp;

php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:linkphp[php@relphp=php"alternatephp"php]php/php@hrefphp'php php.php php'php|php'php php.
php php php php php php php php php php php php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:linkphp[notphp(php@relphp)php]php/php@hrefphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php php$linkphp php=php php$listphp-php>itemphp(php0php)php-php>nodeValuephp;
php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_absolutiseUriphp(php$linkphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'linkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
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

php php php php php php php php php$linkphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:linkphp[php@relphp=php"selfphp"php]php/php@hrefphp)php'php)php;

php php php php php php php php php$linkphp php=php php$thisphp-php>php_absolutiseUriphp(php$linkphp)php;

php php php php php php php php php$thisphp-php>php_dataphp[php'feedlinkphp'php]php php=php php$linkphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedlinkphp'php]php;
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
php php php php php php php php php$hubsphp php=php arrayphp(php)php;

php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)
php php php php php php php php php php php php php.php php'php/php/atomphp:linkphp[php@relphp=php"hubphp"php]php/php@hrefphp'php)php;

php php php php php php php php ifphp php(php$listphp-php>lengthphp)php php{
php php php php php php php php php php php php foreachphp php(php$listphp asphp php$uriphp)php php{
php php php php php php php php php php php php php php php php php$hubsphp[php]php php=php php$thisphp-php>php_absolutiseUriphp(php$uriphp-php>nodeValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hubsphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'hubsphp'php]php php=php php$hubsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
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

php php php php php php php php php$titlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:titlephp)php'php)php;

php php php php php php php php ifphp php(php!php$titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'titlephp'php]php php=php php$titlephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
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

php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php)php php{
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp:categoryphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Sincephp Atomphp php0php.php3php didphp notphp supportphp categoriesphp,php itphp wouldphp havephp usedphp the
php php php php php php php php php php php php php php*php Dublinphp Corephp extensionphp.php Howeverphp therephp isphp aphp smallphp possibilityphp Atomphp php0php.php3
php php php php php php php php php php php php php php*php mayphp havephp beenphp retrofittiedphp tophp usephp Atomphp php1php.php0php insteadphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'atomphp1php0php'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
php php php php php php php php php php php php php$listphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/atomphp1php0php:categoryphp'php)php;
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
php php php php php php*php Getphp anphp authorphp entryphp inphp RSSphp format
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$element
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
php php php php php php*php Registerphp thephp defaultphp namespacesphp forphp thephp currentphp feedphp format
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0
php php php php php php php php php php php php php|php|php php$thisphp-php>getTypephp(php)php php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp;php php/php/php prephp-registeredphp atphp Feedphp level
php php php php php php php php php}
php php php php php php php php php$atomDetectedphp php=php php$thisphp-php>php_getAtomTypephp(php)php;
php php php php php php php php switchphp php(php$atomDetectedphp)php php{
php php php php php php php php php php php php casephp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'atomphp'php,php Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)php;
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
php php php php php php php php ifphp php(php$domphp-php>isDefaultNamespacephp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php1php0php)
php php php php php php php php php|php|php php!emptyphp(php$prefixAtomphp1php0php)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php1php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$domphp-php>isDefaultNamespacephp(Zendphp_Feedphp_Readerphp:php:NAMESPACEphp_ATOMphp_php0php3php)
php php php php php php php php php|php|php php!emptyphp(php$prefixAtomphp0php3php)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Feedphp_Readerphp:php:TYPEphp_ATOMphp_php0php3php;
php php php php php php php php php}
php php php php php}
php}
