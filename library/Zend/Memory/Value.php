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
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Valuephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Stringphp valuephp object
php php*
php php*php Itphp'sphp anphp OOphp stringphp wrapperphp.
php php*php Usedphp tophp interceptphp stringphp updatesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@todophp php php php php php php alsophp implementphp Countablephp forphp PHPphp php5php.php1php butphp notphp yetphp tophp stayphp php5php.php0php compatible
php php*php/
classphp Zendphp_Memoryphp_Valuephp implementsphp ArrayAccessphp php{
php php php php php/php*php*
php php php php php php*php Value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_valuephp;

php php php php php/php*php*
php php php php php php*php Container
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Containerphp_Interface
php php php php php php*php/
php php php php privatephp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php Booleanphp flagphp whichphp signalsphp tophp tracephp valuephp modifications
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_tracephp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp Zendphp_Memoryphp_Containerphp_Movablephp php$container
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp,php Zendphp_Memoryphp_Containerphp_Movablephp php$containerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;

php php php php php php php php php$thisphp-php>php_valuephp php=php php(stringphp)php$valuephp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Objectphp isphp markedphp asphp justphp modifiedphp byphp memoryphp manager
php php php php php php php php php php*php Sophp wephp donphp'tphp needphp tophp tracephp followedphp objectphp modificationsphp and
php php php php php php php php php php*php objectphp isphp processedphp php(andphp markedphp asphp tracedphp)php whenphp another
php php php php php php php php php php*php memoryphp objectphp isphp modifiedphp.
php php php php php php php php php php*
php php php php php php php php php php*php Itphp reducesphp overallphp numberrphp ofphp callsphp necessaryphp tophp modificationphp trace
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_tracephp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php ArrayAccessphp interfacephp method
php php php php php php*php returnsphp truephp ifphp stringphp offsetphp exists
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$offsetphp php>php=php php0php php php&php&php php php$offsetphp <php strlenphp(php$thisphp-php>php_valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp interfacephp method
php php php php php php*php Getphp characterphp atphp php$offsetphp position
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp[php$offsetphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp interfacephp method
php php php php php php*php Setphp characterphp atphp php$offsetphp position
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp stringphp php$char
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$charphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp[php$offsetphp]php php=php php$charphp;

php php php php php php php php ifphp php(php$thisphp-php>php_tracephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tracephp php=php falsephp;
php php php php php php php php php php php php php$thisphp-php>php_containerphp-php>processUpdatephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp interfacephp method
php php php php php php*php Unsetphp characterphp atphp php$offsetphp position
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_valuephp[php$offsetphp]php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_tracephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tracephp php=php falsephp;
php php php php php php php php php php php php php$thisphp-php>php_containerphp-php>processUpdatephp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Tophp stringphp conversion
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp stringphp valuephp reference
php php php php php php*
php php php php php php*php php_Mustphp_php bephp usedphp forphp valuephp accessphp beforephp PHPphp vphp php5php.php2
php php php php php php*php orphp php_mayphp_php bephp usedphp forphp performancephp considerations
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php&getRefphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp modificationsphp trace
php php php php php php*
php php php php php php*php php_Mustphp_php bephp usedphp forphp valuephp accessphp beforephp PHPphp vphp php5php.php2
php php php php php php*php orphp php_mayphp_php bephp usedphp forphp performancephp considerations
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp startTracephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tracephp php=php truephp;
php php php php php}
php}
