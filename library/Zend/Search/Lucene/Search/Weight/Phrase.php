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


php/php*php*
php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Phrasephp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php{
php php php php php/php*php*
php php php php php php*php IndexReaderphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Interface
php php php php php php*php/
php php php php privatephp php$php_readerphp;

php php php php php/php*php*
php php php php php php*php Thephp queryphp thatphp thisphp concernsphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrase
php php php php php php*php/
php php php php privatephp php$php_queryphp;

php php php php php/php*php*
php php php php php php*php Scorephp factor
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php privatephp php$php_idfphp;

php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Phrasephp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrasephp php$query
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php php php php php php php php php php php$reader
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrasephp php$queryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Interfacephp php php php php php php php php php php php$readerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryphp php php=php php$queryphp;
php php php php php php php php php$thisphp-php>php_readerphp php=php php$readerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Thephp sumphp ofphp squaredphp weightsphp ofphp containedphp queryphp clausesphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp sumOfSquaredWeightsphp(php)
php php php php php{
php php php php php php php php php/php/php computephp idf
php php php php php php php php php$thisphp-php>php_idfphp php=php php$thisphp-php>php_readerphp-php>getSimilarityphp(php)php-php>idfphp(php$thisphp-php>php_queryphp-php>getTermsphp(php)php,php php$thisphp-php>php_readerphp)php;

php php php php php php php php php/php/php computephp queryphp weight
php php php php php php php php php$thisphp-php>php_queryWeightphp php=php php$thisphp-php>php_idfphp php*php php$thisphp-php>php_queryphp-php>getBoostphp(php)php;

php php php php php php php php php/php/php squarephp it
php php php php php php php php returnphp php$thisphp-php>php_queryWeightphp php*php php$thisphp-php>php_queryWeightphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Assignsphp thephp queryphp normalizationphp factorphp tophp thisphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$queryNorm
php php php php php php*php/
php php php php publicphp functionphp normalizephp(php$queryNormphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryNormphp php=php php$queryNormphp;

php php php php php php php php php/php/php normalizephp queryphp weight
php php php php php php php php php$thisphp-php>php_queryWeightphp php*php=php php$queryNormphp;

php php php php php php php php php/php/php idfphp forphp documents
php php php php php php php php php$thisphp-php>php_valuephp php=php php$thisphp-php>php_queryWeightphp php*php php$thisphp-php>php_idfphp;
php php php php php}
php}


