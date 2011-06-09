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

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Atomphp/Sourcephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atom
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php php php implementsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterface
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Writerphp_Entryphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(Zendphp_Feedphp_Writerphp_Entryphp php$containerphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp atomphp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atom
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$entryphp php=php php$thisphp-php>php_domphp-php>createElementNSphp(Zendphp_Feedphp_Writerphp:php:NAMESPACEphp_ATOMphp_php1php0php,php php'entryphp'php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$entryphp)php;

php php php php php php php php php$thisphp-php>php_setSourcephp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setTitlephp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDescriptionphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDateCreatedphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDateModifiedphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setLinkphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setIdphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setEnclosurephp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setContentphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setCategoriesphp(php$thisphp-php>php_domphp,php php$entryphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$extphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setRootElementphp(php$thisphp-php>getRootElementphp(php)php)php;
php php php php php php php php php php php php php$extphp-php>setDomDocumentphp(php$thisphp-php>getDomDocumentphp(php)php,php php$entryphp)php;
php php php php php php php php php php php php php$extphp-php>renderphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp title
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setTitlephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php entryphp elementsphp MUSTphp containphp exactlyphp onephp'
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
php php php php php php php php php$titlephp-php>setAttributephp(php'typephp'php,php php'htmlphp'php)php;
php php php php php php php php php$cdataphp php=php php$domphp-php>createCDATASectionphp(php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$cdataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp description
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDescriptionphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php php{
php php php php php php php php php php php php returnphp;php php/php/php unlessphp srcphp contentphp orphp basephp6php4
php php php php php php php php php}
php php php php php php php php php$subtitlephp php=php php$domphp-php>createElementphp(php'summaryphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$subtitlephp)php;
php php php php php php php php php$subtitlephp-php>setAttributephp(php'typephp'php,php php'htmlphp'php)php;
php php php php php php php php php$cdataphp php=php php$domphp-php>createCDATASectionphp(
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)
php php php php php php php php php)php;
php php php php php php php php php$subtitlephp-php>appendChildphp(php$cdataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp entryphp wasphp modified
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDateModifiedphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php entryphp elementsphp MUSTphp containphp exactlyphp onephp'
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
php php php php php php*php Setphp datephp entryphp wasphp created
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDateCreatedphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateCreatedphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'publishedphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDateCreatedphp(php)php-php>getphp(Zendphp_Datephp:php:ISOphp_php8php6php0php1php)
php php php php php php php php php)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp authors
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setAuthorsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>php_containerphp-php>getAuthorsphp(php)php;
php php php php php php php php ifphp php(php(php!php$authorsphp php|php|php emptyphp(php$authorsphp)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Thisphp willphp actuallyphp triggerphp anphp Exceptionphp atphp thephp feedphp levelphp if
php php php php php php php php php php php php php php*php aphp feedphp levelphp authorphp isphp notphp setphp.
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
php php php php php php*php Setphp entryphp enclosure
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setEnclosurephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>php_containerphp-php>getEnclosurephp(php)php;
php php php php php php php php ifphp php(php(php!php$dataphp php|php|php emptyphp(php$dataphp)php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$enclosurephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php$enclosurephp-php>setAttributephp(php'relphp'php,php php'enclosurephp'php)php;
php php php php php php php php ifphp php(issetphp(php$dataphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php$enclosurephp-php>setAttributephp(php'typephp'php,php php$dataphp[php'typephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'lengthphp'php]php)php)php php{
php php php php php php php php php php php php php$enclosurephp-php>setAttributephp(php'lengthphp'php,php php$dataphp[php'lengthphp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$enclosurephp-php>setAttributephp(php'hrefphp'php,php php$dataphp[php'uriphp'php]php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$enclosurephp)php;
php php php php php}

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
php php php php php php*php Setphp entryphp identifier
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
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php entryphp elementsphp MUSTphp containphp exactlyphp onephp php'
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
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php php&php&
php php php php php php php php php!pregphp_matchphp(php"php#php^urnphp:php[aphp-zAphp-Zphp0php-php9php]php[aphp-zAphp-Zphp0php-php9php\php-php]php{php1php,php3php1php}php:php(php[aphp-zAphp-Zphp0php-php9php\php(php\php)php\php+php\php,php\php.php\php:php\php=php\php@php\php;php\php$php\php_php\php!php\php*php\php-php]php|php%php[php0php-php9aphp-fAphp-Fphp]php{php2php}php)php*php#php"php,
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)
php php php php php php php php php)php php&php&php php!php$thisphp-php>php_validateTagUriphp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Atomphp php1php.php0php IDsphp mustphp bephp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$idphp php=php php$domphp-php>createElementphp(php'idphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$idphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php;
php php php php php php php php php$idphp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp URIphp usingphp thephp tagphp schemephp php(RFCphp php4php1php5php1php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_validateTagUriphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^tagphp:php(php?php<namephp>php.php*php)php,php(php?php<datephp>php\dphp{php4php}php-php?php\dphp{php0php,php2php}php-php?php\dphp{php0php,php2php}php)php:php(php?php<specificphp>php.php*php)php(php.php*php:php)php*php$php/php'php,php php$idphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$dvalidphp php=php falsephp;
php php php php php php php php php php php php php$nvalidphp php=php falsephp;
php php php php php php php php php php php php php$datephp php=php php$matchesphp[php'datephp'php]php;
php php php php php php php php php php php php php$dphp6php php=php strtotimephp(php$datephp)php;
php php php php php php php php php php php php ifphp php(php(strlenphp(php$datephp)php php=php=php php4php)php php&php&php php$datephp <php=php datephp(php'Yphp'php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}php elseifphp php(php(strlenphp(php$datephp)php php=php=php php7php)php php&php&php php(php$dphp6php <php strtotimephp(php"nowphp"php)php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}php elseifphp php(php(strlenphp(php$datephp)php php=php=php php1php0php)php php&php&php php(php$dphp6php <php strtotimephp(php"nowphp"php)php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$validatorphp php=php newphp Zendphp_Validatephp_EmailAddressphp;
php php php php php php php php php php php php ifphp php(php$validatorphp-php>isValidphp(php$matchesphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$nvalidphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$nvalidphp php=php php$validatorphp-php>isValidphp(php'infophp@php'php php.php php$matchesphp[php'namephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$dvalidphp php&php&php php$nvalidphp;

php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp content
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setContentphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$contentphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getContentphp(php)php;
php php php php php php php php ifphp php(php!php$contentphp php&php&php php!php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'Atomphp php1php.php0php entryphp elementsphp MUSTphp containphp exactlyphp onephp php'
php php php php php php php php php php php php php.php php'atomphp:contentphp elementphp,php orphp asphp anphp alternativephp,php atphp leastphp onephp linkphp php'
php php php php php php php php php php php php php.php php'withphp aphp relphp attributephp ofphp php"alternatephp"php tophp indicatephp anphp alternatephp php'
php php php php php php php php php php php php php.php php'methodphp tophp consumephp thephp contentphp.php'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$contentphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php'contentphp'php)php;
php php php php php php php php php$elementphp-php>setAttributephp(php'typephp'php,php php'xhtmlphp'php)php;
php php php php php php php php php$xhtmlElementphp php=php php$thisphp-php>php_loadXhtmlphp(php$contentphp)php;
php php php php php php php php php$xhtmlphp php=php php$domphp-php>importNodephp(php$xhtmlElementphp,php truephp)php;
php php php php php php php php php$elementphp-php>appendChildphp(php$xhtmlphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp HTMLphp stringphp andphp attemptphp tophp normalisephp tophp XML
php php php php php php*php/
php php php php protectedphp functionphp php_loadXhtmlphp(php$contentphp)
php php php php php{
php php php php php php php php php$xhtmlphp php=php php'php'php;
php php php php php php php php ifphp php(classphp_existsphp(php'tidyphp'php,php falsephp)php)php php{
php php php php php php php php php php php php php$tidyphp php=php newphp tidyphp;
php php php php php php php php php php php php php$configphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'outputphp-xhtmlphp'php php=php>php truephp,
php php php php php php php php php php php php php php php php php'showphp-bodyphp-onlyphp'php php=php>php truephp,
php php php php php php php php php php php php php php php php php'quotephp-nbspphp'php php=php>php false
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$encodingphp php=php strphp_replacephp(php'php-php'php,php php'php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php$tidyphp-php>parseStringphp(php$contentphp,php php$configphp,php php$encodingphp)php;
php php php php php php php php php php php php php$tidyphp-php>cleanRepairphp(php)php;
php php php php php php php php php php php php php$xhtmlphp php=php php(stringphp)php php$tidyphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xhtmlphp php=php php$contentphp;
php php php php php php php php php}
php php php php php php php php php$xhtmlphp php=php pregphp_replacephp(arrayphp(
php php php php php php php php php php php php php"php/php(<php[php\php/php]php?php)php(php[aphp-zAphp-Zphp]php+php)php/php"
php php php php php php php php php)php,php php'php$php1xhtmlphp:php$php2php'php,php php$xhtmlphp)php;
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php'php<xhtmlphp:divphp xmlnsphp:xhtmlphp=php"httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/xhtmlphp"php>php'
php php php php php php php php php php php php php.php php$xhtmlphp php.php php'<php/xhtmlphp:divphp>php'php)php;
php php php php php php php php returnphp php$domphp-php>documentElementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp cateories
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

php php php php php/php*php*
php php php php php php*php Appendphp Sourcephp elementphp php(Atomphp php1php.php0php Feedphp Metadataphp)
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setSourcephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$sourcephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getSourcephp(php)php;
php php php php php php php php ifphp php(php!php$sourcephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$rendererphp php=php newphp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atomphp_Sourcephp(php$sourcephp)php;
php php php php php php php php php$rendererphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php$elementphp php=php php$rendererphp-php>renderphp(php)php-php>getElementphp(php)php;
php php php php php php php php php$importedphp php=php php$domphp-php>importNodephp(php$elementphp,php truephp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$importedphp)php;
php php php php php}
php}
