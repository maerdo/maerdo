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
php php*php php@versionphp php php php php$Idphp:php Histogramphp.phpphp php2php2php7php9php1php php2php0php1php0php-php0php8php-php0php4php php1php6php:php1php1php:php4php7Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Categoryphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@usesphp php php php php php php Zendphp_Servicephp_Ebayphp_Findingphp_Category
php php*php/
classphp Zendphp_Servicephp_Ebayphp_Findingphp_Categoryphp_Histogramphp extendsphp Zendphp_Servicephp_Ebayphp_Findingphp_Category
php{
php php php php php/php*php*
php php php php php php*php Containerphp forphp histogramphp informationphp pertainingphp tophp aphp childphp ofphp thephp category
php php php php php php*php specifiedphp inphp thephp requestphp.
php php php php php php*
php php php php php php*php Histogramsphp returnphp dataphp onphp upphp tophp php1php0php childrenphp.php Histogramsphp arephp onlyphp aphp single
php php php php php php*php levelphp deepphp.php Thatphp isphp,php aphp givenphp categoryphp histogramphp containsphp onlyphp immediate
php php php php php php*php childrenphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_Ebayphp_Findingphp_Categoryphp_Histogramphp_Set
php php php php php php*php/
php php php php publicphp php$childCategoryHistogramphp;

php php php php php/php*php*
php php php php php php*php Thephp totalphp numberphp ofphp itemsphp inphp thephp associatedphp categoryphp thatphp matchphp the
php php php php php php*php searchphp criteriaphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$countphp;

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_initphp(php)php;
php php php php php php php php php$nsphp php=php Zendphp_Servicephp_Ebayphp_Findingphp:php:XMLNSphp_FINDINGphp;

php php php php php php php php php$thisphp-php>countphp php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:countphp[php1php]php"php,php php'integerphp'php)php;

php php php php php php php php php$nodesphp php=php php$thisphp-php>php_xPathphp-php>queryphp(php"php.php/php/php$nsphp:childCategoryHistogramphp"php,php php$thisphp-php>php_domphp)php;
php php php php php php php php ifphp php(php$nodesphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Categoryphp_Histogramphp_Set
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Categoryphp/Histogramphp/Setphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>childCategoryHistogramphp php=php newphp Zendphp_Servicephp_Ebayphp_Findingphp_Categoryphp_Histogramphp_Setphp(php$nodesphp)php;
php php php php php php php php php}
php php php php php}
php}
