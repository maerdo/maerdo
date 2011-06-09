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
php php*php php@versionphp php php php php$Idphp:php MultiTermphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_MultiTermphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
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
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php privatephp php$php_queryphp;

php php php php php/php*php*
php php php php php php*php Queryphp termsphp weights
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Term
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_weightsphp;


php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_MultiTermphp constructor
php php php php php php*php queryphp php-php thephp queryphp thatphp thisphp concernsphp.
php php php php php php*php readerphp php-php indexphp reader
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php$query
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php php php php$reader
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php$queryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Interfacephp php php php php$readerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryphp php php php=php php$queryphp;
php php php php php php php php php$thisphp-php>php_readerphp php php=php php$readerphp;
php php php php php php php php php$thisphp-php>php_weightsphp php=php arrayphp(php)php;

php php php php php php php php php$signsphp php=php php$queryphp-php>getSignsphp(php)php;

php php php php php php php php foreachphp php(php$queryphp-php>getTermsphp(php)php asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$signsphp php=php=php=php nullphp php|php|php php$signsphp[php$idphp]php php=php=php=php nullphp php|php|php php$signsphp[php$idphp]php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp/Termphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_weightsphp[php$idphp]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Termphp(php$termphp,php php$queryphp,php php$readerphp)php;
php php php php php php php php php php php php php php php php php$queryphp-php>setWeightphp(php$idphp,php php$thisphp-php>php_weightsphp[php$idphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Thephp weightphp forphp thisphp query
php php php php php php*php Standardphp Weightphp:php:php$php_valuephp isphp notphp usedphp forphp booleanphp queries
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_queryphp-php>getBoostphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Thephp sumphp ofphp squaredphp weightsphp ofphp containedphp queryphp clausesphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp sumOfSquaredWeightsphp(php)
php php php php php{
php php php php php php php php php$sumphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_weightsphp asphp php$weightphp)php php{
php php php php php php php php php php php php php/php/php sumphp subphp weights
php php php php php php php php php php php php php$sumphp php+php=php php$weightphp-php>sumOfSquaredWeightsphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php boostphp eachphp subphp-weight
php php php php php php php php php$sumphp php*php=php php$thisphp-php>php_queryphp-php>getBoostphp(php)php php*php php$thisphp-php>php_queryphp-php>getBoostphp(php)php;

php php php php php php php php php/php/php checkphp forphp emptyphp queryphp php(likephp php'php-somethingphp php-anotherphp'php)
php php php php php php php php ifphp php(php$sumphp php=php=php php0php)php php{
php php php php php php php php php php php php php$sumphp php=php php1php.php0php;
php php php php php php php php php}
php php php php php php php php returnphp php$sumphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Assignsphp thephp queryphp normalizationphp factorphp tophp thisphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$queryNorm
php php php php php php*php/
php php php php publicphp functionphp normalizephp(php$queryNormphp)
php php php php php{
php php php php php php php php php/php/php incorporatephp boost
php php php php php php php php php$queryNormphp php*php=php php$thisphp-php>php_queryphp-php>getBoostphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_weightsphp asphp php$weightphp)php php{
php php php php php php php php php php php php php$weightphp-php>normalizephp(php$queryNormphp)php;
php php php php php php php php php}
php php php php php}
php}


