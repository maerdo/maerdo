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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Findingphp.phpphp php2php2php8php2php4php php2php0php1php0php-php0php8php-php0php9php php1php8php:php5php9php:php5php4Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@usesphp php php php php php php Zendphp_Servicephp_Ebayphp_Abstract
php php*php/
classphp Zendphp_Servicephp_Ebayphp_Findingphp extendsphp Zendphp_Servicephp_Ebayphp_Abstract
php{
php php php php constphp SERVICEphp_NAMEphp php php php php php php php php php=php php'FindingServicephp'php;
php php php php constphp SERVICEphp_VERSIONphp php php php php php php=php php'php1php.php0php.php0php'php;
php php php php constphp RESPONSEphp_DATAphp_FORMATphp php=php php'XMLphp'php;

php php php php constphp ENDPOINTphp_URIphp php php=php php'httpphp:php/php/svcsphp.ebayphp.comphp'php;
php php php php constphp ENDPOINTphp_PATHphp php=php php'servicesphp/searchphp/FindingServicephp/vphp1php'php;

php php php php constphp XMLNSphp_FINDINGphp php=php php'ephp'php;
php php php php constphp XMLNSphp_MSphp php php php php php php=php php'msphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_xmlNamespacesphp php=php arrayphp(
php php php php php php php php selfphp:php:XMLNSphp_FINDINGphp php=php>php php'httpphp:php/php/wwwphp.ebayphp.comphp/marketplacephp/searchphp/vphp1php/servicesphp'php,
php php php php php php php php selfphp:php:XMLNSphp_MSphp php php php php php php=php>php php'httpphp:php/php/wwwphp.ebayphp.comphp/marketplacephp/servicesphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php selfphp:php:OPTIONphp_GLOBALphp_IDphp php=php>php php'EBAYphp-USphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getXmlNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_xmlNamespacesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp|stringphp php$optionsphp Applicationphp Idphp orphp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp Whenphp applicationphp idphp isphp missing
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php/php/php applicationphp idphp wasphp given
php php php php php php php php php php php php php$optionsphp php=php arrayphp(selfphp:php:OPTIONphp_APPphp_IDphp php=php>php php$optionsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php checkphp applicationphp id
php php php php php php php php php php php php php$optionsphp php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(selfphp:php:OPTIONphp_APPphp_IDphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Applicationphp Idphp isphp missingphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php loadphp options
php php php php php php php php parentphp:php:setOptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Restphp_Clientphp php$client
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setClientphp(php$clientphp)
php php php php php{
php php php php php php php php ifphp php(php!php$clientphp instanceofphp Zendphp_Restphp_Clientphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Clientphp objectphp mustphp extendphp Zendphp_Restphp_Clientphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clientphp php=php php$clientphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_clientphp instanceofphp Zendphp_Restphp_Clientphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Restphp_Client
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_clientphp php=php newphp Zendphp_Restphp_Clientphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp itemsphp byphp aphp keywordphp queryphp andphp/orphp categoryphp andphp allowsphp searching
php php php php php php*php withinphp itemphp descriptionsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php$keywords
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php$descriptionSearch
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$categoryId
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/findItemsAdvancedphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsAdvancedphp(php$keywordsphp,php php$descriptionSearchphp php=php truephp,php php$categoryIdphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'keywordsphp'php]php php php php php php php php php php php=php php$keywordsphp;
php php php php php php php php php$optionsphp[php'descriptionSearchphp'php]php php=php php$descriptionSearchphp;
php php php php php php php php ifphp php(php!emptyphp(php$categoryIdphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'categoryIdphp'php]php php=php php$categoryIdphp;
php php php php php php php php php}

php php php php php php php php php/php/php dophp request
php php php php php php php php returnphp php$thisphp-php>php_findItemsphp(php$optionsphp,php php'findItemsAdvancedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp itemsphp inphp aphp specificphp categoryphp.php Resultsphp canphp bephp filteredphp andphp sortedphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$categoryId
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/findItemsByCategoryphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsByCategoryphp(php$categoryIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'categoryIdphp'php]php php=php php$categoryIdphp;

php php php php php php php php php/php/php dophp request
php php php php php php php php returnphp php$thisphp-php>php_findItemsphp(php$optionsphp,php php'findItemsByCategoryphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp itemsphp onphp eBayphp basedphp uponphp aphp keywordphp queryphp andphp returnsphp detailsphp for
php php php php php php*php matchingphp itemsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php$keywords
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/findItemsByKeywordsphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsByKeywordsphp(php$keywordsphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'keywordsphp'php]php php=php php$keywordsphp;

php php php php php php php php php/php/php dophp request
php php php php php php php php returnphp php$thisphp-php>php_findItemsphp(php$optionsphp,php php'findItemsByKeywordsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp itemsphp basedphp uponphp aphp productphp IDphp,php suchphp asphp anphp ISBNphp,php UPCphp,php EANphp,php orphp ePIDphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$productId
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php$productIdTypephp Defaultphp valuephp isphp ReferenceID
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/findItemsByProductphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsByProductphp(php$productIdphp,php php$productIdTypephp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php php$productIdTypephp)php php{
php php php php php php php php php php php php php$productIdTypephp php=php php'ReferenceIDphp'php;
php php php php php php php php php}

php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'productIdphp'php]php php=php arrayphp(php'php'php php php php php php=php>php php$productIdphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$productIdTypephp)php;

php php php php php php php php php/php/php dophp request
php php php php php php php php returnphp php$thisphp-php>php_findItemsphp(php$optionsphp,php php'findItemsByProductphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp itemsphp inphp eBayphp storesphp.php Canphp searchphp aphp specificphp storephp orphp canphp searchphp all
php php php php php php*php storesphp withphp aphp keywordphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php$storeName
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/findItemsIneBayStoresphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsInEbayStoresphp(php$storeNamephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'storeNamephp'php]php php=php php$storeNamephp;

php php php php php php php php php/php/php dophp request
php php php php php php php php returnphp php$thisphp-php>php_findItemsphp(php$optionsphp,php php'findItemsIneBayStoresphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@paramphp php stringphp php$operation
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php protectedphp functionphp php_findItemsphp(arrayphp php$optionsphp,php php$operationphp)
php php php php php{
php php php php php php php php php/php/php setphp defaultphp outputphp selectorphp value
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'outputSelectorphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'outputSelectorphp'php]php php=php arrayphp(php'AspectHistogramphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'CategoryHistogramphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'SellerInfophp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'StoreInfophp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php dophp request
php php php php php php php php php$domphp php=php php$thisphp-php>php_requestphp(php$operationphp,php php$optionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Responsephp/Itemsphp.phpphp'php;
php php php php php php php php php$responsephp php=php newphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Itemsphp(php$domphp-php>firstChildphp)php;
php php php php php php php php returnphp php$responsephp-php>setOperationphp(php$operationphp)
php php php php php php php php php php php php php php php php php php php php php php php php php-php>setOptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp categoryphp andphp/orphp aspectphp metadataphp forphp thephp specifiedphp categoryphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$categoryId
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/getHistogramsphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Histograms
php php php php php php*php/
php php php php publicphp functionphp getHistogramsphp(php$categoryIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'categoryIdphp'php]php php=php php$categoryIdphp;

php php php php php php php php php/php/php dophp request
php php php php php php php php php$operationphp php=php php'getHistogramsphp'php;
php php php php php php php php php$domphp php php php php php php php=php php$thisphp-php>php_requestphp(php$operationphp,php php$optionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Histograms
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Responsephp/Histogramsphp.phpphp'php;
php php php php php php php php php$responsephp php=php newphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Histogramsphp(php$domphp-php>firstChildphp)php;
php php php php php php php php returnphp php$responsephp-php>setOperationphp(php$operationphp)
php php php php php php php php php php php php php php php php php php php php php php php php php-php>setOptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp specifiedphp keywordsphp andphp returnsphp correctlyphp spelledphp keywordsphp forphp best
php php php php php php*php searchphp resultsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php$keywords
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/getSearchKeywordsRecommendationphp.html
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Keywords
php php php php php php*php/
php php php php publicphp functionphp getSearchKeywordsRecommendationphp(php$keywordsphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php php$optionsphp php php php php php php php php php php php php php=php parentphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$optionsphp[php'keywordsphp'php]php php=php php$keywordsphp;

php php php php php php php php php/php/php dophp request
php php php php php php php php php$operationphp php=php php'getSearchKeywordsRecommendationphp'php;
php php php php php php php php php$domphp php php php php php php php=php php$thisphp-php>php_requestphp(php$operationphp,php php$optionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Keywords
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Responsephp/Keywordsphp.phpphp'php;
php php php php php php php php php$responsephp php=php newphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Keywordsphp(php$domphp-php>firstChildphp)php;
php php php php php php php php returnphp php$responsephp-php>setOperationphp(php$operationphp)
php php php php php php php php php php php php php php php php php php php php php php php php php-php>setOptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$operation
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/Conceptsphp/MakingACallphp.htmlphp#StandardURLParameters
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php protectedphp functionphp php_requestphp(php$operationphp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php generatephp defaultphp options
php php php php php php php php php/php/php constructorphp loadphp globalphp-idphp andphp applicationphp-idphp values
php php php php php php php php php$defaultphp php=php arrayphp(php'OPERATIONphp-NAMEphp'php php php php php php php php=php>php php$operationphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php'SERVICEphp-NAMEphp'php php php php php php php php php php=php>php selfphp:php:SERVICEphp_NAMEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php'SERVICEphp-VERSIONphp'php php php php php php php=php>php selfphp:php:SERVICEphp_VERSIONphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php'GLOBALphp-IDphp'php php php php php php php php php php php php php=php>php php$thisphp-php>getOptionphp(selfphp:php:OPTIONphp_GLOBALphp_IDphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php'SECURITYphp-APPNAMEphp'php php php php php php=php>php php$thisphp-php>getOptionphp(selfphp:php:OPTIONphp_APPphp_IDphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php'RESPONSEphp-DATAphp-FORMATphp'php php=php>php selfphp:php:RESPONSEphp_DATAphp_FORMATphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php'RESTphp-PAYLOADphp'php php php php php php php php php php=php>php php'php'php)php;

php php php php php php php php php/php/php preparephp optionsphp tophp ebayphp syntax
php php php php php php php php php$optionsphp php=php php$defaultphp php+php php$thisphp-php>php_optionsToNameValueSyntaxphp(php$optionsphp)php;

php php php php php php php php php/php/php dophp request
php php php php php php php php php$clientphp php=php php$thisphp-php>getClientphp(php)php;
php php php php php php php php php$clientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>setUriphp(selfphp:php:ENDPOINTphp_URIphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>restGetphp(selfphp:php:ENDPOINTphp_PATHphp,php php$optionsphp)php;

php php php php php php php php returnphp php$thisphp-php>php_parseResponsephp(php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Searchphp forphp errorphp fromphp requestphp.
php php php php php php*
php php php php php php*php Ifphp anyphp errorphp isphp foundphp aphp DOMDocumentphp isphp returnedphp,php thisphp objectphp containsphp a
php php php php php php*php DOMXPathphp objectphp asphp php"ebayFindingXPathphp"php attributephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Responsephp php$response
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/typesphp/ErrorSeverityphp.html
php php php php php php*php php@seephp php php php Zendphp_Servicephp_Ebayphp_Findingphp_Abstractphp:php:php_initXPathphp(php)
php php php php php php*php php@throwsphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp Whenphp anyphp errorphp occurrsphp duringphp request
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php protectedphp functionphp php_parseResponsephp(Zendphp_Httpphp_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php/php/php errorphp message
php php php php php php php php php$messagephp php=php php'php'php;

php php php php php php php php php/php/php firstphp tryingphp,php loadingphp XML
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php ifphp php(php!php@php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php'Itphp wasphp notphp possiblephp tophp loadphp XMLphp returnedphp.php'php;
php php php php php php php php php}

php php php php php php php php php/php/php secondphp tryingphp,php checkphp requestphp status
php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php$responsephp-php>getMessagephp(php)
php php php php php php php php php php php php php php php php php php php php php php.php php'php php(HTTPphp statusphp codephp php#php'php php.php php$responsephp-php>getStatusphp(php)php php.php php'php)php'php;
php php php php php php php php php}

php php php php php php php php php/php/php thirdphp tryingphp,php searchphp forphp errorphp messagephp intophp XMLphp response
php php php php php php php php php/php/php onlyphp firstphp errorphp thatphp containsphp severiryphp=Errorphp isphp read
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php foreachphp php(selfphp:php:php$php_xmlNamespacesphp asphp php$aliasphp php=php>php php$uriphp)php php{
php php php php php php php php php php php php php$xpathphp-php>registerNamespacephp(php$aliasphp,php php$uriphp)php;
php php php php php php php php php}
php php php php php php php php php$nsphp php php php php php php php php php php php=php selfphp:php:XMLNSphp_FINDINGphp;
php php php php php php php php php$nsMsphp php php php php php php php php php=php selfphp:php:XMLNSphp_MSphp;
php php php php php php php php php$expressionphp php php php=php php"php/php/php$nsMsphp:errorMessagephp[php1php]php/php$nsphp:errorphp/php$nsphp:severityphp[php.php=php'Errorphp'php]php"php;
php php php php php php php php php$severityNodephp php=php php$xpathphp-php>queryphp(php$expressionphp)php-php>itemphp(php0php)php;
php php php php php php php php ifphp php(php$severityNodephp)php php{
php php php php php php php php php php php php php$errorNodephp php=php php$severityNodephp-php>parentNodephp;
php php php php php php php php php php php php php/php/php ebayphp message
php php php php php php php php php php php php php$messageNodephp php=php php$xpathphp-php>queryphp(php"php/php/php$nsphp:messagephp[php1php]php"php,php php$errorNodephp)php-php>itemphp(php0php)php;
php php php php php php php php php php php php ifphp php(php$messageNodephp)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php'eBayphp errorphp:php php'php php.php php$messageNodephp-php>nodeValuephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php'eBayphp errorphp:php unknownphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php ebayphp errorphp id
php php php php php php php php php php php php php$errorIdNodephp php=php php$xpathphp-php>queryphp(php"php/php/php$nsphp:errorIdphp[php1php]php"php,php php$errorNodephp)php-php>itemphp(php0php)php;
php php php php php php php php php php php php ifphp php(php$errorIdNodephp)php php{
php php php php php php php php php php php php php php php php php$messagephp php.php=php php'php php(php#php'php php.php php$errorIdNodephp-php>nodeValuephp php.php php'php)php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php throwphp exceptionphp whenphp anphp errorphp wasphp detected
php php php php php php php php ifphp php(strlenphp(php$messagephp)php php>php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php addphp xpathphp tophp domphp document
php php php php php php php php php/php/php itphp allowsphp servicephp_ebayphp_findingphp classesphp usephp this
php php php php php php php php php$domphp-php>ebayFindingXPathphp php=php php$xpathphp;

php php php php php php php php returnphp php$domphp;
php php php php php}
php}
