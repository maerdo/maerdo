<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Adapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Messagephp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/MessageSetphp.phpphp'php;

php/php*php*
php php*php Abstractphp queuephp adapter
php php*
php php*php Providesphp functionalityphp aroundphp settingphp messagephp andphp messagephp setphp classesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_AbstractAdapter
php php php php implementsphp Zendphp_Cloudphp_QueueServicephp_Adapter
php{
php php php php php/php*php*php@php+php optionphp keysphp php*php/
php php php php constphp MESSAGEphp_CLASSphp php php php php=php php'messagephp_classphp'php;
php php php php constphp MESSAGESETphp_CLASSphp php=php php'messagesetphp_classphp'php;
php php php php php/php*php*php@php-php*php/

php php php php php/php*php*php php@varphp stringphp Classphp tophp usephp forphp queuephp messagesphp php*php/
php php php php protectedphp php$php_messageClassphp php php php php=php php'Zendphp_Cloudphp_QueueServicephp_Messagephp'php;

php php php php php/php*php*php php@varphp stringphp Classphp tophp usephp forphp collectionsphp ofphp queuephp messagesphp php*php/
php php php php protectedphp php$php_messageSetClassphp php=php php'Zendphp_Cloudphp_QueueServicephp_MessageSetphp'php;

php php php php php/php*php*
php php php php php php*php Setphp classphp tophp usephp forphp messagephp objects
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_AbstractAdapter
php php php php php php*php/
php php php php publicphp functionphp setMessageClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messageClassphp php=php php(stringphp)php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp tophp usephp forphp messagephp objects
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMessageClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messageClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp classphp tophp usephp forphp messagephp collectionphp objects
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Cloudphp_QueueServicephp_Adapterphp_AbstractAdapter
php php php php php php*php/
php php php php publicphp functionphp setMessageSetClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messageSetClassphp php=php php(stringphp)php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp tophp usephp forphp messagephp collectionphp objects
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMessageSetClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messageSetClassphp;
php php php php php}
php}
