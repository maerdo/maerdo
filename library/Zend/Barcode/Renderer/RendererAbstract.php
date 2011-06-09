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
php php*php php@versionphp php php php php$Idphp:php RendererAbstractphp.phpphp php2php2php9php9php9php php2php0php1php0php-php0php9php-php2php3php php1php9php:php4php3php:php1php4Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php Classphp forphp renderingphp thephp barcode
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Barcodephp_Rendererphp_RendererAbstract
php{
php php php php php/php*php*
php php php php php php*php Namespacephp ofphp thephp rendererphp forphp autoloading
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rendererNamespacephp php=php php'Zendphp_Barcodephp_Rendererphp'php;

php php php php php/php*php*
php php php php php php*php Rendererphp type
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Activatephp/Deactivatephp thephp automaticphp renderingphp ofphp exception
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_automaticRenderErrorphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Offsetphp ofphp thephp barcodephp fromphp thephp topphp ofphp thephp renderingphp resource
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_topOffsetphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Offsetphp ofphp thephp barcodephp fromphp thephp leftphp ofphp thephp renderingphp resource
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_leftOffsetphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Horizontalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_horizontalPositionphp php=php php'leftphp'php;

php php php php php/php*php*
php php php php php php*php Verticalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_verticalPositionphp php=php php'topphp'php;

php php php php php/php*php*
php php php php php php*php Modulephp sizephp rendering
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_moduleSizephp php=php php1php;

php php php php php/php*php*
php php php php php php*php Barcodephp object
php php php php php php*php php@varphp Zendphp_Barcodephp_Objectphp_ObjectAbstract
php php php php php php*php/
php php php php protectedphp php$php_barcodephp;

php php php php php/php*php*
php php php php php php*php Drawingphp resource
php php php php php php*php/
php php php php protectedphp php$php_resourcephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_typephp php=php strtolowerphp(substrphp(
php php php php php php php php php php php php getphp_classphp(php$thisphp)php,
php php php php php php php php php php php php strlenphp(php$thisphp-php>php_rendererNamespacephp)php php+php php1
php php php php php php php php php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rendererphp statephp fromphp optionsphp array
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Rendererphp_Object
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php php$keyphp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rendererphp statephp fromphp configphp object
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Rendererphp_Object
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rendererphp namespacephp forphp autoloading
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@returnphp Zendphp_Rendererphp_Object
php php php php php php*php/
php php php php publicphp functionphp setRendererNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rendererNamespacephp php=php php$namespacephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp rendererphp namespace
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRendererNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rendererNamespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp rendererphp type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Manuallyphp adjustphp topphp position
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTopOffsetphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php php|php|php intvalphp(php$valuephp)php <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Verticalphp positionphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_topOffsetphp php=php intvalphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp verticalphp adjustment
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTopOffsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_topOffsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Manuallyphp adjustphp leftphp position
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setLeftOffsetphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php php|php|php intvalphp(php$valuephp)php <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Horizontalphp positionphp mustphp bephp greaterphp thanphp orphp equalsphp php0php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_leftOffsetphp php=php intvalphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp verticalphp adjustment
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLeftOffsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_leftOffsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Activatephp/Deactivatephp thephp automaticphp renderingphp ofphp exception
php php php php php php*php php@paramphp booleanphp php$value
php php php php php php*php/
php php php php publicphp functionphp setAutomaticRenderErrorphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_automaticRenderErrorphp php=php php(boolphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Horizontalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHorizontalPositionphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php arrayphp(php'leftphp'php php,php php'centerphp'php php,php php'rightphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Invalidphp barcodephp positionphp providedphp mustphp bephp php'leftphp'php,php php'centerphp'php orphp php'rightphp'php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_horizontalPositionphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Horizontalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHorizontalPositionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_horizontalPositionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verticalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setVerticalPositionphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php arrayphp(php'topphp'php php,php php'middlephp'php php,php php'bottomphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Invalidphp barcodephp positionphp providedphp mustphp bephp php'topphp'php,php php'middlephp'php orphp php'bottomphp'php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_verticalPositionphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verticalphp positionphp ofphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVerticalPositionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_verticalPositionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp sizephp ofphp aphp module
php php php php php php*php php@paramphp floatphp php$value
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setModuleSizephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php php|php|php floatvalphp(php$valuephp)php <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Floatphp sizephp mustphp bephp greaterphp thanphp php0php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_moduleSizephp php=php floatvalphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp thephp sizephp ofphp aphp module
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getModuleSizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_moduleSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp automaticphp renderingphp ofphp exception
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAutomaticRenderErrorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_automaticRenderErrorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp barcodephp object
php php php php php php*php php@paramphp Zendphp_Barcodephp_Objectphp php$barcode
php php php php php php*php php@returnphp Zendphp_Barcodephp_Renderer
php php php php php php*php/
php php php php publicphp functionphp setBarcodephp(php$barcodephp)
php php php php php{
php php php php php php php php ifphp php(php!php$barcodephp instanceofphp Zendphp_Barcodephp_Objectphp_ObjectAbstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Invalidphp barcodephp objectphp providedphp tophp setBarcodephp(php)php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_barcodephp php=php php$barcodephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp barcodephp object
php php php php php php*php php@returnphp Zendphp_Barcodephp_Object
php php php php php php*php/
php php php php publicphp functionphp getBarcodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_barcodephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkingphp ofphp parametersphp afterphp allphp settings
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checkParamsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkBarcodeObjectphp(php)php;
php php php php php php php php php$thisphp-php>php_checkParamsphp(php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp aphp barcodephp objectphp isphp correctlyphp provided
php php php php php php*php php@returnphp void
php php php php php php*php php@throwphp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_checkBarcodeObjectphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_barcodephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Nophp barcodephp objectphp providedphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp thephp leftphp andphp topphp offsetphp ofphp thephp barcodephp inphp the
php php php php php php*php renderingphp support
php php php php php php*
php php php php php php*php php@paramphp floatphp php$supportHeight
php php php php php php*php php@paramphp floatphp php$supportWidth
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_adjustPositionphp(php$supportHeightphp,php php$supportWidthphp)
php php php php php{
php php php php php php php php php$barcodeHeightphp php=php php$thisphp-php>php_barcodephp-php>getHeightphp(truephp)php php*php php$thisphp-php>php_moduleSizephp;
php php php php php php php php ifphp php(php$barcodeHeightphp php!php=php php$supportHeightphp php&php&php php$thisphp-php>php_topOffsetphp php=php=php php0php)php php{
php php php php php php php php php php php php switchphp php(php$thisphp-php>php_verticalPositionphp)php php{
php php php php php php php php php php php php php php php php casephp php'middlephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_topOffsetphp php=php floorphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$supportHeightphp php-php php$barcodeHeightphp)php php/php php2php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'bottomphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_topOffsetphp php=php php$supportHeightphp php-php php$barcodeHeightphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'topphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_topOffsetphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$barcodeWidthphp php=php php$thisphp-php>php_barcodephp-php>getWidthphp(truephp)php php*php php$thisphp-php>php_moduleSizephp;
php php php php php php php php ifphp php(php$barcodeWidthphp php!php=php php$supportWidthphp php&php&php php$thisphp-php>php_leftOffsetphp php=php=php php0php)php php{
php php php php php php php php php php php php switchphp php(php$thisphp-php>php_horizontalPositionphp)php php{
php php php php php php php php php php php php php php php php casephp php'centerphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_leftOffsetphp php=php floorphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$supportWidthphp php-php php$barcodeWidthphp)php php/php php2php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'rightphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_leftOffsetphp php=php php$supportWidthphp php-php php$barcodeWidthphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'leftphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_leftOffsetphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Drawphp thephp barcodephp inphp thephp renderingphp resource
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp drawphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>checkParamsphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_initRendererphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_drawInstructionListphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$renderablephp php=php falsephp;
php php php php php php php php php php php php ifphp php(php$ephp instanceofphp Zendphp_Barcodephp_Exceptionphp)php php{
php php php php php php php php php php php php php php php php php$renderablephp php=php php$ephp-php>isRenderablephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_automaticRenderErrorphp php&php&php php$renderablephp)php php{
php php php php php php php php php php php php php php php php php$barcodephp php=php Zendphp_Barcodephp:php:makeBarcodephp(
php php php php php php php php php php php php php php php php php php php php php'errorphp'php,
php php php php php php php php php php php php php php php php php php php php arrayphp(php'textphp'php php=php>php php$ephp-php>getMessagephp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setBarcodephp(php$barcodephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_resourcephp php=php nullphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_initRendererphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_drawInstructionListphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$ephp instanceofphp Zendphp_Barcodephp_Exceptionphp)php php{
php php php php php php php php php php php php php php php php php php php php php$ephp-php>setIsRenderablephp(falsephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_resourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Subphp processphp tophp drawphp thephp barcodephp instructions
php php php php php php*php Neededphp byphp thephp automaticphp errorphp rendering
php php php php php php*php/
php php php php privatephp functionphp php_drawInstructionListphp(php)
php php php php php{
php php php php php php php php php$instructionListphp php=php php$thisphp-php>php_barcodephp-php>drawphp(php)php;
php php php php php php php php foreachphp php(php$instructionListphp asphp php$instructionphp)php php{
php php php php php php php php php php php php switchphp php(php$instructionphp[php'typephp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php'polygonphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_drawPolygonphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'pointsphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'colorphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'filledphp'php]
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'textphp'php:php php/php/php$textphp,php php$sizephp,php php$positionphp,php php$fontphp,php php$colorphp,php php$alignmentphp php=php php'centerphp'php,php php$orientationphp php=php php0php)
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_drawTextphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'textphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'sizephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'positionphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'fontphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'colorphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'alignmentphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$instructionphp[php'orientationphp'php]
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Barcodephp_Rendererphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Barcodephp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Barcodephp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Unkownphp drawingphp commandphp'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkingphp ofphp parametersphp afterphp allphp settings
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_checkParamsphp(php)php;

php php php php php/php*php*
php php php php php php*php Renderphp thephp resourcephp byphp sendingphp headersphp andphp drawedphp resource
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp publicphp functionphp renderphp(php)php;

php php php php php/php*php*
php php php php php php*php Initializephp thephp renderingphp resource
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_initRendererphp(php)php;

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp renderingphp resource
php php php php php php*php php@paramphp arrayphp php$points
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp booleanphp php$filled
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_drawPolygonphp(php$pointsphp,php php$colorphp,php php$filledphp php=php truephp)php;

php php php php php/php*php*
php php php php php php*php Drawphp aphp polygonphp inphp thephp renderingphp resource
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php php@paramphp floatphp php$size
php php php php php php*php php@paramphp arrayphp php$position
php php php php php php*php php@paramphp stringphp php$font
php php php php php php*php php@paramphp integerphp php$color
php php php php php php*php php@paramphp stringphp php$alignment
php php php php php php*php php@paramphp floatphp php$orientation
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_drawTextphp(
php php php php php php php php php$textphp,
php php php php php php php php php$sizephp,
php php php php php php php php php$positionphp,
php php php php php php php php php$fontphp,
php php php php php php php php php$colorphp,
php php php php php php php php php$alignmentphp php=php php'centerphp'php,
php php php php php php php php php$orientationphp php=php php0
php php php php php)php;
php}
