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

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Rss
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
php php php php php php*php Renderphp RSSphp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Rss
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$thisphp-php>php_domphp-php>substituteEntitiesphp php=php falsephp;
php php php php php php php php php$entryphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'itemphp'php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$entryphp)php;

php php php php php php php php php$thisphp-php>php_setTitlephp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDescriptionphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDateCreatedphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setDateModifiedphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setLinkphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setIdphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setEnclosurephp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setCommentLinkphp(php$thisphp-php>php_domphp,php php$entryphp)php;
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
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)
php php php php php php php php php&php&php php!php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php entryphp elementsphp SHOULDphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php titlephp elementphp butphp aphp titlephp hasphp notphp beenphp setphp.php Inphp additionphp,php therephp'
php php php php php php php php php php php php php.php php'php isphp nophp descriptionphp asphp requiredphp inphp thephp absencephp ofphp aphp titlephp.php'php;
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
php php php php php php*php Setphp entryphp description
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDescriptionphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)
php php php php php php php php php&php&php php!php$thisphp-php>getDataContainerphp(php)php-php>getTitlephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$messagephp php=php php'RSSphp php2php.php0php entryphp elementsphp SHOULDphp containphp exactlyphp onephp'
php php php php php php php php php php php php php.php php'php descriptionphp elementphp butphp aphp descriptionphp hasphp notphp beenphp setphp.php Inphp'
php php php php php php php php php php php php php.php php'php additionphp,php therephp isphp nophp titlephp elementphp asphp requiredphp inphp thephp absencephp'
php php php php php php php php php php php php php.php php'php ofphp aphp descriptionphp.php'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$subtitlephp php=php php$domphp-php>createElementphp(php'descriptionphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$subtitlephp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createCDATASectionphp(php$thisphp-php>getDataContainerphp(php)php-php>getDescriptionphp(php)php)php;
php php php php php php php php php$subtitlephp-php>appendChildphp(php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datephp entryphp wasphp lastphp modified
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
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
php php php php php php php php ifphp php(php!php$thisphp-php>getDataContainerphp(php)php-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setDateModifiedphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getDateCreatedphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}
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
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php'Enclosurephp php"typephp"php isphp notphp setphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php'lengthphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php'Enclosurephp php"lengthphp"php isphp notphp setphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'lengthphp'php]php)php php&php&php php(intphp)php php$dataphp[php'lengthphp'php]php <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Feedphp_Exceptionphp(php'Enclosurephp php"lengthphp"php mustphp bephp anphp integerphp'
php php php php php php php php php php php php php.php php'php indicatingphp thephp contentphp\php'sphp lengthphp inphp bytesphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_ignoreExceptionsphp)php php{
php php php php php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$exceptionphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$enclosurephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'enclosurephp'php)php;
php php php php php php php php php$enclosurephp-php>setAttributephp(php'typephp'php,php php$dataphp[php'typephp'php]php)php;
php php php php php php php php php$enclosurephp-php>setAttributephp(php'lengthphp'php,php php$dataphp[php'lengthphp'php]php)php;
php php php php php php php php php$enclosurephp-php>setAttributephp(php'urlphp'php,php php$dataphp[php'uriphp'php]php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$enclosurephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linkphp tophp entry
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
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php;
php php php php php php php php php$linkphp-php>appendChildphp(php$textphp)php;
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
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$idphp php=php php$domphp-php>createElementphp(php'guidphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$idphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>setIdphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getDataContainerphp(php)php-php>getLinkphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php;
php php php php php php php php php$idphp-php>appendChildphp(php$textphp)php;
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$thisphp-php>getDataContainerphp(php)php-php>getIdphp(php)php)php)php php{
php php php php php php php php php php php php php$idphp-php>setAttributephp(php'isPermaLinkphp'php,php php'falsephp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp linkphp tophp entryphp comments
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCommentLinkphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$linkphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getCommentLinkphp(php)php;
php php php php php php php php ifphp php(php!php$linkphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$clinkphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'commentsphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$linkphp)php;
php php php php php php php php php$clinkphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$clinkphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp categories
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
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createCDATASectionphp(php$catphp[php'termphp'php]php)php;
php php php php php php php php php php php php php$categoryphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$categoryphp)php;
php php php php php php php php php}
php php php php php}
php}
