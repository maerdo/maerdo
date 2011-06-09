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
php php*php php@versionphp php php php php$Idphp:php Nullphp.phpphp php2php1php1php5php0php php2php0php1php0php-php0php2php-php2php3php php1php6php:php2php7php:php3php6Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Paginatorphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Paginatorphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Paginatorphp_Adapterphp_Nullphp implementsphp Zendphp_Paginatorphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Itemphp count
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_countphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$countphp Totalphp itemphp count
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$countphp php=php php0php)
php php php php php{
php php php php php php php php php$thisphp-php>php_countphp php=php php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp itemsphp forphp aphp pagephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$offsetphp Pagephp offset
php php php php php php*php php@paramphp php integerphp php$itemCountPerPagephp Numberphp ofphp itemsphp perphp page
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getItemsphp(php$offsetphp,php php$itemCountPerPagephp)
php php php php php{
php php php php php php php php ifphp php(php$offsetphp php>php=php php$thisphp-php>countphp(php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$remainItemCountphp php php=php php$thisphp-php>countphp(php)php php-php php$offsetphp;
php php php php php php php php php$currentItemCountphp php=php php$remainItemCountphp php>php php$itemCountPerPagephp php?php php$itemCountPerPagephp php:php php$remainItemCountphp;

php php php php php php php php returnphp arrayphp_fillphp(php0php,php php$currentItemCountphp,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp rowsphp inphp thephp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_countphp;
php php php php php}
php}