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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AbstractMessagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp isphp thephp defaultphp Implementationphp ofphp Messagephp,php whichphp provides
php php*php aphp convenientphp basephp forphp behaviorphp andphp associationphp ofphp commonphp endpoints
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Valuephp_Messagingphp_AbstractMessage
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Clientphp identifier
php php php php php php*php/
php php php php publicphp php$clientIdphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Destination
php php php php php php*php/
php php php php publicphp php$destinationphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Messagephp identifier
php php php php php php*php/
php php php php publicphp php$messageIdphp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Messagephp timestamp
php php php php php php*php/
php php php php publicphp php$timestampphp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Messagephp TTL
php php php php php php*php/
php php php php publicphp php$timeToLivephp;

php php php php php/php*php*
php php php php php php*php php@varphp objectphp Messagephp headers
php php php php php php*php/
php php php php publicphp php$headersphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Messagephp body
php php php php php php*php/
php php php php publicphp php$bodyphp;

php php php php php/php*php*
php php php php php php*php generatephp aphp uniquephp id
php php php php php php*
php php php php php php*php Formatphp isphp:php php#php#php#php#php#php#php#php#php-php#php#php#php#php-php#php#php#php#php-php#php#php#php#php-php#php#php#php#php#php#php#php#php#php#php#php#
php php php php php php*php Wherephp php#php isphp anphp uppercasephp letterphp orphp number
php php php php php php*php examplephp:php php6Dphp9DCphp7ECphp-Aphp2php7php3php-php8php3Aphp9php-ABEphp3php-php0php0php0php0php5FDphp7php5php2Dphp6
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateIdphp(php)
php php php php php{
php php php php php php php php returnphp sprintfphp(
php php php php php php php php php php php php php'php%php0php8Xphp-php%php0php4Xphp-php%php0php4Xphp-php%php0php2Xphp%php0php2Xphp-php%php0php1php2Xphp'php,
php php php php php php php php php php php php mtphp_randphp(php)php,
php php php php php php php php php php php php mtphp_randphp(php0php,php php6php5php5php3php5php)php,
php php php php php php php php php php php php bindecphp(substrphp_replacephp(
php php php php php php php php php php php php php php php php sprintfphp(php'php%php0php1php6bphp'php,php mtphp_randphp(php0php,php php6php5php5php3php5php)php)php,php php'php0php1php0php0php'php,php php1php1php,php php4php)
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php bindecphp(substrphp_replacephp(sprintfphp(php'php%php0php8bphp'php,php mtphp_randphp(php0php,php php2php5php5php)php)php,php php'php0php1php'php,php php5php,php php2php)php)php,
php php php php php php php php php php php php mtphp_randphp(php0php,php php2php5php5php)php,
php php php php php php php php php php php php mtphp_randphp(php)
php php php php php php php php php)php;
php php php php php}
php}
