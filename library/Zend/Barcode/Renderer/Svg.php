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
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php3php6php6php php2php0php1php0php-php0php1php-php1php8php php0php3php:php5php6php:php5php2Zphp ralphphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Barcodephp_Rendererphp_RendererAbstractphp*php/
requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php Classphp forphp renderingphp thephp barcodephp asphp svg
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Rendererphp_Svgphp extendsphp Zendphp_Barcodephp_Rendererphp_RendererAbstract
php{

php php php php php/php*php*
php php php php php php*php Resourcephp forphp thephp image
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_resourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Rootphp elementphp ofphp thephp XMLphp structure
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp php=php nullphp;

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
php php php php php php php php php php php php php php php php php'Svgphp heightphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
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
php php php php php php php php php php php php php php php php php'Svgphp widthphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
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
php php php php php php*php php@paramphp DOMDocumentphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setResourcephp(php$svgphp)
php php php php php{
php php php php php php php php ifphp php(php!php$svgphp instanceofphp DOMDocumentphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp DOMDocumentphp resourcephp providedphp tophp setResourcephp(php)php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_resourcephp php=php php$svgphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp imagephp resource
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initRendererphp(php)
php php php php php{
php php php php php php php php php$barcodeWidthphp php php=php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php;
php php php php php php php php php$barcodeHeightphp php=php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php;

php php php php php php php php php$backgroundColorphp php=php php$thisphp-php>php_barcodephp-php>getBackgroundColorphp(php)php;
php php php php php php php php php$imageBackgroundColorphp php=php php'rgbphp(php'php php.php implodephp(php'php,php php'php,php arrayphp(php(php$backgroundColorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$backgroundColorphp php&php php0xphp0php0php0php0FFphp)php)php)php php.php php'php)php'php;

php php php php php php php php php$widthphp php=php php$barcodeWidthphp;
php php php php php php php php php$heightphp php=php php$barcodeHeightphp;
php php php php php php php php ifphp php(php$thisphp-php>php_userWidthphp php&php&php php$thisphp-php>php_barcodephp-php>getTypephp(php)php php!php=php php'errorphp'php)php php{
php php php php php php php php php php php php php$widthphp php=php php$thisphp-php>php_userWidthphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_userHeightphp php&php&php php$thisphp-php>php_barcodephp-php>getTypephp(php)php php!php=php php'errorphp'php)php php{
php php php php php php php php php php php php php$heightphp php=php php$thisphp-php>php_userHeightphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resourcephp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php'utfphp-php8php'php)php;
php php php php php php php php php php php php php$thisphp-php>php_resourcephp-php>formatOutputphp php=php truephp;
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp php=php php$thisphp-php>php_resourcephp-php>createElementphp(php'svgphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp-php>setAttributephp(php'xmlnsphp'php,php php"httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php0php/svgphp"php)php;
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp-php>setAttributephp(php'versionphp'php,php php'php1php.php1php'php)php;
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp-php>setAttributephp(php'widthphp'php,php php$widthphp)php;
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp-php>setAttributephp(php'heightphp'php,php php$heightphp)php;

php php php php php php php php php php php php php$thisphp-php>php_appendRootElementphp(php'titlephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php"Barcodephp php"php php.php strtoupperphp(php$thisphp-php>php_barcodephp-php>getTypephp(php)php)php php.php php"php php"php php.php php$thisphp-php>php_barcodephp-php>getTextphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_readRootElementphp(php)php;
php php php php php php php php php php php php php$widthphp php=php php$thisphp-php>php_rootElementphp-php>getAttributephp(php'widthphp'php)php;
php php php php php php php php php php php php php$heightphp php=php php$thisphp-php>php_rootElementphp-php>getAttributephp(php'heightphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_adjustPositionphp(php$heightphp,php php$widthphp)php;

php php php php php php php php php$thisphp-php>php_appendRootElementphp(php'rectphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'xphp'php php=php>php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'yphp'php php=php>php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'widthphp'php php=php>php php(php$thisphp-php>php_leftOffsetphp php+php php$barcodeWidthphp php-php php1php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'heightphp'php php=php>php php(php$thisphp-php>php_topOffsetphp php+php php$barcodeHeightphp php-php php1php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'fillphp'php php=php>php php$imageBackgroundColorphp)php)php;
php php php php php}

php php php php protectedphp functionphp php_readRootElementphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_resourcephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_rootElementphp php=php php$thisphp-php>php_resourcephp-php>documentElementphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp newphp DOMElementphp tophp thephp rootphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tagName
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@paramphp stringphp php$textContent
php php php php php php*php/
php php php php protectedphp functionphp php_appendRootElementphp(php$tagNamephp,php php$attributesphp php=php arrayphp(php)php,php php$textContentphp php=php nullphp)
php php php php php{
php php php php php php php php php$newElementphp php=php php$thisphp-php>php_createElementphp(php$tagNamephp,php php$attributesphp,php php$textContentphp)php;
php php php php php php php php php$thisphp-php>php_rootElementphp-php>appendChildphp(php$newElementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp DOMElement
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tagName
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@paramphp stringphp php$textContent
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php protectedphp functionphp php_createElementphp(php$tagNamephp,php php$attributesphp php=php arrayphp(php)php,php php$textContentphp php=php nullphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>php_resourcephp-php>createElementphp(php$tagNamephp)php;
php php php php php php php php foreachphp php(php$attributesphp asphp php$kphp php=php>php$vphp)php php{
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php$kphp,php php$vphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$textContentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>appendChildphp(newphp DOMTextphp(php(stringphp)php php$textContentphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$elementphp;
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
php php php php php php php php php php php php php$thisphp-php>php_readRootElementphp(php)php;
php php php php php php php php php php php php php$heightphp php=php php(floatphp)php php$thisphp-php>php_rootElementphp-php>getAttributephp(php'heightphp'php)php;
php php php php php php php php php php php php ifphp php(php$heightphp <php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php)php php{
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
php php php php php php php php php php php php php$thisphp-php>php_readRootElementphp(php)php;
php php php php php php php php php php php php php$widthphp php=php php$thisphp-php>php_rootElementphp-php>getAttributephp(php'widthphp'php)php;
php php php php php php php php php php php php ifphp php(php$widthphp <php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Barcodephp isphp definephp outsidephp thephp imagephp php(widthphp)php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_userWidthphp)php php{
php php php php php php php php php php php php php php php php php$widthphp php=php php(floatphp)php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php;
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
php php php php php php*php Drawphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp drawphp(php)
php php php php php{
php php php php php php php php parentphp:php:drawphp(php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>appendChildphp(php$thisphp-php>php_rootElementphp)php;
php php php php php php php php returnphp php$thisphp-php>php_resourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp andphp renderphp thephp barcodephp withphp correctphp headers
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>drawphp(php)php;
php php php php php php php php headerphp(php"Contentphp-Typephp:php imagephp/svgphp+xmlphp"php)php;
php php php php php php php php echophp php$thisphp-php>php_resourcephp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp svgphp resource
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$points
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp booleanphp php$filled
php php php php php php*php/
php php php php protectedphp functionphp php_drawPolygonphp(php$pointsphp,php php$colorphp,php php$filledphp php=php truephp)
php php php php php{
php php php php php php php php php$colorphp php=php php'rgbphp(php'php php.php implodephp(php'php,php php'php,php arrayphp(php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0php0php0FFphp)php)php)php php.php php'php)php'php;
php php php php php php php php php$orientationphp php=php php$thisphp-php>getBarcodephp(php)php-php>getOrientationphp(php)php;
php php php php php php php php php$newPointsphp php=php arrayphp(
php php php php php php php php php php php php php$pointsphp[php0php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php0php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$pointsphp[php1php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp,
php php php php php php php php php php php php php$pointsphp[php1php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp,
php php php php php php php php php php php php php$pointsphp[php2php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp php+php cosphp(php-php$orientationphp)php,
php php php php php php php php php php php php php$pointsphp[php2php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp php-php sinphp(php$orientationphp)php,
php php php php php php php php php php php php php$pointsphp[php3php]php[php0php]php php+php php$thisphp-php>php_leftOffsetphp php+php cosphp(php-php$orientationphp)php,
php php php php php php php php php php php php php$pointsphp[php3php]php[php1php]php php+php php$thisphp-php>php_topOffsetphp php-php sinphp(php$orientationphp)php,
php php php php php php php php php)php;
php php php php php php php php php$newPointsphp php=php implodephp(php'php php'php,php php$newPointsphp)php;
php php php php php php php php php$attributesphp[php'pointsphp'php]php php=php php$newPointsphp;
php php php php php php php php php$attributesphp[php'fillphp'php]php php=php php$colorphp;
php php php php php php php php php$thisphp-php>php_appendRootElementphp(php'polygonphp'php,php php$attributesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp svgphp resource
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
php php php php php php php php php$colorphp php=php php'rgbphp(php'php php.php implodephp(php'php,php php'php,php arrayphp(php(php$colorphp php&php php0xFFphp0php0php0php0php)php php>php>php php1php6php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0FFphp0php0php)php php>php>php php8php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$colorphp php&php php0xphp0php0php0php0FFphp)php)php)php php.php php'php)php'php;
php php php php php php php php php$attributesphp[php'xphp'php]php php=php php$positionphp[php0php]php php+php php$thisphp-php>php_leftOffsetphp;
php php php php php php php php php$attributesphp[php'yphp'php]php php=php php$positionphp[php1php]php php+php php$thisphp-php>php_topOffsetphp;
php php php php php php php php php/php/php$attributesphp[php'fontphp-familyphp'php]php php=php php$fontphp;
php php php php php php php php php$attributesphp[php'colorphp'php]php php=php php$colorphp;
php php php php php php php php php$attributesphp[php'fontphp-sizephp'php]php php=php php$sizephp php*php php1php.php2php;
php php php php php php php php switchphp php(php$alignmentphp)php php{
php php php php php php php php php php php php casephp php'leftphp'php:
php php php php php php php php php php php php php php php php php$textAnchorphp php=php php'startphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'rightphp'php:
php php php php php php php php php php php php php php php php php$textAnchorphp php=php php'endphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'centerphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$textAnchorphp php=php php'middlephp'php;
php php php php php php php php php}
php php php php php php php php php$attributesphp[php'stylephp'php]php php=php php'textphp-anchorphp:php php'php php.php php$textAnchorphp;
php php php php php php php php php$attributesphp[php'transformphp'php]php php=php php'rotatephp(php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php-php php$orientationphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php,php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php$positionphp[php0php]php php+php php$thisphp-php>php_leftOffsetphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php,php php'php php.php php(php$positionphp[php1php]php php+php php$thisphp-php>php_topOffsetphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php)php'php;
php php php php php php php php php$thisphp-php>php_appendRootElementphp(php'textphp'php,php php$attributesphp,php php$textphp)php;
php php php php php}
php}
