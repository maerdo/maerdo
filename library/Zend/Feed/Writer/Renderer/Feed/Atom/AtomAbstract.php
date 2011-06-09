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
php php*php php@versionphp php php php php$Idphp:php AtomAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Feedphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Feedphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Versionphp php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterfacephp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererInterfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Entryphp/Atomphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstractphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atomphp_AtomAbstract
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Writerphp_Feedphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(php$containerphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp language
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setLanguagephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getDataContainerphp(php)php-php>getLanguagephp(php)php)php php{
php php php php php php php php php php php php php$rootphp-php>setAttributephp(php'xmlphp:langphp'php,php php$thisphp-php>getDataContainerphp(php)
php php php php php php php php php php php php php php php php php-php>getLanguagephp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp title
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setTitlephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php atomphp:titlephp elementphp butphp aphp titlephp hasphp notphp beenphp setphp'php;
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
php php php php php php php php php$titlephp-php>setAttributephp(php'typephp'php,php php'textphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp description
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDescriptionphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$subtitlephp php=php php$domphp-php>createElementphp(php'subtitlephp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$subtitlephp)php;
php php php php php php php php php$subtitlephp-php>setAttributephp(php'typephp'php,php php'textphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php;
php php php php php php php php php$subtitlephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp feedphp wasphp lastphp modified
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDateModifiedphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php atomphp:updatedphp elementphp butphp aphp modificationphp datephp hasphp notphp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$updatedphp php=php php$domphp-php>createElementphp(php'updatedphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$updatedphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php-php>getphp(Zendphp_Datephp:php:ISOphp_php8php6php0php1php)
php php php php php php php php php)php;
php php php php php php php php php$updatedphp-php>appendChildphp(php$textphp)php;
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
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setGeneratorphp(php'Zendphp_Feedphp_Writerphp'php,
php php php php php php php php php php php php php php php php Zendphp_Versionphp:php:VERSIONphp,php php'httpphp:php/php/frameworkphp.zendphp.comphp'php)php;
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

php php php php php/php*php*
php php php php php php*php Setphp linkphp tophp feed
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setLinkphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$linkphp php=php php$domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$linkphp)php;
php php php php php php php php php$linkphp-php>setAttributephp(php'relphp'php,php php'alternatephp'php)php;
php php php php php php php php php$linkphp-php>setAttributephp(php'typephp'php,php php'textphp/htmlphp'php)php;
php php php php php php php php php$linkphp-php>setAttributephp(php'hrefphp'php,php php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp links
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setFeedLinksphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$flinksphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getFeedLinksphp(php)php;
php php php php php php php php ifphp(php!php$flinksphp php|php|php php!arrayphp_keyphp_existsphp(php'atomphp'php,php php$flinksphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php feedphp elementsphp SHOULDphp containphp onephp atomphp:linkphp php'
php php php php php php php php php php php php php.php php'elementphp withphp aphp relphp attributephp valuephp ofphp php"selfphp"php.php php Thisphp isphp thephp php'
php php php php php php php php php php php php php.php php'preferredphp URIphp forphp retrievingphp Atomphp Feedphp Documentsphp representingphp php'
php php php php php php php php php php php php php.php php'thisphp Atomphp feedphp butphp aphp feedphp linkphp hasphp notphp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$flinksphp asphp php$typephp php=php>php php$hrefphp)php php{
php php php php php php php php php php php php php$mimephp php=php php'applicationphp/php'php php.php strtolowerphp(php$typephp)php php.php php'php+xmlphp'php;
php php php php php php php php php php php php php$flinkphp php=php php$domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$flinkphp)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'relphp'php,php php'selfphp'php)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'typephp'php,php php$mimephp)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'hrefphp'php,php php$hrefphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp authors
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setAuthorsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>php_containerphp-php>getAuthorsphp(php)php;
php php php php php php php php ifphp php(php!php$authorsphp php|php|php emptyphp(php$authorsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Technicallyphp wephp shouldphp deferphp anphp exceptionphp untilphp wephp canphp check
php php php php php php php php php php php php php php*php thatphp allphp entriesphp containphp anphp authorphp.php Ifphp anyphp entryphp isphp missing
php php php php php php php php php php php php php php*php anphp authorphp,php thenphp aphp missingphp feedphp authorphp elementphp isphp invalid
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$authorsphp asphp php$dataphp)php php{
php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'authorphp'php)php;
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'namephp'php)php;
php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$namephp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'namephp'php]php)php;
php php php php php php php php php php php php php$namephp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'emailphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$emailphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'emailphp'php)php;
php php php php php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$emailphp)php;
php php php php php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'emailphp'php]php)php;
php php php php php php php php php php php php php php php php php$emailphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'uriphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$uriphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'uriphp'php)php;
php php php php php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$uriphp)php;
php php php php php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'uriphp'php]php)php;
php php php php php php php php php php php php php php php php php$uriphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp identifier
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setIdphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)
php php php php php php php php php&php&php php!php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php feedphp elementsphp MUSTphp containphp exactlyphp onephp php'
php php php php php php php php php php php php php.php php'atomphp:idphp elementphp,php orphp asphp anphp alternativephp,php wephp canphp usephp thephp samephp php'
php php php php php php php php php php php php php.php php'valuephp asphp atomphp:linkphp howeverphp neitherphp aphp suitablephp linkphp norphp anphp php'
php php php php php php php php php php php php php.php php'idphp havephp beenphp setphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setIdphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$domphp-php>createElementphp(php'idphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$idphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php;
php php php php php php php php php$idphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp copyright
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCopyrightphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$copyrightphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getCopyrightphp(php)php;
php php php php php php php php ifphp php(php!php$copyrightphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$copyphp php=php php$domphp-php>createElementphp(php'rightsphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$copyphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$copyrightphp)php;
php php php php php php php php php$copyphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp levelphp logophp php(imagephp)
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
php php php php php php php php php$imgphp php=php php$domphp-php>createElementphp(php'logophp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$imgphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'uriphp'php]php)php;
php php php php php php php php php$imgphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp levelphp iconphp php(imagephp)
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$dom
php php php php php php*php php@paramphp DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setIconphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$imagephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getIconphp(php)php;
php php php php php php php php ifphp php(php!php$imagephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$imgphp php=php php$domphp-php>createElementphp(php'iconphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$imgphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$imagephp[php'uriphp'php]php)php;
php php php php php php php php php$imgphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp feedphp wasphp created
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
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
php php php php php php*php Setphp basephp URLphp tophp feedphp links
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
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
php php php php php php*php Setphp hubsphp tophp whichphp thisphp feedphp pushes
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setHubsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$hubsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getHubsphp(php)php;
php php php php php php php php ifphp php(php!php$hubsphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$hubsphp asphp php$hubUrlphp)php php{
php php php php php php php php php php php php php$hubphp php=php php$domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php php php php php$hubphp-php>setAttributephp(php'relphp'php,php php'hubphp'php)php;
php php php php php php php php php php php php php$hubphp-php>setAttributephp(php'hrefphp'php,php php$hubUrlphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$hubphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp cateories
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
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
php php php php php php php php php php php php php$categoryphp-php>setAttributephp(php'termphp'php,php php$catphp[php'termphp'php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$catphp[php'labelphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$categoryphp-php>setAttributephp(php'labelphp'php,php php$catphp[php'labelphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$categoryphp-php>setAttributephp(php'labelphp'php,php php$catphp[php'termphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$catphp[php'schemephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$categoryphp-php>setAttributephp(php'schemephp'php,php php$catphp[php'schemephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$categoryphp)php;
php php php php php php php php php}
php php php php php}
php}
