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
php php*php php@subpackagephp Calendar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Selectedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Extension
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Extensionphp.phpphp'php;

php/php*php*
php php*php Representsphp thephp gCalphp:selectedphp elementphp usedphp byphp thephp Calendarphp dataphp API
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Calendar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Selectedphp extendsphp Zendphp_Gdataphp_Extension
php{

php php php php protectedphp php$php_rootNamespacephp php=php php'gCalphp'php;
php php php php protectedphp php$php_rootElementphp php=php php'selectedphp'php;
php php php php protectedphp php$php_valuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Selectedphp objectphp.
php php php php php php*php php@paramphp boolphp php$valuephp php(optionalphp)php Thephp valuephp ofphp thephp elementphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>registerAllNamespacesphp(Zendphp_Gdataphp_Calendarphp:php:php$namespacesphp)php;
php php php php php php php php parentphp:php:php_php_constructphp(php)php;
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
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
php php php php php php php php ifphp php(php$thisphp-php>php_valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'valuephp'php,php php(php$thisphp-php>php_valuephp php?php php"truephp"php php:php php"falsephp"php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$elementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givenphp aphp DOMNodephp representingphp anphp attributephp,php triesphp tophp mapphp thephp dataphp into
php php php php php php*php instancephp membersphp.php php Ifphp nophp mappingphp isphp definedphp,php thephp namephp andphp valuephp are
php php php php php php*php storedphp inphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp DOMNodephp php$attributephp Thephp DOMNodephp attributephp neededphp tophp bephp handled
php php php php php php*php/
php php php php protectedphp functionphp takeAttributeFromDOMphp(php$attributephp)
php php php php php{
php php php php php php php php switchphp php(php$attributephp-php>localNamephp)php php{
php php php php php php php php casephp php'valuephp'php:
php php php php php php php php php php php php ifphp php(php$attributephp-php>nodeValuephp php=php=php php"truephp"php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp ifphp php(php$attributephp-php>nodeValuephp php=php=php php"falsephp"php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Gdataphp/Appphp/InvalidArgumentExceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Gdataphp_Appphp_InvalidArgumentExceptionphp(php"Expectedphp php'truephp'php orphp php'falsephp'php forphp gCalphp:selectedphp#valuephp.php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php breakphp;
php php php php php php php php defaultphp:
php php php php php php php php php php php php parentphp:php:takeAttributeFromDOMphp(php$attributephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp forphp thisphp elementphp'sphp valuephp attributephp.
php php php php php php*
php php php php php php*php php@returnphp boolphp Thephp valuephp associatedphp withphp thisphp attributephp.
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp valuephp forphp thisphp elementphp'sphp valuephp attributephp.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$valuephp Thephp desiredphp valuephp forphp thisphp attributephp.
php php php php php php*php php@returnphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Selectedphp Thephp elementphp beingphp modifiedphp.
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp toStringphp methodphp allowsphp usingphp thisphp directlyphp viaphp echo
php php php php php php*php Worksphp bestphp inphp PHPphp php>php=php php4php.php2php.php0
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php}
