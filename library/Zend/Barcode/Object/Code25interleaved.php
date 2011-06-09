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
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@subpackagephp Object
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Codephp2php5interleavedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Barcodephp_Objectphp_Codephp2php5php php*php/
requirephp_oncephp php'Zendphp/Barcodephp/Objectphp/Codephp2php5php.phpphp'php;

php/php*php*php php@seephp Zendphp_Validatephp_Barcodephp php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp.phpphp'php;

php/php*php*
php php*php Classphp forphp generatephp Interleavedphp php2php ofphp php5php barcode
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Objectphp_Codephp2php5interleavedphp extendsphp Zendphp_Barcodephp_Objectphp_Codephp2php5
php{
php php php php php/php*php*
php php php php php php*php Drawingphp ofphp bearerphp bars
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_withBearerBarsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Defaultphp optionsphp forphp Codephp2php5interleavedphp barcode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_barcodeLengthphp php=php php'evenphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Activatephp/deactivatephp drawingphp ofphp bearerphp bars
php php php php php php*php php@paramphp booleanphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Objectphp_Intphp2php5
php php php php php php*php/
php php php php publicphp functionphp setWithBearerBarsphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_withBearerBarsphp php=php php(boolphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp ifphp bearerphp barsphp arephp enabled
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getWithBearerBarsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_withBearerBarsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp barcodephp php(inphp pixelsphp)
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_calculateBarcodeWidthphp(php)
php php php php php{
php php php php php php php php php$quietZonephp php php php php php php php=php php$thisphp-php>getQuietZonephp(php)php;
php php php php php php php php php$startCharacterphp php php=php php(php4php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$characterLengthphp php=php php(php3php php*php php$thisphp-php>php_barThinWidthphp php+php php2php php*php php$thisphp-php>php_barThickWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$encodedDataphp php php php php php=php strlenphp(php$thisphp-php>getTextphp(php)php)php php*php php$characterLengthphp;
php php php php php php php php php$stopCharacterphp php php php=php php(php$thisphp-php>php_barThickWidthphp php+php php2php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php returnphp php$quietZonephp php+php php$startCharacterphp php+php php$encodedDataphp php+php php$stopCharacterphp php+php php$quietZonephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp arrayphp tophp drawphp barcode
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareBarcodephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_withBearerBarsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_withBorderphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Startphp characterphp php(php0php0php0php0php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php,php php$thisphp-php>php_barThinWidthphp,php php0php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php,php php$thisphp-php>php_barThinWidthphp,php php0php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php,php php$thisphp-php>php_barThinWidthphp,php php0php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php,php php$thisphp-php>php_barThinWidthphp,php php0php,php php1php)php;

php php php php php php php php php/php/php Encodedphp php$text
php php php php php php php php php$textphp php=php php$thisphp-php>getTextphp(php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$textphp)php;php php$iphp php+php=php php2php)php php{php php/php/php Drawphp php2php charsphp atphp aphp time
php php php php php php php php php php php php php$charphp1php php=php substrphp(php$textphp,php php$iphp,php php1php)php;
php php php php php php php php php php php php php$charphp2php php=php substrphp(php$textphp,php php$iphp php+php php1php,php php1php)php;

php php php php php php php php php php php php php/php/php Interleave
php php php php php php php php php php php php forphp php(php$ibarphp php=php php0php;php php$ibarphp <php php5php;php php$ibarphp php+php+php)php php{
php php php php php php php php php php php php php php php php php/php/php Drawsphp charphp1php barphp php(forephp colorphp)
php php php php php php php php php php php php php php php php php$barWidthphp php=php php(substrphp(php$thisphp-php>php_codingMapphp[php$charphp1php]php,php php$ibarphp,php php1php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$thisphp-php>php_barThickWidth
php php php php php php php php php php php php php php php php php php php php php php php php php php php:php php$thisphp-php>php_barThinWidthphp;

php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php,php php$barWidthphp,php php0php,php php1php)php;

php php php php php php php php php php php php php php php php php/php/php Leftphp spacephp correspondingphp tophp charphp2php php(backgroundphp colorphp)
php php php php php php php php php php php php php php php php php$barWidthphp php=php php(substrphp(php$thisphp-php>php_codingMapphp[php$charphp2php]php,php php$ibarphp,php php1php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$thisphp-php>php_barThickWidth
php php php php php php php php php php php php php php php php php php php php php php php php php php php:php php$thisphp-php>php_barThinWidthphp;
php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php,php php$barWidthphp,php php0php php,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Stopphp characterphp php(php1php0php0php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThickWidthphp,php php0php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp,php php php0php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp,php php php0php,php php1php)php;
php php php php php php php php returnphp php$barcodeTablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawingphp ofphp bearerphp barsphp php(ifphp enabledphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_postDrawBarcodephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_withBearerBarsphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$widthphp php php=php php$thisphp-php>php_barThickWidthphp php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$pointphp1php php=php php$thisphp-php>php_rotatephp(php-php1php,php php-php1php)php;
php php php php php php php php php$pointphp2php php=php php$thisphp-php>php_rotatephp(php$thisphp-php>php_calculateWidthphp(php)php php-php php1php,php php-php1php)php;
php php php php php php php php php$pointphp3php php=php php$thisphp-php>php_rotatephp(php$thisphp-php>php_calculateWidthphp(php)php php-php php1php,php php$widthphp php-php php1php)php;
php php php php php php php php php$pointphp4php php=php php$thisphp-php>php_rotatephp(php-php1php,php php$widthphp php-php php1php)php;
php php php php php php php php php$thisphp-php>php_addPolygonphp(arrayphp(
php php php php php php php php php php php php php$pointphp1php,
php php php php php php php php php php php php php$pointphp2php,
php php php php php php php php php php php php php$pointphp3php,
php php php php php php php php php php php php php$pointphp4php,
php php php php php php php php php)php)php;
php php php php php php php php php$pointphp1php php=php php$thisphp-php>php_rotatephp(
php php php php php php php php php php php php php0php,
php php php php php php php php php php php php php0php php+php php$thisphp-php>php_barHeightphp php*php php$thisphp-php>php_factorphp php-php php1
php php php php php php php php php)php;
php php php php php php php php php$pointphp2php php=php php$thisphp-php>php_rotatephp(
php php php php php php php php php php php php php$thisphp-php>php_calculateWidthphp(php)php php-php php1php,
php php php php php php php php php php php php php0php php+php php$thisphp-php>php_barHeightphp php*php php$thisphp-php>php_factorphp php-php php1
php php php php php php php php php)php;
php php php php php php php php php$pointphp3php php=php php$thisphp-php>php_rotatephp(
php php php php php php php php php php php php php$thisphp-php>php_calculateWidthphp(php)php php-php php1php,
php php php php php php php php php php php php php0php php+php php$thisphp-php>php_barHeightphp php*php php$thisphp-php>php_factorphp php-php php$width
php php php php php php php php php)php;
php php php php php php php php php$pointphp4php php=php php$thisphp-php>php_rotatephp(
php php php php php php php php php php php php php0php,
php php php php php php php php php php php php php0php php+php php$thisphp-php>php_barHeightphp php*php php$thisphp-php>php_factorphp php-php php$width
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>php_addPolygonphp(arrayphp(
php php php php php php php php php php php php php$pointphp1php,
php php php php php php php php php php php php php$pointphp2php,
php php php php php php php php php php php php php$pointphp3php,
php php php php php php php php php php php php php$pointphp4php,
php php php php php php php php php)php)php;
php php php php php}
php}
