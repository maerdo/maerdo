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
php php*php php@versionphp php php php php$Idphp:php Postnetphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Barcodephp_Objectphp_ObjectAbstract
php php*php/
requirephp_oncephp php'Zendphp/Barcodephp/Objectphp/ObjectAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Barcode
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp.phpphp'php;

php/php*php*
php php*php Classphp forphp generatephp Postnetphp barcode
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Objectphp_Postnetphp extendsphp Zendphp_Barcodephp_Objectphp_ObjectAbstract
php{

php php php php php/php*php*
php php php php php php*php Codingphp map
php php php php php php*php php-php php0php php=php halfphp bar
php php php php php php*php php-php php1php php=php completephp bar
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_codingMapphp php=php arrayphp(
php php php php php php php php php0php php=php>php php"php1php1php0php0php0php"php,
php php php php php php php php php1php php=php>php php"php0php0php0php1php1php"php,
php php php php php php php php php2php php=php>php php"php0php0php1php0php1php"php,
php php php php php php php php php3php php=php>php php"php0php0php1php1php0php"php,
php php php php php php php php php4php php=php>php php"php0php1php0php0php1php"php,
php php php php php php php php php5php php=php>php php"php0php1php0php1php0php"php,
php php php php php php php php php6php php=php>php php"php0php1php1php0php0php"php,
php php php php php php php php php7php php=php>php php"php1php0php0php0php1php"php,
php php php php php php php php php8php php=php>php php"php1php0php0php1php0php"php,
php php php php php php php php php9php php=php>php php"php1php0php1php0php0php"
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp optionsphp forphp Postnetphp barcode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_barThinWidthphp php=php php2php;
php php php php php php php php php$thisphp-php>php_barHeightphp php=php php2php0php;
php php php php php php php php php$thisphp-php>php_drawTextphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_stretchTextphp php=php truephp;
php php php php php php php php php$thisphp-php>php_mandatoryChecksumphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp barcodephp php(inphp pixelsphp)
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_calculateBarcodeWidthphp(php)
php php php php php{
php php php php php php php php php$quietZonephp php php php php php php php=php php$thisphp-php>getQuietZonephp(php)php;
php php php php php php php php php$startCharacterphp php php=php php(php2php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$stopCharacterphp php php php=php php(php1php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp;
php php php php php php php php php$encodedDataphp php php php php php=php php(php1php0php php*php php$thisphp-php>php_barThinWidthphp)php php*php php$thisphp-php>php_factorphp php*php strlenphp(php$thisphp-php>getTextphp(php)php)php;
php php php php php php php php returnphp php$quietZonephp php+php php$startCharacterphp php+php php$encodedDataphp php+php php$stopCharacterphp php+php php$quietZonephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Partialphp checkphp ofphp interleavedphp Postnetphp barcode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkParamsphp(php)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Preparephp arrayphp tophp drawphp barcode
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareBarcodephp(php)
php php php php php{
php php php php php php php php php$barcodeTablephp php=php arrayphp(php)php;

php php php php php php php php php/php/php Startphp characterphp php(php1php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;

php php php php php php php php php/php/php Textphp tophp encode
php php php php php php php php php$textTablephp php=php strphp_splitphp(php$thisphp-php>getTextphp(php)php)php;
php php php php php php php php foreachphp php(php$textTablephp asphp php$charphp)php php{
php php php php php php php php php php php php php$barsphp php=php strphp_splitphp(php$thisphp-php>php_codingMapphp[php$charphp]php)php;
php php php php php php php php php php php php foreachphp php(php$barsphp asphp php$bphp)php php{
php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php.php5php php-php php$bphp php*php php0php.php5php php,php php1php)php;
php php php php php php php php php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php0php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Stopphp characterphp php(php1php)
php php php php php php php php php$barcodeTablephp[php]php php=php arrayphp(php1php php,php php$thisphp-php>php_barThinWidthphp php,php php0php php,php php1php)php;
php php php php php php php php returnphp php$barcodeTablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp barcodephp checksum
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$text
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getChecksumphp(php$textphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTextphp(php$textphp)php;
php php php php php php php php php$sumphp php=php arrayphp_sumphp(strphp_splitphp(php$textphp)php)php;
php php php php php php php php php$checksumphp php=php php(php1php0php php-php php(php$sumphp php%php php1php0php)php)php php%php php1php0php;
php php php php php php php php returnphp php$checksumphp;
php php php php php}
php}
