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
php php*php php@subpackagephp Request
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Amfphp_Requestphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Requestphp.phpphp'php;

php/php*php*
php php*php AMFphp Requestphp objectphp php-php-php Requestphp viaphp HTTP
php php*
php php*php Extendsphp php{php@linkphp Zendphp_Amfphp_Requestphp}php tophp acceptphp aphp requestphp viaphp HTTPphp.php Requestphp is
php php*php builtphp atphp constructionphp timephp usingphp aphp rawphp POSTphp;php ifphp nophp dataphp isphp availablephp,php the
php php*php requestphp isphp declaredphp aphp faultphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Request
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Requestphp_Httpphp extendsphp Zendphp_Amfphp_Request
php{
php php php php php/php*php*
php php php php php php*php Rawphp AMFphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rawRequestphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Attemptsphp tophp readphp fromphp phpphp:php/php/inputphp tophp getphp rawphp POSTphp requestphp;php ifphp anphp error
php php php php php php*php occursphp inphp doingphp sophp,php orphp ifphp thephp AMFphp bodyphp isphp invalidphp,php thephp requestphp isphp declaredphp a
php php php php php php*php faultphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php/php/php phpphp:php/php/inputphp allowsphp youphp tophp readphp rawphp POSTphp dataphp.php Itphp isphp aphp lessphp memory
php php php php php php php php php/php/php intensivephp alternativephp tophp php$HTTPphp_RAWphp_POSTphp_DATAphp andphp doesphp notphp needphp any
php php php php php php php php php/php/php specialphp phpphp.iniphp directives
php php php php php php php php php$amfRequestphp php=php filephp_getphp_contentsphp(php'phpphp:php/php/inputphp'php)php;

php php php php php php php php php/php/php Checkphp tophp makephp surephp thatphp wephp havephp dataphp onphp thephp inputphp streamphp.
php php php php php php php php ifphp php(php$amfRequestphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_rawRequestphp php=php php$amfRequestphp;
php php php php php php php php php php php php php$thisphp-php>initializephp(php$amfRequestphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php echophp php'php<pphp>Zendphp Amfphp Endpoint<php/pphp>php'php php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp rawphp AMFphp Request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRawRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rawRequestphp;
php php php php php}
php}
