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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Weightphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Calculatephp queryphp weightsphp andphp buildphp queryphp scorersphp.
php php*
php php*php Aphp Weightphp isphp constructedphp byphp aphp queryphp Queryphp-php>createWeightphp(php)php.
php php*php Thephp sumOfSquaredWeightsphp(php)php methodphp isphp thenphp calledphp onphp thephp topphp-level
php php*php queryphp tophp computephp thephp queryphp normalizationphp factorphp Similarityphp-php>queryNormphp(floatphp)php.
php php*php Thisphp factorphp isphp thenphp passedphp tophp normalizephp(floatphp)php.php php Atphp thisphp pointphp thephp weighting
php php*php isphp completephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php{
php php php php php/php*php*
php php php php php php*php Normalizationphp factorphp.
php php php php php php*php Thisphp valuephp isphp storedphp onlyphp forphp queryphp expanationphp purposephp andphp notphp usedphp inphp anyphp otherphp place
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_queryNormphp;

php php php php php/php*php*
php php php php php php*php Weightphp value
php php php php php php*
php php php php php php*php Weightphp valuephp mayphp bephp initializedphp inphp sumOfSquaredWeightsphp(php)php orphp normalizephp(php)
php php php php php php*php becausephp theyphp bothphp arephp invokedphp eitherphp inphp Queryphp:php:php_initWeightphp php(forphp topphp-levelphp queryphp)php or
php php php php php php*php inphp correspondingphp methodsphp ofphp parentphp queryphp'sphp weights
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_valuephp;


php php php php php/php*php*
php php php php php php*php Thephp weightphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Thephp sumphp ofphp squaredphp weightsphp ofphp containedphp queryphp clausesphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php abstractphp publicphp functionphp sumOfSquaredWeightsphp(php)php;

php php php php php/php*php*
php php php php php php*php Assignsphp thephp queryphp normalizationphp factorphp tophp thisphp.
php php php php php php*
php php php php php php*php php@paramphp php$norm
php php php php php php*php/
php php php php abstractphp publicphp functionphp normalizephp(php$normphp)php;
php}

