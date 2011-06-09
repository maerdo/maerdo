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
php php*php php@versionphp php php php php$Idphp:php Defaultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Similarityphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp_Defaultphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Similarity
php{

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'php1php/sqrtphp(numTermsphp)php'php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@paramphp integerphp php$numTerms
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp lengthNormphp(php$fieldNamephp,php php$numTermsphp)
php php php php php{
php php php php php php php php ifphp php(php$numTermsphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php1Ephp1php0php;
php php php php php php php php php}

php php php php php php php php returnphp php1php.php0php/sqrtphp(php$numTermsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'php1php/sqrtphp(sumOfSquaredWeightsphp)php'php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$sumOfSquaredWeights
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp queryNormphp(php$sumOfSquaredWeightsphp)
php php php php php{
php php php php php php php php returnphp php1php.php0php/sqrtphp(php$sumOfSquaredWeightsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'sqrtphp(freqphp)php'php.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$freq
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp tfphp(php$freqphp)
php php php php php{
php php php php php php php php returnphp sqrtphp(php$freqphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'php1php/php(distancephp php+php php1php)php'php.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$distance
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp sloppyFreqphp(php$distancephp)
php php php php php{
php php php php php php php php returnphp php1php.php0php/php(php$distancephp php+php php1php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'logphp(numDocsphp/php(docFreqphp+php1php)php)php php+php php1php'php.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docFreq
php php php php php php*php php@paramphp integerphp php$numDocs
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp idfFreqphp(php$docFreqphp,php php$numDocsphp)
php php php php php{
php php php php php php php php returnphp logphp(php$numDocsphp/php(floatphp)php(php$docFreqphp+php1php)php)php php+php php1php.php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementedphp asphp php'overlapphp/maxOverlapphp'php.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$overlap
php php php php php php*php php@paramphp integerphp php$maxOverlap
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp coordphp(php$overlapphp,php php$maxOverlapphp)
php php php php php{
php php php php php php php php returnphp php$overlapphp/php(floatphp)php$maxOverlapphp;
php php php php php}
php}
