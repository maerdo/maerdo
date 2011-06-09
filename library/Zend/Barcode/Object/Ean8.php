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
php php*php php@versionphp php php php php$Idphp:php Eanphp8php.phpphp php2php1php6php6php7php php2php0php1php0php-php0php3php-php2php8php php1php7php:php4php5php:php1php4Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Barcodephp_Objectphp_Eanphp1php3
php php*php/
requirephp_oncephp php'Zendphp/Barcodephp/Objectphp/Eanphp1php3php.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Barcode
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp.phpphp'php;

php/php*php*
php php*php Classphp forphp generatephp Eanphp8php barcode
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Objectphp_Eanphp8php extendsphp Zendphp_Barcodephp_Objectphp_Eanphp1php3
php{

php php php php php/php*php*
php php php php php php*php Defaultphp optionsphp forphp Postnetphp barcode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_barcodeLengthphp php=php php8php;
php php php php php php php php php$thisphp-php>php_mandatoryChecksumphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp barcodephp php(inphp pixelsphp)
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_calculateBarcodeWidthphp(php)
php php php php php{
php php php php php php php php php$quietZonephp php php php php php php php=php php$thisphp-php>getQuietZonephp(php)php;
php php php php php php php php php$startCharacterphp php php=php php(php3php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$middleCharacterphp php=php php(php5php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$stopCharacterphp php php php=php php(php3php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$encodedDataphp php php php php php=php php(php7php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp php*php php8php;
php php php php php php php php returnphp php$quietZonephp php+php php$startCharacterphp php+php php$middleCharacterphp php+php php$encodedDataphp php+php php$stopCharacterphp php+php php$quietZonephp;
php php php php php}

php php php php php php php php php/php*php*
php php php php php php*php Preparephp arrayphp tophp drawphp barcode
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareBarcodephp(php)
php php php php php{
php php php php php php php php php$barcodeTablephp php=php arrayphp(php)php;
php php php php php php php php php$heightphp php=php php(php$thisphp-php>php_drawTextphp)php php?php php1php.php1php php:php php1php;

php php php php php php php php php/php/php Startphp characterphp php(php1php0php1php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;

php php php php php php php php php$textTablephp php=php strphp_splitphp(php$thisphp-php>getTextphp(php)php)php;

php php php php php php php php php/php/php Firstphp part
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php4php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$barsphp php=php strphp_splitphp(php$thisphp-php>php_codingMapphp[php'Aphp'php]php[php$textTablephp[php$iphp]php]php)php;
php php php php php php php php php php php php foreachphp php(php$barsphp asphp php$bphp)php php{
php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php$bphp php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Middlephp characterphp php(php0php1php0php1php0php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;

php php php php php php php php php/php/php Secondphp part
php php php php php php php php forphp php(php$iphp php=php php4php;php php$iphp <php php8php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$barsphp php=php strphp_splitphp(php$thisphp-php>php_codingMapphp[php'Cphp'php]php[php$textTablephp[php$iphp]php]php)php;
php php php php php php php php php php php php foreachphp php(php$barsphp asphp php$bphp)php php{
php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php$bphp php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Stopphp characterphp php(php1php0php1php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php$heightphp)php;
php php php php php php php php returnphp php$barcodeTablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Partialphp functionphp tophp drawphp text
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_drawTextphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_drawTextphp)php php{
php php php php php php php php php php php php php$textphp php=php php$thisphp-php>getTextToDisplayphp(php)php;
php php php php php php php php php php php php php$characterWidthphp php=php php(php7php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php php php php php$leftPositionphp php=php php$thisphp-php>getQuietZonephp(php)php php+php php(php3php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$thisphp-php>php_barcodeLengthphp;php php$iphp php+php+php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_addTextphp(
php php php php php php php php php php php php php php php php php php php php php$textphp{php$iphp}php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fontSizephp php*php php$thisphp-php>php_factorphp,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_rotatephp(
php php php php php php php php php php php php php php php php php php php php php php php php php$leftPositionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php(intphp)php php$thisphp-php>php_withBorderphp php*php php2
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php+php php$thisphp-php>php_factorphp php*php php(php$thisphp-php>php_barHeightphp php+php php$thisphp-php>php_fontSizephp)php php+php php1
php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fontphp,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_foreColorphp,
php php php php php php php php php php php php php php php php php php php php php'leftphp'php,
php php php php php php php php php php php php php php php php php php php php php-php php$thisphp-php>php_orientation
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php switchphp php(php$iphp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php php php php php php$factorphp php=php php4php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$factorphp php=php php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$leftPositionphp php=php php$leftPositionphp php+php php$characterWidthphp php+php php(php$factorphp php*php php$thisphp-php>php_barThinWidthphp php*php php$thisphp-php>php_factorphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Particularphp validationphp forphp Eanphp8php barcodephp objects
php php php php php php*php php(tophp suppressphp checksumphp characterphp substitutionphp)
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp arrayphp php php$options
php php php php php php*php/
php php php php protectedphp functionphp php_validateTextphp(php$valuephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$validatorphp php=php newphp Zendphp_Validatephp_Barcodephp(arrayphp(
php php php php php php php php php php php php php'adapterphp'php php php=php>php php'eanphp8php'php,
php php php php php php php php php php php php php'checksumphp'php php=php>php falsephp,
php php php php php php php php php)php)php;

php php php php php php php php php$valuephp php=php php$thisphp-php>php_addLeadingZerosphp(php$valuephp,php truephp)php;

php php php php php php php php ifphp php(php!php$validatorphp-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$messagephp php=php implodephp(php"php\nphp"php,php php$validatorphp-php>getMessagesphp(php)php)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Barcodephp_Objectphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Objectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Objectphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php}
php php php php php}
php}
