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
php php*php php@versionphp php php php php$Idphp:php SellingStatusphp.phpphp php2php2php7php9php1php php2php0php1php0php-php0php8php-php0php4php php1php6php:php1php1php:php4php7Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@usesphp php php php php php php Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php php*php/
classphp Zendphp_Servicephp_Ebayphp_Findingphp_SellingStatusphp extendsphp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp bidsphp thatphp havephp beenphp placedphp onphp thephp itemphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$bidCountphp;

php php php php php/php*php*
php php php php php php*php Thephp listingphp'sphp currentphp pricephp convertedphp tophp thephp currencyphp ofphp thephp site
php php php php php php*php specifiedphp inphp thephp findphp requestphp php(globalIdphp)php.
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php publicphp php$convertedCurrentPricephp;

php php php php php/php*php*
php php php php php php*php Thephp currentphp pricephp ofphp thephp itemphp givenphp inphp thephp currencyphp ofphp thephp sitephp onphp which
php php php php php php*php thephp itemphp isphp listedphp.
php php php php php php*
php php php php php php*php Thatphp isphp,php currentPricephp isphp returnedphp inphp thephp originalphp listingphp currencyphp.
php php php php php php*
php php php php php php*php Forphp competitivephp-bidphp itemphp listingsphp,php currentPricephp isphp thephp currentphp minimum
php php php php php php*php bidphp pricephp ifphp thephp listingphp hasphp nophp bidsphp,php orphp thephp currentphp highphp bidphp ifphp the
php php php php php php*php listingphp hasphp bidsphp.php Aphp Buyphp Itphp Nowphp pricephp hasphp nophp effectphp onphp currentPricephp.
php php php php php php*
php php php php php php*php Forphp Basicphp Fixedphp-Pricephp php(FixedPricephp)php,php Storephp Inventoryphp php(StoreInventoryphp)php,php and
php php php php php php*php Adphp Formatphp php(AdFormatphp)php listingsphp,php currentPricephp isphp thephp currentphp fixedphp pricephp.
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php publicphp php$currentPricephp;

php php php php php/php*php*
php php php php php php*php Specifiesphp thephp listingphp'sphp statusphp inphp eBayphp'sphp processingphp workflowphp.
php php php php php php*
php php php php php php*php Ifphp anphp itemphp'sphp EndTimephp isphp inphp thephp pastphp,php butphp therephp arephp nophp detailsphp aboutphp the
php php php php php php*php buyerphp orphp highphp bidderphp php(andphp thephp userphp isphp notphp anonymousphp)php,php youphp canphp use
php php php php php php*php sellingStatephp informationphp tophp determinephp whetherphp eBayphp hasphp finished
php php php php php php*php processingphp thephp listingphp.
php php php php php php*
php php php php php php*php Applicablephp valuesphp:
php php php php php php*
php php php php php php*php php php php php Active
php php php php php php*php php php php php Thephp listingphp isphp stillphp livephp.php Itphp isphp alsophp possiblephp thatphp thephp auctionphp has
php php php php php php*php php php php php recentlyphp endedphp,php butphp eBayphp hasphp notphp completedphp thephp finalphp processing
php php php php php php*php php php php php php(ephp.gphp.php,php thephp highphp bidderphp isphp stillphp beingphp determinedphp)php.
php php php php php php*
php php php php php php*php php php php php Canceled
php php php php php php*php php php php php Thephp listingphp hasphp beenphp canceledphp byphp eitherphp thephp sellerphp orphp eBayphp.
php php php php php php*
php php php php php php*php php php php php Ended
php php php php php php*php php php php php Thephp listingphp hasphp endedphp andphp eBayphp hasphp completedphp thephp processingphp ofphp the
php php php php php php*php php php php php salephp php(ifphp anyphp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$sellingStatephp;

php php php php php/php*php*
php php php php php php*php Timephp leftphp beforephp thephp listingphp endsphp.
php php php php php php*
php php php php php php*php Thephp durationphp isphp representedphp inphp thephp ISOphp php8php6php0php1php durationphp format
php php php php php php*php php(PnYnMnDTnHnMnSphp)php.php Forphp listingsphp thatphp havephp endedphp,php thephp timephp leftphp isphp PTphp0S
php php php php php php*php php(zerophp secondsphp)php.php Seephp thephp php"durationphp"php typephp forphp informationphp aboutphp thisphp time
php php php php php php*php formatphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$timeLeftphp;

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_initphp(php)php;
php php php php php php php php php$nsphp php=php Zendphp_Servicephp_Ebayphp_Findingphp:php:XMLNSphp_FINDINGphp;

php php php php php php php php php$thisphp-php>bidCountphp php php php php php php php php php php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:bidCountphp[php1php]php"php,php php'integerphp'php)php;
php php php php php php php php php$thisphp-php>convertedCurrentPricephp php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:convertedCurrentPricephp[php1php]php"php,php php'floatphp'php)php;
php php php php php php php php php$thisphp-php>currentPricephp php php php php php php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:currentPricephp[php1php]php"php,php php'floatphp'php)php;
php php php php php php php php php$thisphp-php>sellingStatephp php php php php php php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:sellingStatephp[php1php]php"php,php php'stringphp'php)php;
php php php php php php php php php$thisphp-php>timeLeftphp php php php php php php php php php php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:timeLeftphp[php1php]php"php,php php'stringphp'php)php;

php php php php php php php php php$thisphp-php>php_attributesphp[php'convertedCurrentPricephp'php]php php=php arrayphp(
php php php php php php php php php php php php php'currencyIdphp'php php=php>php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:convertedCurrentPricephp[php1php]php/php@currencyIdphp[php1php]php"php,php php'stringphp'php)
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_attributesphp[php'currentPricephp'php]php php=php arrayphp(
php php php php php php php php php php php php php'currencyIdphp'php php=php>php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:currentPricephp[php1php]php/php@currencyIdphp[php1php]php"php,php php'stringphp'php)
php php php php php php php php php)php;
php php php php php}
php}
