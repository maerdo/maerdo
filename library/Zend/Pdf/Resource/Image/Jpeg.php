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
php php*php php@versionphp php php php php$Idphp:php Jpegphp.phpphp php2php3php3php9php5php php2php0php1php0php-php1php1php-php1php9php php1php5php:php3php0php:php4php7Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp_Imagephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Imagephp.phpphp'php;

php/php*php*
php php*php JPEGphp image
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_Imagephp_Jpegphp extendsphp Zendphp_Pdfphp_Resourcephp_Image
php{

php php php php protectedphp php$php_widthphp;
php php php php protectedphp php$php_heightphp;
php php php php protectedphp php$php_imagePropertiesphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageFileName
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$imageFileNamephp)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'gdphp_infophp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Imagephp extensionphp isphp notphp installedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$gdphp_optionsphp php=php gdphp_infophp(php)php;
php php php php php php php php ifphp php(php php(php!issetphp(php$gdphp_optionsphp[php'JPGphp Supportphp'php]php)php php php|php|php php$gdphp_optionsphp[php'JPGphp Supportphp'php]php php php!php=php truephp)php php php&php&
php php php php php php php php php php php php php php(php!issetphp(php$gdphp_optionsphp[php'JPEGphp Supportphp'php]php)php php|php|php php$gdphp_optionsphp[php'JPEGphp Supportphp'php]php php!php=php truephp)php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'JPGphp supportphp isphp notphp configuredphp properlyphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$imageInfophp php=php getimagesizephp(php$imageFileNamephp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Corruptedphp imagephp orphp imagephp doesnphp\php'tphp existphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$imageInfophp[php2php]php php!php=php IMAGETYPEphp_JPEGphp php&php&php php$imageInfophp[php2php]php php!php=php IMAGETYPEphp_JPEGphp2php0php0php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'ImageTypephp isphp notphp JPGphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php)php;

php php php php php php php php switchphp php(php$imageInfophp[php'channelsphp'php]php)php php{
php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php$colorSpacephp php=php php'DeviceRGBphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php4php:
php php php php php php php php php php php php php php php php php$colorSpacephp php=php php'DeviceCMYKphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$colorSpacephp php=php php'DeviceGrayphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$imageDictionaryphp php=php php$thisphp-php>php_resourcephp-php>dictionaryphp;
php php php php php php php php php$imageDictionaryphp-php>Widthphp php php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$imageInfophp[php0php]php)php;
php php php php php php php php php$imageDictionaryphp-php>Heightphp php php php php php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$imageInfophp[php1php]php)php;
php php php php php php php php php$imageDictionaryphp-php>ColorSpacephp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php$colorSpacephp)php;
php php php php php php php php php$imageDictionaryphp-php>BitsPerComponentphp php=php newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$imageInfophp[php'bitsphp'php]php)php;
php php php php php php php php ifphp php(php$imageInfophp[php2php]php php=php=php IMAGETYPEphp_JPEGphp)php php{
php php php php php php php php php php php php php$imageDictionaryphp-php>Filterphp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'DCTDecodephp'php)php;
php php php php php php php php php}php elsephp ifphp php(php$imageInfophp[php2php]php php=php=php IMAGETYPEphp_JPEGphp2php0php0php0php)php{
php php php php php php php php php php php php php$imageDictionaryphp-php>Filterphp php php php php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'JPXDecodephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$imageFilephp php=php php@fopenphp(php$imageFileNamephp,php php'rbphp'php)php)php php=php=php=php falsephp php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Canphp notphp openphp php'php$imageFileNamephp'php filephp forphp readingphp.php"php php)php;
php php php php php php php php php}
php php php php php php php php php$byteCountphp php=php filesizephp(php$imageFileNamephp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>valuephp php=php php'php'php;

php php php php php php php php whilephp php(php$byteCountphp php>php php0php php&php&php php!feofphp(php$imageFilephp)php)php php{
php php php php php php php php php php php php php$nextBlockphp php=php freadphp(php$imageFilephp,php php$byteCountphp)php;
php php php php php php php php php php php php ifphp php(php$nextBlockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Errorphp occuredphp whilephp php'php$imageFileNamephp'php filephp readingphp.php"php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_resourcephp-php>valuephp php.php=php php$nextBlockphp;
php php php php php php php php php php php php php$byteCountphp php-php=php strlenphp(php$nextBlockphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$byteCountphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php php"Errorphp occuredphp whilephp php'php$imageFileNamephp'php filephp readingphp.php"php php)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$imageFilephp)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>skipFiltersphp(php)php;

php php php php php php php php php$thisphp-php>php_widthphp php php=php php$imageInfophp[php0php]php;
php php php php php php php php php$thisphp-php>php_heightphp php=php php$imageInfophp[php1php]php;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'bitDepthphp'php]php php=php php$imageInfophp[php'bitsphp'php]php;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'jpegImageTypephp'php]php php=php php$imageInfophp[php2php]php;
php php php php php php php php php$thisphp-php>php_imagePropertiesphp[php'jpegColorTypephp'php]php php=php php$imageInfophp[php'channelsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp width
php php php php php php*php/
php php php php publicphp functionphp getPixelWidthphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_widthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp height
php php php php php php*php/
php php php php publicphp functionphp getPixelHeightphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_heightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Imagephp properties
php php php php php php*php/
php php php php publicphp functionphp getPropertiesphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_imagePropertiesphp;
php php php php php}
php}

