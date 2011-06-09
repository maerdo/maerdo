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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php NameTreephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;


php/php*php*
php php*php PDFphp namephp treephp representationphp class
php php*
php php*php php@todophp implementphp lazyphp resourcephp loadingphp sophp resourcesphp willphp bephp reallyphp loadedphp atphp accessphp time
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_NameTreephp implementsphp ArrayAccessphp,php Iteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Elements
php php php php php php*php Arrayphp ofphp namephp php=php>php objectphp treephp entries
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_itemsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp php$rootDictionaryphp rootphp ofphp namephp dictionary
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$rootDictionaryphp)
php php php php php{
php php php php php php php php ifphp php(php$rootDictionaryphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Namephp treephp rootphp mustphp bephp aphp dictionaryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$intermediateNodesphp php=php arrayphp(php)php;
php php php php php php php php php$leafNodesphp php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$rootDictionaryphp-php>Kidsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$intermediateNodesphp[php]php php=php php$rootDictionaryphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$leafNodesphp[php]php php=php php$rootDictionaryphp;
php php php php php php php php php}

php php php php php php php php whilephp php(countphp(php$intermediateNodesphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$newIntermediateNodesphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$intermediateNodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$nodephp-php>Kidsphp-php>itemsphp asphp php$childNodephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$childNodephp-php>Kidsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$newIntermediateNodesphp[php]php php=php php$childNodephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$leafNodesphp[php]php php=php php$childNodephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$intermediateNodesphp php=php php$newIntermediateNodesphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$leafNodesphp asphp php$leafNodephp)php php{
php php php php php php php php php php php php php$destinationsCountphp php=php countphp(php$leafNodephp-php>Namesphp-php>itemsphp)php/php2php;
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$destinationsCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_itemsphp[php$leafNodephp-php>Namesphp-php>itemsphp[php$countphp*php2php]php-php>valuephp]php php=php php$leafNodephp-php>Namesphp-php>itemsphp[php$countphp*php2php php+php php1php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_itemsphp)php;
php php php php php}


php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_itemsphp)php;
php php php php php}


php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_itemsphp)php;
php php php php php}


php php php php publicphp functionphp validphp(php)php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_itemsphp)php!php=php=falsephp;
php php php php php}


php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_itemsphp)php;
php php php php php}


php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$offsetphp,php php$thisphp-php>php_itemsphp)php;
php php php php php}


php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_itemsphp[php$offsetphp]php;
php php php php php}


php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$offsetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_itemsphp[php]php php php php php php php php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_itemsphp[php$offsetphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}


php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_itemsphp[php$offsetphp]php)php;
php php php php php}


php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_itemsphp php=php arrayphp(php)php;
php php php php php}

php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_itemsphp)php;
php php php php php}
php}
