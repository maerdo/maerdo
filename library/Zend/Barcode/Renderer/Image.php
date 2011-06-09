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
php php*php php@subpackagephp Renderer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php2php9php9php9php php2php0php1php0php-php0php9php-php2php3php php1php9php:php4php3php:php1php4Zphp mikaelkaelphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Barcodephp_Rendererphp_RendererAbstractphp*php/
requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php Classphp forphp renderingphp thephp barcodephp asphp image
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Rendererphp_Imagephp extendsphp Zendphp_Barcodephp_Rendererphp_RendererAbstract
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp authorizedphp outputphp format
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedImageTypephp php=php arrayphp(
php php php php php php php php php'pngphp'php,
php php php php php php php php php'jpegphp'php,
php php php php php php php php php'gifphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Imagephp format
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_imageTypephp php=php php'pngphp'php;

php php php php php/php*php*
php php php php php php*php Resourcephp forphp thephp image
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_resourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Resourcephp forphp thephp fontphp andphp barsphp colorphp ofphp thephp image
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_imageForeColorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Resourcephp forphp thephp backgroundphp colorphp ofphp thephp image
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_imageBackgroundColorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Heightphp ofphp thephp renderedphp imagephp wantedphp byphp user
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_userHeightphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp renderedphp imagephp wantedphp byphp user
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_userWidthphp php=php php0php;

php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'gdphp_infophp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(php'Zendphp_Barcodephp_Rendererphp_Imagephp requiresphp thephp GDphp extensionphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp heightphp ofphp thephp resultphp image
php php php php php php*php php@paramphp nullphp|integerphp php$value
php php php php php php*php php@returnphp Zendphp_Imagephp_Barcodephp_Abstract
php php php php php php*php php@throwphp Zendphp_Imagephp_Barcodephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeightphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php php|php|php intvalphp(php$valuephp)php <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Imagephp heightphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_userHeightphp php=php intvalphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp barcodephp height
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getHeightphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_userHeightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp barcodephp width
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setWidthphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php php|php|php intvalphp(php$valuephp)php <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Imagephp widthphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_userWidthphp php=php intvalphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp barcodephp width
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getWidthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_userWidthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp imagephp resourcephp tophp drawphp thephp barcodephp inside
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setResourcephp(php$imagephp)
php php php php php{
php php php php php php php php ifphp php(gettypephp(php$imagephp)php php!php=php php'resourcephp'php php|php|php getphp_resourcephp_typephp(php$imagephp)php php!php=php php'gdphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp imagephp resourcephp providedphp tophp setResourcephp(php)php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_resourcephp php=php php$imagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp imagephp typephp tophp producephp php(pngphp,php jpegphp,php gifphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_RendererAbstract
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setImageTypephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php=php=php php'jpgphp'php)php php{
php php php php php php php php php php php php php$valuephp php=php php'jpegphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php php$thisphp-php>php_allowedImageTypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Invalidphp typephp php"php%sphp"php providedphp tophp setImageTypephp(php)php'php,
php php php php php php php php php php php php php php php php php$value
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_imageTypephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp imagephp typephp tophp produce
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getImageTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_imageTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp imagephp resource
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initRendererphp(php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'gdphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Barcodephp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Gdphp extensionphp mustphp bephp loadedphp tophp renderphp barcodephp asphp imagephp'
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$ephp-php>setIsRenderablephp(falsephp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$barcodeWidthphp php php=php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php;
php php php php php php php php php$barcodeHeightphp php=php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$foreColorphp php php php php php php php=php php$thisphp-php>php_barcodephp-php>getForeColorphp(php)php;
php php php php php php php php php php php php php$backgroundColorphp php=php php$thisphp-php>php_barcodephp-php>getBackgroundColorphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_imageBackgroundColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php$backgroundColorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_imageForeColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php php php php php(php$foreColorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php(php$foreColorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php$foreColorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$widthphp php=php php$barcodeWidthphp;
php php php php php php php php php php php php php$heightphp php=php php$barcodeHeightphp;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userWidthphp php&php&php php$thisphp-php>php_barcodephp-php>getTypephp(php)php php!php=php php'errorphp'php)php php{
php php php php php php php php php php php php php php php php php$widthphp php=php php$thisphp-php>php_userWidthphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userHeightphp php&php&php php$thisphp-php>php_barcodephp-php>getTypephp(php)php php!php=php php'errorphp'php)php php{
php php php php php php php php php php php php php php php php php$heightphp php=php php$thisphp-php>php_userHeightphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$foreColorphp php php php php php php php=php php$thisphp-php>php_barcodephp-php>getForeColorphp(php)php;
php php php php php php php php php php php php php$backgroundColorphp php=php php$thisphp-php>php_barcodephp-php>getBackgroundColorphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php=php imagecreatetruecolorphp(php$widthphp,php php$heightphp)php;

php php php php php php php php php php php php php$thisphp-php>php_imageBackgroundColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php$backgroundColorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_imageForeColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php php php php php(php$foreColorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php(php$foreColorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php$foreColorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$whitephp php=php imagecolorallocatephp(php$thisphp-php>php_resourcephp,php php2php5php5php,php php2php5php5php,php php2php5php5php)php;
php php php php php php php php php php php php imagefilledrectanglephp(php$thisphp-php>php_resourcephp,php php0php,php php0php,php php$widthphp php-php php1php,php php$heightphp php-php php1php,php php$whitephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_adjustPositionphp(imagesyphp(php$thisphp-php>php_resourcephp)php,php imagesxphp(php$thisphp-php>php_resourcephp)php)php;
php php php php php php php php imagefilledrectanglephp(
php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$thisphp-php>php_leftOffsetphp php+php php$barcodeWidthphp php-php php1php,
php php php php php php php php php php php php php$thisphp-php>php_topOffsetphp php+php php$barcodeHeightphp php-php php1php,
php php php php php php php php php php php php php$thisphp-php>php_imageBackgroundColor
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp barcodephp parameters
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkParamsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkDimensionsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp barcodephp dimensions
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkDimensionsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(imagesyphp(php$thisphp-php>php_resourcephp)php <php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Barcodephp isphp definephp outsidephp thephp imagephp php(heightphp)php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userHeightphp)php php{
php php php php php php php php php php php php php php php php php$heightphp php=php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userHeightphp <php php$heightphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php php php php php"Barcodephp isphp definephp outsidephp thephp imagephp php(calculatedphp:php php'php%dphp'php,php providedphp:php php'php%dphp'php)php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php$heightphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_userHeight
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(imagesxphp(php$thisphp-php>php_resourcephp)php <php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Barcodephp isphp definephp outsidephp thephp imagephp php(widthphp)php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userWidthphp)php php{
php php php php php php php php php php php php php php php php php$widthphp php=php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userWidthphp <php php$widthphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php php php php php"Barcodephp isphp definephp outsidephp thephp imagephp php(calculatedphp:php php'php%dphp'php,php providedphp:php php'php%dphp'php)php"php,
php php php php php php php php php php php php php php php php php php php php php php php php php$widthphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_userWidth
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp andphp renderphp thephp barcodephp withphp correctphp headers
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>drawphp(php)php;
php php php php php php php php headerphp(php"Contentphp-Typephp:php imagephp/php"php php.php php$thisphp-php>php_imageTypephp)php;
php php php php php php php php php$functionNamephp php=php php'imagephp'php php.php php$thisphp-php>php_imageTypephp;
php php php php php php php php callphp_userphp_funcphp(php$functionNamephp,php php$thisphp-php>php_resourcephp)php;
php php php php php php php php php@imagedestroyphp(php$thisphp-php>php_resourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp imagephp resource
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$points
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp booleanphp php$filled
php php php php php php*php/
php php php php protectedphp functionphp php_drawPolygonphp(php$pointsphp,php php$colorphp,php php$filledphp php=php truephp)
php php php php php{
php php php php php php php php php$newPointsphp php=php arrayphp(
php php php php php php php php php php php php php$pointsphp[php0php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php0php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$pointsphp[php1php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php1php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$pointsphp[php2php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php2php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$pointsphp[php3php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php3php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php)php;

php php php php php php php php php$allocatedColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php$colorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$filledphp)php php{
php php php php php php php php php php php php imagefilledpolygonphp(php$thisphp-php>php_resourcephp,php php$newPointsphp,php php4php,php php$allocatedColorphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php imagepolygonphp(php$thisphp-php>php_resourcephp,php php$newPointsphp,php php4php,php php$allocatedColorphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp imagephp resource
php php php php php php*
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp floatphp php$size
php php php php php php*php php@paramphp arrayphp php$position
php php php php php php*php php@paramphp stringphp php$font
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp stringphp php$alignment
php php php php php php*php php@paramphp floatphp php$orientation
php php php php php php*php/
php php php php protectedphp functionphp php_drawTextphp(php$textphp,php php$sizephp,php php$positionphp,php php$fontphp,php php$colorphp,php php$alignmentphp php=php php'centerphp'php,php php$orientationphp php=php php0php)
php php php php php{
php php php php php php php php php$allocatedColorphp php=php imagecolorallocatephp(
php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php$colorphp php&php php0xphp0php0php0php0FF
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$fontphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$fontphp php=php php3php;
php php php php php php php php php}
php php php php php php php php php$positionphp[php0php]php php+php=php php$thisphp-php>php_leftOffsetphp;
php php php php php php php php php$positionphp[php1php]php php+php=php php$thisphp-php>php_topOffsetphp;

php php php php php php php php ifphp php(isphp_numericphp(php$fontphp)php)php php{
php php php php php php php php php php php php ifphp php(php$orientationphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php imagestringphp(php)php doesnphp'tphp allowphp orientationphp,php ifphp orientation
php php php php php php php php php php php php php php php php php php*php neededphp:php aphp TTFphp fontphp isphp requiredphp.
php php php php php php php php php php php php php php php php php php*php Throwingphp anphp exceptionphp herephp,php allowphp tophp usephp automaticRenderError
php php php php php php php php php php php php php php php php php php*php tophp informephp userphp ofphp thephp problemphp insteadphp ofphp simplyphp notphp drawing
php php php php php php php php php php php php php php php php php php*php thephp text
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Nophp orientationphp possiblephp withphp GDphp internalphp fontphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$fontWidthphp php=php imagefontwidthphp(php$fontphp)php;
php php php php php php php php php php php php php$positionYphp php=php php$positionphp[php1php]php php-php imagefontheightphp(php$fontphp)php php+php php1php;
php php php php php php php php php php php php switchphp php(php$alignmentphp)php php{
php php php php php php php php php php php php php php php php casephp php'leftphp'php:
php php php php php php php php php php php php php php php php php php php php php$positionXphp php=php php$positionphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'centerphp'php:
php php php php php php php php php php php php php php php php php php php php php$positionXphp php=php php$positionphp[php0php]php php-php ceilphp(php(php$fontWidthphp php*php strlenphp(php$textphp)php)php php/php php2php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rightphp'php:
php php php php php php php php php php php php php php php php php php php php php$positionXphp php=php php$positionphp[php0php]php php-php php(php$fontWidthphp php*php strlenphp(php$textphp)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php imagestringphp(php$thisphp-php>php_resourcephp,php php$fontphp,php php$positionXphp,php php$positionYphp,php php$textphp,php php$colorphp)php;
php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php ifphp php(php!functionphp_existsphp(php'imagettfbboxphp'php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Aphp fontphp wasphp providedphp,php butphp thisphp instancephp ofphp PHPphp doesphp notphp havephp TTFphp php(FreeTypephp)php supportphp'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$boxphp php=php imagettfbboxphp(php$sizephp,php php0php,php php$fontphp,php php$textphp)php;
php php php php php php php php php php php php switchphp php(php$alignmentphp)php php{
php php php php php php php php php php php php php php php php casephp php'leftphp'php:
php php php php php php php php php php php php php php php php php php php php php$widthphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'centerphp'php:
php php php php php php php php php php php php php php php php php php php php php$widthphp php=php php(php$boxphp[php2php]php php-php php$boxphp[php0php]php)php php/php php2php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rightphp'php:
php php php php php php php php php php php php php php php php php php php php php$widthphp php=php php(php$boxphp[php2php]php php-php php$boxphp[php0php]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php imagettftextphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp,
php php php php php php php php php php php php php php php php php$sizephp,
php php php php php php php php php php php php php php php php php$orientationphp,
php php php php php php php php php php php php php php php php php$positionphp[php0php]php php-php php(php$widthphp php*php cosphp(piphp(php)php php*php php$orientationphp php/php php1php8php0php)php)php,
php php php php php php php php php php php php php php php php php$positionphp[php1php]php php+php php(php$widthphp php*php sinphp(piphp(php)php php*php php$orientationphp php/php php1php8php0php)php)php,
php php php php php php php php php php php php php php php php php$allocatedColorphp,
php php php php php php php php php php php php php php php php php$fontphp,
php php php php php php php php php php php php php php php php php$text
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}
php}
