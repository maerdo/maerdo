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


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{

php php php php php/php*php*
php php php php php php*php Termsphp tophp findphp.
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Termphp signsphp.
php php php php php php*php Ifphp truephp thenphp termphp isphp requiredphp.
php php php php php php*php Ifphp falsephp thenphp termphp isphp prohibitedphp.
php php php php php php*php Ifphp nullphp thenphp termphp isphp neitherphp prohibitedphp,php norphp required
php php php php php php*
php php php php php php*php Ifphp arrayphp isphp nullphp thenphp allphp termsphp arephp required
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_signsphp;

php php php php php/php*php*
php php php php php php*php Resultphp vectorphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_resVectorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Termsphp positionsphp vectorsphp.
php php php php php php*php Arrayphp ofphp Arraysphp:
php php php php php php*php termphp1Idphp php=php>php php(docIdphp php=php>php freqphp,php php.php.php.php)
php php php php php php*php termphp2Idphp php=php>php php(docIdphp php=php>php freqphp,php php.php.php.php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termsFreqsphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Aphp scorephp factorphp basedphp onphp thephp fractionphp ofphp allphp queryphp terms
php php php php php php*php thatphp aphp documentphp containsphp.
php php php php php php*php floatphp forphp conjunctionphp queries
php php php php php php*php arrayphp ofphp floatphp forphp nonphp conjunctionphp queries
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php privatephp php$php_coordphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Termsphp weights
php php php php php php*php arrayphp ofphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_weightsphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Createphp aphp newphp multiphp-termphp queryphp objectphp.
php php php php php php*
php php php php php php*php ifphp php$signsphp arrayphp isphp omittedphp thenphp allphp termsphp arephp required
php php php php php php*php itphp differsphp fromphp addTermphp(php)php behaviorphp,php butphp shouldphp neverphp bephp used
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$termsphp php php php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objects
php php php php php php*php php@paramphp arrayphp php$signsphp php php php Arrayphp ofphp signsphp.php php Signphp isphp booleanphp|nullphp.
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$termsphp php=php nullphp,php php$signsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$termsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp.phpphp'php;
php php php php php php php php php php php php ifphp php(countphp(php$termsphp)php php>php Zendphp_Searchphp_Lucenephp:php:getTermsPerQueryLimitphp(php)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Termsphp perphp queryphp limitphp isphp reachedphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_termsphp php=php php$termsphp;

php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php nullphp;
php php php php php php php php php php php php php/php/php Checkphp ifphp allphp termsphp arephp required
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$signsphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$signsphp asphp php$signphp php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php php$signsphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp aphp php$termphp php(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp)php tophp thisphp queryphp.
php php php php php php*
php php php php php php*php Thephp signphp isphp specifiedphp asphp:
php php php php php php*php php php php php TRUEphp php php-php termphp isphp required
php php php php php php*php php php php php FALSEphp php-php termphp isphp prohibited
php php php php php php*php php php php php NULLphp php php-php termphp isphp neitherphp prohibitedphp,php norphp required
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp php booleanphp|nullphp php$sign
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addTermphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$signphp php=php nullphp)php php{
php php php php php php php php ifphp php(php$signphp php!php=php=php truephp php|php|php php$thisphp-php>php_signsphp php!php=php=php nullphp)php php{php php php php php php php php/php/php Skipphp,php ifphp allphp termsphp arephp required
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{php php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp,php Ifphp allphp previousphp termsphp arephp required
php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$prevTermphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp[php]php php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_signsphp[php]php php=php php$signphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termsphp[php]php php=php php$termphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp,php thatphp allphp fieldsphp arephp qualified
php php php php php php php php php$allQualifiedphp php=php truephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$termphp-php>fieldphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$allQualifiedphp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$allQualifiedphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php transformphp multitermphp queryphp tophp booleanphp andphp applyphp rewritephp(php)php methodphp tophp subqueriesphp.php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(php$termphp)php;

php php php php php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$subqueryphp-php>rewritephp(php$indexphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php?php php truephp php:php php$thisphp-php>php_signsphp[php$termIdphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Optimizephp queryphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp optimizephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php$termsphp php=php php$thisphp-php>php_termsphp;
php php php php php php php php php$signsphp php=php php$thisphp-php>php_signsphp;

php php php php php php php php foreachphp php(php$termsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php!php$indexphp-php>hasTermphp(php$termphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signsphp php=php=php=php nullphp php php|php|php php php$signsphp[php$idphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Termphp isphp required
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Termphp isphp optionalphp orphp prohibited
php php php php php php php php php php php php php php php php php php php php php/php/php Removephp itphp fromphp termsphp andphp signsphp list
php php php php php php php php php php php php php php php php php php php php unsetphp(php$termsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp ifphp allphp presentedphp termsphp arephp prohibited
php php php php php php php php php$allProhibitedphp php=php truephp;
php php php php php php php php ifphp php(php$signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$allProhibitedphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$signsphp asphp php$signphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$allProhibitedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$allProhibitedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp makephp anphp optimizationphp forphp repeatedphp terms
php php php php php php php php php php*php php(theyphp mayphp havephp differentphp signsphp)
php php php php php php php php php php*php/

php php php php php php php php ifphp php(countphp(php$termsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp alreadyphp checkedphp,php thatphp itphp'sphp notphp aphp prohibitedphp term

php php php php php php php php php php php php php/php/php Itphp'sphp onephp termphp queryphp withphp onephp requiredphp orphp optionalphp element
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$termsphp)php)php;
php php php php php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$termsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}

php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php$termsphp,php php$signsphp)php;
php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;
php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp queryphp term
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTermsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_termsphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp termsphp signs
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSignsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_signsphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp weightphp forphp specifiedphp term
php php php php php php*
php php php php php php*php php@paramphp integerphp php$num
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Termphp php$weight
php php php php php php*php/
php php php php publicphp functionphp setWeightphp(php$numphp,php php$weightphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_weightsphp[php$numphp]php php=php php$weightphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php/
php php php php publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp/MultiTermphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_weightphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_MultiTermphp(php$thisphp,php php$readerphp)php;
php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatephp resultphp vectorphp forphp Conjunctionphp query
php php php php php php*php php(likephp php'php+somethingphp php+anotherphp'php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php/
php php php php privatephp functionphp php_calculateConjunctionResultphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resVectorphp php=php nullphp;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Orderphp termsphp byphp selectivity
php php php php php php php php php$docFreqsphp php=php arrayphp(php)php;
php php php php php php php php php$idsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$docFreqsphp[php]php php=php php$readerphp-php>docFreqphp(php$termphp)php;
php php php php php php php php php php php php php$idsphp[php]php php php php php php php=php php$idphp;php php/php/php Usedphp tophp keepphp originalphp orderphp forphp termsphp withphp thephp samephp selectivityphp andphp omitphp termsphp comparison
php php php php php php php php php}
php php php php php php php php arrayphp_multisortphp(php$docFreqsphp,php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$idsphp,php php php php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termsphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/DocsFilterphp.phpphp'php;
php php php php php php php php php$docsFilterphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$termDocsphp php=php php$readerphp-php>termDocsphp(php$termphp,php php$docsFilterphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php Treatphp lastphp retrievedphp docsphp vectorphp asphp aphp resultphp set
php php php php php php php php php/php/php php(filterphp collectsphp dataphp forphp otherphp termsphp)
php php php php php php php php php$thisphp-php>php_resVectorphp php=php arrayphp_flipphp(php$termDocsphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_termsFreqsphp[php$termIdphp]php php=php php$readerphp-php>termFreqsphp(php$termphp,php php$docsFilterphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php ksortphp(php$thisphp-php>php_resVectorphp,php SORTphp_NUMERICphp)php;
php php php php php php php php php/php/php Docsphp arephp returnedphp orderedphp.php Usedphp algorithmsphp doesnphp'tphp changephp elementsphp orderphp.
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatephp resultphp vectorphp forphp nonphp Conjunctionphp query
php php php php php php*php php(likephp php'php+somethingphp php-anotherphp'php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php/
php php php php privatephp functionphp php_calculateNonConjunctionResultphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php php$requiredVectorsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$requiredVectorsSizesphp php=php arrayphp(php)php;
php php php php php php php php php$requiredVectorsIdsphp php php php=php arrayphp(php)php;php php/php/php isphp usedphp tophp preventphp arraysphp comparison

php php php php php php php php php$optionalphp php php php=php arrayphp(php)php;
php php php php php php php php php$prohibitedphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$termDocsphp php=php arrayphp_flipphp(php$readerphp-php>termDocsphp(php$termphp)php)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp[php$termIdphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php/php/php required
php php php php php php php php php php php php php php php php php$requiredVectorsphp[php]php php php php php php php=php php$termDocsphp;
php php php php php php php php php php php php php php php php php$requiredVectorsSizesphp[php]php php=php countphp(php$termDocsphp)php;
php php php php php php php php php php php php php php php php php$requiredVectorsIdsphp[php]php php php php=php php$termIdphp;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>php_signsphp[php$termIdphp]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php/php prohibited
php php php php php php php php php php php php php php php php php/php/php arrayphp union
php php php php php php php php php php php php php php php php php$prohibitedphp php+php=php php$termDocsphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php neitherphp requiredphp,php norphp prohibited
php php php php php php php php php php php php php php php php php/php/php arrayphp union
php php php php php php php php php php php php php php php php php$optionalphp php+php=php php$termDocsphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_termsFreqsphp[php$termIdphp]php php=php php$readerphp-php>termFreqsphp(php$termphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php sortphp resvectorsphp inphp orderphp ofphp subqueryphp cardinalityphp increasing
php php php php php php php php arrayphp_multisortphp(php$requiredVectorsSizesphp,php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$requiredVectorsIdsphp,php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$requiredVectorsphp)php;

php php php php php php php php php$requiredphp php=php nullphp;
php php php php php php php php foreachphp php(php$requiredVectorsphp asphp php$nextResVectorphp)php php{
php php php php php php php php php php php php ifphp(php$requiredphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$requiredphp php=php php$nextResVectorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php$requiredphp php=php arrayphp_intersectphp_keyphp(php$requiredphp,php php$nextResVectorphp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Thisphp codephp isphp usedphp asphp workaroundphp forphp arrayphp_intersectphp_keyphp(php)php slownessphp problemphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$requiredphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$nextResVectorphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$updatedVectorphp[php$idphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$requiredphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$requiredphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Emptyphp resultphp setphp,php wephp donphp'tphp needphp tophp checkphp otherphp terms
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$requiredphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$requiredphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$optionalphp;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$prohibitedphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php/php/php php$thisphp-php>php_resVectorphp php=php arrayphp_diffphp_keyphp(php$thisphp-php>php_resVectorphp,php php$prohibitedphp)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Thisphp codephp isphp usedphp asphp workaroundphp forphp arrayphp_diffphp_keyphp(php)php slownessphp problemphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>php_resVectorphp)php <php countphp(php$prohibitedphp)php)php php{
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php php$thisphp-php>php_resVectorphp;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resVectorphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$prohibitedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$updatedVectorphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php php$thisphp-php>php_resVectorphp;
php php php php php php php php php php php php php php php php foreachphp php(php$prohibitedphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$updatedVectorphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ksortphp(php$thisphp-php>php_resVectorphp,php SORTphp_NUMERICphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp conjunctionphp queriesphp php(allphp termsphp arephp requiredphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_conjunctionScorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_coordphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_coordphp php=php php$readerphp-php>getSimilarityphp(php)php-php>coordphp(countphp(php$thisphp-php>php_termsphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php countphp(php$thisphp-php>php_termsphp)php php)php;
php php php php php php php php php}

php php php php php php php php php$scorephp php=php php0php.php0php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Wephp donphp'tphp needphp tophp checkphp thatphp termphp freqphp isphp notphp php0
php php php php php php php php php php php php php php*php Scorephp calculationphp isphp performedphp onlyphp forphp matchedphp docs
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$scorephp php+php=php php$readerphp-php>getSimilarityphp(php)php-php>tfphp(php$thisphp-php>php_termsFreqsphp[php$termIdphp]php[php$docIdphp]php)php php*
php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_weightsphp[php$termIdphp]php-php>getValuephp(php)php php*
php php php php php php php php php php php php php php php php php php php php php php php$readerphp-php>normphp(php$docIdphp,php php$termphp-php>fieldphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$scorephp php*php php$thisphp-php>php_coordphp php*php php$thisphp-php>getBoostphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp nonphp conjunctionphp queriesphp php(notphp allphp termsphp arephp requiredphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_nonConjunctionScorephp(php$docIdphp,php php$readerphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_coordphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_coordphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$maxCoordphp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_signsphp asphp php$signphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp php/php*php notphp prohibitedphp php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php$maxCoordphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php=php php$maxCoordphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_coordphp[php$countphp]php php=php php$readerphp-php>getSimilarityphp(php)php-php>coordphp(php$countphp,php php$maxCoordphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$scorephp php=php php0php.php0php;
php php php php php php php php php$matchedTermsphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp=php>php$termphp)php php{
php php php php php php php php php php php php php/php/php Checkphp ifphp termphp is
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp[php$termIdphp]php php!php=php=php falsephp php&php&php php php php php php php php php/php/php notphp prohibited
php php php php php php php php php php php php php php php php issetphp(php$thisphp-php>php_termsFreqsphp[php$termIdphp]php[php$docIdphp]php)php php/php/php matched
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$matchedTermsphp+php+php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Wephp donphp'tphp needphp tophp checkphp thatphp termphp freqphp isphp notphp php0
php php php php php php php php php php php php php php php php php php*php Scorephp calculationphp isphp performedphp onlyphp forphp matchedphp docs
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$scorephp php+php=
php php php php php php php php php php php php php php php php php php php php php php php$readerphp-php>getSimilarityphp(php)php-php>tfphp(php$thisphp-php>php_termsFreqsphp[php$termIdphp]php[php$docIdphp]php)php php*
php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_weightsphp[php$termIdphp]php-php>getValuephp(php)php php*
php php php php php php php php php php php php php php php php php php php php php php php$readerphp-php>normphp(php$docIdphp,php php$termphp-php>fieldphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$scorephp php*php php$thisphp-php>php_coordphp[php$matchedTermsphp]php php*php php$thisphp-php>getBoostphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php/
php php php php publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_calculateConjunctionResultphp(php$readerphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_calculateNonConjunctionResultphp(php$readerphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Initializephp weightphp ifphp itphp'sphp notphp donephp yet
php php php php php php php php php$thisphp-php>php_initWeightphp(php$readerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp matchedDocsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resVectorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_resVectorphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_conjunctionScorephp(php$docIdphp,php php$readerphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_nonConjunctionScorephp(php$docIdphp,php php$readerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getQueryTermsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_termsphp;
php php php php php php php php php}

php php php php php php php php php$termsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_signsphp asphp php$idphp php=php>php php$signphp)php php{
php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$termsphp[php]php php=php php$thisphp-php>php_termsphp[php$idphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$termsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php$wordsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termphp)php php{
php php php php php php php php php php php php php php php php php$wordsphp[php]php php=php php$termphp-php>textphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_signsphp asphp php$idphp php=php>php php$signphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$wordsphp[php]php php=php php$thisphp-php>php_termsphp[php$idphp]php-php>textphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$highlighterphp-php>highlightphp(php$wordsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php/php/php Itphp'sphp usedphp onlyphp forphp queryphp visualisationphp,php sophp wephp donphp'tphp carephp aboutphp charactersphp escaping

php php php php php php php php php$queryphp php=php php'php'php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$idphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp php|php|php php$thisphp-php>php_signsphp[php$idphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php+php'php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_signsphp[php$idphp]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php-php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$termphp-php>fieldphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php$termphp-php>fieldphp php.php php'php:php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$queryphp php.php=php php$termphp-php>textphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php=php php'php(php'php php.php php$queryphp php.php php'php)php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}

