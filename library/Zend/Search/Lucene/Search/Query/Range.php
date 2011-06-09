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
php php*php php@versionphp php php php php$Idphp:php Rangephp.phpphp php2php2php9php8php7php php2php0php1php0php-php0php9php-php2php1php php1php0php:php3php9php:php5php3Zphp alexanderphp php$
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
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Rangephp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{
php php php php php/php*php*
php php php php php php*php Lowerphp termphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_lowerTermphp;

php php php php php/php*php*
php php php php php php*php Upperphp termphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_upperTermphp;


php php php php php/php*php*
php php php php php php*php Searchphp field
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_fieldphp;

php php php php php/php*php*
php php php php php php*php Inclusive
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_inclusivephp;

php php php php php/php*php*
php php php php php php*php Matchedphp termsphp.
php php php php php php*
php php php php php php*php Matchedphp termsphp listphp.
php php php php php php*php Itphp'sphp filledphp duringphp thephp searchphp php(rewritephp operationphp)php andphp mayphp bephp usedphp forphp searchphp result
php php php php php php*php postphp-processing
php php php php php php*
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_matchesphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Rangephp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|nullphp php$lowerTerm
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|nullphp php$upperTerm
php php php php php php*php php@paramphp booleanphp php$inclusive
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$lowerTermphp,php php$upperTermphp,php php$inclusivephp)
php php php php php{
php php php php php php php php ifphp php(php$lowerTermphp php=php=php=php nullphp php php&php&php php php$upperTermphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Atphp leastphp onephp termphp mustphp bephp nonphp-nullphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$lowerTermphp php!php=php=php nullphp php php&php&php php php$upperTermphp php!php=php=php nullphp php php&php&php php php$lowerTermphp-php>fieldphp php!php=php php$upperTermphp-php>fieldphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Bothphp termsphp mustphp bephp forphp thephp samephp fieldphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fieldphp php php php php php=php php(php$lowerTermphp php!php=php=php nullphp)php?php php$lowerTermphp-php>fieldphp php:php php$upperTermphp-php>fieldphp;
php php php php php php php php php$thisphp-php>php_lowerTermphp php=php php$lowerTermphp;
php php php php php php php php php$thisphp-php>php_upperTermphp php=php php$upperTermphp;
php php php php php php php php php$thisphp-php>php_inclusivephp php=php php$inclusivephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp queryphp fieldphp name
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fieldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp lowerphp term
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp getLowerTermphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lowerTermphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp upperphp term
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp getUpperTermphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_upperTermphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp upperphp term
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isInclusivephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_inclusivephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_fieldphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Searchphp throughphp allphp fields
php php php php php php php php php php php php php$fieldsphp php=php php$indexphp-php>getFieldNamesphp(truephp php/php*php indexedphp fieldsphp listphp php*php/php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fieldsphp php=php arrayphp(php$thisphp-php>php_fieldphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp.phpphp'php;
php php php php php php php php php$maxTermsphp php=php Zendphp_Searchphp_Lucenephp:php:getTermsPerQueryLimitphp(php)php;
php php php php php php php php foreachphp php(php$fieldsphp asphp php$fieldphp)php php{
php php php php php php php php php php php php php$indexphp-php>resetTermsStreamphp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_lowerTermphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$lowerTermphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$thisphp-php>php_lowerTermphp-php>textphp,php php$fieldphp)php;

php php php php php php php php php php php php php php php php php$indexphp-php>skipTophp(php$lowerTermphp)php;

php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_inclusivephp php php&php&
php php php php php php php php php php php php php php php php php php php php php$indexphp-php>currentTermphp(php)php php=php=php php$lowerTermphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Skipphp lowerphp term
php php php php php php php php php php php php php php php php php php php php php$indexphp-php>nextTermphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$indexphp-php>skipTophp(newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php'php'php,php php$fieldphp)php)php;
php php php php php php php php php php php php php}


php php php php php php php php php php php php ifphp php(php$thisphp-php>php_upperTermphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php/php Walkphp upphp tophp thephp upperphp term
php php php php php php php php php php php php php php php php php$upperTermphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$thisphp-php>php_upperTermphp-php>textphp,php php$fieldphp)php;

php php php php php php php php php php php php php php php php whilephp php(php$indexphp-php>currentTermphp(php)php php!php=php=php nullphp php php php php php php php php php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php$indexphp-php>currentTermphp(php)php-php>fieldphp php=php=php php$fieldphp php php&php&
php php php php php php php php php php php php php php php php php php php php php php php strcmpphp(php$indexphp-php>currentTermphp(php)php-php>textphp,php php$upperTermphp-php>textphp)php <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp[php]php php=php php$indexphp-php>currentTermphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$maxTermsphp php!php=php php0php php php&php&php php countphp(php$thisphp-php>php_matchesphp)php php>php php$maxTermsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Termsphp perphp queryphp limitphp isphp reachedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$indexphp-php>nextTermphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_inclusivephp php php&php&php php php$indexphp-php>currentTermphp(php)php php=php=php php$upperTermphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Includephp upperphp termphp intophp result
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp[php]php php=php php$upperTermphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Walkphp upphp tophp thephp endphp ofphp fieldphp data
php php php php php php php php php php php php php php php php whilephp php(php$indexphp-php>currentTermphp(php)php php!php=php=php nullphp php php&php&php php php$indexphp-php>currentTermphp(php)php-php>fieldphp php=php=php php$fieldphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp[php]php php=php php$indexphp-php>currentTermphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$maxTermsphp php!php=php php0php php php&php&php php countphp(php$thisphp-php>php_matchesphp)php php>php php$maxTermsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Termsphp perphp queryphp limitphp isphp reachedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$indexphp-php>nextTermphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$indexphp-php>closeTermsStreamphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_matchesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$thisphp-php>php_matchesphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$thisphp-php>php_matchesphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$rewrittenQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php)php;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_matchesphp asphp php$matchedTermphp)php php{
php php php php php php php php php php php php php php php php php$rewrittenQueryphp-php>addTermphp(php$matchedTermphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$rewrittenQueryphp;
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
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Rangephp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getQueryTermsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_matchesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Searchphp orphp rewritephp operationsphp havephp tophp bephp performedphp beforephp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_matchesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Rangephp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Rangephp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp matchedDocsphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Rangephp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Rangephp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php$wordsphp php=php arrayphp(php)php;

php php php php php php php php php$docBodyphp php=php php$highlighterphp-php>getDocumentphp(php)php-php>getFieldUtfphp8Valuephp(php'bodyphp'php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$docBodyphp,php php'UTFphp-php8php'php)php;

php php php php php php php php php$lowerTermTextphp php=php php(php$thisphp-php>php_lowerTermphp php!php=php=php nullphp)php?php php$thisphp-php>php_lowerTermphp-php>textphp php:php nullphp;
php php php php php php php php php$upperTermTextphp php=php php(php$thisphp-php>php_upperTermphp php!php=php=php nullphp)php?php php$thisphp-php>php_upperTermphp-php>textphp php:php nullphp;

php php php php php php php php ifphp php(php$thisphp-php>php_inclusivephp)php php{
php php php php php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php$termTextphp php=php php$tokenphp-php>getTermTextphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php(php$lowerTermTextphp php=php=php nullphp php php|php|php php php$lowerTermTextphp <php=php php$termTextphp)php php php&php&
php php php php php php php php php php php php php php php php php php php php php(php$upperTermTextphp php=php=php nullphp php php|php|php php php$termTextphp <php=php php$upperTermTextphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$wordsphp[php]php php=php php$termTextphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php$termTextphp php=php php$tokenphp-php>getTermTextphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php(php$lowerTermTextphp php=php=php nullphp php php|php|php php php$lowerTermTextphp <php php$termTextphp)php php php&php&
php php php php php php php php php php php php php php php php php php php php php(php$upperTermTextphp php=php=php nullphp php php|php|php php php$termTextphp <php php$upperTermTextphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$wordsphp[php]php php=php php$termTextphp;
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
php php php php php php php php returnphp php(php(php$thisphp-php>php_fieldphp php=php=php=php nullphp)php?php php'php'php php:php php$thisphp-php>php_fieldphp php.php php'php:php'php)
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>php_inclusivephp)php?php php'php[php'php php:php php'php{php'php)
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>php_lowerTermphp php!php=php=php nullphp)php?php php php$thisphp-php>php_lowerTermphp-php>textphp php:php php'nullphp'php)
php php php php php php php php php php php php php php.php php'php TOphp php'
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>php_upperTermphp php!php=php=php nullphp)php?php php php$thisphp-php>php_upperTermphp-php>textphp php:php php'nullphp'php)
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>php_inclusivephp)php?php php'php]php'php php:php php'php}php'php)
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php?php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php php:php php'php'php)php;
php php php php php}
php}

