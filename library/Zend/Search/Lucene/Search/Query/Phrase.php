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


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp.phpphp'php;


php/php*php*
php php*php Aphp Queryphp thatphp matchesphp documentsphp containingphp aphp particularphp sequencephp ofphp termsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrasephp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{
php php php php php/php*php*
php php php php php php*php Termsphp tophp findphp.
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objectsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termsphp;

php php php php php/php*php*
php php php php php php*php Termphp positionsphp php(relativephp positionsphp ofphp termsphp withinphp thephp phrasephp)php.
php php php php php php*php Arrayphp ofphp integers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_offsetsphp;

php php php php php/php*php*
php php php php php php*php Setsphp thephp numberphp ofphp otherphp wordsphp permittedphp betweenphp wordsphp inphp queryphp phrasephp.
php php php php php php*php Ifphp zerophp,php thenphp thisphp isphp anphp exactphp phrasephp searchphp.php php Forphp largerphp valuesphp thisphp works
php php php php php php*php likephp aphp WITHINphp orphp NEARphp operatorphp.
php php php php php php*
php php php php php php*php Thephp slopphp isphp inphp factphp anphp editphp-distancephp,php wherephp thephp unitsphp correspondphp to
php php php php php php*php movesphp ofphp termsphp inphp thephp queryphp phrasephp outphp ofphp positionphp.php php Forphp examplephp,php tophp switch
php php php php php php*php thephp orderphp ofphp twophp wordsphp requiresphp twophp movesphp php(thephp firstphp movephp placesphp thephp words
php php php php php php*php atopphp onephp anotherphp)php,php sophp tophp permitphp rephp-orderingsphp ofphp phrasesphp,php thephp slopphp mustphp be
php php php php php php*php atphp leastphp twophp.
php php php php php php*php Morephp exactphp matchesphp arephp scoredphp higherphp thanphp sloppierphp matchesphp,php thusphp search
php php php php php php*php resultsphp arephp sortedphp byphp exactnessphp.
php php php php php php*
php php php php php php*php Thephp slopphp isphp zerophp byphp defaultphp,php requiringphp exactphp matchesphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_slopphp;

php php php php php/php*php*
php php php php php php*php Resultphp vectorphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_resVectorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Termsphp positionsphp vectorsphp.
php php php php php php*php Arrayphp ofphp Arraysphp:
php php php php php php*php termphp1Idphp php=php>php php(docIdphp php=php>php arrayphp(php posphp1php,php posphp2php,php php.php.php.php php)php,php php.php.php.php)
php php php php php php*php termphp2Idphp php=php>php php(docIdphp php=php>php arrayphp(php posphp1php,php posphp2php,php php.php.php.php php)php,php php.php.php.php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termsPositionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Createphp aphp newphp prasephp queryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldphp php php php Fieldphp tophp searchphp.
php php php php php php*php php@paramphp arrayphp php php$termsphp php php php Termsphp tophp searchphp Arrayphp ofphp stringsphp.
php php php php php php*php php@paramphp arrayphp php php$offsetsphp php Relativephp termphp positionsphp.php Arrayphp ofphp integersphp.
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$termsphp php=php nullphp,php php$offsetsphp php=php nullphp,php php$fieldphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_slopphp php=php php0php;

php php php php php php php php ifphp php(isphp_arrayphp(php$termsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_termsphp php=php arrayphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$termsphp asphp php$termIdphp php=php>php php$termTextphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_termsphp[php$termIdphp]php php=php php(php$fieldphp php!php=php=php nullphp)php?php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$termTextphp,php php$fieldphp)php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$termTextphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$termsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_termsphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'termsphp argumentphp mustphp bephp arrayphp ofphp stringsphp orphp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$offsetsphp)php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php!php=php countphp(php$offsetsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'termsphp andphp offsetsphp argumentsphp mustphp havephp thephp samephp sizephp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_offsetsphp php=php php$offsetsphp;
php php php php php php php php php}php elsephp ifphp php(php$offsetsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_offsetsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php$positionphp php=php countphp(php$thisphp-php>php_offsetsphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_offsetsphp[php$termIdphp]php php=php php$positionphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'offsetsphp argumentphp mustphp bephp arrayphp ofphp stringsphp orphp nullphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp slop
php php php php php php*
php php php php php php*php php@paramphp integerphp php$slop
php php php php php php*php/
php php php php publicphp functionphp setSlopphp(php$slopphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_slopphp php=php php$slopphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp slop
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getSlopphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slopphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp termphp tophp thephp endphp ofphp thephp queryphp phrasephp.
php php php php php php*php Thephp relativephp positionphp ofphp thephp termphp isphp specifiedphp explicitlyphp orphp thephp onephp immediately
php php php php php php*php afterphp thephp lastphp termphp addedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp integerphp php$position
php php php php php php*php/
php php php php publicphp functionphp addTermphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$positionphp php=php nullphp)php php{
php php php php php php php php ifphp php(php(countphp(php$thisphp-php>php_termsphp)php php!php=php php0php)php&php&php(endphp(php$thisphp-php>php_termsphp)php-php>fieldphp php!php=php php$termphp-php>fieldphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Allphp phrasephp termsphp mustphp bephp inphp thephp samephp fieldphp:php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$termphp-php>fieldphp php.php php'php:php'php php.php php$termphp-php>textphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termsphp[php]php php=php php$termphp;
php php php php php php php php ifphp php(php$positionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_offsetsphp[php]php php=php php$positionphp;
php php php php php php php php php}php elsephp ifphp php(countphp(php$thisphp-php>php_offsetsphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_offsetsphp[php]php php=php endphp(php$thisphp-php>php_offsetsphp)php php+php php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_offsetsphp[php]php php=php php0php;
php php php php php php php php php}
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
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_termsphp[php0php]php-php>fieldphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php foreachphp php(php$indexphp-php>getFieldNamesphp(truephp)php asphp php$fieldNamephp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrasephp(php)php;
php php php php php php php php php php php php php php php php php$subqueryphp-php>setSlopphp(php$thisphp-php>getSlopphp(php)php)php;

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php php php php php$qualifiedTermphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$termphp-php>textphp,php php$fieldNamephp)php;

php php php php php php php php php php php php php php php php php php php php php$subqueryphp-php>addTermphp(php$qualifiedTermphp,php php$thisphp-php>php_offsetsphp[php$termIdphp]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$subqueryphp)php;
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
php php php php php php php php php/php/php Checkphp,php thatphp indexphp containsphp allphp phrasephp terms
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termphp)php php{
php php php php php php php php php php php php ifphp php(php!php$indexphp-php>hasTermphp(php$termphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp onephp termphp query
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$thisphp-php>php_termsphp)php)php;
php php php php php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}


php php php php php php php php returnphp php$thisphp;
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
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp/Phrasephp.phpphp'php;
php php php php php php php php php$thisphp-php>php_weightphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Phrasephp(php$thisphp,php php$readerphp)php;
php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp exactphp phrasephp queriesphp php(termsphp sequencephp isphp fixedphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_exactPhraseFreqphp(php$docIdphp)
php php php php php{
php php php php php php php php php$freqphp php=php php0php;

php php php php php php php php php/php/php Termphp Idphp withphp lowestphp cardinality
php php php php php php php php php$lowCardTermIdphp php=php nullphp;

php php php php php php php php php/php/php Calculatephp php$lowCardTermId
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$lowCardTermIdphp php=php=php=php nullphp php|php|
php php php php php php php php php php php php php php php php countphp(php$thisphp-php>php_termsPositionsphp[php$termIdphp]php[php$docIdphp]php)php php<
php php php php php php php php php php php php php php php php countphp(php$thisphp-php>php_termsPositionsphp[php$lowCardTermIdphp]php[php$docIdphp]php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php$lowCardTermIdphp php=php php$termIdphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Walkphp throughphp positionsphp ofphp thephp termphp withphp lowestphp cardinality
php php php php php php php php foreachphp php(php$thisphp-php>php_termsPositionsphp[php$lowCardTermIdphp]php[php$docIdphp]php asphp php$lowCardPosphp)php php{
php php php php php php php php php php php php php/php/php Wephp expectphp phrasephp tophp bephp found
php php php php php php php php php php php php php$freqphp+php+php;

php php php php php php php php php php php php php/php/php Walkphp throughphp otherphp terms
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$termIdphp php!php=php php$lowCardTermIdphp)php php{
php php php php php php php php php php php php php php php php php php php php php$expectedPositionphp php=php php$lowCardPosphp php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_offsetsphp[php$termIdphp]php php-
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_offsetsphp[php$lowCardTermIdphp]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$expectedPositionphp,php php$thisphp-php>php_termsPositionsphp[php$termIdphp]php[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$freqphp-php-php;php php php/php/php Phrasephp wasnphp'tphp foundphp.
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$freqphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp sloppyphp phrasephp queriesphp php(termsphp sequencephp isphp fixedphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_sloppyPhraseFreqphp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php php$freqphp php=php php0php;

php php php php php php php php php$phraseQueuephp php=php arrayphp(php)php;
php php php php php php php php php$phraseQueuephp[php0php]php php=php arrayphp(php)php;php php/php/php emptyphp phrase
php php php php php php php php php$lastTermphp php=php nullphp;

php php php php php php php php php/php/php Walkphp throughphp thephp termsphp tophp createphp phrasesphp.
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$queueSizephp php=php countphp(php$phraseQueuephp)php;
php php php php php php php php php php php php php$firstPassphp php=php truephp;

php php php php php php php php php php php php php/php/php Walkphp throughphp thephp termphp positionsphp.
php php php php php php php php php php php php php/php/php Eachphp termphp positionphp producesphp aphp setphp ofphp phrasesphp.
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsPositionsphp[php$termIdphp]php[php$docIdphp]php asphp php$termPositionphp php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$firstPassphp)php php{
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$queueSizephp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$phraseQueuephp[php$countphp]php[php$termIdphp]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$queueSizephp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$lastTermphp php!php=php=php nullphp php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php absphp(php php$termPositionphp php-php php$phraseQueuephp[php$countphp]php[php$lastTermphp]php php-
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_offsetsphp[php$termIdphp]php php-php php$thisphp-php>php_offsetsphp[php$lastTermphp]php)php)php php>php php$thisphp-php>php_slopphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$newPhraseIdphp php=php countphp(php$phraseQueuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$phraseQueuephp[php$newPhraseIdphp]php php php php php php php php php php php=php php$phraseQueuephp[php$countphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$phraseQueuephp[php$newPhraseIdphp]php[php$termIdphp]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$firstPassphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$lastTermphp php=php php$termIdphp;
php php php php php php php php php}


php php php php php php php php foreachphp php(php$phraseQueuephp asphp php$phrasePosphp)php php{
php php php php php php php php php php php php php$minDistancephp php=php nullphp;

php php php php php php php php php php php php forphp php(php$shiftphp php=php php-php$thisphp-php>php_slopphp;php php$shiftphp <php=php php$thisphp-php>php_slopphp;php php$shiftphp+php+php)php php{
php php php php php php php php php php php php php php php php php$distancephp php=php php0php;
php php php php php php php php php php php php php php php php php$startphp php=php resetphp(php$phrasePosphp)php php-php resetphp(php$thisphp-php>php_offsetsphp)php php+php php$shiftphp;

php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php php php php php$distancephp php+php=php absphp(php$phrasePosphp[php$termIdphp]php php-php php$thisphp-php>php_offsetsphp[php$termIdphp]php php-php php$startphp)php;

php php php php php php php php php php php php php php php php php php php php ifphp(php$distancephp php>php php$thisphp-php>php_slopphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$minDistancephp php=php=php=php nullphp php|php|php php$distancephp <php php$minDistancephp)php php{
php php php php php php php php php php php php php php php php php php php php php$minDistancephp php=php php$distancephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$minDistancephp <php=php php$thisphp-php>php_slopphp)php php{
php php php php php php php php php php php php php php php php php$freqphp php+php=php php$readerphp-php>getSimilarityphp(php)php-php>sloppyFreqphp(php$minDistancephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$freqphp;
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
php php php php php php php php php$thisphp-php>php_resVectorphp php=php nullphp;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$resVectorsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$resVectorsSizesphp php=php arrayphp(php)php;
php php php php php php php php php$resVectorsIdsphp php php php=php arrayphp(php)php;php php/php/php isphp usedphp tophp preventphp arraysphp comparison
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$resVectorsphp[php]php php php php php php php=php arrayphp_flipphp(php$readerphp-php>termDocsphp(php$termphp)php)php;
php php php php php php php php php php php php php$resVectorsSizesphp[php]php php=php countphp(endphp(php$resVectorsphp)php)php;
php php php php php php php php php php php php php$resVectorsIdsphp[php]php php php php=php php$termIdphp;

php php php php php php php php php php php php php$thisphp-php>php_termsPositionsphp[php$termIdphp]php php=php php$readerphp-php>termPositionsphp(php$termphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php sortphp resvectorsphp inphp orderphp ofphp subqueryphp cardinalityphp increasing
php php php php php php php php arrayphp_multisortphp(php$resVectorsSizesphp,php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$resVectorsIdsphp,php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$resVectorsphp)php;

php php php php php php php php foreachphp php(php$resVectorsphp asphp php$nextResVectorphp)php php{
php php php php php php php php php php php php ifphp(php$thisphp-php>php_resVectorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$nextResVectorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php$thisphp-php>php_resVectorphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_resVectorphp,php php$nextResVectorphp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Thisphp codephp isphp usedphp asphp workaroundphp forphp arrayphp_intersectphp_keyphp(php)php slownessphp problemphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resVectorphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$nextResVectorphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$updatedVectorphp[php$idphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>php_resVectorphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Emptyphp resultphp setphp,php wephp donphp'tphp needphp tophp checkphp otherphp terms
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php ksortphp(php$thisphp-php>php_resVectorphp,php SORTphp_NUMERICphp)php;
php php php php php php php php php/php/php Docsphp arephp returnedphp orderedphp.php Usedphp algorithmphp doesnphp'tphp changephp elementsphp orderphp.

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
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_slopphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$freqphp php=php php$thisphp-php>php_exactPhraseFreqphp(php$docIdphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$freqphp php=php php$thisphp-php>php_sloppyPhraseFreqphp(php$docIdphp,php php$readerphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$freqphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$tfphp php=php php$readerphp-php>getSimilarityphp(php)php-php>tfphp(php$freqphp)php;
php php php php php php php php php php php php php php php php php$weightphp php=php php$thisphp-php>php_weightphp-php>getValuephp(php)php;
php php php php php php php php php php php php php php php php php$normphp php=php php$readerphp-php>normphp(php$docIdphp,php resetphp(php$thisphp-php>php_termsphp)php-php>fieldphp)php;

php php php php php php php php php php php php php php php php returnphp php$tfphp php*php php$weightphp php*php php$normphp php*php php$thisphp-php>getBoostphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Includedphp inphp resultphp,php butphp culculatedphp freqphp isphp zero
php php php php php php php php php php php php returnphp php0php;
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
php php php php php php php php returnphp php$thisphp-php>php_termsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php$wordsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$termphp)php php{
php php php php php php php php php php php php php$wordsphp[php]php php=php php$termphp-php>textphp;
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
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_termsphp[php0php]php)php php&php&php php$thisphp-php>php_termsphp[php0php]php-php>fieldphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$queryphp php=php php$thisphp-php>php_termsphp[php0php]php-php>fieldphp php.php php'php:php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$queryphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$queryphp php.php=php php'php"php'php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$idphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$queryphp php.php=php php$termphp-php>textphp;
php php php php php php php php php}

php php php php php php php php php$queryphp php.php=php php'php"php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_slopphp php!php=php php0php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php'php~php'php php.php php$thisphp-php>php_slopphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}

