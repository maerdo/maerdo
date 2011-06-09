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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Decoratorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Decoratesphp aphp StrikeIronphp responsephp objectphp returnedphp byphp thephp SOAPphp extension
php php*php tophp providephp morephp aphp PHPphp-likephp interfacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_StrikeIronphp_Decorator
php{
php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp decoratedphp object
php php php php php php*php php@varphp nullphp|string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Objectphp tophp decorate
php php php php php php*php php@varphp object
php php php php php php*php/
php php php php protectedphp php$php_objectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp objectphp php php php php php php php$objectphp php Objectphp tophp decorate
php php php php php php*php php@paramphp nullphp|stringphp php php$namephp php php php Namephp ofphp thephp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$objectphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectphp php=php php$objectphp;
php php php php php php php php php$thisphp-php>php_namephp php php php=php php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp propertyphp accessphp tophp thephp decoratedphp objectphp,php inflecting
php php php php php php*php thephp propertyphp namephp andphp decoratingphp anyphp childphp objectsphp returnedphp.
php php php php php php*php Ifphp thephp propertyphp isphp notphp foundphp inphp thephp decoratedphp objectphp,php return
php php php php php php*php NULLphp asphp aphp conveniencephp featurephp tophp avoidphp noticesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$propertyphp php Propertyphp namephp tophp retrieve
php php php php php php*php php@returnphp mixedphp php php php php php php php php php php php php Valuephp ofphp propertyphp orphp NULL
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php php$resultphp php=php nullphp;

php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_objectphp-php>php$propertyphp)php)php php{
php php php php php php php php php php php php php$propertyphp php=php php$thisphp-php>php_inflectphp(php$propertyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_objectphp-php>php$propertyphp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_objectphp-php>php$propertyphp;
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_decoratephp(php$resultphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp methodphp callsphp tophp thephp decoratedphp objectphp.php php Thisphp willphp only
php php php php php php*php bephp usedphp whenphp thephp SOAPClientphp returnsphp aphp customphp PHPphp objectphp via
php php php php php php*php itsphp classmapphp optionphp sophp nophp inflectionphp isphp donephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$methodphp php Namephp ofphp methodphp called
php php php php php php*php php@paramphp arrayphp php php php$argsphp php php php Argumentsphp forphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_objectphp,php php$methodphp)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Inflectphp aphp propertyphp namephp fromphp PHPphp-stylephp tophp thephp resultphp objectphp's
php php php php php php*php stylephp.php php Thephp defaultphp implementationphp herephp onlyphp inflectsphp thephp case
php php php php php php*php ofphp thephp firstphp letterphp,php ephp.gphp.php fromphp php"fooBarphp"php tophp php"FooBarphp"php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$propertyphp php Propertyphp namephp tophp inflect
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php Inflectedphp propertyphp name
php php php php php php*php/
php php php php protectedphp functionphp php_inflectphp(php$propertyphp)
php php php php php{
php php php php php php php php returnphp ucfirstphp(php$propertyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decoratephp aphp valuephp returnedphp byphp thephp resultphp objectphp.php php Thephp default
php php php php php php*php implementationphp herephp onlyphp decoratesphp childphp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php$resultphp php Valuephp tophp decorate
php php php php php php*php php@returnphp mixedphp php php php php php php php php php php Decoratedphp result
php php php php php php*php/
php php php php protectedphp functionphp php_decoratephp(php$resultphp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$resultphp)php)php php{
php php php php php php php php php php php php php$resultphp php=php newphp selfphp(php$resultphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp objectphp beingphp decorated
php php php php php php*
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp getDecoratedObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp namephp ofphp thephp objectphp beingphp decorated
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getDecoratedObjectNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}
php}
