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
php php*php php@versionphp php php php php$Idphp:php Phrasephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Phrasephp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntry
php{
php php php php php/php*php*
php php php php php php*php Phrasephp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_phrasephp;

php php php php php/php*php*
php php php php php php*php Field
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php privatephp php$php_fieldphp;


php php php php php/php*php*
php php php php php php*php Proximityphp phrasephp query
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_proximityQueryphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Wordsphp distancephp,php usedphp forphp proximitiphp queries
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_wordsDistancephp php=php php0php;


php php php php php/php*php*
php php php php php php*php Objectphp constractor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$phrase
php php php php php php*php php@paramphp stringphp php$field
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$phrasephp,php php$fieldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_phrasephp php=php php$phrasephp;
php php php php php php php php php$thisphp-php>php_fieldphp php php=php php$fieldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp modifierphp php(php'php~php'php)
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$parameter
php php php php php php*php/
php php php php publicphp functionphp processFuzzyProximityModifierphp(php$parameterphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_proximityQueryphp php=php truephp;

php php php php php php php php ifphp php(php$parameterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_wordsDistancephp php=php php$parameterphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp entryphp tophp aphp subquery
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp getQueryphp(php$encodingphp)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Phrasephp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Preprocessingphp/Phrasephp.phpphp'php;
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Phrasephp(php$thisphp-php>php_phrasephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_fieldphp php!php=php=php nullphp)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php iconvphp(php$encodingphp,php php'UTFphp-php8php'php,php php$thisphp-php>php_fieldphp)php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_proximityQueryphp)php php{
php php php php php php php php php php php php php$queryphp-php>setSlopphp(php$thisphp-php>php_wordsDistancephp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>php_boostphp)php;

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}
