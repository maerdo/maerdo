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
php php*php php@subpackagephp Response
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php2php0php9php6php php2php0php1php0php-php0php5php-php0php4php php1php5php:php3php7php:php2php3Zphp wadearnoldphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Responsephp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Responsephp.phpphp'php;

php/php*php*
php php*php Createsphp thephp properphp httpphp headersphp andphp sendphp thephp serializedphp AMFphp streamphp tophp standardphp outphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Response
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Responsephp_Httpphp extendsphp Zendphp_Amfphp_Response
php{
php php php php php/php*php*
php php php php php php*php Createphp thephp applicationphp responsephp headerphp forphp AMFphp andphp sendsphp thephp serializedphp AMFphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php ifphp php(php!headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php headerphp(php'Cachephp-Controlphp:php nophp-cachephp,php mustphp-revalidatephp'php)php;
php php php php php php php php php php php php headerphp(php'Expiresphp:php Thuphp,php php1php9php Novphp php1php9php8php1php php0php8php:php5php2php:php0php0php GMTphp'php)php;
php php php php php php php php php php php php headerphp(php'Pragmaphp:php nophp-cachephp'php)php;
php php php php php php php php php php php php headerphp(php'Contentphp-Typephp:php applicationphp/xphp-amfphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:getResponsephp(php)php;
php php php php php}
php}
