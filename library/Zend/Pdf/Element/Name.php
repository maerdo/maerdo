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
php php*php php@versionphp php php php php$Idphp:php Namephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*
php php*php PDFphp filephp php'namephp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Namephp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$valuephp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$val
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valphp)
php php php php php{
php php php php php php php php settypephp(php$valphp,php php'stringphp'php)php;
php php php php php php php php ifphp php(strposphp(php$valphp,php"php\xphp0php0php"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Nullphp characterphp isphp notphp allowedphp inphp PDFphp Namesphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>valuephp php php php=php php(stringphp)php$valphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Pdfphp_Elementphp:php:TYPEphp_NAMEphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Escapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inStr
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp escapephp(php$inStrphp)
php php php php php{
php php php php php php php php php$outStrphp php=php php'php'php;

php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php strlenphp(php$inStrphp)php;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$nextCodephp php=php ordphp(php$inStrphp[php$countphp]php)php;

php php php php php php php php php php php php switchphp php(php$inStrphp[php$countphp]php)php php{
php php php php php php php php php php php php php php php php casephp php'php(php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php)php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'<php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php>php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php[php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php]php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php{php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php}php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php/php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php%php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php\php\php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php'php#php'php:
php php php php php php php php php php php php php php php php php php php php php$outStrphp php.php=php sprintfphp(php'php#php%php0php2Xphp'php,php php$nextCodephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$nextCodephp php>php=php php3php3php php&php&php php$nextCodephp <php=php php1php2php6php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Visiblephp ASCIIphp symbol
php php php php php php php php php php php php php php php php php php php php php php php php php$outStrphp php.php=php php$inStrphp[php$countphp]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outStrphp php.php=php sprintfphp(php'php#php%php0php2Xphp'php,php php$nextCodephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$outStrphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Unescapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inStr
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp unescapephp(php$inStrphp)
php php php php php{
php php php php php php php php php$outStrphp php=php php'php'php;

php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php strlenphp(php$inStrphp)php;php php$countphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$inStrphp[php$countphp]php php!php=php php'php#php'php php)php php php{
php php php php php php php php php php php php php php php php php$outStrphp php.php=php php$inStrphp[php$countphp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Escapephp sequence
php php php php php php php php php php php php php php php php php$outStrphp php.php=php chrphp(basephp_convertphp(substrphp(php$inStrphp,php php$countphp+php1php,php php2php)php,php php1php6php,php php1php0php php)php)php;
php php php php php php php php php php php php php php php php php$countphp php+php=php2php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$outStrphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp objectphp asphp string
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php'php/php'php php.php selfphp:php:escapephp(php(stringphp)php$thisphp-php>valuephp)php;
php php php php php}
php}
