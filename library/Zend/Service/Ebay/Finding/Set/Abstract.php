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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Ebayphp_Findingphp_Setphp_Abstractphp implementsphp SeekableIteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php php@varphp DOMNodeList
php php php php php php*php/
php php php php protectedphp php$php_nodesphp;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_keyphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@paramphp php DOMNodeListphp php$nodes
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMNodeListphp php$nodesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_nodesphp php=php php$nodesphp;
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp objectphp.
php php php php php php*
php php php php php php*php Calledphp fromphp php{php@linkphp php_php_constructphp(php)php}php asphp finalphp stepphp ofphp objectphp initializationphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp SeekableIteratorphp:php:seekphp(php)
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$key
php php php php php php*php php@throwsphp OutOfBoundsExceptionphp Whenphp php$keyphp isphp notphp seekable
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp seekphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$keyphp <php php0php php|php|php php$keyphp php>php=php php$thisphp-php>countphp(php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php"Positionphp php'php{php$keyphp}php'php isphp notphp seekablephp.php"php;
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php$messagephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_keyphp php=php php$keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Iteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Iteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_keyphp+php+php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Iteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_keyphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Iteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_keyphp php>php=php php0php php&php&php php$thisphp-php>php_keyphp <php php$thisphp-php>countphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp Countablephp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_nodesphp php?php php$thisphp-php>php_nodesphp-php>lengthphp php:php php0php;
php php php php php}
php}
