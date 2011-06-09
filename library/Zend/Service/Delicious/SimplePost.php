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
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SimplePostphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Representsphp aphp publiclyphp availablephp post
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Deliciousphp_SimplePost
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Postphp url
php php php php php php*php/
php php php php protectedphp php$php_urlphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Postphp title
php php php php php php*php/
php php php php protectedphp php$php_titlephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Postphp notes
php php php php php php*php/
php php php php protectedphp php$php_notesphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Postphp tags
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$postphp Postphp data
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$postphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$postphp[php'uphp'php]php)php php|php|php php!issetphp(php$postphp[php'dphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'Titlephp andphp URLphp notphp setphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_urlphp php php php=php php$postphp[php'uphp'php]php;
php php php php php php php php php$thisphp-php>php_titlephp php=php php$postphp[php'dphp'php]php;

php php php php php php php php ifphp php(issetphp(php$postphp[php'tphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tagsphp php=php php$postphp[php'tphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$postphp[php'nphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_notesphp php=php php$postphp[php'nphp'php]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUrlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp title
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_titlephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp notes
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNotesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_notesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp tags
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tagsphp;
php php php php php}
php}
