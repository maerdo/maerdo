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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php IsImagephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_MimeType
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/MimeTypephp.phpphp'php;

php/php*php*
php php*php Validatorphp whichphp checksphp ifphp thephp filephp alreadyphp existsphp inphp thephp directory
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_IsImagephp extendsphp Zendphp_Validatephp_Filephp_MimeType
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp FALSEphp_TYPEphp php php php=php php'fileIsImageFalseTypephp'php;
php php php php constphp NOTphp_DETECTEDphp php=php php'fileIsImageNotDetectedphp'php;
php php php php constphp NOTphp_READABLEphp php=php php'fileIsImageNotReadablephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:FALSEphp_TYPEphp php php php=php>php php"Filephp php'php%valuephp%php'php isphp nophp imagephp,php php'php%typephp%php'php detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_DETECTEDphp php=php>php php"Thephp mimetypephp ofphp filephp php'php%valuephp%php'php couldphp notphp bephp detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_READABLEphp php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$mimetype
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$mimetypephp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$mimetypephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$mimetypephp php=php php$mimetypephp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;
php php php php php php php php php/php/php httpphp:php/php/dephp.wikipediaphp.orgphp/wikiphp/Listephp_vonphp_Dateiendungen
php php php php php php php php php/php/php httpphp:php/php/wwwphp.ianaphp.orgphp/assignmentsphp/mediaphp-typesphp/imagephp/
php php php php php php php php php$defaultphp php=php arrayphp(
php php php php php php php php php php php php php'applicationphp/cdfphp'php,
php php php php php php php php php php php php php'applicationphp/dicomphp'php,
php php php php php php php php php php php php php'applicationphp/fractalsphp'php,
php php php php php php php php php php php php php'applicationphp/postscriptphp'php,
php php php php php php php php php php php php php'applicationphp/vndphp.hpphp-hpglphp'php,
php php php php php php php php php php php php php'applicationphp/vndphp.oasisphp.opendocumentphp.graphicsphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-cdfphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-cmuphp-rasterphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-imaphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-inventorphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-koanphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-portablephp-anymapphp'php,
php php php php php php php php php php php php php'applicationphp/xphp-worldphp-xphp-php3dmfphp'php,
php php php php php php php php php php php php php'imagephp/bmpphp'php,
php php php php php php php php php php php php php'imagephp/cphp'php,
php php php php php php php php php php php php php'imagephp/cgmphp'php,
php php php php php php php php php php php php php'imagephp/fifphp'php,
php php php php php php php php php php php php php'imagephp/gifphp'php,
php php php php php php php php php php php php php'imagephp/jpegphp'php,
php php php php php php php php php php php php php'imagephp/jpmphp'php,
php php php php php php php php php php php php php'imagephp/jpxphp'php,
php php php php php php php php php php php php php'imagephp/jpphp2php'php,
php php php php php php php php php php php php php'imagephp/naplpsphp'php,
php php php php php php php php php php php php php'imagephp/pjpegphp'php,
php php php php php php php php php php php php php'imagephp/pngphp'php,
php php php php php php php php php php php php php'imagephp/svgphp'php,
php php php php php php php php php php php php php'imagephp/svgphp+xmlphp'php,
php php php php php php php php php php php php php'imagephp/tiffphp'php,
php php php php php php php php php php php php php'imagephp/vndphp.adobephp.photoshopphp'php,
php php php php php php php php php php php php php'imagephp/vndphp.djvuphp'php,
php php php php php php php php php php php php php'imagephp/vndphp.fpxphp'php,
php php php php php php php php php php php php php'imagephp/vndphp.netphp-fpxphp'php,
php php php php php php php php php php php php php'imagephp/xphp-cmuphp-rasterphp'php,
php php php php php php php php php php php php php'imagephp/xphp-cmxphp'php,
php php php php php php php php php php php php php'imagephp/xphp-coreldrawphp'php,
php php php php php php php php php php php php php'imagephp/xphp-cpiphp'php,
php php php php php php php php php php php php php'imagephp/xphp-emfphp'php,
php php php php php php php php php php php php php'imagephp/xphp-icophp'php,
php php php php php php php php php php php php php'imagephp/xphp-iconphp'php,
php php php php php php php php php php php php php'imagephp/xphp-jgphp'php,
php php php php php php php php php php php php php'imagephp/xphp-msphp-bmpphp'php,
php php php php php php php php php php php php php'imagephp/xphp-niffphp'php,
php php php php php php php php php php php php php'imagephp/xphp-pictphp'php,
php php php php php php php php php php php php php'imagephp/xphp-pcxphp'php,
php php php php php php php php php php php php php'imagephp/xphp-portablephp-anymapphp'php,
php php php php php php php php php php php php php'imagephp/xphp-portablephp-bitmapphp'php,
php php php php php php php php php php php php php'imagephp/xphp-portablephp-greymapphp'php,
php php php php php php php php php php php php php'imagephp/xphp-portablephp-pixmapphp'php,
php php php php php php php php php php php php php'imagephp/xphp-quicktimephp'php,
php php php php php php php php php php php php php'imagephp/xphp-rgbphp'php,
php php php php php php php php php php php php php'imagephp/xphp-tiffphp'php,
php php php php php php php php php php php php php'imagephp/xphp-unknownphp'php,
php php php php php php php php php php php php php'imagephp/xphp-windowsphp-bmpphp'php,
php php php php php php php php php php php php php'imagephp/xphp-xpmiphp'php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php php$tempphp php=php php$mimetypephp;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'magicfilephp'php,php php$tempphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php'magicfilephp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'headerCheckphp'php,php php$tempphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php'headerCheckphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$tempphp)php)php php{
php php php php php php php php php php php php php php php php php$mimetypephp php+php=php php$defaultphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php php$mimetypephp php=php php$defaultphp;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$mimetypephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp errorphp ofphp thephp givenphp type
php php php php php php*php Duplicatesphp parentphp methodphp duephp tophp OOPphp Problemphp withphp latephp staticphp bindingphp inphp PHPphp php5php.php2
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@paramphp php stringphp php$errorType
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php protectedphp functionphp php_throwphp(php$filephp,php php$errorTypephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php switchphp(php$errorTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Validatephp_Filephp_MimeTypephp:php:FALSEphp_TYPEphp php:
php php php php php php php php php php php php php php php php php$errorTypephp php=php selfphp:php:FALSEphp_TYPEphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Validatephp_Filephp_MimeTypephp:php:NOTphp_DETECTEDphp php:
php php php php php php php php php php php php php php php php php$errorTypephp php=php selfphp:php:NOTphp_DETECTEDphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Validatephp_Filephp_MimeTypephp:php:NOTphp_READABLEphp php:
php php php php php php php php php php php php php php php php php$errorTypephp php=php selfphp:php:NOTphp_READABLEphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
