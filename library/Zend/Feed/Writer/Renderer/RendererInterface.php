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
php php*php php@versionphp php php php php$Idphp:php RendererInterfacephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterface
php{
php php php php php/php*php*
php php php php php php*php Renderphp feedphp/entry
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)php;

php php php php php/php*php*
php php php php php php*php Savephp feedphp andphp/orphp entryphp tophp XMLphp andphp returnphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp DOMphp document
php php php php php php*
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp getDomDocumentphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp documentphp elementphp fromphp DOM
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getElementphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp dataphp containerphp containingphp feedphp items
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDataContainerphp(php)php;

php php php php php/php*php*
php php php php php php*php Shouldphp exceptionsphp bephp ignoredphp?
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp ignoreExceptionsphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp listphp ofphp thrownphp exceptions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExceptionsphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp currentphp feedphp typephp beingphp exportedphp tophp php"rssphp"php orphp php"atomphp"php.php Thisphp allows
php php php php php php*php otherphp objectsphp tophp gracefullyphp choosephp whetherphp tophp executephp orphp notphp,php depending
php php php php php php*php onphp theirphp appropriatenessphp forphp thephp currentphp typephp,php ephp.gphp.php renderersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp orphp lastphp feedphp typephp exportedphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Valuephp willphp bephp php"rssphp"php orphp php"atomphp"
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp thephp absolutephp rootphp elementphp forphp thephp XMLphp feedphp beingphp generatedphp.php This
php php php php php php*php helpsphp simplifyphp thephp appendingphp ofphp namespacephp declarationsphp,php butphp alsophp ensures
php php php php php php*php namespacesphp arephp addedphp tophp thephp rootphp elementphp php-php notphp scatteredphp acrossphp thephp entire
php php php php php php*php XMLphp filephp php-php mayphp assistphp namespacephp unsafephp parsersphp andphp looksphp prettyphp php;php)php.
php php php php php php*
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php/
php php php php publicphp functionphp setRootElementphp(DOMElementphp php$rootphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp absolutephp rootphp elementphp forphp thephp XMLphp feedphp beingphp generatedphp.
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getRootElementphp(php)php;
php}
