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
php php*php php@versionphp php php php php$Idphp:php Offerphp.phpphp php2php1php1php5php4php php2php0php1php0php-php0php2php-php2php3php php1php7php:php1php0php:php3php4Zphp matthewphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Offer
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$MerchantIdphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$MerchantNamephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$GlancePagephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Conditionphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$OfferListingIdphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Pricephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$CurrencyCodephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Availabilityphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$IsEligibleForSuperSaverShippingphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Parsephp thephp givenphp Offerphp element
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;
php php php php php php php php php$thisphp-php>MerchantIdphp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:Merchantphp/azphp:MerchantIdphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$namephp php=php php$xpathphp-php>queryphp(php'php.php/azphp:Merchantphp/azphp:Namephp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$namephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php$thisphp-php>MerchantNamephp php=php php(stringphp)php php$namephp-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>GlancePagephp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:Merchantphp/azphp:GlancePagephp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$thisphp-php>Conditionphp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferAttributesphp/azphp:Conditionphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$thisphp-php>OfferListingIdphp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:OfferListingIdphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php$Pricephp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:Pricephp/azphp:Amountphp'php,php php$domphp)php;
php php php php php php php php ifphp php(php$Pricephp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>Pricephp php=php php(intphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:Pricephp/azphp:Amountphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php php php php php$thisphp-php>CurrencyCodephp php=php php(stringphp)php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:Pricephp/azphp:CurrencyCodephp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php}
php php php php php php php php php$availabilityphp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:Availabilityphp/textphp(php)php'php,php php$domphp)php-php>itemphp(php0php)php;
php php php php php php php php ifphp(php$availabilityphp instanceofphp DOMTextphp)php php{
php php php php php php php php php php php php php$thisphp-php>Availabilityphp php=php php(stringphp)php php$availabilityphp-php>dataphp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/azphp:OfferListingphp/azphp:IsEligibleForSuperSaverShippingphp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php>php=php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>IsEligibleForSuperSaverShippingphp php=php php(boolphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;
php php php php php php php php php}
php php php php php}
php}