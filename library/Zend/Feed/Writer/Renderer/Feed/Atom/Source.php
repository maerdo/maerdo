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
php php*php php@versionphp php php php php$Idphp:php Sourcephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Atomphp/AtomAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atomphp_Source
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atomphp_AtomAbstract
php php php php implementsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterface
php{

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Writerphp_Feedphp_Sourcephp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(Zendphp_Feedphp_Writerphp_Sourcephp php$containerphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp Atomphp Feedphp Metadataphp php(Sourcephp elementphp)
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
php php php php php php php php php$rootphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'sourcephp'php)php;
php php php php php php php php php$thisphp-php>setRootElementphp(php$rootphp)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setLanguagephp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setBaseUrlphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setTitlephp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDescriptionphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDateCreatedphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setDateModifiedphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setGeneratorphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setLinkphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setFeedLinksphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setIdphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setCopyrightphp(php$thisphp-php>php_domphp,php php$rootphp)php;
php php php php php php php php php$thisphp-php>php_setCategoriesphp(php$thisphp-php>php_domphp,php php$rootphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$extphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setRootElementphp(php$thisphp-php>getRootElementphp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setDomDocumentphp(php$thisphp-php>getDomDocumentphp(php)php,php php$rootphp)php;
php php php php php php php php php php php php php$extphp-php>renderphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp generatorphp string
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setGeneratorphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getGeneratorphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$gdataphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getGeneratorphp(php)php;
php php php php php php php php php$generatorphp php=php php$domphp-php>createElementphp(php'generatorphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$generatorphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$gdataphp[php'namephp'php]php)php;
php php php php php php php php php$generatorphp-php>appendChildphp(php$textphp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'uriphp'php,php php$gdataphp)php)php php{
php php php php php php php php php php php php php$generatorphp-php>setAttributephp(php'uriphp'php,php php$gdataphp[php'uriphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'versionphp'php,php php$gdataphp)php)php php{
php php php php php php php php php php php php php$generatorphp-php>setAttributephp(php'versionphp'php,php php$gdataphp[php'versionphp'php]php)php;
php php php php php php php php php}
php php php php php}

php}
