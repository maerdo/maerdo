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
php php*php php@versionphp php php php php$Idphp:php Rssphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Feedphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Feedphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Versionphp php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterfacephp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererInterfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Rssphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Entryphp/Rssphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstractphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Rss
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
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
php php php php php php*php Renderphp RSSphp feed
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Rss
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_containerphp-php>setEncodingphp(php'UTFphp-php8php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$thisphp-php>php_domphp-php>substituteEntitiesphp php=php falsephp;
php php php php php php php php php$rssphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'rssphp'php)php;
php php php php php php php php php$thisphp-php>setRootElementphp(php$rssphp)php;
php php php php php php php php php$rssphp-php>setAttributephp(php'versionphp'php,php php'php2php.php0php'php)php;

php php php php php php php php php$channelphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'channelphp'php)php;
php php php php php php php php php$rssphp-php>appendChildphp(php$channelphp)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$rssphp)php;
php php php php php php php php php$thisphp-php>php_setLanguagephp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setBaseUrlphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setTitlephp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setDescriptionphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setImagephp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setDateCreatedphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setDateModifiedphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setLastBuildDatephp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setGeneratorphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setLinkphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setCopyrightphp(php$thisphp-php>php_domphp,php php$channelphp)php;
php php php php php php php php php$thisphp-php>php_setCategoriesphp(php$thisphp-php>php_domphp,php php$channelphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$extphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setRootElementphp(php$thisphp-php>getRootElementphp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setDomDocumentphp(php$thisphp-php>getDomDocumentphp(php)php,php php$channelphp)php;
php php php php php php php php php php php php php$extphp-php>renderphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_containerphp asphp php$entryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getDataContainerphp(php)php-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setEncodingphp(php$thisphp-php>getDataContainerphp(php)php-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$entryphp instanceofphp Zendphp_Feedphp_Writerphp_Entryphp)php php{
php php php php php php php php php php php php php php php php php$rendererphp php=php newphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Rssphp(php$entryphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_ignoreExceptionsphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$rendererphp-php>ignoreExceptionsphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rendererphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$rendererphp-php>setRootElementphp(php$thisphp-php>php_domphp-php>documentElementphp)php;
php php php php php php php php php php php php php$rendererphp-php>renderphp(php)php;
php php php php php php php php php php php php php$elementphp php=php php$rendererphp-php>getElementphp(php)php;
php php php php php php php php php php php php php$importedphp php=php php$thisphp-php>php_domphp-php>importNodephp(php$elementphp,php truephp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$importedphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp language
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setLanguagephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$langphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getLanguagephp(php)php;
php php php php php php php php ifphp php(php!php$langphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$languagephp php=php php$domphp-php>createElementphp(php'languagephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$languagephp)php;
php php php php php php php php php$languagephp-php>nodeValuephp php=php php$langphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp title
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setTitlephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php titlephp elementphp butphp aphp titlephp hasphp notphp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$titlephp php=php php$domphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$titlephp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp description
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDescriptionphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php descriptionphp elementphp butphp onephp hasphp notphp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$subtitlephp php=php php$domphp-php>createElementphp(php'descriptionphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$subtitlephp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php;
php php php php php php php php php$subtitlephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp feedphp wasphp lastphp modified
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDateModifiedphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$updatedphp php=php php$domphp-php>createElementphp(php'pubDatephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$updatedphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php-php>getphp(Zendphp_Datephp:php:RSSphp)
php php php php php php php php php)php;
php php php php php php php php php$updatedphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp generatorphp string
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setGeneratorphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getGeneratorphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setGeneratorphp(php'Zendphp_Feedphp_Writerphp'php,
php php php php php php php php php php php php php php php php Zendphp_Versionphp:php:VERSIONphp,php php'httpphp:php/php/frameworkphp.zendphp.comphp'php)php;
php php php php php php php php php}

php php php php php php php php php$gdataphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getGeneratorphp(php)php;
php php php php php php php php php$generatorphp php=php php$domphp-php>createElementphp(php'generatorphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$generatorphp)php;
php php php php php php php php php$namephp php=php php$gdataphp[php'namephp'php]php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'versionphp'php,php php$gdataphp)php)php php{
php php php php php php php php php php php php php$namephp php.php=php php'php php'php php.php php$gdataphp[php'versionphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'uriphp'php,php php$gdataphp)php)php php{
php php php php php php php php php php php php php$namephp php.php=php php'php php(php'php php.php php$gdataphp[php'uriphp'php]php php.php php'php)php'php;
php php php php php php php php php}
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$namephp)php;
php php php php php php php php php$generatorphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linkphp tophp feed
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setLinkphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$valuephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php;
php php php php php php php php ifphp(php!php$valuephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php linkphp elementphp butphp onephp hasphp notphp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$linkphp php=php php$domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$linkphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$valuephp)php;
php php php php php php php php php$linkphp-php>appendChildphp(php$textphp)php;
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'isPermaLinkphp'php,php php'falsephp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp authors
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setAuthorsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getAuthorsphp(php)php;
php php php php php php php php ifphp php(php!php$authorsphp php|php|php emptyphp(php$authorsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$authorsphp asphp php$dataphp)php php{
php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'authorphp'php)php;
php php php php php php php php php php php php php$namephp php=php php$dataphp[php'namephp'php]php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'emailphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php php$dataphp[php'emailphp'php]php php.php php'php php(php'php php.php php$dataphp[php'namephp'php]php php.php php'php)php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$namephp)php;
php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp copyright
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCopyrightphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$copyrightphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getCopyrightphp(php)php;
php php php php php php php php ifphp php(php!php$copyrightphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$copyphp php=php php$domphp-php>createElementphp(php'copyrightphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$copyphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$copyrightphp)php;
php php php php php php php php php$copyphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp channelphp image
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setImagephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$imagephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getImagephp(php)php;
php php php php php php php php ifphp php(php!php$imagephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$imagephp[php'titlephp'php]php)php php|php|php emptyphp(php$imagephp[php'titlephp'php]php)
php php php php php php php php php|php|php php!isphp_stringphp(php$imagephp[php'titlephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php feedphp imagesphp mustphp includephp aphp titlephp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$imagephp[php'linkphp'php]php)php php|php|php php!isphp_stringphp(php$imagephp[php'linkphp'php]php)
php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$imagephp[php'linkphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Invalidphp parameterphp:php parameterphp php\php'linkphp\php'php'
php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$imgphp php=php php$domphp-php>createElementphp(php'imagephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$imgphp)php;
php php php php php php php php php$urlphp php=php php$domphp-php>createElementphp(php'urlphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'uriphp'php]php)php;
php php php php php php php php php$urlphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$titlephp php=php php$domphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'titlephp'php]php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$linkphp php=php php$domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'linkphp'php]php)php;
php php php php php php php php php$linkphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$imgphp-php>appendChildphp(php$urlphp)php;
php php php php php php php php php$imgphp-php>appendChildphp(php$titlephp)php;
php php php php php php php php php$imgphp-php>appendChildphp(php$linkphp)php;
php php php php php php php php ifphp php(issetphp(php$imagephp[php'heightphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php(stringphp)php php$imagephp[php'heightphp'php]php)php php|php|php php$imagephp[php'heightphp'php]php php>php php4php0php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$messagephp php=php php'Invalidphp parameterphp:php parameterphp php\php'heightphp\php'php'
php php php php php php php php php php php php php php php php php.php php'php mustphp bephp anphp integerphp notphp exceedingphp php4php0php0php'php;
php php php php php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$heightphp php=php php$domphp-php>createElementphp(php'heightphp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'heightphp'php]php)php;
php php php php php php php php php php php php php$heightphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$imgphp-php>appendChildphp(php$heightphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$imagephp[php'widthphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php(stringphp)php php$imagephp[php'widthphp'php]php)php php|php|php php$imagephp[php'widthphp'php]php php>php php1php4php4php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$messagephp php=php php'Invalidphp parameterphp:php parameterphp php\php'widthphp\php'php'
php php php php php php php php php php php php php php php php php.php php'php mustphp bephp anphp integerphp notphp exceedingphp php1php4php4php'php;
php php php php php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$widthphp php=php php$domphp-php>createElementphp(php'widthphp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'widthphp'php]php)php;
php php php php php php php php php php php php php$widthphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$imgphp-php>appendChildphp(php$widthphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$imagephp[php'descriptionphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$imagephp[php'descriptionphp'php]php)php php|php|php php!isphp_stringphp(php$imagephp[php'descriptionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$messagephp php=php php'Invalidphp parameterphp:php parameterphp php\php'descriptionphp\php'php'
php php php php php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp'php;
php php php php php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$descphp php=php php$domphp-php>createElementphp(php'descriptionphp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'descriptionphp'php]php)php;
php php php php php php php php php php php php php$descphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$imgphp-php>appendChildphp(php$descphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp feedphp wasphp created
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDateCreatedphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateCreatedphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setDateModifiedphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDateCreatedphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp feedphp lastphp buildphp date
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setLastBuildDatephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getLastBuildDatephp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$lastBuildDatephp php=php php$domphp-php>createElementphp(php'lastBuildDatephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$lastBuildDatephp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getLastBuildDatephp(php)php-php>getphp(Zendphp_Datephp:php:RSSphp)
php php php php php php php php php)php;
php php php php php php php php php$lastBuildDatephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp basephp URLphp tophp feedphp links
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setBaseUrlphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getBaseUrlphp(php)php;
php php php php php php php php ifphp php(php!php$baseUrlphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$rootphp-php>setAttributephp(php'xmlphp:basephp'php,php php$baseUrlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp categories
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCategoriesphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$categoriesphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getCategoriesphp(php)php;
php php php php php php php php ifphp php(php!php$categoriesphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$categoriesphp asphp php$catphp)php php{
php php php php php php php php php php php php php$categoryphp php=php php$domphp-php>createElementphp(php'categoryphp'php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$catphp[php'schemephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$categoryphp-php>setAttributephp(php'domainphp'php,php php$catphp[php'schemephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$catphp[php'termphp'php]php)php;
php php php php php php php php php php php php php$categoryphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$categoryphp)php;
php php php php php php php php php}
php php php php php}
php}
