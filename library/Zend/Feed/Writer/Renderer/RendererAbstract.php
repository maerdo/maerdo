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
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php RendererAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Versionphp php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php{
php php php php php/php*php*
php php php php php php*php Extensions
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extensionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_containerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_domphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_ignoreExceptionsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_exceptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Encodingphp ofphp allphp textphp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp valuephp php"atomphp"php orphp php"rssphp"php dependingphp onphp thephp feedphp typephp setphp when
php php php php php php*php whenphp lastphp exportedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$containerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;
php php php php php php php php php$thisphp-php>setTypephp(php$containerphp-php>getTypephp(php)php)php;
php php php php php php php php php$thisphp-php>php_loadExtensionsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp XMLphp tophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDomDocumentphp(php)php-php>saveXmlphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp DOMphp document
php php php php php php*
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp getDomDocumentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp elementphp fromphp DOM
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getElementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDomDocumentphp(php)php-php>documentElementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp dataphp containerphp ofphp itemsphp beingphp rendered
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDataContainerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$enc
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp orphp notphp tophp ignorephp exceptions
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$bool
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp ignoreExceptionsphp(php$boolphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_boolphp(php$boolphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php$boolphp.php Shouldphp bephp TRUEphp orphp FALSEphp php(defaultsphp tophp TRUEphp ifphp nullphp)php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_ignoreExceptionsphp php=php php$boolphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp exceptionphp list
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExceptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_exceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp currentphp feedphp typephp beingphp exportedphp tophp php"rssphp"php orphp php"atomphp"php.php Thisphp allows
php php php php php php*php otherphp objectsphp tophp gracefullyphp choosephp whetherphp tophp executephp orphp notphp,php depending
php php php php php php*php onphp theirphp appropriatenessphp forphp thephp currentphp typephp,php ephp.gphp.php renderersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp orphp lastphp feedphp typephp exportedphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Valuephp willphp bephp php"rssphp"php orphp php"atomphp"
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp absolutephp rootphp elementphp forphp thephp XMLphp feedphp beingphp generatedphp.php This
php php php php php php*php helpsphp simplifyphp thephp appendingphp ofphp namespacephp declarationsphp,php butphp alsophp ensures
php php php php php php*php namespacesphp arephp addedphp tophp thephp rootphp elementphp php-php notphp scatteredphp acrossphp thephp entire
php php php php php php*php XMLphp filephp php-php mayphp assistphp namespacephp unsafephp parsersphp andphp looksphp prettyphp php;php)php.
php php php php php php*
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php/
php php php php publicphp functionphp setRootElementphp(DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rootElementphp php=php php$rootphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp absolutephp rootphp elementphp forphp thephp XMLphp feedphp beingphp generatedphp.
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getRootElementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rootElementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp extensionsphp fromphp Zendphp_Feedphp_Writer
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadExtensionsphp(php)
php php php php php{
php php php php php php php php Zendphp_Feedphp_Writerphp:php:registerCoreExtensionsphp(php)php;
php php php php php php php php php$allphp php=php Zendphp_Feedphp_Writerphp:php:getExtensionsphp(php)php;
php php php php php php php php ifphp php(striposphp(getphp_classphp(php$thisphp)php,php php'entryphp'php)php)php php{
php php php php php php php php php php php php php$extsphp php=php php$allphp[php'entryRendererphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$extsphp php=php php$allphp[php'feedRendererphp'php]php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$extsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php php$classNamephp php=php Zendphp_Feedphp_Writerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php$extensionphp)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extensionphp]php php=php newphp php$classNamephp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extensionphp]php-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php}
php}
