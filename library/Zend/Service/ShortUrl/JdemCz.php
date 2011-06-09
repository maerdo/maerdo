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
php php*php php@seephp Zendphp_Servicephp_ShortUrlphp_AbstractShortener
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/ShortUrlphp/AbstractShortenerphp.phpphp'php;

php/php*php*
php php*php Jdemphp.czphp APIphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_ShortUrl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_ShortUrlphp_JdemCzphp extendsphp Zendphp_Servicephp_ShortUrlphp_AbstractShortener
php{
php php php php php/php*php*
php php php php php php*php Basephp URIphp ofphp thephp service
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUriphp php=php php'httpphp:php/php/jdemphp.czphp'php;

php php php php php/php*php*
php php php php php php*php Thisphp functionphp shortensphp longphp url
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp URLphp tophp Shorten
php php php php php php*php php@throwsphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp Whenphp URLphp isphp notphp valid
php php php php php php*php php@returnphp stringphp Newphp URL
php php php php php php*php/
php php php php publicphp functionphp shortenphp(php$urlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validateUriphp(php$urlphp)php;

php php php php php php php php php$serviceUriphp php=php php'httpphp:php/php/wwwphp.jdemphp.czphp/getphp'php;

php php php php php php php php php$thisphp-php>getHttpClientphp(php)php-php>setUriphp(php$serviceUriphp)php;
php php php php php php php php php$thisphp-php>getHttpClientphp(php)php-php>setParameterGetphp(php'urlphp'php,php php$urlphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>getHttpClientphp(php)php-php>requestphp(php)php;

php php php php php php php php returnphp php$responsephp-php>getBodyphp(php)php;
php php php php php}

php php php php/php*php*
php php php php php php*php Revealsphp targetphp forphp shortphp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$shortenedUrlphp URLphp tophp revealphp targetphp of
php php php php php php*php php@throwsphp Zendphp_Servicephp_ShortUrlphp_Exceptionphp Whenphp URLphp isphp notphp validphp orphp isphp notphp shortenedphp byphp thisphp service
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp unshortenphp(php$shortenedUrlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validateUriphp(php$shortenedUrlphp)php;

php php php php php php php php php$thisphp-php>php_verifyBaseUriphp(php$shortenedUrlphp)php;

php php php php php php php php php$thisphp-php>getHttpClientphp(php)php-php>setUriphp(php$shortenedUrlphp)php-php>setParameterGetphp(php'kamphp'php,php php1php)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>getHttpClientphp(php)php-php>requestphp(php)php;

php php php php php php php php returnphp php$responsephp-php>getBodyphp(php)php;
php php php php php}
php}
