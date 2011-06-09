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
php php*php php@versionphp php php php php$Idphp:php Atomphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Feedphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Feedphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Versionphp php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterfacephp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererInterfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Entryphp/Atomphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp_Deletedphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Entryphp/Atomphp/Deletedphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstractphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Atomphp/AtomAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atom
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atomphp_AtomAbstract
php php php php implementsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterface
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Writerphp_Feedphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(Zendphp_Feedphp_Writerphp_Feedphp php$containerphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp Atomphp feed
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atom
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_containerphp-php>setEncodingphp(php'UTFphp-php8php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$rootphp php=php php$thisphp-php>php_domphp-php>createElementNSphp(
php php php php php php php php php php php php Zendphp_Feedphp_Writerphp:php:NAMESPACEphp_ATOMphp_php1php0php,php php'feedphp'
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>setRootElementphp(php$rootphp)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setLanguagephp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setBaseUrlphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setTitlephp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDescriptionphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setImagephp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setIconphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDateCreatedphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDateModifiedphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setGeneratorphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setLinkphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setFeedLinksphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setIdphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setCopyrightphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setCategoriesphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setHubsphp(php$thisphp-php>php_domphp,php php$rootphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$extphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setRootElementphp(php$thisphp-php>getRootElementphp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setDomDocumentphp(php$thisphp-php>getDomDocumentphp(php)php,php php$rootphp)php;
php php php php php php php php php php php php php$extphp-php>renderphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_containerphp asphp php$entryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getDataContainerphp(php)php-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setEncodingphp(php$thisphp-php>getDataContainerphp(php)php-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$entryphp instanceofphp Zendphp_Feedphp_Writerphp_Entryphp)php php{
php php php php php php php php php php php php php php php php php$rendererphp php=php newphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp(php$entryphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_domphp-php>documentElementphp-php>hasAttributephp(php'xmlnsphp:atphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_domphp-php>documentElementphp-php>setAttributephp(
php php php php php php php php php php php php php php php php php php php php php php php php php'xmlnsphp:atphp'php,php php'httpphp:php/php/purlphp.orgphp/atompubphp/tombstonesphp/php1php.php0php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$rendererphp php=php newphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp_Deletedphp(php$entryphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_ignoreExceptionsphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$rendererphp-php>ignoreExceptionsphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rendererphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$rendererphp-php>setRootElementphp(php$thisphp-php>php_domphp-php>documentElementphp)php;
php php php php php php php php php php php php php$rendererphp-php>renderphp(php)php;
php php php php php php php php php php php php php$elementphp php=php php$rendererphp-php>getElementphp(php)php;
php php php php php php php php php php php php php$importedphp php=php php$thisphp-php>php_domphp-php>importNodephp(php$elementphp,php truephp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$importedphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
