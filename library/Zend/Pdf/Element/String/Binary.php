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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Binaryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Elementphp_Stringphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*
php php*php PDFphp filephp php'binaryphp stringphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Stringphp_Binaryphp extendsphp Zendphp_Pdfphp_Elementphp_String
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$valuephp;


php php php php php/php*php*
php php php php php php*php Escapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inStr
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp escapephp(php$inStrphp)
php php php php php{
php php php php php php php php returnphp strtoupperphp(binphp2hexphp(php$inStrphp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Unescapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inStr
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp unescapephp(php$inStrphp)
php php php php php{
php php php php php php php php php$chunksphp php=php arrayphp(php)php;
php php php php php php php php php$offsetphp php=php php0php;
php php php php php php php php php$lengthphp php=php php0php;
php php php php php php php php whilephp php(php$offsetphp <php strlenphp(php$inStrphp)php)php php{
php php php php php php php php php php php php php/php/php Collectphp hexadecimalphp characters
php php php php php php php php php php php php php$startphp php=php php$offsetphp;
php php php php php php php php php php php php php$offsetphp php+php=php strspnphp(php$inStrphp,php php"php0php1php2php3php4php5php6php7php8php9abcdefABCDEFphp"php,php php$offsetphp)php;
php php php php php php php php php php php php php$chunksphp[php]php php=php substrphp(php$inStrphp,php php$startphp,php php$offsetphp php-php php$startphp)php;
php php php php php php php php php php php php php$lengthphp php+php=php strlenphp(endphp(php$chunksphp)php)php;

php php php php php php php php php php php php php/php/php Skipphp nonphp-hexadecimalphp characters
php php php php php php php php php php php php php$offsetphp php+php=php strcspnphp(php$inStrphp,php php"php0php1php2php3php4php5php6php7php8php9abcdefABCDEFphp"php,php php$offsetphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$lengthphp php%php php2php php!php=php php0php)php php{
php php php php php php php php php php php php php/php/php Wephp havephp oddphp numberphp ofphp digitsphp.
php php php php php php php php php php php php php/php/php Finalphp digitphp isphp assumedphp tophp bephp php'php0php'
php php php php php php php php php php php php php$chunksphp[php]php php=php php'php0php'php;
php php php php php php php php php}

php php php php php php php php returnphp packphp(php'Hphp*php'php php,php implodephp(php$chunksphp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp objectphp asphp string
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php'<php'php php.php selfphp:php:escapephp(php(stringphp)php$thisphp-php>valuephp)php php.php php'php>php'php;
php php php php php}
php}
