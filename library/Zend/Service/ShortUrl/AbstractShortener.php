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
php php*php php@packagephp php php php Zendphp_Servicephp_ShortUrl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_ShortUrlphp_Shortener
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/ShortUrlphp/Shortenerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_ShortUrl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_ShortUrlphp_AbstractShortener
php php php php extendsphp Zendphp_Servicephp_Abstract
php php php php implementsphp Zendphp_Servicephp_ShortUrlphp_Shortener
php{
php php php php php/php*php*
php php php php php php*php Basephp URIphp ofphp thephp service
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUriphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Checksphp whetherphp URLphp tophp bephp shortenedphp isphp valid
php php php php php php*
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php php@throwsphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp Whenphp URLphp isphp notphp valid
php php php php php php*php/
php php php php protectedphp functionphp php_validateUriphp(php$urlphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ShortUrlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Thephp urlphp php"php%sphp"php isphp notphp validphp andphp cannotphp bephp shortenedphp'php,php php$url
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifiesphp thatphp thephp URLphp hasphp beenphp shortenedphp byphp thisphp service
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp Ifphp thephp URLphp hasnphp'tphp beenphp shortenedphp byphp thisphp service
php php php php php php*php php@paramphp stringphp php$shortenedUrl
php php php php php php*php/
php php php php protectedphp functionphp php_verifyBaseUriphp(php$shortenedUrlphp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$shortenedUrlphp,php php$thisphp-php>php_baseUriphp)php php!php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ShortUrlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Thephp urlphp php"php%sphp"php isphp notphp validphp forphp thisphp servicephp andphp thephp targetphp cannotphp bephp resolvedphp'php,
php php php php php php php php php php php php php php php php php$shortenedUrl
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php}
php}
