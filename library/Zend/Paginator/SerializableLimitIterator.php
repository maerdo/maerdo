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
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SerializableLimitIteratorphp.phpphp php2php3php1php8php9php php2php0php1php0php-php1php0php-php2php0php php1php8php:php5php5php:php3php2Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Paginatorphp_SerializableLimitIteratorphp extendsphp LimitIteratorphp implementsphp Serializablephp,php ArrayAccess
php{

php php php php php/php*php*
php php php php php php*php Offsetphp tophp firstphp element
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp php$php_offsetphp;

php php php php php/php*php*
php php php php php php*php Maximumphp numberphp ofphp elementsphp tophp showphp orphp php-php1php forphp all
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp php$php_countphp;

php php php php php/php*php*
php php php php php php*php Constructphp aphp Zendphp_Paginatorphp_SerializableLimitIterator
php php php php php php*
php php php php php php*php php@paramphp Iteratorphp php$itphp Iteratorphp tophp limitphp php(mustphp bephp serializablephp byphp unphp-php/serializephp)
php php php php php php*php php@paramphp intphp php$offsetphp Offsetphp tophp firstphp element
php php php php php php*php php@paramphp intphp php$countphp Maximumphp numberphp ofphp elementsphp tophp showphp orphp php-php1php forphp all
php php php php php php*php php@seephp LimitIteratorphp:php:php_php_construct
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(Iteratorphp php$itphp,php php$offsetphp=php0php,php php$countphp=php-php1php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$itphp,php php$offsetphp,php php$countphp)php;
php php php php php php php php php$thisphp-php>php_offsetphp php=php php$offsetphp;
php php php php php php php php php$thisphp-php>php_countphp php=php php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp stringphp representationphp ofphp thephp instance
php php php php php php*php/
php php php php publicphp functionphp serializephp(php)
php php php php php{
php php php php php php php php returnphp serializephp(arrayphp(
php php php php php php php php php php php php php'itphp'php php php php php php=php>php php$thisphp-php>getInnerIteratorphp(php)php,
php php php php php php php php php php php php php'offsetphp'php php=php>php php$thisphp-php>php_offsetphp,
php php php php php php php php php php php php php'countphp'php php php=php>php php$thisphp-php>php_countphp,
php php php php php php php php php php php php php'posphp'php php php php php=php>php php$thisphp-php>getPositionphp(php)php,
php php php php php php php php php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$dataphp representationphp ofphp thephp instance
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$dataphp)
php php php php php{
php php php php php php php php php$dataArrphp php=php unserializephp(php$dataphp)php;
php php php php php php php php php$thisphp-php>php_php_constructphp(php$dataArrphp[php'itphp'php]php,php php$dataArrphp[php'offsetphp'php]php,php php$dataArrphp[php'countphp'php]php)php;
php php php php php php php php php$thisphp-php>seekphp(php$dataArrphp[php'posphp'php]php+php$dataArrphp[php'offsetphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp valuephp ofphp thephp Iterator
php php php php php php*
php php php php php php*php php@paramphp intphp php$offset
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php php$currentOffsetphp php=php php$thisphp-php>keyphp(php)php;
php php php php php php php php php$thisphp-php>seekphp(php$offsetphp)php;
php php php php php php php php php$currentphp php=php php$thisphp-php>currentphp(php)php;
php php php php php php php php php$thisphp-php>seekphp(php$currentOffsetphp)php;
php php php php php php php php returnphp php$currentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp nothing
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp intphp php$offset
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp valuephp ofphp Iteratorphp isphp setphp andphp isphp notphp NULL
php php php php php php*
php php php php php php*php php@paramphp intphp php$offset
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(php$offsetphp php>php php0php php&php&php php$offsetphp <php php$thisphp-php>php_countphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$currentOffsetphp php=php php$thisphp-php>keyphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>seekphp(php$offsetphp)php;
php php php php php php php php php php php php php php php php php$currentphp php=php php$thisphp-php>currentphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>seekphp(php$currentOffsetphp)php;
php php php php php php php php php php php php php php php php returnphp nullphp php!php=php=php php$currentphp;
php php php php php php php php php php php php php}php catchphp php(OutOfBoundsExceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php resetphp positionphp inphp casephp ofphp exceptionphp isphp assignedphp null
php php php php php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>seekphp(php$currentOffsetphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp nothing
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp intphp php$offset
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php}
php}
