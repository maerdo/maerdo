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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Anphp entryphp ofphp aphp customphp buildphp feed
php php*
php php*php Classesphp implementingphp thephp Zendphp_Feedphp_Builderphp_Interfacephp interface
php php*php usesphp thisphp classphp tophp describephp anphp entryphp ofphp aphp feed
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Builderphp_Entryphp extendsphp ArrayObject
php{
php php php php php/php*php*
php php php php php php*php Createphp aphp newphp builderphp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$title
php php php php php php*php php@paramphp php stringphp php$link
php php php php php php*php php@paramphp php stringphp php$descriptionphp shortphp versionphp ofphp thephp entryphp,php nophp html
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$titlephp,php php$linkphp,php php$descriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'titlephp'php,php php$titlephp)php;
php php php php php php php php php$thisphp-php>offsetSetphp(php'linkphp'php,php php$linkphp)php;
php php php php php php php php php$thisphp-php>offsetSetphp(php'descriptionphp'php,php php$descriptionphp)php;
php php php php php php php php php$thisphp-php>setLastUpdatephp(timephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp onlyphp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp propertyphp tophp read
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>offsetGetphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp namephp ofphp thephp propertyphp tophp set
php php php php php php*php php@paramphp php mixedphp php$valuephp valuephp tophp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Issetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>offsetExistsphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$keyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>offsetUnsetphp(php$keyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp authorphp ofphp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$author
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setAuthorphp(php$authorphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'authorphp'php,php php$authorphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp idphp/guidphp ofphp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'guidphp'php,php php$idphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp fullphp htmlphp contentphp ofphp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setContentphp(php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'contentphp'php,php php$contentphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Timestampphp ofphp thephp updatephp date
php php php php php php*
php php php php php php*php php@paramphp php intphp php$lastUpdate
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setLastUpdatephp(php$lastUpdatephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'lastUpdatephp'php,php php$lastUpdatephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp urlphp ofphp thephp commentedphp pagephp associatedphp tophp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$comments
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setCommentsUrlphp(php$commentsphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'commentsphp'php,php php$commentsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp urlphp ofphp thephp commentsphp feedphp link
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$commentRss
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setCommentsRssUrlphp(php$commentRssphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'commentRssphp'php,php php$commentRssphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definesphp aphp referencephp tophp thephp originalphp source
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$title
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setSourcephp(php$titlephp,php php$urlphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'sourcephp'php,php arrayphp(php'titlephp'php php=php>php php$titlephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'urlphp'php php=php>php php$urlphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp categoriesphp ofphp thephp entry
php php php php php php*php Formatphp ofphp thephp arrayphp:
php php php php php php*php php<codephp>
php php php php php php*php arrayphp(
php php php php php php*php php php arrayphp(
php php php php php php*php php php php php php php php php php'termphp'php php=php>php php'firstphp categoryphp labelphp'php,
php php php php php php*php php php php php php php php php php'schemephp'php php=php>php php'urlphp thatphp identifiesphp aphp categorizationphp schemephp'php php/php/php optional
php php php php php php*php php php php php php php php php)php,
php php php php php php*php php php php/php/php secondphp categoryphp andphp sophp one
php php php php php php*php php)
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$categories
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp setCategoriesphp(arrayphp php$categoriesphp)
php php php php php{
php php php php php php php php foreachphp php(php$categoriesphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php$thisphp-php>addCategoryphp(php$categoryphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp categoryphp tophp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$categoryphp seephp Zendphp_Feedphp_Builderphp_Entryphp:php:setCategoriesphp(php)php forphp format
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp addCategoryphp(arrayphp php$categoryphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$categoryphp[php'termphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp definephp thephp namephp ofphp thephp categoryphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php'categoryphp'php)php)php php{
php php php php php php php php php php php php php$categoriesphp php=php arrayphp(php$categoryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$categoriesphp php=php php$thisphp-php>offsetGetphp(php'categoryphp'php)php;
php php php php php php php php php php php php php$categoriesphp[php]php php=php php$categoryphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'categoryphp'php,php php$categoriesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp enclosuresphp ofphp thephp entry
php php php php php php*php Formatphp ofphp thephp arrayphp:
php php php php php php*php php<codephp>
php php php php php php*php arrayphp(
php php php php php php*php php php arrayphp(
php php php php php php*php php php php php php php php php php'urlphp'php php=php>php php'urlphp ofphp thephp linkedphp enclosurephp'php,
php php php php php php*php php php php php php php php php php'typephp'php php=php>php php'mimephp typephp ofphp thephp enclosurephp'php php/php/php optional
php php php php php php*php php php php php php php php php php'lengthphp'php php=php>php php'lengthphp ofphp thephp linkedphp contentphp inphp octetsphp'php php/php/php optional
php php php php php php*php php php php php php php php php)php,
php php php php php php*php php php php/php/php secondphp enclosurephp andphp sophp one
php php php php php php*php php)
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$enclosures
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setEnclosuresphp(arrayphp php$enclosuresphp)
php php php php php{
php php php php php php php php foreachphp php(php$enclosuresphp asphp php$enclosurephp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$enclosurephp[php'urlphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp supplyphp anphp urlphp forphp yourphp enclosurephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$typephp php=php issetphp(php$enclosurephp[php'typephp'php]php)php php?php php$enclosurephp[php'typephp'php]php php:php php'php'php;
php php php php php php php php php php php php php$lengthphp php=php issetphp(php$enclosurephp[php'lengthphp'php]php)php php?php php$enclosurephp[php'lengthphp'php]php php:php php'php'php;
php php php php php php php php php php php php php$thisphp-php>addEnclosurephp(php$enclosurephp[php'urlphp'php]php,php php$typephp,php php$lengthphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp enclosurephp tophp thephp entry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$length
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp addEnclosurephp(php$urlphp,php php$typephp php=php php'php'php,php php$lengthphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php'enclosurephp'php)php)php php{
php php php php php php php php php php php php php$enclosurephp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$enclosurephp php=php php$thisphp-php>offsetGetphp(php'enclosurephp'php)php;
php php php php php php php php php}
php php php php php php php php php$enclosurephp[php]php php=php arrayphp(php'urlphp'php php=php>php php$urlphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$typephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'lengthphp'php php=php>php php$lengthphp)php;
php php php php php php php php php$thisphp-php>offsetSetphp(php'enclosurephp'php,php php$enclosurephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
