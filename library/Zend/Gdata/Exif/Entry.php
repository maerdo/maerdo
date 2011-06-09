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
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Exif
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Entryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Exif
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Exifphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Exifphp_Extensionphp_Tags
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Exifphp/Extensionphp/Tagsphp.phpphp'php;

php/php*php*
php php*php Anphp Atomphp entryphp containingphp EXIFphp metadataphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Exif
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Gdataphp_Exifphp_Entryphp extendsphp Zendphp_Gdataphp_Entry
php{
php php php php php/php*php*
php php php php php php*php Thephp classnamephp forphp individualphp feedphp elementsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_entryClassNamephp php=php php'Zendphp_Gdataphp_Exifphp_Entryphp'php;

php php php php php/php*php*
php php php php php php*php Thephp tagsphp thatphp belongphp tophp thephp Exifphp groupphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp DOMElementphp php$elementphp php(optionalphp)php DOMElementphp fromphp whichphp this
php php php php php php*php php php php php php php php php php objectphp shouldphp bephp constructedphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>registerAllNamespacesphp(Zendphp_Gdataphp_Exifphp:php:php$namespacesphp)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$elementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp aphp DOMElementphp whichphp correspondsphp tophp thisphp elementphp andphp all
php php php php php php*php childphp propertiesphp.php php Thisphp isphp usedphp tophp buildphp anphp entryphp backphp intophp aphp DOM
php php php php php php*php andphp eventuallyphp XMLphp textphp forphp sendingphp tophp thephp serverphp uponphp updatesphp,php or
php php php php php php*php forphp applicationphp storagephp/persistencephp.
php php php php php php*
php php php php php php*php php@paramphp DOMDocumentphp php$docphp Thephp DOMDocumentphp usedphp tophp constructphp DOMElements
php php php php php php*php php@returnphp DOMElementphp Thephp DOMElementphp representingphp thisphp elementphp andphp all
php php php php php php*php childphp propertiesphp.
php php php php php php*php/
php php php php publicphp functionphp getDOMphp(php$docphp php=php nullphp,php php$majorVersionphp php=php php1php,php php$minorVersionphp php=php nullphp)
php php php php php{
php php php php php php php php php$elementphp php=php parentphp:php:getDOMphp(php$docphp,php php$majorVersionphp,php php$minorVersionphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_tagsphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$thisphp-php>php_tagsphp-php>getDOMphp(php$elementphp-php>ownerDocumentphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$elementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp individualphp Entryphp objectsphp ofphp thephp appropriatephp typephp and
php php php php php php*php storesphp themphp asphp membersphp ofphp thisphp entryphp basedphp uponphp DOMphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp DOMNodephp php$childphp Thephp DOMNodephp tophp process
php php php php php php*php/
php php php php protectedphp functionphp takeChildFromDOMphp(php$childphp)
php php php php php{
php php php php php php php php php$absoluteNodeNamephp php=php php$childphp-php>namespaceURIphp php.php php'php:php'php php.php php$childphp-php>localNamephp;
php php php php php php php php switchphp php(php$absoluteNodeNamephp)php php{
php php php php php php php php casephp php$thisphp-php>lookupNamespacephp(php'exifphp'php)php php.php php'php:php'php php.php php'tagsphp'php:
php php php php php php php php php php php php php$tagsphp php=php newphp Zendphp_Gdataphp_Exifphp_Extensionphp_Tagsphp(php)php;
php php php php php php php php php php php php php$tagsphp-php>transferFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php$thisphp-php>php_tagsphp php=php php$tagsphp;
php php php php php php php php php php php php breakphp;
php php php php php php php php defaultphp:
php php php php php php php php php php php php parentphp:php:takeChildFromDOMphp(php$childphp)php;
php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp tagsphp forphp thisphp entryphp.
php php php php php php*
php php php php php php*php php@seephp setTags
php php php php php php*php php@returnphp Zendphp_Gdataphp_Exifphp_Extensionphp_Tagsphp Thephp requestedphp object
php php php php php php*php php php php php php php php php php php php php php orphp nullphp ifphp notphp setphp.
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp tagsphp propertyphp forphp thisphp entryphp.php Thisphp propertyphp contains
php php php php php php*php variousphp Exifphp dataphp.
php php php php php php*
php php php php php php*php Thisphp correspondsphp tophp thephp php<exifphp:tagsphp>php propertyphp inphp thephp Googlephp Data
php php php php php php*php protocolphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Gdataphp_Exifphp_Extensionphp_Tagsphp php$valuephp Thephp desiredphp value
php php php php php php*php php php php php php php php php php php php php php thisphp elementphp,php orphp nullphp tophp unsetphp.
php php php php php php*php php@returnphp Zendphp_Gdataphp_Exifphp_Entryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTagsphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
