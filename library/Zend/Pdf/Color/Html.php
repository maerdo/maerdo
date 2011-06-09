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
php php*php php@versionphp php php php php$Idphp:php Htmlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_Colorphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Colorphp.phpphp'php;


php/php*php*
php php*php HTMLphp colorphp implementation
php php*
php php*php Factoryphp classphp whichphp vendsphp Zendphp_Pdfphp_Colorphp objectsphp fromphp typicalphp HTML
php php*php representationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Colorphp_Htmlphp extendsphp Zendphp_Pdfphp_Color
php{

php php php php php/php*php*
php php php php php php*php Color
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Color
php php php php php php*php/
php php php php privatephp php$php_colorphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$color
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$colorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_colorphp php=php selfphp:php:colorphp(php$colorphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Instructionsphp,php whichphp canphp bephp directlyphp insertedphp intophp contentphp stream
php php php php php php*php tophp switchphp colorphp.
php php php php php php*php Colorphp setphp instructionsphp differphp forphp strokingphp andphp nonstrokingphp operationsphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$stroking
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp instructionsphp(php$strokingphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_colorphp-php>instructionsphp(php$strokingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp colorphp componentsphp php(colorphp spacephp dependentphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getComponentsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_colorphp-php>getComponentsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp Zendphp_Pdfphp_Colorphp objectphp fromphp thephp HTMLphp representationphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$colorphp Mayphp eitherphp bephp aphp hexidecimalphp numberphp ofphp thephp form
php php php php php php*php php php php php#rrggbbphp orphp onephp ofphp thephp php1php4php0php wellphp-knownphp namesphp php(blackphp,php whitephp,php bluephp,php etcphp.php)
php php php php php php*php php@returnphp Zendphp_Pdfphp_Color
php php php php php php*php/
php php php php publicphp staticphp functionphp colorphp(php$colorphp)
php php php php php{
php php php php php php php php php$patternphp php=php php'php/php^php#php(php[Aphp-Faphp-fphp0php-php9php]php{php2php}php)php(php[Aphp-Faphp-fphp0php-php9php]php{php2php}php)php(php[Aphp-Faphp-fphp0php-php9php]php{php2php}php)php$php/php'php;
php php php php php php php php ifphp php(pregphp_matchphp(php$patternphp,php php$colorphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$rphp php=php roundphp(php(hexdecphp(php$matchesphp[php1php]php)php php/php php2php5php5php)php,php php3php)php;
php php php php php php php php php php php php php$gphp php=php roundphp(php(hexdecphp(php$matchesphp[php2php]php)php php/php php2php5php5php)php,php php3php)php;
php php php php php php php php php php php php php$bphp php=php roundphp(php(hexdecphp(php$matchesphp[php3php]php)php php/php php2php5php5php)php,php php3php)php;
php php php php php php php php php php php php ifphp php(php(php$rphp php=php=php php$gphp)php php&php&php php(php$gphp php=php=php php$bphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/GrayScalephp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Colorphp_GrayScalephp(php$rphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/Rgbphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Colorphp_Rgbphp(php$rphp,php php$gphp,php php$bphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp Zendphp_Pdfphp_Colorphp_Htmlphp:php:namedColorphp(php$colorphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp Zendphp_Pdfphp_Colorphp objectphp fromphp thephp namedphp colorphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$colorphp Onephp ofphp thephp php1php4php0php wellphp-knownphp colorphp namesphp php(blackphp,php whitephp,
php php php php php php*php php php php bluephp,php etcphp.php)
php php php php php php*php php@returnphp Zendphp_Pdfphp_Color
php php php php php php*php/
php php php php publicphp staticphp functionphp namedColorphp(php$colorphp)
php php php php php{
php php php php php php php php switchphp php(strtolowerphp(php$colorphp)php)php php{
php php php php php php php php php php php php casephp php'aquaphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'blackphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'bluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'fuchsiaphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'grayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php0php2php;php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php5php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'greenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'limephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'maroonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php0php2php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'navyphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php5php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'olivephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php0php2php;php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'purplephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php0php2php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php5php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'redphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'silverphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php5php3php;php php$gphp php=php php0php.php7php5php3php;php php$bphp php=php php0php.php7php5php3php;php breakphp;
php php php php php php php php php php php php casephp php'tealphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php5php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'whitephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'yellowphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;

php php php php php php php php php php php php casephp php'alicebluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php4php1php;php php$gphp php=php php0php.php9php7php3php;php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'antiquewhitephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php8php0php;php php$gphp php=php php0php.php9php2php2php;php php$bphp php=php php0php.php8php4php3php;php breakphp;
php php php php php php php php php php php php casephp php'aquamarinephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php9php8php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php8php3php1php;php breakphp;
php php php php php php php php php php php php casephp php'azurephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php4php1php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'beigephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php6php1php;php php$gphp php=php php0php.php9php6php1php;php php$bphp php=php php0php.php8php6php3php;php breakphp;
php php php php php php php php php php php php casephp php'bisquephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php8php9php4php;php php$bphp php=php php0php.php7php6php9php;php breakphp;
php php php php php php php php php php php php casephp php'blanchedalmondphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php8php0php4php;php breakphp;
php php php php php php php php php php php php casephp php'bluevioletphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php4php1php;php php$gphp php=php php0php.php1php6php9php;php php$bphp php=php php0php.php8php8php6php;php breakphp;
php php php php php php php php php php php php casephp php'brownphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php4php7php;php php$gphp php=php php0php.php1php6php5php;php php$bphp php=php php0php.php1php6php5php;php breakphp;
php php php php php php php php php php php php casephp php'burlywoodphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php7php1php;php php$gphp php=php php0php.php7php2php2php;php php$bphp php=php php0php.php5php2php9php;php breakphp;
php php php php php php php php php php php php casephp php'cadetbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php3php7php3php;php php$gphp php=php php0php.php6php2php0php;php php$bphp php=php php0php.php6php2php7php;php breakphp;
php php php php php php php php php php php php casephp php'chartreusephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php9php8php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'chocolatephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php2php4php;php php$gphp php=php php0php.php4php1php2php;php php$bphp php=php php0php.php1php1php8php;php breakphp;
php php php php php php php php php php php php casephp php'coralphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php4php9php8php;php php$bphp php=php php0php.php3php1php4php;php breakphp;
php php php php php php php php php php php php casephp php'cornflowerbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php3php9php2php;php php$gphp php=php php0php.php5php8php4php;php php$bphp php=php php0php.php9php2php9php;php breakphp;
php php php php php php php php php php php php casephp php'cornsilkphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php7php3php;php php$bphp php=php php0php.php8php6php3php;php breakphp;
php php php php php php php php php php php php casephp php'crimsonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php6php3php;php php$gphp php=php php0php.php0php7php8php;php php$bphp php=php php0php.php2php3php5php;php breakphp;
php php php php php php php php php php php php casephp php'cyanphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'darkbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php5php4php5php;php breakphp;
php php php php php php php php php php php php casephp php'darkcyanphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php5php4php5php;php php$bphp php=php php0php.php5php4php5php;php breakphp;
php php php php php php php php php php php php casephp php'darkgoldenrodphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php2php2php;php php$gphp php=php php0php.php5php2php5php;php php$bphp php=php php0php.php0php4php3php;php breakphp;
php php php php php php php php php php php php casephp php'darkgrayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php6php3php;php php$gphp php=php php0php.php6php6php3php;php php$bphp php=php php0php.php6php6php3php;php breakphp;
php php php php php php php php php php php php casephp php'darkgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php3php9php2php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'darkkhakiphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php4php1php;php php$gphp php=php php0php.php7php1php8php;php php$bphp php=php php0php.php4php2php0php;php breakphp;
php php php php php php php php php php php php casephp php'darkmagentaphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php4php5php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php5php4php5php;php breakphp;
php php php php php php php php php php php php casephp php'darkolivegreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php3php3php3php;php php$gphp php=php php0php.php4php2php0php;php php$bphp php=php php0php.php1php8php4php;php breakphp;
php php php php php php php php php php php php casephp php'darkorangephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php5php4php9php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'darkorchidphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php;php php php php$gphp php=php php0php.php1php9php6php;php php$bphp php=php php0php.php8php;php php php breakphp;
php php php php php php php php php php php php casephp php'darkredphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php4php5php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'darksalmonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php1php4php;php php$gphp php=php php0php.php5php8php8php;php php$bphp php=php php0php.php4php7php8php;php breakphp;
php php php php php php php php php php php php casephp php'darkseagreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php6php1php;php php$gphp php=php php0php.php7php3php7php;php php$bphp php=php php0php.php5php6php1php;php breakphp;
php php php php php php php php php php php php casephp php'darkslatebluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php8php2php;php php$gphp php=php php0php.php2php3php9php;php php$bphp php=php php0php.php5php4php5php;php breakphp;
php php php php php php php php php php php php casephp php'darkslategrayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php8php4php;php php$gphp php=php php0php.php3php1php0php;php php$bphp php=php php0php.php3php1php0php;php breakphp;
php php php php php php php php php php php php casephp php'darkturquoisephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php8php0php8php;php php$bphp php=php php0php.php8php2php0php;php breakphp;
php php php php php php php php php php php php casephp php'darkvioletphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php8php0php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php8php2php7php;php breakphp;
php php php php php php php php php php php php casephp php'deeppinkphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php0php7php8php;php php$bphp php=php php0php.php5php7php6php;php breakphp;
php php php php php php php php php php php php casephp php'deepskybluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php7php4php9php;php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'dimgrayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php1php2php;php php$gphp php=php php0php.php4php1php2php;php php$bphp php=php php0php.php4php1php2php;php breakphp;
php php php php php php php php php php php php casephp php'dodgerbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php1php8php;php php$gphp php=php php0php.php5php6php5php;php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'firebrickphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php9php8php;php php$gphp php=php php0php.php1php3php3php;php php$bphp php=php php0php.php1php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'floralwhitephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php8php0php;php php$bphp php=php php0php.php9php4php1php;php breakphp;
php php php php php php php php php php php php casephp php'forestgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php3php3php;php php$gphp php=php php0php.php5php4php5php;php php$bphp php=php php0php.php1php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'gainsborophp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php6php3php;php php$gphp php=php php0php.php8php6php3php;php php$bphp php=php php0php.php8php6php3php;php breakphp;
php php php php php php php php php php php php casephp php'ghostwhitephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php7php3php;php php$gphp php=php php0php.php9php7php3php;php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'goldphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php8php4php3php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'goldenrodphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php5php5php;php php$gphp php=php php0php.php6php4php7php;php php$bphp php=php php0php.php1php2php5php;php breakphp;
php php php php php php php php php php php php casephp php'greenyellowphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php7php8php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php1php8php4php;php breakphp;
php php php php php php php php php php php php casephp php'honeydewphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php4php1php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php9php4php1php;php breakphp;
php php php php php php php php php php php php casephp php'hotpinkphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php4php1php2php;php php$bphp php=php php0php.php7php0php6php;php breakphp;
php php php php php php php php php php php php casephp php'indianredphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php0php4php;php php$gphp php=php php0php.php3php6php1php;php php$bphp php=php php0php.php3php6php1php;php breakphp;
php php php php php php php php php php php php casephp php'indigophp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php9php4php;php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php5php1php0php;php breakphp;
php php php php php php php php php php php php casephp php'ivoryphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php4php1php;php php$bphp php=php php0php.php9php4php1php;php breakphp;
php php php php php php php php php php php php casephp php'khakiphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php4php1php;php php$gphp php=php php0php.php9php0php2php;php php$bphp php=php php0php.php5php4php9php;php breakphp;
php php php php php php php php php php php php casephp php'lavenderphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php0php2php;php php$gphp php=php php0php.php9php0php2php;php php$bphp php=php php0php.php9php8php0php;php breakphp;
php php php php php php php php php php php php casephp php'lavenderblushphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php4php1php;php php$bphp php=php php0php.php9php6php1php;php breakphp;
php php php php php php php php php php php php casephp php'lawngreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php8php6php;php php$gphp php=php php0php.php9php8php8php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'lemonchiffonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php8php0php;php php$bphp php=php php0php.php8php0php4php;php breakphp;
php php php php php php php php php php php php casephp php'lightbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php7php8php;php php$gphp php=php php0php.php8php4php7php;php php$bphp php=php php0php.php9php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'lightcoralphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php4php1php;php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php5php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'lightcyanphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php7php8php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'lightgoldenrodyellowphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php8php0php;php php$gphp php=php php0php.php9php8php0php;php php$bphp php=php php0php.php8php2php4php;php breakphp;
php php php php php php php php php php php php casephp php'lightgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php6php5php;php php$gphp php=php php0php.php9php3php3php;php php$bphp php=php php0php.php5php6php5php;php breakphp;
php php php php php php php php php php php php casephp php'lightgreyphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php2php7php;php php$gphp php=php php0php.php8php2php7php;php php$bphp php=php php0php.php8php2php7php;php breakphp;
php php php php php php php php php php php php casephp php'lightpinkphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php7php1php4php;php php$bphp php=php php0php.php7php5php7php;php breakphp;
php php php php php php php php php php php php casephp php'lightsalmonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php6php2php7php;php php$bphp php=php php0php.php4php7php8php;php breakphp;
php php php php php php php php php php php php casephp php'lightseagreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php2php5php;php php$gphp php=php php0php.php6php9php8php;php php$bphp php=php php0php.php6php6php7php;php breakphp;
php php php php php php php php php php php php casephp php'lightskybluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php2php9php;php php$gphp php=php php0php.php8php0php8php;php php$bphp php=php php0php.php9php8php0php;php breakphp;
php php php php php php php php php php php php casephp php'lightslategrayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php6php7php;php php$gphp php=php php0php.php5php3php3php;php php$bphp php=php php0php.php6php;php php php breakphp;
php php php php php php php php php php php php casephp php'lightsteelbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php9php0php;php php$gphp php=php php0php.php7php6php9php;php php$bphp php=php php0php.php8php7php1php;php breakphp;
php php php php php php php php php php php php casephp php'lightyellowphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php8php7php8php;php breakphp;
php php php php php php php php php php php php casephp php'limegreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php9php6php;php php$gphp php=php php0php.php8php0php4php;php php$bphp php=php php0php.php1php9php6php;php breakphp;
php php php php php php php php php php php php casephp php'linenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php8php0php;php php$gphp php=php php0php.php9php4php1php;php php$bphp php=php php0php.php9php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'magentaphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php1php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'mediumaquamarinephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php;php php php php$gphp php=php php0php.php8php0php4php;php php$bphp php=php php0php.php6php6php7php;php breakphp;
php php php php php php php php php php php php casephp php'mediumbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php0php;php php php php$bphp php=php php0php.php8php0php4php;php breakphp;
php php php php php php php php php php php php casephp php'mediumorchidphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php2php9php;php php$gphp php=php php0php.php3php3php3php;php php$bphp php=php php0php.php8php2php7php;php breakphp;
php php php php php php php php php php php php casephp php'mediumpurplephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php7php6php;php php$gphp php=php php0php.php4php3php9php;php php$bphp php=php php0php.php8php5php9php;php breakphp;
php php php php php php php php php php php php casephp php'mediumseagreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php3php5php;php php$gphp php=php php0php.php7php0php2php;php php$bphp php=php php0php.php4php4php3php;php breakphp;
php php php php php php php php php php php php casephp php'mediumslatebluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php8php2php;php php$gphp php=php php0php.php4php0php8php;php php$bphp php=php php0php.php9php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'mediumspringgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php0php.php9php8php0php;php php$bphp php=php php0php.php6php0php4php;php breakphp;
php php php php php php php php php php php php casephp php'mediumturquoisephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php8php2php;php php$gphp php=php php0php.php8php2php0php;php php$bphp php=php php0php.php8php;php php php breakphp;
php php php php php php php php php php php php casephp php'mediumvioletredphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php8php0php;php php$gphp php=php php0php.php0php8php2php;php php$bphp php=php php0php.php5php2php2php;php breakphp;
php php php php php php php php php php php php casephp php'midnightbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php9php8php;php php$gphp php=php php0php.php0php9php8php;php php$bphp php=php php0php.php4php3php9php;php breakphp;
php php php php php php php php php php php php casephp php'mintcreamphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php6php1php;php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php9php8php0php;php breakphp;
php php php php php php php php php php php php casephp php'mistyrosephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php8php9php4php;php php$bphp php=php php0php.php8php8php2php;php breakphp;
php php php php php php php php php php php php casephp php'moccasinphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php8php9php4php;php php$bphp php=php php0php.php7php1php0php;php breakphp;
php php php php php php php php php php php php casephp php'navajowhitephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php8php7php1php;php php$bphp php=php php0php.php6php7php8php;php breakphp;
php php php php php php php php php php php php casephp php'oldlacephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php9php2php;php php$gphp php=php php0php.php9php6php1php;php php$bphp php=php php0php.php9php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'olivedrabphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php2php0php;php php$gphp php=php php0php.php5php5php7php;php php$bphp php=php php0php.php1php3php7php;php breakphp;
php php php php php php php php php php php php casephp php'orangephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php6php4php7php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'orangeredphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php2php7php1php;php php$bphp php=php php0php.php0php;php php php breakphp;
php php php php php php php php php php php php casephp php'orchidphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php5php5php;php php$gphp php=php php0php.php4php3php9php;php php$bphp php=php php0php.php8php3php9php;php breakphp;
php php php php php php php php php php php php casephp php'palegoldenrodphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php3php3php;php php$gphp php=php php0php.php9php1php0php;php php$bphp php=php php0php.php6php6php7php;php breakphp;
php php php php php php php php php php php php casephp php'palegreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php9php6php;php php$gphp php=php php0php.php9php8php4php;php php$bphp php=php php0php.php5php9php6php;php breakphp;
php php php php php php php php php php php php casephp php'paleturquoisephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php8php6php;php php$gphp php=php php0php.php9php3php3php;php php$bphp php=php php0php.php9php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'palevioletredphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php5php9php;php php$gphp php=php php0php.php4php3php9php;php php$bphp php=php php0php.php5php7php6php;php breakphp;
php php php php php php php php php php php php casephp php'papayawhipphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php3php7php;php php$bphp php=php php0php.php8php3php5php;php breakphp;
php php php php php php php php php php php php casephp php'peachpuffphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php3php7php;php php$bphp php=php php0php.php8php3php5php;php breakphp;
php php php php php php php php php php php php casephp php'peruphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php0php4php;php php$gphp php=php php0php.php5php2php2php;php php$bphp php=php php0php.php2php4php7php;php breakphp;
php php php php php php php php php php php php casephp php'pinkphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php7php5php3php;php php$bphp php=php php0php.php7php9php6php;php breakphp;
php php php php php php php php php php php php casephp php'plumphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php6php7php;php php$gphp php=php php0php.php6php2php7php;php php$bphp php=php php0php.php8php6php7php;php breakphp;
php php php php php php php php php php php php casephp php'powderbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php9php0php;php php$gphp php=php php0php.php8php7php8php;php php$bphp php=php php0php.php9php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'rosybrownphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php7php3php7php;php php$gphp php=php php0php.php5php6php1php;php php$bphp php=php php0php.php5php6php1php;php breakphp;
php php php php php php php php php php php php casephp php'royalbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php5php5php;php php$gphp php=php php0php.php4php1php2php;php php$bphp php=php php0php.php8php8php2php;php breakphp;
php php php php php php php php php php php php casephp php'saddlebrownphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php4php5php;php php$gphp php=php php0php.php2php7php1php;php php$bphp php=php php0php.php0php7php5php;php breakphp;
php php php php php php php php php php php php casephp php'salmonphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php8php0php;php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php4php4php7php;php breakphp;
php php php php php php php php php php php php casephp php'sandybrownphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php5php7php;php php$gphp php=php php0php.php6php4php3php;php php$bphp php=php php0php.php3php7php6php;php breakphp;
php php php php php php php php php php php php casephp php'seagreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php1php8php0php;php php$gphp php=php php0php.php5php4php5php;php php$bphp php=php php0php.php3php4php1php;php breakphp;
php php php php php php php php php php php php casephp php'seashellphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php6php1php;php php$bphp php=php php0php.php9php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'siennaphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php2php7php;php php$gphp php=php php0php.php3php2php2php;php php$bphp php=php php0php.php1php7php6php;php breakphp;
php php php php php php php php php php php php casephp php'skybluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php5php2php9php;php php$gphp php=php php0php.php8php0php8php;php php$bphp php=php php0php.php9php2php2php;php breakphp;
php php php php php php php php php php php php casephp php'slatebluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php1php6php;php php$gphp php=php php0php.php3php5php3php;php php$bphp php=php php0php.php8php0php4php;php breakphp;
php php php php php php php php php php php php casephp php'slategrayphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php4php3php9php;php php$gphp php=php php0php.php5php0php2php;php php$bphp php=php php0php.php5php6php5php;php breakphp;
php php php php php php php php php php php php casephp php'snowphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php1php.php0php;php php php php$gphp php=php php0php.php9php8php0php;php php$bphp php=php php0php.php9php8php0php;php breakphp;
php php php php php php php php php php php php casephp php'springgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php0php;php php php php$gphp php=php php1php.php0php;php php php php$bphp php=php php0php.php4php9php8php;php breakphp;
php php php php php php php php php php php php casephp php'steelbluephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php7php5php;php php$gphp php=php php0php.php5php1php0php;php php$bphp php=php php0php.php7php0php6php;php breakphp;
php php php php php php php php php php php php casephp php'tanphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php2php4php;php php$gphp php=php php0php.php7php0php6php;php php$bphp php=php php0php.php5php4php9php;php breakphp;
php php php php php php php php php php php php casephp php'thistlephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php8php4php7php;php php$gphp php=php php0php.php7php4php9php;php php$bphp php=php php0php.php8php4php7php;php breakphp;
php php php php php php php php php php php php casephp php'tomatophp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php9php2php;php php$gphp php=php php0php.php3php8php8php;php php$bphp php=php php0php.php2php7php8php;php breakphp;
php php php php php php php php php php php php casephp php'turquoisephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php2php5php1php;php php$gphp php=php php0php.php8php7php8php;php php$bphp php=php php0php.php8php1php6php;php breakphp;
php php php php php php php php php php php php casephp php'violetphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php3php3php;php php$gphp php=php php0php.php5php1php0php;php php$bphp php=php php0php.php9php3php3php;php breakphp;
php php php php php php php php php php php php casephp php'wheatphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php6php1php;php php$gphp php=php php0php.php8php7php1php;php php$bphp php=php php0php.php7php0php2php;php breakphp;
php php php php php php php php php php php php casephp php'whitesmokephp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php9php6php1php;php php$gphp php=php php0php.php9php6php1php;php php$bphp php=php php0php.php9php6php1php;php breakphp;
php php php php php php php php php php php php casephp php'yellowgreenphp'php:
php php php php php php php php php php php php php php php php php$rphp php=php php0php.php6php0php4php;php php$gphp php=php php0php.php8php0php4php;php php$bphp php=php php0php.php1php9php6php;php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp colorphp namephp:php php'php php.php php$colorphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$rphp php=php=php php$gphp)php php&php&php php(php$gphp php=php=php php$bphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/GrayScalephp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Colorphp_GrayScalephp(php$rphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Colorphp/Rgbphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Colorphp_Rgbphp(php$rphp,php php$gphp,php php$bphp)php;
php php php php php php php php php}
php php php php php}
php}
