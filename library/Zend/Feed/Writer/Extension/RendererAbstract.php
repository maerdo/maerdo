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
php php*php tophp padraicphp dotphp bradyphp atphp yahoophp dotphp comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writerphp_Entryphp_Rss
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php RendererAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Extensionphp_RendererInterface
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Extensionphp/RendererInterfacephp.phpphp'php;

php php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writerphp_Entryphp_Rss
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php php php implementsphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererInterface
php{
php php php php php/php*php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php protectedphp php$php_domphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_entryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_basephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_containerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Encodingphp ofphp allphp textphp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$containerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$enc
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedphp encoding
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp DOMDocumentphp andphp DOMElementphp onphp whichphp tophp operate
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$base
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setDomDocumentphp(DOMDocumentphp php$domphp,php DOMElementphp php$basephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php php=php php$domphp;
php php php php php php php php php$thisphp-php>php_basephp php=php php$basephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp dataphp containerphp beingphp rendered
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDataContainerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedtype
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rootphp elementphp ofphp document
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setRootElementphp(DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rootElementphp php=php php$rootphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp rootphp element
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getRootElementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rootElementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp namespacesphp tophp feed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_appendNamespacesphp(php)php;
php}
