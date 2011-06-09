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
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php OfferSetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_OfferSet
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$LowestNewPricephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$LowestNewPriceCurrencyphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$LowestUsedPricephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$LowestUsedPriceCurrencyphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$TotalNewphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$TotalUsedphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$TotalCollectiblephp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$TotalRefurbishedphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_Amazonphp_Offerphp[php]
php php php php php php*php/
php php php php publicphp php$Offersphp;

php php php php php/php*php*
php php php php php php*php Parsephp thephp givenphp Offerphp Setphp Element
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;

php php php php php php php php php$offerphp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp'php,php php$domphp)php;
php php php php php php php php ifphp php(php$offerphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php$lowestNewPricephp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestNewPricephp/azphp:Amountphp'php,php php$domphp)php;
php php php php php php php php php php php php ifphp php(php$lowestNewPricephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>LowestNewPricephp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestNewPricephp/azphp:Amountphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php php php php php$thisphp-php>LowestNewPriceCurrencyphp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestNewPricephp/azphp:CurrencyCodephp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$lowestUsedPricephp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestUsedPricephp/azphp:Amountphp'php,php php$domphp)php;
php php php php php php php php php php php php ifphp php(php$lowestUsedPricephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>LowestUsedPricephp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestUsedPricephp/azphp:Amountphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php php php php php$thisphp-php>LowestUsedPriceCurrencyphp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:LowestUsedPricephp/azphp:CurrencyCodephp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>TotalNewphp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:TotalNewphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php$thisphp-php>TotalUsedphp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:TotalUsedphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php$thisphp-php>TotalCollectiblephp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:TotalCollectiblephp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php$thisphp-php>TotalRefurbishedphp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferSummaryphp/azphp:TotalRefurbishedphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php}
php php php php php php php php php$offersphp php=php php$xpathphp-php>queryphp(php'php.php/azphp:Offersphp/azphp:Offerphp'php,php php$domphp)php;
php php php php php php php php ifphp php(php$offersphp-php>lengthphp php>php=php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Offer
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Offerphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$offersphp asphp php$offerphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>Offersphp[php]php php=php newphp Zendphp_Servicephp_Amazonphp_Offerphp(php$offerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
