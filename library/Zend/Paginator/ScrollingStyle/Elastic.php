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
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Elasticphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Paginatorphp_ScrollingStylephp_Sliding
php php*php/
requirephp_oncephp php'Zendphp/Paginatorphp/ScrollingStylephp/Slidingphp.phpphp'php;

php/php*php*
php php*php Aphp Googlephp-likephp scrollingphp stylephp.php php Incrementallyphp expandsphp thephp rangephp tophp about
php php*php twicephp thephp givenphp pagephp rangephp,php thenphp behavesphp likephp aphp sliderphp.php php Seephp thephp example
php php*php linkphp.
php php*
php php*php php@linkphp php php php php php php httpphp:php/php/wwwphp.googlephp.comphp/searchphp?qphp=Zendphp+Framework
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Paginatorphp_ScrollingStylephp_Elasticphp extendsphp Zendphp_Paginatorphp_ScrollingStylephp_Sliding
php{
php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp php"localphp"php pagesphp givenphp aphp pagephp numberphp andphp rangephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Paginatorphp php$paginator
php php php php php php*php php@paramphp php integerphp php$pageRangephp Unused
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPagesphp(Zendphp_Paginatorphp php$paginatorphp,php php$pageRangephp php=php nullphp)
php php php php php{
php php php php php php php php php$pageRangephp php php=php php$paginatorphp-php>getPageRangephp(php)php;
php php php php php php php php php$pageNumberphp php=php php$paginatorphp-php>getCurrentPageNumberphp(php)php;

php php php php php php php php php$originalPageRangephp php=php php$pageRangephp;
php php php php php php php php php$pageRangephp php php php php php php php php php=php php$pageRangephp php*php php2php php-php php1php;

php php php php php php php php ifphp php(php$originalPageRangephp php+php php$pageNumberphp php-php php1php <php php$pageRangephp)php php{
php php php php php php php php php php php php php$pageRangephp php=php php$originalPageRangephp php+php php$pageNumberphp php-php php1php;
php php php php php php php php php}php elsephp ifphp php(php$originalPageRangephp php+php php$pageNumberphp php-php php1php php>php countphp(php$paginatorphp)php)php php{
php php php php php php php php php php php php php$pageRangephp php=php php$originalPageRangephp php+php countphp(php$paginatorphp)php php-php php$pageNumberphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:getPagesphp(php$paginatorphp,php php$pageRangephp)php;
php php php php php}
php}