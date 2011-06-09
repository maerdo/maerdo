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
php php*php php@versionphp php php php php$Idphp:php Storefrontphp.phpphp php2php2php8php2php4php php2php0php1php0php-php0php8php-php0php9php php1php8php:php5php9php:php5php4Zphp renanbrphp php$
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
classphp Zendphp_Servicephp_Ebayphp_Findingphp_Storefrontphp extendsphp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp namephp ofphp thephp sellerphp'sphp eBayphp Storephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$storeNamephp;

php php php php php/php*php*
php php php php php php*php Thephp URLphp ofphp thephp sellerphp'sphp eBayphp Storephp pagephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$storeURLphp;

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_initphp(php)php;
php php php php php php php php php$nsphp php=php Zendphp_Servicephp_Ebayphp_Findingphp:php:XMLNSphp_FINDINGphp;

php php php php php php php php php$thisphp-php>storeNamephp php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:storeNamephp[php1php]php"php,php php'stringphp'php)php;
php php php php php php php php php$thisphp-php>storeURLphp php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:storeURLphp[php1php]php"php,php php'stringphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Ebayphp_Findingphp php$proxy
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php php php php php php php php php$options
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Findingphp_Responsephp_Items
php php php php php php*php/
php php php php publicphp functionphp findItemsphp(Zendphp_Servicephp_Ebayphp_Findingphp php$proxyphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$proxyphp-php>findItemsInEbayStoresphp(php$thisphp-php>storeNamephp,php php$optionsphp)php;
php php php php php}
php}
